   @extends('layouts.app')

   @section('main')
       <div data-barba="mycontainer">
           <div class="mx-4 lg:mx-16">
               @forelse ($masterplan as $item)
                   <section>
                       <div class="relative px-4 py-8 mx-auto my-8">
                           <div class="grid items-start grid-cols-1 gap-8 lg:grid-cols-2">
                               <div class="grid grid-cols-1 gap-4">
                                   <div class="w-full">
                                       @php $image0 =  $item->image[0] ?? null; @endphp
                                       <img class="object-cover w-full border" src="./storage/{{ $image0 }}"
                                           alt="" onerror="this.src='/img/empty.png'">
                                   </div>

                               </div>
                               <div class="sticky top-0 mx-auto">
                                   <div class="flex justify-between pb-8">
                                       <h1 class="text-2xl font-bold">
                                           {{ $item->title }} | {{ $item->author }} | {{ $item->city }}
                                       </h1>
                                   </div>
                                   <div class="flex pb-8">
                                       <button
                                           class="px-3 py-1 mx-1 text-xs font-medium tracking-wide text-white bg-blue-800 rounded-md">
                                           {{ $item->status }}
                                       </button>

                                       <button
                                           class="px-3 py-1 mx-1 text-xs font-medium tracking-wide text-white bg-black rounded-md">
                                           <a href="masterplans"> {{ $item->category }}</a>
                                       </button>
                                       <button
                                           class="px-3 py-1 mx-1 text-xs font-medium tracking-wide text-white bg-black rounded-md">
                                           {{ $item->size }}
                                       </button>
                                       @foreach ($item->tags as $tag)
                                           <button
                                               class="px-3 py-1 mx-1 text-xs font-medium tracking-wide text-white bg-black rounded-md">
                                               {{ $tag }}
                                           </button>
                                       @endforeach
                                   </div>
                                   <div class="flex space-x-8">
                                       <div class="flex flex-col w-1/2 text-sm">
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

                                           <div class="flex py-4 mb-6 border-t border-b border-gray-200">
                                               <span class="text-gray-500">Program: </span>
                                               <span class="ml-auto text-gray-900"> {{ $item->program }}</span>
                                           </div>
                                       </div>



                                       <div class="flex flex-col w-1/2 text-sm">
                                           <div class="flex pt-2 pb-1 border-t border-gray-200">
                                               <span class="text-gray-500"> Site area: </span>
                                               <span class="ml-auto text-gray-900"> {{ $item->area }}<i
                                                       class="text-xs text-gray-500"> sqm</i></span>
                                           </div>
                                           <div class="flex py-1 border-gray-200">
                                               <span class="text-gray-500">Gfa:</span>
                                               <span class="ml-auto text-gray-900"> {{ $item->gfa }}<i
                                                       class="text-xs text-gray-500"> sqm</i></span>
                                           </div>
                                           <div class="flex py-1 border-gray-200">
                                               <span class="text-gray-500"> Density:</span>
                                               <span class="ml-auto text-gray-900">{{ $item->density }}<i
                                                       class="text-xs text-gray-500"> far</i></span>
                                           </div>

                                           <div class="flex py-1 border-gray-200">
                                               <span class="overflow-x-hidden text-gray-500"> Population density:</span>
                                               <span class="ml-auto text-gray-900">{{ $item->popdensity }}<i
                                                       class="text-xs text-gray-500"> inh/ha</i></span>
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

                       </div>
                   </section>
               @empty
                   <section>
                       <div class="relative px-4 py-8 mx-auto my-8">
                           <div class="grid items-start grid-cols-1 gap-8 lg:grid-cols-2">
                               <div class="grid grid-cols-1 gap-4">
                                   <div class="w-full">
                                       <h1 class="text-2xl font-bold">Empty</h1>
                                   </div>
                               </div>
                           </div>

                       </div>
                   </section>
               @endforelse
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
    var gps = {!! json_encode($item->location) !!};
    var decimalString = gps.split(',');
    decimalString[0] = parseFloat(decimalString[0]).toFixed(6);
    decimalString[1] = parseFloat(decimalString[1]).toFixed(6);

    let mymap = L.map('mastermap').setView([decimalString[0], decimalString[1] ], 15);
    osmLayer = L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            apikey: 'choisirgeoportail',
            format: 'image/jpeg',
            style: 'normal'
        }).addTo(mymap);
    mymap.addLayer(osmLayer);
    L.marker([decimalString[0], decimalString[1] ]).addTo(mymap);
    mymap.touchZoom.enable();
    mymap.scrollWheelZoom.disable();
</script>

   @endsection
