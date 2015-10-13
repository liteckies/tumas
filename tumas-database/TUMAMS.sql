-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2015 at 12:34 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `TUMAMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `tumas_admin`
--

CREATE TABLE IF NOT EXISTS `tumas_admin` (
  `id` int(23) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `loginID` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tumas_admin`
--

INSERT INTO `tumas_admin` (`id`, `username`, `password`) VALUES
(1, 'brian', 'brian'),
(2, 'alex', 'alex'),
(3, 'maxy', 'maxy'),
(4, 'kamau', 'kamau'),
(5, 'agie', 'agie'),
(6, 'Cynthia', 'Cynthia'),
(10, 'simon', 'simon'),
(11, 'Katula', 'katula'),
(14, 'Katiwa', 'Katiwa'),
(15, 'kitonga', 'kitonga'),
(16, 'Sarah', 'sarah'),
(17, 'mary', 'mary'),
(18, 'fiona', 'fiona'),
(19, 'Kanini', 'kanini'),
(20, 'kelvin', 'kelvin');

-- --------------------------------------------------------

--
-- Table structure for table `tumas_associates`
--

CREATE TABLE IF NOT EXISTS `tumas_associates` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `reg_number` varchar(20) NOT NULL,
  `year_completed` int(4) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `ministry` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reg_number` (`reg_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `tumas_associates`
--

