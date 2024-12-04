<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')
        <p class="text-6xl">Products</p>

        <form action="{{ route('products') }}" method="GET">
            <input type="text" name="product_name" required />
            <br />
            <button type="submit">Submit</button>
        </form>

        <div class="grid grid-cols-4">
            @foreach($products as $product)
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
