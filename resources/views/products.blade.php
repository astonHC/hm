<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')
        <p class="text-6xl">Products</p>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Product Name</th>
                    <th>Product type</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_type }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
