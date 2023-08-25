-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Jun 2018 pada 14.44
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `koleksiebook`
--

CREATE TABLE `koleksiebook` (
  `id_koleksiEBOOK` int(255) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `accno` int(200) NOT NULL,
  `subjek` varchar(200) NOT NULL,
  `barcode` int(200) NOT NULL,
  `laporan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `koleksiebook`
--

INSERT INTO `koleksiebook` (`id_koleksiEBOOK`, `judul`, `penulis`, `jurusan`, `accno`, `subjek`, `barcode`, `laporan`) VALUES
(17, 'testing by ', 'azminz', 'Teknik Sipil', 132645, 'subjek', 1234578, 'buktikkn_H1D015009.pdf'),
(19, 'Audit Sistem Informasi keungan Bank XYZ', 'Dwiki R', 'Teknik Informatika', 144, 'subjek', 144, '2.56 Abstrak (Rizki).pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `koleksikp`
--

CREATE TABLE `koleksikp` (
  `id_koleksiKP` int(255) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `dosbimKP` varchar(100) NOT NULL,
  `dosbimKP1` varchar(100) NOT NULL,
  `accno` int(200) NOT NULL,
  `subjek` varchar(200) NOT NULL,
  `barcode` int(200) NOT NULL,
  `laporan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `koleksikp`
--

INSERT INTO `koleksikp` (`id_koleksiKP`, `judul`, `penulis`, `nim`, `jurusan`, `dosbimKP`, `dosbimKP1`, `accno`, `subjek`, `barcode`, `laporan`) VALUES
(8, 'Audit Sistem Informasi Kemanan Database LPTSI', 'Fisal Satria R', 'H1D015024', 'Teknik Sipil', 'Swahesti Puspita R', 'Januar', 123, 'keamanan', 123, 'Form Keterangan Masih Kuliah.pdf'),
(10, 'Rancang Bangun Sistem Informasi Kearsipan Perpustakaan Berbasis Website Studi Kasus PII Fakultas Tek', 'Rizki Taufiq Ramadan', 'H1D015009', 'Teknik Sipil', 'Arief Kelik Nugroho,S.Kom.,M.Cs', 'Romadon ', 2018, 'Kearsipan', 2018, '2.56 Abstrak (Rizki).pdf'),
(14, 'Sistem Penerjemaah Bahasa Dengan Citra Digital', 'Bimo', 'H1D014020', 'Teknik Sipil', 'Ipung Permadi', 'Rohman', 124, 'subjek', 134, '2.56 Abstrak (Rizki).pdf'),
(16, 'Sistem Informasi Keungan Mini Market Bersahaja', 'Rayin', 'H1D0160', 'Teknik Sipil', 'Bangun W', 'Teguh Cahyono', 123, 'subjek', 123, '2.56 Abstrak (Rizki).pdf'),
(17, 'Sistem Informasi Managemen Keungan Studi kasus PT Sinar Jaya', 'Dejan F', 'H1D015048', 'Teknik Informatika', 'Swahesti Puspita R', 'aditya', 123, 'Managemen', 123, '2.56 Abstrak (Rizki).pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `koleksita`
--

CREATE TABLE `koleksita` (
  `id_koleksiTA` int(255) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `dosbimTA` varchar(100) NOT NULL,
  `dosbimTA1` varchar(100) NOT NULL,
  `accno` int(200) NOT NULL,
  `subjek` varchar(200) NOT NULL,
  `barcode` int(200) NOT NULL,
  `laporan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `koleksita`
--

INSERT INTO `koleksita` (`id_koleksiTA`, `judul`, `penulis`, `nim`, `jurusan`, `dosbimTA`, `dosbimTA1`, `accno`, `subjek`, `barcode`, `laporan`) VALUES
(6, 'Sistem Informasi Pendataan Mahasiswa Baru', 'Maulana Adi Pratama', 'H1D015015', 'Teknik Informatika', 'Teguh Cahyono, M.Kom.', 'Bangun Wijayanto, ST, M.Cs.', 2018, 'Pendataan', 2018, '2.56 Abstrak (Rizki).pdf'),
(7, 'ramdan', 'ramdan', 'ramdan', 'Teknik Sipil', 'ramdan', 'ramdan', 89, 'ramdan', 89, '2.56 Abstrak (Rizki).pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_log` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `id_koleksi` int(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_log`, `id_user`, `id_koleksi`, `waktu`) VALUES
(57, 2, 17, '2018-05-25 12:34:03'),
(62, 10, 17, '2018-05-25 12:52:05'),
(66, 2, 6, '2018-05-26 01:54:06'),
(67, 10, 19, '2018-05-26 10:22:28'),
(69, 2, 8, '2018-05-27 06:37:55'),
(70, 2, 10, '2018-05-27 06:38:01'),
(73, 2, 19, '2018-05-28 02:23:59'),
(77, 12, 19, '2018-05-28 02:44:02'),
(78, 12, 7, '2018-05-28 02:44:18'),
(79, 2, 7, '2018-05-28 02:45:20'),
(80, 2, 19, '2018-05-28 03:09:38'),
(81, 2, 19, '2018-05-28 03:10:21'),
(82, 2, 19, '2018-05-28 03:11:00'),
(83, 2, 6, '2018-05-28 09:21:46'),
(84, 2, 7, '2018-06-05 14:41:43'),
(85, 2, 8, '2018-06-05 17:45:56'),
(86, 2, 16, '2018-06-05 17:46:19'),
(87, 2, 16, '2018-06-05 17:46:45'),
(88, 2, 17, '2018-06-15 12:19:43'),
(89, 2, 19, '2018-06-28 14:40:33'),
(90, 2, 19, '2018-06-30 12:07:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id_saran`, `id_user`, `saran`, `waktu`) VALUES
(5, 2, 'baik baik saja', '2018-05-26 00:41:51'),
(6, 2, 'KP nya mohon segera diselesaikan', '2018-05-26 01:05:28'),
(7, 2, 'Good Job !', '2018-05-26 01:32:13'),
(8, 10, 'Ayo selesaikan', '2018-05-26 11:36:59'),
(9, 2, 'kp nya cepet kelar ya !', '2018-05-28 02:25:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_koleksiebook`
--

CREATE TABLE `tmp_koleksiebook` (
  `id_tmpkoleksiebook` int(255) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `accno` int(200) NOT NULL,
  `subjek` varchar(200) NOT NULL,
  `barcode` int(200) NOT NULL,
  `laporan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmp_koleksiebook`
--

INSERT INTO `tmp_koleksiebook` (`id_tmpkoleksiebook`, `judul`, `penulis`, `jurusan`, `accno`, `subjek`, `barcode`, `laporan`) VALUES
(3, 'Audit Sistem Informasi keungan Bank XYZ', 'Dwiki R', 'Teknik Informatika', 144, 'keuangan', 144, '2.56 Abstrak (Rizki).pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_koleksikp`
--

CREATE TABLE `tmp_koleksikp` (
  `id_tmpkoleksikp` int(255) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `dosbimKP` varchar(100) NOT NULL,
  `dosbimKP1` varchar(100) NOT NULL,
  `subjek` varchar(200) NOT NULL,
  `accno` int(200) NOT NULL,
  `barcode` int(200) NOT NULL,
  `laporan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_koleksita`
--

CREATE TABLE `tmp_koleksita` (
  `id_tmpkoleksita` int(255) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `dosbimTA` varchar(100) NOT NULL,
  `dosbimTA1` varchar(100) NOT NULL,
  `subjek` varchar(200) NOT NULL,
  `accno` int(200) NOT NULL,
  `barcode` int(200) NOT NULL,
  `laporan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmp_koleksita`
--

INSERT INTO `tmp_koleksita` (`id_tmpkoleksita`, `judul`, `penulis`, `nim`, `jurusan`, `dosbimTA`, `dosbimTA1`, `subjek`, `accno`, `barcode`, `laporan`) VALUES
(3, 'Rancang Bangun Sistem Location Based Service Pemataan Gunung Slamet', 'Ali', 'H1D013012', 'Teknik Informatika', 'Bangun W', 'Teguh C', 'LBS', 897, 897, '2.56 Abstrak (Rizki).pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','pustakawan','anggota','non anggota') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'Teknik Industri', 'Rizki Taufiq R', 'H1D015007', 'anggota'),
(3, 'pustakawan', 'pustakawan', 'pustakawan', 'pustakawan'),
(4, 'non anggota', 'Ramadan', 'Teknik Blater', 'non anggota'),
(5, 'Teknik Elektro', 'Ahmad', 'H1D16', 'anggota'),
(9, 'Ilmu Komunikasi', 'king', 'H1D015023', 'non anggota'),
(10, 'Teknik Mesin', 'kitau', 'H1D', 'non anggota'),
(11, 'raw', 'raw', 'raw', 'non anggota'),
(12, 'teknik kimia', 'coba', 'coba coba', 'non anggota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koleksiebook`
--
ALTER TABLE `koleksiebook`
  ADD PRIMARY KEY (`id_koleksiEBOOK`);

--
-- Indexes for table `koleksikp`
--
ALTER TABLE `koleksikp`
  ADD PRIMARY KEY (`id_koleksiKP`);

--
-- Indexes for table `koleksita`
--
ALTER TABLE `koleksita`
  ADD PRIMARY KEY (`id_koleksiTA`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `tmp_koleksiebook`
--
ALTER TABLE `tmp_koleksiebook`
  ADD PRIMARY KEY (`id_tmpkoleksiebook`);

--
-- Indexes for table `tmp_koleksikp`
--
ALTER TABLE `tmp_koleksikp`
  ADD PRIMARY KEY (`id_tmpkoleksikp`);

--
-- Indexes for table `tmp_koleksita`
--
ALTER TABLE `tmp_koleksita`
  ADD PRIMARY KEY (`id_tmpkoleksita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `koleksiebook`
--
ALTER TABLE `koleksiebook`
  MODIFY `id_koleksiEBOOK` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `koleksikp`
--
ALTER TABLE `koleksikp`
  MODIFY `id_koleksiKP` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `koleksita`
--
ALTER TABLE `koleksita`
  MODIFY `id_koleksiTA` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tmp_koleksiebook`
--
ALTER TABLE `tmp_koleksiebook`
  MODIFY `id_tmpkoleksiebook` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tmp_koleksikp`
--
ALTER TABLE `tmp_koleksikp`
  MODIFY `id_tmpkoleksikp` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tmp_koleksita`
--
ALTER TABLE `tmp_koleksita`
  MODIFY `id_tmpkoleksita` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
