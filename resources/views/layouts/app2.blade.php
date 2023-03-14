<!DOCTYPE html>
<html lang="fr">

<head>
    @include('parts.head')
</head>

<body>
    @include('parts.navbar2')
    <main>
        @yield('main')
    </main>
    <footer>
    <div aria-label="Site Footer" class="border-t">
    <div class="max-w-5xl px-4 pt-16 pb-8 mx-auto sm:px-6 lg:px-8">
      <div class="flex justify-center text-teal-600">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-12 h-12" />
      </div>

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

    </div>
    <div class="flex justify-center pb-4 text-gray-500">
       <a href="admin"> <p class="flex flex-col items-center text-xs">
       <span> &copy; All Rights Reserved. Urbanitarian</span>
       <span>  All images are &copy; each office/photographer mentioned.</span>
      </p></a>
  </div>
    </footer>

    @vite('resources/js/app.js')
</body>



</html>
