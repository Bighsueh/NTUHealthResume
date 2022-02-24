<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="createMedicationDetailModel" tabindex="-1" aria-labelledby="createMedicationDetailModelTitle" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                    新增藥歷紀錄
                </h5>
                <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <!--醫師回饋內容-->
                <div class="flex justify-center">
                    <div class="mb-3 xl:w-full">
                        <b class="mx-2">新增藥歷圖片</b>
                        <br>
                        <input
                            class="mx-2 btn-pharmacist-feedback bg-transparent border text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded"
                            id="file_create_medication_detail_modal_img_upload"
                            type="file"
                        />


                    </div>
                </div>
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button"
                        class="btn-doctor-feedback-save mx-2 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    儲存並關閉
                </button>
                <button type="button"
                        class="btn-doctor-feedback-cancel mx-2 bg-transparent border border-red-700 text-red-700 hover:bg-red-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    不儲存並關閉
                </button>
            </div>
        </div>
    </div>
</div>
<script>

</script>
