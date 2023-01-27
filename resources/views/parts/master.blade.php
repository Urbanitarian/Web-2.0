 <section class="pt-8">
 @php
    $size = urldecode(request()->get('size'));
    $q = urldecode(request()->get('q'));
@endphp
        <div class="p-8 md:p-12 lg:px-12 lg:py-12">
            <div class="max-w-lg mx-auto text-center lg:max-w-xl">
                <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                    Masterplans
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
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">All</p>
                </label>
            </button>

            <button id="child">
                <label for="child" id="childtag"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">Child-friendly</p>
                </label>
            </button>

            <button id="green">
                <label for="green"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">Green</p>
                </label>
            </button>

            <button id="climate">
                <label for="climate"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">Climate-proof</p>
                </label>
            </button>

            <button id="age">
                <label for="age"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">Age-friendly</p>
                </label>
            </button>

            <button id="placemaking">
                <label for="placemaking"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">Placemaking</p>
                </label>
            </button>
        </fieldset>

        <fieldset class="flex flex-wrap justify-center gap-2 pt-8 mx-auto md:gap-4">
            <button id="Allsize">
                <label for="Allsize" id="Allsizetag"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">All size</p>
                </label>
            </button>

            <button id="Large">
                <label for="large"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">large</p>
                </label>
            </button>

            <button id="Medium">
                <label for="medium"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">medium</p>
                </label>
            </button>

            <button id="Small">
                <label for="small"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">small</p>
                </label>
            </button>

            <button id="Xs">
                <label for="xs"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                    <p class="text-sm font-medium">xs</p>
                </label>
            </button>
        </fieldset>
    </section>

    <div class="mx-4 border-t">
        <section class="pb-16 max-w-screen-2xl md:py-16 md:mx-auto">
            <div id="boucle" class="grid grid-cols-1 gap-7 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5">


            </div>
               
        </section>
    </div>

    <script>


  $(document).ready(function() {
     url = "api/masterplans";
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                  <div class="">
                    <a href="masterplans_post?id=${item.id}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b" src="storage/${item.image[0]}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-2 mx-8 text-sm font-bold text-center">${item.title} |${item.author}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   ${item.category}, ${item.city} 
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                `;
                   $('#boucle').append(html);
                });
            })
    });

 $('#all').click(function() {

     url = "api/masterplans";
       //empty the div with fade out
         $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                        <div class="">
                    <a href="masterplans_post?id=${item.id}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b" src="storage/${item.image[0]}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-2 mx-8 text-sm font-bold text-center">${item.title} |${item.author} | ${item.city}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   ${item.category}, ${item.size} 
                                </p>
                            </div>
                        </div>
                    </a>
                </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#child').click(function() {

         url = "api/masterplans?tags=Child-friendly";
      $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                        <div class="">
                    <a href="masterplans_post?id=${item.id}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b" src="storage/${item.image[0]}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-2 mx-8 text-sm font-bold text-center">${item.title} |${item.author} | ${item.city}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   ${item.category}, ${item.size} 
                                </p>
                            </div>
                        </div>
                    </a>
                </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#green').click(function() {
         url = "api/masterplans?tags=Green";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `

                     <div class="">
                    <a href="masterplans_post?id=${item.id}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b" src="storage/${item.image[0]}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-2 mx-8 text-sm font-bold text-center">${item.title} |${item.author} | ${item.city}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   ${item.category}, ${item.size} 
                                </p>
                            </div>
                        </div>
                    </a>
                </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#climate').click(function() {
              url = "api/masterplans?tags=Climate-proof";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                        <div class="">
                    <a href="masterplans_post?id=${item.id}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b" src="storage/${item.image[0]}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-2 mx-8 text-sm font-bold text-center">${item.title} |${item.author} | ${item.city}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   ${item.category}, ${item.size} 
                                </p>
                            </div>
                        </div>
                    </a>
                </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#age').click(function() {
             url = "api/masterplans?tags=Age-friendly";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                       <div class="">
                    <a href="masterplans_post?id=${item.id}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b" src="storage/${item.image[0]}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-2 mx-8 text-sm font-bold text-center">${item.title} |${item.author} | ${item.city}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   ${item.category}, ${item.size} 
                                </p>
                            </div>
                        </div>
                    </a>
                </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#placemaking').click(function() {
                 url = "api/masterplans?tags=placemaking";
             $('#boucle').empty();
             fetch(url)
                 .then((res) => res.json())
                 .then((out) => {
                     const text = JSON.stringify(out);
                     const obj = JSON.parse(text);
                     let textFromJSON = obj;

                     $.each(textFromJSON, function(i, item) {
                         let html = `
                           <div class="">
                    <a href="masterplans_post?id=${item.id}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b" src="storage/${item.image[0]}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-2 mx-8 text-sm font-bold text-center">${item.title} |${item.author} | ${item.city}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   ${item.category}, ${item.size} 
                                </p>
                            </div>
                        </div>
                    </a>
                </div>`;
                        $('#boucle').append(html);
                     });
                 })
        });


    $('#Allsize').click(function() {
         url = "api/masterplans";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                      <div class="">
                    <a href="masterplans_post?id=${item.id}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b" src="storage/${item.image[0]}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-2 mx-8 text-sm font-bold text-center">${item.title} |${item.author} | ${item.city}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   ${item.category}, ${item.size} 
                                </p>
                            </div>
                        </div>
                    </a>
                </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#Small').click(function() {
         url = "api/masterplans?size=Small";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                       <div class="">
                    <a href="masterplans_post?id=${item.id}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b" src="storage/${item.image[0]}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-2 mx-8 text-sm font-bold text-center">${item.title} |${item.author} | ${item.city}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   ${item.categry}, ${item.size} 
                                </p>
                            </div>
                        </div>
                    </a>
                </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#Medium').click(function() {
         url = "api/masterplans?size=Medium";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                      <div class="">
                    <a href="masterplans_post?id=${item.id}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b" src="storage/${item.image[0]}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-2 mx-8 text-sm font-bold text-center">${item.title} |${item.author} | ${item.city}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   ${item.categry}, ${item.size} 
                                </p>
                            </div>
                        </div>
                    </a>
                </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#Large').click(function() {
         url = "api/masterplans?size=Large";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                       <div class="">
                    <a href="masterplans_post?id=${item.id}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b" src="storage/${item.image[0]}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-2 mx-8 text-sm font-bold text-center">${item.title} |${item.author} | ${item.city}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   ${item.categry}, ${item.size} 
                                </p>
                            </div>
                        </div>
                    </a>
                </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#Xs').click(function() {
         url = "api/masterplans?size=Xs";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                        <div class="">
                    <a href="masterplans_post?id=${item.id}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b" src="storage/${item.image[0]}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-2 mx-8 text-sm font-bold text-center">${item.title} |${item.author} | ${item.city}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   ${item.categry}, ${item.size} 
                                </p>
                            </div>
                        </div>
                    </a>
                </div>`;
                   $('#boucle').append(html);
                });
            })
    });

     $('#searchbar').keyup(function() {
        console.log($('#searchbar').val());
         url = "api/masterplans?q=" + $('#searchbar').val();
      $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                        <div class="">
                    <a href="masterplans_post?id=${item.id}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b" src="storage/${item.image[0]}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-2 mx-8 text-sm font-bold text-center">${item.title} |${item.author} | ${item.city}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   ${item.categry}, ${item.size} 
                                </p>
                            </div>
                        </div>
                    </a>
                </div>`;
                   $('#boucle').append(html);
                });
            })
    });

</script>
