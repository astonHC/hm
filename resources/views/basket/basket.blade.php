<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header></header>
        @include('layouts.navbar')

        <main>
            <div class="flex justify-center m-4">
                <p class="text-6xl">Basket</p>
                <div class="inline-block">
                    @foreach($basketItems as $basketItem)
                    <div class="bg-amber">
                        <p>{{ $basketItem->product_name }}</p>
                        <p>Price: {{$basketItem->price}}</p>
                        <p>quantity: {{$basketItem->quantity}}</p>
                        <form
                            action="{{ route('basket.updateQuantity') }}"
                            method="post"
                        >
                            <input type="text" name="quantity" />
                            <button type="submit">Update quantity</button>
                        </form>
                    </div>
                    <br />
                    @endforeach
                </div>
            </div>
        </main>

        @include('layouts.footer')
    </body>
</html>
