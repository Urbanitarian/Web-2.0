<section class="py-4 mx-4 text-gray-600 border-t border-b body-font md:mx-16 md:py-8">
    <div class="container px-5 pt-12 pb-8 mx-auto">
        <div class="flex flex-wrap w-full mb-8 md:mb-20">
            <div class="w-full">
                <h1 class="pb-4 text-3xl font-bold text-center text-gray-900 md:text-5xl">Neighbourhoods</h1>
                <div class="max-w-xl mb-6 sm:mx-auto sm:text-center lg:max-w-2xl">
                    <p class="text-base text-gray-700 md:text-lg">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap -m-4">

@forelse ($neighbourhoods as $neighbourhood)
      <div class="p-4 xl:w-1/4 md:w-1/2">
                <a href="">
                    <div class="p-4 transition shadow-lg bg-gray-50 hover:bg-gray-100 md:hover:scale-110">
                        <img class="object-cover object-center w-full h-40 mb-3" src="{{ asset('storage/' . $neighbourhood->image[0]) }}"alt=""  onerror="this.src='./img/empty.png'"/>
                        <h2 class="mb-1 text-lg font-medium text-gray-900 title-font">{{ $neighbourhood->title }}</h2>
                        <p class="text-xs font-semibold leading-relaxed text-gray-500">
                        @foreach($neighbourhood->tags as $tag)
                        {{ $tag }} &nbsp;
                        @endforeach
                        </p>
                    </div>
                </a>
            </div>
@empty
      <div class="p-4 xl:w-1/4 md:w-1/2">
                <a href="">
                    <div class="p-6 transition shadow-lg bg-gray-50 hover:bg-gray-100 md:hover:scale-110">
                        <img class="object-cover object-center w-full h-40 mb-6" src="./img/empty.png"
                            alt="content">

                        <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">Empty</h2>
                        <p class="text-base leading-relaxed">dummy</p>
                    </div>
                </a>
            </div>
@endforelse
          

           
        </div>

        <button
            class="flex px-8 py-2 mx-auto mt-16 text-lg text-white bg-black border-0 rounded focus:outline-none hover:bg-gray-800">
            <a href="./neighbourhoods">See
            All</a></button>

    </div>
</section>