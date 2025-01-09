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
        <h1 class="mb-4 text-primary">Dashboard Admin</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Statistik Kartu & Kartu Informasi -->
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
            <div class="col-md-4 mt-4">
                <div class="card shadow-lg border-light rounded">
                    <div class="card-body">
                        <h5 class="card-title">Rata-rata Berat Badan Atlet</h5>
                        <canvas id="weightChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="card shadow-lg border-light rounded">
                    <div class="card-body">
                        <h5 class="card-title">Distribusi Berat Badan Atlet</h5>
                        <canvas id="distributionChart"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </main>



    <!-- Bootstrap Bundle (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Data untuk grafik
            const labels = ['Rata-rata Berat Badan'];
            const data = {
                labels: labels,
                datasets: [{
                    label: 'Berat Badan (kg)',
                    data: [{{ number_format($rataRataBeratBadan, 2) }}], // Nilai dari server
                    backgroundColor: ['rgba(75, 192, 192, 0.2)'],
                    borderColor: ['rgba(75, 192, 192, 1)'],
                    borderWidth: 1
                }]
            };

            // Configurasi grafik
            const config = {
                type: 'bar', // Jenis grafik (bar, line, dll.)
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true
                        },
                        tooltip: {
                            enabled: true
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true // Grafik mulai dari 0
                        }
                    }
                }
            };

            // Render grafik
            const weightChart = new Chart(
                document.getElementById('weightChart'),
                config
            ); // Render grafik di elemen canvas
            const ctx = document.getElementById('weightChart').getContext('2d');
            new Chart(ctx, config);
        });
    </script>

    </script>
    <!-- Bootstrap Bundle (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
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
        document.addEventListener("DOMContentLoaded", function() {
            const distributionData = {
                labels: ['40-50 kg', '51-60 kg', '61-70 kg', '71-80 kg', '81-90 kg',
                    '91+ kg'
                ], // Range berat badan
                datasets: [{
                    label: 'Jumlah Atlet',
                    data: [{{ $range4050 }}, {{ $range5160 }}, {{ $range6170 }},
                        {{ $range7180 }}, {{ $range8190 }}, {{ $range91Plus }}
                    ],
                    backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            };

            const distributionConfig = {
                type: 'bar',
                data: distributionData,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Rentang Berat Badan (kg)'
                            }
                        },
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Jumlah Atlet'
                            }
                        }
                    }
                }
            };

            new Chart(document.getElementById('distributionChart'), distributionConfig);
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
