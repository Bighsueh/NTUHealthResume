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
                               placeholder="查詢"
                        id="input_search">

                        <select class=" bg-transparent  border-none w-1/6 text-gray-700 mr-3 py-1 px-2  leading-tight focus:outline-none "
                        id="search_from">
{{--                            <option value="patient_id">ID</option>--}}
                            <option value="patient_no">病患編號</option>
                            <option value="patient_name">姓名</option>
                            <option value="place">所屬據點</option>
                            <option value="id_number">身分證字號</option>
                        </select>

                        <button type="button" class="mx-4 flex-shrink-0 bg-teal-700 hover:bg-teal-500 border-teal-700 hover:border-teal-500 text-sm border-4 text-white py-1 px-3 rounded"
                        id="btn_search">查詢</button>

                            <button type="button"  class="mx-4 flex-shrink-0 bg-teal-700 hover:bg-teal-500 border-teal-700 hover:border-teal-500 text-sm border-4 text-white py-1 px-3 rounded"
                            id="btn_privacy_mode">顯示資訊</button>

                    </div>

                </form>

                <div class="flex justify-start">
                    <div class="flex">
                        <div class="mx-6 mt-4 flex items-end">
                            <p class="text-3xl mb-2 font-bold" id="text-congratulations">個管師 {{$user_name}} 您好</p>
{{--                            <div class="flex item-end mx-4 text-gray-400">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>--}}
{{--                                </svg>--}}
{{--                                <p id="text-department" class="mx-2">--}}
{{--                                    工作部門--}}
{{--                                </p>--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>--}}
{{--                                </svg>--}}
{{--                                <p id="text-position" class="mx-2">--}}
{{--                                    職稱--}}
{{--                                </p>--}}
{{--                            </div>--}}
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
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">病患編號</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">姓名</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">所屬據點</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">身分證字號</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">生日</th>
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">收案日期</th>
{{--                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">QRCode</th>--}}
                                <th class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    <button type="button" class="bg-teal-700
                                     hover:bg-teal-500 border-teal-700 hover:border-teal-500 text-sm
                                     border-4 text-white py-1 px-3 rounded btn_create_patient" value=""
                                    >新增</button>

                                </th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200" id="tbody">
{{--                            @foreach($patients as $patient)--}}
{{--                            <tr class="text-gray-700 items-center">--}}
{{--                                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                    {{$patient->patient_id}}--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                    {{$patient->patient_no}}--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                    {{$patient->patient_name}}--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                    {{$patient->place}}--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                    {{$patient->id_number}}--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                    {{$patient->patient_bd}}--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                    {{$patient->close_date}}--}}
{{--                                </td>--}}

{{--                                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                    <button type="button" class="bg-teal-700--}}
{{--                                     hover:bg-teal-500 border-teal-700 hover:border-teal-500 text-sm--}}
{{--                                     border-4 text-white py-1 px-3 rounded btn_patient" value="{{$patient->patient_id}}"--}}
{{--                                    >修改</button>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </section>
    </div>


    @include('pages.setting.patient.settingPatientModal')
    @include('pages.setting.patient.createPatientModal')
    <script>
        //隱私功能(顯示資訊按鈕)
        let privacy_mode = true;

        update_patient_data(false);

        //查詢按鈕click
        $('#btn_search').click(function () {
            if($('#input_search').val() == ''){
                window.location.reload();
            }else{
                update_patient_data(true);
            }
        })

        //table刷新、查詢
        function update_patient_data(is_search){
            $.ajax({
                url:"{{route('get_patient_data')}}",
                method:'get',
                data:{
                    is_search:is_search,
                    search_data :$('#input_search').val() ,
                    search_from:$('#search_from').val()
                },
                success:function (res) {
                    $('#tbody tr').remove();
                    if(res.length > 0){
                        let thead = 0;
                        res.forEach(function (row) {
                            thead +=1;
                            let patient_id = '<td class="px-6 py-4 whitespace-nowrap">'+thead+'</td>';
                            let patient_no = '<td class="px-6 py-4 whitespace-nowrap">'+string_maker(row['patient_no'])+'</td>';
                            let patient_name = '<td class="px-6 py-4 whitespace-nowrap">'+string_maker(row['patient_name'],true)+'</td>';
                            let place = '<td class="px-6 py-4 whitespace-nowrap">'+string_maker(row['place'])+'</td>';
                            let id_number = '<td class="px-6 py-4 whitespace-nowrap">'+string_maker(row['id_number'])+'</td>';
                            let patient_bd = '<td class="px-6 py-4 whitespace-nowrap">'+string_maker(row['patient_bd'])+'</td>';
                            let close_date = '<td class="px-6 py-4 whitespace-nowrap">'+string_maker(row['close_date'],true)+'</td>';
                            let setting_btn = `<td class="px-6 py-4 whitespace-nowrap">
                                    <button type="button" class="bg-teal-700
                                     hover:bg-teal-500 border-teal-700 hover:border-teal-500 text-sm
                                     border-4 text-white py-1 px-3 rounded btn_patient" value="`+row['patient_id']+`"
                                    >修改</button>`+
                                '</td>';
                            $('#tbody').append(
                                '<tr>'+patient_id+patient_no+patient_name+place+id_number+patient_bd+close_date+setting_btn+'</tr>'
                            )
                        })
                        $('.btn_patient').click(function () {
                            open_settingPatientModal($(this).attr('value'));
                        })
                    }
                }

            });
        }

        //打開修改Modal
    $('.btn_patient').click(function () {
        open_settingPatientModal($(this).attr('value'));
    })

        //打開新增Modal
    $('.btn_create_patient').click(function () {
        open_createPatientModal();
    })

        //顯示資訊按鈕click
    $('#btn_privacy_mode').click(function () {
        if(privacy_mode){
            privacy_mode = false;
        }else {
            privacy_mode = true;
        }

        update_patient_data();
    })
        //隱私資料處理
        function string_maker(word,is_nomal=false) {
            if(is_nomal){
                if(word==null){
                    return '';
                }else {return word}

            }else {
                if(word==null){
                    return '';
                }else if(privacy_mode){
                    return word.substr(0,3)+'***';
                }else {
                    return word;
                }
            }

        }
    </script>
@endsection
