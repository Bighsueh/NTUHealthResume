<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\MedicationRecordDetail;
use Illuminate\Support\Facades\Log;

class MedicationRecordDetailImport implements ToCollection
{

    public function collection(Collection $rows)
    {
        $count = 0;
//       Log::debug($rows);
        foreach ($rows as $row)
        {


//            Log::debug($row[5]);
            if($count == 0) {
                $count = $count + 1;
                continue;
            }

            if($row[5]==null){
                continue;
            }

//            Log::debug($row[5]);
            MedicationRecordDetail::create([
                'record_id' => $row[0],
                'trade_name' => $row[5],
                'generic_name' => $row[6],
                'dose' => $row[7],
                'freq' => $row[8]
            ]);
        }
    }
}
