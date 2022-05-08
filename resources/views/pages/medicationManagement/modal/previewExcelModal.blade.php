
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto "
     id="previewExcelModal" tabindex="-1" aria-labelledby="previewExcelModal" aria-hidden="true">
    <div class="modal-dialog relative w-full pointer-events-none max-w-6xl">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="" id="exampleModalLabel"></h5>
                <button type="button"
                        class="btn-close box-content w-4 h-3  text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="px-12">
                <div class="modal-body relative m-3 w-full ">

                    <table class="divide-y divide-gray-200 min-w-full">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                #
                            </th>
                            <th scope="col"
                                class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                就醫日
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
                                藥品商品
                            </th>
                            <th scope="col"
                                class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                藥品成分
                            </th>
                            <th scope="col"
                                class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                劑量(顆數)
                            </th>
                            <th scope="col"
                                class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                頻率
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200" id="tbody">
{{--                        <a hidden>{{$thread = 0}}</a>--}}
{{--                        @foreach($task_list as $row)--}}
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    1
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    2
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    3
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    4
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    5
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    6
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    7
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    8
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    9
                                </td>


{{--                            </tr>--}}
{{--                        @endforeach--}}
                        </tbody>
                    </table>


                </div>

            </div>

            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-gray-200 rounded-b-md">
                <button class="mx-4 flex-shrink-0 bg-teal-700
                hover:bg-blue-500 border-teal-700
                hover:border-blue-500 text-sm border-4 text-white py-1 px-10 rounded " id="btn_store_import">儲存</button>

{{--                <button class="mx-4 flex-shrink-0 bg-teal-700--}}
{{--                hover:bg-red-500 border-teal-700--}}
{{--                hover:border-red-500 text-sm border-4 text-white py-1 px-10 rounded btn_delete_patient" id="btn_delete_patient" >刪除</button>--}}


            </div>
        </div>
    </div>
</div>

<script>
    let data;
    function open_previewExcelModal(res) {
        data = res;
        $('#tbody tr').remove();
        let count = 0;
        if(data.length > 0){
            // window.alert(data.length);
            data.forEach(function (row) {
                if(count != 0){
                    let record_id = '<td class="px-6 py-4 whitespace-nowrap">'+row[0]+'</td>';
                    let date_of_examination = '<td class="px-6 py-4 whitespace-nowrap">'+row[1]+'</td>';
                    let redate = '<td class="px-6 py-4 whitespace-nowrap">'+row[2]+'</td>';
                    let pres_hosp = '<td class="px-6 py-4 whitespace-nowrap">'+row[3]+'</td>';
                    let disp_hosp = '<td class="px-6 py-4 whitespace-nowrap">'+row[4]+'</td>';
                    let trade_name = '<td class="px-6 py-4 whitespace-nowrap">'+row[5]+'</td>';
                    let generic_name = '<td class="px-6 py-4 whitespace-nowrap">'+row[6]+'</td>';
                    let dose = '<td class="px-6 py-4 whitespace-nowrap">'+row[7]+'</td>';
                    let freq = '<td class="px-6 py-4 whitespace-nowrap">'+row[8]+'</td>';
                    $('#tbody').append(
                        '<tr>'+ record_id + date_of_examination + redate + pres_hosp + disp_hosp + trade_name + generic_name + dose + freq +'</tr>'
                    )
                }
                count +=1;
            })
        }

        $('#previewExcelModal').modal('show');
    }

    $('#btn_store_import').click(function () {
        $.ajax({
            url:"{{route('store_import_data')}}",
            mothed:'get',
            data:{
                import_data:data
            },
            success: function (res) {
                if (res === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'excel上傳成功',
                        confirmButtonColor: '#8CD4F5'
                    })
                    window.location.reload();
                }
            },
            error: function (res) {
                Swal.fire({
                    icon: 'error',
                    title: '儲存失敗',
                    text: res['statusText'],
                    confirmButtonColor: '#8CD4F5'
                })
            }
        })


    })
</script>
