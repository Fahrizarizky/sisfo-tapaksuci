@extends('layout.index')
@section('main')
<header class="py-5 d-flex align-items-center position-relative" style="min-height: 100vh; background-image: url('{{asset('assets/startbootstrap-modern-business-gh-pages/assets/ts5.jpeg')}}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="overlay"></div> <!-- Tambahkan overlay di sini -->
    <div class="container px-5 position-relative">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">SISFO PENDEKAR 114</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Platform Terintegrasi Untuk Mengelola Tapak Suci Seluruh Pekanbaru Secara Efisien</p>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 text-center">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid rounded-3 my-5" src="{{asset('assets/startbootstrap-modern-business-gh-pages/assets/ts1.jpg')}}" alt="Gambar 1" />
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid rounded-3 my-5" src="{{asset('assets/startbootstrap-modern-business-gh-pages/assets/ts3.jpg')}}" alt="Gambar 2" />
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid rounded-3 my-5" src="{{asset('assets/startbootstrap-modern-business-gh-pages/assets/ts4.jpeg')}}" alt="Gambar 3" />
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>              
<!-- Features section-->
<section class="py-5 bg-dark text-white" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">Mengenal Tapak Suci</h2>
            </div>
            <div class="col-lg-8">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <div class="feature bg-danger bg-gradient text-white rounded-3 mb-3">
                            <i class="bi bi-collection"></i>
                        </div>
                        <h2 class="h5">Sejarah Tapak Suci</h2>
                        <p class="mb-0">Tapak Suci didirikan pada 31 Juli 1963 di Yogyakarta dan merupakan salah satu perguruan historis anggota IPSI.</p>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-warning bg-gradient text-white rounded-3 mb-3">
                            <i class="bi bi-building"></i>
                        </div>
                        <h2 class="h5">Asas dan Motto</h2>
                        <p class="mb-0">Tapak Suci berasaskan Islam dan bermotto: "Dengan Iman dan Akhlak saya menjadi kuat, tanpa Iman dan Akhlak saya menjadi lemah."</p>
                    </div>
                    <div class="col mb-5 mb-md-0 h-100">
                        <div class="feature bg-danger bg-gradient text-white rounded-3 mb-3">
                            <i class="bi bi-toggles2"></i>
                        </div>
                        <h2 class="h5">Struktur dan Jurus</h2>
                        <p class="mb-0">Memiliki tingkatan Siswa, Kader, dan Pendekar, serta mengajarkan jurus seperti Jurus Mawar, Naga, dan Harimau.</p>
                    </div>
                    <div class="col h-100">
                        <div class="feature bg-warning bg-gradient text-white rounded-3 mb-3">
                            <i class="bi bi-globe"></i>
                        </div>
                        <h2 class="h5">Penyebaran Global</h2>
                        <p class="mb-0">Telah tersebar ke berbagai negara seperti Singapura, Belanda, Jerman, dan Mesir, menjadi bagian dari Pimpinan Cabang Istimewa Muhammadiyah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>            
<!-- Testimonial section-->
<div class="py-5" style="background-color: #555555">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-7">
                <div class="text-center">
                    <div class="fs-4 mb-4 fst-italic sparkle-text animate-text text-white">
                        "Sebagaimana Tapak Suci mengajarkan kekuatan dengan iman dan akhlak, teknologi yang dikuasai dengan bijak akan menjadi jalan menuju kemajuan dan keberkahan."
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                     
<!-- Blog preview section-->
<section class="py-5" style="background-color: #333333">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder text-uppercase text-white">Pencapaian Kami</h2>
                    <p class="lead fw-normal mb-5 text-white">
                        Tapak Suci terus berkembang dengan anggota yang berdedikasi, siap menjaga nilai luhur dan semangat juang dalam bela diri.
                    </p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0 bg-warning text-dark text-center">
                    <div class="card-body p-4">
                        <h3 class="fw-bolder">150+</h3>
                        <p class="card-text mb-0">Anggota Siswa</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0 bg-warning text-dark text-center">
                    <div class="card-body p-4">
                        <h3 class="fw-bolder">150+</h3>
                        <p class="card-text mb-0">Anggota Kader</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0 bg-warning text-dark text-center">
                    <div class="card-body p-4">
                        <h3 class="fw-bolder">150+</h3>
                        <p class="card-text mb-0">Anggota Pendekar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
    @endsection