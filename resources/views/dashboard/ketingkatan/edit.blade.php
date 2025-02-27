@extends('dashboard.layout.index')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5>Edit Data Ketingkatan</h5>
        </div>
        <div class="card-body">
            <form action="/dashboard/ketingkatan/update/{{$ketingkatan->id}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="kode" class="form-label">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode" value="{{ $ketingkatan->kode }}" required>
                </div>

                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $ketingkatan->kategori }}" required>
                </div>

                <div class="mb-3">
                    <label for="tingkatan" class="form-label">Tingkatan</label>
                    <input type="text" class="form-control" id="tingkatan" name="tingkatan" value="{{ $ketingkatan->tingkatan }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="/dashboard/ketingkatan" class="btn btn-secondary">
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
