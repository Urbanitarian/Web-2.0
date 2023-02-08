   @extends('layouts.app')

   @section('main')
       <div data-barba="container">
           <div class="mx-4 lg:mx-16">
           
                   @forelse ($masterplan->where('id', $id) as $item)
                       <section>
                           <div class="relative px-4 py-8 mx-auto mt-8 mb-4">
                               <div class="grid items-start grid-cols-1 gap-8 lg:grid-cols-2">
                                   <div class="grid grid-cols-1 gap-4">
                                       <div class="w-full">
                                           @php $image0 =  $item->image ?? null; @endphp
                                           <img class="object-cover w-full border"
                                               src="{{ asset('storage/uploads/masterplans/' . $image0) }}"alt=""
                                               onerror="this.src='./img/empty.png'" />
                                       </div>

                                   </div>
                                   <div class="sticky top-0 mx-auto">
                                       <div class="flex justify-between pb-8">
                                           <h1 class="text-2xl font-bold">
                                               {{ $item->title }} | {{ $item->author }} | {{ $item->city }}
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
                                           <button disabled
                                               class="px-3 py-1 mx-1 text-xs font-medium tracking-wide text-white bg-black rounded-md">
                                               {{ $item->size }}
                                           </button>
                                           @foreach ($item->tags as $tag)
                                               <button disabled
                                                   class="px-3 py-1 mx-1 text-xs font-medium tracking-wide text-white bg-black rounded-md">
                                                   {{ $tag }}
                                               </button>
                                           @endforeach
                                       </div>
                                       <div class="flex space-x-8">
                                           <div class="flex w-1/2">
                                               <div class="flex flex-col w-1/2 text-sm">
                                                   <div class="flex py-4 border-t border-gray-200">
                                                       <span class="pr-2 text-gray-500"> Author: </span>
                                                       <span class="ml-auto text-gray-900"> {{ $item->author }}</span>
                                                   </div>
                                                   <div class="flex py-4 border-t border-gray-200">
                                                       <span class="pr-2 text-gray-500">City:</span>
                                                       <span class="ml-auto text-gray-900"> {{ $item->city }}</span>
                                                   </div>
                                                   <div class="flex py-4 border-t border-gray-200">
                                                       <span class="pr-2 text-gray-500"> Country:</span>
                                                       <span class="ml-auto text-gray-900">{{ $item->country }}</span>
                                                   </div>

                                                   <div class="flex py-4 border-t border-gray-200">
                                                       <span class="pr-2 text-gray-500"> Year:</span>
                                                       <span class="ml-auto text-gray-900">{{ $item->year }}</span>
                                                   </div>

                                                   <div class="flex py-4 mb-6 border-t border-b border-gray-200">
                                                       <span class="pr-2 text-gray-500">Program: </span>
                                                       <span class="ml-auto text-gray-900"> {{ $item->program }}</span>
                                                   </div>
                                               </div>
                                           </div>


                                           <div class="flex flex-col w-1/2 text-sm">
                                               <div class="flex pt-2 pb-1 border-t border-gray-200">
                                                   <span class="text-base "> Site area: </span>
                                                   <span class="ml-auto text-base "> {{ $item->area }}<i
                                                           class="text-base text-gray-500"> sqm</i></span>
                                               </div>
                                               <div class="flex py-1 border-gray-200">
                                                   <span class="text-base ">Gfa:</span>
                                                   <span class="ml-auto text-base text-gray-900"> {{ $item->gfa }}<i
                                                           class="text-base text-gray-500 "> sqm</i></span>
                                               </div>
                                               <div class="flex py-1 border-gray-200">
                                                   <span class="text-basetext-gray-500"> Density:</span>
                                                   <span class="ml-auto text-base text-gray-900">{{ $item->density }}<i
                                                           class="text-base text-gray-500"> far</i></span>
                                               </div>

                                               <div class="flex py-1 border-gray-200">
                                                   <span class="overflow-x-hidden text-base "> Population density:</span>
                                                   <span class="ml-auto text-base text-gray-900">{{ $item->popdensity }}<i
                                                           class="text-base text-gray-500 "> inh/ha</i></span>
                                               </div>

                                               <div class="flex py-1 border-gray-200">
                                                   <span class="text-gray-500">Home Units: </span>
                                                   <span class="ml-auto text-gray-900"> {{ $item->homeunit }}<i
                                                           class="text-xs text-gray-500"></i></span>
                                               </div>
                                               <div class="flex py-1 border-gray-200">
                                                   <span class="text-gray-500">Jobs: </span>
                                                   <span class="ml-auto text-gray-900"> {{ $item->jobs }}<i
                                                           class="text-xs text-gray-500"></i></span>
                                               </div>
                                               <input type="hidden" name="id" value="">

                                               <div class="flex py-1 border-gray-200">
                                                   <span class="text-gray-500"> Streets/road: </span>
                                                   <span class="ml-auto text-gray-900"> {{ $item->streetroad }}<i
                                                           class="text-xs text-gray-500"> %</i></span>
                                               </div>
                                               <div class="flex py-1 border-gray-200">
                                                   <span class="text-gray-500">Build-up:</span>
                                                   <span class="ml-auto text-gray-900"> {{ $item->buildup }}<i
                                                           class="text-xs text-gray-500"> %</i></span>
                                               </div>
                                               <div class="flex py-1 border-gray-200">
                                                   <span class="text-gray-500"> Non Build-up:</span>
                                                   <span class="ml-auto text-gray-900">{{ $item->nonbuildup }}<i
                                                           class="text-xs text-gray-500"> %</i></span>
                                               </div>

                                               <div class="flex py-1 border-gray-200">
                                                   <span class="text-gray-500"> Residential:</span>
                                                   <span class="ml-auto text-gray-900">{{ $item->residential }}<i
                                                           class="text-xs text-gray-500"> %</i></span>
                                               </div>

                                               <div class="flex py-1 border-gray-200">
                                                   <span class="text-gray-500">Business: </span>
                                                   <span class="ml-auto text-gray-900"> {{ $item->business }}<i
                                                           class="text-xs text-gray-500"> %</i></span>
                                               </div>
                                               <div class="flex py-1 border-gray-200">
                                                   <span class="text-gray-500">Commercial: </span>
                                                   <span class="ml-auto text-gray-900"> {{ $item->commercial }}<i
                                                           class="text-xs text-gray-500"> %</i></span>
                                               </div>
                                               <div class="flex py-1 mb-6 border-b border-gray-200">
                                                   <span class="text-gray-500">Civic: </span>
                                                   <span class="ml-auto text-gray-900"> {{ $item->civic }}<i
                                                           class="text-xs text-gray-500"> %</i></span>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="block">
                                           <div>
                                               <div class="text-gray-700 max-w-none group-open:hidden">
                                                   <p class="max-w-3xl mt-6 leading-loose text-gray-500 myparagraph">
                                                       {{ $item->description }}
                                                   </p>
                                               </div>
                                           </div>
                                       </div>
                                       <fieldset>
                                           <legend class="pt-4 pb-2 mb-1 font-medium">Sources:</legend>
                                           <div class="flex flex-wrap text-sm">
                                               {{ $item->credits }}
                                           </div>
                                       </fieldset>
                                       <div id="mastermap" class="mt-4 rounded h-[350px] w-full">
                                       </div>
                                   </div>
                               </div>
                               <div class="flex justify-between pt-8 lg:mx-10">
                                   @php
                                       // next id and previous id from masterplans table
                                       $next_id = $masterplans->where('id', '>', $item->id)->min('id');
                                       $prev_id = $masterplans->where('id', '<', $item->id)->max('id');
                                   @endphp
                                   <a href="{{ route('masterplans_post', 'id=' . $prev_id) }}"
                                       class="px-4 py-2 text-sm font-medium leading-5 text-gray-500 transition-colors duration-150 bg-white border rounded-lg active:bg-gray-600 hover:bg-gray-400 hover:text-white focus:outline-none focus:shadow-outline-gray">
                                       Previous
                                   </a>
                                   <a href="{{ route('masterplans_post', 'id=' . $next_id) }}"
                                       class="px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-500 transition-colors duration-150 bg-white border rounded-lg active:bg-gray-600 hover:text-white hover:bg-gray-400 focus:outline-none focus:shadow-outline-gray">
                                       Next
                                   </a>
                               </div>
                           </div>
                       </section>
               @empty

              
               @endforelse

  
               <section>
                   <div class="w-full pt-12 border-t">
                       <h1 class="pt-4 pb-8 text-2xl font-bold text-center text-gray-900 md:text-4xl">See more
                           Masterplans
                       </h1>
                   </div>
                   <div x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
                       loop: true,
                       slidesPerView: 1,
                       spaceBetween: 0,
                   
                       breakpoints: {
                           640: {
                               slidesPerView: 1,
                               spaceBetween: 0,
                           },
                           768: {
                               slidesPerView: 2,
                               spaceBetween: 0,
                           },
                           1024: {
                               slidesPerView: 3,
                               spaceBetween: 0,
                           },
                           1440: {
                               slidesPerView: 4,
                               spaceBetween: 0,
                           },
                       },
                   })" class="relative flex flex-row w-10/12 mx-auto">
                       <div class="absolute inset-y-0 left-0 z-10 flex items-center mb-4">
                           <button @click="swiper.slidePrev()"
                               class="flex items-center justify-center w-10 h-10 -ml-2 transition bg-black border rounded-full shadow lg:-ml-4 focus:outline-none hover:bg-gray-800 active:bg-black border-opacity-20">
                               <svg viewBox="0 0 20 20" fill="white" class="w-6 h-6 chevron-left">
                                   <path fill-rule="evenodd"
                                       d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                       clip-rule="evenodd"></path>
                               </svg>
                           </button>
                       </div>

                       <div class="swiper-container" x-ref="container">
                           <div class="my-8 swiper-wrapper">


                               @forelse ($masterplans as $masterplan)
                                   <div class="p-4 swiper-slide">
                                       <a href="masterplans_post?id={{ $masterplan->id }}">
                                           <div
                                               class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                                               <div class="flex-shrink-0">
                                                   @php $img10 = $masterplan->image ?? null; @endphp
                                                   <img class="h-[450px] w-full object-cover border-b"
                                                       src="{{ asset('storage/uploads/masterplans/' . $img10) }}"alt=""
                                                       onerror="this.src='./img/empty.png'" />
                                                   <h1 class="pt-2 mx-8 text-sm font-bold text-center">
                                                       {{ $masterplan->title }} | {{ $masterplan->author }} |
                                                       {{ $masterplan->city }} </h1>
                                                   <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                                       {{ $masterplan->category }}, {{ $masterplan->size }}
                                                   </p>
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
                                                   <img class="h-[450px] w-full object-cover border-b"
                                                       src="./img/empty.png" alt="">
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

                       <div class="absolute inset-y-0 right-0 z-10 flex items-center mb-4">
                           <button @click="swiper.slideNext()"
                               class="flex items-center justify-center w-10 h-10 -mr-2 transition bg-black border rounded-full shadow lg:-mr-4 focus:outline-none hover:bg-gray-800 active:bg-black border-opacity-20">
                               <svg viewBox="0 0 20 20" fill="white" class="w-6 h-6 chevron-right">
                                   <path fill-rule="evenodd"
                                       d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                       clip-rule="evenodd"></path>
                               </svg>
                           </button>
                       </div>
                   </div>



                   <button
                       class="flex px-8 py-2 mx-auto mt-8 mb-20 text-lg text-white bg-black border-0 rounded focus:outline-none hover:bg-gray-800"><a
                           href="./masterplans">
                           See all Masterplans</a></button>
               </section>
               <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
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
           var gps =  {!! json_encode($item->location ?? [0.00, 0.00]) !!};
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
       </script>

   @endsection
