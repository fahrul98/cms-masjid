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

--
-- Dumping data for table `cmjkegiatan`
--

INSERT INTO `cmjkegiatan` (`jkid`, `jknama`, `jkpihak`, `jkwaktu`, `tagid`) VALUES
(11, 'Mengaji', 'Ustadz Hasan', '2018-03-02 13:03:25', 1),
(12, 'PHBI : Sholat Idul Fitri', 'Panitia Masjid', '2018-05-31 10:05:32', 1),
(13, 'Pengajian Akbar', 'Ustadz Shomad', '2018-03-31 08:03:04', 1),
(14, 'Pengajian Mingguan', 'Ust. Arif Hidayat', '2018-03-13 18:03:36', 1),
(15, 'Gerakan Sholat Shubuh Berjamaah', 'Imam Ust.Zuhdi', '2018-03-10 04:03:13', 2);

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

--
-- Dumping data for table `cmkmasjid`
--

INSERT INTO `cmkmasjid` (`kmid`, `kmwaktu`, `kmketerangan`, `kmpengeluaran`, `kmsaldo`) VALUES
(2, '2018-03-04 08:03:28', 'BEA', 200000, 1300000);

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

--
-- Dumping data for table `cmlogs`
--

INSERT INTO `cmlogs` (`logid`, `tipe_log`, `time`, `other_id`) VALUES
(1, 'cmpost', '2018-03-07 12:12:28', 1),
(2, 'cmpost', '2018-03-07 12:12:28', 1),
(3, 'cmpost', '2018-03-07 12:13:41', 1),
(4, 'cmpost', '2018-03-07 12:15:08', 2),
(5, 'cmpost', '2018-03-07 12:15:17', 2),
(6, 'cmpost', '2018-03-07 13:22:46', 9),
(7, 'cmpost', '2018-03-08 13:08:45', 15),
(8, 'cmpost', '2018-03-08 13:08:48', 15),
(9, 'cmpost', '2018-03-08 13:21:07', 15),
(10, 'cmpost', '2018-03-08 13:35:22', 1),
(11, 'cmpost', '2018-03-08 13:35:52', 1),
(12, 'cmpost', '2018-03-08 13:35:53', 1),
(13, 'cmpost', '2018-03-08 13:37:44', 13),
(14, 'cmpost', '2018-03-08 14:06:09', 14),
(15, 'cmpost', '2018-03-08 14:06:12', 14),
(16, 'cmpost', '2018-03-08 14:07:48', 15),
(17, 'cmpost', '2018-03-08 14:07:51', 15),
(18, 'cmpost', '2018-03-08 14:08:29', 15),
(19, 'cmpost', '2018-03-08 14:08:32', 15);

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
(1, 'xxdefaultxx', 'default.png'),
(2, 'xxdefault2xx', 'default.png'),
(10, 'meta', 'network1.jpg'),
(11, 'meta', 'Screenshot_from_2018-01-17_11-45-03.png');

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

--
-- Dumping data for table `cmpost`
--

