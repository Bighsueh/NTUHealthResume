<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto "
     id="ProgressBarModal" tabindex="-1" aria-labelledby="ProgressBarModal" aria-hidden="true">
    <div class="modal-dialog relative w-full pointer-events-none max-w-6xl">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current my-96">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="" id="ProgressBarModalLabel">
                    <p class="mx-2 my-2 justify-self-start font-bold text-xl">最新進度</p>
                </h5>
                <button type="button"
                        class="btn-close box-content w-4 h-3  text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="px-12">
                <div class="modal-body relative m-3 w-full ">

                    <ul id="stepper_container" class="stepper" data-mdb-stepper="stepper">
                        <li id="case_created" class="stepper-step">
                            <div class="stepper-head">
                                <span class="stepper-head-icon"></span>
                                <span class="stepper-head-text"> 案件建立 </span>
                            </div>
                        </li>
                        <li id="input_data" class="stepper-step">
                            <div class="stepper-head ">
                                <span class="stepper-head-icon"></span>
                                <span class="stepper-head-text"> 資料輸入 </span>
                            </div>
                        </li>
                        <li id="other_info" class="stepper-step">
                            <div class="stepper-head">
                                <span class="stepper-head-icon"></span>
                                <span class="stepper-head-text"> 其他資訊 </span>
                            </div>
                        </li>
                        <li id="pharmacist_feedback" class="stepper-step ">
                            <div class="stepper-head">
                                <span class="stepper-head-icon"></span>
                                <span class="stepper-head-text"> 藥師回饋 </span>
                            </div>

                        </li>
                        <li id="doctor_feedback" class="stepper-step">
                            <div class="stepper-head">
                                <span class="stepper-head-icon"></span>
                                <span class="stepper-head-text"> 醫師回饋 </span>
                            </div>
                        </li>
                        <li id="case_closed" class="stepper-step">
                            <div class="stepper-head">
                                <span class="stepper-head-icon"></span>
                                <span class="stepper-head-text"> 結案 </span>
                            </div>
                        </li>
                    </ul>


                </div>

            </div>

            {{--            footer--}}
            {{--            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-gray-200 rounded-b-md">--}}
            {{--                <button class="mx-4 flex-shrink-0 bg-teal-700--}}
            {{--                hover:bg-blue-500 border-teal-700--}}
            {{--                hover:border-blue-500 text-sm border-4 text-white py-1 px-10 rounded " id="btn_store_edit_patient">修改</button>--}}

            {{--                <button class="mx-4 flex-shrink-0 bg-teal-700--}}
            {{--                hover:bg-red-500 border-teal-700--}}
            {{--                hover:border-red-500 text-sm border-4 text-white py-1 px-10 rounded btn_delete_patient" id="btn_delete_patient" >刪除</button>--}}
            {{--            </div>--}}
        </div>

    </div>

</div>

<script>
    numbering_stepper()


    function open_ProgressBarModal(task_id) {
        get_progress_data(task_id)
        $('#ProgressBarModal').modal('show');
    }

    //給進度上數字編號
    function numbering_stepper() {
        let stepper_list = $(".stepper-step")
        $.each(stepper_list, function (index, value) {
            stepper_list.eq(index).find('.stepper-head-icon').text(index + 1);
        });
    }

    //取得進度資訊
    function get_progress_data(task_id) {
        let url = "{{route('get_progress_data')}}";
        let token = "{{csrf_token()}}";
        $.ajax({
            url: url,
            method: 'post',
            data: {
                '_token': token,
                'task_id': task_id,
            },
            success: function (res) {
                $.each(res,function (index,value) {
                    //content為任務內容
                    let content = value['content'];
                    //將指定的stepper點亮
                    $(`#${content}`).addClass('stepper-active');
                })
            },
            error: function (res) {
                console.log(res);
            }
        })
    }



</script>
