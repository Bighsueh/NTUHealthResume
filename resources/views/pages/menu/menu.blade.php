@extends('layouts.main.menu')
@section('content')
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
                            <p class="text-3xl mb-2 font-bold" id="text-congratulations">個管師 {{$user_name}} 您好</p>
                            <div class="flex item-end mx-4 text-gray-400">
                                {{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4" fill="none"--}}
                                {{--                                     viewBox="0 0 24 24" stroke="currentColor">--}}
                                {{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
                                {{--                                          d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />--}}
                                {{--                                </svg>--}}
                                {{--                                <p id="text-department" class="mx-2">--}}
                                {{--                                    工作部門--}}
                                {{--                                </p>--}}
                                {{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4" fill="none"--}}
                                {{--                                     viewBox="0 0 24 24" stroke="currentColor">--}}
                                {{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
                                {{--                                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />--}}
                                {{--                                </svg>--}}
                                {{--                                <p id="text-position" class="mx-2">--}}
                                {{--                                    職稱--}}
                                {{--                                </p>--}}
                            </div>
                        </div>
                    </div>
                </div> <!-- search bar-->
            </div>
            <!--content status & search bar h container-->
        </div>
        <!--content status & search bar w container-->
        <div class="lg:p-8 md:p-6 sm:p-2 max-h-screen h-screen  bg-gray-200">

            <!--數據統計-->
        @include('pages.menu.statusBar')

        <!--最新進度-->
            <div class="grid">
                <p class="mx-4 my-2 justify-self-start font-bold text-xl">用藥管理系統最新進度</p>
                <div class="flex">
                    <!--數據欄位-->
                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">
                        <table class="divide-y divide-gray-200 min-w-full">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    #
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    姓名
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    事件
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    回報者
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    完成時間
                                </th>
{{--                                <th scope="col"--}}
{{--                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">--}}
{{--                                    功能--}}
{{--                                </th>--}}
                            </tr>
                            </thead>
                            <tbody id="tbody_progress_list" class="divide-y divide-gray-200">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.menu.ProgressBarModal')

    <script>
        get_medication_record_list();

        function set_listener(){
            let btn_progress = $('.btn-progress');
            btn_progress.off('click');

            //目前進度按紐
            btn_progress.on('click',function () {
                let task_id = $(this).parent().siblings('.task_id').text().trim();
                open_ProgressBarModal(task_id);
            })
        }

        //取得藥歷列表
        function get_medication_record_list() {
            let url = "{{route('get_medication_record_list')}}";
            let token = "{{csrf_token()}}";

            $.ajax({
                url: url,
                method: "post",
                data: {
                    '_token': token,
                },
                success: function (res) {
                    console.log(res);
                    set_progress_list(res);
                },
                error: function (res) {
                    console.log(res);
                }
            })
        }

        //設定最新進度列表
        function set_progress_list(data) {
            let tbody = $("#tbody_progress_list"); //tbody
            tbody.children().remove(); //clear tbody children
            $.each(data, function (index, value) {
                //add row to tbody
                let row = `
                        <tr>
                            <td class="task_id" hidden>${value['task_id']}</td>
                            <td class="px-6 py-4 whitespace-nowrap progress-thread"></td>
                            <td class="px-6 py-4 whitespace-nowrap">${value['patient_name']}</td>
                            <td class="px-6 py-4 whitespace-nowrap">${value['content']}</td>
                            <td class="px-6 py-4 whitespace-nowrap">${value['employee_name']}</td>
                            <td class="px-6 py-4 whitespace-nowrap">${value['updated_at']}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{--<a class="btn-progress bg-transparent mx-2 border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">--}}
                                {{--    目前進度--}}
                                {{--</a>--}}
                                {{--<a href="{{route('get_medication_management_task_detail_page')}}?task_id=${value['task_id']}"--}}
                                {{--    class="btn-detail bg-transparent mx-2 border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">--}}
                                {{--    詳細資料--}}
                                {{--</a>--}}
                            </td>
                        </tr>`;
                tbody.append(row);
            })

            //將進度列表加上序號
            let progress_thread = $(".progress-thread");
            $.each(progress_thread, function (index, value) {
                progress_thread.eq(index).text(index + 1);
            });

            //set listener
            set_listener()
        }
    </script>

@endsection


