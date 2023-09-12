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
        <meta name="keywords" content="Kodir Zaelani, digitan nusantara, digtal ">
        <link rel="icon" href="{{ asset('') }}uploads/images/logo/favicon.png">
    @endif
    <link href="{{ asset('') }}assets/terasgreen/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{ asset('') }}assets/terasgreen/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/terasgreen/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('') }}assets/terasgreen/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/terasgreen/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/terasgreen/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/terasgreen/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('') }}assets/terasgreen/css/variables-green.css">
    <link href="{{ asset('') }}assets/terasgreen/css/main.css" rel="stylesheet">
    {{-- <!-- Pixel Code for https://midteknologi.com/tools/social-proof/ -->
    <script defer src="https://midteknologi.com/tools/social-proof/pixel/wzxzkvg22gx20vi6169rdqihkaq6ojk1"></script>
    <!-- END Pixel Code -->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {};

        Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/644cea9831ebfa0fe7fb1051/1gv678rrf';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script> --}}
    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=6481720319ebc20012fab47f&product=inline-share-buttons'
        async='async'></script>
    @stack('disqus')
    @livewireStyles()

</head>

<body>
    @livewire('template.frontend.terasgreen.partials.header')
    @yield('content')
    {{ isset($slot) ? $slot : null }}
    @livewire('template.frontend.terasgreen.partials.footer')

    <script src="{{ asset('') }}assets/terasgreen/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/terasgreen/vendor/aos/aos.js"></script>
    <script src="{{ asset('') }}assets/terasgreen/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('') }}assets/terasgreen/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('') }}assets/terasgreen/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('') }}assets/terasgreen/vendor/waypoints/noframework.waypoints.js"></script>

    @stack('scripts')
    <script src="{{ asset('') }}assets/terasgreen/js/main.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->

    @livewireScripts

</body>

</html>
