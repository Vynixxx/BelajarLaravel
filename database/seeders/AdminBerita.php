<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminBerita extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('berita')->insert([
            'judul' => 'Diklat Pembelajaran Berbasis Industri Angkatan II (Kedua) Tingkat SMK Negeri dan Swasta Se-Provinsi Riau Tahun 2023',
            'konten' => 'Diklat Pembelajaran Berbasis Industri Angkatan II (Kedua) Tingkat SMK Negeri dan Swasta Se-Provinsi Riau Tahun 2023'
        ]);
    }
}
