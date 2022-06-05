<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="dietLog" tabindex="-1" aria-labelledby="dietLogTitle" aria-modal="true"
     role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                    詳細餐序紀錄
                </h5>
                <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <div class="justify-center">
                    <div class="mb-3 w-full">
                        <b class="mx-2">餐序資訊</b>
                        <div class="grid grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
                            <div class="mx-4 font-base 2xl:font-2xl">
                                <div class="my-1">
                                    <label for="created_date">建立日期：</label>
                                    <input class="bg-gray-100 rounded" id="created_date"
                                           value=""/>
                                </div>
                                <div class="my-1">
                                    <label for="updated_date">最後修改日期：</label>
                                    <input class="bg-gray-100 rounded" id="updated_date" value=""/>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="mb-2 text-right">
                                    <a id="medicationRecordDetailNum" class="mx-1 px-2"></a>
                                    <a id="medicationRecordDetailPrev"
                                       class="mx-1 px-2 rounded border border-gray-400 hover:bg-gray-400 hover:text-white">
                                        < </a>
                                    <a id="medicationRecordDetailNext"
                                       class="mx-1 px-2 rounded border border-gray-400 hover:bg-gray-400 hover:text-white">
                                        > </a>
                                </div>
                                <div id="medeicationRecordDetailImageList">

                                </div>
                            </div>
                        </div>
                        <div class="flex-grow border-t border-gray-400 m-2 w-full"></div>
                        <div class="mb-3 mx-2 w-full">
                            <a class="font-bold mb-2">飲食紀錄</a>
                            <div class="grid grid-cols-4 gap-2 mx-2">
                                <div class="mx-2 text-left block">菜色</div>
                                <div class="mx-2 text-left block">份量</div>
                                <div class="mx-2 text-left block">備註</div>
                            </div>
                            <div class="flex-grow border-t w-full"></div>
                            <div id="order_list_detail_list" class="mx-2">
                                <!--飲食紀錄table content-->
                            </div>
                        </div>
                        <div class="mx-2 grid grid-cols-2 md:grid-cols-10">
                            <a id="btn_diet_log_add_row"
                               class="mx-2 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-1 px-2 rounded md:col-span-3 lg:col-span-2">
                                新增飲食項目
                            </a>
                            <a id="btn_diet_log_reduce_row"
                               class="mx-2 bg-transparent border border-red-700 text-red-700 hover:bg-red-700 hover:text-white text-center py-1 px-2 rounded md:col-span-3 lg:col-span-2">
                                刪除最後一筆
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                    <button type="button"
                            class="btn-medication-detail-modal-cancel mx-2 bg-transparent border border-red-700 text-red-700 hover:bg-red-700 hover:text-white text-center py-2 px-4 rounded"
                            data-bs-dismiss="modal">
                        不儲存並關閉
                    </button>
                    <button type="button"
                            class="mx-2 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded"
                            id="btn-medication-detail-modal-save"
                            data-bs-dismiss="modal">
                        儲存並關閉
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        //原資料
        let task_id;
        let origin_record_detail_data;
        let image_index = 0;

        //藥品項目列表容器
        let order_list_detail_list = $('#order_list_detail_list');
        function set_listener()
        {
            let btn_detail = $(".btn-open-order-list-detail-modal")
            btn_detail.off('click');
            //點擊詳細內容按鈕時自動帶入欄位資訊
            $(".btn-open-order-list-detail-modal").on('click',function () {
                let url = "{{route('post_orderList_detail')}}";
                task_id = $(this).parent().find('.task_id').text();

                $.ajax({
                    url: url,
                    method: 'post',
                    data: {
                        '_token': "{{csrf_token()}}",
                        'task_id': task_id,
                    },
                    success: function (res) {
                        let order_list = res[0];
                        let diet_log = res[1];
                        let image_urls = res[2];
                        //圖片容器
                        let image_list = $('#medeicationRecordDetailImageList');
                        // console.log(image_urls)
                        //取得資料以後先將藥歷資訊塞入資料
                        $('#created_date').val(order_list['created_at']);
                        $('#updated_date').val(order_list['updated_at']);

                        //將資料暫存
                        // origin_record_detail_data = record_detail_data;
                        //再將藥品項目帶入
                        //先刪除資料
                        order_list_detail_list.children().remove();
                        //再插入資料
                        $.each(diet_log, function (index, value) {
                            // console.log(value);
                            (value['remark'] == null)? value['remark'] = "" :value['remark'];
                            order_list_detail_list.append(`
                        <div class=" gap-2 grid grid-cols-4">
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${value['meal_name']}"/>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${value['quantity']}"/>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${value['remark']}"/>
                        </div>
                    `)
                        })

                        //在將圖片路徑更新上去
                        //先清空原有圖片
                        image_list.children().remove();

                        //寫入回傳的圖片
                        $.each(image_urls, function (index, value) {
                            image_list.append(`
                        <img class="object-fill w-fit rounded" src="${value}">
                    `);

                        })
                        set_image_list(image_index);

                    },
                    error: function (res) {
                        // console.log(res);
                        Swal.fire({
                            icon: 'error',
                            title: '連線錯誤，無法取得資料',
                            text: res,
                            confirmButtonColor: '#8CD4F5'
                        })
                    }
                })
            })
        }


        //點擊詳細內容按鈕時自動帶入欄位資訊
        $(".btn-open-order-list-detail-modal").on('click',function () {
            let url = "{{route('post_orderList_detail')}}";
            task_id = $(this).parent().find('.task_id').text();

            $.ajax({
                url: url,
                method: 'post',
                data: {
                    '_token': "{{csrf_token()}}",
                    'task_id': task_id,
                },
                success: function (res) {
                    let order_list = res[0];
                    let diet_log = res[1];
                    let image_urls = res[2];
                    //圖片容器
                    let image_list = $('#medeicationRecordDetailImageList');
                    // console.log(image_urls)
                    //取得資料以後先將藥歷資訊塞入資料
                    $('#created_date').val(order_list['created_at']);
                    $('#updated_date').val(order_list['updated_at']);

                    //將資料暫存
                    // origin_record_detail_data = record_detail_data;
                    //再將藥品項目帶入
                    //先刪除資料
                    order_list_detail_list.children().remove();
                    //再插入資料
                    $.each(diet_log, function (index, value) {
                        // console.log(value);
                        (value['remark'] == null)? value['remark'] = "" :value['remark'];
                        order_list_detail_list.append(`
                        <div class=" gap-2 grid grid-cols-4">
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${value['meal_name']}"/>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${value['quantity']}"/>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${value['remark']}"/>
                        </div>
                    `)
                    })

                    //在將圖片路徑更新上去
                    //先清空原有圖片
                    image_list.children().remove();

                    //寫入回傳的圖片
                    $.each(image_urls, function (index, value) {
                        image_list.append(`
                        <img class="object-fill w-fit rounded" src="${value}">
                    `);

                    })
                    set_image_list(image_index);

                },
                error: function (res) {
                    // console.log(res);
                    Swal.fire({
                        icon: 'error',
                        title: '連線錯誤，無法取得資料',
                        text: res,
                        confirmButtonColor: '#8CD4F5'
                    })
                }
            })
        })

        //新增藥品項目
        $("#btn_diet_log_add_row").on('click',function () {
            order_list_detail_list.append(`
            <div class="grid grid-cols-4 gap-2 ">
                <input class="text-left block bg-gray-100 my-1 rounded" value=""/>
                <input class="text-left block bg-gray-100 my-1 rounded" value=""/>
                <input class="text-left block bg-gray-100 my-1 rounded" value=""/>
            </div>
        `)
        })

        //移除藥品項目最後一列
        $("#btn_diet_log_reduce_row").on('click',function () {
            order_list_detail_list.children().last().remove();
        })

        //換下一張圖片
        $('#medicationRecordDetailNext').on('click',function () {
            let image_length = $("#medeicationRecordDetailImageList").children().length;
            image_index = (image_index + 1) % image_length;
            set_image_list(image_index);
        });

        //換上一張圖片
        $('#medicationRecordDetailPrev').on('click',function () {
            let image_length = $("#medeicationRecordDetailImageList").children().length;
            image_index = (image_index - 1) % image_length;
            if (image_index + 1 <= 0) image_index += image_length;
            set_image_list(image_index);
        });

        // 儲存並關閉
        $("#btn-medication-detail-modal-save").on('click',function () {
            // RecordDetailContainer
            let order_list_detail_list = $('#order_list_detail_list').children();
            let all_detail_row = []; //要傳到後端寫入的record_detail們
            // 將飲食紀錄各筆讀出來
            $.each(order_list_detail_list, function (index, value) {
                let list_row = order_list_detail_list.eq(index).children();
                let detail_row = {
                    'meal_name': list_row.eq(0).val(),    //菜色
                    'quantity': list_row.eq(1).val(),  //份量
                    'remark': list_row.eq(2).val(),  //備註
                    'patient_id': {{$id}},
                }
                all_detail_row.push(detail_row);
            });

            // 餐序資訊
            let record_data = {
                'updated_at': $('#updated_date').val(),
            }

            // console.log(task_id)
            //建立連線，將更改結果傳到後端
            $.ajax({
                url: "{{route('store_orderList_detail')}}",
                method: 'post',
                data: {
                    "_token": "{{csrf_token()}}",
                    "record_data":record_data,
                    "detail_rows": all_detail_row,
                    "task_id": task_id,
                },
                success: function (res) {
                    if (res === 'no record id') {
                        Swal.fire({
                            icon: 'error',
                            title: '儲存失敗',
                            text: '查無Record_id',
                            confirmButtonColor: '#8CD4F5'
                        })
                    }
                    if (res === 'no detail rows') {
                        Swal.fire({
                            icon: 'error',
                            title: '儲存失敗',
                            text: '藥品項目為空白',
                            confirmButtonColor: '#8CD4F5'
                        })
                    }
                    if (res === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: '儲存成功',
                            text: '點擊刷新頁面',
                            confirmButtonColor: '#8CD4F5'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                //刷新頁面
                                location.reload();
                            }
                        })
                    }
                },
                error: function (res) {
                    // console.log(res);
                },
            })

        });


        function set_image_list(image_index) {
            $('#medeicationRecordDetailImageList img').eq(image_index).siblings().hide();
            $('#medeicationRecordDetailImageList img').eq(image_index).show();

            let image_length = $("#medeicationRecordDetailImageList").children().length;
            $('#medicationRecordDetailNum').text(`第 ${image_index + 1} 張，共 ${image_length} 張圖片`)
        }
    });

</script>
