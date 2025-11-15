<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">

    <title>@yield('title', 'Connect Dashboard')</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="{{ asset('assets_admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets_admin/css/connect.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/css/dark_theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/css/custom.css') }}" rel="stylesheet">
</head>

<body>
<div class='loader'>
    <div class='spinner-grow text-primary' role='status'>
        <span class='sr-only'>Loading...</span>
    </div>
</div>

<div class="connect-container align-content-stretch d-flex flex-wrap">

    {{-- Sidebar --}}
    @include('admin.layouts.sidebar')

    <div class="page-container">

        {{-- Header --}}
        @include('admin.layouts.header')

        {{-- Content --}}
        <div class="page-content">
            @yield('content')
        </div>

        {{-- Footer --}}
        @include('admin.layouts.footer')

    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('assets_admin/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets_admin/plugins/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('assets_admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets_admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets_admin/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets_admin/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets_admin/plugins/blockui/jquery.blockUI.js') }}"></script>
<script src="{{ asset('assets_admin/plugins/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('assets_admin/plugins/flot/jquery.flot.time.min.js') }}"></script>
<script src="{{ asset('assets_admin/plugins/flot/jquery.flot.symbol.min.js') }}"></script>
<script src="{{ asset('assets_admin/plugins/flot/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('assets_admin/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('assets_admin/js/connect.min.js') }}"></script>
<script src="{{ asset('assets_admin/js/pages/dashboard.js') }}"></script>

@stack('scripts')
</body>
</html>
