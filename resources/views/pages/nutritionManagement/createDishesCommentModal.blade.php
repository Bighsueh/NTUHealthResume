<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="dishesComment" tabindex="-1" aria-labelledby="dishesCommentLabel" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
           <form id="dishes_form" action="" method="post">
               @csrf
                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-2xl font-bold leading-normal text-gray-800" id="dishesCommentLabel">
                        個別菜色評論
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
                    <input class="hidden" value="" id="dishes_dietLog_id">
                    <div class="h-1/5 p-1 flex flex-wrap flex-col">
                        <label for="carbohydrate">醣類：</label>
                        <input name="carbohydrate" id="carbohydrate" type="text" class="border border-black">
                        <label for="protein">蛋白質：</label>
                        <input name="protein" id="protein" type="text" class="border border-black">
                        <label for="fat">脂肪：</label>
                        <input name="fat" id="fat" type="text" class="border border-black">
                        <label for="cal">熱量：</label>
                        <input name="cal" id="cal" type="text" class="border border-black">
                    </div>
                    <div class="h-1/5 p-1 flex flex-wra flex-col">
                        <label for="na">鈉：</label>
                        <input name="na" id="na" type="text" class="border border-black">
                        <label for="k">鉀：</label>
                        <input name="k" id="k" type="text" class="border border-black">
                        <label for="ca">鈣：</label>
                        <input name="ca" id="ca" type="text" class="border border-black">
                        <label for="mg">鎂：</label>
                        <input name="mg" id="mg" type="text" class="border border-black">
                    </div>
                    <div class="h-1/5 p-1 flex flex-wrap flex-col">
                        <label for="vit_b12">維他命B12：</label>
                        <input name="vit_b12" id="vit_b12" type="text" class="border border-black">
                        <label for="vit_d">維他命D：</label>
                        <input name="vit_d" id="vit_d" type="text" class="border border-black">
                        <label for="vit_e">維他命E：</label>
                        <input name="vit_e" id="vit_e" type="text" class="border border-black">
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
                            id="btn_dishes_save"
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
        $('.btn-dish-patch').click(function (){
            let url  = '/dishes/patch/page'
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
                        $("#dishes_dietLog_id").val(res[2])
                        $("#carbohydrate").val(res[1]["carbohydrate"]);
                        $("#protein").val(res[1]["protein"]);
                        $("#fat").val(res[1]["fat"]);
                        $("#cal").val(res[1]["cal"]);
                        $("#na").val(res[1]["na"]);
                        $("#k").val(res[1]["k"]);
                        $("#ca").val(res[1]["ca"]);
                        $("#mg").val(res[1]["mg"]);
                        $("#vit_b12").val(res[1]["vit_b12"]);
                        $("#vit_d").val(res[1]["vit_d"]);
                        $("#vit_e").val(res[1]["vit_e"]);
                    }
                    else{
                        $(':input','#dishes_form').val('')
                        $("#dishes_dietLog_id").val(res[1])
                    }
                }
            })
        })
        $('#btn_dishes_save').click(function (){
            let url  = '{{route('post_dishes_patch')}}';
            $.ajax({
                url : url,
                method : "post",
                data:{
                    "_token":"{{csrf_token()}}",
                    "id":$("#dishes_dietLog_id").val(),
                    "dishes":[$("#carbohydrate").val(),$("#protein").val(),$("#fat").val(),
                        $("#cal").val(),$("#na").val(),$("#k").val(),$("#ca").val(),
                        $("#mg").val(),$("#vit_b12").val(),$("#vit_d").val(),$("#vit_e").val()]
                },
                success: function (res) {
                    if (res === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: '菜色評論儲存成功',
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
