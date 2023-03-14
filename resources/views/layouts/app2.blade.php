<!DOCTYPE html>
<html lang="fr">

<head>
    @include('parts.head')
</head>

<body>
    @include('parts.navbar2')
    <main>
        @yield('main')
    </main>
    <footer>
        @include('parts.footer')
    </footer>

    @vite('resources/js/app.js')
</body>



</html>
