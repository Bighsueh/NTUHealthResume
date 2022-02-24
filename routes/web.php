<?php

use App\Http\Controllers\DriveController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicationRecordController;
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
Route::get('/medication_record', [MedicationRecordController::class, 'get_medication_record_and_feedback_management_page'])->name('get_medication_record_and_feedback_management_page');
Route::get('/get_medication_record_page', [MedicationRecordController::class, 'get_medication_record_and_feedback_management_patient_detail_page'])->name('get_medication_record_and_reply_management_patient_detail_page');
Route::post('/get_medication_record_detail', [MedicationRecordController::class, 'get_medication_record_detail'])->name('get_medication_record_detail');
Route::post('/get_doctor_feedback', [MedicationRecordController::class, 'get_doctor_feedback'])->name('get_doctor_feedback');
Route::post('/store_doctor_feedback', [MedicationRecordController::class, 'store_doctor_feedback'])->name('store_doctor_feedback');
Route::post('/get_pharmacist_feedback', [MedicationRecordController::class, 'get_pharmacist_feedback'])->name('get_pharmacist_feedback');
Route::post('/store_pharmacist_feedback', [MedicationRecordController::class, 'store_pharmacist_feedback'])->name('store_pharmacist_feedback');


Route::get('/setting/employee',[\App\Http\Controllers\EmployeeController::class,'get_setting_employee'])->name('get_setting_employee');

Route::get('/setting/employee/get_edit_employee',[\App\Http\Controllers\EmployeeController::class,'get_edit_employee'])->name('get_edit_employee');
Route::get('/setting/employee/store_edit_employee',[\App\Http\Controllers\EmployeeController::class,'store_edit_employee'])->name('store_edit_employee');
Route::get('/setting/employee/store_create_employee',[\App\Http\Controllers\EmployeeController::class,'store_create_employee'])->name('store_create_employee');
Route::get('/setting/employee/get_employee_data',[\App\Http\Controllers\EmployeeController::class,'get_employee_data'])->name('get_employee_data');
Route::get('/setting/employee/delete_employee',[\App\Http\Controllers\EmployeeController::class,'delete_employee'])->name('delete_employee');


Route::get('/setting/patient',[\App\Http\Controllers\PatientController::class,'get_setting_patient'])->name('get_setting_patient');
Route::get('/setting/patient/get_patient_data',[\App\Http\Controllers\PatientController::class,'get_patient_data'])->name('get_patient_data');
Route::get('/setting/patient/get_edit_patient',[\App\Http\Controllers\PatientController::class,'get_edit_patient'])->name('get_edit_patient');
Route::get('/setting/patient/store_create_patient',[\App\Http\Controllers\PatientController::class,'store_create_patient'])->name('store_create_patient');
Route::get('/setting/patient/store_edit_patient',[\App\Http\Controllers\PatientController::class,'store_edit_patient'])->name('store_edit_patient');
Route::get('/setting/patient/delete_patient',[\App\Http\Controllers\PatientController::class,'delete_patient'])->name('delete_patient');

Route::get('/setting/nutritionManagement',[\App\Http\Controllers\NutritionManagementController::class,'get_setting_nutritionManagement'])->name('get_setting_nutritionManagement');

Route::get('/dietLog',[\App\Http\Controllers\NutritionManagementController::class,'get_dietLog'])->name('get_dietLog');
Route::get('/dietLog/{id}', [\App\Http\Controllers\NutritionManagementController::class, 'delete_dietLog'])->name('delete_dietLog');

Route::get('/nutritionistComment',[\App\Http\Controllers\NutritionManagementController::class,'get_setting_nutritionManagement'])->name('nutritionistComment');

Route::get('/menu', function () {
    return view('pages.menu.menu');
})->name('menu');
