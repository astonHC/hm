<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')

        <div class="flex justify-center my-12"><p class="m-[10px] text-6xl">Welcome To HiveMind</p></div>
        
    </div>
    <div class="categories w-screen">
        <ul class="list-none flex justify-between mt-1 mx-4">
            <li>
                <p>SkinCare</p>
            </li>
            <li>
                <p>Health</p>
            </li>
            <li>
                <p>Beauty</p>
            </li>
            <li>
                <p>Haircare</p>
            </li>
            <li>
                <p>Merch</p>
            </li>
        </ul>
    </div>
    <div class="wrapper">
        <div class="track">
            <div class="logo">
                <img src="{{ asset('../Images/placeholder.avif') }}"/>
            </div>
            <div class="logo">
                <img src="{{ asset('../Images/placeholder.avif') }}"/>
            </div>
            <div class="logo">
                <img src="{{ asset('../Images/placeholder.avif') }}"/>
            </div>
            <div class="logo">
                <img src="{{ asset('../Images/placeholder.avif') }}"/>
            </div>
            <div class="logo">
                <img src="{{ asset('../Images/placeholder.avif') }}"/>
            </div>
            
            </div>
        </div>
    </div>
    </body>
</html>
