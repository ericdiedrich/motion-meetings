<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <nav class="navbar">
        <button onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/meetings'" class="offset">Motion Meetings!</button>
        <div>
            <li class="navli">
                {{-- <button onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/meetings'"  class="raise">Home</button> --}}
                {{-- <button onclick="window.location.href='http:\/\/localhost:8888/mmorpg-ericdiedrich/public/login'" class="raise">Login</button> --}}
                {{-- <button onclick="window.location.href='http:\/\/localhost:8888/mmorpg-ericdiedrich/public/register'" class="raise">Register</button> --}}
            </li>
        </div>
    </nav>

    @yield('content')

</body>
</html>