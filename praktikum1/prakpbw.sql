-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2017 at 09:22 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakpbw`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `username` varchar(50) NOT NULL,
  `nim` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenisKelamin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`username`, `nim`, `password`, `jenisKelamin`) VALUES
('maulana', 14, '123qwert', 'jenisKelamin'),
('cacing', 1212112, 'dqewqewqeq', 'jenisKelamin'),
('', 1211211, 'sdadadada', 'laki-laki'),
('jahsjahask', 121212121, 'axasasa', 'laki-laki'),
('jahsjahask', 121212121, 'axasasa', 'laki-laki'),
('tes', 1212121212, 'tes', 'laki-laki'),
('', 908989, 'ghghfhf', 'laki-laki'),
('', 908989, 'ghghfhf', 'laki-laki'),
('', 908989, 'ghghfhf', 'laki-laki'),
('', 21212121, 'kjkjlj', 'Perempuan'),
('', 2147483647, 'qweqewqeq', 'laki-laki'),
('kdlksjdalj', 212121, 'kjeqkejqlejqw', 'laki-laki'),
('andre', 121212, 'skdskdskjda', 'laki-laki'),
('agus', 2147483647, 'agusssss', 'laki-laki');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
