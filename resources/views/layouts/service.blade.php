<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="icon" href="{{ asset('img/logo.ico') }}" type="image/x-icon" />

    <title>Desa Sukamaju | @yield('title')</title>

    <style>
        .navbar-green {
            background-color: #51839C !important;
        }

        .bg-green {
            background-color: #51839C !important;
            color: #FFFFFF;
        }
    </style>

    @stack('styles')
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-green bg-green py-4">
        <h3 class="text-bold mx-auto">@yield('judul')</h3>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    @stack('scripts')
</body>

</html>
