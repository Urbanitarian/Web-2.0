 <div class="flex items-center justify-between mx-6 my-4" x-data="{ active: 'ac' }">
     <div class=""></div>
     <div
         class="relative inset-x-0 top-0 z-50 flex items-center w-auto p-0 px-6 mt-0 transition-all duration-300 ease-in-out translate-x-0 bg-transparent shadow-none opacity-100 bg-gray-50">
         <div class="flex flex-col justify-center pb-4 mx-auto mt-0 align-baseline md:flex-row md:space-y-0  md:pb-0">
             <a class="mx-2 text-base font-light text-gray-400 duration-300 xl:mx-4 hover:text-black hover:font-semibold
                 href="#masterplan"
                 @click="active = ac">&nbsp;Masterplan</a>
             <a class="mx-2 text-base font-light text-gray-400 duration-300 xl:mx-4 hover:text-black hover:font-semibold
                 href="#description"
                 @click="active = sr">&nbsp;Description</a>
             <a class="mx-2 text-base font-light text-gray-400 duration-300 xl:mx-4 hover:text-black hover:font-semibold
                 href="#map"
                 @click="active = ex">&nbsp;Map</a>
             <a class="mx-2 text-base font-light text-gray-400 duration-300 xl:mx-4 hover:text-black hover:font-semibold
                 href="#streetscaps"
                 @click="active = rs">&nbsp;Streetscaps</a>
             <a class="mx-2 text-base font-light text-gray-400 duration-300 xl:mx-4 hover:text-black hover:font-semibold
                 href="#urbanscaps"
                 @click="active = au">&nbsp;Urbanscaps</a>
             <a class="mx-2 text-base font-light text-gray-400 duration-300 xl:mx-4 hover:text-black hover:font-semibold
                 href="#resources"
                 @click="active = ec">&nbsp;Resources</a>
         </div>
     </div>
     <div class="" @click="sideBar=!sideBar">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
             <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
             <line x1="9" y1="3" x2="9" y2="21" />
         </svg>
     </div>
 </div>
