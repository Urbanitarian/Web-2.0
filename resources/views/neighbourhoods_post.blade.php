@extends('layouts.app')

@section('main')


    <div data-barba="container">
        <div class="mx-auto">
            @forelse ($neighbourhood->where('id', $id) as $item)
                <section>
                    <div class="relative px-4 py-8 mx-8 my-8">
                        <div class="flex flex-col">
                            <div class="flex justify-between pb-4">
                                <h1 class="ml-1 text-3xl font-bold">
                                    {{ $item->title }}
                                </h1>
                            </div>
                            <div class="flex pb-8">
                                <button disabled 
                                    class="px-3 py-1 mx-1 text-xs font-medium tracking-wide text-white bg-blue-800 rounded-md">
                                    {{ $item->status }}
                                </button>

                                <button disabled
                                    class="px-3 py-1 mx-1 text-xs font-medium tracking-wide text-white bg-black rounded-md">
                                    <a href="masterplans"> {{ $item->category }}</a>
                                </button>
                                @foreach ($item->tags as $tag)
                                    <button disabled
                                        class="px-3 py-1 mx-1 text-xs font-medium tracking-wide text-white bg-black rounded-md overflow-hidden">
                                        {{ $tag }}
                                    </button>
                                @endforeach
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="w-full">
                                @php $image0 =  $item->image ?? null; @endphp
                                <img class=" object-cover w-screen border"
                                    src="{{ asset('storage/uploads/urbanscapes/' . $image0) }}"alt=""
                                    onerror="this.src='./img/empty.png'"
                                    onclick="window.open('{{ asset('storage/uploads/urbanscapes/' . $image0) }}', 'Image', 'width=800,height=600')" />
                            </div>
                        </div>




                        <div class="grid items-start grid-cols-1 gap-8 md:grid-cols-2  max-w-[1440px] mx-auto">

                            <div class="sticky w-full pt-8 mx-auto">

                                <div class="flex space-x-8">
                                    <div class="flex flex-col w-full text-sm mx-16 md:pb-8">
                                        <div class="flex py-4 border-t border-gray-200">
                                            <span class="text-gray-500"> Author: </span>
                                            <span class="ml-auto text-gray-900"> {{ $item->author }}</span>
                                        </div>
                                      
                                        <div class="flex py-4 border-t border-gray-200">
                                            <span class="text-gray-500">City:</span>
                                            <span class="ml-auto text-gray-900"> {{ $item->city }}</span>
                                        </div>
                                        <div class="flex py-4 border-t border-gray-200">
                                            <span class="text-gray-500"> Country:</span>
                                            <span class="ml-auto text-gray-900">{{ $item->country }}</span>
                                        </div>

                                        <div class="flex py-4 border-t border-gray-200">
                                            <span class="text-gray-500"> Year:</span>
                                            <span class="ml-auto text-gray-900">{{ $item->year }}</span>
                                        </div>

                                        <div class="flex py-4 border-t border-b border-gray-200">
                                            <span class="text-gray-500">Program: </span>
                                            <span class="ml-auto text-gray-900">  {{ $item->project_title }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="block md:pt-4 pt-0">
                                <div class="flex flex-col">
                                    <div class="text-gray-700 max-w-none">
                                        <p class="max-w-3xl text-gray-500 myparagraph text-center md:text-left mx-4 pb-8">
                                            {{ $item->descriptiona }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="grid grid-cols-1 gap-4  max-w-[1440px] mx-auto">
                            <div class="md:w-3/4 w-full  mx-auto">
                                @php $image00 =  $item->imagea ?? null; @endphp
                                <img class=" object-cover w-full border"
                                    src="{{ asset('storage/uploads/urbanscapes/' . $image00) }}"alt=""
                                    onerror="this.src='./img/empty.png'"
                                    onclick="window.open('{{ asset('storage/uploads/urbanscapes/' . $image00) }}', 'Image', 'width=800,height=600')" />
                            </div>
                        </div>


                        <div class="flex justify-center">
                            <div class="text-gray-700 py-8">
                                <p class="max-w-3xl text-gray-500 myparagraph text-center md:text-left mx-4 pb-8">
                                    {{ $item->descriptionb }}
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-4  max-w-[1440px] mx-auto">
                          @php $image1 =  $item->imageb ?? null; 
                                     $pieces = explode(", ", $image1);
                                @endphp
                            <div class="w-full mx-auto">
                                <img class=" object-cover w-full border"
                                    src="{{ asset('storage/uploads/urbanscapes/' . $pieces[0]) }}"alt=""
                                    onerror="this.src='./img/empty.png'"
                                    onclick="window.open('{{ asset('storage/uploads/urbanscapes/' . $pieces[0]) }}', 'Image', 'width=800,height=600')" />
                            </div>
                             <div class="w-full mx-auto">
                                <img class=" object-cover w-full border"
                                    src="{{ asset('storage/uploads/urbanscapes/' . $pieces[1]) }}"alt=""
                                    onerror="this.src='./img/empty.png'"
                                    onclick="window.open('{{ asset('storage/uploads/urbanscapes/' . $pieces[1]) }}', 'Image', 'width=800,height=600')" />
                            </div>
                             <div class="w-full mx-auto">
                                <img class=" object-cover w-full border"
                                    src="{{ asset('storage/uploads/urbanscapes/' . $pieces[2]) }}"alt=""
                                    onerror="this.src='./img/empty.png'"
                                    onclick="window.open('{{ asset('storage/uploads/urbanscapes/' . $pieces[2]) }}', 'Image', 'width=800,height=600')" />
                            </div>
                        </div>

                        <div class="flex justify-center">
                            <div class="text-gray-700 py-8">
                                <p class="max-w-3xl text-gray-500 myparagraph text-center md:text-left mx-4 pb-8">
                                    {{ $item->descriptionc }}
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4  max-w-[1040px] mx-auto">
                            @php $image2 =  $item->imagec ?? null; 
                                 $pieces2 = explode(", ", $image2);
                                @endphp
                            <div class="w-full mx-auto">
                                <img class=" object-cover w-full border"
                                    src="{{ asset('storage/uploads/urbanscapes/' . $pieces2[0]) }}"alt=""
                                    onerror="this.src='./img/empty.png'"
                                    onclick="window.open('{{ asset('storage/uploads/urbanscapes/' . $pieces2[0]) }}', 'Image', 'width=800,height=600')" />
                            </div>
                             <div class="w-full mx-auto">
                                <img class=" object-cover w-full border"
                                    src="{{ asset('storage/uploads/urbanscapes/' . $pieces2[1]) }}"alt=""
                                    onerror="this.src='./img/empty.png'"
                                    onclick="window.open('{{ asset('storage/uploads/urbanscapes/' . $pieces2[1]) }}', 'Image', 'width=800,height=600')" />
                            </div>
                        </div>


                        <div class="flex justify-center">
                            <div class="text-gray-700 py-8">
                                <p class="max-w-3xl text-gray-500 myparagraph text-center md:text-left mx-4 pb-8">
                                    {{ $item->descriptiond }}
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-4  max-w-[1440px] mx-auto">
                             @php $image3 =  $item->imaged ?? null; 
                                     $pieces3 = explode(", ", $image3);
                                @endphp
                            <div class="w-full mx-auto">
                                <img class=" object-cover w-full border h-[550px]"
                                    src="{{ asset('storage/uploads/urbanscapes/' . $pieces3[0]) }}"alt=""
                                    onerror="this.src='./img/empty.png'"
                                    onclick="window.open('{{ asset('storage/uploads/urbanscapes/' . $pieces3[0]) }}', 'Image', 'width=800,height=600')" />
                            </div>
                             <div class="w-full mx-auto">
                                <img class=" object-cover w-full border h-[550px]"
                                    src="{{ asset('storage/uploads/urbanscapes/' . $pieces3[1]) }}"alt=""
                                    onerror="this.src='./img/empty.png'"
                                    onclick="window.open('{{ asset('storage/uploads/urbanscapes/' . $pieces3[1]) }}', 'Image', 'width=800,height=600')" />
                            </div>
                             <div class="w-full mx-auto">
                                <img class=" object-cover w-full border h-[550px]"
                                    src="{{ asset('storage/uploads/urbanscapes/' . $pieces3[2]) }}"alt=""
                                    onerror="this.src='./img/empty.png'"
                                    onclick="window.open('{{ asset('storage/uploads/urbanscapes/' . $pieces3[2]) }}', 'Image', 'width=800,height=600')" />
                            </div>
                        </div>
                        <div class="flex justify-center pb-8">
                            <div class="text-gray-700 py-8">
                                  <p class="max-w-3xl text-black font-bold text-center mx-4 pt-4">
                                 Credits:
                                </p>
                                <a href="{{ $item->credits }}" class="max-w-3xl text-blue-700 text-center mx-4 py-4">
                                    {{ $item->credits }}
                                </a>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-4  max-w-[1440px] mx-auto">
                            <div id="mastermap" class="mt-4 rounded h-[350px] w-full"></div>
                        </div>
                        <div class="flex justify-between pt-8  max-w-[1440px] mx-auto">
                            @php
                                // next id and previous id from masterplans table
                                $next_id = $neighbourhood->where('id', '>', $item->id)->min('id');
                                $prev_id = $neighbourhood->where('id', '<', $item->id)->max('id');
                            @endphp
                            <a href="{{ route('urbanscapes_post', 'id=' . $prev_id) }}"
                                class="px-4 py-2 text-sm font-medium leading-5 text-gray-500 transition-colors duration-150 bg-white border border-gray-300  rounded-lg active:bg-gray-600 hover:bg-gray-400 hover:text-white focus:outline-none focus:shadow-outline-gray">
                                Previous
                            </a>
                            <a href="{{ route('urbanscapes_post', 'id=' . $next_id) }}"
                                class="px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-500 transition-colors duration-150 bg-white border border-gray-300  rounded-lg active:bg-gray-600 hover:text-white hover:bg-gray-400 focus:outline-none focus:shadow-outline-gray">
                                Next
                            </a>
                        </div>
                    </div>
                </section>
            @empty
               
            @endforelse
            <section>
                <section class="py-4 mx-4 text-gray-600 border-t border-b body-font md:mx-16 md:py-8">
                    <div class="container px-5 pt-12 pb-8  max-w-[1440px] mx-auto">
                        <div class="flex flex-wrap w-full mb-8 md:mb-20">
                            <div class="w-full">
                                <h1 class="text-2xl font-bold text-center text-gray-900 md:text-4xl">See more Urbanscapes
                                </h1>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-4">

                            @forelse ($neighbourhoods as $neigh)
                                <div class="w-full p-4 xl:w-1/4 md:w-1/2">
                                    <a href="urbanscapes_post?id={{ $neigh->id }}">
                                        <div
                                            class="p-4 transition shadow-lg bg-gray-50 hover:bg-gray-100 md:hover:scale-110">
                                            @php $img08 = $neigh->imagea ?? null; @endphp
                                            <img class="object-cover object-center w-full h-40 mb-3"
                                                src="{{ asset('storage/uploads/urbanscapes/' . $img08) }}"alt=""
                                                onerror="this.src='./img/empty.png'" />
                                            <h2 class="mb-1 text-lg font-medium text-gray-900 title-font clamp2">
                                                {{ $neigh->title }}</h2>
                                            <p class="text-xs font-semibold leading-relaxed text-gray-500">
                                                @foreach ($neigh->tags as $tag)
                                                    {{ $tag }} &nbsp;
                                                @endforeach
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            @empty
                                <div class="p-4 xl:w-1/4 md:w-1/2">
                                    <a href="">
                                        <div
                                            class="p-6 transition shadow-lg bg-gray-50 hover:bg-gray-100 md:hover:scale-110">
                                            <img class="object-cover object-center w-full h-40 mb-6" src="./img/empty.png"
                                                alt="content">

                                            <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">Empty</h2>
                                            <p class="text-base leading-relaxed">dummy</p>
                                        </div>
                                    </a>
                                </div>
                            @endforelse



                        </div>

                        <button
                            class="flex px-8 py-2 mx-auto mt-16 text-lg text-white bg-black border-0 rounded focus:outline-none hover:bg-gray-800">
                            <a href="./urbanscapes">See
                                All</a></button>

                    </div>
                </section>
        </div>
    </div>



    <style>
        .myparagraph {
            white-space: pre-line;

        }
    </style>


    <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"
        integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
    
    <script>
        var gps = {!! json_encode($item->location ?? [0.00, 0.00]) !!};
        var decimalString = gps.split(',');
        decimalString[0] = parseFloat(decimalString[0]).toFixed(6);
        decimalString[1] = parseFloat(decimalString[1]).toFixed(6);

        let mymap = L.map('mastermap').setView([decimalString[0], decimalString[1]], 16);
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

        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.mySwiper', {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 4500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            })
        });

    </script>
@endsection
 <style>
     .clamp2 {
         display: -webkit-box;
         -webkit-line-clamp: 1;
         -webkit-box-orient: vertical;
         overflow: hidden;

     }
 </style>