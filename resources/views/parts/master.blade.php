 <section class="pt-8">
     @php
  use \App\Http\Controllers\GlobalController;
         $city = GlobalController::pages();
         $country = GlobalController::pages();
         $size = urldecode(request()->get('size'));
         $q = urldecode(request()->get('q'));
     @endphp
     <div class="p-8 md:p-12 lg:px-12 lg:py-12">
         <div class="max-w-lg mx-auto text-center lg:max-w-4xl">
             <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                 Masterplans
             </h2>

             <p class="text-sm font-bold text-gray-700 md:text-xl pt-4">
                 Discover Urban Design's Hidden Gems: Explore The Urbanitarian Masterplan Archive
             </p>
             <p class="text-sm text-gray-500 md:text-base">
                 Get your daily dose of inspiration in our curated list of urban design projects from all around the world.<br>
                  Each project contains key insights along with useful diagrams, measurements and data
             </p>
         </div>

         <div class="max-w-2xl mx-auto mt-8">
             <div action=" " class="sm:flex sm:gap-4">
                 <div class="sm:flex-1">
                     <input id="searchbar" type="text" placeholder="SEARCH" name="q" value=""
                         class="w-full p-3 text-gray-700 transition bg-gray-100 border-gray-200 rounded-md shadow-sm focus:border-white focus:outline-none focus:ring focus:ring-gray-400" />
                 </div>
             </div>
         </div>

         <fieldset class="flex flex-wrap justify-center gap-2 pt-8 mx-auto md:gap-4">
             <button id="all">
                 <label for="All" id="Alltag"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">All</p>
                 </label>
             </button>

             <button id="child">
                 <label for="child" id="childtag"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">Child-friendly</p>
                 </label>
             </button>

             <button id="green">
                 <label for="green"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">Green</p>
                 </label>
             </button>

             <button id="climate">
                 <label for="climate"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">Climate-proof</p>
                 </label>
             </button>

             <button id="age">
                 <label for="age"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">Age-friendly</p>
                 </label>
             </button>

             <button id="placemaking">
                 <label for="placemaking"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">Placemaking</p>
                 </label>
             </button>
         </fieldset>

         <div class="grid grid-cols-3 gap-2 mx-4 mt-8 md:grid-cols-5 md:mx-0 border-t">
             <div class="block pt-4">
                 <label for="DeliveryStandard" class="block">
                     <p class="pb-2 font-bold text-black">Tags</p>
                 </label>
                 <select name="tags" id="tags_selector"
                     class="w-full px-4 py-3 text-sm  border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                 <option value="">All</option>
                 <option value="Child-friendly">Child-friendly</option>
                 <option value="Healthy">Healthy</option>
                 <option value="Safe">Safe</option>
                 <option value="Inclusive and Diverse">Inclusive and Diverse</option>
                 <option value="Green">Green</option>
                 <option value="Reachable">Reachable</option>
                 <option value="Affordable">Affordable</option>
                 <option value="Self-sufficient">Self-sufficient</option>
                 <option value="Car-free">Car-free</option>
                 <option value="Walkable">Walkable</option>
                 <option value="CBD">CBD</option>
                 <option value="Eco-village">Eco-village</option>
                 <option value="Nature-rich">Nature-rich</option>
                 <option value="Courtyards">Courtyards</option>
                 <option value="By the railway">By the railway</option>
                 <option value="DIY Urbanism">DIY Urbanism</option>
                 <option value="Food-production">Food-production</option>
                 <option value="Sustainable">Sustainable</option>
                 <option value="Science Park">Science Park</option>
                 <option value="Missing middle">Missing middle</option>
                 <option value="Dense">Dense</option>
                 <option value="Science Park">Science Park</option>
                 <option value="Business District">Business District</option>
                 <option value="Missing Middle">Missing middle</option>
                 <option value="Preventing Loneliness">Preventing Loneliness</option>
                 <option value="Youth-friendly">Youth-friendly</option>
                 <option value="Age-friendly">Age-friendly</option>
                 <option value="Accessible and Connected">Accessible and connected</option>
                 <option value="Climate-proof">Climate-proof</option>
                 <option value="Playful">Playful</option>
                 <option value="Circular">Circular</option>
                 <option value="Climate-neutral">Climate-neutral</option>
                 <option value="Zero Carbon">Zero carbon</option>
                 <option value="Carbon negative">Carbon negative</option>
                 <option value="WSUD">WSUD</option>
                 <option value="Place-led">Place-led</option>
                 <option value="Co-Housing">Co-housing</option>
                 <option value="Timber">Timber</option>
                 <option value="Social Housing">Social housing</option>
                 <option value="Biodiverse">Biodiverse</option>
                 <option value="Low-rise">Low-rise</option>
                 <option value="High-rise">High-rise </option>
                 <option value="Mixed-use">Mixed-use</option>
                 </select>
             </div>

             <div class="block pt-4">
                 <label for="DeliveryStandard" class="block">
                     <p class="pb-2 font-bold text-black">Size</p>
                 </label>
                 <select name="size" id="size_selector"
                     class="w-full px-4 py-3 text-sm  border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
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

             <div class="block pt-4">
                 <label for="DeliveryStandard" class="block">
                     <p class="pb-2 font-bold text-black">Status</p>
                 </label>
                 <select name="status" id="status_selector"
                     class="w-full px-4 py-3 text-sm  border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                     <option value="">All</option>
                     <option value="built">Built</option>
                     <option value="future">Future</option>
                     <option value="under_development">Under
                         development</option>
                     <option value="regeneration">Regeneration</option>
                 </select>
             </div>

             <div class="block pt-4">
                 <label for="DeliveryStandard" class="block">
                     <p class="pb-2 font-bold text-black">City</p>
                 </label>
                 <select name="city" id="city_selector"
                     class="w-full px-4 py-3 text-sm  border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                     <option value="">All</option>
                     @foreach ($cities as $city)
                     <option value="{{ $city->name }}">
                         {{ $city->name }}</option>
                 @endforeach

                 </select>
             </div>

             <div class="block pt-4">
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


 </section>

 <div class="mx-4">
     <section class="pb-16 md:mx-auto">
         <div id="boucle" class="grid grid-cols-1 gap-7 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5">


         </div>
         <div class="flex pt-8">
             <button id="prev"
                 class="flex items-center justify-center px-3 py-2 mx-auto text-gray-900 border border-gray-300 rounded-md cursor-pointer hover:border-gray-300 hover:bg-gray-200  peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                 <p class="text-sm font-medium">previous</p>
                 <button id="next"
                     class="flex items-center justify-center px-3 py-2 mx-auto text-gray-900 border border-gray-300 rounded-md cursor-pointer hover:border-gray-300 hover:bg-gray-200  peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">Next</p>
         </div>
     </section>
 </div>

 <script>
     $('button').click(function() {
         $(this).addClass('bg-gray-200 rounded').siblings().removeClass('bg-gray-200 rounded');

     });

     const itemsPerPage = 50;
     let currentPage = 1;



     $(document).ready(function() {
         url = "api/masterplans";
         $('#boucle').empty();
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
                 const obj = JSON.parse(JSON.stringify(out));
                 let textFromJSON = obj;
                 totalPages = Math.ceil(textFromJSON.length / itemsPerPage);
                 const startIndex = (currentPage - 1) * itemsPerPage;
                 const endIndex = startIndex + itemsPerPage;
                 const itemsToDisplay = textFromJSON.slice(startIndex, endIndex);
                 $.each(itemsToDisplay, function(i, item) {
                     let html = `
                        <div class="">
                    <a href="masterplans_post?id=${item.id}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b saturate-120" src="storage/uploads/masterplans/${item.image}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-3 text-sm font-bold text-center truncate mx-2">${item.title} |${item.author} | ${item.city}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   ${item.category}, ${item.size} 
                                </p>
                            </div>
                        </div>
                    </a>
                </div> `;
                     $('#boucle').append(html);
                 });
             })
     };

     $('#child').click(function() {
         url = "api/masterplans?tags=Child-friendly";
         $('#searchbar').val('Child-friendly');
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#green').click(function() {
         url = "api/masterplans?tags=Green";
         $('#searchbar').val('Green');
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#climate').click(function() {
         url = "api/masterplans?tags=climate";
         $('#searchbar').val('climate');
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#age').click(function() {
         url = "api/masterplans?tags=age";
         $('#searchbar').val('Age-friendly');
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#all').click(function() {
         url = "api/masterplans";
         $('#searchbar').val('');
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

      $('#tags_selector').change(function() {
         url = "api/masterplans?tags=" + $('#tags_selector').val();
         $('#boucle').empty();
         currentfilter = $('#tags_selector').val();
         fetchAndRenderData(url);
     });

     $('#size_selector').change(function() {
         url = "api/masterplans?size=" + $('#size_selector').val();
         $('#boucle').empty();
         currentfilter = $('#size_selector').val();
         fetchAndRenderData(url);
     });

     $('#status_selector').change(function() {
         url = "api/masterplans?status=" + $('#status_selector').val();
         $('#boucle').empty();
         currentfilter = $('#status_selector').val();
         fetchAndRenderData(url);
     });

     $('#city_selector').change(function() {
         url = "api/masterplans?q=" + $('#city_selector').val();
         $('#boucle').empty();
         currentfilter = $('#city_selector').val();
         fetchAndRenderData(url);
     });

     $('#country_selector').change(function() {
         url = "api/masterplans?q=" + $('#country_selector').val();
         $('#boucle').empty();
         currentfilter = $('#country_selector').val();
         fetchAndRenderData(url);
     });

     $('#searchbar').keyup(function() {
         url = "api/masterplans?q=" + $('#searchbar').val();
         $('#boucle').empty();
         fetchAndRenderData(url);
     });
 </script>
