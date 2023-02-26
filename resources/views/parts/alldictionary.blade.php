<section class="py-16 mx-4 md:mx-16">

    <div class="w-full">
        <h1 class="pb-8 text-3xl font-bold text-center text-gray-900 md:text-5xl">Dictionaries</h1>
        <div class="max-w-xl mb-6 sm:mx-auto sm:text-center md:mb-10 lg:max-w-4xl">
                         <p class="text-sm font-bold text-gray-700 md:text-lg pt-4">
                Unlock Your Urban Design Vocabulary: Join the Largest Urban Design Jargon Community Online.
            </p>
             <p class="text-ssm text-gray-500 md:text-lg">
                Lexicon of urban design terms, from deeply informative vocabulary to light-hearted buzzwords
            </p>
        </div>
    </div>

  <div class="mx-4">
        <div class="max-w-screen-xl pt-8 pb-4 mx-4 md:py-8 md:mx-auto ">
            <div class="grid grid-cols-2 gap-5 row-gap-5 md:grid-cols-3 lg:grid-cols-5">

                @forelse ($dictionary as $item)
                    <div class="flex transition border shadow-md md:hover:scale-110">
                        <div class="flex flex-col mx-auto">
                            <a href="dictionaries_post?id={{ $item->id }}">
                             @php $dictimg = $item->image ?? null; @endphp
                                <img class="object-cover w-auto h-32  saturate-120" src="{{ asset('storage/uploads/dictionaries/' . $dictimg) }}"
                                    alt="content" onerror="this.src='./img/empty.png'">
                                <p class="w-full pt-2 text-base font-bold text-center text-black bg-white border-t">
                                  {{ $item->name }}</p>
                                <p class="pb-2 text-xs text-center text-gray-500">{{ $item->type }}</p>
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
  {{ $dictionary->appends(Request::all())->links('pagination::tailwind') }}
      </div>
        </div>
    </div>
          @include('parts.all')
</section>