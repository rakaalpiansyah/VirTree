<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Virtree</title>
    
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-white" x-data="{ open: false, scrollY: 0, currentPath: '{{ url()->current() }}' }" @scroll.window="scrollY = window.scrollY">

    <!-- Header Section -->
    <header class="flex justify-between items-center py-4 px-8 bg-white sticky top-0 z-50 shadow-md" data-aos="slide-down">
        <div class="flex items-center">
            <a href="{{ url('/') }}" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition-colors" 
               :class="{ 'text-gray-900 font-semibold': currentPath === '{{ url('/') }}' }">Home</a>
            <a href="{{ url('/edukasi') }}" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition-colors" 
               :class="{ 'text-gray-900 font-semibold': currentPath === '{{ url('/edukasi') }}' }">Edukasi</a>
            <a href="{{ url('/donasi') }}" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition-colors" 
               :class="{ 'text-gray-900 font-semibold': currentPath === '{{ url('/donasi') }}' }">Donasi</a>
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

    <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)" class="pt-16 bg-cover bg-center relative" style="background-image: url('{{ asset('images/bg2.jpg') }}'); height: 500px;" data-aos="zoom-out">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div x-show="show" x-transition:enter="transition ease-out duration-1000 transform" x-transition:enter-start="opacity-0 translate-y-10" x-transition:enter-end="opacity-100 translate-y-0" class="absolute inset-0 flex items-center justify-center p-8">
            <div class="relative max-w-6xl mx-auto flex items-center justify-between h-full px-4 border-4  bg-opacity-50 rounded-lg">
                <div class="flex-shrink-0 w-1/2 h-full bg-cover bg-center" style="background-image: url('{{ asset('images/logoo.png') }}');"></div>
                <div class="w-1/2 p-6">
                    <h1 class="text-3xl font-bold text-white">"Hijaukan Dunia Digital, Wujudkan Hutan Nyata"</h1>
                    <p class="mt-4 text-lg text-white">Selamat Datang di Virtree. Kami mengajak Anda untuk berpartisipasi dalam gerakan penghijauan digital yang berdampak nyata. Dengan Virtree, Anda dapat menanam pohon secara virtual dan berkontribusi pada pelestarian lingkungan yang sesungguhnya.</p>
                </div>
            </div>
        </div>
        <svg viewBox="0 0 1440 100" preserveAspectRatio="none" class="absolute bottom-0 left-0 w-full">
            <path d="M0 50L14.2 55C28.3 60 56.7 70 84.8 74.5C113 79 141 78 169.2 76.2C197.3 74.3 225.7 71.7 254 69.3C282.3 67 310.7 65 339 64.7C367.3 64.3 395.7 65.7 423.8 66.8C452 68 480 69 508.2 72.5C536.3 76 564.7 82 593 82.3C621.3 82.7 649.7 77.3 677.8 69.3C706 61.3 734 50.7 762.2 47.5C790.3 44.3 818.7 48.7 847 55.3C875.3 62 903.7 71 931.8 76.7C960 82.3 988 84.7 1016.2 85.7C1044.3 86.7 1072.7 86.3 1101 86C1129.3 85.7 1157.7 85.3 1186 79.5C1214.3 73.7 1242.7 62.3 1270.8 57.7C1299 53 1327 55 1355.2 60.5C1383.3 66 1411.7 75 1425.8 79.5L1440 84L1440 101L1425.8 101C1411.7 101 1383.3 101 1355.2 101C1327 101 1299 101 1270.8 101C1242.7 101 1214.3 101 1186 101C1157.7 101 1129.3 101 1101 101C1072.7 101 1044.3 101 1016.2 101C988 101 960 101 931.8 101C903.7 101 875.3 101 847 101C818.7 101 790.3 101 762.2 101C734 101 706 101 677.8 101C649.7 101 621.3 101 593 101C564.7 101 536.3 101 508.2 101C480 101 452 101 423.8 101C395.7 101 367.3 101 339 101C310.7 101 282.3 101 254 101C225.7 101 197.3 101 169.2 101C141 101 113 101 84.8 101C56.7 101 28.3 101 14.2 101L0 101Z" fill="#fff" stroke-linecap="round" stroke-linejoin="miter"></path>
        </svg>
    </div>
    

    <!-- Call to Action -->
    <section class="text-center my-12" data-aos="zoom-out">
        <h2 class="text-3xl font-semibold text-gray-900 mb-4">Ayo Bergabung dan Tanam Pohon Hari Ini!</h2>
        <p class="text-xl mb-6">Setiap kontribusi Anda, baik berupa donasi atau poin, akan diubah menjadi pohon yang memberikan dampak positif bagi planet kita.</p>
        <a href="{{ url('/donasi') }}" class="bg-gray-600 text-white px-8 py-4 rounded-lg hover:bg-green-700 focus:outline-none">Bergabung Sekarang</a>
    </section>

    <!-- Content Section -->
    <div class="container mx-auto p-6" data-aos="fade">
        <h2 class="text-3xl font-bold mb-4">Apa Itu VirTree?</h2>
        <p class="text-lg mb-8">
            Virtree adalah platform unik yang mengajak Anda untuk berpartisipasi dalam gerakan menanam pohon secara global. Anda dapat berkontribusi dengan dua cara:
        </p>

        <!-- How it Works Section -->
        <section class="grid md:grid-cols-2 gap-8 mb-8">
            <div class="bg-gradient-to-r from-[#fcfcfc] to-[#e4eae8]  shadow-lg rounded-lg p-6 flex flex-col items-center "  data-aos="slide-right">
                <h2 class="text-2xl font-semibold text-center mb-4">Donasi Langsung</h2>
                <p class="text-lg text-center mb-4">Berikan dukungan finansial untuk menanam pohon di berbagai wilayah dunia. Setiap rupiah Anda akan dikonversi menjadi bibit pohon yang siap ditanam di lokasi yang membutuhkan.</p>
                <button class="bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 focus:outline-none">Donasi Sekarang</button>
            </div>
            <div class="bg-gradient-to-r from-[#fcfcfc] to-[#e4eae8]   shadow-lg rounded-lg p-6 flex flex-col items-center"  data-aos="slide-left">
                <h2 class="text-2xl font-semibold text-center mb-4">Raih Poin, Tanam Pohon</h2>
                <p class="text-lg text-center mb-4">Ikuti challenge menarik untuk mengumpulkan poin. Setiap poin yang Anda dapatkan akan kami konversi menjadi donasi untuk menanam pohon di proyek yang Anda pilih.</p>
                <button class="bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 focus:outline-none">Mulai Challenge</button>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="bg-gradient-to-r from-[#fcfcfc] to-[#e4eae8]   p-8 rounded-lg shadow-md"  data-aos="slide-up">
            <h2 class="text-3xl font-bold text-center mb-6">Kenapa Anda Harus Bergabung?</h2>
            <ul class="space-y-4">
                <li class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m7-7H5"></path></svg>
                    <span class="text-xl">Bantu Mengurangi Dampak Perubahan Iklim dengan menanam pohon di lokasi yang membutuhkan.</span>
                </li>
                <li class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m7-7H5"></path></svg>
                    <span class="text-xl">Setiap kontribusi Anda membantu memulihkan ekosistem dan meningkatkan kualitas udara.</span>
                </li>
                <li class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M 12 5v14m7-7H5"></path></svg>
                    <span class="text-xl">Bergabunglah dengan komunitas global yang berkomitmen untuk masa depan yang lebih hijau dan sehat.</span>
                </li>
            </ul>
        </section>

        <!-- team -->
        <div class="text-center mt-12 mb-12 w-full">
            <h1 class="text-3xl font-bold mb-8 text-white" data-aos="zoom-out"> - Our Team - </h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 p-4">
             <div class="shadow-md rounded-lg border border-[#595959] p-8 mb-4" data-aos="fade-right">
                <div class="flex flex-col items-center">
                    <div class="w-32 h-32 bg-cover bg-center rounded-full mb-4" style="background-image: url('{{ asset('images/ramadan.png') }}');"></div>
                    <div class="text-center">
                        <p class="text-lg font-medium text-gray-500">Ramadhan Nur Wahid</p>
                        <p class="text-lg text-gray-500">Informatika</p>
                    </div>
                </div>
            </div>
                <!-- Team -->
              <div class="shadow-md rounded-lg border border-[#595959] p-8 mb-4" data-aos="zoom-out">
                <div class="flex flex-col items-center">
                    <div class="w-32 h-32 bg-cover bg-center rounded-full mb-4" style="background-image: url('{{ asset('images/Rizka.jpg') }}');"></div>
                    <div class="text-center">
                        <p class="text-lg font-medium text-gray-500">Rizka Aulia</p>
                        <p class="text-lg text-gray-500">Informatika</p>
                    </div>
                </div>
            </div>

                <!-- Team -->
                <div class="shadow-md rounded-lg border border-[#595959] p-8 mb-4" data-aos="fade-left">
                    <div class="flex flex-col items-center">
                        <div class="w-32 h-32 bg-cover bg-center rounded-full mb-4" style="background-image: url('{{ asset('images/Raka.jpg') }}');"></div>
                        <div class="text-center">
                            <p class="text-lg font-medium text-gray-500">Raka Alpiansyah</p>
                            <p class="text-lg text-gray-500">Informatika</p>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class=" ">
            <hr class="my-6 border-gray-400 sm:mx-auto lg:my-8"/>
            <div class="mx-auto w-full  lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="#" class="flex items-center">
                            <span class="self-center text-2x1 font-semibold whitespace-nowrap text-gray-600">VirTree</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3" data-aos="zoom-out">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold uppercase text-gray-600">Resources</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https:Laravel.com/" class="hover:underline">Laravel</a>
                                </li>
                                <li>
                                    <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold uppercase text-gray-600">Follow us</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://github.com/rakaalpiansyah/web-GreenV" class="hover:underline ">Github</a>
                                </li>
                                <li>
                                    <a href="/" class="hover:underline">Discord</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold uppercase text-gray-600">Legal</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"/>
                <div class="flex items-center justify-center">
                    <span class="text-sm text-gray-500 text-center dark:text-gray-400">© 2024 <a href="/" class="hover:underline">VirTree</a>. All Rights Reserved.</span>
                </div>
            </footer>

            <script>
                AOS.init({
                duration: 800, // Durasi animasi dalam milidetik
                easing: 'ease-in-out', // Jenis animasi (opsi: 'ease', 'linear', 'ease-in', 'ease-out', 'ease-in-out')
                once: true // Hanya animasikan elemen sekali saat pertama kali di-scroll
            });
            </script>
</body>
</html>