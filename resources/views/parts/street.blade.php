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


<section class="mx-4 border-t">
    <div class="container px-6 py-10 mx-auto">
        <div id="boucle" class="flex flex-col">

        </div>
        <div class="flex justify-center pt-8">
            {{ $streetscapes->appends(Request::all())->links('pagination::tailwind') }}
        </div>
    </div>
</section>



<script src="https://cdn.knightlab.com/libs/juxtapose/latest/js/juxtapose.min.js"></script>
<link rel="stylesheet" href="https://cdn.knightlab.com/libs/juxtapose/latest/css/juxtapose.css">
<script>

window.addEventListener("load", function() {
    $juxtapose = $('.juxtapose');
    $juxtapose.each(function(index, element) {
        var $juxtaposeContainer = $juxtapose.parent();
        var juxtaposeRatio;

        $(window).on('load', function(event) {
            juxtaposeRatio = $(element).outerHeight() / $(element).outerWidth();
        });

        $(window).on('resize', function(event) {
            var newWidth = $juxtaposeContainer.outerWidth();
            var newHeight = newWidth * juxtaposeRatio;
            $(element).css({
                width: newWidth,
                height: newHeight
            });
        });
    });
});

    $(document).ready(function() {
        url = "api/streetscapes";
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                 <div class="flex flex-col py-4 lg:flex-row lg:-mx-6">
                    <div class="lg:w-3/4 md:px-6">
                        <div class="juxtapose">
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[0]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[1]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                    </div>

                    </div>

                    <div class="mt-8 border-t border-b lg:w-1/4 lg:mt-0 lg:px-6">
                        <div>
                            <h3 class="mt-4 font-semibold text-center text-black uppercase">  ${item.tags[0]}</h3>

                            <a href="streetscapes_post?id=${item.id}"  class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                             ${item.title}
                            </a>
                            <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> ${item.address} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.city} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.country} </p>
                            </div>
                           
                                <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800"> <a href="${item.link}">See project </a></button>
                        </div>

                    </div>
                </div>`;
                    $('#boucle').append(html);
                });
            })
    });

    $('#all').click(function() {

        url = "api/streetscapes";
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
                     <div class="flex flex-col py-4 lg:flex-row lg:-mx-6">
                    <div class="lg:w-3/4 md:px-6">
                        <div class="juxtapose">
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[0]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[1]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                    </div>

                    </div>

                    <div class="mt-8 border-t border-b lg:w-1/4 lg:mt-0 lg:px-6">
                        <div>
                            <h3 class="mt-4 font-semibold text-center text-black uppercase">  ${item.tags[0]}</h3>

                            <a href="streetscapes_post?id=${item.id}"  class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                             ${item.title}
                            </a>
                            <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> ${item.address} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.city} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.country} </p>
                            </div>
                           
                                <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800"> <a href="${item.link}">See project </a></button>
                        </div>

                    </div>
                </div>`;
                    $('#boucle').append(html);
                });
            })
    });

    $('#child').click(function() {

        url = "api/streetscapes?tags=Child-friendly";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                   <div class="flex flex-col py-4 lg:flex-row lg:-mx-6">
                    <div class="lg:w-3/4 md:px-6">
                        <div class="juxtapose">
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[0]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[1]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                    </div>

                    </div>

                    <div class="mt-8 border-t border-b lg:w-1/4 lg:mt-0 lg:px-6">
                        <div>
                            <h3 class="mt-4 font-semibold text-center text-black uppercase">  ${item.tags[0]}</h3>

                            <a href="streetscapes_post?id=${item.id}"  class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                             ${item.title}
                            </a>
                            <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> ${item.address} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.city} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.country} </p>
                            </div>
                           
                                <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800"> <a href="${item.link}">See project </a></button>
                        </div>

                    </div>
                </div>`;
                    $('#boucle').append(html);
                });
            })
    });

    $('#green').click(function() {
        url = "api/streetscapes?tags=Green";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `

                     <div class="flex flex-col py-4 lg:flex-row lg:-mx-6">
                    <div class="lg:w-3/4 md:px-6">
                        <div class="juxtapose">
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[0]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[1]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                    </div>

                    </div>

                    <div class="mt-8 border-t border-b lg:w-1/4 lg:mt-0 lg:px-6">
                        <div>
                            <h3 class="mt-4 font-semibold text-center text-black uppercase">  ${item.tags[0]}</h3>

                            <a href="streetscapes_post?id=${item.id}"  class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                             ${item.title}
                            </a>
                            <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> ${item.address} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.city} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.country} </p>
                            </div>
                           
                                <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800"> <a href="${item.link}">See project </a></button>
                        </div>

                    </div>
                </div>`;
                    $('#boucle').append(html);
                });
            })
    });

    $('#climate').click(function() {
        url = "api/streetscapes?tags=Climate-proof";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                    <div class="flex flex-col py-4 lg:flex-row lg:-mx-6">
                    <div class="lg:w-3/4 md:px-6">
                        <div class="juxtapose">
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[0]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[1]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                    </div>

                    </div>

                    <div class="mt-8 border-t border-b lg:w-1/4 lg:mt-0 lg:px-6">
                        <div>
                            <h3 class="mt-4 font-semibold text-center text-black uppercase">  ${item.tags[0]}</h3>

                            <a href="streetscapes_post?id=${item.id}"  class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                             ${item.title}
                            </a>
                            <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> ${item.address} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.city} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.country} </p>
                            </div>
                           
                                <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800"> <a href="${item.link}">See project </a></button>
                        </div>

                    </div>
                </div>`;
                    $('#boucle').append(html);
                });
            })
    });

    $('#age').click(function() {
        url = "api/streetscapes?tags=Age-friendly";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                  <div class="flex flex-col py-4 lg:flex-row lg:-mx-6">
                    <div class="lg:w-3/4 md:px-6">
                        <div class="juxtapose">
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[0]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[1]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                    </div>

                    </div>

                    <div class="mt-8 border-t border-b lg:w-1/4 lg:mt-0 lg:px-6">
                        <div>
                            <h3 class="mt-4 font-semibold text-center text-black uppercase">  ${item.tags[0]}</h3>

                            <a href="streetscapes_post?id=${item.id}"  class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                             ${item.title}
                            </a>
                            <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> ${item.address} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.city} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.country} </p>
                            </div>
                           
                                <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800"> <a href="${item.link}">See project </a></button>
                        </div>

                    </div>
                </div>`;
                    $('#boucle').append(html);
                });
            })
    });

    $('#placemaking').click(function() {
        url = "api/streetscapes?tags=placemaking";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                        <div class="flex flex-col py-4 lg:flex-row lg:-mx-6">
                    <div class="lg:w-3/4 md:px-6">
                        <div class="juxtapose">
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[0]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[1]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                    </div>

                    </div>

                    <div class="mt-8 border-t border-b lg:w-1/4 lg:mt-0 lg:px-6">
                        <div>
                            <h3 class="mt-4 font-semibold text-center text-black uppercase">  ${item.tags[0]}</h3>

                            <a href="streetscapes_post?id=${item.id}"  class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                             ${item.title}
                            </a>
                            <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> ${item.address} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.city} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.country} </p>
                            </div>
                           
                                <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800"> <a href="${item.link}">See project </a></button>
                        </div>

                    </div>
                </div>`;
                    $('#boucle').append(html);
                });
            })
    });


    $('#Allsize').click(function() {
        url = "api/streetscapes";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                   <div class="flex flex-col py-4 lg:flex-row lg:-mx-6">
                    <div class="lg:w-3/4 md:px-6">
                        <div class="juxtapose">
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[0]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[1]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                    </div>

                    </div>

                    <div class="mt-8 border-t border-b lg:w-1/4 lg:mt-0 lg:px-6">
                        <div>
                            <h3 class="mt-4 font-semibold text-center text-black uppercase">  ${item.tags[0]}</h3>

                            <a href="streetscapes_post?id=${item.id}"  class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                             ${item.title}
                            </a>
                            <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> ${item.address} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.city} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.country} </p>
                            </div>
                           
                                <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800"> <a href="${item.link}">See project </a></button>
                        </div>

                    </div>
                </div>`;
                    $('#boucle').append(html);
                });
            })
    });

    $('#Small').click(function() {
        url = "api/streetscapes?size=Small";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                    <div class="flex flex-col py-4 lg:flex-row lg:-mx-6">
                    <div class="lg:w-3/4 md:px-6">
                        <div class="juxtapose">
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[0]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[1]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                    </div>

                    </div>

                    <div class="mt-8 border-t border-b lg:w-1/4 lg:mt-0 lg:px-6">
                        <div>
                            <h3 class="mt-4 font-semibold text-center text-black uppercase">  ${item.tags[0]}</h3>

                            <a href="streetscapes_post?id=${item.id}"  class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                             ${item.title}
                            </a>
                            <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> ${item.address} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.city} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.country} </p>
                            </div>
                           
                                <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800"> <a href="${item.link}">See project </a></button>
                        </div>

                    </div>
                </div>`;
                    $('#boucle').append(html);
                });
            })
    });

    $('#Medium').click(function() {
        url = "api/streetscapes?size=Medium";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                     <div class="flex flex-col py-4 lg:flex-row lg:-mx-6">
                    <div class="lg:w-3/4 md:px-6">
                        <div class="juxtapose">
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[0]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[1]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                    </div>

                    </div>

                    <div class="mt-8 border-t border-b lg:w-1/4 lg:mt-0 lg:px-6">
                        <div>
                            <h3 class="mt-4 font-semibold text-center text-black uppercase">  ${item.tags[0]}</h3>

                            <a href="streetscapes_post?id=${item.id}"  class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                             ${item.title}
                            </a>
                            <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> ${item.address} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.city} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.country} </p>
                            </div>
                           
                                <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800"> <a href="${item.link}">See project </a></button>
                        </div>

                    </div>
                </div>`;
                    $('#boucle').append(html);
                });
            })
    });

    $('#Large').click(function() {
        url = "api/streetscapes?size=Large";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                     <div class="flex flex-col py-4 lg:flex-row lg:-mx-6">
                    <div class="lg:w-3/4 md:px-6">
                        <div class="juxtapose">
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[0]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[1]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                    </div>

                    </div>

                    <div class="mt-8 border-t border-b lg:w-1/4 lg:mt-0 lg:px-6">
                        <div>
                            <h3 class="mt-4 font-semibold text-center text-black uppercase">  ${item.tags[0]}</h3>

                            <a href="streetscapes_post?id=${item.id}"  class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                             ${item.title}
                            </a>
                            <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> ${item.address} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.city} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.country} </p>
                            </div>
                           
                                <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800"> <a href="${item.link}">See project </a></button>
                        </div>

                    </div>
                </div>`;
                    $('#boucle').append(html);
                });
            })
    });

    $('#Xs').click(function() {
        url = "api/streetscapes?size=Xs";
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                    <div class="flex flex-col py-4 lg:flex-row lg:-mx-6">
                    <div class="lg:w-3/4 md:px-6">
                        <div class="juxtapose">
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[0]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[1]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                    </div>

                    </div>

                    <div class="mt-8 border-t border-b lg:w-1/4 lg:mt-0 lg:px-6">
                        <div>
                            <h3 class="mt-4 font-semibold text-center text-black uppercase">  ${item.tags[0]}</h3>

                            <a href="streetscapes_post?id=${item.id}"  class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                             ${item.title}
                            </a>
                            <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> ${item.address} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.city} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.country} </p>
                            </div>
                           
                                <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800"> <a href="${item.link}">See project </a></button>
                        </div>

                    </div>
                </div>`;
                    $('#boucle').append(html);
                });
            })
    });

    $('#searchbar').keyup(function() {
        console.log($('#searchbar').val());
        url = "api/streetscapes?q=" + $('#searchbar').val();
        $('#boucle').empty();
        fetch(url)
            .then((res) => res.json())
            .then((out) => {
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                let textFromJSON = obj;

                $.each(textFromJSON, function(i, item) {
                    let html = `
                     <div class="flex flex-col py-4 lg:flex-row lg:-mx-6">
                    <div class="lg:w-3/4 md:px-6">
                        <div class="juxtapose">
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[0]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                        <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4" src="storage/${item.image[1]}"alt="00"  onerror="this.src='./img/empty.png'"/>
                    </div>

                    </div>

                    <div class="mt-8 border-t border-b lg:w-1/4 lg:mt-0 lg:px-6">
                        <div>
                            <h3 class="mt-4 font-semibold text-center text-black uppercase">  ${item.tags[0]}</h3>

                            <a href="streetscapes_post?id=${item.id}"  class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                             ${item.title}
                            </a>
                            <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> ${item.address} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.city} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; ${item.country} </p>
                            </div>
                           
                                <button
                                  class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-48 md:mt-8 focus:outline-none hover:bg-gray-800"> <a href="${item.link}">See project </a></button>
                        </div>

                    </div>
                </div>`;
                    $('#boucle').append(html);
                });
            })
    });
</script>


