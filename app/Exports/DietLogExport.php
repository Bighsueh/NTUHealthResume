<?php

namespace App\Exports;


use App\Models\DietLog;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;


class DietLogExport implements FromView,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {

        $data = DB::table('meal_order')
            ->select('meal_order.id','meal_order.meal_order','meal_order.created_at','meal_order.updated_at','diet_log.meal_name','diet_log.quantity','diet_log.remark')
            ->LeftJoin('diet_log','meal_order.id','=','diet_log.task_id')
            ->orderBy('meal_order.id', 'asc')->get();

        return view('pages.nutritionManagement.excelDownloadPage', [
            'data' => $data,
        ]);
    }

    public function registerEvents(): array
    {

        return [
            AfterSheet::class => function(AfterSheet $event) {
                $data = DB::table('meal_order')
                    ->select('meal_order.id','meal_order.meal_order','meal_order.created_at','meal_order.updated_at','diet_log.meal_name','diet_log.quantity','diet_log.remark')
                    ->LeftJoin('diet_log','meal_order.id','=','diet_log.task_id')
                    ->orderBy('meal_order.id', 'asc')->get();
                $counts = [];
                $c = 1;
                for($i = 0; $i <= count($data)-2 ; $i++)
                {
                    if($data[$i]->id == $data[$i+1]-> id)
                    {
                        $c++;
                    }
                    else
                    {
                        array_push($counts, $c);
                        $c = 1;
                    }
                }
                $now_column = 2;
//                dd($counts);
                foreach ($counts as $c)
                {
                    if($c != 1)
                    {
                        $next_column = $now_column + $c - 1;
                        $s = 'A' . $now_column . ':A'.($next_column);
                        $event->sheet->getDelegate()->mergeCells($s);
                        $now_column = $next_column+1;
                    }

                }


            },
        ];
    }
}

