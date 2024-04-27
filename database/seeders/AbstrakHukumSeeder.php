<?php

namespace Database\Seeders;

use App\Models\AbstrakHukum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbstrakHukumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data1 = [
            "produk_hukum_id" => "1",
            "title" => "PERATURAN BPK TENTANG PERUBAHAN ATAS PERATURAN BADAN PEMERIKSA KEUANGAN NOMOR 1 TAHUN 2011 TENTANG MAJELIS KEHORMATAN KODE ETIK BADAN PEMERIKSA KEUANGAN",
            "materi_pokok" => "Peraturan BPK ini mengubah beberapa ketentuan dalam Peraturan Badan Pemeriksa Keuangan Nomor 1 Tahun 2011, yaitu Pasal 3 dan Pasal 11. Majelis Kehormatan beranggotan 5 orang yang terdiri dari 2 orang Anggota BPK, 2 orang dari unsur akademi, dan 1 orang dari unsur profesi.",
            "abstrak" => "Untuk meningkatkan independensi dan akuntabilitas Majelis Kehormatan Kode Etik (Majelis Kehormatan) dan Tim Kode Etik, dipandang perlu untuk melakukan perubahan susunan Majelis kehormatan dan Tim Kode Etik sebagaimana diatur dalam Peraturan BPK Nomor 1 Tahun 2011.
            Dasar hukum Peraturan BPK ini adalah UU Nomor 15 Tahun 2006.
            Peraturan BPK ini mengubah beberapa ketentuan dalam Peraturan Badan Pemeriksa Keuangan Nomor 1 Tahun 2011, yaitu Pasal 3 dan Pasal 11. Majelis Kehormatan beranggotan 5 orang yang terdiri dari 2 orang Anggota BPK, 2 orang dari unsur akademi, dan 1 orang dari unsur profesi.",
            "catatan" => "	
            Peraturan BPK ini mulai berlaku pada tanggal 29 November 2013."
        ];
       $abstrakHukum = AbstrakHukum::query()->create($data1);
       $abstrakHukum->save(); 
    }
}
