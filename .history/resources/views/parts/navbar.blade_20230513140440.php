<nav x-data="{ isOpen: false }" class="gap-6 py-2 px-6 lg:flex lg:justify-between lg:items-center">
    <div class="flex items-center justify-between gap-6">
        <div>
            <a class="flex text-2xl font-bold text-gray-700 lg:text-3xl hover:text-gray-400 " href="/">
                <img src="{{ asset('img/logo.png') }}" class="w-auto h-8 mt-4 md:h-16">
                <h1
                    class="pl-2 text-xl font-bold text-[#333333] lg:mt-1 2xl:mt-0 2xl:text-3xl hover:text-gray-400 mb-0">
                    Urbanitarian</h1>
            </a>
        </div>


        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div class="z-50 px-6 py-4flex items-center">
            <div class="flex pb-4 space-y-0 gap-4 mt-20 md:mt-0 align-baseline mynav flex-row md:pb-0">
                <a class="text-md text-gray-400 duration-300 lg:mx-2 xl:mx-4 hover:text-black hover:scale-110"
                    href="/">&nbsp;Categories</a>
                <a class="text-md text-gray-400 duration-300 lg:mx-2 xl:mx-4 hover:text-black hover:scale-110"
                    href="/collections">&nbsp;Collections</a>
                <a class="text-md text-gray-400 duration-300 lg:mx-2 xl:mx-4 hover:text-black hover:scale-110"
                    href="/how-it-works">&nbsp;How it works</a>
            </div>

        </div>
    </div>


    <div class="flex mt-8 lg:mt-0 relative">
        <div class="flex justify-center items-center gap-6">
            <div class="flex">
                <button class="" aria-label="toggle menu">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                            clip-rule="evenodd" />
                    </svg>

                </button>
            </div>

            <a href=""
                class="flex px-5 py-3 text-center font-normal text-white bg-black shadow-lg prevent group rounded-md hover:bg-gray-800 hover:scale-110 duration-300">
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
                class="absolute z-50 px-16 py-6 mt-52 transition-all duration-300 ease-in-out shadow-md bg-gray-50">
                <div class="flex flex-col items-end justify-end  pb-4 space-y-4 align-baseline mynav">
                    <a class="text-sm border-b font-semibold text-gray-400 duration-300 lg:mx-2 xl:mx-4 hover:text-black hover:scale-110"
                        href="/" @click="isOpen = false">&nbsp;Categories</a>

                    <a class="text-sm border-b font-semibold text-gray-400 duration-300 lg:mx-2 xl:mx-4 hover:text-black hover:scale-110"
                        href="/masterplans" @click="isOpen = false">&nbsp;Collections</a>
                    <a class="text-sm border-b font-semibold text-gray-400 duration-300 lg:mx-2 xl:mx-4 hover:text-black hover:scale-110"
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
