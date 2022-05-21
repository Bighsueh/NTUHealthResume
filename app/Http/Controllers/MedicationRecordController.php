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
use App\Models\CommonReply;

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

            Session::forget('patient_id');
            Session::put('patient_id', $patient_id);

            $patient_no = DB::table('patients')
                ->select('patient_no')
                ->where('patient_id', $patient_id)
                ->first();


            Session::forget('patient_no');
            Session::put('patient_no', $patient_no);

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

            Session::forget('task_id');
            Session::put('task_id', $task_id);

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
                DB::table('other_information')
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

    //儲存其他資訊內容
    public function store_doctor_comment_data(Request $request)
    {
        try {
            //醫師意見
            $doctor_comment = $request->get('doctor_comment');
            //task_id
            $task_id = $request->get('task_id');

            $comment_check =
                DB::table('other_information')
                    ->where('task_id', $task_id)
                    ->first();

            //若存在醫師意見紀錄
            if ($comment_check !== null) {
                DB::table('other_information')
                    ->where('task_id', $task_id)
                    ->update([
                        'task_id' => $task_id,
                        'doctor_id' => $request->session()->get('user_id'),
                        'doctor_comment' => $doctor_comment,
                        'updated_at' => Carbon::now(),
                    ]);
            }

            //若不存在醫師意見紀錄
            if ($comment_check === null) {
                DB::table('other_information')
                    ->insert([
                        'task_id' => $task_id,
                        'doctor_id' => $request->session()->get('user_id'),
                        'doctor_comment' => $doctor_comment,
                        'created_at' => Carbon::now(),
                    ]);
            }

            return 'success';
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    //取得其他資訊-醫師意見內容
    public function get_doctor_comment_data(Request $request)
    {
        try {
            //task_id
            $task_id = $request->get('task_id');
            $doctor_comment = DB::table('other_information')
                ->where('task_id', $task_id)
                ->select('doctor_comment')
                ->first();

            return $doctor_comment;
        } catch (Exception $exception) {
            return $exception;
        }
    }

    //新增任務資料
    function create_task_data(Request $request)
    {
        try {
            //insert task
            $task_id = DB::table('patient_tasks')
                ->insertGetId([
                    'patient_id' => $request->patient_id,
                    'status' => "未開始",
                    'created_at' => date('Y/m/d H:i:s'),
                    'updated_at' => date('Y/m/d H:i:s')
                ]);
            //insert otherInfo
            DB::table('other_information')
                ->insert([
                    'task_id' => $task_id,
                ]);


            return 'success';
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
            if ($record_id == null) return 'no record id';
            //detail_rows 判斷
            if ($detail_rows == null) return 'no detail rows';

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

    //export MedicationRecords
    public function export_medication_records()
    {
        return Excel::download(new MedicationRecordsExport, 'MedicationRecords.xlsx');

    }

    //儲存MedicationRecords預覽畫面的資料
    public function import_medication_records(Request $request)
    {

        try {
            $data = $request->import_data;
            $count = 0;
            $patient = DB::table('patients')
                ->where('patient_id', Session::get('patient_id'))
                ->first();
            $last_record_id = null;
            foreach ($data as $row) {
                $now_time = Carbon::now();

                if ($row['date_of_examination'] != 'null') {
                    DB::table('medication_records')
                        ->insert([
                            'date_of_examination' => $row['date_of_examination'],
                            'patient_no' => $patient->patient_no,
                            'redate' => $row['redate'],
                            'pres_hosp' => $row['pres_hosp'],
                            'disp_hosp' => $row['disp_hosp'],
                            'created_at' => $now_time,
                            'updated_at' => $now_time
                        ]);
                    $last_record_id = DB::table('medication_records')
                        ->where('created_at', $now_time)
                        ->where('patient_no', $patient->patient_no)
                        ->where('date_of_examination', $row['date_of_examination'])
                        ->where('redate', $row['redate'])
                        ->where('pres_hosp', $row['pres_hosp'])
                        ->where('disp_hosp', $row['disp_hosp'])
                        ->first()->record_id;
                }
//                Log::debug($last_record_id);
                DB::table('medication_record_detail')
                    ->insert([
                        'record_id' => $last_record_id,
                        'trade_name' => $row['trade_name'],
                        'generic_name' => $row['generic_name'],
                        'dose' => $row['dose'],
                        'dose_per_unit' => $row['dose_per_unit'],
                        'daily_dose' => $row['daily_dose'],
                        'freq' => $row['freq'],
                        'created_at' => $now_time,
                        'updated_at' => $now_time
                    ]);
//                Log::debug($last_record_id);
            }

            return 'success';
        } catch (Exception $e) {
            return $e;
        }


    }

    //讀取import的Excel回傳進預覽畫面
    public function previewExcel(Request $request)
    {
        $file = $request->file('upload_file');
//        Log::debug('previewExcell');
        try {//
            $importdata = Excel::toArray(new previewExcelImport(), $file);

            $data = $importdata[0];
//            Log::debug($data);
            return $data;
        } catch (Exception $e) {
            return $e;
        }
    }

    //下載範例Excel
    public function get_medication_records_excel_example()
    {
        return response()->download(public_path('assets\files\MedicationRecordsExample.xlsx'));
    }

    //取得常用字詞
    public function get_common_reply_data()
    {
        try {
            $reply_content = DB::table('common_reply')
                ->get();
            return $reply_content;
        } catch (Exception $exception) {
            return $exception;
        }
    }

    //儲存常用字詞
    public function store_common_reply_data(Request $request)
    {
        try {
            $common_reply = $request->get('common_reply');
            CommonReply::truncate();
            if ($common_reply !== null) {
                if ($common_reply)
                    foreach ($common_reply as $key => $value) {
                        CommonReply::create([
                            'reply_content' => $value
                        ]);
                    }
                return 'success';
            }
            return 'common_reply_is_null';
        } catch (Exception $exception) {
            return $exception;
        }
    }

    //從陣列搜尋name取得value
    private function get_array_value_by_key($array, $value)
    {
        $key = 'name';
        $results = array();

        //取得該筆陣列資料
        if (is_array($array)) {
            if (isset($array[$key]) && $array[$key] == $value) {
                $results[] = $array;
            }
            foreach ($array as $subarray) {
                $results = array_merge($results, $this->get_array_value_by_key($subarray, $value));
            }
        }
        return $results;
    }

    //取得first row的value,並將例外回傳設為空字串
    private function get_value_from_first_row($form_data,$name){
        try{
            return $this->get_array_value_by_key($form_data,$name)[0]['value'];
        }catch (Exception $exception){
            return '';
        }
    }

    //其他資訊欄位資訊儲存
    public function store_other_info_data(Request $request)
    {
        try {
            //form data
            $form_data = $request->get('form_data');
            //task_id
            $task_id = $request->get('task_id');
            //將資料寫入table->other_information
            DB::table('other_information')
                ->where('task_id', $task_id)
                ->update([
                    'Weight' => $this->get_value_from_first_row($form_data,'Weight'),
                    'Height' => $this->get_value_from_first_row($form_data,'Height'),
                    'Diagnosis' => $this->get_value_from_first_row($form_data,'Diagnosis'),
                    'Surgery' => $this->get_value_from_first_row($form_data,'Surgery'),
                    'Hb' => $this->get_value_from_first_row($form_data,'Hb'),
                    'Alb' => $this->get_value_from_first_row($form_data,'Alb'),
                    'AST' => $this->get_value_from_first_row($form_data,'AST'),
                    'Cre' => $this->get_value_from_first_row($form_data,'Cre'),
                    'CCr' => $this->get_value_from_first_row($form_data,'CCr'),
                    'Suger' => $this->get_value_from_first_row($form_data,'Suger'),
                    'HbA1C' => $this->get_value_from_first_row($form_data,'HbA1C'),
                    'TCHO' => $this->get_value_from_first_row($form_data,'TCHO'),
                    'TG' => $this->get_value_from_first_row($form_data,'TG'),
                    'LDL' => $this->get_value_from_first_row($form_data,'LDL'),
                    'UA' => $this->get_value_from_first_row($form_data,'UA'),
                    'HDL' => $this->get_value_from_first_row($form_data,'HDL'),
                    'Fall' => $this->get_value_from_first_row($form_data,'Fall'),
                    'medication_adherence_1' => $this->get_value_from_first_row($form_data,'medication_adherence_1[]'),
                    'medication_adherence_2' => $this->get_value_from_first_row($form_data,'medication_adherence_2[]'),
                    'medication_adherence_3' => $this->get_value_from_first_row($form_data,'medication_adherence_3[]'),
                    'drug_side_effect' => $this->get_value_from_first_row($form_data,'drug_side_effect[]'),
                    'drug_side_effect_text' => $this->get_value_from_first_row($form_data,'drug_side_effect_text'),
                    'other_information_modal_textarea' => $this->get_value_from_first_row($form_data,'other_information_modal_textarea'),
                    'updated_at' => Carbon::now(),
                ]);

            return 'success';
        } catch (Exception $exception) {
            return $exception;
        }
    }

    //取得其他資訊資料(用task_id查詢)
    public function get_other_info_data(Request $request)
    {
        try{
            //task_id
            $task_id = $request->task_id;

            //其他資訊
            $other_info = DB::table('other_information')
                ->where('task_id',$task_id)
                ->first();

            return $other_info;
        }catch (Exception $exception){
            return $exception;
        }
    }
}
