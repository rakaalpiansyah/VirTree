<?php

namespace App\Http\Controllers;

use App\Models\Relawan;
use Illuminate\Http\Request;

class RelawanController extends Controller
{
    // Menampilkan form untuk menambahkan relawan baru
    public function create()
    {
        return view('relawan.create');
    }

    // Controller RelawanController.php

    public function show($id)
    {
        // Mengambil data relawan berdasarkan ID
        $relawan = Relawan::findOrFail($id);
    
        // Menampilkan halaman output dengan data relawan
        return view('relawan.show', compact('relawan'));
    }

    public function store(Request $request)
    {
        // Validasi inputan form
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'lokasi_observasi' => 'required|string',
            'mekanisme_penanaman' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Validasi untuk foto (gambar)
            'laporan' => 'nullable|mimes:pdf,doc,docx|max:2048',  // Validasi untuk file laporan (PDF, DOC, DOCX)
        ]);
    
        // Simpan file foto jika ada
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // Tentukan folder tujuan penyimpanan file foto
            $path = $file->storeAs('uploads/fotos', $filename, 'public');
            // Simpan nama file foto ke dalam data yang akan disimpan ke database
            $validated['foto'] = $filename;
        }
    
        // Simpan file laporan jika ada
        if ($request->hasFile('laporan')) {
            $file = $request->file('laporan');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // Tentukan folder tujuan penyimpanan file laporan
            $path = $file->storeAs('uploads/laporan', $filename, 'public');
            // Simpan nama file laporan ke dalam data yang akan disimpan ke database
            $validated['laporan'] = $filename;
        }
    
        // Menyimpan data relawan yang sudah divalidasi
        $relawan = Relawan::create($validated);
    
        return redirect()->route('relawan.show', ['id' => $relawan->id])->with('success', 'Data relawan berhasil disimpan!');
    }
    }
