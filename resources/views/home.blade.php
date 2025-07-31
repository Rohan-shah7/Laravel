<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Basic Homepage</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-blue-600">MyWebsite</h1>
      <ul class="hidden md:flex space-x-6">
        <li><a href="{{ route('home') }}" class="hover:text-blue-600">Home</a></li>
        <li><a href="{{ route('about') }}" class="hover:text-blue-600">About</a></li>
        <li><a href="{{ route('team') }}" class="hover:text-blue-600">Team</a></li>
        <li><a href="{{ route('contact') }}" class="hover:text-blue-600">Contact</a></li>
      </ul>
     <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Login</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-20">
    <div class="max-w-7xl mx-auto text-center px-6">
      <h2 class="text-4xl md:text-5xl font-bold mb-4">Welcome to My Website</h2>
      <p class="text-lg md:text-xl mb-6">A clean and simple homepage built with HTML and Tailwind CSS.</p>
      <button class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-gray-100">
        Get Started
      </button>
    </div>
  </section>

  <!-- Features -->
  <section class="py-16">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h3 class="text-3xl font-bold mb-10">Our Features</h3>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
          <h4 class="text-xl font-semibold mb-2">🚀 Fast</h4>
          <p>Experience lightning-fast performance and modern design.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
          <h4 class="text-xl font-semibold mb-2">🔒 Secure</h4>
          <p>Built with security in mind to protect your data.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
          <h4 class="text-xl font-semibold mb-2">⚡ Responsive</h4>
          <p>Looks great on all devices, from mobile to desktop.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-gray-300 py-6 mt-12">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <p>&copy; 2025 MyWebsite. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
