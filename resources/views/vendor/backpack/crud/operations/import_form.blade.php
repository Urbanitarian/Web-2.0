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


        <form method="post" action="/import">
            @csrf
            <div class="flex flex-col w-1/2 pt-4 bg-white rounded-xl">

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
                        <input id="dropzone-file" type="file"  accept="xls" class="hidden" />
                        
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
