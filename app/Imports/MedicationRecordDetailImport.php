<?php

namespace App\Imports;

use App\Models\MedicationRecordDetail;

use App\Models\MedicationRecords;
use Carbon\Carbon;


use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class MedicationRecordDetailImport implements  ToModel,WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new MedicationRecordDetail([
            'trade_name' => $row[4],
            'generic_name' => $row[5],
            'dose' => $row[6],
            'freq' => $row[7],
            'updated_at' => Carbon::now()
        ]);

    }
    public function startRow(): int
    {
        return 2;
    }

}
