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
        $this->call(EmployeeTableSeeder::class);
        $this->call(DietLogTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(MedicationRecordsTableSeeder::class);
        $this->call(MedicationRecordDetailTableSeeder::class);
        $this->call(PatientTasksTableSeeder::class);
        $this->call(WorkProgressSeeder::class);
    }
}
