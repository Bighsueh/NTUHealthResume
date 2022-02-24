<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorFeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctor_feedback')->insert([
            'doctor_feedback_id' => 1,
            'patient_id' => 1,
            'record_id' => 1,
            'doctor_id' => 1,
            'content' => '小弟，我看你骨骼精奇， 是百年難得一見的練武奇才呀！',
        ]);
    }
}
