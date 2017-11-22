-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 22 Nov 2017 pada 15.25
-- Versi Server: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_security`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pangkat` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `pangkat`, `alamat`, `no_hp`) VALUES
(10, 'Admin', 'admin', 'admin', 'Kepala Keamanan', 'Jl.Keren', '082170310831');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `ukuran_barang` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jenis_barang`, `ukuran_barang`) VALUES
(1, 'Handphone', 'Elektronik', 'Sedang'),
(3, 'Kulkas', 'Elektronik', 'Besar'),
(4, 'Charger', 'Elektronik', 'Kecil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(255) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama_pemilik`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES
(1, 'Ryansda', 'Perempuan', 'Jl.Harapan Raya', '08127577773');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penemu`
--

CREATE TABLE `penemu` (
  `id_penemu` int(255) NOT NULL,
  `nama_penemu` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penemu`
--

INSERT INTO `penemu` (`id_penemu`, `nama_penemu`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES
(7, 'Paja', 'Laki-Laki', 'Jl.Panams', '08127566668'),
(6, 'Ades', 'Laki-Laki', 'Jl.Sepakat', '08127577773'),
(8, 'Violet', 'Perempuan', 'Jl.Aov', '08127588883');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penemuan`
--

CREATE TABLE `penemuan` (
  `id_temu` int(255) NOT NULL,
  `tanggal_temu` date NOT NULL,
  `id` int(255) NOT NULL,
  `id_penemu` int(255) NOT NULL,
  `id_barang` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengambilan`
--

CREATE TABLE `pengambilan` (
  `id_ambil` int(255) NOT NULL,
  `tanggal_ambil` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `id_penemu` int(255) NOT NULL,
  `id_pemilik` int(255) NOT NULL,
  `id_barang` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `penemu`
--
ALTER TABLE `penemu`
  ADD PRIMARY KEY (`id_penemu`);

--
-- Indexes for table `penemuan`
--
ALTER TABLE `penemuan`
  ADD PRIMARY KEY (`id_temu`),
  ADD KEY `id` (`id`),
  ADD KEY `id_penemu` (`id_penemu`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `pengambilan`
--
ALTER TABLE `pengambilan`
  ADD PRIMARY KEY (`id_ambil`),
  ADD KEY `id_penemu` (`id_penemu`),
  ADD KEY `id` (`id`),
  ADD KEY `id_pemilik` (`id_pemilik`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penemu`
--
ALTER TABLE `penemu`
  MODIFY `id_penemu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `penemuan`
--
ALTER TABLE `penemuan`
  MODIFY `id_temu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pengambilan`
--
ALTER TABLE `pengambilan`
  MODIFY `id_ambil` int(255) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penemuan`
--
ALTER TABLE `penemuan`
  ADD CONSTRAINT `penemuan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admin` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
