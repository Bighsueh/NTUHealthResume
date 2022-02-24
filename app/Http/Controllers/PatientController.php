<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PatientController extends Controller
{
    function get_setting_patient(){

        $patients = DB::table('patients')->get();

        return view('pages.setting.patient.settingPatient',compact('patients'));
    }

    function get_patient_data(Request $request){
        try{
            $patient = DB::table('patients')
                ->where($request->search_from,'like','%'.$request->search_data.'%')
                ->get();

            return $patient;
        }catch (Exception $exception){
            return $exception;
        }
    }
    function get_edit_patient(Request $request){
        try{
            $patient = DB::table('patients')
                ->where('patient_id',$request->patient_id)
                ->get();

            return $patient;
        }catch (Exception $exception){
            return $exception;
        }
    }
    function store_create_patient(Request $request){
        try{
            DB::table('patients')
                ->insert([
                    'patient_id' => $request->patient_id,
                    'patient_no' => $request->patient_no,
                    'close_date' => $request->close_date,
                    'place' => $request->place,
                    'id_number' => $request->id_number,
                    'patient_name' => $request->patient_name,
                    'patient_bd' => $request->patient_bd,
                    'age' => $request->age,
                    'weight' => $request->weight,
                    'height' => $request->height
                ]);

            return '新增成功';
        }catch (\Exception $exception){
            return $exception;
        }
    }

    function store_edit_patient(Request $request){
        try{
            DB::table('patients')
                ->where('patient_id',$request->patient_id)
                ->update([
                    'patient_no' => $request->patient_no,
                    'close_date' => $request->close_date,
                    'place' => $request->place,
                    'id_number' => $request->id_number,
                    'patient_name' => $request->patient_name,
                    'patient_bd' => $request->patient_bd,
                    'age' => $request->age,
                    'weight' => $request->weight,
                    'height' => $request->height
                ]);

                return '修改成功';
        }catch (Exception $exception){
            return $exception;
        }
    }
    function delete_patient(Request $request){
        try{
            DB::table('patients')->where('patient_id',$request->patient_id)->delete();
            return '刪除成功';
        }catch (\Exception $exception){
            return  $exception;
        }
    }
}
