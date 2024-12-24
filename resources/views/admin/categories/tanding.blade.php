<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Silat Championship')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Lacquer&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @stack('styles')
    @section('title', 'Admin Dashboard')
    <!-- Judul halaman -->
</head>

<body>
    <main class="container mt-4">
        <div class="mb-4 border-bottom pb-4">
            <h1>Kategori: {{ $category_name }}</h1>
            <div class="card">
                <div class="card-body">
                    <!-- Button untuk membuka modal aturan -->
                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Lihat Peraturan
                    </button> --}}

                    <!-- Daftar Atlet -->
                    <h3>Daftar Atlet</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Berat Badan (kg)</th>
                                <th>Kontingen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($atlets as $index => $atlet)
                                <tr>
                                    <td>{{ $index + 1 }}</td> <!-- Nomor urut -->
                                    <td>{{ $atlet->name }}</td>
                                    <td>{{ $atlet->gender }}</td>
                                    <td>{{ $atlet->weight }}</td>
                                    <td>{{ $atlet->kontingen->name }}</td>
                                    <!-- Asumsi kontingen memiliki properti "name" -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Peraturan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <li>Peraturan pertama</li>
                                        <li>Peraturan kedua</li>
                                        <li>Peraturan ketiga</li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-secondary" onclick="goBack()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M15 8a.5.5 0 0 1-.5.5H3.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708.708L3.707 7.5H14.5A.5.5 0 0 1 15 8z" />
            </svg>
            Kembali
        </button>
    </main>

    <!-- Bootstrap Bundle (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>
