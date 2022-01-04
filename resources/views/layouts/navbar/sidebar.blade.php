
    <!-- mobile menu bar -->
    <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
        <!-- logo -->
        <a href="" class="block p-4 text-white font-bold">better Dev</a>

        <!-- mobile menu button -->
        <button class="mobile-menu-button p-4 focus:outilne-none focus:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

    </div>


    <!-- side bar -->

    <div class="sidebar bg-gradient-to-r from-zinc-700 to-zinc-800 text-blue-100 w-64 space-y-6 px-2 py-7 absolute inset-y-0 left-0 transform
         -translate-x-full transition duration-200 ease-in-out md:relative md:translate-x-0">
        <!-- logo -->
        <a class="text-white flex items-center space-x-2 py-2 px-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
            </svg>
            <span class="text-2xl font-extrabold">
                    台大健康履歷網
                </span>
        </a>

        <!-- nav -->
        <nav>
            <a href="" class="block py-2 px-4 rounded hover:bg-blue-700 hover:text-white">
                連結1
            </a>
            <a href="" class="block py-2 px-4 rounded hover:bg-blue-700 hover:text-white">
                連結2
            </a>
            <a href="" class="block py-2 px-4 rounded hover:bg-blue-700 hover:text-white">
                連結3
            </a>
            <a href="" class="block py-2 px-4 rounded hover:bg-blue-700 hover:text-white">
                連結4
            </a>
        </nav>
    </div>


<script>
    //grab everything we need
    const btn = document.querySelector('.mobile-menu-button');
    const sidebar = document.querySelector('.sidebar');

    //add our event listener for the click
    btn.addEventListener('click',()=>{
        sidebar.classList.toggle('-translate-x-full');
    })

</script>
