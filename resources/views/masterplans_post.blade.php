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
                                           <div class="swiper-slide">
                                               @php $image0 =  $item->image[0] ?? null; @endphp
                                               <img class="object-cover w-full" src="./storage/{{ $image0 }}"
                                                   alt="" onerror="this.src='/img/empty.png'">
                                           </div>
                                   </div>

                               </div>

                               <div class="sticky top-0">
                                   <div class="flex">
                                       <button
                                           class="px-3 py-1 text-xs font-medium tracking-wide text-white bg-black rounded-md">
                                          {{ $item->category }}
                                       </button>
                                   </div>

                                   <div class="flex justify-between mt-8">
                                       <div>
                                           <h1 class="text-2xl font-bold">
                                               {{ $item->title }}
                                           </h1>
                                           <a class="py-2 mb-4 text-sm font-bold text-gray-600"><span
                                                   class="text-black">
                                                   {{ $item->city }}</span> </a>
                                       </div>
                                       <p class="text-lg font-bold"> </p>
                                   </div>

                                   <details class="group relative mt-4 [&_summary::-webkit-details-marker]:hidden">
                                       <summary class="block">
                                           <div>
                                               <div class="prose max-w-none group-open:hidden">
                                                   <p>
                                                       {{ $item->description }}
                                                   </p>
                                               </div>

                                               <span
                                                   class="mt-4 text-sm font-medium underline cursor-pointer group-open:absolute group-open:bottom-0 group-open:left-0 group-open:mt-0">
                                                   En savoir plus
                                               </span>
                                           </div>
                                       </summary>

                                       <div class="pb-6 prose max-w-none">
                                           <p>
                                               {{ $item->description }}
                                           </p>
                                       </div>
                                   </details>


                                   <fieldset>
                                       <legend class="mb-1 text-sm font-medium">Details:</legend>

                                       <div class="flow-root">
                                           <div class="-m-0.5 flex flex-wrap">


                                               <label for="color_tt" class="p-0.5">
                                                   <span
                                                       class="inline-block px-3 py-1 text-xs font-medium bg-white border rounded-full group">
                                                       Terrasse
                                                   </span>
                                               </label>



                                               <label for="color_tt" class="p-0.5">
                                                   <span
                                                       class="inline-block px-3 py-1 text-xs font-medium bg-white border rounded-full group">
                                                       Balcon
                                                   </span>
                                               </label>


                                               <label for="color_tt" class="p-0.5">
                                                   <span
                                                       class="inline-block px-3 py-1 text-xs font-medium bg-white border rounded-full group">
                                                       Garage
                                                   </span>
                                               </label>




                                               <label for="color_tt" class="p-0.5">
                                                   <span
                                                       class="inline-block px-3 py-1 text-xs font-medium bg-white border rounded-full group">
                                                       Parking
                                                   </span>
                                               </label>



                                               <label for="color_tt" class="p-0.5">
                                                   <span
                                                       class="inline-block px-3 py-1 text-xs font-medium bg-white border rounded-full group">
                                                       Piscine
                                                   </span>
                                               </label>



                                               <label for="color_tt" class="p-0.5">
                                                   <span
                                                       class="inline-block px-3 py-1 text-xs font-medium bg-white border rounded-full group">
                                                       Jardin
                                                   </span>
                                               </label>
                                           </div>
                                       </div>
                                   </fieldset>

                               </div>
                           </div>

                       </div>
                   </section>
               @empty
                   <h1 class="text-2xl font-bold">Empty</h1>
               @endforelse


           </div>
       </div>
   @endsection
