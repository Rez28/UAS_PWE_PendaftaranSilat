@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="mb-4 border-bottom pb-4">
            <h1>Detail Kontingen: {{ $kontingen->name }}</h1>
            <div class="card" style="width: 75%;">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <p><strong>Nama Kontingen</strong></p>
                        </div>
                        <div class="col-md-9">
                            <p>: {{ $kontingen->name }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <p><strong>Alamat</strong></p>
                        </div>
                        <div class="col-md-9">
                            <p>: {{ $kontingen->address }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <p><strong>Telepon</strong></p>
                        </div>
                        <div class="col-md-9">
                            <p>: {{ $kontingen->phone }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <p><strong>Email </strong></p>
                        </div>
                        <div class="col-md-9">
                            <p>: {{ $kontingen->email }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <p><strong>Tanggal Pendirian </strong></p>
                        </div>
                        <div class="col-md-9">
                            <p>: {{ $kontingen->tanggal_berdiri }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <p><strong>Total Atlet</strong></p>
                        </div>
                        <div class="col-md-9">
                            <p>: {{ $kontingen->atlets->count() }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <p><strong>Total Official</strong></p>
                        </div>
                        <div class="col-md-9">
                            <p>: {{ $kontingen->officials->count() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4 border-bottom pb-4">
            <h3>Officials</h3>
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    @if ($kontingen)
                        <a href="{{ route('admin.officials.create', $kontingen->id) }}" class="btn btn-primary mb-3">Tambah
                            Official</a>
                    @else
                        <p>Kontingen tidak ditemukan.</p>
                    @endif
                    
                    
                    <table class="table table-striped table-bordered table-center">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <select name="per_page" id="per_page" class="form-select d-inline-block w-auto" onchange="this.form.submit()">
                                <label for="per_page" class="form-label me-2 text-left">Tampilkan:</label>
                                    <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
                                    <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                                    <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
                                    <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
                                </select>
                        </div>
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kontingen->officials as $official)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $official->name }}</td>
                                    <td>{{ $official->gender }}</td>
                                    <td>{{ $official->Jabatan }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton-{{ $loop->iteration }}" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Aksi
                                            </button>
                                            <ul class="dropdown-menu"
                                                aria-labelledby="dropdownMenuButton-{{ $loop->iteration }}">
                                                <li>
                                                    @if ($kontingen)
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.officials.edit', $official->id) }}">Edit</a>
                                                    @else
                                                        <p>Kontingen tidak ditemukan.</p>
                                                    @endif
                                                </li>
                                                <li><a class="dropdown-item" href="#">Hapus</a></li>
                                                <!-- Ganti link ini dengan URL yang sesuai -->
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <h3>Atlets</h3>
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    @if ($kontingen)
                        <a
                            href="{{ route('admin.atlets.create', ['kontingenId' => $kontingen->id]) }}"class="btn btn-primary mb-3">
                            Tambah Atlet
                        </a>
                    @else
                        <p>Kontingen tidak ditemukan.</p>
                    @endif


                    <table class="table table-striped table-bordered text-center table-center">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <select name="per_page" id="per_page" class="form-select d-inline-block w-auto" onchange="this.form.submit()">
                                <label for="per_page" class="form-label me-2 text-left">Tampilkan:</label>
                                    <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
                                    <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                                    <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
                                    <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
                                </select>
                        </div>
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Tanggal Lahir</th>
                                <th>Berat Badan</th>
                                <th>Tinggi Badan</th>
                                <th>Kategori</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kontingen->atlets as $atlet)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $atlet->name }}</td>
                                    <td>{{ $atlet->gender }}</td>
                                    <td>{{ $atlet->birth_date }}</td>
                                    <td>{{ $atlet->weight }}</td>
                                    <td>{{ $atlet->height }}</td>
                                    <td>
                                        @if ($atlet->category_id == 1)
                                            Tanding Putra
                                        @elseif ($atlet->category_id == 2)
                                            Tanding Putri
                                        @else
                                            Kategori tidak tersedia
                                        @endif
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/' . $atlet->photo) }}" alt="{{ $atlet->name }}"
                                            class="img-thumbnail" style="width: 3.5cm; height: 4.5cm; object-fit: cover;">
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-info dropdown-toggle" type="button"
                                                id="dropdownMenuButton-{{ $loop->iteration }}" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Aksi
                                            </button>
                                            <ul class="dropdown-menu"
                                                aria-labelledby="dropdownMenuButton-{{ $loop->iteration }}">
                                                <li><a class="dropdown-item"
                                                        href="{{ route('admin.atlets.edit', $atlet->id) }}">Edit</a></li>
                                                <li>
                                                    <form action="{{ route('admin.atlets.destroy', $atlet->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus atlet ini?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="dropdown-item text-danger">Hapus</button>
                                                    </form>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="{{ route('admin.manajemen.index') }}" class="btn btn-secondary">Kembali ke Daftar Kontingen</a>
    </div>
@endsection
