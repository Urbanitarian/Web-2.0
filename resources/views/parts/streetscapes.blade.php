<section class="mx-4 border-t border-b md:mx-16">
    <div class="block py-16 mx-4 md:mx-auto max-w-7xl">
        <div class="w-full">
            <h1 class="pb-4 text-3xl font-bold text-center text-gray-900 md:text-5xl">Streetscapes</h1>
        </div>
        <div class="max-w-xl mb-6 sm:mx-auto sm:text-center md:mb-10 lg:max-w-2xl">
            <p class="text-base text-gray-700 md:text-lg">
                Examples of streetscapes with explanation, measures and solutions to incorporate in your designs:
            </p>
        </div>
        <div class="grid gap-6 row-gap-5 lg:grid-cols-3">

           @forelse ($streetscapes as $streetscape)
               <div>
                 <div class="juxtapose">
                    <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96" src="{{ asset('storage/' . $streetscape->image[0]) }}"alt="00"  onerror="this.src='./img/empty.png'"/>
                     <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96" src="{{ asset('storage/' . $streetscape->image[1]) }}"alt="00"  onerror="this.src='./img/empty.png'"/>
                </div>
                    <a href="streetscapes_post?id={{ $streetscape->id }}">
                    <h5 class="pt-1 mb-2 text-xl font-bold leading-none sm:text-2xl">
                       {{ $streetscape->title }}
                    </h5>
                    <p class="text-sm text-gray-700">
                      {{ $streetscape->address }} | {{ $streetscape->city }}
                    </p>
                </a>
            </div>
           @empty
               <div>
                 <div class="juxtapose">
                    <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96" src="./img/empty.png"alt=""  onerror="this.src='./img/empty.png'"/>
                     <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96" src="./img/empty.png"alt=""  onerror="this.src='./img/empty.png'"/>
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
                class="flex px-8 py-2 mx-auto mt-16 text-lg text-white bg-black border-0 rounded focus:outline-none hover:bg-gray-800"> <a href="./streetscapes">See All</a></button>
        
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