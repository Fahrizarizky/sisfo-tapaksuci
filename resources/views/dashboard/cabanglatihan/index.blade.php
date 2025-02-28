@extends('dashboard.layout.index')
@section('content')
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Cabang Latihan</h1>
            <a href="#" class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#createModal"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Cabang Latihan</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>

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
                                <th>NICL</th>
                                <th>Nama Cabang</th>
                                <th>Kategori</th>
                                <th>Alamat</th>
                                <th>SK</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cabanglatihans as $cabanglatihan)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$cabanglatihan->nicl}}</td>
                                <td>{{$cabanglatihan->nama_cl}}</td>
                                <td>{{$cabanglatihan->kategori_cl}}</td>
                                <td>{{$cabanglatihan->alamat_cl}}</td>
                                <td>{{$cabanglatihan->sk_cl}}</td>
                                <td>
                                    <a href="/dashboard/cabanglatihan/edit/{{$cabanglatihan->id}}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="/dashboard/cabanglatihan/delete/{{$cabanglatihan->id}}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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

        <!-- Modal Create -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="createModalLabel">Tambah Cabang Latihan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/dashboard/cabanglatihan/store" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nicl" class="form-label">NICL</label>
                                <input type="text" class="form-control" id="nicl" name="nicl" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_cl" class="form-label">Nama Cabang</label>
                                <input type="text" class="form-control" id="nama_cl" name="nama_cl" required>
                            </div>
                            <div class="mb-3">
                                <label for="kategori_cl" class="form-label">Kategori</label>
                                <input type="text" class="form-control" id="kategori_cl" name="kategori_cl" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat_cl" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat_cl" name="alamat_cl" required>
                            </div>
                            <div class="mb-3">
                                <label for="sk_cl" class="form-label">SK</label>
                                <input type="text" class="form-control" id="sk_cl" name="sk_cl" required>
                            </div>
                            <div class="mb-3">
                                <label for="pelatih_cl" class="form-label">Pelatih</label>
                                <input type="text" class="form-control" id="pelatih_cl" name="pelatih_cl" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
