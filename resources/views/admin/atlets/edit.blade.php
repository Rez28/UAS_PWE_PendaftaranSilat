@extends('layouts.app')
@section('content')

    @if ($categories && $kontingen)
        <div class="container col-7 mt-4">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Data Atlet</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.atlets.update', ['id' => $atlet->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nama Atlet</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ old('name', $atlet->name) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Tanggal Lahir</label>
                            <input type="date" name="birth_date" id="birth_date" class="form-control"
                                value="{{ old('birth_date', $atlet->birth_date) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="L" {{ old('gender', $atlet->gender) == 'L' ? 'selected' : '' }}>
                                    Laki-laki
                                </option>
                                <option value="P" {{ old('gender', $atlet->gender) == 'P' ? 'selected' : '' }}>
                                    Perempuan
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="weight">Berat Badan (kg)</label>
                            <input type="number" name="weight" id="weight" class="form-control"
                                value="{{ old('weight', $atlet->weight) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="height">Tinggi Badan (cm)</label>
                            <input type="number" name="height" id="height" class="form-control"
                                value="{{ old('height', $atlet->height) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Kategori</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $atlet->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="photo">Foto Atlet</label>
                            <input type="file" name="photo" id="photo" class="form-control" accept="image/*">
                            @if ($atlet->photo)
                                <p>Foto saat ini:</p>
                                <img src="{{ asset('storage/' . $atlet->photo) }}" alt="{{ $atlet->name }}" class="img-thumbnail" width="150">
                            @endif
                        </div>                        
                        <div class="d-flex justify-content-center m-3">
                            <!-- Tombol Back -->
                            <a href="{{ route('admin.manajemen.show', $atlet->kontingen_id) }}"
                                class="btn btn-secondary mx-1">Kembali</a>

                            <!-- Tombol Submit -->
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <p>Kategori tidak ditemukan.</p>
    @endif
    </div>
@endsection
