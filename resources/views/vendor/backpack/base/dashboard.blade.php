
@extends(backpack_view('blank'))
@section('content')
    <section class="text-gray-600 body-font">
        <div id="main-content" class="relative w-full h-full mt-2 overflow-y-auto bg-[#111827] rounded-lg">
            
            <div class="flex flex-col gap-4 px-4 pt-6 pb-6 xl:flex-row">
                <div class="w-full p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8">
                    <div class="flex items-center justify-between mb-2">
                        <div>
                            <h3 class="mb-1 text-xl font-bold text-gray-900">Dashboard</h3>
                        </div>
                    </div>
                    <div class="flex flex-col h-32 mt-2">
                     
                    </div>
                </div>
            </div> 
        </div>


    </section>
    <style>
        * {
            scrollbar-width: thin;
            scrollbar-color: #86878B #05070C;
        }

        /* Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 15px;
        }

        *::-webkit-scrollbar-track {
            margin-top: 5px;
            margin-bottom: 5px;
            background: #05070C;
            border-radius: 5px;
        }

        *::-webkit-scrollbar-thumb {
            margin-top: 5px;
            background-color: #86878B;
            border-radius: 14px;
            border: 3px solid #05070C;
        }

        body{
              background: linear-gradient(360deg, #0a0a0a 0%, #01163a 100%); !important;
        }
    </style>
@endsection
