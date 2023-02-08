<div class="border-b border-gray-300"></div>

@include('parts.home');
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
{{-- 
<section class="mx-4 mb-16 border-b">
    <div class=" mb-16 mx-auto bg-neutral-100 h-[250px] max-w-[1180px]">
        <div class="px-5 py-12 mx-auto lg:px-16">
            <div class="flex flex-col w-full mb-8 text-center">
                <span class="mb-4 text-sm font-medium tracking-wide text-gray-500 uppercase">
                    Ads super hero dummy place.
                </span>
            </div>
            <div class="mx-auto text-center">
                <div class="grid grid-cols-5 gap-4 mx-auto lg:grid-cols-5">
                    
                </div>
            </div>
        </div>
    </div>
    </section> --}}

@include('parts.dictionary')
@include('parts.webresources')

@include('parts.toread')
@include('parts.instagram')


<script>
    data = {!! json_encode($all_data) !!};
    markers = {};

    let mymap = L.map('map').setView([48.6890, 11.14086], 2);
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
        } else if (category == 'masterplans') {
            cat = 2;
        } else if (category == 'urbanscapes') {
            cat = 3;
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

        marker = L.marker([decimalString[0], decimalString[1]], {}).addTo(mymap).bindPopup(
            '<div class="relative flex flex-col mappopup"><img onclick="myfunction(' + graffid + ',' + cat +
            ')" class="mt-4" src="/storage/uploads/' + mydataca + '/' + pics +
            '" /><div class="flex justify-between"><h1 class="mt-1 mb-2 font-bold clamp" id="graffnom">' + graffname +
            '</h1><h1 class="mt-1 mb-2 text-xs text-gray-500 pb-4" id="graffcity">' + graffcity + '</h1></div></div>'
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
</script>
<style>
    .mappopup {
        width: 200px;
        height: 245px;
    }

    .mappopup img {
        width: 100%;
        height: 90%;
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