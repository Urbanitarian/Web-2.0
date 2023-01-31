<section class="pt-8">
    <div class="p-8 md:p-12 lg:px-12 lg:py-12">
        <div class="max-w-lg mx-auto text-center lg:max-w-xl">
            <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                Neighbourhoods
            </h2>

            <p class="mt-4 text-sm text-gray-500">
                We are number one destination to get knowledge on urban design.
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




        <fieldset class="flex flex-wrap justify-center gap-2 pt-8 mx-auto md:gap-4">
            <button id="Allsize">
                <label for="Allsize" id="Allsizetag"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">All size</p>
                </label>
            </button>

            <button id="Large">
                <label for="large"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">large</p>
                </label>
            </button>

            <button id="Medium">
                <label for="medium"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">medium</p>
                </label>
            </button>

            <button id="Small">
                <label for="small"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">small</p>
                </label>
            </button>

            <button id="Xs">
                <label for="xs"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">xs</p>
                </label>
            </button>
        </fieldset>


        <div>
            <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
                <ul id="boucle" class="grid gap-4 mt-8 sm:grid-cols-2 md:grid-cols-3 ">

                </ul>
            </div>
              <div class="flex pt-8">
        <button id="prev" class="flex items-center justify-center px-3 py-2 mx-auto text-gray-900 border border-gray-300 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
            <p class="text-sm font-medium">previous</p>
        <button id="next" class="flex items-center justify-center px-3 py-2 mx-auto text-gray-900 border border-gray-300 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
            <p class="text-sm font-medium">Next</p>
              </div>
        </div>


</section>


<script>
const itemsPerPage = 10;
let currentPage = 1;

  $(document).ready(function() {
    url = "api/neighbourhoods";
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
                         <div class="border">
                   <a href="./neighbourhoods_post?id=${item.id}" class="block overflow-hidden bg-gray-100 shadow-lg group">
                   <img src="storage/${item.image[0]}" alt="" onerror="this.src=\'./img/empty.png\'" class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />
                   <div class="relative pt-3 bg-gray-100">
                   <span class="mx-2 text-base font-bold tracking-wider text-gray-900">${item.title}</span>
                   <p class="my-1">
                   <span class="mx-2 text-xs font-semibold text-gray-500">${item.tags}</span>
                   </p>
                   </div>
                   </a>
                   </div> `;
                   $('#boucle').append(html);
        });
    })
};

$('#child').click(function() {
  url = "api/neighbourhoods?tags=Child-friendly";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#green').click(function() {
  url = "api/neighbourhoods?tags=Green";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#climate').click(function() {
  url = "api/neighbourhoods?tags=climate";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#age').click(function() {
  url = "api/neighbourhoods?tags=age";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#all').click(function() {
  url = "api/neighbourhoods";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#Allsize').click(function() {
  url = "api/neighbourhoods";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#Large').click(function() {
  url = "api/neighbourhoods?size=large";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#Medium').click(function() {
  url = "api/neighbourhoods?size=medium";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#Small').click(function() {
  url = "api/neighbourhoods?size=small";
  $('#boucle').empty();
  fetchAndRenderData(url);
});

$('#Xs').click(function() {
  url = "api/neighbourhoods?size=xs";
  $('#boucle').empty();
  fetchAndRenderData(url);
});



 $('#searchbar').keyup(function() {
         url = "api/neighbourhoods?q=" + $('#searchbar').val();
        $('#boucle').empty();
        fetchAndRenderData(url);
    });





</script>
