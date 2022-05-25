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
            <div class="px-12 py-3">
                        <div class="relative z-0 mb-4 w-full group">
                            <input id="create_employee_no"
                                   type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                            <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">員工編號</label>
                        </div>
                        <div class="relative z-0 mb-4 w-full group">
                            <input id="create_employee_name"
                                   type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                            <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">姓名</label>
                        </div>
                        <div class="relative z-0 mb-4 w-full group">
                            <input id="create_employee_account"
                                   type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                            <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">帳號</label>
                        </div>
                        <div class="relative z-0 mb-4 w-full group">
                            <input id="create_employee_password"
                                   type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                            <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">密碼</label>
                        </div>
                        <div class="relative z-0 mb-4 w-full group">
                            <input id="create_job_title"
                                   type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                            <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">職位</label>
                        </div>
                        <div class="relative z-0 mb-4 w-full group">
                            <input id="create_department"
                                   type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                            <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">部門</label>
                        </div>

                <p>
                    <label class="inline-flex items-center mt-1">
                        <input value="0" type="checkbox" id="create_admin" class="form-checkbox h-5 w-5 text-teal-600 btn_check btn_admin" ><span class="ml-2 text-gray-700">管理員權限</span>
                    </label>
                </p>
                <p>
                    <label class="inline-flex items-center mt-1">
                        <input value="0" type="checkbox" id="create_open_main_task" class="form-checkbox h-5 w-5 text-teal-600 btn_check" ><span class="ml-2 text-gray-700">新增任務</span>
                    </label>
                </p>
                <p>
                    <label class="inline-flex items-center mt-1">
                        <input value="0" type="checkbox" id="create_add_doctor_reply" class="form-checkbox h-5 w-5 text-teal-600 btn_check" ><span class="ml-2 text-gray-700">填寫醫師回饋單</span>
                    </label>
                </p>
                <p>
                    <label class="inline-flex items-center mt-1">
                        <input value="0" type="checkbox" id="create_add_pharmacist_reply" class="form-checkbox h-5 w-5 text-teal-600 btn_check" ><span class="ml-2 text-gray-700">填寫藥師回饋單</span>
                    </label>
                </p>
                <p>
                    <label class="inline-flex items-center mt-1">
                        <input value="0" type="checkbox" id="create_close_main_task" class="form-checkbox h-5 w-5 text-teal-600 btn_check" ><span class="ml-2 text-gray-700">任務結案</span>
                    </label>
                </p>

                <p>
                    <label class="inline-flex items-center mt-1">
                        <input value="0" type="checkbox" id="create_add_diet_log" class="form-checkbox h-5 w-5 text-teal-600 btn_check" ><span class="ml-2 text-gray-700">填寫飲食紀錄</span>
                    </label>
                </p>
                <p>
                    <label class="inline-flex items-center mt-1">
                        <input value="0" type="checkbox" id="create_add_nutritionist" class="form-checkbox h-5 w-5 text-teal-600 btn_check" ><span class="ml-2 text-gray-700">營養師評論</span>
                    </label>
                </p>
                <p>
                    <label class="inline-flex items-center mt-1">
                        <input value="0" type="checkbox" id="create_manage_employee" class="form-checkbox h-5 w-5 text-teal-600 btn_check" ><span class="ml-2 text-gray-700">員工資訊管理</span>
                    </label>
                </p>
                <p>
                    <label class="inline-flex items-center mt-1">
                        <input value="0" type="checkbox" id="create_manage_patient" class="form-checkbox h-5 w-5 text-teal-600 btn_check" ><span class="ml-2 text-gray-700">病患資訊管理</span>
                    </label>
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
    //打開新增Modal
    function open_createEmployeeModal(){
        $('.btn_check').prop('checked',false);
        $('.btn_check').val(0);
        $('#createEmployeeModal').modal('show');
    }

    //新增按鈕click
    $('#btn_store_create').click(function () {
        store_create_employee();
    })



    //新增功能
    function store_create_employee(){

        $.ajax({
            url:'{{route('store_create_employee')}}',
            method:'get',
            data:{
                employee_no:$('#create_employee_no').val(),
                employee_name:$('#create_employee_name').val(),
                employee_account:$('#create_employee_account').val(),
                employee_password:$('#create_employee_password').val(),
                job_title:$('#create_job_title').val(),
                department:$('#create_department').val(),
                admin:$('#create_admin').val(),
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
                // window.alert(res)
                Swal.fire('新增成功', '', 'success');
                window.location.reload();
            },error:function (res){
                Swal.fire({
                    icon:'error',
                    title:'新增失敗',
                    confirmButton:'#8CD4F5'
                });
            }
        })
    }
    //權限checkbox
    $('.btn_check').change(function () {
        this.value = (Number(this.checked));
        if(this.value == 0){
            $('.btn_admin').prop('checked',false);
            $('.btn_admin').val(0);
        }
    })
    //管理員權限checkbox
    $('.btn_admin').change(function () {
        if(this.value == 1){
            $('.btn_check').prop('checked',true);
            $('.btn_check').val(1);
        }

    })


</script>
