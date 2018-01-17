-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2018 at 05:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsmasjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmdesign`
--

CREATE TABLE `cmdesign` (
  `dsid` int(11) NOT NULL,
  `dsdir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cmjkegiatan`
--

CREATE TABLE `cmjkegiatan` (
  `jkid` int(11) NOT NULL,
  `jknama` varchar(50) NOT NULL,
  `jkpihak` varchar(100) DEFAULT NULL,
  `jkwaktu` datetime DEFAULT NULL,
  `tagid` int(11) DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmjkegiatan`
--

INSERT INTO `cmjkegiatan` (`jkid`, `jknama`, `jkpihak`, `jkwaktu`, `tagid`) VALUES
(5, 'nnn2', 'sss', '0000-00-00 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cmkmasjid`
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
-- Table structure for table `cmmedia`
--

CREATE TABLE `cmmedia` (
  `mediaid` int(11) NOT NULL,
  `mmeta` varchar(64) NOT NULL,
  `mdir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmmedia`
--

INSERT INTO `cmmedia` (`mediaid`, `mmeta`, `mdir`) VALUES
(1, 'xxdefaultxx', '/'),
(2, 'xxdefault2xx', '/');

-- --------------------------------------------------------

--
-- Table structure for table `cmpost`
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
-- Dumping data for table `cmpost`
--

INSERT INTO `cmpost` (`postid`, `psbuat`, `psubah`, `psjudul`, `tagid`, `psustadz`, `pstext`, `mediaid`) VALUES
(1, '2018-01-16 00:00:00', '2018-01-16 14:37:54', 'aa', 1, 'bb', 'cc', 1),
(2, '2018-01-16 00:00:00', '2018-01-16 14:14:12', 'judul post 2', 1, NULL, 'text post 2', 1),
(3, '2018-01-16 00:00:00', '2018-01-16 14:14:12', 'judul post 3', 1, 'ust 3', 'text post 3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cmprofilm`
--

CREATE TABLE `cmprofilm` (
  `pnama` varchar(100) NOT NULL,
  `pdeskripsi` text,
  `psejarah` text,
  `pvisimisi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmprofilm`
--

INSERT INTO `cmprofilm` (`pnama`, `pdeskripsi`, `psejarah`, `pvisimisi`) VALUES
('Masjid Taqwa', 'jl diponegoro batu malang', 'sejak 1900', 'sukses');

-- --------------------------------------------------------

--
-- Table structure for table `cmrdonasi`
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
-- Table structure for table `cmsconfig`
--

CREATE TABLE `cmsconfig` (
  `dsid` int(11) NOT NULL,
  `cmdeploy` datetime NOT NULL,
  `cmpengunjung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cmtag`
--

CREATE TABLE `cmtag` (
  `tagid` int(11) NOT NULL,
  `tag` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmtag`
--

INSERT INTO `cmtag` (`tagid`, `tag`) VALUES
(1, ' notag'),
(2, 'notag');

-- --------------------------------------------------------

--
-- Table structure for table `cmtakmirm`
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
-- Dumping data for table `cmtakmirm`
--

INSERT INTO `cmtakmirm` (`tkid`, `tknama`, `tknotelp`, `tkjabatan`, `tkmasajabatan`, `mediaid`) VALUES
(1, 'adib', '083', 'ketua', '2017-skrg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cmusers`
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
-- Dumping data for table `cmusers`
--

INSERT INTO `cmusers` (`userid`, `username`, `userpass`, `userfullname`, `useremail`, `usertgldaftar`, `displayname`, `mediaid`, `useralamat`, `usertelp`) VALUES
(1, 'admin', 'passsecret', 'admiiinlengkap', 'admin@admin', '2018-01-10 00:00:00', 'admin', 1, 'web', '088');

-- --------------------------------------------------------

--
-- Table structure for table `cmustadz`
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
  MODIFY `mediaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
-- Constraints for dumped tables
--

--
-- Constraints for table `cmjkegiatan`
--
ALTER TABLE `cmjkegiatan`
  ADD CONSTRAINT `cmjkegiatan_ibfk_1` FOREIGN KEY (`tagid`) REFERENCES `cmtag` (`tagid`);

--
-- Constraints for table `cmpost`
--
ALTER TABLE `cmpost`
  ADD CONSTRAINT `cmpost_ibfk_1` FOREIGN KEY (`tagid`) REFERENCES `cmtag` (`tagid`),
  ADD CONSTRAINT `cmpost_ibfk_2` FOREIGN KEY (`mediaid`) REFERENCES `cmmedia` (`mediaid`);

--
-- Constraints for table `cmtakmirm`
--
ALTER TABLE `cmtakmirm`
  ADD CONSTRAINT `cmtakmirm_ibfk_1` FOREIGN KEY (`mediaid`) REFERENCES `cmmedia` (`mediaid`);

--
-- Constraints for table `cmusers`
--
ALTER TABLE `cmusers`
  ADD CONSTRAINT `cmusers_ibfk_1` FOREIGN KEY (`mediaid`) REFERENCES `cmmedia` (`mediaid`);

--
-- Constraints for table `cmustadz`
--
ALTER TABLE `cmustadz`
  ADD CONSTRAINT `cmustadz_ibfk_1` FOREIGN KEY (`mediaid`) REFERENCES `cmmedia` (`mediaid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
