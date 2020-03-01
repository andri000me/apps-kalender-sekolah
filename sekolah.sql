-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Mar 2020 pada 07.01
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'qwerty', 1),
(2, 'suci', 'qwerty', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
`id_guru` int(11) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama_guru` varchar(25) NOT NULL,
  `mata_pelajaran` text NOT NULL,
  `password` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama_guru`, `mata_pelajaran`, `password`, `foto`) VALUES
(1, '141001', 'TUNGGUL MANGIR, Drs', 'Fisika', 'qwerty', '1.jpg'),
(2, '141002', 'BAMBANG HERMANTO, M.Pd', ' B.indonesia, penjaskes', 'qwerty', '5.jpg'),
(3, '141003', 'SITI LEILIWARNI, S.E', 'Sosiologi, Geografi, BP', 'qwerty', '168980_176867389023703_8277794_n.jpg'),
(4, '141004', 'H.CUNTAWAN, S.Pd', 'Matematika', 'qwerty', '7.jpg'),
(5, '141005', 'PANI UTAMI, Dra', 'B.inggris', 'qwerty', '168022_176867252357050_6833900_n.jpg'),
(6, '141006', 'NURHENDI, S.Pd', 'Penjaskes', 'qwerty', '30.jpg'),
(7, '141007', 'H.HASYIM ZAENUDIN, Drs', 'B.arab, Pend.agama', 'qwerty', '2014-05-21 11.07.54.jpg'),
(8, '141008', 'JAHRO YUSNANI, S.Pd', 'Fisika', 'qwerty', '2014-05-21 11.05.31.jpg'),
(9, '141009', 'WARDIYONO, M.Pd', 'Matematika', 'qwerty', '3.jpg'),
(10, '1410010', 'ISTIQOMAH, Dra', 'B.indonesia', 'qwerty', '6.jpg'),
(11, '1410011', 'BAHRUDIN, M.Pd', 'B.inggris', 'qwerty', '11.jpg'),
(12, '1410012', 'HERLA MARLISA, Dra', 'Ekonomi', 'qwerty', '31.jpg'),
(13, '1410013', 'NURFAUZI', 'TKJ', 'qwerty', '180589_176867265690382_2857284_n.jpg'),
(14, '1410014', 'RIANI EKA DEWI', 'TIK', 'qwerty', '180980_176867239023718_4711153_n.jpg'),
(15, '1410015', 'ARIES SUSANTO', 'B.inggris', 'qwerty', '168720_176867279023714_5699267_n.jpg'),
(16, '1410016', 'INDRA GUNAWAN, S.Kom', 'TJK,TIK', 'qwerty', '168964_176867359023706_1832113_n.jpg'),
(17, '1410017', 'ADEK NURHAIDAH, S.Ag', 'B.arab, Pend.agama', 'qwerty', '182232_176867499023692_3311132_n.jpg'),
(18, '1410018', 'SEHAT MARULI SIHOTANG, Dr', 'PKn', 'qwerty', '181507_176867379023704_4473965_n.jpg'),
(19, '1410019', 'DARTINI, M.Pd', 'Biologi', 'qwerty', '222407_426594697388066_1084801320_n.jpg'),
(20, '1410020', 'ADYUNARWAN, S.Pd', 'Kimia', 'qwerty', '180726_176867312357044_7569697_n.jpg'),
(21, '1410021', 'JAENUDIN, S.Pd', 'B.indonesia', 'qwerty', '26.jpg'),
(22, '1410022', 'MUHAMMAD SAEFULLAH, S.H', 'PKn', 'qwerty', '15.jpg'),
(23, '1410023', 'HENI CHANDRANITA, S.Pd', 'Sejarah', 'qwerty', '168056_176867285690380_7609624_n.jpg'),
(24, '1410024', 'MASLONO BUDI HARTO, S.Pd', 'B.inggris', 'qwerty', '28.jpg'),
(25, '1410025', 'DERRY SUPRIYARTI, S.Pd', 'PKn', 'qwerty', '2014-05-21 11.07.03.jpg'),
(26, '1410026', 'RADEN ROBBY RISBANDY, S.P', 'Geografi, ekonomi', 'qwerty', '9.jpg'),
(27, '1410027', 'FERI KUSWANTORO, S.T', 'Matematika', 'qwerty', '168341_176867329023709_5422675_n.jpg'),
(28, '1410028', 'ARY ANNISA, S.Pd', 'Sosiologi', 'qwerty', '2014-05-21 11.07.59.jpg'),
(29, '1410029', 'ANDRIANTJE M. ALFONS', 'Seni budaya', 'qwerty', '180917_176867462357029_2248938_n.jpg'),
(30, '1410030', 'DONALITA, S.Pd', 'Sejarah, PKn', 'qwerty', '2014-05-21 11.06.42.jpg'),
(31, '1410031', 'H.M.SYAMSURI, Drs', 'B.arab, BP', 'qwerty', '182028_176867449023697_2029123_n.jpg'),
(32, '1410032', 'JENNY WIRA MARYAN', 'Biologi', 'qwerty', '168413_176867335690375_2084023_n.jpg'),
(33, '1410033', 'LELA HERMILA, S.Pd', 'B.indonesia', 'qwerty', '1396602717071.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE IF NOT EXISTS `informasi` (
`id_infrm` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `file_infrm` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tanggal_infrm` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_infrm`, `judul`, `jenis`, `file_infrm`, `keterangan`, `tanggal_infrm`) VALUES
(20, 'Jadwal Semester Genap', 'Mata Pelajaran', 'Jadwal Genap.pdf', 'Kesepakatan Kepala Sekolah', '2014-10-05'),
(19, 'daftar pembagian tugas', 'Mata Pelajaran', 'daftar pembagian tugas mata pelajaran.pdf', 'Kesepakatan Kepala Sekolah', '2014-10-05'),
(21, 'JADWAL JADWAL UJIAN', 'Jadwal Ujian', 'JADWAL JADWAL UJIAN.pdf', 'Kesepakatan Kepala Sekolah', '2014-10-05'),
(22, 'Kalender Pendidikan 1314', 'Mata Pelajaran', 'Kalender Pendidikan 1314.pdf', 'Kesepakatan Seluruh Guru', '2014-10-05'),
(23, 'pembagian tugas guru', 'Jadwal Ulangan', 'pembagian tugas guru.pdf', 'Kesepakatan Guru dan Kepala Sekolah', '2014-10-05'),
(24, 'KURIKULUM JADWAL 2012-201', 'Mata Pelajaran', 'STRUKTUR KURIKULUM JADWAL 2012-2013.pdf', 'Detail Jadwal Mata Pelajaran', '2014-10-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
`id_jdwl` int(11) NOT NULL,
  `kd_jdwl` varchar(15) NOT NULL,
  `tgl_jdwl` date NOT NULL,
  `jam` varchar(8) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kls` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jdwl`, `kd_jdwl`, `tgl_jdwl`, `jam`, `id_guru`, `id_kls`) VALUES
