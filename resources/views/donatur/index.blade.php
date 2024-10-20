<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
 <!-- Header Section -->
 <header class="flex justify-between items-center py-4 px-8 bg-[#fefefe] sticky top-0 z-50 shadow-md">
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
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Daftar Donasi</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 mb-6 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">No</th>
                        <th class="px-4 py-2 text-left">Nama</th>
                        <th class="px-4 py-2 text-left">Alamat</th>
                        <th class="px-4 py-2 text-left">Email</th>
                        <th class="px-4 py-2 text-left">Jumlah Donasi</th>
                        <th class="px-4 py-2 text-left">Tanggal Donasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($donasis as $index => $donasi)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $index + 1 }}</td>
                            <td class="px-4 py-2">{{ $donasi->nama }}</td>
                            <td class="px-4 py-2">{{ $donasi->alamat }}</td>
                            <td class="px-4 py-2">{{ $donasi->email }}</td>
                            <td class="px-4 py-2">Rp {{ number_format($donasi->jumlah_donasi, 2, ',', '.') }}</td>
                            <td class="px-4 py-2">{{ $donasi->created_at->format('d-m-Y H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6 text-center">
            <a href="{{ route('donatur.create') }}" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">Kembali ke Form Donasi</a>
        </div>
    </div>

</body>
</html>
