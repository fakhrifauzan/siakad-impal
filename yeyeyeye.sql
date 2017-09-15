-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2017 at 04:21 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yeyeyeye`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembayaran`
--

CREATE TABLE `bukti_pembayaran` (
  `id` int(11) NOT NULL,
  `id_registrasi` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `bank` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pemilik_norek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti_pembayaran`
--

INSERT INTO `bukti_pembayaran` (`id`, `id_registrasi`, `tanggal`, `bank`, `jumlah`, `pemilik_norek`) VALUES
(2, 3, '2017-09-30', 'Mandiri', 2147483647, 'sdasdadsad');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `config` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`config`, `value`) VALUES
('status_reg', 'Aktif'),
('tahun_ajar', '1516/2');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `kode_dosen` varchar(10) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`kode_dosen`, `nama_dosen`, `fakultas`, `status`, `username`, `password`) VALUES
('AAA', 'Alan Ardi A', 'Informatika', 'Tetap', 'aaa', 'aaa'),
('ABC', 'Adi budi Cantika', 'Manajemen', 'Tetap', 'abc', 'abc'),
('ARK', 'Artur Rudi', 'Manjemen', 'Tetap', 'ark', 'ark'),
('REZ', 'Reza Aditama', 'Industri Kreatif', 'Tetap', 'rez', 'rez'),
('ZZZ', 'Zulaiha', 'Informatika', 'Tetap', 'zzz', 'zzz');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `kode_dosen` varchar(10) NOT NULL,
  `kode_matkul` varchar(20) NOT NULL,
  `kode_kelas` varchar(20) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` varchar(30) NOT NULL,
  `ruangan` varchar(40) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `kode_dosen`, `kode_matkul`, `kode_kelas`, `hari`, `jam`, `ruangan`, `semester`) VALUES
(2, 'AAA', 'PBO', 'IF-39-10', 'Selasa', '09.30 - 12.30', 'E302', '1516/2'),
(3, 'REZ', 'PBO', 'IF-39-10', 'Selasa', '12.30 - 15.30', 'B105', '1516/2'),
(4, 'AAA', 'DAP', 'DS-39-04', 'Senin', '09.30 - 12.30', 'E301', '1617/2'),
(5, 'ABC', 'DAP', 'IF-39-10', 'Senin', '06.30 - 09.30', 'E302', '1516/2'),
(6, 'ZZZ', 'PBO', 'IF-39-10', 'Senin', '15.30 - 18.30', 'E301', '1516/2'),
(7, 'REZ', 'DAP', 'IF-39-10', 'Jumat', '09.30 - 12.30', 'A307', '1516/2');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(10) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `doswal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `fakultas`, `prodi`, `doswal`) VALUES
('DS-39-04', 'Industri Kreatif', 'S1 Desain Komunikasi Visual', 'REZ'),
('IF-39-10', 'Informatika', 'S1 Teknik Informatika', 'AAA'),
('MB-40-09', 'Manajemen', 'S1 Manajemen', 'ZZZ');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tahun_masuk` varchar(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `fakultas`, `prodi`, `kelas`, `tahun_masuk`, `username`, `password`) VALUES
('111', 'Adam Budi', 'Informatika', 'S1 Teknik Informatika', 'IF-39-10', '2015', '111', '111'),
('222', 'Rahayu', 'Informatika', 'S1 Teknik Informatika', 'MB-40-09', '2014', '222', '222');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `kode_matkul` varchar(10) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `sks` int(2) NOT NULL,
  `fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`kode_matkul`, `nama_matkul`, `sks`, `fakultas`) VALUES
('DAP', 'Dasar Algoritma dan Pemograman', 3, 'Informatika'),
('MPB', 'Manajemen Pemasaran Bisnis', 2, 'Manajemen'),
('NIR', 'Nirmana', 4, 'Industri Kreatif'),
('PBO', 'Pemograman Berorientasi Objek', 3, 'Informatika'),
('STD', 'Struktur Data', 3, 'Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `paycheck`
--

CREATE TABLE `paycheck` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paycheck`
--

INSERT INTO `paycheck` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Payment Checker', 'paycheck', 'paycheck');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id_registrasi` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tagihan` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id_registrasi`, `nim`, `semester`, `tagihan`, `status`) VALUES
(1, '111', '1516/1', 4500000, 'Lunas'),
(3, '111', '1516/2', 5000000, 'Lunas'),
(6, '222', '1617/2', 8500000, 'Lunas'),
(7, '111', '1617/2', 80000000, 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `reg_matkul`
--

CREATE TABLE `reg_matkul` (
  `id_reg_matkul` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_matkul`
--

INSERT INTO `reg_matkul` (`id_reg_matkul`, `nim`, `semester`, `status`) VALUES
(4, '111', '1516/2', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `reg_matkul_detail`
--

CREATE TABLE `reg_matkul_detail` (
  `id` int(11) NOT NULL,
  `id_reg_matkul` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_matkul_detail`
--

INSERT INTO `reg_matkul_detail` (`id`, `id_reg_matkul`, `id_jadwal`) VALUES
(38, 4, 5),
(39, 4, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`config`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`kode_dosen`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `paycheck`
--
ALTER TABLE `paycheck`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_registrasi`);

--
-- Indexes for table `reg_matkul`
--
ALTER TABLE `reg_matkul`
  ADD PRIMARY KEY (`id_reg_matkul`);

--
-- Indexes for table `reg_matkul_detail`
--
ALTER TABLE `reg_matkul_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `paycheck`
--
ALTER TABLE `paycheck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `reg_matkul`
--
ALTER TABLE `reg_matkul`
  MODIFY `id_reg_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `reg_matkul_detail`
--
ALTER TABLE `reg_matkul_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
