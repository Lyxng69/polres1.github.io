-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 02:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pelayanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(15) NOT NULL,
  `nama_lengkap` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Falikh Rifqi Nail', 'admin', 'admin'),
(2, 'ilham', 'ilham', 'ilham');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lapor`
--

CREATE TABLE `tbl_lapor` (
  `id_laporan` int(12) NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `judul_laporan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `isi_laporan` varchar(1000) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_lapor`
--

INSERT INTO `tbl_lapor` (`id_laporan`, `nama`, `tgl_lahir`, `tmp_lahir`, `jenis_kelamin`, `agama`, `no_telp`, `alamat`, `pekerjaan`, `judul_laporan`, `isi_laporan`, `status`, `created_date`, `modified_date`) VALUES
(472, 'tes', '2023-05-18', 'tes', 'Laki-laki', 'kristen', 'tes', 'bulung cangkring rt 03 rw 08 jekulo\r\nsem', 'bulung cangkring rt 03 rw 08 j', 'tes', '01233312322', 'Belum Terverifikasi', '2023-05-18 21:17:55', NULL),
(471, 'Ghina', '2001-01-04', 'Kudus', 'Perempuan', 'Islam', '085156796373', 'bulung cangkring rt 03 rw 08 jekulo', 'Wirswasta', 'kebakaran hutan', 'Terjadi Kebakaran hutan di gadu pada jam 10 ', 'Belum Terverifikasi', '2023-05-04 14:57:06', NULL),
(470, '  Falikh Rifqi Nail', '2002-02-10', '  Kudus', 'Laki-laki', 'Islam', '085156796373', '  Jl. Siliwangi Bulung Cangkring RT 03', '  Nelayanan', '  Perampokan', '  terjadi perampokan di daerah kaliputu ', 'Terverifikasi', '2023-03-10 23:22:02', '2023-03-10 23:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `id_pengunjung` int(12) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_telpon` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`id_pengunjung`, `username`, `password`, `nama_lengkap`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `agama`, `no_telpon`) VALUES
(7, 'FalikhRN69', '123', 'Falikh Rifqi Nail', '2001-06-03', 'Laki-laki', 'Jekulo', 'Islam', '085156796373'),
(8, 'FalikhR', '123', 'Falikh Rifqi Nail', '2001-06-03', 'Laki-laki', 'bulung cangkring rt 03 rw 08 jekulo\r\nsem', 'Islam', '085156796373'),
(9, 'althaf', '123', 'Althaf', '2022-08-29', 'Laki-laki', 'Jakarta', 'Islam', '085357108488'),
(10, 'awd', '123', '', '0000-00-00', 'pilih', '', 'pilih', ''),
(11, 'awd', 'admin', '', '0000-00-00', 'pilih', '', 'pilih', ''),
(12, 'admin', 'admin', '', '0000-00-00', 'pilih', '', 'pilih', ''),
(13, 'admin', 'admin', 'db_pelayanan', '2023-05-18', 'Perempuan', 'bulung cangkring rt 03 rw 08 jekulo\r\nsem', 'Islam', 'Kudus'),
(14, 'Iqbal', '12345', 'Iqbal Rizqi Nail', '2002-06-04', 'Laki-laki', 'bulung cangkring rt 03 rw 08 jekulo\r\nsem', 'Islam', '085156796373');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perijinan`
--

CREATE TABLE `tbl_perijinan` (
  `id_perijinan` int(12) NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tujuan_kegiatan` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `waktu_kegiatan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tempat_kegiatan` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_perijinan`
--

INSERT INTO `tbl_perijinan` (`id_perijinan`, `nama`, `tgl_lahir`, `tmp_lahir`, `jenis_kelamin`, `alamat`, `agama`, `no_telp`, `tujuan_kegiatan`, `waktu_kegiatan`, `tempat_kegiatan`, `status`, `created_date`, `modified_date`) VALUES
(8, 'Falikh Rifqi Nai', '2022-02-28', 'Kudus', 'Laki-laki', 'Jekulo', 'Islam', '085156796373', 'Menyelenggarakan Kupatan', '21 maret', 'Dialun alun pati', 'Terverifikasi', '2023-02-25 18:52:22', NULL),
(9, '    Falik', '2022-02-28', '    Kudus', 'Laki-laki', '    Jekulo', 'Islam', ' 085156796373', ' Menyelenggarakan Kupatan', ' 21 maret', ' Dialun alun pati', 'Terverifikasi', '2023-02-24 18:52:22', NULL),
(10, 'test 1', '2023-03-10', 'Kudus', 'Laki-laki', 'bulung cangkring rt 03 rw 08 jekulo\r\nsem', 'Islam', '0891233312', 'wdawdad', '2132', 'awdqda', 'Belum Terverifikasi', '2023-03-10 21:31:58', NULL),
(11, 'test 1', '2023-03-10', 'Kudus', 'Laki-laki', 'bulung cangkring rt 03 rw 08 jekulo\r\nsem', 'Islam', 'Kudus', '01233312322', '21 maret', 'Dialun alun pati', 'Belum Terverifikasi', '2023-03-10 21:42:47', NULL),
(12, 'indi', '2023-03-10', 'Kudus', 'Laki-laki', 'bulung cangkring rt 03 rw 08 jekulo\r\nsem', 'kristen', '085156796373', 'nikahan', '21 maret', 'Dialun alun pati', 'Belum Terverifikasi', '2023-03-10 21:55:32', NULL),
(13, ' Falikh Rifqi Nail', '1995-02-10', ' Kudus', 'Laki-laki', ' Jl. Siliwangi Bulung Cangkring RT 03', 'Islam', ' 085156796373', ' Dangdutan Di Desa', ' Pagi Jam 9', ' Simpang 5', 'Terverifikasi', '2023-03-10 23:19:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sabhara`
--

