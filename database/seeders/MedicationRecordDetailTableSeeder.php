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
            'trade_name' => '普拿疼伏冒錠',
            'generic_name' => 'Acetaminophen',
            'dose' => 3,
            'dose_per_unit' => 1,
            'daily_dose' => 3,
            'freq' => '一天三次',
        ]);
        DB::table('medication_record_detail')->insert([
            'detail_id' => 2,
            'record_id' => 1,
            'trade_name' => '普拿疼伏冒錠',
            'generic_name' => 'Acetaminophen',
            'dose' => 3,
            'dose_per_unit' => 1,
            'daily_dose' => 3,
            'freq' => '一天三次',
        ]);
        DB::table('medication_record_detail')->insert([
            'detail_id' => 3,
            'record_id' => 2,
            'trade_name' => '普拿疼伏冒錠',
            'generic_name' => 'Acetaminophen',
            'dose' => 3,
            'dose_per_unit' => 1,
            'daily_dose' => 3,
            'freq' => '一天三次',
        ]);
    }
}
