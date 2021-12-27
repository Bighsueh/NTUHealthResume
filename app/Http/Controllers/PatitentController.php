<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatitentController extends Controller
{
    function get_setting_patitent(){
        return view('pages.setting.patitent.settingPatitent');
    }
}
