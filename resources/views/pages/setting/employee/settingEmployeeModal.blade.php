

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
            <div class="px-12 py-6">
                        <div class="relative z-0 mb-4 w-full group">
                            <input id="edit_employee_name"
                                type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                            <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">姓名</label>
                        </div>
                        <div class="relative z-0 mb-4 w-full group">
                            <input id="edit_employee_account"
                                   type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                            <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">帳號</label>
                        </div>
                        <div class="relative z-0 mb-4 w-full group">
                            <input id="edit_employee_password"
                                   type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                            <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">密碼</label>
                        </div>
                        <div class="relative z-0 mb-4 w-full group">
                            <input id="edit_job_title"
                                   type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                            <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">職位</label>
                        </div>
                        <div class="relative z-0 mb-3 w-full group">
                            <input id="edit_department"
                                   type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                            <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">部門</label>
                        </div>

                <p>
                    <label class="inline-flex items-center mt-1">
                        <input value="0" type="checkbox" id="edit_admin" class="form-checkbox h-5 w-5 text-teal-600 btn_check btn_admin" ><span class="ml-2 text-gray-700">管理員權限</span>
                    </label>
                </p>
                <p>
                    <label class="inline-flex items-center mt-1">
                        <input type="checkbox" id="edit_open_main_task" class="form-checkbox h-5 w-5 text-teal-600 btn_check" checked><span class="ml-2 text-gray-700">新增任務</span>
                    </label>
                </p>
                <p>
                    <label class="inline-flex items-center mt-1">
                        <input type="checkbox" id="edit_add_doctor_reply" class="form-checkbox h-5 w-5 text-teal-600 btn_check" checked><span class="ml-2 text-gray-700">填寫醫師回饋單</span>
                    </label>
                </p>
                <p>
                    <label class="inline-flex items-center mt-1">
                        <input type="checkbox" id="edit_add_pharmacist_reply" class="form-checkbox h-5 w-5 text-teal-600 btn_check" checked><span class="ml-2 text-gray-700">填寫藥師回饋單</span>
                    </label>
                </p>
                <p>
                    <label class="inline-flex items-center mt-1">
                        <input type="checkbox" id="edit_close_main_task" class="form-checkbox h-5 w-5 text-teal-600 btn_check" checked><span class="ml-2 text-gray-700">任務結案</span>
                    </label>
                </p>
                <p>
                    <label class="inline-flex items-center mt-1">
                        <input type="checkbox" id="edit_add_diet_log" class="form-checkbox h-5 w-5 text-teal-600 btn_check" checked><span class="ml-2 text-gray-700">填寫飲食紀錄</span>
                    </label>
                </p>
                <p>
                    <label class="inline-flex items-center mt-1">
                        <input type="checkbox" id="edit_add_nutritionist" class="form-checkbox h-5 w-5 text-teal-600 btn_check" checked><span class="ml-2 text-gray-700">營養師評論</span>
                    </label>
                </p>
                <p>
                    <label class="inline-flex items-center mt-1">
                        <input type="checkbox" id="edit_manage_employee" class="form-checkbox h-5 w-5 text-teal-600 btn_check" checked><span class="ml-2 text-gray-700">員工資訊管理</span>
                    </label>
                </p>
                <p>
                    <label class="inline-flex items-center mt-1">
                        <input type="checkbox" id="edit_manage_patient" class="form-checkbox h-5 w-5 text-teal-600 btn_check" checked><span class="ml-2 text-gray-700">病患資訊管理</span>
                    </label>
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

                $('#edit_admin').prop('checked',res[0]['admin']);
                $('#edit_admin').val(res[0]['admin'])

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
                admin:$('#edit_admin').val(),
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
        if(this.value == 0){
            $('.btn_admin').prop('checked',false);
            $('.btn_admin').val(0);
        }
    })

    $('.btn_admin').change(function () {
        if(this.value == 1){
            $('.btn_check').prop('checked',true);
            $('.btn_check').val(1);
        }

    })
</script>
