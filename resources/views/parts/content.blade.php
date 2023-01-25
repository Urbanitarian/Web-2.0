<div class="border-b border-gray-300"></div>
@php
    $size = urldecode(request()->get('size'));
    $tags = urldecode(request()->get('tags'));
    $status = urldecode(request()->get('status'));
    $popular = urldecode(request()->get('popular'));
    $city = urldecode(request()->get('city'));
    $country = urldecode(request()->get('country'));
    $category = urldecode(request()->get('category'));
@endphp

<form id="mysearch" class="pt-4 pb-8 mx-2 bg-white md:mx-16" method="get"  action="{{ route('filter') }}#mysearch">
<button type="submit"></button>
    <div class="flex flex-wrap justify-between py-4 mx-4 md:mx-0">
        <div class="pb-4 md:pb-0">
            <select name="popular" onchange="this.form.submit();"
                class=" px-4 h-[40px] text-sm bg-white border-gray-200 rounded-md  border focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                <option value="">Popular</option>
                <option value="new" {{ $popular == 'new' ? 'selected' : '' }}>The Newest</option>
                <option value="old" {{ $popular == 'old' ? 'selected' : '' }}>The Oldest</option>
            </select>
        </div>

        <div class="flex pt-1 md:hidden md:py-0">
            <button id="change-layouts" onclick="return false;"> <i
                    class="mx-2 text-gray-200 fa-solid fa-list fa-2x hover:text-gray-400"></i></button>
            <button id="change-layouts2" onclick="return false;"> <i
                    class="mr-2 text-gray-200 fa-solid fa-border-all fa-2x hover:text-gray-400"></i></button>
            <button id="change-layouts3" onclick="return false;"><i
                    class="text-gray-200 fa-solid fa-map fa-2x hover:text-gray-400"></i></button>
        </div>


        <fieldset class="flex flex-wrap gap-2 md:gap-4" name="category">
            <button name="category" value="All" >
                <p class="text-sm font-medium px-4 py-2 border rounded {{ $category == '' ? 'bg-gray-400 text-white' : '' }} {{ $category == 'All' ? 'bg-gray-400 text-white' : '' }}">All</p>
            </button>
             <button name="category" value="Masterplans">
                <p class="text-sm font-medium px-4 py-2 border rounded {{ $category == 'Masterplans' ? 'bg-gray-400 text-white' : '' }} ">Masterplans</p>
            </button>
             <button name="category" value="Streetscapes">
                <p class="text-sm font-medium px-4 py-2 border rounded {{ $category == 'Streetscapes' ? 'bg-gray-400 text-white' : '' }} ">Streetscapes</p>
            </button>
             <button name="category" value="Neighbourhoods">
                <p class="text-sm font-medium px-4 py-2 border rounded {{ $category == 'Neighbourhoods' ? 'bg-gray-400 text-white' : '' }} ">Neighbourhoods</p>
            </button>
        </fieldset>

        <div class="flex flex-col">
            <div class="hidden py-4 md:flex md:py-0 md:mt-2 lg:mt-0">
                <button id="change-layout" onclick="return false;"> <i
                        class="mx-2 text-gray-200 transition fa-solid fa-list fa-2x hover:text-gray-400"></i></button>
                <button id="change-layout2" onclick="return false;"> <i
                        class="mr-2 text-gray-200 transition fa-solid fa-border-all fa-2x hover:text-gray-400"></i></button>
                <button id="change-layout3" onclick="return false;"> <i
                        class="text-gray-200 transition fa-solid fa-map fa-2x hover:text-gray-400"></i></button>
            </div>

        </div>

    </div>


    <div class="grid grid-cols-3 gap-2 mx-4 mt-4 md:grid-cols-5 md:mx-0">
        <div class="block">
            <label for="DeliveryStandard" class="block">
                <p class="pb-2 font-bold text-black">Tags</p>
            </label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </span>
                <input type="text" name="tags" value="{{ $tags }}"
                    class="w-full py-3 pl-10 pr-4 text-gray-700 bg-gray-100 border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400"
                    placeholder="">
            </div>
        </div>

        <div class="block">
            <label for="DeliveryStandard" class="block">
                <p class="pb-2 font-bold text-black">Size</p>
            </label>
            <select name="size" onchange="this.form.submit();"
                class="w-full px-4 py-3 text-sm bg-white border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                <option value="">All</option>
                <option value="Large" {{ $size == 'Large' ? 'selected' : '' }}>Large</option>
                <option value="Medium" {{ $size == 'Medium' ? 'selected' : '' }}>Medium</option>
                <option value="Small" {{ $size == 'Small' ? 'selected' : '' }}>Small</option>
                <option value="Xs" {{ $size == 'Xs' ? 'selected' : '' }}>Xs</option>
            </select>
        </div>

        <div class="block">
            <label for="DeliveryStandard" class="block">
                <p class="pb-2 font-bold text-black">Status</p>
            </label>
            <select name="status" onchange="this.form.submit();"
                class="w-full px-4 py-3 text-sm bg-white border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                <option value="">All</option>
                <option value="built" {{ $status == 'built' ? 'selected' : '' }}>built</option>
                <option value="future" {{ $status == 'future' ? 'selected' : '' }}>future</option>
                <option value="under_development" {{ $status == 'under_development' ? 'selected' : '' }}>under
                    development</option>
                <option value="regeneration" {{ $status == 'regeneration' ? 'selected' : '' }}>regeneration</option>
            </select>
        </div>

        <div class="block">
            <label for="DeliveryStandard" class="block">
                <p class="pb-2 font-bold text-black">City</p>
            </label>
            <select name="city" onchange="this.form.submit();"
                class="w-full px-4 py-3 text-sm bg-white border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                <option value="">All</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->name }}" {{ old('city') == $city->name ? 'selected' : '' }}>
                        {{ $city->name }}</option>
                @endforeach

            </select>
        </div>

        <div class="block">
            <label for="DeliveryStandard" class="block">
                <p class="pb-2 font-bold text-black">Country</p>
            </label>
            <select name="country" onchange="this.form.submit();"
                class="w-full px-4 py-3 text-sm transition bg-white border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                <option value="">All</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->name }}" {{ old('country') == $country->name ? 'selected' : '' }}>
                        {{ $country->name }}</option>
                @endforeach

            </select>
        </div>

    </div>
