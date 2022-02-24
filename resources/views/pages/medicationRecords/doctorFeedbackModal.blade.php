<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="doctorFeedbackModal" tabindex="-1" aria-labelledby="doctorFeedbackModalTitle" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                    醫師回饋單
                </h5>
                <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <!--病患用藥紀錄-->
                <div>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full text-center">
                                        <b class="mx-2">病患用藥紀錄</b>
                                        <thead class="border-b bg-white">
                                        <tr>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                                                #
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                                                適應症
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                                                藥物種類
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                                                藥品商品名稱
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                                                藥品成份名稱
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                                                劑量(顆數)
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                                                途徑
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                                                頻率
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                                                處方天數
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                                                總數
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                                                服務相關註記
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody id="doctor_feedback_modal_tbody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--醫師回饋內容-->
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
                            id="doctor_feedback_modal_doctor_reply"
                            rows="5"
                            placeholder="請在此處填寫內容...  (Shift + Enter可以換行)"
                        ></textarea>
                    </div>
                </div>

                <!--醫師向藥師提問-->
                <div class="flex justify-center">
                    <div class="mb-3 xl:w-full">
                        <b class="mx-2">發出藥師回饋函</b>
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
                            id="doctor_feedback_modal_send_to_pharmacist"
                            rows="5"
                            placeholder="請在此處填寫內容...  (Shift + Enter可以換行)"
                        ></textarea>
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

        //儲存醫師回覆
        $(".btn-doctor-feedback-save").click(function () {
            let doctor_reply = $("#doctor_feedback_modal_doctor_reply").val();
            let url = "{{route('store_doctor_feedback')}}";

            $.ajax({
                url: url,
                method: "post",
                data: {
                    "_token": "{{csrf_token()}}",
                    "record_id": record_id,
                    "doctor_reply": doctor_reply,
                },
                success: function (res) {
                    //sweetalert
                    if (res === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: '儲存成功',
                            confirmButtonColor: '#8CD4F5'
                        })
                    }
                }
            })
        })

        //開啟醫師回饋單
        $(".btn-doctor-feedback").click(function () {
            //取得藥物id
            record_id = $(this).parent().parent().find('.medication_record_id').text();

            update_doctor_reply_textarea();
            update_medication_record_detail();
        })

        //更新要回覆病患內容欄位的資料
        function update_doctor_reply_textarea() {
            let url = "{{route('get_doctor_feedback')}}";

            //清空回覆病患內容的欄位
            $("#doctor_feedback_modal_doctor_reply").val('');

            $.ajax({
                url: url,
                method: "post",
                data: {
                    "_token": "{{csrf_token()}}",
                    "record_id": record_id,
                },
                success: function (res) {
                    //將資料寫入欄位
                    $("#doctor_feedback_modal_doctor_reply").val(res);
                }
            })
        }

        //更新病患用藥紀錄
        function update_medication_record_detail() {
            let url = "{{route('get_medication_record_detail')}}";


            $.ajax({
                url: url,
                method: "post",
                data: {
                    "_token": "{{csrf_token()}}",
                    "record_id": record_id,
                },
                success: function (res) {
                    // console.log(res);
                    let main_record = res['main_record'];
                    let record_list = res['record_list'];

                    //寫入資料 就醫日、處方醫院、調劑醫院、保險類型
                    $("#medication_record_modal_redate").text(main_record['redate']);
                    $("#medication_record_modal_pres_hosp").text(main_record['pres_hosp']);
                    $("#medication_record_modal_disp_hosp").text(main_record['disp_hosp']);
                    $("#medication_record_modal_insurance_type").text(main_record['insurance_type']);


                    $("#doctor_feedback_modal_tbody tr").remove();
                    //寫入病患用藥紀錄
                    $.each(record_list, function (index, value) {
                        // console.log(value);
                        $("#doctor_feedback_modal_tbody").append(
                            `<tr class="bg-white border-b">
                            <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
                                <a>${index + 1}</a>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <a>${value['indication']}</a>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <a>${value['category']}</a>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <a>${value['trade_name']}</a>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <a>${value['generic_name']}</a>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <a>${value['dose']}</a>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <a>${value['routes']}</a>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <a>${value['freq']}</a>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <a>${value['pres_day']}</a>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <a>${value['total_amount']}</a>
                            </td>
                             <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <a>${value['note']}</a>
                            </td>
                        </tr>`
                        )
                    })
                }
            })

        }
    })
</script>
