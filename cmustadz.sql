-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Feb 2018 pada 02.49
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
-- Struktur dari tabel `cmustadz`
--

CREATE TABLE `cmustadz` (
  `usid` int(11) NOT NULL,
  `usnama` varchar(100) NOT NULL,
  `usnotelp` varchar(20) NOT NULL,
  `usalamat` varchar(255) NOT NULL,
  `mediadir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cmustadz`
--

INSERT INTO `cmustadz` (`usid`, `usnama`, `usnotelp`, `usalamat`, `mediadir`) VALUES
(3, 'asd', 'qdss kah', 'saf', '12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmustadz`
--
ALTER TABLE `cmustadz`
  ADD PRIMARY KEY (`usid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmustadz`
--
ALTER TABLE `cmustadz`
  MODIFY `usid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
