<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//取得登入介面
Route::get('/',[LoginController::class,'get_login_page'])->name('get_login_page');
Route::post('/login',[LoginController::class,'post_login_data'])->name('post_login_data');


Route::get('/menu', function () {
    return view('pages.menu.menu');
})->name('menu');
