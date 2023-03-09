@extends(backpack_view('blank'))

@section('header')
    <section class="container-fluid">
        <h2>
            <span class="text-capitalize">Import Excel file</span>
        </h2>
    </section>
@endsection

@section('content')
    <div class="">
        <div class="w-1/2 p-4 mt-1 leading-normal text-white bg-green-400 rounded-lg">
            <hi class="text-2xl">Instructions:</hi>
            <p class="text-sm">
                Download the exemple sheet and fill it with your data.</br>
                Select the category.</br>
                Upload the file and click on "Import" button.</br>
            </p>
            <p class="text-sm text-red-600">Do not use special characters in the image names [&nbsp;'&nbsp;, +&nbsp;, "&nbsp;]<br>
            and don't forget the commas and spaces between each link.</p>
            </p>
            <div class="flex">
                <div class="mr-4">
                    <a href="{{ asset('img/masterplans_exemple_sheet.xlsx') }}">Masterplans sheet</a></br>
                    <a href="{{ asset('img/streetscapes_exemple_sheet.xlsx') }}">Streetscapes sheet</a></br>
                    <a href="{{ asset('img/urbanscapes_exemple_sheet.xlsx') }}">Urbanscapes sheet</a>
                </div>
                <div>
                    <a href="{{ asset('img/dictionaries_exemple_sheet.xlsx') }}">Dictionaries sheet</a></br>
                    <a href="{{ asset('img/magazines_exemple_sheet.xlsx') }}">Magazines sheet</a></br>
                    <a href="{{ asset('img/webresources_exemple_sheet.xlsx') }}">Webresources sheet</a>
                </div>
            </div>
        </div>

        <form method="post" action="/import" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col w-1/2 pt-4 bg-white rounded-xl">

                <fieldset class="flex flex-wrap justify-center gap-2 mx-auto mb-4 md:gap-4">
                    <div>
                        <input type="radio" name="dataType" value="masterplans" id="masterplans" class="hidden peer"
                            checked />
                        <label for="masterplans"
                            class="flex justify-center h-8 px-3 pt-1 pb-3 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                            <p class="text-sm font-medium">Masterplans</p>
                        </label>
                    </div>

                    <div>
                        <input type="radio" name="dataType" value="streetscapes" id="streetscapes" class="hidden peer" />

                        <label for="streetscapes"
                            class="flex justify-center h-8 px-3 pt-1 pb-3 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                            <p class="text-sm font-medium">Streetscapes</p>
                        </label>
                    </div>

                    <div>
                        <input type="radio" name="dataType" value="neighbourhoods" id="neighbourhoods"
                            class="hidden peer" />

                        <label for="neighbourhoods"
                            class="flex justify-center h-8 px-3 pt-1 pb-3 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                            <p class="text-sm font-medium">Urbanscapes</p>
                        </label>
                    </div>

                     <div>
                        <input type="radio" name="dataType" value="dictionaries" id="dictionaries"
                            class="hidden peer" />

                        <label for="dictionaries"
                            class="flex justify-center h-8 px-3 pt-1 pb-3 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                            <p class="text-sm font-medium">Dictionaries</p>
                        </label>
                    </div>

                     <div>
                        <input type="radio" name="dataType" value="magazines" id="magazines"
                            class="hidden peer" />

                        <label for="magazines"
                            class="flex justify-center h-8 px-3 pt-1 pb-3 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                            <p class="text-sm font-medium">Magazines</p>
                        </label>
                    </div>

                     <div>
                        <input type="radio" name="dataType" value="webresources" id="webresources"
                            class="hidden peer" />

                        <label for="webresources"
                            class="flex justify-center h-8 px-3 pt-1 pb-3 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                            <p class="text-sm font-medium">Webresources</p>
                        </label>
                    </div>

                </fieldset>

                <div class="flex items-center justify-center w-full">

                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to
                                    upload</span> or drag and drop</p>
                        </div>
                        <input id="dropzone-file" name="file" type="file" class="hidden" />

                    </label>
                </div>



            </div>
            <h4 class="text-xs"></h4>
            <div id="saveActions" class="pt-4 form-group">
                <input type="hidden" name="_save_action" value="save_list">
                <button type="submit" class="btn btn-success">
                    <span class="la la-save" role="presentation" aria-hidden="true"></span> &nbsp;
                    <span data>Import</span>
                </button>
                <div class="btn-group" role="group">
                </div>
                <a href="{{ url($crud->route) }}" class="btn btn-default"><span class="la la-ban"></span>
                    &nbsp;Cancel</a>
            </div>
        </form>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[type="file"]').change(function(e) {
                var geekss = e.target.files[0].name;
                $("h4").text(geekss);

            });
        });
    </script>
@endsection
