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
        $user_name = Session::get('user_name');
        return view('pages.setting.employee.settingEmployee',compact('employees','user_name'));
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
                    'open_main_task' => $request->open_main_task,
                    'add_doctor_reply' => $request->add_doctor_reply,
                    'add_pharmacist_reply' => $request->add_pharmacist_reply,
                    'close_main_task' => $request->close_main_task,
                    'add_diet_log' => $request->add_diet_log,
                    'add_nutritionist' => $request->add_nutritionist,
                    'manage_employee' => $request->manage_employee,
                    'manage_patient' => $request->manage_patient

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
                    'open_main_task' => $request->open_main_task,
                    'add_doctor_reply' => $request->add_doctor_reply,
                    'add_pharmacist_reply' => $request->add_pharmacist_reply,
                    'close_main_task' => $request->close_main_task,
                    'add_diet_log' => $request->add_diet_log,
                    'add_nutritionist' => $request->add_nutritionist,
                    'manage_employee' => $request->manage_employee,
                    'manage_patient' => $request->manage_patient

                ]);


            return '新增成功';
        }catch (Exception $exception){
            return $exception;
        }

    }

    function get_employee_data(Request $request){
       try{
            $data = DB::table('employees')
                ->where($request->search_from,'like','%'.$request->search_data.'%')
                ->get();
            return $data;
       }catch (Exception $exception){
           return $exception;
       }
    }

    function delete_employee(Request $request){
        try{
            DB::table('employees')->where('employee_id',$request->employee_id)->delete();
            return '刪除成功';
        }catch (Exception $exception){

        }
    }


}
