         @php use \App\Http\Controllers\GlobalController; @endphp
        @php  $pages = GlobalController::pages();@endphp
 <section class="pt-8">
        <div class="p-8 md:p-12 lg:px-12 lg:py-12">
            <div class="max-w-lg mx-auto text-center lg:max-w-xl">
                <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                    About
                </h2>
                <p class="text-base text-gray-700 md:text-lg pt-8">
                   {{ $pages[5]->content;}}
            </p>
            </div>
            
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto">
            <div class="flex flex-col w-full mb-20 text-center">
                <h1 class="mb-4 text-2xl font-medium tracking-widest text-gray-900 title-font">People</h1>
            </div>
            <div class="flex flex-wrap -m-4">


@foreach ($team as $member)
                <div class="p-4 lg:w-1/2">
                    <div
                        class="flex flex-col items-center justify-center h-full text-center sm:flex-row sm:justify-start sm:text-left">
                        <img alt="team"
                            class="flex-shrink-0 object-cover object-center w-48 h-48 mb-4 rounded-lg sm:mb-0"
                            src="{{ asset('storage/' . $member->image) }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="text-lg font-medium text-gray-900 title-font">{{ $member->name }}</h2>
                            <h3 class="mb-3 text-gray-500">{{ $member->position }}</h3>
                            <p class="mb-4">{{ $member->description }}
                            </p>
                            <span class="inline-flex">
                                <a href="{{ $member->link }}" class="ml-2 text-gray-500">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>

@endforeach


            </div>
        </div>
    </section>