<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Virtree</title>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    <!-- Font Awesome (optional if needed) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

    <!-- Google Fonts (optional if needed) -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet"/>

    <style>
        {
        font-family: 'Roboto', sans-serif;
      }
    </style>
</head>

<body class="bg-gray-100" x-data="{ open: false, scrollY: 0, currentPath: '{{ url()->current() }}' }" @scroll.window="scrollY = window.scrollY">

   <!-- Header Section -->
   <header class="flex justify-between items-center py-4 px-8 bg-[#fefefe] sticky top-0 z-50 shadow-md"  data-aos="slide-down">
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
@endauth   
 </div>
</header>
    
<section class="bg-gradient-to-r from-[#ddf0e9] to-[#95a9a1] rounded-full shadow-lg mt-10 px-5 py-7"  data-aos="zoom-out"> <!-- Add rounded-full and gradient background -->
    <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 relative">
        <div class="place-self-center mr-auto lg:col-span-7">
            <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl">
                Yuk, Kenalan sama Pohon dan Pentingnya Reboisasi di Indonesia!
            </h1>
            <p class="mb-6 max-w-2xl font-light text-black-500 lg:mb-8 md:text-lg lg:text-xl">
                Halo, Sobat Hijau! Kita tahu nih, Indonesia itu surganya hutan tropis. Tapi, jujur aja ya, hutan kita lagi dalam bahaya nih. Pohon-pohon pada hilang, padahal mereka itu penting banget lho! Yuk, kita bahas kenapa sih pohon itu penting dan kenapa kita harus rajin-rajin nanam pohon lagi alias reboisasi.
            </p>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="{{ asset('images/logoo.png') }}" alt="Logo" class="rounded-full">
        </div>
    </div>
</section>
<section class="text-gray-900 font-sans">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-12"  data-aos="slide-up">
            <h1 class="text-4xl font-bold text-gray-600">Pohon: Pahlawan Super Ekosistem Kita</h1>
            <p class="mt-2 text-lg text-gray-600">Mereka adalah penjaga bumi yang menyelamatkan kita dengan cara yang luar biasa.</p>
        </header>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8"  data-aos="fade">
            <!-- Penghisap Karbon Dioksida Handal -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">1. Penghisap Karbon Dioksida Handal</h2>
                <p class="mt-4 text-gray-700">Pohon itu kayak vacuum cleaner raksasa, bro! Mereka nyedot karbon dioksida dari udara. Jadi, makin banyak pohon, makin bersih udara kita. Keren kan?</p>
            </div>

            <!-- Pabrik Oksigen Alami -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">2. Pabrik Oksigen Alami</h2>
                <p class="mt-4 text-gray-700">Inget pelajaran fotosintesis nggak? Nah, pohon itu bikin oksigen buat kita napas. Tanpa pohon, bisa-bisa kita megap-megap kayak ikan di darat!</p>
            </div>

            <!-- Rumah Buat Hewan dan Tumbuhan Lain -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">3. Rumah Buat Hewan dan Tumbuhan Lain</h2>
                <p class="mt-4 text-gray-700">Pohon itu kayak apartemen buat makhluk hidup lain. Ada yang tinggal di batang, di daun, bahkan di akarnya. Makin banyak pohon, makin rame penghuninya!</p>
            </div>

            <!-- Pengatur Air Canggih -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">4. Pengatur Air Canggih</h2>
                <p class="mt-4 text-gray-700">Akar pohon itu hebat banget. Dia bisa nyimpen air waktu hujan dan ngeluarin pas musim kering. Jadi, nggak banjir-banjir amat deh!</p>
            </div>

            <!-- AC Alami -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">5. AC Alami</h2>
                <p class="mt-4 text-gray-700">Pohon bikin suhu di sekitarnya adem. Bayangin aja, mana yang lebih enak, jalan di trotoar yang ada pohonnya atau yang gersang?</p>
            </div>
        </div>
    </div>
</section>

