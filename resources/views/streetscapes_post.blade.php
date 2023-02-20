@extends('layouts.app')

@section('main')
    <div data-barba="container">
        <section class="pt-8 mx-4 md:mx-16 lg:mx-32">
            <div class="p-8 mx-auto md:p-12 lg:px-16 lg:py-12 max-w-7xl">
                @forelse ($streetscapes->where('id', $id) as $streetscape)
                    <div class="mx-auto text-center">
                        <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                            {{ $streetscape->title }}
                        </h2>

                        <p class="my-4 text-sm text-gray-500">
                            {{ $streetscape->address }} | {{ $streetscape->city }} | {{ $streetscape->country }}
                        </p>

                          <div class="flex flex-wrap mb-4 justify-center">
                          @foreach ($streetscape->tags as $tag)
                                    <a
                                        class="px-3 py-1 my-1 mx-1 text-xs font-medium tracking-wide text-white bg-black rounded-md">
                                        {{ $tag }}
                                    </a>
                                @endforeach
                           </div>
                    </div>
                    <div class="juxtapose  saturate-120">
                     @php $img0 =$streetscape->imagea ?? null; @endphp
                      @php $img1 = $streetscape->imageb ?? null; @endphp
                        <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96"
                            src="{{ asset('storage/uploads/streetscapes/' . $img0) }}"alt="00"
                            onerror="this.src='./img/empty.png'" />
                        <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96"
                            src="{{ asset('storage/uploads/streetscapes/' . $img1) }}"alt="00"
                            onerror="this.src='./img/empty.png'" />
                    </div>
                    <div class="flex justify-between">
                    <p class="my-4 text-sm text-gray-600">
                        {{ $streetscape->created_at->format('M d Y') }}
                    </p>
                     <p class="my-4 text-sm text-right text-gray-500">
                       {{ $streetscape->area }}
                    </p>
                    </div>
                    <p class="my-4 text-sm text-center text-gray-500">
                        {{ $streetscape->description }}
                    </p>
                   
                  

                    <button
                        class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded md:mt-8 focus:outline-none hover:bg-gray-800">
                        <a href="{{ $streetscape->credits }}" target="_blank">See project </a></button>

                          <div class="grid grid-cols-1 gap-4">
                            <div id="mastermap" class="mt-4 rounded h-[350px] w-full"></div>
                        </div>
                       
                <div class="flex justify-between pt-8 ">
                    @php
                        // next id and previous id from masterplans table
                        $next_id = $streetscapes->where('id', '>', $streetscape->id)->min('id');
                        $prev_id = $streetscapes->where('id', '<', $streetscape->id)->max('id');
                    @endphp
                    <a href="{{ route('streetscapes_post', 'id=' . $prev_id) }}"
                        class="px-4 py-2 text-sm font-medium leading-5 text-gray-500 transition-colors duration-150 bg-white border border-gray-300 rounded-lg active:bg-gray-600 hover:bg-gray-400 hover:text-white focus:outline-none focus:shadow-outline-gray">
                        Previous
                    </a>
                    <a href="{{ route('streetscapes_post', 'id=' . $next_id) }}"
                        class="px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-500 transition-colors duration-150 bg-white border border-gray-300  rounded-lg active:bg-gray-600 hover:text-white hover:bg-gray-400 focus:outline-none focus:shadow-outline-gray">
                        Next
                    </a>
                </div>
 @empty

                @endforelse
                      

            </div>
        </section>
        <section class="mx-4 border-t md:mx-16">
            <div class="block py-16 mx-4 md:mx-auto max-w-7xl">
                <div class="w-full">
                    <h1 class="pt-4 pb-16 text-2xl font-bold text-center text-gray-900 md:text-4xl">See more Streetscapes
                    </h1>
                </div>
                <div class="grid gap-6 row-gap-5 lg:grid-cols-3">

                    @forelse ($allstreetscapes as $street)
                        <div>
                            <div class="juxtapose">
                             @php $img00 = $street->imagea ?? null; @endphp
                              @php $img01 = $street->imageb ?? null; @endphp
                                <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96"
                                    src="{{ asset('storage/uploads/streetscapes/' . $img00) }}"alt="00"
                                    onerror="this.src='./img/empty.png'" />
                                <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96"
                                    src="{{ asset('storage/uploads/streetscapes/' . $img01) }}"alt="00"
                                    onerror="this.src='./img/empty.png'" />
                            </div>
                            <a href="streetscapes_post?id={{ $street->id }}">
                                <h5 class="pt-1 mx-4 mb-2 text-xl font-bold leading-none sm:text-2xl">
                                    {{ $street->title }}
                                </h5>
                                <p class="text-sm text-gray-700 mx-4">
                                    {{ $street->address }} | {{ $street->city }} | {{ $street->country }}
                                </p>
                            </a>
                        </div>
                    @empty
                        <div>
                            <div class="juxtapose">
                                <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96"
                                    src="./img/empty.png"alt="" onerror="this.src='./img/empty.png'" />
                                <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96"
                                    src="./img/empty.png"alt="" onerror="this.src='./img/empty.png'" />
                            </div>
                            <a href="">
                                <h5 class="mb-2 text-xl font-bold leading-none sm:text-2xl">
                                    Dummy title
                                </h5>
                                <p class="text-sm text-gray-700">
                                    empty
                                </p>
                            </a>
                        </div>
                    @endforelse

                </div>

                <button
                    class="flex px-8 py-2 mx-auto mt-16 text-lg text-white bg-black border-0 rounded focus:outline-none hover:bg-gray-800">
                    <a href="streetscapes">See All</a></button>

            </div>
        </section>

    </div>

    <script src="https://cdn.knightlab.com/libs/juxtapose/latest/js/juxtapose.min.js"></script>
    <link rel="stylesheet" href="https://cdn.knightlab.com/libs/juxtapose/latest/css/juxtapose.css">
     <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
    <script>
        var gps = {!! json_encode($streetscape->location ?? [0.00, 0.00]) !!};
        var decimalString = gps.split(',');
        decimalString[0] = parseFloat(decimalString[0]).toFixed(6);
        decimalString[1] = parseFloat(decimalString[1]).toFixed(6);

        let mymap = L.map('mastermap').setView([decimalString[0], decimalString[1]], 12);
        osmLayer = L.tileLayer(
            'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                maxZoom: 19,
                apikey: 'choisirgeoportail',
                format: 'image/jpeg',
                style: 'normal'
            }).addTo(mymap);
        mymap.addLayer(osmLayer);
        L.marker([decimalString[0], decimalString[1]]).addTo(mymap);
        mymap.touchZoom.enable();
        mymap.scrollWheelZoom.disable();

       
        var $juxtapose = $('.juxtapose');

        $juxtapose.each(function(index, element) {
            var $juxtaposeContainer = $juxtapose.parent();
            var juxtaposeRatio;

            $(window).on('load', function(event) {
                juxtaposeRatio = $(element).outerHeight() / $(element).outerWidth();
            });

            $(window).on('resize', function(event) {
                var newWidth = $juxtaposeContainer.outerWidth();
                var newHeight = newWidth * juxtaposeRatio;
                $(element).css({
                    width: newWidth,
                    height: newHeight
                });
            });

        });
    </script>
@endsection
