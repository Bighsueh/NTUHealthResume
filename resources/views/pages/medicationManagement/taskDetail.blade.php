@extends('layouts.main.menu')
@section('content')
    <!-- task_id -->
    <div hidden id="task_id">{{$task_id}}</div>
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
                        <!-- <button
                            class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded"
                            type="button">
                            Cancel
                        </button> -->
                    </div>
                </form>
                <!--search bar-->
                <div class="flex justify-start">
                    <div class="flex">
                        <div class="mx-6 mt-4 flex items-end">
                            <p class="text-3xl mb-2 font-bold">用藥管理系統</p>
                            <p class="md:block hidden">md　</p>
                            <p class="lg:block hidden">lg　</p>
                            <p class="xl:block hidden">xl　</p>
                            <p class="2xl:block hidden">2xl　</p>
                            {{--                        <div class="flex item-end mx-4 text-gray-400">--}}
                            {{--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4" fill="none"--}}
                            {{--                                 viewBox="0 0 24 24" stroke="currentColor">--}}
                            {{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
                            {{--                                      d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />--}}
                            {{--                            </svg>--}}
                            {{--                            <p id="text-department" class="mx-2">--}}
                            {{--                                工作部門--}}
                            {{--                            </p>--}}
                            {{--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4" fill="none"--}}
                            {{--                                 viewBox="0 0 24 24" stroke="currentColor">--}}
                            {{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
                            {{--                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />--}}
                            {{--                            </svg>--}}
                            {{--                            <p id="text-position" class="mx-2">--}}
                            {{--                                職稱--}}
                            {{--                            </p>--}}
                            {{--                        </div>--}}
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
{{--                        <div class="flex items-center md:mx-4 md:px-5 my-2">--}}
                        <div class="flex items-center xl:mx-4 lg:px-5 my-2 content-around">
                            <div class="flex grid">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                            <div class="mx-2 px-5 grid grid-cols-1 ">
                                <p class="col-span-1 text-xl text-gray-600">新增藥歷</p>
                                <a
                                    id="btn-create-medication-record"
                                    class="col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded">
                                    查看
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--數據欄位-->
                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">
                        {{--                        <div class="flex items-center md:mx-4 md:px-5 my-2">--}}
                        <div class="flex items-center xl:mx-4 lg:px-5 my-2 content-around">
                            <div class="flex grid">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                </svg>
                            </div>
                            <div class="mx-2 px-5 grid grid-cols-1 ">
                                <p class="col-span-1 text-xl text-gray-600">其他資訊</p>
                                <a
                                    id="btn_other_information"
                                    class="col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded">
                                    查看
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--數據欄位-->
                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">
                        {{--                        <div class="flex items-center md:mx-4 md:px-5 my-2">--}}
                        <div class="flex items-center xl:mx-4 lg:px-5 my-2 content-around">
                            <div class="flex grid">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                </svg>
                            </div>
                            <div class="mx-2 px-5 grid grid-cols-1 ">
                                <p class="col-span-1 text-xl text-gray-600">藥師回饋</p>
                                <a
                                    id="btn_pharmacist_feedback"
                                    class="col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded">
                                    查看
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--數據欄位-->
                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">
                        {{--                        <div class="flex items-center md:mx-4 md:px-5 my-2">--}}
                        <div class="flex items-center xl:mx-4 lg:px-5 my-2 content-around">
                            <div class="flex grid">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="mx-2 px-5 grid grid-cols-1 ">
                                <p class="col-span-1 text-xl text-gray-600">案件狀態</p>
                                <a
                                    id="btn-progress-status"
                                    class="col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded">
                                    查看
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="grid">
                <div class="flex justify-between ">
                    <p class="mx-4 my-2 justify-self-start font-bold text-xl">藥歷列表</p>
                </div>
                <div class="overflow-y-scroll h-2/3 ">
                    @foreach($medication_records as $row)
                        <div class="flex ">
                            <!--單筆藥歷共通項目-->
                            <div class="rounded m-2 flex-none bg-gray-50 p-4 w-1/6">
                                <p>就醫日期：</p>
                                <li>{{$row->date_of_examination}}</li>
                                <p>開方日期：</p>
                                <li>{{$row->redate}}</li>
                                <p>處方醫院：</p>
                                <li>{{$row->pres_hosp}}</li>
                                <p>調劑醫院：</p>
                                <li>{{$row->disp_hosp}}</li>
                            </div>
                            <!--單筆藥歷藥品列向-->
                            <div class="rounded m-2 flex-auto bg-gray-50 p-4">
                                <table class="divide-y divide-gray-200 min-w-full">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                            適應症
                                        </th>
{{--                                        <th scope="col"--}}
{{--                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">--}}
{{--                                            藥物種類--}}
{{--                                        </th>--}}
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
                                            劑量(顆數)
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                            途徑
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                            頻率
                                        </th>
{{--                                        <th scope="col"--}}
{{--                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">--}}
{{--                                            處方天數--}}
{{--                                        </th>--}}
{{--                                        <th scope="col"--}}
{{--                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">--}}
{{--                                            總數--}}
{{--                                        </th>--}}
{{--                                        <th scope="col"--}}
{{--                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">--}}
{{--                                            相關註記--}}
{{--                                        </th>--}}

                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                    @foreach($row->record_detail as $detail_row)
                                        <tr>
                                            <td class="text-left px-6">{{$detail_row->indication}}</td>
{{--                                            <td class=text-left px-6">{{$detail_row->category}}</td>--}}
                                            <td class="text-left px-6">{{$detail_row->trade_name}}</td>
                                            <td class="text-left px-6">{{$detail_row->generic_name}}</td>
                                            <td class="text-left px-6">{{$detail_row->dose}}</td>
                                            <td class="text-left px-6">{{$detail_row->routes}}</td>
                                            <td class="text-left px-6">{{$detail_row->freq}}</td>
{{--                                            <td>{{$detail_row->pres_day}}</td>--}}
{{--                                            <td>{{$detail_row->total_amount}}</td>--}}
{{--                                            <td>{{$detail_row->total_amount}}</td>--}}
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
    @include('pages.medicationManagement.modal.pharmacistFeedbackModal')
    @include('pages.medicationManagement.modal.OtherInformationModal')
    <script>
        $('#btn-create-medication-record').click(function(){
            Swal.fire({
                icon: 'error',
                title: '錯誤',
                text: '此功能尚未開放',
                confirmButtonColor: '#8CD4F5'
            })
        })
        $('#btn-progress-status').click(function(){
            Swal.fire({
                icon: 'error',
                title: '錯誤',
                text: '此功能尚未開放',
                confirmButtonColor: '#8CD4F5'
            })
        })
    </script>
@endsection
