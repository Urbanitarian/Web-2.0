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
            <div>
              
                 <div class="juxtapose">
                    <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96" src="./img/Kings-Crescent_Streetscape_1.jpg"alt="" />
                     <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-96" src="./img/Kings-Crescent_Streetscape_2.jpg"alt="" />
                    </div>
                     <a href="">
                    <h5 class="mb-2 text-xl font-bold leading-none sm:text-2xl">
                        A slice of heaven
                    </h5>
                    <p class="text-sm text-gray-700">
                        O for awesome, this chocka full cuzzie is as rip-off as a cracker. Meanwhile, in behind the
                        bicycle shed,
                        Hercules Morse.
                    </p>
                </a>
            </div>
            <div>
       
                      <div class="juxtapose">
                    <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-80 xl:h-96" src="./img/MOLE-streetscape-1.jpg"alt="" />
                     <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-80 xl:h-96" src="./img/MOLE-streetscape-2.jpg"alt="" />
                    </div>
                     <a href="">
                    <h5 class="mb-2 text-xl font-bold leading-none sm:text-2xl">
                        Disrupt inspire
                    </h5>
                    <p class="text-sm text-gray-700">
                        I'll be sure to note that in my log. Smooth as an android's bottom, eh, Data? When has justice
                        ever been
                        as
                        simple as a rule book?
                    </p>
                </a>
            </div>
            <div>
               
                     <div class="juxtapose">
                    <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-80 xl:h-96" src="./img/Superblock-del-rio-bani-1c.jpg"alt="" />
                     <img class="object-cover h-64 mb-6 rounded shadow-lg lg:h-80 xl:h-96" src="./img/Superblock-del-rio-bani-2c.jpg"alt="" />
                    </div>
                     <a href="">
                    <h5 class="mb-2 text-xl font-bold leading-none sm:text-2xl">
                        Storage shed
                    </h5>
                    <p class="text-sm text-gray-700">
                        Yolo ipsum dolor sit amet, consectetur adipiscing elit. Ut ac suscipit leo. Carpe diem vulputate
                        est nec
                        commodo rutrum.
                    </p>
                </a>
            </div>
        </div>
        <a href="./streetscapes">
            <button
                class="flex px-8 py-2 mx-auto mt-16 text-lg text-white bg-black border-0 rounded focus:outline-none hover:bg-gray-800">See
                All</button>
        </a>
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