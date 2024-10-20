<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Donasi</title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <style>
     body {
              font-family: 'Nunito', sans-serif;
          }
    </style>
 
</head>
<body class="bg-slate-300">
       <!-- Header Section -->
   <header class="flex justify-between items-center py-4 px-8 bg-transparent sticky top-0 z-50 shadow-md transition-all duration-300" data-aos="zoom-out">
    <!-- Left Navigation Links -->
    <div class="flex items-center">
        <a href="{{ url('/') }}" 
            class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition-colors" 
            :class="{ 'text-gray-900 font-semibold': currentPath === '{{ url('/') }}' }">Home</a>
        <a href="{{ url('/edukasi') }}" 
            class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition-colors" 
            :class="{ 'text-gray-900 font-semibold': currentPath === '{{ url('/edukasi') }}' }">Edukasi</a>
        <a href="{{ url('/donasi') }}" 
            class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition-colors" 
            :class="{ 'text-gray-900 font-semibold': currentPath === '{{ url('/donasi') }}' }">Donasi</a>
    </div>

    <!-- Authentication Links -->
    @guest
        <!-- Links visible only to guests (users not logged in) -->
        <a href="{{ route('login') }}" class="text-[#1a1a1a] hover:text-[#333] transition duration-300">Log in</a>
        <a href="{{ route('register') }}" class="px-4 py-2 bg-[#1a1a1a] text-white rounded-full hover:bg-[#333] transition duration-300">Sign up</a>
    @endguest

    @auth
        <!-- Link visible only to authenticated users -->
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="px-4 py-2 border-2 border-black text-gray rounded-full hover:bg-[#333] transition duration-300">
                Logout
            </button>
        </form>
    @endauth
</div>
</header>

<div class="container mx-auto px-4 py-8" data-aos="zoom-out">
    <div class="max-w-4xl mx-auto bg-white p-6 border border-gray-300 rounded-lg shadow-lg">
        <h2 class="text-3xl font-semibold text-center text-green-600 mb-6">Sistem Donasi (Donatur)</h2>

        <!-- Mekanisme Donasi -->
        <div class="mb-6 p-4 border-l-4 border-green-500 bg-gray-50">
            <h3 class="text-xl font-medium text-gray-800">a. Mekanisme Donasi</h3>
            <p class="text-gray-700 mt-2">Donatur dapat memberikan donasi secara langsung melalui platform Virtree. Donasi dapat dilakukan dengan berbagai metode pembayaran yang aman dan mudah.</p>
        </div>

        <!-- Sistem Feedback -->
        <div class="mb-6 p-4 border-l-4 border-blue-500 bg-gray-50">
            <h3 class="text-xl font-medium text-gray-800">b. Sistem Feedback</h3>
            <p class="text-gray-700 mt-2">Donatur akan menerima laporan berkala tentang perkembangan pohon yang ditanam dengan donasi mereka. Laporan ini dapat berupa foto, video, atau informasi tentang dampak positif penanaman pohon di lokasi tersebut.</p>
        </div>

    </div>
</div>

<main class="flex flex-col items-center p-6 bg-cream" data-aos="zoom-out">
  <!-- Form Section -->
  <h1 class="text-3xl font-bold text-navy mb-8">Form Donasi</h1>

  @if(session('success'))
      <p class="text-green-500 mb-4">{{ session('success') }}</p>
  @endif

  <!-- Donasi Form -->
  <form action="{{ route('donatur.store') }}" method="POST" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
      @csrf

      <!-- Nama Input -->
      <div class="mb-4">
          <label for="nama" class="block text-sm font-semibold text-navy">Nama:</label>
          <input type="text" id="nama" name="nama" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-navy" placeholder="Masukkan Nama" required>
      </div>

      <!-- Alamat Input -->
      <div class="mb-4">
          <label for="alamat" class="block text-sm font-semibold text-navy">Alamat:</label>
          <textarea id="alamat" name="alamat" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-navy" placeholder="Masukkan Alamat" required></textarea>
      </div>

      <!-- Email Input -->
      <div class="mb-4">
          <label for="email" class="block text-sm font-semibold text-navy">Email:</label>
          <input type="email" id="email" name="email" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-navy" placeholder="Masukkan Email" required>
      </div>

      <!-- Feed Input -->
      <div class="mb-4">
          <label for="feedback" class="block text-sm font-semibold text-navy">FeedBack:</label>
          <input type="feedback" id="feedback" name="feedback" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-navy" placeholder="FeedBack Yang Anda Mau?" required>
      </div>


      <!-- Jumlah Donasi Input -->
      <div class="mb-6">
          <label for="jumlah_donasi" class="block text-sm font-semibold text-navy">Jumlah Donasi:</label>
          <input type="number" id="jumlah_donasi" name="jumlah_donasi" min="1000" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-navy" placeholder="Masukkan Jumlah Donasi" required>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="w-full bg-navy text-white py-3 rounded-full font-semibold hover:bg-blue-800 focus:outline-none">
          Donasi Sekarang
      </button>
  </form>

  <!-- Link to Donasi List -->
  <br>
  <a href="{{ route('donatur.index') }}" class="text-navy font-semibold text-lg hover:underline">Lihat Daftar Donasi</a>
</main>
<script>
    AOS.init({
    duration: 800, // Durasi animasi dalam milidetik
    easing: 'ease-in-out', // Jenis animasi (opsi: 'ease', 'linear', 'ease-in', 'ease-out', 'ease-in-out')
    once: true // Hanya animasikan elemen sekali saat pertama kali di-scroll
  });
  </script>
  
</body>
</html>
