@extends('layout.index')
@section('main')
<header class="py-5 d-flex align-items-center position-relative" style="min-height: 100vh; background-image: url('{{asset('assets/startbootstrap-modern-business-gh-pages/assets/contact-bg.jpg')}}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="overlay"></div>
    <div class="container px-5 position-relative">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
                <h1 class="text-white display-4">Hubungi Kami</h1>
                <p class="lead text-white">Kami siap membantu Anda! Kirimkan pesan atau dapatkan informasi kontak kami di bawah ini.</p>
                <!-- Tombol yang mengarah ke section kontak -->
                <a href="#contact-form" class="btn btn-danger btn-lg mt-4">Kirim Pesan</a>
            </div>
        </div>
    </div>
</header>

<!-- Contact Form Section -->
<section class="py-5" id="contact-form" style="background-color: #f8f9fa">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bolder">Tanyakan Sesuatu</h2>
                <p class="lead">Isi formulir di bawah untuk menghubungi kami langsung. Kami akan segera merespons pesan Anda!</p>
                <form method="POST" action="/">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger w-100">Kirim Pesan</button>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 rounded-lg p-4 bg-light">
                    <h3 class="fw-bolder mb-3">Atau Hubungi Kami Melalui</h3>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-envelope-fill fs-4 me-3"></i>
                                <strong>Email:</strong> <a href="mailto:info@pendekar114.com" class="text-decoration-none">info@pendekar114.com</a>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-telephone-fill fs-4 me-3"></i>
                                <strong>Telepon:</strong> <a href="tel:+62123456789" class="text-decoration-none">+62 123 456 789</a>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-geo-alt-fill fs-4 me-3"></i>
                                <strong>Alamat:</strong> Jl. Pemuda No. 10, Pekanbaru, Riau, Indonesia
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
{{-- <section class="py-5 bg-light" id="contact-info">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-12 text-center">
                <h2 class="fw-bolder">Peta Lokasi Kami</h2>
                <p class="lead mb-4">Temukan kami di lokasi berikut:</p>
                <div id="map" style="height: 400px; width: 100%;"></div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Social Media Section -->
<section class="py-5" id="social-media" style="background-color: #f8f9fa">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center text-center">
            <div class="col-lg-4">
                <h3 class="fw-bolder mb-3">Ikuti Kami di Media Sosial</h3>
                <div class="d-flex justify-content-center">
                    <a href="https://facebook.com" target="_blank" class="btn btn-primary btn-circle btn-lg mx-2">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="btn btn-info btn-circle btn-lg mx-2">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="btn btn-danger btn-circle btn-lg mx-2">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://linkedin.com" target="_blank" class="btn btn-primary btn-circle btn-lg mx-2">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
