<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function get_setting_employee(){
        return view('pages.setting.employee.settingEmployee');
    }
}
