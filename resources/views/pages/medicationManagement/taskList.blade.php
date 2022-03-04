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
                            <p class="text-3xl mb-2 font-bold">用藥管理系統</p>
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

    <div class="lg:p-8 md:p-6 sm:p-2 max-h-screen h-screen  bg-gray-200">
        @include('pages.menu.statusBar')

        <div class="grid">
            <div class="flex justify-between ">
                <p class="mx-4 my-2 justify-self-start font-bold text-xl">任務列表</p>
{{--                <div class="flex mx-4">--}}
{{--                    <a href=""--}}
{{--                       class="bg-teal-700 mx-2 justify-self-end border border-teal-700 hover:border-teal-500 text-gray-50 hover:bg-teal-500 hover:text-white text-center py-2 px-4 rounded">--}}
{{--                        新增病患回饋單--}}
{{--                    </a>--}}
{{--                    <a href=""--}}
{{--                       class="bg-teal-700 mx-2 justify-self-end border border-teal-700 hover:border-teal-500 text-gray-50 hover:bg-teal-500 hover:text-white text-center py-2 px-4 rounded">--}}
{{--                        新增藥師回饋單--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
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
                                任務狀態
                            </th>
                            <th scope="col"
                                class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                任務建立日期
                            </th>
                            <th scope="col"
                                class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                任務結案日期
                            </th>
                            <th scope="col"
                                class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                最後異動時間
                            </th>
                            <th scope="col"
                                class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                任務詳情
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                        <a hidden>{{$thread = 0}}</a>
                        @foreach($task_list as $row)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$thread +=1}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{isset($row->status) ? $row->status : '-'}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{isset($row->created_at) ? $row->created_at : '-'}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{isset($row->finish_date) ? $row->finish_date : '-'}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{isset($row->updated_at) ? $row->updated_at : '-'}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{route('get_medication_management_task_detail_page')}}"
                                   class="bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">
                                    查看
                                </a>
                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
