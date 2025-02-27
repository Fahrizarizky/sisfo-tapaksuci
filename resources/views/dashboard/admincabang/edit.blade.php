@extends('dashboard.layout.index')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5>Edit Admin Cabang</h5>
        </div>
        <div class="card-body">
            <form action="/dashboard/cabanglatihan/admincabang/update/{{$admincabang->id}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="kode_ac" class="form-label">Kode Admin Cabang</label>
                    <input type="text" class="form-control" id="kode_ac" name="kode_ac" value="{{ $admincabang->kode_ac }}" required>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $admincabang->username }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $admincabang->email }}" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="mb-3">
                    <label for="nama_cl" class="form-label">Nama Cabang Latihan</label>
                    <input type="text" class="form-control" id="nama_cl" name="nama_cl" value="{{ $admincabang->nama_cl }}" required>
                </div>

                <input type="hidden" name="role" value="admin cabang">

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" name="status" id="status">
                        <option value=1 >Aktif</option>
                        <option value=0 >Nonaktif</option>
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="/dashboard/cabanglatihan/admincabang" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
