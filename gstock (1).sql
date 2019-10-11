-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 05:38 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gstock`
--

-- --------------------------------------------------------

--
-- Table structure for table `logtable`
--

CREATE TABLE `logtable` (
  `user` varchar(999) NOT NULL,
  `action` varchar(999) NOT NULL,
  `product` varchar(999) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `Ref` varchar(999) NOT NULL,
  `Router` varchar(999) NOT NULL,
  `Mod` varchar(999) NOT NULL,
  `Carte` varchar(999) NOT NULL,
  `DateC` date NOT NULL,
  `Com` varchar(999) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`Ref`, `Router`, `Mod`, `Carte`, `DateC`, `Com`) VALUES
('jhgjg', 'routeur 2', 'ghjghj', 'ghjghj', '2019-01-28', 'gjhj'),
('dfg', 'dfg', 'dfgg', 'gdfg', '2019-01-28', 'gdfg'),
('fghfgh', 'fgh', '', '', '2019-01-28', ''),
('b', 'a', '', '', '2019-01-20', ''),
('aa', 'dsfs', 'dsf', 'dsf', '2019-01-25', 'fdsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logtable`
--
ALTER TABLE `logtable`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Ref`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
