@extends('layouts.app')

@section('main')
    <div class="md:mx-[46px] mx-[10px]">
        <div data-barba="container" class="bg-gradient-to-r from-white to-gray-100">
            <div class="bg-contain bg-no-repeat bgimg h-[540px]" style="">
                <h1 class="text-gray-800 md:py-8 py-4 font-bold  md:text-5xl text-2xl pt-[30px]" style="line-height: 140%">
                    Find practical urban design inspiration<br> from real projects that solve real<br> urban design
                    problems.
                </h1>
                <div class="flex flex-col gap-6">
                    <span class="text-gray-700 md:text-xl text-md font-semibold leading-[150%]">
                        Save hours of research with our 500+ <br>
                        fully searchable urban design resources

                    </span>
                    <span class="text-xl font-light text-gray-500">
                        Trusted by global institutions:
                    </span>
                </div>

                <div class="flex flex-wrap md:pt-12 pt-8 gap-1">
                    <img src="{{ asset('img/how-it-works/FWF_Logo 1.png') }}" class="h-[46px] w-[167px]" alt="">
                    <img src="{{ asset('img/how-it-works/logo-lang-de 1.png') }}" class="h-[46px] w-[109px]" alt="">
                    <img src="{{ asset('img/how-it-works/IaaC 1.png') }}" class="h-[46px] w-[94px]" alt="">
                    <img src="{{ asset('img/how-it-works/GMetri_B_W 1.png') }}" class="h-[46px] w-[90px]" alt="">
                    <img src="{{ asset('img/how-it-works/ISOCARP-logoFea copy 1.png') }}" class="h-[46px] w-[125px]"
                        alt="">

                    <img src="{{ asset('img/how-it-works/logo-oebb-og copy 1@2x.png') }}" class="h-[46px] w-[98px]"
                        alt="">
                </div>
            </div>

        </div>

        <section
            class="bg-gray-800 z-10 -mt-6  md:py-20 py-6 flex flex-col text-white justify-center items-center gap-8 rounded-3xl">

            <h2 class="lg:text-5xl md:text-3xl text-xl font-bold text-center">
                Urbanitarian is the world's largest urban design reference library.
            </h2>

            <div class="flex md:flex-row flex-col pt-6 justify-center md:space-x-56 space-x-0 gap-4 items-center">
                <div class="flex md:flex-row flex-col justify-center items-center">
                    <span class="lg:text-7xl md:text-4xl text-2xl font-bold">500+</span>
                    <span class="text-gray-300 text-2xl font-semibold">
                        Masterplans
                    </span>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <span class="lg:text-7xl md:text-4xl text-2xl font-bold">100+</span>
                    <span class="text-gray-300 text-2xl font-semibold">
                        Streetscapes
                    </span>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <span class="lg:text-7xl md:text-4xl text-2xl font-bold">500+</span>
                    <span class="text-gray-300 text-2xl font-semibold">
                        Urbanscapes
                    </span>
                </div>

            </div>

            <span class="lg:text-4xl md:text-2xl text-lg mx-4 font-bold pt-6">
                An ever-growing library, curated by experts.
            </span>

            <p class="lg:text-xl md:text-lg text-base font-normal pt-6 text-center text-gray-300">
                New Masterplans, Streetscapes and Urbanscapes are added to Urbanitarian<br> every week, and there's always
                something new to check out.<br>
                You will find the references you need, save time and get inspired.
            </p>

        </section>

        <section class="pt-6">
            <h1 class="text-gray-800 text-center md:py-6 py-2 font-bold lg:text-5xl  md:text-2xl text-xl  leading-[140%]">
                Solve specific urban design challenges
            </h1>
            <div class="bg-gray-100 rounded-3xl md:pt-[70px] pt-[30px] flex flex-col justify-center items-center">
                <span class="lg:text-4xl md:text-2xl text-xl font-bold text-center text-gray-700 leading-[140%]">
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
                    <img src="{{ asset('img/how-it-works/Screen Wrap.png') }}" class="pt-6 w-[150vh] px-5"
                        style="background: #000000;
                border-radius: 22px 22px 0px 0px;" alt="">
                </div>

            </div>

        </section>

        <section class="pt-12">
            <div
                class="bg-gray-800 md:px-12 px-6  md:pt-20 pt-10 flex flex-col text-white justify-start items-start gap-8 rounded-3xl">
                <span class="lg:text-4xl md:text-2xl text-xl font-bold">
                    Compare by scales & data,<br>
                    deep-dive, read or measure.
                </span>
                <div class="flex md:flex-row flex-col justify-between">
                    <div
                        class="md:pt-6 pt-2  pb-4 md:pb-0 flex flex-col md:gap-6 gap-3 md:text-xl text-base font-normal text-gray-300">
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
                    <div class="md:flex hidden float-right w-[600px]">
                        <img src="{{ asset('img/how-it-works/imagen 1.png') }}" class="pt-12 pl-16 ab" alt="">
                        <img src="{{ asset('img/how-it-works/imagen 2.png') }}" class="z-10 md:-ml-[295px] -ml-[100]"
                            alt="">
                    </div>

                </div>
            </div>
        </section>

        <section class="pt-12">
            <div class="flex md:flex-row flex-col justify-center items-center gap-8">
                <div class=" md:max-w-[640px] max-w-[300px]">
                    <img src="{{ asset('img/how-it-works/Group 618.png') }}" class="rounded-t-3xl w-[100vh] "
                        alt="">
                    <div class="bg-gray-100 md:w-[640px] w-[300px] rounded-b-3xl py-6 md:px-12 px-6 ">
                        <h3 class="text-start leading-[140%] md:text-2xl text-xl font-bold text-gray-700">
                            Learn how to redefine streets with our<br> Streetscapes curated collection.
                        </h3>
                        <div class="md:text-base font-normal text-sm text-start md:text-justify text-gray-500 pt-6">
                            Our examples of Streetscapes are meticulously analized and explained by us with descriptions,
                            measures and solutions to incorporate in your designs.
                        </div>
                    </div>
                </div>
                <div class="md:max-w-[640px] max-w-[300px]">

                    <div class="bg-gray-100 md:w-[640px] w-[300px] rounded-t-3xl py-6 px-12 ">
                        <h3 class="text-start leading-[140%] md:text-2xl text-xl  font-bold text-gray-700">
                            Design the Future of Urban Living with our <br> ultimate resource for Urbanscapes.
                        </h3>
                        <div class="md:text-basefont-normal text-sm text-start md:text-justify text-gray-500 py-6">
                            Take a deep-dive into some of the finest urban developments through our insightful articles.
                        </div>
                    </div>
                    <img src="{{ asset('img/how-it-works/masterplans1.png') }}" class="rounded-b-3xl md:w-[100vh]"
                        alt="">
                </div>
            </div>

        </section>

        <section class="pt-6 pb-16">

            <h1 class="text-gray-800 text-center py-6 font-bold line-clamp-3  md:text-2xl text-xl  leading-[140%]">
                Save references that inspire you
            </h1>

            <div class="bg-gray-100 pt-[60px] rounded-3xl">
                <div class="flex justify-between">
                    <div class="">
                        <ul
                            class="lg:text-3xl md:text-2xl text-xl pl-12  md:pl-24 md:w-[500px] w-[300px] font-bold list-disc text-gray-700 leading-[150%]">
                            <li>
                                Copy
                                Collect, Organize, and Create Your Ultimate Project Inspiration Lists</li>
                            <li>
                                Build Your Personal Reference Library </li>
                            <li>
                                Curate Your Personalized Lists of Projects
                            </li>
                        </ul>

                        <p class="text-base text-start pt-6 pb-4 md:pb-0 text-gray-500 pl-12">
                            Create collections and bookmark your favorite Masterplans,<br> Streetscapes and Urbanscapes.
                            Share the collections with<br> your team for collaboration.
                        </p>

                    </div>

                    <div class="pb-16 md:block hidden">
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

    <style>
        .bgimg {
            background-position: right;
            background-image: url('img/how-it-works/masterplans.png');
        }

        @media (max-width: 1300px) {

            .bgimg {
                background-image: none;
            }

        }
    </style>
@endsection
