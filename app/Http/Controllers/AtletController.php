<?php
namespace App\Http\Controllers;

use App\Models\Atlet;
use App\Models\Categories;
use App\Models\Kontingen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AtletController extends Controller
{
    public function create($kontingenId)
    {
        $kontingen = Kontingen::find($kontingenId);
        if (!$kontingen) {
            return redirect()->route('admin.manajemen.index')->with('error', 'Kontingen tidak ditemukan.');
        }

        // Ambil data kategori atau daftar opsi lain yang diperlukan di view
        $categories = Categories::all(); // Sesuaikan dengan model yang sesuai

        return view('admin.atlets.create', compact('kontingen', 'categories'));
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'kontingen_id' => 'required|exists:kontingens,id',
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|string|max:255',
        'birth_date' => 'required|date',
        'weight' => 'required|integer',
        'height' => 'required|integer',
        'gender' => 'required|in:L,P',
        'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Upload file
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public');
        $validatedData['photo'] = $photoPath;
    }

    Atlet::create($validatedData);

    return redirect()
        ->route('admin.manajemen.show', $request->kontingen_id)
        ->with('success', 'Atlet berhasil ditambahkan.');
}


    public function edit($id)
    {
        // Ambil data atlet berdasarkan ID
        $atlet = Atlet::find($id);

        // Jika atlet tidak ditemukan, redirect ke halaman index
        if (!$atlet) {
            return redirect()->route('admin.manajemen.index')->with('error', 'Atlet tidak ditemukan');
        }

        // Ambil data kontingen berdasarkan ID kontingen dari atlet
        $kontingen = Kontingen::find($atlet->kontingen_id);

        // Ambil semua kategori untuk dropdown kategori
        $categories = Categories::all();

        // Redirect jika kontingen tidak ditemukan
        if (!$kontingen) {
            return redirect()->route('admin.manajemen.index')->with('error', 'Kontingen tidak ditemukan');
        }

        // Pass data ke view
        return view('admin.atlets.edit', compact('atlet', 'categories', 'kontingen'));
    }

    public function update(Request $request, $id)
{
    $atlet = Atlet::find($id);

    if (!$atlet) {
        return redirect()->route('admin.manajemen.index')->with('error', 'Atlet tidak ditemukan.');
    }

    // Validasi input
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'birth_date' => 'required|date',
        'gender' => 'required|in:L,P',
        'weight' => 'required|numeric|min:0',
        'height' => 'required|numeric|min:0',
        'category_id' => 'required|exists:categories,id',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Proses upload foto baru jika ada
    if ($request->hasFile('photo')) {
        // Hapus foto lama jika ada
        if ($atlet->photo) {
            Storage::disk('public')->delete($atlet->photo);
        }

        // Simpan foto baru
        $photoPath = $request->file('photo')->store('photos', 'public');
        $validatedData['photo'] = $photoPath;
    }

    // Update data atlet
    $atlet->update($validatedData);

    return redirect()
        ->route('admin.manajemen.show', ['id' => $atlet->kontingen_id])
        ->with('success', 'Data atlet berhasil diperbarui.');
}


    public function destroy($id)
    {
        $atlet = Atlet::find($id);
        if (!$atlet) {
            return redirect()->route('admin.manajemen.index')->with('error', 'Atlet tidak ditemukan.');
        }

        $atlet->delete();

        return redirect()
            ->route('admin.manajemen.show', $atlet->kontingen_id)
            ->with('success', 'at$atlet berhasil dihapus.');
    }
}
