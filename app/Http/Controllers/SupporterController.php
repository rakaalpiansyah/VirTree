<?php

// app/Http/Controllers/SupporterController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupporterController extends Controller
{
    // Method untuk menampilkan halaman supporter
    public function index()
    {
        return view('supporter.index');
    }

    public function showPoints()
    {
        // Simulasi data pengguna
        $userName = 'Aka'; // Ganti dengan nama pengguna yang sebenarnya
        $userPoints = 120; // Ganti dengan jumlah poin yang sebenarnya

        return view('supporter.point', compact('userName', 'userPoints'));
    }
    public function redeemPoints(Request $request)
    {
        // Ambil data pengguna, misalnya dari session atau model User
        $userName = 'Aka'; // Ganti dengan nama pengguna yang sebenarnya
        $userPoints = 120; // Ganti dengan jumlah poin yang sebenarnya

        // Mengecek jika pengguna memiliki cukup poin untuk menukarkan poin
        if ($userPoints >= 20) {
            // Tentukan jumlah pohon yang dapat ditanam
            $treesToPlant = floor($userPoints / 20);

            // Kurangi poin pengguna berdasarkan jumlah pohon yang akan ditanam
            $userPoints -= $treesToPlant * 20;

            // Simulasi penanaman pohon
            // Anda dapat mengganti ini dengan API atau proses lain yang sesuai untuk menanam pohon
            // Misalnya, mencatat pohon yang ditanam ke database

            // Redirect kembali dengan pesan sukses
            return redirect()->route('show.points')->with('success', "Anda berhasil menanam $treesToPlant pohon!");
        } else {
            // Jika poin tidak cukup
            return redirect()->route('show.points')->with('error', 'Poin Anda tidak cukup untuk menanam pohon.');
        }
    }
}
