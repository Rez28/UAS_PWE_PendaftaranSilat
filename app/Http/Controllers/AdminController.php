<?php

namespace App\Http\Controllers;

use App\Models\Kontingen;
use App\Models\Atlet;
use App\Models\Official;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Ambil data yang diperlukan untuk halaman index
        $totalKontingen = Kontingen::count(); // Ubah YourModelName dengan nama model yang sesuai
        // Hitung total atlet
        $totalAtlet = Atlet::count();
        $totalOfficial = Official::count();
        // Hitung rata-rata berat badan atlet
        $rataRataBeratBadan = Atlet::avg('weight');

        $range4050 = Atlet::whereBetween('weight', [40, 50])->count();
        $range5160 = Atlet::whereBetween('weight', [51, 60])->count();
        $range6170 = Atlet::whereBetween('weight', [61, 70])->count();
        $range7180 = Atlet::whereBetween('weight', [71, 80])->count();
        $range8190 = Atlet::whereBetween('weight', [81, 90])->count();
        $range91Plus = Atlet::where('weight', '>', 90)->count();

        return view('admin.index', compact('totalKontingen', 'totalAtlet', 'totalOfficial', 'rataRataBeratBadan', 'range4050', 'range5160', 'range6170', 'range7180', 'range8190', 'range91Plus'));
    }
}
