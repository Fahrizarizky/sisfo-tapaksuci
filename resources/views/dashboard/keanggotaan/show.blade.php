@extends('dashboard.layout.index')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5>Detail Keanggotaan</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered ">
                <tr>
                    <th>Nomor Induk Keanggotaan Daerah (NIDK)</th>
                    <td>{{ $keanggotaan->nikd }}</td>
                </tr>
                <tr>
                    <th>Nomor Baku Tapak Suci (NBTS)</th>
                    <td>{{ $keanggotaan->nbts }}</td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $keanggotaan->nama }}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{ $keanggotaan->tempat_lahir }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $keanggotaan->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <th>Tahun Masuk Tapak Suci</th>
                    <td>{{ $keanggotaan->tahun_masuk }}</td>
                </tr>
                <tr>
                    <th>Tingkatan Terkini</th>
                    <td>{{ $keanggotaan->tingkatan_terkini }}</td>
                </tr>
            </table>
            <div class="d-flex justify-content-between">
                <a href="/dashboard/keanggotaan" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
