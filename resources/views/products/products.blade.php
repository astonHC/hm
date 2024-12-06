<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')
        <div class="justify-center py-5">
            <p class="text-6xl text-center">Shop us</p>
        </div>

        <div class="flex justify-center">
            <form action="{{ route('products') }}" method="GET">
                <input
                    type="text"
                    name="product_name"
                    value="{{ request('product_name') }}"
                    class="w-[75vw] rounded"
                />
                <br />
            </form>
        </div>

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
            <div class="grid grid-cols-5 gap-0 w-3/4">
                @foreach($products as $product)
                <a href="{{route('products.show', $product->id)}}" class="w-fit"
                    ><div class="size-full p-1">
                        <h1 class="text-center">
                            {{strtoupper($product->product_name)}}
                        </h1>
                        <img
                            class="h-[100%]"
                            src="{{ asset('Images/product images/' . $product->product_name . '.png') }}"
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
