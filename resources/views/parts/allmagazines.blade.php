<section class="md:mx-4">
    <div class="md:px-4 py-8 pb-16 mx-8 max-w-screen-2xl md:py-16 md:mx-auto">
        <div class="flex flex-wrap w-full mb-8 md:mb-10">
            <div class="w-full">
                <h1 class="pb-4 text-3xl font-bold text-center text-gray-900 md:text-5xl">To Read</h1>
                <div class="max-w-xl mb-6 sm:mx-auto sm:text-center lg:max-w-2xl">
                    <p class="text-base text-gray-500 md:text-lg">
                        Rundown of a variety of printed/online planning magazines and books you might consider reading.
                    </p>
                </div>
            </div>
        </div>
        <div class="py-8">
            <div class="grid grid-cols-2 gap-5 row-gap-5 lg:grid-cols-3 xl:grid-cols-5 md:grid-cols-2">
                @forelse ($magazines as $magazine)
                    <div class="flex transition border shadow-md md:hover:scale-105">
                        <div class="flex flex-col mx-auto mb-16">
                            <a href=" {{  $magazine->link }}" target="_blank">
                              @php $magimg = $magazine->image ?? null; @endphp
                                <img class="object-cover w-full h-full  saturate-120" src="{{ asset('storage/uploads/magazines/' . $magimg) }}"
                                    alt="content" onerror="this.src='./img/empty.png'">
                                <p class="w-full pt-2 text-base font-bold text-center text-black bg-white border-t">
                                  {{  $magazine->name }}
                                </p>
                                <p class="pb-2 text-xs text-center text-gray-500">  {{$magazine->type[0] ?? null; }} {{   $magazine->type[1] ?? null }}</p>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="flex transition border shadow-md md:hover:scale-105">
                        <div class="flex flex-col mx-auto mb-16">
                            <a href="">
                                <img class="object-cover w-full h-full" src="./img/empty.png" alt="content">
                                <p class="w-full pt-2 text-base font-bold text-center text-black bg-white border-t">
                                    Empty
                                </p>
                                <p class="pb-2 text-xs text-center text-gray-800"> magazine</p>
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>
               {{ $magazines->appends(Request::all())->links('pagination::tailwind') }}
        </div>    
      
    </div>
</section>