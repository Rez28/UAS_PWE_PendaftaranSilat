@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Official</h1>
        <form action="{{ route('admin.officials.store') }}" method="POST">
            @csrf
            <input type="hidden" name="kontingen_id" value="{{ $kontingen->id }}">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Official</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="" {{ old('gender') == 'L' ? 'selected' : '' }}>---</option>
                    <option value="L" {{ old('gender') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ old('gender') == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Jabatan" class="form-label">Jabatan</label>
                <input type="text" name="Jabatan" id="Jabatan" class="form-control" value="{{ old('Jabatan') }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.manajemen.show', $kontingen->id) }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
