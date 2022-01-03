<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriveController extends Controller
{
    public function get_drive_login_page()
    {
        return view('pages.drive.drive_login');
    }

    public function post_drive_login_data(Request $request)
    {
        try{
            if($request->username == "1" && $request->password =="1"){
                return 'success';
            }
            else{
                return 'wrong';
            }
        }catch (\Exception $exception){
            return $exception;
        }

    }

    public function get_drive_page()
    {
        return view('pages.drive.drive');
    }
}
