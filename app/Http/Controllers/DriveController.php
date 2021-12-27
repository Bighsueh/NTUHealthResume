<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriveController extends Controller
{
    public function get_drive_page()
    {
        return view('pages.drive.drive');
    }
}
