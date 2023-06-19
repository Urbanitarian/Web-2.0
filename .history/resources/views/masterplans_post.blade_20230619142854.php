@extends('layouts.app2')

@section('main')
    <div data-barba="container">
        <div class="">

            @forelse ($masterplan->where('id', $id) as $item)
                <section>
                    <div class="relative" x-data="{ sideBar: true }">
                        

                        <div class="grid grid-cols-12 border-t ">
                            <div class="" :class="sideBar == false ? 'col-span-12' : 'col-span-9'"
                                style="background: url({{ asset('img/Graphy.png') }}) repeat; background-size:cover;">
                                <div class="relative flex items-center justify-center w-full py-10">
                                    <div class="absolute left-0 flex flex-col ml-4 bg-white border rounded cursor-pointer">
                                        <div class="p-2 border-b" onclick="zoomIn()">
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="#667080" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6" />
                                            </svg> --}}

                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z"
                                                    stroke="#667080" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M17.5 17.5L13.875 13.875" stroke="#667080" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.16669 6.66675V11.6667" stroke="#667080" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6.66669 9.16675H11.6667" stroke="#667080" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                        <div class="p-2" onclick="zoomOut()">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z"
                                                    stroke="#667080" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M17.5 17.5L13.875 13.875" stroke="#667080" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6.66669 9.16675H11.6667" stroke="#667080" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
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
                            <div class="col-span-3 px-2 py-4 mx-2 bg-white border-b" x-show="sideBar==true">
                                <div class="flex items-center justify-between">
                                    <span class="text-xl font-semibold text-gray-600">
                                        Details
                                    </span>
                                    <span class="text-xs text-gray-500 font-regular">
                                        <svg class="inline" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_525_17945)">
                                                <path
                                                    d="M0.666748 8.00008C0.666748 8.00008 3.33341 2.66675 8.00008 2.66675C12.6667 2.66675 15.3334 8.00008 15.3334 8.00008C15.3334 8.00008 12.6667 13.3334 8.00008 13.3334C3.33341 13.3334 0.666748 8.00008 0.666748 8.00008Z"
                                                    stroke="#6D7280" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                                    stroke="#6D7280" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_525_17945">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        &nbsp; Views:&nbsp;
                                        {{ views($item)->count() }}
                                    </span>
                                </div>


                                {{-- tags --}}

                                <div class="mt-6">
                                    <span class="text-base font-semibold text-gray-600">Tags</span>
                                    <div class="flex flex-wrap gap-2 mt-3 text-gray-700">

                                        <button disabled class="px-2 py-1 text-xs font-medium border rounded-md">
                                            <a href="masterplans"> {{ $item->category }}</a>
                                        </button>
                                        <button disabled class="px-2 py-1 text-xs font-medium border rounded-md">
                                            {{ $item->size }}
                                        </button>
                                        @foreach ($item->tags as $tag)
                                            <button disabled class="px-2 py-1 text-xs font-medium border rounded-md">
                                                {{ $tag }}
                                            </button>
                                        @endforeach
                                    </div>
                                </div>

                                {{-- data info --}}

                                <div class="flex flex-col mt-6">
                                    <span class="mb-3 text-base font-semibold text-gray-600">Data Info</span>

                                    <div class="flex flex-col w-full text-gray-700">
                                        <div class="flex items-center gap-3 py-1 border-b">
                                            <span class="w-20 text-xs font-semibold"> Author</span>
                                            <span class="text-xs font-regular"> {{ $item->author }}</span>
                                        </div>
                                        <div class="flex items-center gap-3 py-1 border-b">
                                            <span class="w-20 text-xs font-semibold">City</span>
                                            <span class="text-xs font-regular"> {{ $item->city }}</span>
                                        </div>
                                        <div class="flex items-center gap-3 py-1 border-b">
                                            <span class="w-20 text-xs font-semibold"> Country</span>
                                            <span class="text-xs font-regular">{{ $item->country }}</span>
                                        </div>

                                        <div class="flex items-center gap-3 py-1 border-b">
                                            <span class="w-20 text-xs font-semibold"> Year</span>
                                            <span class="text-xs font-regular">{{ $item->year }}</span>
                                        </div>

                                        <div class="flex items-center gap-3 py-1 border-b">
                                            <span class="w-20 text-xs font-semibold">Program </span>
                                            <span class="text-xs font-regular"> {{ $item->program }}</span>
                                        </div>
                                    </div>

                                    {{-- techincal info --}}

                                    <div class="flex flex-col mt-6">
                                        <span class="mb-3 text-base font-semibold text-gray-600">Technical Info</span>
                                        <div class="flex flex-col w-full text-gray-700">
                                            <div class="flex items-center justify-between gap-3 py-1 border-b">
                                                <span class="text-xs font-semibold"> Site area </span>
                                                <span class="text-xs font-regular "> {{ $item->area }}<span
                                                        class="text-sm text-gray-500 font-regular"> sqm</span></span>
                                            </div>
                                            <div class="flex items-center justify-between gap-3 py-1 border-b">
                                                <span class="text-xs font-semibold">Gfa</span>
                                                <span class="text-xs text-gray-500 font-regular">
                                                    {{ $item->gfa }}<span class="text-sm text-gray-500 font-regular ">
                                                        sqm</span></span>
                                            </div>
                                            <div class="flex items-center justify-between gap-3 py-1 border-b">
                                                <span class="text-xs font-semibold"> Density</span>
                                                <span class="text-xs text-gray-500 font-regular">{{ $item->density }}<span
                                                        class="text-sm text-gray-500 font-regular"> far</span></span>
                                            </div>

                                            <div class="flex items-center justify-between gap-3 py-1 border-b">
                                                <span class="text-xs font-semibold"> Population density</span>
                                                <span
                                                    class="text-xs text-gray-500 font-regular">{{ $item->popdensity }}<span
                                                        class="text-sm text-gray-500 font-regular ">
                                                        inh/ha</span></span>
                                            </div>

                                            <div class="flex items-center justify-between gap-3 py-1 border-b">
                                                <span class="text-xs font-regular">Home Units: </span>
                                                <span class="text-xs text-gray-500 font-regular">
                                                    {{ $item->homeunit }}<span
                                                        class="text-sm text-gray-500 font-regular"></span></span>
                                            </div>
                                            <div class="flex items-center justify-between gap-3 py-1 border-b">
                                                <span class="text-xs font-regular">Jobs </span>
                                                <span class="text-xs text-gray-500 font-regular">
                                                    {{ $item->jobs }}<span
                                                        class="text-sm text-gray-500 font-regular"></span></span>
                                            </div>
                                            <spannput type="hidden" name="id" value="">

                                                <div class="flex items-center justify-between gap-3 py-1 border-b">
                                                    <span class="text-xs font-regular"> Streetsroad: </span>
                                                    <span class="text-xs text-gray-500 font-regular">
                                                        {{ $item->streetroad }}<span
                                                            class="text-sm text-gray-500 font-regular"> %</span></span>
                                                </div>
                                                <div class="flex items-center justify-between gap-3 py-1 border-b">
                                                    <span class="text-xs font-regular">Buildup:</span>
                                                    <span class="text-xs text-gray-500 font-regular">
                                                        {{ $item->buildup }}<span
                                                            class="text-sm text-gray-500 font-regular"> %</span></span>
                                                </div>
                                                <div class="flex items-center justify-between gap-3 py-1 border-b">
                                                    <span class="text-xs font-regular"> NonBuild-up:</span>
                                                    <span
                                                        class="text-xs text-gray-500 font-regular">{{ $item->nonbuildup }}<span
                                                            class="text-sm text-gray-500 font-regular"> %</span></span>
                                                </div>

                                                <div class="flex items-center justify-between gap-3 py-1 border-b">
                                                    <span class="text-xs font-regular"> Residential</span>
                                                    <span
                                                        class="text-xs text-gray-500 font-regular">{{ $item->residential }}<span
                                                            class="text-sm text-gray-500 font-regular"> %</span></span>
                                                </div>

                                                <div class="flex items-center justify-between gap-3 py-1 border-b">
                                                    <span class="text-xs font-regular">Business </span>
                                                    <span class="text-xs text-gray-500 font-regular">
                                                        {{ $item->business }}<span
                                                            class="text-sm text-gray-500 font-regular"> %</span></span>
                                                </div>
                                                <div class="flex items-center justify-between gap-3 py-1 border-b">
                                                    <span class="text-xs font-regular">Commercial </span>
                                                    <span class="text-xs text-gray-500 font-regular">
                                                        {{ $item->commercial }}<span
                                                            class="text-sm text-gray-500 font-regular"> %</span></span>
                                                </div>
                                                <div class="flex justify-between gap-3 py-2">
                                                    <span class="text-xs font-regular">Civic </span>
                                                    <span class="text-xs text-gray-500 font-regular">
                                                        {{ $item->civic }}<span
                                                            class="text-sm text-gray-500 font-regular"> %</span></span>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>




                    </div>




                </section>
            @empty
            @endforelse

            {{-- description --}}

            <section id="description">

                <div class="flex flex-col items-center justify-center pt-8 border-t ">

                    <div class="text-2xl font-semibold text-gray-800">
                        Description
                    </div>
                    <div class="flex items-center justify-center px-8 py-8">
                        @php
                            
                            $des = str_replace('- ', '<li>', $item->description);
                            $des = str_replace('-', '<li>', $des);
                            $des = str_replace('.', '</li>', $des);
                            $des = str_replace("'", '', $des);
                            
                        @endphp

                        <ul class="flex flex-col text-gray-800 w-[915px] justify-center items-start text-base list-disc">
                            {!! $des !!}
                        </ul>

                    </div>
                </div>
            </section>


            {{-- map --}}

            <section id="map">
                <div class="pt-8 border">

                    <div class="relative pb-4 text-2xl font-semibold text-center text-gray-800 shadow-xl z-9">
                        Interactive map
                    </div>
                    <div class="">
                        <div class="h-[675px] w-full border-b">
                            <div id="mastermap" class="h-[550px] w-full"></div>


                        </div>
                    </div>
                </div>
            </section>
            {{-- sreetscapes section --}}

            @if(!$streetscapes->isEmpty())
            <section>
                <div class="" x-data="{ swiper: null }" x-init="swiper = new Swiper('.swiper-st', {
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: 0,
                    allowTouchMove: false,
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 0,
                        },
                
                    },
                })">
                    <div class="flex items-center justify-between px-8 pt-8">
                        <div class=""></div>
                        <div class="">
                            <div class="text-2xl font-semibold text-center text-gray-800">
                                Streetscapes
                            </div>
                            <div class="text-base font-normal text-center text-gray-400">
                                Explore the streetscapes related to this project
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-4 text-gray-800">
                            <i class="cursor-pointer fa fa-chevron-left" @click="swiper.slidePrev()"
                                aria-hidden="true"></i>
                            <span class="font-thin text-gray-300">|</span>
                            <i class="cursor-pointer fa fa-chevron-right" @click="swiper.slideNext()"
                                aria-hidden="true"></i>
                        </div>
                    </div>


                    <div class="swiper-container swiper-st">
                        <div class=" my-8 swiper-wrapper h-[398px]">


                            @forelse ($streetscapes as $street)
                                <div class="overflow-hidden transition border rounded-md shadow-sm swiper-slide"
                                    style="width: 687px">
                                    <a href="streetscapes_post?id={{ $street->id }}">
                                        <div class="flex flex-col h-full duration-300">

                                            <div class="juxtapose">
                                                <img alt="Art"
                                                    src="{{ asset('storage/uploads/thumbnails/streetscapes/' . $street->imagea) }}"alt=""
                                                    class="object-cover h-full  saturate-120 max-h-[480px]" />
                                                <img alt="Art"
                                                    src="{{ asset('storage/uploads/thumbnails/streetscapes/' . $street->imageb) }}"alt=""
                                                    class="object-cover h-full  saturate-120 max-h-[480px]" />
                                            </div>

                                            <div
                                                class="bg-white absolute bottom-[68px] rounded border-gray-300  text-sm font-medium px-1  border ml-3 text-gray-700 z-50 text-center">
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
            @endif

            {{-- urbanscpaes --}}
            @if(!$urbanscapes->isEmpty())
            <section class="border-t">
                <div class="" x-data="{ swiper: null }" x-init="swiper = new Swiper('.swiper-ur', {
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: 0,
                
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 0,
                        },
                
                    },
                })">
                    <div class="flex items-center justify-between px-8 pt-8">
                        <div class=""></div>
                        <div class="">
                            <div class="text-2xl font-semibold text-center text-gray-800">
                                Urbanscapes
                            </div>
                            <div class="text-base font-normal text-center text-gray-400">
                                Explore the urbanscapes related to this project
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-4 text-gray-800">
                            <i class="cursor-pointer fa fa-chevron-left" @click="swiper.slidePrev()"
                                aria-hidden="true"></i>
                            <span class="font-thin text-gray-300">|</span>
                            <i class="cursor-pointer fa fa-chevron-right" @click="swiper.slideNext()"
                                aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="swiper-container swiper-ur">
                        <div class="my-8 swiper-wrapper">
                            @forelse ($urbanscapes as $urban)
                                <div
                                    class="relative swiper-slide h-[438px] overflow-hidden transition border rounded shadow-sm saturate-120 animate__animated animate__backInRight">

                                    <a href="urbanscapes_post?id={{ $urban->id }}"
                                        class="flex flex-col h-full duration-300">
                                        <img alt="Art"
                                            src="{{ asset('storage/uploads/thumbnails/urbanscapes/' . $urban->image) }}"alt=""
                                            class="object-cover saturate-120" style="height:332px" />
                                        <div class="flex gap-1  bottom-[110px] absolute ml-2 whitespace-nowrap">
                                            @foreach ($urban->tags as $tag)
                                                <div
                                                    class="z-50 px-1 text-sm font-medium text-center text-gray-700 bg-white border border-gray-300 rounded">
                                                    {{ $tag }}
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="absolute bottom-1">
                                            <p class="px-2 mt-2 text-sm font-bold h-[70px]">
                                                {{ $urban->title }}
                                            </p>
                                            <div class="flex  items-center  justify-between px-2 text-sm text-gray-500">
                                                <div class="">
                                                    <span>{{ $urban->city }},{{ $urban->country }}</span>
                                                </div>
                                                <div class="flex items-center justify-center gap-2 ">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    {{ views($urban)->count() }}
                                                </div>
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
            @endif


            {{-- soucrces --}}
            <section class="border-t ">
                <div class="text-2xl pt-8 font-semibold text-center text-gray-800">
                    Sources
                </div>

                <div class="w-full py-8">
                    <div class="flex items-center justify-start">
                        @php $credits = explode(',', $item->credits); @endphp
                        <ul class="flex flex-col gap-2 text-base list-disc px-60">
                            @foreach ($credits as $source)
                                <li class="py-2">
                                    <div class="flex gap-2">
                                        <a href="{{ $source }}" class="text-gray-800 truncate" target="_blank">
                                            {{ $source }}</a>
                                        <svg class="w-[20px] h-[20px] border-gray-800" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18 13V19C18 19.5304 17.7893 20.0391 17.4142 20.4142C17.0391 20.7893 16.5304 21 16 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V8C3 7.46957 3.21071 6.96086 3.58579 6.58579C3.96086 6.21071 4.46957 6 5 6H11"
                                                stroke="#1F2937" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M15 3H21V9" stroke="#1F2937" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10 14L21 3" stroke="#1F2937" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>

                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </section>


            {{-- masterplans --}}

            <section class="bg-gray-100 border-t">
                <div class="" x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: 0,
                    centeredSlides: true,
                    breakpoints: {
                        640: {
                            slidesPerView: 5,
                            spaceBetween: 0,
                        },
                
                    },
                })">
                    <div class="flex items-center justify-between px-8 pt-8 ">
                        <div class=""></div>
                        <div class="">
                            <div class="text-2xl font-semibold text-center text-gray-800">
                                Explore more Masterplans
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-4 text-gray-800">
                            <i class="cursor-pointer fa fa-chevron-left" @click="swiper.slidePrev()"
                                aria-hidden="true"></i>
                            <span class="font-thin text-gray-300">|</span>
                            <i class="cursor-pointer fa fa-chevron-right" @click="swiper.slideNext()"
                                aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="swiper-container" x-ref="container">
                        <div class="flex items-center justify-center gap-4 my-8 swiper-wrapper ">
                            @forelse ($masterplans as $master)
                                <div
                                    class="overflow-hidden relative h-[442px] max-w-[260px] transition-all bg-white border rounded-md shadow swiper-slide  saturate-120 animate__animated animate__backInLeft">
                                    <a href="masterplans_post?id={{ $master->id }}"
                                        class="flex flex-col h-full duration-300">
                                        <img alt="Art"
                                            src="{{ 'storage/uploads/thumbnails/masterplans/' . $master->image }}"alt=""
                                            class="object-cover  h-full saturate-120 max-h-[368.24px] " />
                                        <div
                                            class="bg-white absolute bottom-[80px] rounded border-gray-300  text-sm font-medium px-1  border ml-3 text-gray-700 z-50 text-center">
                                            {{ $master->size }}</div>
                                        <div class="pt-1">
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
                                                <span class="text-xs"> {{ views($master)->count() }}</span>

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
                            class="flex px-8 py-2 mx-auto mt-4 mb-8 text-lg text-black bg-white border-2 rounded focus:outline-none hover:bg-gray-300"><a
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

        #mastermap {
            height: 100%;
        }

        .slide-w {
            width: 260px;
        }

        .swiper-st {
            width: 687px;
        }

        .swiper-ur {
            width: 270px;
        }
    </style>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://cdn.knightlab.com/libs/juxtapose/latest/js/juxtapose.min.js"></script>
    <link rel="stylesheet" href="https://cdn.knightlab.com/libs/juxtapose/latest/css/juxtapose.css">
    <script>
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



    
    <script>
        var gps = {!! json_encode($item->location ?? [0.0, 0.0]) !!};
        var decimalString = gps.split(',');
        decimalString[0] = parseFloat(decimalString[0]).toFixed(6);
        decimalString[1] = parseFloat(decimalString[1]).toFixed(6);

        var lat = parseFloat(decimalString[0]); 
        var lng = parseFloat(decimalString[1]);

        function initMap() {

            var location = { lat: lat, lng: lng };
            var map = new google.maps.Map(document.getElementById('mastermap'), {
                center: location,
                zoom: 16
            });

            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }



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

        function saveCollection(id, type, c_id) {

            $.ajax({
                url: '{{ route('save.collection') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                    type: type,
                    c_id: c_id
                },
                success: function(response) {
                    if (response.status == 'yes') {

                        $('#save_btn_' + c_id).html('Saved');
                        notyf.success(response.msg);

                    }
                    if (response.status == 'exist') {

                        notyf.error(response.msg);
                    }
                    if (response.status == 'no') {
                        window.location.href = '/login';
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

        function showSaveBtn(id) {
            $('#save_btn_' + id).removeClass('hidden')
        }

        function hideSaveBtn(id) {
            $('#save_btn_' + id).addClass('hidden')
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API_KEY')}}&callback=initMap" async defer></script>


@endsection
