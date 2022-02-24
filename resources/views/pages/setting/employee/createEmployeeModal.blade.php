<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="createEmployeeModal" tabindex="-1" aria-labelledby="createEmployeeModal" aria-hidden="true">
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
                                        <tr>
                                            <td>
                                                <lable class="mx-2">
                                                    ID
                                                </lable>
                                            </td>
                                            <td>
                                                <input id="create_employee_id"  class="border-teal-700 border-b py-1 px-2">
                                            </td>
                                        </tr>
                    <tr>
                        <td>
                            <lable class="mx-2">
                                姓名
                            </lable>
                        </td>
                        <td>
                            <input  id="create_employee_name" class="border-teal-700 border-b py-1 px-2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="mx-2">
                                帳號
                            </lable>
                        </td>
                        <td>
                            <input id="create_employee_account" class="border-teal-700 border-b py-1 px-2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="mx-2">
                                密碼
                            </lable>
                        </td>
                        <td>
                            <input id="create_employee_password" class="border-teal-700 border-b py-1 px-2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="mx-2">
                                職位
                            </lable>
                        </td>
                        <td>
                            <input id="create_job_title" class="border-teal-700 border-b py-1 px-2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="mx-2">
                                部門
                            </lable>
                        </td>
                        <td>
                            <input id="create_department" class="border-teal-700 border-b py-1 px-2">
                        </td>
                    </tr>
                </table>

                <p>
                    <input type="checkbox" class="btn_check" id="create_open_main_task" value="0">
                    <label for="open_main_task">新增任務</label>
                </p>
                <p>
                    <input type="checkbox" class="btn_check" id="create_add_doctor_reply" value="0">
                    <label for="add_doctor_reply">填寫醫師回饋單</label>
                </p>
                <p>
                    <input type="checkbox" class="btn_check" id="create_add_pharmacist_reply" value="0">
                    <label for="add_pharmacist_reply">填寫藥師回饋單</label>
                </p>
                <p>
                    <input type="checkbox" class="btn_check" id="create_close_main_task" value="0">
                    <label for="close_main_task">任務結案</label>
                </p>

                <p>
                    <input type="checkbox" class="btn_check" id="create_add_diet_log" value="0">
                    <label for="add_diet_log">填寫飲食紀錄</label>
                </p>
                <p>
                    <input type="checkbox" class="btn_check" id="create_add_nutritionist" value="0">
                    <label for="add_nutritionist">營養師評論</label>
                </p>
                <p>
                    <input type="checkbox" class="btn_check" id="create_manage_employee" value="0">
                    <label for="manage_employee">員工資訊管理</label>
                </p>
                <p>
                    <input type="checkbox" class="btn_check" id="create_manage_patient" value="0">
                    <label for="manage_patient">病患資訊管理</label>
                </p>

            </div>


            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center
                justify-center p-4 border-t border-gray-200 rounded-b-md">
                <button class="mx-4 flex-shrink-0 bg-teal-700 hover:bg-blue-500
                border-teal-700 hover:border-blue-500 text-sm
                -4 text-white py-1 px-10 rounded btn_store_create" id="btn_store_create">新增</button>

            </div>
        </div>
    </div>
</div>
<script>

    function open_createEmployeeModal(){
        $('#createEmployeeModal').modal('show');
    }

    $('#btn_store_create').click(function () {
        store_create_employee();
    })




    function store_create_employee(){

        $.ajax({
            url:'{{route('store_create_employee')}}',
            method:'get',
            data:{
                employee_id:$('#create_employee_id').val(),
                employee_name:$('#create_employee_name').val(),
                employee_account:$('#create_employee_account').val(),
                employee_password:$('#create_employee_password').val(),
                job_title:$('#create_job_title').val(),
                department:$('#create_department').val(),
                open_main_task:$('#create_open_main_task').val(),
                add_doctor_reply:$('#create_add_doctor_reply').val(),
                add_pharmacist_reply:$('#create_add_pharmacist_reply').val(),
                close_main_task:$('#create_close_main_task').val(),
                add_diet_log:$('#create_add_diet_log').val(),
                add_nutritionist:$('#create_add_nutritionist').val(),
                manage_employee:$('#create_manage_employee').val(),
                manage_patient:$('#create_manage_patient').val()
            },
            success:function (res){
                window.alert(res)
                window.location.reload();
            }
        })
    }
    $('.btn_check').change(function () {
        this.value = (Number(this.checked));
    })

</script>
