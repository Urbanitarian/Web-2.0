        @php
            $instagram_link = Setting::get('instagram_link');
            $facebook_link = Setting::get('facebook_link');
            $flickr_link = Setting::get('flickr_link');
            $linkedin_link = Setting::get('linkedin_link');
            $pinterest_link = Setting::get('pinterest_link');
        @endphp
        {{-- <div aria-label="Site Footer" class="bg-gray-100 border-t">
            <div class="max-w-5xl px-4 pt-16 pb-8 mx-auto sm:px-6 lg:px-8"> --}}
        {{-- <h1 class="py-4 text-base font-bold text-[#333333] tracking-widest text-center select-none">URBANITARIAN
        </h1>
        <p class="max-w-md mx-auto leading-relaxed text-center text-gray-500 select-none ">
            Unlocking the Power of Urban Design
        </p>

        <nav aria-label="Footer Nav" class="mt-12">
            <ul class="flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12">
                <li class="duration-300 hover:scale-110">
                    <a class="text-gray-700 transition hover:text-black" href="about">
                        About
                    </a>
                </li>

                <li class="duration-300 hover:scale-110">
                    <a class="text-gray-700 transition hover:text-black" href="subscribe">
                        Subscribe
                    </a>
                </li>

                <li class="duration-300 hover:scale-110">
                    <a class="text-gray-700 transition hover:text-black" href="contact">
                        Contact
                    </a>
                </li>

                <li class="duration-300 hover:scale-110">
                    <a class="text-gray-700 transition hover:text-black" href="people">
                        Team
                    </a>
                </li> --}}

        {{-- <li class="duration-300 hover:scale-110">
            <a class="text-gray-700 transition hover:text-black" href="legal">
              Terms of use
            </a>
          </li>

          <li class="duration-300 hover:scale-110">
            <a class="text-gray-700 transition hover:text-black" href="confidentialite">
              Privacy policy
            </a>
          </li> --}}

        {{-- <li class="duration-300 hover:scale-110">
                            <a class="text-gray-700 transition hover:text-black" href="cookies">
                                Cookie policy
                            </a>
                        </li>

                        <li class="duration-300 hover:scale-110">
                            <a class="text-gray-700 transition hover:text-black" href="association">
                                Association
                            </a>
                        </li>
                    </ul>
                </nav>

                <ul class="flex justify-center gap-6 mt-12 md:gap-8">
                    <li class="duration-300 hover:scale-110">
                        <a href="{{ $flickr_link }}" rel="noreferrer" target="_blank"
                            class="text-gray-700 transition hover:text-black">
                            <span class="sr-only">Flickr</span>
                            <i class="fa-brands fa-flickr"></i>
                        </a>
                    </li>

                    <li class="duration-300 hover:scale-110">
                        <a href="{{ $instagram_link }}" rel="noreferrer" target="_blank"
                            class="text-gray-700 transition hover:text-black">
                            <span class="sr-only">Instagram</span>
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>

                    <li class="duration-300 hover:scale-110">
                        <a href="{{ $pinterest_link }}" rel="noreferrer" target="_blank"
                            class="text-gray-700 transition hover:text-black">
                            <span class="sr-only">Pinterest</span>
                            <i class="fa-brands fa-square-pinterest"></i>
                        </a>
                    </li>

                    <li class="duration-300 hover:scale-110">
                        <a href="{{ $facebook_link }}" rel="noreferrer" target="_blank"
                            class="text-gray-700 transition hover:text-black">
                            <span class="sr-only">Facebook</span>
                            <i class="fa-brands fa-square-facebook"></i>
                        </a>
                    </li>

                    <li class="duration-300 hover:scale-110">
                        <a href="{{ $linkedin_link }}" rel="noreferrer" target="_blank"
                            class="text-gray-700 transition hover:text-black">
                            <span class="sr-only">Linkedin</span>
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex justify-center pb-4 text-gray-500">
                <a href="admin">
                    <p class="flex flex-col items-center text-xs">
                        <span> &copy; All Rights Reserved. Urbanitarian</span>
                        <span> All images are &copy; each office/photographer mentioned.</span>
                    </p>
                </a>
            </div> --}}
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
                                <li>Twitter</li>
                                <li>Instagram</li>
                                <li>Linkedin</li>
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
