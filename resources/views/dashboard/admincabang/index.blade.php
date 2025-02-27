@extends('dashboard.layout.index')
@section('content')
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Admin Cabang</h1>
            <a href="#" class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#createModal"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Admin Cabang</a>
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
                                <th>Username</th>
                                <th>Email</th>
                                <th>Nama Cabang Latihan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admincabangs as $admincabang)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$admincabang->username}}</td>
                                <td>{{$admincabang->email}}</td>
                                <td>{{$admincabang->nama_cl}}</td>
                                <td>{{$admincabang->status}}</td>
                                <td>
                                    <a href="/dashboard/cabanglatihan/admincabang/edit/{{$admincabang->id}}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="/dashboard/cabanglatihan/admincabang/show/{{$admincabang->id}}" class="btn btn-info btn-sm">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <form action="/dashboard/cabanglatihan/admincabang/delete/{{$admincabang->id}}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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

        <!-- Modal Create Admin Cabang -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="createModalLabel">Tambah Admin Cabang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/dashboard/cabanglatihan/admincabang/store" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="kode_ac" class="form-label">Kode Admin Cabang</label>
                                <input type="text" class="form-control" id="kode_ac" name="kode_ac">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_cl" class="form-label">Nama Cabang Latihan</label>
                                <input type="text" class="form-control" id="nama_cl" name="nama_cl">
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
