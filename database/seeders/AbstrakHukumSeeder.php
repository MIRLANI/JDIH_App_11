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
            "user_id" => 1,
            "title" => "PERATURAN DEKAN TENTANG KURIKULUM FAKULTAS MIPA",
            "materi_pokok" => "Peraturan ini mengatur kurikulum baru yang akan diterapkan di Fakultas MIPA mulai tahun ajaran 2024/2025.",
            "abstrak" => "Peraturan ini bertujuan untuk memperbarui dan menyelaraskan kurikulum Fakultas MIPA dengan perkembangan ilmu pengetahuan dan teknologi terkini. Kurikulum baru mencakup penambahan mata kuliah pilihan, peningkatan jumlah SKS untuk mata kuliah inti, dan penyempurnaan metode pembelajaran.
        Dasar hukum peraturan ini adalah Keputusan Rektor Nomor 10 Tahun 2023.
        Peraturan ini diharapkan dapat meningkatkan kualitas pendidikan dan lulusan Fakultas MIPA.",
            "catatan" => "Peraturan ini mulai berlaku pada tanggal 1 Agustus 2024."
        ];
        $abstrakHukum = AbstrakHukum::query()->create($data1);
        $abstrakHukum->save();

        $data2 = [
            "produk_hukum_id" => "2",
            "user_id" => 1,
            "title" => "PERATURAN REKTOR TENTANG PENELITIAN DAN PENGABDIAN MASYARAKAT DI FAKULTAS MIPA",
            "materi_pokok" => "Peraturan ini mengatur prosedur dan standar untuk kegiatan penelitian dan pengabdian masyarakat yang dilakukan oleh dosen dan mahasiswa di Fakultas MIPA.",
            "abstrak" => "Peraturan ini bertujuan untuk memastikan bahwa kegiatan penelitian dan pengabdian masyarakat di Fakultas MIPA dilakukan dengan standar yang tinggi dan memberikan dampak positif bagi masyarakat. 
        Dasar hukum peraturan ini adalah UU Nomor 12 Tahun 2012 tentang Pendidikan Tinggi.
        Kegiatan penelitian harus disesuaikan dengan kebutuhan masyarakat dan perkembangan ilmu pengetahuan. Peraturan ini juga mengatur mekanisme pendanaan dan pelaporan hasil penelitian.",
            "catatan" => "Peraturan ini mulai berlaku pada tanggal 1 Januari 2024."
        ];
        $abstrakHukum = AbstrakHukum::query()->create($data2);
        $abstrakHukum->save();

        $data3 = [
            "produk_hukum_id" => "3",
            "user_id" => 1,
            "title" => "PERATURAN DEKAN TENTANG PENGGUNAAN LABORATORIUM FAKULTAS MIPA",
            "materi_pokok" => "Peraturan ini mengatur penggunaan dan pemeliharaan fasilitas laboratorium di Fakultas MIPA.",
            "abstrak" => "Peraturan ini bertujuan untuk memastikan bahwa fasilitas laboratorium di Fakultas MIPA digunakan secara optimal dan aman. 
        Dasar hukum peraturan ini adalah Peraturan Rektor Nomor 8 Tahun 2023.
        Penggunaan laboratorium harus mengikuti prosedur yang ditetapkan, termasuk pemakaian alat pelindung diri dan pemeliharaan peralatan laboratorium. Peraturan ini juga mengatur jadwal penggunaan laboratorium untuk kegiatan praktikum dan penelitian.",
            "catatan" => "Peraturan ini mulai berlaku pada tanggal 15 Februari 2024."
        ];
        $abstrakHukum = AbstrakHukum::query()->create($data3);
        $abstrakHukum->save();

        $data4 = [
            "produk_hukum_id" => "4",
            "user_id" => 1,
            "title" => "PERATURAN DEKAN TENTANG BEASISWA FAKULTAS MIPA",
            "materi_pokok" => "Peraturan ini mengatur tata cara pemberian beasiswa bagi mahasiswa Fakultas MIPA yang berprestasi dan kurang mampu secara ekonomi.",
            "abstrak" => "Peraturan ini bertujuan untuk memberikan kesempatan kepada mahasiswa berprestasi dan kurang mampu secara ekonomi untuk mendapatkan beasiswa di Fakultas MIPA. 
        Dasar hukum peraturan ini adalah Keputusan Rektor Nomor 15 Tahun 2022.
        Beasiswa akan diberikan berdasarkan kriteria akademik dan kondisi ekonomi. Peraturan ini juga mengatur mekanisme seleksi dan pemberian beasiswa, serta kewajiban penerima beasiswa.",
            "catatan" => "Peraturan ini mulai berlaku pada tanggal 1 Maret 2024."
        ];
        $abstrakHukum = AbstrakHukum::query()->create($data4);
        $abstrakHukum->save();

        $data5 = [
            "produk_hukum_id" => "5",
            "user_id" => 1,
            "title" => "PERATURAN REKTOR TENTANG KODE ETIK DOSEN DAN MAHASISWA FAKULTAS MIPA",
            "materi_pokok" => "Peraturan ini mengatur kode etik yang harus diikuti oleh dosen dan mahasiswa di Fakultas MIPA.",
            "abstrak" => "Peraturan ini bertujuan untuk menjaga integritas dan profesionalisme dosen dan mahasiswa di Fakultas MIPA. 
        Dasar hukum peraturan ini adalah UU Nomor 14 Tahun 2005 tentang Guru dan Dosen.
        Kode etik ini mencakup pedoman perilaku, prinsip integritas, dan ketentuan sanksi bagi pelanggaran. Peraturan ini diharapkan dapat menciptakan lingkungan akademik yang kondusif dan bermartabat.",
            "catatan" => "Peraturan ini mulai berlaku pada tanggal 1 Juli 2024."
        ];
        $abstrakHukum = AbstrakHukum::query()->create($data5);
        $abstrakHukum->save();
    }
}
