-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 08:37 AM
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
-- Table structure for table `cartes`
--

CREATE TABLE `cartes` (
  `id` varchar(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartes`
--

INSERT INTO `cartes` (`id`) VALUES
('carte2'),
('sdq');

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

--
-- Dumping data for table `logtable`
--

INSERT INTO `logtable` (`user`, `action`, `product`, `time`) VALUES
('Admin', 'added', 'utyuiyth', '2019-02-03 12:54:19'),
('Admin', 'deleted', 'utyuiyth', '2019-02-03 12:35:10'),
('Admin', 'added', 'jhkjhk', '2019-02-03 11:29:03'),
('Admin', 'deleted', '', '2019-02-03 11:28:36'),
('Admin', 'added', '', '2019-02-03 11:28:23'),
('Admin', 'deleted', '', '2019-02-03 11:28:19'),
('Admin', 'added', '', '2019-02-03 11:28:14'),
('Admin', 'deleted', '', '2019-02-03 11:28:03'),
('Admin', 'added', '', '2019-02-03 11:28:02'),
('Admin', 'deleted', 'gfh', '2019-02-03 11:27:58'),
('Admin', 'added', 'gfh', '2019-02-03 11:27:51'),
('Admin', 'deleted', 'h', '2019-02-03 11:27:28'),
('Admin', 'deleted', 'dfgdfg', '2019-02-03 11:26:47'),
('Admin', 'added', 'dfgdfg', '2019-02-03 11:26:43'),
('Admin', 'added', 'h', '2019-02-03 11:26:28'),
('Admin', 'added', 'sdq', '2019-02-03 11:18:20'),
('Admin', 'deleted', 'utyuiyth hgjgh hgjgh', '2019-02-03 11:18:10'),
('Admin', 'deleted', 'utyuiyth hgjgh hgjgh fdsg fdg', '2019-02-03 11:17:58'),
('Admin', 'deleted', 'utyuiyth hgjgh hgjgh fdsg', '2019-02-03 11:17:54'),
('Admin', 'deleted', 'carte2', '2019-02-03 11:17:32'),
('Admin', 'deleted', 'jkhjk', '2019-02-03 11:17:29'),
('Admin', 'deleted', 'jhkhjk', '2019-02-03 11:17:26'),
('Admin', 'deleted', 'utyuiyth hgjgh', '2019-02-03 11:17:20'),
('Admin', 'added', 'utyuiyth hgjgh hgjgh fdsg fdg', '2019-02-03 11:01:24'),
('Admin', 'added', 'utyuiyth hgjgh hgjgh fdsg', '2019-02-03 11:01:19'),
('Admin', 'deleted', 'utyuiyt', '2019-02-03 12:54:30'),
('Admin', 'added', 'hjkhjk', '2019-02-03 23:22:38'),
('Admin', 'added', 'carte2', '2019-02-03 23:33:15'),
('Admin', 'added', 'jhkjhkjhk', '2019-02-03 23:44:29'),
('Admin', 'deleted', 'jhkjhkjhk', '2019-02-04 04:24:42'),
('Admin', 'added', 'fdhgfh', '2019-02-04 06:35:28'),
('Admin', 'added', 'Rouer1', '2019-02-04 07:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`) VALUES
('fdhgfh');

-- --------------------------------------------------------

--
-- Table structure for table `routers`
--

CREATE TABLE `routers` (
  `id` varchar(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routers`
--

INSERT INTO `routers` (`id`) VALUES
('hjkhjk'),
('Rouer1');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `numc` varchar(999) NOT NULL,
  `client` varchar(999) NOT NULL,
  `Ref` varchar(999) NOT NULL,
  `type` varchar(999) NOT NULL,
  `Router` varchar(999) NOT NULL,
  `Mod1` varchar(999) DEFAULT NULL,
  `Mod2` varchar(999) DEFAULT NULL,
  `Mod3` varchar(999) DEFAULT NULL,
  `Carte1` varchar(999) DEFAULT NULL,
  `Carte2` varchar(999) DEFAULT NULL,
  `Carte3` varchar(999) DEFAULT NULL,
  `DateC` date NOT NULL,
  `Com` varchar(999) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`numc`, `client`, `Ref`, `type`, `Router`, `Mod1`, `Mod2`, `Mod3`, `Carte1`, `Carte2`, `Carte3`, `DateC`, `Com`) VALUES
('jhgj', 'hgfjfg', 'jhgfjhfgj', 'jhkjhk', '', 'fdhgfh', 'fdhgfh', 'fdhgfh', 'carte2', 'sdq', 'carte2', '2019-02-04', 'jkljkljkl'),
('jhklhjl', 'khjljhkl', 'jkhljhkl', 'jhkjhk', 'hjkhjk', 'fdhgfh', 'fdhgfh', 'fdhgfh', 'sdq', 'sdq', 'sdq', '2019-02-04', 'jkljkljkl'),
('gfhfg', 'gfhfg', 'hgfhfghfg', 'jhkjhk', '', 'fdhgfh', 'fdhgfh', 'fdhgfh', 'carte2', 'sdq', 'carte2', '2019-02-04', 'jkljkljkl'),
('hgjghj', 'ghjghj', 'ghjghj', 'jhkjhk', '', 'fdhgfh', 'fdhgfh', 'fdhgfh', 'carte2', 'sdq', 'carte2', '2019-02-04', 'jkljkljkl'),
('', '', '', 'jhkjhk', '', 'fdhgfh', 'fdhgfh', 'fdhgfh', 'carte2', 'carte2', 'sdq', '2019-02-04', 'ffffffffffffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` varchar(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`) VALUES
('jhkjhk'),
('utyuiyth'),
('vnvbn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartes`
--
ALTER TABLE `cartes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logtable`
--
ALTER TABLE `logtable`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routers`
--
ALTER TABLE `routers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`numc`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
