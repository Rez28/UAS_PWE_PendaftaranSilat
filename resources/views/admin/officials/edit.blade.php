@extends('layouts.app')

@section('content')
    <div class="container col-7 mt-4">
        <div class="card">
            <div class="card-header">
                <h5>Edit Data Official</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.officials.update', $official->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Official</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $official->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="L" {{ $official->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ $official->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="Jabatan" class="form-label">Jabatan</label>
                        <input type="text" name="position" id="position" class="form-control"
                            value="{{ $official->position }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('admin.manajemen.show', $official->kontingen_id) }}"
                        class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
