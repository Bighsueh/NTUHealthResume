<?php

use App\Http\Controllers\DriveController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicationRecordController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

//用藥管理系統
Route::group(['prefix' => 'medication_management'], function () {
    //病患列表頁面
    Route::get('/get_patient_list_page', [MedicationRecordController::class, 'get_patient_list_page'])
        ->name('get_medication_management_patient_list_page');
    //個別病患任務列表頁面
    Route::get('/get_task_list_page', [MedicationRecordController::class, 'get_task_list_page'])
        ->name('get_medication_management_task_list_page');
    //個別病患任務詳細資訊頁面
    Route::get('/get_task_detail_page', [MedicationRecordController::class, 'get_task_detail_page'])
        ->name('get_medication_management_task_detail_page');


});

//Route::get('/get_medication_record_page', [MedicationRecordController::class, 'get_medication_record_and_feedback_management_patient_detail_page'])->name('get_medication_record_and_reply_management_patient_detail_page');
//Route::post('/get_medication_record_detail', [MedicationRecordController::class, 'get_medication_record_detail'])->name('get_medication_record_detail');
//Route::get('/get_patient_task_page',[MedicationRecordController::class,'get_medication_record_and_feedback_management_task_list_page'])->name('get_patient_task_page');
//Route::post('/get_doctor_feedback', [MedicationRecordController::class, 'get_doctor_feedback'])->name('get_doctor_feedback');
//Route::post('/store_doctor_feedback', [MedicationRecordController::class, 'store_doctor_feedback'])->name('store_doctor_feedback');
//Route::post('/get_pharmacist_feedback', [MedicationRecordController::class, 'get_pharmacist_feedback'])->name('get_pharmacist_feedback');
//Route::post('/store_pharmacist_feedback', [MedicationRecordController::class, 'store_pharmacist_feedback'])->name('store_pharmacist_feedback');
//Route::post('/store_medication_record_detail', [MedicationRecordController::class, 'store_medication_record_detail'])->name('store_medication_record_detail');
//Route::post('/update_medication_record_detail', [MedicationRecordController::class, 'update_medication_record_detail'])->name('update_medication_record_detail');


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

Route::get('/nutritionManagement',[\App\Http\Controllers\NutritionManagementController::class,'get_nutritionManagement'])->name('get_nutritionManagement');
Route::get('/nutritionManagement/get_nutritionManagement_data',[\App\Http\Controllers\NutritionManagementController::class,'get_nutritionManagement_data'])->name('get_nutritionManagement_data');
// 飲食紀錄
Route::get('/dietLog',[\App\Http\Controllers\NutritionManagementController::class,'get_dietLog'])->name('get_dietLog');
Route::post('/dietLog', [\App\Http\Controllers\NutritionManagementController::class, 'store_dietLog'])->name('store_dietLog');
Route::get('/dietLog/{id}', [\App\Http\Controllers\NutritionManagementController::class, 'delete_dietLog'])->name('delete_dietLog');
// 進入修改頁面並且帶值
Route::post('/dietLog/patch/page', [\App\Http\Controllers\NutritionManagementController::class, 'post_dietLog_patch_page'])->name('post_dietLog_patch_page');
Route::post('/dietLog/patch', [\App\Http\Controllers\NutritionManagementController::class, 'patch_dietLog'])->name('patch_dietLog');

// 營養師評論
Route::get('/nutritionistComment',[\App\Http\Controllers\NutritionManagementController::class,'get_nutritionistComment'])->name('get_nutritionistComment');
Route::post('/nutritionistComment', [\App\Http\Controllers\NutritionManagementController::class, 'store_nutritionistComment'])->name('store_nutritionistComment');
Route::get('/nutritionistComment/{id}', [\App\Http\Controllers\NutritionManagementController::class, 'delete_nutritionistComment'])->name('delete_nutritionistComment');
// 進入修改頁面並且帶值
Route::post('/nutritionistComment/patch/page', [\App\Http\Controllers\NutritionManagementController::class, 'post_nutritionistComment_patch_page'])->name('post_nutritionistComment_patch_page');
Route::post('/nutritionistComment/patch', [\App\Http\Controllers\NutritionManagementController::class, 'patch_nutritionistComment'])->name('patch_nutritionistComment');

Route::get('/menu', function () {
    $user_name = Session::get('user_name');
    return view('pages.menu.menu',compact('user_name'));
})->name('menu');
