<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from runwebrun.com/startbox/home-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 16:07:45 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>Startbox | Home 01</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Startbox">
    <meta name="author" content="RunWebRun">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- Favicon-->
    <link rel="icon" type="image/png" href="{{asset('assets/img/root/favicon.png')}}"><!-- Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap">
    <!-- Style-->
    <!-- build:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}"><!-- endbuild -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- jQuery-->
    <script src="{{asset('assets/vendors/js/jquery.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @livewireStyles
</head>

<body class=" has-topbar">
    <!-- Header-->
    <!-- Navbar top-->

    @include('layouts.frontend-customer.navbar')
    <!-- Navbar mobile-->
    @yield('content')

    {{-- @include('layouts.frontend-customer.footer') --}}

    {{-- <footer class="bg-dark text-white pt-120 pb-100 footerNext">
        <div class="container">

        </div>
    </footer> --}}
    <!-- Vendors-->
    <!-- build:js -->
    <script src="{{asset('assets/vendors/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendors/js/imagesloaded.pkgd.js')}}"></script>
    <script src="{{asset('assets/vendors/js/isotope.pkgd.js')}}"></script>
    <script src="{{asset('assets/vendors/js/jarallax.js')}}"></script>
    <script src="{{asset('assets/vendors/js/jarallax-element.js')}}"></script>
    <script src="{{asset('assets/vendors/js/jquery.countdown.js')}}"></script>
    <script src="{{asset('assets/vendors/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('assets/vendors/js/ofi.js')}}"></script>
    <script src="{{asset('assets/vendors/js/jquery.inview.js')}}"></script>
    <script src="{{asset('assets/vendors/js/swiper-bundle.js')}}"></script>
    <script src="{{asset('assets/vendors/js/gist-embed.min.js')}}"></script>
    <script src="{{asset('assets/js/helpers.js')}}"></script>
    <script src="{{asset('assets/js/controllers/show-on-scroll.js')}}"></script>
    <script src="{{asset('assets/js/controllers/countdown.js')}}"></script>
    <script src="{{asset('assets/js/controllers/isotope.js')}}"></script>
    <script src="{{asset('assets/js/controllers/navbar.js')}}"></script>
    <script src="{{asset('assets/js/controllers/stretch-column.js')}}"></script>
    <script src="{{asset('assets/js/controllers/swiper.js')}}"></script>
    <script src="{{asset('assets/js/controllers/others.js')}}"></script><!-- endbuild -->

    @livewireScripts

    {{-- @yield('script') --}}


</body>
@stack('script')

<!-- Mirrored from runwebrun.com/startbox/home-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 16:09:47 GMT -->

</html>
