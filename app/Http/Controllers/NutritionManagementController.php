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
}
