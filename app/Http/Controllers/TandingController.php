<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atlet;

class TandingController extends Controller
{
    public function index($category_id)
    {
        // Ambil daftar atlet berdasarkan category_id
        $atlets = Atlet::where('category_id', $category_id)->orderBy('name')->get();

        // Tentukan nama kategori berdasarkan ID
        $category_name = $category_id == 1 ? 'Tanding Putera' : 'Tanding Puteri';

        return view('admin.categories.tanding', compact('atlets', 'category_name'));
    }
}
