<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicationRecordController extends Controller
{
    //開啟回饋函及藥物紀錄-病患列表介面
    public function get_medication_record_page(Request $request)
    {
        return view('pages.medicationRecords.patientList');
    }


}
