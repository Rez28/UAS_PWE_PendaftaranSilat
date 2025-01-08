@extends('layouts.app')
@section('title', 'Welcome to Silat Championship')

@section('content')
    <header class="">
        @include('partials.navbar')
    </header>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/Gambar 1.jpg') }}" class="d-block w-100" alt="Gambar 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Gambar 2.jpg') }}" class="d-block w-100" alt="Gambar 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Gambar 3.jpg') }}" class="d-block w-100" alt="Gambar 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Gambar 4.jpg') }}" class="d-block w-100" alt="Gambar 4">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Gambar 5.jpg') }}" class="d-block w-100" alt="Gambar 5">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <!-- Hero Section -->
        <section class="hero">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left">
                        <h1 class="lacquer-regular">
                            Ayo <span>Bergabung</span> dan <span>Tunjukkan</span> Keahlianmu!
                        </h1>
                        <p class="exo-2-description mt-3">
                            Tidak ada waktu untuk ragu! Daftarkan dirimu sekarang di <span>The Silat Championship</span> dan
                            tunjukkan kemampuan terbaikmu di arena pencak silat!
                        </p>
                    </div>
                    <div class="col-lg-6 my-3">
                        <div class="image-wrapper">
                            <img src="{{ asset('images/Gambar 2.jpg') }}" alt="silat" class="clipped-image">
                        </div>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <button class="btn-dftr btn-light" onclick="location.href='{{ route('login') }}'">login untuk daftar</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Info Section -->
        <div class="row">
            <div class="d-flex justify-content-center align-items-center m-5">
                <div class="contact-section d-flex flex-wrap justify-content-between shadow p-4 rounded bg-light">
                    <!-- Cari Lokasi -->
                    <div class="contact-item text-center mx-3">
                        <i class="fas fa-map-marker-alt fa-2x mb-3 text-success"></i>
                        <h3 class="h5">Cari Lokasi</h3>
                        <p>Gelanggang Olah Raga (GOR) Gondrong</p>
                    </div>
                    <!-- Divider -->
                    <div class="divider d-none d-lg-block bg-secondary mx-2" style="width: 1px; height: 80px;"></div>
                    <!-- Kontak -->
                    <div class="contact-item text-center mx-3">
                        <i class="fas fa-phone-alt fa-2x mb-3 text-success"></i>
                        <h3 class="h5">Kontak</h3>
                        <p>(+62) 857 7884 3078</p>
                    </div>
                    <!-- Divider -->
                    <div class="divider d-none d-lg-block bg-secondary mx-2" style="width: 1px; height: 80px;"></div>
                    <!-- Gmail -->
                    <div class="contact-item text-center mx-3">
                        <i class="fas fa-envelope fa-2x mb-3 text-success"></i>
                        <h3 class="h5">Gmail</h3>
                        <p>Pencak_Silat@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Apa Itu Pencak Silat? Section -->
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-wrapper2">
                        <img src="{{ asset('images/Gambar 2.jpg') }}" alt="silat" class="clipped-image2">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1>Apa Itu <span>Pencak Silat?</span></h1>
                    <p class="text-justify-between">
                        Pencak silat adalah seni bela diri tradisional yang berasal dari Asia Tenggara, terutama berkembang
                        di Indonesia, Malaysia, Brunei, Singapura, dan Thailand Selatan. Seni ini menggabungkan gerakan yang
                        indah dan teratur dengan teknik bertahan diri yang efektif, termasuk serangan, tangkisan, kuncian,
                        hingga penggunaan senjata tradisional. Selain sebagai olahraga, pencak silat juga memiliki nilai
                        budaya dan spiritual, mengajarkan etika, disiplin, serta penghormatan kepada sesama. Saat ini,
                        pencak silat telah menjadi cabang olahraga yang diakui secara internasional, dengan kompetisi
                        tingkat dunia dan pengakuan UNESCO sebagai Warisan Budaya Tak Benda pada tahun 2019.
                        <a href="https://id.wikipedia.org/wiki/Seni_bela_diri#:~:text=Pencak%20silat%20adalah%20suatu%20seni,banyak%20orang%20terutama%20masyarakat%20Indonesia."
                            target="_blank">Selengkapnya</a>
                    </p>

                </div>
            </div>
        </div>
        <div class="container my-5 ">
            <div class="row justify-content-center">
                <h1 class="text-center">Kategori Lomba</h1>
                <div class="card mx-5" style="width: 18rem;">
                    <img src="{{ asset('images/Gambar 1.jpg') }}" class="card-img-top" alt="Gambar 1">
                    <h5 class="card-title text-center pt-2">Tanding</h5>
                    <div class="card-body">
                        <p class="card-text">Kategori tanding berarti adalah mempertemukan dua pesilat dan saling bertarung
                            sesuai dengan aturan yang telah ditentukan. Pemenang dalam pertandingan pencak silat ditentukan
                            oleh perolehan nilai</p>
                    </div>
                </div>
                <div class="card mx-5" style="width: 18rem;">
                    <img src="{{ asset('images/Gambar 1.jpg') }}" class="card-img-top" alt="Gambar 1">
                    <h5 class="card-title text-center pt-2">Seni</h5>
                    <div class="card-body">
                        <p class="card-text">merupakan pertandingan pencak silat yang menampilkan pesilat baik individu
                            maupun kelompok dengan memperagakan kekayaan teknik dan jurus dalam pencak silat secara etis,
                            efektif, estetis, dan kesatria. Pada kategori seni tunggal, pesilat menampilkan kekayaan teknik
                            dan jurus pencak silat secara individu</p>
                    </div>
                </div>

            </div>
        </div>


    </div>
    @include('partials.footer')



@endsection
