<?php

namespace App\Exports;

use App\Models\MedicationRecords;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MedicationRecordsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    //下載Records LeftJoin Record_Detail Excel
    public function view():View
    {
        $patient_no = DB::table('patients')
            ->where('patient_id',Session::get('patient_id'))
            ->first();

        Log::debug($patient_no->patient_no);
       $data = DB::table('medication_records')
           ->where('medication_records.patient_no', $patient_no->patient_no)
           ->select('medication_records.record_id','medication_records.patient_no','medication_records.date_of_examination','medication_records.redate','medication_records.pres_hosp','medication_records.disp_hosp','medication_record_detail.trade_name','medication_record_detail.generic_name','medication_record_detail.dose','medication_record_detail.dose_per_unit','medication_record_detail.daily_dose','medication_record_detail.freq')
           ->LeftJoin('medication_record_detail','medication_records.record_id','=','medication_record_detail.record_id')
           ->get();

//        Log::debug(Session::get('task_id'));
        return view('exports.medicationRecordsExport',[
            'data' => $data
        ]);
    }
}
