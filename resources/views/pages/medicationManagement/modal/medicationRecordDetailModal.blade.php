<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="medicationRecordDetailModel" tabindex="-1" aria-labelledby="medicationRecordDetailModelTitle" aria-modal="true"
     role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                    詳細藥歷紀錄
                </h5>
                <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <div class="justify-center">
                    <div class="mb-3 w-full">
                        <b class="mx-2">藥單資訊</b>
                        <div class="mx-4 flex grid lg:grid-cols-2 2xl:grid-cols-4">
                            <div class="flex-1">
                                <label for="medication_record_detail_date_of_examination">就醫日期：</label>
                                <input class="bg-gray-100 rounded" id="medication_record_detail_date_of_examination" value=""/>
                            </div>
                            <div class="flex-1">
                                <label for="medication_record_detail_redate">開方日期：</label>
                                <input class="bg-gray-100 rounded" id="medication_record_detail_redate" value=""/>
                            </div>
                            <div class="flex-1">
                                <label for="medication_record_detail_pres_hosp">處方醫院：</label>
                                <input class="bg-gray-100 rounded" id="medication_record_detail_pres_hosp" value=""/>
                            </div>
                            <div class="flex-1">
                                <label for="medication_record_detail_disp_hosp">調劑醫院：</label>
                                <input class="bg-gray-100 rounded" id="medication_record_detail_disp_hosp" value=""/>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow border-t border-gray-400 m-2 w-full"></div>
                    <div class="mb-3 mx-2 w-full">
                        <a class="font-bold mb-2">藥品項目</a>
                        <div class="grid grid-cols-4 gap-2 mx-2">
                            <div class="mx-2 text-left block">藥品名稱</div>
                            <div class="mx-2 text-left block">藥品成分</div>
                            <div class="mx-2 text-left block">劑量(顆數)</div>
                            <div class="mx-2 text-left block">頻率</div>
                        </div>
                        <div class="flex-grow border-t w-full"></div>
                        <div id="medication_record_detail_list" class="mx-2">
                            <!--藥品項目table content-->
                        </div>
                    </div>
                    <div class="mx-2">
                        <a id="btn_medication_record_add_row"
                           class="btn-medication-detail-modal-save mx-2 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-1 px-4 rounded">
                            新增藥品項目
                        </a>
                        <a id="btn_medication_record_reduce_row"
                           class="btn-medication-detail-modal-save mx-2 bg-transparent border border-red-700 text-red-700 hover:bg-red-700 hover:text-white text-center py-1 px-4 rounded">
                            刪除最後一筆項目
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
                        class="btn-medication-detail-modal-save mx-2 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    儲存並關閉
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    //藥品項目列表容器
    let medication_record_detail_list = $('#medication_record_detail_list');

    //點擊詳細內容按鈕時自動帶入欄位資訊
    $(".btn-open-medication-record-detail-modal").click(function () {
        let url = "{{route('get_medication_management_record_data')}}";
        let record_id = $(this).parent().find('.record_id').text();

        $.ajax({
            url: url,
            method: 'post',
            data: {
                '_token': "{{csrf_token()}}",
                'record_id': record_id,
            },
            success: function (res) {
                let record_data = res['record_data']
                let record_detail_data = res['record_detail_data'];
                //取得資料以後先將藥歷資訊塞入資料
                $('#medication_record_detail_date_of_examination').val(record_data['date_of_examination'])
                $('#medication_record_detail_redate').val(record_data['redate'])
                $('#medication_record_detail_pres_hosp').val(record_data['pres_hosp'])
                $('#medication_record_detail_disp_hosp').val(record_data['disp_hosp'])

                //再將藥品項目帶入
                //先刪除資料
                medication_record_detail_list.children().remove();
                //再插入資料
                $.each(record_detail_data, function (index, value) {
                    medication_record_detail_list.append(`
                        <div class=" gap-2 grid grid-cols-4">
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${value['trade_name']}"/>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${value['generic_name']}"/>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${value['dose']}"/>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${value['freq']}"/>
                        </div>
                    `)
                })
            },
            error: function (res) {
                console.log(res);
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
    $("#btn_medication_record_add_row").click(function () {
        medication_record_detail_list.append(`
        <div class="grid grid-cols-4 gap-2 ">
            <input class="text-left block bg-gray-100 my-1 rounded" value=""/>
            <input class="text-left block bg-gray-100 my-1 rounded" value=""/>
            <input class="text-left block bg-gray-100 my-1 rounded" value=""/>
            <input class="text-left block bg-gray-100 my-1 rounded" value=""/>
        </div>
        `)
    })

    //移除藥品項目最後一列
    $("#btn_medication_record_reduce_row").click(function () {
        medication_record_detail_list.children().last().remove();
    })
</script>
