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
Route::get('/', [LoginController::class, 'get_login_page'])->name('get_login_page');
Route::post('/login', [LoginController::class, 'post_login_data'])->name('post_login_data');
Route::get('/logout', [LoginController::class, 'log_out'])->name('log_out');
//病患雲端系統登入介面
Route::get('/drive/login', [DriveController::class, 'get_drive_login_page'])->name('get_drive_login_page');
Route::post('/drive/login', [DriveController::class, 'post_drive_login_data'])->name('post_drive_login_data');
Route::get('drive', [DriveController::class, 'get_drive_page'])->name('get_drive_page');

//用藥管理系統
Route::group(['prefix' => 'medication_management', 'middleware' => ['login']], function () {
    //病患列表頁面
    Route::get('/get_patient_list_page', [MedicationRecordController::class, 'get_patient_list_page'])
        ->name('get_medication_management_patient_list_page');
    //個別病患任務列表頁面
    Route::get('/get_task_list_page', [MedicationRecordController::class, 'get_task_list_page'])
        ->name('get_medication_management_task_list_page');
    //個別病患任務詳細資訊頁面
    Route::get('/get_task_detail_page', [MedicationRecordController::class, 'get_task_detail_page'])
        ->name('get_medication_management_task_detail_page');
    //新增任務列表
    Route::get('/create_medication_management_task', [MedicationRecordController::class, 'create_task_data'])
        ->name('create_medication_management_task');
    //查詢任務列表
    Route::get('/get_medication_management_task', [MedicationRecordController::class, 'get_task_data'])
        ->name('get_medication_management_task');
    //刪除任務列表
    Route::get('/delete_medication_management_task', [MedicationRecordController::class, 'delete_task_data'])
        ->name('delete_medication_management_task');
    //export藥歷紀錄Excel http://localhost/medication_management/export_medication_records_excel
    Route::get('/export_medication_records_excel', [MedicationRecordController::class, 'export_medication_records'])
        ->name('export_medication_records_excel');

    //import藥歷紀錄Excel http://localhost/medication_management/import_medication_records_excel
    Route::post('/import_medication_records_excel', [MedicationRecordController::class, 'import_medication_records'])
        ->name('import_medication_records_excel');

    //儲存藥歷詳細記錄Modal
    Route::post('/store_record_detail', [MedicationRecordController::class, 'store_medication_record_detail'])
        ->name('store_medication_management_record_detail');
    //儲存藥師回饋單內容
    Route::post('/store_pharmacist_feedback_data', [MedicationRecordController::class, 'store_pharmacist_feedback_data'])
        ->name('store_medication_management_pharmacist_feedback_data');
    //儲存醫師回饋單內容
    Route::post('/store_doctor_feedback_data', [MedicationRecordController::class, 'store_doctor_feedback_data'])
        ->name('store_medication_management_doctor_feedback_data');
    //取得藥歷列表資訊(包含record及record_detail)
    Route::post('/get_record_data', [MedicationRecordController::class, 'get_record_data'])
        ->name('get_medication_management_record_data');
    //新增藥歷紀錄
    Route::post('/create_medication_record', [MedicationRecordController::class, 'create_medication_record'])
        ->name('create_medication_management_medication_record');


});


Route::get('/setting/employee', [\App\Http\Controllers\EmployeeController::class, 'get_setting_employee'])->name('get_setting_employee');

Route::get('/setting/employee/get_edit_employee', [\App\Http\Controllers\EmployeeController::class, 'get_edit_employee'])->name('get_edit_employee');
Route::get('/setting/employee/store_edit_employee', [\App\Http\Controllers\EmployeeController::class, 'store_edit_employee'])->name('store_edit_employee');
Route::get('/setting/employee/store_create_employee', [\App\Http\Controllers\EmployeeController::class, 'store_create_employee'])->name('store_create_employee');
Route::get('/setting/employee/get_employee_data', [\App\Http\Controllers\EmployeeController::class, 'get_employee_data'])->name('get_employee_data');
Route::get('/setting/employee/delete_employee', [\App\Http\Controllers\EmployeeController::class, 'delete_employee'])->name('delete_employee');


Route::get('/setting/patient', [\App\Http\Controllers\PatientController::class, 'get_setting_patient'])->name('get_setting_patient');
Route::get('/setting/patient/get_patient_data', [\App\Http\Controllers\PatientController::class, 'get_patient_data'])->name('get_patient_data');
Route::get('/setting/patient/get_edit_patient', [\App\Http\Controllers\PatientController::class, 'get_edit_patient'])->name('get_edit_patient');
Route::get('/setting/patient/store_create_patient', [\App\Http\Controllers\PatientController::class, 'store_create_patient'])->name('store_create_patient');
Route::get('/setting/patient/store_edit_patient', [\App\Http\Controllers\PatientController::class, 'store_edit_patient'])->name('store_edit_patient');
Route::get('/setting/patient/delete_patient', [\App\Http\Controllers\PatientController::class, 'delete_patient'])->name('delete_patient');

