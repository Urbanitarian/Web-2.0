@php use \App\Http\Controllers\GlobalController; @endphp
@php  $mastercount = GlobalController::master();@endphp
@php  $neighcount = GlobalController::neigh();@endphp
@php  $streetcount = GlobalController::street();@endphp
@php  $all_data = GlobalController::alldata();@endphp
@extends(backpack_view('blank'))
@section('content')

    <section class="text-gray-600 body-font">
        <div id="main-content" class="relative w-full h-full mt-2 overflow-y-auto bg-white border rounded-lg shadow-xl">
            <div class="flex flex-col w-full">
                <h3 class="m-4 text-xl font-bold text-gray-900">Welcome</h3>

                  <div class="flex w-full px-3">
                    <div class="w-1/3 h-32 p-3 m-2 bg-white border shadow">
                        <h1 class="text-base font-bold text-gray-900">Masterplans:</h1>
                        <h1 class="text-2xl font-bold text-gray-900">{{$mastercount}}</h1>
                    </div>

                     <div class="w-1/3 h-32 p-3 m-2 bg-white border shadow">
                      <h1 class="text-base font-bold text-gray-900">Urbanscapes:</h1>
                        <h1 class="text-2xl font-bold text-gray-900">{{$neighcount}}</h1>
                    </div>

                    <div class="w-1/3 h-32 p-3 m-2 bg-white border shadow">
                      <h1 class="text-base font-bold text-gray-900">Streetscapes:</h1>
                        <h1 class="text-2xl font-bold text-gray-900">{{$streetcount}}</h1>
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

    let mymap = L.map('map').setView([48.6890, 11.14086], 5);
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

let count = 0;
        for (let i = 0; i < data.length; i++) {
            count = count + 1;
            graff = data[i];
            
            graffid = graff.id;
            category = graff.category.toLowerCase();
            if (category == 'streetscapes') {
                cat = 1;
                pics = graff.imagea;
            } else if (category == 'masterplans') {
                cat = 2;
                pics = graff.image;
            } else if (category == 'neighbourhoods') {
                cat = 3;
                pics = graff.imagea;
            }
            graffcity = graff.city;
            graffname = graff.title;
            graffposition = graff.location;
            var decimalString = graffposition.split(',');
             decimalString[0] = parseFloat(decimalString[0]).toFixed(6);
             decimalString[1] = parseFloat(decimalString[1]).toFixed(6);

            marker = L.marker([decimalString[0], decimalString[1]], {
            }).addTo(mymap).bindPopup(
                '<div class="mappopup relative flex flex-col" onclick="myfunction(' + graffid + ',' + cat +
                ')"><img  class="mt-4" src="/storage/uploads/'+ category + '/' + pics +
                '" /><div class="flex justify-between"><h5 class="font-bold text-sm mt-1 mb-2" id="graffnom">' + graffname + '</h5><h5 class="text-xs text-gray-500 mt-1 mb-2" id="graffcity">' + graffcity + '</h5></div></div>'
            );
            markers[graff.id] = marker;
 
        }

function myfunction(id , cat) {

     
        markers[id].closePopup();
        if (cat == 1) {
            categ = "streetscape";
        } else if (cat == 2) {
            categ = "masterplan";
        } else if (cat == 3) {
            categ = "neighbourhood";
        }

        let pageName = categ + "/" + id + "/edit";
        //open link
        window.open(pageName, "_self");

}
    
    </script>
    <style>
    #map {
    max-height: 100%;
}

    .mappopup {
        width: 200px;
        height: 240px;
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
