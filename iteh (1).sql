-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 12:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iteh`
--

-- --------------------------------------------------------

--
-- Table structure for table `igrice`
--

CREATE TABLE `igrice` (
  `id` int(20) NOT NULL,
  `igrica` varchar(20) NOT NULL,
  `tvorac` varchar(25) NOT NULL,
  `platforma` varchar(30) NOT NULL,
  `brigraca` int(20) NOT NULL,
  `ocena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igrice`
--

INSERT INTO `igrice` (`id`, `igrica`, `tvorac`, `platforma`, `brigraca`, `ocena`) VALUES
(1, 'League of Legends', 'Riot Games', 'PC', 80000000, '8'),
(2, 'World of Warcraft', 'Blizzard Entertainment', 'PC', 12000000, '9'),
(3, 'FIFA', 'EA Sports', 'PlayStation/Xbox/PC', 50000000, '8'),
(4, 'Dota 2', 'Valve Corporation', 'PC', 1290000, '7'),
(6, 'dasdsa', 'dasdas', 'dasdasd', 12414710, 'ds');

-- --------------------------------------------------------

--
-- Table structure for table `registracija`
--

CREATE TABLE `registracija` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mainGame` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registracija`
--

INSERT INTO `registracija` (`id`, `firstName`, `lastName`, `email`, `password`, `mainGame`) VALUES
(1, 'Marko', 'Markovic', 'markoni@gmail.com', 'mare123', 'League of Legends'),
(2, 'Nikola', 'Nikolic', 'nikolica@gmail.com', 'nikola4321', 'FIFA'),
(3, 'sadsa', 'das', 'admindas@gmail.com', '435fsd', 'World of Warcraft'),
(4, 'aleksandar', 'mandic', 'asdas@manda.com', 'manda123', 'DOTA 2'),
(5, 'dsad', 'Markoni', 'admindsadsa@gmail.com', 'fasfa', 'League of Legends'),
(6, 'Pur', 'Kurtoni', 'admindsadasdsa@gmail.com', 'fasfasfas', 'Dota 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `igrice`
--
ALTER TABLE `igrice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registracija`
--
ALTER TABLE `registracija`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `igrice`
--
ALTER TABLE `igrice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registracija`
--
ALTER TABLE `registracija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
