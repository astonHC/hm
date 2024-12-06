<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')
        <p class="text-6xl">Products</p>

        <form action="{{ route('products') }}" method="GET">
            <input
                type="text"
                name="product_name"
                value="{{ request('product_name') }}"
            />
            <br />
            <button type="submit">Submit</button>
        </form>

        <!-- <form action="{{ route('products') }}" method="GET">
                <select name="filter" onchange="this.form.submit()">
                <option value="none"{{ request('filter') == 'none' ? 'selected' : '' }}>None</option>
                <option value="Skincare" {{ request('filter') == 'Skincare' ? 'selected' : '' }}>Skincare</option>
                <option value="Health" {{ request('filter') == 'Health' ? 'selected' : '' }}>Health</option>
                <option value="Beauty" {{ request('filter') == 'Beauty' ? 'selected' : '' }}>Beauty</option>
                <option value="Haircare" {{ request('filter') == 'Haircare' ? 'selected' : '' }}>Haircare</option>
                <option value="Merch" {{ request('filter') == 'Merch' ? 'selected' : '' }}>Merch</option>
            </select>
        </form> -->

        @if(count($products) === 0)
        <p>No products found</p>
        @else

        <div class="flex justify-center">
            <div class="grid grid-cols-5 gap-0 w-1/2">
                @foreach($products as $product)
                <a href="{{route('products.show', $product->id)}}" class="w-fit"
                    ><div class="size-fit m-[3px]">
                        <h1 class="text-center">
                            {{strtoupper($product->product_name)}}
                        </h1>
                        <img
                            class="w-[351px] h-[430px]"
                            src="{{ asset('../Images/placeholder.avif') }}"
                        />
                        <p>Product type: {{$product->product_type}}</p>
                        <p>Price: {{$product->price}}</p>
                    </div></a
                >

                @endforeach
            </div>
        </div>

        @endif @include('layouts.footer')
    </body>
</html>
