@extends('layouts.main.menu')
@section('content')
    <!-- content -->
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
                            <option value="patient_id">ID</option>
                            <option value="patient_name">姓名</option>
                            <option value="id_number">身分證字號</option>
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

        <div class="lg:p-8 md:p-6 sm:p-2 max-h-screen h-screen  bg-gray-200">
            <!--數據統計-->
            <div class="grid">
                <p class="mx-4 my-2 justify-self-start font-bold text-xl">數據統計</p>
                <div class="md:flex-wrap lg:flex">
                    <!--數據欄位-->
                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">
                        <div class="flex items-center mx-4 px-5 my-2">
                            <div class="flex grid">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-8 w-8 justify-self-end text-gray-600" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
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
                                          d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
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
                                          d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
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


            <div class="grid">
                <div class="flex justify-between ">
                    <p class="mx-4 my-2 justify-self-start font-bold text-xl">病患列表</p>
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
                                    姓名
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    性別
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    身分證字號
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    任務紀錄
                                </th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200" id="tbody">
                            @foreach($queries as $query)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{$query->patient_id}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{$query->patient_name}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if(substr($query->id_number,1,1) ==1)
                                            男生
                                        @else
                                            女生
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{$query->id_number}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{route('get_orderList',['id' => $query->patient_id])}}"
                                           class="bg-transparent border border-teal-700 text-teal-700
                                           hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">
                                            檢視餐序
                                        </a>
                                    </td>
{{--                                    <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                        <a href="{{route('get_nutritionistComment',['id' => $query->patient_id,'name'=>$query->patient_name])}}"--}}
{{--                                           class="bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">--}}
{{--                                            營養師評論--}}
{{--                                        </a>--}}
{{--                                    </td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
            url:"{{route('get_nutritionManagement_data')}}",
            method:'get',
            data:{
                search_data :$('#input_search').val() ,
                search_from:$('#search_from').val()
            },
            success:function (res) {
                $('#tbody tr').remove();
                if(res.length > 0){
                    console.log(res);
                    var url = "{{route('get_orderList')}}";
                    console.log(url);
                    res.forEach(function (row) {
                        let patient_id = '<td class="px-6 py-4 whitespace-nowrap">' + row['patient_id'] + '</td>';
                        let patient_name = '<td class="px-6 py-4 whitespace-nowrap">' + row['patient_name'] + '</td>';
                        let id_number = '<td class="px-6 py-4 whitespace-nowrap">' + row['id_number'] + '</td>';
                        let sex =""
                        if(row['id_number'].substring(1,2) =='1') {
                            sex =  '<td class="px-6 py-4 whitespace-nowrap">' + '男生' + '</td>';
                        }
                        else{
                            sex = '<td class="px-6 py-4 whitespace-nowrap">' + '女生' + '</td>';
                        }

                        let order_list = '<td class="px-6 py-4 whitespace-nowrap">' +
                            `<a href="${url}?id=${row['patient_id']}"
                               class="bg-transparent border border-teal-700 text-teal-700
                                           hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">
                                檢視餐序` +
                            '</a>' + '</td>';
                        $('#tbody').append(
                            '<tr class="text-gray-700 items-center">' +patient_id+patient_name+sex+id_number + order_list +'</tr>'
                        )

                    })


                }

            }
        });

    }

</script>
@endsection
