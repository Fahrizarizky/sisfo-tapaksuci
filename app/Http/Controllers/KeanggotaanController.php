<?php

namespace App\Http\Controllers;

use App\Models\Keanggotaan;
use Illuminate\Http\Request;

class KeanggotaanController extends Controller
{
    public function index() {
        $keanggotaans = Keanggotaan::latest()->get();
        return view('dashboard.keanggotaan.index', compact('keanggotaans'));
    }

    public function storeKeanggotaan() {
        Keanggotaan::create([
            'nikd' => request('nikd'),
            'nbts' => request('nbts'),
            'nama' => request('nama'),
            'jenis_kelamin' => request('jenis_kelamin'),
            'tempat_lahir' => request('tempat_lahir'),
            'tanggal_lahir' => request('tanggal_lahir'),
            'tahun_masuk' => request('tahun_masuk'),
            'tingkatan_terkini' => request('tingkatan_terkini'),
            'telp_wa' => request('telp_wa')
        ]);
        return redirect('/dashboard/keanggotaan')->with('message', 'Berhasil menambahkan data');
    }

    public function editKeanggotaan($id) {
        $keanggotaan = Keanggotaan::find($id);
        return view('dashboard.keanggotaan.edit', compact('keanggotaan'));
    }

    public function updateKeanggotaan($id) {
        $keanggotaan = Keanggotaan::find($id);
        $keanggotaan->update([
            'nikd' => request('nikd'),
            'nbts' => request('nbts'),
            'nama' => request('nama'),
            'jenis_kelamin' => request('jenis_kelamin'),
            'tempat_lahir' => request('tempat_lahir'),
            'tanggal_lahir' => request('tanggal_lahir'),
            'tahun_masuk' => request('tahun_masuk'),
            'tingkatan_terkini' => request('tingkatan_terkini'),
            'telp_wa' => request('telp_wa')
        ]);
        return redirect('/dashboard/keanggotaan')->with('message', 'Berhasil mengubah data');
    }

    public function showKeanggotaan($id) {
        $keanggotaan = Keanggotaan::find($id);
        return view('dashboard.keanggotaan.show', compact('keanggotaan'));
    }

    public function deleteKeanggotaan($id) {
        $keanggotaan = Keanggotaan::find($id);
        $keanggotaan->delete();
        return redirect('/dashboard/keanggotaan')->with('message', 'Berhasil menghapus data');
    }
}
