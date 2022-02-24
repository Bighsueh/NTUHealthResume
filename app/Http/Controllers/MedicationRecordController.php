<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return view('pages.medicationRecords.patientDetail', $result);
    }

    //依record_id取得藥物子項目
    public function get_medication_record_detail(Request $request){
        //record_id
        $record_id = $request->record_id;

        $record_detail = DB::table('medication_records')->where('record_id',$record_id)->first();
        return $record_detail;
    }

}
