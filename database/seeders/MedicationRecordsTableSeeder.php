<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Facade\FlareClient\Time\Time;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MedicationRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('medication_records')->insert([
            'date_of_examination' => Carbon::now(),
            'redate' => Carbon::now(),
            'pres_hosp' => '醫院A',
            'disp_hosp' => '醫院B',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        DB::table('medication_records')->insert([
            'date_of_examination' => Carbon::now(),
            'redate' => Carbon::now(),
            'pres_hosp' => '診所A',
            'disp_hosp' => '診所B',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
    }
}
