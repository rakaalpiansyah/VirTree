<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Virtree</title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
 </head>
 <body class="bg-slate-300">
   <!-- Header Section -->
   <header class="flex justify-between items-center py-4 px-8 bg-[#fefefe] sticky top-0 z-50 shadow-md" data-aos="zoom-out">
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

    <!-- Centered Logo -->
    <a href="#" class="text-2xl font-bold text-[#1a1a1a] absolute left-1/2 transform -translate-x-1/2">Virtree</a>

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
  </nav>
  

<div class="container mx-auto px-4 py-8" data-aos="zoom-out">
    <div class="max-w-4xl mx-auto bg-white p-6 border border-gray-300 rounded-lg shadow-lg">
        <h2 class="text-3xl font-semibold text-center text-blue-600 mb-6">Sistem Misi (Supporter)</h2>

        <!-- Jenis-jenis Misi -->
        <div class="mb-6 p-4 border-l-4 border-blue-500 bg-gray-50">
            <h3 class="text-xl font-medium text-gray-800">a. Jenis-jenis Misi</h3>
            <p class="text-gray-700 mt-2">Supporter dapat menyelesaikan berbagai misi menarik untuk mendapatkan poin. Beberapa jenis misi yang dapat diikuti adalah:</p>
            <ul class="list-disc pl-6 mt-2 text-gray-700">
                <li>Menonton iklan</li>
                <li>Mengikuti akun media sosial Virtree</li>
                <li>Menyelesaikan kuis dan tantangan</li>
            </ul>
        </div>

        <!-- Mekanisme Penyelesaian Misi -->
        <div class="mb-6 p-4 border-l-4 border-green-500 bg-gray-50">
            <h3 class="text-xl font-medium text-gray-800">b. Mekanisme Penyelesaian Misi</h3>
            <p class="text-gray-700 mt-2">Supporter perlu mengikuti arahan yang diberikan pada setiap misi untuk menyelesaikannya dan mendapatkan poin. Pastikan mengikuti langkah-langkah yang tercantum dengan cermat untuk mendapatkan poin yang maksimal.</p>
        </div>

        <!-- Sistem Reward -->
        <div class="mb-6 p-4 border-l-4 border-yellow-500 bg-gray-50">
            <h3 class="text-xl font-medium text-gray-800">c. Sistem Reward</h3>
            <p class="text-gray-700 mt-2">Setiap misi yang diselesaikan akan memberikan poin. Poin yang terkumpul dapat ditukarkan untuk menanam pohon di dunia nyata. Setiap <strong>20 poin</strong> akan ditukarkan untuk menanam satu pohon.</p>
            <p class="text-gray-700 mt-2">Misalnya, jika Anda berhasil menyelesaikan 3 misi, dan mendapatkan total 20 poin, Anda dapat menanam 1 pohon. Poin yang telah ditukarkan untuk penanaman pohon tidak dapat dikembalikan.</p>
        </div>

    </div>
</div>

<section class="container mx-auto py-8" data-aos="zoom-out">
    <div class="grid grid-cols-2 gap-6 justify-items-center">
        <!-- Jenis-Jenis Misi -->
        <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col items-center justify-between w-full max-w-sm">
            <i class="fas fa-user-tie text-4xl text-yellow-500 mb-4"></i>
            <h3 class="text-xl font-bold mb-2">Jenis-Jenis Misi</h3>
            <a href="{{ url('/supporter/jenis-misi') }}">
                <button class="mt-4 bg-yellow-500 text-white font-bold py-2 px-6 rounded-full hover:bg-yellow-600">
                    LIHAT
                </button>
            </a>
        </div>

        <!-- Penukaran Point -->
        <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col items-center justify-between w-full max-w-sm">
            <i class="fas fa-hand-holding-usd text-4xl text-yellow-500 mb-4"></i>
            <h3 class="text-xl font-bold mb-2">Penukaran Point</h3>
            <a href="{{ url('/supporter/point') }}">
                <button class="mt-4 bg-yellow-500 text-white font-bold py-2 px-6 rounded-full hover:bg-yellow-600">
                    LIHAT
                </button>
            </a>
        </div>
    </div>
</section>
<script>
    AOS.init({
    duration: 800, // Durasi animasi dalam milidetik
    easing: 'ease-in-out', // Jenis animasi (opsi: 'ease', 'linear', 'ease-in', 'ease-out', 'ease-in-out')
    once: true // Hanya animasikan elemen sekali saat pertama kali di-scroll
  });
  </script>
  
  </body>
</html>