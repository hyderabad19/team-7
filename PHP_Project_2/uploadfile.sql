-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 12:46 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploadfile`
--

CREATE TABLE `uploadfile` (
  `id` int(10) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL,
  `size` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadfile`
--

INSERT INTO `uploadfile` (`id`, `filename`, `type`, `size`) VALUES
(0, '93084-LIFI Technolog', 'application/vnd.open', 14930),
(0, '55176-motivation.doc', 'application/vnd.open', 12908),
(0, '1912-LIFI Technology', 'application/vnd.open', 14930),
(0, '47048-bkg-blu.jpg', 'image/jpeg', 289940),
(0, '32811-msweb-brand.png', 'image/png', 2698),
(0, '24704-receipt.pdf', 'application/pdf', 11450),
(0, '49077-Java-MCQs (1).docx', 'application/vnd.open', 331865),
(0, '89851-tcs aptitude models.docx', 'application/vnd.open', 39256),
(0, '94639-data structure.doc', 'application/msword', 33280),
(0, '30325-c++.doc', 'application/msword', 94720),
(0, '77157-php.doc', 'application/msword', 35840);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
