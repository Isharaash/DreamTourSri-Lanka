-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 10, 2023 at 04:16 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreamtoursri lanka`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(300) NOT NULL,
  `lname` varchar(300) NOT NULL,
  `country` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `adminname` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `country`, `email`, `adminname`, `password`) VALUES
(1, 'Ashen', 's', 'ss', 'ss', 'Ashen', 'a3f3a92af18b0d5ebbda936df7f8855d'),
(2, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'dw', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'aa', '', '', '', '', 'b6d767d2f8ed5d21a44b0e5886680cb9'),
(6, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `adults` int NOT NULL,
  `childern` int NOT NULL,
  `place` varchar(50) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `email` varchar(300) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `massage` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `adults`, `childern`, `place`, `sdate`, `edate`, `email`, `pnumber`, `massage`) VALUES
(14, 'Gihan', 4, 4, 'Polonnaruwa', '2022-03-10', '2022-03-12', 'ashen@gmail.com', '07751328695', 'Send email information'),
(15, 'Sithumi', 1, 1, 'Sigiriya', '2022-03-15', '2022-03-16', 'sithumi@gmail.com', '07751328662', ''),
(16, 'Tharidu', 2, 2, 'Polonnaruwa', '2022-03-11', '2022-03-17', 'tharidu@gmail.com', '07751328695', 'have a offers'),
(17, 'Viraj', 2, 2, 'Sigiriya', '2022-03-09', '2022-03-17', 'sithumishanika7@gmail.com', '07751328695', 'any information plz'),
(18, 'Bandara', 4, 3, 'Polonnaruwa', '2022-03-08', '2022-03-10', 'bandra7@gmail.com', '07751328695', 'nice'),
(19, 'Ishara', 3, 1, 'Kandy', '2022-03-11', '2022-03-14', 'ashen@gmail.com', '07751328695', ''),
(20, 'Ashen', 2, 0, 'Yala', '2022-03-08', '2022-03-16', 'ashen2@gmail.com', '0342246269', 'Inform quickly\r\n'),
(21, 'Sadun', 10, 0, 'Aduradapura', '2022-03-15', '2022-03-25', 'sadun@gmaill.com', '0776252336', 'have a offers'),
(22, 'Gihan', 4, 4, 'Polonnaruwa', '2022-03-10', '2022-03-12', 'gihan@gmail.com', '07751328695', 'sent email information'),
(27, 'Chanidu', 2, 2, 'Sigiriya', '2022-03-09', '2022-03-17', 'chanidu@gmail.com', '0775126542', 'I like go to sigiriya');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pnumber` varchar(250) NOT NULL,
  `massage` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `pnumber`, `massage`) VALUES
(59, 'kasun', 'wsd1@gmail.com', '07751328691', 'I want to go jaffna'),
(58, 'Amandi', 'amandi@gamil.com', '0789963256', 'I wont to go sigiriya'),
(57, 'manoth', 'manoth@gmail.com', '0759656332', 'nice your work.'),
(56, 'sahan', 'shan@gmail.com', '0342267395', 'i want go travel'),
(55, 'Roshan', 'roshan@gamil.com', '0775103142', 'more details plz all packers'),
(53, 'Akila', 'akia@gamil.com', '0348852396', 'good your page\r\n'),
(54, 'chanidu', 'chanidu@gmail.com', '0775180623', 'nice page'),
(52, 'heshan', 'heshan@gamil.com', '07751328691', 'I want go hambanthota, have a packege'),
(51, 'Sithumi', 'sithumishanika7@gmail.com', '0776252336', 'Have a offers this month'),
(50, 'ashen', 'ashen@gmail.com', '07751328695', 'package information set the email \r\n ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `country`, `email`, `username`, `password`) VALUES
(1, 'Ishara', 'Ashen', 'Sri Lanka', 'isharaashen1234@gmail.com', 'Ashen', 'a3f3a92af18b0d5ebbda936df7f8855d'),
(2, 'aa', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'aa', '', '', '', '', '4124bc0a9335c27f086f24ba207a4912');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `place` varchar(100) NOT NULL,
  `price` double(10,2) NOT NULL,
  `pvisit` varchar(250) NOT NULL,
  `hotel` varchar(200) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `place`, `price`, `pvisit`, `hotel`, `msg`) VALUES
(119, 'Polonnanruwa', 50000.00, 'Parakrama Samudra,Hetadage,Gal viharaya etc', 'Ekho Lake Polonnaruwa', 'If you like this location Booking Quickly'),
(118, 'Jaffna', 40000.00, 'Nallur, Jaffna Dutch Fort etc', 'Jaffna Heritage Hotel', 'If you like this location booking quickly'),
(117, 'Kandy', 35000.00, 'Temple of the Sacred Tooth Relic', 'Temple of the Sacred Tooth Relic', 'If you like this location booking quickly'),
(120, 'Anuradapura', 35000.00, 'Ruanvalisaya,Sri maha Bodiya,etc', ' Hotel 4 U Saliya Garden', 'If you like this location booking quickly'),
(121, 'Yala', 20000.00, 'yala', 'Yala Hotel Lion', 'If you like This Location booking Quickly'),
(122, 'Sigiriya', 45000.00, 'Sri giri Dabulu', 'Hotel Sigiriya', 'If you like this location booking quickly'),
(123, 'Katharagama', 27000.00, 'Katharagama, wadihitikanda, sellakatharagama', ' Hotel 4 U Saliya Garden', 'If you like this location booking quickly'),
(124, 'Sinharajaya', 17000.00, 'sinharajya', 'Sinharaja Forest Edge', 'If you like this location booking quickly'),
(125, 'Nuwaraeliya', 41000.00, 'Nuwaraeliya, Hotanthanna etc', 'Heritance Tea Factory ', 'If you like this location booking quickly'),
(126, 'Trincomalee', 39000.00, 'Trincomalee', 'Jungle Beach By Uga Escapes', 'If you like this location booking quickly');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
