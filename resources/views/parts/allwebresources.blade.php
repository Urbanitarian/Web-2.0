<section class="mx-4">
    <div class="px-4 py-8 pb-16 mx-8 max-w-screen-2xl md:py-16 md:mx-auto">
        <div class="flex flex-wrap w-full mb-8 md:mb-10">
            <div class="w-full">
                <h1 class="pb-4 text-3xl font-bold text-center text-gray-900 md:text-5xl">Web Resources</h1>
                <div class="max-w-xl mb-6 sm:mx-auto sm:text-center lg:max-w-2xl">
                    <p class="text-base text-gray-700 md:text-lg">
                        List of planning, land use, urban design and development websites, representing some of the top online resources for news, information, and research on the built environment:
                    </p>
                </div>
            </div>
        </div>
        <div class="py-8">
            <div class="grid grid-cols-1 gap-5 row-gap-5 lg:grid-cols-4 xl:grid-cols-5 md:grid-cols-2">
                   @forelse ($webresources as $item)
                    <div class="flex transition border shadow-md md:hover:scale-110">
                        <div class="flex flex-col mx-auto">
                            <a href="">
                                <img class="object-cover w-auto h-32" src="{{ asset('storage/' . $item->image) }}"
                                    alt="content" onerror="this.src='./img/empty.png'">
                                <p class="w-full pt-2 text-base font-bold text-center text-black bg-white border-t">
                                  {{ $item->name }}</p>
                                <p class="pb-2 text-xs text-center text-gray-500">{{$item->type[0] ?? null; }}, {{   $item->type[1] ?? null }}, {{   $item->type[2] ?? null}}</p>
                            </a>
                        </div>
                    </div>
                @empty
                 <div class="flex transition border shadow-md md:hover:scale-110">
                        <div class="flex flex-col mx-auto">
                            <a href="">
                                <img class="object-cover w-auto h-32" src="./img/empty.png"
                                    alt="content">
                                <p class="w-full pt-2 text-base font-bold text-center text-black bg-white border-t">
                                    Empty</p>
                                <p class="pb-2 text-xs text-center text-gray-500">Dictionary</p>
                            </a>
                        </div>
                    </div>
                @endforelse

            </div>
                        <div class="flex justify-center pt-8">
  {{ $webresources->appends(Request::all())->links('pagination::tailwind') }}
      </div>
        </div>    

    </div>
</section>