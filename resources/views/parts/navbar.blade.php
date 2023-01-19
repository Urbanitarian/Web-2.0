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

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
            class="absolute inset-x-0 z-50 w-screen px-6 py-4 mt-12 transition-all duration-300 ease-in-out bg-blue-100 shadow-md lg:bg-transparent lg:shadow-none lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
            <div class="flex flex-col pb-4 space-y-4 align-baseline lg:mt-0 lg:flex-row lg:space-y-0 md:pb-0">
                <a class="text-sm font-bold text-gray-400 lg:mx-4 hover:text-blue-600" href="/"
                    @click="isOpen = false"><i class="fa-solid fa-house"></i>&nbsp; Accueil</a>
                @if (backpack_auth()->check())
                @else
                    <a class="text-sm font-bold text-gray-400 lg:mx-4 hover:text-blue-600 prevent"
                        href="/admin/register" @click="isOpen = false"><i class="fa-solid fa-user"></i>&nbsp;
                        Inscription</a>
                @endif
                <a class="text-sm font-bold text-gray-400 lg:mx-4 hover:text-blue-600" href="allgames"
                    @click="isOpen = false"><i class="fa-solid fa-gamepad"></i>&nbsp; Nos Jeux</a>
                <a class="text-sm font-bold text-gray-400 lg:mx-4 hover:text-blue-600" href="winner"
                    @click="isOpen = false"><i class="fa-solid fa-trophy"></i>&nbsp; Concours</a>
                <a class="text-sm font-bold text-gray-400 lg:mx-4 hover:text-blue-600" href="store"
                        @click="isOpen = false"><i class="fa-solid fa-gift"></i>&nbsp; Cadeaux</a>
                @if (backpack_auth()->check())
                    <a class="text-sm font-bold text-gray-400 lg:mx-4 hover:text-blue-600" href="pack"
                        @click="isOpen = false" data-barba-prevent="self"><i class="fa-regular fa-gem"></i>&nbsp;
                        Pack</a>
                    <a class="text-sm font-bold text-gray-400 lg:mx-4 hover:text-blue-600 lg:pr-4" href="profil"
                        @click="isOpen = false"><i class="fa-solid fa-user"></i>&nbsp; Profil</a>
                @endif

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
                                            Administration</a>
                                    @endif
                                    <a href="/admin/logout"
                                        class="block px-4 py-3 text-sm font-bold text-gray-300 capitalize transition-colors duration-300 transform hover:bg-gray-700 hover:text-white prevent">
                                        Déconnexion </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @else
                <a href="admin/login"
                    class="relative flex justify-center w-24 px-5 py-1 my-2 mt-2 font-medium text-white shadow-lg prevent lg:ml-8 group">
                    <span
                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-blue-500 group-hover:bg-blue-700 group-hover:skew-x-12"></span>
                    <span
                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-blue-700 group-hover:bg-blue-500 group-active:bg-blue-600 group-hover:-skew-x-12"></span>
                    <span
                        class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-blue-600 -rotate-12"></span>
                    <span
                        class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-blue-400 -rotate-12"></span>
                    <span class="relative">Connexion</span>
                </a>
            @endif
        </div>
    </nav>
</header>
@if (backpack_auth()->check())
    <div class="py-2 mx-8 mb-4 bg-gray-800 rounded-lg lg:mx-8 xl:mx-auto bg-opacity-40 max-w-7xl">
        <div class="flex flex-wrap items-center justify-center py-2 mx-auto md:justify-between max-w-7xl">
            <p class="pb-2 ml-4 mr-2 font-bold text-gray-200 capitalize lg:ml-8 md:pb-0">
                Bienvenue {{ backpack_auth()->user()->name }}</p>
            <div class="flex items-center pr-4 mt-1">
                <div class="flex px-2">
                    <img src="img/diamond5.png" class="w-8 h-6">
                    <p class="pt-1 text-white">&nbsp; x {{ backpack_auth()->user()->trophee1 }}</p>
                </div>
                <div class="flex px-2">
                        <img src="img/gem10.png" class="w-8 h-6">
                    <p class="pt-1 text-white">&nbsp; x {{ backpack_auth()->user()->trophee2 }}</p>
                </div>
                <div class="flex px-2">
                    <img src="img/coin10.png" class="w-8 h-6">
                    <p class="pt-1 text-white">&nbsp; x {{ backpack_auth()->user()->trophee3 }}</p>
                </div>
            </div>
        </div>
    </div>
@else
@endif
