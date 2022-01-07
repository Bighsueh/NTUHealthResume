@extends('layouts.main.drive')

@section('title')
    病患雲端系統
@endsection

@section('content')

    {{--      tab之內容      --}}
    <ul class="nav nav-tabs nav-justified flex flex-col
            md:flex-row  flex-wrap  list-none  border-b-0 pl-0 mb-4"
        id="tabs-tabJustify" role="tablist">
        <li class="nav-item flex-grow text-center" role="presentation">
            <a href="#tabs-homeJustify" class="nav-link w-full block font-medium
                          text-xl leading-tight border-x-0 border-t-0 border-b-2
                          border-transparent px-6 py-3  hover:border-transparent
                          hover:bg-gray-100 focus:border-transparent active"
               id="tabs-home-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-homeJustify" role="tab"
               aria-controls="tabs-homeJustify" aria-selected="true">
                病患回饋函
            </a>
        </li>
        <li class="nav-item flex-grow text-center" role="presentation">
            <a href="#tabs-messagesJustify" class="nav-link w-full block font-medium
                    text-xl leading-tight border-x-0 border-t-0 border-b-2 border-transparent
                    px-6 py-3  hover:border-transparent hover:bg-gray-100 focus:border-transparent"
               id="tabs-messages-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-messagesJustify" role="tab"
               aria-controls="tabs-messagesJustify" aria-selected="false">
                醫師回饋函
            </a>
        </li>
    </ul>

    <div class="flex flex-col container w-screen justify-center">
        {{--      病患回饋函的內容      --}}
        <div class="tab-content" id="tabs-tabContentJustify">
            <div class="tab-pane fade show active" id="tabs-homeJustify" role="tabpanel"
                 aria-labelledby="tabs-home-tabJustify">
                <div class="title text-2xl text-center font-mono my-2">
                    <p class="">
                        國家衛生研究院&台大醫院雲林分院
                    </p>
                    <p class="">社區健康促進計畫</p>
                    <p class="">用藥關懷服務</p>
                </div>
                <div class=" p-2 rounded text-xl sm:w-1/2 sm:mx-auto">
                    <p>親愛的劉蔡貴美女士 您好：</p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eaque earum enim in maxime nobis praesentium ratione repellendus repudiandae. Aliquid eaque eos eum facilis non omnis possimus soluta velit vitae.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi asperiores ducimus exercitationem expedita ipsum reiciendis? Alias cum earum illum, maiores necessitatibus officia provident quae, quas quos repellendus sed, voluptatibus!
                    <p>用藥叮嚀：</p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias assumenda cupiditate delectus illo, ipsam sed. Accusantium alias, consequuntur dolorum et impedit, inventore magni officia officiis rem reprehenderit suscipit tempora voluptatibus.
                    <p class="text-center mt-2">國家衛生研究院&台大醫院雲林分院關心您</p>
                </div>
            </div>
            {{--      醫師回饋函的內容      --}}
            <div class="tab-pane fade" id="tabs-messagesJustify" role="tabpanel" aria-labelledby="tabs-messages-Justify">
                <div class="title text-2xl text-center font-mono my-2">
                    <p class="">
                        國家衛生研究院&台大醫院雲林分院
                    </p>
                    <p class="">社區健康促進計畫</p>
                    <p class="">用藥關懷服務</p>
                </div>
                <div class="p-2 text-xl sm:w-1/2 sm:mx-auto">
                    <p>親愛的醫師 您好：</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eaque earum enim in maxime nobis praesentium ratione repellendus repudiandae. Aliquid eaque eos eum facilis non omnis possimus soluta velit vitae.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi asperiores ducimus exercitationem expedita ipsum reiciendis? Alias cum earum illum, maiores necessitatibus officia provident quae, quas quos repellendus sed, voluptatibus!
                    </p>
                    <p>藥物相關問題呈述：</p>
                    <div class="border-1 border-black p-1">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias assumenda cupiditate delectus illo, ipsam sed. Accusantium alias, consequuntur dolorum et impedit, inventore magni officia officiis rem reprehenderit suscipit tempora voluptatibus.
                        </p>
                    </div>
                    <p>藥師意見：</p>
                    <div class="border-1 border-black p-1">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias assumenda cupiditate delectus illo, ipsam sed. Accusantium alias, consequuntur dolorum et impedit, inventore magni officia officiis rem reprehenderit suscipit tempora voluptatibus.
                        </p>
                    </div>

                    <p class="text-center mt-2">臺大雲林分院感恩您</p>
                </div>
            </div>
        </div>
{{--        <table class="table-auto border-collapse border border-gray-900">--}}
{{--            <thead class="p-2 bg-gray-700 text-white text-xl">--}}
{{--            <th>病患回饋單編號</th>--}}
{{--            <th>標題</th>--}}
{{--            <th>內容</th>--}}
{{--            </thead>--}}
{{--            <tr>--}}
{{--                <td>1</td>--}}
{{--                <td>title</td>--}}
{{--                <td>content</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>2</td>--}}
{{--                <td>title2</td>--}}
{{--                <td>content2</td>--}}
{{--            </tr>--}}

{{--        </table>--}}


    </div>
@endsection
<script>

</script>