INSERT INTO `cmpost` (`postid`, `psbuat`, `psubah`, `psjudul`, `tagid`, `psustadz`, `pstext`, `mediadir`, `vcount`, `pspublic`) VALUES
(1, '2018-01-16 00:00:00', '2018-03-08 13:03:58', '8 Alasan Mengapa Kita Harus Menikah dan Berkeluarga', 1, 'Andi', '<p style=\"margin-bottom: 25px; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83);\"><span style=\"text-align: justify;\">Menikah bagi kita Ummat Islam dipandang tinggi dan bernilai ibadah. Diawali oleh sebuah akad yang dikenal dengan ijab dan kabul yang sakral. Demikian sakralnya sehingga Allah SWT menyebutnya dengan Mitsaqan ghalizha (perjanjian Allah yang berat).</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\">Perjanjian yang tidak hanya melibatkan dua insan tapi juga antara makhluk dan Sang Pencipta. Lewat perjanjian ini, hubungan dua insan yang tadinya terlarang menjadi halal, yang kotor menjadi suci, yang dosa menjadi amal dan maksiat menjadi ibadah. Demikian sehingga menikah itu tidak boleh asal-asalan.</p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\">Sobat Nida perlu mempersiapkan diri dengan bekal yang cukup sebelum melangkah ke jenjang pernikahan. Menikah bukan karena disuruh, ikut-ikutan atau suka-suka apalagi untuk sekedar bersenang-senang.</p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\">Karena menikah mempunyai alasan dan tujuan-tujuan mulia dan jelas. Imam al-Ghazali rh menyebutkan 5 faedah yang akan diperoleh seseorang jika ia berkeluarga: [1] memperoleh anak dan keturunan, [2] menyalurkan nafsu syahwat ke jalan yang dibenarkan oleh agama, [3] membangun rumah tangga sendiri, [4] menambah jaringan keluarga, dan [5] meningkatkan kemampuan mengontrol diri. (Lihat kitabnya: Ihya’ Ulumiddin, cet. Kairo 1967, jilid II, hlm. 31-42).</p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\">Inilah alasan untuk apa menikah dan berkeluarga. Yuk Sobat Nida mari disimak:</p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span style=\"font-weight: 600; line-height: inherit;\"><span lang=\"EN-GB\">1.Melaksanakan perintah Allah swt dan Rasul-Nya</span></span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span lang=\"EN-GB\">Menikah adalah perintah Allah SWT dan Rasul-Nya. Maka dengan menikah menunjukkan kepatuhan kita sebagai hamba. Menikah </span>bukan urusan kemanusiaan semata-mata, namun ada sisi hubungan antara hamba dan Tuhan yang sangat kuat.</p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span lang=\"EN-GB\">Diantara ayat-ayat yang memerintahkan menikah<em style=\"line-height: inherit;\">: “… maka kawinilah wanita-wanita yang kamu senangi: dua, tiga atau empat. Kemudian jika kamu takut tidak akan dapat berlaku adil, maka (kawinilah) seorang saja.”</em> </span>(QS an-Nisa’: 3)</p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><em style=\"line-height: inherit;\">“Dan kawinkanlah orang-orang yang sendirian<span style=\"font-weight: 600; line-height: inherit;\"><sup> </sup></span>di antara kamu, dan orang-orang yang layak (berkawin) dari hamba-hamba sahayamu yang lelaki dan hamba-hamba sahayamu yang perempuan. Jika mereka miskin Allah akan memampukan mereka dengan karunia-Nya. Dan Allah Maha Luas (pemberian-Nya) lagi Maha Mengetahui”</em> (QS an-Nur: 32)</p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\">Dan diantara Sabda Rasulullah saw tentang menikah adalah: “Wahai para pemuda, siapa diantara kalian yang telah mampu, maka hendaklah ia menikah!” (HR Imam al-Bukhari dan Muslim)</p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span style=\"font-weight: 600; line-height: inherit;\"><span lang=\"EN-GB\">2.Mengikuti sunnah para Nabi, Rasululullah saw, para Sahabat dan Salaf Shalih</span></span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\">Menikah adalah ajaran dan dicontohkan oleh para Nabi dan Rasul untuk diikuti oleh umat manusia sehingga menikah berarti mengikuti sunnah para Nabi dan Rasul.</p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\">Firman Allah swt: <em style=\"line-height: inherit;\">“Dan sesungguhnya Kami telah mengutus beberapa Rasul sebelum kamu dan Kami memberikan kepada mereka isteri-isteri dan keturunan.”</em> (QS ar-Ra’d: 38)</p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span lang=\"EN-GB\">Sabda Rasulullah saw<em style=\"line-height: inherit;\">: “Menikah itu adalah sunnahku. Siapa yang tidak mau [mengikuti] sunnahku, maka dia bukan termasuk [ummat]ku”</em> (HR Imam al-Bukhari dan Muslim)”</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span style=\"font-weight: 600; line-height: inherit;\">3.Untuk menenangkan batin, menghibur dan menyegarkan perasaan</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span lang=\"EN-GB\">Lewat pernikahan hubungan antara pria dan wanita menjadi halal. Dengan begitu  hubungan  tersebut mendatangkan ketentraman. Karena jika sekedar untuk pelampiasan hawa nafsu secara bebas tanpa ikatan pernikahan, itu tidak akan pernah mendatangkan rasa tentram.</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span lang=\"EN-GB\">Firman Allah swt: “<em style=\"line-height: inherit;\">Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.”</em> (QS ar-Rum: 21)</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span lang=\"EN-GB\">Sabda Rasulullah saw: <em style=\"line-height: inherit;\">“Setiap orang yang bekerja pasti mengalami tekanan, namun setiap tekanan mesti ada jedanya. Maka siapa yang jalan keluar dari stressnya mengikuti sunnahku, sesungguhnya ia telah mendapatkan petunjuk.”</em> (HR Imam Ahmad, at-Thabarani dan at-Tirmidhi)</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span style=\"font-weight: 600; line-height: inherit;\"><span lang=\"EN-GB\">4.Untuk menjaga diri dan memelihara kehormatan</span></span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span lang=\"EN-GB\">Sudah menjadi fitrah manusia yang mempunyai kecendrungan terhadap lawan jenisnya. Namun hal ini perlu disalurkan secara terhormat dan suci dengan cara yang benar yaitu menikah.</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span lang=\"EN-GB\">Rasulullah saw telah bersabda: <em style=\"line-height: inherit;\">“Waha</em></span><em style=\"line-height: inherit;\">i para pemuda, siapa diantara kalian yang telah mampu, maka hendaklah ia menikah! Karena sesungguhnya menikah itu akan menjaga pandangan dan memelihara syahwat farj”</em> (HR Imam Bukhari dan Muslim)</p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\">Dalam hadis lain: <em style=\"line-height: inherit;\">“Allah berhak menolong tiga golongan: orang yang berjihad di jalan Allah, hamba mukatab yang ingin membayar harga tebusannya, dan orang yang menikah dengan tujuan untuk dapat memelihara kehormatan dirinya.”</em> (HR Imam at-Tirmidhi, Ibn Hibban, dan al-Hakim)</p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\">Imam al-Ghazali meriwayatkan pernah ada seorang pemuda mengeluh perihalnya kepada Ibn Abbas ra, bahwa ia nyaris melakukan zina dan sering masturbasi. Maka berkata Ibn Abbas ra<em style=\"line-height: inherit;\">: “Celaka kamu! Lebih baik kamu menikah meskipun dengan seorang hamba sahaya, dan itu lebih baik daripada kamu berzina!”</em> (Ihya’ Ulumiddin, cet. Kairo 1967, jilid II, hlm. 38)</p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span style=\"font-weight: 600; line-height: inherit;\">5.Untuk menyempurnakan keimanan</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\">Beberapa hadist sangat jelas menyatakan tentang hal ini. Diantaranya adalah Rasulullah saw bersabda: <em style=\"line-height: inherit;\">“Siapa yang menikah maka ia telah menyempurnakan separuh dari iman[nya] ”</em> (HR Imam at-Thabarani).</p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\">Hadis senada juga menyebutkan, <em style=\"line-height: inherit;\">“Siapa yang menikah berarti dia telah menyempurnakan sebagian agamanya, maka hendaklah dia bertaqwa kepada Allah pada sebagian yang lain.”</em> (HR Imam al-Bayhaqi dan Ibn al-Jawzi)</p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span style=\"font-weight: 600; line-height: inherit;\"><span lang=\"EN-GB\">6.Untuk mendapatkan keturunan yang baik</span></span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"> <span lang=\"EN-GB\">Salah satu tujuan mulia dari pernikahan adalah mendapatkan keturunan yang baik. Hal ini sudah menjadi fitrah manusia yang menginginkan keturunan seperti kisah dalam Al-Qur’an ini, “Dan Zakaria, tatkala ia menyeru Tuhannya: <em style=\"line-height: inherit;\">“Ya Tuhanku janganlah engkau membiarkan aku hidup seorang diri [maksudnya: tanpa mempunyai anak keturunan] padahal Engkau adalah Waris Yang Paling Baik.“(</em>QS al-Anbiya’: 89) </span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span lang=\"EN-GB\">“Dan orang orang yang berkata: <em style=\"line-height: inherit;\">“Ya Tuhan kami, anugrahkanlah kepada kami pasangan (suami/isteri) kami dan keturunan kami sebagai penyenang hati (kami), dan jadikanlah kami teladan bagi orang-orang yang bertaqwa.”</em> (QS al-Furqan: 74)</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span style=\"font-weight: 600; line-height: inherit;\"><span lang=\"EN-GB\">7.Untuk melahirkan generasi penerus risalah</span></span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span lang=\"EN-GB\">Senada dengan point nomor enam di atas, Firman Allah swt tentang Nabi Zakaria as: <em style=\"line-height: inherit;\">“Dan sesungguhnya aku khawatir terhadap mawali-ku sepeninggalku, sedang isteriku adalah seorang yang mandul, maka anugerahilah aku dari sisi Engkau seorang putera, yang akan mewarisi aku dan mewarisi sebahagian keluarga Ya’qub; dan jadikanlah ia, ya Tuhanku, seorang yang diridhai.”</em> (QS Maryam: 5-6)</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span lang=\"EN-GB\">Di sini yang dimaksud oleh Nabi Zakaria as dengan <em style=\"line-height: inherit;\">mawali</em> ialah orang-orang yang akan mengendalikan dan meneruskan misi da’wah sepeninggalnya.Yang beliau khawatirkan adalah kalau orang lain yang kelak menggantikannya tidak mampu melaksanakan tugasnya dengan baik, karena tidak seorangpun di antara mereka yang dapat dipercayainya, oleh sebab itu dia meminta dianugerahi seorang anak.</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span style=\"font-weight: 600; line-height: inherit;\"><span lang=\"EN-GB\">8.Untuk membantu dalam kegiatan ibadah</span></span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span lang=\"EN-GB\">Berkeluarga juga mempunyai tujuan agar anggota keluarga menjadi satu team dalam kegiatan ibadah. Dimana setiap anggota keluarga saling mengingatkan dan menjaga agar tidak terjerumus dalam kegiatan dosa.</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span lang=\"EN-GB\">Firman Allah swt: <em style=\"line-height: inherit;\">“Dan perintahkanlah keluargamu mendirikan shalat dan bersabarlah dalam melaksanakannya.”</em> (QS Thaha: 132) </span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><em style=\"line-height: inherit;\"><span lang=\"EN-GB\">“Hai orang-orang yang beriman, peliharalah dirimu dan keluargamu dari api neraka yang bahan bakarnya adalah manusia dan batu; penjaganya malaikat-malaikat yang kasar, yang keras, yang tidak mendurhakai Allah terhadap apapun yang diperintahkan-Nya.” </span></em><span lang=\"EN-GB\">(QS at-Tahrim: 6)</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in; padding: 0px; font-family: Lora; font-size: 16px; line-height: 1.8; text-rendering: optimizeLegibility; color: rgb(84, 83, 83); text-align: justify;\"><span lang=\"EN-GB\">Sabda Rasulullah saw: “<em style=\"line-height: inherit;\">Hendaklah setiap orang dari kalian mempunyai hati yang senantiasa bersyukur, lidah yang selalu berzikir, dan pasangan yang beriman dan shalih/ah yang dapat menolongnya dalam urusan akhiratnya”</em> (HR Imam at-Tirmidzi dan Ibnu Majah)</span></p> ', '1', 31, 1),
(13, '2018-03-03 23:59:30', '2018-03-08 12:37:44', 'Wow', 1, 'Owo', '<p>Wow</p>', '2', 2, 1),
(14, '2018-03-04 00:02:08', '2018-03-08 13:06:12', 'Seluruh Ummat Muhammad Akan Masuk Surga Kecuali ya', 1, 'Ahmad', '<p>Shallallahu ‘alaihi wa sallam bersabda: ????? ???????? ??????????? ?????????? ?????? ???? ?????. ???????: ??? ??????? ????? ?????? ???????? ?????: ???? ?????????? ?????? ?????????? ?????? ???????? ?????? ?????  “Seluruh umatku akan masuk jannah, kecuali yang enggan.” Maka dikatakan: “Wahai Rasulullah, siapa yang enggan?” Beliau menjawab: “Barangsiapa yang menaatiku maka dia pasti masuk jannah, sedangkan barangsiapa yang mendurhakaiku maka sungguh dia telah enggan (masuk jannah).” (Hadits Riwayat Al-Bukhari) simak selanjutnya. Akhlak adalah cerminan dari hati seorang muslim. Sehingga, perangai yang penuh adab dan sopan santun merupakan gambaran dari apa yang ada di dalam hatinya. Sebaliknya, tutur kata yang tidak beradab, sikap yang jelek, itupun merupakan gambaran isi hati seseorang. Rasulullah Shallallahu ‘alaihi wa sallam bersabda: ????? ??????? ??? ????????? ???????? ????? ???????? ?????? ????????? ??????? ??????? ???????? ?????? ????????? ???????? ????? ?????? ????????? “Ketahuilah, di dalam jasad ada segumpal daging. Apabila baik, maka baiklah seluruh jasadnya, dan apabila rusak maka rusaklah seluruh jasadnya. Ketahuilah, dia adalah hati.” (HR. Al-Bukhari dan Muslim dari Abu Abdillah An-Nu’man bin Basyir radhiyallahu ‘anhuma) Bahkan akhlak yang baik adalah bukti kebenaran iman seseorang. Sebagaimana disebutkan dalam hadits dari Abu Hurairah radhiyallahu ‘anhu, bahwa Rasulullah Shallallahu ‘alaihi wa sallam bersabda: ???????? ?????????????? ????????? ???????????? ??????? “Orang mukmin yang paling sempurna imannya adalah yang paling baik akhlaknya.” (HR. At-Tirmidzi, Kitab Ar-Radha’ Bab Ma Ja`a fi Haqqil Mar`ah ‘ala Zaujiha, no. 1082, dishahihkan oleh Al-Albani rahimahullahu dalam Shahih Al-Jami’ no. 1232) Allah Subhanahu wa Ta’ala telah memberitakan kepada kita tentang akhlak Rasul-Nya Shallallahu ‘alaihi wa sallam: ????????? ??????? ?????? ???????? “Dan sesungguhnya engkau benar-benar berbudi pekerti yang agung.” (Al-Qalam: 4) Ummul Mukminin Aisyah radhiyallahu ‘anha pernah ditanya tentang akhlak Rasulullah Shallallahu ‘alaihi wa sallam. Beliau menjawab: ????? ???????? ?????????? “Akhlak beliau adalah Al-Qur`an.” (HR. Muslim) Karena akhlak Rasulullah Shallallahu ‘alaihi wa sallam adalah Al-Qur`an, maka dapat kita ambil kesimpulan bahwa akhlak itu mencakup agama Islam secara keseluruhan. Baik akhlak terhadap Allah Subhanahu wa Ta’ala, terhadap rasul-rasul-Nya ‘alaihimussalama, kitab-kitab-Nya, maupun akhlak terhadap hamba-hamba Allah Subhanahu wa Ta’ala yang lainnya. Dari sini pula kita dapatkan bahwa kebanyakan orang masih berpandangan sempit tentang akhlak. Seakan-akan, akhlak hanya terbatas pada tutur kata dan penampilan yang menarik saja. Padahal cakupannya luas, seluas syariat Islam. Di antara hamba-hamba Allah Subhanahu wa Ta’ala yang paling berhak untuk kita beradab dan berakhlak yang baik adalah para nabi dan rasul ‘alaihimussalam, terutama Rasulullah Muhammad Shallallahu ‘alaihi wa sallam. Mengapa demikian? Karena, kita tidak mungkin mengetahui jalan yang benar dan melaksanakan ibadah yang bisa diterima oleh Allah Subhanahu wa Ta’ala, kecuali dengan Sunnah dan thariqah (jalan) Rasulullah Shallallahu ‘alaihi wa sallam. Realisasi dan wujud berakhlaknya seorang mukmin kepada Rasulullah Shallallahu ‘alaihi wa sallam di antaranya: 1. Beriman kepadanya dan beriman pula kepada apa yang beliau Shallallahu ‘alaihi wa sallam bawa. Allah Subhanahu wa Ta’ala berfirman: ??????????? ????????? ??????? ???????? ????? ????????? ??????????? ?????????? ?????????? ???? ?????????? ?????????? ?????? ?????? ????????? ???? ?????????? ?????? ??????? ??????? ??????? “Hai orang-orang yang beriman (kepada para rasul), bertakwalah kepada Allah dan berimanlah kepada Rasul-Nya, niscaya Allah memberikan rahmat-Nya kepadamu dua bagian, dan menjadikan untukmu cahaya yang dengan cahaya itu kamu dapat berjalan dan Dia mengampuni kamu. Dan Allah Maha Pengampun lagi Maha Penyayang.” (Al-Hadid: 28) Dalam ayat ini, Allah Subhanahu wa Ta’ala menjanjikan beberapa perkara kepada orang-orang yang bertakwa dan beriman kepada Rasul-Nya Shallallahu ‘alaihi wa sallam: Allah Subhanahu wa Ta’ala menggandakan pahalanya dua kali lipat, dan ini merupakan rahmat-Nya. Allah Subhanahu wa Ta’ala memberikan kepadanya cahaya ilmu dan petunjuk, sehingga mereka bisa berjalan dengannya di dalam gelapnya kejahilan. Allah Subhanahu wa Ta’ala akan mengampuni dosa-dosanya. Inilah buah yang akan didapat oleh orang-orang yang beradab dan berakhlak baik, khususnya terhadap Rasulullah Muhammad Shallallahu ‘alaihi wa sallam. Sebaliknya, orang yang tidak beradab dan berakhlak baik terhadap Rasulullah Shallallahu ‘alaihi wa sallam akan gugur amal-amalnya. Allah Subhanahu wa Ta’ala berfirman: ??????????? ????????? ??????? ??? ?????????? ????????????? ?????? ?????? ?????????? ????? ?????????? ???? ??????????? ???????? ?????????? ???????? ???? ???????? ????????????? ?????????? ??? ??????????? “Hai orang-orang yang beriman, janganlah kamu meninggikan suaramu lebih dari suara Nabi. Dan janganlah kamu berkata kepadanya dengan suara keras sebagaimana kerasnya (suara) sebagian kamu terhadap sebagian yang lain, supaya tidak hapus amalanmu sedangkan kamu tidak menyadari.” (Al-Hujurat: 2) Mengangkat suara kepada Rasulullah Shallallahu ‘alaihi wa sallam saja bisa menggugurkan amalan. Lebih-lebih berbagai macam syirik, bid’ah, hizbiyah, kemaksiatan, dan kemungkaran lainnya. 2. Membenarkan segala berita yang Rasulullah Shallallahu ‘alaihi wa sallam sampaikan. Allah Subhanahu wa Ta’ala berfirman: ??? ????? ??????????? ????? ?????. ????? ???????? ???? ????????. ???? ???? ?????? ?????? ?????? “Kawanmu (Muhammad) tidak sesat dan tidak pula keliru. Dan tiadalah yang diucapkannya itu menurut kemauan hawa nafsunya. Ucapannya itu tiada lain hanyalah wahyu yang diwahyukan (kepadanya).” (An-Najm: 2-4) Diriwayatkan dari Abdullah bin ‘Amr bin Al-’Ash radhiyallahu ‘anhuma, bahwa dia berkata: ?????? ???????? ????? ?????? ?????????? ???? ??????? ????? ??? ???? ???? ???? ??????? ???????? ??????????? ???????? ?????????: ??????? ???????? ????? ?????? ?????????? ???? ??????? ????? ??? ???? ???? ???? ????????? ????? ??? ???? ???? ???? ?????? ??????????? ??? ????????? ??????????? ???????????? ???? ?????????? ?????????? ?????? ????????? ????? ??? ???? ???? ???? ???????: ??????? ??????????? ??????? ???????? ??? ?????? ??????? ?????? ????? “Aku senantiasa menulis segala sesuatu yang aku dengar dari Rasulullah Shallallahu ‘alaihi wa sallam untuk aku hafal. Maka kaum Quraisy melarangku dan berkata: ‘Engkau menulis segala yang engkau dengar dari Rasulullah Shallallahu ‘alaihi wa sallam, padahal Rasulullah Shallallahu ‘alaihi wa sallam adalah manusia, beliau berkata dalam keadaan marah maupun ridha?’ Aku pun menahan diri dari menulis hingga aku sebutkan hal itu kepada Rasulullah Shallallahu ‘alaihi wa sallam. Maka Rasulullah Shallallahu ‘alaihi wa sallam bersabda: ‘Tulislah. Demi Dzat yang jiwaku di tangan-Nya, tidaklah keluar dariku kecuali kebenaran’.” (HR. Ahmad, 2/162. Dishahihkan oleh Asy-Syaikh Al-Albani rahimahullahu dalam Ash-Shahihah no. 1532, dan Asy-Syaikh Muqbil rahimahullahu dalam Ash-Shahihul Musnad no. 768) Sehingga, berita apapun yang shahih dari Rasulullah Shallallahu ‘alaihi wa sallam wajib kita membenarkannya, baik berita itu masuk akal ataupun tidak. Baik berita itu sudah terjadi, sedang terjadi, atau yang akan terjadi. Semuanya adalah benar, selama berita tersebut shahih dari Rasulullah Shallallahu ‘alaihi wa sallam. Tidak boleh seseorang mempertentangkannya dengan mazhab, pemikiran, atau pendapat siapapun. Allah Subhanahu wa Ta’ala berfirman: ??????????? ????????? ??????? ??? ??????????? ?????? ?????? ????? ??????????? ?????????? ????? ????? ????? ??????? ??????? “Hai orang-orang yang beriman, janganlah kamu mendahului Allah (yakni Kitabullah) dan Rasul-Nya (yakni Sunnahnya), dan bertakwalah kepada Allah. Sesungguhnya Allah Maha Mendengar lagi Maha Mengetahui.” (Al-Hujurat: 1) Berdasarkan ayat ini, berita apapun yang bertentangan dengan Al-Qur`an dan As-Sunnah yang shahih adalah salah, siapapun yang mengatakannya. Demikianlah seharusnya akhlak dan adab seorang muslim terhadap berita yang shahih dari Rasulullah Shallallahu ‘alaihi wa sallam. 3. Menaati perintah dan larangan Rasulullah Shallallahu ‘alaihi wa sallam. Allah Subhanahu wa Ta’ala berfirman: ??????????? ????????? ??????? ????????? ????? ??????????? ?????????? “Hai orang-orang yang beriman, taatilah Allah dan taatilah Rasul (Nya)….” (An-Nisa`: 59) ????? ???????? ?????????? ????????? ????? ????????? ?????? ??????????? “Apa yang diberikan Rasul kepadamu maka terimalah dia. Dan apa yang dilarangnya bagimu maka tinggalkanlah.” (Al-Hasyr: 7) Abu Hurairah radhiyallahu ‘anhu berkata: Aku mendengar Rasulullah Shallallahu ‘alaihi wa sallam bersabda: ??? ???????????? ?????? ?????????????? ????? ???????????? ???? ??????????? ?????? ??? ????????????? ?????????? ???????? ????????? ???? ?????????? ???????? ????????????? ???????????????? ????? ??????????????? “Apa saja yang aku larang kalian darinya maka tinggalkanlah. Dan apa saja yang aku perintahkan kepada kalian maka ambillah semampu kalian. Hanyalah yang membinasakan orang-orang yang sebelum kalian adalah banyaknya pertanyaan mereka dan penyelisihan mereka terhadap para nabi yang diutus kepada mereka.” (Muttafaqun ‘alaih) Rasulullah Shallallahu ‘alaihi wa sallam juga mengabarkan bahwa ketaatan kepada beliau Shallallahu ‘alaihi wa sallam merupakan sebab yang akan memasukkan seseorang ke dalam jannah (surga). Beliau Shallallahu ‘alaihi wa sallam bersabda: ????? ???????? ??????????? ?????????? ?????? ???? ?????. ???????: ??? ??????? ????? ?????? ???????? ?????: ???? ?????????? ?????? ?????????? ?????? ???????? ?????? ????? “Seluruh umatku akan masuk jannah, kecuali yang enggan.” Maka dikatakan: “Wahai Rasulullah, siapa yang enggan?” Beliau menjawab: “Barangsiapa yang menaatiku maka dia pasti masuk jannah, sedangkan barangsiapa yang mendurhakaiku maka sungguh dia telah enggan (masuk jannah).” (HR. Al-Bukhari, Kitabul I’tisham bil Kitabi was Sunnah, Bab Al-Iqtida` bi Sunani Rasulillah, no. 6737) Berbagai musibah, kehinaan dan kerendahan yang menimpa kaum muslimin adalah disebabkan ketidaktaatan dan ketidakberadaban terhadap perintah dan larangan Rasulullah Shallallahu ‘alaihi wa sallam. Allah Subhanahu wa Ta’ala berfirman: ???????????? ????????? ???????????? ???? ???????? ???? ??????????? ???????? ???? ??????????? ??????? ??????? “Maka hendaklah orang-orang yang menyalahi perintah Rasul takut akan ditimpa cobaan atau ditimpa azab yang pedih.” (An-Nur: 63) 4. Mengikuti dan berpegang teguh dengan Sunnah Rasulullah Shallallahu ‘alaihi wa sallam. Seorang muslim tentu mencintai Allah Subhanahu wa Ta’ala. Bukti kecintaannya itu adalah dengan mengikuti dan berpegang teguh dengan Sunnah Rasulullah Shallallahu ‘alaihi wa sallam. Allah Subhanahu wa Ta’ala berfirman: ???? ???? ???????? ?????????? ????? ?????????????? ???????????? ????? ?????????? ?????? ??????????? ??????? ??????? ??????? “Katakanlah: ‘Jika kamu (benar-benar) mencintai Allah, ikutilah aku, niscaya Allah mengasihi dan mengampuni dosa-dosamu.’ Allah Maha Pengampun lagi Maha Penyayang.” (Ali ‘Imran: 31) Mengikuti (ittiba’) Rasul merupakan solusi yang tepat tatkala menghadapi perselisihan dan perpecahan yang terjadi pada umat ini. Di samping itu, ittiba’ akan membuahkan keselamatan di dunia dari kesesatan, dan keselamatan di akhirat dari azab Allah Subhanahu wa Ta’ala. Rasulullah Shallallahu ‘alaihi wa sallam bersabda: ????????? ???? ?????? ???????? ??????? ????????? ??????????? ???????? ???????????? ?????????? ????????? ???????????? ??????????????? ????????????? ??????????? ????? ????????? ????????? ?????????????? ???????????? ????????????? ?????????? ??????? ????? ?????????? ???????? ??????? ???????? ????????? “Sesungguhnya barangsiapa di antara kalian yang hidup panjang, maka dia akan melihat perselisihan yang banyak. Maka wajib kalian berpegang dengan Sunnahku dan sunnah para khalifah yang terbimbing, yang mendapatkan petunjuk. Gigitlah dengan gigi-gigi geraham kalian. Dan hati-hatilah dari perkara-perkara yang baru, karena setiap perkara baru adalah bid’ah, dan setiap bid’ah itu sesat.” (HR. Abu Dawud dan At-Tirmidzi, dia menyatakan: “Hadits yang hasan shahih dari ‘Irbadh bin Sariyah radhiyallahu ‘anhu.”) Dari sinilah, ittiba’ Rasul menjadi syi’ar dakwah Ahlus Sunnah wal Jamaah di sepanjang masa dan semua tempat. Sekaligus, bid’ah dan hizbiyah yang merupakan lawan dari ittiba’ adalah tanda dakwah ahli bid’ah dan hizbiyah, yang akan mengajak kepada perpecahan dan perselisihan. Kenapa demikian? Karena tidak ada satu golongan pun kecuali memiliki amalan-amalan, pendapat-pendapat, dan keyakinan-keyakinan yang menyelisihi Kitabullah dan Sunnah Rasulullah Shallallahu ‘alaihi wa sallam, kecuali Ahlus Sunnah wal Jamaah yang senantiasa mengikuti Sunnah Rasulullah Shallallahu ‘alaihi wa sallam dan al-jamaah. Ibnu Abil ‘Izz Al-Hanafi rahimahullahu berkata dalam Syarh Al-’Aqidah Ath-Thahawiyyah: “Penyimpangan-penyimpangan (dari syariat) itu bertingkat-tingkat. Terkadang berupa kekafiran, terkadang berupa kefasikan, terkadang berupa kemaksiatan, dan terkadang berupa kesalahan semata.” Demikian juga tidak beradab terhadap Rasulullah Shallallahu ‘alaihi wa sallam dan Sunnahnya. Ada yang menyebabkan kekafiran, kefasikan, kemaksiatan, dan kesalahan semata. Hal ini dilakukan oleh berbagai golongan yang menisbahkan diri kepada Islam. Wallahul musta’an.<br></p>', '2', 4, 1),
(15, '2018-03-04 00:04:34', '2018-03-08 13:08:32', 'Larangan-larangan Rasulullah SAW ', 3, 'Taufiq', '<p>Dalam kehidupan sehari-hari,disadari atau tidak,sering kita melakukan perbuatan yang sebenarnya dilarang oleh Rasulullah SAW. Hal ini dapat terjadi karena kejahilan (ketidak mengertian) kita terhadap sunnah Rasulullah SAW. Berikut ini beberapa hal yang dilarang Rasulullah SAW untuk kita lakukan. Larangan-larangan tersebut ada yang sampai pada tingkatan haran,ada yang sekedar makruh (dibenci oleh Allah SWT). Tapi jelas,meninggalkan laranga-larangan berikut ini adalah lebih utama. </p><p> 1.    Melawak (memancing orang lain agar tertawa) dengan kebohongan “Celakalah bagi orang yang berkata dan berbohong untuk menjadikan orang lain tertawa karenanya. Celakalah ia,celakalah ia.” (HR. Ahmad,Tirmidzi dan Abu Dawud) </p><p>2.    Tertawa karena orang lain kentut “Rasulullah SAW melarang tertawa (menertawai orang) karena kentut.” (HR. Ahmad,Bukhari dan Muslim) </p><p>3.    Terlalu banyak tertawa “Jangan banyak tertawa,karena sesungguhnya banyak tertawa itu mematikan hati.” (Shahif Al Jami’ Ash Shogir) </p><p>4.    Bernadzar “Jangan kalian bernadzar,karena nadzar itu sedikit pun tidak dapat mempengaruhi takdir. Dan hanyasanya nadzar itu dikeluarkan dari orang yang pelit.” (HR. Muslim dan Tirmidzi) </p><p>5.    Memaksakan diri menjamu tamu “Janganlah salah seorang diantara kalian memaksakan diri untuk tamunya dilura kemampuannya.” (HR. Ad Dailami) </p><p>6.    Mengambil barang orang lain tanpa izin,baik secara bercanda atau serius “Janganlah salah seorang diantara kalian mengambil barang milik temannya (tanpa ijin) baik secara main-main atau serius. Dan jika ia mengambil tongkat temannya hendaklah segera dikembalikan kepadanya.” (HR. Ahmad,Abu Dawud dan Tirmidzi) </p><p>7.    Memuji orang lain secara berlebihan “Celaka kamu,kamu telah memenggal leher temenmu,barang siapa diantara kamu mau tidak mau harus memuji saudaranya  hendaklah ia mengatakan : “Aku mengenal si Fullah dan Allah-lah yang menilainya,dan aku tidak memuji seseorang melebihi pengetahuan Allah. Saya menilai si fulan begini…begini…” Jika ita tahu yang baik darinya.” (HR. Ahmad,Bukhari dan Muslim) </p><p>8.    Melakukan shalat dalam kondisi makanan sudah tersedia atau sambil menahan buang air kecil atau besar “Tidak sempurna shalat dalam kondisi mekanan sudah tersedia,dan tidak sempurna juga shalat orang yang menahan buang air kecil atau besar.’ (HR. Muslim dan Abu Dawud) </p><p>9.    Mendatangi masjid dengan tergesa-gesa untuk mengejar shalat agar tidak ketinggalan “Jika kalian mendatangi shalat,hendaklah kalian datang dalam keadaan tenang,dan janganlah kalian mendatanginya dengan tergesa-gesa,maka apa yang kalian dapatkan shalatlah,dan apa yang ketinggalan sempurnakanlah.” (HR. Ahmad,Bukhari dan Muslim) </p><p>10.    Membunuh binatang dengan api “Sesungguhnya tidak boleh menyiksa dengan api kecuali Allah tuhan api.” (HR. Abu Dawud) </p><p>11.    Menunda pembayaran hak orang lain Dari Abu Hurairah ra. : “sesungguhnya Rasulullah SAW  bersabda : “Orang yang mampu membayar hak orang lain namun menunda pembayarannya merupakan kedzaliman. Dan apabila terdapat hutang yang dialihkan kepada salah seorang diantara kalian dalam keadaan mampu maka terimalah pengalihan itu.” (Muttafaqun Alaihi) </p><p>12.    Duduk diantara dua orang kecuali dengan ijin keduanya “Rasulullah SAW melarang seseorang duduk diantara dua orang kecuali dengan seijin keduanya.” (Hadist Hasan menurut Al Albani) </p><p>13.    Membiarkan api menyala,sementara kita tidur Dari Ibnu Umar ra. : Dari Nabi SAW, ia bersabda :”Janganlah kalian meninggalkan api di rumah-rumah kalian ketika kalian tidur.” (Muttafaqun alaihi) Dan suatu saat ketika Rasulullah SAW mendengar berita kebakaran rumah salah seorang sahabatnya,beliau bersabda : “Sesungguhnya api itu musuh kalian, maka apabila kalian tidur,padamkanlah.”(Muttafaqun alaihi) 14.    Mencabut uban “Janganlah kalian mencabut uban,karena sesungguhnya uban itu merupakan cahaya bagi seorang muslim pada hari kiamat.” (HR. Abu Dawud dan Tirmidzi) 15.    Masuk masjid dalam keadaan membawa bau yang busuk (tidak sedap) “Barang siapa yang makan bawang merah,bawang putih dan kurrots (sayur yang mirip bawang merah) maka janganlah mendekati masjid kami,karena sesungguhnya malaikat terganggu,sebagaimana manusia terganggu darinya.” (HR. Muslim)  Demikian diantara larangan-larangan Nabi SAW. Memang,larangan Allah dan Rasul-Nya kadang terasa indah dan nikmat. Namun yakinlah,dibalik keindahan dan kenikmatan larangan itu tersimpan kerugian dan kecelakaan bagi yang melakukannya. Sebaliknya perintah Allah dan Rasul-Nya kadang terasa pahit dan pedih. Namun yakinlah dibalik kepahitan dan kepedihan itu tersimpan keuntungan dan kebahagiaan bagi yang melakukannya. Mari kita tinggalkan larangan Allah dan Rasul-Nya sejauh-jauhnya,agar kehidupan kita terbimbing hidayah-Nya. Semoga kita mampu melaksanakannya.<span style=\"color: rgb(117, 117, 117); font-family: Roboto, sans-serif; font-size: 15px; background-color: rgb(243, 253, 254);\"></span><br></p>', '2', 18, 1);

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
('Masjid Agung At- Tsaurah', 'Nama: Masjid Agung At- Tsaurah\r\nBerdiri Tahun: 1870 – 1888 M\r\nAlamat: JI. Maulana Yusuf Serang, Kota Serang –\r\nBanten\r\nLuas Bangunan: 26.510 M2 (2.6 Ha)\r\nKapasitas Jama’ah: ± 2.500 Orang\r\nStatus Tanah: Wakaf (Wakif: Rd. Tumenggung Basudin\r\nTjondronegoro)\r\n(Sumber Data : Pengurus DKM : 2010)', 'Masjid Agung Ats-Tsauroh Serang yang dahulu disebut Masjid Pegantungan, dan sekarang lebih dikenal dengan sebutan Masjid Agung Serang, mulai dibangun oleh Rd. Tumenggung Basudin Tjondronegoro (1870 – 1888 M) mantan Bupati Pandeglang dan Bupati Serang. Mewakafkan tanah yang ditempati sekarang oleh Masjid seluas ± 2,6 Ha. Awalnya dibangun hanya Masjid tanpa menara. Selanjutnya telah mengalami beberapa kali renovasi. \r\n\r\nTahun 1930 Tb. Nurdin menata Masjid seperti Masjid Kesultanan Banten tetapi tanpa menara. Dan pada tahun 1956 Bapak Ayif Usman, KH. Sochari, dll, menyempurnakan bangunan dengan mendirikan menara. Pada tahun 1968 masa Bupati Letkol H. Suwandi, Masjid itu diberi nama Masjid Ats- Tsauroh yang berarti Masjid Perjuangan, pada tahun 1974 bangunan Masjid dirubah. Pembangunan itu di pimpin oleh Bapak. Ayif Usman dan dikerjakan oleh H. Mulya Syarif. Tahun 1993, Bupati Serang kala itu H. Sampurna memprakarsai untuk merenovasi bangunan Masjid. Maka dibentuklah panitia pembangunan antara lain H. Ma’mun\r\nSochari, H. Aman Sukarso, H. Embay Mulya Sayarif, H. Hilmi serta yang lainnya. Renovasi inilah yang masih bertahan hingga sekarang (2013).', 'Masjid Agung Ats-Tsauroh Serang yang dahulu disebut Masjid Pegantungan, dan sekarang lebih dikenal dengan sebutan Masjid Agung Serang, mulai dibangun oleh Rd. Tumenggung Basudin Tjondronegoro (1870 – 1888 M) mantan Bupati Pandeglang dan Bupati Serang. Mewakafkan tanah yang ditempati sekarang oleh Masjid seluas ± 2,6 Ha. Awalnya dibangun hanya Masjid tanpa menara. Selanjutnya telah mengalami beberapa kali renovasi. \r\n\r\nTahun 1930 Tb. Nurdin menata Masjid seperti Masjid Kesultanan Banten tetapi tanpa menara. Dan pada tahun 1956 Bapak Ayif Usman, KH. Sochari, dll, menyempurnakan bangunan dengan mendirikan menara. Pada tahun 1968 masa Bupati Letkol H. Suwandi, Masjid itu diberi nama Masjid Ats- Tsauroh yang berarti Masjid Perjuangan, pada tahun 1974 bangunan Masjid dirubah. Pembangunan itu di pimpin oleh Bapak. Ayif Usman dan dikerjakan oleh H. Mulya Syarif. Tahun 1993, Bupati Serang kala itu H. Sampurna memprakarsai untuk merenovasi bangunan Masjid. Maka dibentuklah panitia pembangunan antara lain H. Ma’mun\r\nSochari, H. Aman Sukarso, H. Embay Mulya Sayarif, H. Hilmi serta yang lainnya. Renovasi inilah yang masih bertahan hingga sekarang (2013).');

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

