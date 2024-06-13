<?php

namespace Database\Seeders;

use App\Models\SubjekHukum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjekHukumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      SubjekHukum::query()->create([
         "nama" => "Tata Tertib Akademik"
     ]);
     SubjekHukum::query()->create([
         "nama" => "Kode Etik Mahasiswa"
     ]);
     SubjekHukum::query()->create([
         "nama" => "Pelaksanaan Praktikum"
     ]);
     SubjekHukum::query()->create([
         "nama" => "Tata Cara Ujian Akhir"
     ]);
     SubjekHukum::query()->create([
         "nama" => "Penulisan Skripsi"
     ]);
     SubjekHukum::query()->create([
         "nama" => "Pengelolaan Laboratorium"
     ]);
     SubjekHukum::query()->create([
         "nama" => "Kegiatan Kemahasiswaan"
     ]);
     SubjekHukum::query()->create([
         "nama" => "Penilaian Akademik"
     ]);
     SubjekHukum::query()->create([
         "nama" => "Pembimbingan Akademik"
     ]);
     SubjekHukum::query()->create([
         "nama" => "Penanganan Kasus Pelanggaran"
     ]);
     
    }
}
