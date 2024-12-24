@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bracket Pertandingan</h1>
    <form action="{{ route('admin.eventMatches.createBracket') }}" method="POST">
        @csrf
        <label for="category_id">Pilih Kategori:</label>
        <select name="category_id" id="category_id" class="form-control">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary mt-2">Buat Bracket</button>
    </form>

    @if ($eventMatches->isEmpty())
        <p>Tidak ada pertandingan yang tersedia.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Round</th>
                    <th>Atlet 1</th>
                    <th>Atlet 2</th>
                    <th>Waktu Pertandingan</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eventMatches as $match)
                    <tr>
                        <td>{{ $match->round }}</td>
                        <td>{{ $match->athlete_1 }}</td>
                        <td>{{ $match->athlete_2 }}</td>
                        <td>{{ $match->match_time }}</td>
                        <td>{{ $match->result ?? 'Belum Selesai' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="bracket">
            @foreach ($eventMatches->groupBy('round') as $round => $matchesInRound)
                <div class="round">
                    <h4>Round {{ $round }}</h4>
                    @foreach ($matchesInRound as $match)
                        <div class="match">
                            <strong>{{ $match->athlete_1 }}</strong>
                            <span>vs</span>
                            <strong>{{ $match->athlete_2 }}</strong>
                            <p class="time">Waktu: {{ $match->match_time->format('d M Y H:i') }}</p>
                            <p class="result">Hasil: {{ $match->result ?? 'Belum selesai' }}</p>
                        </div>
                        <form action="{{ route('matches.updateWinner', $match->id) }}" method="POST">
                            @csrf
                            <select name="winner" class="form-control">
                                <option value="{{ $match->athlete_1 }}">{{ $match->athlete_1 }}</option>
                                <option value="{{ $match->athlete_2 }}">{{ $match->athlete_2 }}</option>
                            </select>
                            <button type="submit" class="btn btn-primary mt-2">Pilih Pemenang</button>
                        </form>
                    @endforeach
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
