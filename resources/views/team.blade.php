<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Team</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <header class="bg-blue-600 text-white py-6 shadow-md">
    <h1 class="text-3xl font-bold text-center">Meet Our Team</h1>
  </header>

  <!-- Team Section -->
  <section class="py-12 px-6">
    <div class="max-w-6xl mx-auto grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

      <!-- Team Member -->
      <div class="bg-white shadow-md rounded-xl p-6 text-center hover:shadow-lg transition">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Doe"
             class="w-32 h-32 mx-auto rounded-full mb-4 object-cover">
        <h3 class="text-xl font-semibold text-gray-800">John Doe</h3>
        <p class="text-gray-600">CEO & Founder</p>
      </div>

      <!-- Team Member -->
      <div class="bg-white shadow-md rounded-xl p-6 text-center hover:shadow-lg transition">
        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Jane Smith"
             class="w-32 h-32 mx-auto rounded-full mb-4 object-cover">
        <h3 class="text-xl font-semibold text-gray-800">Jane Smith</h3>
        <p class="text-gray-600">Lead Developer</p>
      </div>

      <!-- Team Member -->
      <div class="bg-white shadow-md rounded-xl p-6 text-center hover:shadow-lg transition">
        <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Mike Johnson"
             class="w-32 h-32 mx-auto rounded-full mb-4 object-cover">
        <h3 class="text-xl font-semibold text-gray-800">Mike Johnson</h3>
        <p class="text-gray-600">UI/UX Designer</p>
      </div>

    </div>
  </section>

</body>
</html>
