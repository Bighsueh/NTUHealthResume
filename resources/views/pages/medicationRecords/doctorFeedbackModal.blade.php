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
                                        <tbody>
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
                                                <a id="doctor_feedback_modal_indication"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="doctor_feedback_modal_category"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="doctor_feedback_modal_trade_name"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="doctor_feedback_modal_generic_name"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="doctor_feedback_modal_dose"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="doctor_feedback_modal_routes"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="doctor_feedback_modal_freq"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="doctor_feedback_modal_pres_day"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="doctor_feedback_modal_total_amount"></a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                <a id="doctor_feedback_modal_note"></a>
                                            </td>
                                        </tr>
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
                        <b class="mx-2">病患用藥紀錄</b>
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

