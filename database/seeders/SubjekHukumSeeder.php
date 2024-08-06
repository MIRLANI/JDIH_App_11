<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class SubjekHukumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::query()->create([
            'nama' => 'Tata Tertib Akademik',
        ]);
        Tag::query()->create([
            'nama' => 'Kode Etik Mahasiswa',
        ]);
        Tag::query()->create([
            'nama' => 'Pelaksanaan Praktikum',
        ]);
        Tag::query()->create([
            'nama' => 'Tata Cara Ujian Akhir',
        ]);
        Tag::query()->create([
            'nama' => 'Penulisan Skripsi',
        ]);
        Tag::query()->create([
            'nama' => 'Pengelolaan Laboratorium',
        ]);
        Tag::query()->create([
            'nama' => 'Kegiatan Kemahasiswaan',
        ]);
        Tag::query()->create([
            'nama' => 'Penilaian Akademik',
        ]);
        Tag::query()->create([
            'nama' => 'Pembimbingan Akademik',
        ]);
        Tag::query()->create([
            'nama' => 'Penanganan Kasus Pelanggaran',
        ]);

    }
}
