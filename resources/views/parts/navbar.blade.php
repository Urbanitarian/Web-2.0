<header class="z-10 flex px-4 pt-6 pb-2 md:px-0 md:mx-auto max-w-7xl border-x-1 justify-evenly">

    <nav x-data="{ isOpen: false }" class="container py-6 pl-2 pr-4 mx-auto lg:flex lg:justify-between lg:items-center">
        <div class="flex items-center justify-between">
            <div>
                <a class="text-2xl font-bold text-gray-700 lg:text-3xl hover:text-gray-400 " href="/"><img
                        src="./img/logo.png" class="w-auto h-16"></a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button x-cloak @click="isOpen = !isOpen" type="button"
                    class="text-gray-500 hover:text-gray-400 focus:outline-none focus:text-gray-400 "
                    aria-label="toggle menu">
                    <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                    </svg>

                    <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

            @if (backpack_auth()->check())
                <div :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                    class="absolute inset-x-0 z-50 w-full px-6 transition-all duration-300 ease-in-out bg-blue-100 border-t border-b shadow-md opacity-0 md:border-0 lg:bg-transparent lg:shadow-none lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:w-auto lg:opacity-100 lg:translate-x-0">
                    <div class="pb-2 -mx-4 lg:flex lg:items-center">
                        <div class="z-50 pl-5 md:pl-2">
                            <div x-data="{ isOpen: false }" class="relative inline-block">
                                <!-- Dropdown toggle button -->
                                <button @click="isOpen = !isOpen"
                                    class="relative z-10 block p-2 mt-4 text-white bg-gray-800 border border-transparent rounded-md lg:mt-2 focus:border-blue-800 focus:ring-opacity-40 focus:ring-blue-300 focus:blue-400 focus:ring focus:outline-none">
                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>

                                <!-- Dropdown menu -->
                                <div x-show="isOpen" @click.away="isOpen = false"
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="opacity-0 scale-90"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-100"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-90"
                                    class="absolute z-20 w-48 py-2 mt-2 bg-gray-800 border border-gray-500 rounded-md shadow-xl left:0 lg:right-0"
                                    style="display: none;">
                                    @if (backpack_auth()->user()->role == 'admin')
                                        <a href="admin"
                                            class="block px-4 py-3 text-sm font-bold text-gray-300 capitalize transition-colors duration-300 transform hover:bg-gray-700 hover:text-white"
                                            target="_blank">
                                            Dashboard</a>
                                    @endif
                                    <a href="/admin/logout"
                                        class="block px-4 py-3 text-sm font-bold text-gray-300 capitalize transition-colors duration-300 transform hover:bg-gray-700 hover:text-white prevent">
                                       Logout </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @else
                <a href="admin/login"
                    class="relative flex justify-center w-24 px-5 py-1 my-2 mt-2 font-medium text-white shadow-lg prevent lg:ml-8 group">
                    <span class="px-8 bg-blue-600 rounded">Login</span>
                </a>
            @endif
        </div>
    </nav>
</header>
