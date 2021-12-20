<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function get_login_page()
    {
        return view('pages.login.login');
    }

    public function post_login_data(Request $request)
    {
        try {
            $username = $request->get('username');
            $password = $request->get('password');

            //檢查是否存在於 員工表中
            $check_employee = DB::table('employees')
                ->where('employees_account', $username)
                ->where('employees_password', $password)
                ->first();

            //員工不存在
            if ($check_employee === null) {
                return 'wrong';
            }

            //員工存在
            if ($check_employee !== null) {
                return 'success';
            }



        } catch (\Exception $exception) {
            return $exception;
        }
    }
}
