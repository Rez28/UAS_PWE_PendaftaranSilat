<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Method untuk Tanding
    public function tanding()
    {
        return view('admin.categories.tanding'); // File resources/views/admin/categories/tanding.blade.php
    }

    // Method untuk Seni
    public function seni()
    {
        return view('admin.categories.seni'); // File resources/views/admin/categories/seni.blade.php
    }
}
