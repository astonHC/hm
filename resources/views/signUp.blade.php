<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')
        <div class="w-full max-w-lg bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-4">
                User Registration
            </h2>
            <p class="text-sm text-gray-500 text-center mb-6">
                Fill in the form below to register. Already a user?
                <a href="#" class="text-blue-600 hover:underline">Log in</a>.
                Guest?
                <a href="#" class="text-blue-600 hover:underline">Guest View</a
                >.
            </p>

            <!-- Form -->
            <form action="{{ route('signup.store') }}" method="post">
                @csrf
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" />
                <br />
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" />
                <br />
                <label for="phone_number">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number" />
                <br />
                <label for="email_address">Email:</label>
                <input type="email" id="email_address" name="email_address" />
                <br />
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" />
                <br />
                <button type="submit">Sign Up</button>
            </form>

            <!-- Footer -->
            <p class="text-center text-sm text-gray-500 mt-6">
                By registering, you agree to our
                <a href="#" class="text-blue-600 hover:underline">Terms</a> and
                <a href="#" class="text-blue-600 hover:underline"
                    >Privacy Policy</a
                >.
            </p>
        </div>
    </body>
</html>
