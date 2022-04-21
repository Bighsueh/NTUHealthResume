<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="orderListComment" tabindex="-1" aria-labelledby="orderListCommentLabel" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <form id="orderList_comment_form" action="" method="post">
                @csrf
                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-2xl font-bold leading-normal text-gray-800" id="orderListCommentLabel">
                        餐序評論
                    </h5>
                    <button type="button"
                            class="btn-close box-content   text-black border-none rounded-none opacity-50  focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                            data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body w-full h-full flex p-16">
                    <input class="hidden" value="" id="orderList_id">
                    <div class="h-1/4 p-3 flex flex-wrap flex-col">
                        <label for="orderList_comment_carbohydrate" class="text-black font-medium">醣類：</label>
                        <input name="orderList_comment_carbohydrate" id="orderList_comment_carbohydrate" type="text" class="border border-black">
                        <label for="orderList_comment_protein" class="text-black font-medium">蛋白質：</label>
                        <input name="orderList_comment_protein" id="orderList_comment_protein" type="text" class="border border-black">
                        <label for="orderList_comment_fat" class="text-black font-medium">脂肪：</label>
                        <input name="orderList_comment_fat" id="orderList_comment_fat" type="text" class="border border-black">
                        <label for="orderList_comment_cal" class="text-black font-medium">熱量：</label>
                        <input name="orderList_comment_cal" id="orderList_comment_cal" type="text" class="border border-black">
                    </div>
                    <div class="h-1/4 p-3 flex flex-wra flex-col">
                        <label for="orderList_comment_na" class="text-black font-medium">鈉：</label>
                        <input name="orderList_comment_na" id="orderList_comment_na" type="text" class="border border-black">
                        <label for="orderList_comment_k" class="text-black font-medium">鉀：</label>
                        <input name="orderList_comment_k" id="orderList_comment_k" type="text" class="border border-black">
                        <label for="orderList_comment_ca" class="text-black font-medium">鈣：</label>
                        <input name="orderList_comment_ca" id="orderList_comment_ca" type="text" class="border border-black">
                        <label for="orderList_comment_mg" class="text-black font-medium">鎂：</label>
                        <input name="orderList_comment_mg" id="orderList_comment_mg" type="text" class="border border-black">
                    </div>
                    <div class="h-1/4 p-3 flex flex-wrap flex-col">
                        <label for="orderList_comment_vit_b12" class="text-black font-medium">維他命B12：</label>
                        <input name="orderList_comment_vit_b12" id="orderList_comment_vit_b12" type="text" class="border border-black">
                        <label for="orderList_comment_vit_d" class="text-black font-medium">維他命D：</label>
                        <input name="orderList_comment_vit_d" id="orderList_comment_vit_d" type="text" class="border border-black">
                        <label for="orderList_comment_vit_e" class="text-black font-medium">維他命E：</label>
                        <input name="orderList_comment_vit_e" id="orderList_comment_vit_e" type="text" class="border border-black">
                    </div>


                </div>
                <div
                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                    <button type="button"
                            id="btn-comment-cancel"
                            class="inline-block px-6 py-2.5 bg-red-500 text-white font-medium text-sm
                                leading-tight rounded shadow-md  hover:shadow-lg hover:bg-red-700 focus:bg-red-700 focus:shadow-lg
                                focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg transition duration-150 ease-in-out mx-2"
                            data-bs-dismiss="modal">
                        不儲存並關閉
                    </button>
                    <button type="button"
                            id="btn_orderList_comment_save"
                            class="inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-sm
                                leading-tight rounded shadow-md  hover:shadow-lg hover:bg-blue-700 focus:bg-blue-700 focus:shadow-lg
                                focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out"
                            data-bs-dismiss="modal"
                    >
                        儲存
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(function (){
        $('.btn-orderList-comment-patch').click(function (){
            let url  = '{{route('get_orderList_comment_patch_page')}}'
            // alert($(this).attr("value"))
            $.ajax({
                url : url,
                method : "post",
                data:{
                    "_token":"{{csrf_token()}}",
                    "id":$(this).attr("value"),
                },
                success:function(res){
                    console.log(res);
                    if(res[0]) {
                        $("#orderList_id").val(res[2])
                        $("#orderList_comment_carbohydrate").val(res[1]["carbohydrate"]);
                        $("#orderList_comment_protein").val(res[1]["protein"]);
                        $("#orderList_comment_fat").val(res[1]["fat"]);
                        $("#orderList_comment_cal").val(res[1]["cal"]);
                        $("#orderList_comment_na").val(res[1]["na"]);
                        $("#orderList_comment_k").val(res[1]["k"]);
                        $("#orderList_comment_ca").val(res[1]["ca"]);
                        $("#orderList_comment_mg").val(res[1]["mg"]);
                        $("#orderList_comment_vit_b12").val(res[1]["vit_b12"]);
                        $("#orderList_comment_vit_d").val(res[1]["vit_d"]);
                        $("#orderList_comment_vit_e").val(res[1]["vit_e"]);
                    }
                    else{
                        $(':input','#orderList_comment_form').val('')
                        $("#orderList_id").val(res[1])
                    }
                }
            })
        })
        $('#btn_orderList_comment_save').click(function (){
            let url  = '{{route('get_orderList_comment_patch')}}';
            $.ajax({
                url : url,
                method : "post",
                data:{
                    "_token":"{{csrf_token()}}",
                    "id":$("#orderList_id").val(),
                    "orderList":[$("#orderList_comment_carbohydrate").val(),$("#orderList_comment_protein").val(),$("#orderList_comment_fat").val(),
                        $("#orderList_comment_cal").val(),$("#orderList_comment_na").val(),$("#orderList_comment_k").val(),$("#orderList_comment_ca").val(),
                        $("#orderList_comment_mg").val(),$("#orderList_comment_vit_b12").val(),$("#orderList_comment_vit_d").val(),$("#orderList_comment_vit_e").val()]
                },
                success: function (res) {
                    if (res === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: '餐序評論儲存成功',
                            confirmButtonColor: '#8CD4F5'
                        })
                    }
                },
                error: function (res) {
                    //錯誤訊息
                    console.log(res);
                    Swal.fire({
                        icon: 'error',
                        title: '儲存失敗',
                        text: res['statusText'],
                        confirmButtonColor: '#8CD4F5'
                    })
                }
            })
        })
    })

</script>
