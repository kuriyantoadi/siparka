-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2021 at 01:10 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siparka`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(2, 'PENDIDIKAN NON FORMAL'),
(3, 'PENDIDIKAN GURU PAUD'),
(4, 'PENDIDIKAN ILMU PENGETAHUAN ALAM'),
(5, 'PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN'),
(6, 'PENDIDIKAN SOSIOLOGI'),
(7, 'PENDIDIKAN BAHASA INDONESIA '),
(8, 'PENDIDIKAN MATEMATIKA'),
(9, 'PENDIDIKAN SEJARAH '),
(10, 'PENDIDIKAN VOKASIONAL TEKNIK ELEKTRO '),
(11, 'PROGRAM PROFESI GURU '),
(12, 'PENDIDIKAN BAHASA INGGRIS '),
(13, 'PENDIDIKAN GURU SEKOLAH DASAR '),
(14, 'PENDIDIKAN FISIKA '),
(15, 'PENDIDIKAN KHUSUS '),
(16, 'PENDIDIKAN SENI PERTUNJUKAN '),
(17, 'PENDIDIKAN VOKASIONAL TEKNIK MESIN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nim_mhs` varchar(20) NOT NULL,
  `nama_mhs` varchar(75) NOT NULL,
  `organisasi` varchar(100) NOT NULL,
  `jurusan` varchar(70) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(70) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `enk` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mhs`, `nim_mhs`, `nama_mhs`, `organisasi`, `jurusan`, `email`, `password`, `no_hp`, `alamat`, `tgl`, `enk`, `status`) VALUES
(1, 'q', 'q', 'q', '', 'q@A', '1', '', '', '', 'a66316e53c', ''),
(9, '123', 'admin', 'admin', '', 'admin@admin', '21232f297a57a5a743894a0e4a801fc3', '123', 'serang', '23-3-2021', '62ac59075b', ''),
(10, 'admin', 'admin', 'admin', '', 'admin@admin', '21232f297a57a5a743894a0e4a801fc3', '', '', '', '297a57a5a7', 'aktif'),
(11, '1231111', 'admin', 'admin', '', 'admin@admin', '08', 'c4ca4238a0b923820dcc', '', '', '3a59fd27ca', ''),
(12, '123111', '123', '123', '', '1231@a', '202cb962ac59075b964b07152d234b70', '123', '', '', '8f20ee88e0', ''),
(13, 'admin123', 'admin', 'admin', '', 'admin@admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', '2021-03-23', '3a7bbd7325', ''),
(15, 'snowo', 'snowo', 'snowo', '', 'snowo@1', 'ec2626993ef2232a8a825dc440748afa', 'snowo', 'snowo', '2021-03-23', '993ef2232a', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
