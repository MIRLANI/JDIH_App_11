-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2024 pada 20.06
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
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `materi_pokok` text DEFAULT NULL,
  `abstrak` text DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Peraturan Perundang-Undangan', 'UU', 'peraturan-perundang-undangan', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50'),
(2, 'Peraturan Dekan FMIPA', 'Peraturan Dekan', 'peraturan-dekan-fmipa', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50'),
(3, 'Peraturan Rektor Universitas', 'Peraturan Rektor', 'peraturan-rektor-universitas', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50'),
(4, 'Surat Edaran FMIPA', 'Surat Edaran', 'surat-edaran-fmipa', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50'),
(5, 'Keputusan Dekan FMIPA', 'Keputusan Dekan', 'keputusan-dekan-fmipa', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50'),
(6, 'Panduan Akademik', 'Panduan', 'panduan-akademik', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50'),
(7, 'Peraturan Fakultas', 'Peraturan Fakultas', 'peraturan-fakultas', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50'),
(8, 'Keputusan Rektor', 'Keputusan Rektor', 'keputusan-rektor', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50'),
(9, 'Prosedur Operasional Standar', 'POS', 'prosedur-operasional-standar', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50'),
(10, 'Pedoman Akademik', 'Pedoman Akademik', 'pedoman-akademik', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50'),
(11, 'Surat Keputusan Dekan', 'SK Dekan', 'surat-keputusan-dekan', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50'),
(12, 'Surat Keputusan Rektor', 'SK Rektor', 'surat-keputusan-rektor', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50'),
(13, 'Peraturan Akademik', 'Peraturan Akademik', 'peraturan-akademik', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50'),
(14, 'Kode Etik Mahasiswa', 'Kode Etik', 'kode-etik-mahasiswa', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50'),
(15, 'Prosedur Administrasi', 'Prosedur Administrasi', 'prosedur-administrasi', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50'),
(16, 'Prosedur Keuangan', 'Prosedur Keuangan', 'prosedur-keuangan', NULL, '2024-06-06 10:15:50', '2024-06-06 10:15:50');

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
  `user_id` bigint(20) UNSIGNED NOT NULL,
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
  `status_public` enum('public','non-public') DEFAULT 'public',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_hukums`
--

INSERT INTO `product_hukums` (`id`, `category_hukum_id`, `tahun_id`, `tipe_id`, `user_id`, `nama`, `deskripsi`, `tipe_dokumen`, `judul`, `tempat_penetapan`, `tanggal_penetapan`, `tanggal_pengundangan`, `tanggal_berlaku`, `sumber`, `status`, `bahasa`, `lokasi`, `teu`, `nomor`, `bidang`, `status_hukum`, `slug`, `file`, `review`, `download`, `status_public`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 1, 'Paduan Penyusunan Skripsi', 'Keputusan Dekan Fakultas Matematika dan Ilmu Pengetahun Alam Universitas Halu Oleo', '1', ' Penetapan Buku Paduan Penyusunana Skripsi Dalam Lingkungan Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Kendari', '2020 juni 15', '2020 juni 08', '2020 juni 15', '2022 No. : 57 hlm.', 'berlaku', 'Bahasa Indonesia', 'FMIPA UHO', NULL, '1018/SK/UN29.9/PP/2020', NULL, NULL, 'paduan-penyusunan-skripsi', NULL, NULL, NULL, 'public', NULL, '2024-06-06 10:15:51', '2024-06-06 10:15:51');

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
('R7uEZsrZavIJ5dBUhTZikRCqH3yEAsMdi1ianKnu', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZW9qVk8yb2J1amdKQXV3TlRSd0JyRm51bTdHZDNtaDR4Yk4zYVRyeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wYXRoL3RvL3lvdXIvYXNzZXRzL2ljb25zL2Jvb3RzdHJhcC1pY29ucy5jc3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1717695455);

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
(1, 'Tata Tertib Akademik', 'tata-tertib-akademik', NULL, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(2, 'Kode Etik Mahasiswa', 'kode-etik-mahasiswa', NULL, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(3, 'Pelaksanaan Praktikum', 'pelaksanaan-praktikum', NULL, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(4, 'Tata Cara Ujian Akhir', 'tata-cara-ujian-akhir', NULL, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(5, 'Penulisan Skripsi', 'penulisan-skripsi', NULL, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(6, 'Pengelolaan Laboratorium', 'pengelolaan-laboratorium', NULL, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(7, 'Kegiatan Kemahasiswaan', 'kegiatan-kemahasiswaan', NULL, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(8, 'Penilaian Akademik', 'penilaian-akademik', NULL, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(9, 'Pembimbingan Akademik', 'pembimbingan-akademik', NULL, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(10, 'Penanganan Kasus Pelanggaran', 'penanganan-kasus-pelanggaran', NULL, '2024-06-06 10:15:51', '2024-06-06 10:15:51');

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
(1, 2024, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(2, 2023, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(3, 2022, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(4, 2021, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(5, 2020, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(6, 2019, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(7, 2018, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(8, 2017, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(9, 2016, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(10, 2015, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(11, 2014, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(12, 2013, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(13, 2012, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(14, 2011, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(15, 2010, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(16, 2009, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(17, 2008, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(18, 2007, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(19, 2006, '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(20, 2005, '2024-06-06 10:15:51', '2024-06-06 10:15:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_hukums`
--

CREATE TABLE `tipe_hukums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tipe_hukums`
--

INSERT INTO `tipe_hukums` (`id`, `user_id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ilmu Komputer', '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(3, 3, 'lani contoh', '2024-06-06 10:23:38', '2024-06-06 10:23:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` text NOT NULL DEFAULT '',
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'fmipa@uho.ac.id', 'Administrator', '$2y$12$aHr73RLyvipICOXDwMig1.b4iFtETXOw1fHv4PTwI4aE6iCqioOn6', 'admin', '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(2, 'ilkom@gmail.com', 'Ilmu Komputer', '$2y$12$nihGA23.HK7rK1T7ye7EgehFscJ2lIs/zFsSIkp3iMkKIrg6AFUnW', 'user', '2024-06-06 10:15:51', '2024-06-06 10:15:51'),
(3, 'contoh@gmail.com', 'lani contoh', '$2y$12$yqBndnKRZwwQ9d2nxz0D6uhAm9iwYd0U7YKHIIYJ9Efoj7M/X483e', 'user', '2024-06-06 10:23:38', '2024-06-06 10:23:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `abstrak_hukums`
--
ALTER TABLE `abstrak_hukums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abstrak_hukums_produk_hukum_id_foreign` (`produk_hukum_id`),
  ADD KEY `abstrak_hukums_user_id_foreign` (`user_id`);

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
  ADD KEY `product_hukums_tipe_id_foreign` (`tipe_id`),
  ADD KEY `product_hukums_user_id_foreign` (`user_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipe_hukums_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `abstrak_hukums`
--
ALTER TABLE `abstrak_hukums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `category_hukums`
--
ALTER TABLE `category_hukums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `product_hukums`
--
ALTER TABLE `product_hukums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `subjek_hukums`
--
ALTER TABLE `subjek_hukums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `subjek_product_hukums`
--
ALTER TABLE `subjek_product_hukums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tahuns`
--
ALTER TABLE `tahuns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tipe_hukums`
--
ALTER TABLE `tipe_hukums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `abstrak_hukums`
--
ALTER TABLE `abstrak_hukums`
  ADD CONSTRAINT `abstrak_hukums_produk_hukum_id_foreign` FOREIGN KEY (`produk_hukum_id`) REFERENCES `product_hukums` (`id`),
  ADD CONSTRAINT `abstrak_hukums_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `product_hukums`
--
ALTER TABLE `product_hukums`
  ADD CONSTRAINT `product_hukums_category_hukum_id_foreign` FOREIGN KEY (`category_hukum_id`) REFERENCES `category_hukums` (`id`),
  ADD CONSTRAINT `product_hukums_tahun_id_foreign` FOREIGN KEY (`tahun_id`) REFERENCES `tahuns` (`id`),
  ADD CONSTRAINT `product_hukums_tipe_id_foreign` FOREIGN KEY (`tipe_id`) REFERENCES `tipe_hukums` (`id`),
  ADD CONSTRAINT `product_hukums_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `subjek_product_hukums`
--
ALTER TABLE `subjek_product_hukums`
  ADD CONSTRAINT `subjek_product_hukums_product_hukum_id_foreign` FOREIGN KEY (`product_hukum_id`) REFERENCES `product_hukums` (`id`),
  ADD CONSTRAINT `subjek_product_hukums_subjek_hukum_id_foreign` FOREIGN KEY (`subjek_hukum_id`) REFERENCES `subjek_hukums` (`id`);

--
-- Ketidakleluasaan untuk tabel `tipe_hukums`
--
ALTER TABLE `tipe_hukums`
  ADD CONSTRAINT `tipe_hukums_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
