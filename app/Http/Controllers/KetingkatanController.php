<?php

namespace App\Http\Controllers;

use App\Models\Ketingkatan;
use Illuminate\Http\Request;

class KetingkatanController extends Controller
{
    public function index() {
        $ketingkatans = Ketingkatan::latest()->get();
        return view('dashboard.ketingkatan.index', compact('ketingkatans'));
    }

    public function storeKetingkatan() {
        Ketingkatan::create([
            'kode' => request('kode'),
            'kategori' => request('kategori'),
            'tingkatan' => request('tingkatan')
        ]);
        return redirect('dashboard/ketingkatan')->with('message', 'Berhasil menambahkan data');
    }

    public function editKetingkatan($id) {
        $ketingkatan = Ketingkatan::find($id);
        return view('dashboard.ketingkatan.edit',compact('ketingkatan'));
    }

    public function updateKetingkatan($id) {
        $ketingkatan = Ketingkatan::find($id);
        $ketingkatan->update([
            'kode' => request('kode'),
            'kategori' => request('kategori'),
            'tingkatan' => request('tingkatan')
        ]);
        return redirect('dashboard/ketingkatan')->with('message', 'Berhasil mengubah data');
    }

    public function deleteKetingkatan($id) {
        $ketingkatan = Ketingkatan::find($id);
        $ketingkatan->delete();
        return redirect('dashboard/ketingkatan')->with('message', 'Berhasil menghapus data');
    }
}
