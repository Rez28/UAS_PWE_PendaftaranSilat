@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kontingen: {{ $kontingen->name }}</h1>
    <form action="{{ route('admin.manajemen.update', $kontingen->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $kontingen->name }}" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="address" class="form-control" value="{{ $kontingen->address }}">
        </div>
        <div class="form-group">
            <label>Telepon</label>
            <input type="text" name="phone" class="form-control" value="{{ $kontingen->phone }}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $kontingen->email }}">
        </div>
        <div class="form-group">
            <label>Tanggal Berdiri</label>
            <input type="text" name="tanggal_berdiri" class="form-control" value="{{ $kontingen->tanggal_berdiri }}">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" value="{{ $kontingen->deskripsi }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
