@extends('layouts.app')

@section('main')
    <div class="mx-[46px]">
        <div data-barba="container" class="bg-gradient-to-r from-white to-gray-200 ">
            <div class="z-20 h-[540px] w-[1312px]"
                style="background-image: url('{{ asset('img/how-it-works/masterplans.png') }}')">
                <h1 class="text-gray-800 py-4 font-bold line-clamp-3 text-5xl pt-[30px] leading-[140%]">
                    Find practical urban design inspiration<br> from real projects that solve real<br> urban design
                    problems.
                </h1>
                <div class="flex flex-col gap-6">
                    <span class="text-gray-700 text-xl font-semibold leading-[150%]">
                        Save hours of research with our 500+ <br>
                        fully searchable urban design resources

                    </span>
                    <span class="text-xl font-light">
                        Trusted by global institutions:
                    </span>
                </div>

                <div class="flex pt-12">
                    <img src="{{ asset('img/how-it-works/FWF_Logo 1.png') }}" class="h-[46px] w-[109px]" alt="">
                    <img src="{{ asset('img/how-it-works/logo-lang-de 1.png') }}" class="h-[46px] w-[109px]" alt="">
                    <img src="{{ asset('img/how-it-works/IaaC 1.png') }}" class="h-[46px] w-[109px]" alt="">
                    <img src="{{ asset('img/how-it-works/GMetri_B_W 1.png') }}" class="h-[46px] w-[109px]" alt="">
                    <img src="{{ asset('img/how-it-works/ISOCARP-logoFea copy 1.png') }}" class="h-[46px] w-[109px]"
                        alt="">

                    <img src="{{ asset('img/how-it-works/logo-oebb-og copy 1@2x.png') }}" class="h-[46px] w-[109px]"
                        alt="">
                </div>
            </div>

        </div>

        <section class="bg-gray-800  py-20 flex flex-col text-white justify-center items-center gap-8 rounded-3xl">

            <h2 class="text-5xl font-bold text-center">
                Urbanitarian is the world's largest urban design reference library.
            </h2>

            <div class="flex pt-6 justify-center space-x-56 items-center">
                <div class="flex flex-col justify-center items-center">
                    <span class="text-7xl font-bold">500+</span>
                    <span class="text-gray-300 text-2xl font-semibold">
                        Masterplans
                    </span>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <span class="text-7xl font-bold">100+</span>
                    <span class="text-gray-300 text-2xl font-semibold">
                        Streetscapes
                    </span>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <span class="text-7xl font-bold">500+</span>
                    <span class="text-gray-300 text-2xl font-semibold">
                        Urbanscapes
                    </span>
                </div>

            </div>

            <span class="text-4xl font-bold pt-6">
                An ever-growing library, curated by experts.
            </span>

            <p class="text-xl font-normal pt-6 text-center">
                New Masterplans, Streetscapes and Urbanscapes are added to Urbanitarian<br> every week, and there's always
                something new to check out.<br>
                You will find the references you need, save time and get inspired.
            </p>

        </section>

        <section class="pt-6">
            <h1 class="text-gray-800 text-center py-4 font-bold line-clamp-3 text-5xl  leading-[140%]">
                Solve specific urban design challenges
            </h1>
            <div class="bg-gray-100 rounded-3xl pt-[60px] flex flex-col justify-center items-center">
                <span class="text-4xl font-bold text-center text-gray-700 leading-[140%]">
                    Find your reference project<br>
                    with our rich search experience.
                </span>
                <p class="pt-6 text-base text-center font-normal text-gray-500">
                    Our search & filter feature provide a quick, efficient way of finding<br> references by specific
                    properties
                    of categories such as:<br>
                    tags, size, status, author, location.
                </p>

                <div class="pt-8">
                    <img src="{{ asset('img/how-it-works/image 1.png') }}" class="pt-6 px-5"
                        style="background: #000000;
                border-radius: 22px 22px 0px 0px;" alt="">
                </div>

            </div>

        </section>

        <section class="pt-12">
            <div class="bg-gray-800 px-12  pt-20 flex flex-col text-white justify-start items-start gap-8 rounded-3xl">
                <span class="text-4xl font-bold">
                    Compare by scales & data,<br>
                    deep-dive, read or measure.
                </span>
                <div class="flex">
                    <div class="pt-6 flex flex-col gap-6 text-xl font-normal text-gray-300">
                        <span>
                            Filter 500 Masterplans by specific<br> categories such as tags sizes, status<br> and
                            location.<br></span>

                        <span>

                            Enhance your search with associated<br> search solutions, filters, and more.
                        </span>
                        <span>
                            Seamless Searching: discover, sort, <br>
                            and save your ideal reference project.

                        </span>

                    </div>
                    <div class="flex w-[600px]">
                        <img src="{{ asset('img/how-it-works/imagen 1.png') }}" class="pt-12 pl-16 ab" alt="">
                        <img src="{{ asset('img/how-it-works/imagen 2.png') }}" class="z-10 -ml-[295px]" alt="">
                    </div>

                </div>
            </div>
        </section>

        <section class="pt-12">
            <div class="flex gap-8">
                <div class="">
                    <img src="{{ asset('img/how-it-works/Group 618.png') }}" class="rounded-t-3xl" alt="">
                    <div class="bg-gray-100 w-[640px] rounded-b-3xl py-6 px-12 ">
                        <h3 class="text-start leading-[140%] text-2xl font-bold text-gray-700">
                            Learn how to redefine streets with our<br> Streetscapes curated collection.
                        </h3>
                        <div class="text-base font-normal text-justify text-gray-500 pt-6">
                            Our examples of Streetscapes are meticulously analized and explained by us with descriptions,
                            measures and solutions to incorporate in your designs.
                        </div>
                    </div>
                </div>
                <div class="">

                    <div class="bg-gray-100 w-[640px] rounded-t-3xl py-6 px-12 ">
                        <h3 class="text-start leading-[140%] text-2xl font-bold text-gray-700">
                            Design the Future of Urban Living with our <br> ultimate resource for Urbanscapes.
                        </h3>
                        <div class="text-base font-normal text-justify text-gray-500 py-6">
                            Take a deep-dive into some of the finest urban developments through our insightful articles.
                        </div>
                    </div>
                    <img src="{{ asset('img/how-it-works/masterplans1.png') }}" class="rounded-b-3xl" alt="">
                </div>
            </div>

        </section>

        <section class="py-6">

            <h1 class="text-gray-800 text-center py-4 font-bold line-clamp-3 text-5xl  leading-[140%]">
                Save references that inspire you
            </h1>

            <div class="bg-gray-100 pt-[60px] rounded-3xl">
                <div class="flex justify-between">
                    <div class="">
                        <ul class="text-3xl pl-24 w-[500px]  font-bold list-disc text-gray-700 leading-[150%]">
                            <li>
                                Copy
                                Collect, Organize, and Create Your Ultimate Project Inspiration Lists</li>
                            <li>
                                Build Your Personal Reference Library </li>
                            <li>
                                Curate Your Personalized Lists of Projects
                            </li>
                        </ul>

                        <p class="text-base text-start pt-6 text-gray-500 pl-12">
                            Create collections and bookmark your favorite Masterplans,<br> Streetscapes and Urbanscapes.
                            Share the collections with<br> your team for collaboration.
                        </p>

                    </div>

                    <div class="py-16">
                        <div class="pl-[180px]">
                            <img src="{{ asset('img/how-it-works/image 3.png') }}" class="w-[550px] pt-6 pl-5"
                                style="background: #000000;
                border-radius: 22px 0px 0px 0px;"
                                alt="">
                        </div>

                        <img src="{{ asset('img/how-it-works/Bottom.png') }}" class="w-[730px] pl-28" alt="">
                        <div class="h-2 pl-28">
                            <div class="h-2 w-[600px]"
                                style="background: #000000;
                            filter: blur(22px);"></div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </div>
@endsection
