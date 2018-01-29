-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jan 2018 pada 07.32
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
-- Struktur dari tabel `cmdesign`
--

CREATE TABLE `cmdesign` (
  `dsid` int(11) NOT NULL,
  `dsdir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cmjkegiatan`
--

CREATE TABLE `cmjkegiatan` (
  `jkid` int(11) NOT NULL,
  `jknama` varchar(50) NOT NULL,
  `jkpihak` varchar(100) DEFAULT NULL,
  `jkwaktu` datetime DEFAULT NULL,
  `tagid` int(11) DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cmjkegiatan`
--

INSERT INTO `cmjkegiatan` (`jkid`, `jknama`, `jkpihak`, `jkwaktu`, `tagid`) VALUES
(5, 'nnn2', 'sss', '0000-00-00 00:00:00', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cmkmasjid`
--

CREATE TABLE `cmkmasjid` (
  `kmid` int(11) NOT NULL,
  `kmwaktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kmketerangan` varchar(255) NOT NULL,
  `kmpengeluaran` int(11) NOT NULL,
  `kmsaldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cmmedia`
--

CREATE TABLE `cmmedia` (
  `mediaid` int(11) NOT NULL,
  `mmeta` varchar(64) NOT NULL,
  `mdir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cmmedia`
--

INSERT INTO `cmmedia` (`mediaid`, `mmeta`, `mdir`) VALUES
(1, 'xxdefaultxx', '/'),
(4, 'meta', '10.jpg');

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
  `mediaid` int(11) DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cmpost`
--

INSERT INTO `cmpost` (`postid`, `psbuat`, `psubah`, `psjudul`, `tagid`, `psustadz`, `pstext`, `mediaid`) VALUES
(1, '2018-01-16 00:00:00', '2018-01-23 11:03:04', 'aa', 1, 'bb', 'cc', 4),
(2, '2018-01-16 00:00:00', '2018-01-23 11:03:14', 'judul post 2', 1, NULL, 'text post 2', 4),
(3, '2018-01-16 00:00:00', '2018-01-23 11:03:21', 'judul post 3', 1, 'ust 3', 'text post 3', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cmprofilm`
--

CREATE TABLE `cmprofilm` (
  `pnama` varchar(100) NOT NULL,
  `pdeskripsi` text,
  `psejarah` text,
  `pvisimisi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cmprofilm`
--

INSERT INTO `cmprofilm` (`pnama`, `pdeskripsi`, `psejarah`, `pvisimisi`) VALUES
('Masjid Taqwa', 'jl diponegoro batu malang', 'sejak 1900', 'sukses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cmrdonasi`
--

CREATE TABLE `cmrdonasi` (
  `rdid` int(11) NOT NULL,
  `rdwaktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rdjumlah` int(11) NOT NULL,
  `rddonatur` varchar(100) NOT NULL DEFAULT 'Hamba Allah',
  `rdtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cmsconfig`
--

CREATE TABLE `cmsconfig` (
  `dsid` int(11) NOT NULL,
  `cmdeploy` datetime NOT NULL,
  `cmpengunjung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cmtag`
--

CREATE TABLE `cmtag` (
  `tagid` int(11) NOT NULL,
  `tag` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cmtag`
--

INSERT INTO `cmtag` (`tagid`, `tag`) VALUES
(1, ' notag'),
(2, 'notag');

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
  `mediaid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cmtakmirm`
--

INSERT INTO `cmtakmirm` (`tkid`, `tknama`, `tknotelp`, `tkjabatan`, `tkmasajabatan`, `mediaid`) VALUES
(1, 'adib', '083', 'ketua', '2017-skrg', 1);

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
  `usertelp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cmusers`
--

INSERT INTO `cmusers` (`userid`, `username`, `userpass`, `userfullname`, `useremail`, `usertgldaftar`, `displayname`, `mediaid`, `useralamat`, `usertelp`) VALUES
(1, 'admin', 'pass', 'admiiinlengkap', 'admin@admin', '2018-01-10 00:00:00', 'admin', 1, 'web', '088');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cmustadz`
--

CREATE TABLE `cmustadz` (
  `usid` int(11) NOT NULL,
  `usnama` varchar(100) NOT NULL,
  `usnotelp` varchar(20) NOT NULL,
  `usalamat` varchar(255) NOT NULL,
  `mediaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmdesign`
--
ALTER TABLE `cmdesign`
  ADD PRIMARY KEY (`dsid`);

--
-- Indexes for table `cmjkegiatan`
--
ALTER TABLE `cmjkegiatan`
  ADD PRIMARY KEY (`jkid`),
  ADD KEY `tagid` (`tagid`);

--
-- Indexes for table `cmkmasjid`
--
ALTER TABLE `cmkmasjid`
  ADD PRIMARY KEY (`kmid`);

--
-- Indexes for table `cmmedia`
--
ALTER TABLE `cmmedia`
  ADD PRIMARY KEY (`mediaid`);

--
-- Indexes for table `cmpost`
--
ALTER TABLE `cmpost`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `tagid` (`tagid`),
  ADD KEY `mediaid` (`mediaid`);

--
-- Indexes for table `cmrdonasi`
--
ALTER TABLE `cmrdonasi`
  ADD PRIMARY KEY (`rdid`);

--
-- Indexes for table `cmsconfig`
--
ALTER TABLE `cmsconfig`
  ADD PRIMARY KEY (`dsid`);

--
-- Indexes for table `cmtag`
--
ALTER TABLE `cmtag`
  ADD PRIMARY KEY (`tagid`);

--
-- Indexes for table `cmtakmirm`
--
ALTER TABLE `cmtakmirm`
  ADD PRIMARY KEY (`tkid`),
  ADD KEY `mediaid` (`mediaid`);

--
-- Indexes for table `cmusers`
--
ALTER TABLE `cmusers`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `mediaid` (`mediaid`);

--
-- Indexes for table `cmustadz`
--
ALTER TABLE `cmustadz`
  ADD PRIMARY KEY (`usid`),
  ADD KEY `mediaid` (`mediaid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmdesign`
--
ALTER TABLE `cmdesign`
  MODIFY `dsid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cmjkegiatan`
--
ALTER TABLE `cmjkegiatan`
  MODIFY `jkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cmkmasjid`
--
ALTER TABLE `cmkmasjid`
  MODIFY `kmid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cmmedia`
--
ALTER TABLE `cmmedia`
  MODIFY `mediaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cmpost`
--
ALTER TABLE `cmpost`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cmrdonasi`
--
ALTER TABLE `cmrdonasi`
  MODIFY `rdid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cmsconfig`
--
ALTER TABLE `cmsconfig`
  MODIFY `dsid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cmtag`
--
ALTER TABLE `cmtag`
  MODIFY `tagid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cmtakmirm`
--
ALTER TABLE `cmtakmirm`
  MODIFY `tkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cmusers`
--
ALTER TABLE `cmusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cmustadz`
--
ALTER TABLE `cmustadz`
  MODIFY `usid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cmjkegiatan`
--
ALTER TABLE `cmjkegiatan`
  ADD CONSTRAINT `cmjkegiatan_ibfk_1` FOREIGN KEY (`tagid`) REFERENCES `cmtag` (`tagid`);

--
-- Ketidakleluasaan untuk tabel `cmpost`
--
ALTER TABLE `cmpost`
  ADD CONSTRAINT `cmpost_ibfk_1` FOREIGN KEY (`tagid`) REFERENCES `cmtag` (`tagid`),
  ADD CONSTRAINT `cmpost_ibfk_2` FOREIGN KEY (`mediaid`) REFERENCES `cmmedia` (`mediaid`);

--
-- Ketidakleluasaan untuk tabel `cmtakmirm`
--
ALTER TABLE `cmtakmirm`
  ADD CONSTRAINT `cmtakmirm_ibfk_1` FOREIGN KEY (`mediaid`) REFERENCES `cmmedia` (`mediaid`);

--
-- Ketidakleluasaan untuk tabel `cmusers`
--
ALTER TABLE `cmusers`
  ADD CONSTRAINT `cmusers_ibfk_1` FOREIGN KEY (`mediaid`) REFERENCES `cmmedia` (`mediaid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
