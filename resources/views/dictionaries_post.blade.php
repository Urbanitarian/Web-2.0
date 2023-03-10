   
   @extends('layouts.app')

@section('main')
<div data-barba="container">
     <div class="mx-auto max-w-[1440px]">
            @forelse ($dictionaries->where('id', $id) as $item)
                <section>
                    <div class="relative px-4 py-8 mx-8 my-8">
                        <div class="grid items-start grid-cols-1 gap-8 lg:grid-cols-2">
                            <div class="grid grid-cols-1 gap-4">
                                <div class="w-full">
                                        @php $img12 = $item->image ?? null; @endphp
                                    <img class="object-cover w-full border"
                                        src="{{ asset('storage/uploads/dictionaries/' . $img12) }}" alt="" loading="lazy"
                                        onerror="this.src='./img/empty.png'" onclick="window.open('{{ asset('storage/' . $img12) }}', 'Image', 'width=800,height=600')"/>
                                </div>
                            </div>
                            <div class="sticky top-0 w-full mx-auto">
                                <div class="flex justify-between">
                                    <h1 class="text-2xl font-bold">
                                        {{ $item->name }}
                                    </h1>
                                </div>
                                <div class="block">
                                        <div class="text-gray-700 max-w-none group-open:hidden">
                                            <p class="max-w-3xl mt-4 leading-loose text-gray-500 myparagraph">
                                                {{ $item->description }}
                                            </p>
                                        </div>
                                </div>
                                <fieldset>
                                    <legend class="pt-4 pb-2 mb-1 font-medium">Sources:</legend>
                                    <div class="flex flex-wrap text-sm md:w-96 2xl:w-2/3">
                                        @php $credits = explode(',', $item->sources); @endphp
                                        @foreach ($credits as $source)
                                            <a href="{{ $source }}" class="text-blue-600 truncate w-64 md:w-auto" target="_blank">
                                                {{ $source }}</a>
                                        @endforeach
                                    </div>
                                </fieldset>
                            </div>
                        </div>
 <div class="flex justify-between pt-8 ">
                                   @php
                                       // next id and previous id from masterplans table
                                       $next_id = $dictionaries->where('id', '>', $item->id)->min('id');
                                       $prev_id = $dictionaries->where('id', '<', $item->id)->max('id');
                                   @endphp
                                   <a href="{{ route('dictionaries_post', 'id=' . $prev_id) }}"
                                       class="px-4 py-2 text-sm font-medium leading-5 text-gray-500 transition-colors duration-150 bg-white border rounded-lg active:bg-gray-600 hover:bg-gray-400 hover:text-white focus:outline-none focus:shadow-outline-gray">
                                       Previous
                                   </a>
                                   <a href="{{ route('dictionaries_post', 'id=' . $next_id) }}"
                                       class="px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-500 transition-colors duration-150 bg-white border rounded-lg active:bg-gray-600 hover:text-white hover:bg-gray-400 focus:outline-none focus:shadow-outline-gray">
                                       Next
                                   </a>
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
            <section>
        </div>
        <section class="py-16 mx-4 mb-4 border-t md:mx-16">

    <div class="w-full">
        <h1 class="pb-8 text-2xl font-bold text-center text-gray-900 md:text-4xl">See more Dictionary</h1>
    </div>

    <div class="mx-4">
        <div class="max-w-screen-xl pt-8 pb-4 mx-4 md:py-8 md:mx-auto ">
            <div class="grid grid-cols-2 gap-5 row-gap-5 lg:grid-cols-5">

                @forelse ($dictionary as $item)
                    <div class="flex transition border shadow-md md:hover:scale-110">
                        <div class="flex flex-col mx-auto">
                            <a href="dictionaries_post?id={{ $item->id }}">
                                @php $img11 = $item->image ?? null; @endphp
                                <img class="object-cover w-auto h-32 saturate-120" src="{{ asset('storage/uploads/dictionaries/' . $img11) }}"
                                    alt="content" loading="lazy" onerror="this.src='./img/empty.png'">
                                <p class="w-full pt-2 text-base font-bold text-center text-black bg-white border-t">
                                  {{ $item->name }}</p>
                                <p class="pb-2 text-xs text-center text-gray-500">{{ $item->type }}</p>
                            </a>
                        </div>
                    </div>
                @empty
                 <div class="flex transition border shadow-md md:hover:scale-110">
                        <div class="flex flex-col mx-auto">
                            <a href="">
                                <img class="object-cover w-auto h-32" src="./img/empty.png"
                                    alt="content">
                                <p class="w-full pt-2 text-base font-bold text-center text-black bg-white border-t">
                                    Empty</p>
                                <p class="pb-2 text-xs text-center text-gray-500">Dictionary</p>
                            </a>
                        </div>
                    </div>
                @endforelse


            </div>

        </div>
    </div>

    <button
        class="flex px-8 py-2 mx-auto mt-8 text-lg text-white bg-black border-0 rounded focus:outline-none hover:bg-gray-800"><a
            href="./alldictionary">See
            All Dictionary</a></button>
</section>
      @include('parts.all')
     </div>
@endsection
