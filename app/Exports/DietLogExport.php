<?php

namespace App\Exports;


use App\Models\DietLog;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DietLogExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        return view('pages.nutritionManagement.excelDownloadPage', [
            'DietLog' => DietLog::all()
        ]);
    }
}
