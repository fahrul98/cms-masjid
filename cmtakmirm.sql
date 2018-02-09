-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Feb 2018 pada 02.50
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dump`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cmtakmirm`
--

CREATE TABLE `cmtakmirm` (
  `tkid` int(11) NOT NULL,
  `tknama` varchar(100) NOT NULL,
  `tknotelp` varchar(20) DEFAULT NULL,
  `tkjabatan` varchar(30) DEFAULT NULL,
  `tkmasajabatan` varchar(10) DEFAULT NULL,
  `mediadir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cmtakmirm`
--

INSERT INTO `cmtakmirm` (`tkid`, `tknama`, `tknotelp`, `tkjabatan`, `tkmasajabatan`, `mediadir`) VALUES
(9, 'are are', '123', 'wtf kabeh duh kah', 'sfare', '01.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmtakmirm`
--
ALTER TABLE `cmtakmirm`
  ADD PRIMARY KEY (`tkid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmtakmirm`
--
ALTER TABLE `cmtakmirm`
  MODIFY `tkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
