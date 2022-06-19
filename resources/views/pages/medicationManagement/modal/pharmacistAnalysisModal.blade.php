<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto "
     id="pharmacist_Analysis_Modal" tabindex="-1" aria-labelledby="pharmacist_Analysis_Modal" aria-hidden="true">
    <div class="modal-dialog relative w-full pointer-events-none max-w-full">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="" id="exampleModalLabel"></h5>
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
                    <div class="flex overflow-x-scroll">
                        <div class="rounded m-2 flex-1 bg-gray-50 p-4">
                            <table class="divide-y divide-gray-200 min-w-full">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        #
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        調劑醫院
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        處方醫院
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        適應症
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        藥物種類
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        藥品成分名稱
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        藥品商品名稱
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        處方天數
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        總數
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        開方日期
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        途徑
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        頻率
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        藥師評估
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        1. 用藥適當性評估
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        2. ADR
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        3. 區分慢性病用藥VS 症狀治療藥物
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        4. Anti-ACB
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        需肝腎功能調整劑量
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        5. Anti-ACB Risk
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        6. 跌倒高危藥品
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        7. Polypharmacy1

                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        8. Polypharmacy2

                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        9. Polypharmacy3
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        "10. 是否建議密集追蹤
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        11. 其他藥師建議 or 備註
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        12. 給病患回饋內容
                                    </th>
                                    <th class="px-4 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                        13. 給醫師回饋內容
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200" id="tbody">
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        1
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">

                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        元美藥局
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">

                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">

                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        Piracetam
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        Syntam F.C tablets 1200mg
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        28
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        56
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        2022/3/10
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">

                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">

                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">

                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <p>1. Dose: OK</p>
                                        <p>2. DDI: No</p>
                                        <p>3. Indication:促進血液循環</p>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        N
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        1
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        0
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        Y(腎)
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        0
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        N
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        2
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        2
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        2
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        0
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        無
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <p>★ 以下請規則服用:</p>
                                        <p>欣坦膜衣錠 (促進血液循環);</p>
                                        <p>使蒂諾斯錠 (改善失眠)</p>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        無
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
</div>

<script>

    function open_pharmacist_Analysis_Modal() {
        $('#pharmacist_Analysis_Modal').modal('show');

    }
</script>
