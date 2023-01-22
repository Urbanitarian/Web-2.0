@if ($paginator->hasPages())
    <nav role="Page navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-center ">
        <div class="justify-center pt-6 sm:flex-1 sm:flex sm:items-center">
            
              

            <div>
                <span class="relative z-0 inline-flex justify-center space-x-1 text-white rounded-md shadow-sm">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <button class="flex items-center justify-center w-10 h-10 duration-150 bg-black rounded-md shadow-md hover:bg-gray-600 focus:shadow-outline">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                        </button>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="flex items-center justify-center w-10 h-10 duration-150 bg-black rounded-md shadow-md prevent hover:bg-gray-600 focus:shadow-outline" aria-label="{{ __('pagination.previous') }}">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-700 bg-black border border-gray-300 cursor-default 0 hover:bg-gray-600">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span class="" aria-current="page">
                                        <button class=" after:content-[] text-blue-300 after:content[] border border-blue-300 bg-black  hover:bg-gray-600 flex items-center justify-center w-10 h-10  duration-150 rounded-md shadow-md focus:shadow-outline">{{ $page }}</button>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="flex items-center justify-center w-10 h-10 duration-150 bg-black rounded-md shadow-md prevent hover:bg-gray-600 focus:shadow-outline " aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="flex items-center justify-center w-10 h-10 duration-150 bg-black rounded-md shadow-md prevent hover:bg-gray-600 focus:shadow-outline" aria-label="{{ __('pagination.previous') }}">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                        </a>
                    @else
                        <button class="flex items-center justify-center w-10 h-10 duration-150 bg-black rounded-md shadow-md hover:bg-gray-600 focus:shadow-outline">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                        </button>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif