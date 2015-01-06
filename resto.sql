-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2014 at 04:37 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restoa1312033`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_bayar`
--

CREATE TABLE IF NOT EXISTS `tabel_bayar` (
  `id_bayar` int(5) NOT NULL AUTO_INCREMENT,
  `nama_makanan` varchar(32) NOT NULL,
  `harga_makanan` int(10) NOT NULL,
  `jumlah_porsi` int(5) NOT NULL,
  `total_bayar` int(10) NOT NULL,
  PRIMARY KEY (`id_bayar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tabel_bayar`
--

INSERT INTO `tabel_bayar` (`id_bayar`, `nama_makanan`, `harga_makanan`, `jumlah_porsi`, `total_bayar`) VALUES
(1, '0', 0, 0, 0),
(2, '0', 0, 0, 0),
(3, '0', 0, 0, 0),
(4, '0', 0, 0, 0),
(5, '0', 0, 0, 0),
(6, '0', 0, 0, 0),
(7, '0', 0, 0, 0),
(8, '0', 0, 0, 0),
(9, '0', 0, 0, 0),
(10, '0', 0, 0, 0),
(11, '0', 0, 0, 0),
(12, '0', 0, 0, 0),
(13, '0', 0, 0, 0),
(14, '0', 0, 0, 0),
(15, '0', 0, 0, 0),
(16, '0', 0, 0, 0),
(17, '0', 0, 0, 0),
(18, '0', 0, 0, 0),
(19, '0', 0, 0, 0),
(20, '0', 0, 0, 0),
(21, '0', 0, 0, 0),
(22, '0', 0, 0, 0),
(23, '0', 0, 0, 0),
(24, '0', 0, 0, 0),
(25, '0', 0, 0, 0),
(26, '0', 0, 0, 0),
(27, '0', 0, 0, 0),
(28, '0', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_makanan`
--

CREATE TABLE IF NOT EXISTS `tabel_makanan` (
  `id_makanan` int(2) NOT NULL AUTO_INCREMENT,
  `nama_makanan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_makanan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tabel_makanan`
--

INSERT INTO `tabel_makanan` (`id_makanan`, `nama_makanan`) VALUES
(38, 'nasi'),
(37, 'caramel'),
(36, 'bolu'),
(35, 'enak'),
(34, 'asa'),
(33, 'sayur'),
(32, 'bjbk'),
(31, 'bhb'),
(30, 'hvkj'),
(29, 'vjhvjvhj'),
(28, 'uhhj'),
(27, 'hkbk'),
(26, 'jjj');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
