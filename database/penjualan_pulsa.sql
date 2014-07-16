-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 13, 2014 at 08:47 PM
-- Server version: 5.5.37
-- PHP Version: 5.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penjualan_pulsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `jk`, `alamat`, `no_hp`) VALUES
(1, 'sopyan', 'Pria', 'praya', 9876543);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `jumlah` varchar(255) NOT NULL,
  `no_tujuan` bigint(20) NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `jumlah`, `no_tujuan`, `tgl`) VALUES
(2, 'Rp. 24.0000', 9876543, '2014-06-06'),
(3, 'Rp. 24.0000', 9876543, '2014-06-06'),
(4, 'Rp. 24.0000', 12345678897654, '2014-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(3, 'faskdfjads', 'aksdfadsjkf', 'sopyan@gmail.com'),
(4, 'faskdfjads', 'lklkj', 'admin@admin.com'),
(5, 'jemisdsds', ',.m;l', 'jemiq@gmail.com'),
(6, 'jemiq', 'lkm;l', 'admin@gmail.com'),
(8, 'jemiq', 'klm;lkj', 'admin@gmail.com'),
(9, 'jemiq', 'kjhljhk', 'jemiq@gmail.com'),
(10, 'faskdfjads', 'm,l', 'sopyan@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
