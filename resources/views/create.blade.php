@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Pendaftaran Kontingen</h2>

    <form action="{{ route('kontingen.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Kontingen Form -->
        <h3>Kontingen</h3>
        <input type="text" name="kontingen[name]" placeholder="Nama Kontingen" required>
        <input type="text" name="kontingen[address]" placeholder="Alamat Kontingen" required>
        <input type="text" name="kontingen[phone]" placeholder="Nomor Telepon" required>
        <input type="email" name="kontingen[email]" placeholder="Email Kontingen" required>
        <input type="date" name="kontingen[tanggal_berdiri]" placeholder="Tanggal Berdiri" required>
        <textarea name="kontingen[deskripsi]" placeholder="Deskripsi Kontingen" required></textarea>

        <!-- Official Form -->
        <h3>Official</h3>
        <div id="officials-form">
            <div class="official-entry">
                <input type="text" name="officials[0][name]" placeholder="Nama Official" required>
                <select name="officials[0][gender]" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <input type="text" name="officials[0][Jabatan]" placeholder="Jabatan" required>
            </div>
        </div>
        <button type="button" onclick="addOfficial()">Tambah Official Lain</button>

        <!-- Atlet Form -->
        <h3>Atlet</h3>
        <div id="atlets-form">
            <div class="atlet-entry">
                <input type="text" name="atlets[0][name]" placeholder="Nama Atlet" required>
                <select name="atlets[0][gender]" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <input type="text" name="atlets[0][category]" placeholder="Kategori" required>
                <input type="file" name="atlets[0][photo]" placeholder="Foto Atlet">
            </div>
        </div>
        <button type="button" onclick="addAtlet()">Tambah Atlet Lain</button>

        <button type="submit">Kirim</button>
    </form>
</div>

<script>
    let officialCount = 1;
    let atletCount = 1;

    // Fungsi untuk menambah form Official
    function addOfficial() {
        const form = document.getElementById('officials-form');
        const newEntry = document.createElement('div');
        newEntry.classList.add('official-entry');
        newEntry.innerHTML = `
            <input type="text" name="officials[${officialCount}][name]" placeholder="Nama Official" required>
            <select name="officials[${officialCount}][gender]" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            <input type="text" name="officials[${officialCount}][Jabatan]" placeholder="Jabatan" required>
        `;
        form.appendChild(newEntry);
        officialCount++;
    }

    // Fungsi untuk menambah form Atlet
    function addAtlet() {
        const form = document.getElementById('atlets-form');
        const newEntry = document.createElement('div');
        newEntry.classList.add('atlet-entry');
        newEntry.innerHTML = `
            <input type="text" name="atlets[${atletCount}][name]" placeholder="Nama Atlet" required>
            <select name="atlets[${atletCount}][gender]" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            <input type="text" name="atlets[${atletCount}][category]" placeholder="Kategori" required>
            <input type="file" name="atlets[${atletCount}][photo]" placeholder="Foto Atlet">
        `;
        form.appendChild(newEntry);
        atletCount++;
    }
</script>
@endsection
