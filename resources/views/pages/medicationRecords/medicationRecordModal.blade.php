<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="medicationModal" tabindex="-1" aria-labelledby="medicationModalTitle" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl max-w-7xl modal-dialog-centered relative w-full pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                    藥品明細
                </h5>
                <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <div class="grid mx-10">
                    <p>就醫日期：<input disabled class="cell_input bg-white" id="medication_record_modal_redate"/></p>
                    <p>處方醫院：<input disabled class="cell_input bg-white" id="medication_record_modal_pres_hosp"/></p>
                    <p>調劑醫院：<input disabled class="cell_input bg-white" id="medication_record_modal_disp_hosp"/></p>
                    <p>保險類型：<input disabled class="cell_input bg-white" id="medication_record_modal_insurance_type"/>
                    </p>
                </div>

                <div>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full text-center">
                                        <thead class="border-b bg-white">
                                        <tr>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-2 text-left">
                                                #
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-2 text-left">
                                                適應症
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-2 text-left">
                                                藥物種類
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-2 text-left">
                                                藥品商品
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-2 text-left">
                                                藥品成份
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-2 text-left">
                                                劑量(顆數)
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-2 text-left">
                                                途徑
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-2 text-left">
                                                頻率
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-2 text-left">
                                                處方天數
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-2 text-left">
                                                總數
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-2 text-left">
                                                相關註記
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody id="medication_record_modal_tbody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <a href="#"
                   id="btn-medication-record-detail-save"
                   class="bg-transparent border border-blue-700 text-blue-700 hover:bg-blue-700 hover:text-white text-center py-2 px-4 rounded"
                   hidden
                >
                    {{--                   data-bs-toggle="modal" data-bs-target="#pharmacistModal">--}}
                    儲存
                </a>
                <a href="#"
                   id="btn-medication-record-detail-edit"
                   class="bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded"
                >
                    {{--                   data-bs-toggle="modal" data-bs-target="#pharmacistModal">--}}
                    編輯
                </a>
                <button type="button"
                        class="mx-2 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    關閉
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
    let record_id;
    //編輯藥物資訊按鈕
    $("#btn-medication-record-detail-edit").click(function () {
        //使input欄位可編輯
        $(".cell_input").removeAttr('disabled');
        //使input欄位加入邊框
        $(".cell_input").addClass('border-2');
        $(".cell_input").addClass('border-gray-300');

        //顯示儲存按鈕
        $('#btn-medication-record-detail-save').show();
        //隱藏編輯按鈕
        $("#btn-medication-record-detail-edit").hide();
    })

    //儲存藥物資訊的按鈕
    $("#btn-medication-record-detail-save").click(function () {
        let redate = $("#medication_record_modal_redate").val();
        let pres_hosp = $("#medication_record_modal_pres_hosp").val();
        let disp_hosp = $("#medication_record_modal_disp_hosp").val();
        let insurance_type = $("#medication_record_modal_insurance_type").val();
        let patient_id = $("#patient_id").text();
        let url = "{{route('update_medication_record_detail')}}";
        $.ajax({
            url: url,
            method: 'post',
            data: {
                "_token": "{{csrf_token()}}",
                "record_id": record_id,
                "redate": redate,
                "pres_hosp": pres_hosp,
                "disp_hosp": disp_hosp,
                "insurance_type": insurance_type,
                "patient_id": patient_id
            },
            success: function (res) {
                if (res === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: '儲存成功',
                        confirmButtonColor: '#8CD4F5'
                    })
                }
            }
        })

        //使input欄位可編輯
        $(".cell_input").attr('disabled');
        //使input欄位加入邊框
        $(".cell_input").removeClass('border-2');
        $(".cell_input").removeClass('border-gray-300');

        //顯示儲存按鈕
        $('#btn-medication-record-detail-save').hide();
        //隱藏編輯按鈕
        $("#btn-medication-record-detail-edit").show();
    })

    //開啟藥物資訊modal
    $(".btn-medication-detail").click(function () {
        //取得藥物id
        record_id = $(this).parent().parent().find('.medication_record_id').text();

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
                $("#medication_record_modal_redate").val(main_record['redate']);
                $("#medication_record_modal_pres_hosp").val(main_record['pres_hosp']);
                $("#medication_record_modal_disp_hosp").val(main_record['disp_hosp']);
                $("#medication_record_modal_insurance_type").val(main_record['insurance_type']);

                $("#medication_record_modal_tbody tr").remove();
                $.each(record_list, function (index, value) {
                    console.log(value);
                    $("#medication_record_modal_tbody").append(
                        `<tr class="bg-white border-b w-full">
                            <td class="td-thread px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
                                <a>${index + 1}</a>
                            </td>
                            <td class="text-sm justify-items-center text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <input class="w-auto bg-white cell_input cell_indication" value="${value['indication']}" disabled/>
                            </td>
                            <td class="text-sm justify-items-center text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <input class="w-full bg-white cell_input cell_category" value="${value['category']}" disabled/>
                            </td>
                            <td class="text-sm justify-items-center text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <input class="w-full bg-white cell_input cell_trade_name" value="${value['trade_name']}" disabled/>
                            </td>
                            <td class="text-sm justify-items-center text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <input class="w-full bg-white cell_input cell_generic_name" value="${value['generic_name']}" disabled/>
                            </td>
                            <td class="text-sm justify-items-center text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <input class="w-full bg-white cell_input cell_dose" value="${value['dose']}" disabled/>
                            </td>
                            <td class="text-sm justify-items-center text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <input class="w-full bg-white cell_input cell_routes" value="${value['routes']}" disabled/>
                            </td>
                            <td class="text-sm justify-items-center text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <input class="w-full bg-white cell_input cell_freq" value="${value['freq']}" disabled/>
                            </td>
                            <td class="text-sm justify-items-center text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <input class="w-full bg-white cell_input cell_pres_day" value="${value['pres_day']}" disabled/>
                            </td>
                            <td class="text-sm justify-items-center text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <input class="w-full bg-white cell_input cell_total_amount" value="${value['total_amount']}" disabled/>
                            </td>
                             <td class="text-sm justify-items-center text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                <input class="w-full bg-white cell_input cell_note" value="${value['note']}" disabled/>
                            </td>
                        </tr>`
                    )
                })
            }
        })
    })
</script>

