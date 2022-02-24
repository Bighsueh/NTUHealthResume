<!-- mobile menu bar -->
<div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
    <!-- logo -->
    <a href="{{route('menu')}}" class="block p-4 text-white font-bold">台大履歷網</a>

    <!-- mobile menu button -->
    <button class="mobile-menu-button p-4 focus:outilne-none focus:bg-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </button>

</div>


<!-- side bar -->

<div class="sidebar bg-teal-900 text-blue-100 w-3/5 md:w-1/5 space-y-6 md:px-1 px-2 md:px-10 py-7 absolute inset-y-0 left-0 transform
            -translate-x-full transition duration-200 ease-in-out md:relative md:translate-x-0">
    <!-- logo -->
    <a class="text-white flex items-center space-x-2 ml-6 md:ml-4" href="{{route('menu')}}">
                <span class="2xl:text-3xl lg:text-xl md:text-base sm:text-sm font-extrabold">
                    台大履歷網
                </span>
    </a>

    <!-- nav -->
    <nav class="lg:ml-3 md:ml-0 grid">
        <!-- <a href=""
            class="mb-3 flex block py-2 px-3 rounded lg:text-xl md:text-sm hover:bg-teal-700 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 lg:mr-2 " fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            新增病患回饋函
        </a> -->
        {{--        <a href="{{route('medicationRecords')}}"--}}
        {{--           class="mb-3 flex block py-2 px-3 rounded lg:text-xl md:text-sm hover:bg-teal-700 hover:text-white">--}}
        {{--            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 lg:mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
        {{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />--}}
        {{--            </svg>--}}
        {{--            病患用藥紀錄管理--}}
        {{--        </a>--}}
        <a href="{{route('get_medication_record_and_feedback_management_page')}}"
           class="mb-3 flex block py-2 px-3 rounded lg:text-xl md:text-sm hover:bg-teal-700 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 lg:mr-2 " fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            回饋函及用藥紀錄
        </a>
        <a href="{{route('get_setting_patient')}}"
           class="mb-3 flex block py-2 px-3 rounded lg:text-xl md:text-sm hover:bg-teal-700 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 lg:mr-2 " fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
            </svg>
            病患管理
        </a>
        <a href="{{route('get_setting_employee')}}"
           class="mb-3 flex block py-2 px-3 rounded lg:text-xl md:text-base hover:bg-teal-700 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
            員工管理
        </a>
        <a href="{{route('get_setting_nutritionManagement')}}"
           class="mb-3 flex block py-2 px-3 rounded lg:text-xl md:text-base hover:bg-teal-700 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
            </svg>
            營養管理系統
        </a>
        <a href="{{route('get_login_page')}}"
           class="mt-8 mb-3 flex block py-2 px-3 rounded lg:text-xl md:text-base hover:bg-teal-700 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
            </svg>
            登出
        </a>
    </nav>
</div>
{{--    content goes here--}}
<script>
    //grab everything we need
    const btn = document.querySelector('.mobile-menu-button');
    const sidebar = document.querySelector('.sidebar');

    //add our event listener for the click
    btn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    })

</script>
