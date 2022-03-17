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

    //儲存藥師回饋單內容
    Route::post('/store_pharmacist_feedback_data', [MedicationRecordController::class, 'store_pharmacist_feedback_data'])
        ->name('store_medication_management_pharmacist_feedback_data');
    //儲存醫師回饋單內容
    Route::post('/store_doctor_feedback_data', [MedicationRecordController::class, 'store_doctor_feedback_data'])
        ->name('store_medication_management_doctor_feedback_data');
});


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
// 餐敘列表
Route::get('/orderList', [\App\Http\Controllers\NutritionManagementController::class, 'get_orderList'])->name('get_orderList');
Route::get('/orderList/delete', [\App\Http\Controllers\NutritionManagementController::class, 'delete_orderList'])->name('delete_orderList');
Route::post('/orderList/store', [\App\Http\Controllers\NutritionManagementController::class, 'store_orderList'])->name('store_orderList');
Route::post('/orderList/patch/page',[\App\Http\Controllers\NutritionManagementController::class, 'post_orderList_patch_page'])->name('post_orderList_patch_page');
Route::post('/orderList/patch', [\App\Http\Controllers\NutritionManagementController::class, 'patch_orderList'])->name('patch_orderList');

// 飲食紀錄
Route::get('/dietLog',[\App\Http\Controllers\NutritionManagementController::class,'get_dietLog'])->name('get_dietLog');
Route::post('/dietLog', [\App\Http\Controllers\NutritionManagementController::class, 'store_dietLog'])->name('store_dietLog');
Route::get('/nutritionManagement/get_dietLog_data',[\App\Http\Controllers\NutritionManagementController::class,'get_dietLog_data'])->name('get_dietLog_data');
Route::get('/dietLog/delete', [\App\Http\Controllers\NutritionManagementController::class, 'delete_dietLog'])->name('delete_dietLog');
// 進入修改頁面並且帶值
Route::post('/dietLog/patch/page', [\App\Http\Controllers\NutritionManagementController::class, 'post_dietLog_patch_page'])->name('post_dietLog_patch_page');
Route::post('/dietLog/patch', [\App\Http\Controllers\NutritionManagementController::class, 'patch_dietLog'])->name('patch_dietLog');
// 個別菜色帶值
Route::post('/dishes/patch/page', [\App\Http\Controllers\NutritionManagementController::class, 'post_dishes_patch_page'])->name('post_dishes_patch_page');
Route::post('/dishes/patch', [\App\Http\Controllers\NutritionManagementController::class, 'post_dishes_patch'])->name('post_dishes_patch');


Route::get('/menu', function () {
    $user_name = Session::get('user_name');
    return view('pages.menu.menu',compact('user_name'));
})->name('menu');
