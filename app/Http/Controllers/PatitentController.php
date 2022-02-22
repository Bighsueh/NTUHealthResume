<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatitentController extends Controller
{
    function get_setting_patient(){
        return view('pages.setting.patient.settingPatient');
    }
}
