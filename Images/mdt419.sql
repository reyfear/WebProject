-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 08:09 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdt419`
--

-- --------------------------------------------------------

--
-- Table structure for table `lkuserdb`
--

CREATE TABLE `lkuserdb` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lkuserdb`
--

INSERT INTO `lkuserdb` (`id`, `email`, `password`, `address`, `telephone`, `name`) VALUES
(1, 'test@testmail.com', 'test', 'test', '00000000', 'test example'),
(2, 'divinetrees@gmail.com', '1122', 'sfsfs', 'fsfs', 'sf dsfsf');

-- --------------------------------------------------------

--
-- Table structure for table `myfriends`
--

CREATE TABLE `myfriends` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myfriends`
--

INSERT INTO `myfriends` (`id`, `name`, `email`, `reg_date`) VALUES
(1, 'Jirashy', 'divinetrees@gmail.com', '2018-04-27 07:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`id`, `username`, `password`, `email`, `img`) VALUES
(1, 'test', '1234', 'divinetrees@gmail.com', '10492071_789273474445308_6396722385328321542_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lkuserdb`
--
ALTER TABLE `lkuserdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myfriends`
--
ALTER TABLE `myfriends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdb`
--
ALTER TABLE `userdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lkuserdb`
--
ALTER TABLE `lkuserdb`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `myfriends`
--
ALTER TABLE `myfriends`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userdb`
--
ALTER TABLE `userdb`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
