<!--StatusBar-->
<div class="grid">
    <p class="mx-4 my-2 justify-self-start font-bold text-xl">功能操作</p>
    <div class="grid lg:grid-cols-2 2xl:grid-cols-4">
        <!--數據欄位-->
        <div class="rounded m-2 flex-1 bg-gray-50 p-4">
            {{--                        <div class="flex items-center md:mx-4 md:px-5 my-2">--}}
            <div class="flex items-center xl:mx-4 lg:px-5 my-2 content-around">
                <div class="flex grid">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                </div>
                <div class="mx-2 px-5 grid grid-cols-1 ">
                    <p class="col-span-1 text-xl text-gray-600">欄位1</p>
                    <a
                        class="col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded">
                        查看
                    </a>
                </div>
            </div>
        </div>
        <!--數據欄位-->
        <div class="rounded m-2 flex-1 bg-gray-50 p-4">
            {{--                        <div class="flex items-center md:mx-4 md:px-5 my-2">--}}
            <div class="flex items-center xl:mx-4 lg:px-5 my-2 content-around">
                <div class="flex grid">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                </div>
                <div class="mx-2 px-5 grid grid-cols-1 ">
                    <p class="col-span-1 text-xl text-gray-600">欄位2</p>
                    <a
                        class="col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded">
                        查看
                    </a>
                </div>
            </div>
        </div>
        <!--數據欄位-->
        <div class="rounded m-2 flex-1 bg-gray-50 p-4">
            {{--                        <div class="flex items-center md:mx-4 md:px-5 my-2">--}}
            <div class="flex items-center xl:mx-4 lg:px-5 my-2 content-around">
                <div class="flex grid">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <div class="mx-2 px-5 grid grid-cols-1 ">
                    <p class="col-span-1 text-xl text-gray-600">刪除任務</p>
                    <a
                        class="col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded btn_delete_task">
                        操作
                    </a>
                </div>
            </div>
        </div>
        <!--數據欄位-->
        <div class="rounded m-2 flex-1 bg-gray-50 p-4">
            {{--                        <div class="flex items-center md:mx-4 md:px-5 my-2">--}}
            <div class="flex items-center xl:mx-4 lg:px-5 my-2 content-around">
                <div class="flex grid">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                </div>
                <div class="mx-2 px-5 grid grid-cols-1 ">
                    <p class="col-span-1 text-xl text-gray-600">新增任務</p>
                    <button
                        class="col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded btn_create_task">
                        操作
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
