<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class NutritionManagementController extends Controller
{
    // 營養管理系統首頁
    public function get_setting_nutritionManagement()
    {
        $queries = DB::table('patients')->get();
        return view('pages.setting.nutritionManagement.settingNutritionManagement',compact('queries'));
    }
    // 飲食紀錄
    public function get_dietLog(Request $request)
    {
        $queries = DB::table('diet_log')->where('patient_id',$request->id)->get();
        $patient_data = ['patient_id' => $request->id, 'patient_name' => $request->name];
        return view('pages.setting.nutritionManagement.dietLog',compact('queries','patient_data'));
        $user_name = Session::get('user_name');
        $queries = DB::table('diet_log')->get();
        return view('pages.setting.nutritionManagement.dietLog',compact('queries',$user_name));
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
        return view('pages.setting.nutritionManagement.nutritionistComment',compact('queries','name'));
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
