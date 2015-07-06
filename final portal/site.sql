-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2015 at 12:39 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`id` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `isbn` varchar(30) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `bdescription` varchar(200) NOT NULL,
  `bauthors` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `isbn`, `publisher`, `year`, `bdescription`, `bauthors`) VALUES
(7, 'joker10', 'joker10', 'joker10', 1995, 'joker10', 'joker10'),
(8, 'last test', 'last test', 'last test', 1995, 'last test', 'last test'),
(9, 'lalalala', '4544aaa', 'jajhjah', 1991, 'lalalala', 'lalalala'),
(10, 'okokokok', 'okok6454', 'okokokok', 1990, 'okokokoa', 'okokok'),
(11, 'okokokoo', 'ooooo', 'ookoko', 1987, 'okokoooooo', 'okokooooo'),
(12, 'amit', '12416516', 'dasdasd', 0000, 'asdasdasf', 'asdas');

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE IF NOT EXISTS `conference` (
`id` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cdate` date NOT NULL,
  `cdescription` varchar(200) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `ctype` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference`
--

INSERT INTO `conference` (`id`, `cname`, `cdate`, `cdescription`, `venue`, `ctype`) VALUES
(1, 'testing', '2015-07-01', 'testing', 'testing', 'international'),
(2, 'testing', '2015-07-01', 'testing', 'testing', 'international'),
(3, 'batman', '2015-07-08', 'batman', 'batman', 'international'),
(4, 'last test', '2015-07-01', 'last test', 'last test', 'international'),
(5, 'amiat', '1994-08-11', 'dasdasd', 'dasfasd', 'international');

-- --------------------------------------------------------

--
-- Table structure for table `fac`
--

CREATE TABLE IF NOT EXISTS `fac` (
  `name` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac`
--

INSERT INTO `fac` (`name`, `dob`, `email`) VALUES
('amit', '1994-08-11', 'mit@vit.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE IF NOT EXISTS `journal` (
`id` bigint(20) unsigned NOT NULL,
  `papername` varchar(30) NOT NULL,
  `jname` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `jtype` varchar(20) NOT NULL,
  `description` varchar(150) NOT NULL,
  `coauthors` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `papername`, `jname`, `date`, `jtype`, `description`, `coauthors`) VALUES
(8, 'testing123', 'testing123', '2015-07-01', 'national', 'testing123', 'testing123'),
(9, '', '', '0000-00-00', '', '', ''),
(10, '', '', '0000-00-00', '', '', ''),
(11, 'test007', 'test007', '2015-07-01', 'international', 'test007', 'test007'),
(12, 'last test', 'last test', '2015-07-01', 'international', 'last test', 'last trst'),
(13, 'amit', 'adasdsadsadasd', '9494-08-19', 'international', 'asdmaskdmaskdnaskd', 'dsaddasd'),
(14, 'assad', 'dadsa', '1994-08-11', 'national', 'asdd', 'sd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
 ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `conference`
--
ALTER TABLE `conference`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
