<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="OtherInformationModal" tabindex="-1" aria-labelledby="OtherInformationModalTitle" aria-modal="true"
     role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                    其他資訊
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
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button"
                        id="btn-doctor-feedback-cancel"
                        class="mx-2 bg-transparent border border-red-700 text-red-700 hover:bg-red-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    不儲存並關閉
                </button>
                <button type="button"
                        id="btn-doctor-feedback-save"
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

        //儲存醫師回覆的內容
        $('#btn-doctor-feedback-save').click(function () {
            let doctor_reply = $('#other_information_modal_doctor_reply').val();

            let url = "";

        })

        //開啟Modal
        $("#btn_other_information").click(function(){
            console.log('btn_other_information')
        })

        //other_information_modal_doctor_reply


    })
    function test(){
        console.log($('textarea'));
    }
</script>
