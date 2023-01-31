 <section class="pt-8 border-b mx-8">
    <div class="p-8 md:p-12 lg:px-12 lg:py-10">
      <div class="max-w-lg mx-auto text-center lg:max-w-xl">
        <img class="flex justify-center w-12 mx-auto my-8" src="./img/logo.png">
        <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
          Explore the best world's urban design projects collection
        </h2>

        <p class="mt-4 text-sm text-gray-500">
          We are number one destination to get knowledge on urban design.
        </p>
      </div>

      <div class="max-w-2xl mx-auto mt-8">
       
          <div class="sm:flex-1">
            <input id="searchbar" type="text" placeholder="SEARCH" name="q" value=""
              class="w-full p-3 text-gray-700 transition bg-gray-100 border-gray-200 rounded-md shadow-sm focus:border-white focus:outline-none focus:ring focus:ring-gray-400" />
          </div>
      
      </div>

      <fieldset class="flex flex-wrap justify-center gap-3 pt-8 mx-auto">
        <div>
          <label for="ColorBlack" class="flex items-center justify-center gap-2 px-3 py-2 text-black ">
            <p class="text-base font-medium">Trending searchs</p>
          </label>
        </div>

        <button id="child">
          <label for="ColorBlack"
            class="flex items-center justify-center gap-2 px-12 py-2 text-gray-700 border border-gray-100 rounded-md hover:bg-gray-200 active:bg-gray-300 cursor-pointer hover:text-black hover:border-gray-200 ">
            <p class="text-sm font-medium">Child-friendly</p>
          </label>
      </button>

          <button id="wsud">
          <label for="ColorRed"
            class="flex items-center justify-center gap-2 px-12 py-2 text-gray-700 border border-gray-100 rounded-md hover:bg-gray-200 active:bg-gray-300 cursor-pointer hover:text-black hover:border-gray-200 ">
            <p class="text-sm font-medium">WSUD</p>
          </label>
        </button>

          <button id="playful">
          <label for="ColorBlue"
            class="flex items-center justify-center gap-2 px-12 py-2 text-gray-700 border border-gray-100 rounded-md hover:bg-gray-200 active:bg-gray-300 cursor-pointer hover:text-black hover:border-gray-200 ">
            <p class="text-sm font-medium">Playful</p>
          </label>
        </button>

          <button id="carfree">
          <label for="ColorGold"
            class="flex items-center justify-center gap-2 px-12 py-2 text-gray-700 border border-gray-100 rounded-md hover:bg-gray-200 active:bg-gray-300 cursor-pointer hover:text-black hover:border-gray-200 ">
            <p class="text-sm font-medium">car-free</p>
          </label>
      </button>
      </fieldset>
  </section>
 
 <div id="mysearch" class="pt-4 pb-8 mx-2 bg-white md:mx-16">

     <div class="flex flex-wrap justify-between py-4 mx-4 md:mx-0">
         <div class="pb-4 md:pb-0">
             <select name="popular" id="pop_selector"
                 class=" px-4 h-[40px] text-sm bg-white border-gray-200 rounded-md  border focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                 <option value="">Popular</option>
                 <option value="new">The Newest</option>
                 <option value="old">The Oldest</option>
             </select>
         </div>

         <div class="flex pt-1 md:hidden md:py-0">
             <button id="change-layouts" onclick="return false;"> <i
                     class="mx-2 text-gray-200 fa-solid fa-list fa-2x hover:text-gray-400"></i></button>
             <button id="change-layouts2" onclick="return false;"> <i
                     class="mr-2 text-gray-200 fa-solid fa-border-all fa-2x hover:text-gray-400"></i></button>
             <button id="change-layouts3" onclick="return false;"><i
                     class="text-gray-200 fa-solid fa-map fa-2x hover:text-gray-400"></i></button>
         </div>

         <fieldset class="flex flex-wrap gap-2 md:gap-4" name="category">
             <button id="allcat" name="category" value="All">
                 <p
                     class="text-sm hover:bg-gray-200 active:bg-gray-300 font-medium px-4 py-2 border rounded">
                     All</p>
             </button>
             <button id="masterplans" name="category" value="Masterplans">
                 <p
                     class="text-sm hover:bg-gray-200 active:bg-gray-300 font-medium px-4 py-2 border rounded">
                     Masterplans</p>
             </button>
             <button id="streetscapes" name="category" value="Streetscapes">
                 <p
                     class="text-sm hover:bg-gray-200 active:bg-gray-300 font-medium px-4 py-2 border rounded">
                     Streetscapes</p>
             </button>
             <button id="neighbourhoods" name="category" value="Neighbourhoods">
                 <p
                     class="text-sm hover:bg-gray-200 active:bg-gray-300 font-medium px-4 py-2 border rounded">
                     Neighbourhoods</p>
             </button>
         </fieldset>

         <div class="flex flex-col">
             <div class="hidden py-4 md:flex md:py-0 md:mt-2 lg:mt-0">
                 <button id="change-layout" onclick="return false;"> <i
                         class="mx-2 text-gray-200 transition fa-solid fa-list fa-2x hover:text-gray-400"></i></button>
                 <button id="change-layout2" onclick="return false;"> <i
                         class="mr-2 text-gray-200 transition fa-solid fa-border-all fa-2x hover:text-gray-400"></i></button>
                 <button id="change-layout3" onclick="return false;"> <i
                         class="text-gray-200 transition fa-solid fa-map fa-2x hover:text-gray-400"></i></button>
             </div>

         </div>

     </div>


     <div class="grid grid-cols-3 gap-2 mx-4 mt-4 md:grid-cols-5 md:mx-0">
         <div class="block">
             <label for="DeliveryStandard" class="block">
                 <p class="pb-2 font-bold text-black">Tags</p>
             </label>
             <div class="relative">
                 <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                     <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                         <path
                             d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                         </path>
                     </svg>
                 </span>
                 <input id="searchtag" type="text" name="tags" value=""
                     class="w-full py-3 pl-10 pr-4 text-gray-700 bg-gray-100 border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400"
                     placeholder="">
             </div>
         </div>

         <div class="block">
             <label for="DeliveryStandard" class="block">
                 <p class="pb-2 font-bold text-black">Size</p>
             </label>
             <select name="size" id="size_selector"
                 class="w-full px-4 py-3 text-sm bg-white border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                 <option value="">All</option>
                 <option value="Large" >Large</option>
                 <option value="Medium">Medium</option>
                 <option value="Small" >Small</option>
                 <option value="Xs" >Xs</option>
             </select>
         </div>

         <div class="block">
             <label for="DeliveryStandard" class="block">
                 <p class="pb-2 font-bold text-black">Status</p>
             </label>
             <select name="status" id="status_selector"
                 class="w-full px-4 py-3 text-sm bg-white border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                 <option value="">All</option>
                 <option value="built" >built</option>
                 <option value="future" >future</option>
                 <option value="under_development">under
                     development</option>
                 <option value="regeneration">regeneration</option>
             </select>
         </div>

         <div class="block">
             <label for="DeliveryStandard" class="block">
                 <p class="pb-2 font-bold text-black">City</p>
             </label>
             <select name="city" id="city_selector"
                 class="w-full px-4 py-3 text-sm bg-white border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                 <option value="">All</option>
                 @foreach ($cities as $city)
                     <option value="{{ $city->name }}">
                         {{ $city->name }}</option>
                 @endforeach

             </select>
         </div>

         <div class="block">
             <label for="DeliveryStandard" class="block">
                 <p class="pb-2 font-bold text-black">Country</p>
             </label>
             <select name="country" id="country_selector"
                 class="w-full px-4 py-3 text-sm transition bg-white border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                 <option value="">All</option>
                 @foreach ($countries as $country)
                     <option value="{{ $country->name }}">
                         {{ $country->name }}</option>
                 @endforeach

             </select>
         </div>

     </div>
 </div>
 <div data-barba="container">
     <section class="block pb-16 mx-4 md:mx-16 tabset">

         <div id="boucle" class="grid grid-cols-2 gap-5 mygrid lg:grid-cols-4 xl:grid-cols-5 ">

          
         </div>
     </section>
 </div>
