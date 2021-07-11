-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2021 at 04:22 
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
  `ktm` varchar(50) NOT NULL,
  `enk` varchar(20) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mhs`, `nim_mhs`, `nama_mhs`, `organisasi`, `jurusan`, `email`, `password`, `no_hp`, `alamat`, `tgl`, `ktm`, `enk`, `status`) VALUES
(12, '123', '123', '123', '', '1231@a', '202cb962ac59075b964b07152d234b70', '123', '', '', '', '8f20ee88e0', 'aktif'),
(16, '12345', 'snowo meng', 'kucing item', 'PENDIDIKAN NON FORMAL', 'snowo@snowo', 'd41d8cd98f00b204e9800998ecf8427e', '123', '1', '2021-03-27', 'ktm-12345.pdf', '0d48924c32', 'aktif'),
(19, '12999999', 'snowo zepi', 'kucing item', 'PENDIDIKAN NON FORMAL', 'snowo@snowo', 'd41d8cd98f00b204e9800998ecf8427e', '123', '1', '2021-03-27', 'ktm-12345.pdf', '0d48924c32', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `nim_mhs` varchar(20) NOT NULL,
  `kode_ruangan` varchar(20) NOT NULL,
  `tgl_pengajuan` varchar(20) NOT NULL,
  `tgl_peminjaman` varchar(20) NOT NULL,
  `wkt_peminjaman` varchar(20) NOT NULL,
  `tgl_kembali` varchar(20) NOT NULL,
  `wkt_kembali` varchar(20) NOT NULL,
  `surat_izin` varchar(100) NOT NULL,
  `kritik` text NOT NULL,
  `saran` text NOT NULL,
  `status_peminjaman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruangan`
--

CREATE TABLE `tb_ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(100) NOT NULL,
  `kode_ruangan` varchar(20) NOT NULL,
  `des_ruangan` text NOT NULL,
  `kondisi` varchar(30) NOT NULL,
  `photo_ruangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ruangan`
--

INSERT INTO `tb_ruangan` (`id_ruangan`, `nama_ruangan`, `kode_ruangan`, `des_ruangan`, `kondisi`, `photo_ruangan`) VALUES
(1, 'aula', '12345', '', 'baik', 'ruangan-12345-photo1.png'),
(13, 'test', 'test', '', 'baik', ''),
(15, 'a', 'a', '', 'baik', 'ruangan-a-photo1.png'),
(18, '2', '2', '2', 'tidak baik', 'ruangan-2.png');

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'aihooCi2');

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
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

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
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
