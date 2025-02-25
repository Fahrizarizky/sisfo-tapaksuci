@extends('dashboard.layout.index')
@section('content')
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ketingkatan</h1>
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                <i class="bi bi-plus-square"></i> Tingkatan
            </button>
        </div>

         <!-- Modal Create -->
         <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="createModalLabel">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/dashboard/ketingkatan/store" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Kode</label>
                                <input type="text" name="kode" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <input type="text" name="kategori" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tingkatan</label>
                                <input type="text" name="tingkatan" class="form-control" required>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Tingkatan</h6>

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
                                <th>Kode</th>
                                <th>Kategori</th>
                                <th>Tingkatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ketingkatans as $ketingkatan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ketingkatan->kode }}</td>
                                <td>{{ $ketingkatan->kategori }}</td>
                                <td>{{ $ketingkatan->tingkatan }}</td>
                                <td>
                                    <!-- Tombol Edit -->
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $ketingkatan->id }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>

                                    <!-- Tombol Hapus -->
                                    <form action="/dashboard/ketingkatan/delete/{{$ketingkatan->id}}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                                
                            {{-- Modal Edit --}}
                            <div class="modal fade" id="editModal{{ $ketingkatan->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $ketingkatan->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning text-white">
                                            <h5 class="modal-title" id="editModalLabel{{ $ketingkatan->id }}">Edit Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/dashboard/ketingkatan/update/{{$ketingkatan->id}}" method="POST">
                                                @csrf
                                                @method('PUT')

                                                <div class="mb-3">
                                                    <label class="form-label">Kode</label>
                                                    <input type="text" name="kode" class="form-control" value="{{ $ketingkatan->kode }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Kategori</label>
                                                    <input type="text" name="kategori" class="form-control" value="{{ $ketingkatan->kategori }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Tingkatan</label>
                                                    <input type="text" name="tingkatan" class="form-control" value="{{ $ketingkatan->tingkatan }}" required>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
@endsection