<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('') }}assets/images/favicon.ico">

    <title>SMPN 44 Samarinda</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/css/vendors_css.css">

    <!-- Style-->
    <link href="{{ asset('') }}assets/vendor_components/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/css/style.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/css/skin_color.css">
    @stack('styles')
    @livewireStyles

</head>

<body class="theme-primary">

    @livewire('template.frontend.nusantara.partials.socialmediasticky')
    @livewire('template.frontend.nusantara.partials.header')
    @yield('content')
    {{ isset($slot) ? $slot : null }}
    @livewire('template.frontend.nusantara.partials.footer')


    <!-- Vendor JS -->
    <script src="{{ asset('') }}assets/frontend/js/vendors.min.js"></script>
    <!-- Corenav Master JavaScript -->
    <script src="{{ asset('') }}assets/corenav-master/coreNavigation-1.1.3.js"></script>
    <script src="{{ asset('') }}assets/frontend/js/nav.js"></script>
    <script src="{{ asset('') }}assets/vendor_components/swiper/swiper-bundle.min.js"></script>
    @stack('scripts')
    <!-- EduAdmin front end -->
    <script src="{{ asset('') }}assets/frontend/js/template.js"></script>

    @livewireScripts

</body>

</html>
