    <div class="flex items-center justify-center">
        <a class="flex text-2xl font-bold text-gray-700 lg:text-3xl hover:text-gray-400 " href="/">
          <img src="{{ asset('img/logo.png') }}" class="w-auto h-16 pt-4 mt-4 md:mt-0">
          <h1 class="py-4 pl-2 mt-1 text-base font-bold text-[#333333] lg:mt-1 2xl:mt-0 2xl:text-3xl hover:text-gray-400 tracking-widest "></h1>
        </a>
    </div>
<nav class="flex items-center justify-center my-4">
    <div class="relative inset-x-0 top-0 z-50 flex items-center w-auto p-0 px-6 mt-0 transition-all duration-300 ease-in-out translate-x-0 bg-transparent shadow-none opacity-100 bg-gray-50">
      <div class="flex flex-col justify-center pb-4 mx-auto mt-0 align-baseline md:flex-row md:space-y-0 mynav md:pb-0">
        <a class="mx-2 text-base font-semibold text-gray-800 duration-300 xl:mx-4 hover:text-black hover:scale-110" href="#activities" 
          @click="isOpen = false">&nbsp;Activities</a>
          <a class="mx-2 text-base font-semibold text-gray-800 duration-300 xl:mx-4 hover:text-black hover:scale-110" href="#services" 
          @click="isOpen = false">&nbsp;Services</a>
          <a class="mx-2 text-base font-semibold text-gray-800 duration-300 xl:mx-4 hover:text-black hover:scale-110" href="#expertise" 
          @click="isOpen = false">&nbsp;Expertise</a>
          <a class="mx-2 text-base font-semibold text-gray-800 duration-300 xl:mx-4 hover:text-black hover:scale-110" href="#resources" 
          @click="isOpen = false">&nbsp;Resources</a>
        <a class="mx-2 text-base font-semibold text-gray-800 duration-300 xl:mx-4 hover:text-black hover:scale-110" href="#about" 
          @click="isOpen = false">&nbsp;About Urbanitarian</a>
        <a class="mx-2 text-base font-semibold text-gray-800 duration-300 xl:mx-4 hover:text-black hover:scale-110" href="#ecosystem"
          @click="isOpen = false">&nbsp;Ecosystem</a>
      </div>
    </div>
  </nav>

<script>

</script>