<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DietLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diet_log')->insert([
            'id' =>'1',
            'patient_id' =>'1',
            'meal_name' =>'雞胸肉',
            'quantity' =>'1.5',
            'img_src' =>'',
            'remark' =>'',
        ]);
        DB::table('diet_log')->insert([
            'id' =>'2',
            'patient_id' =>'1',
            'meal_name' =>'咖哩',
            'quantity' =>'2.5',
            'img_src' =>'',
            'remark' =>'',
        ]);
    }
}
