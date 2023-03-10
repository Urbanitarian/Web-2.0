@extends(backpack_view('blank'))
@livewireStyles
@section('content')
    <h2 class="font-semibold">Appointments</h2>
    <div class="">
        <livewire:calendar />
        @livewireScripts
        @stack('scripts2')
    </div>
@endsection
