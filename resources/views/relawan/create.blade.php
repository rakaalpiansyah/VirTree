<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Relawan Penanaman</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <style>
        body {
          font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Header Section -->
    <header class="flex justify-between items-center py-4 px-8 bg-[#fefefe] sticky top-0 z-50 shadow-md" data-aos="zoom-out">
        <div class="flex items-center">
            <a href="{{ url('/') }}" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition-colors">Home</a>
            <a href="{{ url('/edukasi') }}" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition-colors">Edukasi</a>
            <a href="{{ url('/donasi') }}" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition-colors">Donasi</a>
        </div>
        <a href="#" class="text-2xl font-bold text-[#1a1a1a] absolute left-1/2 transform -translate-x-1/2">Virtree</a>
        <div class="flex items-center space-x-6">
            @guest
                <a href="{{ route('login') }}" class="text-[#1a1a1a] hover:text-[#333] transition duration-300">Log in</a>
                <a href="{{ route('register') }}" class="px-4 py-2 bg-[#1a1a1a] text-white rounded-full hover:bg-[#333] transition duration-300">Sign up</a>
            @endguest

            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="px-4 py-2 border-2 border-black text-gray rounded-full hover:bg-[#333] transition duration-300">Logout</button>
                </form>
            @endauth  
        </div>
    </header>  

    <div class="container mx-auto px-4 py-8" data-aos="zoom-out">
        <div class="max-w-4xl mx-auto bg-white p-6 border border-gray-300 rounded-lg shadow-lg">
            <h2 class="text-3xl font-semibold text-center text-purple-600 mb-6">Sistem Penanaman (Relawan)</h2>

            <!-- Proses Observasi Lokasi -->
            <div class="mb-6 p-4 border-l-4 border-purple-500 bg-gray-50">
                <h3 class="text-xl font-medium text-gray-800">a. Proses Observasi Lokasi</h3>
                <p class="text-gray-700 mt-2">Relawan Virtree akan membantu dalam proses observasi lokasi penanaman pohon. Mereka akan melakukan survei untuk memastikan bahwa lokasi yang dipilih sesuai dengan kebutuhan dan kondisi lingkungan. Tujuannya adalah memastikan bahwa penanaman pohon dapat memberikan dampak yang maksimal terhadap lingkungan dan masyarakat sekitar.</p>
            </div>

            <!-- Mekanisme Penanaman -->
            <div class="mb-6 p-4 border-l-4 border-orange-500 bg-gray-50">
                <h3 class="text-xl font-medium text-gray-800">b. Mekanisme Penanaman</h3>
                <p class="text-gray-700 mt-2">Relawan Virtree akan terlibat langsung dalam proses penanaman pohon. Proses ini mencakup berbagai langkah berikut:</p>
                <ul class="list-disc pl-6 mt-2 text-gray-700">
                    <li>Menanam bibit pohon di lokasi yang telah disetujui.</li>
                    <li>Merawat pohon dengan memberi air, pemangkasan, dan pemupukan yang tepat.</li>
                    <li>Memastikan bahwa pohon tumbuh dengan baik, termasuk pengawasan terhadap kondisi lingkungan dan tanaman.</li>
                </ul>
            </div>

            <!-- Sistem Pelaporan -->
            <div class="mb-6 p-4 border-l-4 border-green-500 bg-gray-50">
                <h3 class="text-xl font-medium text-gray-800">c. Sistem Pelaporan</h3>
                <p class="text-gray-700 mt-2">Relawan Virtree akan memberikan laporan berkala tentang proses penanaman pohon. Laporan ini dapat berupa:</p>
                <ul class="list-disc pl-6 mt-2 text-gray-700">
                    <li>Foto-foto dari lokasi penanaman pohon.</li>
                    <li>Video yang menunjukkan perkembangan pohon yang telah ditanam.</li>
                    <li>Catatan tertulis yang memberikan informasi tentang perkembangan pohon dan tantangan yang dihadapi selama proses penanaman.</li>
                </ul>
                <p class="text-gray-700 mt-2">Laporan ini sangat penting untuk memastikan transparansi dan memberikan informasi kepada semua pihak yang terlibat dalam proyek penanaman pohon.</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto p-6 bg-gray-200 shadow-md rounded-lg mt-10">
        <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Formulir Relawan untuk Penanaman</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 mb-6 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('relawan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        
                <!-- Nama -->
                <div>
                    <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama</label>
                    <input type="text" name="nama" id="nama" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
        
                <!-- Email -->
                <div>
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
        
                <!-- Lokasi Observasi -->
                <div class="col-span-2">
                    <label for="lokasi_observasi" class="block text-gray-700 font-semibold mb-2">Lokasi Observasi</label>
                    <textarea name="lokasi_observasi" id="lokasi_observasi" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4" required></textarea>
                </div>
        
                <!-- Mekanisme Penanaman -->
                <div class="col-span-2">
                    <label for="mekanisme_penanaman" class="block text-gray-700 font-semibold mb-2">Mekanisme Penanaman</label>
                    <textarea name="mekanisme_penanaman" id="mekanisme_penanaman" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4" required></textarea>
                </div>
        
                <!-- Unggah Foto -->
                <div class="col-span-2">
                    <label for="foto" class="block text-gray-700 font-semibold mb-2">Unggah Foto</label>
                    <input type="file" name="foto" id="foto" accept="image/*" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
        
                <!-- Unggah Laporan (PDF, DOCX, dll.) -->
                <div class="col-span-2">
                    <label for="laporan" class="block text-gray-700 font-semibold mb-2">Unggah Laporan (PDF, DOCX, dll.)</label>
                    <input type="file" name="laporan" id="laporan" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
        
            </div>
            <div class="mt-6 text-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Ajukan</button>
            </div>
        </form>
        
        
    </div>
    <script>
        AOS.init({
        duration: 800, // Durasi animasi dalam milidetik
        easing: 'ease-in-out', // Jenis animasi (opsi: 'ease', 'linear', 'ease-in', 'ease-out', 'ease-in-out')
        once: true // Hanya animasikan elemen sekali saat pertama kali di-scroll
      });
      </script>
      
</body>
</html>
