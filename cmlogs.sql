-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Mar 2018 pada 14.17
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
-- Struktur dari tabel `cmlogs`
--

CREATE TABLE `cmlogs` (
  `logid` int(100) NOT NULL,
  `tipe_log` varchar(50) NOT NULL,
  `time` datetime NOT NULL,
  `other_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cmlogs`
--

INSERT INTO `cmlogs` (`logid`, `tipe_log`, `time`, `other_id`) VALUES
(1, 'cmpost', '2018-03-07 12:12:28', 1),
(2, 'cmpost', '2018-03-07 12:12:28', 1),
(3, 'cmpost', '2018-03-07 12:13:41', 1),
(4, 'cmpost', '2018-03-07 12:15:08', 2),
(5, 'cmpost', '2018-03-07 12:15:17', 2),
(6, 'cmpost', '2018-03-07 13:22:46', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmlogs`
--
ALTER TABLE `cmlogs`
  ADD PRIMARY KEY (`logid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmlogs`
--
ALTER TABLE `cmlogs`
  MODIFY `logid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
