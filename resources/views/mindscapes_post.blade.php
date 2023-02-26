@extends('layouts.app')

@section('main')
    <div data-barba="container">
        <section class="pt-8 mx-4 md:mx-16 lg:mx-32">
            <div class="p-8 mx-auto md:p-12 lg:px-16 lg:py-12 max-w-7xl">
                @forelse ($mindscapes->where('id', $id) as $mindscape)
                    <div class="mx-auto text-center">
                        <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                            {{ $mindscape->title }}
                        </h2>

                        <p class="my-4 text-sm text-gray-500">
                            {{ $mindscape->address }} | {{ $mindscape->city }} | {{ $mindscape->country }}
                        </p>

                        <div class="flex flex-wrap mb-4 justify-center">
                            @foreach ($mindscape->tags as $tag)
                                <a
                                    class="px-3 py-1 my-1 mx-1 text-xs font-medium tracking-wide text-white bg-black rounded-md">
                                    {{ $tag }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="">
                        @php $img7 = $mindscape->image[0] ?? null; @endphp

                        <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-auto w-full  saturate-120"
                            src="{{ asset('storage/' . $img7) }}"alt="00" onerror="this.src='./img/empty.png'" />
                    </div>
                    <div class="flex justify-between">
                        <p class="my-4 text-sm text-gray-600">
                            {{ $mindscape->created_at->format('M d Y') }}
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <p class="my-4 text-sm text-gray-500">
                        {{ $mindscape->description }}
                    </p>

                    <div class="grid grid-cols-2 gap-4">
                @forelse ($mindscape->image as $img)
                    @if ($loop->index > 0)
                        <img class="object-cover h-48 mb-2 rounded shadow-lg w-full saturate-120"
                            src="{{ asset('storage/' . $img) }}"alt="00" onerror="this.src='./img/empty.png'" onclick="window.open('{{ asset('storage/' . $img) }}', 'Image', 'width=800,height=600')">
                    @endif
                    {{-- <img class="object-cover h-48 mb-2 rounded shadow-lg w-full saturate-120" src="./img/empty.png"> --}}
                @empty
                    
                @endforelse


                    </div>

                 </div>
                    <div class="flex justify-between pt-8 ">

                        @php
                            // next id and previous id from masterplans table
                            $next_id = $mindscapes->where('id', '>', $mindscape->id)->min('id');
                            $prev_id = $mindscapes->where('id', '<', $mindscape->id)->max('id');
                        @endphp
                        <a href="{{ route('mindscapes_post', 'id=' . $prev_id) }}"
                            class="px-4 py-2 text-sm font-medium leading-5 text-gray-500 transition-colors duration-150 bg-white border border-gray-300  rounded-lg active:bg-gray-600 hover:bg-gray-400 hover:text-white focus:outline-none focus:shadow-outline-gray">
                            Previous
                        </a>
                        <a href="{{ route('mindscapes_post', 'id=' . $next_id) }}"
                            class="px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-500 transition-colors duration-150 bg-white border border-gray-300  rounded-lg active:bg-gray-600 hover:text-white hover:bg-gray-400 focus:outline-none focus:shadow-outline-gray">
                            Next
                        </a>
                    </div>
                @empty
   
                @endforelse


                <div class="grid grid-cols-1 gap-4">
                   
                </div>


            </div>
        </section>
        <section class="mx-4 border-t md:mx-16">
            <div class="block py-16 mx-4 md:mx-auto max-w-7xl">
                <div class="w-full">
                    <h1 class="pt-4 pb-16 text-2xl font-bold text-center text-gray-900 md:text-4xl">See more Mindscapes
                    </h1>
                </div>
                <div class="grid gap-6 row-gap-5 lg:grid-cols-3">

                    @forelse ($allmindscapes as $mind)
                        <div>
                        <a href="mindscapes_post?id={{ $mind->id }}">
                            <div class="">
                                @php $img00 = $mind->image[0] ?? null; @endphp

                                <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96"
                                    src="{{ asset('storage/' . $img00) }}"alt="00"
                                    onerror="this.src='./img/empty.png'" />
                            </div>
                            
                                <h5 class="pt-1 mx-4 mb-2 text-xl font-bold leading-none sm:text-2xl">
                                    {{ $mind->title }}
                                </h5>
                                <p class="text-sm text-gray-700 mx-4">
                                    {{ $mind->address }} | {{ $mind->city }} | {{ $mind->country }}
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
                    <a href="mindscapes">See All</a></button>

            </div>
        </section>

    </div>

    <script src="https://cdn.knightlab.com/libs/juxtapose/latest/js/juxtapose.min.js"></script>
    <link rel="stylesheet" href="https://cdn.knightlab.com/libs/juxtapose/latest/css/juxtapose.css">
   
@endsection
