   
   @extends('layouts.app')

@section('main')
<div data-barba="container">
     <div class="mx-auto max-w-[1440px]">
            @forelse ($dictionaries as $item)
                <section>
                    <div class="relative px-4 py-8 mx-8 my-8">
                        <div class="grid items-start grid-cols-1 gap-8 lg:grid-cols-2">
                            <div class="grid grid-cols-1 gap-4">
                                <div class="w-full">
                                  
                                    <img class="object-cover w-full border"
                                        src="{{ asset('storage/' . $item->image) }}"alt=""
                                        onerror="this.src='./img/empty.png'" onclick="window.open('{{ asset('storage/' . $item->image) }}', 'Image', 'width=800,height=600')"/>
                                </div>
                            </div>
                            <div class="sticky top-0 mx-auto w-full">
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
            <section>
        </div>
        <section class="py-16 mx-4 mb-4 md:mx-16 border-t">

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
                                <img class="object-cover w-auto h-32" src="{{ asset('storage/' . $item->image) }}"
                                    alt="content" onerror="this.src='./img/empty.png'">
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
     </div>
@endsection