INSERT INTO `tumas_associates` (`id`, `fname`, `sname`, `reg_number`, `year_completed`, `phone_number`, `ministry`) VALUES
(7, 'Kitoo', 'Maithya', 'BSIT/018J/2019', 2009, 2147483647, 'Praise'),
(8, 'Maximilla', 'Namalwa', 'BSIT/013k/2012', 2003, 716789678, 'Praise and worship'),
(9, 'Berean ', 'Bet', 'BSIT/018J/2012', 2006, 716789678, 'Intercessory'),
(10, 'Brian', 'Maithya', 'DBBD/345J/2345', 2009, 718529890, 'Catering'),
(11, 'Ken', 'Ndururi', 'BEEE/0234J/2105', 2015, 718529890, 'Choir'),
(12, 'Naomi', 'Wangare', 'BSIT/068J/2019', 2003, 716789678, 'Creative'),
(13, 'Mary', 'Wangare', 'BSIT/018J/2010', 2015, 718529677, 'Catering'),
(14, 'Ken', 'ndururi', 'BTIT/123J/2025', 2015, 727890987, 'praise and worship'),
(15, 'Sarah', 'Wanjiku', 'BBA/124J/2015', 2015, 716789678, 'Catering'),
(16, 'Schola', 'Musengya', 'BEME/0123j/2012', 2013, 718529890, 'Creative'),
(17, 'Ben', 'Ndungha', 'BSIT/018J/2018', 2007, 718529890, 'Choir'),
(18, 'schola', 'musengya', 'BSIT/018J/2015', 2016, 718529677, 'crea'),
(19, 'Brian', 'Kitoo', 'BSIT/018J/2090', 2006, 718529890, 'Creative'),
(20, 'Naomi', 'Wangare', 'BBA/234J/2015', 2008, 716789678, 'Choir'),
(21, 'Berean', 'Bett', 'DMAC/0158/2013', 2015, 721158542, 'Library'),
(22, 'James', 'Bundi', 'BDCD/234J/2012', 2017, 727890987, 'Choir'),
(23, 'Ndururi', 'Ken', 'BBA/345/234', 2049, 718529677, 'Hospital'),
(24, 'Peter', 'Kimeu', 'DDC/123J/4534', 2007, 712675243, 'None'),
(25, 'Jodge', 'Kamau', 'BBA/234J/1234', 2004, 716789678, 'Catering'),
(26, 'Kimotho', 'Mutinda', 'BBBA/234J/2012', 2045, 723987567, 'Creative'),
(27, 'Kinyua', 'Paul', 'DMEN/0044/2013', 2015, 704749565, 'Creative'),
(28, 'Agnes', 'Njeru', 'BBA/2345/2015', 2913, 73333, 'Praise and worship'),
(30, 'Cynthia', 'Maingi', 'BSEE/096/2012', 2016, 727890987, 'Intercesory'),
(31, 'Charity', 'Ngare', 'DAAC/0123/2034', 2017, 718529890, 'Creative ministry'),
(32, 'Kalunde', 'Mwaka', 'BSII/334/343', 2015, 727890987, 'Wasnt in any ministry'),
(33, 'Ken', 'Ndururi', 'BTIT/345J/1234', 20187, 718529677, 'Praise and worship'),
(34, 'brian', 'Kavesa', 'DCAC/098/345', 33443, 718529677, 'catering'),
(35, 'kelvin', 'katua', 'BSIT/016K/2014', 2017, 727890987, 'N/A'),
(36, 'Stephen', 'Kitoo', 'BSIT/018i/2078', 2023, 727890987, 'Hospital'),
(37, 'Simon', 'Mugetha', 'BTIT/007J/2012', 2015, 714933138, 'Praise and worship'),
(38, 'robert', 'nyerere', 'BSCE/041J/2012', 2017, 713148653, 'CHOIR'),
(39, 'Geoffrey', 'Munyaka', 'BTIT/022J/2012', 2015, 701842081, 'Hospital'),
(40, 'jojn', 'Mwichiri', 'BSIT/567L/2012', 2016, 2147483647, 'Creative'),
(41, 'paul', 'ndungu', 'BTIT/060j/2012', 2016, 712345670, 'Praise and worship'),
(42, 'Kilonzo', 'Muema', 'BSIU/HGJ/W345', 2017, 70223465, 'N/a'),
(43, 'Kizito', 'Sudi', 'BEBC/032J/2012', 2019, 718529677, 'Intercesory'),
(44, 'Kitoo', 'Maithaya', 'BBZ/EE/444', 2012, 727890987, 'Praise and worship'),
(45, 'Kitoo', 'Maithya', 'BBBB/DHGG/ETT', 2016, 2147483647, 'Hospital'),
(46, 'David', 'Muiruri', 'BBB/YYUU/123', 2017, 2147483647, 'Praise and worship'),
(47, 'Kimotho', 'Kimolo', 'BBA/018J/2012', 2019, 712568965, 'Hospital'),
(48, 'Lyne', 'Machayo', 'BSIT/444J/GHTJ', 2015, 721158542, 'Intecessory'),
(49, 'james', 'bundi', 'BEEE/057J/2012', 2017, 707047790, 'Praise and worship');

-- --------------------------------------------------------

--
-- Table structure for table `tumas_members`
--

CREATE TABLE IF NOT EXISTS `tumas_members` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  UNIQUE KEY `user_name` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tumas_members`
--

INSERT INTO `tumas_members` (`username`, `email`, `password`) VALUES
('Anjela', 'Maithya@gmail.com', 'briaN'),
('brian', 'brianmaithya@gmail.com', 'brian'),
('Davy', 'davi@gmail.com', 'davy'),
('Kambua', 'Kambua@gmaol.com', 'kambua'),
('Kaveke', 'Ruth@gmail.com', 'ruth'),
('Kimanzi', 'kim@gmail.com', 'erick'),
('Kimotho', 'Kimotho@gmail.com', 'kimotho'),
('Kitoo', 'kim@gmail.com', 'kitoo'),
('lyne', 'lyne@gmail.com', 'lyn'),
('Naomi', 'naomiwangare@gmail.com', 'Naomi'),
('ndururi', 'ndururiken@yahoo.com', 'ken'),
('Simon', 'simon@gmail.com', 'simon'),
('Stephen', 'kitoo@gmail.com', 'kitoo'),
('sudi', 'kizitosudi97@gmail.com', 'sudi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
