<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{

    public function index()
{
    // Mengambil semua data donasi dari database
    $donasis = Donasi::all();

    // Mengirimkan data donasi ke view
    return view('donatur.index', compact('donasis'));
}

    // Menampilkan halaman form donasi
    public function create()
    {
        return view('donatur.create');
    }

    // Menyimpan data donasi ke database
    public function store(Request $request)
    {
        
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email',    
            'jumlah_donasi' => 'required|numeric|min:1000',
        ]);

        // Menyimpan data ke database
        Donasi::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'jumlah_donasi' => $request->jumlah_donasi,
        ]);

        return redirect()->route('donatur.create')->with('success', 'Donasi berhasil dilakukan!');
    }
}
