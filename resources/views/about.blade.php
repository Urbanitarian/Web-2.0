@extends('layouts.app')

@section('main')
    <div data-barba="container">
        @php use \App\Http\Controllers\GlobalController; @endphp
        @php  $pages = GlobalController::pages();@endphp
        <section class="pt-8">
            <div class="p-8 md:p-12 lg:px-12 lg:py-12">
                <div class="max-w-lg mx-auto text-center lg:max-w-4xl">
                    <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                        About Us
                    </h2>
                    <p class="text-base text-gray-500 md:text-lg pt-8 ">
                        Urbanitarian is the world's leading community-based, scalable, didactic, free, open, and
                        comprehensive dataset and archive of urban design projects and resources. Urbanitarian is a result
                        of the observation and recognition of the assets required to design meaningful urban spaces. As a
                        platform, we seek to aid designers and stakeholders in better understanding the urban environments
                        of today in order to craft the urban realms of tomorrow. The platform is a resource bank for any
                        person interested in shaping urban environments.
                    </p>

                    <img src="{{ asset('img/0.jpg') }}" alt="logo" class="mx-auto py-16" />

                    <p class="text-base text-gray-500 md:text-lg pt-8 text-center">
                        The core mission of Urbanitarian is to bring forward a new way of practicing urban design, creating
                        actionable plans and operational insights based on findings gathered and published in a
                        community-engaging manner.
                        Unlike planning, urban design has re-emerged as a protagonist with the planetary scale challenges we
                        face today. Thanks to the technological tools available today, it is now possible to create urban
                        environments, backed with simulations, community, and data at scale. On the other hand, there is a
                        huge gap between the 3 main axes; the top-down to bottom-up approaches, the physical to the virtual,
                        and the architectural scale to the planning(territorial) scale. The cross-point of all the mentioned
                        phenomena is where we believe urban design sits.

                    </p>

                    <h1 class="pt-16 pb-4 text-2xl font-bold text-[#333333] tracking-widest text-center">HOW</h1>

                    <img src="{{ asset('img/1.jpg') }}" alt="logo" class="mx-auto py-8" />

                    <p class="text-base text-gray-500 md:text-lg pt-8 text-center">
                        Urbanitarian carries our quantitative and qualitative data analysis of projects and website traffic
                        for
                        correlational mapping. It offers industry-informed marketing for projects of shared values.
                        We envision the democratization of easy-to-access urban design knowledge through a community-based
                        and data-informed global platform and a consultancy practice that responds to urban design
                        challenges at an equal magnitude. Urbanitarian fills the gap between planning and architecture,
                        strategic and tactical planning, and physical and virtual realms through various services:<br>
                        - Online Platform<br>
                        - Analytics<br>
                        - Marketing<br>
                        - Design Consultancy<br>
                    </p>

                    <h1 class="pt-16 pb-4 text-2xl font-bold text-[#333333] tracking-widest text-center">WEBSPACE</h1>

                    <p class="text-base text-gray-500 md:text-lg pt-8 text-center">
                        While the Urbanitarian WEBSITE offers such a platform, the Urbanitarian WEBSPACE is a virtual 3d
                        environment that spatially showcases your favourite Urbanitarian resources. Streetscapes, Urban
                        Master Plans, Projects, and an interactive space for the community to meet and share knowledge.
                        For the launch of the Urbanitarian Webspace, we are joined by leading minds who will share their
                        thoughts on vital topics that urbanism and Urbanitarian tackle today: ecology, spatial equity, urban
                        computing, mobility, platform economy, and more.

                    </p>

                    <img src="{{ asset('img/2.jpg') }}" alt="logo" class="mx-auto py-8" />

                    <p class="text-base text-gray-500 md:text-lg pt-8 text-center">
                        We're not done yet!
                       <br>
                       <br>
                        We have recently integrated Mindscapes as a new form of urban data on the platform, a dataset that
                        maps human emotions within the built environment, powered by RE-AK technologies.
                         <br>
                         <br>
                        In addition, the Mindscapes space will be hosting the Mindscape Emotions book release!<br>
                        See you in the metaverse!
                    </p>

                    <button class="bg-black text-white font-bold py-2 px-4 rounded-lg mt-8 hover:bg-[#333333]">
                        <a href="">Sign in</a>

                </div>

            </div>
        </section>
    </div>
@endsection
