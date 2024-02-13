-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2024 pada 02.07
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ayyub', 'ayyub');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_anggota`
--

CREATE TABLE `m_anggota` (
  `id` int(11) NOT NULL,
  `no_anggota` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `m_anggota`
--

INSERT INTO `m_anggota` (`id`, `no_anggota`, `nama`) VALUES
(1, '12', 'cui'),
(5, '155', 'Jiul'),
(12, '400039', 'Hans'),
(13, '1133', 'Shuu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_buku`
--

CREATE TABLE `m_buku` (
  `id` int(11) NOT NULL,
  `kode_buku` varchar(45) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `pengarang` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `m_buku`
--

INSERT INTO `m_buku` (`id`, `kode_buku`, `judul`, `pengarang`) VALUES
(1, 'SCOOPG143597', 'Mengenal Pemrograman Reactjs', 'Elex Media Komputindo'),
(2, 'ebook1', 'React JS From Zero', 'Onesinus Saut Parulian'),
(8, '1C', 'Pendongeng Handal', 'Anak Manja'),
(12, '1B', 'buku nasi goreng', 'Anak Manja'),
(15, '1E', 'cara menjadi nurfath', 'Anak Tenggelam'),
(16, 'A01', 'Budidaya Lobster Air Tawar', 'Bambang Marhiyanto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_peminjaman_detail`
--

CREATE TABLE `t_peminjaman_detail` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `kode_transaksi` varchar(45) NOT NULL,
  `waktu_transaksi` date NOT NULL,
  `waktu_pengembalian` date NOT NULL,
  `denda` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_peminjaman_detail`
--

INSERT INTO `t_peminjaman_detail` (`id`, `id_buku`, `id_anggota`, `kode_transaksi`, `waktu_transaksi`, `waktu_pengembalian`, `denda`) VALUES
(1, 1, 213, '002', '2023-07-27', '2023-07-31', '0'),
(2, 2, 400039, '14', '2023-07-27', '2023-08-04', '1000'),
(3, 1, 155, '511', '2023-07-27', '2023-08-03', '1000'),
(13, 16, 12, 'A01 SD Muh1', '2024-02-07', '2024-02-10', '1000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_anggota`
--
ALTER TABLE `m_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_buku`
--
ALTER TABLE `m_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_peminjaman_detail`
--
ALTER TABLE `t_peminjaman_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `m_anggota`
--
ALTER TABLE `m_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `m_buku`
--
ALTER TABLE `m_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `t_peminjaman_detail`
--
ALTER TABLE `t_peminjaman_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
