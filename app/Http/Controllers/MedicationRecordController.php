<?php

namespace App\Http\Controllers;

use App\Imports\DietLogImport;
use App\Imports\MedicationRecordDetailImport;
use App\Imports\previewExcelImport;
use App\Models\MedicationRecordDetail;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Exports\MedicationRecordsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MedicationRecordsImport;
use Illuminate\Support\Facades\Log;

class MedicationRecordController extends Controller
{
    //開啟用藥管理系統-病患列表介面
    public function get_patient_list_page(Request $request)
    {
        $patient_list = DB::table('patients')->select('patient_id', 'patient_name', 'place', 'id_number', 'patient_bd')->get();
        $result = ['patient_list' => $patient_list];
        return view('pages.medicationManagement.patientList', $result);
    }

    //開啟用藥管理系統-個別病患任務列表
    public function get_task_list_page(Request $request)
    {
        try {
            //病患id
            $patient_id = $request->get('patient_id');

            //依照病患id取得patient_tasks資料
            $task_list = DB::table('patient_tasks')
                ->where('patient_id', $patient_id)
                ->get();

            $result = ['task_list' => $task_list, 'patient_id' => $patient_id];

            return view('pages.medicationManagement.taskList', $result);
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    //開啟用藥管理系統-藥歷列表頁面
    public function get_task_detail_page(Request $request)
    {
        try {
            //task_id
            $task_id = $request->get('task_id');

            //藥歷列表
            $medication_records =
                DB::table('medication_records')
                    ->get();

            //藥師回饋單
            $pharmacist_feedback =
                DB::table('pharmacist_feedback')
                    ->where('task_id', $task_id)
                    ->first();

            //醫師回饋單
            $doctor_feedback =
                DB::table('doctor_feedback')
                    ->where('task_id', $task_id)
                    ->first();

            foreach ($medication_records as $row) {
                $record_id = $row->record_id;

                $row->record_detail =
                    DB::table('medication_record_detail')
                        ->where('record_id', $record_id)
                        ->get();
            }

            $result = [
                'task_id' => $task_id,
                'medication_records' => $medication_records,
                'pharmacist_feedback' => $pharmacist_feedback,
                'doctor_feedback' => $doctor_feedback,
            ];
            return view('pages.medicationManagement.taskDetail', $result);
        } catch (\Exception $exception) {
            return $exception;
        }

    }

    //儲存藥師回饋單內容
    public function store_pharmacist_feedback_data(Request $request)
    {
        try {
            //要回覆病患的內容
            $pharmacist_reply = $request->get('pharmacist_reply');
            //向醫師提問(選填)
            $ask_to_doctor = $request->get('ask_to_doctor');
            //task_id
            $task_id = $request->get('task_id');
            //user_name
            $user_name = $request->session()->get('user_name');

            //先確認是否存在藥師回覆紀錄
            $reply_check =
                DB::table('pharmacist_feedback')
                    ->where('task_id', $task_id)
                    ->first();

            //若存在藥師回覆紀錄
            if ($reply_check) {
                DB::table('pharmacist_feedback')
                    ->where('task_id', $task_id)
                    ->update([
                        'task_id' => $task_id,
                        'pharmacist_id' => $user_name,
                        'pharmacist_reply' => $pharmacist_reply,
                        'pharmacist_question' => $ask_to_doctor,
                        'updated_at' => Carbon::now(),
                    ]);
            }

            //若不存在藥師回覆紀錄
            if (!$reply_check) {
                DB::table('pharmacist_feedback')
                    ->insert([
                        'task_id' => $task_id,
                        'pharmacist_id' => $user_name,
                        'pharmacist_reply' => $pharmacist_reply,
                        'pharmacist_question' => $ask_to_doctor,
                        'created_at' => Carbon::now(),
                    ]);
            }

            return 'success';
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    //儲存醫師回饋單內容
    public function store_doctor_feedback_data(Request $request)
    {
        try {
            //醫師回覆藥師的內容
            $doctor_reply = $request->get('doctor_reply');
            //task_id
            $task_id = $request->get('task_id');

            $reply_check =
                DB::table('doctor_feedback')
                    ->where('task_id', $task_id)
                    ->first();

            //若存在醫師回覆紀錄
            if ($reply_check) {
                DB::table('doctor_feedback')
                    ->where('task_id', $task_id)
                    ->update([
                        'task_id' => $task_id,
                        'doctor_id' => $request->session()->get('user_name'),
                        'doctor_reply' => $doctor_reply,
                        'updated_at' => Carbon::now(),
                    ]);
            }

            //若不存在醫師回覆紀錄
            if (!$reply_check) {
                DB::table('doctor_feedback')
                    ->insert([
                        'task_id' => $task_id,
                        'doctor_id' => $request->session()->get('user_name'),
                        'doctor_reply' => $doctor_reply,
                        'created_at' => Carbon::now(),
                    ]);
            }

            return 'success';
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    function create_task_data(Request $request)
    {
        try {
            DB::table('patient_tasks')
                ->insert([
                    'patient_id' => $request->patient_id,
                    'status' => "未開始",
                    'created_at' => date('Y/m/d H:i:s'),
                    'updated_at' => date('Y/m/d H:i:s')
                ]);
            return true;
        } catch (Exception $exception) {
            return $exception;
        }

    }

    //任務列表查詢
    function get_task_data(Request $request)
    {
        try {
            $data = DB::table('patient_tasks')
                ->orWhere('created_at', 'like', '%' . $request->search_time . '%')
                ->orWhere('updated_at', 'like', '%' . $request->search_time . '%')
                ->orWhere('finish_date', 'like', '%' . $request->search_time . '%')
                ->get();
            return $data;
        } catch (Exception $exception) {
            return $exception;
        }
    }

    //刪除任務
    function delete_task_data(Request $request)
    {
        try {
            DB::table('patient_tasks')
                ->where('task_id', $request->task_id)
                ->delete();
            return true;
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    //取得藥歷列表資訊(包含record及record_detail)
    public function get_record_data(Request $request)
    {
        try {
            //record_id
            $record_id = $request->get('record_id');

            //藥歷母表 medication_records
            $record_data = DB::table('medication_records')
                ->where('record_id', $record_id)
                ->select('date_of_examination', 'redate', 'pres_hosp', 'disp_hosp')
                ->first();
//            dd($record_data);

            //record_detail_data
            $record_detail_data = DB::table('medication_record_detail')
                ->where('record_id', $record_id)
                ->select('trade_name', 'generic_name', 'dose', 'freq')
                ->get();

            //圖片路徑
            $image_urls = [];
            $image_array = DB::table('medication_records')
                ->where('record_id', $record_id)
                ->select('images')->first();

            $image_array = explode(',', $image_array->images);

            foreach ($image_array as $image_id) {
                if ($image_id) {
                    $path = DB::table('images')
                        ->where('image_id', $image_id)
                        ->select('file_path')->first();
                    $path = asset('/storage/' . $path->file_path);

                    array_push($image_urls, $path);
                }
            }


            $result = [
                'record_data' => $record_data,
                'record_detail_data' => $record_detail_data,
                'image_urls' => $image_urls,
            ];

            return $result;
        } catch (Exception $exception) {
            return $exception;
        }

    }

    //建立藥物紀錄
    public function create_medication_record(Request $request)
    {
        try {
            //取得今日日期，並依照日期建立資料夾
            $date = date('Y-m-d');
            //圖片們
            $image_list = [];

            //取得傳入的檔案
            $files = $request->file();

            foreach ($files as $file) {
                //將傳入的檔案儲存至資料夾，
                $image_path = $file->store("{$date}", "public");

                //將檔案存入local，並取得table_id
                $image_id = DB::table('images')->insertGetId([
                    'file_path' => $image_path,
                    'created_at' => Carbon::now(),
                ]);

                array_push($image_list, $image_id);
            }

            DB::table('medication_records')->insert([
                'date_of_examination' => $request->get('date_of_examination'),
                'redate' => $request->get('redate'),
                'pres_hosp' => $request->get('pres_hosp'),
                'disp_hosp' => $request->get('disp_hosp'),
                'images' => implode(',', $image_list),
                'created_at' => Carbon::now(),
            ]);

            return 'success';
        } catch (Exception $exception) {
            return $exception;
        }


        return 'success';
    }

    //儲存藥歷列表資訊
    public function store_medication_record_detail(Request $request)
    {
        try {
            $record_id = $request->get('record_id'); //Record_id
            $record_data = $request->get('record_data'); //Record_data
            $detail_rows = $request->get('detail_rows'); //RecordDetails

            //record_id 空值判斷
            if($record_id == null) return 'no record id';
            //detail_rows 判斷
            if($detail_rows == null) return 'no detail rows';

            //修改record data(藥單資訊)
            DB::table('medication_records')
                ->where('record_id', $record_id)
                ->update([
                    'date_of_examination' => $record_data['date_of_examination'],
                    'redate' => $record_data['redate'],
                    'pres_hosp' => $record_data['pres_hosp'],
                    'disp_hosp' => $record_data['disp_hosp'],
                ]);

            //先將對應Record_id的資料清除
            DB::table('medication_record_detail')
                ->where('record_id', $record_id)
                ->delete();

            foreach ($detail_rows as $row) {
                //將收到的更改資料寫入
                DB::table('medication_record_detail')
                    ->insert([
                        'record_id' => $record_id,
                        'trade_name' => $row['trade_name'],
                        'generic_name' => $row['generic_name'],
                        'dose' => $row['dose'],
                        'freq' => $row['freq'],
                    ]);
            }

            return 'success';
        } catch (Exception $exception) {
            return $exception;
        }


    }

    public function export_medication_records()
    {
        return Excel::download(new MedicationRecordsExport, 'MedicationRecords.xlsx');

    }

    public function import_medication_records(Request $request)
    {

        try
        {
            $data = $request->import_data;
            $count = 0;
            foreach ($data as $row){
                if($count == 0) {
                    $count = $count + 1;
                    continue;
                }
                DB::table('medication_records')->insert([
                    'date_of_examination' => $row[1],
                    'redate' => $row[2],
                    'pres_hosp' => $row[3],
                    'disp_hosp' => $row[4],
                    'updated_at' => Carbon::now()
                ]);
                DB::table('medication_record_detail')->insert([
                    'record_id' => $row[0],
                    'trade_name' => $row[5],
                    'generic_name' => $row[6],
                    'dose' => $row[7],
                    'freq' => $row[8]
                ]);

            }

            return 'success';
        }catch (Exception $e)
        {
            return $e;
        }


    }
    public function previewExcel(Request $request)
    {
        $file = $request->file('upload_file');
//        Log::debug('previewExcell');
        try{//
            $importdata = Excel::toArray(new previewExcelImport(), $file);

            $data = $importdata[0];
//            Log::debug($data);
            return $data;
        }catch (Exception $e)
        {
            return $e;
        }
    }


}
