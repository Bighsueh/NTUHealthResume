
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto "
     id="settingPatientModal" tabindex="-1" aria-labelledby="settingPatientModal" aria-hidden="true">
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
                            <div class="flex">
                                <div class="flex-1 flex justify-between">
                                    <div>
                                        <label class="mx-6">#</label>
                                    </div>
                                    <div>
                                        <input value="" class="border-teal-700 border-b py-1 px-20" id="edit_patient_id">
                                    </div>
                                </div>
                                <div class="flex-1 flex justify-between">
                                    <div>
                                        <label class="mx-6">病患編號</label>
                                    </div>
                                    <div>
                                        <input  class="border-teal-700 border-b py-1 px-20" id="edit_patient_no">
                                    </div>
                                </div>
                            </div>
                            <div class="flex ">
                                <div class="flex-1 flex justify-between">
                                    <div>
                                        <label class="mx-6">結案日期</label>
                                    </div>
                                    <div>
                                        <input  class="border-teal-700 border-b py-1 px-20" id="edit_close_date">
                                    </div>
                                </div>
                                <div class="flex-1 flex justify-between">
                                    <div>
                                        <label class="mx-6">所述據點</label>
                                    </div>
                                    <div>
                                        <input  class=" border-teal-700 border-b py-1 px-20" id="edit_place">
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-1 flex justify-between">
                                    <div>
                                        <label class="mx-6">身分證字號</label>
                                    </div>
                                    <div>
                                        <input  class="border-teal-700 border-b py-1 px-20" id="edit_id_number">
                                    </div>
                                </div>
                                <div class="flex-1 flex justify-between">
                                    <div>
                                        <label class="mx-6">姓名</label>
                                    </div>
                                    <div>
                                        <input  class=" border-teal-700 border-b py-1 px-20" id="edit_patient_name">
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-1 flex justify-between">
                                    <div>
                                        <label class="mx-6">生日</label>
                                    </div>
                                    <div>
                                        <input  class="border-teal-700 border-b py-1 px-20" id="edit_patient_bd">
                                    </div>
                                </div>
                                <div class="flex-1 flex justify-between">
                                    <div>
                                        <label class="mx-6">年齡</label>
                                    </div>
                                    <div>
                                        <input  class=" border-teal-700 border-b py-1 px-20"  id="edit_age">
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-1 flex justify-between">
                                    <div>
                                        <label class="mx-6">體重</label>
                                    </div>
                                    <div>
                                        <input  class="border-teal-700 border-b py-1 px-20" id="edit_weight">
                                    </div>
                                </div>
                                <div class="flex-1 flex justify-between">
                                    <div>
                                        <label class="mx-6">身高</label>
                                    </div>
                                    <div>
                                        <input  class=" border-teal-700 border-b py-1 px-20" id="edit_height">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="flex px-1 py-1">
                            <p class="mx-4 my-2 justify-self-start font-bold text-xl">社篩資訊</p>
                            <table class="">
                                <tr>
                                    <td>
                                        <lable class="mx-2">
                                            社篩診斷
                                        </lable>
                                    </td>
                                    <td>
                                        <input value="" class="border-teal-700 border-b py-1 px-20">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <lable class="mx-2">
                                            手術史
                                        </lable>
                                    </td>
                                    <td>
                                        <input value="" class="border-teal-700 border-b py-1 px-20">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <lable class="mx-2">
                                            血紅素
                                        </lable>
                                    </td>
                                    <td>
                                        <input value="" class="border-teal-700 border-b py-1 px-20">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <lable class="mx-2">
                                            白蛋白
                                        </lable>
                                    </td>
                                    <td>
                                        <input value="" class="border-teal-700 border-b py-1 px-20">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <lable class="mx-2">
                                            肝功能指數
                                        </lable>
                                    </td>
                                    <td>
                                        <input value="" class="border-teal-700 border-b py-1 px-20">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <lable class="mx-2">
                                            腎功能指數
                                        </lable>
                                    </td>
                                    <td>
                                        <input value="" class="border-teal-700 border-b py-1 px-20">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <lable class="mx-2">
                                            血糖
                                        </lable>
                                    </td>
                                    <td>
                                        <input value="" class="border-teal-700 border-b py-1 px-20">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <lable class="mx-2">
                                            總膽固醇
                                        </lable>
                                    </td>
                                    <td>
                                        <input value="" class="border-teal-700 border-b py-1 px-20">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <lable class="mx-2">
                                            低密度膽固醇
                                        </lable>
                                    </td>
                                    <td>
                                        <input value="" class="border-teal-700 border-b py-1 px-20">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <lable class="mx-2">
                                            尿酸
                                        </lable>
                                    </td>
                                    <td>
                                        <input value="" class="border-teal-700 border-b py-1 px-20">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <lable class="mx-2">
                                            跌倒史
                                        </lable>
                                    </td>
                                    <td>
                                        <input value="" class="border-teal-700 border-b py-1 px-20">
                                    </td>
                                </tr>
                            </table>
                    </div>

                </div>

            </div>

            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-gray-200 rounded-b-md">
                <button class="mx-4 flex-shrink-0 bg-teal-700
                hover:bg-blue-500 border-teal-700
                hover:border-blue-500 text-sm border-4 text-white py-1 px-10 rounded " id="btn_store_edit_patient">修改</button>

                <button class="mx-4 flex-shrink-0 bg-teal-700
                hover:bg-red-500 border-teal-700
                hover:border-red-500 text-sm border-4 text-white py-1 px-10 rounded btn_delete_patient" id="btn_delete_patient" >刪除</button>


            </div>
        </div>
    </div>
