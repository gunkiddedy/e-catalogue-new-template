<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <title>Katalogi</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> --}}

    <link href="//db.onlinewebfonts.com/c/0b51833ff62e4af8acb5fd3e2bf59e97?family=SF+Pro+Display" rel="stylesheet" type="text/css"/>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sf-pro">
    <div id="app" class="bg-gray-100">
        @yield('content')
    </div>
</body>
</html>
