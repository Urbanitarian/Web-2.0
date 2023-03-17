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
          <iframe width="100%" height="600px" frameborder="0" allowfullscreen src="//umap.openstreetmap.fr/fr/map/carte-sans-nom_885439?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
        </div>

    
@endsection
