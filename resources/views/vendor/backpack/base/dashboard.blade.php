@php use \App\Http\Controllers\GlobalController; @endphp
@php  $mastercount = GlobalController::master();@endphp
@php  $neighcount = GlobalController::neigh();@endphp
@php  $streetcount = GlobalController::street();@endphp

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
                      <h1 class="text-base font-bold text-gray-900">Neighbourhoods:</h1>
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
        let mymap = L.map('map').setView([48.6890, 11.14086], 5);
        osmLayer = L.tileLayer(
            'https://wxs.ign.fr/{apikey}/geoportail/wmts?REQUEST=GetTile&SERVICE=WMTS&VERSION=1.0.0&STYLE={style}&TILEMATRIXSET=PM&FORMAT={format}&LAYER=ORTHOIMAGERY.ORTHOPHOTOS&TILEMATRIX={z}&TILEROW={y}&TILECOL={x}', {
                maxZoom: 19,
                apikey: 'choisirgeoportail',
                format: 'image/jpeg',
                style: 'normal'
            }).addTo(mymap);
        mymap.addLayer(osmLayer);
        L.marker([47.97618, 7.82580]).addTo(mymap);
        L.marker([44.97618, 9.82580]).addTo(mymap);
        mymap.touchZoom.enable();
    
    </script>
@endsection