(1, 'JDWL-1', '2014-10-05', '08:00', 1, 2),
(2, 'JDWL-2', '2014-10-05', '09:00', 2, 2),
(3, 'JDWL-3', '2014-10-05', '10:00', 3, 2),
(4, 'JDWL-4', '2014-10-05', '11:00', 4, 2),
(5, 'JDWL-5', '2014-10-05', '13:00', 5, 2),
(6, 'JDWL-6', '2014-10-05', '14:00', 6, 2),
(7, 'JDWL-7', '2014-10-05', '15:00', 7, 2),
(8, 'JDWL-8', '2014-10-05', '16:00', 8, 2),
(9, 'JDWL-9', '2014-10-05', '08:00', 9, 3),
(10, 'JDWL-10', '2014-10-05', '09:00', 10, 3),
(11, 'JDWL-11', '2014-10-05', '10:00', 11, 3),
(12, 'JDWL-12', '2014-10-05', '11:00', 12, 3),
(13, 'JDWL-13', '2014-10-05', '08:00', 13, 3),
(14, 'JDWL-14', '2014-10-05', '09:00', 14, 3),
(15, 'JDWL-15', '2014-10-05', '10:00', 15, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_detail`
--

CREATE TABLE IF NOT EXISTS `jadwal_detail` (
`id_detail` int(11) NOT NULL,
  `id_jdwl` varchar(15) NOT NULL,
  `id_siswa` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=839 ;

--
-- Dumping data untuk tabel `jadwal_detail`
--

INSERT INTO `jadwal_detail` (`id_detail`, `id_jdwl`, `id_siswa`) VALUES
(1, 'JDWL-1', '9951909839'),
(2, 'JDWL-1', '9965155227'),
(3, 'JDWL-1', '9965414394'),
(4, 'JDWL-1', '9965414327'),
(5, 'JDWL-1', '9961631210'),
(6, 'JDWL-1', '9952288643'),
(7, 'JDWL-1', '9952907056'),
(8, 'JDWL-1', '9960933373'),
(9, 'JDWL-1', '9962844504'),
(10, 'JDWL-1', '996507923'),
(11, 'JDWL-1', '9952826991'),
(12, 'JDWL-1', '9962308233'),
(13, 'JDWL-1', '9964957863'),
(14, 'JDWL-1', '9962381194'),
(15, 'JDWL-1', '9966731203'),
(16, 'JDWL-1', '9962844602'),
(17, 'JDWL-1', '9961580867'),
(18, 'JDWL-1', '9962921796'),
(19, 'JDWL-1', '9942829886'),
(20, 'JDWL-1', '9941035206'),
(21, 'JDWL-1', '9953106791'),
(22, 'JDWL-1', '9952907075'),
(23, 'JDWL-1', '9963048122'),
(24, 'JDWL-1', '9961847291'),
(25, 'JDWL-1', '9962242200'),
(26, 'JDWL-1', '9961606570'),
(27, 'JDWL-1', '9952823137'),
(28, 'JDWL-1', '9962242360'),
(29, 'JDWL-1', '9961806052'),
(30, 'JDWL-1', '9960936389'),
(31, 'JDWL-1', '9960936102'),
(32, 'JDWL-1', '9962063681'),
(33, 'JDWL-1', '9961847327'),
(34, 'JDWL-1', '9951909842'),
(35, 'JDWL-1', '9961806061'),
(36, 'JDWL-1', '9960932593'),
(37, 'JDWL-1', '9968359773'),
(38, 'JDWL-1', '9951162949'),
(39, 'JDWL-1', '9963085487'),
(40, 'JDWL-1', '9951909833'),
(41, 'JDWL-2', '9962242335'),
(42, 'JDWL-2', '9952421270'),
(43, 'JDWL-2', '9962760738'),
(44, 'JDWL-2', '9962242412'),
(45, 'JDWL-2', '9951605007'),
(46, 'JDWL-2', '9950937671'),
(47, 'JDWL-2', '9968450969'),
(48, 'JDWL-2', '9967352519'),
(49, 'JDWL-2', '9971447152'),
(50, 'JDWL-2', '9964492523'),
(51, 'JDWL-2', '9962200048'),
(52, 'JDWL-2', '9960932022'),
(53, 'JDWL-2', '9964573750'),
(54, 'JDWL-2', '9961806105'),
(55, 'JDWL-2', '9952165272'),
(56, 'JDWL-2', '9964426817'),
(57, 'JDWL-2', '9962304936'),
(58, 'JDWL-2', '9954426345'),
(59, 'JDWL-2', '9951909846'),
(60, 'JDWL-2', '9952347633'),
(61, 'JDWL-2', '9956656071'),
(62, 'JDWL-2', '9963009688'),
(63, 'JDWL-2', '9971689441'),
(64, 'JDWL-2', '9951605057'),
(65, 'JDWL-2', '9961488669'),
(66, 'JDWL-2', '9962308113'),
(67, 'JDWL-2', '9960934869'),
(68, 'JDWL-2', '9965995409'),
(69, 'JDWL-2', '9951949886'),
(70, 'JDWL-2', '9960935041'),
(71, 'JDWL-2', '9962760750'),
(72, 'JDWL-2', '9952389805'),
(73, 'JDWL-2', '9965287625'),
(74, 'JDWL-2', '9963765163'),
(75, 'JDWL-2', '9962162472'),
(76, 'JDWL-2', '9962844477'),
(77, 'JDWL-2', '9964244285'),
(78, 'JDWL-2', '9961885744'),
(79, 'JDWL-2', '9951523345'),
(80, 'JDWL-2', '9950668646'),
(81, 'JDWL-3', '9962242335'),
(82, 'JDWL-3', '9952421270'),
(83, 'JDWL-3', '9962760738'),
(84, 'JDWL-3', '9962242412'),
(85, 'JDWL-3', '9951605007'),
(86, 'JDWL-3', '9950937671'),
(87, 'JDWL-3', '9968450969'),
(88, 'JDWL-3', '9967352519'),
(89, 'JDWL-3', '9971447152'),
(90, 'JDWL-3', '9964492523'),
(91, 'JDWL-3', '9962200048'),
(92, 'JDWL-3', '9960932022'),
(93, 'JDWL-3', '9964573750'),
(94, 'JDWL-3', '9961806105'),
(95, 'JDWL-3', '9952165272'),
(96, 'JDWL-3', '9964426817'),
(97, 'JDWL-3', '9962304936'),
(98, 'JDWL-3', '9954426345'),
(99, 'JDWL-3', '9951909846'),
(100, 'JDWL-3', '9952347633'),
(101, 'JDWL-3', '9956656071'),
(102, 'JDWL-3', '9963009688'),
(103, 'JDWL-3', '9971689441'),
(104, 'JDWL-3', '9951605057'),
(105, 'JDWL-3', '9961488669'),
(106, 'JDWL-3', '9962308113'),
(107, 'JDWL-3', '9960934869'),
(108, 'JDWL-3', '9965995409'),
(109, 'JDWL-3', '9951949886'),
(110, 'JDWL-3', '9960935041'),
(111, 'JDWL-3', '9962760750'),
(112, 'JDWL-3', '9952389805'),
(113, 'JDWL-3', '9965287625'),
(114, 'JDWL-3', '9963765163'),
(115, 'JDWL-3', '9962162472'),
(116, 'JDWL-3', '9962844477'),
(117, 'JDWL-3', '9964244285'),
(118, 'JDWL-3', '9961885744'),
(119, 'JDWL-3', '9951523345'),
(120, 'JDWL-3', '9950668646'),
(121, 'JDWL-4', '9960932896'),
(122, 'JDWL-4', '9961506691'),
(123, 'JDWL-4', '9965155177'),
(124, 'JDWL-4', '9965318489'),
(125, 'JDWL-4', '9958211564'),
(126, 'JDWL-4', '9962308256'),
(127, 'JDWL-4', '9964354180'),
(128, 'JDWL-4', '9962063643'),
(129, 'JDWL-4', '9953088605'),
(130, 'JDWL-4', '9952389753'),
(131, 'JDWL-4', '9962288429'),
(132, 'JDWL-4', '9953101616'),
(133, 'JDWL-4', '9951909839'),
(134, 'JDWL-4', '9965155227'),
(135, 'JDWL-4', '9965414394'),
(136, 'JDWL-4', '9965414327'),
(137, 'JDWL-4', '9961631210'),
(138, 'JDWL-4', '9952288643'),
(139, 'JDWL-4', '9952907056'),
(140, 'JDWL-4', '9960933373'),
(141, 'JDWL-4', '9962844504'),
(142, 'JDWL-4', '996507923'),
(143, 'JDWL-4', '9952826991'),
(144, 'JDWL-4', '9962308233'),
(145, 'JDWL-4', '9964957863'),
(146, 'JDWL-4', '9962381194'),
(147, 'JDWL-4', '9966731203'),
(148, 'JDWL-4', '9962844602'),
(149, 'JDWL-4', '9961580867'),
(150, 'JDWL-4', '9962921796'),
(151, 'JDWL-4', '9942829886'),
(152, 'JDWL-4', '9941035206'),
(153, 'JDWL-4', '9953106791'),
(154, 'JDWL-4', '9952907075'),
(155, 'JDWL-4', '9963048122'),
(156, 'JDWL-4', '9961847291'),
(157, 'JDWL-4', '9962242200'),
(158, 'JDWL-4', '9961606570'),
(159, 'JDWL-4', '9952823137'),
(160, 'JDWL-4', '9962242360'),
(161, 'JDWL-5', '9960935041'),
(162, 'JDWL-5', '9962760750'),
(163, 'JDWL-5', '9952389805'),
(164, 'JDWL-5', '9965287625'),
(165, 'JDWL-5', '9963765163'),
(166, 'JDWL-5', '9962162472'),
(167, 'JDWL-5', '9962844477'),
(168, 'JDWL-5', '9964244285'),
(169, 'JDWL-5', '9961885744'),
(170, 'JDWL-5', '9951523345'),
(171, 'JDWL-5', '9950668646'),
(172, 'JDWL-5', '9960932896'),
(173, 'JDWL-5', '9961506691'),
(174, 'JDWL-5', '9965155177'),
(175, 'JDWL-5', '9965318489'),
(176, 'JDWL-5', '9958211564'),
(177, 'JDWL-5', '9962308256'),
(178, 'JDWL-5', '9964354180'),
(179, 'JDWL-5', '9962063643'),
(180, 'JDWL-5', '9953088605'),
(181, 'JDWL-5', '9952389753'),
(182, 'JDWL-5', '9962288429'),
(183, 'JDWL-5', '9953101616'),
(184, 'JDWL-5', '9951909839'),
(185, 'JDWL-5', '9965155227'),
(186, 'JDWL-5', '9965414394'),
(187, 'JDWL-5', '9965414327'),
(188, 'JDWL-5', '9961631210'),
(189, 'JDWL-5', '9952288643'),
(190, 'JDWL-5', '9952907056'),
(191, 'JDWL-5', '9960933373'),
(192, 'JDWL-5', '9962844504'),
(193, 'JDWL-5', '996507923'),
(194, 'JDWL-5', '9952826991'),
(195, 'JDWL-5', '9962308233'),
(196, 'JDWL-5', '9964957863'),
(197, 'JDWL-5', '9962381194'),
(198, 'JDWL-5', '9966731203'),
(199, 'JDWL-5', '9962844602'),
(200, 'JDWL-5', '9961580867'),
(201, 'JDWL-6', '9951909839'),
(202, 'JDWL-6', '9965155227'),
(203, 'JDWL-6', '9965414394'),
(204, 'JDWL-6', '9965414327'),
(205, 'JDWL-6', '9961631210'),
(206, 'JDWL-6', '9952288643'),
(207, 'JDWL-6', '9952907056'),
(208, 'JDWL-6', '9960933373'),
(209, 'JDWL-6', '9962844504'),
(210, 'JDWL-6', '996507923'),
(211, 'JDWL-6', '9952826991'),
(212, 'JDWL-6', '9962308233'),
(213, 'JDWL-6', '9964957863'),
(214, 'JDWL-6', '9962381194'),
(215, 'JDWL-6', '9966731203'),
(216, 'JDWL-6', '9962844602'),
(217, 'JDWL-6', '9961580867'),
(218, 'JDWL-6', '9962921796'),
(219, 'JDWL-6', '9942829886'),
(220, 'JDWL-6', '9941035206'),
(221, 'JDWL-6', '9953106791'),
(222, 'JDWL-6', '9952907075'),
(223, 'JDWL-6', '9963048122'),
(224, 'JDWL-6', '9961847291'),
(225, 'JDWL-6', '9962242200'),
(226, 'JDWL-6', '9961606570'),
(227, 'JDWL-6', '9952823137'),
(228, 'JDWL-6', '9962242360'),
(229, 'JDWL-6', '9961806052'),
(230, 'JDWL-6', '9960936389'),
(231, 'JDWL-6', '9960936102'),
(232, 'JDWL-6', '9962063681'),
(233, 'JDWL-6', '9961847327'),
(234, 'JDWL-6', '9951909842'),
(235, 'JDWL-6', '9961806061'),
(236, 'JDWL-6', '9960932593'),
(237, 'JDWL-6', '9968359773'),
(238, 'JDWL-6', '9951162949'),
(239, 'JDWL-6', '9963085487'),
(240, 'JDWL-6', '9951909833'),
(241, 'JDWL-7', '9951909839'),
(242, 'JDWL-7', '9965155227'),
(243, 'JDWL-7', '9965414394'),
(244, 'JDWL-7', '9965414327'),
(245, 'JDWL-7', '9961631210'),
(246, 'JDWL-7', '9952288643'),
(247, 'JDWL-7', '9952907056'),
(248, 'JDWL-7', '9960933373'),
(249, 'JDWL-7', '9962844504'),
(250, 'JDWL-7', '996507923'),
(251, 'JDWL-7', '9952826991'),
(252, 'JDWL-7', '9962308233'),
(253, 'JDWL-7', '9964957863'),
(254, 'JDWL-7', '9962381194'),
(255, 'JDWL-7', '9966731203'),
(256, 'JDWL-7', '9962844602'),
(257, 'JDWL-7', '9961580867'),
(258, 'JDWL-7', '9962921796'),
(259, 'JDWL-7', '9942829886'),
(260, 'JDWL-7', '9941035206'),
(261, 'JDWL-7', '9953106791'),
(262, 'JDWL-7', '9952907075'),
(263, 'JDWL-7', '9963048122'),
(264, 'JDWL-7', '9961847291'),
(265, 'JDWL-7', '9962242200'),
(266, 'JDWL-7', '9961606570'),
(267, 'JDWL-7', '9952823137'),
(268, 'JDWL-7', '9962242360'),
(269, 'JDWL-7', '9961806052'),
(270, 'JDWL-7', '9960936389'),
(271, 'JDWL-7', '9960936102'),
(272, 'JDWL-7', '9962063681'),
(273, 'JDWL-7', '9961847327'),
(274, 'JDWL-7', '9951909842'),
(275, 'JDWL-7', '9961806061'),
(276, 'JDWL-7', '9960932593'),
(277, 'JDWL-7', '9968359773'),
(278, 'JDWL-7', '9951162949'),
(279, 'JDWL-7', '9963085487'),
(280, 'JDWL-7', '9951909833'),
(281, 'JDWL-8', '9952826991'),
(282, 'JDWL-8', '9962308233'),
(283, 'JDWL-8', '9964957863'),
(284, 'JDWL-8', '9962381194'),
(285, 'JDWL-8', '9966731203'),
(286, 'JDWL-8', '9962844602'),
(287, 'JDWL-8', '9961580867'),
(288, 'JDWL-8', '9962921796'),
(289, 'JDWL-8', '9942829886'),
(290, 'JDWL-8', '9941035206'),
(291, 'JDWL-8', '9953106791'),
(292, 'JDWL-8', '9952907075'),
(293, 'JDWL-8', '9963048122'),
(294, 'JDWL-8', '9961847291'),
(295, 'JDWL-8', '9962242200'),
(296, 'JDWL-8', '9961606570'),
(297, 'JDWL-8', '9952823137'),
(298, 'JDWL-8', '9962242360'),
(299, 'JDWL-8', '9961806052'),
(300, 'JDWL-8', '9960936389'),
(301, 'JDWL-8', '9960936102'),
(302, 'JDWL-8', '9962063681'),
(303, 'JDWL-8', '9961847327'),
(304, 'JDWL-8', '9951909842'),
(305, 'JDWL-8', '9961806061'),
(306, 'JDWL-8', '9960932593'),
(307, 'JDWL-8', '9968359773'),
(308, 'JDWL-8', '9951162949'),
(309, 'JDWL-8', '9963085487'),
(310, 'JDWL-8', '9951909833'),
(311, 'JDWL-8', '9960932896'),
(312, 'JDWL-8', '9961506691'),
(313, 'JDWL-8', '9965155177'),
(314, 'JDWL-8', '9965318489'),
(315, 'JDWL-8', '9958211564'),
(316, 'JDWL-8', '9962308256'),
(317, 'JDWL-8', '9964354180'),
(318, 'JDWL-8', '9962063643'),
(319, 'JDWL-8', '9953088605'),
(320, 'JDWL-8', '9952389753'),
(321, 'JDWL-9', '9951909839'),
(322, 'JDWL-9', '9965155227'),
(323, 'JDWL-9', '9965414394'),
(324, 'JDWL-9', '9965414327'),
(325, 'JDWL-9', '9961631210'),
(326, 'JDWL-9', '9952288643'),
(327, 'JDWL-9', '9952907056'),
(328, 'JDWL-9', '9960933373'),
(329, 'JDWL-9', '9962844504'),
(330, 'JDWL-9', '996507923'),
(331, 'JDWL-9', '9952826991'),
(332, 'JDWL-9', '9962308233'),
(333, 'JDWL-9', '9964957863'),
(334, 'JDWL-9', '9962381194'),
(335, 'JDWL-9', '9966731203'),
(336, 'JDWL-9', '9962844602'),
(337, 'JDWL-9', '9961580867'),
(338, 'JDWL-9', '9962921796'),
(339, 'JDWL-9', '9942829886'),
(340, 'JDWL-9', '9941035206'),
(341, 'JDWL-9', '9953106791'),
(342, 'JDWL-9', '9952907075'),
(343, 'JDWL-9', '9963048122'),
(344, 'JDWL-9', '9961847291'),
(345, 'JDWL-9', '9962242200'),
(346, 'JDWL-9', '9961606570'),
(347, 'JDWL-9', '9952823137'),
(348, 'JDWL-9', '9962242360'),
(349, 'JDWL-9', '9961806052'),
(350, 'JDWL-9', '9960936389'),
(351, 'JDWL-9', '9960936102'),
(352, 'JDWL-9', '9962063681'),
(353, 'JDWL-9', '9961847327'),
(354, 'JDWL-9', '9951909842'),
(355, 'JDWL-9', '9961806061'),
(356, 'JDWL-9', '9960932593'),
(357, 'JDWL-9', '9968359773'),
(358, 'JDWL-9', '9951162949'),
(359, 'JDWL-9', '9963085487'),
(360, 'JDWL-9', '9951909833'),
(361, 'JDWL-10', '9951909839'),
(362, 'JDWL-10', '9965155227'),
(363, 'JDWL-10', '9965414394'),
(364, 'JDWL-10', '9965414327'),
(365, 'JDWL-10', '9961631210'),
(366, 'JDWL-10', '9952288643'),
(367, 'JDWL-10', '9952907056'),
(368, 'JDWL-10', '9960933373'),
(369, 'JDWL-10', '9962844504'),
(370, 'JDWL-10', '996507923'),
(371, 'JDWL-10', '9962242335'),
(372, 'JDWL-10', '9952421270'),
(373, 'JDWL-10', '9962760738'),
(374, 'JDWL-10', '9962242412'),
(375, 'JDWL-10', '9951605007'),
(376, 'JDWL-10', '9950937671'),
(377, 'JDWL-10', '9968450969'),
(378, 'JDWL-10', '9967352519'),
(379, 'JDWL-10', '9971447152'),
(380, 'JDWL-10', '9964492523'),
(381, 'JDWL-10', '9962200048'),
(382, 'JDWL-10', '9960932022'),
(383, 'JDWL-10', '9964573750'),
(384, 'JDWL-10', '9961806105'),
(385, 'JDWL-10', '9952165272'),
(386, 'JDWL-10', '9964426817'),
(387, 'JDWL-10', '9962304936'),
(388, 'JDWL-10', '9954426345'),
(389, 'JDWL-10', '9951909846'),
(390, 'JDWL-10', '9952347633'),
(391, 'JDWL-10', '9952826991'),
(392, 'JDWL-10', '9962308233'),
(393, 'JDWL-10', '9964957863'),
(394, 'JDWL-10', '9962381194'),
(395, 'JDWL-10', '9966731203'),
(396, 'JDWL-10', '9962844602'),
(397, 'JDWL-10', '9961580867'),
(398, 'JDWL-10', '9962921796'),
(399, 'JDWL-10', '9942829886'),
(400, 'JDWL-10', '9941035206'),
(401, 'JDWL-11', '9951909839'),
(402, 'JDWL-11', '9965155227'),
(403, 'JDWL-11', '9965414394'),
(404, 'JDWL-11', '9965414327'),
(405, 'JDWL-11', '9961631210'),
(406, 'JDWL-11', '9952288643'),
(407, 'JDWL-11', '9952907056'),
(408, 'JDWL-11', '9960933373'),
(409, 'JDWL-11', '9962844504'),
(410, 'JDWL-11', '996507923'),
(411, 'JDWL-11', '9952826991'),
(412, 'JDWL-11', '9962308233'),
(413, 'JDWL-11', '9964957863'),
(414, 'JDWL-11', '9962381194'),
(415, 'JDWL-11', '9966731203'),
(416, 'JDWL-11', '9962844602'),
(417, 'JDWL-11', '9961580867'),
(418, 'JDWL-11', '9962921796'),
(419, 'JDWL-11', '9942829886'),
(420, 'JDWL-11', '9941035206'),
(421, 'JDWL-11', '9953106791'),
(422, 'JDWL-11', '9952907075'),
(423, 'JDWL-11', '9963048122'),
(424, 'JDWL-11', '9961847291'),
(425, 'JDWL-11', '9962242200'),
(426, 'JDWL-11', '9961606570'),
(427, 'JDWL-11', '9952823137'),
(428, 'JDWL-11', '9962242360'),
(429, 'JDWL-11', '9961806052'),
(430, 'JDWL-11', '9960936389'),
(431, 'JDWL-11', '9960936102'),
(432, 'JDWL-11', '9962063681'),
(433, 'JDWL-11', '9961847327'),
(434, 'JDWL-11', '9951909842'),
(435, 'JDWL-11', '9961806061'),
(436, 'JDWL-11', '9960932593'),
(437, 'JDWL-11', '9968359773'),
(438, 'JDWL-11', '9951162949'),
(439, 'JDWL-11', '9963085487'),
(440, 'JDWL-11', '9951909833'),
(441, 'JDWL-12', '9962242335'),
(442, 'JDWL-12', '9952421270'),
(443, 'JDWL-12', '9962760738'),
(444, 'JDWL-12', '9962242412'),
(445, 'JDWL-12', '9951605007'),
(446, 'JDWL-12', '9950937671'),
(447, 'JDWL-12', '9968450969'),
(448, 'JDWL-12', '9967352519'),
(449, 'JDWL-12', '9971447152'),
(450, 'JDWL-12', '9964492523'),
(451, 'JDWL-12', '9962200048'),
(452, 'JDWL-12', '9960932022'),
(453, 'JDWL-12', '9964573750'),
(454, 'JDWL-12', '9961806105'),
(455, 'JDWL-12', '9952165272'),
(456, 'JDWL-12', '9964426817'),
(457, 'JDWL-12', '9962304936'),
(458, 'JDWL-12', '9954426345'),
(459, 'JDWL-12', '9951909846'),
(460, 'JDWL-12', '9952347633'),
(461, 'JDWL-12', '9956656071'),
(462, 'JDWL-12', '9963009688'),
(463, 'JDWL-12', '9971689441'),
(464, 'JDWL-12', '9951605057'),
(465, 'JDWL-12', '9961488669'),
(466, 'JDWL-12', '9962308113'),
(467, 'JDWL-12', '9960934869'),
(468, 'JDWL-12', '9965995409'),
(469, 'JDWL-12', '9951949886'),
(470, 'JDWL-12', '9960935041'),
(471, 'JDWL-12', '9962760750'),
(472, 'JDWL-12', '9952389805'),
(473, 'JDWL-12', '9965287625'),
(474, 'JDWL-12', '9963765163'),
(475, 'JDWL-12', '9962162472'),
(476, 'JDWL-12', '9962844477'),
(477, 'JDWL-12', '9964244285'),
(478, 'JDWL-12', '9961885744'),
(479, 'JDWL-12', '9951523345'),
(480, 'JDWL-12', '9950668646'),
(481, 'JDWL-13', '9962242335'),
(482, 'JDWL-13', '9952421270'),
(483, 'JDWL-13', '9962760738'),
(484, 'JDWL-13', '9962242412'),
(485, 'JDWL-13', '9951605007'),
(486, 'JDWL-13', '9950937671'),
(487, 'JDWL-13', '9968450969'),
(488, 'JDWL-13', '9967352519'),
(489, 'JDWL-13', '9971447152'),
(490, 'JDWL-13', '9964492523'),
(491, 'JDWL-13', '9962200048'),
(492, 'JDWL-13', '9960932022'),
(493, 'JDWL-13', '9964573750'),
(494, 'JDWL-13', '9961806105'),
(495, 'JDWL-13', '9952165272'),
(496, 'JDWL-13', '9964426817'),
(497, 'JDWL-13', '9962304936'),
(498, 'JDWL-13', '9954426345'),
(499, 'JDWL-13', '9951909846'),
(500, 'JDWL-13', '9952347633'),
(501, 'JDWL-13', '9956656071'),
(502, 'JDWL-13', '9963009688'),
(503, 'JDWL-13', '9971689441'),
(504, 'JDWL-13', '9951605057'),
(505, 'JDWL-13', '9961488669'),
(506, 'JDWL-13', '9962308113'),
(507, 'JDWL-13', '9960934869'),
(508, 'JDWL-13', '9965995409'),
(509, 'JDWL-13', '9951949886'),
(510, 'JDWL-13', '9960935041'),
(511, 'JDWL-13', '9962760750'),
(512, 'JDWL-13', '9952389805'),
(513, 'JDWL-13', '9965287625'),
(514, 'JDWL-13', '9963765163'),
(515, 'JDWL-13', '9962162472'),
(516, 'JDWL-13', '9962844477'),
(517, 'JDWL-13', '9964244285'),
(518, 'JDWL-13', '9961885744'),
(519, 'JDWL-13', '9951523345'),
(520, 'JDWL-13', '9950668646'),
(521, 'JDWL-14', '9960932896'),
(522, 'JDWL-14', '9961506691'),
(523, 'JDWL-14', '9965155177'),
(524, 'JDWL-14', '9965318489'),
(525, 'JDWL-14', '9958211564'),
(526, 'JDWL-14', '9962308256'),
(527, 'JDWL-14', '9964354180'),
(528, 'JDWL-14', '9962063643'),
(529, 'JDWL-14', '9953088605'),
(530, 'JDWL-14', '9952389753'),
(531, 'JDWL-14', '9962288429'),
(532, 'JDWL-14', '9953101616'),
(533, 'JDWL-14', '9951909839'),
(534, 'JDWL-14', '9965155227'),
(535, 'JDWL-14', '9965414394'),
(536, 'JDWL-14', '9965414327'),
(537, 'JDWL-14', '9961631210'),
(538, 'JDWL-14', '9952288643'),
(539, 'JDWL-14', '9952907056'),
(540, 'JDWL-14', '9960933373'),
(541, 'JDWL-14', '9962844504'),
(542, 'JDWL-14', '996507923'),
(543, 'JDWL-14', '9952826991'),
(544, 'JDWL-14', '9962308233'),
(545, 'JDWL-14', '9964957863'),
(546, 'JDWL-14', '9962381194'),
(547, 'JDWL-14', '9966731203'),
(548, 'JDWL-14', '9962844602'),
(549, 'JDWL-14', '9961580867'),
(550, 'JDWL-14', '9962921796'),
(551, 'JDWL-14', '9942829886'),
(552, 'JDWL-14', '9941035206'),
(553, 'JDWL-14', '9953106791'),
(554, 'JDWL-14', '9952907075'),
(555, 'JDWL-14', '9963048122'),
(556, 'JDWL-14', '9961847291'),
(557, 'JDWL-14', '9962242200'),
(558, 'JDWL-14', '9961606570'),
(559, 'JDWL-14', '9952823137'),
(560, 'JDWL-14', '9962242360'),
(561, 'JDWL-15', '9960935041'),
(562, 'JDWL-15', '9962760750'),
(563, 'JDWL-15', '9952389805'),
(564, 'JDWL-15', '9965287625'),
(565, 'JDWL-15', '9963765163'),
(566, 'JDWL-15', '9962162472'),
(567, 'JDWL-15', '9962844477'),
(568, 'JDWL-15', '9964244285'),
(569, 'JDWL-15', '9961885744'),
(570, 'JDWL-15', '9951523345'),
(571, 'JDWL-15', '9950668646'),
(572, 'JDWL-15', '9960932896'),
(573, 'JDWL-15', '9961506691'),
(574, 'JDWL-15', '9965155177'),
(575, 'JDWL-15', '9965318489'),
(576, 'JDWL-15', '9958211564'),
(577, 'JDWL-15', '9962308256'),
(578, 'JDWL-15', '9964354180'),
(579, 'JDWL-15', '9962063643'),
(580, 'JDWL-15', '9953088605'),
(581, 'JDWL-15', '9952389753'),
(582, 'JDWL-15', '9962288429'),
(583, 'JDWL-15', '9953101616'),
(584, 'JDWL-15', '9951909839'),
(585, 'JDWL-15', '9965155227'),
(586, 'JDWL-15', '9965414394'),
(587, 'JDWL-15', '9965414327'),
(588, 'JDWL-15', '9961631210'),
(589, 'JDWL-15', '9952288643'),
(590, 'JDWL-15', '9952907056'),
(591, 'JDWL-15', '9960933373'),
(592, 'JDWL-15', '9962844504'),
(593, 'JDWL-15', '996507923'),
(594, 'JDWL-15', '9952826991'),
(595, 'JDWL-15', '9962308233'),
(596, 'JDWL-15', '9964957863'),
(597, 'JDWL-15', '9962381194'),
(598, 'JDWL-15', '9966731203'),
(599, 'JDWL-15', '9962844602'),
(600, 'JDWL-15', '9961580867');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE IF NOT EXISTS `jawaban` (
`id_jwbn` int(11) NOT NULL,
  `tgl_jwb` date NOT NULL,
  `kd_tugas` varchar(11) NOT NULL,
  `id_siswa` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id_jwbn`, `tgl_jwb`, `kd_tugas`, `id_siswa`) VALUES
