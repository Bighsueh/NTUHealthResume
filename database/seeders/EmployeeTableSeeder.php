<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diet_log')->insert([
            'employee_no' => 'test',
            'employee_name' => 'test',
            'employee_account' => 'test',
            'employee_password' => 'test',
            'job_title' => 'test',
            'department' => 'test',
            'admin' => 1,
            'open_main_task' => 1,
            'add_doctor_reply' => 1,
            'add_pharmacist_reply' => 1,
            'close_main_task' => 1,
            'add_diet_log' => 1,
            'add_nutritionist' => 1,
            'manage_employee' => 1,
            'manage_patient' => 1,
        ]);
    }
}
