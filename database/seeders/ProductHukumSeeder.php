<?php

namespace Database\Seeders;

use App\Models\Peraturan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductHukumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data1 = [
            "kategori_id" => 1,
            "tahun_id" => 1,
            "password_id" => 1,
            "nama" => "Paduan Penyusunan Skripsi",
            "deskripsi" => "Keputusan Dekan Fakultas Matematika dan Ilmu Pengetahun Alam Universitas Halu Oleo",
            "judul" => " Penetapan Buku Paduan Penyusunana Skripsi Dalam Lingkungan Fakultas Matematika dan Ilmu Pengetahuan Alam",
            "tipe_dokumen" => 1,
            "tempat_penetapan" => "Kendari",
            "tanggal_penetapan" => "2020 juni 15",
            "tanggal_pengundangan" => "2020 juni 08",
            "tanggal_berlaku" => "2020 juni 15",
            "jumlah_halaman" => "2022 No. : 57 hlm.",
            "status" => "Berlaku",
            "bahasa" => "Bahasa Indonesia",
            "lokasi" => "FMIPA UHO",
            "nomor" => "1018/SK/UN29.9/PP/2020",
            // "status_hukum" => json_encode([
            //     "dicabut" => "dicabut oleh peraturan dek 2023",
            //     "mengubah" => "diubah oleh peraturan dek 2024"
            // ]),
            "user_id" => 2
        ];
        $peraturans = Peraturan::create($data1);
        $peraturans->save();

        $data2 = [
            "kategori_id" => 1,
            "tahun_id" => 1,
            "password_id" => 2,
            "nama" => "Peraturan Dekan FMIPA Nomor 2 Tahun 2021 tentang Kode Etik Mahasiswa",
            "deskripsi" => "Peraturan ini berisi tentang kode etik yang harus diikuti oleh mahasiswa FMIPA.",
            "judul" => "Peraturan Dekan FMIPA Nomor 2 Tahun 2021 tentang Kode Etik Mahasiswa",
            "tipe_dokumen" => "Peraturan Internal",
            "tempat_penetapan" => "Kendari",
            "tanggal_penetapan" => "2021-08-10",
            "tanggal_pengundangan" => "2021-08-10",
            "tanggal_berlaku" => "2021-08-10",
            "jumlah_halaman" => "Gazette FMIPA 2021 No. 8: 10 hlm.",
            "status" => "Berlaku",
            "bahasa" => "Bahasa Indonesia",
            "lokasi" => "FMIPA UHO",
            "status_hukum" => json_encode([
                "dicabut" => "dicabut oleh peraturan dek 2023",
                "mengubah" => "diubah oleh peraturan dek 2024"
            ]),
            "user_id" => 2
        ];
        $peraturans = Peraturan::query()->create($data2);
        $peraturans->save();

        $data3 = [
            "kategori_id" => 1,
            "tahun_id" => 1,
            "nama" => "Peraturan Dekan FMIPA Nomor 3 Tahun 2020 tentang Pelaksanaan Praktikum",
            "deskripsi" => "Peraturan ini mengatur tentang pelaksanaan praktikum di lingkungan FMIPA.",
            "judul" => "Peraturan Dekan FMIPA Nomor 3 Tahun 2020 tentang Pelaksanaan Praktikum",
            "tipe_dokumen" => "Peraturan Internal",
            "tempat_penetapan" => "Kendari",
            "tanggal_penetapan" => "2020-03-20",
            "tanggal_pengundangan" => "2020-03-20",
            "tanggal_berlaku" => "2020-03-20",
            "jumlah_halaman" => "Gazette FMIPA 2020 No. 3: 15 hlm.",
            "status" => "Berlaku",
            "bahasa" => "Bahasa Indonesia",
            "lokasi" => "FMIPA UHO",
            "status_hukum" => json_encode([
                "dicabut" => "dicabut oleh peraturan dek 2023",
                "mengubah" => "diubah oleh peraturan dek 2024"
            ]),
            "user_id" => 2
        ];
        $peraturans = Peraturan::query()->create($data3);
        $peraturans->save();

        $data4 = [
            "kategori_id" => 1,
            "tahun_id" => 1,
            "nama" => "Peraturan Dekan FMIPA Nomor 4 Tahun 2019 tentang Tata Cara Ujian Akhir",
            "deskripsi" => "Peraturan ini menjelaskan tata cara pelaksanaan ujian akhir di FMIPA.",
            "judul" => "Peraturan Dekan FMIPA Nomor 4 Tahun 2019 tentang Tata Cara Ujian Akhir",
            "tipe_dokumen" => "Peraturan Internal",
            "tempat_penetapan" => "Kendari",
            "tanggal_penetapan" => "2019-12-10",
            "tanggal_pengundangan" => "2019-12-10",
            "tanggal_berlaku" => "2019-12-10",
            "jumlah_halaman" => "Gazette FMIPA 2019 No. 10: 8 hlm.",
            "status" => "Berlaku",
            "bahasa" => "Bahasa Indonesia",
            "lokasi" => "FMIPA UHO",
            "status_hukum" => json_encode([
                "dicabut" => "dicabut oleh peraturan dek 2023",
                "mengubah" => "diubah oleh peraturan dek 2024"
            ]),
            "user_id" => 2
        ];
        $peraturans = Peraturan::query()->create($data4);
        $peraturans->save();

        $data5 = [
            "kategori_id" => 1,
            "tahun_id" => 1,
            "nama" => "Peraturan Dekan FMIPA Nomor 5 Tahun 2018 tentang Penulisan Skripsi",
            "deskripsi" => "Peraturan ini mengatur tentang tata cara penulisan skripsi di FMIPA.",
            "judul" => "Peraturan Dekan FMIPA Nomor 5 Tahun 2018 tentang Penulisan Skripsi",
            "tipe_dokumen" => "Peraturan Internal",
            "tempat_penetapan" => "Kendari",
            "tanggal_penetapan" => "2018-07-15",
            "tanggal_pengundangan" => "2018-07-15",
            "tanggal_berlaku" => "2018-07-15",
            "jumlah_halaman" => "Gazette FMIPA 2018 No. 7: 12 hlm.",
            "status" => "Berlaku",
            "bahasa" => "Bahasa Indonesia",
            "lokasi" => "FMIPA UHO",
            "status_hukum" => json_encode([
                "dicabut" => "dicabut oleh peraturan dek 2023",
                "mengubah" => "diubah oleh peraturan dek 2024"
            ]),
            "user_id" => 2
        ];
        $peraturans = Peraturan::query()->create($data5);
        $peraturans->save();
    }
}
