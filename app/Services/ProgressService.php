<?php
namespace App\Services;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProgressService
{
    //新增任務資料
    public function add_progress_data($patient_no,$task_type,$reporter_id,$content,$task_id=null)
    {
        try{
            /*
            task_id         id
            patient_no      病患編號
            task_type       任務類型
            reporter_id     回報者id
            content         進度內容
            */

            //將資料新增進任務進度中
            DB::table('work_progress')
                ->insert([
                    'task_id' => $task_id,
                    'patient_no' => $patient_no,
                    'task_type' => $task_type,
                    'reporter_id' => $reporter_id,
                    'content' => $content,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);

            return 'success';
        }catch (\Exception $exception){
            return $exception;
        }
    }
}
