@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Tambah Atlet</h2>

        @if ($kontingen)
            <form action="{{ route('admin.atlets.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="kontingen_id" value="{{ $kontingen->id }}">
                <div class="form-group">
                    <label for="name">Nama Atlet</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="birth_date">Tanggal Lahir</label>
                    <input type="date" name="birth_date" id="birth_date" class="form-control"
                        value="{{ old('birth_date') }}" required>
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="#" disabled selected>Pilih jenis kelamin</option>
                        <option value="L" {{ old('gender') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ old('gender') == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="weight">Berat Badan (kg)</label>
                    <input type="number" name="weight" id="weight" class="form-control" value="{{ old('weight') }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="height">Tinggi Badan (cm)</label>
                    <input type="number" name="height" id="height" class="form-control" value="{{ old('height') }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="category_id">Kategori</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="#" disabled selected>Pilih kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="photo">Foto Atlet</label>
                    <input type="file" name="photo" id="photo" class="form-control" accept="image/*">
                </div>                
                <a href="{{ route('admin.manajemen.show', $kontingen->id) }}" class="btn btn-secondary mx-1">Kembali</a>
                <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
            </form>
        @else
            <p>Kontingen tidak ditemukan.</p>
        @endif
    </div>
@endsection
