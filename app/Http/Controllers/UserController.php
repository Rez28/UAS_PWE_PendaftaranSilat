<?php

namespace App\Http\Controllers;

use App\Models\Kontingen;
use App\Models\Atlet;
use App\Models\Official;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Ambil data yang diperlukan untuk halaman index
        $totalKontingen = Kontingen::count(); // Ubah YourModelName dengan nama model yang sesuai
        // Hitung total atlet
        $totalAtlet = Atlet::count();
        $totalOfficial = Official::count();
        $atlet = Atlet::all();

        return view('official.index', compact('totalKontingen', 'totalAtlet', 'totalOfficial'));
    }
}
