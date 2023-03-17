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

        <section class="overflow-hidden text-gray-600 body-font">
            <div class="container py-24 mx-auto lg:px-16">
                <div class="flex flex-wrap -m-4">
                    <div class="w-full p-4 xl:w-1/4 md:w-1/2">
                        <div class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-gray-300 rounded-lg">
                            <h1 class="pb-4 mb-4 text-2xl font-bold text-center text-gray-900 border-b border-gray-200">
                                JUSTHood</h1>
                            <p class="flex items-center mb-2 text-gray-600">
                                Vexillologist pitchfork
                            </p>
                            <p class="flex items-center mb-2 text-gray-600">
                                Tumeric plaid portland
                            </p>
                            <p class="flex items-center mb-6 text-gray-600">
                                Mixtape chillwave tumeric
                            </p>

                        </div>
                    </div>
                    <div class="w-full p-4 xl:w-1/4 md:w-1/2">
                        <div class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-gray-300 rounded-lg">
                            <h1 class="pb-4 mb-4 text-2xl font-bold text-center text-gray-900 border-b border-gray-200">
                                Urbanitarian Webspace</h1>
                            <p class="flex items-center mb-2 text-gray-600">
                                Vexillologist pitchfork
                            </p>
                            <p class="flex items-center mb-2 text-gray-600">
                                Tumeric plaid portland
                            </p>
                            <p class="flex items-center mb-6 text-gray-600">
                                Mixtape chillwave tumeric
                            </p>

                        </div>
                    </div>
                    <div class="w-full p-4 xl:w-1/4 md:w-1/2">
                        <div class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-gray-300 rounded-lg">
                            <h1 class="pb-4 mb-4 text-2xl font-bold text-center text-gray-900 border-b border-gray-200">
                                U-SCAT</h1>
                            <p class="flex items-center mb-2 text-gray-600">
                                Vexillologist pitchfork
                            </p>
                            <p class="flex items-center mb-2 text-gray-600">
                                Tumeric plaid portland
                            </p>
                            <p class="flex items-center mb-6 text-gray-600">
                                Mixtape chillwave tumeric
                            </p>

                        </div>
                    </div>
                    <div class="w-full p-4 xl:w-1/4 md:w-1/2">
                        <div class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-gray-300 rounded-lg">
                            <h1 class="pb-4 mb-4 text-2xl font-bold text-center text-gray-900 border-b border-gray-200">Free
                            </h1>
                            <p class="flex items-center mb-2 text-gray-600">
                                Vexillologist pitchfork
                            </p>
                            <p class="flex items-center mb-2 text-gray-600">
                                Tumeric plaid portland
                            </p>
                            <p class="flex items-center mb-6 text-gray-600">
                                Mixtape chillwave tumeric
                            </p>

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
            <h2 id="activities" class="py-2 text-2xl font-semibold text-center text-white md:text-3xl">
                SERVICES
            </h2>
        </section>
        <section>
            <div class="px-4 py-8 mx-auto max-w-screen-2xl sm:py-12 sm:px-6 lg:py-16 lg:px-8">
                <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-8">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="block p-4 border border-gray-400 rounded shadow-sm" href="/accountant">

                            <h2 class="mt-2 text-2xl font-bold text-center">Speaking</h2>

                            <p class="block pb-4 mx-1 mt-4 text-xs md:mx-4">
                                We give public talks and keynote presentations for academic and non-academic institutions
                                and organizations on the variety of topics based on our <a href="#expertise"
                                    class="text-blue-500 hover:text-blue-700">expertise</a> <br>
                            </p>
                            <ul class="mx-2 text-xs list-disc md:mx-8">
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
                        <div class="block p-4 border border-gray-400 rounded shadow-sm" href="/accountant">

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

                    <div class="grid grid-cols-2 gap-4">
                        <div class="block p-4 border border-gray-400 rounded shadow-sm" href="/accountant">

                            <h2 class="mt-2 text-2xl font-bold text-center">Consultancy</h2>

                           <p class="block pb-4 mx-1 mt-4 text-xs md:mx-4">
                                We provide consultancy and mentorship to a variety of public and private actors in the urban
                                design field. We provide our <a href="#expertise" class="text-blue-500 hover:text-blue-700">expertise</a> for European and international
                                projects.
                            </p>
                        </div>

                        <div class="block p-4 border border-gray-400 rounded shadow-sm" href="/accountant">


                            <h2 class="mt-2 text-2xl font-bold text-center">Rent our Metaverse space</h2>

                            <p class="block mt-4 text-xs">

                            </p>
                        </div>

                        <div class="block p-4 border border-gray-400 rounded shadow-sm" href="/accountant">


                            <h2 class="mt-2 text-2xl font-bold text-center">Artworks</h2>

                            <p class="block mt-4 text-xs">
                                Lorem ipsum dolor sit amet consectetur.
                            </p>
                        </div>

                        <div class="block p-4 border border-gray-400 rounded shadow-sm" href="/accountant">


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



    </div>
@endsection
