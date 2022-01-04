@extends('layouts.main.menu')
@section('content')

    <section class="container mx-auto p-6 font-mono">
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-label="Text input with dropdown button" style="width: 600px;">
            <select class="form-select " aria-label="Default select example" style="width: 20px;">
                <option value="1">ID</option>
                <option value="2">姓名</option>
                <option value="3">帳號</option>
                <option value="3">職位</option>
            </select>
            <button class="btn btn-outline-dark" style="width: 100px;">查詢</button>
        </div>
    </section>

    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                    <tr class="text-md font-semibold tracking-wide text-left bg-gray-800 uppercase border-b border-gray-600">
                        <th class="px-4 py-3 text-gray-100">ID</th>
                        <th class="px-4 py-3 text-gray-100">姓名</th>
                        <th class="px-4 py-3 text-gray-100">帳號</th>
                        <th class="px-4 py-3 text-gray-100">密碼</th>
                        <th class="px-4 py-3 text-gray-100">職位</th>
                        <th class="px-4 py-3 text-gray-100"></th>
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
                        <td class="px-4 py-3 border text-2xl">
                            123
                        </td>
                        <td class="px-4 py-3 border text-2xl">
                            456
                        </td>
                        <td class="px-4 py-3 border text-2xl">
                            藥師
                        </td>
                        <td class="px-4 py-3 text-xs border">
                            <button class="btn btn-outline-dark xl:text-xl btn_edit" id="btn_edit">修改</button>
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </section>
    @include('pages.setting.employee.settingEmployeeModal')

    <script>
        $('.btn_edit').click(function (){
            open_settingEmployeeModal();
        })

        function close_modal() {
            $(".modal").modal('hide');
        }

        $(".close-modal").click(function () {
            close_modal();
        })
    </script>

@endsection
