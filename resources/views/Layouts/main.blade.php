<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Manirabona Patience" />
    @yield('metas')
    <meta name="rating" content="adult" />
    <meta name="rating" content="RTA-5042-1996-1400-1577-RTA" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="/storage/images/norldarch_logo_small.png">

    <title>Vitaway - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Global.css') }}">

    @vite(['resources/js/app.js'])

    @yield('styles')
</head>
<body>
    @yield('content')

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

    <!-- Vue JS -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    @yield('scripts')
</body>
</html>
