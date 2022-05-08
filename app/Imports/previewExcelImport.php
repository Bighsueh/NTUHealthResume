<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Log;


class previewExcelImport implements ToCollection
{

    public function  collection(Collection $rows)
    {


        return $rows;
    }
}
