<!DOCTYPE html>
<html lang="fr">

<head>
    @include('parts.head')
</head>

<body class="" data-barba="wrapper">
   
        @include('parts.navbar')
    <main>
        @yield('main')
    </main>
    <footer>
        @include('parts.footer')
    </footer>
    
    @vite('resources/js/app.js')

    
</body>

</html>
