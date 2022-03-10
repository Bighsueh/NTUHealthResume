
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto "
     id="ProgressBarModal" tabindex="-1" aria-labelledby="ProgressBarModal" aria-hidden="true">
    <div class="modal-dialog relative w-full pointer-events-none max-w-6xl">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="" id="exampleModalLabel">
                    <p class="mx-2 my-2 justify-self-start font-bold text-xl">最新進度</p>
                </h5>
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

                    <ul class="stepper" data-mdb-stepper="stepper">
                        <li class="stepper-step stepper-active">
                            <div class="stepper-head">
                                <span class="stepper-head-icon"> 1 </span>
                                <span class="stepper-head-text"> 照片上傳 </span>
                            </div>
                        </li>
                        <li class="stepper-step">
                            <div class="stepper-head stepper-active">
                                <span class="stepper-head-icon"> 2 </span>
                                <span class="stepper-head-text"> 資料輸入 </span>
                            </div>

                        </li>
                        <li class="stepper-step">
                            <div class="stepper-head">
                                <span class="stepper-head-icon"> 3 </span>
                                <span class="stepper-head-text"> 藥師接手 </span>
                            </div>
                        </li>
                        <li class="stepper-step">
                            <div class="stepper-head">
                                <span class="stepper-head-icon"> 4 </span>
                                <span class="stepper-head-text"> 醫師意見 </span>
                            </div>

                        </li>
                        <li class="stepper-step">
                            <div class="stepper-head">
                                <span class="stepper-head-icon"> 5 </span>
                                <span class="stepper-head-text"> 藥師意見 </span>
                            </div>
                        </li>
                        <li class="stepper-step">
                            <div class="stepper-head">
                                <span class="stepper-head-icon"> 6 </span>
                                <span class="stepper-head-text"> 輸出結束 </span>
                            </div>
                        </li>
                    </ul>


                </div>

            </div>

            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-gray-200 rounded-b-md">
{{--                <button class="mx-4 flex-shrink-0 bg-teal-700--}}
{{--                hover:bg-blue-500 border-teal-700--}}
{{--                hover:border-blue-500 text-sm border-4 text-white py-1 px-10 rounded " id="btn_store_edit_patient">修改</button>--}}

{{--                <button class="mx-4 flex-shrink-0 bg-teal-700--}}
{{--                hover:bg-red-500 border-teal-700--}}
{{--                hover:border-red-500 text-sm border-4 text-white py-1 px-10 rounded btn_delete_patient" id="btn_delete_patient" >刪除</button>--}}


            </div>
        </div>

    </div>

</div>

<script>
    function open_ProgressBarModal() {
        $('#ProgressBarModal').modal('show');
    }

</script>
