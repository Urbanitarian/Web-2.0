<!DOCTYPE html>
<html lang="fr">

<head>
    @include('parts.head')
</head>

<body>
    <main>
        @yield('main')
    </main>
    @php
        $instagram_link = Setting::get('instagram_link');
        $facebook_link = Setting::get('facebook_link');
        $flickr_link = Setting::get('flickr_link');
        $linkedin_link = Setting::get('linkedin_link');
        $pinterest_link = Setting::get('pinterest_link');
    @endphp

    <div class="bg-gray-100" aria-label="Site Footer">

        <div class="px-16 pt-12 pb-8">
            <span class="text-2xl font-bold text-gray-700">
                Urbanitarian
            </span>
            <div class="grid grid-cols-12 pt-8 ">
                <div class="col-span-9 text-gray-500">
                    <span class="text-lg font-normal">
                        Unlocking the Power of Urban Design
                    </span>
                    <p class="w-[45%] pt-3 text-sm font-normal">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus lobortis sem, eu
                        imperdiet dui venenatis ac. Fusce consequat interdum justo, pharetra convallis enim rutrum
                        ut.
                    </p>
                </div>
                <div class="float-right col-span-3">
                    <div class="flex space-x-28">
                        <ul class="flex flex-col gap-4 text-base font-normal">
                            <li>How it works</li>
                            <li>About</li>
                            <li>Subscribe</li>
                            <li>
                                Contact
                            </li>
                            <li>Feedback</li>
                            <li>Cookies Policy</li>
                            <li>Association</li>
                        </ul>
                        <ul class="flex flex-col gap-4 text-base font-normal">
                            <li>
                                <a href=""> Twitter</a>

                            </li>
                            <li>
                                <a href="{{ $instagram_link }}"> Instagram</a>
                            </li>
                            <li>
                                <a href="{{ $linkedin_link }}"> Linkedin</a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="px-8">
            <div class="flex items-center justify-start gap-2 py-4 border-t">
                <div class="">
                    <img src="{{ asset('img/logo.png') }}" class="w-auto h-8 md:h-16">
                </div>
                <div class="text-xs font-normal text-gray-500">
                    © 2023 Urbanitarian. All rights reserved. All images are © each office/photographer mentioned.
                </div>
            </div>
        </div>

    </div>

    @vite('resources/js/app.js')
</body>



</html>
