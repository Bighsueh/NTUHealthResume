<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function get_login_page()
    {
        return view('pages.login.login');
    }
}
