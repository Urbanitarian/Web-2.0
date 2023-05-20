<nav x-data="{ isOpen: false }" class="gap-6 px-6 py-3 lg:flex lg:justify-between lg:items-center">
    <div class="flex items-center justify-between gap-6">
        <div>
            <a class="flex items-center text-2xl font-bold text-gray-700 lg:text-3xl hover:text-gray-400 " href="/">
                <img src="{{ asset('img/logo.png') }}" class="w-auto h-8 md:h-16">
                <h1 class="pl-2 text-xl font-bold text-[#333333] lg:mt-1 2xl:mt-0 2xl:text-3xl hover:text-gray-400 mb-0">
                    Urbanitarian</h1>
            </a>
        </div>


        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div class="z-50 items-center px-6 py-4flex">
            <div class="flex flex-row gap-4 pb-4 mt-20 space-y-0 align-baseline md:mt-0 mynav md:pb-0">
                <a class="text-gray-400 duration-300 text-md lg:mx-2 xl:mx-4 hover:text-black hover:scale-110"
                    href="/">&nbsp;Categories</a>
                <a class="text-gray-400 duration-300 text-md lg:mx-2 xl:mx-4 hover:text-black hover:scale-110"
                    href="/collections">&nbsp;Collections</a>
                <a class="text-gray-400 duration-300 text-md lg:mx-2 xl:mx-4 hover:text-black hover:scale-110"
                    href="/how-it-works">&nbsp;How it works</a>
            </div>

        </div>
    </div>



    <div class="relative flex mt-8 lg:mt-0" x-data="{ showSearch: false }">
        <div class="flex mx-2" x-show="showSearch">
            <input type="text" name="search" id="" placeholder="Search"
                class="w-64 px-1 py-2 border-2 border-gray-200 rounded outline-none outline-2 outline-gray-600">
        </div>
        <div class="flex items-center justify-center gap-6">
            <div class="flex" @click="showSearch=!showSearch">
                <button class="" aria-label="toggle menu">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                            clip-rule="evenodd" />
                    </svg>

                </button>
            </div>

            <a href=""
                class="flex px-5 py-3 font-normal text-center text-white bg-gray-800 rounded shadow-lg hover:bg-black prevent group">
                <span class="text-sm">Log in or sign up</span>
            </a>
            <!-- Mobile menu button -->
            <div class="flex">
                <button x-cloak @click="isOpen = !isOpen" type="button" class="" aria-label="toggle menu">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="25px" height="25px">
                        <path
                            d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z" />
                    </svg>

                </button>
            </div>
            <div x-cloak x-show="isOpen"
                class="absolute z-50 px-16 py-6 transition-all duration-300 ease-in-out shadow-md mt-52 bg-gray-50">
                <div class="flex flex-col items-end justify-end pb-4 space-y-4 align-baseline mynav">
                    <a class="text-sm font-semibold text-gray-400 duration-300 border-b lg:mx-2 xl:mx-4 hover:text-black hover:scale-110"
                        href="/" @click="isOpen = false">&nbsp;Categories</a>

                    <a class="text-sm font-semibold text-gray-400 duration-300 border-b lg:mx-2 xl:mx-4 hover:text-black hover:scale-110"
                        href="/masterplans" @click="isOpen = false">&nbsp;Collections</a>
                    <a class="text-sm font-semibold text-gray-400 duration-300 border-b lg:mx-2 xl:mx-4 hover:text-black hover:scale-110"
                        href="/streetscapes" @click="isOpen = false">&nbsp;How it works</a>
                </div>

            </div>
        </div>

    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const currentLocation = location.href;
        const menuItem = document.querySelectorAll('.mynav a');
        const menuLength = menuItem.length;
        for (let i = 0; i < menuLength; i++) {
            if (menuItem[i].href === currentLocation) {
                menuItem[i].className =
                    'text-md font-semibold lg:mx-2 xl:mx-4 text-black hover:scale-110 duration-300';
            }
        }
    });
</script>
