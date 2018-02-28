-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Feb 2018 pada 13.25
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
-- Struktur dari tabel `cmusers`
--

CREATE TABLE `cmusers` (
  `userid` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `userpass` varchar(64) NOT NULL,
  `userfullname` varchar(50) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `usertgldaftar` datetime NOT NULL,
  `displayname` varchar(250) NOT NULL DEFAULT 'admin',
  `mediaid` int(11) NOT NULL,
  `useralamat` varchar(255) DEFAULT NULL,
  `usertelp` varchar(20) DEFAULT NULL,
  `mediadir` varchar(100) NOT NULL,
  `remember` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cmusers`
--

INSERT INTO `cmusers` (`userid`, `username`, `userpass`, `userfullname`, `useremail`, `usertgldaftar`, `displayname`, `mediaid`, `useralamat`, `usertelp`, `mediadir`, `remember`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admiiinlengkap', 'breakerseal9@gmail.com', '2018-01-10 00:00:00', 'admin', 1, 'web', '088', '10.jpg', 'ff022b398661c523ecccb0efc0ddd8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmusers`
--
ALTER TABLE `cmusers`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `mediaid` (`mediaid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmusers`
--
ALTER TABLE `cmusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cmusers`
--
ALTER TABLE `cmusers`
  ADD CONSTRAINT `cmusers_ibfk_1` FOREIGN KEY (`mediaid`) REFERENCES `cmmedia` (`mediaid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
