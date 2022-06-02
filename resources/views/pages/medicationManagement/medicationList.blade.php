@extends('layouts.main.menu')
@section('content')
    <!-- task_id -->
    <!-- content -->
    <div class="w-screen flex-1">
        <div class="p-4 bg-Slate-50 text-center">
            <div class="h-full">
                <form class="w-full">
                    <div class="flex items-center border-b border-teal-700 py-2 mx-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 h-6 w-6 text-gray-7700" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        <input
                            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            type="text" placeholder="請輸入欲查詢資料">
                        <button
                            class="mx-4 flex-shrink-0 bg-teal-700 hover:bg-teal-500 border-teal-700 hover:border-teal-500 text-sm border-4 text-white py-1 px-2 rounded"
                            type="button">
                            <p class="mx-4">
                                搜尋
                            </p>
                        </button>
                    </div>
                </form>
                <!--search bar-->
                <div class="flex justify-start">
                    <div class="flex">
                        <div class="mx-6 mt-4 flex items-end">
                            <p class="text-3xl mb-2 font-bold">用藥管理系統</p>
                        </div>
                    </div>
                </div> <!-- search bar-->
            </div>
            <!--content status & search bar h container-->
        </div>
        <!--content status & search bar w container-->

        <div class="lg:p-8 md:p-6 sm:p-2 bg-gray-200">
            <!--數據統計-->
            <div class="grid">
                <p class="mx-4 my-2 justify-self-start font-bold text-xl">功能操作</p>
                <div class="grid lg:grid-cols-2 2xl:grid-cols-4">
                    <!--數據欄位-->
                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">
                        <div class="flex items-center xl:mx-4 lg:px-5 my-2 content-around">
                            <div class="flex grid">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                            <div class="mx-2 grid grid-cols-1 w-full">
                                <p class="text-xl text-gray-600 px-2">新增藥歷</p>
                                <div class="grid grid-cols-1 w-full">
                                    <div
                                        id="btn-create-medication-record"
                                        data-bs-toggle="modal" data-bs-target="#createMedicationRecordModel"
                                        class="mx-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 rounded">
                                        手動操作
                                    </div>
{{--                                    <div--}}
{{--                                        id="btn-medication-record-excel"--}}
{{--                                        --}}{{--                                    data-bs-toggle="modal" data-bs-target="#"--}}
{{--                                        onclick="location.href='{{route('export_medication_records_excel')}}';"--}}
{{--                                        class="mx-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 rounded btn-medication-record-excel">--}}
{{--                                        Excel操作--}}
{{--                                    </div>--}}
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="grid">
                <div class="flex justify-between ">
                    <p class="mx-4 my-2 justify-self-start font-bold text-xl">藥歷列表</p>
                </div>
                <div class="overflow-y-scroll h-screen">
                    @foreach($medication_records as $row)
                        <div class="flex ">
                            <!--單筆藥歷共通項目-->
                            <div class="content-between grid rounded m-2 flex-none bg-gray-50 p-4 w-1/f6">
                                <div class="mb-2">
                                    <p>開方日期：</p>
                                    <p>{{$row->redate}}</p>
                                </div>
                                <div hidden class="record_id">{{$row->record_id}}</div>
                                <a class="btn-open-medication-record-detail-modal col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded"
                                   data-bs-toggle="modal" data-bs-target="#medicationRecordDetailModel">
                                    詳細內容
                                </a>
                            </div>

                            <!--單筆藥歷藥品列向-->
                            <div class="rounded m-2 flex-auto bg-gray-50 p-4">
                                <table class="divide-y divide-gray-200 min-w-full">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                            藥品名稱
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                            藥品成分
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                            單位劑量
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                            顆、包數或CC數
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                            每日劑量
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                            頻率
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                    @foreach($row->record_detail as $detail_row)
                                        <tr>
                                            <td class="text-left px-6">{{$detail_row->trade_name}}</td>
                                            <td class="text-left px-6">{{$detail_row->generic_name}}</td>
                                            <td class="text-left px-6">{{$detail_row->dose_per_unit}}</td>
                                            <td class="text-left px-6">{{$detail_row->dose}}</td>
                                            <td class="text-left px-6">{{$detail_row->daily_dose}}</td>
                                            <td class="text-left px-6">{{$detail_row->freq}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('pages.medicationManagement.modal.medicationRecordDetailModal')
    @include('pages.medicationManagement.modal.createMedicationRecordModal')
{{--    @include('pages.medicationManagement.modal.pharmacistFeedbackModal')--}}
{{--    @include('pages.medicationManagement.modal.OtherInformationModal')--}}
{{--    @include('pages.medicationManagement.modal.medicationRecordsExcelModal')--}}
{{--    @include('pages.medicationManagement.modal.previewExcelModal')--}}
    <script>
        let patient_no = "{{$patient_info->patient_no}}";
        $('#btn-progress-status').click(function(){
            Swal.fire({
                icon: 'error',
                title: '錯誤',
                text: '此功能尚未開放',
                confirmButtonColor: '#8CD4F5'
            })
        })
        $('#btn-medication-record-excel').click(function () {
            open_medicationRecordsExcelModal();
        })
    </script>
@endsection
