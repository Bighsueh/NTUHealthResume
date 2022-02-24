<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="medicationModal" tabindex="-1" aria-labelledby="medicationModalTitle" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
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
                    <p>　就醫日：<a id="medication_record_modal_redate"></a></p>
                    <p>處方醫院：<a id="medication_record_modal_pres_hosp"></a></p>
                    <p>調劑醫院：<a id="medication_record_modal_disp_hosp"></a></p>
                    <p>保險類型：<a id="medication_record_modal_insurance_type"></a></p>
                </div>

                <div>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full text-center">
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
                                        <tbody>
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
                                                <a id="medication_record_modal_indication"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="medication_record_modal_category"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="medication_record_modal_trade_name"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="medication_record_modal_generic_name"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="medication_record_modal_dose"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="medication_record_modal_routes"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="medication_record_modal_freq"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="medication_record_modal_pres_day"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="medication_record_modal_total_amount"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="medication_record_modal_note"></a>
                                            </td>
                                        </tr>
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
    $(".btn-medication-detail").click(function(){
        //取得藥物id
        let record_id = $(this).parent().parent().find('.medication_record_id').text();

        let url = "{{route('get_medication_record_detail')}}";

        $.ajax({
            url : url,
            method : "post",
            data:{
                "_token":"{{csrf_token()}}",
                "record_id":record_id,
            },
            success:function(res){
                // console.log(res);
                //寫入資料 就醫日、處方醫院、調劑醫院、保險類型
                $("#medication_record_modal_redate").text(res['redate']);
                $("#medication_record_modal_pres_hosp").text(res['pres_hosp']);
                $("#medication_record_modal_disp_hosp").text(res['disp_hosp']);
                $("#medication_record_modal_insurance_type").text(res['insurance_type']);
            }
        })
    })
</script>

