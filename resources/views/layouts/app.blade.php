<!DOCTYPE html>
<html lang="fr">

<head>
    @include('parts.head')
</head>

<body>
   
        @include('parts.navbar')
    <main>
        @yield('main')
    </main>
    <footer>
        @include('parts.footer')
    </footer>
    
    @vite('resources/js/app.js')

        <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
</body>

</html>
