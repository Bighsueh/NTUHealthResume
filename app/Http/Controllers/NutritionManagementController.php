<?php

namespace App\Http\Controllers;

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
    // 任務紀錄
    public function get_taskList(Request $request)
    {
        $id = $request->id;
        $queries = DB::table('work_progress')->where('diet_id',$id)->get();
        return view('pages.nutritionManagement.taskList',compact('id','queries'));
    }
    // 飲食紀錄
    public function get_dietLog(Request $request)
    {
        $queries = DB::table('diet_log')->where('patient_id',$request->id)->get();
        $patient_data = ['patient_id' => $request->id, 'patient_name' => $request->name];
        $user_name = Session::get('user_name');
        return view('pages.nutritionManagement.dietLog',compact('queries','patient_data','user_name'));
    }
    // 刪除一筆飲食紀錄
    public function delete_dietLog($id)
    {
        try {
            $query = DB::table('diet_log')->where('id',$id);
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
                'patient_id'=>$query['patient_id'],
                'quantity'=>$query['size'],
                'meal_order'=>$query['order'],
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
        return [$query->meal_order,$query->quantity,$query->id];

    }

    public function patch_dietLog(Request $request)
    {

        try {
            DB::table('diet_log')->where('id',$request->patch_id)->update([
                'meal_order'=>$request->patch_order,
                'quantity'=>$request->patch_size,
            ]);

            return redirect()->back();
        }catch (\Throwable $e){
            report($e);
        }
    }

    public function get_nutritionistComment(Request $request)
    {
//        diet_log_id
        $queries = DB::table('nutrition_ingredient')->where('diet_log_id',$request->id)->get();
        $name = $request->name;
        return view('pages.nutritionManagement.nutritionistComment',compact('queries','name'));
    }
    // 新增一筆飲食評論
    public function store_nutritionistComment(Request $request)
    {
        $query = $request->except('_token');
        try{
            DB::table('nutrition_ingredient')
                ->insert([
//                    diet_log_id要改
                    'diet_log_id'=>1,
                    'carbohydrate'=>$request->carbohydrate,
                    'protein'=>$request->protein,
                    'fat'=>$request->fat,
                    'cal'=>$request->cal,
                    'na'=>$request->na,
                    'k'=>$request->k,
                    'ca'=>$request->ca,
                    'mg'=>$request->mg,
                    'vit_b12'=>$request->vit_b12,
                    'vit_d'=>$request->vit_d,
                    'vit_e'=>$request->vit_e,
                ]);
        }catch (\Throwable $e)
        {
            report($e);
            return $e;
        }
        return redirect()->back();
    }

    public function post_nutritionistComment_patch_page(Request $request)
    {
        $query = DB::table('nutrition_ingredient')->where('id',$request->id)->first();
        return $query;
    }
    public function patch_nutritionistComment(Request $request)
    {
//        dd($request);
        try {
            DB::table('nutrition_ingredient')->where('id',$request->patch_id)->update([
                'carbohydrate'=>$request->p_carbohydrate,
                'protein'=>$request->p_protein,
                'fat'=>$request->p_fat,
                'cal'=>$request->p_cal,
                'na'=>$request->p_na,
                'k'=>$request->p_k,
                'ca'=>$request->p_ca,
                'mg'=>$request->p_mg,
                'vit_b12'=>$request->p_vit_b12,
                'vit_d'=>$request->p_vit_d,
                'vit_e'=>$request->p_vit_e,
            ]);

            return redirect()->back();
        }catch (\Throwable $e){
            report($e);
        }
    }

    public function delete_nutritionistComment($id)
    {
        try {
            DB::table('nutrition_ingredient')
                ->where('id', $id)->delete();
            return redirect()->back();
        }catch (\Throwable $e)
        {
            report($e);
        }
    }
}
