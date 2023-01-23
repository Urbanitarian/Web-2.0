<section class="pt-8">
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
                <form action="#" class="sm:flex sm:gap-4">
                    <div class="sm:flex-1">
                        <input type="text" placeholder="SEARCH"
                            class="w-full p-3 text-gray-700 transition bg-gray-100 border-gray-200 rounded-md shadow-sm focus:border-white focus:outline-none focus:ring focus:ring-gray-400" />
                    </div>
                </form>


            </div>

            <fieldset class="flex flex-wrap justify-center gap-2 pt-8 mx-auto md:gap-4">
                <div>
                    <input type="radio" name="ColorOption" value="All" id="All" class="hidden peer" checked />

                    <label for="All"
                        class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">All</p>
                    </label>
                </div>

                <div>
                    <input type="radio" name="ColorOption" value="Masterplan" id="Masterplan" class="hidden peer" />

                    <label for="Masterplan"
                        class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">large</p>
                    </label>
                </div>

                <div>
                    <input type="radio" name="ColorOption" value="Streetscapes" id="Streetscapes" class="hidden peer" />

                    <label for="Streetscapes"
                        class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">medium</p>
                    </label>
                </div>

                <div>
                    <input type="radio" name="ColorOption" value="Neiborhoods" id="Neiborhoods" class="hidden peer" />

                    <label for="Neiborhoods"
                        class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">small</p>
                    </label>
                </div>

                <div>
                    <input type="radio" name="ColorOption" value="xs" id="xs" class="hidden peer" />

                    <label for="xs"
                        class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">xs</p>
                    </label>
                </div>
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

                            <a  class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                              {{ $streetscape->title }}
                            </a>
                            <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> {{ $streetscape->address }} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; {{ $streetscape->city }} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; {{ $streetscape->country }} </p>
                            </div>
                            <a href="{{ $streetscape->creatorlink }}">
                                <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800">See project</button>
                              </a>
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