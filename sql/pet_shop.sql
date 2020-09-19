-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 19, 2020 at 07:58 PM
-- Server version: 5.6.34
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_shop`
--
create database pet_shop;
use pet_shop;
-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `raca` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `dono_rg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id`, `raca`, `nome`, `tipo`, `dono_rg`) VALUES
(3, 'Puggy', 'Jacke', 'Cachorro', 8888),
(7, 'Dinossauro', 'Yoshi', 'Cachorro', 99999),
(8, '-----', 'Felix', 'Gato', 8888),
(10, 'asdasd', 'asdasd', 'Cachorro', 4537),
(12, 'Cacatua', 'Milho', 'Passaro', 99999);

-- --------------------------------------------------------

--
-- Table structure for table `dono`
--

CREATE TABLE `dono` (
  `rg` int(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dono`
--

INSERT INTO `dono` (`rg`, `nome`, `endereco`) VALUES
(4537, 'Luigi vermelho', 'Rua dos cogumelos'),
(8888, 'Yasmim', '111'),
(99999, 'Luigi', 'Rua dos cogumelos'),
(65194984, 'TESTE', 'TESTE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rg_dono` (`dono_rg`);

--
-- Indexes for table `dono`
--
ALTER TABLE `dono`
  ADD PRIMARY KEY (`rg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `rg_dono` FOREIGN KEY (`dono_rg`) REFERENCES `dono` (`rg`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
