<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="author" content="Bligosoft">
    @stack('meta-seo')
    <title>@yield('title')</title>

    <!-- Favicons -->
    <link href={{ asset("front/assets/img/favicon.png") }} rel="icon" />
    <link href={{ asset("front/assets/img/apple-touch-icon.png") }} rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href={{ asset("front/assets/vendor/bootstrap/css/bootstrap.min.css") }}
      rel="stylesheet"
    />
    <link
      href={{ asset("front/assets/vendor/bootstrap-icons/bootstrap-icons.css") }}
      rel="stylesheet"
    />
    <link href={{ asset("front/assets/vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet" />
    <link
      href={{ asset("front/assets/vendor/glightbox/css/glightbox.min.css") }}
      rel="stylesheet"
    />
    <link href={{ asset("front/assets/vendor/glightbox/css/glightbox.min.css") }} />

    <!-- Template Main CSS Files -->
    <link href={{ asset("front/assets/css/variables.css") }} rel="stylesheet" />
    <link href={{ asset("front/assets/css/main.css") }} rel="stylesheet" />
    @stack('css')


    <!-- =======================================================
  * Template Name: ZenBlog
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
  </head>
 
  <body>
    <!-- ======= Header ======= -->
    @include('front.layout.navbar')
    <!-- End Header -->

    @yield('main')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('front.layout.footer')
