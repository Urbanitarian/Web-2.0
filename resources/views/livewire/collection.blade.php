<div>
    <div class="px-10 pt-12 ">
        <h1 class="text-5xl font-bold  text-[#667080]">Collection</h1>
        <div class="pt-6">
            <div class="grid grid-cols-12 gap-6">
                <div class="relative col-span-8">
                    <div class="absolute px-3 py-2">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5945 19C16.1179 19 19.7848 15.4183 19.7848 11C19.7848 6.58172 16.1179 3 11.5945 3C7.0712 3 3.4043 6.58172 3.4043 11C3.4043 15.4183 7.0712 19 11.5945 19Z"
                                stroke="#667080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21.8324 21L17.3789 16.65" stroke="#667080" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <input type="text" name="" id=""
                        class="bg-[#EEF1F4] py-3 w-full rounded-md h-[40px] px-12" wire:model='search'
                        placeholder="Find collections">
                </div>
                <div class="col-span-4">
                    <div>

                        <button onclick="Livewire.emit('openModal', 'modal.add-collection')"
                            class="flex items-center justify-center gap-2 px-4 py-2 font-normal text-center text-white bg-gray-800 rounded shadow-lg lex hover:bg-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <span class="text-base">New Collection</span></button>
                    </div>
                </div>
            </div>

        </div>
        <div class="grid grid-cols-12">
            <table class="pt-6 pb-2 mb-4 table-auto col-span-8">
                <tbody>
                    <tr
                        class="px-6 pt-5 pb-2 text-[#667080] text-lg flex justify-between items-center  whitespace-nowrap">
                        <td class="w-[160px]">Collection Name</td>
                        <td class="w-[160px]">Last modified</td>
                        <td class="w-[160px]">Created</td>
                        <td class="w-[160px]">Sources</td>
                    </tr>
                </tbody>
                <tbody>
                    @forelse ($collections as $collection)
                        <tr class="px-4 shadow  bg-[#EEF1F4] flex justify-between items-center whitespace-nowrap">
                            <td class=" w-[160px]  py-4 text-[#667080] font-bold text-base">
                                <a href="{{ url('collection/detail/' . $collection->id) }}">{{ $collection->name }}</a>
                            </td>
                            <td class=" w-[160px]  py-4 text-[#667080] font-bold text-base">
                                {{ $collection->updated_at->diffForHumans() }}
                            </td>
                            <td class=" w-[160px]  py-4 text-[#667080] font-bold text-base">
                                {{ $collection->created_at->diffForHumans() }}
                            </td>
                            <td class=" w-[160px]  py-4 text-[#667080] font-bold text-base">
                                {{ count($collection->collections) }}
                            </td>
                        </tr>
                    @empty
                    @endforelse

                </tbody>



            </table>

        </div>
        @if ($collections->isNotEmpty())
            {{ $collections->links() }}
        @endif


    </div>

</div>
