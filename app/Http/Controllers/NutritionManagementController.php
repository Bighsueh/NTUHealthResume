<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $id = $request->id;
        $queries = DB::table('meal_order')->where('patient_id',$id)->get();
        return view('pages.nutritionManagement.orderList',compact('id','queries'));
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
        try{
            DB::table('meal_order')
                ->insert([
                    'patient_id'=>$query['patient_id'],
                    'meal_order'=>$query['order'],
                    'created_at'=>Carbon::now(),
                ]);
        }catch (\Throwable $e)
        {
            report($e);
            return $e;
        }
        return redirect()->back();
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
        $queries = DB::table('diet_log')->where('patient_id',$request->patient_id)->where('task_id',$request->task_id)->get();
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
    // 新增一筆飲食紀錄
    public function store_dietLog(Request $request)
    {
        $query = $request->except('_token');
        try{
            DB::table('diet_log')
                ->insert([
                'task_id' => $query['task_id'],
                'patient_id'=>$query['patient_id'],
                'quantity'=>$query['size'],
                'created_at'=>Carbon::now(),
                'meal_name'=>$query['meal_name'],
//                                    'meal_order'=>$query['order'],
            ]);
        }catch (\Throwable $e)
        {
            report($e);
            return $e;
        }
        return redirect()->back();
    }

    public function post_dietLog_patch_page(Request $request)
    {
        $query = DB::table('diet_log')->where('id',$request->id)->first();
        return [$query->meal_order,$query->quantity,$query->id,$query->meal_name];

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
