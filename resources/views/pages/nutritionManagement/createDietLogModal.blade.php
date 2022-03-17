<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="dietLog" tabindex="-1" aria-labelledby="dietLogLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <form action="{{route('store_dietLog')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-2xl font-bold leading-normal text-gray-800" id="dietLogLabel">
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
                        <div class="group-input flex py-5 text-xl">
                            <div class="px-2 flex">
                                <label for="meal_name">菜色：</label>
                                <input name="meal_name" id="meal_name" type="text" class="border border-black">
                            </div>
                            <div class="px-2 flex">
                                <label for="size">餐點份量：</label>
                                <input name="size" id="size" type="text" class="border border-black">
                                <input class="hidden" id="task_id" name="task_id" value="{{$patient_data['task_id']}}">
                                <input name="patient_id" id="patient_id" type="text" class="border border-black hidden" value="{{$patient_data['patient_id']}}">
                            </div>
                        </div>
                        <input type="file" id="" name="pic" class=""/>
                </div>
                <div
                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                    <button type="submit"
                            id="btn_insert"
                            class="inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-sm
                            leading-tight rounded shadow-md  hover:shadow-lg hover:bg-blue-700 focus:bg-blue-700 focus:shadow-lg
                            focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out"
                            >
                        新增
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function create_dietLog(){
        $('#dietLog').modal('show');
    }
</script>
