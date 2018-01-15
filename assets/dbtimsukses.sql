-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2017 at 08:29 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timsukses`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `nim` varchar(50) DEFAULT NULL,
  `id_matakuliah` varchar(50) DEFAULT NULL,
  `pertemuan` varchar(50) DEFAULT NULL,
  `kehadiran` varchar(50) DEFAULT NULL,
  `keaktifan` varchar(50) DEFAULT NULL,
  `ketepatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`nim`, `id_matakuliah`, `pertemuan`, `kehadiran`, `keaktifan`, `ketepatan`) VALUES
('2001', '1', '5', '1', '0', '0'),
('2002', '1', '5', '0', '0', '0'),
('2001', '1', '4', '0', '0', '0'),
('2002', '1', '4', '0', '0', '0'),
('2001', '2', '1', '1', '1', '1'),
('2002', '2', '1', '1', '1', '1'),
('2001', '1', '1', '1', '1', '1'),
('2002', '1', '1', '1', '1', '1'),
('2001', '1', '2', '1', '0', '0'),
('2002', '1', '2', '1', '0', '0'),
('2001', '1', '3', '1', '1', '0'),
('2002', '1', '3', '1', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `nama`, `password`) VALUES
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buktipembayaran`
--

CREATE TABLE `tb_buktipembayaran` (
  `nim` varchar(50) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buktipembayaran`
--

INSERT INTO `tb_buktipembayaran` (`nim`, `picture`) VALUES
('2001', 'user1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`nik`, `nama`, `password`, `fakultas`, `prodi`) VALUES
('1001', 'Hendra', '1001', 'fasilkom', 'sistem informasi'),
('1002', 'Nurani', '1002', 'fasilkom', 'sistem informasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama`, `password`, `fakultas`, `prodi`) VALUES
('2001', 'raka', '2001', 'fasilkom', 'sistem informasi'),
('2002', 'ricky', '2002', 'fasilkom', 'sistem informasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matakuliah`
--

CREATE TABLE `tb_matakuliah` (
  `id_matakuliah` int(11) NOT NULL,
  `hari` varchar(50) NOT NULL DEFAULT '0',
  `waktu` varchar(50) DEFAULT NULL,
  `ruangan` varchar(50) NOT NULL DEFAULT '0',
  `nama_matakuliah` varchar(50) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nim` varchar(50) DEFAULT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_matakuliah`
--

INSERT INTO `tb_matakuliah` (`id_matakuliah`, `hari`, `waktu`, `ruangan`, `nama_matakuliah`, `nik`, `nim`, `fakultas`, `prodi`) VALUES
(1, 'Senin', '08:00', 'd205', 'pemrograman berorientasi objek', '1001', '2001', 'fasilkom', 'sistem informasi'),
(2, 'Senin', '10:00', 'd207', 'web enterprise', '1001', '2001', 'fasilkom', 'sistem informasi'),
(3, 'Selasa', '13:00', 'd208', 'rekayasa perangkat lunak', '1001', '2001', 'fasilkom', 'sistem informasi'),
(1, 'Senin', '08:00', 'd205', 'pemrograman berorientasi objek', '1001', '2002', 'fasilkom', 'sistem informasi'),
(3, 'Selasa', '13:00', 'd208', 'rekayasa perangkat lunak', '1001', '2002', 'fasilkom', 'sistem informasi'),
(2, 'Senin', '10:00', 'd207', 'web enterprise', '1001', '2002', 'fasilkom', 'sistem informasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
