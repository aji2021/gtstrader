-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2021 pada 12.08
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtstrading`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account_history`
--

CREATE TABLE `account_history` (
  `IDTransaksi` varchar(100) NOT NULL,
  `AccNumber` int(50) NOT NULL,
  `OrderNumber` int(50) NOT NULL,
  `OrderTime` datetime(6) NOT NULL,
  `OrderType` varchar(10) NOT NULL,
  `OrderSymbol` varchar(10) NOT NULL,
  `OrderProfit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `account_history`
--

INSERT INTO `account_history` (`IDTransaksi`, `AccNumber`, `OrderNumber`, `OrderTime`, `OrderType`, `OrderSymbol`, `OrderProfit`) VALUES
('', 0, 87939842, '2021-10-04 12:02:00.000000', 'BUY', 'EURUSD', 1.56),
('', 0, 87971000, '2021-10-04 17:39:00.000000', 'BUY', 'USDJPY', -3.16),
('', 0, 87995811, '2021-10-05 05:00:00.000000', 'BUY', 'EURUSD', -3.3),
('', 0, 88038417, '2021-10-05 14:00:00.000000', 'SELL', 'USDJPY', -6.53),
('', 0, 88111590, '2021-10-05 17:15:00.000000', 'BUY', 'USDCHF', 1.94),
('', 0, 88101916, '2021-10-05 17:34:00.000000', 'BUY', 'EURJPY', 2.17),
('', 0, 88154486, '2021-10-05 17:56:00.000000', 'BUY', 'USDJPY', 10.79),
('', 0, 88097734, '2021-10-06 10:53:00.000000', 'SELL', 'EURUSD', 3.85),
('2006427888351433', 20064278, 88351433, '2021-10-08 16:06:44.000000', 'SELL', 'EURGBP', 1.62),
('2006427888789887', 20064278, 88789887, '2021-10-11 06:26:46.000000', 'BUY', 'EURJPY', 2.67),
('2006427888793274', 20064278, 88793274, '2021-10-11 09:18:12.000000', 'BUY', 'USDCHF', -1.36);

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_bank`
--

CREATE TABLE `akun_bank` (
  `id_akun_bank` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `nomor_rekening` varchar(20) NOT NULL,
  `nama_cabang` varchar(50) NOT NULL,
  `foto_rekening` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun_bank`
--

INSERT INTO `akun_bank` (`id_akun_bank`, `id_users`, `nama_bank`, `nomor_rekening`, `nama_cabang`, `foto_rekening`) VALUES
(8, 8, 'mandiri', '12424', 'mandiri', 'mandiri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_trading`
--

CREATE TABLE `akun_trading` (
  `id_akun_trading` int(11) NOT NULL,
  `id_users` varchar(50) NOT NULL,
  `username_trading` varchar(50) NOT NULL,
  `password_trading` varchar(50) NOT NULL,
  `jumlah_deposit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun_trading`
--

INSERT INTO `akun_trading` (`id_akun_trading`, `id_users`, `username_trading`, `password_trading`, `jumlah_deposit`) VALUES
(2, '8', '123456', 'sdfg', '234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deposit`
--

CREATE TABLE `deposit` (
  `id_deposit` int(11) NOT NULL,
  `id_users` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_bank_deposit` varchar(100) NOT NULL,
  `jumlah_deposit` varchar(100) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `deposit`
--

INSERT INTO `deposit` (`id_deposit`, `id_users`, `tanggal`, `nama_bank_deposit`, `jumlah_deposit`, `bukti_pembayaran`, `status`) VALUES
(1, '8', '2021-10-22', 'BCA-123', '12', 'sdg', '0'),
(2, '8', '2021-10-22', 'BCA-123', '23', 'er', '0'),
(3, '8', '2021-10-22', 'Mandiri-123', '34', '2', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ajiid9818@gmail.com', '$2y$10$TmoGgu1HcFw/QovY/liaS.U/ofE8eurAz.SebecWvucyOyZZ9ueIq', '2021-10-21 10:24:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `nik_ktp` varchar(100) NOT NULL,
  `foto_ktp` varchar(100) NOT NULL,
  `referal` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(200) NOT NULL DEFAULT '0',
  `status` varchar(200) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `email`, `nik_ktp`, `foto_ktp`, `referal`, `username`, `password`, `role`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'admin', 'admin', 'ajiid9818@gmail.com', '12424', '213414', '1', '123456', '$2y$10$PtP64PpOEmeDPzysw0lh0ueqHE6apDMfdJ3f3jLF4U/wOCS/OgTMy', '1', '2', '2021-10-22 08:08:06', NULL, '2021-10-21 06:21:23', '2021-10-21 06:21:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `withdraw`
--

CREATE TABLE `withdraw` (
  `id_withdraw` int(11) NOT NULL,
  `id_users` varchar(100) NOT NULL,
  `jumlah_withdraw` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `withdraw`
--

INSERT INTO `withdraw` (`id_withdraw`, `id_users`, `jumlah_withdraw`, `tanggal`, `status`) VALUES
(1, '8', '45', '2021-10-22', '0'),
(2, '8', '34', '2021-10-22', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun_bank`
--
ALTER TABLE `akun_bank`
  ADD PRIMARY KEY (`id_akun_bank`);

--
-- Indeks untuk tabel `akun_trading`
--
ALTER TABLE `akun_trading`
  ADD PRIMARY KEY (`id_akun_trading`);

--
-- Indeks untuk tabel `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id_deposit`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik_ktp` (`nik_ktp`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id_withdraw`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun_bank`
--
ALTER TABLE `akun_bank`
  MODIFY `id_akun_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `akun_trading`
--
ALTER TABLE `akun_trading`
  MODIFY `id_akun_trading` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id_deposit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id_withdraw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
