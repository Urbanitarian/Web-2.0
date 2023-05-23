<section class="pt-10 border-b bg-gray-50">
    <div class="" x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            1440: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
        },
    })">
        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper">
                <div class="flex justify-between gap-8 swiper-slide">
                    <div class="flex flex-col">
                        <div class="flex gap-6">
                            <img src="{{ asset('storage/uploads/streetscapes/3c287868e68a249684e91f982f8acdd4.jpg') }}"
                                alt="" class="w-[30vh] h-[22vh] shadow-xl rounded-r-md mt-4">
                            <img src="{{ asset('storage/uploads/masterplans/M_MVRDV_Ipai_00.jpg') }}" alt=""
                                class="w-[25vh] h-[38vh] shadow-xl rounded-md z-50 mt-12">
                        </div>
                        <div class="flex gap-6">
                            <img src="{{ asset('storage/uploads/streetscapes/62e224afb66814e82be5eb68bde36650.jpg') }}"
                                alt="" class="w-[48vh] h-[27vh] shadow-xl rounded-r-md -mt-[120px]">
                            <img src="{{ asset('storage/uploads/masterplans/S_KPF_HudsonYards_00.jpg') }}"
                                alt="" class="w-[25vh] h-[38vh] shadow-xl rounded-md">
                        </div>

                    </div>
                    <div class="my-8">
                        <div class="p-8 md:p-12 lg:px-12 lg:py-10">

                            <div class="mx-auto text-center select-none lg:max-w-xl">
                                <h2 class="text-2xl font-bold text-gray-900 md:text-5xl whitespace-nowrap">
                                    Explore the database
                                </h2>

                                <p class="mt-6 text-base text-gray-500">
                                    Save hours of research with our library of 1000+ fully searchable urban design
                                    resource
                                </p>
                            </div>

                            <div class="flex items-center justify-center max-w-2xl mx-auto mt-8">

                                <a href="#"
                                    class="flex px-5 py-3 my-2 mt-2 font-normal text-center text-white duration-300 bg-gray-800 rounded shadow-lg hover:bg-black prevent lg:ml-4 group ">
                                    <span class="text-sm">Log in or sign up</span>
                                </a>
                                <a href="#"
                                    class="flex px-5 py-3 my-2 mt-2 font-normal text-center text-black duration-300 bg-white border-2 rounded shadow-lg prevent lg:ml-4 group hover:bg-gray-100 ">
                                    <span class="text-sm">Learn more</span>
                                </a>

                            </div>



                        </div>

                    </div>
                    <div class="flex flex-col">

                        <div class="flex mt-32 ">
                            <img src="{{ asset('storage/uploads/masterplans/S_KPF_HudsonYards_00.jpg') }}"
                                alt="" class="w-[24vh] h-[32vh] shadow-xl rounded-md -mr-56 ml-6 z-50">
                            <img src="{{ asset('storage/uploads/streetscapes/62e224afb66814e82be5eb68bde36650.jpg') }}"
                                alt="" class="w-[95vh] h-[27vh] shadow-xl -mr-28 ml-8 rounded-l-md -mt-[120px]">
                        </div>

                        <div class="flex">
                            <img src="{{ asset('storage/uploads/masterplans/S_KPF_HudsonYards_00.jpg') }}"
                                alt="" class="w-[24vh] h-[32vh] shadow-xl rounded-md -ml-36 -mt-24">
                            <img src="{{ asset('storage/uploads/streetscapes/62e224afb66814e82be5eb68bde36650.jpg') }}"
                                alt="" class="w-[45vh] h-[26vh] shadow-xl ml-8 rounded-l-md -mt-[120px] ">
                        </div>
                    </div>

                </div>
                <div class="flex justify-between gap-8 swiper-slide">
                    <div class="flex flex-col">
                        <div class="flex gap-6">
                            <img src="{{ asset('storage/uploads/streetscapes/3c287868e68a249684e91f982f8acdd4.jpg') }}"
                                alt="" class="w-[30vh] h-[22vh] shadow-xl rounded-r-md mt-4">
                            <img src="{{ asset('storage/uploads/masterplans/M_MVRDV_Ipai_00.jpg') }}" alt=""
                                class="w-[25vh] h-[38vh] shadow-xl rounded-md z-50 mt-12">
                        </div>
                        <div class="flex gap-6">
                            <img src="{{ asset('storage/uploads/streetscapes/62e224afb66814e82be5eb68bde36650.jpg') }}"
                                alt="" class="w-[48vh] h-[27vh] shadow-xl rounded-r-md -mt-[120px]">
                            <img src="{{ asset('storage/uploads/masterplans/S_KPF_HudsonYards_00.jpg') }}"
                                alt="" class="w-[25vh] h-[38vh] shadow-xl rounded-md">
                        </div>

                    </div>
                    <div class="my-8">
                        <div class="p-8 md:p-12 lg:px-12 lg:py-10">

                            <div class="mx-auto text-center select-none lg:max-w-xl">
                                <h2 class="text-2xl font-bold text-gray-900 md:text-5xl whitespace-nowrap">
                                    Explore the database
                                </h2>

                                <p class="mt-6 text-base text-gray-500">
                                    Save hours of research with our library of 1000+ fully searchable urban design
                                    resource
                                </p>
                            </div>

                            <div class="flex items-center justify-center max-w-2xl mx-auto mt-8">

                                <a href="#"
                                    class="flex px-5 py-3 my-2 mt-2 font-normal text-center text-white duration-300 bg-gray-800 rounded shadow-lg hover:bg-black prevent lg:ml-4 group hover:scale-110">
                                    <span class="text-sm">Log in or sign up</span>
                                </a>
                                <a href="#"
                                    class="flex px-5 py-3 my-2 mt-2 font-normal text-center text-black duration-300 bg-white rounded shadow-lg prevent lg:ml-4 group hover:bg-gray-100 hover:scale-110">
                                    <span class="text-sm">Learn more</span>
                                </a>

                            </div>



                        </div>

                    </div>
                    <div class="flex flex-col">

                        <div class="flex mt-32 ">
                            <img src="{{ asset('storage/uploads/masterplans/S_KPF_HudsonYards_00.jpg') }}"
                                alt="" class="w-[24vh] h-[32vh] shadow-xl rounded-md -mr-56 ml-6 z-50">
                            <img src="{{ asset('storage/uploads/streetscapes/62e224afb66814e82be5eb68bde36650.jpg') }}"
                                alt="" class="w-[95vh] h-[27vh] shadow-xl -mr-28 ml-8 rounded-l-md -mt-[120px]">
                        </div>

                        <div class="flex">
                            <img src="{{ asset('storage/uploads/masterplans/S_KPF_HudsonYards_00.jpg') }}"
                                alt="" class="w-[24vh] h-[32vh] shadow-xl rounded-md -ml-36 -mt-24">
                            <img src="{{ asset('storage/uploads/streetscapes/62e224afb66814e82be5eb68bde36650.jpg') }}"
                                alt="" class="w-[45vh] h-[26vh] shadow-xl ml-8 rounded-l-md -mt-[120px] ">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="relative z-50 ">
    <div id="mysearch" class="py-8 -mt-[104px] px-6 bg-white border-t">
        <div class="flex flex-col flex-wrap gap-6 mx-4 md:mx-0" x-data="{ showFilter: false }">
            <div class="flex items-center justify-between gap-8">
                <fieldset class="flex flex-wrap gap-2 md:gap-4" name="category" x-data="{ active: 'masterplan' }">
                    <button id="masterplans" name="category" value="Masterplans" @click="active='masterplan'">
                        <p id="masterbtn"
                            class="px-4 py-2 font-[400] flex justify-between items-center rounded text-md  active:bg-gray-300"
                            :class="active == 'masterplan' ? ' text-white bg-gray-800' : 'hover:bg-gray-200 bg-white'">
                            <span>Masterplans</span><span class="pl-2 pr-1 font-thin">|</span> <a id="masternum"
                                class="border-gray-400">
                                &nbsp;{{ $masternum }}</a>
                        </p>
                    </button>
                    <button id="streetscapes" name="category" value="Streetscapes" @click="active='streetscapes'">
                        <p id="streetbtn"
                            class="px-4 py-2 font-[400] flex justify-between items-center rounded text-md  active:bg-gray-300"
                            :class="active == 'streetscapes' ? ' text-white bg-gray-800' : 'hover:bg-gray-200 bg-white'">
                            <span>Streetscapes</span><span class="pl-2 pr-1 font-thin">|</span> <a id="streetnum"
                                class="border-gray-400">
                                &nbsp;{{ $streetnum }}</a>
                        </p>
                    </button>
                    <button id="urbanscapes" name="category" value="Neighbourhoods"
                        @click="active='neighbourhoods'">
                        <p id="urbanbtn"
                            class="px-4 py-2 font-[400] flex justify-between items-center rounded text-md  active:bg-gray-300"
                            :class="active == 'neighbourhoods' ? ' text-white bg-gray-800' : 'hover:bg-gray-200 bg-white'">
                            <span>Urbanscapes</span><span class="pl-2 pr-1 font-thin">|</span> <a id="urbannum"
                                class="border-gray-400">
                                &nbsp;{{ $urbannum }}</a>
                        </p>
                    </button>
                </fieldset>
                <div class="flex gap-2">

                    <button @click="showFilter=true" x-show="!showFilter"
                        class="flex items-center justify-center gap-2 px-2 py-2 text-sm font-medium border rounded hover:bg-gray-200 active:bg-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                        </svg>
                        <span>Show Filter</span>
                    </button>


                    <div class="flex gap-2" x-show="showFilter">
                        <button @click="showFilter=false"
                            class="flex items-center justify-center gap-2 px-2 py-2 text-sm font-medium border rounded hover:bg-gray-200 active:bg-gray-300">
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                            <span class="">Hide Filters</span>
                            <span class="p-0.5 rounded-full bg-black text-white w-6">5</span>
                        </button>
                        <button id="clear_all"
                            class="flex items-center justify-center gap-2 px-2 py-2 text-sm font-medium border rounded hover:bg-gray-200 active:bg-gray-300">
                            <span>Clear All</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                    </div>

                </div>

            </div>

            <div x-show="showFilter" class="grid grid-cols-5 gap-2 mx-4 mt-4 md:grid-cols-5 md:mx-0">
                <div class="block">
                    <label for="DeliveryStandard" class="flex justify-between text-sm">
                        <p class="pb-1 text-black">Tags</p>
                        <button class="flex items-center justify-center cursor-pointer">
                            <p class="pb-1 text-black">Clear</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mb-1 font-semibold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                    </label>
                    <select name="tags" id="tags_selector" data-te-select-init data-te-select-clear-button="true"
                        multiple multiple="multiple"
                        class="w-full h-12 px-4 py-8 text-sm border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                        {{-- <option value="">All</option> --}}
                        <option value="Accessible and Connected">Accessible and connected</option>
                        <option value="Affordable">Affordable</option>
                        <option value="Age-friendly">Age-friendly</option>
                        <option value="Biodiverse">Biodiverse</option>
                        <option value="Business District">Business District</option>
                        <option value="By the railway">By the railway</option>
                        <option value="By the water">By the water</option>
                        <option value="CBD">CBD</option>
                        <option value="Car-free">Car-free</option>
                        <option value="Carbon negative">Carbon negative</option>
                        <option value="Circular">Circular</option>
                        <option value="Climate adaptation">Climate adaptation</option>
                        <option value="Climate-proof">Climate-proof</option>
                        <option value="Climate-neutral">Climate-neutral</option>
                        <option value="Child-friendly">Child-friendly</option>
                        <option value="Co-Housing">Co-housing</option>
                        <option value="Complete Street">Complete Street</option>
                        <option value="Courtyards">Courtyards</option>
                        <option value="DIY Urbanism">DIY Urbanism</option>
                        <option value="Dense">Dense</option>
                        <option value="Eco-village">Eco-village</option>
                        <option value="Floating City">Floating City</option>
                        <option value="Food-production">Food-production</option>
                        <option value="Garden City">Garden City</option>
                        <option value="Green">Green</option>
                        <option value="Green wedges">Green wedges</option>
                        <option value="Healthy">Healthy</option>
                        <option value="High-rise">High-rise </option>
                        <option value="Hi-Tech">Hi-Tech</option>
                        <option value="Houses in row">Houses in row</option>
                        <option value="Inclusive and Diverse">Inclusive and Diverse</option>
                        <option value="Low-rise">Low-rise</option>
                        <option value="Mixed-use">Mixed-use</option>
                        <option value="Modular">Modular</option>
                        <option value="Nature-rich">Nature-rich</option>
                        <option value="Net zero">Net zero</option>
                        <option value="Outdoor classroom">Outdoor classroom</option>
                        <option value="Place-led">Place-led</option>
                        <option value="Playful">Playful</option>
                        <option value="Preventing Loneliness">Preventing Loneliness</option>
                        <option value="Productive landscape">Productive landscape</option>
                        <option value="Reachable">Reachable</option>
                        <option value="Resilient landscape">Resilient landscape</option>
                        <option value="Regeneration">Regeneration</option>
                        <option value="Safe">Safe</option>
                        <option value="Science Park">Science Park</option>
                        <option value="Schoolyards">Schoolyards</option>
                        <option value="Self-sufficient">Self-sufficient</option>
                        <option value="Social Housing">Social housing</option>
                        <option value="Solar Powered">Solar Powered</option>
                        <option value="Timber">Timber</option>
                        <option value="Transformation">Transformation</option>
                        <option value="TOD">TOD</option>
                        <option value="WSUD">WSUD</option>
                        <option value="Youth-friendly">Youth-friendly</option>
                        <option value="Zero carbon">Zero carbon</option>
                    </select>
                </div>

                <div class="block">
                    <label for="DeliveryStandard" class="flex justify-between text-sm">
                        <p class="pb-1 text-black">Size</p>
                        <button class="flex items-center justify-center cursor-pointer">
                            <p class="pb-1 text-black">Clear</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mb-1 font-semibold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                    </label>
                    <select name="size" id="size_selector" data-te-select-init data-te-select-clear-button="true"
                        multiple multiple="multiple"
                        class="w-full px-4 pt-6 text-sm border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                        <option value="">All</option>
                        <option value="XXXXL">XXXXL</option>
                        <option value="XXXL">XXXL</option>
                        <option value="XXL">XXL</option>
                        <option value="XL">XL</option>
                        <option value="L">L</option>
                        <option value="M">M</option>
                        <option value="S">S</option>
                        <option value="XS">XS</option>
                        <option value="XXS">XXS</option>
                        <option value="XXXS">XXXS</option>
                    </select>
                </div>

                <div class="block">
                    <label for="DeliveryStandard" class="block text-sm">
                        <p class="pb-1 text-black">Status</p>
                    </label>
                    <select name="status" id="status_selector"
                        class="w-full px-4 py-2 text-sm border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                        <option value="">All</option>
                        <option value="built">Built</option>
                        <option value="future">Future</option>
                        <option value="under_development">Under
                            development</option>
                        <option value="regeneration">Regeneration</option>
                    </select>
                </div>

                <div class="block">
                    <label for="DeliveryStandard" class="block text-sm">
                        <p class="pb-1 text-black">City</p>
                    </label>
                    <select name="city" id="city_selector"
                        class="w-full px-4 py-2 text-sm border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                        <option value="">All</option>
                        @foreach ($cities->sortBy('name') as $city)
                            <option value="{{ $city->name }}">
                                {{ $city->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="block">
                    <label for="DeliveryStandard" class="block text-sm">
                        <p class="pb-1 text-black">Country</p>
                    </label>
                    <select name="country" id="country_selector"
                        class="w-full px-4 py-2 text-sm transition bg-white border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                        <option value="">All</option>
                        @foreach ($countries->sortBy('name') as $country)
                            <option value="{{ $country->name }}">
                                {{ $country->name }}</option>
                        @endforeach

                    </select>
                </div>

            </div>




            <div class="flex items-center justify-between gap-8">

                <div class="hidden pb-4 md:flex md:pb-0">
                    <span class="mt-2 mr-2">Sort by:</span>
                    <select name="popular" id="pop_selector"
                        class="px-4 h-[40px] text-sm bg-white border-gray-200 rounded-md
                         border focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                        <option value="">Popular</option>
                        <option value="new">The Newest</option>
                        <option value="old">The Oldest</option>
                    </select>
                </div>

                <div class="text-gray-400">
                    Showing 15 items
                </div>

                <div class="items-center justify-between py-4 md:flex md:py-0 md:mt-2 lg:mt-0">
                    <span class="mr-2">View by:</span>
                    <div class="flex gap-0">
                        <button id="change-layout" onclick="return false;"
                            class="flex items-center justify-center gap-2 px-2 py-2 text-sm font-medium border border-r-0 rounded-l hover:bg-gray-200 active:bg-gray-300">
                            <i class="transition fa-solid fa-th-large fa-1x hover:text-gray-400"></i>Grid
                        </button>

                        <button id="change-layout3" onclick="return false;"
                            class="flex items-center justify-center gap-2 px-2 py-2 text-sm font-medium border rounded-tr-md rounded-br-md hover:bg-gray-200 active:bg-gray-300">
                            <i class="transition fa-solid fa-map fa-1x hover:text-gray-400"></i>Map
                        </button>

                    </div>

                </div>


            </div>

        </div>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>


    </div>
</div>



<div data-barba="container">
    <section class="block px-6 pb-8 tabset ">
        <div class="mx-auto ">
            <div id="boucle" class="grid grid-cols-5 gap-5 mygrid lg:grid-cols-5 xl:grid-cols-5">

            </div>

        </div>
        <div class="flex pt-10">
            <button id="load_more" onclick="window.scrollTo(0, 400);"
                class="flex items-center justify-center px-3 py-2 mx-auto text-gray-900 border border-gray-300 rounded-md cursor-pointer hover:border-gray-300 hover:bg-gray-200 active:bg-gray-500 active:text-white peer-checked:text-white">
                <p class="text-sm font-medium">Load More</p>
            </button>
        </div>
    </section>
</div>
<script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"
    integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
<script>
    const itemsPerPage = 15;
    let category = "masterplans";
    let currentcategory = "";
    let currenturl = "";
    let view = "grid";
    currentPage = 1;
    let currentfilter = "";
    let url = "";

    $(document).ready(function() {
        url = "api/data?category=masterplans";
        currenturl = url;
        $('#boucle').empty();
        currentfilter = "none";
        fetchAndRenderData(url);
        console.log(currenturl);
    });


    $("#next").click(function() {
        $('#boucle').empty();
        currentPage++;
        if (currentPage > totalPages) {
            currentPage = totalPages;
        }

        fetchAndRenderData(url);
    });

    $("#prev").click(function() {
        $('#boucle').empty();
        currentPage--;
        if (currentPage < 1) {
            currentPage = 1;
        }

        fetchAndRenderData(url);
    });

    const fetchAndRenderData = (url) => {
        console.log(currenturl);
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                console.log(currentPage);
                const obj = JSON.parse(JSON.stringify(out));
                let textFromJSON = obj;
                let num = textFromJSON.length;
                totalPages = Math.ceil(textFromJSON.length / itemsPerPage);
                const startIndex = (currentPage - 1) * itemsPerPage;
                const endIndex = startIndex + itemsPerPage;
                const itemsToDisplay = textFromJSON.slice(startIndex, endIndex);
                if (currentPage == totalPages) {
                    $('#next').hide();
                } else {
                    $('#next').show();
                }
                if (currentPage == 1) {
                    $('#prev').hide();
                } else {
                    $('#prev').show();
                }
                if (view == "grid") {
                    $.each(itemsToDisplay, function(i, item) {
                        if (item.category == "Masterplans") {

                            btn1 = document.getElementById("masterbtn");
                            btn1.classList.add("bg-black", "text-white");
                            btn2 = document.getElementById("streetbtn");
                            btn2.classList.remove("bg-black", "text-white");
                            btn3 = document.getElementById("urbanbtn");
                            btn3.classList.remove("bg-black", "text-white");


                            iconToShow(item.id, 'master');


                            let html =
                                `
                        <div class="relative flex flex-col " x-data="{visibleBtn: false}">
                        <div @mouseleave="visibleBtn=false">
                       <div x-cloak x-show="visibleBtn">
                          <button onclick="saveCollection(${item.id}, 'master')"  class="bg-black py-2 hover:bg-black flex gap-2 justify-center shadow items-center absolute mt-2 w-38 rounded ml-[80px] text-white px-3 z-50">
                            <span id="card${item.id}"></span><span class="text-sm whitespace-nowrap">Save to Collection</span></button>
                     </div>

                     <div @mouseenter="visibleBtn=true" class="relative overflow-hidden transition-all border rounded-md shadow hover:shadow-xl saturate-120 animate__animated animate__backInLeft">
                           <a  href="masterplans_post?id=${item.id}" class="flex flex-col h-full duration-300 hover:opacity-75">
                            <img alt="Art" src="storage/uploads/thumbnails/masterplans/${item.image}"alt=""
                                onerror="this.src='storage/uploads/masterplans/${item.image}'" class="object-cover  h-full saturate-120 max-h-[480px]" />
                                <div class="bg-white rounded text-sm font-medium p-0.5 w-8 border-2 ml-4 text-black -mt-10 mb-8 z-50 text-center">${item.size}</div>
                            <div class="">
                                <h3 class="mx-2 mt-1 text-sm font-bold truncate">
                                    ${item.title}

                                </h3>
                                <div class="max-w-sm mx-2 mt-1 text-sm text-gray-500 truncate">
                                      ${item.author} &nbsp;

                                </div>

                             </div>

                    <div class="flex items-center justify-between px-2 pb-2 text-sm text-gray-500">
                            <span> ${item.city},  ${item.country}</span>
                            <div class="flex items-center justify-center gap-2">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            ${item.views}
                        </div>
                        </div>
                    </a>
                </div>
                 </div>
            </div>
                     `;

                            $('#boucle').append(html);
                        } else if (item.category == "Urbanscapes") {
                            btn1 = document.getElementById("masterbtn");
                            btn1.classList.remove("bg-black", "text-white");
                            btn2 = document.getElementById("streetbtn");
                            btn2.classList.remove("bg-black", "text-white");
                            btn3 = document.getElementById("urbanbtn");
                            btn3.classList.add("bg-black", "text-white");

                            iconToShow(item.id, 'urban');

                            let html = `
                     <div class="relative overflow-hidden transition border shadow-sm rounded  saturate-120 animate__animated animate__backInRight hover:opacity-75 hover:shadow-xl hover:border-black"  x-data="{visibleBtn: false}">
                        <div @mouseleave="visibleBtn=false">
                     <div x-cloak x-show="visibleBtn">
                          <button onclick="saveCollection(${item.id}, 'urban')"  class="bg-black py-2 hover:bg-black flex gap-2 justify-center shadow items-center absolute mt-2 w-38 rounded ml-[80px] text-white px-3 z-50">
                            <span id="card${item.id}"></span><span class="text-sm whitespace-nowrap">Save to Collection</span></button>
                    </div>

                        <a  @mouseenter="visibleBtn=true" href="urbanscapes_post?id=${item.id}" class="flex flex-col  h-full duration-300">
                            <img alt="Art" src="storage/uploads/thumbnails/urbanscapes/${item.imagea}"alt=""
                              onerror="this.src='storage/uploads/urbanscapes/${item.imagea}'" class="object-cover h-full  saturate-120 max-h-[480px]" />
                              <div class="bg-white rounded text-sm font-medium p-0.5 w-8 border-2 ml-4 text-black -mt-10 mb-8 z-50 text-center">${item.size}</div>
                            <div class="">
                                <h3 class="mx-4 mt-2 text-sm font-bold text-center truncate">
                                    ${item.title}</h3>
                                <p class="max-w-sm pb-2 mx-6 mt-1 mb-2 text-xs text-center text-gray-700 truncate">
                                      ${item.category} &nbsp;
                                          ${item.tags.map(tag => `${tag}`).join(' &nbsp;')}
                                </p>
                            </div>
                        </a>
                    </div>
                     `;
                            $('#boucle').append(html);
                        } else if (item.category == "Streetscapes") {
                            btn1 = document.getElementById("masterbtn");
                            btn1.classList.remove("bg-black", "text-white");
                            btn2 = document.getElementById("streetbtn");
                            btn2.classList.add("bg-black", "text-white");
                            btn3 = document.getElementById("urbanbtn");
                            btn3.classList.remove("bg-black", "text-white");
                            thegrid = document.getElementById("boucle");
                            thegrid.classList.remove("xl:grid-cols-5");

                            iconToShow(item.id, 'street');

                            let html = `
                    <div
                        class="relative overflow-hidden transition border col-span-2 rounded-md shadow-sm  element1 hover:border-black saturate-120 animate__animated animate__backInUp"  x-data="{visibleBtn: false}">
                        <div @mouseleave="visibleBtn=false">
                     <div x-cloak x-show="visibleBtn">
                          <button onclick="saveCollection(${item.id}, 'street')"  class="bg-black py-2 hover:bg-black flex gap-2 justify-center shadow items-center absolute mt-2 w-38 rounded ml-[490px] text-white px-3 z-50">
                            <span id="card${item.id}"></span><span class="text-sm whitespace-nowrap">Save to Collection</span></button>
                    </div>
                        <a  @mouseenter="visibleBtn=true" href="streetscapes_post?id=${item.id}" class="flex flex-col h-full duration-300 hover:opacity-50">
                            <img alt="Art" src="storage/uploads/thumbnails/streetscapes/${item.imagea}"alt=""
                                onerror="this.src='storage/uploads/streetscapes/${item.imagea}'" class="object-cover h-full  saturate-120 max-h-[480px]" />
                                <div class="bg-white rounded text-sm font-medium p-0.5 w-8 border-2 ml-4 text-black -mt-10 mb-8 z-50 text-center">${item.size}</div>
                            <div class="flex items-center justify-between px-3">
                                <h3 class="mt-4 text-sm font-semibold text-left text-gray-600">
                                    ${item.title}</h3>
                                    </div>
                                    <div class="flex items-center justify-between px-3 pt-0.5 pb-1">

                                <p class="text-sm text-left text-gray-500 truncate font-regular">
                                   ${item.address}, ${item.city}, ${item.country}
                                </p>
                                <div class="flex items-end justify-end gap-2 text-xs text-gray-500">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            ${item.views}
                        </div>

                            </div>
                        </a>
                    </div>`;
                            $('#boucle').append(html);
                        }
                    })
                } else {
                    $(".mygrid").removeClass("lg:grid-cols-4").removeClass("xl:grid-cols-5").removeClass(
                        "grid-cols-3").removeClass("grid-cols-2").addClass("grid-cols-1").addClass(
                        "lg:grid-cols-1").addClass("xl:grid-cols-1").removeClass("gap-5");
                    let html =
                        `<section id='themap' class='flex w-full pb-16 mx-auto border-b'><div id='map2' class='mx-2 mt-4 rounded h-[650px] w-screen'></div></section>`;
                    $('#boucle').append(html);

                    fetch(url)
                        .then((resa) => resa.json())
                        .then((outa) => {
                            const obja = JSON.parse(JSON.stringify(outa));
                            let thedata = obja;

                            amarkers = {};

                            let mymap2 = L.map('map2').setView([48.6890, 11.14086], 2);
                            theosmLayer = L.tileLayer(
                                'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                                    maxZoom: 19,
                                    apikey: 'choisirgeoportail',
                                    format: 'image/jpeg',
                                    style: 'normal'
                                }).addTo(mymap2);
                            mymap2.addLayer(theosmLayer);
                            mymap2.touchZoom.enable();
                            mymap2.scrollWheelZoom.disable();

                            let counter = 0;
                            for (let i = 0; i < thedata.length; i++) {
                                counter = counter + 1;
                                mydata = thedata[i];
                                mydatacat = mydata.category.toLowerCase();
                                //mydatacat to lower case
                                if (mydatacat == "masterplans") {
                                    mypics = mydata.image;
                                } else {
                                    mypics = mydata.imagea;
                                }
                                category = mydata.category.toLowerCase();
                                if (category == 'streetscapes') {
                                    cat = 1;
                                } else if (category == 'masterplans') {
                                    cat = 2;
                                } else if (category == 'urbanscapes') {
                                    cat = 3;
                                }

                                mydataid = mydata.id;
                                mydatacity = mydata.city;
                                mydataname = mydata.title;
                                mydataposition = mydata.location;
                                var decimalStringa = [0, 0];
                                if (mydataposition != null) {
                                    decimalStringa = mydataposition.split(',');
                                }
                                decimalStringa[0] = parseFloat(decimalStringa[0]).toFixed(6);
                                decimalStringa[1] = parseFloat(decimalStringa[1]).toFixed(6);

                                markera = L.marker([decimalStringa[0], decimalStringa[1]], {}).addTo(mymap2)
                                    .bindPopup(
                                        '<div class="relative flex flex-col mappopup"><img onclick="myfunction(' +
                                        mydataid + ',' + cat +
                                        ')" class="mt-4" src="/storage/uploads/' + mydatacat + '/' +
                                        mypics +
                                        '" /><div class="flex justify-between"><h1 class="mt-1 mb-2 font-bold clamp" id="mydatanom">' +
                                        mydataname +
                                        '</h1><h1 class="pb-4 mt-1 mb-2 text-xs text-gray-500" id="mydatacity">' +
                                        mydatacity + '</h1></div></div>'
                                    );
                                amarkers[mydata.id] = markera;
                            }

                        })

                }

            })
    };

    $('#clear_all').click(function() {
        $('#city_selector').val('');
        $('#country_selector').val('');
        $('#status_selector').val('');
        $('#size_selector').val('');
        $('#tags_selector').val('');

    });



    $('#masterplans').click(function() {
        //reset all selector to default values
        $('#city_selector').val('');
        $('#country_selector').val('');
        $('#status_selector').val('');
        $('#size_selector').val('');
        $('#tags_selector').val('');
        currentPage = 1;
        resetLayout();
        url = "api/data?category=masterplans";
        currenturl = url;
        $('#boucle').empty();
        currentfilter = "masterplans";
        category = "masterplans";

        fetchAndRenderData(url);
    });

    $('#urbanscapes').click(function() {
        $('#city_selector').val('');
        $('#country_selector').val('');
        $('#status_selector').val('');
        $('#size_selector').val('');
        $('#tags_selector').val('');
        currentPage = 1;
        resetLayout();
        url = "api/data?category=urbanscapes";
        currenturl = url;
        $('#boucle').empty();
        currentfilter = "urbanscapes";
        category = "urbanscapes";

        fetchAndRenderData(url);
    });

    $('#streetscapes').click(function() {
        $('#city_selector').val('');
        $('#country_selector').val('');
        $('#status_selector').val('');
        $('#size_selector').val('');
        $('#tags_selector').val('');
        currentPage = 1;
        resetLayout();
        url = "api/data?category=streetscapes";
        currenturl = url;

        $('#boucle').empty();
        currentfilter = "streetscapes";
        category = "streetscapes";
        fetchAndRenderData(url);
    });

    $('#tags_selector').change(function() {
        console.log('asda');
        console.log($('#tags_selector').val());
        currentPage = 1;
        currentcategory = category;
        url = "api/data?category=" + currentcategory + "&tags=" + $('#tags_selector').val();
        currenturl = url;
        $('#boucle').empty();
        currentfilter = $('#tags_selector').val();
        fetchAndRenderData(url);
    });

    $('#size_selector').change(function() {
        currentPage = 1;
        currentcategory = category;
        url = "api/data?category=" + currentcategory + "&size=" + $('#size_selector').val();
        currenturl = url;
        $('#boucle').empty();
        currentfilter = $('#size_selector').val();
        fetchAndRenderData(url);
    });

    $('#status_selector').change(function() {
        currentPage = 1;
        currentcategory = category;
        url = "api/data?category=" + currentcategory + "&status=" + $('#status_selector').val();
        currenturl = url;
        $('#boucle').empty();
        currentfilter = $('#status_selector').val();
        fetchAndRenderData(url);
    });

    $('#city_selector').change(function() {
        currentPage = 1;
        currentcategory = category;
        url = "api/data?category=" + currentcategory + "&city=" + $('#city_selector').val();
        currenturl = url;
        $('#boucle').empty();
        currentfilter = $('#city_selector').val();
        fetchAndRenderData(url);
    });

    $('#country_selector').change(function() {
        currentPage = 1;
        currentcategory = category;
        url = "api/data?category=" + currentcategory + "&country=" + $('#country_selector').val();
        currenturl = url;
        $('#boucle').empty();
        currentfilter = $('#country_selector').val();
        fetchAndRenderData(url);
    });

    $('#pop_selector').change(function() {
        currentPage = 1;
        currentcategory = category;
        url = "api/data?category=" + currentcategory + "&pop=" + $('#pop_selector').val();
        currenturl = url;
        $('#boucle').empty();
        currentfilter = $('#pop_selector').val();
        fetchAndRenderData(url);
    });


    $('#searchbar').keyup(function() {
        currentPage = 1;
        currentcategory = category;
        resetLayout();
        url = "api/data?cat=" + currentcategory + "&q=" + $('#searchbar').val();
        currenturl = url;
        $('#boucle').empty();
        currentfilter = $('#searchbar').val();
        fetchAndRenderData(url);
    });


    layout = null;

    function resetLayout() {

        $(".mygrid").addClass("lg:grid-cols-4").addClass("xl:grid-cols-5").addClass("grid-cols-3").addClass(
                "gap-5").removeClass("lg:grid-cols-2").removeClass("xl:grid-cols-3").removeClass("grid-cols-2")
            .removeClass("grid-cols-1").removeClass("lg:grid-cols-1").removeClass("xl:grid-cols-1");
        layout = "xl";

    }



    $("#change-layout").click(function() {
        view = "grid";
        $("#themap").remove();
        fetchAndRenderData(url);
        $(".mygrid").addClass("lg:grid-cols-4").addClass("xl:grid-cols-5").addClass("grid-cols-3").addClass(
                "gap-5").removeClass("lg:grid-cols-2").removeClass("xl:grid-cols-3").removeClass("grid-cols-2")
            .removeClass("grid-cols-1").removeClass("lg:grid-cols-1").removeClass("xl:grid-cols-1");

        layout = "xl";
        console.log(layout);
    });

    $("#change-layout2").click(function() {
        $("#themap").remove();
        fetchAndRenderData(url);
        $(".mygrid").removeClass("lg:grid-cols-4").removeClass("xl:grid-cols-5").removeClass("grid-cols-3")
            .removeClass("grid-cols-1").removeClass("lg:grid-cols-1").removeClass("xl:grid-cols-1").addClass(
                "grid-cols-2").addClass("lg:grid-cols-2").addClass("xl:grid-cols-3").addClass("gap-5");

        layout = "medium";
        console.log(layout);
    });



    // $(".js-select2").select2({
    //     closeOnSelect: false,
    //     placeholder: "Click to select an option",
    //     allowHtml: true,
    //     templateSelection: formatOption,
    // });

    // $('.icons_select2').select2({
    //     width: "100%",
    //     templateSelection: iformat,
    //     templateResult: iformat,
    //     allowHtml: true,
    //     placeholder: "Click to select an option",
    //     dropdownParent: $('.select-icon'), //Ð¾Ð±Ð°Ð²Ð¸Ð»Ð¸ ÐºÐ»Ð°ÑÑ
    //     allowClear: true,
    //     multiple: false
    // });

    function saveCollection(id, type) {
        $.ajax({
            url: '{{ route('save.collection') }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id: id,
                type: type
            },
            success: function(response) {

                if (response.status == 'yes') {
                    document.getElementById('card' + id).innerHTML =
                        '<i class="fa fa-check" aria-hidden="true"></i>';
                } else {
                    alert('Please login first!');
                }

            }
        })


    }

    function iconToShow(id, type) {

        $.ajax({
            url: '{{ route('check.collection') }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id: id,
                type: type,
            },
            success: function(response) {

                document.getElementById('card' + response.id).innerHTML = response.status;

            }
        })
    }




    const multiSelect = document.querySelector("#tags_selector");
    const multiSelectInstance = te.Select.getInstance(multiSelect);
    const multiSelect2 = document.querySelector("#size_selector");
    const multiSelectInstance2 = te.Select.getInstance(multiSelect2);




    function iformat(icon, badge, ) {
        var originalOption = icon.element;
        var originalOptionBadge = $(originalOption).data('badge');

        return $('<span><i class="fa ' + $(originalOption).data('icon') + '"></i> ' + icon.text +
            '<span class="badge">' + originalOptionBadge + '</span></span>');
    }

    function formatOption(option) {

        return $('<span>' + option.text + '</span>');
    }



    $("#change-layout3").click(function() {
        view = "map";
        $("#boucle").empty();
        $(".mygrid").removeClass("lg:grid-cols-4").removeClass("xl:grid-cols-5").removeClass("grid-cols-3")
            .removeClass("grid-cols-2").addClass("grid-cols-1").addClass("lg:grid-cols-1").addClass(
                "xl:grid-cols-1").removeClass("gap-5");
        $("#boucle").html(
            "<section id='themap' class='flex w-full pb-16 mx-auto border-b'><div id='map2' class='mx-2 mt-4 rounded h-[650px] w-screen'></div></section>"
        );


        layout = "map";

        fetch(url)
            .then((resa) => resa.json())
            .then((outa) => {
                const obja = JSON.parse(JSON.stringify(outa));
                let thedata = obja;

                amarkers = {};

                let mymap2 = L.map('map2').setView([48.6890, 11.14086], 2);
                theosmLayer = L.tileLayer(
                    'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                        maxZoom: 19,
                        apikey: 'choisirgeoportail',
                        format: 'image/jpeg',
                        style: 'normal'
                    }).addTo(mymap2);
                mymap2.addLayer(theosmLayer);
                mymap2.touchZoom.enable();
                mymap2.scrollWheelZoom.disable();
                var legend = L.control({
                    position: "topright"
                });
                legend.onAdd = function(mymap2) {
                    var div = L.DomUtil.create("div", "legend bg-gray-200 p-2 border rounded");
                    div.innerHTML +=
                        '<span class="relative"><span class="inline-block ml-6 font-bold">Masterplans</span><span class="absolute left-0 block w-4 h-4 transform -translate-y-1/2 bg-[#4863DA] top-1/2"></span></span><br>';
                    div.innerHTML +=
                        '<span class="relative"><span class="inline-block ml-6 font-bold">Streetscapes</span><span class="absolute left-0 block w-4 h-4 transform -translate-y-1/2 bg-[#D95649] top-1/2"></span></span><br>';
                    div.innerHTML +=
                        '<span class="relative"><span class="inline-block ml-6 font-bold">Urbanscapes</span><span class="absolute left-0 block w-4 h-4 transform -translate-y-1/2 bg-[#63D74B] top-1/2"></span></span><br>';
                    return div;
                };
                legend.addTo(mymap2);
                let counter = 0;
                for (let i = 0; i < thedata.length; i++) {
                    counter = counter + 1;
                    mydata = thedata[i];
                    mydatacat = mydata.category.toLowerCase();
                    //mydatacat to lower case
                    if (mydatacat == "masterplans") {
                        mypics = mydata.image;
                    } else {
                        mypics = mydata.imagea;
                    }
                    category = mydata.category.toLowerCase();
                    if (category == 'streetscapes') {
                        cat = 1;
                        icon = L.icon({
                            iconUrl: '/img/markers.png',
                            iconSize: [40, 40],
                            iconAnchor: [20, 40],
                            popupAnchor: [0, -40]
                        });
                    } else if (category == 'masterplans') {
                        cat = 2;
                        icon = L.icon({
                            iconUrl: '/img/markerm.png',
                            iconSize: [40, 40],
                            iconAnchor: [20, 40],
                            popupAnchor: [0, -40]
                        });
                    } else if (category == 'urbanscapes') {
                        cat = 3;
                        icon = L.icon({
                            iconUrl: '/img/markeru.png',
                            iconSize: [40, 40],
                            iconAnchor: [20, 40],
                            popupAnchor: [0, -40]
                        });
                    }

                    mydataid = mydata.id;
                    mydatacity = mydata.city;
                    mydataname = mydata.title;
                    mydataposition = mydata.location;
                    var decimalStringa = [0, 0];
                    if (mydataposition != null) {
                        decimalStringa = mydataposition.split(',');
                    }
                    decimalStringa[0] = parseFloat(decimalStringa[0]).toFixed(6);
                    decimalStringa[1] = parseFloat(decimalStringa[1]).toFixed(6);

                    markera = L.marker([decimalStringa[0], decimalStringa[1]], {
                        icon: icon
                    }).addTo(mymap2).bindPopup(
                        '<div class="relative flex flex-col mappopup"><img onclick="myfunction(' +
                        mydataid + ',' + cat +
                        ')" class="mt-4" src="/storage/uploads/' + mydatacat + '/' + mypics +
                        '" /><div class="flex justify-between"><h1 class="mt-1 mb-2 font-bold clamp" id="mydatanom">' +
                        mydataname +
                        '</h1><h1 class="pb-4 mt-1 mb-2 text-xs text-gray-500" id="mydatacity">' +
                        mydatacity + '</h1></div></div>'
                    );
                    amarkers[mydata.id] = markera;
                }
            })
    });
