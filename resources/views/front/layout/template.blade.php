<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href={{ asset("front/assets/fonts/icomoon/style.css") }} />
    <link rel="stylesheet" href={{ asset("front/assets/fonts/flaticon/font/flaticon.css") }} />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />

    <link rel="stylesheet" href={{ asset("front/assets/css/tiny-slider.css") }} />
    <link rel="stylesheet" href={{ asset("front/assets/css/aos.css") }} />
    <link rel="stylesheet" href={{ asset("front/assets/css/glightbox.min.css") }} />
    <link rel="stylesheet" href={{ asset("front/assets/css/style.css") }} />

    <link rel="stylesheet" href={{ asset("front/assets/css/flatpickr.min.css") }} />

    <title>@yield('title')</title>
  </head>
  <body>
    <!-- ======= Header ======= -->
    @include('front.layout.navbar')
    <!-- End Header -->

    @yield('main')
    <!-- End #main -->

    @include('front.layout.footer')
