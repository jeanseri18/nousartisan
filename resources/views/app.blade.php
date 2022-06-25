<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from runwebrun.com/startbox/home-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 16:07:45 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>Nous artisan | @yield("title")</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Startbox">
    <meta name="author" content="RunWebRun">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- Favicon-->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/root/favicon.png') }}"><!-- Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap">
    <!-- Style-->
    <!-- build:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"><!-- endbuild -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jQuery-->
    <script src="{{ asset('assets/vendors/js/jquery.min.js') }}"></script>

    @livewireStyles
</head>

<body class=" has-topbar">
    <!-- Header-->
    <!-- Navbar top-->
    @include('layouts.frontend.navbar')
    <!-- Navbar mobile-->
    @yield('content')

    @include('layouts.frontend.footer')
    <!-- Vendors-->
    <!-- build:js -->

    <script src="{{ asset('assets/vendors/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/jarallax.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/jarallax-element.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/ofi.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/jquery.inview.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/gist-embed.min.js') }}"></script>
    <script src="{{ asset('assets/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/controllers/show-on-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/controllers/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/controllers/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/controllers/navbar.js') }}"></script>
    <script src="{{ asset('assets/js/controllers/stretch-column.js') }}"></script>
    <script src="{{ asset('assets/js/controllers/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/controllers/others.jse') }}"></script><!-- ndbuild -->

    @livewireScripts
</body>


<!-- Mirrored from runwebrun.com/startbox/home-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 16:09:47 GMT -->

</html>
