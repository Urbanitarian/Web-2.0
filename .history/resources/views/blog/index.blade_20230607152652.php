@extends('layouts.app')

@section('main')
    <div data-barba="container">
        @php use \App\Http\Controllers\GlobalController; @endphp
        @php  $pages = GlobalController::pages();@endphp
        <section class="pt-8">
            <div class="p-8 md:p-12 lg:px-12 lg:py-12">
                <div class="max-w-lg mx-auto text-center lg:max-w-full">
                    <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                        About Us
                    </h2>
                    

                </div>

            </div>
        </section>
    </div>
@endsection
