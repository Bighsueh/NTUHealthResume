<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="pharmacistModal" tabindex="-1" aria-labelledby="pharmacistModalTitle" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                    藥師回饋單
                </h5>
                <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <!--需要時服藥建議-->
                <div class="flex justify-center">
                    <div class="mb-3 w-full">
                        <b class="mx-2">需要時服藥建議</b>
                        <textarea
                            class="
                            otehr-info-modal-textarea
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="other_information_modal_textarea_1"
                            rows="5"
                            placeholder="請在此處填寫內容...  (Shift + Enter可以換行)"
                        ></textarea>
                    </div>
                </div>
                <!--需固定服用藥物建議-->
                <div class="flex justify-center">
                    <div class="mb-3 w-full">
                        <b class="mx-2">需固定服用藥物建議</b>
                        <textarea
                            class="
                            otehr-info-modal-textarea
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="other_information_modal_textarea_2"
                            rows="5"
                            placeholder="請在此處填寫內容...  (Shift + Enter可以換行)"
                        ></textarea>
                    </div>
                </div>
                <!--交互作用或副作用指標-->
                <div class="flex justify-center">
                    <div class="mb-3 w-full">
                        <b class="mx-2">交互作用或副作用指標</b>
                        <textarea
                            class="
                            otehr-info-modal-textarea
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="other_information_modal_textarea_3"
                            rows="5"
                            placeholder="例：抗膽鹼、鎮靜、高致跌藥物..."
                        ></textarea>
                    </div>
                </div>
                <!--個案特殊問題回饋-->
                <div class="flex justify-center">
                    <div class="mb-3 w-full">
                        <b class="mx-2">個案特殊問題回饋</b>
                        <textarea
                            class="
                            otehr-info-modal-textarea
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="other_information_modal_textarea_4"
                            rows="5"
                            placeholder="請在此處填寫內容...  (Shift + Enter可以換行)"
                        ></textarea>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="mb-3 w-full">
                        <b class="mx-2">常用回覆</b>
                        <a id="btn_app_common_reply" class="underline">新增常用回覆</a>
                        <div id="common_reply_container" class="grid grid-cols-2">

                        </div>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button"
                        id="btn-pharmacist-feedback-cancel"
                        class="mx-2 bg-transparent border border-red-700 text-red-700 hover:bg-red-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    不儲存並關閉
                </button>
                <button type="button"
                        id="btn-pharmacist-feedback-save"
                        class="mx-2 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    儲存並關閉
                </button>
                {{--                <button type="button"--}}
                {{--                        class="mx-2 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded">--}}
                {{--                    儲存修改結果--}}
                {{--                </button>--}}
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        //開啟Modal
        $('#btn_pharmacist_feedback').click(function () {
            set_common_reply_data();
            set_pharmacist_modal_data();
        })

        //新增常用回覆
        $('#btn_app_common_reply').click(function () {
            add_common_reply_row();
        })

        //儲存藥師回饋Modal資訊
        $('#btn-pharmacist-feedback-save').click(function () {
            //task_id
            let task_id = $("#task_id").text().trim();

            //儲存常用回覆
            store_common_reply();

            //需要時服藥建議
            let feedback_1 = $("#other_information_modal_textarea_1").val();
            //需固定服用藥物建議
            let feedback_2 = $("#other_information_modal_textarea_2").val();
            //交互作用或副作用指標
            let feedback_3 = $("#other_information_modal_textarea_3").val();
            //個案特殊問題回饋
            let feedback_4 = $("#other_information_modal_textarea_4").val();

            let url = "{{route('store_medication_management_pharmacist_feedback_data')}}";

            $.ajax({
                url: url,
                method: "post",
                data: {
                    "_token": "{{csrf_token()}}",
                    "task_id": task_id,
                    'feedback_1': feedback_1,
                    'feedback_2': feedback_2,
                    'feedback_3': feedback_3,
                    'feedback_4': feedback_4,
                },
                success: function (res) {
                    console.log(res);
                    if (res === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: '儲存成功',
                            confirmButtonColor: '#8CD4F5'
                        })
                    }

                },
                error: function (res) {
                    //錯誤訊息
                    console.log(res);

                    Swal.fire({
                        icon: 'error',
                        title: '儲存失敗',
                        text: res['statusText'],
                        confirmButtonColor: '#8CD4F5'
                    })
                }
            })


        })

        //取得藥師回饋Modal 資訊
        function set_pharmacist_modal_data() {
            let url = "{{route('get_medication_management_pharmacist_feedback_data')}}";
            let token = "{{csrf_token()}}";
            let task_id = $("#task_id").text().trim();

            $.ajax({
                url: url,
                method: 'post',
                data: {
                    "_token": token,
                    "task_id": task_id,
                },
                success: function (res) {
                    //需要時服藥建議
                    $("#other_information_modal_textarea_1").val(res['feedback_1']);
                    //需固定服用藥物建議
                    $("#other_information_modal_textarea_2").val(res['feedback_2']);
                    //交互作用或副作用指標
                    $("#other_information_modal_textarea_3").val(res['feedback_3']);
                    //個案特殊問題回饋
                    $("#other_information_modal_textarea_4").val(res['feedback_4']);
                },
                error: function (res) {
                    console.log(res);
                }
            })
        }

        //新增常用回覆
        function add_common_reply_row(content = '') {
            let container = $("#common_reply_container");
            let row = `
            <div class="m-1 flex">
                <textarea class="form-control block w-full px-3 text-base font-normal text-gray-700
                    bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
                    ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                >${content}</textarea>
                <div class="flex">
                    <a class="flex mx-1 bg-transparent btn-common-reply-upload border border-sky-700 text-sky-700 hover:bg-sky-700 hover:text-white items-center text-center px-4 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                        </svg>
                    </a>
                    <a class="flex mx-1 bg-transparent btn-common-reply-delete border border-red-700 text-red-700 hover:bg-red-700 hover:text-white items-center text-center px-4 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>
                </div>
            </div>
        `
            container.append(row);
            set_listener()
        }

        //設定常用回覆欄位資訊
        function set_common_reply_data() {
            let url = "{{route('get_medicatoin_common_reply_data')}}";
            let token = "{{csrf_token()}}";
            $.ajax({
                url: url,
                method: 'post',
                data: {
                    '_token': token,
                },
                success: function (res) {
                    let container = $("#common_reply_container");
                    container.children().remove();
                    $.each(res, function (index, value) {
                        let reply_content = value['reply_content'];
                        add_common_reply_row(reply_content);
                    })
                },
                error: function (res) {
                    console.log(res);
                }
            })
        }

        //儲存常用回覆欄位資訊
        function store_common_reply() {
            let common_reply_container = $("#common_reply_container").children(); //container
            let result = []; //要回傳的數值
            let url = "{{route('store_medicatoin_common_reply_data')}}";
            let token = "{{csrf_token()}}";

            //提取container中的value，塞進result裡面
            $.each(common_reply_container, function (index, value) {
                let common_reply = common_reply_container.eq(index).find('textarea').val();
                if (common_reply.length === 0) common_reply = '無資料';
                result.push(common_reply);
            })

            $.ajax({
                url: url,
                method: 'post',
                data: {
                    '_token': token,
                    'common_reply': result,
                },
                success: function (res) {
                    console.log(res);
                },
                error: function (res) {
                    console.log(res);
                }
            })


        }

        function set_listener() {
            //define
            let btn_common_reply_upload = $('.btn-common-reply-upload');
            let btn_common_reply_delete = $('.btn-common-reply-delete');

            //listener drop
            btn_common_reply_upload.off('click');
            btn_common_reply_delete.off('click');

            //點選常用回復中的上傳圖示時將內容複製到剪貼簿
            btn_common_reply_upload.on('click', function () {
                let common_reply = $(this).parent().parent().find('textarea');
                common_reply.select();
                document.execCommand('copy');

                //sweet alert
                Swal.fire({
                    icon: 'success',
                    title: '已將內容複製到剪貼簿',
                    confirmButtonColor: '#8CD4F5'
                })
            })

            //點選常用回復中的上傳圖示時將將該常用回覆刪除
            btn_common_reply_delete.on('click', function () {
                $(this).parent().parent().remove();
            })
        }

    })

</script>
