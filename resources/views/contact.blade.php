 @extends('layouts.app')
 @livewireStyles
 @section('main')
     {!! RecaptchaV3::initJs() !!}
     <div data-barba="container">
         @php use \App\Http\Controllers\GlobalController; @endphp
         <div class="p-5 mx-auto sm:p-10 md:px-16">
             <div class="flex flex-col max-w-5xl pb-8 mx-auto mb-8 overflow-hidden rounded">
                 <section class="relative body-font">
                     <div class="container px-5 py-8 mx-auto">

                         <div class="flex flex-col w-full mb-4 text-center">
                             <h1 class="mb-2 text-3xl font-medium text-black select-none md:text-5xl title-font">Book an appointment</h1>
                         </div>
                         <h2 class="pt-2 text-base text-center text-gray-600 select-none">Or contact us</h2>
                        <div class="flex justify-center pb-8">
                        <a href="#sub">
                        <i class="px-4 py-2 mt-2 text-2xl text-gray-900 border border-gray-400 rounded-full fas fa-arrow-down hover:bg-gray-200 active:bg-gray-300"></i>
                       </a>
                       </div>
                   
                         <div class="">
                             <livewire:calendar />
                             @livewireScripts
                             @stack('scripts')
                         </div>
                         <div id="sub"></div>

                         <div class="flex flex-col w-full mt-24 mb-4 text-center">
                             <h1 class="mb-2 text-3xl font-medium text-black md:text-5xl title-font">Contact Us</h1>
                         </div>
                         <div class="mx-auto lg:w-1/2 md:w-2/3">
                             <form class="flex flex-wrap -m-2" method="post" action="contactmail">
                                 @csrf
                                 <div class="w-1/2 p-2">
                                     <div class="relative">
                                         <label for="name" class="text-sm leading-7 text-gray-800">Name</label>
                                         <input type="text" id="name" name="name" required
                                             class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                     </div>
                                 </div>
                                 <div class="w-1/2 p-2">
                                     <div class="relative">
                                         <label for="email" class="text-sm leading-7 text-gray-800">Email</label>
                                         <input type="email" id="email" name="email" required
                                             class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                     </div>
                                 </div>
                                 <div class="w-full p-2">
                                     <div class="relative">
                                         <label for="message" class="text-sm leading-7 text-gray-800">Message</label>
                                         <textarea id="message" name="message" required
                                             class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200"></textarea>
                                     </div>
                                 </div>
                                 <div class="flex justify-center w-full p-2">
                                     <button type="submit"
                                         class="relative flex max-w-[200px] px-5 py-4 my-2 text-center mt-2 font-bold text-white bg-black shadow-lg prevent lg:ml-8 group rounded-xl hover:bg-gray-800">Send
                                         message</button>
                                 </div>
                                 <div class="w-full p-2 pt-8 mt-8 text-center border-t border-gray-800">
                                     {!! RecaptchaV3::field('register') !!}
                                     @if ($errors->has('g-recaptcha-response'))
                                         <span class="help-block">
                                             <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                         </span>
                                     @endif
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
