<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicationRecordController extends Controller
{
    //開啟回饋函及藥物紀錄-病患列表介面
    public function get_medication_record_and_feedback_management_page(Request $request)
    {
        $patient_list = DB::table('patients')->select('patients_id', 'patients_name')->get();
        $result = ['patient_list' => $patient_list];
        return view('pages.medicationRecords.patientList',$result);
    }

    //開啟回饋函及藥物紀錄-個別病患紀錄頁面
    public function get_medication_record_and_feedback_management_patient_detail_page(Request $request)
    {
//        dd($request);
        $patient_id = $request->get('patient_id');


        return view('pages.medicationRecords.patientDetail');
    }


}