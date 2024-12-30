<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOC | @yield('title')</title>
</head>

<body lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @yield('content')
</body>

</html>