@extends('layout.index')
@section('main')
<!-- About Section -->
<section class="py-5" style="background-color: #333333; margin-top: 80px" id="about">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="{{asset('assets/startbootstrap-modern-business-gh-pages/assets/ts6.jpeg')}}" alt="About Image">
            </div>
            <div class="col-lg-6 text-white">
                <h2 class="fw-bolder">Tentang Kami</h2>
                <p class="lead">SISFO PENDEKAR 114 adalah platform terintegrasi untuk mengelola Tapak Suci secara efisien di seluruh Pekanbaru. Kami berdedikasi untuk mendukung para pendekar dalam pengelolaan administrasi dan komunikasi yang lebih baik.</p>
                <p class="mb-4">Dengan teknologi yang berkembang, kami menyediakan sistem yang mudah diakses, aman, dan dapat diandalkan untuk komunitas Tapak Suci.</p>
                <a class="btn btn-danger" href="/contact">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </div>
</section>
@endsection
