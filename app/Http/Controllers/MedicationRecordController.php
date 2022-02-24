<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use mysql_xdevapi\Exception;

class MedicationRecordController extends Controller
{
    //開啟回饋函及藥物紀錄-病患列表介面
    public function get_medication_record_and_feedback_management_page(Request $request)
    {
        $patient_list = DB::table('patients')->select('patient_id', 'patient_name')->get();
        $result = ['patient_list' => $patient_list];
        return view('pages.medicationRecords.patientList', $result);
    }

    //開啟回饋函及藥物紀錄-個別病患紀錄頁面
    public function get_medication_record_and_feedback_management_patient_detail_page(Request $request)
    {

        $patient_id = $request->get('patient_id');
        $patient_data = DB::table('patients')->where('patient_id', $patient_id)->first();
        $medication_record = DB::table('medication_records')->get();
        $result = ['medication_record' => $medication_record, 'patient_name' => $patient_data->patient_name];
        $user_name = Session::get('user_name');
        return view('pages.medicationRecords.patientDetail', compact($result,'user_name'));
    }

    //依record_id取得藥物子項目
    public function get_medication_record_detail(Request $request)
    {
        //record_id
        $record_id = $request->record_id;

        $main_record = DB::table('medication_records')->where('record_id', $record_id)->first();
        $record_list = DB::table('medication_record_detail')->where('record_id', $record_id)->get();

        $result = ['main_record' => $main_record, 'record_list' => $record_list];
        return $result;
    }

    //取得醫師回覆內容
    public function get_doctor_feedback(Request $request)
    {
        try{
            //藥歷id
            $record_id = $request->record_id;
            //查詢醫師回饋單
            $doctor_feedback = DB::table('doctor_feedback')->where('record_id', $record_id)->first();

            //若存在醫師回饋單則取出回覆內容
            if($doctor_feedback){
                return $doctor_feedback->content;
            }

            //若不存在醫師回饋單則回傳空字串
            if($doctor_feedback){
                return "";
            }

        }catch (Exception $exception){
            return $exception;
        }
    }

    //儲存醫師回饋單,醫師回饋內容
    public function store_doctor_feedback(Request $request)
    {
        try {
            //藥歷id
            $record_id = $request->record_id;
            //醫師回覆內容
            $doctor_reply = $request->doctor_reply;

            //先取得病患的資料
            $patient_data = DB::table('medication_records')->where('record_id', $record_id)->first();

            //先確認資料是否存在
            $if_exist = DB::table('doctor_feedback')->where('record_id', $record_id)->count();

            //若以存在資料則導向修改資料
            if ($if_exist > 0) {
                //修改資料
                DB::table('doctor_feedback')
                    ->where('record_id', $record_id)
                    ->update([
                        'patient_id' => $patient_data->patient_id,
                        'record_id' => $record_id,
                        'doctor_id' => 1,
                        'content' => $doctor_reply,
                        'updated_at' => Carbon::now(),
                    ]);
            }
//
            //若不存在資料則導向則新增資料
            if ($if_exist === 0) {
                //新增資料
                DB::table('doctor_feedback')->insert([
                    'patient_id' => $patient_data->patient_id,
                    'record_id' => $record_id,
                    'doctor_id' => 1,
                    'content' => $doctor_reply,
                    'created_at' => Carbon::now(),
                ]);
            }
            return 'success';
        } catch (Exception $exception) {
            return $exception;
        }
    }

    //取得藥師回覆內容
    public function get_pharmacist_feedback(Request $request)
    {
        try {
            //藥歷id
            $record_id = $request->record_id;

            //查詢藥師回饋單
            $pharmacist_feedback = DB::table('pharmacist_feedback')->where('record_id', $record_id)->first();

            //若存在藥師回饋單則取出回覆內容
            if($pharmacist_feedback){
                return $pharmacist_feedback->content;
            }

            //若不存在藥師回饋單則回傳空字串
            if($pharmacist_feedback){
                return "";
            }
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    //儲存藥師回覆內容
    public function store_pharmacist_feedback(Request $request)
    {
        try {
            //藥歷id
            $record_id = $request->record_id;
            //要師回覆
            $pharmacist_reply = $request->pharmacist_reply;

            //先取得病患的資料
            $patient_data = DB::table('medication_records')->where('record_id', $record_id)->first();

            //先確認資料是否存在
            $if_exist = DB::table('pharmacist_feedback')->where('record_id', $record_id)->count();

            //若以存在資料則導向修改資料
            if ($if_exist > 0) {
                //修改資料
                DB::table('pharmacist_feedback')
                    ->where('record_id', $record_id)
                    ->update([
                        'patient_id' => $patient_data->patient_id,
                        'record_id' => $record_id,
                        'pharmacist_id' => 1,
                        'content' => $pharmacist_reply,
                        'updated_at' => Carbon::now(),
                    ]);
            }
//
            //若不存在資料則導向則新增資料
            if ($if_exist === 0) {
                //新增資料
                DB::table('pharmacist_feedback')->insert([
                    'patient_id' => $patient_data->patient_id,
                    'record_id' => $record_id,
                    'pharmacist_id' => 1,
                    'content' => $pharmacist_reply,
                    'created_at' => Carbon::now(),
                ]);
            }

            return "success";
        } catch (\Exception $exception) {
            return $exception;
        }
    }

}