--
-- Dumping data for table `cmrdonasi`
--

INSERT INTO `cmrdonasi` (`rdid`, `rdwaktu`, `rdjumlah`, `rddonatur`, `rdtotal`) VALUES
(1, '2018-03-04 04:03:41', 1000000, 'Hamba', 20000000),
(2, '2018-03-04 04:03:53', 300000, 'Mahmud', 1300000),
(3, '2018-03-07 06:03:44', 800000, 'Syafii', 900000);

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
(1, '2018-03-01 00:00:00', 0, 'Sesungguhnya perjalanan terberat bukanlah perjalanan mendaki puncak gunung tertinggi, perjalanan terberat merupakan perjalanan ke masjid', 'masjidtaqwa@gmail.com\r\n+345 578 59 45 416\r\nMasjid taqwa | Tulusrejo Lowokwaru, Malang');

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
(2, 'notag'),
(3, 'Fiqh');

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

--
-- Dumping data for table `cmtakmirm`
--

INSERT INTO `cmtakmirm` (`tkid`, `tknama`, `tknotelp`, `tkjabatan`, `tkmasajabatan`, `mediadir`) VALUES
(2, 'namass', '098', 'jabats', '23', '1nu1mt.jpg');

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
  `mediadir` varchar(100) DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmusers`
--

INSERT INTO `cmusers` (`userid`, `username`, `userpass`, `userfullname`, `useremail`, `usertgldaftar`, `displayname`, `mediaid`, `useralamat`, `usertelp`, `mediadir`) VALUES
(1, 'admin', '0c5951b1aad1835bee4d3e3534aeaa74', 'admiiinlengkap', 'adib35785@gmail.com', '2018-10-01 00:00:00', 'dmin1', 0, 'aaasdd', '088333088333088333', '1194986802274589086football_ball_brice_boye_01_svg_med.png');

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
-- Dumping data for table `cmustadz`
--

INSERT INTO `cmustadz` (`usid`, `usnama`, `usnotelp`, `usalamat`, `mediadir`) VALUES
(2, 'hanand', '0834', 'a', '10381.jpg');

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
