-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 10:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drinkkiarkisto`
--

-- --------------------------------------------------------

--
-- Table structure for table `resepti`
--

CREATE TABLE `resepti` (
  `Resepti_id` int(11) NOT NULL,
  `Nimi` varchar(20) NOT NULL,
  `Juomalaji` varchar(20) NOT NULL,
  `Ainesosat` varchar(100) NOT NULL,
  `Valmistusohje` varchar(250) NOT NULL,
  `Kayttaja_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resepti`
--

INSERT INTO `resepti` (`Resepti_id`, `Nimi`, `Juomalaji`, `Ainesosat`, `Valmistusohje`, `Kayttaja_id`) VALUES
(4964, 'ham', 'Kinkkua', 'KInKKUAAA', 'waddawdwadwadadawd', 0),
(2449, 'dwadawdwadawdawda', 'awdadawd', 'adawdaw', 'wdwadawdawdwa', 0),
(8148, 'awdawdawdwadwadwadwa', 'awdawdwadwadwadadawd', 'awdawdwadwadwadwadwadwadwadwadwadwadwadwawdwadadwad', 'adwadwadwadwadwadawdwadwadwadwadawdwadadwadwadwadwadwadawdwadwadwadwadawdwadadwadwadwadwadwadawdwadwadwadwadawdwadadwadwadwadwadwadawdwadwadwadwadawdwadadwadwadwadwadwadawdwadwadwadwadawdwadadwadwadwadwadwadawdwadwadwadwadawdwadadwadwadwadwadwadawdwa', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
