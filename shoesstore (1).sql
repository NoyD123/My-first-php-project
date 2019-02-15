-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2018 at 03:54 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoesstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `serial` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`serial`, `description`) VALUES
('1', '25% off Adidas coat'),
('2', '15% off Adidas shoe'),
('3', '5% off all newBalanc'),
('4', '1+1 of w hats');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `id` int(11) NOT NULL,
  `model` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `model`, `price`) VALUES
(1, 'adidas', 450),
(2, 'nick', 300),
(3, 'w', 200),
(4, 'allstar', 320);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `store_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `store_name`) VALUES
(1, 'adidas'),
(2, 'nick'),
(3, 'w'),
(4, 'allstar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
