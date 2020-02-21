<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <img class="mainNavImg" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/'" src="{{ asset('img/motionmeetings.gif') }}">
        @guest
            @if (Route::has('register'))
                <li class=navli">
                    <img class="navImg" src="{{ asset('img/login.png') }}" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/users/'">
                    <img class="navImg" src="{{ asset('img/register.png') }}" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/users/create'">
                    <img class="navImg" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/meetings'" src="{{ asset('img/book3.png') }}">
                    <img class="navImg" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/view'" src="{{ asset('img/view.png') }}">
                    <img class="navImg" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/profile'" src="{{ asset('img/defaultPPmedium.png') }}">
                </li>
            @endif
        @else
            <li class="navli">
                <img class="navImg" src="{{ asset('img/login.png') }}" onclick="window.location.href="{{ route('login') }}">
                <img class="navImg" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/meetings'" src="{{ asset('img/book3.png') }}">
                <img class="navImg" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/profile'" src="{{ asset('img/defaultPPmedium.png') }}">
            </li>
        @endguest
    </nav>
    @yield('content')
</body>
</html>
