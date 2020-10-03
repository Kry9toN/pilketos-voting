-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 30 Jul 2020 pada 13.31
-- Versi server: 5.7.31-0ubuntu0.18.04.1
-- Versi PHP: 7.2.24-0ubuntu0.18.04.6

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
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
  `visi` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `misi` varchar(1000) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','T') COLLATE latin1_general_ci NOT NULL DEFAULT 'T',
  `foto` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`idkandidat`, `username`, `password`, `nama`, `nokandidat`, `jumlahsuara`, `visi`, `misi`, `aktif`, `foto`) VALUES
(1, 'kandidat1', '8f23e4acba1b7f45423b930e7cfadbd0', 'ASLAMATUL DIANING PRAMESWARI INDRIANI', '1', '0', 'Menambah wawasan siswa-siswi SMKN 1 UDANAWU supaya menjadi siswa-siswi  penerus bangsa yang berkualitas dan berpotensi tinggi.', '<ol><li>Menambah ketakwaan kepada Tuhan Yang Maha Esa</li><li>Menambah kedisiplinan dalam menaati dan mematuhi semua peraturan yang ada</li><li>Menggali dan mengembangkan potensi yang dimiliki siswa</li><li>Mengembangkan lingkungan yang bersih, indah, hijau, dan ramah.</li><li>Mengembangkan bidang ilmu pengetahuan dan teknologi berdasarkan minat bakat dan potensi siswa</li></ol>', 'Y', '20200728_205133.png'),
(2, 'kandidat2', '2bffe16305577d9689a200067b878f65', 'ELLY DWI SAPUTRA', '2', '0', 'Menjadikan smkn 1 udanawu menjadi smk yang harmonis, berkualitas, bertanggung jawab, berprestasi dengan berlandaskan iman dan taqwa kepada tuhan', '<ol><li>Menanamkan sikap disiplin pada semua siswa</li><li>\r\nMelanjutkan program osis yang belum terselesaikan di periode sebelumnya</li><li>\r\nMengoptimalkan fungsi dan peranan osis dan meningkatkan kinerja dan kerja sama\r\nkhususnya dalam organisasi siswa</li><li>\r\nMeningkatkan kembali kesadaran siswa mengenai pentingnya menjaga kebersihan dan\r\nkeamanan lingkungan sekolah</li><li>\r\nMemfasilitasi, memajukan, dan mengembangkan kreatifitas, bakat, minat serta potensi\r\nsiswa melalui kegiatan maupun organisasi yang ada agar menjadi sebuah prestasi</li><li>\r\nMenumbuh kembangkan serta memperkokoh keimanan dan ketaqwaan kepada tuhan\r\nmelalui pembinaan rohani dan kegiatan keagamaan</li></ol>', 'Y', '20200728_205137.png'),
(3, 'kandidat3', 'c366c79b1df7ef9cce13d260b3fd0bcd', 'AFIFA RULIANA', '3', '0', 'Menjadikan SMKN 1 UDANAWU sebagai sekolah yang unggul, berprestasi dengan berwawasan lingkungan yang berakarkan pada ketuhanan yang maha esa. ', '<ol><li>Menumbuh kembangkan keimanan dan ketaqwaan pada tuhan dengan kegiatan keagamaan</li><li>Siswa dapat mengembangkan seluruh potensinya sesuai bakat dan minat</li><li>Meningkatkan pengawasan terhadap perilaku siswa saat berada dalam sekolah</li><li>Menjalin kerjasama yang baik antar penduduk sekolah dan sekelilingnya di dalam berbagai event dan kegiatan demi mewujudkan kemajuan sekolah bersama.</li></ol>', 'Y', '20200728_205139.png'),
(4, 'kandidat4', '6e444803b5d6b561083250cb1be7b64b', 'TOTOK DWI PRAKOSO', '4', '0', 'MEWUJUDKAN SMK NEGERI 1 UDANAWU MENJADI SEKOLAH UNGGUL, SERTA MENDORONG SISWANYA BERBUDI PEKERTI LUHUR.', '<ol><li>MENUMBUHKAN PERILAKU PEDULI LINGKUNGAN</li><li>\r\nMENCIPTAKAN SUATU</li><li>\r\nKEGIATAN YANG DAPAT MENGASAH POTENSI SISWA</li><li>\r\nMERANGKUL EKSKUL DAN MENJALIN HUBUNGAN BAIK DENGAN SISWA</li><li>\r\nMENUMBUHKAN SIKAP DISIPLIN.</li></ol>', 'Y', 'IMG-20200730-WA0020.jpg'),
(5, 'kandidat5', '6bc4798eeab61ce7d27d00307e950d63', 'MUHAMMAD IKFI ZAM ZAM AUDI', '5', '0', '', '', 'Y', 'IMG-20200730-WA0022.jpg');

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
(14, 'Vennita', '398da702a25dcad95d9ce7722920b7f8', 'Vennita Aprilia', 'Ngekoni', '+6282141904570', 'vennitaaprilia886@gmail.com', 'Admin', 'Y', 'bcba29bc-117e-41c6-ae5e-7764c01d2cea.jpg');

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
  MODIFY `idkandidat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
