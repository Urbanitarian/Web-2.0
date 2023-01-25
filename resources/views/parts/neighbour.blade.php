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
            <form action=" " class="sm:flex sm:gap-4">
                <div class="sm:flex-1">
                    <input type="text" placeholder="SEARCH" name="q" value=""
                        class="w-full p-3 text-gray-700 transition bg-gray-100 border-gray-200 rounded-md shadow-sm focus:border-white focus:outline-none focus:ring focus:ring-gray-400" />
                </div>
            </form>
        </div>

        <fieldset class="flex flex-wrap justify-center gap-2 pt-8 mx-auto md:gap-4">
           <button value="All" onclick="filter(this.value)" >
                <label for="All"
                    class="text-gray-900 flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">All</p>
                </label>
          </button>

            <button value="child" onclick="filter(this.value)" >
                <label for="child" 
                    class=" text-gray-900 flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">Child-friendly</p>
                </label>
           </button>

            <button value="green" onclick="filter(this.value)" >
                <label for="green"
                    class=" text-gray-900 flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">Green</p>
                </label>
           </button>

           <button value="climate" onclick="filter(this.value)" >
                <label for="climate"
                    class="text-gray-900 flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">Climate-proof</p>
                </label>
           </button>

            <button value="age" onclick="filter(this.value)" >
                <label for="age"
                    class="text-gray-900 flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">Age-friendly</p>
                </label>
           </button>

            <button value="placemaking" onclick="filter(this.value)" >
                <label for="placemaking"
                    class="text-gray-900 flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">Placemaking</p>
                </label>
          </button>
        </fieldset>




        <fieldset class="flex flex-wrap justify-center gap-2 pt-8 mx-auto md:gap-4">
            <button value="Allsize" onclick="filter(this.value)" >
                <label for="Allsize"
                    class="text-gray-900 flex items-center justify-center px-3 py-2 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">All size</p>
                </label>
           </button>

            <button value="large" onclick="filter(this.value)" >
                <label for="large"
                    class=" text-gray-900  flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">large</p>
                </label>
            </button>

            <button value="medium" onclick="filter(this.value)" >
                <label for="medium"
                    class=" text-gray-900  flex items-center justify-center px-3 py-2 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">medium</p>
                </label>
            </button>

            <button value="small" onclick="filter(this.value)" >
                <label for="small"
                    class=" text-gray-900  flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">small</p>
                </label>
           </button>

           <button value="xs" onclick="filter(this.value)" >
                <label for="xs"
                    class=" text-gray-900  flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">xs</p>
                </label>
            </button>
        </fieldset>


        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
                <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">


                    <li>
                        <a href="./neighbourhoods_post?id="
                            class="block overflow-hidden group">
                            <img src=""alt=""
                                onerror="this.src='./img/empty.png'"
                                class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />

                            <div class="relative pt-3 bg-white">
                                <span
                                    class="mx-1 text-base font-bold tracking-wider text-gray-900">titre</span>
                                <p class="mt-2">
                                    <span class="mx-2 text-xs font-semibold text-gray-500">
                                      tag
                                    </span>

                                </p>
                            </div>
                       </div>
                    </li>
                </ul>
            </div>
            <div class="flex justify-center pt-8">
                {{-- {{ $neighbourhoods->appends(Request::all())->links('pagination::tailwind') }} --}}
            </div>
        </section>




</section>
<script>
data = {!! json_encode($neighbourhoods) !!};

 function filter(value) {
        if (value == "child") {
         console.log("child");
        } else if (value == "green") {
         console.log("green");
        } else if (value == "climate") {
         console.log("climate");
        } else if (value == "age") {
         console.log("age");
        } else if (value == "placemaking") {
         console.log("placemaking");
        } else if (value == "All") {
         console.log("All");
        }else if (value == "Allsize") {
         console.log("Allsize");
        } else if (value == "large") {
         console.log("large");
        } else if (value == "medium") {
         console.log("medium");
        } else if (value == "small") {
         console.log("small");
        } else if (value == "xs") {
         console.log("xs");
        }

 }



</script>