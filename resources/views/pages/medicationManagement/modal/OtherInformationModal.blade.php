<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="OtherInformationModal" tabindex="-1" aria-labelledby="OtherInformationModalTitle" aria-modal="true"
     role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                    其他資訊
                </h5>
                <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <form id="form_other_information">
                    <!--檢測數值-->
                    <div class="flex justify-center">
                        <div class="mb-3 w-full">
                            <b class="mx-2">檢測數值</b>
                            <div class="grid grid-cols-3 mb-2">
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">體重：</a>
                                    <input class="border boder-gray-300 mx-1 text-left bmi-cal"
                                           id="Weight" name="Weight" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">身高：</a>
                                    <input class="border boder-gray-300 mx-1 text-left bmi-cal"
                                           id="Height" name="Height" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">BMI：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="bmi" />
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">過往病史：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="Diagnosis" name="Diagnosis" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">手術史：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="Surgery" name="Surgery" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">血紅素：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="Hb" name="Hb" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">白蛋白：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="Alb" name="Alb" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">肝功能指數：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="AST" name="AST" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">肌酐酸：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="Cre" name="Cre" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">腎功能指數：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="CCr" name="CCr" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">血糖：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="Suger" name="Suger" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">糖化血色素：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="HbA1C" name="HbA1C" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">總膽固醇：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="TCHO" name="TCHO" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">三酸甘油脂：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="TG" name="TG" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">低密度膽固醇：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="LDL" name="LDL" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">尿酸：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="UA" name="UA" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">高密度脂蛋白：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="HDL" name="HDL" value=""/>
                                </div>
                                <div class="mx-2 mb-1">
                                    <a class="mx-1">跌倒史：</a>
                                    <input class="border boder-gray-300 mx-1 text-left"
                                           id="Fall" name="Fall" value=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--服藥認知與依從性-->
                    <div class="flex justify-center">
                        <div class="mb-3 w-full">
                            <div class="mb-2">
                                <b class="mx-2">服藥認知與依從性</b>
                                <div class="grid grid-cols-3 mb-1">
                                    <!--知道目前吃幾個藥-->
                                    <div class="mx-2 mb-1">
                                        <a class="mx-1">1. 知道目前吃幾個藥：</a>
                                        <div class="form-check form-check-inline mb-2">
                                            <input
                                                class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                type="radio" name="medication_adherence_1[]"
                                                id="medication_adherence_1_yes"
                                                value="1">
                                            <label class="form-check-label inline-block text-gray-800"
                                                   for="medication_adherence_1_yes">是</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-2">
                                            <input
                                                class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                type="radio" name="medication_adherence_1[]"
                                                id="medication_adherence_1_no"
                                                value="0">
                                            <label class="form-check-label inline-block text-gray-800"
                                                   for="medication_adherence_1_no">否</label>
                                        </div>
                                    </div>
                                    <!--知道藥物作用-->
                                    <div class="mx-2 mb-1">
                                        <a class="mx-1">2. 知道藥物作用：</a>
                                        <div class="form-check form-check-inline mb-2">
                                            <input
                                                class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                type="radio" name="medication_adherence_2[]"
                                                id="medication_adherence_2_yes"
                                                value="1">
                                            <label class="form-check-label inline-block text-gray-800"
                                                   for="medication_adherence_2_yes">是</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-2">
                                            <input
                                                class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                type="radio" name="medication_adherence_2[]"
                                                id="medication_adherence_2_no"
                                                value="0">
                                            <label class="form-check-label inline-block text-gray-800"
                                                   for="medication_adherence_2_no">否</label>
                                        </div>
                                    </div>

                                    <!--知道藥物用法-->
                                    <div class="mx-2 mb-1">
                                        <a class="mx-1">3. 知道藥物用法：</a>
                                        <div class="form-check form-check-inline mb-2">
                                            <input
                                                class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                type="radio" name="medication_adherence_3[]"
                                                id="medication_adherence_3_yes"
                                                value="1">
                                            <label class="form-check-label inline-block text-gray-800"
                                                   for="medication_adherence_3_yes">是</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-2">
                                            <input
                                                class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                type="radio" name="medication_adherence_3[]"
                                                id="medication_adherence_3_no"
                                                value="0">
                                            <label class="form-check-label inline-block text-gray-800"
                                                   for="medication_adherence_3_no">否</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="mx-2 mb-1">
                                        <a class="mx-1">5. 誰幫忙處理服藥問題：</a>
                                        <div class="flex justify-start mx-8 grid grid-cols-3">
                                            <div class="form-check form-check-inline mb-2">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="drug_side_effect[]" id="drug_side_effect_1"
                                                    value="自己">
                                                <label class="form-check-label inline-block text-gray-800"
                                                       for="drug_side_effect_1">
                                                    自己
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline mb-2">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="drug_side_effect[]" id="drug_side_effect_2"
                                                    value="老伴">
                                                <label class="form-check-label inline-block text-gray-800"
                                                       for="drug_side_effect_2">
                                                    老伴
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline mb-2">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="drug_side_effect[]" id="drug_side_effect_3"
                                                    value="兒孫女">
                                                <label class="form-check-label inline-block text-gray-800"
                                                       for="drug_side_effect_3">
                                                    兒孫女
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline mb-2">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="drug_side_effect[]" id="drug_side_effect_4"
                                                    value="親戚">
                                                <label class="form-check-label inline-block text-gray-800"
                                                       for="drug_side_effect_4">
                                                    親戚
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline mb-2">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="drug_side_effect[]" id="drug_side_effect_5"
                                                    value="鄰居">
                                                <label class="form-check-label inline-block text-gray-800"
                                                       for="drug_side_effect_5">
                                                    鄰居
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline mb-2">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="drug_side_effect[]" id="drug_side_effect_6"
                                                    value="醫護人員">
                                                <label class="form-check-label inline-block text-gray-800"
                                                       for="drug_side_effect_6">
                                                    醫護人員
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline col-span-3">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="drug_side_effect[]" id="drug_side_effect_7"
                                                    value="其他">
                                                <label class="form-check-label inline-block text-gray-800"
                                                       for="drug_side_effect_7">
                                                    其他(請註明)
                                                </label>
                                                <input
                                                    class="form-check-label inline-block text-gray-800 rounded border border-gray-300"
                                                    name="drug_side_effect_text" type="text" value=""/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mx-2 mb-1">
                                        <a class="mx-1">4. 主述藥物相關副作用：</a>
                                        <textarea
                                            class="
                                        otehr-info-modal-textarea
                                        form-control
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            id="other_information_modal_textarea"
                                            name="other_information_modal_textarea"
                                            rows="5"
                                            placeholder="請在此處填寫內容...  (Shift + Enter可以換行)"
                                        ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button"
                        id="btn-other-info-cancel"
                        class="mx-2 bg-transparent border border-red-700 text-red-700 hover:bg-red-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    不儲存並關閉
                </button>
                <button type="button"
                        id="btn-other-info-save"
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
        //儲存醫師回覆的內容
        $('#btn-other-info-save').click(function () {
            store_other_information_data();
        })

        //開啟Modal
        $("#btn_other_information").click(function () {
            get_other_information_data()

        })

        $(".bmi-cal").on('keyup', function () {
            cal_bmi();
        })
    })

    //bmi計算功能
    function cal_bmi() {
        let bmi;
        let height = $("#Height").val();
        let weight = $("#Weight").val();

        //檢查身高單位(>100判定為公分)
        if (height > 100) {
            height = height / 100
        }

        //計算bmi
        bmi = Math.round(weight / (height * height) * 100) / 100;
        $('#bmi').val(bmi);
    }

    //取得其他資訊欄位
    function get_other_information_data() {
        let task_id = $("#task_id").text().trim();
        let url = "{{route('get_medicatoin_other_info_data')}}";
        let token = "{{csrf_token()}}";

        $.ajax({
            url: url,
            method: 'post',
            data: {
                '_token': token,
                'task_id': task_id,
            },
            success: function (res) {
                set_other_information_data(res);
            },
            error: function (res) {
                console.log(res);
            }
        })
    }

    //將取得的欄位資訊填入modal
    function set_other_information_data(data) {
        //檢測數值
        $("#Weight").val(data['Weight']);
        $("#Height").val(data['Height']);
        $("#Diagnosis").val(data['Diagnosis']);
        $("#Surgery").val(data['Surgery']);
        $("#Hb").val(data['Hb']);
        $("#Alb").val(data['Alb']);
        $("#AST").val(data['AST']);
        $("#Cre").val(data['Cre']);
        $("#CCr").val(data['CCr']);
        $("#Suger").val(data['Suger']);
        $("#HbA1C").val(data['HbA1C']);
        $("#TCHO").val(data['TCHO']);
        $("#TG").val(data['TG']);
        $("#LDL").val(data['LDL']);
        $("#UA").val(data['UA']);
        $("#HDL").val(data['HDL']);
        $("#Fall").val(data['Fall']);

        //服藥認知與依從性
        //Question 1
        $(`input[name='medication_adherence_1[]'][value='${data["medication_adherence_1"]}']`).attr("checked", true)
        //Question 2
        $(`input[name='medication_adherence_2[]'][value='${data["medication_adherence_2"]}']`).attr("checked", true)
        //Question 3
        $(`input[name='medication_adherence_3[]'][value='${data["medication_adherence_3"]}']`).attr("checked", true)
        //Question 4
        $(`input[name='drug_side_effect[]'][value='${data["drug_side_effect"]}']`).attr("checked", true)
        $('#drug_side_effect_text').val(data['drug_side_effect_text']);
        //Questoin 5
        $('#other_information_modal_textarea').val(data['other_information_modal_textarea']);

        //計算bmi
        cal_bmi()
    }

    //儲存其他資訊欄位
    function store_other_information_data() {
        let url = "{{route('store_medicatoin_other_info_data')}}";
        let token = "{{csrf_token()}}";
        let task_id = $("#task_id").text().trim();

        form_data = $("#form_other_information").serializeArray();

        $.ajax({
            url: url,
            method: 'post',
            data: {
                '_token': token,
                'task_id': task_id,
                'form_data': form_data,
            },
            success: function (res) {
                if (res === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: '儲存成功',
                        text: '點擊刷新頁面',
                        confirmButtonColor: '#8CD4F5'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            //刷新頁面
                            location.reload();
                        }
                    })
                }
            },
            error: function (res) {
                console.log(res);
            }
        })
    }

    //設定醫師意見欄位資訊
    function set_doctor_comment_data() {
        let url = "{{route('get_medication_management_doctor_comment_data')}}";
        let token = "{{csrf_token()}}";
        let task_id = $("#task_id").text().trim();

        $.ajax({
            url: url,
            method: 'post',
            data: {
                '_token': token,
                'task_id': task_id,
            },
            success: function (res = null) {
                //醫師意見欄位
                let doctor_comment = $("#other_information_modal_doctor_comment");
                doctor_comment.val(res['doctor_comment']);
            },
            error: function (res) {
                console.log(res);
            }
        })
    }

    //儲存醫師意見欄位
    function store_doctor_comment(doctor_comment, task_id) {
        let url = "{{route('store_medication_management_doctor_comment_data')}}";
        let token = "{{csrf_token()}}";

        $.ajax({
            url: url,
            method: 'post',
            data: {
                '_token': token,
                'task_id': task_id,
                'doctor_comment': doctor_comment,
            },
            success: function (res) {
                console.log(res);
            },
            error: function (res) {
                console.log(res);
            }
        })
    }


</script>