<section class="text-gray-900 font-sans">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-12"  data-aos="slide-up">
            <h1 class="text-4xl font-bold text-gray-600">Kenapa Sih Reboisasi di Indonesia Itu Penting Banget?</h1>
            <p class="mt-2 text-lg text-gray-600">Reboisasi adalah kunci untuk masa depan bumi kita. Yuk, kenali kenapa reboisasi itu super penting buat Indonesia!</p>
        </header>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8"  data-aos="slide-up">
            <!-- Hutan Kita Makin Botak -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">1. Hutan Kita Makin Botak</h2>
                <p class="mt-4 text-gray-700">Tiap tahun, hutan Indonesia makin tipis aja nih. Kayak rambut om-om yang mulai botak gitu deh. Kalo dibiarin, bisa-bisa Indonesia jadi gurun!</p>
            </div>

            <!-- Hewan-hewan Lucu Bisa Hilang -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">2. Hewan-hewan Lucu Bisa Hilang</h2>
                <p class="mt-4 text-gray-700">Orangutan, harimau Sumatera, badak Jawa, mereka semua bisa punah kalo nggak punya rumah alias hutan. Masa iya kita cuma bisa liat mereka di buku sejarah doang?</p>
            </div>

            <!-- Ikut Nyumbang Pemanasan Global -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">3. Ikut Nyumbang Pemanasan Global</h2>
                <p class="mt-4 text-gray-700">Nah, kalo hutan kita abis, Indonesia bisa jadi 'artis' penyumbang pemanasan global. Mau nggak kita terkenal gara-gara bikin bumi makin panas?</p>
            </div>

            <!-- Nasib Orang-orang yang Tinggal di Dekat Hutan -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">4. Nasib Orang-orang yang Tinggal di Dekat Hutan</h2>
                <p class="mt-4 text-gray-700">Banyak lho orang yang hidupnya bergantung sama hutan. Kalo hutan hilang, mereka mau makan apa, kerja apa?</p>
            </div>

            <!-- Bencana Alam Makin Sering -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">5. Bencana Alam Makin Sering</h2>
                <p class="mt-4 text-gray-700">Banjir, longsor, kekeringan... Semua itu bisa makin parah kalo hutannya abis. Mau nggak tiap hari was-was sama bencana?</p>
            </div>
        </div>
    </div>
</section>

