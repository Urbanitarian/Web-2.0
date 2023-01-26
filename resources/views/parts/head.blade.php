<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Primary Meta Tags -->
  <meta name="title" content="Urbanitarian">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link rel="shortcut icon" href="./img/logo-sm.png" type="image/x-icon" />
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:title" content="Urbanitarian">
  <meta property="og:description" content="">
  <meta property="og:image" content="./img/logo-sm.png">
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="#">
  <meta property="twitter:title" content="Urbanitarian">
  <meta property="twitter:description" content="">
  <meta property="twitter:image" content="./img/logo-sm.png">

  <script src="https://kit.fontawesome.com/59ecaaffaa.js" crossorigin="anonymous"></script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

  <link rel='stylesheet' href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css">

  <title>Urbanitarian</title>
@vite('resources/css/app.css')
<meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
<script>
    myToken = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>
</script>
