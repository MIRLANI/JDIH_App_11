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
         "nama" => "TATA TERTIB AKADEMIK"
     ]);
     SubjekHukum::query()->create([
         "nama" => "KODE ETIK MAHASISWA"
     ]);
     SubjekHukum::query()->create([
         "nama" => "PELAKSANAAN PRAKTIKUM"
     ]);
     SubjekHukum::query()->create([
         "nama" => "TATA CARA UJIAN AKHIR"
     ]);
     SubjekHukum::query()->create([
         "nama" => "PENULISAN SKRIPSI"
     ]);
     SubjekHukum::query()->create([
         "nama" => "PENGELOLAAN LABORATORIUM"
     ]);
     SubjekHukum::query()->create([
         "nama" => "KEGIATAN KEMAHASISWAAN"
     ]);
     SubjekHukum::query()->create([
         "nama" => "PENILAIAN AKADEMIK"
     ]);
     SubjekHukum::query()->create([
         "nama" => "PEMBIMBINGAN AKADEMIK"
     ]);
     SubjekHukum::query()->create([
         "nama" => "PENANGANAN KASUS PELANGGARAN"
     ]);
     
    }
}