(1, '2014-10-05', 'T003', '9960935041');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_detail`
--

CREATE TABLE IF NOT EXISTS `jawaban_detail` (
`id_jawaban` int(11) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `kd_tugas` varchar(10) NOT NULL,
  `jwbn` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `jawaban_detail`
--

INSERT INTO `jawaban_detail` (`id_jawaban`, `id_siswa`, `kd_tugas`, `jwbn`) VALUES
(1, '9960935041', 'T003', 'A'),
(2, '9960935041', 'T003', 'B'),
(3, '9960935041', 'T003', 'A'),
(4, '9960935041', 'T003', 'C'),
(5, '9960935041', 'T003', 'C'),
(6, '9960935041', 'T003', 'D'),
(7, '9960935041', 'T003', 'E'),
(8, '9960935041', 'T003', 'B'),
(9, '9960935041', 'T003', 'C'),
(10, '9960935041', 'T003', 'A'),
(11, '9960935041', 'T003', 'B'),
(12, '9960935041', 'T003', 'C'),
(13, '9960935041', 'T003', 'D'),
(14, '9960935041', 'T003', 'A'),
(15, '9960935041', 'T003', 'C'),
(16, '9960935041', 'T003', 'B'),
(17, '9960935041', 'T003', 'B'),
(18, '9960935041', 'T003', 'A'),
(19, '9960935041', 'T003', 'D'),
(20, '9960935041', 'T003', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
`id_jrsn` int(11) NOT NULL,
  `kd_jrsn` varchar(15) NOT NULL,
  `nama_jrsn` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jrsn`, `kd_jrsn`, `nama_jrsn`) VALUES
