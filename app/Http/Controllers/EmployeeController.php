<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    function get_setting_employee(){

        $employees = DB::table('employees')
            ->get();
//        dd($employees);

        return view('pages.setting.employee.settingEmployee',compact('employees'));
    }

    function get_edit_employee(Request $request){
        try{

            $employee_id = $request->employee_id;
            $employee_data = DB::table('employees')
                ->where('employee_id',$employee_id)
                ->get();

            return $employee_data;
        }catch (Exception $exception){
            return $exception;
        }

    }
    function store_edit_employee(Request $request){
        try{

            DB::table('employees')
                ->where('employee_id',$request->employee_id)
                ->update([
                    'employee_name' => $request->employee_name,
                    'employee_account' => $request->employee_account,
                    'employee_password' => $request->employee_password,
                    'job_title' => $request->job_title,
                    'department' => $request->department,


                ]);


            return '修改成功';
        }catch (Exception $exception){
            return $exception;
        }

    }

    function store_create_employee(Request $request){
        try{

            DB::table('employees')
                ->insert([
                    'employee_id' => $request->employee_id,
                    'employee_name' => $request->employee_name,
                    'employee_account' => $request->employee_account,
                    'employee_password' => $request->employee_password,
                    'job_title' => $request->job_title,
                    'department' => $request->department,
                    'open_main_task' => 1,
                    'add_doctor_reply' => 1,
                    'add_pharmacist_reply' => 1,
                    'close_main_task' => 1,
                    'add_diet_log' => 1,
                    'add_nutritionist' => 1,
                    'manage_employee' => 1,
                    'manage_patient' => 1

                ]);


            return '新增成功';
        }catch (Exception $exception){
            return $exception;
        }

    }

    function get_employee_data(Request $request){
       try{

       }catch (Exception $exception){
           return $exception;
       }
    }


}
