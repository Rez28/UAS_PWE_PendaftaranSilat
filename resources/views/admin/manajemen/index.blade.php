<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Silat Championship')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
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

        <!-- Manajemen Dropdown -->
        <a href="./manajemen" class="nav-item mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-person-gear" viewBox="0 0 16 16">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                <path
                    d="M2 10a.5.5 0 0 1 .5-.5h4.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zM10.5 10a.5.5 0 0 1 .5-.5h3.5a.5.5 0 0 1 0 1h-3.5a.5.5 0 0 1-.5-.5z" />
            </svg>
            <h5 class="nav-text">Manajemen</h5>
        </a>
        <!-- Kategori Tanding/Seni -->
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
        <h1>Daftar Kontingen</h1>
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <!-- Tombol Tambah Kontingen -->
                <a href="{{ route('admin.manajemen.create') }}" class="btn btn-primary mb-3"
                    aria-label="Tambah Kontingen">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-circle" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg>
                    Tambah Kontingen
                </a>

                <!-- Tombol Print PDF -->
                <a href="/export-pdf" class="btn btn-secondary mb-3" aria-label="Print PDF">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                        class="bi bi-printer-fill" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1" />
                        <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1" />
                    </svg>
                    Print PDF
                </a>

            </div>
        </div>

        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Total Official</th>
                    <th>Total Atlet </th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kontingens as $kontingen)
                    <tr>
                        <td>{{ $kontingen->id }}</td>
                        <td>{{ $kontingen->name }}</td>
                        <td>{{ $kontingen->address }}</td>
                        <td>{{ $kontingen->atlets->count() }}</td>
                        <td>{{ $kontingen->officials->count() }}</td>

                        <td>
                            <a href="{{ route('admin.manajemen.show', $kontingen->id) }}"
                                class="btn btn-info">Detail</a>
                            <a href="{{ route('admin.manajemen.edit', $kontingen->id) }}"
                                class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.manajemen.destroy', $kontingen->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"
                                    onclick="return confirm('Hapus kontingen?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
</body>

</html>
