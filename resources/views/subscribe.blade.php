@extends('layouts.app')

@section('main')
    <div data-barba="container">

        <section class="pt-8">
            <div class="p-8 md:p-12 lg:px-12 lg:py-12">
                <div class="max-w-lg mx-auto text-center lg:max-w-full">
                    <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                        Subscribe to Urbanitarian
                    </h2>
                    <p class="pt-8 mx-auto text-base text-gray-500 md:text-lg lg:max-w-4xl">
                        Urbanitarian is the world's leading community-based, scalable, didactic, free, open, and
                        comprehensive dataset and archive of urban design projects and resources.

                    </p>

                    <div class="max-w-4xl pt-16 mx-auto">

                    <input type="text"
                            class="w-1/2 px-4 py-2 mx-auto mb-4 text-gray-700 bg-gray-200 border border-gray-200 rounded-lg appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                            placeholder="Enter your email address" />

                        <div class="py-3 border-b" x-data="{ enabled: false }">
                            <label class="flex items-center justify-between">
                                <span class="text-sm text-gray-800">Push Notifications</span>
                                <button @click="enabled = !enabled" type="button"
                                    class="relative inline-flex flex-shrink-0 w-10 h-5 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600"
                                    :class="enabled";
                                    'bg-indigo-600'"
                                    role="switch" aria-checked="false">
                                    <span class="sr-only">Sleek Toggle</span>
                                    <span aria-hidden="true"
                                        class="inline-block w-4 h-4 transition duration-200 ease-in-out transform bg-white rounded-full shadow pointer-events-none ring-0"
                                        :class="enabled";
                                        'translate-x-5'"></span>
                                </button>
                            </label>
                        </div>
                        <div class="py-3 border-b" x-data="{ enabled: false }">
                            <label class="flex items-center justify-between">
                                <span class="text-sm text-gray-800">SMS Notifications</span>
                                <button @click="enabled = !enabled" type="button"
                                    class="relative inline-flex flex-shrink-0 w-10 h-5 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600"
                                    :class="enabled";
                                    'bg-indigo-600'"
                                    role="switch" aria-checked="false">
                                    <span class="sr-only">Sleek Toggle</span>
                                    <span aria-hidden="true"
                                        class="inline-block w-4 h-4 transition duration-200 ease-in-out transform bg-white rounded-full shadow pointer-events-none ring-0"
                                        :class="enabled";
                                        'translate-x-5'"></span>
                                </button>
                            </label>
                        </div>
                        <div class="py-3 border-b" x-data="{ enabled: false }">
                            <label class="flex items-center justify-between">
                                <span class="text-sm text-gray-800">Email Notifications</span>
                                <button @click="enabled = !enabled" type="button"
                                    class="relative inline-flex flex-shrink-0 w-10 h-5 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600"
                                    :class="enabled";
                                    'bg-indigo-600'"
                                    role="switch" aria-checked="false">
                                    <span class="sr-only">Sleek Toggle</span>
                                    <span aria-hidden="true"
                                        class="inline-block w-4 h-4 transition duration-200 ease-in-out transform bg-white rounded-full shadow pointer-events-none ring-0"
                                        :class="enabled";
                                        'translate-x-5'"></span>
                                </button>
                            </label>
                        </div>
                        <div class="py-4">
                            <button type="button"
                                class="w-full px-4 py-2 mt-4 font-semibold text-white bg-black rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800">
                                Subscribe</button>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </div>
@endsection
