<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            'patient_id' => 1,
            'patient_no' => 'A12345',
            'close_date' => '110-02-4',
            'place' => '工專',
            'id_number' => 'C12345678',
            'patient_name' => 'thx',
            'patient_bd' => '09-18',
            'age' => '21',
            'weight' => '60',
            'height' => '180'

        ]);

        DB::table('patients')->insert([
            'patient_id' => 2,
            'patient_no' => '145',
            'close_date' => '110-03-9',
            'place' => '文化',
            'id_number' => 'C87654321',
            'patient_name' => 'yoyo',
            'patient_bd' => '03-12',
            'age' => '20',
            'weight' => '70',
            'height' => '169'

        ]);
    }
}
