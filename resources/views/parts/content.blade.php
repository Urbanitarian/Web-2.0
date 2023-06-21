<div class="border-b border-gray-300"></div>

@include('parts.home')
{{-- @include('parts.streetscapes')
@include('parts.masterplans')
@include('parts.neighbourhoods')

<section class="pb-16 mx-4 mb-16 border-b md:mx-16">
    <div class="w-full">
        <h1 class="pt-16 pb-16 text-3xl font-bold text-center text-gray-900 select-none md:text-5xl">Search on the map
        </h1>
    </div>
    <div class="flex md:mx-4">
        <div id="map" class="mx-2 mt-4 rounded h-[650px] w-screen">
        </div>
    </div>
</section>

@include('parts.dictionary')
@include('parts.webresources')
@include('parts.toread')
@include('parts.instagram') --}}
@if (!session()->has('FRONT_USER_LOGIN'))
    @include('parts.headless-login')
@endif


<script>
    data = {!! json_encode($all_data) !!};
    markers = {};

    let mymap = L.map('map').setView([38.6890, 11.14086], 2);
    osmLayer = L.tileLayer(
        'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            maxZoom: 19,
            apikey: 'choisirgeoportail',
            format: 'image/jpeg',
            style: 'normal'
        }).addTo(mymap);
    mymap.addLayer(osmLayer);
    mymap.touchZoom.enable();
    mymap.scrollWheelZoom.disable();
    var legend = L.control({
        position: "topright"
    });
    legend.onAdd = function(mymap) {
        var div = L.DomUtil.create("div", "legend bg-gray-200 p-2 border rounded");
        div.innerHTML +=
            '<span class="relative"><span class="inline-block ml-6 font-bold">Masterplans</span><span class="absolute left-0 block w-4 h-4 transform -translate-y-1/2 bg-[#4863DA] top-1/2"></span></span><br>';
        div.innerHTML +=
            '<span class="relative"><span class="inline-block ml-6 font-bold">Streetscapes</span><span class="absolute left-0 block w-4 h-4 transform -translate-y-1/2 bg-[#D95649] top-1/2"></span></span><br>';
        div.innerHTML +=
            '<span class="relative"><span class="inline-block ml-6 font-bold">Urbanscapes</span><span class="absolute left-0 block w-4 h-4 transform -translate-y-1/2 bg-[#63D74B] top-1/2"></span></span><br>';
        div.innerHTML +=
            '<label class="block pt-2">Layer:</label><select name="Layer"class="h-4 px-2 mt-1 text-xs font-bold rounded focus:outline-none"id="selectfilter" onchange="layer(this.value)"><option id="optionx" value="1">OpenStreetMap</option><option id="optionx" value="2" selected>ArcGIS</option><option id="optionx" value="3">GeoPortail</option><option id="optionx" value="4">OpenTopoMap</option><option id="optionx" value="5">CyclOSM</option></select>'
        return div;
    };
    legend.addTo(mymap);
    let count = 0;
    for (let i = 0; i < data.length; i++) {
        count = count + 1;
        graff = data[i];
        pics = graff.imagea;
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

        marker = L.marker([decimalString[0], decimalString[1]], {
            icon: icon
        }).addTo(mymap).bindPopup(
            '<div class="relative flex flex-col mappopup"><img onclick="myfunction(' + graffid + ',' + cat +
            ')" class="mt-4" loading="lazy" src="/storage/uploads/thumbnails/' + mydataca + '/' + pics +
            '" onerror="/img/empty.png"/><div class="flex justify-between"><h1 class="mt-1 mb-2 font-bold clamp" id="graffnom">' +
            graffname +
            '</h1><h1 class="pb-4 mt-1 mb-2 text-xs text-gray-500" id="graffcity">' + graffcity +
            '</h1></div></div>'
        );
        markers[graff.id] = marker;

    }

    function myfunction(id, cat) {


        markers[id].closePopup();
        if (cat == 1) {
            categ = "streetscapes";
        } else if (cat == 2) {
            categ = "masterplans";
        } else if (cat == 3) {
            categ = "urbanscapes";
        }

        let pageName = categ + "_post?id=" + id;
        //open link
        window.open(pageName, "_self");

    }

    layout = null;


    function layer(mylayer) {
        if (mylayer == 1) {
            mymap.removeLayer(osmLayer);
            osmLayer = new L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19
            }).addTo(mymap);
            mymap.addLayer(osmLayer);
            maplayer = 2;
            maxzoom = 19;
        } else if (mylayer == 2) {
            mymap.removeLayer(osmLayer);
            osmLayer = new L.tileLayer(
                'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                    maxZoom: 19
                }).addTo(mymap);
            mymap.addLayer(osmLayer);
            maplayer = 1;
            maxzoom = 19;
        } else if (mylayer == 3) {
            mymap.removeLayer(osmLayer);
            osmLayer = L.tileLayer(
                'https://wxs.ign.fr/{apikey}/geoportail/wmts?REQUEST=GetTile&SERVICE=WMTS&VERSION=1.0.0&STYLE={style}&TILEMATRIXSET=PM&FORMAT={format}&LAYER=ORTHOIMAGERY.ORTHOPHOTOS&TILEMATRIX={z}&TILEROW={y}&TILECOL={x}', {
                    maxZoom: 19,
                    apikey: 'choisirgeoportail',
                    format: 'image/jpeg',
                    style: 'normal'
                }).addTo(mymap);
            mymap.addLayer(osmLayer);
            maplayer = 3;
            maxzoom = 19;
        } else if (mylayer == 4) {
            mymap.removeLayer(osmLayer);
            osmLayer = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
                maxZoom: 16,
            }).addTo(mymap);
            mymap.addLayer(osmLayer);
            maplayer = 4;
            maxzoom = 16;
        } else if (mylayer == 5) {
            mymap.removeLayer(osmLayer);
            osmLayer = L.tileLayer('https://{s}.tile-cyclosm.openstreetmap.fr/cyclosm/{z}/{x}/{y}.png', {
                maxZoom: 20,
            }).addTo(mymap);
            mymap.addLayer(osmLayer);
            maplayer = 5;
            maxzoom = 20;
        }
    }
</script>
<style>
    .mappopup {
        width: 200px;
        height: 265px;
    }

    .mappopup img {
        width: 100%;
        height: 80%;
        object-fit: cover;
    }

    .mappopup h1 {
        cursor: pointer;
    }

    .clamp {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;

    }
</style>
