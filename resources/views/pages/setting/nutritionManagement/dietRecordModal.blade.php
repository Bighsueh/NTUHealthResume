<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="dietRecordModal" tabindex="-1" aria-labelledby="dietRecordModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-2xl font-bold leading-normal text-gray-800" id="dietRecordModalLabel">
                    飲食紀錄
                </h5>
                <button type="button"
                        class="btn-close box-content   text-black border-none rounded-none opacity-50  focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="modal-body relative p-4">
                <form>
                    <div class="group-input flex py-5">
                        <div class="px-2 flex">
                            <label for="size">餐序：</label>
                            <input name="size" id="size" type="text" class="border border-black">
                        </div>
                        <div class="px-2 flex">
                            <label for="size">餐點份量：</label>
                            <input name="size" id="size" type="text" class="border border-black">
                        </div>
                    </div>

                    <div class="flex justify-center border border-dashed border-black h-40 box-border">
                        <button  class="w-full h-full m-0 text-xl font-medium">
                            上傳圖片
                        </button>
                    </div>
                </form>

            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button"
                        class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                        data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function open_dietRecordModal(){
        $('#dietRecordModal').modal('show');
    }
</script>
