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
                               id="input_search"
                               placeholder="查詢">

                        <select class=" bg-transparent  border-none w-1/6 text-gray-700 mr-3 py-1 px-2  leading-tight focus:outline-none "
                        id="search_from">
                            <option value="employee_id">ID</option>
                            <option value="employee_name">姓名</option>
                            <option value="employee_account">帳號</option>
                            <option value="job_title">職位</option>
                            <option value="department">部門</option>
                        </select>

                        <button type="button" class="mx-4 flex-shrink-0 bg-teal-700 hover:bg-teal-500
                        border-teal-700 hover:border-teal-500 text-sm border-4 text-white py-1 px-3 rounded btn_search"
                        id="btn_search"
                        >查詢</button>
                    </div>

                </form>

                <div class="flex justify-start">
                    <div class="flex">
                        <div class="mx-6 mt-4 flex items-end">
                            <p class="text-3xl mb-2 font-bold" id="text-congratulations">{{$user_name}} 先生/女士</p>
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

        <div class="lg:p-8 md:p-6 sm:p-2 max-h-screen h-screen  bg-gray-200">
            <div class="grid">
                <div class="flex">
                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">
                        <table class="divide-y divide-gray-200 min-w-full">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">#</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">姓名</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">帳號</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">密碼</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">職位</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">部門</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    <button type="button" class="bg-teal-700
                                     hover:bg-teal-500 border-teal-700 hover:border-teal-500 text-sm
                                     border-4 text-white py-1 px-3 rounded btn_create_employee"
                                            id="btn_create_employee"
                                            value=''>新增</button>
                                </th>

                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200" id="tbody">

                            @foreach($employees as $employees)
                            <tr class="text-gray-700 items-center">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{$employees->employee_id}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{$employees->employee_name}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{$employees->employee_account}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{$employees->employee_password}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{$employees->job_title}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{$employees->department}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button type="button" class="bg-teal-700
                                     hover:bg-teal-500 border-teal-700 hover:border-teal-500 text-sm
                                     border-4 text-white py-1 px-3 rounded btn_employee"
                                            id="btn_employee"
                                    value='{{$employees->employee_id}}'>修改</button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>


    </div>
    @include('pages.setting.employee.settingEmployeeModal')
    @include('pages.setting.employee.createEmployeeModal')
    </div>
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
               url:"{{route('get_employee_data')}}",
                method:'get',
                data:{
                   search_data :$('#input_search').val() ,
                    search_from:$('#search_from').val()
                },
                success:function (res) {
                    $('#tbody tr').remove();
                    if(res.length > 0){
                        res.forEach(function (row) {
                            let employee_id = '<td class="px-6 py-4 whitespace-nowrap">' + row['employee_id'] + '</td>';
                            let employee_name = '<td class="px-6 py-4 whitespace-nowrap">' + row['employee_name'] + '</td>';
                            let employee_account = '<td class="px-6 py-4 whitespace-nowrap">' + row['employee_account'] + '</td>';
                            let employee_password = '<td class="px-6 py-4 whitespace-nowrap">' + row['employee_password'] + '</td>';
                            let job_title = '<td class="px-6 py-4 whitespace-nowrap">' + row['job_title'] + '</td>';
                            let department = '<td class="px-6 py-4 whitespace-nowrap">' + row['department'] + '</td>';
                            let setting_btn = '<td class="px-6 py-4 whitespace-nowrap">'+
                                `<button type='button' class='bg-teal-700
                                     hover:bg-teal-500 border-teal-700 hover:border-teal-500 text-sm
                                     border-4 text-white py-1 px-3 rounded btn_employee'
                                    value="`+row['employee_id'] + `">修改</button>
                                </td>`  +  '</td>';
                            $('#tbody').append(
                                '<tr class="text-gray-700 items-center">' +employee_id+employee_name+employee_account+employee_password+job_title+department+setting_btn+'</tr>'
                            )

                        })


                    }
                    $('.btn_employee').click(function (){

                        open_settingEmployeeModal($(this).attr("value"));
                    })

                }
            });

        }


        $('.btn_create_employee').click(function (){
            open_createEmployeeModal();
        })


        $('.btn_employee').click(function (){
            open_settingEmployeeModal($(this).attr("value"));
        })
    </script>

@endsection
