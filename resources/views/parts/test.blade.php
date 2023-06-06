<div class="relative flex flex-col " x-data="{ visibleBtn: false }">
    <div @mouseleave="visibleBtn=false">
        <div x-cloak x-show="visibleBtn">
            <button onclick="saveCollection(${item.id}, 'master')"
                class="absolute z-50 flex items-center justify-center gap-2 px-3 py-2 mt-2 text-white bg-black rounded shadow hover:bg-black right-2 w-38">
                <span id="card${item.id}"></span><span class="text-sm whitespace-nowrap">Save to
                    Collection</span></button>
        </div>

        <div @mouseenter="visibleBtn=true"
            class="relative h-[438px] overflow-hidden transition-all border rounded-md shadow hover:shadow-xl hover:border-black saturate-120 animate__animated animate__backInLeft">
            <a href="masterplans_post?id=${item.id}" class="flex flex-col h-full duration-300 hover:opacity-75">
                <img alt="Art" src="storage/uploads/thumbnails/masterplans/${item.image}"alt=""
                    onerror="this.src='storage/uploads/masterplans/${item.image}'"
                    class="object-cover  h-full saturate-120 max-h-[368px]" />
                <div
                    class="bg-white absolute bottom-[88px] rounded border-gray-300  text-sm font-medium px-1  border ml-3 text-gray-700 z-50 text-center">
                    ${item.size}</div>
                <div class="">
                    <h3 class="mx-2 mt-1 text-sm font-bold truncate">
                        ${item.title}

                    </h3>
                    <div class="max-w-sm mx-2 mt-1 text-sm text-gray-500 truncate">
                        ${item.author} &nbsp;

                    </div>

                </div>

                <div class="flex items-center justify-between px-2 pb-2 text-sm text-gray-500">
                    <span> ${item.city}, ${item.country}</span>
                    <div class="flex items-center justify-center gap-2">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                        <span class="text-xs"> ${item.views}</sapn>

                    </div>
                </div>
            </a>
        </div>
    </div>
</div>



<div class="relative h-[438px] overflow-hidden transition border rounded shadow-sm saturate-120 animate__animated animate__backInRight hover:opacity-75 hover:shadow-xl hover:border-black"
    x-data="{ visibleBtn: false }">
    <div @mouseleave="visibleBtn=false">
        <div x-cloak x-show="visibleBtn">
            <button onclick="saveCollection(${item.id}, 'urban')"
                class="absolute z-50 flex items-center justify-center gap-2 px-3 py-2 mt-2 text-white bg-black rounded shadow hover:bg-black right-2 w-38">
                <span id="card${item.id}"></span><span class="text-sm whitespace-nowrap">Save to
                    Collection</span></button>
        </div>

        <a @mouseenter="visibleBtn=true" href="urbanscapes_post?id=${item.id}"
            class="flex flex-col h-full duration-300">
            <img alt="Art" src="storage/uploads/thumbnails/urbanscapes/${item.imagea}"alt=""
                onerror="this.src='storage/uploads/urbanscapes/${item.imagea}'" class="object-cover saturate-120"
                style="height:332px" />
            <div class="flex  bottom-[110px] absolute ml-2 whitespace-nowrap">
                ${item.tags.map(tag => `<div
                    class="z-50 px-1 text-sm font-medium text-center text-gray-700 bg-white border border-gray-300 rounded">
                    ${tag}</div>`).join(' &nbsp;')}
            </div>
            <div class="absolute bottom-1">
                <p class="px-2 mt-2 text-sm font-bold h-[70px]">
                    ${item.title}
                </p>
                <div class="fixed flex items-center justify-between px-2 text-sm text-gray-500 bottom-2">
                    <span> ${item.city}, ${item.country}</span>
                    <div class="flex items-center justify-center gap-2 ">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                        ${item.views}
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>


