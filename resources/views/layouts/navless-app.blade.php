<!DOCTYPE html>
<html lang="fr">

<head>
    @include('parts.head')
</head>

<body>
    <main>
        @yield('main')
    </main>
    @vite('resources/js/app.js')
</body>

</html>
