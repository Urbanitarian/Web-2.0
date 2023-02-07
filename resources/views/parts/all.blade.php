<div class="h-8"></div>
<section class="py-4 my-8 border-t border-b mx-8">
    <h1 class="pt-4 text-3xl font-bold text-center text-gray-900 ">See more</h1>
    <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
        <div id="boucle2" class="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-3">





        </div>
    </div>
</section>

<script>
    urls = "api/promo"
    $(document).ready(function() {

        $('#boucle2').empty();
        fetchAndRenderDatax(urls);
    });

    const fetchAndRenderDatax = (urls) => {
        fetch(urls)
            .then((res) => res.json())
            .then((out) => {
                const obj = JSON.parse(JSON.stringify(out));
                let textFromJSON0 = obj;

                $.each(textFromJSON0, function(i, item) {
                    let link = item.category;
                    //to lower case
                    link = link.toLowerCase();
                    if (link == "masterplans") {
                        let html = `
                      <div class="flex transition border shadow-md md:hover:scale-110">
                        <div class="flex flex-col mx-auto">
                       
                            <a href="${link}">
                              <p class="w-full pt-2 text-base font-bold text-center text-black bg-white border-t">
                                  ${item.category}</p>
                                <img class="object-cover w-48 h-32 pt-2 pb-2" src="storage/uploads/${link}/${item.image}" alt="content" onerror="this.src='./img/empty.png'">
                                <p class="mx-auto text-xs text-center font-semibold text-gray-500 pb-3">See all</p>
                            </a>
                        </div>
                    </div>`;
                        $('#boucle2').append(html);
                    } else {
                        let html = `
                      <div class="flex transition border shadow-md md:hover:scale-110">
                        <div class="flex flex-col mx-auto">
                       
                            <a href="${link}">
                              <p class="w-full pt-2 text-base font-bold text-center text-black bg-white border-t">
                                  ${item.category}</p>
                                <img class="object-cover w-48 h-32 pt-2 pb-2" src="storage/uploads/${link}/${item.imagea}" alt="content" onerror="this.src='./img/empty.png'">
                                <p class="mx-auto text-xs text-center font-semibold text-gray-500 pb-3">See all</p>
                            </a>
                        </div>
                    </div>`;
                        $('#boucle2').append(html);
                    } 

                });
            })
    };
</script>
