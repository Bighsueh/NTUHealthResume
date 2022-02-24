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
            'patient_id' => '1',
            'date_of_examination' => Carbon::now(),
            'medical_history_no' => '1',
            'insurance_type' => '保險別',
            'redate' => Carbon::now(),
            'pres_hosp' => '醫院A',
            'disp_hosp' => '醫院B',
        ]);
        DB::table('medication_records')->insert([
            'patient_id' => '2',
            'date_of_examination' => Carbon::now(),
            'medical_history_no' => '1',
            'insurance_type' => '保險別',
            'redate' => Carbon::now(),
            'pres_hosp' => '診所A',
            'disp_hosp' => '診所B',
        ]);
        DB::table('medication_records')->insert([
            'patient_id' => '3',
            'date_of_examination' => Carbon::now(),
            'medical_history_no' => '1',
            'insurance_type' => '自付額',
            'redate' => Carbon::now(),
            'pres_hosp' => '醫院B',
            'disp_hosp' => '醫院C',
        ]);
    }
}
