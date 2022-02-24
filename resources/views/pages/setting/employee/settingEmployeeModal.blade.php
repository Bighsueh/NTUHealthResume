

<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="settingEmployeeModal" tabindex="-1" aria-labelledby="settingEmployeeModal" aria-hidden="true">
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
{{--                            <input id="edit_employee_id"  class="border-teal-700 border-b py-1 px-2">--}}
{{--                        </td>--}}
{{--                    </tr>--}}
                    <tr>
                        <td>
                            <lable class="mx-2">
                                姓名
                            </lable>
                        </td>
                        <td>
                            <input  id="edit_employee_name" class="border-teal-700 border-b py-1 px-2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="mx-2">
                                帳號
                            </lable>
                        </td>
                        <td>
                            <input id="edit_employee_account" class="border-teal-700 border-b py-1 px-2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="mx-2">
                                密碼
                            </lable>
                        </td>
                        <td>
                            <input id="edit_employee_password" class="border-teal-700 border-b py-1 px-2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="mx-2">
                                職位
                            </lable>
                        </td>
                        <td>
                            <input id="edit_job_title" class="border-teal-700 border-b py-1 px-2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="mx-2">
                                部門
                            </lable>
                        </td>
                        <td>
                            <input id="edit_department" class="border-teal-700 border-b py-1 px-2">
                        </td>
                    </tr>
                </table>

                <p>
                    <input type="checkbox" class="btn_check" id="edit_open_main_task" >
                    <label for="open_main_task">新增任務</label>
                </p>
                <p>
                    <input type="checkbox" class="btn_check" id="edit_add_doctor_reply" >
                    <label for="add_doctor_reply">填寫醫師回饋單</label>
                </p>
                <p>
                    <input type="checkbox" class="btn_check" id="edit_add_pharmacist_reply" >
                    <label for="add_pharmacist_reply">填寫藥師回饋單</label>
                </p>
                <p>
                    <input type="checkbox" class="btn_check" id="edit_close_main_task" >
                    <label for="close_main_task">任務結案</label>
                </p>
                <p>
                    <input type="checkbox" class="btn_check" id="edit_add_diet_log" >
                    <label for="add_diet_log">填寫飲食紀錄</label>
                </p>
                <p>
                    <input type="checkbox" class="btn_check" id="edit_add_nutritionist" >
                    <label for="add_nutritionist">營養師評論</label>
                </p>
                <p>
                    <input type="checkbox" class="btn_check" id="edit_manage_employee" >
                    <label for="manage_employee">員工資訊管理</label>
                </p>
                <p>
                    <input type="checkbox" class="btn_check" id="edit_manage_patient" >
                    <label for="manage_patient">病患資訊管理</label>
                </p>

            </div>


            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center
                justify-center p-4 border-t border-gray-200 rounded-b-md">
                <button class="mx-4 flex-shrink-0 bg-teal-700 hover:bg-blue-500
                border-teal-700 hover:border-blue-500 text-sm
                -4 text-white py-1 px-10 rounded btn_store_edit" id="btn_store_edit">修改</button>

                <button class="mx-4 flex-shrink-0 bg-teal-700 hover:bg-red-500
                border-teal-700 hover:border-blue-500 text-sm
                -4 text-white py-1 px-10 rounded btn_delete" id="btn_delete">刪除</button>

            </div>
        </div>
    </div>
</div>

<script>
    let id;

    function open_settingEmployeeModal(employee_id){
        id = employee_id;
        $.ajax({
            url:'{{route('get_edit_employee')}}',
            method:'get',
            data:{
                employee_id:employee_id,
            },
            success:function (res){
                // $('#edit_employee_id').val(res[0]['employee_id']);
                $('#edit_employee_name').val(res[0]['employee_name']);
                $('#edit_employee_account').val(res[0]['employee_account']);
                $('#edit_employee_password').val(res[0]['employee_password']);
                $('#edit_job_title').val(res[0]['job_title']);
                $('#edit_department').val(res[0]['department']);

                $('#edit_open_main_task').prop('checked',res[0]['open_main_task']);
                $('#edit_open_main_task').val(res[0]['open_main_task']);

                $('#edit_add_doctor_reply').prop('checked',res[0]['add_doctor_reply']);
                $('#edit_add_doctor_reply').val(res[0]['add_doctor_reply']);

                $('#edit_add_pharmacist_reply').prop('checked',res[0]['add_pharmacist_reply']);
                $('#edit_add_pharmacist_reply').val(res[0]['add_pharmacist_reply']);

                $('#edit_close_main_task').prop('checked',res[0]['close_main_task']);
                $('#edit_close_main_task').val(res[0]['close_main_task']);

                $('#edit_add_diet_log').prop('checked',res[0]['add_diet_log']);
                $('#edit_add_diet_log').val(res[0]['add_diet_log']);

                $('#edit_add_nutritionist').prop('checked',res[0]['add_nutritionist']);
                $('#edit_add_nutritionist').val(res[0]['add_nutritionist']);

                $('#edit_manage_employee').prop('checked',res[0]['manage_employee']);
                $('#edit_manage_employee').val(res[0]['manage_employee']);

                $('#edit_manage_patient').prop('checked',res[0]['manage_patient']);
                $('#edit_manage_patient').val(res[0]['manage_patient']);

            },
        });
        $('#settingEmployeeModal').modal('show');
    }

    $('#btn_store_edit').click(function (){
        store_edit_employee();
        // $('#settingEmployeeModal').modal('hide');
    })

    function store_edit_employee(){
        $.ajax({
            url:"{{route('store_edit_employee')}}",
            method:'get',
            data:{
                employee_id:id,
                employee_name:$('#edit_employee_name').val(),
                employee_account:$('#edit_employee_account').val(),
                employee_password:$('#edit_employee_password').val(),
                job_title:$('#edit_job_title').val(),
                department:$('#edit_department').val(),
                open_main_task:$('#edit_open_main_task').val(),
                add_doctor_reply:$('#edit_add_doctor_reply').val(),
                add_pharmacist_reply:$('#edit_add_pharmacist_reply').val(),
                close_main_task:$('#edit_close_main_task').val(),
                add_diet_log:$('#edit_add_diet_log').val(),
                add_nutritionist:$('#edit_add_nutritionist').val(),
                manage_employee:$('#edit_manage_employee').val(),
                manage_patient:$('#edit_manage_patient').val()
            },
            success:function (res){
                window.alert(res)
                window.location.reload();
            }
        })
    }

    $('#btn_delete').click(function () {
        if(window.confirm('確定要刪除')){
            delete_employee()
        }
    })
    function delete_employee(){
        $.ajax({
            url:"{{route('delete_employee')}}",
            method:'get',
            data:{
                employee_id:id
            },
            success:function (res) {
                window.alert(res);

                update_data();
            }
        });
        $('#settingEmployeeModal').modal('hide');
    }
    $('.btn_check').change(function () {
        this.value = (Number(this.checked));
    })
</script>