(1, 'IPA 1', 'IPA'),
(2, 'IPS 1', 'IPS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`id_kls` int(11) NOT NULL,
  `kd_kls` varchar(15) NOT NULL,
  `nama_kls` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kls`, `kd_kls`, `nama_kls`) VALUES
(1, 'X 1', 'X'),
(2, 'XI 1', 'XI IPA'),
(3, 'XII 1', 'XII IPA'),
(5, 'XI 1', 'XI IPS'),
(6, 'XII 1', 'XII IPS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
`id_nilai` int(11) NOT NULL,
  `kd_tugas` varchar(11) NOT NULL,
  `kd_siswa` varchar(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `kd_tugas`, `kd_siswa`, `nilai`, `tgl`) VALUES
(1, 'T003', '9960935041', 100, '2014-10-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`id_siswa` int(11) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `id_jrsn` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=115 ;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama_siswa`, `password`, `alamat`, `id_jrsn`) VALUES
(1, '9951909839', 'Abdul Azis', 'qwerty', 'Jl. Gatot Subroto Km 3 Cimone Tangerang', 1),
(2, '9965155227', 'Ade Ariyanto', 'qwerty', 'Jl. Imam Bonjol Gg. Tunas 2 RT 03/05 Karawaci Tangerang', 1),
(3, '9965414394', 'Agit Anggadita', 'qwerty', 'Jl. Merdeka Gg. Karang Mulya Tangerang', 1),
(4, '9965414327', 'Ajeng Ayu Agustin', 'qwerty', 'Jl. Sempor II No.6 Rt 03/11 Perumnas II Tng', 1),
(5, '9961631210', 'Akbar Tito Wicaksono', 'qwerty', 'Villa Ilhami Jl. Mina V I2 No. 8 Tangerang', 1),
(6, '9952288643', 'Aldyan Rachmat Jaya', 'qwerty', 'Jl. Cendrawasih II No. 40 RT 001/12 Kel. Cibodasari Cibodas Tangerang', 1),
(7, '9952907056', 'Alfi Kurniawan', 'qwerty', 'Jl.Danau Tambingan 2/13 Perumnas III', 1),
(8, '9960933373', 'Amila Nurhaeni', 'qwerty', 'Jl. Dipati Ukur No. 49 Cibodas Tangerang', 1),
(9, '9962844504', 'Anditto Firmansyah', 'qwery', 'Jl.Sampan II B/25 Kelapa Dua Tng', 1),
(10, '996507923', 'Anisa Zaen Putri', 'qwerty', 'Jl. Babussalam RT 001/15 Tanah Tinggi', 1),
(11, '9962242335', 'Anita Kartika Nur Pratiwi', 'qwerty', 'Keroncong Permai Blok DP 6 No. 5 Jatiuwung Tng', 2),
(12, '9952421270', 'Annisa Septiana', 'qwerty', 'Jl. Kentang 3 No. 95 Perumnas I Tangerang', 2),
(13, '9962760738', 'Apri Dwi Astuti', 'qwerty', 'Jl. Danau Poso IV No. 37 Perumnas II Tangerang', 2),
(14, '9962242412', 'Ardra Adna Nugraha', 'qwerty', 'Villa Regency I NB 4/10 Tangerang', 2),
(15, '9951605007', 'Audry Adrian', 'qwerty', 'Jl. Beta I No. 26 RT 03/08 Tangerang', 2),
(16, '9950937671', 'Ayu Indah Anzelina', 'qwerty', 'Jl. Hayam Wuruk No. 9A Cibodas', 2),
(17, '9968450969', 'Ayu Intan Mardyati', 'qwerty', 'VTE Jl. Cendana 2 Blok C 5/2', 2),
(18, '9967352519', 'Bahagia Nori Utama', 'qwerty', 'Jl. Sinar Hati RT 02/05', 2),
(19, '9971447152', 'Bella Febriyanti Siringo-', 'qwerty', 'Jl. Jayakatwang 16/10', 2),
(20, '9964492523', 'Benvani Fatuh Rachman', 'qwerty', 'Medang Lestari Blok D1/1-10', 2),
(21, '9962200048', 'Bima Septian Wibisana', 'qwerty', 'Cluster Bumi Asri  blok G No. 28 Pasar Baru Tng', 2),
(22, '9960932022', 'Bintang Nurwijaya', 'qwerty', 'Jl. Rancadulang RT 01/01 Kel. Margasari Tangerang', 2),
(23, '9964573750', 'Bobbi Canara', 'qwerty', 'Jl. Pondok Arum Blok F1/14 Tangerang', 2),
(24, '9961806105', 'Cintya Rahmawati', 'qwerty', 'Kp. Kelapa RT 04/11', 2),
(25, '9952165272', 'Citra Berliani Chaniago', 'qwerty', 'Binong Permai Blok B 14 No. 1 Curug', 2),
(26, '9964426817', 'Dede Gustiana', 'qwerty', 'Kp. Anggris RT 01/003 Kel. Medang Kec. Pagedangan', 2),
(27, '9962304936', 'Dejan Riki Maulana', 'qwerty', 'Jl. Cisadane I No. 141 Perumnas I Karawaci Tangerang', 2),
(28, '9954426345', 'Deni Hidayat', 'qwerty', 'Kp. Anggris RT 04/09 Kel. Bojong Nangka Tangerang', 2),
(29, '9951909846', 'Denis Indrayana', 'qwerty', 'Jl. Untung Suropati II Rt 02/08 Tangerang', 2),
(30, '9952347633', 'Desi Eka Kurniawati', 'qwerty', 'Kp. Sangiang Jaya Rt 02/05', 2),
(31, '9952826991', 'Diah Ervina', 'qwerty', 'Kp. Dadap Rt 001/03 No. 23 Kel. Bencongan Indah', 1),
(32, '9962308233', 'Dian Lestari', 'qwerty', 'Jl. Danau Batur 3 No. 4 Perumnas II Tangerang', 1),
(33, '9964957863', 'Dio Tri Anggara', 'qwerty', 'Jl. Batu raden 3 No. 7 Perumnas Tng', 1),
(34, '9962381194', 'Diva Arshilla (A)', 'qwerty', 'Kav. Perkebunan No. 265 RT 005/001 Bencongan, Kelapa Dua Kab. Tng', 1),
(35, '9966731203', 'Doli Pandapotan Saragih', 'qwerty', 'Jl. Putri Sima V No. 5 Perumnas IV Tangerang', 1),
(36, '9962844602', 'Dwi Tri Astuti', 'qwerty', 'Jl. Cemara Raya Perumnas I Tangerang', 1),
(37, '9961580867', 'Eka Putra Pratama', 'qwerty', 'Keroncong Permai Blok EP 20/14 Jatiuwung Tangerang', 1),
(38, '9962921796', 'Elsah', 'qwerty', 'Jl. Seroja No. 48 Kavling Sukasari', 1),
(39, '9942829886', 'Erna Budiyati', 'qwerty', 'Kp. Rancadulang RT 01/02 Margasari, Karawaci', 1),
(40, '9941035206', 'Ervina', 'qwerty', 'Jl. Gembor Jatake RT 01/01 Tangerang', 1),
(41, '9953106791', 'Faisal Dhanis Relambudi', 'qwerty', 'Jl. Kantul II Blok H2 No. 25 Perum Harapan Kita Tangerang', 1),
(42, '9952907075', 'Farizh Alevi', 'qwerty', 'Kav. Perkebunan No. 265 RT 005/001 Bencongan, Kelapa Dua Kab. Tng', 1),
(43, '9963048122', 'Fathur Mozardi', 'qwerty', 'Perum Dasana Indah Blok OB 9/16', 1),
(44, '9961847291', 'Febri Riyadi Nainggolan', 'qwerty', 'Perum Pondok Arum Blok B9 No. 7 Nambo Jaya Karawaci Tng', 1),
(45, '9962242200', 'Febrian Aditya Pratama', 'qwerty', 'Keroncong Permai Blok EP 20/14 Jatiuwung Tangerang', 1),
(46, '9961606570', 'Fenny Anggraini', 'qwerty', 'Jl. Irian Jaya No. 24 Cimone Jaya Karawaci Tangerang', 1),
(47, '9952823137', 'Firman Luthfi', 'qwerty', 'Jl. Kantul II Blok H2 No. 25 Perum Harapan Kita Tangerang', 1),
(48, '9962242360', 'Fitri Sintiya', 'qwerty', 'Kp. Gebang Raya', 1),
(49, '9961806052', 'Fitriyani', 'qwerty', 'Jl. Imam Bonjol RT 04/04 Karawaci Tangerang', 1),
(50, '9960936389', 'Habibah Thardiah', 'qwerty', 'Kp. Sembung RT 06/06 Cikokol Tangerang', 1),
(51, '9960936102', 'Heru Setiawan', 'qwerty', 'Jl. Jambu RT 006/005 Buaran Indah Tangerang', 1),
(52, '9962063681', 'I Gede Yudhi Astika Wicak', 'qwerty', 'Jl. Lestari Elok IV Blok DD/ B27 RT 003/02 Medang Lestari Tangerang', 1),
(53, '9961847327', 'Indah Hedrianti', 'qwerty', 'Kebon Jati Rt 02/01 Karawaci Tangerang', 1),
(54, '9951909842', 'Indry Ardita Noviani', 'qwerty', 'Taman Buah 2 BB 2 No.9 Pakem', 1),
(55, '9961806061', 'Irfan Ramdhani', 'qwerty', 'Jl. Bandeng II / 182', 1),
(56, '9960932593', 'Irma Rahmawati', 'qwerty', 'Jl. Aryawangsakara belakang rumah sakit annisa', 1),
(57, '9968359773', 'Irnanda Firdaus', 'qwerty', 'Jl.Melati 3 B.6/27 Kotabumi Tangerang', 1),
(58, '9951162949', 'Ivan Aditia Rachman', 'qwerty', 'Jl. Jayabaya IV No. 6 Perumnas Tangerang', 1),
(59, '9963085487', 'Juni Fernando', 'qwerty', 'Jl. Anusapati III No. 12', 1),
(60, '9951909833', 'Khoerunnisa', 'qwerty', 'Jl. Palem Raya No. 5A Blok XI', 1),
(61, '9960932896', 'Kimmi Riyansyah', 'qwerty', 'Kp.Cibonas Rt 04/03', 1),
(62, '9961506691', 'Krisdayani Andrianti', 'qwerty', 'Kp. Kelapa  No. 37 RT 03/03 Cikokol Tangerang', 1),
(63, '9965155177', 'Kurniawan Triatmodjo', 'qwerty', 'Jl.danau Batur VI/13 RT 03/07', 1),
(64, '9965318489', 'Lelyanna Pakpahan', 'qwerty', 'Jl.Jayakatwang XV/22 Perumnas IV Tangerang', 1),
(65, '9958211564', 'Majaesar Rasdi', 'qwerty', 'Jl. Keroncong Permai Blok EP/32 Tng', 1),
(66, '9962308256', 'Malik Sutiawan', 'qwerty', 'Jl.Bayam I No. 102 RT 03/14 Perumnas I Tng', 1),
(67, '9964354180', 'Mangarimpun Banjar Nahor', 'qwerty', 'Sari Bumi Indah Blok B3 No. 14', 1),
(68, '9962063643', 'Mardiyansyah Agam Tiar', 'qwerty', 'Jl.Ciindah III/69 Perum I tng', 1),
(69, '9953088605', 'Marsha Yusup', 'qwerty', 'Total Persada Raya Jl. Bintan Blok B6/23', 1),
(70, '9952389753', 'Martin Alexander Panggabe', 'qwerty', 'Jl. Bayang IV Blok No. 32 Kelapa Dua Tangerang', 1),
(71, '9962288429', 'Maya', 'qwerty', 'Jl. Danau Agung Regensi II VG.7 No. 16 Tangerang', 1),
(72, '9953101616', 'Mela Wahyuni', 'qwerty', 'Jl. Empu Barada 3', 1),
(73, '9956656071', 'Mey Sapta Putra Kusuma Da', 'qwerty', 'Komplek Gajah Tunggal', 2),
(74, '9963009688', 'Mochammad Aria Nugroho', 'qwerty', 'Komp. Kehakiman Jl. Eksekusi III/10 RT 01/13 Kel. Sukasari Tng', 2),
(75, '9971689441', 'Muhammad Akbar Rizaldi', 'qwerty', 'Binong Permai Blok BB 10 No. 4 Tangerang', 2),
(76, '9951605057', 'Muhammad Eko Septiadi', 'qwerty', 'Pabuaran Cimone Jaya RT 05/08 Karawaci Tangerang', 2),
(77, '9961488669', 'Muhammad Luthfi Harisin', 'qwerty', 'Jl. Taman Teratai V No. 5 RT 004/04', 2),
(78, '9962308113', 'Muhammad Reza', 'qwerty', 'Jl. Kano I No. 16 Perumnas Kelapa Dua Tangerang', 2),
(79, '9960934869', 'Muhammad Ripki', 'qwerty', 'Jl. Untung Suropati II RT 005/07 Cimone Tangerang', 2),
(80, '9965995409', 'Noor Putri Yuniyanti', 'qwerty', 'Jl. Maulana Yusuf Gg. Beringin VI No. 54 RT 02/05', 2),
(81, '9951949886', 'Noval Mahardika', 'qwerty', 'Ranca Dulang RT 003/002 Kel. Margasari Tng', 2),
(82, '9960935041', 'Novita Astriani', 'qwerty', 'Jl. Untung Suropati II RT 04/08', 2),
(83, '9962760750', 'Nurrafil', 'qwerty', 'Binong Permai Blok G18/19', 2),
(84, '9952389805', 'Nurul Hilda Ayutina', 'qwerty', 'Jl. Danau Poso IV No. 62', 2),
(85, '9965287625', 'Oktorisma Butet Silitonga', 'qwerty', 'Jl. Raden Fatah II No. 17 RT 07/08', 2),
(86, '9963765163', 'Prastyo Nurcahyo', 'qwerty', 'Jl.Sukabakti RT 01/09 Curug Tangerang', 2),
(87, '9962162472', 'Putri Apriliani', 'qwerty', '', 2),
(88, '9962844477', 'Putri Fatimah', 'qwerty', 'Jl. Komodo Raya No. 11 RT 06/09', 2),
(89, '9964244285', 'Rafri Aditya Ramadhan', 'qwerty', 'Jl.Kakap VIII No. 101 Perumnas I Tangerang', 2),
(90, '9961885744', 'Ragu Waren', 'qwerty', 'Jl. Dipati Unus RT 04/006', 2),
(91, '9951523345', 'Rahayu Saraswati', 'qwerty', 'Griya Sangiang Mas Blok A No. 09', 2),
(92, '9950668646', 'Rahmat Fernando', 'qwerty', '', 2),
(93, '9964654194', 'Ranita Anastasia Simanjun', 'qwerty', 'Jl. Jayanegara IV No. 12 Perumnas IV Tangerang', 2),
(94, '9952408688', 'Reno Egi Maulana', 'qwerty', 'Jl. Anusapati III No. 12', 2),
(95, '9956399344', 'Rizki Gumilar', 'qwerty', 'Perum Pondok Arum Nambo Jaya RT 03/05 Karawaci Tangerang', 2),
(96, '9951124018', 'Rizky Fajriyani S.', 'qwerty', 'Kp.Baru RT 01/04 No. 29 Kel. Nusa Jaya Tangerang', 2),
(97, '9960935135', 'Rubby Muhammad Fadil', 'qwerty', '', 2),
(98, '9951909838', 'Rubby Oktaviani', 'qwerty', 'Jl.Samiaji 1 No. 63 Kav. Agraria Tangerang', 2),
(99, '9953141766', 'Rusmanco Nainggolan', 'qwerty', 'Kp. Dumpit Gandasari RT 03/05', 2),
(100, '9968453038', 'Sandrio Rosandi', 'qwerty', 'Dasana Indah Blok UA 6 No. 14', 2),
(101, '9964492575', 'Santi Lestari', 'qwerty', 'Perum Medang Lestari', 2),
(102, '9950934446', 'Siti Khodijah', 'qwerty', 'Jl. Untung Suropati II No. 6 RT 01/08', 2),
(103, '9951607029', 'Somadi Tamam', 'qwerty', 'Kp.Pabuaran RT 02/08 Kel.Cimone Jaya', 2),
(104, '9963085489', 'Soni Hasudungan Tobing', 'qwerty', 'Jl. Kalingga II No. 3 Perumnas III Tangerang', 2),
(105, '9962844312', 'Sri Dwi Pujiastuti', 'qwerty', 'Jl. Asahan VI No. 20 RT 03/15 Perumnas II Tng', 2),
(106, '9962267100', 'Sulis Tyorinni', 'qwerty', 'Kp.Sembung RT 06/06', 2),
(107, '9962063661', 'Tegar Zohari', 'qwerty', 'Jl. Bambu I No. 17 RT 01/017', 2),
(108, '9965097092', 'Titi Fitriyani', 'qwerty', 'Jl.Merdeka Pabuaran Sibang Gg.Beringin RT 03/01 Karawaci Tng', 2),
(109, '9940748927', 'Vany Havanda', 'qwerty', 'Jl.Zeta VIII No. 306 Cimone Permai Tng', 2),
(110, '9962347096', 'Weni Agustiani', 'qwerty', 'Perum Prabu Siliwangi Blok C No. 1', 2),
(111, '9952442905', 'Widya Wulansari', 'qwerty', 'Perum Keroncong Permai Blok DP 2No. 7 RT 08/03  Tng', 2),
(112, '9961701202', 'Widyanti Handayani', 'qwerty', 'Perumahan Dasana Indah UB 4/01', 2),
(113, '9968155509', 'Wina Indriyana', 'qwerty', 'Jl. Karya Warga RT 02/01', 2),
(114, '9962242187', 'Yeti Yuningsih', 'qwerty', 'Kp.Gebang Raya RT 06/02 Kec. Periuk Tng', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
`id_tugas` int(11) NOT NULL,
  `id_jdwl` int(11) NOT NULL,
  `kd_tugas` varchar(10) NOT NULL,
  `deskripsi` varchar(25) NOT NULL,
  `jenis` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `file` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `id_jdwl`, `kd_tugas`, `deskripsi`, `jenis`, `tgl_mulai`, `tgl_akhir`, `file`, `keterangan`) VALUES
