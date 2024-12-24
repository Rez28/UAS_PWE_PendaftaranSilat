@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Kontingen</h1>
        <form action="{{ route('admin.manajemen.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama kontingen</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Tanggal Berdiri</label>
                <input type="date" name="tanggal_berdiri" class="form-control">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
