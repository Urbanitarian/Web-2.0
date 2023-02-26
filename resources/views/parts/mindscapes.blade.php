<section class="pt-8">
    @php
        $q = urldecode(request()->get('q'));
    @endphp
    <div class="p-8 md:p-12 lg:px-12 lg:py-12">
        <div class="max-w-lg mx-auto text-center lg:max-w-4xl">
            <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                Mindscapes
            </h2>

                 <p class="text-sm font-bold text-gray-700 md:text-lg pt-4">
                The Power of Emotions in Urban Design
             </p>
             <p class="text-ssm text-gray-500 md:text-lg">
          Designing for Human Experience with our New Urban Data Resource: Mapping Emotions with Mindscapes
             </p>
        </div>
</section>


<section class="mx-4 border-t">
    <div class="container px-6 py-10 mx-auto">
        <div class="flex flex-col">

            @forelse ($mindscapes as $mindscape)
                <div class="flex flex-col py-4 lg:flex-row lg:-mx-6">
                    <div class="lg:w-3/4 md:px-6">
                        <div class="juxtapose">
                            <img class="object-cover object-center w-full h-80 xl:h-[28rem] md:mr-4  saturate-120"
                                src="{{ asset('storage/' . $mindscape->image[0]) }}"alt="00"
                                onerror="this.src='./img/empty.png'" />
                        </div>

                    </div>

                    <div class="mt-8 border-t border-b lg:w-1/4 lg:mt-0 lg:px-6">

                        <h3 class="mt-4 font-semibold text-center text-black uppercase"> {{ $mindscape->tags[0] }}
                        </h3>

                        <a href="../mindscape_post?id={{ $mindscape->id }}"
                            class="block mt-8 text-2xl font-bold text-center text-gray-900 uppercase">
                            {{ $mindscape->title }}
                        </a>
                        <div class="flex flex-wrap justify-center mx-4 text-xs">
                            <p class="mt-2 text-center text-gray-600 "> {{ $mindscape->address }} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; {{ $mindscape->city }} |</p>
                            <p class="mt-2 text-center text-gray-600 "> &nbsp; {{ $mindscape->country }} </p>
                        </div>
                        <div class="flex justify-center">
                            <div class="flex flex-wrap justify-center mx-10 pt-4 w-3/4">
                                @foreach ($mindscape->tags as $tag)
                                    <button disabled
                                        class="px-3 py-1 my-0.5 mx-1 text-xs font-light tracking-wide text-white bg-black rounded-md">
                                        {{ $tag }}
                                    </button>
                                @endforeach
                            </div>
                        </div>
                        <p class="mt-2 text-center text-gray-600 "><span class="text-black"></span> &nbsp;
                            {{ $mindscape->area }} </p>

                        <button
                            class="flex px-8 py-2 mx-auto my-4 text-base font-bold text-white uppercase bg-black border-0 rounded xl:mt-32 md:mt-8 focus:outline-none hover:bg-gray-800">
                            <a href="../mindscapes_post?id={{ $mindscape->id }}">More Info </a></button>



                    </div>
                </div>
            @empty
                <p class="text-center">No posts yet. Please check back later.</p>
            @endforelse

        </div>
        <div class="flex justify-center pt-8">
            {{ $mindscapes->appends(Request::all())->links('pagination::tailwind') }}
        </div>
    </div>
</section>

<script>
 
</script>
