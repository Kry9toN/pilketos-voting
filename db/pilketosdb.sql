-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 30 Jul 2020 pada 06.05
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pilketosdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapemilihan`
--

CREATE TABLE `datapemilihan` (
  `idpemilihan` int(6) NOT NULL,
  `tipe` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `idpemilih` varchar(9) COLLATE latin1_general_ci DEFAULT NULL,
  `idkandidat` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `datapemilihan`
--

INSERT INTO `datapemilihan` (`idpemilihan`, `tipe`, `idpemilih`, `idkandidat`, `waktu`) VALUES
(1, 'Siswa', '4646', '2', '2020-07-27 06:55:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(9) NOT NULL,
  `nane` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `memilih` varchar(10) NOT NULL DEFAULT 'belum',
  `aktif` enum('Y','T') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `idkandidat` int(2) NOT NULL,
  `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nokandidat` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `jumlahsuara` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `visi` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `misi` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','T') COLLATE latin1_general_ci NOT NULL DEFAULT 'T',
  `foto` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`idkandidat`, `username`, `password`, `nama`, `nokandidat`, `jumlahsuara`, `visi`, `misi`, `aktif`, `foto`) VALUES
(1, 'kandidat1', '8f23e4acba1b7f45423b930e7cfadbd0', 'Tuan dan Puan', '2', '2', 'Mejadikan sekolah ini sebagai sekolah SMA Favorit karena OSIS-nya', '<ol><li>Tahun ini harus haji semua pengurus OSISnya</li><li>\r\nMenjadikan bla..bla...</li><li>\r\njadinya hahahaha</li><li>\r\napa yah</li><li>\r\nbukan deh</li></ol>', 'Y', '411.jpg'),
(2, 'muhidin', 'c0f6e70583525a8a265e19de06d6bff8', 'Muhidin', '1', '5', 'Menjadikan sebagai OSIS terbaik sekota Depok', '<ol><li>Membuat pengajian rutin</li><li>\nMengundang pembicara kaliber nasional per 3 bulan ke acara OSIS</li><li>lain-lain</li></ol>', 'Y', 'AllahWithUs.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` int(4) NOT NULL,
  `kelas` varchar(10) CHARACTER SET latin1 NOT NULL,
  `jumlah` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`idkelas`, `kelas`, `jumlah`) VALUES
(1, 'XI TKJ 1', 36);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `idpengguna` int(2) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hakakses` varchar(15) NOT NULL,
  `aktif` enum('Y','T') NOT NULL DEFAULT 'T',
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`idpengguna`, `username`, `password`, `nama`, `jabatan`, `hp`, `email`, `hakakses`, `aktif`, `foto`) VALUES
(1, 'krypton', '822f87e6ab25a25381caa0b1ae4d0963', 'Dhimas Bagus Prayoga', 'Owner', '085156296594', 'idontgiveashit@kry9ton.tech', 'Admin', 'Y', 'IMG_20200621_082109_544.jpg'),
(13, 'fakrun', 'c53ec9e997813e9e314ff9c6c866e86b', 'Fuckrun', 'Tukang ngeteh', '0908', 'uwu@gmail.com', 'Admin', 'Y', ''),
(14, 'venita', '2084e85dcddff802f8fb29ae6cd9c773', 'Venita', 'Ngekoni', '090', 'hh@gmail.com', 'Admin', 'Y', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `idkelas` varchar(2) NOT NULL,
  `aktif` enum('Y','T') NOT NULL DEFAULT 'Y',
  `memilih` varchar(10) NOT NULL DEFAULT 'belum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `password`, `idkelas`, `aktif`, `memilih`) VALUES
('4646', 'erere', '50f3f8c42b998a48057e9d33f4144b8b', '8', 'Y', 'sudah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapemilihan`
--
ALTER TABLE `datapemilihan`
  ADD PRIMARY KEY (`idpemilihan`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `username` (`nane`);

--
-- Indeks untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`idkandidat`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idpengguna`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `pengguna` (`nama`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapemilihan`
--
ALTER TABLE `datapemilihan`
  MODIFY `idpemilihan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `idkandidat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idpengguna` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
