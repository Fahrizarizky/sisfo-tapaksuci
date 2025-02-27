<?php

namespace Database\Seeders;

use App\Models\Keanggotaan;
use App\Models\Ketingkatan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Ketingkatan::create([
            'kode' => '001',
            'kategori' => 'Pendekar',
            'tingkatan' => 'Pendekar Besar'
        ]);
        Ketingkatan::create([
            'kode' => '002',
            'kategori' => 'Pendekar',
            'tingkatan' => 'Pendekar Utama'
        ]);
        Ketingkatan::create([
            'kode' => '003',
            'kategori' => 'Pendekar',
            'tingkatan' => 'Pendekar Kepala'
        ]);
        Ketingkatan::create([
            'kode' => '004',
            'kategori' => 'Pendekar',
            'tingkatan' => 'Pendekar Madya'
        ]);
        Ketingkatan::create([
            'kode' => '005',
            'kategori' => 'Pendekar',
            'tingkatan' => 'Pendekar Muda'
        ]);
        Ketingkatan::create([
            'kode' => '006',
            'kategori' => 'Kader',
            'tingkatan' => 'Kader Utama'
        ]);
        Ketingkatan::create([
            'kode' => '007',
            'kategori' => 'Kader',
            'tingkatan' => 'Kader Kepala'
        ]);
        Ketingkatan::create([
            'kode' => '008',
            'kategori' => 'Kader',
            'tingkatan' => 'Kader Madya'
        ]);
        Ketingkatan::create([
            'kode' => '009',
            'kategori' => 'Kader',
            'tingkatan' => 'Kader Muda'
        ]);
        Ketingkatan::create([
            'kode' => '0010',
            'kategori' => 'Kader',
            'tingkatan' => 'Kader Dasar'
        ]);
        Ketingkatan::create([
            'kode' => '0011',
            'kategori' => 'Siswa',
            'tingkatan' => 'Siswa 4'
        ]);
        Ketingkatan::create([
            'kode' => '0012',
            'kategori' => 'Siswa',
            'tingkatan' => 'Siswa 3'
        ]);
        Ketingkatan::create([
            'kode' => '0013',
            'kategori' => 'Siswa',
            'tingkatan' => 'Siswa 2'
        ]);
        Ketingkatan::create([
            'kode' => '0014',
            'kategori' => 'Siswa',
            'tingkatan' => 'Siswa 1'
        ]);
        Ketingkatan::create([
            'kode' => '0015',
            'kategori' => 'Siswa',
            'tingkatan' => 'Siswa Dasar'
        ]);

        // Keanggotaan::create([
        //     'nikd' => '1',
        //     'nbts' => '1',
        //     'nama' => 'nama 1',
        //     'jenis_kelamin' => 'pria',
        //     'tempat_lahir' => 'tempat 1',
        //     'tanggal_lahir' => date(now()),
        //     'tahun_masuk'
        // ]);
    }
}
