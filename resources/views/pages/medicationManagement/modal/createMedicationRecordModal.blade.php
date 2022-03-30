<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="createMedicationRecordModel" tabindex="-1" aria-labelledby="createMedicationRecordModelTitle" aria-modal="true"
     role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                    新增藥歷紀錄
                </h5>
                <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <div class="flex justify-center w-full mb-3">
                    <div class="flex-1">
                        <div class="rounded grid grid-cols-2 mb-4">
                            <div class="w-full md:w-fit px-3 mb-6 md:mb-0 mx-2">
                                <b class="mx-2 block uppercase tracking-wide text-gray-700 font-bold"
                                   for="grid-date-of-examination">
                                    就醫日期
                                </b>
                                <input
                                    class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500"
                                    id="grid-date-of-examination" type="text" placeholder="請填入就醫日期" autocomplete="off">
                            </div>
                            <div class="w-full md:w-fit px-3 mb-6 md:mb-0 mx-2">
                                <b class="mx-2 block uppercase tracking-wide text-gray-700 font-bold"
                                   for="grid-redate">
                                    開方日期
                                </b>
                                <input
                                    class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500"
                                    id="grid-redate" type="text" placeholder="請填入就醫日期">
                            </div>
                            <div class="w-full md:w-fit px-3 mb-6 md:mb-0 mx-2">
                                <b class="mx-2 block uppercase tracking-wide text-gray-700 font-bold"
                                   for="grid-pres-hosp">
                                    處方醫院
                                </b>
                                <input
                                    class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500"
                                    id="grid-pres-hosp" type="text" placeholder="請填入處方醫院" autocomplete="off">
                            </div>
                            <div class="w-full md:w-fit px-3 mb-6 md:mb-0 mx-2">
                                <b class="mx-2 block uppercase tracking-wide text-gray-700 font-bold"
                                   for="grid-disp-hosp">
                                    調劑醫院
                                </b>
                                <input
                                    class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500"
                                    id="grid-disp-hosp" type="text" placeholder="請填入調劑醫院" autocomplete="off">
                            </div>
                        </div>
                        <div class="w-full px-3 mb-6 md:mb-0">
                            {{--                            <div class="flex-grow border-t border-gray-400 m-2 w-full"></div>--}}
                            <b class="mx-2 block uppercase tracking-wide text-gray-700 font-bold">
                                新增藥歷圖片(可複選)
                            </b>
                            <input
                                class="mx-2 btn-pharmacist-feedback bg-transparent border text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded"
                                id="file_create_medication_detail_modal_img_upload"
                                type="file"
                                multiple autocomplete="off"
                            />
                        </div>
                    </div>

                    <div class="flex-1">
                        <div class="mb-2 text-right">
                            <a id="medicationRecordNum" class="mx-1 px-2"></a>
                            <a id="medicationRecordPrev"
                               class="mx-1 px-2 rounded border border-gray-400 hover:bg-gray-400 hover:text-white">
                                < </a>
                            <a id="medicationRecordNext"
                               class="mx-1 px-2 rounded border border-gray-400 hover:bg-gray-400 hover:text-white">
                                > </a>
                        </div>
                        <div id="medeicationRecordImageList">
                            <img class="object-fill w-fit rounded" src="{{asset('pills.jpg')}}">
                            <img class="object-fill w-fit rounded" src="{{asset('pills.jpg')}}">
                            <img class="object-fill w-fit rounded" src="{{asset('pills.jpg')}}">
                            <img class="object-fill w-fit rounded" src="{{asset('pills.jpg')}}">
                            <img class="object-fill w-fit rounded" src="{{asset('pills.jpg')}}">
                        </div>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                    {{--                        <div class="flex-1">--}}
                    {{--                            carousel here--}}
                    {{--                        </div>--}}
                    <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->


                    </div>
                </div>
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button"
                        class="btn-create-medication-record-modal-cancel mx-2 bg-transparent border border-red-700 text-red-700 hover:bg-red-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    不儲存並關閉
                </button>
                <button type="button"
                        class="btn-create-medication-record-modal-save mx-2 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 px-4 rounded"
                        data-bs-dismiss="modal">
                    儲存並關閉
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        let image_index = 0;

        set_image_list(image_index);

        //就醫日期
        $("#grid-date-of-examination").datepicker({
            dateFormat: "yy-mm-dd"
            , duration: "fast"
        });

        //開方日期
        $("#grid-redate").datepicker({
            dateFormat: "yy-mm-dd"
            , duration: "fast"
        });

        //換下一張圖片
        $('#medicationRecordNext').click(function () {
            let image_length = $("#medeicationRecordImageList").children().length;
            image_index = (image_index + 1) % image_length;
            set_image_list(image_index);
        });

        //換上一張圖片
        $('#medicationRecordPrev').click(function () {
            let image_length = $("#medeicationRecordImageList").children().length;
            image_index = (image_index - 1) % image_length;
            if (image_index + 1 <= 0) image_index += image_length;
            set_image_list(image_index);
        });

        //新增圖片時可以自動更新預覽圖片
        $('#file_create_medication_detail_modal_img_upload').on('change', function () {
            //先清乾淨
            let image_list = $("#medeicationRecordImageList");
            image_list.children().remove();

            //將上傳的照片寫入img_container
            $.each(this.files, function (index, file) {
                //取得單筆上傳檔案的url
                let object_url = URL.createObjectURL(file);

                image_list.append(`
                <img class="object-fill w-auto h-1/4 rounded" src="${object_url}">
            `);
            })

            image_index = 0;
            set_image_list(image_index)
        })

        //儲存按鈕
        $(".btn-create-medication-record-modal-save").click(function () {
            create_medication_management_medication_record();
        });


        function set_image_list(image_index) {
            $('#medeicationRecordImageList img').eq(image_index).siblings().hide();
            $('#medeicationRecordImageList img').eq(image_index).show();

            let image_length = $("#medeicationRecordImageList").children().length;
            $('#medicationRecordNum').text(`第 ${image_index + 1} 張，共 ${image_length} 張圖片`)
        }

        function create_medication_management_medication_record() {
            let url = "{{route('create_medication_management_medication_record')}}";//route_url
            let csrf_token = "{{csrf_token()}}";//csrf_token

            let date_of_examination = $("#grid-date-of-examination").val();//就醫日期
            let redate = $("#grid-redate").val();//開方日期
            let pred_hosp = $("#grid-pres-hosp").val();//處方醫院
            let disp_hosp = $("#grid-disp-hosp").val();//調劑醫院

            let connect_url = `
            ${url}?_token=${csrf_token}&date_of_examination=${date_of_examination}&redate=${redate}&pred_hosp=${pred_hosp}&disp_hosp=${disp_hosp}
        `;

            //圖片input
            let upload_file = $('#file_create_medication_detail_modal_img_upload')[0].files;

            if (upload_file.length > 0) {
                //先建立formData
                let form_data = new FormData()

                //將上傳的圖片塞入formData
                $.each(upload_file, function (index, value) {
                    form_data.append(index, value)
                });

                //建立連線
                $.ajax({
                    url: connect_url,
                    method: 'post',
                    data: form_data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (res) {
                        // console.log('upload success');
                        console.log(res);
                    },
                    error: function (res) {
                        console.log(res);
                    }
                });
            }
        }
    });


</script>
