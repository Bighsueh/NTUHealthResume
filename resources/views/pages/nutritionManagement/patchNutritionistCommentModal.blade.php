<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="nutritionistCommentPatchModal" tabindex="-1" aria-labelledby="nutritionistCommentPatchLabel" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <form action="{{route('patch_nutritionistComment')}}" method="post">
                @csrf
                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-2xl font-bold leading-normal text-gray-800 " id="nutritionistCommentPatchLabel">
                        營養師評論
                    </h5>
                    <button type="button"
                            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body w-full h-full flex p-16">
                    <div class="h-1/5 p-1 flex flex-wrap flex-col">
                        <input class="hidden" value="" name="patch_id" id="patch_id">
                        <label for="p_carbohydrate">醣類：</label>
                        <input name="p_carbohydrate" id="p_carbohydrate" type="text" class="border border-black">
                        <label for="p_protein">蛋白質：</label>
                        <input name="p_protein" id="p_protein" type="text" class="border border-black">
                        <label for="p_fat">脂肪：</label>
                        <input name="p_fat" id="p_fat" type="text" class="border border-black">
                        <label for="p_cal">熱量：</label>
                        <input name="p_cal" id="p_cal" type="text" class="border border-black">
                    </div>
                    <div class="h-1/5 p-1 flex flex-wra flex-col">
                        <label for="p_na">鈉：</label>
                        <input name="p_na" id="p_na" type="text" class="border border-black">
                        <label for="p_k">鉀：</label>
                        <input name="p_k" id="p_k" type="text" class="border border-black">
                        <label for="p_ca">鈣：</label>
                        <input name="p_ca" id="p_ca" type="text" class="border border-black">
                        <label for="p_mg">鎂：</label>
                        <input name="p_mg" id="p_mg" type="text" class="border border-black">
                    </div>
                    <div class="h-1/5 p-1 flex flex-wrap flex-col">
                        <label for="p_vit_b12">維他命B12：</label>
                        <input name="p_vit_b12" id="p_vit_b12" type="text" class="border border-black">
                        <label for="p_vit_d">維他命D：</label>
                        <input name="p_vit_d" id="p_vit_d" type="text" class="border border-black">
                        <label for="p_vit_e">維他命E：</label>
                        <input name="p_vit_e" id="p_vit_e" type="text" class="border border-black">
                    </div>


                </div>
                <div
                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                    <button type="submit"
                            id="btn_insert"
                            class="inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-sm
                                leading-tight rounded shadow-md  hover:shadow-lg hover:bg-blue-700 focus:bg-blue-700 focus:shadow-lg
                                focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out"
                    >
                        修改
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('.btn-patch').click(function (){
        let url  = '/nutritionistComment/patch/page'
        // alert($(this).attr("value"))
        $.ajax({
            url : url,
            method : "post",
            data:{
                "_token":"{{csrf_token()}}",
                "id":$(this).attr("value"),
            },
            success:function(res){
                $("#p_carbohydrate").val(res["carbohydrate"]);
                $("#p_protein").val(res["protein"]);
                $("#p_fat").val(res["fat"]);
                $("#p_cal").val(res["cal"]);
                $("#p_na").val(res["na"]);
                $("#p_k").val(res["k"]);
                $("#p_ca").val(res["ca"]);
                $("#p_mg").val(res["mg"]);
                $("#p_vit_b12").val(res["vit_b12"]);
                $("#p_vit_d").val(res["vit_d"]);
                $("#p_vit_e").val(res["vit_e"]);
                $("#patch_id").val(res["id"])
            }
        })
    })
</script>