<script>
const itemsPerPage = 10;
let currentPage = 1;


  $(document).ready(function() {
    url = "api/data";
      $('#boucle').empty();
    fetchAndRenderData(url);
    });

 const fetchAndRenderData = (url) => {
  fetch(url)
    .then((res) => res.json())
    .then((out) => {
        const obj = JSON.parse(JSON.stringify(out));
        let textFromJSON = obj;
              const startIndex = (currentPage - 1) * itemsPerPage;
                 const endIndex = startIndex + itemsPerPage;
                const itemsToDisplay = textFromJSON.slice(startIndex, endIndex);

        $.each(itemsToDisplay, function(i, item) {
           if (item.category == "Streetscapes") {
                    let html = `
                     <div
                         class="relative col-span-2 transition shadow-md element1 bg-gray-50 hover:bg-gray-100 md:hover:scale-105 border">
                         <a href="streetscapes_post?id=${item.id}" class="flex flex-col h-full">
                             @php $image1 =   $data['image'][0] ?? null; @endphp
                             <img alt="Art" src="storage/${item.image[0]}"alt=""
                                 onerror="this.src='./img/empty.png'" class="object-cover h-full max-h-[480px]" />
                             <div class="">
                                 <h3 class="mt-2 font-bold text-center text-gray-900 uppercase ">
                                     ${item.title} | ${item.author} | ${item.city}</h3>
                                 <p class=" pb-2 mb-2 mt-1 text-xs text-center mx-4 text-gray-700  truncate">
                                     ${item.category} &nbsp;
                                          ${item.tags}&nbsp;
                                 </p>

                             </div>
                         </a>
                     </div>
                     `;
                      $('#boucle').append(html);
                    } else if (item.category == "Masterplans") {
                        let html = `
                      <div class="relative transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105 border">
                         <a href="masterplans_post?id=${item.id}" class="flex flex-col h-full">
                             <img alt="Art" src="storage/${item.image[0]}"alt=""
                                 onerror="this.src='./img/empty.png'" class="object-cover h-full max-h-[480px]" />
                             <div class="">
                                 <h3 class="mt-2 text-sm font-bold text-center truncate mx-2">
                                     ${item.title} | ${item.author} | ${item.city}</h3>
                                 <p class="max-w-sm pb-2 mb-2 mt-1 text-xs text-center mx-4 text-gray-700  truncate">
                                       ${item.category} &nbsp;
                                          ${item.tags}&nbsp;
                                 </p>
                             </div>
                         </a>
                     </div>
                      `;
                   $('#boucle').append(html);
                    } else if (item.category == "Neighbourhoods") {
                        let html = `
                      <div class="relative transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105 border">
                         <a href="neighbourhoods_post?id=${item.id}" class="flex flex-col h-full">
                             <img alt="Art" src="storage/${item.image[0]}"alt=""
                                 onerror="this.src='./img/empty.png'" class="object-cover h-full max-h-[480px]" />
                             <div class="">
                                 <h3 class="mt-2 text-sm font-bold text-center truncate mx-2">
                                     ${item.title} | ${item.author} | ${item.city}</h3>
                                 <p class="max-w-sm pb-2 mb-2 mt-1 text-xs text-center mx-4 text-gray-700  truncate">
                                       ${item.category} &nbsp;
                                          ${item.tags}&nbsp;
                                 </p>
                             </div>
                         </a>
                     </div>
                      `;
                   $('#boucle').append(html);
                    }
        });
    })
};

