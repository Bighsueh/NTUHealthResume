<?php

namespace App\Exports;

use App\Models\MedicationRecords;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class MedicationRecordsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
       $data = DB::table('medication_records')
           ->leftJoin('medication_record_detail','medication_records.record_id','=','medication_record_detail.record_id')
           ->get();

//        dd($data);
        return view('exports.medicationRecordsExport',[
            'data' => $data
        ]);
    }
}
