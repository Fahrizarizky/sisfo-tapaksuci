@extends('dashboard.layout.index')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5>Edit Data Cabang Latihan</h5>
        </div>
        <div class="card-body">
            <form action="/dashboard/cabanglatihan/update/{{$cabanglatihan->id}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nicl" class="form-label">NICL</label>
                    <input type="text" class="form-control" id="nicl" name="nicl" value="{{ $cabanglatihan->nicl }}" required>
                </div>

                <div class="mb-3">
                    <label for="nama_cl" class="form-label">Nama Cabang</label>
                    <input type="text" class="form-control" id="nama_cl" name="nama_cl" value="{{ $cabanglatihan->nama_cl }}" required>
                </div>

                <div class="mb-3">
                    <label for="kategori_cl" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategori_cl" name="kategori_cl" value="{{ $cabanglatihan->kategori_cl }}" required>
                </div>

                <div class="mb-3">
                    <label for="alamat_cl" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat_cl" name="alamat_cl" value="{{ $cabanglatihan->alamat_cl }}" required>
                </div>

                <div class="mb-3">
                    <label for="sk_cl" class="form-label">SK</label>
                    <input type="text" class="form-control" id="sk_cl" name="sk_cl" value="{{ $cabanglatihan->sk_cl }}" required>
                </div>

                <div class="mb-3">
                    <label for="pelatih_cl" class="form-label">Pelatih</label>
                    <input type="text" class="form-control" id="pelatih_cl" name="pelatih_cl" value="{{ $cabanglatihan->pelatih_cl }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="/dashboard/cabanglatihan" class="btn btn-secondary">
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
