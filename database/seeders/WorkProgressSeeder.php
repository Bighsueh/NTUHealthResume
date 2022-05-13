<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_progress')->insert([
            'progress_id' => 1,
            'task_id' => '1',
            'reporter_id' => 1,
            'content' => 'case_created',
            'created_at'=>'2022-03-10 23:50:52',
            'updated_at'=>'2022-03-10 23:50:52',
        ]);

        DB::table('work_progress')->insert([
            'progress_id' => 2,
            'task_id' => '1',
            'reporter_id' => 1,
            'content' => 'other_info',
            'created_at'=>'2022-03-09 23:50:52',
            'updated_at'=>'2022-03-09 23:50:52',
        ]);
    }
}
