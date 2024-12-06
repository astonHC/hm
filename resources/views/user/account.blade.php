<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')
        <p class="text-6xl">Your Account</p>

        <a href="{{ route('logout') }}">Logout</a>
    </body>
</html>
