
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto "
     id="previewExcelModal" tabindex="-1" aria-labelledby="previewExcelModal" aria-hidden="true">
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

                    <table class="divide-y divide-gray-200 min-w-full">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-2 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                -
                            </th>
                            <th scope="col"
                                class="px-2 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                +
                            </th>
                            <th scope="col"
                                class="px-3 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                ????????????
                            </th>
                            <th scope="col"
                                class="px-3 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                ??????
                            </th>
                            <th scope="col"
                                class="px-3 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                ATC3??????
                            </th>
                            <th scope="col"
                                class="px-3 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                ????????????
                            </th>
                            <th scope="col"
                                class="px-3 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                ????????????
                            </th>
                            <th scope="col"
                                class="px-3 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                ??????
                            </th>
                            <th scope="col"
                                class="px-3 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                ??????
                            </th>
                            <th scope="col"
                                class="px-3 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                ????????????
                            </th>
                            <th scope="col"
                                class="px-3 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                -
                            </th>
                            <th scope="col"
                                class="px-3 py-1 text-left font-medium text-gray-500 text-nowrap whitespace-nowrap tracking-wider">
                                ??????
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200" id="tbody">
{{--                        <a hidden>{{$thread = 0}}</a>--}}
{{--                        @foreach($task_list as $row)--}}
                            <tr>
                                <td class="px-2 py-4 whitespace-nowrap">
                                    X
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    1
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    2
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    3
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    4
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    5
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    6
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    7
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    8
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    9
                                </td>


                            </tr>
{{--                        @endforeach--}}
                        </tbody>
                    </table>


                </div>

            </div>

            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-gray-200 rounded-b-md">
                <button class="mx-4 flex-shrink-0 bg-teal-700
                hover:bg-blue-500 border-teal-700
                hover:border-blue-500 text-sm border-4 text-white py-1 px-10 rounded " id="btn_store_import">??????</button>

{{--                <button class="mx-4 flex-shrink-0 bg-teal-700--}}
{{--                hover:bg-red-500 border-teal-700--}}
{{--                hover:border-red-500 text-sm border-4 text-white py-1 px-10 rounded btn_delete_patient" id="btn_delete_patient" >??????</button>--}}


            </div>
        </div>
    </div>
</div>

<script>
    let data;
    //??????Modal ?????????
    function open_previewExcelModal(res) {
        data = res;
        $('#tbody tr').remove();
        let count = 1;
        if(data.length > 0){
            data =  set_String(data)
            console.log(data)
            data.forEach(function (row) {
                    $('#tbody').append(`
                    <tr class="tr_row">
                        <td>
                            <button class="bg-red-400  px-2 my-1 text-white text-left rounded block btn_delete_row" >-</button>
                        </td>
                        <td>
                            <button class="bg-blue-400  px-2 my-1 text-white text-left rounded block btn_creat_row" >+</button>
                        </td>
                        <td>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${row[0]}"/>
                        </td>
                        <td>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${row[1]}"/>
                        </td>
                        <td>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${row[2]}"/>
                        </td>
                        <td>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${row[3]}"/>
                        </td>
                        <td>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${row[4]}"/>
                        </td>
                        <td>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${row[5]}"/>
                        </td>
                        <td>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${row[6]}"/>
                        </td>
                        <td>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${row[7]}"/>
                        </td>
                        <td>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${row[8]}"/>
                        </td>
                        <td>
                            <input class="bg-gray-100 my-1 text-left rounded block" value="${row[9]}"/>
                        </td>
                    </tr>
                `);
            })
        }

        $('#previewExcelModal').modal('show');

        set_listener();

    }
    //excel ?????????????????????
    function set_String(ary_str)
    {
        let new_ary_str = [];
        let count = 3;
        // ?????????ary
        for (let i = 0; i < ary_str.length / 3 ; i ++) {
            let row = []
            // ?????????ary?????????
            for (let j = 0; j < 12; j++) {

                var s = "";
                // ?????????????????????
                for (let z = count - 3; z < count; z++) {
                    // ????????????
                    if (ary_str[z][j] != null) {
                        s+=ary_str[z][j]+"\n"
                    }
                }
                // ???\n
                s = s.substring(0, s.length - 1);
                // ????????????ary?????????
                row.push(s);
            }
            new_ary_str.push(row)
            count += 3;
        }
        console.log(new_ary_str)
        return new_ary_str
    }
    function set_listener() {
        let btn_delete_row = $('.btn_delete_row');
        let btn_creat_row = $('.btn_creat_row');

        btn_delete_row.off('click');
        btn_creat_row.off('click');

        btn_delete_row.on('click',function () {
            this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);
        })

        btn_creat_row.on('click',function () {
            $(this).parent().parent().after(`
                        <tr class="tr_row">
                            <td>
                                <button class="bg-red-400  px-2 my-1 text-white text-left rounded block btn_delete_row" >-</button>
                            </td>
                            <td>
                                <button class="bg-blue-400  px-2 my-1 text-white text-left rounded block btn_creat_row" >+</button>
                            </td>
                            <td>
                                <input class="bg-gray-100 my-1 text-left rounded block" value="null"/>
                            </td>
                            <td>
                                <input class="bg-gray-100 my-1 text-left rounded block" value="null"/>
                            </td>
                            <td>
                                <input class="bg-gray-100 my-1 text-left rounded block" value="null"/>
                            </td>
                            <td>
                                <input class="bg-gray-100 my-1 text-left rounded block" value="null"/>
                            </td>
                            <td>
                                <input class="bg-gray-100 my-1 text-left rounded block" value=""/>
                            </td>
                            <td>
                                <input class="bg-gray-100 my-1 text-left rounded block" value=""/>
                            </td>
                            <td>
                                <input class="bg-gray-100 my-1 text-left rounded block" value=""/>
                            </td>
                            <td>
                                <input class="bg-gray-100 my-1 text-left rounded block" value=""/>
                            </td>
                            <td>
                                <input class="bg-gray-100 my-1 text-left rounded block" value=""/>
                            </td>
                            <td>
                                <input class="bg-gray-100 my-1 text-left rounded block" value=""/>
                            </td>
                        </td>
                    `)
            set_listener();
        })

    }
    //??????
    $('#btn_store_import').click(function () {
        let records_data = [];
        let tbody_children = $('#tbody').children();
        $.each(tbody_children, function (index, value){
            let list_tr = tbody_children.eq(index).children();
            // window.alert(list_tr.eq(0).children().val());
            // trade_name ?????????
            let push_row = {
                //???????????????????????????
                'redate':list_tr.eq(9).children().val(),
                'pres_hosp':list_tr.eq(2).children().val(),
                'trade_name':list_tr.eq(6).children().val(),
                'freq':list_tr.eq(7).children().val(),
                'dose':list_tr.eq(8).children().val(),
                'date_of_examination':list_tr.eq(9).children().val(),
            }
            records_data.push(push_row);
        });

        $.ajax({
            url:"{{route('store_import_data')}}",
            mothed:'get',
            data:{
                import_data:records_data
            },
            success: function (res) {
                if (res === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'excel????????????',
                        confirmButtonColor: '#8CD4F5'
                    })
                    window.location.reload();
                }
            },
            error: function (res) {
                Swal.fire({
                    icon: 'error',
                    title: '????????????',
                    text: res['statusText'],
                    confirmButtonColor: '#8CD4F5'
                })
            }
        })


    })
</script>
