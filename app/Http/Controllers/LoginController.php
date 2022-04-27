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
        //Session flush
        Session::flush();
        //重新產生Session ID
        $request->session()->regenerate();
        try {
            $username = $request->get('username');
            $password = $request->get('password');

            //檢查是否存在於 員工表中
            $check_employee = DB::table('employees')
                ->where('employee_account', $username)
                ->where('employee_password', $password)
                ->first();

            //員工不存在
            if ($check_employee === null) {
                return 'wrong';
            }

            //員工存在
            if ($check_employee !== null) {
                Session::put('user_name',$check_employee->employee_name);
                return 'success';
            }



        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function log_out()
    {
        try {
            //Session flush
            Session::flush();

            return redirect()->route('get_login_page');
        } catch (\Exception $exception) {
            return $exception;
        }
    }
}
