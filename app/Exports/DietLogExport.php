<?php

namespace App\Exports;


use App\Models\DietLog;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;
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
            'DietLog' => DietLog::where('patient_id', Session::get('patient_id'))->where('task_id', Session::get('task_id'))->get()
        ]);
    }
}
