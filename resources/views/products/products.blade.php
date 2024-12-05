<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')
        <p class="text-6xl">Products</p>

        <form action="{{ route('products') }}" method="GET">
            <input type="text" name="product_name" />
            <br />
            <button type="submit">Submit</button>
        </form>

        <select name="filter">
            <option value="Skincare">Skincare</option>
            <option value="Health">Health</option>
            <option value="Beauty">Beauty</option>
            <option value="Haircare">Haircare</option>
            <option value="Merch">Merch</option>
        </select>

        @if(count($products) === 0)
        <p>No products found</p>
        @else

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
        @endif
    </body>
</html>
