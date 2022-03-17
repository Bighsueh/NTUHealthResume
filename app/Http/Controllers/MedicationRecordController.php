<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use mysql_xdevapi\Exception;

class MedicationRecordController extends Controller
{
    //開啟用藥管理系統-病患列表介面
    public function get_patient_list_page(Request $request)
    {
        $patient_list = DB::table('patients')->select('patient_id', 'patient_name', 'place', 'id_number', 'patient_bd')->get();
        $result = ['patient_list' => $patient_list];
        return view('pages.medicationManagement.patientList', $result);
    }

    //開啟用藥管理系統-個別病患任務列表
    public function get_task_list_page(Request $request)
    {
        try {
            //病患id
            $patient_id = $request->get('patient_id');

            //依照病患id取得patient_tasks資料
            $task_list = DB::table('patient_tasks')
                ->where('patient_id', $patient_id)
                ->get();

            $result = ['task_list' => $task_list,'patient_id' => $patient_id];

            return view('pages.medicationManagement.taskList', $result);
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    //開啟用藥管理系統-藥歷列表頁面
    public function get_task_detail_page(Request $request)
    {
        try {
            //task_id
            $task_id = $request->get('task_id');

            //藥歷列表
            $medication_records =
                DB::table('medication_records')
                    ->get();

            //藥師回饋單
            $pharmacist_feedback =
                DB::table('pharmacist_feedback')
                    ->where('task_id', $task_id)
                    ->first();

            //醫師回饋單
            $doctor_feedback =
                DB::table('doctor_feedback')
                ->where('task_id',$task_id)
                ->first();

            foreach ($medication_records as $row) {
                $record_id = $row->record_id;

                $row->record_detail =
                    DB::table('medication_record_detail')
                        ->where('record_id', $record_id)
                        ->get();
            }

            $result = [
                'task_id' => $task_id,
                'medication_records' => $medication_records,
                'pharmacist_feedback' => $pharmacist_feedback,
                'doctor_feedback' => $doctor_feedback,
            ];
            return view('pages.medicationManagement.taskDetail', $result);
        } catch (\Exception $exception) {
            return $exception;
        }

    }

    //儲存藥師回饋單內容
    public function store_pharmacist_feedback_data(Request $request)
    {
        try {
            //要回覆病患的內容
            $pharmacist_reply = $request->get('pharmacist_reply');
            //向醫師提問(選填)
            $ask_to_doctor = $request->get('ask_to_doctor');
            //task_id
            $task_id = $request->get('task_id');
            //user_name
            $user_name = $request->session()->get('user_name');

            //先確認是否存在藥師回覆紀錄
            $reply_check =
                DB::table('pharmacist_feedback')
                    ->where('task_id', $task_id)
                    ->first();

            //若存在藥師回覆紀錄
            if ($reply_check) {
                DB::table('pharmacist_feedback')
                    ->where('task_id', $task_id)
                    ->update([
                        'task_id' => $task_id,
                        'pharmacist_id' => $user_name,
                        'pharmacist_reply' => $pharmacist_reply,
                        'pharmacist_question' => $ask_to_doctor,
                        'updated_at' => Carbon::now(),
                    ]);
            }

            //若不存在藥師回覆紀錄
            if (!$reply_check) {
                DB::table('pharmacist_feedback')
                    ->insert([
                        'task_id' => $task_id,
                        'pharmacist_id' => $user_name,
                        'pharmacist_reply' => $pharmacist_reply,
                        'pharmacist_question' => $ask_to_doctor,
                        'created_at' => Carbon::now(),
                    ]);
            }

            return 'success';
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    //儲存醫師回饋單內容
    public function store_doctor_feedback_data(Request $request)
    {
        try {
            //醫師回覆藥師的內容
            $doctor_reply = $request->get('doctor_reply');
            //task_id
            $task_id = $request->get('task_id');

            $reply_check =
                DB::table('doctor_feedback')
                    ->where('task_id', $task_id)
                    ->first();

            //若存在醫師回覆紀錄
            if ($reply_check) {
                DB::table('doctor_feedback')
                    ->where('task_id', $task_id)
                    ->update([
                        'task_id' => $task_id,
                        'doctor_id' => $request->session()->get('user_name'),
                        'doctor_reply' => $doctor_reply,
                        'updated_at' => Carbon::now(),
                    ]);
            }

            //若不存在醫師回覆紀錄
            if (!$reply_check) {
                DB::table('doctor_feedback')
                    ->insert([
                        'task_id' => $task_id,
                        'doctor_id' => $request->session()->get('user_name'),
                        'doctor_reply' => $doctor_reply,
                        'created_at' => Carbon::now(),
                    ]);
            }

            return 'success';
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    function create_task_data(Request $request){
        try{
            DB::table('patient_tasks')
                ->insert([
                    'patient_id' => $request->patient_id,
                    'status' => "未開始",
                    'created_at' => date('Y/m/d H:i:s'),
                    'updated_at' => date('Y/m/d H:i:s')
                ]);
            return true;
        }catch (Exception $exception){
            return $exception;
        }

    }

}
