<?php

namespace App\Http\Controllers;

use App\Models\Cabanglatihan;
use App\Models\User;
use Illuminate\Http\Request;

class CabangLatihanController extends Controller
{
    public function index() {
        $cabanglatihans = Cabanglatihan::latest()->get();
        return view('dashboard.cabanglatihan.index', compact('cabanglatihans'));
    }

    public function storeCabanglatihan() {
        Cabanglatihan::create([
            'nicl' => request('nicl'),
            'nama_cl' => request('nama_cl'),
            'kategori_cl' => request('kategori_cl'),
            'alamat_cl' => request('alamat_cl'),
            'sk_cl' => request('sk_cl'),
            'pelatih_cl' => request('pelatih_cl'),
        ]);
        return redirect('/dashboard/cabanglatihan')->with('message', 'Berhasil menambahkan data');
    }

    public function editCabanglatihan($id) {
        $cabanglatihan = Cabanglatihan::find($id);
        return view('dashboard.cabanglatihan.edit', compact('cabanglatihan'));
    }

    public function updateCabanglatihan($id) {
        $cabanglatihan = Cabanglatihan::find($id);
        $cabanglatihan->update([
            'nicl' => request('nicl'),
            'nama_cl' => request('nama_cl'),
            'kategori_cl' => request('kategori_cl'),
            'alamat_cl' => request('alamat_cl'),
            'sk_cl' => request('sk_cl'),
            'pelatih_cl' => request('pelatih_cl'),
        ]);
        return redirect('/dashboard/cabanglatihan')->with('message', 'Berhasil mengubah data');
    }

    public function deleteCabanglatihan($id) {
        $cabanglatihan = Cabanglatihan::find($id);
        $cabanglatihan->delete();
        return redirect('/dashboard/cabanglatihan')->with('message', 'Berhasil menghapus data');
    }

    // CRUD ADMIN CABANG
    public function indexAdmincabang() {
        $admincabangs = User::where('role','admin cabang')->latest()->get();
        return view('dashboard.admincabang.index', compact('admincabangs'));
    }

    public function storeAdmincabang() {
        User::create([
            'kode_ac' => request('kode_ac'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password'),
            'nama_cl' => request('nama_cl'),
            'role' => 'admin cabang',
            'status' => true
        ]);
        return redirect('/dashboard/cabanglatihan/admincabang')->with('message', 'Berhasil menambahkan data');
    }

    public function editAdmincabang($id) {
        $admincabang = User::find($id);    
        return view('dashboard.admincabang.edit', compact('admincabang'));
    }

    public function updateAdmincabang($id) {
        $admincabang = User::find($id);
        $admincabang->update([
            'kode_ac' => request('kode_ac'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password'),
            'nama_cl' => request('nama_cl'),
            'role' => request('role'),
            'status' => request('status')
        ]);
        return redirect('/dashboard/cabanglatihan/admincabang')->with('message', 'Berhasil mengubah data');
    }

    public function deleteAdmincabang($id) {
        $admincabang = User::find($id);
        $admincabang->delete();
        return redirect('/dashboard/cabanglatihan/admincabang')->with('message', 'Berhasil menghapus data');
    }
}