</form>
<div data-barba="container">
<section class="block pb-16 mx-4 md:mx-16 tabset">

    <div class="grid grid-cols-2 gap-5 mygrid lg:grid-cols-4 xl:grid-cols-5 ">

        {{-- @dd($all_data); --}}

        @forelse ($units as $data)

            @if ($data['category'] == 'Streetscapes')
                <div
                    class="relative col-span-2 transition shadow-md element1 bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
                    <a href="streetscapes_post?id={{ $data['id'] }}" class="flex flex-col h-full">
                        <img alt="Art" src="{{ asset('storage/' . $data['image'][0]) }}"alt=""
                            onerror="this.src='./img/empty.png'" class="object-cover h-full max-h-[480px]" />
                        <div class="p-2">
                            <h3 class="mt-4 font-bold text-center text-gray-900 uppercase md:text-base">
                                {{ $data['title'] }} | {{ $data['author'] }} | {{ $data['city'] }}</h3>
                            <p class="pb-2 mt-2 text-xs text-center text-gray-700 md:text-sm">
                                {{ $data['category'] }} &nbsp;
                                @foreach ($data['tags'] as $tag)
                                    {{ $tag }} &nbsp;
                                @endforeach
                            </p>

                        </div>
                    </a>
                </div>
            @elseif ($data['category'] == 'Neighbourhoods')
                <div class="relative transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
                    <a href="neighbourhoods_post?id={{ $data['id'] }}" class="flex flex-col h-full">
                        <img alt="Art" src="{{ asset('storage/' . $data['image'][0]) }}"alt=""
                            onerror="this.src='./img/empty.png'" class="object-cover h-full max-h-[480px]" />
                        <div class="p-2">
                            <h3 class="mt-4 font-bold text-center text-gray-900 uppercase md:text-base">
                                {{ $data['title'] }} | {{ $data['city'] }}</h3>
                            <p class="max-w-sm pb-2 mt-2 text-xs text-center text-gray-700 md:text-sm">
                                {{ $data['category'] }} &nbsp;
                                @foreach ($data['tags'] as $tag)
                                    {{ $tag }} &nbsp;
                                @endforeach
                            </p>

                        </div>
                    </a>
                </div>
            @else
                <div class="relative transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
                    <a href="masterplans_post?id={{ $data['id'] }}" class="flex flex-col h-full">
                        <img alt="Art" src="{{ asset('storage/' . $data['image'][0]) }}"alt=""
                            onerror="this.src='./img/empty.png'" class="object-cover h-full max-h-[480px]" />
                        <div class="p-2">
                            <h3 class="mt-4 font-bold text-center text-gray-900 uppercase md:text-base">
                                {{ $data['title'] }} | {{ $data['author'] }} | {{ $data['city'] }}</h3>
                            <p class="max-w-sm pb-2 mt-2 text-xs text-center text-gray-700 md:text-sm">
                                {{ $data['category'] }} &nbsp;
                                @foreach ($data['tags'] as $tag)
                                    {{ $tag }} &nbsp;
                                @endforeach
                            </p>

                        </div>
                    </a>
                </div>
            @endif

        @empty
            <div class="transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
                <a href="#" class="flex flex-col h-full">
                    <img alt="Art" src="./img/empty.png" class="object-cover h-full max-h-[480px]" />
                    <div class="p-2">
                        <h3 class="mt-4 font-bold text-gray-900 md:text-xl">No results</h3>
                        <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                        </p>
                    </div>
                </a>
            </div>
        @endforelse







    </div>


    <div class="flex justify-center pt-8">
        {{ $units->appends(Request::all())->links('pagination::tailwind') }}
    </div>

