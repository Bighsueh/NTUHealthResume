@extends('layouts.main.menu')
@section('content')
    <div class="w-screen flex-1">

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
                               placeholder="查詢">

                        <select class=" bg-transparent  border-none w-1/6 text-gray-700 mr-3 py-1 px-2  leading-tight focus:outline-none ">
                            <option value="1">ID</option>
                            <option value="2">姓名</option>
                        </select>

                        <button type="button" class="mx-4 flex-shrink-0 bg-teal-700 hover:bg-teal-500 border-teal-700 hover:border-teal-500 text-sm border-4 text-white py-1 px-3 rounded"
                        >查詢</button>

                            <button type="button" class="mx-4 flex-shrink-0 bg-teal-700 hover:bg-teal-500 border-teal-700 hover:border-teal-500 text-sm border-4 text-white py-1 px-3 rounded"
                            >顯示資訊</button>

                    </div>

                </form>

                <div class="flex justify-start">
                    <div class="flex">
                        <div class="mx-6 mt-4 flex items-end">
                            <p class="text-3xl mb-2 font-bold" id="text-congratulations">孔乙己 先生/女士</p>
                            <div class="flex item-end mx-4 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                <p id="text-department" class="mx-2">
                                    工作部門
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <p id="text-position" class="mx-2">
                                    職稱
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <section class="lg:p-8 md:p-6 sm:p-2 max-h-screen h-screen  bg-gray-200">
            <div class="grid">
                <div class="flex">
                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">
                        <table class="divide-y divide-gray-200 min-w-full">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">#</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">姓名</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">性別</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">電話</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">身分證字號</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">生日</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">地址</th>
{{--                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">QRCode</th>--}}
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider"></th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
{{--                            @foreach($patient as $patient)--}}
                            <tr class="text-gray-700 items-center">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    1
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    幼幼
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    男
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    0912345601
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    C12345****
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    111-01-20
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    雲林縣虎...
                                </td>
{{--                                <td class="px-10 py-2 whitespace-nowrap">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />--}}
{{--                                    </svg>--}}
{{--                                </td>--}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button type="button" class="bg-teal-700
                                     hover:bg-teal-500 border-teal-700 hover:border-teal-500 text-sm
                                     border-4 text-white py-1 px-3 rounded" id="btn_employee"
                                    >修改</button>
                                </td>
                            </tr>
{{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </section>
    </div>


    @include('pages.setting.patient.settingPatientModal')

    <script>


    </script>
@endsection
