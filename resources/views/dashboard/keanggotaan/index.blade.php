@extends('dashboard.layout.index')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Keanggotaan</h1>
    <button class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambahModal">
        <i class="fas fa-plus fa-sm text-white-50"></i> Anggota
    </button>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>

        @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show mt-2 text-center" role="alert">
            {{ session('message' )}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>                  
        @endif

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIKD</th>
                        <th>Nama Anggota</th>
                        <th>Telp/WA</th>
                        <th>Tingkatan</th>
                        <th>Tahun Masuk</th>
                        <th>Riwayat Kaderisasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keanggotaans as $keanggotaan)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$keanggotaan->nikd}}</td>
                        <td>{{$keanggotaan->nama}}</td>
                        <td>{{$keanggotaan->telp_wa}}</td>
                        <td>{{$keanggotaan->tingkatan_terkini}}</td>
                        <td>{{$keanggotaan->tahun_masuk}}</td>
                        <td>
                            <a href="/dashboard/keanggotaan/edit/{{$keanggotaan->id}}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="/dashboard/keanggotaan/show/{{$keanggotaan->id}}" class="btn btn-info btn-sm">
                                <i class="bi bi-eye"></i>
                            </a>
                            <form action="/dashboard/keanggotaan/delete/{{$keanggotaan->id}}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Anggota Baru</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/keanggotaan/store" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nikd" class="form-label">NIKD</label>
                        <input type="text" class="form-control" id="nikd" name="nikd" required>
                    </div>
                    <div class="mb-3">
                        <label for="nbts" class="form-label">NBTS</label>
                        <input type="text" class="form-control" id="nbts" name="nbts" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                        <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" required>
                    </div>
                    <div class="mb-3">
                        <label for="tingkatan_terkini" class="form-label">Tingkatan Terkini</label>
                        <input type="text" class="form-control" id="tingkatan_terkini" name="tingkatan_terkini" required>
                    </div>
                    <div class="mb-3">
                        <label for="telp_wa" class="form-label">Telepon / WA</label>
                        <input type="text" class="form-control" id="telp_wa" name="telp_wa">
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            <i class="bi bi-arrow-left"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle"></i> Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
