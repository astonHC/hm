<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')
        <div class="categories w-screen">
            <ul class="list-none flex justify-between mt-1 mx-1">
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
  
        
        <p class="m-[10px] text-6xl">Welcome To HiveMind</p>
    </body>
</html>
