<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('') }}assets/images/favicon.ico">

    <title>SPMN 44 - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('') }}assets/backend/css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('') }}assets/backend/css/style.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/backend/css/skin_color.css">
    @stack('styles')
    @livewireStyles
</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>
        @livewire('template.backend.nusantara.partials.header')
        @livewire('template.backend.nusantara.partials.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                @yield('content')
                {{ isset($slot) ? $slot : null }}
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->
        @livewire('template.backend.nusantara.partials.footer')
        {{-- @livewire('template.backend.nusantara.partials.controlsidebar') --}}

    </div>
    <!-- ./wrapper -->
    {{-- @livewire('template.backend.nusantara.partials.stickytoolbar') --}}
    @livewire('template.backend.nusantara.partials.chatbox')

    <!-- Vendor JS -->
    <script src="{{ asset('') }}assets/backend/js/vendors.min.js"></script>
    <script src="{{ asset('') }}assets/backend/js/pages/chat-popup.js"></script>
    <script src="{{ asset('') }}assets/icons/feather-icons/feather.min.js"></script>

    <script src="{{ asset('') }}assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
    <script src="{{ asset('') }}assets/vendor_components/moment/min/moment.min.js"></script>
    <script src="{{ asset('') }}assets/vendor_components/fullcalendar/fullcalendar.js"></script>

    <!-- EduAdmin App -->
    <script src="{{ asset('') }}assets/backend/js/template.js"></script>
    <script src="{{ asset('') }}assets/backend/js/pages/dashboard3.js"></script>
    <script src="{{ asset('') }}assets/backend/js/pages/calendar.js"></script>
    @livewireScripts

</body>

</html>
