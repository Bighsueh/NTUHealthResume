<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DietLogTableSeeder::class);
        $this->call(NutritionIngredientTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(MedicationRecordsTableSeeder::class);
        $this->call(DoctorFeedbackTableSeeder::class);
        $this->call(PatientTasksTableSeeder::class);
    }
}
