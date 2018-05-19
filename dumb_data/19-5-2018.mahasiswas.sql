-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2018 pada 07.45
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_tugasakhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `NIM` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama_Mahasiswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jenis_Kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fakultas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jumlah_SKS` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IPK` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No_Hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `NIM`, `Nama_Mahasiswa`, `Jenis_Kelamin`, `Alamat`, `Fakultas`, `Jurusan`, `Jumlah_SKS`, `IPK`, `No_Hp`, `Gambar`, `created_at`, `updated_at`) VALUES
(11, '201610370311242', 'David Suji Sasongko', 'Laki - Laki', 'Jln MT Haryono GG.IV No.816 RT 07/RW 02, Kelurahan Dinoyo, Kecamatan Lowokwaru, Malang', 'Teknik', 'Teknik Informatika', '80', '3,99', '085349872240', 'images.jpg', '2018-05-18 22:44:23', '2018-05-18 22:44:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
