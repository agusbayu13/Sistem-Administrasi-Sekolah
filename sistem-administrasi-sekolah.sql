-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 05:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem-administrasi-sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nama` varchar(100) DEFAULT NULL,
  `nip` int(20) NOT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nama` varchar(100) DEFAULT NULL,
  `nip` int(20) NOT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nama`, `nip`, `jeniskelamin`, `alamat`, `created_at`, `updated_at`) VALUES
('Agus Bayu Pamungkas', 234561, 'Perempuan', 'Semarang', '2021-06-08 16:30:54', '2021-06-08 16:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(15) NOT NULL,
  `nis` int(15) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kelas` varchar(10) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `kode_pembayaran` varchar(100) NOT NULL,
  `total_pembayaran` varchar(100) NOT NULL,
  `jenis_pembayaran` varchar(100) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `nis`, `nama`, `kelas`, `tgl_pembayaran`, `kode_pembayaran`, `total_pembayaran`, `jenis_pembayaran`, `bukti_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 1234567, NULL, '10', '2021-06-09', '23456', '23456', 'SPP', 'asdfgh.png', '2021-06-08 10:28:14', '2021-06-08 10:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `nip` int(20) DEFAULT NULL,
  `id` int(20) UNSIGNED NOT NULL,
  `user_id` int(20) NOT NULL,
  `tgl` date NOT NULL,
  `jammasuk` time DEFAULT NULL,
  `jamkeluar` time DEFAULT NULL,
  `jamkerja` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`nip`, `id`, `user_id`, `tgl`, `jammasuk`, `jamkeluar`, `jamkerja`, `created_at`, `updated_at`) VALUES
(NULL, 2, 1, '2021-06-14', '14:51:55', '14:52:01', '00:00:06', '2021-06-14 00:51:55', '2021-06-14 00:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(20) NOT NULL,
  `id_kelas` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `id_kelas`, `nama`, `jenis_kelamin`, `alamat`, `created_at`, `updated_at`) VALUES
(213043001, 'X MIPA 1', 'Ahmad', 'Laki-laki', 'Jl. Sejahtera', '2021-06-14 08:08:04', '2021-06-14 08:15:03'),
(213043002, 'X MIPA 2', 'Alfina', 'Perempuan', 'Jl. Gaharu', '2021-06-14 08:11:12', '2021-06-14 08:15:16'),
(213043003, 'X MIPA 3', 'Ariqah', 'Perempuan', 'Jl. Mangga', '2021-06-14 08:11:40', '2021-06-14 08:11:40'),
(213043004, 'X MIPA 4', 'Arba\'an', 'Perempuan', 'Jl. in aja', '2021-06-14 08:12:16', '2021-06-14 08:15:42'),
(213043005, 'X MIPA 5', 'Samuel', 'Laki-laki', 'Jl. Manggis', '2021-06-14 08:12:38', '2021-06-14 08:15:53'),
(213044001, 'XI MIPA 1', 'Abay', 'Laki-laki', 'Jl. Sehati', '2021-06-14 08:16:49', '2021-06-14 08:16:49'),
(213044002, 'XI MIPA 2', 'Audrey', 'Perempuan', 'Jl. Cempaka Sari', '2021-06-14 08:18:02', '2021-06-14 08:18:02'),
(213044003, 'XI MIPA 3', 'Nova', 'Laki-laki', 'Jl. Belimbing', '2021-06-14 08:18:50', '2021-06-14 08:18:50'),
(213044004, 'XI MIPA 4', 'Diana', 'Perempuan', 'Jl. Seharian', '2021-06-14 08:19:24', '2021-06-14 08:19:24'),
(213044005, 'XI MIPA 5', 'Edo', 'Laki-laki', 'Jl. Kelengkeng', '2021-06-14 08:19:53', '2021-06-14 08:19:53'),
(213045001, 'XII MIPA 1', 'Vivin', 'Perempuan', 'Jl. Pete', '2021-06-14 08:20:49', '2021-06-14 08:20:49'),
(213045002, 'XII MIPA 2', 'Tasya', 'Perempuan', 'Jl. Cakrawala', '2021-06-14 08:21:31', '2021-06-14 08:21:31'),
(213045003, 'XII MIPA 3', 'Riyan', 'Laki-laki', 'Jl. Santai', '2021-06-14 08:22:52', '2021-06-14 08:22:52'),
(213045004, 'XII MIPA 4', 'Julian', 'Laki-laki', 'Jl. Sahara', '2021-06-14 08:23:42', '2021-06-14 08:23:42'),
(213045005, 'XII MIPA 5', 'Rangga', 'Laki-laki', 'Jl. Kenangan', '2021-06-14 08:24:20', '2021-06-14 08:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` enum('Admin','Guru','Karyawan','Siswa') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Agus Bayu Pamungkas', 'Admin', 'abay@students.unnes.ac.id', '2021-06-08 10:25:54', '$2y$10$I0a/L3sehabg4KO0UoME/uEHrNJg6VVN3rEPs1mztYf15W.kQCPr6', NULL, '2021-06-08 10:25:54', '2021-06-08 10:25:54'),
(2, 'Ariqah Salma Intannisa', 'Admin', 'ariqahsalma@students.unnes.ac.id', '2021-06-14 07:56:52', '$2y$10$GAce7HYNm3gALnEQA/uvTOCqXptSNItxyDnpEu5eDJuUY4h2V2emq', NULL, '2021-06-14 07:56:52', '2021-06-14 07:56:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
