-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2024 pada 05.32
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jdih_app_11`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abstrak_hukums`
--

CREATE TABLE `abstrak_hukums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produk_hukum_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `materi_pokok` text DEFAULT NULL,
  `abstrak` text DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `abstrak_hukums`
--

INSERT INTO `abstrak_hukums` (`id`, `produk_hukum_id`, `title`, `materi_pokok`, `abstrak`, `catatan`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'PERATURAN DEKAN TENTANG KURIKULUM FAKULTAS MIPA', 'Peraturan ini mengatur kurikulum baru yang akan diterapkan di Fakultas MIPA mulai tahun ajaran 2024/2025.', 'Peraturan ini bertujuan untuk memperbarui dan menyelaraskan kurikulum Fakultas MIPA dengan perkembangan ilmu pengetahuan dan teknologi terkini. Kurikulum baru mencakup penambahan mata kuliah pilihan, peningkatan jumlah SKS untuk mata kuliah inti, dan penyempurnaan metode pembelajaran.\r\n        Dasar hukum peraturan ini adalah Keputusan Rektor Nomor 10 Tahun 2023.\r\n        Peraturan ini diharapkan dapat meningkatkan kualitas pendidikan dan lulusan Fakultas MIPA.', 'Peraturan ini mulai berlaku pada tanggal 1 Agustus 2024.\r\nhello update', 'peraturan-dekan-tentang-kurikulum-fakultas-mipa', NULL, '2024-05-31 06:35:16', '2024-06-03 02:03:16'),
(2, 2, 'PERATURAN REKTOR TENTANG PENELITIAN DAN PENGABDIAN MASYARAKAT DI FAKULTAS MIPA', 'Peraturan ini mengatur prosedur dan standar untuk kegiatan penelitian dan pengabdian masyarakat yang dilakukan oleh dosen dan mahasiswa di Fakultas MIPA.', 'Peraturan ini bertujuan untuk memastikan bahwa kegiatan penelitian dan pengabdian masyarakat di Fakultas MIPA dilakukan dengan standar yang tinggi dan memberikan dampak positif bagi masyarakat. \n        Dasar hukum peraturan ini adalah UU Nomor 12 Tahun 2012 tentang Pendidikan Tinggi.\n        Kegiatan penelitian harus disesuaikan dengan kebutuhan masyarakat dan perkembangan ilmu pengetahuan. Peraturan ini juga mengatur mekanisme pendanaan dan pelaporan hasil penelitian.', 'Peraturan ini mulai berlaku pada tanggal 1 Januari 2024.', 'peraturan-rektor-tentang-penelitian-dan-pengabdian-masyarakat-di-fakultas-mipa', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(3, 3, 'PERATURAN DEKAN TENTANG PENGGUNAAN LABORATORIUM FAKULTAS MIPA', 'Peraturan ini mengatur penggunaan dan pemeliharaan fasilitas laboratorium di Fakultas MIPA.', 'Peraturan ini bertujuan untuk memastikan bahwa fasilitas laboratorium di Fakultas MIPA digunakan secara optimal dan aman. \n        Dasar hukum peraturan ini adalah Peraturan Rektor Nomor 8 Tahun 2023.\n        Penggunaan laboratorium harus mengikuti prosedur yang ditetapkan, termasuk pemakaian alat pelindung diri dan pemeliharaan peralatan laboratorium. Peraturan ini juga mengatur jadwal penggunaan laboratorium untuk kegiatan praktikum dan penelitian.', 'Peraturan ini mulai berlaku pada tanggal 15 Februari 2024.', 'peraturan-dekan-tentang-penggunaan-laboratorium-fakultas-mipa', '2024-05-31 08:28:07', '2024-05-31 06:35:16', '2024-05-31 08:28:07'),
(4, 4, 'PERATURAN DEKAN TENTANG BEASISWA FAKULTAS MIPA', 'Peraturan ini mengatur tata cara pemberian beasiswa bagi mahasiswa Fakultas MIPA yang berprestasi dan kurang mampu secara ekonomi.', 'Peraturan ini bertujuan untuk memberikan kesempatan kepada mahasiswa berprestasi dan kurang mampu secara ekonomi untuk mendapatkan beasiswa di Fakultas MIPA. \r\n        Dasar hukum peraturan ini adalah Keputusan Rektor Nomor 15 Tahun 2022.\r\n        Beasiswa akan diberikan berdasarkan kriteria akademik dan kondisi ekonomi. Peraturan ini juga mengatur mekanisme seleksi dan pemberian beasiswa, serta kewajiban penerima beasiswa.', 'Peraturan ini mulai berlaku pada tanggal 1 Maret 2024.\r\nhello update peraturan', 'peraturan-dekan-tentang-beasiswa-fakultas-mipa', NULL, '2024-05-31 06:35:16', '2024-06-03 02:03:37'),
(5, 5, 'PERATURAN REKTOR TENTANG KODE ETIK DOSEN DAN MAHASISWA FAKULTAS MIPA', 'Peraturan ini mengatur kode etik yang harus diikuti oleh dosen dan mahasiswa di Fakultas MIPA.', 'Peraturan ini bertujuan untuk menjaga integritas dan profesionalisme dosen dan mahasiswa di Fakultas MIPA. \n        Dasar hukum peraturan ini adalah UU Nomor 14 Tahun 2005 tentang Guru dan Dosen.\n        Kode etik ini mencakup pedoman perilaku, prinsip integritas, dan ketentuan sanksi bagi pelanggaran. Peraturan ini diharapkan dapat menciptakan lingkungan akademik yang kondusif dan bermartabat.', 'Peraturan ini mulai berlaku pada tanggal 1 Juli 2024.', 'peraturan-rektor-tentang-kode-etik-dosen-dan-mahasiswa-fakultas-mipa', '2024-05-31 08:27:59', '2024-05-31 06:35:16', '2024-05-31 08:27:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_hukums`
--

