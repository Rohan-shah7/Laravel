<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

  <div class="bg-white shadow-lg rounded-2xl w-full max-w-lg p-8">
    <h2 class="text-3xl font-bold text-center text-blue-600 mb-8">Contact Us</h2>

    <form action="#" method="POST" class="space-y-6">
      <!-- Name -->
      <div>
        <label for="name" class="block text-gray-700 mb-2">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Your name"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-gray-700 mb-2">Email Address</label>
        <input type="email" id="email" name="email" placeholder="you@example.com"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
      </div>

      <!-- Message -->
      <div>
        <label for="message" class="block text-gray-700 mb-2">Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Write your message here..."
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none" required></textarea>
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
        Send Message
      </button>
    </form>
  </div>

</body>
</html>