<section class="text-gray-900 font-sans">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-12"  data-aos="slide-up">
            <h1 class="text-4xl font-bold text-gray-600">Gimana Caranya Kita Bisa Reboisasi?</h1>
            <p class="mt-2 text-lg text-gray-600">Berikut beberapa cara seru dan keren buat ikut serta dalam reboisasi dan bantu jaga bumi!</p>
        </header>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8"  data-aos="slide-up">
            <!-- Program Keren dari Pemerintah -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">1. Program Keren dari Pemerintah</h2>
                <p class="mt-4 text-gray-700">Pemerintah udah bikin program-program kece nih buat nanam pohon. Ada "Satu Miliar Pohon", keren kan? Kita bisa ikutan lho!</p>
            </div>

            <!-- Libatin Masyarakat Setempat -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">2. Libatin Masyarakat Setempat</h2>
                <p class="mt-4 text-gray-700">Yang tinggal deket hutan itu sebenernya pahlawan banget. Mereka yang paling ngerti gimana cara rawat hutan. Ayo kita dukung mereka!</p>
            </div>

            <!-- Gandeng Teman-teman dari Luar Negeri -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">3. Gandeng Teman-teman dari Luar Negeri</h2>
                <p class="mt-4 text-gray-700">Reboisasi itu butuh duit dan teknologi. Nah, kita bisa kerja sama sama negara lain buat ini. Namanya juga nyelamatin bumi, harus gotong royong dong!</p>
            </div>

            <!-- Pake Teknologi Canggih -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">4. Pake Teknologi Canggih</h2>
                <p class="mt-4 text-gray-700">Sekarang udah ada drone buat nanam pohon lho! Keren kan? Di tempat yang susah dijangkau manusia, drone bisa bantuin nanam pohon.</p>
            </div>

            <!-- Bikin Kampanye yang Hits -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">5. Bikin Kampanye yang Hits</h2>
                <p class="mt-4 text-gray-700">Kita harus bikin gerakan nanam pohon jadi tren! Bisa bikin challenge di sosmed, atau acara nanam pohon yang seru. Yang penting, orang-orang jadi tau betapa pentingnya pohon.</p>
            </div>

            <!-- Tanam Pohon Virtual, Dampak Nyata! -->
            <div class="bg-gradient-to-r from-[#ddf0e9] to-[#ddf0e9] rounded-lg p-6 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-500">6. Tanam Pohon Virtual, Dampak Nyata!</h2>
                <p class="mt-4 text-gray-700">Eh, tau nggak? Sekarang ada cara keren buat ikutan reboisasi tanpa harus kotor-kotoran! Coba deh main ke [nama platform], di sana kamu bisa nanam pohon virtual lho. Gimana caranya? Gampang banget!</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-green-100 text-gray-900 font-sans py-12">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-12"  data-aos="zoom-out">
            <h1 class="text-4xl font-bold text-gray-600">Tanam Pohon Virtual, Dampak Nyata!</h1>
            <p class="mt-4 text-lg text-gray-700">Ikut berkontribusi dalam reboisasi dengan cara yang mudah dan seru! Yuk, tanam pohon virtual yang beneran membantu bumi kita jadi lebih hijau.</p>
        </header>

        <div class="flex flex-col md:flex-row justify-center gap-8">
            <!-- Bagian Informasi Tanam Pohon Virtual -->
            <div class="bg-white p-6 rounded-lg shadow-lg w-full md:w-1/2"  data-aos="slide-right">
                <h2 class="text-2xl font-semibold text-gray-500">Cara Kerja Tanam Pohon Virtual</h2>
                <p class="mt-4 text-gray-700">Tinggal buka Virtree.com, pilih jenis pohon yang kamu suka, terus klik "Tanam". Nah, setiap pohon virtual yang kamu tanam itu sebenernya bentuk donasi kamu buat nanam pohon beneran di dunia nyata. Keren kan?</p>
                <p class="mt-4 text-gray-700">Jadi, sambil main-main di dunia maya, kita sebenernya lagi ngebantu bumi kita jadi lebih hijau. Apalagi buat kamu yang tinggal di kota dan nggak punya lahan buat nanam pohon, ini bisa jadi cara kamu untuk tetep kontribusi. Yuk, kita rame-rame bikin hutan virtual yang berdampak nyata!</p>
            </div>

            <!-- Bagian Tombol Aksi (Misal: Tanam Pohon) -->
            <div class="bg-white p-6 rounded-lg shadow-lg w-full md:w-1/2 flex justify-center items-center"  data-aos="slide-left">
                <img src="{{ asset('images/logoo.png') }}" alt="Tanam Pohon" class="rounded-lg shadow-lg mb-4 w-80 h-auto">
                <div class="text-center">
                    <h3 class="text-2xl font-semibold text-gray-500">Pilih Pohon Virtual</h3>
                    <p class="mt-2 text-lg text-gray-700">Pilih pohon yang ingin kamu tanam dan bantu bumi dengan kontribusimu.</p>
                    <a href="{{ url('/donasi') }}">
                    <button class="mt-6 px-6 py-3 bg-green-600 text-white rounded-full text-lg font-semibold hover:bg-green-700 transition duration-300">
                        Tanam Pohon Sekarang!
                    </button>
                </a>
                </div>
            </div>
        </div>

        <footer class="mt-12 text-center"  data-aos="slide-up">
            <p class="text-gray-600">Jangan tunggu lagi, yuk bersama-sama kita hijaukan bumi!</p>
        </footer>
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
