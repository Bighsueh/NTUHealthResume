@extends('layouts.main.menu')
@section('content')
    <!-- content -->
    <div class="w-screen h-full flex-1">
        <div class="p-4 bg-Slate-50 text-center">
            <div class="h-full">
                <form class="w-full">
                    <div class="flex items-center border-b border-teal-700 py-2 mx-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 h-6 w-6 text-gray-7700" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input type="text" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                               id="input_search"
                               placeholder="查詢">

                        <select class=" bg-transparent  border-none w-1/6 text-gray-700 mr-3 py-1 px-2  leading-tight focus:outline-none "
                                id="search_from">
                            <option value="meal_name">菜色</option>
                            <option value="quantity">份量</option>
                            <option value="created_at">餐序建立日期</option>

                        </select>

                        <button type="button" class="mx-4 flex-shrink-0 bg-teal-700 hover:bg-teal-500
                        border-teal-700 hover:border-teal-500 text-sm border-4 text-white py-1 px-3 rounded btn_search"
                                id="btn_search"
                        >查詢</button>
                    </div>

                </form>
                <!--search bar-->
                <div class="flex justify-start">
                    <div class="flex">
                        <div class="mx-6 mt-4 flex items-end">
                            <p class="text-3xl mb-2 font-bold">營養管理系統</p>
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
{{--            <div class="grid">--}}
{{--                <p class="mx-4 my-2 justify-self-start font-bold text-xl">功能操作</p>--}}
{{--                <div class="grid lg:grid-cols-2 2xl:grid-cols-4">--}}
{{--                    <!--數據欄位-->--}}
{{--                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">--}}
{{--                        --}}{{--                        <div class="flex items-center md:mx-4 md:px-5 my-2">--}}
{{--                        <div class="flex items-center xl:mx-4 lg:px-5 my-2 content-around">--}}
{{--                            <div class="flex grid">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600"--}}
{{--                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                            <div class="mx-2 grid grid-cols-1 w-full">--}}
{{--                                <p class="text-xl text-gray-600 px-2">新增藥歷</p>--}}
{{--                                <div class="grid grid-cols-2 w-full">--}}
{{--                                    <div--}}
{{--                                        id="btn-create-medication-record"--}}
{{--                                        data-bs-toggle="modal" data-bs-target="#createMedicationRecordModel"--}}
{{--                                        class="mx-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 rounded">--}}
{{--                                        手動操作--}}
{{--                                    </div>--}}
{{--                                    <div--}}
{{--                                        id="btn-medication-record-excel"--}}
{{--                                        --}}{{--                                    data-bs-toggle="modal" data-bs-target="#"--}}
{{--                                        --}}{{--                                        onclick="location.href='{{route('export_medication_records_excel')}}';"--}}
{{--                                        class="mx-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 rounded btn-medication-record-excel">--}}
{{--                                        Excel操作--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--數據欄位-->--}}
{{--                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">--}}
{{--                        --}}{{--                        <div class="flex items-center md:mx-4 md:px-5 my-2">--}}
{{--                        <div class="flex items-center xl:mx-4 lg:px-5 my-2 content-around">--}}
{{--                            <div class="flex grid">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600"--}}
{{--                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                          d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                            <div class="mx-2 px-5 grid grid-cols-1 ">--}}
{{--                                <p class="col-span-1 text-xl text-gray-600">其他資訊</p>--}}
{{--                                <a--}}
{{--                                    id="btn_other_information"--}}
{{--                                    --}}{{--                                    data-bs-toggle="modal" data-bs-target="#OtherInformationModal"--}}
{{--                                    class="col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded">--}}
{{--                                    查看--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--數據欄位-->--}}
{{--                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">--}}
{{--                        --}}{{--                        <div class="flex items-center md:mx-4 md:px-5 my-2">--}}
{{--                        <div class="flex items-center xl:mx-4 lg:px-5 my-2 content-around">--}}
{{--                            <div class="flex grid">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600"--}}
{{--                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                          d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                            <div class="mx-2 px-5 grid grid-cols-1 ">--}}
{{--                                <p class="col-span-1 text-xl text-gray-600">藥師回饋</p>--}}
{{--                                <a--}}
{{--                                    id="btn_pharmacist_feedback"--}}
{{--                                    data-bs-toggle="modal" data-bs-target="#pharmacistModal"--}}
{{--                                    class="col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded">--}}
{{--                                    查看--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--數據欄位-->--}}
{{--                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">--}}
{{--                        --}}{{--                        <div class="flex items-center md:mx-4 md:px-5 my-2">--}}
{{--                        <div class="flex items-center xl:mx-4 lg:px-5 my-2 content-around">--}}
{{--                            <div class="flex grid">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600"--}}
{{--                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                            <div class="mx-2 px-5 grid grid-cols-1 ">--}}
{{--                                <p class="col-span-1 text-xl text-gray-600">案件狀態</p>--}}
{{--                                <a--}}
{{--                                    id="btn-progress-status"--}}
{{--                                    class="col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded">--}}
{{--                                    查看--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="grid">
                <p class="mx-4 my-2 justify-self-start font-bold text-xl">功能統計</p>
                <div class="md:flex-wrap lg:flex">
                    <!--功能欄位-->
                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">
                        <div class="flex items-center mx-4 px-5 my-2">
                            <div class="flex grid">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                </svg>
                            </div>
                            <div class="mx-4 px-5">
                                <p class="text-xl text-gray-600 mb-3">新增餐序紀錄</p>
                                <button
                                    class="bg-transparent border border-teal-700 text-teal-700
                                   hover:bg-teal-700 hover:text-white px-4 py-2 text-center rounded"
                                    id="btn_orderList_insert" data-bs-target="#orderList" data-bs-toggle="modal">

                                    新增
                                </button>
                                <button
                                    id="btn-medication-record-excel"
                                    class="bg-transparent border border-teal-700 text-teal-700
                                   hover:bg-teal-700 hover:text-white px-4 py-2 text-center rounded" data-bs-target="#showOrderListExcelModal" data-bs-toggle="modal">
                                    Excel操作
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">
                        <div class="flex items-center mx-4 px-5 my-2">
                            <div class="flex grid">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-8 w-8 justify-self-end text-gray-600" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/>
                                </svg>
                            </div>
                            <div class="mx-4 px-5">
                                <p class="text-xl text-gray-600">標題</p>
                                <p class="text-2xl text-gray-900">數據</p>
                            </div>
                        </div>
                        <div class="mx-4 my-2 px-5">
                            <a href="" class="mt-2 text-green-700">查看資訊</a>
                        </div>
                    </div>
                    <!--數據欄位-->
                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">
                        <div class="flex items-center mx-4 px-5 my-2">
                            <div class="flex grid">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-8 w-8 justify-self-end text-gray-600" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/>
                                </svg>
                            </div>
                            <div class="mx-4 px-5">
                                <p class="text-xl text-gray-600">標題</p>
                                <p class="text-2xl text-gray-900">數據</p>
                            </div>
                        </div>
                        <div class="mx-4 my-2 px-5">
                            <a href="" class="mt-2 text-green-700">查看資訊</a>
                        </div>
                    </div>
                </div>
            </div>
            {{--     餐序列表       --}}
            <div class="grid hidden sm:grid">
                <div class="flex justify-between ">
                    <p class="mx-4 my-2 justify-self-start font-bold text-xl">餐序列表</p>
                </div>

                <div class="overflow-y-scroll h-7/8 orderList-content">
                    @foreach($order_lists as $order_list)
                        <div class="flex ">
                            <!--單筆藥歷共通項目-->
                            <div class="content-between grid rounded m-2 flex-none bg-gray-50 p-4 w-1/6">
                                <div class="mb-2">
                                    <p>建立時間：</p>
                                    <p>{{$order_list->created_at}}</p>
                                </div>
                                {{--task_id--}}
                                <div hidden class="task_id">{{$order_list->id}}</div>
                                <a class="btn-open-order-list-detail-modal col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded"
                                   data-bs-toggle="modal" data-bs-target="#dietLog">
                                    詳細內容
                                </a>
                            </div>

                            <!--單筆餐序列向-->
                            <div class="rounded m-2 flex-auto bg-gray-50 p-4">
                                <table class="divide-y divide-gray-200 min-w-full">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                            餐序
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                            菜色
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                            份量
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody class="divide-y divide-gray-200">

                                    @foreach($order_list->diet_logs as $diet_log)
                                        <tr>
                                            <td class="text-left px-6">{{$order_list->meal_order}}</td>
                                            <td class="text-left px-6">{{$diet_log->meal_name}}</td>
                                            <td class="text-left px-6">{{$diet_log->quantity}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            {{--  手機版面          --}}
            <div class="grid sm:hidden">
                <div class="flex justify-between ">
                    <p class="mx-4 my-2 justify-self-start font-bold text-xl">餐序列表</p>
                </div>
                <div class="overflow-y-scroll h-7/8 orderList-content-mobile">
                    @foreach($order_lists as $order_list)
                        <div class="flex overflow-x-scroll">
                            <!--單筆藥歷共通項目-->
                            <div class="content-between grid rounded m-2 flex-none bg-gray-50 p-4 w-2/6">
                                <div class="mb-2">
                                    <p>建立時間：</p>
                                    <p>{{$order_list->created_at}}</p>
                                </div>
                                {{--task_id--}}
                                <div hidden class="task_id">{{$order_list->id}}</div>
                                <a class="btn-open-order-list-detail-modal col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded"
                                   data-bs-toggle="modal" data-bs-target="#dietLog">
                                    詳細內容
                                </a>
                            </div>

                            <!--單筆餐序列向-->
                            <div class="rounded m-2 flex-auto bg-gray-50 p-4">
                                <table class="divide-y divide-gray-200 min-w-full">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                            餐序
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                            菜色
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                            份量
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody class="divide-y divide-gray-200">

                                    @foreach($order_list->diet_logs as $diet_log)
                                        <tr>
                                            <td class="text-left px-6">{{$order_list->meal_order}}</td>
                                            <td class="text-left px-6">{{$diet_log->meal_name}}</td>
                                            <td class="text-left px-6">{{$diet_log->quantity}}</td>
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
    @include('pages.nutritionManagement.createDietLogModal')
    @include('pages.nutritionManagement.createOrderListModal')
    @include('pages.nutritionManagement.patchOrderListModal')
    @include('pages.nutritionManagement.showOrderListExcelModal')
    @include('pages.nutritionManagement.orderListPreviewExcelModal')
    <script>

        $('#btn_search').click(function (){
            if($('#input_search').val() == ''){
                window.location.reload();
            }else {
                update_data();
            }
        })
        function update_data() {

            $.ajax({
                url:"{{route('get_orderList_data')}}",
                method:'get',
                data:{
                    patient_id : '{{$id}}',
                    search_data :$('#input_search').val() ,
                    search_from:$('#search_from').val()
                },
                success:function (res) {
                    $(".orderList-content").children().remove();
                    $(".orderList-content-mobile").children().remove();
                    let count = 0
                    res.forEach(function (row){
                        if(row["diet_logs"] != null)
                        {
                            count += 1
                            //電腦版面
                            $(".orderList-content").append(`
                                <div class="flex ">
                                    <!--單筆藥歷共通項目-->
                                    <div class="content-between grid rounded m-2 flex-none bg-gray-50 p-4 w-1/6">
                                        <div class="mb-2">
                                            <p>建立時間：</p>
                                            <p>${row["created_at"]}</p>
                                        </div>
                                        <div hidden class="task_id">${row["id"]}</div>
                                        <a class="btn-open-order-list-detail-modal col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded"
                                           data-bs-toggle="modal" data-bs-target="#dietLog">
                                            詳細內容
                                        </a>
                                    </div>

                                    <!--單筆餐序列向-->
                                    <div class="rounded m-2 flex-auto bg-gray-50 p-4">
                                        <table class="divide-y divide-gray-200 min-w-full">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                                        餐序
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                                        菜色
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                                        份量
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody id="tbody${count}" class="divide-y divide-gray-200">


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            `);


                            // 手機版面
                            $(".orderList-content-mobile").append(`
                                <div class="flex overflow-x-scroll">
                                    <div class="content-between grid rounded m-2 flex-none bg-gray-50 p-4 w-2/6">
                                        <div class="mb-2">
                                            <p>建立時間：</p>
                                            <p>${row["created_at"]}</p>
                                        </div>
                                        <div hidden class="task_id">${row["id"]}</div>
                                        <a class="btn-open-order-list-detail-modal col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded"
                                           data-bs-toggle="modal" data-bs-target="#dietLog">
                                            詳細內容
                                        </a>
                                    </div>

                                    <!--單筆餐序列向-->
                                    <div class="rounded m-2 flex-auto bg-gray-50 p-4">
                                        <table class="divide-y divide-gray-200 min-w-full">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                                        餐序
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                                        菜色
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                                        份量
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody class="divide-y divide-gray-200" id="tbody-mobile${count}">


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            `);

                            //
                            row["diet_logs"].forEach(function(diet_log){
                                tbody_name = "#tbody" + count
                                tbody_name_mobile = "#tbody-mobile" + count
                                // 電腦
                                $(tbody_name).append(`
                                    <tr>
                                        <td class="text-left px-6">${row["meal_order"]}</td>
                                        <td class="text-left px-6">${diet_log["meal_name"]}</td>
                                        <td class="text-left px-6">${diet_log["quantity"]}</td>
                                    </tr>
                                `)
                                // 手機
                                $(tbody_name_mobile).append(`
                                    <tr>
                                        <td class="text-left px-6">${row["meal_order"]}</td>
                                        <td class="text-left px-6">${diet_log["meal_name"]}</td>
                                        <td class="text-left px-6">${diet_log["quantity"]}</td>
                                    </tr>
                                `)
                                open_order_list()
                            })
                        }
                    })

                }
            });
            open_order_list()
        }
        open_order_list()
    </script>
@endsection
