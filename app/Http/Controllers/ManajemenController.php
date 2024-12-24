<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontingen;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ManajemenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data kontingen dengan relasi ke user, officials, dan atlets
        $kontingens = Kontingen::with(['user', 'officials', 'atlets'])->get();

        // Kirim data ke view
        return view('admin.manajemen.index', compact('kontingens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // View untuk form tambah kontingen
        return view('admin.manajemen.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $user = Auth::user();
        // Cek pengguna yang sedang login
        if (!$user || $user->role !== 'admin') {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $request->merge(['user_id' => $user->id]);

        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:15',
            'email' => 'nullable|string|email|max:255',
            'tanggal_berdiri' => 'nullable|date',
            'deskripsi' => 'nullable|string',
        ]);

        try {
            Kontingen::create($request->all());
            return redirect()->route('admin.manajemen.index')->with('success', 'Kontingen berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Coba temukan data berdasarkan ID
        $kontingen = Kontingen::find($id);

        // Validasi jika tidak ditemukan
        if (!$kontingen) {
            return redirect()->route('admin.manajemen.index')->with('error', 'Kontingen tidak ditemukan.');
        }

        // Jika ditemukan, kirim data ke view
        return view('admin.manajemen.show', compact('kontingen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:15',
            'email' => 'nullable|string|email|max:255',
            'tanggal_berdiri' => 'nullable|date',
            'deskripsi' => 'nullable|string',
        ]);

        $kontingen = Kontingen::findOrFail($id);
        $kontingen->update($request->all());

        return redirect()->route('admin.manajemen.index')->with('success', 'Kontingen berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kontingen = Kontingen::findOrFail($id);
        $kontingen->delete();

        return redirect()->route('admin.manajemen.index')->with('success', 'Kontingen berhasil dihapus.');
    }
}
