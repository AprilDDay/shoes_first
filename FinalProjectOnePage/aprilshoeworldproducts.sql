-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 12:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aprilshoeworldproducts`
--
CREATE DATABASE IF NOT EXISTS `aprilshoeworldproducts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aprilshoeworldproducts`;

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `PID` int(11) NOT NULL,
  `Shoe Name` char(100) NOT NULL,
  `Description` char(200) NOT NULL,
  `Price` decimal(65,0) NOT NULL,
  `Size` decimal(65,0) NOT NULL,
  `Availability` tinyint(1) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`PID`, `Shoe Name`, `Description`, `Price`, `Size`, `Availability`, `Image`) VALUES
(1, 'Brown shoe', 'flat loafer', '75', '4', 1, 'https://i.postimg.cc/ydBqN15f/brown-Shoe.jpg'),
(2, 'Silver Shoe', 'silver snake design comfort flat', '65', '6', 1, 'https://i.postimg.cc/ZK0qmH6W/20190514-103429.jpg'),
(3, 'Green Shoe', 'Snake print flat loafer', '80', '5', 1, 'https://i.postimg.cc/5trVnSQz/green-Shoe.jpg'),
(4, 'Sandal', 'Silver sandal with 1 inch wedge heel', '70', '6', 1, 'https://i.postimg.cc/pLTzgKLC/silver-Sandal.jpg'),
(5, 'Yellow Shoe', 'Yellow open-toe 3 inch heels', '80', '6', 1, 'https://i.postimg.cc/QNT6zGyC/yellow-Shoe.jpg'),
(6, 'Red Shoe', 'red loafer - flat', '90', '6', 1, 'https://i.postimg.cc/Kvd2d01Z/redShoe.jpg'),
(7, 'Pink Shoe', 'Mary Jane 2.5 inch heel', '50', '4', 1, 'https://i.postimg.cc/bYZXNBFf/pinkShoe.jpg'),
(8, 'Glitter Shoe', 'Puma sneaker', '55', '7', 1, 'https://i.postimg.cc/8zq44FP5/20190511-173819.jpg'),
(9, 'Snake Shoe', 'ballet flat', '30', '5', 4, 'https://i.postimg.cc/BbrkdJxc/20190511-175826.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`PID`),
  ADD UNIQUE KEY `Product ID` (`PID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
