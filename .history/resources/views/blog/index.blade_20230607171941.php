@extends('layouts.app')

@section('main')
    <div data-barba="container">
        <section class="pt-8">
            <div class="p-8 md:p-12 lg:px-12 lg:py-12">
                <div class="max-w-lg mx-auto text-center lg:max-w-full">
                    <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                        Blog
                    </h2>
                    

                    <div class="flex justify-center mt-6">
                        <div class='sk-ww-medium-publication-feed' data-embed-id='151478'></div><script src='https://widgets.sociablekit.com/medium-publication-feed/widget.js' async defer></script>
                    </div>

                </div>

            </div>
        </section>
    </div>
@endsection
