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
                                       <img class="object-cover w-full" src="./storage/{{ $image0 }}" alt=""
                                           onerror="this.src='/img/empty.png'">
                                   </div>

                               </div>

                               <div class="sticky top-0">
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

                                   <div class="block">
                                       <div>
                                           <div class="text-gray-700 max-w-none group-open:hidden">
                                               <p>
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
   @endsection
