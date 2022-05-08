<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="orderList" tabindex="-1" aria-labelledby="orderListLabel" aria-modal="true"
     role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-2xl font-bold leading-normal text-gray-800" id="orderListLabel">
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
                <div class="flex justify-center w-full mb-3">
                    <div class="flex-1">
                        <div class="rounded grid grid-cols-1 mb-4">
                            <div class="w-full md:w-fit px-3 mb-6 md:mb-0 mx-2">
                                <b class="mx-2 block uppercase tracking-wide text-gray-700 font-bold"
                                   for="order">
                                    餐序：
                                </b>

                                <select name="order" id="order" class=" block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500">
                                    <option>早餐</option>
                                    <option>午餐</option>
                                    <option>晚餐</option>
                                    <option>宵夜</option>
                                    <option>下午茶</option>
                                </select>
{{--                                <input--}}
{{--                                    class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500"--}}
{{--                                    id="meal_name" type="text" placeholder="請填入菜色名稱" autocomplete="off">--}}
                            </div>
{{--                            <div class="w-full md:w-fit px-3 mb-6 md:mb-0 mx-2">--}}
{{--                                <b class="mx-2 block uppercase tracking-wide text-gray-700 font-bold"--}}
{{--                                   for="quantity">--}}
{{--                                    餐點份量：--}}
{{--                                </b>--}}
{{--                                <input--}}
{{--                                    class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500"--}}
{{--                                    id="quantity" type="text" placeholder="請填入餐點份量">--}}
{{--                            </div>--}}
                            {{--                            <input class="hidden" id="task_id" name="task_id" value="{{$patient_data['task_id']}}">--}}
                            {{--                            <input name="patient_id" id="patient_id" type="text" class="border border-black hidden" value="{{$patient_data['patient_id']}}">--}}
                        </div>
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <b class="mx-2 block uppercase tracking-wide text-gray-700 font-bold">
                                新增餐點圖片(可複選)
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
                    </div>
                </div>
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button"
                        id="btn_insert"
                        class="inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-sm
                            leading-tight rounded shadow-md  hover:shadow-lg hover:bg-blue-700 focus:bg-blue-700 focus:shadow-lg
                            focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">
                    新增
                </button>
            </div>
        </div>
    </div>
</div>
<script>

    let image_index = 0;

    set_image_list(image_index);
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
    $("#btn_insert").click(function () {
        create_orderList_record();
    });

    function set_image_list(image_index) {
        $('#medeicationRecordImageList img').eq(image_index).siblings().hide();
        $('#medeicationRecordImageList img').eq(image_index).show();

        let image_length = $("#medeicationRecordImageList").children().length;
        $('#medicationRecordNum').text(`第 ${image_index + 1} 張，共 ${image_length} 張圖片`)
    }

    function create_orderList_record() {
        let url = "{{route('store_orderList')}}"; //route_url
        let csrf_token = "{{csrf_token()}}"; //csrf_token
        // let date_of_examination = $("#grid-date-of-examination").val();//就醫日期
        let meal_name = $("#order").val(); // 餐點名稱

        let connect_url = `
            ${url}?_token=${csrf_token}&meal_name=${meal_name}&patient_id={{$id}}
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
                    // console.log(res);
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
            });
        }
    }


</script>





{{--<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"--}}
{{--     id="orderList" tabindex="-1" aria-labelledby="orderListLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-lg relative w-auto pointer-events-none">--}}
{{--        <div--}}
{{--            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">--}}
{{--            <form action="{{route('store_orderList')}}" method="post" enctype="multipart/form-data">--}}
{{--                @csrf--}}
{{--                <div--}}
{{--                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">--}}
{{--                    <h5 class="text-2xl font-bold leading-normal text-gray-800" id="orderListLabel">--}}
{{--                        餐序紀錄--}}
{{--                    </h5>--}}
{{--                    <button type="button"--}}
{{--                            class="btn-close box-content   text-black border-none rounded-none opacity-50  focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"--}}
{{--                            data-bs-dismiss="modal" aria-label="Close">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body relative p-4">--}}
{{--                    <input class="hidden" name="patient_id" value="{{$id}}"/>--}}
{{--                    <div class="group-input flex py-5 text-xl">--}}
{{--                        <div class=" w-full flex">--}}
{{--                            <label for="order" class="h-2/8">餐序：</label>--}}
{{--                            <select name="order" id="select" class="border border-black h-2/8">--}}
{{--                                <option>早餐</option>--}}
{{--                                <option>午餐</option>--}}
{{--                                <option>晚餐</option>--}}
{{--                                <option>宵夜</option>--}}
{{--                                <option>下午茶</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div--}}
{{--                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">--}}
{{--                    <button type="submit"--}}
{{--                            id="btn_insert"--}}
{{--                            class="inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-sm--}}
{{--                            leading-tight rounded shadow-md  hover:shadow-lg hover:bg-blue-700 focus:bg-blue-700 focus:shadow-lg--}}
{{--                            focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out"--}}
{{--                    >--}}
{{--                        新增--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
