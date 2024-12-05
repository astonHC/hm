<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ $product->product_name }}</title>
    </head>
    <body>
        @include('layouts.navbar')
        <a
            href="{{ route('products') }}"
            class="fas fa-arrow-left fa-4x p-5"
        ></a>
        <div class="flex justify-center">
            <div class="flex justify-center">
                <img class="" src="{{ asset('../Images/placeholder.avif') }}" />
            </div>
            <div class="inline-block justify-center">
                <h1 class="text-5xl pb-4">{{ $product->product_name }}</h1>
                <h1 class="text-5xl pb-4">{{ $product->price }}</h1>
            </div>
        </div>
    </body>
</html>
