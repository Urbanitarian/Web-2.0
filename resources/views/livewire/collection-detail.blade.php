<div>
    <div class="relative z-50 ">
        <div id="mysearch" class="py-8 -mt-[104px] px-6 bg-white border-t">
            <div class="flex flex-col flex-wrap gap-6 mx-4 md:mx-0" x-data="{ showFilter: false }">
                <div class="flex items-center justify-between gap-8">
                    <fieldset class="flex flex-wrap gap-2 md:gap-4" name="category">
                        <button id="masterplans" name="category" value="Masterplans" @click="active='masterplan'">
                            <p id="masterbtn"
                                class="px-4 py-2 font-[400] flex justify-between items-center rounded text-md  active:bg-gray-300"
                                :class="active == 'masterplan' ? ' text-white bg-gray-800' : 'hover:bg-gray-200 bg-white'">
                                <span>Masterplans</span><span class="pl-2 pr-1 font-thin">|</span> <a id="masternum"
                                    class="border-gray-400">
                                    &nbsp;{{ count($this->masters) }}</a>
                            </p>
                        </button>
                        <button id="streetscapes" name="category" value="Streetscapes" @click="active='streetscapes'">
                            <p id="streetbtn"
                                class="px-4 py-2 font-[400] flex justify-between items-center rounded text-md  active:bg-gray-300"
                                :class="active == 'streetscapes' ? ' text-white bg-gray-800' : 'hover:bg-gray-200 bg-white'">
                                <span>Streetscapes</span><span class="pl-2 pr-1 font-thin">|</span> <a id="streetnum"
                                    class="border-gray-400">
                                    &nbsp;{{ count($this->streets) }}</a>
                            </p>
                        </button>
                        <button id="urbanscapes" name="category" value="Neighbourhoods"
                            @click="active='neighbourhoods'">
                            <p id="urbanbtn"
                                class="px-4 py-2 font-[400] flex justify-between items-center rounded text-md  active:bg-gray-300"
                                :class="active == 'neighbourhoods' ? ' text-white bg-gray-800' : 'hover:bg-gray-200 bg-white'">
                                <span>Urbanscapes</span><span class="pl-2 pr-1 font-thin">|</span> <a id="urbannum"
                                    class="border-gray-400">
                                    &nbsp;{{ count($this->urbans) }}</a>
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
                        <select name="size" id="size_selector" data-te-select-init
                            data-te-select-clear-button="true" multiple multiple="multiple"
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



    <div data-barba="container" class="">
        <section class="block px-6 pb-8 tabset ">
            <div class="relative mx-auto">
                <div id="boucle" class="grid grid-cols-5 gap-5 mygrid lg:grid-cols-5 xl:grid-cols-5">
                    <div class="" x-show="active=masterplan">
                        master
                    </div>
                    <div class="" x-show="active=neighbourhoods">
                        urban
                    </div>
                    <div class="" x-show="active=streetscapes">
                        street
                    </div>
                </div>

            </div>
            @if (session()->has('FRONT_USER_LOGIN'))
                <div class="flex pt-8">
                    <button id="load_more" onclick="loadMore()"
                        class="flex px-2 py-2 mx-auto mt-4 mb-8 text-black transition-all bg-gray-100 border-2 rounded text-md focus:outline-none hover:bg-gray-400">
                        Load More Masterplans</button>

                </div>
            @endif
        </section>
    </div>
</div>
