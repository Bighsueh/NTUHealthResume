

<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="settingEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="" id="exampleModalLabel"></h5>
                <button type="button"
                        class="btn-close box-content w-4 h-3  text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="px-12">
                <table class="modal-body relative m-3 w-full">
{{--                    <tr>--}}
{{--                        <td>--}}
{{--                            <lable class="mx-2">--}}
{{--                                ID--}}
{{--                            </lable>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <input value="1" class="border-teal-700 border-b py-1 px-2">--}}
{{--                        </td>--}}
{{--                    </tr>--}}
                    <tr>
                        <td>
                            <lable class="mx-2">
                                姓名
                            </lable>
                        </td>
                        <td>
                            <input value="幼幼" class="border-teal-700 border-b py-1 px-2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="mx-2">
                                帳號
                            </lable>
                        </td>
                        <td>
                            <input value="123" class="border-teal-700 border-b py-1 px-2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="mx-2">
                                密碼
                            </lable>
                        </td>
                        <td>
                            <input value="456" class="border-teal-700 border-b py-1 px-2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="mx-2">
                                職位
                            </lable>
                        </td>
                        <td>
                            <input value="藥師" class="border-teal-700 border-b py-1 px-2">
                        </td>
                    </tr>
                </table>
            </div>

            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center  border-t border-gray-200 rounded-b-md">
                <button class="mx-4 flex-shrink-0 bg-teal-700 hover:bg-blue-500 border-teal-700 hover:border-blue-500 text-sm border-4 text-white py-1 px-10 rounded" >修改</button>
{{--                <button class="mx-4 flex-shrink-0 bg-teal-700 hover:bg-red-500 border-teal-700 hover:border-red-500 text-sm border-4 text-white py-1 px-6 rounded " data-bs-dismiss="modal">關閉</button>--}}

            </div>
        </div>
    </div>
</div>

<script>
    function open_settingEmployeeModal(){
        $('#settingEmployeeModal').modal('show');
    }

</script>
