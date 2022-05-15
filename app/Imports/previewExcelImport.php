<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Log;


class previewExcelImport implements ToCollection
{
    //讀取Excel回傳陣列
    public function  collection(Collection $rows)
    {


        return $rows;
    }
}
