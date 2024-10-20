@extends('layouts.app') <!-- Menyertakan layout utama Laravel jika ada -->

@section('title', 'Jenis-Jenis Misi')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Jenis-Jenis Misi</h1>
                <p class="lead">Selesaikan berbagai misi menarik untuk mendapatkan poin!</p>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Misi 1: Menonton Iklan -->
            <div class="col-md-4 mb-4">
                <div class="card border rounded-lg shadow-md text-center h-full flex flex-col">
                    <!-- Icon Play Video dengan Efek Hover -->
                    <div class="card-img-top py-6">
                        <i class="fa fa-play fa-4x text-gray-700 transform transition-transform duration-300 hover:scale-110 cursor-pointer"></i>
                    </div>
                    <div class="card-body p-4 flex-1">
                        <h5 class="card-title text-xl font-semibold mb-2">Menonton Iklan</h5>
                        <p class="card-text text-gray-600">Tonton video iklan dan kumpulkan poin setiap kali kamu menyelesaikannya.</p>
                    </div>
                </div>
            </div>
        
            <!-- Misi 2: Mengikuti Akun Media Sosial Virtree -->
            <div class="col-md-4 mb-4">
                <div class="card border rounded-lg shadow-md text-center h-full flex flex-col">
                    <!-- Icon Media Sosial dengan Efek Hover -->
                    <div class="card-img-top py-6">
                        <i class="fa fa-share-alt fa-4x text-gray-700 transform transition-transform duration-300 hover:scale-110 cursor-pointer"></i>
                    </div>
                    <div class="card-body p-4 flex-1">
                        <h5 class="card-title text-xl font-semibold mb-2">Mengikuti Akun Media Sosial</h5>
                        <p class="card-text text-gray-600">Ikuti akun media sosial di platform populer untuk mendapatkan poin.</p>
                    </div>
                </div>
            </div>
        
            <!-- Misi 3: Menyelesaikan Kuis dan Tantangan -->
            <div class="col-md-4 mb-4">
                <div class="card border rounded-lg shadow-md text-center h-full flex flex-col">
                    <!-- Icon Kuis dengan Efek Hover -->
                    <div class="card-img-top py-6">
                        <i class="fa fa-question-circle fa-4x text-gray-700 transform transition-transform duration-300 hover:scale-110 cursor-pointer"></i>
                    </div>
                    <div class="card-body p-4 flex-1">
                        <h5 class="card-title text-xl font-semibold mb-2">Menyelesaikan Kuis dan Tantangan</h5>
                        <p class="card-text text-gray-600">Jawab kuis dan selesaikan tantangan untuk mendapatkan hadiah menarik dan poin tambahan.</p>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
    </div>
@endsection
