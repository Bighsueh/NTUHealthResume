<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="caseTrackingModal" tabindex="-1" aria-labelledby="caseTrackingModalTitle" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                    案件追蹤
                </h5>
                <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <!--section2-->
                <div class="rounded m-2 p-4">
                    <div class="grid grid-cols-1 mx-24">
                        <div class="grid grid-cols-3 mb-4">
                            <div class="text-right mx-4">
                                <div class="text-left">
                                    <a class="mx-4">問題</a>
                                    <br>
                                    <a class="mx-4">(包括潛在的)</a>
                                </div>

                            </div>
                            <div class="grid grid-cols-2 bg-gray-50 col-span-2">
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="radio"
                                        name="caseTrackingP[]"
                                        value=0>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >P1 治療效果</label>
                                    <br>
                                    <label class="form-check-label inline-block text-gray-800 ml-8"
                                    >已存在的(或潛在的)藥物治療效果(或無效)問題</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="radio"
                                        name="caseTrackingP[]"
                                        value=1>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >P2 治療安全性</label>
                                    <br>
                                    <label class="form-check-label inline-block text-gray-800 ml-8"
                                    >病人遭受，或可能遭受，來自藥物的不良事件</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="radio"
                                        name="caseTrackingP[]"
                                        value=2>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >P3 其他</label>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 mb-4">
                            <div class="text-right mx-4">
                                <div class="text-left">
                                    <a class="mx-4">原因</a>
                                    <br>
                                    <a class="mx-4">(包括潛在問題的可能原因)</a>
                                </div>

                            </div>
                            <div class="grid grid-cols-2 bg-gray-50 col-span-2">
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox"
                                        name="caseTrackingC[]"
                                        value=0>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >C1 藥物選擇</label>
                                    <br>
                                    <label class="form-check-label inline-block text-gray-800 ml-8"
                                    >藥物相關問題的原因可能與藥物選擇有關</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox"
                                        name="caseTrackingC[]"
                                        value=1>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >C2 藥物劑型</label>
                                    <br>
                                    <label class="form-check-label inline-block text-gray-800 ml-8"
                                    >藥物相關問題的原因與藥物劑型有關</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox"
                                        name="caseTrackingC[]"
                                        value=2>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >C3 劑型選擇</label>
                                    <br>
                                    <label class="form-check-label inline-block text-gray-800 ml-8"
                                    >藥物相關問題的原因可能與劑量方案選擇有關</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox"
                                        name="caseTrackingC[]"
                                        value=3>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >C4 治療療程</label>
                                    <br>
                                    <label class="form-check-label inline-block text-gray-800 ml-8"
                                    >藥物相關問題的原因與治療療程有關</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox"
                                        name="caseTrackingC[]"
                                        value=4>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >C5 調劑</label>
                                    <br>
                                    <label class="form-check-label inline-block text-gray-800 ml-8"
                                    >藥物相關問題的原因可能與醫囑和調劑過程有關</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox"
                                        name="caseTrackingC[]"
                                        value=5>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >C6 藥物使用過程</label>
                                    <br>
                                    <label class="form-check-label inline-block text-gray-800 ml-8"
                                    >藥物相關問題的可能原因是與病人從醫療專業人員或照護者取得藥品的流程有關，儘管(在藥物標籤上)已經有適當的說明</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox"
                                        name="caseTrackingC[]"
                                        value=6>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >C7 病人相關</label>
                                    <br>
                                    <label class="form-check-label inline-block text-gray-800 ml-8"
                                    >藥物相關問題的原因可能與病人和他的行為有關(故意的或無意的)</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox"
                                        name="caseTrackingC[]"
                                        value=7>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >C8 病人轉診相關</label>
                                    <br>
                                    <label class="form-check-label inline-block text-gray-800 ml-8"
                                    >藥物相關問題產生的原因可能與病人在初級、二級和三級醫療機構的轉換或是同一醫療機構內的轉換相關</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox"
                                        name="caseTrackingC[]"
                                        value=7>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >C9 其他</label>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 mb-4">
                            <div class="text-right mx-4">
                                <div class="text-left">
                                    <a class="mx-4">計畫介入</a>
                                </div>

                            </div>
                            <div class="grid grid-cols-2 bg-gray-50 col-span-2">
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox"
                                        name="caseTrackingI[]"
                                        value=0>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >I0 未介入</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox"
                                        name="caseTrackingI[]"
                                        value=1>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >I1 醫生層面</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox"
                                        name="caseTrackingI[]"
                                        value=2>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >I2 病人層面</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox"
                                        name="caseTrackingI[]"
                                        value=3>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >I3 藥物層面</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox"
                                        name="caseTrackingI[]"
                                        value=4>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >I4 其他</label>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 mb-4">
                            <div class="text-right mx-4">
                                <div class="text-left">
                                    <a class="mx-4">介入方案的接受</a>
                                </div>

                            </div>
                            <div class="grid grid-cols-2 bg-gray-50 col-span-2">
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="radio"
                                        name="caseTrackingA[]"
                                        value=0>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >A1 介入被接受</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="radio"
                                        name="caseTrackingA[]"
                                        value=1>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >A2 介入未被接受</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="radio"
                                        name="caseTrackingA[]"
                                        value=2>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >A3 其他</label>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 mb-4">
                            <div class="text-right mx-4">
                                <div class="text-left">
                                    <a class="mx-4">DRP狀態</a>
                                </div>

                            </div>
                            <div class="grid grid-cols-2 bg-gray-50 col-span-2">
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="radio"
                                        name="caseTrackingO[]"
                                        value=0>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >O1 問題狀態不明</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="radio"
                                        name="caseTrackingO[]"
                                        value=1>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >O2 問題已被解決</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="radio"
                                        name="caseTrackingO[]"
                                        value=2>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >O3 問題已部分解決</label>
                                </div>
                                <div class="form-check form-check-inline col-span-3">
                                    <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="radio"
                                        name="caseTrackingO[]"
                                        value=3>
                                    <label class="form-check-label inline-block text-gray-800"
                                    >O4 問題沒有解決</label>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button"
                        id="btn-case-tracking-cancel"
                        class="mx-2 bg-transparent border border-red-700 text-red-700 hover:bg-red-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    不儲存並關閉
                </button>
                <button type="button"
                        id="btn-case-tracking-save"
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
        console.log('123');
    });

</script>
