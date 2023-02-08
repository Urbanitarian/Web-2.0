@extends('layouts.app')

@section('main')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {!! RecaptchaV3::initJs() !!}
    <div data-barba="container">
        <section class="pt-8">
            <div class="p-8 md:p-12 lg:px-12 lg:py-12">
                <div class="max-w-lg mx-auto text-center lg:max-w-xl">
                    <h2 class="text-2xl font-bold text-gray-900 md:text-4xl">
                        Publish your work on our architecture platform
                    </h2>

                    <p class="mt-8 text-xl text-gray-500 leading-relaxed">
                        The content we produce is made possible by our global architecture community.
                        Our site receives number of projects every day with a mission to carefully curate and select the
                        best
                        architecture around the world.
                        By publishing your work, you can inspire the millions of people who visit our site to design a
                        better world.
                    </p>
                    <a href="#sub" class="pt-8">
                        <h2 class="text-xl font-bold text-gray-900 pt-16">Submit a Project</h2>
                        <i
                            class="fas fa-arrow-down text-2xl text-gray-900 mt-8 border border-gray-400 rounded-full px-4 py-2 hover:bg-gray-200 active:bg-gray-300"></i>
                    </a>
                    <hr class="mt-12">
                    <p   id="sub" class="mt-4 text-sm text-gray-500 leading-relaxed pt-24">
                        Once you download the <a class="text-blue-500" href="{{ asset('storage/uploads/submission-requirements.zip') }}"> following folder</a>, you will find detailed information on our requirements for
                        publication.
                        Upload all documents to Dropbox or Google Drive and paste the link at the end of this form.
                    </p>
                    <form class="flex flex-wrap -m-2 pt-8" method="post" action="submit_project">
                        @csrf
                        <div  class="w-1/2 p-2">
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
                                <label for="office" class="text-sm leading-7 text-gray-800">office</label>
                                <input type="office" id="office" name="office" required
                                    class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                            </div>
                        </div>
                        <div class="w-full p-2">
                            <div class="relative">
                                <label for="link" class="text-sm leading-7 text-gray-800">link</label>
                                <input type="link" id="office" name="link" required
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

                        <p class="mt-4 text-xs text-gray-500 leading-relaxed py-4 mx-4">
                            We only receive submissions of built projects completed after 2014.
                        </p>
                        <div class="ml-4 p-2">
                            <input type="checkbox" id="secure" name="secure" required>
                            <label for="secure" class="text-sm leading-7 text-gray-800">I agree to the <a href="legal" class="text-blue-500">Terms of use</a> and the <a href="confidentialite" class="text-blue-500">Privacy Policy</a></label>
                        </div>

                        <div class="flex justify-center w-full p-2">
                            <button type="submit"
                                class="relative flex max-w-[200px] px-5 py-4 my-2 text-center mt-2 font-bold text-white bg-black shadow-lg prevent group rounded-xl hover:bg-gray-800">Submit Project</button>
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
@endsection
