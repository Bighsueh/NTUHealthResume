<?php

use App\Http\Controllers\DriveController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatitentController;
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
//病患雲端系統登入介面
Route::get('/drive/login', [DriveController::class,'get_drive_login_page'])->name('get_drive_login_page');
Route::post('/drive/login', [DriveController::class,'post_drive_login_data'])->name('post_drive_login_data');
Route::get('drive', [DriveController::class, 'get_drive_page'])->name('get_drive_page');

//藥物紀錄及回饋函
Route::get('/medication_record', [MedicationRecordController::class, 'get_medication_record_page'])->name('get_medication_record_page');


Route::get('/setting/employee',[\App\Http\Controllers\EmployeeController::class,'get_setting_employee'])->name('get_setting_employee');

Route::get('/setting/patient',[\App\Http\Controllers\PatientController::class,'get_setting_patient'])->name('get_setting_patient');

Route::get('/setting/nutritionManagement',[\App\Http\Controllers\NutritionManagementController::class,'get_setting_nutritionManagement'])->name('get_setting_nutritionManagement');

Route::get('/dietRecord',[\App\Http\Controllers\NutritionManagementController::class,'get_setting_nutritionManagement'])->name('dietRecord');

Route::get('/nutritionistComment',[\App\Http\Controllers\NutritionManagementController::class,'get_setting_nutritionManagement'])->name('nutritionistComment');

Route::get('/feeback_detail', function () {
    return view('pages.feeback.detail');
})->name('detail');

Route::get('/feeback', function () {
    return view('pages.feeback.feeback');
})->name('feeback');
Route::get('/menu', function () {
    return view('pages.menu.menu');
})->name('menu');
