<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body data-aos="zoom-out">
    <!-- Header Section -->
    <header class="flex justify-between items-center py-2 px-5 bg-[#fefefe] sticky top-0 z-50 shadow-md" data-aos="zoom-out">
        <!-- Left Navigation Links -->
        <div class="flex items-center">
            <a href="{{ url('/') }}" 
                class="text-gray-600 hover:text-gray-800 font-medium py-2 px-2 rounded-lg transition-colors" 
                :class="{ 'text-gray-900 font-semibold': currentPath === '{{ url('/') }}' }">Home</a>
            <a href="{{ url('/edukasi') }}" 
                class="text-gray-600 hover:text-gray-800 font-medium py-2 px-2 rounded-lg transition-colors" 
                :class="{ 'text-gray-900 font-semibold': currentPath === '{{ url('/edukasi') }}' }">Edukasi</a>
            <a href="{{ url('/donasi') }}" 
                class="text-gray-600 hover:text-gray-800 font-medium py-2 px-2 rounded-lg transition-colors" 
                :class="{ 'text-gray-900 font-semibold': currentPath === '{{ url('/donasi') }}' }">Donasi</a>
        </div>
  
        <!-- Centered Logo -->
        <a href="#" class="text-2xl font-bold text-[#1a1a1a] absolute left-1/2 transform -translate-x-1/2">Virtree</a>
  
        <!-- Right Authentication and Search -->
        <div class="flex items-center space-x-6">
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
  
    <div class="container">
        @yield('content')
    </div>
    <div class="mt-6 text-center">
        <a href="{{ route('supporter.index') }}" class="bg-gray-600 text-white px-6 py-3 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Kembali
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        AOS.init({
        duration: 800, // Durasi animasi dalam milidetik
        easing: 'ease-in-out', // Jenis animasi (opsi: 'ease', 'linear', 'ease-in', 'ease-out', 'ease-in-out')
        once: true // Hanya animasikan elemen sekali saat pertama kali di-scroll
      });
      </script>
      
</body>
</html>
