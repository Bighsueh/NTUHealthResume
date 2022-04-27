<?php

namespace App\Exports;

use App\Models\MedicationRecords;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MedicationRecordsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
       $data = DB::table('medication_records')
           ->select('medication_records.record_id','medication_records.date_of_examination','medication_records.redate','medication_records.pres_hosp','medication_records.disp_hosp','medication_record_detail.trade_name','medication_record_detail.generic_name','medication_record_detail.dose','medication_record_detail.freq')
           ->LeftJoin('medication_record_detail','medication_records.record_id','=','medication_record_detail.record_id')
           ->get();

//        dd($data);
        return view('exports.medicationRecordsExport',[
            'data' => $data
        ]);
    }
}
