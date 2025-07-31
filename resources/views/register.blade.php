<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

  <div class="bg-white shadow-lg rounded-2xl w-full max-w-md p-8">
    <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Register</h2>

    <form action="#" method="POST" class="space-y-5">
      <!-- Name -->
      <div>
        <label for="name" class="block text-gray-700 mb-2">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-gray-700 mb-2">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-gray-700 mb-2">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
        Register
      </button>
    </form>

    <!-- Extra Links -->
    <p class="text-center text-gray-600 text-sm mt-6">
      Already have an account?
      <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
    </p>
  </div>

</body>
</html>
