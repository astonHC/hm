<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')

        <main>
            <!-- add a backdrop -->
            <section class="bg-white py-20 bg-cover bg-center" style="background-image: url('{{ asset('../Images/hd bee backdrop lols.jpeg') }}');">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-bold text-white mb-4">Welcome to HiveMind</h1>
                <p class="text-white text-lg mb-8">Bee a part of a kinder world with one click</p>
                <button class="bg-yellow-600 text-white px-6 py-3 rounded-md hover:bg-yellow-700"><a href="{{ route('products') }}">Shop Now</a></button>
                <button class="bg-yellow-600 text-white px-6 py-3 rounded-md hover:bg-yellow-700"><a href="{{ route('about') }}">Learn More About Us</a></button>
            </div>
            </section>


            <section class="py-12">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Shop Our Products by Category</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-3">
                <div class="bg-white rounded-lg shadow-md">
                    <img src="{{ asset('../Images/placeholder.avif') }}" alt="Health" class="w-full h-64 object-cover rounded-t-lg">
                    <div class="p-4">
                    <h3 class="text-lg font-medium text-gray-900">Health</h3>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md">
                    <img src="{{ asset('../Images/placeholder.avif') }}" alt="Skincare" class="w-full h-64 object-cover rounded-t-lg">
                    <div class="p-4">
                    <h3 class="text-lg font-medium text-gray-900">Skincare</h3>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md">
                    <img src="{{ asset('../Images/placeholder.avif') }}" alt="Beauty" class="w-full h-64 object-cover rounded-t-lg">
                    <div class="p-4">
                    <h3 class="text-lg font-medium text-gray-900">Beauty</h3>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md">
                    <img src="{{ asset('../Images/placeholder.avif') }}" alt="Haircare" class="w-full h-64 object-cover rounded-t-lg">
                    <div class="p-4">
                    <h3 class="text-lg font-medium text-gray-900">Haircare</h3>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md">
                    <img src="{{ asset('../Images/placeholder.avif') }}" alt="Merchandise" class="w-full h-64 object-cover rounded-t-lg">
                    <div class="p-4">
                    <h3 class="text-lg font-medium text-gray-900">Merchandise</h3>
                    </div>
                </div>
                </div>
            </div>
            </section>
        </main>

        @include('layouts.footer')
    </body>
</html>
