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
                <form action="{{ route('mfilter') }}" class="sm:flex sm:gap-4">
                    <div class="sm:flex-1">
                        <input type="text" placeholder="SEARCH" name="q" value="{{ $q }}"
                            class="w-full p-3 text-gray-700 transition bg-gray-100 border-gray-200 rounded-md shadow-sm focus:border-white focus:outline-none focus:ring focus:ring-gray-400" />
                    </div>
                </form>


            </div>

            <fieldset class="flex flex-wrap justify-center gap-2 pt-8 mx-auto md:gap-4">
                <a href="{{ route('mfilter') }}">
                    <label for="All"
                        class="{{ $q == '' ? 'bg-gray-400 text-white' : '' }} flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">All</p>
                    </label>
                 </a>

                 <a href="{{ route('mfilter') }}?size=large">
                    <label for="large"
                        class="{{ $q == 'large' ? 'bg-gray-400 text-white' : '' }} flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">large</p>
                    </label>
                 </a>

                 <a href="{{ route('mfilter') }}?size=medium">
                    <label for="medium"
                        class="{{ $q == 'medium' ? 'bg-gray-400 text-white' : '' }} flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">medium</p>
                    </label>
                 </a>

                 <a href="{{ route('mfilter') }}?size=small">
                    <label for="small"
                        class="{{ $q == 'small' ? 'bg-gray-400 text-white' : '' }} flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">small</p>
                    </label>
                 </a>

                 <a href="{{ route('mfilter') }}?size=xs">
                    <label for="xs"
                        class="{{ $q == 'xs' ? 'bg-gray-400 text-white' : '' }} flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">xs</p>
                    </label>
                 </a>
            </fieldset>
    </section>

    <div class="mx-4 border-t">
        <section class="pb-16 max-w-screen-2xl md:py-16 md:mx-auto">
            <div class="grid grid-cols-1 gap-7 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5">

                @forelse ($masterplans as $masterplan)
                <div class="">
                    <a href="masterplans_post?id={{ $masterplan->id }}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b"
                                    src="{{ asset('storage/' . $masterplan->image[0]) }}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-2 mx-8 text-sm font-bold text-center">{{ $masterplan->title }} | {{ $masterplan->author }} |
                                    {{ $masterplan->city }}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   {{ $masterplan->category }}, {{ $masterplan->size }}  
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
@empty
     <div class="">
                    <a href="./masterplans_post">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b"
                                    src="./img/M_DOUBLE-DUTCH_Stadstuin-1-1-scaled.jpg" alt="">
                                <h1 class="pt-2 mx-8 text-sm font-bold text-center">Empty</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                </p>
                            </div>
                        </div>
                    </a>
                </div>


@endforelse
            </div>
                    {{ $masterplans->appends(Request::all())->links('pagination::tailwind') }} 
        </section>
    </div>