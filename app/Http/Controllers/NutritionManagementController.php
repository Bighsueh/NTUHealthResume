<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class NutritionManagementController extends Controller
{
    // 營養管理系統首頁
    public function get_setting_nutritionManagement()
    {
        return view('pages.setting.nutritionManagement.settingNutritionManagement');
    }
    // 飲食紀錄
    public function get_dietLog()
    {
        $queries = DB::table('diet_log')->get();
        return view('pages.setting.nutritionManagement.dietLog',compact('queries'));
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
        return redirect('/dietLog');
    }
}
