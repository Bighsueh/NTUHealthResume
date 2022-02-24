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
{{--                        <b class="mx-2 block uppercase tracking-wide text-gray-700 font-bold">--}}
{{--                            新增藥歷圖片--}}
{{--                        </b>--}}
{{--                        <input--}}
{{--                            class="mx-2 btn-pharmacist-feedback bg-transparent border text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded"--}}
{{--                            id="file_create_medication_detail_modal_img_upload"--}}
{{--                            type="file"--}}
{{--                        />--}}
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <b class="mx-2 block uppercase tracking-wide text-gray-700 font-bold" for="grid-date-of-examination">
                                    就醫日期
                                </b>
                                <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="grid-date-of-examination" type="text" placeholder="請填入就醫日期">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <b class="mx-2 block uppercase tracking-wide text-gray-700 font-bold" for="grid-insurance-type">
                                    保險類型
                                </b>
                                <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="grid-insurance-type" type="text" placeholder="請填入保險類型">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <b class="mx-2 block uppercase tracking-wide text-gray-700 font-bold" for="grid-pres-hosp">
                                    處方醫院
                                </b>
                                <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="grid-pres-hosp" type="text" placeholder="請填入處方醫院">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <b class="mx-2 block uppercase tracking-wide text-gray-700 font-bold" for="grid-disp-hosp">
                                    調劑醫院
                                </b>
                                <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="grid-disp-hosp" type="text" placeholder="請填入調劑醫院">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button"
                        class="btn-create-medication-detail-modal-save mx-2 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    儲存並關閉
                </button>
                <button type="button"
                        class="btn-create-medication-detail-modal-cancel mx-2 bg-transparent border border-red-700 text-red-700 hover:bg-red-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    不儲存並關閉
                </button>
            </div>
        </div>
    </div>
</div>
<script>
//開啟新增藥歷紀錄modal
$("#btn-create-medication-detail-modal").click(function(){
    $("#grid-date-of-examination").val('');
    $("#grid-redate").val('');
    $("#grid-pres-hosp").val('');
    $("#grid-disp-hosp").val('');
})

//新增藥歷紀錄
$(".btn-create-medication-detail-modal-save").click(function(){
    let date_of_examination = $("#grid-date-of-examination").val();
    let redate = $("#grid-redate").val();
    let pres_hosp = $("#grid-pres-hosp").val();
    let disp_hosp = $("#grid-disp-hosp").val();

    let patient_id = $("#patient_id").text();

    let url = "{{route('store_medication_record_detail')}}";
    $.ajax({
        url:url,
        method: "post",
        data:{
            "_token":"{{csrf_token()}}",
            "date_of_examination" : date_of_examination,
            "redate" : redate,
            "pres_hosp" : pres_hosp,
            "disp_hosp" : disp_hosp,
            "patient_id": patient_id,
        },
        success: function (res) {
            console.log(res)
            if (res === "success") {
                Swal.fire({
                    icon: 'success',
                    title: '儲存成功',
                    text: '即將重新整理頁面',
                    confirmButtonColor: '#8CD4F5'
                })
                location.reload();
            }
        }
    })
})
</script>
