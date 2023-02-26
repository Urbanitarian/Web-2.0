<section>
    <div class="w-full pt-12">
        <a href="./masterplans"><h1 class="pt-4 pb-8 text-3xl font-bold text-center text-gray-900 md:text-5xl">Masterplans</h1></a>
        <div class="max-w-xl px-8 mb-6 sm:mx-auto sm:text-center md:mb-10 lg:max-w-4xl">
                      <p class="text-sm font-bold text-gray-700 md:text-lg pt-4">
                Discover Urban Design's Hidden Gems: Explore The Urbanitarian Masterplan Archive
            </p>
             <p class="text-ssm text-gray-500 md:text-lg">
                Get your daily dose of inspiration in our curated list of urban design projects from all around the world. Each project contains key insights along with useful diagrams, measurements and data
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


@forelse ($masterplans as $masterplan)
     <div class="p-4 swiper-slide">
                    <a href="masterplans_post?id={{ $masterplan->id }}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                             @php $image0 =   $masterplan->image ?? null; @endphp
                                <img class="h-[450px] w-full object-cover border-b saturate-120"
                                    src="{{ asset('storage/uploads/masterplans/' . $image0) }}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-3 mx-2 text-sm font-bold text-center truncate">{{ $masterplan->title }} | {{ $masterplan->author }} |
                                    {{ $masterplan->city }} </h1>
                                <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                    {{ $masterplan->category }}, {{ $masterplan->size }}  
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
@empty
     <div class="p-4 swiper-slide">
                    <a href="">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="h-[450px] w-full object-cover border-b"
                                    src="./img/empty.png" alt="">
                                <h1 class="pt-4 mx-8 font-bold text-center text-black">Empty</h1>
                                <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                   dummy
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
@endforelse
               



               

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