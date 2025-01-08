<?php

namespace App\Http\Controllers;

use App\Models\Kontingen;
use App\Models\Atlet;
use App\Models\Official;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $totalKontingen = Kontingen::count();
        $totalAtlet = Atlet::count();
        $totalOfficial = Official::count();
        $kontingens = Kontingen::with(['user', 'officials', 'atlets'])->get();

        return view('official.index', compact('totalKontingen', 'totalAtlet', 'totalOfficial', 'kontingens'));
    }
    public function atlet()
    {
        $kontingens = Kontingen::with(['user', 'officials', 'atlets'])->get();
        // Logika untuk menampilkan daftar atlet
        return view('official.atlet', compact('kontingens')); // Ganti 'official.atlet' dengan path view yang sesuai
    }

    public function official()
    {
        $kontingens = Kontingen::with(['user', 'officials', 'atlets'])->get();
        // Logika untuk menampilkan daftar official
        return view('official.official', compact('kontingens')); // Ganti 'official.official' dengan path view yang sesuai
    }
    public function show($id)
    {
        // Coba temukan data berdasarkan ID
        $kontingen = Kontingen::find($id);

        // Validasi jika tidak ditemukan
        if (!$kontingen) {
            return redirect()->route('official.index')->with('error', 'Kontingen tidak ditemukan.');
        }

        // Jika ditemukan, kirim data ke view
        return view('official.show', compact('kontingen'));
    }
}
