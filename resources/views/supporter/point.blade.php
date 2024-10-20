@extends('layouts.app')

@section('title', 'Point-Point Anda')

@section('content')

        <!-- Menampilkan Pesan Sukses atau Error -->
        @if(session('success'))
            <div class="alert alert-success mb-4 p-4 rounded-md shadow-md bg-green-100 text-green-700">
                <i class="fas fa-check-circle mr-2"></i>
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger mb-4 p-4 rounded-md shadow-md bg-red-100 text-red-700">
                <i class="fas fa-exclamation-circle mr-2"></i>
                {{ session('error') }}
            </div>
        @endif

        <!-- Card untuk Menampilkan Poin -->
        <div class="bg-white p-8 rounded-lg shadow-xl text-center flex flex-col items-center justify-between mb-6">
            <i class="fas fa-hand-holding-usd text-5xl text-yellow-500 mb-6"></i>

            <table class="min-w-full table-auto border-collapse border-2 border-gray-500 rounded-lg mx-auto w-3/4">
                <thead>
                    <tr class="bg-gray-900 text-white">
                        <th class="py-3 px-6 text-left font-semibold">Nama Pengguna</th>
                        <th class="py-3 px-6 text-right font-semibold">Poin yang Anda Miliki</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300 hover:bg-indigo-50">
                        <td class="py-4 px-6 text-left">{{ $userName }}</td>
                        <td class="py-4 px-6 text-right">{{ $userPoints }} Poin</td>
                    </tr>
                </tbody>
            </table>


            <!-- Menampilkan Opsi Penukaran Poin untuk Menanam Pohon -->
            <div class="mt-6 w-full">
                <p class="text-xl font-semibold text-gray-800 mb-4">Penukaran Poin</p>
                <p class="text-gray-600">Setiap 20 poin dapat ditukarkan untuk menanam satu pohon di dunia nyata.</p>
                <p class="mt-2 text-gray-600">Anda dapat menanam <strong>{{ floor($userPoints / 20) }}</strong> pohon dengan poin yang Anda miliki saat ini.</p>

                <!-- Cek apakah pengguna memiliki cukup poin untuk menanam pohon -->
                @if($userPoints >= 20)
                    <form action="{{ route('redeem.points') }}" method="POST" class="mt-6">
                        @csrf
                        <button type="submit" class="btn btn-success text-white bg-green-500 hover:bg-green-600 py-2 px-6 rounded-md shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                            Tukarkan Poin untuk Menanam Pohon
                        </button>
                    </form>
                @else
                    <div class="mt-4 text-red-500">
                        <p>Anda memerlukan minimal 20 poin untuk menanam 1 pohon.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
 
@endsection
