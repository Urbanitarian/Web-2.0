<!DOCTYPE html>
<html lang="fr">

<head>
    @include('parts.head')
</head>

<body>
    @php
        $topbar_text = Setting::get('topbar_text');
    @endphp
    @if ($topbar_text != null)
        <div class="hidden md:block">
            <div class="hidden py-2 select-none marquee">{{ $topbar_text }} &nbsp; &nbsp; {{ $topbar_text }} &nbsp;
                &nbsp; {{ $topbar_text }}
                &nbsp; &nbsp; {{ $topbar_text }} &nbsp; &nbsp; {{ $topbar_text }} &nbsp; &nbsp; {{ $topbar_text }}
                &nbsp;
                &nbsp; {{ $topbar_text }} &nbsp; &nbsp; {{ $topbar_text }}
            </div>
        </div>
    @endif
    @include('parts.navbar')
    <main>
        @yield('main')
    </main>
    <footer>
        @include('parts.footer')
    </footer>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>

    <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    @livewire('livewire-ui-modal')

    @livewireScripts

    @stack('scripts')


</body>
<style>
    .marquee {
        color: white;
        overflow: hidden;
        background: black;
    }
</style>
<script>
    addEventListener('load', function() {
        $('.marquee').removeClass('hidden');
        $('.marquee').marquee({
            //speed in milliseconds of the marquee
            duration: 15000,
            //gap in pixels between the tickers
            gap: 20,
            //time in milliseconds before the marquee will start animating
            delayBeforeStart: 0,
            //'left' or 'right'
            direction: 'left',
            //true or false - should the marquee be duplicated to show an effect of continues flow
            duplicated: true

        });

    }, false);

    var notyf = new Notyf({
        duration: 3000,
        position: {
            x: 'right',
            y: 'top',
        },
        dismissible: true
    });

    Livewire.on('success', message => {
        notyf.success(message);
    })
</script>
@if (session()->has('success'))
    <script>
        // console.log('ssdsd');
        notyf.success("{{ session()->get('success') }}");
    </script>
@endif
@if (session()->has('error'))
    <script>
        notyf.error("{{ session()->get('error') }}");
    </script>
@endif


</html>
