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
                <div class="inline-block">
                    <p class="text-6xl">Checkout</p>
                    <form method="post">
                        @csrf
                        <input
                            type="text"
                            name="first_name"
                            value="firstName"
                        />
                        <br />
                        <input type="text" name="last_name" value="lastName" />
                        <br />
                        <input type="text" name="last_name" value="lastName" />
                    </form>
                </div>
            </div>
        </main>

        @include('layouts.footer')
    </body>
</html>
