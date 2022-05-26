<!--StatusBar-->
<div class="grid">
    <p class="mx-4 my-2 justify-self-start font-bold text-xl">功能操作</p>
    <div class="grid lg:grid-cols-2 2xl:grid-cols-4">
        <!--數據欄位-->
        <div class="rounded m-2 flex-1 bg-gray-50 p-4">
            {{--                        <div class="flex items-center md:mx-4 md:px-5 my-2">--}}
            <div class="flex items-center xl:mx-4 lg:px-5 my-2 content-around">
                <div class="flex grid">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                    </svg>
                </div>
                <div class="mx-4 px-5">
                    <p class="text-xl text-gray-600">任務統計</p>
                    <p class="text-2xl text-gray-900" id="task_nums">{{$task_nums}} 件</p>
                </div>
            </div>
        </div>
        <!--數據欄位-->
        <div class="rounded m-2 flex-1 bg-gray-50 p-4">
            {{--                        <div class="flex items-center md:mx-4 md:px-5 my-2">--}}
            <div class="flex items-center xl:mx-4 lg:px-5 my-2 content-around">
                <div class="flex grid">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </div>
                <div class="mx-2 px-5 grid grid-cols-2 ">
                    <p class="col-span-1 text-xl text-gray-600 col-span-2">全部用藥紀錄</p>
                    <a class="px-6 col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded">
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 justify-self-end text-gray-600" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </div>
                <div class="mx-2 px-5 grid grid-cols-2 ">
                    <p class="col-span-1 text-xl text-gray-600 col-span-2">刪除任務</p>
                    <a
                        class="px-6 col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded btn_delete_task">
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
                <div class="mx-2 px-5 grid grid-cols-2 ">
                    <p class="col-span-1 text-xl text-gray-600 col-span-2">新增任務</p>
                    <button
                        class="px-6 col-span-1 bg-transparent border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-white text-center py-2 x-4 rounded btn_create_task">
                        操作
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
