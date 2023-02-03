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

      <p class="max-w-md mx-auto mt-6 leading-relaxed text-center text-gray-500">
        We are number one destination to get knowledge on urban design..
      </p>

      <nav aria-label="Footer Nav" class="mt-12">
        <ul class="flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12">
          <li>
            <a class="text-gray-700 transition hover:text-gray-900" href="about">
              About
            </a>
          </li>

          <li>
            <a class="text-gray-700 transition hover:text-gray-900" href="contact">
              Contact
            </a>
          </li>

          <li>
            <a class="text-gray-700 transition hover:text-gray-900" href="work">
              Work with us
            </a>
          </li>

          <li>
            <a class="text-gray-700 transition hover:text-gray-900" href="legal">
              Terms of use
            </a>
          </li>

          <li>
            <a class="text-gray-700 transition hover:text-gray-900" href="confidentialite">
              Privacy policy
            </a>
          </li>

          <li>
            <a class="text-gray-700 transition hover:text-gray-900" href="cookies">
              Cookie policy
            </a>
          </li>

            <li>
            <a class="text-gray-700 transition hover:text-gray-900" href="association">
              Association
            </a>
          </li>
        </ul>
      </nav>

      <ul class="flex justify-center gap-6 mt-12 md:gap-8">
        <li>
          <a href="{{ $flickr_link }}" rel="noreferrer" target="_blank"
            class="text-gray-700 transition hover:text-gray-900">
            <span class="sr-only">Flickr</span>
           <i class="fa-brands fa-flickr"></i>
          </a>
        </li>

        <li>
          <a href="{{ $instagram_link }}" rel="noreferrer" target="_blank"
            class="text-gray-700 transition hover:text-gray-900">
            <span class="sr-only">Instagram</span>
        <i class="fa-brands fa-instagram"></i>
          </a>
        </li>

        <li>
          <a href="{{ $pinterest_link }}" rel="noreferrer" target="_blank"
            class="text-gray-700 transition hover:text-gray-900">
            <span class="sr-only">Pinterest</span>
          <i class="fa-brands fa-square-pinterest"></i>
          </a>
        </li>

        <li>
          <a href="{{ $facebook_link }}" rel="noreferrer" target="_blank"
            class="text-gray-700 transition hover:text-gray-900">
            <span class="sr-only">Facebook</span>
        <i class="fa-brands fa-square-facebook"></i>
          </a>
        </li>

        <li>
          <a href="{{ $linkedin_link }}" rel="noreferrer" target="_blank"
            class="text-gray-700 transition hover:text-gray-900">
            <span class="sr-only">Linkedin</span>
       <i class="fa-brands fa-linkedin"></i>
          </a>
        </li>
      </ul>
    </div>
    <div class="flex justify-center pb-4 text-gray-500">
      <p class="flex flex-col items-center text-xs">
       <span> &copy; All Rights Reserved. Urbanitarian</span>
       <span>  All images are &copy; each office/photographer mentioned.</span>
      </p>
  </div>