<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NutritionIngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nutrition_ingredient')->insert([
            'id' =>'1',
            'diet_log_id' =>'1',
            'carbohydrate' =>'1.56',
            'protein' =>'1.55',
            'fat' =>'1.5',
            'cal' =>'1.6',
            'na' =>'1.7',
            'k' =>'1.8',
            'ca' =>'1.9',
            'mg' =>'2.1',
            'vit_b12' =>'2.2',
            'vit_d' =>'2.3',
            'vit_e' =>'2.4',
        ]);
        DB::table('nutrition_ingredient')->insert([
            'id' =>'2',
            'diet_log_id' =>'1',
            'carbohydrate' =>'1.56',
            'protein' =>'1.57',
            'fat' =>'1.5',
            'cal' =>'1.6',
            'na' =>'1.7',
            'k' =>'1.8',
            'ca' =>'1.9',
            'mg' =>'2.1',
            'vit_b12' =>'2.2',
            'vit_d' =>'2.3',
            'vit_e' =>'2.4',
        ]);
    }
}
