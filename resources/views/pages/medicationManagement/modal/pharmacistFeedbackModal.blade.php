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
                <!--藥師回覆病患-->
                <div class="flex justify-center">
                    <div class="mb-3 xl:w-full">
                        <b class="mx-2">要回覆病患的內容</b>
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
                            id="pharmacist_feedback_modal_pharmacist_reply"
                            rows="5"
                            placeholder="請在此處填寫內容...  (Shift + Enter可以換行)"
{{--                            disabled--}}
                        >{{$pharmacist_feedback->pharmacist_reply}}</textarea>
                    </div>
                </div>
                <!--藥師向醫師提問-->
                <div class="flex justify-center">
                    <div class="mb-3 xl:w-full">
                        <b class="mx-2">向醫師提問(選填)</b>
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
                            id="pharmacist_feedback_modal_ask_to_doctor"
                            rows="5"
                            placeholder="請在此處填寫內容...  (Shift + Enter可以換行)"
                        >{{$pharmacist_feedback->pharmacist_question}}</textarea>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button"
                        id = "btn-pharmacist-feedback-cancel"
                        class="mx-2 bg-transparent border border-red-700 text-red-700 hover:bg-red-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    不儲存並關閉
                </button>
                <button type="button"
                        id = "btn-pharmacist-feedback-save"
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

    //儲存藥師回覆給病患的內容
    $('#btn-pharmacist-feedback-save').click(function(){
        //要回覆病患的內容
        let pharmacist_reply = $('#pharmacist_feedback_modal_pharmacist_reply').val();
        //向醫師提問(選填)
        let ask_to_doctor = $('#pharmacist_feedback_modal_ask_to_doctor').val();

        let url = "{{route('store_medication_management_pharmacist_feedback_data')}}";

        $.ajax({
            url: url,
            method: "post",
            data: {
                "_token": "{{csrf_token()}}",
                "task_id" : $('#task_id').text(),
                "pharmacist_reply": pharmacist_reply,
                "ask_to_doctor": ask_to_doctor
            },
            success: function (res) {
                if (res === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: '藥師回覆儲存成功',
                        confirmButtonColor: '#8CD4F5'
                    })
                }

            },
            error : function(res){
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


    })

</script>
