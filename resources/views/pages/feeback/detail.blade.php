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
                            <p class="text-3xl mb-2 font-bold" id="text-congratulations">早安，孔乙己 先生/女士</p>
                            <div class="flex item-end mx-4 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                                <p id="text-department" class="mx-2">
                                    工作部門
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <p id="text-position" class="mx-2">
                                    職稱
                                </p>
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
            <div class="grid">
                <p class="mx-4 my-2 justify-self-start font-bold text-xl">功能統計</p>
                <div class="flex">
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
                    <!--功能欄位-->
                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">
                        <div class="flex h-full items-center justify-center">
                            <p class="text-xl mx-2">新增藥物資訊</p>
                            <a href="#"
                               class="mx-2 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">
                                點擊新增
                            </a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="grid">
                <div class="flex mx-2">
                    <p id="" class="my-2 justify-self-start font-bold text-xl">藥物資訊</p>
                    <p id="patitent_name" class="mx-2 my-2 justify-self-start font-bold text-xl">
                        病患A
                    </p>
                    <p class="my-2 justify-self-start font-bold text-xl">先生/女士</p>
                </div>

                <div class="flex">
                    <!--數據欄位-->
                    <div class="rounded m-2 flex-1 bg-gray-50 p-4 overflow-auto overflow-scroll w-2">
                        <table class="divide-y divide-gray-200 min-w-full">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    #
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    開方日期
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    處方醫院
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    調劑醫院
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    適應症
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    藥物總類
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    藥品商品名稱
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    藥品成分名稱
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    詳細內容
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    修改內容
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    刪除內容
                                </th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    1
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    2022/01/14 23:59
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    台大
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    台大
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    適應症
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    藥物總類
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    藥品商品名稱
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    藥品成分名稱
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="#"
                                       class="bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">
                                        查看
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="#"
                                       class="bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">
                                        修改
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="#"
                                       class="bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">
                                        刪除
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    2
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    2022/01/14 23:59
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    台大
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    台大
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    適應症
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    藥物總類
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    藥品商品名稱
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    藥品成分名稱
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="#"
                                       class="bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">
                                        查看
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="#"
                                       class="bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">
                                        修改
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="#"
                                       class="bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">
                                        刪除
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
