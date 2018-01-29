-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jan 2018 pada 08.38
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
-- Struktur dari tabel `cmpost`
--

CREATE TABLE `cmpost` (
  `postid` int(11) NOT NULL,
  `psbuat` datetime NOT NULL,
  `psubah` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `psjudul` varchar(50) NOT NULL,
  `tagid` int(11) NOT NULL DEFAULT '1',
  `psustadz` varchar(50) DEFAULT NULL,
  `pstext` text NOT NULL,
  `mediaid` int(11) DEFAULT '2',
  `vcount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cmpost`
--

INSERT INTO `cmpost` (`postid`, `psbuat`, `psubah`, `psjudul`, `tagid`, `psustadz`, `pstext`, `mediaid`, `vcount`) VALUES
(1, '2018-01-16 00:00:00', '2018-01-23 11:03:04', 'aa', 1, 'bb', 'cc', 4, 0),
(2, '2018-01-16 00:00:00', '2018-01-29 07:34:05', 'judul post 2', 1, NULL, 'text post 2', 4, 7),
(3, '2018-01-16 00:00:00', '2018-01-23 11:03:21', 'judul post 3', 1, 'ust 3', 'text post 3', 4, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmpost`
--
ALTER TABLE `cmpost`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `tagid` (`tagid`),
  ADD KEY `mediaid` (`mediaid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmpost`
--
ALTER TABLE `cmpost`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cmpost`
--
ALTER TABLE `cmpost`
  ADD CONSTRAINT `cmpost_ibfk_1` FOREIGN KEY (`tagid`) REFERENCES `cmtag` (`tagid`),
  ADD CONSTRAINT `cmpost_ibfk_2` FOREIGN KEY (`mediaid`) REFERENCES `cmmedia` (`mediaid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
