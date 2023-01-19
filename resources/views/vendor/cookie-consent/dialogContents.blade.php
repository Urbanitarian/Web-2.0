<div class="fixed inset-x-0 bottom-0 z-50 pb-2 js-cookie-consent cookie-consent">
    <div class="px-6 mx-auto max-w-7xl">
        <div class="p-2 bg-yellow-100 rounded-lg">
            <div class="flex flex-wrap items-center justify-between">
                <div class="items-center flex-1 w-0">
                    <p class="ml-3 text-xs text-black cookie-consent__message md:text-base">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="flex mt-0">
                    <button class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-800 bg-green-400 rounded-md cursor-pointer js-cookie-consent-agree cookie-consent__agree hover:bg-green-300">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
