<section>
    <div class="w-full pt-12">
        <h1 class="pt-4 pb-8 text-3xl font-bold text-center text-gray-900 md:text-5xl">Masterplans</h1>
        <div class="max-w-xl mb-6 sm:mx-auto sm:text-center md:mb-10 lg:max-w-2xl">
            <p class="mx-8 text-base text-gray-700 md:text-lg">
                Samples of housing diagrams and schemes inspirations showing many ways of how residential areas can be
                developed.<br>
                Each example includes measurements, data and explanation of the project:.
            </p>
        </div>
    </div>
    <div x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,
    
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            1440: {
                slidesPerView: 4,
                spaceBetween: 0,
            },
        },
    })" class="relative flex flex-row w-10/12 mx-auto">
        <div class="absolute inset-y-0 left-0 z-10 flex items-center mb-4">
            <button @click="swiper.slidePrev()"
                class="flex items-center justify-center w-10 h-10 -ml-2 transition bg-black border rounded-full shadow lg:-ml-4 focus:outline-none hover:bg-gray-800 active:bg-black border-opacity-20">
                <svg viewBox="0 0 20 20" fill="white" class="w-6 h-6 chevron-left">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <div class="swiper-container" x-ref="container">
            <div class="my-8 swiper-wrapper">


                <div class="p-4 swiper-slide">
                    <a href="">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="h-[450px] w-full object-cover border-b"
                                    src="./img/M_DOUBLE-DUTCH_Stadstuin-1-1-scaled.jpg" alt="">
                                <h1 class="pt-4 mx-8 font-bold text-center text-black">KROYER PLADS | VLA+COBE |
                                    COPENHAGEN</h1>
                                <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                    Masterplans, small
                                </p>
                            </div>
                        </div>
                    </a>
                </div>



                <div class="p-4 swiper-slide">
                    <a href="">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="h-[450px] w-full object-cover border-b"
                                    src="./img/S_FCB-STUDIOS_Lime-Tree-Square-scaled.jpg" alt="">
                                <h1 class="pt-4 mx-8 font-bold text-center text-black">KROYER PLADS | VLA+COBE |
                                    COPENHAGEN</h1>
                                <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                    Masterplans, small
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="p-4 swiper-slide">
                    <a href="">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="h-[450px] w-full object-cover border-b"
                                    src="./img/S_HOLSCHER-NORDBERG_Strandlodsvej_web.jpg" alt="">
                                <h1 class="pt-4 mx-8 font-bold text-center text-black">KARTOFFELRAEKKERNE | OSTERBRO |
                                    COPENHAGEN</h1>
                                <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                    Masterplans, small
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="p-4 swiper-slide">
                    <a href="">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="h-[450px] w-full object-cover border-b"
                                    src="./img/S_HOLSCHER-NORDBERG_Strandlodsvej_web.jpg" alt="">
                                <h1 class="pt-4 mx-8 font-bold text-center text-black">LIME TREE SQUARE | FCB | STREET
                                    SOMERSET</h1>
                                <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                    Masterplans, xs
                                </p>
                            </div>
                        </div>
                    </a>
                </div>



                <div class="p-4 swiper-slide">
                    <a href="">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="h-[450px] w-full object-cover border-b"
                                    src="./img/S_Kartoffelraekkerne-scaled.jpg" alt="">
                                <h1 class="pt-4 mx-8 font-bold text-center text-black">LIME TREE SQUARE | FCB | STREET
                                    SOMERSET</h1>
                                <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                    Masterplans, xs
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <div class="absolute inset-y-0 right-0 z-10 flex items-center mb-4">
            <button @click="swiper.slideNext()"
                class="flex items-center justify-center w-10 h-10 -mr-2 transition bg-black border rounded-full shadow lg:-mr-4 focus:outline-none hover:bg-gray-800 active:bg-black border-opacity-20">
                <svg viewBox="0 0 20 20" fill="white" class="w-6 h-6 chevron-right">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>


    <button
        class="flex px-8 py-2 mx-auto mt-8 mb-20 text-lg text-white bg-black border-0 rounded focus:outline-none hover:bg-gray-800"><a
            href="./masterplans">
            See all Masterplans</a></button>
</section>
<script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>