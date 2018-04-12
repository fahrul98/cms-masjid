-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2018 at 02:41 PM
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
-- Table structure for table `cmlogs`
--

CREATE TABLE `cmlogs` (
  `logid` int(100) NOT NULL,
  `tipe_log` varchar(50) NOT NULL,
  `time` datetime NOT NULL,
  `other_id` int(100) NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `cmpost`
--

CREATE TABLE `cmpost` (
  `postid` int(11) NOT NULL,
  `psbuat` datetime NOT NULL,
  `psubah` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `psjudul` varchar(100) NOT NULL,
  `tagid` int(11) NOT NULL DEFAULT '1',
  `psustadz` varchar(50) DEFAULT NULL,
  `pstext` longtext NOT NULL,
  `mediadir` varchar(100) DEFAULT '2',
  `vcount` int(10) NOT NULL,
  `pspublic` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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


-- --------------------------------------------------------

--
-- Table structure for table `cmrdonasi`
--

CREATE TABLE `cmrdonasi` (
  `rdid` int(11) NOT NULL,
  `rdwaktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rdjumlah` int(11) NOT NULL,
  `rddonatur` varchar(100) DEFAULT 'Hamba Allah',
  `rdtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cmsconfig`
--

CREATE TABLE `cmsconfig` (
  `dsid` int(11) NOT NULL,
  `cmdeploy` datetime DEFAULT NULL,
  `cmpengunjung` int(11) DEFAULT '0',
  `cmfoot1` varchar(255) DEFAULT '-',
  `cmfoot2` varchar(255) DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `cmsconfig`
--

INSERT INTO `cmsconfig` (`dsid`, `cmdeploy`, `cmpengunjung`, `cmfoot1`, `cmfoot2`) VALUES
(1, now(), 0, '-', '-');


-- --------------------------------------------------------

--
-- Table structure for table `cmtag`
--

CREATE TABLE `cmtag` (
  `tagid` int(11) NOT NULL,
  `tag` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


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
  `mediadir` varchar(100) DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cmtokens`
--

CREATE TABLE `cmtokens` (
  `tokenid` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `userid` int(10) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `usertelp` varchar(20) DEFAULT NULL,
  `mediadir` varchar(100) DEFAULT 'default.png',
  `remember` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cmustadz`
--

CREATE TABLE `cmustadz` (
  `usid` int(11) NOT NULL,
  `usnama` varchar(100) NOT NULL,
  `usnotelp` varchar(20) NOT NULL,
  `usalamat` varchar(255) NOT NULL,
  `mediadir` varchar(100) DEFAULT 'default.png'
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
-- Indexes for table `cmlogs`
--
ALTER TABLE `cmlogs`
  ADD PRIMARY KEY (`logid`);

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
  ADD KEY `mediaid` (`mediadir`);

--
-- Indexes for table `cmprofilm`
--
ALTER TABLE `cmprofilm`
  ADD PRIMARY KEY (`pnama`);

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
  ADD PRIMARY KEY (`tkid`);

--
-- Indexes for table `cmtokens`
--
ALTER TABLE `cmtokens`
  ADD PRIMARY KEY (`tokenid`);

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
  ADD PRIMARY KEY (`usid`);

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
  MODIFY `jkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cmkmasjid`
--
ALTER TABLE `cmkmasjid`
  MODIFY `kmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cmlogs`
--
ALTER TABLE `cmlogs`
  MODIFY `logid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `cmmedia`
--
ALTER TABLE `cmmedia`
  MODIFY `mediaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cmpost`
--
ALTER TABLE `cmpost`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cmrdonasi`
--
ALTER TABLE `cmrdonasi`
  MODIFY `rdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cmsconfig`
--
ALTER TABLE `cmsconfig`
  MODIFY `dsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cmtag`
--
ALTER TABLE `cmtag`
  MODIFY `tagid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cmtakmirm`
--
ALTER TABLE `cmtakmirm`
  MODIFY `tkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cmtokens`
--
ALTER TABLE `cmtokens`
  MODIFY `tokenid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cmusers`
--
ALTER TABLE `cmusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cmustadz`
--
ALTER TABLE `cmustadz`
  MODIFY `usid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  ADD CONSTRAINT `cmpost_ibfk_1` FOREIGN KEY (`tagid`) REFERENCES `cmtag` (`tagid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