CREATE TABLE `category_hukums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category_hukums`
--

INSERT INTO `category_hukums` (`id`, `title`, `short_title`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Peraturan Dekan FMIPA', 'Peraturan Dekan', 'peraturan-dekan-fmipa', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(2, 'Peraturan Rektor Universitas', 'Peraturan Rektor', 'peraturan-rektor-universitas', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(3, 'Surat Edaran FMIPA', 'Surat Edaran', 'surat-edaran-fmipa', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(4, 'Keputusan Dekan FMIPA', 'Keputusan Dekan', 'keputusan-dekan-fmipa', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(5, 'Panduan Akademik', 'Panduan', 'panduan-akademik', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(6, 'Peraturan Fakultas', 'Peraturan Fakultas', 'peraturan-fakultas', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(7, 'Keputusan Rektor', 'Keputusan Rektor', 'keputusan-rektor', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(8, 'Instruksi Dekan', 'Instruksi Dekan', 'instruksi-dekan', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(9, 'Instruksi Rektor', 'Instruksi Rektor', 'instruksi-rektor', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(10, 'Prosedur Operasional Standar', 'POS', 'prosedur-operasional-standar', NULL, '2024-05-31 06:35:16', '2024-05-31 08:34:31'),
(11, 'Petunjuk Teknis', 'Juknis', 'petunjuk-teknis', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(12, 'Petunjuk Pelaksanaan', 'Juklak', 'petunjuk-pelaksanaan', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(13, 'Pedoman Akademik', 'Pedoman Akademik', 'pedoman-akademik', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(14, 'Surat Keputusan Dekan', 'SK Dekan', 'surat-keputusan-dekan', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(15, 'Surat Keputusan Rektor', 'SK Rektor', 'surat-keputusan-rektor', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(16, 'Nota Dinas', 'Nota Dinas', 'nota-dinas', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(17, 'Peraturan Akademik', 'Peraturan Akademik', 'peraturan-akademik', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(18, 'Kode Etik Mahasiswa', 'Kode Etik', 'kode-etik-mahasiswa', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(19, 'Prosedur Administrasi', 'Prosedur Administrasi', 'prosedur-administrasi', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(20, 'Prosedur Keuangan', 'Prosedur Keuangan', 'prosedur-keuangan', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_13_080534_create_product_hukums_table', 1),
(5, '2024_04_13_085401_create_category_hukums_table', 1),
(6, '2024_04_13_234119_add_fk_to_product_hukums', 1),
(7, '2024_04_14_000746_create_subjek_hukums_table', 1),
(8, '2024_04_14_000939_create_subjek_product_hukums_table', 1),
(9, '2024_04_20_151819_create_abstrak_hukums_table', 1),
(10, '2024_05_27_131414_create_tahuns_table', 1),
(11, '2024_05_27_132120_add_fk_tahuns_to_product_hukums_table', 1),
(12, '2024_05_30_124457_create_tipe_hukums_table', 1),
(13, '2024_05_30_133119_add_fk_tipe_hukum_to_product_hukums_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_hukums`
--

CREATE TABLE `product_hukums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_hukum_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tahun_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tipe_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `tipe_dokumen` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `tempat_penetapan` varchar(255) DEFAULT NULL,
  `tanggal_penetapan` varchar(255) DEFAULT NULL,
  `tanggal_pengundangan` varchar(255) DEFAULT NULL,
  `tanggal_berlaku` varchar(255) DEFAULT NULL,
  `sumber` varchar(255) DEFAULT NULL,
  `status` enum('berlaku','tidak berlaku') DEFAULT NULL,
  `bahasa` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `teu` varchar(255) DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `bidang` varchar(255) DEFAULT NULL,
  `status_hukum` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `review` int(11) DEFAULT NULL,
  `download` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_hukums`
--

INSERT INTO `product_hukums` (`id`, `category_hukum_id`, `tahun_id`, `tipe_id`, `nama`, `deskripsi`, `tipe_dokumen`, `judul`, `tempat_penetapan`, `tanggal_penetapan`, `tanggal_pengundangan`, `tanggal_berlaku`, `sumber`, `status`, `bahasa`, `lokasi`, `teu`, `nomor`, `bidang`, `status_hukum`, `slug`, `file`, `review`, `download`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 19, 'Peraturan Dekan FMIPA Nomor 1 Tahun 2022', 'Perubahan Atas Peraturan Dekan FMIPA Nomor 1 Tahun 2020 Tentang Tata Tertib Akademik Mahasiswa', 'Peraturan Internal', 'Peraturan Dekan FMIPA Nomor 1 Tahun 2022 tentang Perubahan Atas Peraturan Dekan FMIPA Nomor 1 Tahun 2020 Tentang Tata Tertib Akademik Mahasiswa', 'Kendari', '2022-01-15', '2022-01-15', '2022-01-15', 'Gazette FMIPA 2022 No. 1: 5 hlm.', 'berlaku', 'inggris', 'FMIPA UHO', 'helo tue', '1', NULL, '{\"mengubah\":[\"5\"],\"dicabut\":[\"4\"]}', 'peraturan-dekan-fmipa-nomor-1-tahun-2022', 'peraturan-dekan-fmipa-nomor-1-tahun-2022-1717162701-M6pyRwEACV.pdf', 8, 2, NULL, '2024-05-31 06:35:16', '2024-06-03 03:25:53'),
(2, 1, 1, 17, 'Peraturan Dekan FMIPA Nomor 2 Tahun 2021 tentang Kode Etik Mahasiswa', 'Peraturan ini berisi tentang kode etik yang harus diikuti oleh mahasiswa FMIPA.', 'Peraturan Internal', 'Peraturan Dekan FMIPA Nomor 2 Tahun 2021 tentang Kode Etik Mahasiswa', 'Kendari', '2021-08-10', '2021-08-10', '2021-08-10', 'Gazette FMIPA 2021 No. 8: 10 hlm.', 'berlaku', 'inggris', 'FMIPA UHO', 'teu', '1', NULL, '{\"mengubah\":[\"1\"],\"dicabut\":[\"4\"]}', 'peraturan-dekan-fmipa-nomor-2-tahun-2021-tentang-kode-etik-mahasiswa', 'peraturan-dekan-fmipa-nomor-2-tahun-2021-tentang-kode-etik-mahasiswa-1717162824-npIkxiwySI.pdf', 2, NULL, NULL, '2024-05-31 06:35:16', '2024-06-02 23:57:54'),
(3, 1, 1, 20, 'Peraturan Dekan FMIPA Nomor 3 Tahun 2020 tentang Pelaksanaan Praktikum', 'Peraturan ini mengatur tentang pelaksanaan praktikum di lingkungan FMIPA.', 'Peraturan Internal', 'Peraturan Dekan FMIPA Nomor 3 Tahun 2020 tentang Pelaksanaan Praktikum', 'Kendari', '2020-03-20', '2020-03-20', '2020-03-20', 'Gazette FMIPA 2020 No. 3: 15 hlm.', 'tidak berlaku', 'indonesia', 'FMIPA UHO', 'teu', '3', NULL, '{\"mengubah\":[\"4\"],\"dicabut\":[\"5\"]}', 'peraturan-dekan-fmipa-nomor-3-tahun-2020-tentang-pelaksanaan-praktikum', 'peraturan-dekan-fmipa-nomor-3-tahun-2020-tentang-pelaksanaan-praktikum-1717162935-ISvbKkGnfS.pdf', 2, NULL, '2024-05-31 08:11:56', '2024-05-31 06:35:16', '2024-05-31 08:11:56'),
(4, 1, 2, 3, 'Peraturan Dekan FMIPA Nomor 4 Tahun 2019 tentang Tata Cara Ujian Akhir', 'Peraturan ini menjelaskan tata cara pelaksanaan ujian akhir di FMIPA.', 'Peraturan Internal', 'Peraturan Dekan FMIPA Nomor 4 Tahun 2019 tentang Tata Cara Ujian Akhir', 'Kendari', '2019-12-10', '2019-12-10', '2019-12-10', 'Gazette FMIPA 2019 No. 10: 8 hlm.', 'berlaku', 'indonesia', 'FMIPA UHO', 'teu', '1', NULL, '{\"mengubah\":[\"5\"],\"dicabut\":[\"3\"]}', 'peraturan-dekan-fmipa-nomor-4-tahun-2019-tentang-tata-cara-ujian-akhir', 'peraturan-dekan-fmipa-nomor-4-tahun-2019-tentang-tata-cara-ujian-akhir-1717163066-0F7BI5mzhB.pdf', 2, 1, NULL, '2024-05-31 06:35:16', '2024-05-31 07:05:08'),
(5, 1, 1, 3, 'Peraturan Dekan FMIPA Nomor 5 Tahun 2018 tentang Penulisan Skripsi', 'Peraturan ini mengatur tentang tata cara penulisan skripsi di FMIPA.', 'Peraturan Internal', 'Peraturan Dekan FMIPA Nomor 5 Tahun 2018 tentang Penulisan Skripsi', 'Kendari', '2018-07-15', '2018-07-15', '2018-07-15', 'Gazette FMIPA 2018 No. 7: 12 hlm.', 'tidak berlaku', 'inggris', 'FMIPA UHO', 'teu', '1', NULL, '{\"dicabut\":\"dicabut oleh peraturan dek 2023\",\"mengubah\":\"diubah oleh peraturan dek 2024\"}', 'peraturan-dekan-fmipa-nomor-5-tahun-2018-tentang-penulisan-skripsi', 'peraturan-dekan-fmipa-nomor-5-tahun-2018-tentang-penulisan-skripsi-1717163163-ijWSobiRLS.pdf', NULL, NULL, NULL, '2024-05-31 06:35:16', '2024-05-31 08:10:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2sgSz8c81YfQN0MPQWdjEs09toJ4wRERPHMcN8D4', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT0NmdmxNdzc5UktybDVJbmoyV2UzY29sUUNqZjFLMm5OUUtFYXg3SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wYXRoL3RvL3lvdXIvYXNzZXRzL2ljb25zL2Jvb3RzdHJhcC1pY29ucy5jc3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1717429074),
('XqTnj4Ajdr9NDEseq6POvThBgVoHRoks4dbDF1i1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidWhEMnhpS2k3Y2ZMWXRWYXZOZVlJbXY2RndkQ0tVVm9NemhuRFJROCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wYXRoL3RvL3lvdXIvYXNzZXRzL2ljb25zL2Jvb3RzdHJhcC1pY29ucy5jc3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1717471901);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subjek_hukums`
--

CREATE TABLE `subjek_hukums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subjek_hukums`
--

INSERT INTO `subjek_hukums` (`id`, `nama`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'TATA TERTIB AKADEMIK', 'tata-tertib-akademik', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(2, 'KODE ETIK MAHASISWA', 'kode-etik-mahasiswa', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(3, 'PELAKSANAAN PRAKTIKUM', 'pelaksanaan-praktikum', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(4, 'TATA CARA UJIAN AKHIR', 'tata-cara-ujian-akhir', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(5, 'PENULISAN SKRIPSI', 'penulisan-skripsi', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(6, 'PENGELOLAAN LABORATORIUM', 'pengelolaan-laboratorium', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(7, 'KEGIATAN KEMAHASISWAAN', 'kegiatan-kemahasiswaan', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(8, 'PENILAIAN AKADEMIK', 'penilaian-akademik', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(9, 'PEMBIMBINGAN AKADEMIK', 'pembimbingan-akademik', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(10, 'PENANGANAN KASUS PELANGGARAN', 'penanganan-kasus-pelanggaran', NULL, '2024-05-31 06:35:16', '2024-05-31 06:35:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subjek_product_hukums`
--

CREATE TABLE `subjek_product_hukums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subjek_hukum_id` bigint(20) UNSIGNED NOT NULL,
  `product_hukum_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subjek_product_hukums`
--

INSERT INTO `subjek_product_hukums` (`id`, `subjek_hukum_id`, `product_hukum_id`, `created_at`, `updated_at`) VALUES
(2, 9, 1, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 1, 2, NULL, NULL),
(5, 2, 2, NULL, NULL),
(6, 3, 2, NULL, NULL),
(7, 4, 2, NULL, NULL),
(8, 5, 2, NULL, NULL),
(9, 6, 2, NULL, NULL),
(10, 7, 2, NULL, NULL),
(11, 8, 2, NULL, NULL),
(12, 9, 2, NULL, NULL),
(13, 10, 2, NULL, NULL),
(14, 7, 3, NULL, NULL),
(15, 2, 3, NULL, NULL),
(16, 7, 4, NULL, NULL),
(17, 2, 4, NULL, NULL),
(18, 6, 4, NULL, NULL),
(19, 1, 5, NULL, NULL),
(20, 2, 5, NULL, NULL),
(21, 3, 5, NULL, NULL),
(22, 4, 5, NULL, NULL),
(23, 5, 5, NULL, NULL),
(24, 6, 5, NULL, NULL),
(25, 7, 5, NULL, NULL),
(26, 8, 5, NULL, NULL),
(27, 9, 5, NULL, NULL),
(28, 10, 5, NULL, NULL),
(29, 8, 1, NULL, NULL),
(30, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahuns`
--

CREATE TABLE `tahuns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tahuns`
--

INSERT INTO `tahuns` (`id`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 2024, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(2, 2023, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(3, 2022, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(4, 2021, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(5, 2020, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(6, 2019, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(7, 2018, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(8, 2017, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(9, 2016, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(10, 2015, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(11, 2014, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(12, 2013, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(13, 2012, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(14, 2011, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(15, 2010, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(16, 2009, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(17, 2008, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(18, 2007, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(19, 2006, '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(20, 2005, '2024-05-31 06:35:16', '2024-05-31 06:35:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_hukums`
--

CREATE TABLE `tipe_hukums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tipe_hukums`
--

INSERT INTO `tipe_hukums` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'peraturan perundang-undangan', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(2, 'peraturan daerah', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(3, 'peraturan pemerintah pusat', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(4, 'instruksi presiden', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(5, 'keputusan menteri', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(6, 'surat edaran', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(7, 'peraturan menteri', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(8, 'keputusan gubernur', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(9, 'peraturan gubernur', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(10, 'keputusan bupati', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(11, 'peraturan bupati', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(12, 'keputusan walikota', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(13, 'peraturan walikota', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(14, 'keputusan dirjen', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(15, 'peraturan dirjen', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(16, 'keputusan rektor', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(17, 'peraturan rektor', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(18, 'keputusan dekan', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(19, 'peraturan dekan', '2024-05-31 06:35:16', '2024-05-31 06:35:16'),
(20, 'nota dinas', '2024-05-31 06:35:16', '2024-05-31 06:35:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'lani', '$2y$12$dU5cxaPRAa2TYjmO4RhaLOSU0OUYCis82lbQfKMnNSTE/2zPaFzsi', 'admin', '2024-05-31 06:35:16', '2024-05-31 06:35:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `abstrak_hukums`
--
ALTER TABLE `abstrak_hukums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abstrak_hukums_produk_hukum_id_foreign` (`produk_hukum_id`);

--
-- Indeks untuk tabel `category_hukums`
--
ALTER TABLE `category_hukums`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_hukums_title_unique` (`title`),
  ADD UNIQUE KEY `category_hukums_short_title_unique` (`short_title`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `product_hukums`
--
ALTER TABLE `product_hukums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_hukums_category_hukum_id_foreign` (`category_hukum_id`),
  ADD KEY `product_hukums_tahun_id_foreign` (`tahun_id`),
  ADD KEY `product_hukums_tipe_id_foreign` (`tipe_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `subjek_hukums`
--
ALTER TABLE `subjek_hukums`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subjek_product_hukums`
--
ALTER TABLE `subjek_product_hukums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjek_product_hukums_subjek_hukum_id_foreign` (`subjek_hukum_id`),
  ADD KEY `subjek_product_hukums_product_hukum_id_foreign` (`product_hukum_id`);

--
-- Indeks untuk tabel `tahuns`
--
ALTER TABLE `tahuns`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tipe_hukums`
--
ALTER TABLE `tipe_hukums`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `abstrak_hukums`
--
ALTER TABLE `abstrak_hukums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `category_hukums`
--
ALTER TABLE `category_hukums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `product_hukums`
--
ALTER TABLE `product_hukums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `subjek_hukums`
--
ALTER TABLE `subjek_hukums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `subjek_product_hukums`
--
ALTER TABLE `subjek_product_hukums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tahuns`
--
ALTER TABLE `tahuns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tipe_hukums`
--
ALTER TABLE `tipe_hukums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `abstrak_hukums`
--
ALTER TABLE `abstrak_hukums`
  ADD CONSTRAINT `abstrak_hukums_produk_hukum_id_foreign` FOREIGN KEY (`produk_hukum_id`) REFERENCES `product_hukums` (`id`);

--
-- Ketidakleluasaan untuk tabel `product_hukums`
--
ALTER TABLE `product_hukums`
  ADD CONSTRAINT `product_hukums_category_hukum_id_foreign` FOREIGN KEY (`category_hukum_id`) REFERENCES `category_hukums` (`id`),
  ADD CONSTRAINT `product_hukums_tahun_id_foreign` FOREIGN KEY (`tahun_id`) REFERENCES `tahuns` (`id`),
  ADD CONSTRAINT `product_hukums_tipe_id_foreign` FOREIGN KEY (`tipe_id`) REFERENCES `tipe_hukums` (`id`);

--
-- Ketidakleluasaan untuk tabel `subjek_product_hukums`
--
ALTER TABLE `subjek_product_hukums`
  ADD CONSTRAINT `subjek_product_hukums_product_hukum_id_foreign` FOREIGN KEY (`product_hukum_id`) REFERENCES `product_hukums` (`id`),
  ADD CONSTRAINT `subjek_product_hukums_subjek_hukum_id_foreign` FOREIGN KEY (`subjek_hukum_id`) REFERENCES `subjek_hukums` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
