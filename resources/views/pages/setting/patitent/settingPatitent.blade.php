@extends('layouts.main.menu')
@section('content')
    <div class="w-screen flex-1">
        <div class="h-32 p-4 bg-Slate-50 text-center">
            <div class="h-full">
                <form class="">
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
            </div>

        </div>


        <section class="max-h-screen h-screen text-center">
            <div class="p-4">
                <div class="">
                    <table class="w-full">
                        <thead>
                        <tr class="text-md font-semibold tracking-wide text-left bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3 text-gray-800">ID</th>
                            <th class="px-4 py-3 text-gray-800">姓名</th>
                            <th class="px-4 py-3 text-gray-800">QRCode</th>
                            <th class="px-4 py-3 text-gray-800"></th>
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        <tr class="text-gray-700 items-center">
                            <td class="px-4 py-3 border text-2xl">
                                1
                            </td>
                            <td class="px-4 py-3 border text-2xl">
                                幼幼
                            </td>
                            <td class="px-4 py-3 text-xs border">
                                <button class="btn btn-outline-dark xl:-m-2 " id="btn_edit">QRCode</button>
                            </td>
                            <td class="px-4 py-3 text-xs border">
                                <button class="btn btn-outline-dark xl:text-xl btn_edit" id="btn_edit">管理</button>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </section>
    </div>


    @include('pages.setting.patitent.settingPatitentModal')

    <script>
        $('.btn_edit').click(function (){
            open_settingPatitentModal();
        })

        function close_modal() {
            $(".modal").modal('hide');
        }

        $(".close-modal").click(function () {
            close_modal();
        })
    </script>
@endsection
