@extends('layouts.app')
@php use \App\Http\Controllers\GlobalController; @endphp
@php  $pages = GlobalController::pages();@endphp
@section('main')
    <div data-barba="container">
        <section class="text-gray-400 bg-black body-font">
           <h2 class="text-2xl font-semibold text-white md:text-5xl text-center pt-10">
                 ACTIVITIES
             </h2>
            <div class="container px-5 pb-24 pt-12 mx-auto">
                <div class="flex flex-wrap mx-8">
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/420x260">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-white title-font text-lg font-medium">The Catalyzer</h2>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/421x261">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-white title-font text-lg font-medium">Shooting Stars</h2>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/422x262">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-white title-font text-lg font-medium">Neptune</h2>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/423x263">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-white title-font text-lg font-medium">The 400 Blows</h2>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/424x264">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-white title-font text-lg font-medium">The Catalyzer</h2>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/425x265">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-white title-font text-lg font-medium">Shooting Stars</h2>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/427x267">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-white title-font text-lg font-medium">Neptune</h2>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/428x268">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-white title-font text-lg font-medium">The 400 Blows</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="p-5 mx-auto sm:p-10 md:px-16">
            <div class="flex flex-col max-w-5xl mx-auto overflow-hidden rounded">
                <div class="page all-initial">
                    @php
                        echo $pages[6]->content;
                    @endphp
                </div>

            </div>
        </div>
    </div>
    <style>
        .page>h1 {
            font-size: 2.2em;
        }

        .page>h2 {
            font-size: 2.0em;
        }

        .page>h3 {
            font-size: 1.8em;
        }

        .page>h4 {
            font-size: 1.6em;
        }

        .page>h5 {
            font-size: 1.4em;
        }

        .page>p {
            display: block;
            margin-top: 1em;
            margin-bottom: 1em;
            margin-left: 0;
            margin-right: 0;
        }

        .page>table {
            display: table;
            border-collapse: separate;
            border-spacing: 2px;
            border-color: gray;
        }

        .page>td {
            display: table-cell;
            vertical-align: inherit;
        }

        .page>tbody {
            display: table-row-group;
            vertical-align: middle;
            border-color: inherit;
        }

        .page>tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }

        .page>col {
            display: table-column;
        }

        .page>colgroup {
            display: table-column-group;
        }

        .page>datalist {
            display: none;
        }

        .page>a:link {
            color: #0000FF;
            text-decoration: underline;
            cursor: auto;
        }

        .page>a:visited {
            color: #0000FF;
            text-decoration: underline;
            cursor: auto;
        }

        .page>fieldset {
            display: block;
            margin-left: 2px;
            margin-right: 2px;
            padding-top: 0.35em;
            padding-bottom: 0.625em;
            padding-left: 0.75em;
            padding-right: 0.75em;

        }

        .page>ol {
            display: block;
            list-style-type: decimal;
            margin-top: 1em;
            margin-bottom: 1em;
            margin-left: 0;
            margin-right: 0;
            padding-left: 40px;
        }

        .page>hr {
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            overflow: hidden;
            border-style: inset;
            border-width: 1px;
        }

        .page>ul {
            display: block;
            list-style-type: disc;
            margin-top: 1em;
            margin-bottom: 1 em;
            margin-left: 0;
            margin-right: 0;
            padding-left: 40px;
        }

        .page>li {
            display: list-item;
            text-align: -webkit-match-parent;

        }

        .page>p {
            display: block;
            margin-top: 1em;
            margin-bottom: 1em;
            margin-left: 0;
            margin-right: 0;
        }


        .page>th {
            display: table-cell;
            vertical-align: inherit;
            font-weight: bold;
            text-align: center;
        }

        .page>thead {
            display: table-header-group;
            vertical-align: middle;
            border-color: inherit;
        }

        .page>u {
            text-decoration: underline;
        }

        .page>tfoot {
            display: table-footer-group;
            vertical-align: middle;
            border-color: inherit;
        }

        .page>sup {
            vertical-align: super;
            font-size: smaller;
        }


        .page>sub {
            vertical-align: sub;
            font-size: smaller;
        }

        .page>summary {
            display: block;
        }

        .page>q {
            display: inline;
        }
    </style>
@endsection
