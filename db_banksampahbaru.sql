-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2018 pada 16.09
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_banksampahbaru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `inputsampah`
--

CREATE TABLE `inputsampah` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_rekening` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sampah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `inputsampah`
--

INSERT INTO `inputsampah` (`id`, `no_rekening`, `id_sampah`, `kuantitas`, `created_at`, `updated_at`) VALUES
(1, '1', '5', 1, '2018-04-19 06:58:17', '2018-04-19 06:58:17'),
(2, '1', '22', 1, '2018-04-19 06:59:21', '2018-04-19 06:59:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_12_003438_create_nasabah_table', 1),
(4, '2018_04_12_030222_create_sampah_table', 1),
(5, '2018_04_12_030604_create_transaksi_table', 1),
(6, '2018_04_19_050009_create_inputsampah_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nasabah`
--

CREATE TABLE `nasabah` (
  `no_rekening` int(10) UNSIGNED NOT NULL,
  `nama_nasabah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_nasabah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_banksampah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilayah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_simpanan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cara_setor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_setor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari_setor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_setor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sampah`
--

CREATE TABLE `sampah` (
  `id_sampah` int(10) UNSIGNED NOT NULL,
  `jenis_sampah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sampah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_fluktuatif` int(11) NOT NULL,
  `harga_stabil` int(11) NOT NULL,
  `contoh_barang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sampah`
--

INSERT INTO `sampah` (`id_sampah`, `jenis_sampah`, `nama_sampah`, `harga_fluktuatif`, `harga_stabil`, `contoh_barang`, `created_at`, `updated_at`) VALUES
(5, 'Tembaga', 'Campur', 40000, 43000, 'isi kabel, tembaga dinamo', '2018-04-17 08:42:14', '2018-04-17 13:26:52'),
(6, 'Kuningan', 'Semua kuningan', 22000, 24000, 'hiasan dari kuningan, kran dalamnya warna kuning', '2018-04-17 08:42:59', '2018-04-17 08:54:20'),
(7, 'Aluminium', 'Plat', 9000, 10000, 'Lempengan aluminium yang kuat', '2018-04-17 13:22:03', '2018-04-17 13:28:57'),
(8, 'Aluminium', 'Siku', 9000, 10000, 'tirai, kusain, almini, plat nomor', '2018-04-17 13:22:46', '2018-04-17 13:29:12'),
(9, 'Aluminium', 'Panci', 8500, 10000, 'panci bekas', '2018-04-17 13:23:38', '2018-04-17 13:29:31'),
(10, 'Aluminium', 'Kaleng aluminium', 8500, 9000, 'kaleng pocari, sprite dari almini (lunak), tidak lengket magnet', '2018-04-17 13:25:12', '2018-04-17 13:29:46'),
(11, 'Aluminium', 'Wajan almini', 7000, 8000, 'Wajan almini, teflon (tidak lengket magnet)', '2018-04-17 13:26:11', '2018-04-17 13:30:06'),
(12, 'Besi', 'Besi super / tebal', 1800, 1800, 'besi yang tebal, betoneser, rantai, gear, skok', '2018-04-17 13:31:39', '2018-04-17 13:31:39'),
(13, 'Besi', 'Grabang / greed', 800, 800, 'pipa, magic jar, payung, kompor, VCD player, logam tipis', '2018-04-17 13:33:16', '2018-04-17 13:33:16'),
(14, 'Besi', 'Paku', 800, 800, 'paku bekas', '2018-04-17 13:33:43', '2018-04-17 13:33:43'),
(15, 'Besi', 'Kaleng', 500, 500, 'kaleng susu, blek, kawat, dll', '2018-04-17 16:15:08', '2018-04-17 16:15:08'),
(16, 'Besi', 'Seng', 300, 300, 'seng bekas', '2018-04-17 16:15:32', '2018-04-17 16:15:32'),
(17, 'Kertas', 'Kardus bagus', 1900, 1900, 'kardus warna coklat yang masih bagus', '2018-04-17 16:16:10', '2018-04-17 16:16:10'),
(18, 'Kertas', 'Kardus jelek', 1000, 1000, 'kardus berminyak, kardus tebal warna putih', '2018-04-17 16:16:57', '2018-04-17 16:16:57'),
(19, 'Kertas', 'Koran', 2000, 2000, 'koran jawapost, surya, kompas, dll', '2018-04-17 16:17:31', '2018-04-17 16:17:31'),
(20, 'Kertas', 'Kertas HVS', 1800, 2000, 'kertas putih dengan atau tanpa tinta', '2018-04-17 16:18:07', '2018-04-17 16:18:07'),
(21, 'Kertas', 'Kertas buram / LKS', 900, 1000, 'kertas yang warnanya agak coklat atau abu2', '2018-04-17 16:18:50', '2018-04-17 16:18:50'),
(22, 'Kertas', 'Sak semen', 1300, 1500, 'kemasan semen', '2018-04-17 16:19:17', '2018-04-17 16:19:17'),
(23, 'Kertas', 'Duplek', 400, 400, 'kertas rokok, kertas jelek, karton warna, brosur, dll', '2018-04-17 16:20:06', '2018-04-17 16:20:06'),
(24, 'Botol', 'Botol sirup (per biji)', 100, 100, 'sisa botol marjan, orson, dll', '2018-04-17 16:20:44', '2018-04-17 16:20:44'),
(25, 'Botol', 'Kecap / saos besar (perbiji)', 400, 400, 'bango, abc, dll', '2018-04-17 16:21:31', '2018-04-17 16:21:31'),
(26, 'Botol', 'Bensin bagus (per bji)', 400, 400, '-', '2018-04-17 16:22:07', '2018-04-17 16:22:07'),
(27, 'Botol', 'Bir (per biji)', 600, 600, 'hanya botol bir bintang', '2018-04-17 16:22:37', '2018-04-17 16:22:37'),
(28, 'Botol', 'Beling (per kg)', 50, 50, 'Lampu, botol, dll', '2018-04-17 16:23:37', '2018-04-17 16:23:37'),
(29, 'Botol', 'Botol kecil putih', 150, 150, 'botol you c1000, putih', '2018-04-17 16:24:17', '2018-04-17 16:24:17'),
(30, 'Plastik Lembaran', 'Plastik putih bening', 1000, 1000, 'plastik bening tanpa ada sablon/tulisan', '2018-04-17 16:25:08', '2018-04-17 16:25:08'),
(31, 'Plastik Lembaran', 'Plastik kresek', 400, 400, 'plastik wadah barang', '2018-04-17 16:25:48', '2018-04-17 16:25:48'),
(32, 'Plastik Lembaran', 'Plastik sablon tipis', 400, 400, 'indomie, rinso sachet kecil, gulaku TANPA FOIL', '2018-04-17 16:26:52', '2018-04-17 16:26:52'),
(33, 'Plastik Lembaran', 'Kemasan (foil / mengkilap)', 200, 200, 'pop ice, marimas, chikim (ada foil didalam / mengkilap)', '2018-04-17 16:28:43', '2018-04-17 16:28:43'),
(34, 'Plastik Lembaran', 'Plastik sablon tebal / minyak', 300, 300, 'molto, sunlight, softener, superpel, bekas minyak, dll', '2018-04-17 16:30:01', '2018-04-17 16:30:01'),
(35, 'Plastik', 'Aqua gelas bersih', 4500, 5000, 'gelas putih bening tanpa ada warna / sablon', '2018-04-17 16:30:48', '2018-04-17 16:30:48'),
(36, 'Plastik', 'Aqua gelas kotor', 3000, 3500, 'gelas putih bening tanpa ada warna / sablon', '2018-04-17 16:31:17', '2018-04-17 16:31:17'),
(37, 'Plastik', 'Botol putih bersih', 3100, 3400, 'botol minuman putih bening (club, cleo, vit, cheers, floridina, coca cola, dll)', '2018-04-17 16:32:28', '2018-04-17 16:32:28'),
(38, 'Plastik', 'Botol putih kotor', 2200, 2600, 'botol minuman putih bening (club, cleo, vit, cheers, floridina, coca cola, dll)', '2018-04-17 16:33:00', '2018-04-17 16:33:00'),
(39, 'Plastik', 'Botol biru muda bersih', 1800, 2000, 'botol minuman putih KEBIRUAN (aqua)', '2018-04-17 16:33:59', '2018-04-17 16:33:59'),
(40, 'Plastik', 'Botol biru muda kotor', 1200, 1400, 'botol minuman putih KEBIRUAN (aqua)', '2018-04-17 16:34:34', '2018-04-17 16:34:34'),
(41, 'Plastik', 'Botol minuman warna bersih', 1500, 1500, 'botol minuman berwarna (mizone, sprite, dll)', '2018-04-17 16:35:29', '2018-04-17 16:35:29'),
(42, 'Plastik', 'Botol minuman warna kotor', 1000, 1000, 'botol minuman berwarna (mizone, sprite, dll)', '2018-04-17 16:35:59', '2018-04-17 16:35:59'),
(43, 'Plastik', 'Tutup galon / tutup aqua botol', 3000, 3000, 'tutupnya galon / tutup botol', '2018-04-17 16:36:53', '2018-04-17 16:36:53'),
(44, 'Plastik', 'Bak campur TANPA KERTAS', 1900, 2000, 'bak air, botol kosmetik, botol susu, bak cuci', '2018-04-17 16:37:46', '2018-04-17 16:37:46'),
(45, 'Plastik', 'Bak hitam', 1000, 1100, 'bak cuci, dll yang warnanya hitam (lentur)', '2018-04-17 16:38:41', '2018-04-17 16:38:41'),
(46, 'Plastik', 'Plastik keras', 150, 150, 'plastik mainan anak-anak / helm, TV, yakult, dll', '2018-04-17 16:39:25', '2018-04-17 16:39:25'),
(47, 'Plastik', 'Tali plastik', 400, 400, 'tali packing', '2018-04-17 16:39:53', '2018-04-17 16:39:53'),
(48, 'Lain-lain', 'CD (DVD dan VCD)', 2000, 2200, 'kepingan CD atau DVD', '2018-04-17 16:40:30', '2018-04-17 16:40:30'),
(49, 'Lain-lain', 'Jelantah', 3300, 3500, 'bening atau hitam', '2018-04-17 16:41:00', '2018-04-17 16:41:00'),
(50, 'Lain-lain', 'Selang', 150, 150, 'selang untuk pancuran air', '2018-04-17 16:41:32', '2018-04-17 16:41:32'),
(51, 'Lain-lain', 'Paralon (kg)', 150, 150, 'pipa bekas', '2018-04-17 16:42:06', '2018-04-17 16:42:06'),
(52, 'Lain-lain', 'Perunggu', 6000, 7000, 'keran air, kampas rem, (tidak lengket dengan magnet)', '2018-04-17 16:42:41', '2018-04-17 16:42:41'),
(53, 'Lain-lain', 'Gembos', 500, 500, 'sandal, sepatu', '2018-04-17 16:43:10', '2018-04-17 16:43:10'),
(54, 'Lain-lain', 'Karak (kg)', 1400, 1400, 'nasi kering', '2018-04-17 16:43:47', '2018-04-17 16:43:47'),
(55, 'Lain-lain', 'Aki (per kg)', 6000, 7500, 'aki mobil, ditimbang (bukan satuan)', '2018-04-17 16:44:41', '2018-04-17 16:44:41'),
(56, 'Lain-lain', 'Karung 25, 50, 100 kg', 200, 200, 'krg 25 = 200 | krg 50 = 500 | krg 100 = 1000', '2018-04-17 16:45:56', '2018-04-17 16:45:56'),
(57, 'Lain-lain', 'Kabel', 1000, 1000, 'kabel listrik', '2018-04-17 16:46:17', '2018-04-17 16:46:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) UNSIGNED NOT NULL,
  `no_rekening` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `no_rekening`, `created_at`, `updated_at`) VALUES
(2, '1', '2018-04-19 06:42:32', '2018-04-19 06:42:32'),
(3, '1', '2018-04-19 06:54:38', '2018-04-19 06:54:38'),
(4, '1', '2018-04-19 06:56:03', '2018-04-19 06:56:03'),
(5, '1', '2018-04-19 06:56:56', '2018-04-19 06:56:56'),
(6, '1', '2018-04-19 06:58:17', '2018-04-19 06:58:17'),
(7, '1', '2018-04-19 06:59:21', '2018-04-19 06:59:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'adminbsi', 'admin@bsi.com', '$2y$10$S.jqbZ8f61wfuUQVxwg5jOp0ALZSHN7dK2IkH/nahO1TyriAZeY8G', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inputsampah`
--
ALTER TABLE `inputsampah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`no_rekening`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`id_sampah`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

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
-- AUTO_INCREMENT untuk tabel `inputsampah`
--
ALTER TABLE `inputsampah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  MODIFY `no_rekening` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sampah`
--
ALTER TABLE `sampah`
  MODIFY `id_sampah` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
