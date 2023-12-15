<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Lara POS</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">

    <!-- Page plugins -->
    @if (Request::routeIs('product.add'))
        <link rel="stylesheet" href="{{ asset('assets/vendor/select2/dist/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/quill/dist/quill.core.css') }}">
    @endif

    {{-- SWAL CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}" type="text/css">

    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.1.0') }}" type="text/css">

    @yield('include_css')
    @livewireStyles

    <style>
        .btn-basic-green {
            background: #00552F !important;
        }
        table tbody tr.selected{
            background-color: #C7FFE64D;
        }
        table tbody tr td.action img {
            transform: rotate(90deg);
        }
        table tbody tr td.action a:hover {
            background: transparent !important;
        }
        .collapse.sub-menu {
            padding: 10px 0 !important;
        }
        .collapse.sub-menu .item-sidebar a {
            padding: 10px 20px 10px 50px;
        }
    </style>
    @stack('styles')

</head>

<body x-data>

    {{ $slot }}

    @livewireScripts

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->

    @if (Request::routeIs('dashboard'))
        <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
        <script src="{{ asset('assets/vendor/jvectormap-next/jquery-jvectormap.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    @endif

    @if (Request::routeIs('product.add'))
        <script src="{{ asset('assets/vendor/select2/dist/js/select2.min.js') }} "></script>
        <script src="{{ asset('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }} "></script>
        <script src="{{ asset('assets/vendor/nouislider/distribute/nouislider.min.js') }} "></script>
        <script src="{{ asset('assets/vendor/quill/dist/quill.min.js') }} "></script>
        <script src="{{ asset('assets/vendor/dropzone/dist/min/dropzone.min.js') }} "></script>
        <script src="{{ asset('assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }} "></script>
    @endif

    {{-- @livewireScripts --}}

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />

    <!-- Argon JS -->
    <script src="{{ asset('assets/js/argon.js?v=1.1.0') }}"></script>
    <!-- Demo JS - remove this in your project -->
    {{-- <script src="{{ asset('assets/js/demo.min.js') }}"></script> --}}
    @stack('scripts')

</body>

</html>
