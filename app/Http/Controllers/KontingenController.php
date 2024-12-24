<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kontingen;

class KontingenController extends Controller
{
    public function show(Kontingen $kontingen)
    {
        // Ambil data kontingen beserta officials dan atlets
        $kontingen->load(['officials', 'atlets']);

        // Kirim data ke view
        return view('admin.manajemen.show', compact('kontingen'));
    }
    public function create()
    {
        // Menampilkan halaman form pendaftaran kontingen
        return view('home');
    }

    public function store(Request $request)
    {
        // Validasi data yang dimasukkan
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'contact_email' => 'required|email',
            'contact_phone' => 'required|string',
        ]);

        // Membuat kontingen baru
        $kontingen = Kontingen::create([
            'name' => $request->name,
            'category' => $request->category,
            'contact_email' => $request->contact_email,
            'contact_phone' => $request->contact_phone,
        ]);

        // Arahkan ke halaman form pendaftaran atlet dan official
        return redirect()->route('kontingen.createAtlet', ['kontingen_id' => $kontingen->id]);
    }
}
