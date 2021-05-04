-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04.05.2021 klo 08:49
-- Palvelimen versio: 10.4.18-MariaDB
-- PHP Version: 7.4.16

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
-- Rakenne taululle `resepti`
--

CREATE TABLE `resepti` (
  `Resepti_id` int(11) NOT NULL,
  `Nimi` varchar(50) NOT NULL,
  `Juomalaji` varchar(50) NOT NULL,
  `Ainesosat` varchar(100) NOT NULL,
  `Valmistusohje` text NOT NULL,
  `Kayttaja_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vedos taulusta `resepti`
--

INSERT INTO `resepti` (`Resepti_id`, `Nimi`, `Juomalaji`, `Ainesosat`, `Valmistusohje`, `Kayttaja_id`) VALUES
(2647, 'Vesi', 'Vesi', 'Vesi', 'laita lasi hanan alle\r\n', 0),
(1163, 'Kahvi', 'Juoma', 'Vesi, kahvipavut/muru', 'Kaada kahvi mukiin jutusta', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
