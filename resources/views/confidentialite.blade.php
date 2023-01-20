        @php use \App\Http\Controllers\GlobalController; @endphp
        @php  $pages = GlobalController::pages();@endphp
@extends('layouts.app')

@section('main')
    <div data-barba="mycontainer">
        <div class="z-0 one"></div>
        <div class="min-h-screen p-5 mx-auto text-gray-100 sm:p-10 md:px-16">
            <div class="flex flex-col max-w-5xl mx-auto overflow-hidden rounded">

                <div class="text-white reverted">
                    @php
                        echo $pages[1]->content;
                    @endphp
                </div>

            </div>
        </div>
    </div>
       <style>
    .reverted{

       all: revert;
}
    </style>
@endsection