</section>
 </div>
@include('parts.streetscapes')
@include('parts.masterplans')
@include('parts.neighbourhoods')

<section class="pb-16 mx-4 mb-16 border-b md:mx-16">
    <div class="w-full">
        <h1 class="pt-16 pb-16 text-3xl font-bold text-center text-gray-900 md:text-5xl">Search on the map</h1>
    </div>
    <div class="flex md:mx-4">
        <div id="map" class="mx-2 mt-4 rounded h-[550px] w-screen">
        </div>
    </div>
</section>

@include('parts.dictionary')
@include('parts.webresources')

@include('parts.toread')
@include('parts.instagram')

<script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"
    integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
<script>
      data = {!! json_encode($all_data) !!};
         markers = {};

    let mymap = L.map('map').setView([48.6890, 11.14086], 5);
    osmLayer = L.tileLayer(
        'https://wxs.ign.fr/{apikey}/geoportail/wmts?REQUEST=GetTile&SERVICE=WMTS&VERSION=1.0.0&STYLE={style}&TILEMATRIXSET=PM&FORMAT={format}&LAYER=ORTHOIMAGERY.ORTHOPHOTOS&TILEMATRIX={z}&TILEROW={y}&TILECOL={x}', {
            maxZoom: 19,
            apikey: 'choisirgeoportail',
            format: 'image/jpeg',
            style: 'normal'
        }).addTo(mymap);
    mymap.addLayer(osmLayer);
    mymap.touchZoom.enable();
    mymap.scrollWheelZoom.disable();

let count = 0;
        for (let i = 0; i < data.length; i++) {
            count = count + 1;
            graff = data[i];
            pics = graff.image[0];
            graffid = graff.id;
            category = graff.category.toLowerCase();
            if (category == 'streetscapes') {
                cat = 1;
            } else if (category == 'masterplans') {
                cat = 2;
            } else if (category == 'neighbourhoods') {
                cat = 3;
            }
            graffcity = graff.city;
            graffname = graff.title;
            graffposition = graff.location;
            var decimalString = graffposition.split(',');
             decimalString[0] = parseFloat(decimalString[0]).toFixed(6);
             decimalString[1] = parseFloat(decimalString[1]).toFixed(6);

            marker = L.marker([decimalString[0], decimalString[1]], {
            }).addTo(mymap).bindPopup(
                '<div class="mappopup relative flex flex-col"><img onclick="myfunction(' + graffid + ',' + cat +
                ')" class="mt-4" src="/storage/' + pics +
                '" /><div class="flex justify-between"><h1 class="font-bold mt-1 mb-2" id="graffnom">' + graffname + '</h1><h1 class="text-xs text-gray-500 mt-1 mb-2" id="graffcity">' + graffcity + '</h1></div></div>'
            );
            markers[graff.id] = marker;
 
        }

function myfunction(id , cat) {

     
        markers[id].closePopup();
        if (cat == 1) {
            categ = "streetscapes";
        } else if (cat == 2) {
            categ = "masterplans";
        } else if (cat == 3) {
            categ = "neighbourhoods";
        }

        let pageName = categ + "_post?id=" + id;
        //open link
        window.open(pageName, "_self");

}

    layout = null;

    $("#change-layout").click(function() {
        $(".mygrid").addClass("lg:grid-cols-4").addClass("xl:grid-cols-5").addClass("grid-cols-3").removeClass(
            "lg:grid-cols-2").removeClass("xl:grid-cols-3").removeClass("grid-cols-2");
        console.log(layout);
        layout = "xl";
    });

    $("#change-layout2").click(function() {
        $(".mygrid").removeClass("lg:grid-cols-4").removeClass("xl:grid-cols-5").removeClass("grid-cols-3")
            .addClass("grid-cols-2").addClass("lg:grid-cols-2").addClass("xl:grid-cols-3");
        console.log(layout);
        layout = "medium";
    });

</script>
<style>

    .mappopup {
        width: 200px;
        height: 240px;
    }

    .mappopup img {
        width: 100%;
        height: 90%;
        object-fit: cover;
    }

    .mappopup h1 {
        cursor: pointer;
    }
    </style>