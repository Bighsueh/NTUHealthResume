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
                <!--醫師向藥師提問-->
                <div class="flex justify-center">
                    <div class="mb-3 xl:w-full">
                        <b class="mx-2">醫師提問內容</b>
                        <textarea
                            class="
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
                            id="pharmacist_feedback_modal_doctor_reply"
                            rows="5"
                            placeholder="醫師尚未填寫內容"
                            disabled
                        ></textarea>
                    </div>
                </div>
                <!--醫師向藥師提問-->
                <div class="flex justify-center">
                    <div class="mb-3 xl:w-full">
                        <b class="mx-2">藥師回覆</b>
                        <textarea
                            class="
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
                            id="pharmacist_feedback_modal_reply_text"
                            rows="5"
                            placeholder="請在此處填寫內容...  (Shift + Enter可以換行)"
                        ></textarea>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button"
                        class="btn-pharmacist-feedback-save mx-2 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    儲存並關閉
                </button>
                <button type="button"
                        class="btn-pharmacist-feedback-cancel mx-2 bg-transparent border border-red-700 text-red-700 hover:bg-red-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    不儲存並關閉
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
        let record_id;
        //儲存藥師回覆
        $(".btn-pharmacist-feedback-save").click(function () {
            let url = "store_pharmacist_feedback";
            let pharmacist_reply = $("#pharmacist_feedback_modal_reply_text").val();

            $.ajax({
                url: url,
                method: "post",
                data: {
                    "_token": "{{csrf_token()}}",
                    "record_id": record_id,
                    "pharmacist_reply": pharmacist_reply
                },
                success: function (res) {
                    console.log(res);
                }
            })
        })

        //開啟藥師回饋單modal
        $(".btn-pharmacist-feedback").click(function () {
            //取得藥物id
            record_id = $(this).parent().parent().find('.medication_record_id').text();

            //清空藥師回覆欄位
            $("#pharmacist_feedback_modal_reply_text").val('');

            //清空醫師回覆欄位
            $("#pharmacist_feedback_modal_doctor_reply").val("");

            update_doctor_reply_textarea()
            update_pharmacist_reply_textarea();
        });

        //更新藥師回覆欄位
        function update_pharmacist_reply_textarea(){
            let url = "{{route('get_pharmacist_feedback')}}";

            $.ajax({
                url:url,
                method:'post',
                data:{
                    "_token":"{{csrf_token()}}",
                    "record_id":record_id,
                },
                success:function(res){
                    $("#pharmacist_feedback_modal_reply_text").val(res);
                }
            })
        }

        //更新要回覆病患內容欄位的資料
        function update_doctor_reply_textarea() {
            let url = "{{route('get_doctor_feedback')}}";

            //清空回覆病患內容的欄位
            $("#pharmacist_feedback_modal_doctor_reply").val('');

            $.ajax({
                url: url,
                method: "post",
                data: {
                    "_token": "{{csrf_token()}}",
                    "record_id": record_id,
                },
                success: function (res) {
                    //將資料寫入欄位
                    $("#pharmacist_feedback_modal_doctor_reply").val(res);
                }
            })
        }
    })

</script>
