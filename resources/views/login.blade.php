@extends('layout.index')
@section('main')
<header class="py-5 d-flex align-items-center position-relative" style="min-height: 100vh; background-image: url('{{asset('assets/startbootstrap-modern-business-gh-pages/assets/ts5.jpeg')}}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="overlay"></div>
    <div class="container px-5 position-relative">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-lg rounded-lg p-4 bg-light">
                    <h2 class="text-center text-uppercase mb-4">Login</h2>
                    <form method="POST" action="/">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-5">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-danger w-100">Login</button>
                    </form>
                    <div class="text-center mt-3">
                    </div>
                    <div class="text-center mt-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection