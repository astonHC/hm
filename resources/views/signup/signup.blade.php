<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">
  <div class="w-full max-w-lg bg-white rounded-lg shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-4">User Registration</h2>
    <p class="text-sm text-gray-500 text-center mb-6">
      Fill in the form below to register. Already a user? <a href="#" class="text-blue-600 hover:underline">Log in</a>. Guest? <a href="#" class="text-blue-600 hover:underline">Guest View</a>.
    </p>

    <!-- Form -->
    <form action="{{ route('signup') }}" method="post">
      @csrf

      @if ($errors->any())
        <div class="mb-4 text-red-500">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <!-- First Name -->
      <div class="mb-4">
        <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
      </div>

      <!-- Last Name -->
      <div class="mb-4">
        <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
      </div>

      <!-- Phone Number -->
      <div class="mb-4">
        <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
        <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
      </div>

      <!-- Email -->
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
      </div>

      <!-- Confirm Email -->
      <div class="mb-4">
        <label for="email_confirmation" class="block text-sm font-medium text-gray-700">Confirm Email</label>
        <input type="email" id="email_confirmation" name="email_confirmation" required
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
      </div>

      <!-- Password -->
      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
      </div>

      <!-- Confirm Password -->
      <div class="mb-4">
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
      </div>

      <!-- Submit and Reset Buttons -->
      <div class="flex space-x-4">
        <button type="submit"
          class="w-full py-2 px-4 bg-yellow-400 text-white rounded-lg shadow-md hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
          Register
        </button>
        <button type="reset"
          class="w-full py-2 px-4 bg-gray-200 text-gray-700 rounded-lg shadow-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">
          Clear
        </button>
      </div>
    </form>

    <!-- Footer -->
    <p class="text-center text-sm text-gray-500 mt-6">
      By registering, you agree to our <a href="#" class="text-blue-600 hover:underline">Terms</a> and <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>.
    </p>
  </div>
</body>
</html>
