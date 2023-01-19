 @extends('layouts.app')

 @section('main')
     <div data-barba="container">
         @php use \App\Http\Controllers\GlobalController; @endphp
         @if (session('Message_envoye'))
             <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000, PopupUser())" class="pt-1 pr-4">
                 <div id="popmenu" class="px-4 py-2 text-xs btnmenu text-emerald-500">&zwnj; Email envoyé</div>
             </div>
         @endif
         @if (session('already_send'))
             <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000, PopupUser())" class="pt-1 pr-4">
                 <div id="popmenu" class="px-4 py-2 text-xs btnmenu text-emerald-500">&zwnj; Vous avez déja envoyé un
                     message aujourd'hui</div>
             </div>
         @endif
         <div class="p-5 mx-auto text-gray-100 sm:p-10 md:px-16">
             <div class="flex flex-col max-w-5xl mx-auto overflow-hidden rounded mb-8 pb-8">
                 <section class="text-gray-600 body-font relative">
                     <div class="container px-5 py-8 mx-auto">
                         <div class="flex flex-col text-center w-full mb-4">
                             <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-100">Contactez Nous</h1>
                         </div>
                         <div class="lg:w-1/2 md:w-2/3 mx-auto">
                             <form class="flex flex-wrap -m-2" method="post" action="contactmail" >
                                   @csrf
                                 <div class="p-2 w-1/2">
                                     <div class="relative">
                                         <label for="name" class="leading-7 text-sm text-gray-200">Nom</label>
                                         <input type="text" id="name" name="name" required
                                             class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                     </div>
                                 </div>
                                 <div class="p-2 w-1/2">
                                     <div class="relative">
                                         <label for="email" class="leading-7 text-sm text-gray-200">Email</label>
                                         <input type="email" id="email" name="email" required
                                             class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                     </div>
                                 </div>
                                 <div class="p-2 w-full">
                                     <div class="relative">
                                         <label for="message" class="leading-7 text-sm text-gray-200">Message</label>
                                         <textarea id="message" name="message" required
                                             class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                     </div>
                                 </div>
                                 <div class="flex p-2 w-full justify-center">
                                     <button type="submit"
                                         class="relative flex justify-center w-48 px-5 py-1 my-2 font-medium text-white shadow-lg prevent group mt-2">
                                         <span
                                             class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-blue-500 group-hover:bg-blue-700 group-hover:skew-x-12"></span>
                                         <span
                                             class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-blue-700 group-hover:bg-blue-500 group-active:bg-blue-600 group-hover:-skew-x-12"></span>
                                         <span
                                             class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-blue-600 -rotate-12"></span>
                                         <span
                                             class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-blue-400 -rotate-12"></span>
                                         <span class="relative">Envoyer le message</span>
                                     </button>
                                 </div>
                                 <div class="p-2 w-full mt-8 pt-8 border-t border-gray-200 text-center">

                                 </div>
                             </form>
                         </div>
                     </div>
                 </section>

             </div>
         </div>
     </div>
     <script>
    function PopupUser() {
        console.log('okpop');
        var updateElement = document.getElementById("popmenu");
        updateElement.classList.toggle("active");

    }
</script>
 @endsection
