        @php
        $instagram_link = Setting::get('instagram_link');
        $facebook_link = Setting::get('facebook_link');
        $flickr_link = Setting::get('flickr_link');
        $linkedin_link = Setting::get('linkedin_link');
        $pinterest_link = Setting::get('pinterest_link');
        @endphp
<div aria-label="Site Footer" class="border-t">
    <div class="max-w-5xl px-4 pt-16 pb-8 mx-auto sm:px-6 lg:px-8">
      <div class="flex justify-center text-teal-600">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-12 h-12" />
      </div>
    <h1 class="py-4 text-base font-bold text-[#333333] tracking-widest text-center select-none">URBANITARIAN</h1>
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
          </li>

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

          <li class="duration-300 hover:scale-110">
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
       <a href="admin"> <p class="flex flex-col items-center text-xs">
       <span> &copy; All Rights Reserved. Urbanitarian</span>
       <span>  All images are &copy; each office/photographer mentioned.</span>
      </p></a>
  </div>