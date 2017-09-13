-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2017 at 06:51 PM
-- Server version: 10.0.31-MariaDB-0ubuntu0.16.04.2
-- PHP Version: 7.0.23-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lalalala`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`kode_dosen`),
  ADD UNIQUE KEY `username` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
