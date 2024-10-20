<html>
  <head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <title>Virtree</title>
    <style>
      body {
        font-family: 'Roboto', sans-serif;
      }
      .image-container img {
            border-radius: 20px;
        }
    </style>
  </head>
    <!-- Header Section -->
    <header class="flex justify-between items-center py-3 px-8 bg-[#fefefe] sticky top-0 z-50 shadow-md" data-aos="zoom-out">
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
@endauth      </div>
  </header>
<body class="bg-white-100">
    <nav class="bg-yellow-100">

    <div class="container mx-auto py-12">
      <div class="flex flex-col md:flex-row items-center mb-12" data-aos="slide-right">
        <div class="image-container">
          <img alt="image 1" class="w-72 h-auto transform rotate-3" height="450" src="images/p1.png" width="300"/>
      </div>
      <div class="image-container">
          <img alt="image 2" class="w-72 h-auto transform -rotate-3" height="450" src="images/p2.png" width="300"/>
      </div>
      <div class="image-container">
          <img alt="image 3" class="w-72 h-auto transform rotate-3" height="450" src="images/p3.png" width="300"/>
      </div>
              <div class="md:ml-8 text-center md:text-left">
          <h2 class="text-3xl font-bold mb-4">
            Donasi Langsung
          </h2>
          <p class="text-lg mb-6">
            Berikan dukungan finansial untuk mendukung penanaman pohon di berbagai wilayah di dunia. Setiap rupiah yang Anda sumbangkan akan dikonversi menjadi bibit pohon dan ditanam di lokasi yang membutuhkan.
          </p>
          <a href="{{ route('donatur.create') }}" class="bg-yellow-500 text-white font-bold py-2 px-4 rounded">
            <button>-Donasi-</button>
        </a>
        </div>
      </div>

      <div class="flex flex-col md:flex-row items-center" data-aos="slide-left">
        <div class="md:mr-8 text-center md:text-left mb-6 md:mb-0">
          <h2 class="text-3xl font-bold mb-4">
            Jadilah Supporter Virtree!
          </h2>
          <p class="text-lg mb-6">
            Dapatkan poin menarik dengan menyelesaikan berbagai misi seru dan menantang! Setiap kali Anda berhasil menyelesaikan misi, Anda tidak hanya mendapatkan penghargaan, tetapi juga turut berkontribusi dalam upaya penanaman pohon di dunia nyata.
                    </p>
          <a href="{{ route('supporter.index') }}" class="bg-yellow-500 text-white font-bold py-2 px-4 rounded">
            <button>-Supporter-</button>
        </a>
            </div>
        <div class="flex space-x-4">
          <img alt="Image" class="rounded-lg shadow-lg" height="300" src={{ asset('images/p1.png') }} width="400"/>
        </div>
      </div>

      <div class="container mx-auto py-12" data-aos="slide-right">
        <div class="flex flex-col md:flex-row items-center mb-12">
          <div class="image-container">
            <img alt="image 1" class="w-72 h-auto transform rotate-3" height="450" src="images/p1.png" width="300"/>
        </div>
        <div class="image-container">
            <img alt="image 2" class="w-72 h-auto transform -rotate-3" height="450" src="images/p2.png" width="300"/>
        </div>
        <div class="image-container">
            <img alt="image 3" class="w-72 h-auto transform rotate-3" height="450" src="images/p3.png" width="300"/>
        </div>
  
        <div class="md:ml-8 text-center md:text-left">
          <h2 class="text-3xl font-bold mb-4">
            Gabunglah Sebagai Relawan
          </h2>
          <p class="text-lg mb-6">
            ami mencari relawan yang bersemangat untuk ikut serta dalam kegiatan penanaman pohon di dunia nyata. Hubungi kami untuk mengetahui lebih lanjut tentang kesempatan menjadi relawan Virtree dan ikut serta dalam menanam pohon secara langsung.          </p>
          <a href="{{ route('relawan.create') }}" class="bg-yellow-500 text-white font-bold py-2 px-4 rounded">
            <button>-Relawan-</button>
        </a>
        </div>
        </div>
    </div>
</nav>
<script>
  AOS.init({
  duration: 800, // Durasi animasi dalam milidetik
  easing: 'ease-in-out', // Jenis animasi (opsi: 'ease', 'linear', 'ease-in', 'ease-out', 'ease-in-out')
  once: true // Hanya animasikan elemen sekali saat pertama kali di-scroll
});
</script>

</body>
</html>