-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Bulan Mei 2019 pada 06.20
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absenkaryawandb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `nid` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(40) NOT NULL,
  `agama` varchar(40) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `telp_rumah` varchar(30) NOT NULL,
  `handphone` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `status_perkawinan` varchar(40) NOT NULL,
  `status_karyawan` varchar(40) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `departemen` varchar(40) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nid`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `agama`, `alamat`, `kota`, `provinsi`, `telp_rumah`, `handphone`, `email`, `status_perkawinan`, `status_karyawan`, `jabatan`, `departemen`, `photo`) VALUES
('1580', 'Erick', '20 Januari 1999', 'Jakarta', 'Laki Laki', 'Islam', 'Jl Asrama', 'Semarang', 'Jateng', '0812345', '08678', 'adit@gmail.com', 'Jomblo', 'Aktif', 'HRD', 'IT', '1580.jpg'),
('22233', 'Dio', '20 Januari 1999', 'Medan', 'Laki Laki', 'Islam', 'Jl Asrama', 'Medan', 'Jateng', '0812345', '08678', 'fikrihaikal07@live.com', 'Jomblo', 'Aktif', 'HRD', 'IT', '22233.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login`
--

CREATE TABLE `user_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `login_hash` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_login`
--

INSERT INTO `user_login` (`username`, `password`, `login_hash`) VALUES
('admin', 'admin', 'admin'),
('bagus', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nid`);

--
-- Indeks untuk tabel `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