CREATE TABLE `tbl_sabhara` (
  `id_sabhara` int(12) NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tujuan_pengawalan` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `route` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_sabhara`
--

INSERT INTO `tbl_sabhara` (`id_sabhara`, `nama`, `tgl_lahir`, `tmp_lahir`, `jenis_kelamin`, `alamat`, `agama`, `no_telp`, `tujuan_pengawalan`, `route`, `status`, `created_date`, `modified_date`) VALUES
(13, 'Falikh Rifqi Nail', '2023-05-10', 'Kudus', 'Laki-laki', 'Jl. Siliwangi', 'Islam', '085156796373', 'Artis besar', 'Kudus-Demak-Semarang', 'Belum Terverifikasi', '2023-05-10 21:09:08', NULL),
(9, 'Falikh Rifqi Nail', '2023-03-21', 'Kudus', 'Laki-laki', ' bulung cangkring rt 03 rw 08 jekulosem', 'Islam', '12324141', 'eadaw', ' Pati Kudus Semarang ', 'Terverifikasi', '2023-03-10 21:28:41', '2023-05-01 17:33:10'),
(10, 'Ayu', '2023-03-10', 'Kudus', 'Laki-laki', 'bulung cangkring rt 03 rw 08 jekulo\r\nsem', 'kristen', '085156796373', 'demak', 'Pati Kudus Semarang ', 'Belum Terverifikasi', '2023-03-10 21:54:41', NULL),
(11, 'Falikh Rifqi Nail', '2001-07-10', 'Kudus', 'Laki-laki', ' Jl. Siliwangi Bulung Cangkring RT 03', 'Islam', '085156796373', 'Pengawalan Artis Ke Wisuda', ' Pati Kudus Semarang ', 'Terverifikasi', '2023-03-10 23:17:06', '2023-03-10 23:17:45'),
(12, 'Neysa Ayu Anindya', '2001-02-20', 'Kudus', 'Perempuan', '  Jl. Siliwangi Bulung Cangkring RT 03', 'Islam', '087839887178', 'Anggota DPRD', '  Kudus-Demak-Semarang', 'Terverifikasi', '2023-03-20 10:55:41', '2023-03-20 10:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sim`
--

CREATE TABLE `tbl_sim` (
  `id_sim` int(12) NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tinggi` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `keterangan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `masa` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_sim` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_sim`
--

INSERT INTO `tbl_sim` (`id_sim`, `nama`, `tgl_lahir`, `tmp_lahir`, `jenis_kelamin`, `alamat`, `agama`, `no_telp`, `tinggi`, `pekerjaan`, `keterangan`, `masa`, `no_sim`, `status`, `created_date`, `modified_date`) VALUES
(7, ' Falikh Rifqi Nail', '1953-09-28', ' Kudu', 'Laki-laki', ' Jekulo', 'buddha', '085156796373', '160', 'Wiraswasta', 'Baru', '2026-12-28', '1231245512', 'Terverifikasi', '2022-01-24 19:02:24', '2023-04-25 18:39:47'),
(11, '   test 1', '2023-03-10', '   Kudus', 'Laki-laki', '   bulung cangkring rt 03 rw 08 jekulose', 'Islam', '085156796373', '172', ' mahasiswa', 'Baru', '2023-04-19', '098876677712', 'Terverifikasi', '2023-03-10 21:11:07', '2023-04-25 18:42:03'),
(12, ' test 3', '2023-03-10', ' lupa', 'Laki-laki', ' lupa', 'Islam', '085156796373', 'lupa', 'lupa', 'Baru', '2023-05-10', '098876677712', 'Belum Terverifikasi', '2023-03-10 22:17:07', '2023-05-10 21:29:40'),
(13, ' test 4', '2023-03-10', ' lupa', 'Laki-laki', ' bulung cangkring rt 03 rw 08 jekulosem', 'Islam', '12324141', 'Kudus', 'Mahasiswa', 'Baru', '2023-05-10', '01233312322', 'Belum Terverifikasi', '2023-03-10 22:18:58', '2023-05-10 21:29:51'),
(14, ' NEYSA AYU ANIDIYA', '2005-01-10', ' Kudus', 'Laki-laki', ' Jl. Siliwangi Bulung Cangkring RT 03', 'Islam', '085156796373', '172', 'Mahasiswa', 'Baru', '2024-07-10', '098876677712', 'Terverifikasi', '2023-03-10 23:11:28', '2023-03-10 23:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skck`
--

CREATE TABLE `tbl_skck` (
  `id_skck` int(12) NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `kebangsaan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_ktp` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `keperluan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `riwayat_sekolah` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `keterangan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `masa` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `created_date` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `modified_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_skck`
--

INSERT INTO `tbl_skck` (`id_skck`, `nama`, `jenis_kelamin`, `kebangsaan`, `agama`, `tgl_lahir`, `tmp_lahir`, `alamat`, `pekerjaan`, `no_telp`, `no_ktp`, `keperluan`, `riwayat_sekolah`, `keterangan`, `masa`, `status`, `created_date`, `modified_date`) VALUES
(229, '  Falikh Rifqi Nail', 'Laki-laki', '  Indonesia', 'Islam', '2001-06-05', '  Kudus', '  bulung cangkring rt 03 rw 08', '  bulung cangkring rt 03 rw 08', '085357108408', '  2000137713012', '  Mendaftar Magang', '  Universitas Dian Nuswantoro', '  Baru', '2024-10-12', 'Terverifikasi', '2024-10-12 00:00:00', NULL),
(239, 'Falikh Rifqi Nail', 'Laki-laki', 'Indonesia', 'Islam', '2013-02-28', 'Kudus', 'bulung cangkring rt 03 rw 08 j', 'Wiraswasta', '085156796373', '12333', 'mendaftar kerja', 'Sma 1 Kudus', 'Baru', '2024-01-30', 'Belum Terverifikasi', '2023-04-30 14:30:16', '2023-04-30 14:30:16'),
(238, '  IBU NOVITA', 'Perempuan', '  INDONESIA', 'Islam', '2000-03-02', '  SEMARANG', '  Jl. Siliwangi Bulung Cangkri', '  Jl. Siliwangi', '085156796373', '  2000137713', '  Mendaftar kerja', '  UDINUS', '  Baru', '2023-03-20', 'Terverifikasi', '2023-04-25 14:41:17', '2023-04-25 14:41:17'),
(230, ' Falikh Rifqi Nail', 'Laki-laki', ' Indonesia', 'Islam', '2001-06-17', ' Kudus', 'bulung cangkring rt 03 rw 08 j', ' Pelajar', '085156796373', ' 78891200098', ' Mendaftar Magang MBKM', ' Universitas Dian Nuswantoro', ' ', '2023-06-06', 'Belum Terverifikasi', '2023-04-25 17:45:59', '2023-04-25 17:45:59'),
(231, '  alfian fiki', 'Laki-laki', '  Indonesia', 'Islam', '2001-03-06', '  pati', ' bulung cangkring rt 03 rw 08 ', '  mahasiswa', ' 085357108408', '  9812391297412', '  mendaftar magang', '  udinus', '  mendaftar magang', '2024-09-12', 'Terverifikasi', '2024-09-12 00:00:00', NULL),
(240, ' Iqbal Rizqi Naim', 'Laki-laki', ' Indonesia', 'Islam', '2010-06-15', ' Pati', ' bulung cangkring rt 03 rw 08 ', ' bulung cangkring rt 03 rw 08 ', ' 085156796373', ' 12345678910111213141516171819', ' Mendaftar kerja', ' Sma 1 Kudus', ' Baru', '2023-06-15', 'Terverifikasi', '2023-06-15 09:13:40', '2023-06-15 09:13:40'),
(233, ' NEYSA AYU ANIDIYA', 'Perempuan', ' INDONESIA', 'Islam', '2000-10-10', ' KUDUS', ' BULUNG CANGKRING', ' MAHASISWA', ' 087839887178', ' 08991230121', ' MENDAFTAR MAGANG BUMN', ' UNIVERSITAS DIAN NUSWANTORO', ' Baru', '2025-06-20', 'Terverifikasi', '2023-03-20 11:00:35', '2023-03-20 11:00:35'),
(237, '  Iqbal Rizqi Naim', 'Laki-laki', '  INDONESIA', 'Islam', '2007-06-10', '  Kudus', '  Jl. Siliwangi Bulung Cangkri', '  Jl. Siliwangi', '085156796373', '  2000137713012', '  Mendaftar kerja', '  Sma 1 Kudus', '  Baru', '2023-03-01', 'Terverifikasi', '2023-06-15 09:17:16', '2023-06-15 09:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stnk`
--

CREATE TABLE `tbl_stnk` (
  `id_stnk` int(12) NOT NULL,
  `no_registrasi` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(100) COLLATE latin1_general_ci DEFAULT 'Belum Terverifikasi',
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `merk` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `type` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `jenis` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `model` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tahun` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `isi_silinder` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `warna` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `keterangan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `masa` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_stnk`
--

INSERT INTO `tbl_stnk` (`id_stnk`, `no_registrasi`, `status`, `nama`, `alamat`, `no_telp`, `merk`, `type`, `jenis`, `model`, `tahun`, `isi_silinder`, `warna`, `keterangan`, `masa`, `created_date`, `modified_date`) VALUES
(20, '12399912300', 'Belum Terverifikasi', 'GEBI KURNIAWATI', 'bulung cangkring rt 03 rw 08 jekulo', '085156796373', 'Honda', 'Racing', 'Terbaru', '3123', '01233312322', '2', 'Hitam', '', '2023-05-02', '2023-05-02 09:24:39', NULL),
(19, ' 12399912300', 'Terverifikasi', ' Falikh Rifqi Nail', '  bulung cangkring rt 03 rw 08 jekulo', '085156796373', '     Honda', '     Racing', '     Terbaru', '     3123', '     2111', '     1', '     Hitam', ' baru', '2023-04-25', '2023-04-25 19:05:25', '2023-04-25 19:09:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`) USING BTREE;

--
-- Indexes for table `tbl_lapor`
--
ALTER TABLE `tbl_lapor`
  ADD PRIMARY KEY (`id_laporan`) USING BTREE;

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`) USING BTREE;

--
-- Indexes for table `tbl_perijinan`
--
ALTER TABLE `tbl_perijinan`
  ADD PRIMARY KEY (`id_perijinan`) USING BTREE;

--
-- Indexes for table `tbl_sabhara`
--
ALTER TABLE `tbl_sabhara`
  ADD PRIMARY KEY (`id_sabhara`) USING BTREE;

--
-- Indexes for table `tbl_sim`
--
ALTER TABLE `tbl_sim`
  ADD PRIMARY KEY (`id_sim`) USING BTREE;

--
-- Indexes for table `tbl_skck`
--
ALTER TABLE `tbl_skck`
  ADD PRIMARY KEY (`id_skck`) USING BTREE;

--
-- Indexes for table `tbl_stnk`
--
ALTER TABLE `tbl_stnk`
  ADD PRIMARY KEY (`id_stnk`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_lapor`
--
ALTER TABLE `tbl_lapor`
  MODIFY `id_laporan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=473;

--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `id_pengunjung` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_perijinan`
--
ALTER TABLE `tbl_perijinan`
  MODIFY `id_perijinan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_sabhara`
--
ALTER TABLE `tbl_sabhara`
  MODIFY `id_sabhara` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_sim`
--
ALTER TABLE `tbl_sim`
  MODIFY `id_sim` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_skck`
--
ALTER TABLE `tbl_skck`
  MODIFY `id_skck` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `tbl_stnk`
--
ALTER TABLE `tbl_stnk`
  MODIFY `id_stnk` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
