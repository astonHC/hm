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

        <form action="{{ route('products') }}" method="GET">
            <select name="filter" onchange="this.form.submit()">
                <option>Select</option>
                <option value="Skincare">Skincare</option>
                <option value="Health">Health</option>
                <option value="Beauty">Beauty</option>
                <option value="Haircare">Haircare</option>
                <option value="Merch">Merch</option>
            </select>
        </form>

        @if(count($products) === 0)
        <p>No products found</p>
        @else

        <div class="grid grid-cols-4">
            @foreach($products as $product)
            <a
                ><div>
                    <h1>{{$product->product_name}}</h1>
                    <img
                        class="size-[175px]"
                        src="{{ asset('../Images/placeholder.avif') }}"
                    />
                    <p>Product type: {{$product->product_type}}</p>
                    <p>Price: {{$product->price}}</p>
                </div></a
            >

            @endforeach
        </div>
        @endif
    </body>
</html>
