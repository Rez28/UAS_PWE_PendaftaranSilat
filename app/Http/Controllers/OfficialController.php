<?php

namespace App\Http\Controllers;

use App\Models\Official;
use App\Models\Kontingen;
use Illuminate\Http\Request;

class OfficialController extends Controller
{
    public function index()
    {
        $official = Official::all();
        return view('admin.manajemen.show', compact('official'));
    }
    // Method untuk menampilkan form create
    public function create($kontingenId)
    {
        $kontingen = Kontingen::find($kontingenId);

        if (!$kontingen) {
            return redirect()->route('officials.index')->with('error', 'Kontingen tidak ditemukan.');
        }

        return view('admin.officials.create', compact('kontingen'));
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'kontingen_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'Jabatan' => 'required|string|max:255',
        ]);

        // Create new Official
        Official::create([
            'kontingen_id' => $request->kontingen_id,
            'name' => $request->name,
            'gender' => $request->gender,
            'Jabatan' => $request->Jabatan,
        ]);

        // Redirect back with success message
        return redirect()
            ->route('admin.manajemen.show', $request->kontingen_id)
            ->with('success', 'Official berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $official = Official::find($id);

        if (!$official) {
            return redirect()->route('admin.officials.index')->with('error', 'Official tidak ditemukan.');
        }

        return view('admin.officials.edit', compact('official'));
    }
    public function destroy($id)
    {
        // Coba temukan data berdasarkan ID
        $official = Official::find($id);

        // Validasi jika tidak ditemukan
        if (!$official) {
            return redirect()->route('admin.manajemen.index')->with('error', 'Official tidak ditemukan.');
        }

        // Hapus data
        $official->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()
            ->route('admin.manajemen.show', $official->kontingen_id)
            ->with('success', 'Official berhasil dihapus.');
    }
}
