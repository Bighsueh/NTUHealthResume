<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="medicationRecordsModal" tabindex="-1" aria-labelledby="medicationRecordsModal" aria-hidden="true">
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
                <div

                    {{--                                    data-bs-toggle="modal" data-bs-target="#"--}}
                    onclick="location.href='{{route('export_medication_records_excel')}}';"
                    class="mx-1  bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 rounded btn-medication-record-excel">
                    匯出 Excel
                </div>
                <div class="mx-1  py-2 "></div>
                <div
                    id="btn_import_excel"
                    {{--                                    data-bs-toggle="modal" data-bs-target="#"--}}
                    class="mx-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 rounded btn-medication-record-excel">
                    匯入 Excel
                </div>
{{--                <input type="file" class="hidden"--}}
{{--                       onchange="import_medicationRecordsExcel()"--}}
{{--                       id="import_file" name="import_file"  accept=".xlsx">--}}
                <input type="file" class="hidden" onchange="import_medicationRecordsExcel()" id="medication_upload_file" name="medication_upload_file"  accept=".xlsx">

                <div class="mx-1  py-2 "></div>
                <div
                    id="btn_open_previewExcelModal"
                    class="mx-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 rounded btn-medication-record-excel">
                    test previewExcelModal
                </div>

            </div>



            </div>
        </div>
    </div>
</div>

<script>
    function open_medicationRecordsExcelModal() {
        $('#medicationRecordsModal').modal('show');
    }

    $('#btn_import_excel').click(function (){
        $('#medication_upload_file').click();
    })

    function import_medicationRecordsExcel() {
        let upload_file = $('#medication_upload_file')[0].files;
        let url = "{{route('import_medication_records_excel')}}";
        let csrf_token = "{{csrf_token()}}";
        let form_data = new FormData()
        console.log(upload_file[0]);
        form_data.append('upload_file', upload_file[0])
        console.log(form_data);
        $.ajax({
            url: url + "?_token=" + csrf_token,
            method: 'post',
            data: form_data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (res) {
                if (res === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'excel上傳成功',
                        confirmButtonColor: '#8CD4F5'
                    })
                    window.location.reload();
                }
            },
            error: function (res) {
                Swal.fire({
                    icon: 'error',
                    title: '儲存失敗',
                    text: res['statusText'],
                    confirmButtonColor: '#8CD4F5'
                })
            }
        })
        $('#medication_upload_file').val("");
    }


    $('#btn_open_previewExcelModal').click(function () {
        open_previewExcelModal();
    })
</script>
