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
                    <input type="text" placeholder="SEARCH" name="q" value=""
                        class="w-full p-3 text-gray-700 transition bg-gray-100 border-gray-200 rounded-md shadow-sm focus:border-white focus:outline-none focus:ring focus:ring-gray-400" />
                </div>
            </div>
        </div>

        <fieldset class="flex flex-wrap justify-center gap-2 pt-8 mx-auto md:gap-4">
            <button id="all">
                <label for="All"
                    class="text-gray-900 flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">All</p>
                </label>
            </button>

            <button id="child">
                <label for="child"
                    class=" text-gray-900 flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">Child-friendly</p>
                </label>
            </button>

            <button id="green">
                <label for="green"
                    class=" text-gray-900 flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">Green</p>
                </label>
            </button>

            <button id="climate">
                <label for="climate"
                    class="text-gray-900 flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">Climate-proof</p>
                </label>
            </button>

            <button id="age">
                <label for="age"
                    class="text-gray-900 flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">Age-friendly</p>
                </label>
            </button>

            <button id="placemaking">
                <label for="placemaking"
                    class="text-gray-900 flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">Placemaking</p>
                </label>
            </button>
        </fieldset>




        <fieldset class="flex flex-wrap justify-center gap-2 pt-8 mx-auto md:gap-4">
            <button id="Allsize">
                <label for="Allsize"
                    class="text-gray-900 flex items-center justify-center px-3 py-2 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">All size</p>
                </label>
            </button>

            <button id="Large">
                <label for="large"
                    class=" text-gray-900  flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">large</p>
                </label>
            </button>

            <button id="Medium">
                <label for="medium"
                    class=" text-gray-900  flex items-center justify-center px-3 py-2 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">medium</p>
                </label>
            </button>

            <button id="Small">
                <label for="small"
                    class=" text-gray-900  flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">small</p>
                </label>
            </button>

            <button id="Xs">
                <label for="xs"
                    class=" text-gray-900  flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">xs</p>
                </label>
            </button>
        </fieldset>


        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
                <ul id="boucle" class="grid gap-4 mt-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

                </ul>
            </div>
            <div class="flex justify-center pt-8">
                {{-- {{ $neighbourhoods->appends(Request::all())->links('pagination::tailwind') }} --}}
            </div>
        </section>




