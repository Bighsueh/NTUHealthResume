@extends('layouts.main.drive')

@section('title')
    病患雲端系統
@endsection

@section('content')


    <div class="container">
            <div class="w-full flex justify-between mx-auto md:w-3/4 p-2 items-center text-lg font-bold">
                <div class="profile w-auto flex flex-row">
                    <div class="relative w-16 h-16">
                        <svg xmlns="http://www.w3.org/2000/svg" class="rounded-full border border-gray-100 shadow-sm" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <p class="flex items-center mx-2">123先生/小姐</p>
                </div>
                <p>目前累計1筆資料</p>
            </div>
            <div class="flex mx-auto my-2 md:w-3/4 ">
                <input
                    class="appearance-none bg-transparent border-b w-full
                    text-gray-700 leading-tight focus:outline-none"
                    type="text" placeholder="請輸入欲查詢資料" >
                <button
                    class="flex-shrink-0 bg-teal-700 hover:bg-teal-500 border-teal-700 hover:border-teal-500 text-sm border-4 text-white mx-1 px-2 rounded"
                    type="button">
                    <p class="mx-2">
                        搜尋
                    </p>
                </button>
            </div>
            <div class="card rounded-lg border-3 border-gray-200 bg-gray-100 flex flex-row flex-wrap mx-auto my-2
            md:w-3/4 md:h-1/2 p-2">
                <div class="header w-full flex p-1 justify-between">
                        <h2 class="font-bold text-xl w-auto">2022-01-01 回饋單</h2>
{{--                        <button  class="h-1">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--                            </svg>--}}
{{--                        </button>--}}
                </div>
                <div class="body w-full h-5/6 flex text-lg font-bold">
                    <div class="rounded-lg bg-white w-1/3 m-2">
                        <div class="card-header bg-white p-2 flex border-white">
                            <h2 class="mx-2">相關資訊</h2>
                        </div>
                        <div class="card-body">
                            <table class="text-center mx-auto my-2 text-xl items-center">
                                <thead class="">
                                <th class="md:p-4">時間</th>
                                <th class="md:p-4">點擊次數</th>
                                </thead>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="rounded-lg bg-white  w-1/3 m-2">
                        <div class="card-header bg-white p-2 flex justify-between border-white">
                            <h2 class="mx-2">病患回饋函</h2>
                            <button type="button" class="h-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                            </button>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consec
                            tetur adipisicing elit.
                        </div>
                    </div>
                    <div class="rounded-lg bg-white  w-1/3 m-2">
                        <div class="card-header bg-white p-2 flex justify-between border-white">
                            <h2 class="mx-2">醫師回饋函</h2>
                            <button type="button" class="h-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                            </button>
                        </div>
                        <div class="card-body">
                           Lorem ipsum dolor sit ame
                            t, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>

            </div>
    </div>




