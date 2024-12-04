<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')
        <p class="text-6xl">Products</p>

        <div class="grid grid-cols-4">
            @foreach($product as $product)
            <div>
                <h1>{{$product->product_name}}</h1>
                <img
                    class="size-[175px]"
                    src="{{ asset('../Images/placeholder.avif') }}"
                />
                <p>Product type: {{$product->product_type}}</p>
                <p>Price: {{$product->price}}</p>
            </div>
            @endforeach
        </div>
    </body>
</html>
