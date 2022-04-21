<?php

namespace App\Imports;

use App\Models\MedicationRecordDetail;
use App\Models\MedicationRecords;
use Carbon\Carbon;


use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class MedicationRecordsImport implements  ToModel,WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new MedicationRecords([
            'record_id' => Session::get('record_id'),
            'date_of_examination' => $row[0],
            'redate' => $row[1],
            'pres_hosp' => $row[2],
            'disp_hosp' => $row[3],
            'updated_at' => Carbon::now()
        ]);

//        return new MedicationRecordDetail([
//
//            'trade_name' => $row[4],
//            'generic_name' => $row[5],
//            'dose' => $row[6],
//            'freq' => $row[7],
//            'updated_at' => Carbon::now()
//        ]);
    }
    public function startRow(): int
    {
        return 2;
    }

}
