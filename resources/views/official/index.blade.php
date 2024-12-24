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
    @section('title', 'Admin Dashboard') <!-- Judul halaman -->
</head>

<body>
    <!-- Sidebar -->
    <div class="sidenav col-3" id="sidebar">
        <img src="{{ asset('images/logo_fix.png') }}" alt="silat" class="sidenav-logo">
        <hr class="my-2">
        <!-- Dashboard -->
        <a href="{{ route('admin.index') }}" class="nav-item mb-2 mt-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-speedometer2 me-2" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4z" />
                <path d="M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707z" />
                <path
                    d="M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zM9.5 10a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H10a.5.5 0 0 1-.5-.5z" />
                <path fill-rule="evenodd"
                    d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
            </svg>
            <h5 class="nav-text">Dashboard</h5>
        </a>

        <div class="nav-item mb-2">
            <div class="dropdown">
                <a class="nav-link btn dropdown-toggle" href="#" id="dropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-columns-gap" viewBox="0 0 16 16">
                        <path
                            d="M6 1v3H1V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm14 12v3h-5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM6 8v7H1V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zm14-6v7h-5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z" />
                    </svg>
                    <h5 class="nav-text">Kategori</h5>
                </a>
                <ul class="dropdown-menu"
                    style="background-color: rgba(255, 255, 255, 0.423); backdrop-filter: blur(5px);"
                    aria-labelledby="dropdownMenuLink">
                    <li>
                        <a href="{{ route('admin.categories.tanding', ['category_id' => 1]) }}"
                            class="dropdown-item">Tanding Putera</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categories.tanding', ['category_id' => 2]) }}"
                            class="dropdown-item">Tanding Puteri</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Tombol Logout -->
        <a href="#" class="nav-item mt-auto mb-3"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                <path fill-rule="evenodd"
                    d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
            </svg>
            <h5 class="nav-text">Logout</h5>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>



    <main class="main-page-specific col-md-9 col-lg-10 p-4">
        <h1>Selamat Bergabung pada event Kejuaraan Pencak Silat</h1>
        <p>Persiapkan Diri Untuk Menyambut Kemenangan</p>

        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card shadow-lg border-light rounded">
                    <div class="card-body">
                        <h5 class="card-title">Total Kontingen</h5>
                        <p class="card-text fs-4 text-success">{{ $totalKontingen }} Kontingen</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg border-light rounded">
                    <div class="card-body">
                        <h5 class="card-title">Total Atlet</h5>
                        <p class="card-text fs-4 text-warning">{{ $totalAtlet }} Atlet</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg border-light rounded">
                    <div class="card-body">
                        <h5 class="card-title">Total Official</h5>
                        <p class="card-text fs-4 text-primary">{{ $totalOfficial }} Official</p>
                    </div>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="tab-content mt-3 text-center tabel-center">
                <!-- Official Table -->
                <div class="container mt-4 text">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" id="official-tab" data-bs-toggle="tab"
                                href="#official">Official</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="atlet-tab" data-bs-toggle="tab" href="#atlet">Atlet</a>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content mt-3">
                        <!-- Official Table -->
                        <div class="tab-pane fade show active" id="official">
                            <table id="officialTable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Gender</th>
                                        <th>Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data akan dimasukkan melalui JavaScript -->
                                </tbody>
                            </table>
                        </div>

                        <!-- Atlet Table -->
                        <div class="tab-pane fade" id="atlet">
                            <table id="atletTable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
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
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Grafik Placeholder
        const ctx = document.getElementById('athleteRegistrationChart').getContext('2d');
        const athleteChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                    label: 'Jumlah Atlet',
                    data: [10, 20, 30, 40, 50],
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
    <script>
        const sidenav = document.querySelector('.sidenav');

        sidenav.addEventListener('mouseenter', () => {
            sidenav.classList.remove('collapsed'); // Hilangkan kelas collapsed
            sidenav.style.width = '250px'; // Kembalikan ke ukuran penuh
        });

        sidenav.addEventListener('mouseleave', () => {
            sidenav.classList.add('collapsed'); // Tambahkan kelas collapsed
            sidenav.style.width = '60px'; // Ubah ke ukuran kecil
        });

        function toggleDropdown(event) {
            event.preventDefault();
            const parent = event.target.closest('.dropdown');
            parent.classList.toggle('active');
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