<div
    class="relative col-span-2 overflow-hidden transition border rounded-md shadow-sm element1 hover:border-black saturate-120 animate__animated animate__backInUp">

    <a href="streetscapes_post?id=${item.id}" class="flex flex-col h-full duration-300 hover:opacity-50">
        <div class="juxtapose" style="height: 360px; width: 700px;">
            <img alt="Art" src="storage/uploads/thumbnails/streetscapes/${item.imagea}"alt=""
                onerror="this.src='storage/uploads/streetscapes/${item.imagea}'"
                class="object-cover h-full  saturate-120 max-h-[480px]" />

        </div>
        <div
            class="bg-white absolute bottom-[68px] rounded border-gray-300  text-sm font-medium px-1  border ml-3 text-gray-700 z-50 text-center">
            ${item.size}</div>
        <div class="flex items-center justify-between px-3">
            <h3 class="mt-4 text-sm font-semibold text-left text-gray-600">
                ${item.title}</h3>
        </div>
        <div class="flex items-center justify-between px-3 pt-0.5 pb-1">

            <p class="text-sm text-left text-gray-500 truncate font-regular">
                ${item.address}, ${item.city}, ${item.country}
            </p>
            <div class="flex items-end justify-end gap-2 text-xs text-gray-500">
                <i class="fa fa-eye" aria-hidden="true"></i>
                ${item.views}
            </div>

        </div>
    </a>
</div>



<div class="absolute z-50" x-show="saveDropDown=true">
    <div class="p-4 bg-white rounded shadow">
        <div
            class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
            My Saves </div>
        <div
            class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
            Profile </div>
    </div>
</div>


<div class="relative flex flex-col " x-data="{ visibleBtn: false }">
    <div @mouseleave="visibleBtn=false">
        <div x-data="{ saveDropDown: false }">
            <div x-cloak x-show="visibleBtn">
                <button onclick="saveCollection(${item.id}, 'master')" @click="saveDropDown=!saveDropDown"
                    class="absolute z-50 flex items-center justify-center gap-2 px-3 py-2 mt-2 text-white bg-black rounded shadow hover:bg-black right-2 w-38">
                    <span id="card${item.id}"></span><span class="text-sm whitespace-nowrap">Save to
                        Collection</span></button>
            </div>


            <div class="absolute z-50" x-show="saveDropDown=true">
                <div class="px-2 py-2 bg-white rounded shadow">
                    <div
                        class="flex items-center gap-x-3.5 py-2 px-12 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                        My Saves </div>

                    <div
                        class="flex items-center gap-x-3.5 py-2 px-12 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                        Profile </div>
                </div>
            </div>
        </div>




        <div @mouseenter="visibleBtn=true"
            class="relative h-[438px] overflow-hidden transition-all border rounded-md shadow hover:shadow-xl hover:border-black saturate-120 animate__animated animate__backInLeft">
            <a href="masterplans_post?id=${item.id}" class="flex flex-col h-full duration-300 hover:opacity-75">
                <img alt="Art" src="storage/uploads/thumbnails/masterplans/${item.image}"alt=""
                    onerror="this.src='storage/uploads/masterplans/${item.image}'"
                    class="object-cover  h-full saturate-120 max-h-[368px]" />
                <div
                    class="bg-white absolute bottom-[88px] rounded border-gray-300  text-sm font-medium px-1  border ml-3 text-gray-700 z-50 text-center">
                    ${item.size}</div>
                <div class="">
                    <h3 class="mx-2 mt-1 text-sm font-bold truncate">
                        ${item.title}

                    </h3>
                    <div class="max-w-sm mx-2 mt-1 text-sm text-gray-500 truncate">
                        ${item.author} &nbsp;

                    </div>

                </div>

                <div class="flex items-center justify-between px-2 pb-2 text-sm text-gray-500">
                    <span> ${item.city}, ${item.country}</span>
                    <div class="flex items-center justify-center gap-2">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                        <span class="text-xs"> ${item.views}</sapn>

                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