$('#child').click(function() {
  url = "api/data?tags=Child-friendly";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#playful').click(function() {
  url = "api/data?tags=Playful";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#wsud').click(function() {
  url = "api/data?tags=wsud";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#carfree').click(function() {
  url = "api/data?tags=car-free";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#masterplans').click(function() {
  url = "api/data?category=masterplans";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#neighbourhoods').click(function() {
  url = "api/data?category=neighbourhoods";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#streetscapes').click(function() {
  url = "api/data?category=streetscapes";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#allcat').click(function() {
  url = "api/data";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#size_selector').change(function() {
  url = "api/data?size=" + $('#size_selector').val();
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#status_selector').change(function() {
  url = "api/data?status=" + $('#status_selector').val();
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#city_selector').change(function() {
  url = "api/data?q=" + $('#city_selector').val();
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#country_selector').change(function() {
  url = "api/data?q=" + $('#country_selector').val();
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#pop_selector').change(function() {
  url = "api/data?pop=" + $('#pop_selector').val();
  $('#boucle').empty();
  fetchAndRenderData(url);
});


 $('#searchbar').keyup(function() {
         url = "api/data?q=" + $('#searchbar').val();
        $('#boucle').empty();
        fetchAndRenderData(url);
    });


$('#searchtag').keyup(function() {

         url = "api/data?tags=" + $('#searchtag').val();
      $('#boucle').empty();
        fetchAndRenderData(url);
    });

    
        layout = null;

        $("#change-layout").click(function() {
            $(".mygrid").addClass("lg:grid-cols-4").addClass("xl:grid-cols-5").addClass("grid-cols-3").removeClass(
                "lg:grid-cols-2").removeClass("xl:grid-cols-3").removeClass("grid-cols-2");
            console.log(layout);
            layout = "xl";
        });

        $("#change-layout2").click(function() {
            $(".mygrid").removeClass("lg:grid-cols-4").removeClass("xl:grid-cols-5").removeClass("grid-cols-3")
                .addClass("grid-cols-2").addClass("lg:grid-cols-2").addClass("xl:grid-cols-3");
            console.log(layout);
            layout = "medium";
        });
    </script>