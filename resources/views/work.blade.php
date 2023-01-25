        @php use \App\Http\Controllers\GlobalController; @endphp
        @php  $pages = GlobalController::pages();@endphp
@extends('layouts.app')

@section('main')
    <div data-barba="container">
        <div class="min-h-screen p-5 mx-auto sm:p-10 md:px-16">
            <div class="flex flex-col max-w-5xl mx-auto overflow-hidden rounded">

                <div class="reverted">
                    @php
                        echo $pages[3]->content;
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
