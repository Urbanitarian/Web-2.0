@php use \App\Http\Controllers\GlobalController; @endphp
@php  $version = GlobalController::version();@endphp
@php  $starred = GlobalController::starred();@endphp
@php  $sessions = GlobalController::getSessions();@endphp
@php  $users = GlobalController::getUsers();@endphp
@php  $sommediamants = GlobalController::getSommeDiamants();@endphp 
@php  $sommerubis = GlobalController::getSommeRubis();@endphp 
@php  $sommecoins = GlobalController::getSommeCoins();@endphp 
@extends(backpack_view('blank'))
@section('content')
    <section class="text-gray-600 body-font">
        <div id="main-content" class="relative w-full h-full mt-2 overflow-y-auto bg-[#111827] rounded-lg">
            
            <div class="flex flex-col gap-4 px-4 pt-6 pb-6 xl:flex-row">
                <div class="w-full p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8">
                    <div class="flex items-center justify-between mb-2">
                        <div>
                            <h3 class="mb-1 text-xl font-bold text-gray-900">Circulation</h3>
                        </div>
                    </div>
                    <div class="flex flex-col h-32 mt-2">
                        <div class="overflow-auto overflow-x-hidden rounded-lg">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden shadow sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="px-4 py-2 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                                                    Connectés:
                                                </th>
                                                <th scope="col" class="px-4 py-2 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                                                    Diamants:
                                                </th>
                                                    <th scope="col" class="px-4 py-2 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                                                    Rubis:
                                                </th>
                                                 <th scope="col" class="px-4 py-2 text-xs font-medium tracking-wider text-center text-gray-500 uppercase md:block">
                                                    Coins:
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                                <tr>
                                                    <td class="p-4 text-sm font-normal text-center text-gray-900 whitespace-nowrap time-container">
                                                        10
                                                    </td>
                                                    <td class="p-4 text-sm font-normal text-center text-gray-900 whitespace-nowrap time-container">
                                                     <div class="flex justify-center">
                                                    {{ $sommediamants }}
                                                      </div>
                                                    </td>
                                                    <td class="p-4 text-sm font-normal text-center text-gray-900 time-container ">
                                                     <div class="flex justify-center">
                                                    {{ $sommerubis }}
                                                      </div>
                                                    </td>
                                                    <td class="p-4 text-sm font-normal text-center whitespace-nowrap rate-container md:block">
                                                    <div class="flex justify-center">
                                                    {{ $sommecoins }}€
                                                    </div>
                                                    </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="flex flex-col gap-4 px-4 pt-6 pb-6 xl:flex-row">
                <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 ">
                    <div class="flex items-center justify-between mb-2">
                        <div>
                            <h3 class="mb-1 text-xl font-bold text-gray-900">Jeux du moment</h3>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="user/" class="p-2 text-sm font-medium rounded-lg text-cyan-600 hover:bg-gray-100">Tout
                                voir</a>
                        </div>
                    </div>
                    <div class="flex flex-col mt-2 h-96">
                        <div class="overflow-auto overflow-x-hidden rounded-lg">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden shadow sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-4 py-2 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Image
                                                </th>
                                                <th scope="col"
                                                    class="px-4 py-2 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Titre
                                                </th>
                                                    <th scope="col"
                                                    class="px-4 py-2 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Description
                                                </th>
                                                 <th scope="col"
                                                    class="hidden px-4 py-2 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:block">
                                                    Editer
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                            @forelse ($starred as $star)
                                                <tr>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap rate-container">

                                                        @php $imagesx =   $star->image[0] ?? null; @endphp
                                                        <img src="{{ asset('storage/' . $imagesx ) }}" class="w-32 h-auto">
                                                    </td>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap time-container">
                                                        {{ $star->name }}
                                                    </td>
                                                    <td class="p-4 text-sm font-normal text-gray-900 time-container ">
                                                      <p class="cropped">  {{ $star->description }}</p>
                                                    </td>
                                                    <td
                                                        class="hidden p-4 text-sm font-normal whitespace-nowrap rate-container md:block">
                                                        <a href="/admin/games/{{ $star->id }}/edit">
                                                            <i
                                                                class="text-gray-600 hover:text-gray-800 active:text-black las la-edit la-2x"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap time-container">
                                                        Aucun jeux mis en vedettes
                                                    </td>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap rate-container">

                                                    </td>
                                                    <td class="p-4 text-sm font-normal whitespace-nowrap rate-container">

                                                    </td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 
                <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 ">
                    <div class="flex items-center justify-between mb-2">
                        <div>
                            <h3 class="mb-1 text-xl font-bold text-gray-900">Utilisateurs</h3>
                            <a class="p-2 text-sm font-medium text-gray-800 rounded-lg">Total: {{ $users->count() }}</a>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="user/"
                                class="p-2 text-sm font-medium rounded-lg text-cyan-600 hover:bg-gray-100">Tout
                                voir</a>
                        </div>
                    </div>
                    <div class="flex flex-col mt-2 h-96">
                        <div class="overflow-auto overflow-x-hidden rounded-lg">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden shadow sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-4 py-2 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Online
                                                </th>
                                                <th scope="col"
                                                    class="px-4 py-2 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Nom
                                                </th>
                                                <th scope="col"
                                                    class="px-4 py-2 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Email
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                          
                                            @foreach ($users as $user)
                                         
                                                <tr>
                                                 <td
                                                        class="pl-8 text-sm font-normal text-gray-900 whitespace-nowrap">
                                                        @if ($user == backpack_auth()->user())
                                                            <div class="w-3 h-3 ml-2 bg-green-500 rounded-full"></div>
                                                            @else
                                                            <div class="w-3 h-3 ml-2 bg-red-500 rounded-full"></div>
                                                        @endif
                                                    </td>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap time-container">
                                                        {{ $user->name }}
                                                    </td>
                                                    <td class="p-4 text-sm font-normal text-gray-900 rate-container">
                                                        {{ $user->email }}
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        @if (backpack_user()->role == 'admin')
            <p class="w-1/2 px-4 py-2 mx-8 mt-4 text-xs text-gray-200 bg-gray-900 rounded -pl-2">
                Derniéres mise à jour: '1.7.0'<br>

                 -test auto update<br>
                 
                
                 
                 

            </p>
        @endif
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
    </style>
@endsection
