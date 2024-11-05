<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.navbar')
    <p class="text-9xl text-red-500">Hello World!</p>
    <div class="custom-diagonal-white-right-static"></div>
    <a href="{{ route('test') }}">Click Here</a>
</body>