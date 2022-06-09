<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto "
     id="createPatientModal" tabindex="-1" aria-labelledby="createPatientModal" aria-hidden="true">
    <div class="modal-dialog relative w-full pointer-events-none max-w-6xl">
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
                <div class="modal-body relative m-3 w-full ">

                    <div class="flex px-1 py-1">
                        <p class="mx-4 my-2 justify-self-start font-bold text-xl">基本資訊</p>
                        <div class="flex-1">
                            <div class="grid xl:grid-cols-2 xl:gap-6">
{{--                                <div class="relative z-0 mb-4 w-full group">--}}
{{--                                    <input id="create_patient_id"--}}
{{--                                           type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />--}}
{{--                                    <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">ID</label>--}}
{{--                                </div>--}}
                                <div class="relative z-0 mb-4 w-full group">
                                    <input id="create_patient_no"
                                           type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                                    <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">病患編號</label>
                                </div>
                            </div>
                            <div class="grid xl:grid-cols-2 xl:gap-6">
                                <div class="relative z-0 mb-4 w-full group">
                                    <input id="create_close_date"
                                           type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                                    <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">收案日期</label>
                                </div>
                                <div class="relative z-0 mb-4 w-full group">
                                    <input id="create_place"
                                           type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                                    <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">所述據點</label>
                                </div>
                            </div>
                            <div class="grid xl:grid-cols-2 xl:gap-6">
                                <div class="relative z-0 mb-4 w-full group">
                                    <input id="create_id_number"
                                           type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                                    <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">身分證字號</label>
                                </div>
                                <div class="relative z-0 mb-4 w-full group">
                                    <input id="create_patient_name"
                                           type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                                    <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">姓名</label>
                                </div>
                            </div>
                            <div class="grid xl:grid-cols-2 xl:gap-6">
                                <div class="relative z-0 mb-4 w-full group">
                                    <input id="create_patient_bd"
                                           type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                                    <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">生日</label>
                                </div>
                                <div class="relative z-0 mb-4 w-full group">
                                    <input id="create_age"
                                           type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                                    <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">年齡</label>
                                </div>
                            </div>
                            <div class="grid xl:grid-cols-2 xl:gap-6">
                                <div class="relative z-0 mb-4 w-full group">
                                    <input id="create_weight"
                                           type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                                    <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">體重</label>
                                </div>
                                <div class="relative z-0 mb-4 w-full group">
                                    <input id="create_height"
                                           type="email" name="floating_email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                                    <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">身高</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-gray-200 rounded-b-md">
                <button class="mx-4 flex-shrink-0 bg-teal-700
                hover:bg-blue-500 border-teal-700 hover:border-blue-500
                text-sm border-4 text-white py-1 px-10 rounded"
                id="btn_store_create_patient"
                >新增</button>
                {{--                <button class="mx-4 flex-shrink-0 bg-teal-700 hover:bg-red-500 border-teal-700 hover:border-red-500 text-sm border-4 text-white py-1 px-6 rounded " data-bs-dismiss="modal">關閉</button>--}}

            </div>
        </div>
    </div>
</div>
<script>

    $('#create_close_date').datepicker({
        dateFormat: "yy-mm-dd"
        , duration: "fast"
    });
    $('#create_patient_bd').datepicker({
        dateFormat: "yy-mm-dd"
        , duration: "fast"
    });

    //新增按鈕click
    $('#btn_store_create_patient').click(function () {
        store_create_patient();

    })

    //新增功能
    function open_createPatientModal() {
        $('#createPatientModal').modal('show');
    }
    function store_create_patient(){
        if($('#create_patient_no').val()==''){
            Swal.fire({
                icon:'error',
                title:'病患編號不能為空',
                confirmButton:'#8CD4F5'
            });
            return;
        }
        $.ajax({
            url:'{{route('store_create_patient')}}',
            method:'get',
            data:{
                patient_id:$('#create_patient_id').val(),
                patient_no:$('#create_patient_no').val(),
                close_date:$('#create_close_date').val(),
                place:$('#create_place').val(),
                id_number:$('#create_id_number').val(),
                patient_name:$('#create_patient_name').val(),
                patient_bd:$('#create_patient_bd').val(),
                age:$('#create_age').val(),
                weight:$('#create_weight').val(),
                height:$('#create_height').val()
            },
            success:function (res) {
                Swal.fire(res, '', 'success');
                update_patient_data();
            },error:function (res){
                Swal.fire({
                    icon:'error',
                    title:'新增失敗',
                    confirmButton:'#8CD4F5'
                });
            }

        });
        $('#createPatientModal').modal('hide');
        $('#create_patient_id').val('')
        $('#create_patient_no').val('')
        $('#create_close_date').val('')
        $('#create_place').val('')
        $('#create_id_number').val('')
        $('#create_patient_name').val('')
        $('#create_patient_bd').val('')
        $('#create_age').val('')
        $('#create_weight').val('')
        $('#create_height').val('')
    }





</script>
