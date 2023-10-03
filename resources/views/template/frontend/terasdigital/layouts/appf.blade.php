<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    @if ($global_option != '0')

        @if ($global_option->meta_description)
            <meta name="description" content="{{ $global_option->meta_description }}">
        @else
            <meta name="description" content="Teras Petani, Teras Petani Borneo, Borneo, Teras, Nusantara, Kaltim">
        @endif

        @if ($global_option->meta_keywords)
            <meta name="keywords" content="{{ $global_option->meta_keywords }}">
        @else
            <meta name="keywords" content="Teras Petani, Teras Petani Borneo, Borneo, Teras, Nusantara, Kaltim">
        @endif
        @if ($global_option->favicon)
            <link rel="icon" href="{{ asset('') }}uploads/images/logo/{{ $global_option->favicon }}">
        @else
            <link rel="icon" href="{{ asset('') }}uploads/images/logo/favicon.png">
        @endif
    @elseif ($global_option == '0')
        <meta name="description" content="Teras Petani, Teras Petani Borneo, Borneo, Teras, Nusantara, Kaltim">
        <meta name="keywords" content="Kodir Zaelani, digital nusantara, digtal ">
        <link rel="icon" href="{{ asset('') }}uploads/images/logo/favicon.png">
    @endif
    <link href="{{ asset('') }}assets/terasdigital/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{ asset('') }}assets/terasdigital/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/terasdigital/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('') }}assets/terasdigital/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/terasdigital/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/terasdigital/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/terasdigital/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('') }}assets/terasdigital/css/variables-green.css">
    <link href="{{ asset('') }}assets/terasdigital/css/main.css" rel="stylesheet">

    @livewireStyles()

</head>

<body>
    @livewire('template.frontend.terasdigital.partials.header')
    @yield('content')
    {{ isset($slot) ? $slot : null }}
    @livewire('template.frontend.terasdigital.partials.footer')

    <script src="{{ asset('') }}assets/terasdigital/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/terasdigital/vendor/aos/aos.js"></script>
    <script src="{{ asset('') }}assets/terasdigital/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('') }}assets/terasdigital/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('') }}assets/terasdigital/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('') }}assets/terasdigital/vendor/waypoints/noframework.waypoints.js"></script>

    @stack('scripts')
    <script src="{{ asset('') }}assets/terasdigital/js/main.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->

    @livewireScripts

</body>

</html>
