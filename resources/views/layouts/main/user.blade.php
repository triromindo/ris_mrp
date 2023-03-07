<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') | RIS MRP</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon/favicon.ico') }}" />

    {{-- General CSS Files --}}
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/fontawesome/css/all.min.css') }}">

    {{-- datatables --}}
    <link rel="stylesheet" href="{{ asset('libs/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">

    {{-- Template CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bscanvas.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.min.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            {{-- Navbar --}}
            @include('layouts.partials.user.navbar')
            {{-- Navbar --}}

            {{-- Sidebar --}}
            @include('layouts.partials.user.sidebar')
            {{-- Sidebar --}}

            {{-- Main Content --}}
            @yield('content')
            {{-- Main Content --}}

            {{-- Footer --}}
            @include('layouts.partials.user.footer')
            {{-- Footer --}}

        </div>
    </div>

    {{-- General JS Scripts --}}
    <script src="{{ asset('libs/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/popper.min.js') }}"></script>
    <script src="{{ asset('libs/tooltip.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('libs/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('libs/moment.min.js') }}"></script>
    <script src="{{ asset('js/stisla.min.js') }}"></script>

    {{-- datatables --}}
    <script src="{{ asset('libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('libs/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('libs/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('libs/jquery-ui/jquery-ui.min.js') }}"></script>

    {{-- Template JS File --}}
    <script src="{{ asset('js/scripts.min.js') }}"></script>
    <script src="{{ asset('js/bscanvas.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
</body>

</html>
