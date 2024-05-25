<?php

namespace Database\Seeders;

use App\Models\ProductHukum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductHukumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            "category_hukum_id" => 1,
            "nama" => "Peraturan BPK Nomor 1 Tahun 2013",
            "deskripsi" => "Perubahan Atas Peraturan Badan Pemeriksa Keuangan Nomor 1 Tahun 2011 Tentang Majelis Kehormatan Kode Etik Badan Pemeriksa Keuangan",
            "judul" => "Peraturan Badan Pemeriksa Keuangan Nomor 1 Tahun 2013 tentang Perubahan Atas Peraturan Badan Pemeriksa Keuangan Nomor 1 Tahun 2011 Tentang Majelis Kehormatan Kode Etik Badan Pemeriksa Keuangan",
            "tipe_dokumen" => "Peraturan Perundang-undangan",
            "tahun" => "2013",
            "tempat_penetapan" => "Jakarta",
            "tanggal_penetapan" => "2013-11-29",
            "tanggal_pengundangan" => "2013-11-29",
            "tanggal_berlaku" => "2013-11-29",
            "sumber" => "LN 2013 No. 189 : 3 hlm.",
            "status" => "Tidak Berlaku",
            "bahasa" => "Bahasa Indonesia",
            "lokasi" => "BPK RI",
            "status_hukum" => json_encode([
                "dicabut" => "dicabut oleh peraturan contoh",
                "mengubah" => "diubah oleh peraturan contoh"
            ]),
        ];
        $productHukum = ProductHukum::create($data);
        $productHukum->save();

        $data2 = [
            
            "category_hukum_id" => 1,
            "nama" => "Peraturan BPK Nomor 2 Tahun 2011 tentang Kode Etik Badan Pemeriksa Keuangan",
            "deskripsi" => "Peraturan Badan Pemeriksa Keuangan ini berisi tentang Kode Etik yang harus diikuti oleh anggota Badan Pemeriksa Keuangan.",
            "judul" => "Peraturan Badan Pemeriksa Keuangan Nomor 2 Tahun 2011 tentang Kode Etik Badan Pemeriksa Keuangan",
            "tipe_dokumen" => "Peraturan Perundang-undangan",
            "tahun" => "2011",
            "tempat_penetapan" => "Jakarta",
            "tanggal_penetapan" => "07 Oktober 2011",
            "tanggal_pengundangan" => "07 Oktober 2011",
            "tanggal_berlaku" => "07 Oktober 2011",
            "sumber" => "LN 2011 (98), TLN 5245 : 10 hlm.",
            // "subjek" => "KEPEGAWAIAN, APARATUR NEGARA - KODE ETIK",
            "status" => "Tidak Berlaku",
            "bahasa" => "Bahasa Indonesia",
            "lokasi" => "BPK RI",
            "status_hukum" => json_encode([
                "dicabut" => "dicabut oleh peraturan contoh",
                "mengubah" => "diubah oleh peraturan contoh"
            ]),
        ];

        $productHukums = ProductHukum::query()->create($data2);
        $productHukums->save();
        
        $data3 = [
            
            "category_hukum_id" => 1,
            "nama" => "tiga Peraturan BPK Nomor 2 Tahun 2011 tentang Kode Etik Badan Pemeriksa Keuangan",
            "deskripsi" => "Peraturan Badan Pemeriksa Keuangan ini berisi tentang Kode Etik yang harus diikuti oleh anggota Badan Pemeriksa Keuangan.",
            "judul" => "Peraturan Badan Pemeriksa Keuangan Nomor 2 Tahun 2011 tentang Kode Etik Badan Pemeriksa Keuangan",
            "tipe_dokumen" => "Peraturan Perundang-undangan",
            "tahun" => "2011",
            "tempat_penetapan" => "Jakarta",
            "tanggal_penetapan" => "07 Oktober 2011",
            "tanggal_pengundangan" => "07 Oktober 2011",
            "tanggal_berlaku" => "07 Oktober 2011",
            "sumber" => "LN 2011 (98), TLN 5245 : 10 hlm.",
            // "subjek" => "KEPEGAWAIAN, APARATUR NEGARA - KODE ETIK",
            "status" => "Tidak Berlaku",
            "bahasa" => "Bahasa Indonesia",
            "lokasi" => "BPK RI",
            "status_hukum" => json_encode([
                "dicabut" => "dicabut oleh peraturan contoh",
                "mengubah" => "diubah oleh peraturan contoh"
            ]),
        ];
        
        $productHukums = ProductHukum::query()->create($data3);
        $productHukums->save();


        $data4 = [
            
            "category_hukum_id" => 1,
            "nama" => "tiga Peraturan BPK Nomor 2 Tahun 2011 tentang Kode Etik Badan Pemeriksa Keuangan",
            "deskripsi" => "Peraturan Badan Pemeriksa Keuangan ini berisi tentang Kode Etik yang harus diikuti oleh anggota Badan Pemeriksa Keuangan.",
            "judul" => "Peraturan Badan Pemeriksa Keuangan Nomor 2 Tahun 2011 tentang Kode Etik Badan Pemeriksa Keuangan",
            "tipe_dokumen" => "Peraturan Perundang-undangan",
            "tahun" => "2011",
            "tempat_penetapan" => "Jakarta",
            "tanggal_penetapan" => "07 Oktober 2011",
            "tanggal_pengundangan" => "07 Oktober 2011",
            "tanggal_berlaku" => "07 Oktober 2011",
            "sumber" => "LN 2011 (98), TLN 5245 : 10 hlm.",
            // "subjek" => "KEPEGAWAIAN, APARATUR NEGARA - KODE ETIK",
            "status" => "Tidak Berlaku",
            "bahasa" => "Bahasa Indonesia",
            "lokasi" => "BPK RI",
            "status_hukum" => json_encode([
                "dicabut" => "dicabut oleh peraturan contoh",
                "mengubah" => "diubah oleh peraturan contoh"
            ]),
        ];

        $productHukums = ProductHukum::query()->create($data4);
        $productHukums->save();


       
        $data4 = [
            
            "category_hukum_id" => 1,
            "nama" => "tiga Peraturan BPK Nomor 2 Tahun 2011 tentang Kode Etik Badan Pemeriksa Keuangan",
            "deskripsi" => "Peraturan Badan Pemeriksa Keuangan ini berisi tentang Kode Etik yang harus diikuti oleh anggota Badan Pemeriksa Keuangan.",
            "judul" => "Peraturan Badan Pemeriksa Keuangan Nomor 2 Tahun 2011 tentang Kode Etik Badan Pemeriksa Keuangan",
            "tipe_dokumen" => "Peraturan Perundang-undangan",
            "tahun" => "2011",
            "tempat_penetapan" => "Jakarta",
            "tanggal_penetapan" => "07 Oktober 2011",
            "tanggal_pengundangan" => "07 Oktober 2011",
            "tanggal_berlaku" => "07 Oktober 2011",
            "sumber" => "LN 2011 (98), TLN 5245 : 10 hlm.",
            // "subjek" => "KEPEGAWAIAN, APARATUR NEGARA - KODE ETIK",
            "status" => "Tidak Berlaku",
            "bahasa" => "Bahasa Indonesia",
            "lokasi" => "BPK RI",
            "status_hukum" => json_encode([
                "dicabut" => "dicabut oleh peraturan contoh",
                "mengubah" => "diubah oleh peraturan contoh"
            ]),
        ];

        $productHukums = ProductHukum::query()->create($data4);
        $productHukums->save();


    }
}
