-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql112.byetcluster.com
-- Generation Time: Jan 12, 2018 at 11:54 PM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b13_20385892_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `atm`
--

CREATE TABLE IF NOT EXISTS `atm` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `cash` int(5) unsigned NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `atm`
--

INSERT INTO `atm` (`id`, `lname`, `fname`, `gender`, `cash`, `password`) VALUES
(1, 'Sanchez', 'Fretzel', 'F', 700, '1234'),
(2, 'Sanchez', 'Fretz', 'f', 0, '1234'),
(3, 'Mag-usara', 'June', 'm', 0, 'june'),
(4, 'Bing', 'Chandler', 'm', 0, '1234'),
(5, 'Victoria', 'Vicky', 'f', 0, 'vicky'),
(6, 'Victoria', 'Vicky', 'f', 0, 'vicky'),
(7, 'Rachel', '', 'F', 0, ''),
(8, 'Stormborn', 'Daenerys', 'F', 0, 'dan'),
(9, 'Snow', 'Jon', '', 0, 'jon'),
(25, 'Bing', 'Chandler', 'm', 1000, '1234'),
(11, 'sanchez', 'fretzel', 'f', 0, 'fretzel'),
(12, 'sanchez', 'fretzel', 'f', 0, '111'),
(13, 'chiboy', 'bibi', 'm', 0, '111'),
(14, 'sanchez', 'fretzel', 'f', 0, '111'),
(15, 'magusara', 'june', 'm', 0, 'june'),
(16, 'ch', 'ch', 'm', 0, 'ch'),
(17, 'sanchez', 'fretzel', 'f', 0, '1234'),
(18, 'chandler ', 'bing', 'm', 0, 'chandler'),
(19, 'sanchez', 'fretzel', 'f', 0, 'fretzel'),
(20, 'Laylo', 'Luke', 'm', 0, 'luke'),
(21, 'm', '123', 'm', 0, '1234'),
(22, 'gfhfgh', 'fhfghg', 'm', 0, '1'),
(23, 'test', 'test', 'm', 0, '12345'),
(24, 'Gwapo', 'June Ray', 'm', 0, 'june');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `number` char(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `number`, `email`) VALUES
(1, 'Fretzel Sanchez', '09339897087', 'sanchezfretzel@yahoo.com'),
(2, 'June', '09255018949', 'eight.12.1996@outlook.com'),
(3, 'Lizette Marie Raganas', '12345678912', 'rlizettemarie@gmail.com'),
(4, 'Roy Regala', '987654321', 'roynregala@gmail.com'),
(5, 'sanchez fret', '12345', 'sanchezfretzel@yahoo.com'),
(7, 'chandler', '0000', 'changler@chand.com'),
(9, 'chandler bing', '092222223', 'chandler@email.com'),
(10, 'blabla', '09232323', 'dafe@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