</section>
<script>


  $(document).ready(function() {
     url = "http://127.0.0.1:8000/api/neighbourhoods";
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                   <div>
                   <a href="./neighbourhoods_post?id=${item.id}" class="block overflow-hidden group shadow-lg bg-gray-100">
                   <img src="storage/${item.image[0]}" alt="" onerror="this.src=\'./img/empty.png\'" class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />
                   <div class="relative pt-3 bg-gray-100">
                   <span class="mx-1 text-base font-bold tracking-wider text-gray-900">${item.title}</span>
                   <p class="my-1">
                   <span class="mx-2 text-xs font-semibold text-gray-500">${item.tags}</span>
                   </p>
                   </div>
                   </a>
                   </div>`;
                   $('#boucle').append(html);
                });
            })
    });

 $('#all').click(function() {
     url = "http://127.0.0.1:8000/api/neighbourhoods";
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
                   <div>
                   <a href="./neighbourhoods_post?id=${item.id}" class="block overflow-hidden group shadow-lg bg-gray-100">
                   <img src="storage/${item.image[0]}" alt="" onerror="this.src=\'./img/empty.png\'" class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />
                   <div class="relative pt-3 bg-gray-100">
                   <span class="mx-1 text-base font-bold tracking-wider text-gray-900">${item.title}</span>
                   <p class="my-1">
                   <span class="mx-2 text-xs font-semibold text-gray-500">${item.tags}</span>
                   </p>
                   </div>
                   </a>
                   </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#child').click(function() {
         url = "http://127.0.0.1:8000/api/neighbourhoods?tags=child";
      $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                   <div>
                   <a href="./neighbourhoods_post?id=${item.id}" class="block overflow-hidden group shadow-lg bg-gray-100">
                   <img src="storage/${item.image[0]}" alt="" onerror="this.src=\'./img/empty.png\'" class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />
                   <div class="relative pt-3 bg-gray-100">
                   <span class="mx-1 text-base font-bold tracking-wider text-gray-900">${item.title}</span>
                   <p class="my-1">
                   <span class="mx-2 text-xs font-semibold text-gray-500">${item.tags}</span>
                   </p>
                   </div>
                   </a>
                   </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#green').click(function() {
         url = "http://127.0.0.1:8000/api/neighbourhoods?tags=green";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `

                   <div>
                   <a href="./neighbourhoods_post?id=${item.id}" class="block overflow-hidden group shadow-lg bg-gray-100">
                   <img src="storage/${item.image[0]}" alt="" onerror="this.src=\'./img/empty.png\'" class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />
                   <div class="relative pt-3 bg-gray-100">
                   <span class="mx-1 text-base font-bold tracking-wider text-gray-900">${item.title}</span>
                   <p class="my-1">
                   <span class="mx-2 text-xs font-semibold text-gray-500">${item.tags}</span>
                   </p>
                   </div>
                   </a>
                   </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#climate').click(function() {
              url = "http://127.0.0.1:8000/api/neighbourhoods?tags=climate";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                   <div>
                   <a href="./neighbourhoods_post?id=${item.id}" class="block overflow-hidden group shadow-lg bg-gray-100">
                   <img src="storage/${item.image[0]}" alt="" onerror="this.src=\'./img/empty.png\'" class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />
                   <div class="relative pt-3 bg-gray-100">
                   <span class="mx-1 text-base font-bold tracking-wider text-gray-900">${item.title}</span>
                   <p class="my-1">
                   <span class="mx-2 text-xs font-semibold text-gray-500">${item.tags}</span>
                   </p>
                   </div>
                   </a>
                   </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#age').click(function() {
             url = "http://127.0.0.1:8000/api/neighbourhoods?tags=age";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                   <div>
                   <a href="./neighbourhoods_post?id=${item.id}" class="block overflow-hidden group shadow-lg bg-gray-100">
                   <img src="storage/${item.image[0]}" alt="" onerror="this.src=\'./img/empty.png\'" class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />
                   <div class="relative pt-3 bg-gray-100">
                   <span class="mx-1 text-base font-bold tracking-wider text-gray-900">${item.title}</span>
                   <p class="my-1">
                   <span class="mx-2 text-xs font-semibold text-gray-500">${item.tags}</span>
                   </p>
                   </div>
                   </a>
                   </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#placemaking').click(function() {
                 url = "http://127.0.0.1:8000/api/neighbourhoods?tags=placemaking";
             $('#boucle').empty();
             fetch(url)
                 .then((res) => res.json())
                 .then((out) => {
                     const text = JSON.stringify(out);
                     const obj = JSON.parse(text);
                     let textFromJSON = obj;

                     $.each(textFromJSON, function(i, item) {
                         let html = `
                        <div>
                        <a href="./neighbourhoods_post?id=${item.id}" class="block overflow-hidden group shadow-lg bg-gray-100">
                        <img src="storage/${item.image[0]}" alt="" onerror="this.src=\'./img/empty.png\'" class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />
                        <div class="relative pt-3 bg-gray-100">
                        <span class="mx-1 text-base font-bold tracking-wider text-gray-900">${item.title}</span>
                        <p class="my-1">
                        <span class="mx-2 text-xs font-semibold text-gray-500">${item.tags}</span>
                        </p>
                        </div>
                        </a>
                        </div>`;
                        $('#boucle').append(html);
                     });
                 })
        });


    $('#Allsize').click(function() {
         url = "http://127.0.0.1:8000/api/neighbourhoods";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                   <div>
                   <a href="./neighbourhoods_post?id=${item.id}" class="block overflow-hidden group shadow-lg bg-gray-100">
                   <img src="storage/${item.image[0]}" alt="" onerror="this.src=\'./img/empty.png\'" class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />
                   <div class="relative pt-3 bg-gray-100">
                   <span class="mx-1 text-base font-bold tracking-wider text-gray-900">${item.title}</span>
                   <p class="my-1">
                   <span class="mx-2 text-xs font-semibold text-gray-500">${item.tags}</span>
                   </p>
                   </div>
                   </a>
                   </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#Small').click(function() {
         url = "http://127.0.0.1:8000/api/neighbourhoods?size=Small";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                   <div>
                   <a href="./neighbourhoods_post?id=${item.id}" class="block overflow-hidden group shadow-lg bg-gray-100">
                   <img src="storage/${item.image[0]}" alt="" onerror="this.src=\'./img/empty.png\'" class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />
                   <div class="relative pt-3 bg-gray-100">
                   <span class="mx-1 text-base font-bold tracking-wider text-gray-900">${item.title}</span>
                   <p class="my-1">
                   <span class="mx-2 text-xs font-semibold text-gray-500">${item.tags}</span>
                   </p>
                   </div>
                   </a>
                   </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#Medium').click(function() {
         url = "http://127.0.0.1:8000/api/neighbourhoods?size=Medium";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                   <div>
                   <a href="./neighbourhoods_post?id=${item.id}" class="block overflow-hidden group shadow-lg bg-gray-100">
                   <img src="storage/${item.image[0]}" alt="" onerror="this.src=\'./img/empty.png\'" class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />
                   <div class="relative pt-3 bg-gray-100">
                   <span class="mx-1 text-base font-bold tracking-wider text-gray-900">${item.title}</span>
                   <p class="my-1">
                   <span class="mx-2 text-xs font-semibold text-gray-500">${item.tags}</span>
                   </p>
                   </div>
                   </a>
                   </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#Large').click(function() {
         url = "http://127.0.0.1:8000/api/neighbourhoods?size=Large";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                   <div>
                   <a href="./neighbourhoods_post?id=${item.id}" class="block overflow-hidden group shadow-lg bg-gray-100">
                   <img src="storage/${item.image[0]}" alt="" onerror="this.src=\'./img/empty.png\'" class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />
                   <div class="relative pt-3 bg-gray-100">
                   <span class="mx-1 text-base font-bold tracking-wider text-gray-900">${item.title}</span>
                   <p class="my-1">
                   <span class="mx-2 text-xs font-semibold text-gray-500">${item.tags}</span>
                   </p>
                   </div>
                   </a>
                   </div>`;
                   $('#boucle').append(html);
                });
            })
    });

    $('#Xs').click(function() {
         url = "http://127.0.0.1:8000/api/neighbourhoods?size=Xs";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                   <div>
                   <a href="./neighbourhoods_post?id=${item.id}" class="block overflow-hidden group shadow-lg bg-gray-100">
                   <img src="storage/${item.image[0]}" alt="" onerror="this.src=\'./img/empty.png\'" class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />
                   <div class="relative pt-3 bg-gray-100">
                   <span class="mx-1 text-base font-bold tracking-wider text-gray-900">${item.title}</span>
                   <p class="my-1">
                   <span class="mx-2 text-xs font-semibold text-gray-500">${item.tags}</span>
                   </p>
                   </div>
                   </a>
                   </div>`;
                   $('#boucle').append(html);
                });
            })
    });


</script>
