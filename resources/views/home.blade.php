<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')
        <p class="text-9xl text-red-500">Hello World!</p>
        <a href="{{ route('test') }}">Click Here</a>
    </body>
</html>
