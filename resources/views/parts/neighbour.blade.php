
<section class="pt-8">
@php
    $size = urldecode(request()->get('size'));
    $q = urldecode(request()->get('q'));
    $tags = urldecode(request()->get('tags'));
@endphp
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
                <form action="{{ route('nfilter') }}" class="sm:flex sm:gap-4">
                    <div class="sm:flex-1">
                        <input type="text" placeholder="SEARCH" name="q" value="{{ $q }}"
                            class="w-full p-3 text-gray-700 transition bg-gray-100 border-gray-200 rounded-md shadow-sm focus:border-white focus:outline-none focus:ring focus:ring-gray-400" />
                    </div>
                </form>
            </div>

            <fieldset class="flex flex-wrap justify-center gap-2 pt-8 mx-auto md:gap-4">
                <a href="{{ route('nfilter') }}">
                    <label for="All0"
                        class="{{ $tags == '' ? 'bg-gray-400 text-white' : 'text-gray-900' }} flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">All</p>
                    </label>
                </a>

                 <a href="{{ route('nfilter') }}?tags=child-friendly">
                    <label for="child"
                        class="{{ $tags == 'child-friendly' ? 'bg-gray-400 text-white' : 'text-gray-900' }} flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">Child-friendly</p>
                    </label>
                </a>

                 <a href="{{ route('nfilter') }}?tags=green">
                    <label for="green"
                        class="{{ $tags == 'green' ? 'bg-gray-400 text-white' : 'text-gray-900' }} flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">Green</p>
                    </label>
                </a>

                 <a href="{{ route('nfilter') }}?tags=climate-proof">
                    <label for="climate"
                        class="{{ $tags == 'climate-proof' ? 'bg-gray-400 text-white' : 'text-gray-900' }} flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">Climate-proof</p>
                    </label>
                </a>

                 <a href="{{ route('nfilter') }}?tags=age-friendly">
                    <label for="age"
                        class="{{ $tags == 'age-friendly' ? 'bg-gray-400 text-white' : 'text-gray-900' }} flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">Age-friendly</p>
                    </label>
                </a>

                 <a href="{{ route('nfilter') }}?tags=placemaking">
                    <label for="placemaking"
                        class="{{ $tags == 'placemaking' ? 'bg-gray-400 text-white' : 'text-gray-900' }} flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">Placemaking</p>
                    </label>
                </a>
            </fieldset>




            <fieldset class="flex flex-wrap justify-center gap-2 pt-8 mx-auto md:gap-4">
                 <a href="{{ route('nfilter') }}">
                    <label for="All"
                        class="{{ $size == '' ? 'bg-gray-400 text-white' : 'text-gray-900' }} flex items-center justify-center px-3 py-2 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">All</p>
                    </label>
                </a>

                <a href="{{ route('nfilter') }}?size=large">
                    <label for="large"
                        class="{{ $size == 'large' ? 'bg-gray-400 text-white' : 'text-gray-900' }} flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">large</p>
                    </label>
                </a>

               <a href="{{ route('nfilter') }}?size=medium">
                    <label for="medium"
                        class="{{ $size == 'medium' ? 'bg-gray-400 text-white' : 'text-gray-900' }} flex items-center justify-center px-3 py-2 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">medium</p>
                    </label>
                </a>

                <a href="{{ route('nfilter') }}?size=small">
                    <label for="small"
                        class="{{ $size == 'small' ? 'bg-gray-400 text-white' : 'text-gray-900' }} flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">small</p>
                    </label>
                </a>

                <a href="{{ route('nfilter') }}?size=xs">
                    <label for="xs"
                        class="{{ $size == 'xs' ? 'bg-gray-400 text-white' : 'text-gray-900' }} flex items-center justify-center px-3 py-2  border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                        <p class="text-sm font-medium">xs</p>
                    </label>
              </a>
            </fieldset>


            <section>
                <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
                    <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">

                    @forelse ($neighbourhoods as $neighbourhood)
                         <li>
                            <a href="./neighbourhoods_post" class="block overflow-hidden group">
                                <img src="{{ asset('storage/' . $neighbourhood->image[0]) }}"alt=""  onerror="this.src='./img/empty.png'"
                                    class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />

                                <div class="relative pt-3 bg-white">
                                    <span class="mx-1 text-base font-bold tracking-wider text-gray-900">{{ $neighbourhood->title }}</span>
                                    <p class="mt-2">
                                        <span class="mx-2 text-xs font-semibold text-gray-500">
                                          @foreach($neighbourhood->tags as $tag)
                                               {{ $tag }} &nbsp;
                                           @endforeach
                                        </span>

                                    </p>
                                </div>
                            </a>
                        </li>
                    @empty
                         <li>
                            <a href="" class="block overflow-hidden group">
                                <img src="{{ asset('img/empty.png') }}"
                                    alt=""
                                    class="h-[400px] w-full object-cover transition duration-500 group-hover:scale-105" />

                                <div class="relative pt-3 bg-white">
                                    <span class="mx-1 text-base font-bold tracking-wider text-gray-900"> empty </span>
                                    <p class="mt-2">
                                        <span class="mx-2 text-xs font-semibold text-gray-500">   </span>

                                    </p>
                                </div>
                            </a>
                        </li>
                    @endforelse
                       

                        
                    </ul>
                </div>
                                     <div class="flex justify-center pt-8">
  {{ $neighbourhoods->appends(Request::all())->links('pagination::tailwind') }}
      </div>
            </section>




    </section>