(1, 1, 'T001', 'Perhitungan Logika', 1, '2014-10-05', '2014-10-22', 'latihan_soal-ub2_kelas-xii_fisika.pdf', 'Kerjakan Dengan Benar'),
(2, 2, 'T002', 'Ketelitian', 1, '2014-10-06', '2014-10-21', 'SMA BAHASA INDONESIA IPA IPS Paket 04.pdf', 'Segera Kerjakan'),
(3, 5, 'T003', 'Grammer', 1, '2014-10-17', '2014-10-31', 'B.Inggris.pdf', 'Focus and Focus Just  1 - 20 ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas_detail`
--

CREATE TABLE IF NOT EXISTS `tugas_detail` (
`id_detail` int(11) NOT NULL,
  `id_jdwl` int(11) NOT NULL,
  `kd_tugas` varchar(10) NOT NULL,
  `tugas` varchar(50) NOT NULL,
  `jwbn` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data untuk tabel `tugas_detail`
--

INSERT INTO `tugas_detail` (`id_detail`, `id_jdwl`, `kd_tugas`, `tugas`, `jwbn`) VALUES
(1, 2, 'T002', '', 'A'),
(2, 2, 'T002', '', 'B'),
(3, 2, 'T002', '', 'B'),
(4, 2, 'T002', '', 'A'),
(5, 2, 'T002', '', 'D'),
(6, 1, 'T001', '', 'A'),
(7, 1, 'T001', '', 'B'),
(8, 1, 'T001', '', 'E'),
(9, 1, 'T001', '', 'C'),
(10, 1, 'T001', '', 'B'),
(11, 5, 'T003', '', 'A'),
(12, 5, 'T003', '', 'B'),
(13, 5, 'T003', '', 'A'),
(14, 5, 'T003', '', 'C'),
(15, 5, 'T003', '', 'C'),
(16, 5, 'T003', '', 'D'),
(17, 5, 'T003', '', 'E'),
(18, 5, 'T003', '', 'B'),
(19, 5, 'T003', '', 'C'),
(20, 5, 'T003', '', 'A'),
(21, 5, 'T003', '', 'B'),
(22, 5, 'T003', '', 'C'),
(23, 5, 'T003', '', 'D'),
(24, 5, 'T003', '', 'A'),
(25, 5, 'T003', '', 'C'),
(26, 5, 'T003', '', 'B'),
(27, 5, 'T003', '', 'B'),
(28, 5, 'T003', '', 'A'),
(29, 5, 'T003', '', 'D'),
(30, 5, 'T003', '', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
 ADD PRIMARY KEY (`id_infrm`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`id_jdwl`);

--
-- Indexes for table `jadwal_detail`
--
ALTER TABLE `jadwal_detail`
 ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
 ADD PRIMARY KEY (`id_jwbn`);

--
-- Indexes for table `jawaban_detail`
--
ALTER TABLE `jawaban_detail`
 ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`id_jrsn`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id_kls`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`id_siswa`), ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
 ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `tugas_detail`
--
ALTER TABLE `tugas_detail`
 ADD PRIMARY KEY (`id_detail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
MODIFY `id_infrm` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
MODIFY `id_jdwl` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `jadwal_detail`
--
ALTER TABLE `jadwal_detail`
MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=839;
--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
MODIFY `id_jwbn` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jawaban_detail`
--
ALTER TABLE `jawaban_detail`
MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
MODIFY `id_jrsn` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `id_kls` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tugas_detail`
--
ALTER TABLE `tugas_detail`
MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