{{--    --}}{{--      tab之內容      --}}
{{--    <ul class="nav nav-tabs flex flex-col--}}
{{--            md:flex-row flex-wrap border-b-0 pl-0 mb-4"--}}
{{--        id="tabs-tabJustify" role="tablist">--}}
{{--        <li class="nav-item flex-grow text-center" role="presentation">--}}
{{--            <a href="#tabs-homeJustify" class="nav-link w-full block font-medium--}}
{{--                          text-xl leading-tight border-x-0 border-t-0 border-b-2--}}
{{--                          border-transparent px-6 py-3  hover:border-transparent--}}
{{--                          hover:bg-gray-100 focus:border-transparent active"--}}
{{--               id="tabs-home-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-homeJustify" role="tab"--}}
{{--               aria-controls="tabs-homeJustify" aria-selected="true">--}}
{{--                病患回饋函--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="nav-item flex-grow text-center" role="presentation">--}}
{{--            <a href="#tabs-messagesJustify" class="nav-link w-full block font-medium--}}
{{--                    text-xl leading-tight border-x-0 border-t-0 border-b-2 border-transparent--}}
{{--                    px-6 py-3  hover:border-transparent hover:bg-gray-100 focus:border-transparent"--}}
{{--               id="tabs-messages-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-messagesJustify" role="tab"--}}
{{--               aria-controls="tabs-messagesJustify" aria-selected="false">--}}
{{--                醫師回饋函--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}

{{--    <div class="flex flex-col container w-screen justify-center">--}}
{{--        --}}{{--      病患回饋函的內容      --}}
{{--        <div class="tab-content" id="tabs-tabContentJustify">--}}
{{--            <div class="tab-pane fade show active" id="tabs-homeJustify" role="tabpanel"--}}
{{--                 aria-labelledby="tabs-home-tabJustify">--}}
{{--                <div class="title text-2xl text-center font-mono my-2">--}}
{{--                    <p class="">--}}
{{--                        國家衛生研究院&台大醫院雲林分院--}}
{{--                    </p>--}}
{{--                    <p class="">社區健康促進計畫</p>--}}
{{--                    <p class="">用藥關懷服務</p>--}}
{{--                </div>--}}
{{--                <div class=" p-2 rounded text-xl sm:w-1/2 sm:mx-auto">--}}
{{--                    <p>親愛的劉蔡貴美女士 您好：</p>--}}
{{--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eaque earum enim in maxime nobis praesentium ratione repellendus repudiandae. Aliquid eaque eos eum facilis non omnis possimus soluta velit vitae.--}}
{{--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi asperiores ducimus exercitationem expedita ipsum reiciendis? Alias cum earum illum, maiores necessitatibus officia provident quae, quas quos repellendus sed, voluptatibus!--}}
{{--                    <p>用藥叮嚀：</p>--}}
{{--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias assumenda cupiditate delectus illo, ipsam sed. Accusantium alias, consequuntur dolorum et impedit, inventore magni officia officiis rem reprehenderit suscipit tempora voluptatibus.--}}
{{--                    <p class="text-center mt-2">國家衛生研究院&台大醫院雲林分院關心您</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            --}}{{--      醫師回饋函的內容      --}}
{{--            <div class="tab-pane fade" id="tabs-messagesJustify" role="tabpanel" aria-labelledby="tabs-messages-Justify">--}}
{{--                <div class="title text-2xl text-center font-mono my-2">--}}
{{--                    <p class="">--}}
{{--                        國家衛生研究院&台大醫院雲林分院--}}
{{--                    </p>--}}
{{--                    <p class="">社區健康促進計畫</p>--}}
{{--                    <p class="">用藥關懷服務</p>--}}
{{--                </div>--}}
{{--                <div class="p-2 text-xl sm:w-1/2 sm:mx-auto">--}}
{{--                    <p>親愛的醫師 您好：</p>--}}
{{--                    <p>--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eaque earum enim in maxime nobis praesentium ratione repellendus repudiandae. Aliquid eaque eos eum facilis non omnis possimus soluta velit vitae.--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi asperiores ducimus exercitationem expedita ipsum reiciendis? Alias cum earum illum, maiores necessitatibus officia provident quae, quas quos repellendus sed, voluptatibus!--}}
{{--                    </p>--}}
{{--                    <p>藥物相關問題呈述：</p>--}}
{{--                    <div class="border-1 border-black p-1">--}}
{{--                        <p>--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias assumenda cupiditate delectus illo, ipsam sed. Accusantium alias, consequuntur dolorum et impedit, inventore magni officia officiis rem reprehenderit suscipit tempora voluptatibus.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <p>藥師意見：</p>--}}
{{--                    <div class="border-1 border-black p-1">--}}
{{--                        <p>--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias assumenda cupiditate delectus illo, ipsam sed. Accusantium alias, consequuntur dolorum et impedit, inventore magni officia officiis rem reprehenderit suscipit tempora voluptatibus.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="footer">--}}
{{--                        <div class="relative flex py-4 items-center">--}}
{{--                            <div class="flex-grow border-t border-black"></div>--}}
{{--                            <span class="flex-shrink mx-4 text-black">詳細資料</span>--}}
{{--                            <div class="flex-grow border-t border-black"></div>--}}
{{--                        </div>--}}
{{--                        <p>參考資料：Micromedex、UpToDate 與藥品仿單</p>--}}
{{--                        <p>藥師：謝承穎</p>--}}
{{--                        <p>信箱：Y04409@ ms1.ylh.gov.tw</p>--}}
{{--                        <p>連絡電話：5323911轉5188</p>--}}
{{--                        <p class="text-center mt-2">臺大雲林分院感恩您</p>--}}
{{--                    </div>--}}



{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
<script>

</script>

