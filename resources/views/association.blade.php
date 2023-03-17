@extends('layouts.app2')
@php use \App\Http\Controllers\GlobalController; @endphp
@php  $pages = GlobalController::pages();@endphp
@section('main')
    <div data-barba="container">
        <section class="text-gray-400 bg-[#6A539D] body-font mt-8">
           <h2 id="activities" class="py-2 text-2xl font-semibold text-center text-white md:text-3xl">
                 ACTIVITIES
             </h2>
        </section>

<section class="overflow-hidden text-gray-600 body-font">
  <div class="container py-24 mx-auto lg:px-16">
    <div class="flex flex-wrap -m-4">
      <div class="w-full p-4 xl:w-1/4 md:w-1/2">
        <div class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-gray-300 rounded-lg">
          <h1 class="pb-4 mb-4 text-2xl font-bold text-center text-gray-900 border-b border-gray-200">JUSTHood</h1>
          <p class="flex items-center mb-2 text-gray-600">
           Vexillologist pitchfork
          </p>
          <p class="flex items-center mb-2 text-gray-600">
            Tumeric plaid portland
          </p>
          <p class="flex items-center mb-6 text-gray-600">
            Mixtape chillwave tumeric
          </p>
         
        </div>
      </div>
      <div class="w-full p-4 xl:w-1/4 md:w-1/2">
         <div class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-gray-300 rounded-lg">
          <h1 class="pb-4 mb-4 text-2xl font-bold text-center text-gray-900 border-b border-gray-200">Urbanitarian Webspace</h1>
          <p class="flex items-center mb-2 text-gray-600">
           Vexillologist pitchfork
          </p>
          <p class="flex items-center mb-2 text-gray-600">
            Tumeric plaid portland
          </p>
          <p class="flex items-center mb-6 text-gray-600">
            Mixtape chillwave tumeric
          </p>
         
        </div>
      </div>
      <div class="w-full p-4 xl:w-1/4 md:w-1/2">
         <div class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-gray-300 rounded-lg">
          <h1 class="pb-4 mb-4 text-2xl font-bold text-center text-gray-900 border-b border-gray-200">U-SCAT</h1>
          <p class="flex items-center mb-2 text-gray-600">
           Vexillologist pitchfork
          </p>
          <p class="flex items-center mb-2 text-gray-600">
            Tumeric plaid portland
          </p>
          <p class="flex items-center mb-6 text-gray-600">
            Mixtape chillwave tumeric
          </p>
         
        </div>
      </div>
      <div class="w-full p-4 xl:w-1/4 md:w-1/2">
         <div class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-gray-300 rounded-lg">
          <h1 class="pb-4 mb-4 text-2xl font-bold text-center text-gray-900 border-b border-gray-200">Free</h1>
          <p class="flex items-center mb-2 text-gray-600">
           Vexillologist pitchfork
          </p>
          <p class="flex items-center mb-2 text-gray-600">
            Tumeric plaid portland
          </p>
          <p class="flex items-center mb-6 text-gray-600">
            Mixtape chillwave tumeric
          </p>
         
        </div>
      </div>
    </div>
  </div>
</section>
      <section class="text-gray-400 bg-[#6A539D] body-font mt-8">
           <h2 id="activities" class="py-2 text-2xl font-semibold text-center text-white md:text-3xl">
              MAP OF ACTIVITIES
             </h2>
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
