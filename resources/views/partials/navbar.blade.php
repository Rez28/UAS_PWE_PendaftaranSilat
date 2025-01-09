<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo_fix.png') }}" alt="Logo" width="70" height="70">
        </a>
        <!-- Tombol Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navigasi -->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="#silat">Tentang silat</a></li>
                <li class="nav-item"><a class="nav-link active" href="#footer">Contact</a></li>
            </ul>
            <button class="btn btn-outline-success" onclick="location.href='{{ route('login') }}'">Login</button>
        </div>
    </div>
</nav>
