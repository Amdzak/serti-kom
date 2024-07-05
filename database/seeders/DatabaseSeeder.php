<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('arsip_surat')->insert(
            [
                'nomor_surat' => '123/123/123',
                'judul' => "hehe",
                'id_kategori' => 1,
            ],
            [
                'nomor_surat' => '123/123/123',
                'judul' => "hehe",
                'id_kategori' => 2,
            ],
            [
                'nomor_surat' => '123/123/123',
                'judul' => "hehe",
                'id_kategori' => 3,
            ],
        );

        DB::table('kategori_surat')->insert(
            [
                'nama_kategori' => 'Pembangunan Jalan',
                'keterangan' => "pembangunan jalan di daerah masing masing",
            ],
            [
                'nama_kategori' => 'Renovasi Jalan',
                'keterangan' => "pembangunan jalan di daerah masing masing",
            ],
        );
    }
}
