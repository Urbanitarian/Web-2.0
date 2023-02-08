<nav x-data="{ isOpen: false }" class="py-6 pl-2 pr-4 mx-12 lg:flex lg:justify-between lg:items-center">
    <div class="flex items-center justify-between">
      <div>
        <a class="flex text-2xl font-bold text-gray-700 lg:text-3xl hover:text-gray-400 " href="/">
          <img src="{{ asset('img/logo.png') }}" class="w-auto h-16">
          <h1 class="py-4 pl-2 mt-1 text-xl font-bold text-[#333333] lg:mt-0 xl:text-3xl hover:text-gray-400 tracking-widest ">URBANITARIAN</h1>
        </a>
      </div>

      <!-- Mobile menu button -->
      <div class="flex lg:hidden">
        <button x-cloak @click="isOpen = !isOpen" type="button"
          class="text-gray-500 hover:text-gray-400 focus:outline-none focus:text-gray-400 " aria-label="toggle menu">
          <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
          </svg>

          <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
    <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
      class="absolute inset-x-0 z-50 w-screen px-6 py-4 mt-12 transition-all duration-300 ease-in-out shadow-md bg-gray-50 lg:bg-transparent lg:shadow-none lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
      <div class="flex flex-col pb-4 space-y-4 align-baseline lg:mt-0 lg:flex-row lg:space-y-0 md:pb-0">
        <a class="text-sm font-semibold text-gray-400 lg:mx-2 xl:mx-4 hover:text-black" href="/"
          @click="isOpen = false">&nbsp;HOME</a>
        <a class="text-sm font-semibold text-gray-400 lg:mx-2 xl:mx-4 hover:text-black" href="/masterplans"
          @click="isOpen = false">&nbsp;MASTERPLANS</a>
        <a class="text-sm font-semibold text-gray-400 lg:mx-2 xl:mx-4 hover:text-black" href="/streetscapes"
          @click="isOpen = false">&nbsp;STREETSCAPES</a>
           <a class="text-sm font-semibold text-gray-400 lg:mx-2 xl:mx-4 hover:text-black" href="/urbanscapes"
          @click="isOpen = false">&nbsp;URBANSCAPES</a>
           <a class="text-sm font-semibold text-gray-400 lg:mx-2 xl:mx-4 hover:text-black" href="/mindscapes"
          @click="isOpen = false">&nbsp;MINDSCAPES</a>
        <a class="block text-sm font-semibold text-gray-400 lg:mx-2 lg:hidden xl:block xl:ml-4 hover:text-black" href="/about"
          @click="isOpen = false">&nbsp;ABOUT</a>

      </div>
      <div class="mt-8 lg:mt-0">
      <a href="submit_project"
        class="relative flex w-[180px] h-12 px-5 py-4 my-2 text-center mt-2 font-bold text-white bg-black shadow-lg prevent lg:ml-4 group rounded-xl hover:bg-gray-800">
        <span class="text-xs">SUBMIT YOUR PROJECT</span>
      </a>
     </div>
    </div>
  </nav>