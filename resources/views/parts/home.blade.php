 <section class="pt-8 mx-8 border-b">
     <div class="p-8 md:p-12 lg:px-12 lg:py-10">
         <div class="max-w-lg mx-auto text-center select-none lg:max-w-xl">
             <img class="flex justify-center w-12 mx-auto my-8" src="./img/logo.png">
             <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
                 The world's go to urban design online platform
             </h2>

             <p class="mt-4 text-base text-gray-500">
                 The Ultimate Urban Design Knowledge Hub - Urbanitarian
             </p>
         </div>

         <div class="max-w-2xl mx-auto mt-8">

             <div class="sm:flex-1">
                 <input id="searchbar" type="text" placeholder="SEARCH" name="q" value=""
                     class="w-full p-3 text-gray-700 transition bg-gray-100 border-gray-200 rounded-md shadow-sm focus:border-white focus:outline-none focus:ring focus:ring-gray-400" />
             </div>

         </div>

 </section>

 <div id="mysearch" class="pt-4 pb-8 mx-2 bg-white md:mx-16">

     <div class="flex flex-wrap justify-between py-4 mx-4 md:mx-0">
         <div class="hidden pb-4 md:flex md:pb-0">
             <select name="popular" id="pop_selector"
                 class=" px-4 h-[40px] text-sm bg-white border-gray-200 rounded-md  border focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                 <option value="">Popular</option>
                 <option value="new">The Newest</option>
                 <option value="old">The Oldest</option>
             </select>
         </div>

         <fieldset class="flex flex-wrap gap-2 md:gap-4" name="category">
          
             <button id="masterplans" name="category" value="Masterplans">
                 <p id="masterbtn" class="px-4 py-2 text-sm font-medium border rounded hover:bg-gray-200 active:bg-gray-300 ">Masterplans <a id="masternum" class="border-l border-gray-400 pl-2"> &nbsp;{{ $masternum }}</a></p>
             </button>
             <button id="streetscapes" name="category" value="Streetscapes">
                 <p id="streetbtn" class="px-4 py-2 text-sm font-medium border rounded hover:bg-gray-200 active:bg-gray-300">Streetscapes <a id="streetnum" class="border-l border-gray-400 pl-2"> &nbsp;{{ $streetnum }}</a></p>
             </button>
             <button id="urbanscapes" name="category" value="Neighbourhoods">
                 <p id="urbanbtn" class="px-4 py-2 text-sm font-medium border rounded hover:bg-gray-200 active:bg-gray-300">Urbanscapes <a id="urbannum" class="border-l border-gray-400 pl-2"> &nbsp;{{ $urbannum }}</a></p>
             </button>
         </fieldset>

         <div class="flex flex-col">
             <div class="py-4 md:flex md:py-0 md:mt-2 lg:mt-0">
                 <span id="change-layout" onclick="return false;"> <i
                         class="mx-2 text-gray-200 transition fa-solid fa-list fa-2x hover:text-gray-400"></i></span>
                 <span id="change-layout3" onclick="return false;"> <i
                         class="text-gray-200 transition fa-solid fa-map fa-2x hover:text-gray-400"></i></span>
             </div>

         </div>

     </div>


     <div class="grid grid-cols-3 gap-2 mx-4 mt-4 md:grid-cols-5 md:mx-0">
         <div class="block">
             <label for="DeliveryStandard" class="block">
                 <p class="pb-2 font-bold text-black">Tags</p>
             </label>
             <select name="tags" id="tags_selector"
                 class="w-full px-4 py-3 text-sm border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                 <option value="">All</option>
                 <option value="Accessible and Connected">Accessible and connected</option>
                 <option value="Affordable">Affordable</option>
                 <option value="Age-friendly">Age-friendly</option>
                 <option value="Biodiverse">Biodiverse</option>
                 <option value="Business District">Business District</option>
                 <option value="By the railway">By the railway</option>
                 <option value="By the water">By the water</option>
                 <option value="CBD">CBD</option>
                 <option value="Car-free">Car-free</option>
                 <option value="Carbon negative">Carbon negative</option>
                 <option value="Circular">Circular</option>
                 <option value="Climate adaptation">Climate adaptation</option>
                 <option value="Climate-proof">Climate-proof</option>
                 <option value="Climate-neutral">Climate-neutral</option>
                 <option value="Co-Housing">Co-housing</option>
                 <option value="Complete Street">Complete Street</option>
                 <option value="Courtyards">Courtyards</option>
                 <option value="DIY Urbanism">DIY Urbanism</option>
                 <option value="Dense">Dense</option>
                 <option value="Eco-village">Eco-village</option>
                 <option value="Floating City">Floating City</option>
                 <option value="Food-production">Food-production</option>
                 <option value="Garden City">Garden City</option>
                 <option value="Green">Green</option>
                 <option value="Green wedges">Green wedges</option>
                 <option value="Healthy">Healthy</option>
                 <option value="High-rise">High-rise </option>
                 <option value="Hi-Tech">Hi-Tech</option>
                 <option value="Houses in row">Houses in row</option>
                 <option value="Inclusive and Diverse">Inclusive and Diverse</option>
                 <option value="Low-rise">Low-rise</option>
                 <option value="Mixed-use">Mixed-use</option>
                 <option value="Modular">Modular</option>
                 <option value="Nature-rich">Nature-rich</option>
                 <option value="Net zero">Net zero</option>
                 <option value="Outdoor classroom">Outdoor classroom</option>
                 <option value="Place-led">Place-led</option>
                 <option value="Playful">Playful</option>
                 <option value="Preventing Loneliness">Preventing Loneliness</option>
                 <option value="Productive landscape">Productive landscape</option>
                 <option value="Reachable">Reachable</option>
                 <option value="Resilient landscape">Resilient landscape</option>
                 <option value="Regeneration">Regeneration</option>
                 <option value="Safe">Safe</option>
                 <option value="Science Park">Science Park</option>
                 <option value="Schoolyards">Schoolyards</option>
                 <option value="Self-sufficient">Self-sufficient</option>
                 <option value="Social Housing">Social housing</option>
                 <option value="Solar Powered">Solar Powered</option>
                 <option value="Timber">Timber</option>
                 <option value="Transformation">Transformation</option>
                 <option value="TOD">TOD</option>
                 <option value="WSUD">WSUD</option>
                 <option value="Youth-friendly">Youth-friendly</option>
                 <option value="Zero carbon">Zero carbon</option>
             </select>
         </div>

         <div class="block">
             <label for="DeliveryStandard" class="block">
                 <p class="pb-2 font-bold text-black">Size</p>
             </label>
             <select name="size" id="size_selector"
                 class="w-full px-4 py-3 text-sm border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                 <option value="">All</option>
                 <option value="XXXXL">XXXXL</option>
                 <option value="XXXL">XXXL</option>
                 <option value="XXL">XXL</option>
                 <option value="XL">XL</option>
                 <option value="L">L</option>
                 <option value="M">M</option>
                 <option value="S">S</option>
                 <option value="XS">XS</option>
                 <option value="XXS">XXS</option>
                 <option value="XXXS">XXXS</option>
             </select>
         </div>

         <div class="block">
             <label for="DeliveryStandard" class="block">
                 <p class="pb-2 font-bold text-black">Status</p>
             </label>
             <select name="status" id="status_selector"
                 class="w-full px-4 py-3 text-sm border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                 <option value="">All</option>
                 <option value="built">Built</option>
                 <option value="future">Future</option>
                 <option value="under_development">Under
                     development</option>
                 <option value="regeneration">Regeneration</option>
             </select>
         </div>

         <div class="block">
             <label for="DeliveryStandard" class="block">
                 <p class="pb-2 font-bold text-black">City</p>
             </label>
             <select name="city" id="city_selector"
                 class="w-full px-4 py-3 text-sm border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                 <option value="">All</option>
                 @foreach ($cities->sortBy('name') as $city)
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
                 @foreach ($countries->sortBy('name') as $country)
                     <option value="{{ $country->name }}">
                         {{ $country->name }}</option>
                 @endforeach

             </select>
         </div>

     </div>
 </div>
 <div data-barba="container">
     <section class="block pb-8 mx-4 md:mx-16 tabset">
        <div class="mx-auto">
         <div id="boucle" class="grid grid-cols-2 gap-5 mygrid lg:grid-cols-4 xl:grid-cols-5 min-h-[640px]">

         </div>
         </div>
    <div class="flex pt-10">
             <button id="prev" onclick="window.scrollTo(0, 400);"
                 class="flex items-center justify-center px-3 py-2 mx-auto text-gray-900 border border-gray-300 rounded-md cursor-pointer hover:border-gray-300 hover:bg-gray-200 active:bg-gray-500 active:text-white peer-checked:text-white">
                 <p class="text-sm font-medium">previous</p>
             </button>

             <button id="next" onclick="window.scrollTo(0, 400);"
                 class="flex items-center justify-center px-3 py-2 mx-auto text-gray-900 border border-gray-300 rounded-md cursor-pointer hover:border-gray-300 hover:bg-gray-200 active:bg-gray-500 active:text-white peer-checked:text-white">
                 <p class="text-sm font-medium">Next</p>
             </button>
         </div>
     </section>
 </div>
 <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"
     integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
 <script>
     const itemsPerPage = 10;
     let categories = "all";
     let view = "grid";
     currentPage = 1;
     let currentfilter = "";
     let url = "";

     $(document).ready(function() {
         url = "api/data?category=masterplans";
         $('#boucle').empty();
         currentfilter = "none";
         fetchAndRenderData(url);
     });


     $("#next").click(function() {
         $('#boucle').empty();
         currentPage++;
         if (currentPage > totalPages) {
             currentPage = totalPages;
         }

         fetchAndRenderData(url);
     });

     $("#prev").click(function() {
         $('#boucle').empty();
         currentPage--;
         if (currentPage < 1) {
             currentPage = 1;
         }

         fetchAndRenderData(url);
     });

     const fetchAndRenderData = (url) => {
         fetch(url)
             .then((res) => res.json())
             .then((out) => {
                console.log(currentPage);
                 const obj = JSON.parse(JSON.stringify(out));
                 let textFromJSON = obj;
                 let num = textFromJSON.length;
                 totalPages = Math.ceil(textFromJSON.length / itemsPerPage);
                 const startIndex = (currentPage - 1) * itemsPerPage;
                 const endIndex = startIndex + itemsPerPage;
                 const itemsToDisplay = textFromJSON.slice(startIndex, endIndex);
              if (currentPage == totalPages) {
                $('#next').hide();
                 } else {
                $('#next').show();
                 }
              if (currentPage == 1) { 
                $('#prev').hide();
                    } else {
                $('#prev').show();
                    }   
                 if (view == "grid") {
                     $.each(itemsToDisplay, function(i, item) {
                         if (item.category == "Masterplans") {
                            btn1 = document.getElementById("masterbtn");
                            btn1.classList.add("bg-gray-200");
                              btn2 = document.getElementById("streetbtn");
                            btn2.classList.remove("bg-gray-200");
                              btn3 = document.getElementById("urbanbtn");
                            btn3.classList.remove("bg-gray-200");

                             let html = `
                      <div class="relative overflow-hidden transition border shadow-md bg-gray-50 hover:bg-gray-100 saturate-120 animate__animated animate__backInLeft">
                         <a href="masterplans_post?id=${item.id}" class="flex flex-col h-full duration-300 md:hover:scale-105">
                             <img alt="Art" src="storage/uploads/thumbnails/masterplans/${item.image}"alt=""
                                 onerror="this.src='storage/uploads/masterplans/${item.image}'" class="object-cover h-full  saturate-120 max-h-[480px]" />
                             <div class="">
                                 <h3 class="mx-4 mt-2 text-sm font-bold text-center truncate">
                                     ${item.title} | ${item.author} | ${item.city}</h3>
                                 <p class="max-w-sm pb-2 mx-6 mt-1 mb-2 text-xs text-center text-gray-700 truncate">
                                       ${item.category} &nbsp;
                                       ${item.tags.map(tag => `${tag}`).join(' &nbsp;')}
                                 </p>
                             </div>
                         </a>
                     </div>
                      `;
                             $('#boucle').append(html);
                         } else if (item.category == "Urbanscapes") {
                             btn1 = document.getElementById("masterbtn");
                            btn1.classList.remove("bg-gray-200");
                              btn2 = document.getElementById("streetbtn");
                            btn2.classList.remove("bg-gray-200");
                              btn3 = document.getElementById("urbanbtn");
                            btn3.classList.add("bg-gray-200");
                             let html = `
                      <div class="relative overflow-hidden transition border shadow-md bg-gray-50 hover:bg-gray-100 saturate-120 animate__animated animate__backInRight">
                         <a href="urbanscapes_post?id=${item.id}" class="flex flex-col h-full duration-300 md:hover:scale-105">
                             <img alt="Art" src="storage/uploads/thumbnails/urbanscapes/${item.imagea}"alt=""
                                 onerror="this.src='storage/uploads/urbanscapes/${item.imagea}'" class="object-cover h-full  saturate-120 max-h-[480px]" />
                             <div class="">
                                 <h3 class="mx-4 mt-2 text-sm font-bold text-center truncate">
                                     ${item.title} | ${item.author} | ${item.city}</h3>
                                 <p class="max-w-sm pb-2 mx-6 mt-1 mb-2 text-xs text-center text-gray-700 truncate">
                                       ${item.category} &nbsp;
                                           ${item.tags.map(tag => `${tag}`).join(' &nbsp;')}
                                 </p>
                             </div>
                         </a>
                     </div>
                      `;
                             $('#boucle').append(html);
                         } else if (item.category == "Streetscapes") {
                            thegrid = document.getElementById("boucle");
                            thegrid.classList.remove("xl:grid-cols-5");
                                btn1 = document.getElementById("masterbtn");
                            btn1.classList.remove("bg-gray-200");
                              btn2 = document.getElementById("streetbtn");
                            btn2.classList.add("bg-gray-200");
                              btn3 = document.getElementById("urbanbtn");
                            btn3.classList.remove("bg-gray-200");
                             let html = `
                     <div
                         class="relative col-span-3 md:col-span-2  overflow-hidden transition border shadow-md element1 bg-gray-50 hover:bg-gray-100 saturate-120 animate__animated animate__backInUp">
                         <a href="streetscapes_post?id=${item.id}" class="flex flex-col h-full duration-300 md:hover:scale-105">
                             <img alt="Art" src="storage/uploads/thumbnails/streetscapes/${item.imagea}"alt=""
                                 onerror="this.src='storage/uploads/streetscapes/${item.imagea}'" class="object-cover h-full  saturate-120 max-h-[480px]" />
                             <div class="">
                                 <h3 class="mt-4 font-bold text-center text-gray-900 uppercase ">
                                     ${item.title} | ${item.author} | ${item.city}</h3>
                                 <p class="pb-2 mx-6 mt-1 mb-2 text-xs text-center text-gray-700 truncate ">
                                     ${item.category} &nbsp;
                                            ${item.tags.map(tag => `${tag}`).join(' &nbsp;')}
                                 </p>

                             </div>
                         </a>
                     </div>`;
                             $('#boucle').append(html);
                         }
                     })
                 } else {
                     $(".mygrid").removeClass("lg:grid-cols-4").removeClass("xl:grid-cols-5").removeClass(
                         "grid-cols-3").removeClass("grid-cols-2").addClass("grid-cols-1").addClass(
                         "lg:grid-cols-1").addClass("xl:grid-cols-1").removeClass("gap-5");
                     let html =
                         `<section id='themap' class='flex w-full pb-16 mx-auto border-b'><div id='map2' class='mx-2 mt-4 rounded h-[650px] w-screen'></div></section>`;
                     $('#boucle').append(html);

                     fetch(url)
                         .then((resa) => resa.json())
                         .then((outa) => {
                             const obja = JSON.parse(JSON.stringify(outa));
                             let thedata = obja;

                             amarkers = {};

                             let mymap2 = L.map('map2').setView([48.6890, 11.14086], 2);
                             theosmLayer = L.tileLayer(
                                 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                                     maxZoom: 19,
                                     apikey: 'choisirgeoportail',
                                     format: 'image/jpeg',
                                     style: 'normal'
                                 }).addTo(mymap2);
                             mymap2.addLayer(theosmLayer);
                             mymap2.touchZoom.enable();
                             mymap2.scrollWheelZoom.disable();

                             let counter = 0;
                             for (let i = 0; i < thedata.length; i++) {
                                 counter = counter + 1;
                                 mydata = thedata[i];
                                 mydatacat = mydata.category.toLowerCase();
                                 //mydatacat to lower case
                                 if (mydatacat == "masterplans") {
                                     mypics = mydata.image;
                                 } else {
                                     mypics = mydata.imagea;
                                 }
                                 category = mydata.category.toLowerCase();
                                 if (category == 'streetscapes') {
                                     cat = 1;
                                 } else if (category == 'masterplans') {
                                     cat = 2;
                                 } else if (category == 'urbanscapes') {
                                     cat = 3;
                                 }

                                 mydataid = mydata.id;
                                 mydatacity = mydata.city;
                                 mydataname = mydata.title;
                                 mydataposition = mydata.location;
                                 var decimalStringa = [0, 0];
                                 if (mydataposition != null) {
                                     decimalStringa = mydataposition.split(',');
                                 }
                                 decimalStringa[0] = parseFloat(decimalStringa[0]).toFixed(6);
                                 decimalStringa[1] = parseFloat(decimalStringa[1]).toFixed(6);

                                 markera = L.marker([decimalStringa[0], decimalStringa[1]], {}).addTo(mymap2)
                                     .bindPopup(
                                         '<div class="relative flex flex-col mappopup"><img onclick="myfunction(' +
                                         mydataid + ',' + cat +
                                         ')" class="mt-4" src="/storage/uploads/' + mydatacat + '/' +
                                         mypics +
                                         '" /><div class="flex justify-between"><h1 class="mt-1 mb-2 font-bold clamp" id="mydatanom">' +
                                         mydataname +
                                         '</h1><h1 class="pb-4 mt-1 mb-2 text-xs text-gray-500" id="mydatacity">' +
                                         mydatacity + '</h1></div></div>'
                                     );
                                 amarkers[mydata.id] = markera;
                             }

                         })

                 }

             })
     };

         $('button').click(function() {
         $(this).addClass('bg-gray-200 rounded').siblings().removeClass('bg-gray-200 rounded');

     });


     $('#masterplans').click(function() {
         currentPage = 1;
         resetLayout();
         url = "api/data?category=masterplans";
      
         $('#boucle').empty();
         currentfilter = "masterplans";
         category = "masterplans";
       
         fetchAndRenderData(url);
     });

     $('#urbanscapes').click(function() {
         currentPage = 1;
         resetLayout();
         url = "api/data?category=urbanscapes";
         $('#boucle').empty();
         currentfilter = "urbanscapes";
         category = "urbanscapes";
   
         fetchAndRenderData(url);
     });

     $('#streetscapes').click(function() {
         currentPage = 1;
         resetLayout();
         url = "api/data?category=streetscapes";
  
         $('#boucle').empty();
         currentfilter = "streetscapes";
         category = "streetscapes";
         fetchAndRenderData(url);
     });

     $('#tags_selector').change(function() {
         currentPage = 1;
         url = "api/data?tags=" + $('#tags_selector').val();
         $('#boucle').empty();
         currentfilter = $('#tags_selector').val();
         fetchAndRenderData(url);
     });

     $('#size_selector').change(function() {
         currentPage = 1;
         url = "api/data?size=" + $('#size_selector').val();
         $('#boucle').empty();
         currentfilter = $('#size_selector').val();
         fetchAndRenderData(url);
     });

     $('#status_selector').change(function() {
         currentPage = 1;
         url = "api/data?status=" + $('#status_selector').val();
         $('#boucle').empty();
         currentfilter = $('#status_selector').val();
         fetchAndRenderData(url);
     });

     $('#city_selector').change(function() {
         currentPage = 1;
         url = "api/data?q=" + $('#city_selector').val();
         $('#boucle').empty();
         currentfilter = $('#city_selector').val();
         fetchAndRenderData(url);
     });

     $('#country_selector').change(function() {
         currentPage = 1;
         url = "api/data?q=" + $('#country_selector').val();
         $('#boucle').empty();
         currentfilter = $('#country_selector').val();
         fetchAndRenderData(url);
     });

     $('#pop_selector').change(function() {
         currentPage = 1;
         url = "api/data?pop=" + $('#pop_selector').val();
         $('#boucle').empty();
         currentfilter = $('#pop_selector').val();
         fetchAndRenderData(url);
     });


     $('#searchbar').keyup(function() {
         currentPage = 1;
         resetLayout();
         url = "api/data?q=" + $('#searchbar').val();
         $('#boucle').empty();
         currentfilter = $('#searchbar').val();
         fetchAndRenderData(url);
     });


     $('#searchtag').keyup(function() {
         currentPage = 1;
         resetLayout();
         url = "api/data?tags=" + $('#searchtag').val();
         $('#boucle').empty();
         currentfilter = $('#searchtag').val();
         fetchAndRenderData(url);
     });


     layout = null;

     function resetLayout() {
      
         $(".mygrid").addClass("lg:grid-cols-4").addClass("xl:grid-cols-5").addClass("grid-cols-3").addClass(
                 "gap-5").removeClass("lg:grid-cols-2").removeClass("xl:grid-cols-3").removeClass("grid-cols-2")
             .removeClass("grid-cols-1").removeClass("lg:grid-cols-1").removeClass("xl:grid-cols-1");
         layout = "xl";
     
     }



     $("#change-layout").click(function() {
         view = "grid";
         $("#themap").remove();
         fetchAndRenderData(url);
         $(".mygrid").addClass("lg:grid-cols-4").addClass("xl:grid-cols-5").addClass("grid-cols-3").addClass(
                 "gap-5").removeClass("lg:grid-cols-2").removeClass("xl:grid-cols-3").removeClass("grid-cols-2")
             .removeClass("grid-cols-1").removeClass("lg:grid-cols-1").removeClass("xl:grid-cols-1");

         layout = "xl";
         console.log(layout);
     });

     $("#change-layout2").click(function() {
         $("#themap").remove();
         fetchAndRenderData(url);
         $(".mygrid").removeClass("lg:grid-cols-4").removeClass("xl:grid-cols-5").removeClass("grid-cols-3")
             .removeClass("grid-cols-1").removeClass("lg:grid-cols-1").removeClass("xl:grid-cols-1").addClass(
                 "grid-cols-2").addClass("lg:grid-cols-2").addClass("xl:grid-cols-3").addClass("gap-5");

         layout = "medium";
         console.log(layout);
     });

     $("#change-layout3").click(function() {
         view = "map";
         $("#boucle").empty();
         $(".mygrid").removeClass("lg:grid-cols-4").removeClass("xl:grid-cols-5").removeClass("grid-cols-3")
             .removeClass("grid-cols-2").addClass("grid-cols-1").addClass("lg:grid-cols-1").addClass(
                 "xl:grid-cols-1").removeClass("gap-5");
         $("#boucle").html(
             "<section id='themap' class='flex w-full pb-16 mx-auto border-b'><div id='map2' class='mx-2 mt-4 rounded h-[650px] w-screen'></div></section>"
         );


         layout = "map";

         fetch(url)
             .then((resa) => resa.json())
             .then((outa) => {
                 const obja = JSON.parse(JSON.stringify(outa));
                 let thedata = obja;

                 amarkers = {};

                 let mymap2 = L.map('map2').setView([48.6890, 11.14086], 2);
                 theosmLayer = L.tileLayer(
                     'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                         maxZoom: 19,
                         apikey: 'choisirgeoportail',
                         format: 'image/jpeg',
                         style: 'normal'
                     }).addTo(mymap2);
                 mymap2.addLayer(theosmLayer);
                 mymap2.touchZoom.enable();
                 mymap2.scrollWheelZoom.disable();
                 var legend = L.control({
                     position: "topright"
                 });
                 legend.onAdd = function(mymap2) {
                     var div = L.DomUtil.create("div", "legend bg-gray-200 p-2 border rounded");
                     div.innerHTML +=
                         '<span class="relative"><span class="inline-block ml-6 font-bold">Masterplans</span><span class="absolute left-0 block w-4 h-4 transform -translate-y-1/2 bg-[#4863DA] top-1/2"></span></span><br>';
                     div.innerHTML +=
                         '<span class="relative"><span class="inline-block ml-6 font-bold">Streetscapes</span><span class="absolute left-0 block w-4 h-4 transform -translate-y-1/2 bg-[#D95649] top-1/2"></span></span><br>';
                     div.innerHTML +=
                         '<span class="relative"><span class="inline-block ml-6 font-bold">Urbanscapes</span><span class="absolute left-0 block w-4 h-4 transform -translate-y-1/2 bg-[#63D74B] top-1/2"></span></span><br>';
                     return div;
                 };
                 legend.addTo(mymap2);
                 let counter = 0;
                 for (let i = 0; i < thedata.length; i++) {
                     counter = counter + 1;
                     mydata = thedata[i];
                     mydatacat = mydata.category.toLowerCase();
                     //mydatacat to lower case
                     if (mydatacat == "masterplans") {
                         mypics = mydata.image;
                     } else {
                         mypics = mydata.imagea;
                     }
                     category = mydata.category.toLowerCase();
                     if (category == 'streetscapes') {
                         cat = 1;
                          icon = L.icon({
                iconUrl: '/img/markers.png',
                iconSize: [40, 40],
                iconAnchor: [20, 40],
                popupAnchor: [0, -40]
            });
                     } else if (category == 'masterplans') {
                         cat = 2;
                          icon = L.icon({
                iconUrl: '/img/markerm.png',
                iconSize: [40, 40],
                iconAnchor: [20, 40],
                popupAnchor: [0, -40]
            });
                     } else if (category == 'urbanscapes') {
                         cat = 3;
                                     icon = L.icon({
                iconUrl: '/img/markeru.png',
                iconSize: [40, 40],
                iconAnchor: [20, 40],
                popupAnchor: [0, -40]
            });
                     }

                     mydataid = mydata.id;
                     mydatacity = mydata.city;
                     mydataname = mydata.title;
                     mydataposition = mydata.location;
                     var decimalStringa = [0, 0];
                     if (mydataposition != null) {
                         decimalStringa = mydataposition.split(',');
                     }
                     decimalStringa[0] = parseFloat(decimalStringa[0]).toFixed(6);
                     decimalStringa[1] = parseFloat(decimalStringa[1]).toFixed(6);

                     markera = L.marker([decimalStringa[0], decimalStringa[1]], { icon: icon}).addTo(mymap2).bindPopup(
                         '<div class="relative flex flex-col mappopup"><img onclick="myfunction(' +
                         mydataid + ',' + cat +
                         ')" class="mt-4" src="/storage/uploads/' + mydatacat + '/' + mypics +
                         '" /><div class="flex justify-between"><h1 class="mt-1 mb-2 font-bold clamp" id="mydatanom">' +
                         mydataname +
                         '</h1><h1 class="pb-4 mt-1 mb-2 text-xs text-gray-500" id="mydatacity">' +
                         mydatacity + '</h1></div></div>'
                     );
                     amarkers[mydata.id] = markera;
                 }

             })

     });
 </script>
 <style>
     .clamp {
         display: -webkit-box;
         -webkit-line-clamp: 2;
         -webkit-box-orient: vertical;
         overflow: hidden;

     }
 </style>
