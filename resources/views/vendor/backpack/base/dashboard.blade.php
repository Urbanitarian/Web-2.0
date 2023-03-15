@php use \App\Http\Controllers\GlobalController; @endphp
@php  $mastercount = GlobalController::master();@endphp
@php  $neighcount = GlobalController::neigh();@endphp
@php  $streetcount = GlobalController::street();@endphp
@php  $mindcount = GlobalController::mind();@endphp
@php  $all_data = GlobalController::alldata();@endphp
@extends(backpack_view('blank'))
@section('content')
    <section class="text-gray-600 body-font">
        <div id="main-content" class="relative w-full h-full mt-2 overflow-y-auto bg-white border rounded-lg shadow-xl">
            <div class="flex flex-col w-full">
                <h3 class="m-4 text-xl font-bold text-gray-900">Welcome</h3>

                <div class="flex flex-wrap justify-center w-full px-3 lg:justify-start">
                    <div class="h-24 p-3 m-2 bg-white border shadow w-36 md:w-64">
                        <h1 class="text-xs font-bold text-gray-900 md:text-base">Masterplans:</h1>
                        <h1 class="text-2xl font-bold text-gray-900">{{ $mastercount }}</h1>
                    </div>

                    <div class="h-24 p-3 m-2 bg-white border shadow w-36 md:w-64">
                        <h1 class="text-xs font-bold text-gray-900 md:text-base">Urbanscapes:</h1>
                        <h1 class="text-2xl font-bold text-gray-900">{{ $neighcount }}</h1>
                    </div>

                    <div class="h-24 p-3 m-2 bg-white border shadow w-36 md:w-64">
                        <h1 class="text-xs font-bold text-gray-900 md:text-base">Streetscapes:</h1>
                        <h1 class="text-2xl font-bold text-gray-900">{{ $streetcount }}</h1>
                    </div>

                    <div class="h-24 p-3 m-2 bg-white border shadow w-36 md:w-64">
                        <h1 class="text-xs font-bold text-gray-900 md:text-base">Mindscapes:</h1>
                        <h1 class="text-2xl font-bold text-gray-900">{{ $mindcount }}</h1>
                    </div>

                    <div class="mt-1">
                        <h1 class="mx-4 text-xs font-bold">V_272 Changelog:</h1>
                        <p class="mx-4 text-xs">
                             -association top bar & footer<br>
                             -map legend + layer
                             -search map
                        <h1 class="mx-4 text-xs font-bold">In progress:</h1>
                        <p class="mx-4 text-xs">
                        -association</p>
                    </div>
                </div>
                <div class="flex md:mx-4">
                    <div id="map" class="mx-2 my-4 rounded h-[550px] w-screen">
                    </div>

                </div>

            </div>

    </section>
    <style>
        * {
            scrollbar-width: thin;
            scrollbar-color: #86878B #05070C;
        }

        /* Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 15px;
        }

        *::-webkit-scrollbar-track {
            margin-top: 5px;
            margin-bottom: 5px;
            background: #05070C;
            border-radius: 5px;
        }

        *::-webkit-scrollbar-thumb {
            margin-top: 5px;
            background-color: #86878B;
            border-radius: 14px;
            border: 3px solid #05070C;
        }

        body {}
    </style>
    <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"
        integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
    <script>
        data = {!! json_encode($all_data) !!};
        markers = {};

        let mymap = L.map('map').setView([48.6890, 11.14086], 3);
        osmLayer = L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                apikey: 'choisirgeoportail',
                format: 'image/jpeg',
                style: 'normal'
            }).addTo(mymap);
        mymap.addLayer(osmLayer);
        mymap.touchZoom.enable();
        mymap.scrollWheelZoom.enable();
    var legend = L.control({ position: "topright" });
    legend.onAdd = function(mymap) {
  var div = L.DomUtil.create("div", "legend bg-gray-200 p-2 border rounded");
  div.innerHTML += '<span class="relative"><span class="inline-block ml-6 font-bold">Masterplans</span><span class="absolute left-0 block w-4 h-4 transform -translate-y-1/2 bg-[#4863DA] top-1/2"></span></span><br>';
  div.innerHTML += '<span class="relative"><span class="inline-block ml-6 font-bold">Streetscapes</span><span class="absolute left-0 block w-4 h-4 transform -translate-y-1/2 bg-[#D95649] top-1/2"></span></span><br>';
  div.innerHTML += '<span class="relative"><span class="inline-block ml-6 font-bold">Urbanscapes</span><span class="absolute left-0 block w-4 h-4 transform -translate-y-1/2 bg-[#63D74B] top-1/2"></span></span><br>';
 div.innerHTML += '<label class="block pt-2">Layer:</label><select name="Layer"class="h-4 px-2 text-xs font-bold rounded focus:outline-none"id="selectfilter" onchange="layer(this.value)"><option id="optionx" value="1" selected>OpenStreetMap</option><option id="optionx" value="2">ArcGIS</option><option id="optionx" value="3">GeoPortail</option><option id="optionx" value="4">OpenTopoMap</option><option id="optionx" value="5">CyclOSM</option></select>'
    return div;
    };
    legend.addTo(mymap);
        let count = 0;
        for (let i = 0; i < data.length; i++) {
            count = count + 1;
            graff = data[i];

            graffid = graff.id;
           mydataca = graff.category.toLowerCase();
          if (mydataca == "masterplans") {
                         pics = graff.image;
                     } else {
                         pics = graff.imagea;
                     }
        category = graff.category.toLowerCase();
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
        graffcity = graff.city;
        graffname = graff.title;
        graffposition = graff.location;
        var decimalString = [0, 0];
        if (graffposition != null) {
            decimalString = graffposition.split(',');
        }
        decimalString[0] = parseFloat(decimalString[0]).toFixed(6);
        decimalString[1] = parseFloat(decimalString[1]).toFixed(6);

        marker = L.marker([decimalString[0], decimalString[1]], { icon: icon }).addTo(mymap).bindPopup(
            '<div class="relative flex flex-col mappopup"><img onclick="myfunction(' + graffid + ',' + cat +
            ')" class="mt-4" loading="lazy" src="/storage/uploads/thumbnails/' + mydataca + '/' + pics +
            '" onerror="/img/empty.png"/><div class="flex justify-between"><h5 class="mt-1 mb-2 text-xs font-bold truncate clamp" id="graffnom">' + graffname +
            '</h5><h5 class="pb-4 mt-1 mb-2 text-xs text-gray-500" id="graffcity">' + graffcity + '</h5></div></div>'
        );
        markers[graff.id] = marker;

        }

        function myfunction(id, cat) {


            markers[id].closePopup();
            if (cat == 1) {
                categ = "streetscape";
            } else if (cat == 2) {
                categ = "masterplan";
            } else if (cat == 3) {
                categ = "urbanscapes";
            }

            let pageName = categ + "/" + id + "/edit";
            //open link
            window.open(pageName, "_self");

        }

          function layer(mylayer) {
        if (mylayer == 1) {
            mymap.removeLayer(osmLayer);
            osmLayer = new L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {maxZoom: 19}).addTo(mymap);
            mymap.addLayer(osmLayer);
            maplayer = 2;
            maxzoom = 19;
        } else if (mylayer == 2) {
            mymap.removeLayer(osmLayer);
            osmLayer = new L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {maxZoom: 19}).addTo(mymap);
            mymap.addLayer(osmLayer);
            maplayer = 1;
            maxzoom = 19;
        } else if (mylayer == 3) {
            mymap.removeLayer(osmLayer);
            osmLayer = L.tileLayer('https://wxs.ign.fr/{apikey}/geoportail/wmts?REQUEST=GetTile&SERVICE=WMTS&VERSION=1.0.0&STYLE={style}&TILEMATRIXSET=PM&FORMAT={format}&LAYER=ORTHOIMAGERY.ORTHOPHOTOS&TILEMATRIX={z}&TILEROW={y}&TILECOL={x}', {maxZoom: 19,apikey: 'choisirgeoportail',format: 'image/jpeg',style: 'normal'}).addTo(mymap);
            mymap.addLayer(osmLayer);
            maplayer = 3;
            maxzoom = 19;
        } else if (mylayer == 4) {
            mymap.removeLayer(osmLayer);
            osmLayer = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {maxZoom: 16,}).addTo(mymap);
            mymap.addLayer(osmLayer);
            maplayer = 4;
            maxzoom = 16;
        } else if (mylayer == 5) {
            mymap.removeLayer(osmLayer);
            osmLayer = L.tileLayer('https://{s}.tile-cyclosm.openstreetmap.fr/cyclosm/{z}/{x}/{y}.png', {maxZoom: 20,}).addTo(mymap);
            mymap.addLayer(osmLayer);
            maplayer = 5;
            maxzoom = 20;
        }
  
    }
    </script>
    <style>
        #map {
            max-height: 100%;
        }

        .mappopup {
            width: 200px;
            height: 260px;
        }

        .mappopup img {
            width: 100%;
            height: 80%;
            object-fit: cover;
        }

        .mappopup img {
            cursor: pointer;
        }
    </style>
@endsection
