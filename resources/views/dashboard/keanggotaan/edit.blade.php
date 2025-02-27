@extends('dashboard.layout.index')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5>Edit Data keanggotaan</h5>
        </div>
        <div class="card-body">
            <form action="/dashboard/keanggotaan/update/{{$keanggotaan->id}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nikd" class="form-label">NIKD</label>
                    <input type="text" class="form-control" id="nikd" name="nikd" value="{{$keanggotaan->nikd}}" required>
                </div>
                <div class="mb-3">
                    <label for="nbts" class="form-label">NBTS</label>
                    <input type="text" class="form-control" id="nbts" name="nbts" value="{{$keanggotaan->nbts}}" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$keanggotaan->nama}}" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{$keanggotaan->jenis_kelamin}}" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{$keanggotaan->tempat_lahir}}" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$keanggotaan->tanggal_lahir}}" required>
                </div>
                <div class="mb-3">
                    <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                    <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" value="{{$keanggotaan->tahun_masuk}}" required>
                </div>
                <div class="mb-3">
                    <label for="tingkatan_terkini" class="form-label">Tingkatan Terkini</label>
                    <input type="text" class="form-control" id="tingkatan_terkini" name="tingkatan_terkini" value="{{$keanggotaan->tingkatan_terkini}}" required>
                </div>
                <div class="mb-3">
                    <label for="telp_wa" class="form-label">Telepon / WA</label>
                    <input type="text" class="form-control" id="telp_wa" name="telp_wa" value="{{$keanggotaan->telp_wa}}">
                </div>
                <div class="d-flex justify-content-between">
                    <a href="/dashboard/keanggotaan" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
