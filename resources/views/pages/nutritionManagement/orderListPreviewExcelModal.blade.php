{{--<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"--}}
{{--     id="orderListPreviewExcel" tabindex="-1" aria-labelledby="orderListPreviewExcelLabel" aria-modal="true"--}}
{{--     role="dialog">--}}
{{--    <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">--}}
{{--        <div--}}
{{--            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">--}}
{{--            <div--}}
{{--                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">--}}
{{--                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">--}}
{{--                    excel上傳預覽--}}
{{--                </h5>--}}
{{--                <button type="button"--}}
{{--                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"--}}
{{--                        data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <div class="modal-body relative p-4">--}}
{{--                <div class="justify-center">--}}
{{--                    <div class="mb-3 w-full">--}}
{{--                        <b class="mx-2">餐序資訊</b>--}}
{{--                        <div class="grid grid-cols-2 md:grid-cols-2 sm:grid-cols-1">--}}
{{--                            <div class="mx-4 font-base 2xl:font-2xl">--}}
{{--                                <div class="my-1">--}}
{{--                                    <label for="created_date">建立日期：</label>--}}
{{--                                    <input class="bg-gray-100 rounded" id="created_date"--}}
{{--                                           value=""/>--}}
{{--                                </div>--}}
{{--                                <div class="my-1">--}}
{{--                                    <label for="updated_date">最後修改日期：</label>--}}
{{--                                    <input class="bg-gray-100 rounded" id="updated_date" value=""/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="w-full">--}}
{{--                                <div class="mb-2 text-right">--}}
{{--                                    <a id="medicationRecordDetailNum" class="mx-1 px-2"></a>--}}
{{--                                    <a id="medicationRecordDetailPrev"--}}
{{--                                       class="mx-1 px-2 rounded border border-gray-400 hover:bg-gray-400 hover:text-white">--}}
{{--                                        < </a>--}}
{{--                                    <a id="medicationRecordDetailNext"--}}
{{--                                       class="mx-1 px-2 rounded border border-gray-400 hover:bg-gray-400 hover:text-white">--}}
{{--                                        > </a>--}}
{{--                                </div>--}}
{{--                                <div id="medeicationRecordDetailImageList">--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="flex-grow border-t border-gray-400 m-2 w-full"></div>--}}
{{--                        <div class="mb-3 mx-2 w-full">--}}
{{--                            <a class="font-bold mb-2">飲食紀錄</a>--}}
{{--                            <div class="grid grid-cols-4 gap-2 mx-2">--}}
{{--                                <div class="mx-2 text-left block">菜色</div>--}}
{{--                                <div class="mx-2 text-left block">份量</div>--}}
{{--                                <div class="mx-2 text-left block">備註</div>--}}
{{--                            </div>--}}
{{--                            <div class="flex-grow border-t w-full"></div>--}}
{{--                            <div id="order_list_detail_list" class="mx-2">--}}
{{--                                <!--飲食紀錄table content-->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mx-2">--}}
{{--                            <a id="btn_diet_log_add_row"--}}
{{--                               class="mx-2 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-1 px-4 rounded">--}}
{{--                                新增飲食項目--}}
{{--                            </a>--}}
{{--                            <a id="btn_diet_log_reduce_row"--}}
{{--                               class="mx-2 bg-transparent border border-red-700 text-red-700 hover:bg-red-700 hover:text-white text-center py-1 px-4 rounded">--}}
{{--                                刪除最後一筆項目--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div--}}
{{--                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">--}}
{{--                    <button type="button"--}}
{{--                            class="btn-medication-detail-modal-cancel mx-2 bg-transparent border border-red-700 text-red-700 hover:bg-red-700 hover:text-white text-center py-2 px-4 rounded"--}}
{{--                            data-bs-dismiss="modal">--}}
{{--                        不儲存並關閉--}}
{{--                    </button>--}}
{{--                    <button type="button"--}}
{{--                            class="mx-2 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded"--}}
{{--                            id="btn-medication-detail-modal-save"--}}
{{--                            data-bs-dismiss="modal">--}}
{{--                        儲存並關閉--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto "
     id="orderListPreviewExcel" tabindex="-1" aria-labelledby="orderListPreviewExcelLabel" aria-hidden="true">
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
                    <div class="grid grid-cols-4 gap-2 mx-2">
                        <div class="mx-2 text-left block">X</div>
                        <div class="mx-2 text-left block">餐序</div>
                        <div class="mx-2 text-left block">菜色</div>
                        <div class="mx-2 text-left block">份量</div>
                    </div>
                    <div class="flex-grow border-t w-full"></div>
                    <div id="order_list_preview_list" class="mx-2">
                        <!--飲食紀錄table content-->
                    </div>
{{--                    <table class="divide-y divide-gray-200 min-w-full">--}}
{{--                        <thead class="bg-gray-50">--}}
{{--                        <tr>--}}
{{--                            <th scope="col"--}}
{{--                                class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">--}}
{{--                                早餐--}}
{{--                            </th>--}}
{{--                            <th scope="col"--}}
{{--                                class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">--}}
{{--                                菜色--}}
{{--                            </th>--}}
{{--                            <th scope="col"--}}
{{--                                class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">--}}
{{--                                份量--}}
{{--                            </th>--}}
{{--                            <th scope="col"--}}
{{--                                class="px-6 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">--}}
{{--                                備註--}}
{{--                            </th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody class="divide-y divide-gray-200" id="tbody">--}}
{{--                        <tr>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}


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

    $("#btn_preview_excel").click(function () {

            let upload_file = $('#excel_upload_file')[0].files;
            let url = "{{route('orderList_preview_excel')}}";
            let csrf_token = "{{csrf_token()}}";
            let form_data = new FormData()
            console.log(upload_file[0]);
            form_data.append('upload_file', upload_file[0])
            console.log(form_data);
            $.ajax({
                url: url + "?_token=" + csrf_token,
                method: 'post',
                data: form_data,
                cache: false,
                contentType: false,
                processData: false,
                success: function (res) {
                    open_previewExcelModal(res)
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
            // $('#medication_upload_file').val("");


    });



    let data;
    function open_previewExcelModal(res) {
        data = res;
        $('#tbody tr').remove();
        let count = 0;
        if(data.length > 0){
            // window.alert(data.length);
            data.forEach(function (row) {
                if(count !== 0){
                    //若為空則為子表內容
                    if(row[0]== null)
                    {
                        row[0] = ""
                        $('#order_list_preview_list').append(`
                        <div class="grid grid-cols-4 gap-2 ">
                            <button class="bg-red-400  mx-3 px-2 my-1 text-white text-left rounded block btn_child_delete_row" >X</button>
                            <input disabled class="invisible text-left block bg-gray-100 my-1 mx-auto rounded cursor-not-allowed child" value="${row[0]}"/>
                            <input class="text-left block bg-gray-100 my-1 mx-auto rounded child" value="${row[1]}"/>
                            <input class="text-left block bg-gray-100 my-1 mx-auto rounded child" value="${row[2]}"/>
                        </div>
                        `)
                    }
                    else
                    {
                        $('#order_list_preview_list').append(`
                        <div class="grid grid-cols-4 gap-2 ">
                            <button class="bg-red-400  mx-3  px-2 my-1 text-white text-left rounded block btn_master_delete_row" >X</button>
                            <input class="text-left block bg-gray-100 my-1 mx-auto rounded master" value="${row[0]}"/>
                            <input class="text-left block bg-gray-100 my-1 mx-auto rounded master" value="${row[1]}"/>
                            <input class="text-left block bg-gray-100 my-1 mx-auto rounded master" value="${row[2]}"/>
                        </div>
                        `)
                    }

                }
                count +=1;
            })
        }

        //母表刪除連同子表刪除
        $('.btn_master_delete_row').click(function () {
            this.parentNode.parentNode.removeChild(this.parentNode);

        })
        //子表刪除
        $('.btn_child_delete_row').click(function () {
            this.parentNode.parentNode.removeChild(this.parentNode);

        })
    }
    //儲存
    $('#btn_store_import').click(function () {
        let records_data = [];
        let order_list_preview_list_children = $('#order_list_preview_list').children();
        console.log(order_list_preview_list_children)
        $.each(order_list_preview_list_children, function (index, value){
            let list_tr = order_list_preview_list_children.eq(index).children();
            // window.alert(list_tr.eq(0).children().val());
            console.log(list_tr.eq(1).val())
            let push_row = {
                'meal_order':list_tr.eq(1).val(),
                'meal_name':list_tr.eq(2).val(),
                'quantity':list_tr.eq(3).val(),

            }
            console.log(push_row)
            records_data.push(push_row);
        });

        $.ajax({
            url:"{{route('post_diet_log_excel_upload')}}",
            mothed:'get',
            data:{
                import_data:records_data
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




