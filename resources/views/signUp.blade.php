<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')
        <!-- <div class="w-full max-w-lg bg-white rounded-lg shadow-lg p-8">
            
        </div> -->
        <!-- <h2 class="text-2xl font-bold text-gray-800 text-center mb-4">
                User Registration
            </h2>
            <p class="text-sm text-gray-500 text-center mb-6">
                Fill in the form below to register. Already a user?
                <a href="#" class="text-blue-600 hover:underline">Log in</a>.
                Guest?
                <a href="#" class="text-blue-600 hover:underline">Guest View</a
                >.
            </p>
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
            </form> -->

        <main class="mt-12">
            <div class="flex justify-center">
                <h1 class="text-4xl font-bold text-gray-800 mb-6">Sign Up</h1>
            </div>

            <div class="flex justify-center">
                <form
                    action="{{ route('signup.store') }}"
                    method="post"
                    class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-96 max-w-sm"
                >
                    @csrf

                    <div class="mb-4">
                        <label
                            for="first_name"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >First Name:</label
                        >
                        <input
                            type="text"
                            name="first_name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            maxlength="50"
                            value="{{ old('first_name') }}"
                            placeholder="First Name"
                            autofocus
                        />
                    </div>

                    <div class="mb-4">
                        <label
                            for="first_name"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >Last Name:</label
                        >
                        <input
                            type="text"
                            name="last_name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            maxlength="50"
                            value="{{ old('last_name') }}"
                            placeholder="Last Name"
                            autofocus
                        />
                    </div>

                    <div class="mb-4">
                        <label
                            for="email_address"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >Email:</label
                        >
                        <input
                            type="email"
                            name="email_address"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            maxlength="50"
                            value="{{ old('email_address') }}"
                            placeholder="Email"
                            autofocus
                        />
                    </div>

                    <div class="mb-4">
                        <label
                            for="phone_number"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >Phone Number:</label
                        >
                        <input
                            type="text"
                            name="phone_number"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            maxlength="50"
                            value="{{ old('phone_number') }}"
                            placeholder="Phone Number"
                            autofocus
                        />
                    </div>

                    <div class="mb-6">
                        <label
                            for="password"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >Password:</label
                        >
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Enter your password"
                        />
                    </div>

                    <div class="flex items-center justify-between">
                        <button
                            type="submit"
                            class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        >
                            Sign Up
                        </button>
                        <button
                            type="reset"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        >
                            Clear
                        </button>
                    </div>

                    <div class="mt-4 text-center">
                        <a
                            href="{{ route('login') }}"
                            class="text-blue-500 hover:underline text-sm"
                        >
                            Already a customer? Login here
                        </a>
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>
