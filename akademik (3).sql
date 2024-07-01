-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2024 pada 14.45
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `matapelajaran`
--

CREATE TABLE `matapelajaran` (
  `kodemapel` char(5) NOT NULL,
  `namamapel` varchar(30) NOT NULL,
  `jmljam` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matapelajaran`
--

INSERT INTO `matapelajaran` (`kodemapel`, `namamapel`, `jmljam`) VALUES
('MP001', 'PWPBd', '7'),
('MP002', 'Pemrograman Beroirentasi Objek', '13'),
('MP003', 'Basis Data', '8'),
('MP004', 'Sistem Operasi', '4'),
('MP005', 'Matematika', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` char(9) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jkel` varchar(15) NOT NULL,
  `jurusan` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jkel`, `jurusan`) VALUES
('0023456', 'Budi Santoso', 'Laki-laki', 'UPW'),
('0034567', 'Citra Lestari', 'Perempuan', 'PH'),
('0045678', 'Dewi kjyjk', 'Perempuan', 'TBG'),
('0056789', 'Eko Prasetyo', 'Laki-laki', 'TBS'),
('0067890', 'Fani Kurniawan', 'Perempuan', 'RPL'),
('0078901', 'Gita Puspitasari', 'Perempuan', 'UPW'),
('0089012', 'Hadi Susilo', 'Laki-laki', 'PH'),
('0090123', 'Indah Permata', 'Perempuan', 'TBG'),
('0101234', 'Joko Wibowo', 'Laki-laki', 'TBS'),
('0112345', 'Karin Sari', 'Perempuan', 'RPL'),
('0123456', 'Lani Dewi', 'Perempuan', 'UPW'),
('0134567', 'Maman Sutrisno', 'Laki-laki', 'PH'),
('0145678', 'Nadya Rahayu', 'Perempuan', 'TBG'),
('0156789', 'Oscar Setiawan', 'Laki-laki', 'TBS'),
('0167890', 'Putri Ramadhani', 'Perempuan', 'RPL'),
('0178901', 'Rudi Hartono', 'Laki-laki', 'UPW'),
('0189012', 'Sinta Mega', 'Perempuan', 'PH'),
('0190123', 'Tono Wirawan', 'Laki-laki', 'TBG'),
('0201234', 'Udin Prabowo', 'Laki-laki', 'TBS'),
('0212345', 'Vina Cahyani', 'Perempuan', 'RPL'),
('0223456', 'Wati Handayani', 'Perempuan', 'UPW'),
('0234567', 'Xavier Nugroho', 'Laki-laki', 'PH'),
('0245678', 'Yanti Fitri', 'Perempuan', 'TBG'),
('0256789', 'Zainal Arifin', 'Laki-laki', 'TBS'),
('0267890', 'Andi Hartono', 'Laki-laki', 'RPL'),
('0278901', 'Bella Wijaya', 'Perempuan', 'UPW'),
('0289012', 'Cindy Puspita', 'Perempuan', 'PH'),
('0290123', 'Dodi Pratama', 'Laki-laki', 'TBG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` char(9) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`) VALUES
('ardi', '5e7ed51b7bf35c4886a1a5688a65fe63', 'Ardi'),
('kal', '5ebe2294ecd0e0f08eab7690d2a6ee69', 'Kallisya'),
('nad', '6f8081e7155b2abfec36e7ec254dc7f6', 'Nadya'),
('vale', '4149ba7e4833a9d02187c2ac7224555a', 'Vale');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD PRIMARY KEY (`kodemapel`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
