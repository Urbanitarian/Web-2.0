<section class="pt-8">
 @php
    $size = urldecode(request()->get('size'));
    $q = urldecode(request()->get('q'));
@endphp
        <div class="p-8 md:p-12 lg:px-12 lg:py-12">
            <div class="max-w-lg mx-auto text-center lg:max-w-xl">
                <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                    Streetscapes
                </h2>

                <p class="mt-4 text-sm text-gray-500">
                    We are number one destination to get knowledge on urban design.
                </p>
            </div>

            <div class="max-w-2xl mx-auto mt-8">
                <form action="{{ route('sfilter') }}" class="sm:flex sm:gap-4">
                    <div class="sm:flex-1">
                        <input type="text" placeholder="SEARCH" name="q" value="{{ $q }}"
                            class="w-full p-3 text-gray-700 transition bg-gray-100 border-gray-200 rounded-md shadow-sm focus:border-white focus:outline-none focus:ring focus:ring-gray-400" />
                    </div>
                </form>


            </div>

            <fieldset class="flex flex-wrap justify-center gap-2 pt-8 mx-auto md:gap-4">
               
            </fieldset>
    </section>


    <section class="mx-4 border-t">
        <div class="container px-6 py-10 mx-auto">
            <div class="flex flex-col">

                @forelse ($streetscapes as $streetscape)
                <div class="flex flex-col py-4 lg:flex-row lg:-mx-6">
                    <div class="lg:w-3/4 md:px-6">
                        <div class="juxtapose">
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="{{ asset('storage/' . $streetscape->image[0]) }}"alt="00"  onerror="this.src='./img/empty.png'"/>
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="{{ asset('storage/' . $streetscape->image[1]) }}"alt="00"  onerror="this.src='./img/empty.png'"/>
                    </div>

                    </div>

                    <div class="mt-8 border-t border-b lg:w-1/4 lg:mt-0 lg:px-6">
                        <div>
                            <h3 class="mt-4 font-semibold text-center text-black uppercase">  {{ $streetscape->tags[0] }}</h3>

                            <a href="streetscapes_post?id={{ $streetscape->id }}"  class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                              {{ $streetscape->title }}
                            </a>
                            <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> {{ $streetscape->address }} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; {{ $streetscape->city }} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; {{ $streetscape->country }} </p>
                            </div>
                           
                                <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800"> <a href="{{ $streetscape->link }}">More Info </a></button>
                             
                        </div>

                    </div>
                </div>
                @empty
                <p class="text-center">No posts yet. Please check back later.</p>
                @endforelse
               
            </div>
              <div class="flex justify-center pt-8">
  {{ $streetscapes->appends(Request::all())->links('pagination::tailwind') }}
      </div>
        </div>
    </section>

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