@extends('layouts.app')

@section('main')
    <div data-barba="mycontainer">
        <section class="pt-8">
            <div class="p-8 md:p-12 lg:px-12 lg:py-12">
                @foreach ($streetscapes as $streetscape)
                    <div class="max-w-lg mx-auto text-center lg:max-w-xl">
                        <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                            {{ $streetscape->title }}
                        </h2>

                        <p class="my-4 text-sm text-gray-500">
                            {{ $streetscape->address }} | {{ $streetscape->city }} | {{ $streetscape->country }}
                        </p>
                    </div>
                     <div class="juxtapose">
                    <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96" src="{{ asset('storage/' . $streetscape->image[0]) }}"alt="00"  onerror="this.src='./img/empty.png'"/>
                     <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96" src="{{ asset('storage/' . $streetscape->image[1]) }}"alt="00"  onerror="this.src='./img/empty.png'"/>
                     </div>

                                                     <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800"> <a href="{{ $streetscape->creatorlink }}">See project </a></button>
                @endforeach


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

  $(window).on('load', function (event) {
    juxtaposeRatio = $(element).outerHeight() / $(element).outerWidth();
  });

  $(window).on('resize', function (event) {
    var newWidth = $juxtaposeContainer.outerWidth();
    var newHeight = newWidth * juxtaposeRatio;
    $(element).css({width: newWidth, height: newHeight});
  });

});
    </script>
@endsection
