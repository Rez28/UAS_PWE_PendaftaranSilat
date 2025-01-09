<?php
namespace App\Http\Controllers;

use App\Models\EventMatch;
use App\Models\Atlet;
use App\Models\Categories;
use Illuminate\Http\Request;

class EventMatchController extends Controller
{
    // Menampilkan semua pertandingan
    public function index()
    {
        $eventMatches = EventMatch::with('category_id')->orderBy('round')->get();
        return view('admin.matches.index', compact('eventMatches'));
    }

    // Membuat bracket pertandingan
    public function createBracket(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
        ]);

        // Ambil data kategori dan atlit yang sesuai
        $categories = Categories::all();
        $atlets = Atlet::where('category_id', $request->input('category_id'))->orderBy('weight')->get();

        // Cek jika jumlah atlet memenuhi syarat pangkat dua
        if ($atlets->count() < 2 || ($atlets->count() & ($atlets->count() - 1)) != 0) {
            return redirect()->back()->with('error', 'Jumlah atlet harus merupakan pangkat 2 (contoh: 2, 4, 8, 16).');
        }

        // Acak daftar atlet
        $atlets = $atlets->shuffle();

        // Buat daftar pertandingan
        $matches = [];
        $round = 1;

        for ($i = 0; $i < $atlets->count(); $i += 2) {
            $matches[] = [
                'category_id' => $request->input('category_id'),
                'athlete_1' => $atlets[$i]->name,
                'athlete_2' => $atlets[$i + 1]->name,
                'round' => $round,
                'match_time' => now()->addDays($round),
                'result' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $round++;
        }

        // Insert ke tabel EventMatch
        EventMatch::insert($matches);

        return redirect()->route('admin.matches.index')->with('success', 'Bracket pertandingan berhasil dibuat!');
    }

    // Memperbarui pemenang pertandingan
    public function updateWinner(Request $request, $id)
    {
        $match = EventMatch::findOrFail($id);

        $winner = $request->input('winner');
        if (!in_array($winner, [$match->athlete_1, $match->athlete_2])) {
            return redirect()->back()->with('error', 'Pemenang tidak valid.');
        }

        $match->result = $winner;
        $match->save();

        $nextRound = $match->round + 1;

        $nextMatch = EventMatch::firstOrCreate(
            ['category_id' => $match->category_id, 'round' => $nextRound],
            [
                'athlete_1' => null,
                'athlete_2' => null,
                'match_time' => now()->addDays($nextRound),
                'result' => null,
            ],
        );

        if (is_null($nextMatch->athlete_1)) {
            $nextMatch->athlete_1 = $winner;
        } elseif (is_null($nextMatch->athlete_2)) {
            $nextMatch->athlete_2 = $winner;
        }
        $nextMatch->save();

        return redirect()->route('matches.index')->with('success', 'Pemenang berhasil diperbarui!');
    }
}
