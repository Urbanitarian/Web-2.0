@extends('layouts.app2')

@section('main')
    <div data-barba="container">
        <div class="">

            @forelse ($masterplan->where('id', $id) as $item)
                <section>
                    <div class="relative" x-data="{ sideBar: true }">
                        <div class="flex justify-between items-center px-8 py-2 border-b">
                            <div class="flex gap-6 text-lg">
                                <div class="text-gray-800">
                                    <a href="{{ url('/') }}">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                </div>

                                <div class="">
                                    <span class="text-gray-300">|<span>
                                </div>
                                @php
                                    // next id and previous id from masterplans table
                                    $next_id = $masterplans->where('id', '>', $item->id)->min('id');
                                    $prev_id = $masterplans->where('id', '<', $item->id)->max('id');
                                @endphp


                                <div class="text-gray-800 flex gap-5">
                                    <a href="{{ route('masterplans_post', 'id=' . $prev_id) }}">
                                        <i class="fa fa-chevron-left cursor-pointer" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ route('masterplans_post', 'id=' . $next_id) }}">
                                        <i class="fa fa-chevron-right cursor-pointer" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-center items-center flex-col">
                                <span class="text-3xl text-center font-semibold text-gray-800">
                                    {{ $item->title }}
                                </span>
                                <div class="mt-1">
                                    <span class="text-gray-400">by</span>
                                    <span class="text-gray-800">{{ $item->author }} </span>
                                    <span class="text-gray-400">in</span>
                                    <span class="text-gray-800">{{ $item->city }}, </span>
                                    <span class="text-gray-800">{{ $item->country }} </span>
                                </div>

                            </div>
                            <div class="flex justify-center items-center gap-6">
                                <div class="">
                                    <button onclick="saveCollection({{ $item->id }}, 'master')"
                                        class="hover:bg-black py-2 bg-gray-800 flex gap-2 justify-center shadow items-center w-38 rounded  text-white px-3 z-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 10.5v6m3-3H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                        </svg>
                                        <span class="text-sm whitespace-nowrap">Save to Collection</span></button>
                                </div>
                                <div class="cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 5 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                    </svg>

                                </div>

                            </div>


                        </div>

                        @include('parts.navbar2')


                        <div class="grid grid-cols-12 border-t ">
                            <div class="" :class="sideBar == false ? 'col-span-12' : 'col-span-9'"
                                style="background: url({{ asset('img/Graphy.png') }}) repeat; background-size:cover;">
                                <div class="relative w-full flex justify-between items-center py-10">
                                    <div class="flex flex-col bg-white rounded border">
                                        <div class="p-2 border-b" onclick="zoomIn()">
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="#667080" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6" />
                                            </svg> --}}

                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z" stroke="#667080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M17.5 17.5L13.875 13.875" stroke="#667080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9.16669 6.66675V11.6667" stroke="#667080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.66669 9.16675H11.6667" stroke="#667080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>

                                        </div>
                                        <div class="p-2" onclick="zoomOut()">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z" stroke="#667080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M17.5 17.5L13.875 13.875" stroke="#667080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.66669 9.16675H11.6667" stroke="#667080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                                
                                        </div>



                                    </div>
                                    @php $image0 =  $item->image ?? null; @endphp
                                    <div class="">
                                        <img id="img"
                                            class="object-cover z-50 w-[536px] max-h-[758px] border saturate-120"
                                            src="{{ asset('storage/uploads/masterplans/' . $image0) }}"alt=""
                                            onerror="this.src='./img/empty.png'" />
                                        {{-- <i class="absolute text-gray-600 fa-solid fa-expand top-5 right-5 fa-2x hover:text-gray-500 active:text-gray-700"
                                            onclick="window.open('{{ asset('storage/uploads/masterplans/' . $image0) }}', 'Image', 'width=800,height=600')"></i> --}}
                                    </div>
                                    <div class=""></div>

                                </div>

                            </div>
                            <div class="mx-2 border-b md:mx-auto bg-white col-span-3 px-4 py-4" x-show="sideBar==true">
                                <div class="flex justify-between">
                                    <span class="text-xl font-semibold">
                                        Details
                                    </span>
                                    <span class="text-xs font-regular text-gray-500">
                                        <i class="fa fa-eye" aria-hidden="true"></i>&nbsp; Views:&nbsp;
                                        {{ views($item)->count() }}
                                    </span>
                                </div>

                                {{-- tags --}}

                                <div class="mt-6">
                                    <span class="font-semibold text-base">Tags</span>
                                    <div class="flex flex-wrap">

                                        <button disabled
                                            class="px-3 py-1 mx-1 my-2 text-xs font-medium tracking-wide border rounded-md">
                                            <a href="masterplans"> {{ $item->category }}</a>
                                        </button>
                                        <button disabled
                                            class="px-3 py-1 mx-1 my-2 text-xs font-medium tracking-wide border rounded-md">
                                            {{ $item->size }}
                                        </button>
                                        @foreach ($item->tags as $tag)
                                            <button disabled
                                                class="px-3 py-1 mx-1 my-2 text-xs font-medium tracking-wide border rounded-md">
                                                {{ $tag }}
                                            </button>
                                        @endforeach
                                    </div>
                                </div>

                                {{-- data info --}}

                                <div class="flex flex-col">
                                    <span class="font-semibold text-base pt-4">Data Info</span>

                                    <div class="flex flex-col w-full text-gray-700 py-3">
                                        <div class="flex gap-3 border-b py-2">
                                            <span class="w-20 text-xs font-semibold"> Author</span>
                                            <span class="text-xs font-regular"> {{ $item->author }}</span>
                                        </div>
                                        <div class="flex gap-3 border-b py-2">
                                            <span class="w-20 text-xs font-semibold">City</span>
                                            <span class="text-xs font-regular"> {{ $item->city }}</span>
                                        </div>
                                        <div class="flex gap-3 border-b py-2">
                                            <span class="w-20 text-xs font-semibold"> Country</span>
                                            <span class="text-xs font-regular">{{ $item->country }}</span>
                                        </div>

                                        <div class="flex gap-3 border-b py-2">
                                            <span class="w-20 text-xs font-semibold"> Year</span>
                                            <span class="text-xs font-regular">{{ $item->year }}</span>
                                        </div>

                                        <div class="flex gap-3 border-b py-2">
                                            <span class="w-20 text-xs font-semibold">Program </span>
                                            <span class="text-xs font-regular"> {{ $item->program }}</span>
                                        </div>
                                    </div>

                                    {{-- techincal info --}}

                                    <div class="flex flex-col">
                                        <span class="font-semibold text-base">Technical Info</span>
                                        <div class="flex flex-col w-full text-gray-700 py-2">
                                            <div class="flex gap-3 justify-between border-b py-2">
                                                <span class="text-xs font-semibold"> Site area </span>
                                                <span class="text-xs font-regular "> {{ $item->area }}<span
                                                        class="text-sm font-regular text-gray-500"> sqm</span></span>
                                            </div>
                                            <div class="flex gap-3 justify-between border-b py-2">
                                                <span class="text-xs font-semibold">Gfa</span>
                                                <span class="text-xs font-regular text-gray-500">
                                                    {{ $item->gfa }}<span class="text-sm font-regular text-gray-500 ">
                                                        sqm</span></span>
                                            </div>
                                            <div class="flex gap-3 justify-between border-b py-2">
                                                <span class="text-xs font-semibold"> Density</span>
                                                <span class="text-xs font-regular text-gray-500">{{ $item->density }}<span
                                                        class="text-sm font-regular text-gray-500"> far</span></span>
                                            </div>

                                            <div class="flex gap-3 justify-between border-b py-2">
                                                <span class="text-xs font-semibold"> Population density</span>
                                                <span
                                                    class="text-xs font-regular text-gray-500">{{ $item->popdensity }}<span
                                                        class="text-sm font-regular text-gray-500 ">
                                                        inh/ha</span></span>
                                            </div>

                                            <div class="flex gap-3 justify-between border-b py-2">
                                                <span class="text-xs font-regular">Home Units: </span>
                                                <span class="text-xs font-regular text-gray-500">
                                                    {{ $item->homeunit }}<span
                                                        class="text-sm font-regular text-gray-500"></span></span>
                                            </div>
                                            <div class="flex gap-3 justify-between border-b py-2">
                                                <span class="text-xs font-regular">Jobs </span>
                                                <span class="text-xs font-regular text-gray-500">
                                                    {{ $item->jobs }}<span
                                                        class="text-sm font-regular text-gray-500"></span></span>
                                            </div>
                                            <spannput type="hidden" name="id" value="">

                                                <div class="flex gap-3 justify-between border-b py-2">
                                                    <span class="text-xs font-regular"> Streetsroad: </span>
                                                    <span class="text-xs font-regular text-gray-500">
                                                        {{ $item->streetroad }}<span
                                                            class="text-sm font-regular text-gray-500"> %</span></span>
                                                </div>
                                                <div class="flex gap-3 justify-between border-b py-2">
                                                    <span class="text-xs font-regular">Buildup:</span>
                                                    <span class="text-xs font-regular text-gray-500">
                                                        {{ $item->buildup }}<span
                                                            class="text-sm font-regular text-gray-500"> %</span></span>
                                                </div>
                                                <div class="flex gap-3 justify-between border-b py-2">
                                                    <span class="text-xs font-regular"> NonBuild-up:</span>
                                                    <span
                                                        class="text-xs font-regular text-gray-500">{{ $item->nonbuildup }}<span
                                                            class="text-sm font-regular text-gray-500"> %</span></span>
                                                </div>

                                                <div class="flex gap-3 justify-between border-b py-2">
                                                    <span class="text-xs font-regular"> Residential</span>
                                                    <span
                                                        class="text-xs font-regular text-gray-500">{{ $item->residential }}<span
                                                            class="text-sm font-regular text-gray-500"> %</span></span>
                                                </div>

                                                <div class="flex gap-3 justify-between border-b py-2">
                                                    <span class="text-xs font-regular">Business </span>
                                                    <span class="text-xs font-regular text-gray-500">
                                                        {{ $item->business }}<span
                                                            class="text-sm font-regular text-gray-500"> %</span></span>
                                                </div>
                                                <div class="flex gap-3 justify-between border-b py-2">
                                                    <span class="text-xs font-regular">Commercial </span>
                                                    <span class="text-xs font-regular text-gray-500">
                                                        {{ $item->commercial }}<span
                                                            class="text-sm font-regular text-gray-500"> %</span></span>
                                                </div>
                                                <div class="flex gap-3 justify-between py-2">
                                                    <span class="text-xs font-regular">Civic </span>
                                                    <span class="text-xs font-regular text-gray-500">
                                                        {{ $item->civic }}<span
                                                            class="text-sm font-regular text-gray-500"> %</span></span>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
        </div>
    </div>

    <div class="pt-8 border-t -mt-4" style="z-index: 99999">

        <div class="text-2xl  font-semibold text-center text-gray-800">
            Description
        </div>
        <div class="px-8  py-4">
            <p class="text-gray-800 text-base font-normal tracking-wide">
                {{ $item->description }}
            </p>
        </div>
    </div>



    <div class="w-full border-t pt-8">
        <div class="text-2xl font-semibold text-center text-gray-800">
            Interactive Map
            {{-- </div>
        <div id="mastermap" class="mt-12 h-[550px] w-full">
        </div> --}}

            <div class="embed-container mt-12">
                <iframe width="940" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    title="Map_Urbanitarian_World"
                    src="https://barcelonatech.maps.arcgis.com/apps/Embed/index.html?webmap=c23c1380f11f43a18d3385764132abc9&extent=12.5502,55.6396,12.677,55.6791&zoom=true&previewImage=false&scale=true&basemap_gallery=true&disable_scroll=true&theme=light"></iframe>
            </div>
        </div>

        </section>
    @empty
        @endforelse


        {{-- sreetscapes section --}}

        <section>
            <div class="" x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 0,
            
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    },
            
                },
            })">
                <div class="pt-8 flex justify-between items-center px-8">
                    <div class=""></div>
                    <div class="">
                        <div class="text-2xl font-semibold text-center text-gray-800">
                            Streetscapes
                        </div>
                        <div class="text-base font-normal text-center text-gray-400">
                            Explore the streetscapes related to this project
                        </div>
                    </div>

                    <div class="text-gray-800 flex justify-between items-center gap-4">
                        <i class="fa fa-chevron-left cursor-pointer" @click="swiper.slidePrev()" aria-hidden="true"></i>
                        <span class="text-gray-300">|</span>
                        <i class="fa fa-chevron-right cursor-pointer" @click="swiper.slideNext()" aria-hidden="true"></i>
                    </div>
                </div>


                <div class="swiper-container" x-ref="container">
                    <div class="my-8 swiper-wrapper flex justify-center items-center gap-4">


                        @forelse ($streetscapes as $street)
                            <div
                                class="swiper-slide w-72 overflow-hidden transition border  rounded-md shadow-sm  element1 hover:border-black saturate-120 animate__animated animate__backInUp">

                                <a href="streetscapes_post?id={{ $street->id }}"
                                    class="flex flex-col h-full duration-300 hover:opacity-50">
                                    <img alt="Art"
                                        src="{{ asset('storage/uploads/thumbnails/streetscapes/' . $street->imagea) }}"alt=""
                                        class="object-cover h-full  saturate-120 max-h-[480px]" />
                                    <div
                                        class="bg-white rounded text-sm font-medium p-0.5 w-8 border-2 ml-4 text-black -mt-10 mb-8 z-50 text-center">
                                        {{ $street->size }}</div>
                                    <div class="flex items-center justify-between px-3">
                                        <h3 class="mt-4 text-sm font-semibold text-left text-gray-600">
                                            {{ $street->title }}</h3>
                                    </div>
                                    <div class="flex items-center justify-between px-3 pt-0.5 pb-1">

                                        <p class="text-sm text-left text-gray-500 truncate font-regular">
                                            {{ $street->address }}, {{ $street->city }}, {{ $street->country }}
                                        </p>
                                        <div class="flex items-end justify-end gap-2 text-xs text-gray-500">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            {{ views($street)->count() }}
                                        </div>

                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class="p-4 swiper-slide">
                                <a href="">
                                    <div
                                        class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                                        <div class="flex-shrink-0">
                                            <img class="h-[450px] w-full object-cover border-b" src="./img/empty.png"
                                                alt="" loading="lazy">
                                            <h1 class="pt-4 mx-8 font-bold text-center text-black">Empty</h1>
                                            <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                                dummy
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforelse
                    </div>
                </div>

            </div>


        </section>


        {{-- urbanscpaes --}}

        <section class="border-t">
            <div class="" x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 0,
            
                breakpoints: {
                    640: {
                        slidesPerView: 5,
                        spaceBetween: 0,
                    },
            
                },
            })">
                <div class="pt-8 flex justify-between items-center px-8">
                    <div class=""></div>
                    <div class="">
                        <div class="text-2xl font-semibold text-center text-gray-800">
                            Urbanscapes
                        </div>
                        <div class="text-base font-normal text-center text-gray-400">
                            Explore the urbanscapes related to this project
                        </div>
                    </div>

                    <div class="text-gray-800 flex justify-between items-center gap-4">
                        <i class="fa fa-chevron-left cursor-pointer" @click="swiper.slidePrev()" aria-hidden="true"></i>
                        <span class="text-gray-300">|</span>
                        <i class="fa fa-chevron-right cursor-pointer" @click="swiper.slideNext()" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="swiper-container" x-ref="container">
                    <div class="my-8 swiper-wrapper flex justify-center items-center gap-4">
                        @forelse ($urbanscapes as $urban)
                            <div
                                class="h-[500px] swiper-slide overflow-hidden transition border shadow-sm rounded  saturate-120 animate__animated animate__backInRight hover:opacity-75 hover:shadow-xl hover:border-black">

                                <a href="urbanscapes_post?id={{ $urban->id }}"
                                    class="flex flex-col  h-full duration-300">
                                    <img alt="Art"
                                        src="{{ asset('storage/uploads/thumbnails/urbanscapes/' . $urban->image) }}"alt=""
                                        class="object-cover h-full  saturate-120 max-h-[480px]" />
                                    <div
                                        class="bg-white rounded text-sm font-medium p-0.5 w-8 border-2 ml-4 text-black -mt-10 mb-8 z-50 text-center">
                                        {{ $urban->size }}</div>
                                    <div class="">
                                        <h3 class="mx-4 mt-2 text-sm font-bold text-center truncate">
                                            {{ $urban->title }}</h3>
                                        <p class="max-w-sm pb-2 mx-6 mt-1 mb-2 text-xs text-center text-gray-700 truncate">
                                            {{ $urban->category }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class="p-4 swiper-slide">
                                <a href="">
                                    <div
                                        class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                                        <div class="flex-shrink-0">
                                            <img class="h-[450px] w-full object-cover border-b" src="./img/empty.png"
                                                alt="" loading="lazy">
                                            <h1 class="pt-4 mx-8 font-bold text-center text-black">Empty</h1>
                                            <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                                dummy
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>


        </section>



        {{-- soucrces --}}
        <section>
            <div class="text-2xl font-semibold text-center text-gray-800">
                Sources
            </div>

            <div class="w-full py-8">
                @php $credits = explode(',', $item->credits); @endphp
                <ul class="flex items-center text-base flex-col list-disc ">
                    @foreach ($credits as $source)
                        <li class="py-3">
                            <a href="{{ $source }}" class="text-gray-800 truncate" target="_blank">
                                {{ $source }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>


        {{-- masterplans --}}

        <section class="border-t bg-gray-200">
            <div class="" x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 0,
            
                breakpoints: {
                    640: {
                        slidesPerView: 5,
                        spaceBetween: 0,
                    },
            
                },
            })">
                <div class="pt-8 flex justify-between items-center px-8 ">
                    <div class=""></div>
                    <div class="">
                        <div class="text-2xl font-semibold text-center text-gray-800">
                            Explore more Masterplans
                        </div>
                    </div>

                    <div class="text-gray-800 flex justify-between items-center gap-4">
                        <i class="fa fa-chevron-left cursor-pointer" @click="swiper.slidePrev()" aria-hidden="true"></i>
                        <span class="text-gray-300">|</span>
                        <i class="fa fa-chevron-right cursor-pointer" @click="swiper.slideNext()" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="swiper-container" x-ref="container">
                    <div class="my-8 swiper-wrapper flex justify-center items-center gap-4">
                        @forelse ($masterplans as $master)
                            <div
                                class="swiper-slide bg-white overflow-hidden transition-all border rounded-md shadow hover:shadow-xl saturate-120 animate__animated animate__backInLeft">
                                <a href="masterplans_post?id={{ $master->id }}"
                                    class="flex flex-col h-full duration-300 hover:opacity-75">
                                    <img alt="Art"
                                        src="{{ 'storage/uploads/thumbnails/masterplans/' . $master->image }}"alt=""
                                        class="object-cover  h-full saturate-120 max-h-[480px]" />
                                    <div
                                        class="bg-white rounded text-sm font-medium p-0.5 w-8 border-2 ml-4 text-black -mt-10 mb-8 z-50 text-center">
                                        {{ $item->size }}</div>
                                    <div class="">
                                        <h3 class="mx-2 mt-1 text-sm font-bold truncate">
                                            {{ $master->title }}

                                        </h3>
                                        <div class="max-w-sm mx-2 mt-1 text-sm text-gray-500 truncate">
                                            {{ $master->author }} &nbsp;

                                        </div>

                                    </div>

                                    <div class="flex items-center justify-between px-2 pb-2 text-sm text-gray-500">
                                        <span> {{ $master->city }}, {{ $master->country }}</span>
                                        <div class="flex items-center justify-center gap-2">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            {{ views($master)->count() }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class="p-4 swiper-slide">
                                <a href="">
                                    <div
                                        class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                                        <div class="flex-shrink-0">
                                            <img class="h-[450px] w-full object-cover border-b" src="./img/empty.png"
                                                alt="" loading="lazy">
                                            <h1 class="pt-4 mx-8 font-bold text-center text-black">Empty</h1>
                                            <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                                dummy
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforelse
                    </div>
                    <button
                        class="flex px-8 py-2 mx-auto mt-4 mb-8 text-lg text-black bg-white  border-2 rounded focus:outline-none hover:bg-gray-300"><a
                            href="./masterplans">
                            See all Masterplans</a></button>
                </div>


            </div>


        </section>

        <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
    </div>
    </div>

    <style>
        .myparagraph {
            white-space: pre-line;

        }

        .embed-container {
            position: relative;
            padding-bottom: 64%;
            height: 0;
            max-width: 100%;
        }

        .embed-container iframe,
        .embed-container object,
        .embed-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        small {
            position: absolute;
            z-index: 40;
            bottom: 0;
            margin-bottom: -15px;
        }

        .zoom {
            transform: scale(1.3)
        }
    </style>
    <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"
        integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
    <script>
        var gps = {!! json_encode($item->location ?? [0.0, 0.0]) !!};
        var decimalString = gps.split(',');
        decimalString[0] = parseFloat(decimalString[0]).toFixed(6);
        decimalString[1] = parseFloat(decimalString[1]).toFixed(6);


        console.log(decimalString[0]);
        console.log(decimalString[1]);

        let mymap = L.map('mastermap').setView([decimalString[0], decimalString[1]], 18);
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


        $(document).ready(function() {
            var lines = $("#parag").html().split(".");
            var newLines = [];
            for (var i = 0; i < lines.length; i++) {
                newLines.push(lines[i] + ".");
                if (i < lines.length) {
                    newLines.push("<br>");
                }
            }
            $("#parag").html(newLines.join(""));
        });

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

        function zoomOut() {
            var img = document.getElementById('img');

            img.classList.remove('zoom');
        }

        function zoomIn() {
            var img = document.getElementById('img');

            img.classList.add('zoom');
        }
    </script>

@endsection
