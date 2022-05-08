<?php

namespace App\Http\Controllers;

use App\Exports\DietLogExport;
use App\Imports\DietLogImport;
use App\Models\DietLog;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class NutritionManagementController extends Controller
{
    // 營養管理系統首頁
    public function get_nutritionManagement()
    {
        $queries = DB::table('patients')->get();
        return view('pages.nutritionManagement.nutritionManagement',compact('queries'));
    }
    // 取得資料查詢資料用
    public function get_nutritionManagement_data(Request $request){
        try{
            $data = DB::table('patients')
                ->where($request->search_from,'like','%'.$request->search_data.'%')
                ->get();
            return $data;
        }catch (\Throwable $e){
            report($e);
            return false;
        }
    }
    // 餐序列表
    public function get_orderList(Request $request)
    {
        // patient_id
        $id = $request->id;
        //餐敘為母表
        $order_lists = DB::table('meal_order')->where('patient_id',$id)->get();
        //在母表中插入子表diet_log
        foreach ($order_lists as $row)
        {
            $row->diet_logs=DB::table('diet_log')->where('task_id',$row->id)->get();
        }
        return view('pages.nutritionManagement.orderList',compact('id','order_lists'));
    }
    // 詳細餐序
    public function post_orderList_detail(Request $request)
    {

        //圖片路徑
        $image_urls = [];
        $image_array = DB::table('meal_order')
            ->where('id', $request->task_id)
            ->select('img_src')->first();
        if($image_array)
        {
            $image_array = explode(',', $image_array->img_src);
            foreach ($image_array as $image_id) {
                if ($image_id) {
                    $path = DB::table('images')
                        ->where('image_id', $image_id)
                        ->select('file_path')->first();
                    $path = asset('/storage/' . $path->file_path);

                    array_push($image_urls, $path);
                }
            }
        }

        // 母表
        $order_list = DB::table('meal_order')->where('id', $request->task_id)->first();
        // 子表
        $diet_logs = DB::table('diet_log')->where('task_id', $request->task_id)->get();
        return [$order_list, $diet_logs,$image_urls];
    }


    // 取得資料查詢資料用
    public function get_orderList_data(Request $request){

        try{
            $data = DB::table('meal_order')
                ->where('patient_id',$request->patient_id)
                ->where($request->search_from,'like','%'.$request->search_data.'%')
                ->get();
            return $data;
        }catch (\Throwable $e){
            report($e);
            return false;
        }
    }
    //新增
    public function store_orderList(Request $request)
    {

        $query = $request->except('_token');
        //取得今日日期，並依照日期建立資料夾
        $date = date('Y-m-d');
        //圖片們
        $image_list = [];

        try{
            //取得傳入的檔案
            $files = $request->file();

            foreach ($files as $file) {
                //將傳入的檔案儲存至資料夾，
                $image_path = $file->store("{$date}", "public");

                //將檔案存入local，並取得table_id
                $image_id = DB::table('images')->insertGetId([
                    'file_path' => $image_path,
                    'created_at' => Carbon::now(),
                ]);

                array_push($image_list, $image_id);
            }
            DB::table('meal_order')
                ->insert([
                    'patient_id'=>$query['patient_id'],
                    'meal_order'=>$query['meal_name'],
                    'img_src' => implode(',', $image_list),
                    'created_at'=>Carbon::now(),
                ]);
            return 'success';
        }catch (\Throwable $e)
        {
            report($e);
//            dd(1234);
            return 'error';
        }

//        $query = $request->except('_token');
//        try{
//            DB::table('meal_order')
//                ->insert([
//                    'patient_id'=>$query['patient_id'],
//                    'meal_order'=>$query['order'],
//                    'created_at'=>Carbon::now(),
//                ]);
//        }catch (\Throwable $e)
//        {
//            report($e);
//            return $e;
//        }
//        return redirect()->back();
    }

    // 刪除
    public function delete_orderList(Request $request)
    {
        try {
            $query = DB::table('meal_order')->where('id',$request->id);
            $query->delete();
        }catch (\Throwable $e)
        {
            report($e);
            return false;
        }
        return redirect()->back();
    }
    // 修改
    public function post_orderList_patch_page(Request $request)
    {
        $query = DB::table('meal_order')->where('id',$request->id)->first();
        return [$query->meal_order,$request->id];
    }

    public function patch_orderList(Request $request)
    {
//        dd($request);
        try {
            DB::table('meal_order')->where('id',$request->id)->update([
                'meal_order'=>$request->order,
                'updated_at'=>Carbon::now(),
            ]);

            return redirect()->back();
        }catch (\Throwable $e){
            report($e);
        }
    }

    public function get_orderList_comment_patch_page(Request $request)
    {
        $count = DB::table('meal_order_comment')->where('orderList_id',$request->id)->count();
        if($count){
            $query = DB::table('meal_order_comment')->where('orderList_id',$request->id)->first();
            return [$count,$query,$request->id];
        }
        else{
            return [$count,$request->id];
        }
    }

    public function get_orderList_comment_patch(Request $request)
    {
        $count = DB::table('meal_order_comment')->where('orderList_id',$request->id)->count();
        try{
            if($count){
                DB::table('meal_order_comment')
                    ->update([
                        'orderList_id'=>$request->id,
                        'carbohydrate'=>$request->orderList[0],
                        'protein'=>$request->orderList[1],
                        'fat'=>$request->orderList[2],
                        'cal'=>$request->orderList[3],
                        'na'=>$request->orderList[4],
                        'k'=>$request->orderList[5],
                        'ca'=>$request->orderList[6],
                        'mg'=>$request->orderList[7],
                        'vit_b12'=>$request->orderList[8],
                        'vit_d'=>$request->orderList[9],
                        'vit_e'=>$request->orderList[10],
                        'updated_at'=>Carbon::now(),
                    ]);
            }else{
                DB::table('meal_order_comment')
                    ->insert([
                        'orderList_id'=>$request->id,
                        'carbohydrate'=>$request->orderList[0],
                        'protein'=>$request->orderList[1],
                        'fat'=>$request->orderList[2],
                        'cal'=>$request->orderList[3],
                        'na'=>$request->orderList[4],
                        'k'=>$request->orderList[5],
                        'ca'=>$request->orderList[6],
                        'mg'=>$request->orderList[7],
                        'vit_b12'=>$request->orderList[8],
                        'vit_d'=>$request->orderList[9],
                        'vit_e'=>$request->orderList[10],
                        'created_at'=>Carbon::now(),
                    ]);
            }
            return 'success';
        }catch (\Exception $exception){
            return $exception;
        }
    }
    // 飲食紀錄
    public function get_dietLog(Request $request)
    {
        if(Session::has('patient_id') && Session::has('task_id')){
            Session::forget('patient_id');
            Session::forget('task_id');
            Session::put('patient_id', $request->patient_id);
            Session::put('task_id', $request->task_id);
        }else{
            Session::put('patient_id', $request->patient_id);
            Session::put('task_id', $request->task_id);
        }
//        $meal_orders =
        $queries = DB::table('diet_log')->where('patient_id',$request->patient_id)->where('task_id',$request->task_id)->get();
//        foreach ($queries as $q)
//        {
//
//        }
//        dd($queries);
        $meal_orders = DB::table('meal_order')->where('id', $request->task_id)->first();
        $patient_data = ['patient_id' => $request->patient_id,'task_id'=>$request->task_id];
        return view('pages.nutritionManagement.dietLog',compact('queries','patient_data','meal_orders'));
    }
    // 取得資料查詢資料用
    public function get_dietLog_data(Request $request)
    {
        try{
            $data = DB::table('diet_log')
                ->where('task_id',$request->task_id)
                ->where('patient_id',$request->patient_id)
                ->where($request->search_from,'like','%'.$request->search_data.'%')
                ->get();
            return $data;
        }catch (\Throwable $e){
            report($e);
            return false;
        }
    }
    // 刪除一筆飲食紀錄
    public function delete_dietLog(Request $request)
    {
        try {
            $query = DB::table('diet_log')->where('id',$request->id);
            $query->delete();
        }catch (\Throwable $e)
        {
            report($e);
            return false;
        }
        return redirect()->back();
    }

    // 儲存餐序資訊
    public function store_orderList_detail(Request $request)
    {
        try {
            $task_id = $request->get('task_id'); //task_id
            $record_data = $request->get('record_data'); //Record_data
            $detail_rows = $request->get('detail_rows'); //RecordDetails
            //record_id 空值判斷
            if($task_id == null) return 'no record id';
            //detail_rows 判斷
            if($detail_rows == null) return 'no detail rows';

            //修改record data(藥單資訊)
            DB::table('meal_order')
                ->where('id', $task_id)
                ->update([
                    'updated_at' => $record_data['updated_at'],
                ]);

            //先將對應Record_id的資料清除
            DB::table('diet_log')
                ->where('task_id', $task_id)
                ->delete();

            foreach ($detail_rows as $row) {
                //將收到的更改資料寫入
                DB::table('diet_log')
                    ->insert([
                        'task_id' => $task_id,
                        'meal_name' => $row['meal_name'],
                        'quantity' => $row['quantity'],
                        'patient_id' => $row['patient_id']
                    ]);
            }

            return 'success';
        } catch (Exception $exception) {
            return $exception;
        }


    }

    // 新增一筆飲食紀錄
//    public function store_dietLog(Request $request)
//    {
//        $query = $request->except('_token');
//        try{
//            DB::table('diet_log')
//                ->insert([
//                'task_id' => $query['task_id'],
//                'patient_id'=>$query['patient_id'],
//                'quantity'=>$query['size'],
//                'created_at'=>Carbon::now(),
//                'meal_name'=>$query['meal_name'],
//            ]);
//        }catch (\Throwable $e)
//        {
//            report($e);
//            return $e;
//        }
//        return redirect()->back();
//    }

    // 新增一筆飲食紀錄
    public function store_dietLog(Request $request)
    {
        try {
            //取得今日日期，並依照日期建立資料夾
            $date = date('Y-m-d');
            //圖片們
            $image_list = [];

            //取得傳入的檔案
            $files = $request->file();
            if($files){
                foreach ($files as $file) {
                    //將傳入的檔案儲存至資料夾，
                    $image_path = $file->store("{$date}", "public");

                    //將檔案存入local，並取得table_id
                    $image_id = DB::table('images')->insertGetId([
                        'file_path' => $image_path,
                        'created_at' => Carbon::now(),
                    ]);

                    array_push($image_list, $image_id);
                }
            }

            DB::table('diet_log')->insert([
//                'patient_id'=>$query['patient_id'],
                'meal_name' => $request->get('meal_name'),
                'quantity' => $request->get('quantity'),
                'task_id' => $request->get('task_id'),
                'patient_id' => $request->get('patient_id'),
                'img_src' => implode(',',$image_list),
                'created_at' => Carbon::now(),
            ]);

            return 'success';
        } catch (Exception $exception) {
            return $exception;
        }

        return 'success';
    }

    public function post_diet_log_excel_upload(Request $request)
    {
        $file = $request->file('upload_file');
        Excel::import(new DietLogImport, $file);
        return 'success';
    }

    public function get_diet_log_excel_download()
    {
        return Excel::download(new DietLogExport,'excel_download.xlsx');
    }

    public function get_diet_log_excel_example_download()
    {
        return response()->download(public_path('assets\files\excel_example_download.xlsx'));
    }

    public function post_dietLog_patch_page(Request $request)
    {
        $query = DB::table('diet_log')->where('id',$request->id)->first();
        return [$query->quantity,$query->id,$query->meal_name];

    }

    public function patch_dietLog(Request $request)
    {

        try {
            DB::table('diet_log')->where('id',$request->patch_id)->update([
                'meal_name'=>$request->patch_meal_name,
                'quantity'=>$request->patch_size,
                'updated_at'=>Carbon::now(),
            ]);

            return redirect()->back();
        }catch (\Throwable $e){
            report($e);
        }
    }

    public function post_dishes_patch_page(Request $request)
    {
        $count = DB::table('dishes')->where('diet_log_id',$request->id)->count();
        if($count){
            $query = DB::table('dishes')->where('diet_log_id',$request->id)->first();
            return [$count,$query,$request->id];
        }
        else{
            return [$count,$request->id];
        }

    }

    public function post_dishes_patch(Request $request)
    {
        $count = DB::table('dishes')->where('diet_log_id',$request->id)->count();
        try{
            if($count){
                DB::table('dishes')
                    ->update([
                        'diet_log_id'=>$request->id,
                        'carbohydrate'=>$request->dishes[0],
                        'protein'=>$request->dishes[1],
                        'fat'=>$request->dishes[2],
                        'cal'=>$request->dishes[3],
                        'na'=>$request->dishes[4],
                        'k'=>$request->dishes[5],
                        'ca'=>$request->dishes[6],
                        'mg'=>$request->dishes[7],
                        'vit_b12'=>$request->dishes[8],
                        'vit_d'=>$request->dishes[9],
                        'vit_e'=>$request->dishes[10],
                        'updated_at'=>Carbon::now(),
                    ]);
            }else{
                DB::table('dishes')
                    ->insert([
                        'diet_log_id'=>$request->id,
                        'carbohydrate'=>$request->dishes[0],
                        'protein'=>$request->dishes[1],
                        'fat'=>$request->dishes[2],
                        'cal'=>$request->dishes[3],
                        'na'=>$request->dishes[4],
                        'k'=>$request->dishes[5],
                        'ca'=>$request->dishes[6],
                        'mg'=>$request->dishes[7],
                        'vit_b12'=>$request->dishes[8],
                        'vit_d'=>$request->dishes[9],
                        'vit_e'=>$request->dishes[10],
                        'created_at'=>Carbon::now(),
                    ]);
            }
            return 'success';
        }catch (\Exception $exception){
            return $exception;
        }

    }

//    public function get_nutritionistComment(Request $request)
//    {
//
//        $queries = DB::table('nutrition_ingredient')->where('diet_log_id',$request->id)->get();
//        $name = $request->name;
//        return view('pages.nutritionManagement.nutritionistComment',compact('queries','name'));
//    }

//    public function get_nutritionistComment_data(Request $request)
//    {
//        try{
//            $data = DB::table('diet_log')
//                ->where('diet_log_id',$request->id)
//                ->where($request->search_from,'like','%'.$request->search_data.'%')
//                ->get();
//            return $data;
//        }catch (\Throwable $e){
//            report($e);
//            return false;
//        }
//    }
//    // 新增一筆飲食評論
//    public function store_nutritionistComment(Request $request)
//    {
//        $query = $request->except('_token');
//        try{
//            DB::table('nutrition_ingredient')
//                ->insert([
////                    diet_log_id要改
//                    'diet_log_id'=>1,
//                    'carbohydrate'=>$request->carbohydrate,
//                    'protein'=>$request->protein,
//                    'fat'=>$request->fat,
//                    'cal'=>$request->cal,
//                    'na'=>$request->na,
//                    'k'=>$request->k,
//                    'ca'=>$request->ca,
//                    'mg'=>$request->mg,
//                    'vit_b12'=>$request->vit_b12,
//                    'vit_d'=>$request->vit_d,
//                    'vit_e'=>$request->vit_e,
//                ]);
//        }catch (\Throwable $e)
//        {
//            report($e);
//            return $e;
//        }
//        return redirect()->back();
//    }
//
//    public function post_nutritionistComment_patch_page(Request $request)
//    {
//        $query = DB::table('nutrition_ingredient')->where('id',$request->id)->first();
//        return $query;
//    }
//    public function patch_nutritionistComment(Request $request)
//    {
////        dd($request);
//        try {
//            DB::table('nutrition_ingredient')->where('id',$request->patch_id)->update([
//                'carbohydrate'=>$request->p_carbohydrate,
//                'protein'=>$request->p_protein,
//                'fat'=>$request->p_fat,
//                'cal'=>$request->p_cal,
//                'na'=>$request->p_na,
//                'k'=>$request->p_k,
//                'ca'=>$request->p_ca,
//                'mg'=>$request->p_mg,
//                'vit_b12'=>$request->p_vit_b12,
//                'vit_d'=>$request->p_vit_d,
//                'vit_e'=>$request->p_vit_e,
//            ]);
//
//            return redirect()->back();
//        }catch (\Throwable $e){
//            report($e);
//        }
//    }
//
//    public function delete_nutritionistComment(Request $request)
//    {
//        try {
//            DB::table('nutrition_ingredient')
//                ->where('id', $request->id)->delete();
//            return redirect()->back();
//        }catch (\Throwable $e)
//        {
//            report($e);
//        }
//    }
}
