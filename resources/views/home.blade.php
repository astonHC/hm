<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')
        <!-- <div class="flex justify-between [&>*]:h-[50px] [&>*]:bg-amber [&>*]:w-screen [&>*]:mx-[2px] [&>*]:rounded [&>*]:text-center [&>*]:justify-center mt-1 mx-1">
            <div><p>Skincare</p></div>
            <div><p>Health</p></div>
            <div><p>Beauty</p></div>
            <div><p>Haircare</p></div>
            <div><p>Merch</p></div>
        </div> -->
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
