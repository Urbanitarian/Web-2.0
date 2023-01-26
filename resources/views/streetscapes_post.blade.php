@extends('layouts.app')

@section('main')
    <div data-barba="container">
        <section class="pt-8 mx-4 md:mx-16 lg:mx-32">
            <div class="p-8 mx-auto md:p-12 lg:px-16 lg:py-12 max-w-7xl">
                @foreach ($streetscapes->where('id', $id) as $streetscape)
                    <div class="mx-auto text-center">
                        <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                            {{ $streetscape->title }}
                        </h2>

                        <p class="my-4 text-sm text-gray-500">
                            {{ $streetscape->address }} | {{ $streetscape->city }} | {{ $streetscape->country }}
                        </p>
                    </div>
                    <div class="juxtapose">
                        <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96"
                            src="{{ asset('storage/' . $streetscape->image[0]) }}"alt="00"
                            onerror="this.src='./img/empty.png'" />
                        <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96"
                            src="{{ asset('storage/' . $streetscape->image[1]) }}"alt="00"
                            onerror="this.src='./img/empty.png'" />
                    </div>
                    <p class="my-4 text-sm text-gray-600">
                        {{ $streetscape->created_at->format('M d Y') }}
                    </p>
                    <p class="my-4 text-sm text-center text-gray-500">
                        {{ $streetscape->description }}
                    </p>


                    <button
                        class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded md:mt-8 focus:outline-none hover:bg-gray-800">
                        <a href="{{ $streetscape->link }}">See project </a></button>
                @endforeach

                <div class="flex justify-between pt-8 ">
                    @php
                        // next id and previous id from masterplans table
                        $next_id = $streetscapes->where('id', '>', $streetscape->id)->min('id');
                        $prev_id = $streetscapes->where('id', '<', $streetscape->id)->max('id');
                    @endphp
                    <a href="{{ route('streetscapes_post', 'id=' . $prev_id) }}"
                        class="px-4 py-2 text-sm font-medium leading-5 text-gray-500 transition-colors duration-150 bg-white border rounded-lg active:bg-gray-600 hover:bg-gray-400 hover:text-white focus:outline-none focus:shadow-outline-gray">
                        Previous
                    </a>
                    <a href="{{ route('streetscapes_post', 'id=' . $next_id) }}"
                        class="px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-500 transition-colors duration-150 bg-white border rounded-lg active:bg-gray-600 hover:text-white hover:bg-gray-400 focus:outline-none focus:shadow-outline-gray">
                        Next
                    </a>
                </div>
            </div>
        </section>
        <section class="mx-4 border-t md:mx-16">
            <div class="block py-16 mx-4 md:mx-auto max-w-7xl">
                <div class="w-full">
                    <h1 class="pt-4 pb-16 text-2xl font-bold text-center text-gray-900 md:text-4xl">See more Streetscapes
                    </h1>
                </div>
                <div class="grid gap-6 row-gap-5 lg:grid-cols-3">

                    @forelse ($allstreetscapes as $street)
                        <div>
                            <div class="juxtapose">
                                <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96"
                                    src="{{ asset('storage/' . $street->image[0]) }}"alt="00"
                                    onerror="this.src='./img/empty.png'" />
                                <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96"
                                    src="{{ asset('storage/' . $street->image[1]) }}"alt="00"
                                    onerror="this.src='./img/empty.png'" />
                            </div>
                            <a href="streetscapes_post?id={{ $street->id }}">
                                <h5 class="pt-1 mx-4 mb-2 text-xl font-bold leading-none sm:text-2xl">
                                    {{ $street->title }}
                                </h5>
                                <p class="text-sm text-gray-700">
                                    {{ $street->address }} | {{ $street->city }} | {{ $street->country }}
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
                    <a href="streetscapes">See All</a></button>

            </div>
        </section>

    </div>

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
@endsection
