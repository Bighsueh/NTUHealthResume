<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgressController extends Controller
{
    //取得進度資訊
    public function get_progress_data(Request $request)
    {
        try{
            $task_id = $request->task_id;
            $progress = DB::table('work_progress')
                ->where('task_id',$task_id)
                ->orderByDesc('progress_id')
                ->get();
            return $progress;
        }catch (\Exception $exception){
            return $exception;
        }
    }

    //取得藥歷列表
    public function get_medication_record_list()
    {
        try{
            $record_list = DB::table('work_progress')
                ->join('patient_tasks','work_progress.task_id','=','patient_tasks.task_id')
                ->join('patients','patient_tasks.patient_id','=','patients.patient_id')
                ->join('employees','work_progress.reporter_id','=','employees.employee_id')
                ->select(
                'patients.patient_name',
                        'work_progress.content',
                        'employees.employee_name',
                        'work_progress.created_at',
                        'work_progress.task_id')
                ->get();
            return $record_list;
        }catch (\Exception $exception){
            return $exception;
        }
    }
}
