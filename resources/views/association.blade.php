@extends('layouts.app2')
@php use \App\Http\Controllers\GlobalController; @endphp
@php  $pages = GlobalController::pages();@endphp
@section('main')
    <div data-barba="container">
        <section class="text-gray-400 bg-[#6A539D] body-font mt-8">
            <h2 id="activities" class="py-2 text-2xl font-semibold text-center text-white md:text-3xl">
                ACTIVITIES
            </h2>
        </section>

        <section class="overflow-hidden text-gray-600">
            <div class="container px-4 py-24 mx-auto lg:px-16">
                <div class="flex flex-wrap -m-4">
                    <div class="w-full p-4 xl:w-1/4 md:w-1/2">
                        <div class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-gray-300 rounded-lg">
                            <h1 class="pb-4 mb-4 text-2xl font-bold text-center text-gray-900 border-b border-gray-200">
                                JUSTHood</h1>
                            <h1 class="text-xs font-bold">JUSThood method®</h1>
                            <p class="flex items-center mb-2 text-xs text-gray-600">
                                is an innovative method developed by Urbanitarian
                                that empowers inhabitants to envision the design of their neighborhoods in an equitable way.
                                Based on a design-driven approach, JUSThood method is a game-based method, positioned at the
                                intersection of three topics – masterplanning, spatial equity and participatory futures,
                                where a
                                set of cards (What-If, Persona, Design cards) is used to imagine scenarios and map ideas on
                                the
                                masterplans.
                            </p>
                            <h1 class="text-xs font-bold">JUSThood network </h1>
                            <p class="flex items-center mb-2 text-xs text-gray-600">
                                is a network of hubs and JUSThood mentors in
                                different countries who are trained in spatial equity and participatory futures approaches
                                in
                                general, and in implementation of JUSThood method® in particular.
                            </p>
                            <h1 class="text-xs font-bold">JUSThood index </h1>
                            <p class="flex items-center mb-2 text-xs text-gray-600">
                                is a tool which can be used to measure spatial equity
                                of urban places. It allows to quantify and operationalize spatial equity concept to bring it
                                to
                                the table with authorities, and compare spatial equity of different places across
                                geographies
                                and contexts.
                            </p>
                            <p class="flex items-center mt-2 text-xs text-gray-600">
                                Links:
                            </p>
                            <a href="https://www.justhood.net/" class="text-xs text-blue-500 truncate hover:text-blue-700">
                                https://www.justhood.net/</a>
                            <a href="https://www.instagram.com/justhood_net/"
                                class="text-xs text-blue-500 truncate hover:text-blue-700">https://www.instagram.com/justhood_net/</a>
                        </div>
                    </div>
                    <div class="w-full p-4 xl:w-1/4 md:w-1/2">
                        <div class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-gray-300 rounded-lg">
                            <h1 class="pb-4 mb-4 text-2xl font-bold text-center text-gray-900 border-b border-gray-200">
                                Urbanitarian Webspace</h1>



                        </div>
                    </div>
                    <div class="w-full p-4 xl:w-1/4 md:w-1/2">
                        <div class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-gray-300 rounded-lg">
                            <h1 class="pb-4 mb-4 text-2xl font-bold text-center text-gray-900 border-b border-gray-200">
                                U-SCAT</h1>
                            <p class="flex items-center mb-2 text-xs text-gray-600">
                                U-SCAT (Urban Social Capital Assessment Tool) is a survey-based methodology to produce
                                social capital index for urban places. The goal of U-SCAT is to bring a different type of
                                metrics to measuring the well-being of our cities. The tool has been implemented in the city
                                of Bishkek in Kyrgyzstan and the results will be uploaded in April 2023 on the Civic City
                                Dashboard (https://citydata.kg/).<br>
                            </p>
                            <p class="flex items-center mt-2 text-xs text-gray-600">
                                Links:
                            </p>
                            <a href="https://auca.kg/en/silk_projects_social_capital/"
                                class="text-xs text-blue-500 truncate hover:text-blue-700">
                                https://auca.kg/en/silk_projects_social_capital/</a>

                        </div>
                    </div>
                    <div class="w-full p-4 xl:w-1/4 md:w-1/2">
                        <div class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-gray-300 rounded-lg">
                            <h1 class="pb-4 mb-4 text-2xl font-bold text-center text-gray-900 border-b border-gray-200">Free
                            </h1>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-gray-400 bg-[#6A539D] body-font mt-8">
            <h2 id="activities" class="py-2 text-2xl font-semibold text-center text-white md:text-3xl">
                MAP OF ACTIVITIES
            </h2>
        </section>
        <div>
            <iframe width="100%" height="600px" frameborder="0" allowfullscreen
                src="//umap.openstreetmap.fr/fr/map/carte-sans-nom_885439?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false&datalayers=2687771#3/50.12/-10.37"></iframe>
        </div>

        <section class="text-gray-400 bg-[#6A539D] body-font mt-8">
            <h2 id="services" class="py-2 text-2xl font-semibold text-center text-white md:text-3xl">
                SERVICES
            </h2>
        </section>
        <section>
            <div class="px-4 py-8 mx-auto max-w-screen-2xl sm:py-12 sm:px-6 lg:py-16 lg:px-8">
                <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-8">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="block p-4 border border-gray-400 rounded shadow-sm">

                            <h2 class="mt-2 text-2xl font-bold text-center">Speaking</h2>

                            <p class="block pb-4 mx-1 mt-4 text-xs md:mx-4">
                                We give public talks and keynote presentations for academic and non-academic institutions
                                and organizations on the variety of topics based on our <a href="#expertise"
                                    class="text-blue-500 hover:text-blue-700">expertise</a> <br>
                            </p>
                            <ul class="pb-4 mx-2 text-xs list-disc md:mx-8">
                                <li>
                                    2023 | Politecnico di Milano, Milan, Italy. Topic: Design Futures for Innovation
                                </li>
                                <li>
                                    2022 | UrbanCommunity for Just & Sustainable Cities. Webinar - Mapping visions for
                                    equitable
                                    neighborhoods: Community Conversation with JUSThood
                                </li>
                                <li>
                                    2022 | Statale university, Milan, Italy. Topic: Right to the City: Participatory Futures
                                    for
                                    Urban Design
                                </li>
                                <li>
                                    2022 | WWNA “Why the World Need Anthropologists” conference, Berlin, Germany. Topic:
                                    Uncovering local knowledge and mapping visions of equitable neighborhood with
                                    participatory
                                    futures
                                </li>
                                <li>
                                    2022 | Placemaking week, Pontevedra, Spain. Topic: Place making is Plan making
                                </li>
                                <li>
                                    2022 | Women Entrepreneurs Foundation “SheStarts”, Bishkek, Kyrgyzstan. Topic:
                                    Creativity
                                    for Innovation
                                </li>
                                <li>
                                    2022 | ISOCARP, Brussels, Belgium. Topic: Uncovering local knowledge and mapping visions
                                    of
                                    equitable neighborhood with participatory futures
                                </li>
                            </ul>

                        </div>
                        <div class="block p-4 border border-gray-400 rounded shadow-sm">

                            <h2 class="mt-2 text-2xl font-bold text-center">Workshops</h2>

                            <p class="block pb-4 mx-1 mt-4 text-xs md:mx-4">
                                We organize and facilitate workshops for a variety of actors with a participatory and
                                creative approach.<br>
                            </p>
                            <ul class="mx-2 text-xs list-disc md:mx-8">
                                <li>
                                    2023 | JUSThood workshop in the school Sant Marc Calldetenes, Barcelona, Spain
                                </li>
                                <li>
                                    2022 | U-SCAT workshop for community leaders, Bishkek, Kyrgyzstan
                                </li>
                                <li>
                                    2022 | JUSThood workshop at University of Milan, Milan, Italy
                                </li>
                                <li>
                                    2022 | JUSThood workshop in Pontevedra, Spain
                                </li>
                                <li>
                                    2022 | JUSThood workshop in Koszutka neighborhood, Katowice, Poland
                                </li>
                                <li>
                                    2022 | JUSThood workshop in Dabrowka Mala neighborhood, Katowice, Poland
                                </li>
                                <li>
                                    2022 | JUSThood workshop in Murcki neighborhood, Katowice, Poland
                                </li>
                                <ul>
                                    </p>
                        </div>


                    </div>

                    <div class="grid h-full grid-cols-2 gap-4">
                        <div class="block p-4 border border-gray-400 rounded shadow-sm">

                            <h2 class="mt-2 text-2xl font-bold text-center">Consultancy</h2>

                            <p class="block pb-4 mx-1 mt-4 text-xs md:mx-4">
                                We provide consultancy and mentorship to a variety of public and private actors in the urban
                                design field. We provide our <a href="#expertise"
                                    class="text-blue-500 hover:text-blue-700">expertise</a> for European and international
                                projects.
                            </p>
                        </div>

                        <div class="block p-4 border border-gray-400 rounded shadow-sm">


                            <h2 class="mt-2 text-2xl font-bold text-center">Rent our Metaverse space</h2>

                            <p class="block mt-4 text-xs">

                            </p>
                        </div>

                        <div class="block p-4 border border-gray-400 rounded shadow-sm">


                            <h2 class="mt-2 text-2xl font-bold text-center">Artworks</h2>

                            <p class="block mt-4 text-xs">
                                Lorem ipsum dolor sit amet consectetur.
                            </p>
                        </div>

                        <div class="block p-4 border border-gray-400 rounded shadow-sm">


                            <h2 class="mt-2 text-2xl font-bold text-center">Partner/ Advertisement</h2>

                            <p class="block mt-4 text-xs">
                                Reach out to us if you want to become a partner, or learn more about advertisement
                                opportunities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-gray-400 bg-[#6A539D] body-font mt-8">
            <h2 id="expertise" class="py-2 text-2xl font-semibold text-center text-white md:text-3xl">
                EXPERTISE
            </h2>
        </section>
        <div class="grid h-full grid-cols-2 gap-4 px-4 py-8 mx-auto lg:grid-cols-5 md:py-16 md:px-8 max-w-screen-2xl">
            <div class="flex flex-col p-4 align-middle border border-gray-400 rounded shadow-sm">
                <h2 class="mt-2 text-xl font-bold text-center">spatial equity</h2>
            </div>

            <div class="flex flex-col p-4 align-middle border border-gray-400 rounded shadow-sm">
                <h2 class="mt-2 text-xl font-bold text-center">urban design & masterplanning</h2>
            </div>

            <div class="flex flex-col p-4 align-middle border border-gray-400 rounded shadow-sm">
                <h2 class="mt-2 text-xl font-bold text-center">participatory futures</h2>
            </div>

            <div class="flex flex-col p-4 align-middle border border-gray-400 rounded shadow-sm">
                <h2 class="mt-2 text-xl font-bold text-center">design foresight</h2>
            </div>

            <div class="flex flex-col p-4 align-middle border border-gray-400 rounded shadow-sm">
                <h2 class="mt-2 text-xl font-bold text-center">community engagement &
                    actors’ involvement</h2>
            </div>

            <div class="flex flex-col p-4 align-middle border border-gray-400 rounded shadow-sm">
                <h2 class="mt-2 text-xl font-bold text-center">creative technology</h2>
            </div>

            <div class="flex flex-col p-4 align-middle border border-gray-400 rounded shadow-sm">
                <h2 class="mt-2 text-xl font-bold text-center">cultural knowledge</h2>
            </div>

            <div class="flex flex-col p-4 align-middle border border-gray-400 rounded shadow-sm">
                <h2 class="mt-2 text-xl font-bold text-center">knowledge design & knowledge co-creation</h2>
            </div>

            <div class="flex flex-col p-4 align-middle border border-gray-400 rounded shadow-sm">
                <h2 class="mt-2 text-xl font-bold text-center">art driven innovation &
                    artistic activism</h2>
            </div>

            <div class="flex flex-col p-4 align-middle border border-gray-400 rounded shadow-sm">
                <h2 class="mt-2 text-xl font-bold text-center">WeQ</h2>
            </div>
        </div>

        <section class="text-gray-400 bg-[#6A539D] body-font mt-8">
            <h2 id="resources" class="py-2 text-2xl font-semibold text-center text-white md:text-3xl">
                RESOURCES
            </h2>
        </section>
        <p class="py-8 text-sm text-center text-gray-500 md:text-lg">
            All our resources are online available in our archives on <a
                href="https://zenodo.org/communities/urbanitarian1assoc/edit/" target="_blank"
                class="text-blue-500 hover:text-blue-700">Zenodo</a> and GitHub
        </p>

        <div
            class="grid h-full grid-cols-2 gap-4 px-4 py-4 mx-auto lg:grid-cols-3 xl:grid-cols-4 md:py-8 md:px-8 max-w-screen-2xl">

            <div
                class="flex flex-col justify-center h-full p-4 border border-gray-800 sm:flex-row sm:justify-start sm:text-left">
                <img alt="team" class="flex-shrink-0 object-cover object-center w-48 h-64 mb-4 sm:mb-0"
                    src="./img/resources01.jpg">
                <div class="flex-grow pl-2">
                    <div class="flex flex-col font-bold">
                        <p class="mb-4 text-xs">JUSThood - Uncovering local knowledge and mapping visions of equitable
                            neighborhood with participatory futures.
                        </p>
                        <div class="text-xs">
                            link:<br>
                            <a href="https://brussels2022.dryfta.com/themes-tracks/216-programme/banners/proceedings"
                                target="_blank" class="text-blue-500 hover:text-blue-700">brussel2022</a>
                        </div>
                    </div>
                </div>

            </div>
            <div
                class="flex flex-col justify-center h-full p-4 border border-gray-800 sm:flex-row sm:justify-start sm:text-left">
                <img alt="team" class="flex-shrink-0 object-cover object-center w-48 h-64 mb-4 sm:mb-0"
                    src="./img/resources02.jpg">
                <div class="flex-grow pl-2">
                    <div class="flex flex-col font-bold">
                        <p class="mb-4 text-xs">U-SCAT: Developing Methodology to Measure Social Capital in Urban
                            Communities
                        </p>
                        <div class="text-xs">
                            link:<br>
                            <a href="https://auca.kg/en/silk_projects_social_capital/" target="_blank"
                                class="text-blue-500 hover:text-blue-700">auca.kg</a>
                        </div>
                    </div>
                </div>

            </div>

            <div
                class="flex flex-col justify-center h-full p-4 border border-gray-800 sm:flex-row sm:justify-start sm:text-left">
                <img alt="team" class="flex-shrink-0 object-cover object-center w-48 h-64 mb-4 sm:mb-0"
                    src="./img/resources03.jpg">
                <div class="flex-grow pl-2">
                    <div class="flex flex-col font-bold">
                        <p class="mb-4 text-xs">JUSThood masterplans in Katowice, Poland
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <section class="text-gray-400 bg-[#6A539D] body-font mt-8">
            <h2 id="about" class="py-2 text-2xl font-semibold text-center text-white md:text-3xl">
                ABOUT URBANITARIAN
            </h2>
        </section>
        <section class="mx-4 overflow-hidden text-gray-600 body-font">
            <div class="container px-5 py-8 mx-auto md:py-16">
                <div class="flex flex-wrap -m-12">
                    <div class="flex flex-col items-start p-12 md:w-1/2">
                        <p class="mb-8 leading-relaxed">Urbanitarian is a multilayered next-generation foundation that
                            offers a range of services and expertise in the domain of urban design and community engagement.
                            We are driven by creating actionable plans by translating findings to operational insights
                            through expert knowledge. Urbanitarian offers an international value-led urban design
                            consultancy practice operating at the forefront of today’s planetary-scale challenges by filling
                            the gap between architecture and planning, through practicing equitable urban innovation and
                            forward thinking across multiple design systems: participatory futures and design foresight,
                            spatial equity and inclusive design, and democratized masterplanning.
                        </p>


                    </div>
                    <div class="flex flex-col items-start p-12 md:w-1/2">
                        <h2 class="text-xl font-bold text-gray-900">BOARD</h2><br>
                        <h2 class="mt-2 font-bold text-gray-900"> Urban Design Principal & Masterplan Development:</h2>
                        <h2 class="text-gray-900">Honorata Grzesikowskaa</h2>
                        <h2 class="mt-2 font-bold text-gray-900"> Financial Principal & Foresight Design:</h2>
                        <h2 class="text-gray-900">Tatiana Efremenko</h2>
                        <h2 class="mt-2 font-bold text-gray-900"> Creative Technical Principal & Spatial Design:</h2>
                        <h2 class="text-gray-900">Firas Safieddine</h2>
                        <h2 class="mt-2 font-bold text-gray-900"> Strategic Principal & Ecosystem Orchestra:</h2>
                        <h2 class="text-gray-900">Eveline Wandl-Vogt</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-gray-400 bg-[#6A539D] body-font mt-8">
            <h2 id="contact" class="py-2 text-2xl font-semibold text-center text-white md:text-3xl">
                CONTACT
            </h2>
        </section>
        <section class="mx-4 overflow-hidden text-gray-600 body-font">
            <div class="container px-5 py-8 mx-auto md:py-16">
                <div class="flex flex-wrap -m-12">
                    <div class="flex flex-col items-start p-12 md:w-1/2">
                        <a href="mailto:info@urbanitarian.com"
                            class="text-blue-500 hover:text-blue-700">info@urbanitarian.com</a>
                        <p class="mb-8 leading-relaxed">
                            tel: xxx<br>
                            URBANITARIAN - Future Living as a Service<br>
                            3021 Pressbaum, Fünkhgasse 14<br>
                            Austria<br>
                            Founded on 21.12.2022<br>
                            ZVR-Nr: 1078367647<br>
                        </p>

                         <a href="https://www.instagram.com/urbanitarian/"
                            class="text-blue-500 hover:text-blue-700">Instagram</a>

                             <a href="https://www.linkedin.com/profile/preview?locale=en_US&trk=prof-0-sb-preview-primary-button"
                            class="text-blue-500 hover:text-blue-700">Linkedin</a>
                    </div>
                </div>
            </div>
        </section>

     <section class="text-gray-400 bg-[#6A539D] body-font mt-8">
            <h2 id="ecosystem" class="py-2 text-2xl font-semibold text-center text-white md:text-3xl">
                ECOSYSTEM
            </h2>
        </section>


    </div>
@endsection