</script>
<style>
    .clamp {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;

    }


    .select2-container--default .select2-results>.select2-results__options {
        max-height: 400px;
    }

    .select2-container--default .select2-selection--multiple {
        padding: 5px 5px;
        border: 1px solid #e5e7eb;
        border-radius: 0.375rem;
    }

    .select2-container--default.select2-container--focus .select2-selection--multiple {
        border: none;
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(156 163 175 / var(--tw-ring-opacity));
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    }

    .select2-container--default.select2-container--focus .select2-selection--multiple:focus {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(156 163 175 / var(--tw-ring-opacity));
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    }

    .select2-results__option[aria-selected=true]:before {
        font-family: 'fontAwesome';
        content: "\f00c";
        color: #fff;
        background-color: #0a0a0a;
        border: 0;
        display: inline-block;
        padding: 0;
        line-height: 1.2;
        padding-left: 2px;
    }

    .select2-results__option:before {
        content: "";
        display: inline-block;
        position: relative;
        height: 20px;
        width: 20px;
        border: 2px solid rgba(0, 0, 0, 0.2);
        border-radius: 4px;
        background-color: transparent;
        margin-right: 15px;
        margin-left: 10px;
        vertical-align: middle;
    }

    .select2-container--open .select2-dropdown--below {
        padding: 10px 0;
        border-radius: 4px;
        border: none;
        -webkit-box-shadow: 0px 3px 22px -15px rgba(0, 0, 0, 0.63);
        -moz-box-shadow: 0px 3px 22px -15px rgba(0, 0, 0, 0.63);
        box-shadow: 0px 3px 22px -15px rgba(0, 0, 0, 0.63);
    }

    .select2-results__option {
        padding-right: 20px;
        vertical-align: middle;
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #fff;
        color: #000;
    }

    .select2-container--default .select2-results__option[aria-selected=true] {
        background-color: transparent;
        color: #000;
    }

    .select2-results__option[aria-selected] {
        color: #616161;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__clear {
        color: red;
    }
</style>
