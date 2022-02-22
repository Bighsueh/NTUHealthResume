<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NutritionManagementController extends Controller
{
    public function get_setting_nutritionManagement()
    {
        return view('pages.setting.nutritionManagement.settingNutritionManagement');
    }
}