Route::get('/nutritionManagement', [\App\Http\Controllers\NutritionManagementController::class, 'get_nutritionManagement'])->name('get_nutritionManagement');
Route::get('/nutritionManagement/get_nutritionManagement_data', [\App\Http\Controllers\NutritionManagementController::class, 'get_nutritionManagement_data'])->name('get_nutritionManagement_data');
// 餐序評論
Route::post('/orderList/comment/patch/page', [\App\Http\Controllers\NutritionManagementController::class, 'get_orderList_comment_patch_page'])->name('get_orderList_comment_patch_page');
Route::post('/orderList/comment/patch', [\App\Http\Controllers\NutritionManagementController::class, 'get_orderList_comment_patch'])->name('get_orderList_comment_patch');
// 餐敘列表
Route::get('/orderList', [\App\Http\Controllers\NutritionManagementController::class, 'get_orderList'])->name('get_orderList');
Route::get('/orderList/data', [\App\Http\Controllers\NutritionManagementController::class, 'get_orderList_data'])->name('get_orderList_data');
Route::get('/orderList/delete', [\App\Http\Controllers\NutritionManagementController::class, 'delete_orderList'])->name('delete_orderList');
Route::post('/orderList/store', [\App\Http\Controllers\NutritionManagementController::class, 'store_orderList'])->name('store_orderList');
Route::post('/orderList/patch/page', [\App\Http\Controllers\NutritionManagementController::class, 'post_orderList_patch_page'])->name('post_orderList_patch_page');
Route::post('/orderList/patch', [\App\Http\Controllers\NutritionManagementController::class, 'patch_orderList'])->name('patch_orderList');
Route::post('/orderList/detail', [\App\Http\Controllers\NutritionManagementController::class, 'post_orderList_detail'])->name('post_orderList_detail');
Route::post('/orderList/detail/store', [\App\Http\Controllers\NutritionManagementController::class, 'store_orderList_detail'])->name('store_orderList_detail');

// 飲食紀錄
Route::get('/dietLog', [\App\Http\Controllers\NutritionManagementController::class, 'get_dietLog'])->name('get_dietLog');
Route::post('/dietLog', [\App\Http\Controllers\NutritionManagementController::class, 'store_dietLog'])->name('store_dietLog');
Route::get('/nutritionManagement/get_dietLog_data', [\App\Http\Controllers\NutritionManagementController::class, 'get_dietLog_data'])->name('get_dietLog_data');
Route::get('/dietLog/delete', [\App\Http\Controllers\NutritionManagementController::class, 'delete_dietLog'])->name('delete_dietLog');
Route::post('/dietLog/upload', [\App\Http\Controllers\NutritionManagementController::class, 'post_diet_log_excel_upload'])->name('post_diet_log_excel_upload');
Route::get('/dietLog/download', [\App\Http\Controllers\NutritionManagementController::class, 'get_diet_log_excel_download'])->name('get_diet_log_excel_download');
Route::get('/dietLog/example/download', [\App\Http\Controllers\NutritionManagementController::class, 'get_diet_log_excel_example_download'])->name('get_diet_log_excel_example_download');
//儲存藥歷詳細記錄Modal



// 進入修改頁面並且帶值
Route::post('/dietLog/patch/page', [\App\Http\Controllers\NutritionManagementController::class, 'post_dietLog_patch_page'])->name('post_dietLog_patch_page');
Route::post('/dietLog/patch', [\App\Http\Controllers\NutritionManagementController::class, 'patch_dietLog'])->name('patch_dietLog');
// 個別菜色帶值
Route::post('/dishes/patch/page', [\App\Http\Controllers\NutritionManagementController::class, 'post_dishes_patch_page'])->name('post_dishes_patch_page');
Route::post('/dishes/patch', [\App\Http\Controllers\NutritionManagementController::class, 'post_dishes_patch'])->name('post_dishes_patch');

// 營養師評論
Route::get('/nutritionistComment', [\App\Http\Controllers\NutritionManagementController::class, 'get_nutritionistComment'])->name('get_nutritionistComment');
Route::post('/nutritionistComment', [\App\Http\Controllers\NutritionManagementController::class, 'store_nutritionistComment'])->name('store_nutritionistComment');
Route::get('/nutritionistComment/delete', [\App\Http\Controllers\NutritionManagementController::class, 'delete_nutritionistComment'])->name('delete_nutritionistComment');
Route::get('/nutritionManagement/get_nutritionistComment_data', [\App\Http\Controllers\NutritionManagementController::class, 'get_nutritionistComment_data'])->name('get_nutritionistComment_data');
// 進入修改頁面並且帶值
Route::post('/nutritionistComment/patch/page', [\App\Http\Controllers\NutritionManagementController::class, 'post_nutritionistComment_patch_page'])->name('post_nutritionistComment_patch_page');
Route::post('/nutritionistComment/patch', [\App\Http\Controllers\NutritionManagementController::class, 'patch_nutritionistComment'])->name('patch_nutritionistComment');

Route::get('/menu', function () {
    $user_name = Session::get('user_name');
    return view('pages.menu.menu', compact('user_name'));
})->name('menu');
