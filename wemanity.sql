-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 11:50 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wemanity`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidatures`
--

CREATE TABLE `candidatures` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `body` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `curriculumVitae` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidatures`
--

INSERT INTO `candidatures` (`id`, `fullname`, `email`, `body`, `category`, `city`, `curriculumVitae`, `created`, `updated`) VALUES
(1, 'Mouad Bethaoui', 'mouad.bethaoui@gmail.com', ' Je me présente, je m\'appelle  BETHAOUI Mouad Développeur Analyste chez IBM Casablanca, diplômé de l\'École Marocaine des Sciences de l\'Ingénieur, option MIAGE, je suis à la recherche d\'une autre opportunité en tant que développeur. Fort de mes compétences', 'Développeur', 'Meknes', 'C:\\Users\\MOUADBETHAOUI\\Downloads', '2018-10-26 09:13:43', '2018-10-26 09:13:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidatures`
--
ALTER TABLE `candidatures`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