</div>

<script>
    let patient_id;
    function open_settingPatientModal(id){
        patient_id = id;
        // window.alert(id);
        $.ajax({
            url:"{{route('get_edit_patient')}}",
            method:'get',
            data:{
                patient_id:patient_id,
            },
            success:function (res) {
                // window.alert(res[0]['patient_id']);
                $('#edit_patient_id').val(res[0]['patient_id']);
                $('#edit_patient_no').val(res[0]['patient_no']);
                $('#edit_close_date').val(res[0]['close_date']);
                $('#edit_place').val(res[0]['place']);
                $('#edit_id_number').val(res[0]['id_number']);
                $('#edit_patient_name').val(res[0]['patient_name']);
                $('#edit_patient_bd').val(res[0]['patient_bd']);
                $('#edit_age').val(res[0]['age']);
                $('#edit_weight').val(res[0]['weight']);
                $('#edit_height').val(res[0]['height']);

            }
        });
        $('#settingPatientModal').modal('show');
    }

    $('#btn_store_edit_patient').click(function () {
        store_edit_patient();
    })
    function store_edit_patient() {
       $.ajax({
           url:"{{route('store_edit_patient')}}",
           mothed:'get',
           data:{
               patient_id:patient_id,
               patient_no:$('#edit_patient_no').val(),
               close_date:$('#edit_close_date').val(),
               place:$('#edit_place').val(),
               id_number:$('#edit_id_number').val(),
               patient_name:$('#edit_patient_name').val(),
               patient_bd:$('#edit_patient_bd').val(),
               age:$('#edit_age').val(),
               weight:$('#edit_weight').val(),
               height:$('#edit_height').val()
           },
           success:function (res) {
               window.alert(res);
               update_patient_data();
           }
       });
       $('#settingPatientModal').modal('hide');
    }
    $('#btn_delete_patient').click(function () {
        if(window.confirm('確定要刪除')){
            delete_patient();
        }
    })
    function delete_patient(){
        $.ajax({
            url:"{{route('delete_patient')}}",
            method:'get',
            data:{
                patient_id:patient_id
            },
            success:function (res) {
                window.alert(res);
                update_patient_data();
            }
        });
        $('#settingPatientModal').modal('hide');
    }

</script>
