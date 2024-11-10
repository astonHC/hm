<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')
        <p class="text-6xl">Welcome To HiveMind</p>
        <a href="{{ route('test') }}">Click Here</a>
    </body>
</html>
