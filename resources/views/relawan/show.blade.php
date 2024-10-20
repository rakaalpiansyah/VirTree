@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-3xl font-semibold text-center">Detail Relawan</h1>

        <div class="mt-6">
            <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Informasi</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="px-6 py-3 text-sm text-gray-600">Nama</td>
                        <td class="px-6 py-3 text-sm text-gray-800">{{ $relawan->nama }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="px-6 py-3 text-sm text-gray-600">Email</td>
                        <td class="px-6 py-3 text-sm text-gray-800">{{ $relawan->email }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="px-6 py-3 text-sm text-gray-600">Lokasi Observasi</td>
                        <td class="px-6 py-3 text-sm text-gray-800">{{ $relawan->lokasi_observasi }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="px-6 py-3 text-sm text-gray-600">Mekanisme Penanaman</td>
                        <td class="px-6 py-3 text-sm text-gray-800">{{ $relawan->mekanisme_penanaman }}</td>
                    </tr>
                    <!-- Menampilkan Laporan jika ada -->
                    @if($relawan->laporan)
                        <tr>
                            <td class="px-6 py-3 text-sm text-gray-600">Laporan Relawan</td>
                            <td class="px-6 py-3 text-sm text-gray-800">
                                <a href="{{ asset('storage/uploads/laporan/' . $relawan->laporan) }}" target="_blank" class="text-blue-500 underline">
                                    Unduh Laporan (PDF, DOCX)
                                </a>
                            </td>
                        </tr>
                    @else
                        <tr>
                            <td class="px-6 py-3 text-sm text-gray-600">Laporan Relawan</td>
                            <td class="px-6 py-3 text-sm text-gray-800">Tidak ada laporan yang diunggah.</td>
                        </tr>
                    @endif

                    <!-- Menampilkan Foto jika ada -->
                    @if($relawan->foto)
                        <tr class="border-b">
                            <td class="px-6 py-3 text-sm text-gray-600">Foto Relawan</td>
                            <td class="px-6 py-3 text-sm text-gray-800">
                                <img src="{{ asset('storage/uploads/fotos/' . $relawan->foto) }}" alt="Foto Relawan" class="w-1/3 rounded-lg shadow-md mx-auto">
                            </td>
                        </tr>
                    @else
                        <tr class="border-b">
                            <td class="px-6 py-3 text-sm text-gray-600">Foto Relawan</td>
                            <td class="px-6 py-3 text-sm text-gray-800">Tidak ada foto yang diunggah.</td>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>
@endsection
