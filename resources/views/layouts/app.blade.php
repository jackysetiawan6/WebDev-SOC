<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/dataTables.dataTables.css') }}">
    <script src="{{ asset('bootstrap-5.3.3-dist/dataTables.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.3-dist/jquery-3.7.1.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
    <title>SOC | @yield('title')</title>
</head>

<body lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @yield('content')
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('custom.js') }}"></script>
</body>

</html>