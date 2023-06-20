-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 01:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webactualizar`
--

-- --------------------------------------------------------

--
-- Table structure for table `asesores`
--

CREATE TABLE `asesores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asesores`
--

INSERT INTO `asesores` (`id`, `nombre`) VALUES
(1, 'asesor1'),
(2, 'asesor2'),
(3, 'asesor3'),
(4, 'asesor4'),
(5, ''),
(6, '');

-- --------------------------------------------------------

--
-- Table structure for table `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `apellido1` varchar(255) NOT NULL,
  `apellido2` varchar(255) NOT NULL,
  `nombre1` varchar(255) NOT NULL,
  `nombre2` varchar(255) NOT NULL,
  `numerodocumento` varchar(12) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `horario` varchar(100) NOT NULL,
  `asesor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datos`
--

INSERT INTO `datos` (`id`, `apellido1`, `apellido2`, `nombre1`, `nombre2`, `numerodocumento`, `telefono`, `email`, `fecha`, `horario`, `asesor`) VALUES
(11, 'carbonell', 'anywho', 'javier', 'samith', '1143266589', '3008380454', 'samith472@gmail.com', '0000-00-00', '', 'asesor3'),
(12, 'anyone', 'escobar', 'yahireth', '', '52154841', '3226460417', 'jcarbone@cuc.edu.co', '0000-00-00', '', 'asesor1'),
(13, 'carbonell', 'escobar', 'javier', 'samith', '1143266589', '3226460417', 'samith472@gmail.com', '0000-00-00', ' 3-4 pm', 'asesor2'),
(14, 'carbonell', 'anywho', 'nobody', 'samith', '52154841', '3126639636', 'yahireth2@gmail.com', '0000-00-00', ' 11-12 am', 'asesor4'),
(15, 'carbonell', 'escobar', 'nobody2', 'samith', '1143266589', '3008380454', 'yahireth2@gmail.com', '2023-06-17', ' 11-12 am', 'asesor2'),
(16, 'carbonell', 'escobar', 'javier', 'samith', '1143266589', '3226460417', 'samith472@gmail.com', '2023-06-17', ' 11-12 am', 'asesor1'),
(17, 'carbonell', 'anywho', 'javier', '', '52154841', '3226460417', 'yahireth2@gmail.com', '2023-06-17', ' 11-12 am', 'asesor4'),
(18, 'carbonell', 'escobar', 'javier', 'samith', '1143266589', '3008380454', 'yahireth2@gmail.com', '2023-06-17', ' 11-12 am', 'asesor2'),
(19, 'carbonell', 'escobar', 'nobody2', 'samith', '1143266589', '3216549870', 'yahireth2@gmail.com', '2023-06-14', ' 9-10 am', 'asesor2'),
(20, 'carbonell', 'escobar', 'nobody2', 'samith', '52154841', '3226460417', 'samith472@gmail.com', '2023-06-14', ' 9-10 am', 'asesor2'),
(21, 'carbonell', 'escobar', 'javier', 'samith', '52154841', '3008380454', 'samith472@gmail.com', '2023-06-14', ' 9-10 am', 'asesor4'),
(22, 'carbonell', 'escobar', 'javier', '', '52154841', '3226460417', 'samith472@gmail.com', '2023-06-14', ' 9-10 am', 'asesor1'),
(23, 'carbonell', 'anywho', 'javier', '', '1143266589', '3008380454', 'yahireth2@gmail.com', '2023-06-14', ' 9-10 am', 'asesor1'),
(24, 'carbonell', 'anywho', 'javier', '', '1143266589', '3008380454', 'yahireth2@gmail.com', '2023-06-14', ' 9-10 am', 'asesor1'),
(25, 'carbonell', 'anywho', 'javier', '', '1143266589', '3008380454', 'yahireth2@gmail.com', '2023-06-14', ' 9-10 am', 'asesor1'),
(26, 'a', 'a', 'a', 'a', '12123', '1322', 'javiere.carbonell@tecnoglass.net', '2023-06-14', ' 17', 'asesor3'),
(27, '', '', '', '', '', '', '', '2023-06-14', ' 17', '0'),
(28, 'pape', 'papa', 'luis', '', '52154841', '3008380454', 'yahireth2@gmail.com', '2023-06-16', ' 19', 'asesor4'),
(29, 'carbonell', 'anywho', 'yahireth', '', '1143266589', '3008380454', 'yahireth2@gmail.com', '2023-06-17', '3-4 pm', 'asesor3'),
(30, 'carbonell', 'escobar', 'javier', 'samith', '1143266589', '3008380454', 'yahireth2@gmail.com', '2023-06-17', '11-12 am', 'asesor1'),
(31, 'carbonell', 'escobar', 'nobody2', 'samith', '1143266589', '3008380454', 'yahireth2@gmail.com', '2023-06-15', '9-10 am', 'asesor1');

-- --------------------------------------------------------

--
-- Table structure for table `dispobibles`
--

CREATE TABLE `dispobibles` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `cita` varchar(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `horarios`
--

CREATE TABLE `horarios` (
  `id` int(100) NOT NULL,
  `fecha` date NOT NULL,
  `horario` varchar(100) NOT NULL,
  `cupos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `horarios`
--

INSERT INTO `horarios` (`id`, `fecha`, `horario`, `cupos`) VALUES
(16, '2023-06-17', '11-12 am', 0),
(17, '2023-06-14', '9-10 am', 0),
(18, '2023-06-15', '2-3 pm', 0),
(19, '2023-06-16', '3-4 pm', 0),
(20, '2023-06-17', '3-4 pm', 0),
(22, '2023-06-19', '9-10 am', 0),
(23, '2023-06-19', '2-3 pm', 1),
(24, '2023-06-19', '4-5 pm', 1),
(25, '2023-06-20', '2-3 pm', 3),
(26, '2023-06-15', '9-10 am', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asesores`
--
ALTER TABLE `asesores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispobibles`
--
ALTER TABLE `dispobibles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asesores`
--
ALTER TABLE `asesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `dispobibles`
--
ALTER TABLE `dispobibles`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dispobibles`
--
ALTER TABLE `dispobibles`
  ADD CONSTRAINT `dispobibles_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `datos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
