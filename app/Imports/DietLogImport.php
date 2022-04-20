<?php

namespace App\Imports;

use App\Models\DietLog;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DietLogImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */


    public function model(array $row)
    {
        return new DietLog([
                'task_id' => Session::get('task_id'),
                'patient_id'=>Session::get('patient_id'),
                'meal_name'=>$row[0],
                'quantity'=>$row[1],
                'created_at'=>Carbon::now(),
        ]);
    }
    //skip first row
    public function startRow(): int
    {
        return 2;
    }
}
