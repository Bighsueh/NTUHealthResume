<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicationRecordDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medication_record_detail')->insert([
            'detail_id' => 1,
            'record_id' => 1,
            'indication' => '有病治病無病強身',
            'category' => '仙丹',
            'trade_name' => '萬靈丹',
            'generic_name' => '靈芝',
            'dose' => 3,
            'routes' => '口服',
            'freq' => '一天三次',
            'pres_day' => 3,
            'total_amount' => 3,
            'note' => '無',
        ]);
        DB::table('medication_record_detail')->insert([
            'detail_id' => 2,
            'record_id' => 1,
            'indication' => '有病治病無病強身',
            'category' => '仙丹',
            'trade_name' => '萬靈丹',
            'generic_name' => '靈芝',
            'dose' => 3,
            'routes' => '口服',
            'freq' => '一天三次',
            'pres_day' => 3,
            'total_amount' => 3,
            'note' => '無',
        ]);
        DB::table('medication_record_detail')->insert([
        'detail_id' => 3,
        'record_id' => 1,
        'indication' => '有病治病無病強身',
        'category' => '仙丹',
        'trade_name' => '萬靈丹',
        'generic_name' => '靈芝',
        'dose' => 3,
        'routes' => '口服',
        'freq' => '一天三次',
        'pres_day' => 3,
        'total_amount' => 3,
        'note' => '無',
    ]);
    }
}
