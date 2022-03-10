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
                            <option value="id">ID</option>
                            <option value="meal_order">餐序</option>
                            <option value="quantity">份量</option>
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
                            <p class="text-3xl mb-2 font-bold" id="text-congratulations">營養管理系統</p>

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
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                            </div>
                            <div class="mx-4 px-5">

                                <p class="text-xl text-gray-600 mb-3">營養師評論</p>
                                <button
                                class="bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white px-4 py-2 text-center rounded">
                                    查看
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--功能欄位-->
                    <div class="rounded m-2 flex-1 bg-gray-50 p-4">
                        <div class="flex items-center mx-4 px-5 my-2">
                            <div class="flex grid">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                </svg>
                            </div>
                            <div class="mx-4 px-5">
                                <p class="text-xl text-gray-600 mb-3">新增飲食紀錄</p>
                                <button
                                   class="bg-transparent border border-teal-700 text-teal-700
                                   hover:bg-teal-700 hover:text-white px-4 py-2 text-center rounded"
                                   id="btn_dietLog">

                                    新增
                                </button>
                            </div>
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


            <div class="grid">
                <div class="flex mx-2">
                    <p id="" class="my-2 justify-self-start font-bold text-xl">飲食紀錄</p>
                </div>

                <div class="flex">
                    <input class="hidden" id="patient_id" name="patient_id" value="{{$patient_data['patient_id']}}">
                    <input class="hidden" id="task_id" name="task_id" value="{{$patient_data['task_id']}}">
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
                                    餐序
                                </th>
                                <th scope="col"
                                    class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                    份量
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
                            <tbody class="divide-y divide-gray-200" id="tbody">
                                @foreach($queries as $query)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$query->id}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$query->meal_order}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$query->quantity}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#"
                                               class="bg-transparent border border-teal-700 text-teal-700
                                               hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded btn-patch"
                                               value="{{$query->id}}"
                                               data-bs-toggle="modal" data-bs-target="#dietLogPatchModal">
                                                修改
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="{{route('delete_dietLog',['id' => $query->id])}}"
                                               class="bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">
                                                刪除
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
                url:"{{route('get_dietLog_data')}}",
                method:'get',
                data:{
                    search_data :$('#input_search').val() ,
                    search_from:$('#search_from').val(),
                    id:$('#patient_id').val(),
                },
                success:function (res) {
                    $('#tbody tr').remove();
                    if(res.length > 0){
                        console.log(res);
                        let delete_url = "{{route('delete_dietLog')}}";
                        res.forEach(function (row) {
                            let id = '<td class="px-6 py-4 whitespace-nowrap">' + row['id'] + '</td>';
                            let meal_order = '<td class="px-6 py-4 whitespace-nowrap">' + row['meal_order'] + '</td>';
                            let quantity = '<td class="px-6 py-4 whitespace-nowrap">' + row['quantity'] + '</td>';

                            let diet_log_patch ='<td class="px-6 py-4 whitespace-nowrap">'+
                           ` <a href="#"
                               class="bg-transparent border border-teal-700 text-teal-700
                                               hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded btn-patch"
                               value="${row['id']}"
                               data-bs-toggle="modal" data-bs-target="#dietLogPatchModal">
                                修改
                            </a>` + '</td>'
                            let diet_log_delete = '<td class="px-6 py-4 whitespace-nowrap">' +
                                `<a href="${delete_url}?id=${row['id']}"
                                   class="bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">
                                    刪除
                                </a>` + '</td>';
                            $('#tbody').append(
                                '<tr class="text-gray-700 items-center">' +id+meal_order+quantity+diet_log_patch+diet_log_delete +'</tr>'
                            )

                        })
                        // 需要重新抓click監聽
                        $('.btn-patch').click(function (){
                            let url  = '/dietLog/patch/page'
                            // alert($(this).attr("value"))
                            $.ajax({
                                url : url,
                                method : "post",
                                data:{
                                    "_token":"{{csrf_token()}}",
                                    "id":$(this).attr("value"),
                                },
                                success:function(res){
                                    console.log(res[1]);
                                    $("#select").val(res[0]);
                                    $("#patch_size").val(res[1]);
                                    $("#patch_id").val(res[2]);
                                }
                            })
                        })

                    }

                }
            });

        }
        $('#btn_dietLog').click(function (){
            create_dietLog();
        })
    </script>
    @include('pages.nutritionManagement.createDietLogModal')
    @include('pages.nutritionManagement.patchDietLogModal')
@endsection
