-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2018 at 11:39 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasantiasmaterialize1`
--

-- --------------------------------------------------------

--
-- Table structure for table `pst-cultivos`
--

CREATE TABLE `pst-cultivos` (
  `ctv-id` int(4) NOT NULL,
  `ctv-rubro-id` int(4) NOT NULL,
  `ctv-nom` text COLLATE utf8mb4_spanish_ci,
  `ctv-dsc` text COLLATE utf8mb4_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pst-cultivos`
--

INSERT INTO `pst-cultivos` (`ctv-id`, `ctv-rubro-id`, `ctv-nom`, `ctv-dsc`) VALUES
(1, 8, 'Cacao', 'cco'),
(2, 15, 'Rosa', 'rosa'),
(3, 7, 'Hortalizas', 'htlz'),
(4, 10, 'Tomate', 'tmt'),
(5, 8, 'Uva', 'uva'),
(6, 8, 'Palma Africana', 'pa'),
(7, 8, 'Ca?a de az?car', 'ca'),
(8, 15, 'Varios', 'Varios');

-- --------------------------------------------------------

--
-- Table structure for table `pst-detalle`
--

CREATE TABLE `pst-detalle` (
  `id-pst` int(4) NOT NULL,
  `id-dtll` int(4) NOT NULL,
  `id-rb` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pst-detalle`
--

INSERT INTO `pst-detalle` (`id-pst`, `id-dtll`, `id-rb`) VALUES
(1, 1, 22),
(2, 1, 8),
(19, 1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `pst-empresa`
--

CREATE TABLE `pst-empresa` (
  `emp-id` int(4) NOT NULL,
  `emp-nom` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `emp-dsc` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pst-empresa`
--

INSERT INTO `pst-empresa` (`emp-id`, `emp-nom`, `emp-dsc`) VALUES
(1, 'AgriContato', 'EMP'),
(2, 'Barry Callebaut1', 'EMP'),
(19, 'Cria Fertil', 'EMP');

-- --------------------------------------------------------

--
-- Table structure for table `pst-inter-emp-cv`
--

CREATE TABLE `pst-inter-emp-cv` (
  `id-emp` int(4) NOT NULL,
  `id-cv` int(4) NOT NULL,
  `id-pais` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pst-inter-emp-cv`
--

INSERT INTO `pst-inter-emp-cv` (`id-emp`, `id-cv`, `id-pais`) VALUES
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pst-inter-emp-pais`
--

CREATE TABLE `pst-inter-emp-pais` (
  `emp-pais-id` int(4) NOT NULL,
  `emp-id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pst-inter-emp-pais`
--

INSERT INTO `pst-inter-emp-pais` (`emp-pais-id`, `emp-id`) VALUES
(1, 1),
(1, 2),
(1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `pst-inter-pais-rubro`
--

CREATE TABLE `pst-inter-pais-rubro` (
  `pais-id` int(4) NOT NULL,
  `rubro-id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pst-inter-pais-rubro`
--

INSERT INTO `pst-inter-pais-rubro` (`pais-id`, `rubro-id`) VALUES
(1, 8),
(1, 22),
(1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `pst-inter-rb-emp`
--

CREATE TABLE `pst-inter-rb-emp` (
  `id-rb` int(4) NOT NULL,
  `id-emp` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pst-inter-rb-emp`
--

INSERT INTO `pst-inter-rb-emp` (`id-rb`, `id-emp`) VALUES
(8, 2),
(22, 1),
(25, 19);

-- --------------------------------------------------------

--
-- Table structure for table `pst-pais`
--

CREATE TABLE `pst-pais` (
  `pais-id` int(4) NOT NULL,
  `pais-nom` text COLLATE latin1_spanish_ci NOT NULL,
  `pais-dsc` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `pst-pais`
--

INSERT INTO `pst-pais` (`pais-id`, `pais-nom`, `pais-dsc`) VALUES
(1, 'Región 1', 'BR'),
(2, 'Imagen Lansat', 'IND'),
(3, 'MDT Región 1', 'ECU');

-- --------------------------------------------------------

--
-- Table structure for table `pst-pasantia`
--

CREATE TABLE `pst-pasantia` (
  `pst-id` int(6) NOT NULL,
  `pst-pais-id` int(11) NOT NULL,
  `pst-emp-id` int(4) NOT NULL,
  `pst-anio` text COLLATE latin1_spanish_ci NOT NULL,
  `pst-doc-id` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `pst-pasantia`
--

INSERT INTO `pst-pasantia` (`pst-id`, `pst-pais-id`, `pst-emp-id`, `pst-anio`, `pst-doc-id`) VALUES
(1, 1, 1, '2016', 'ElNegrito-002'),
(2, 1, 2, '2018', 'ElProgreso-001'),
(19, 1, 19, '2016', 'ElNegrito-003');

-- --------------------------------------------------------

--
-- Table structure for table `pst-rubro`
--

CREATE TABLE `pst-rubro` (
  `rb-id` int(4) NOT NULL,
  `rb-nom` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `rd-dsc` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `rb-at` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pst-rubro`
--

INSERT INTO `pst-rubro` (`rb-id`, `rb-nom`, `rd-dsc`, `rb-at`) VALUES
(1, 'Agricultura Organica', 'AOrg', 1),
(2, 'Centro de Innovacion de Frutas y Hortalizas', 'CIFH', 2),
(3, 'Control Biologico', 'CB', 3),
(4, 'Cultivo de Tejidos', 'CT', 4),
(5, 'Entomologia', 'Ent', 5),
(6, 'Fitomejoramiento', 'FM', 6),
(7, 'Fitopatologia', 'FP', 7),
(8, 'Área 1', 'Frut', 3),
(9, 'Área 2', 'GyS', 3),
(10, 'Área 3', 'MIC', 3),
(11, 'Manejo Integrado de Plagas', 'MIP', 1),
(12, 'Maquinaria y Riegos', 'MyR', 1),
(13, 'Olericultura Intensiva', 'OInt', 1),
(14, 'Olericultura Extensiva', 'OExt', 1),
(15, 'Ornamentales', 'Orn', 1),
(16, 'Sanidad Vegetal', 'SV', 1),
(17, 'Suelos', 'Suel', 1),
(18, 'Acuacultura', 'Ac', 2),
(19, 'Apicultura', 'Ap', 2),
(20, 'Avicultura', 'Av', 2),
(21, 'Ganado Caprino', 'GCap', 2),
(22, 'Área 2', 'GCar', 2),
(23, 'Ganado Lechero', 'GL', 2),
(24, 'Ganado Ovino', 'GO', 2),
(25, 'Área 3', 'InsArt', 2),
(26, 'Mejoramiento y Genetica', 'MyG', 2),
(27, 'Nutricion Animal', 'NA', 2),
(28, 'Porcinocultura', 'Porc', 2),
(29, 'Reproduccion Animal', 'RA', 2),
(30, 'Transferencia de Embriones', 'Temb', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pst-cultivos`
--
ALTER TABLE `pst-cultivos`
  ADD PRIMARY KEY (`ctv-id`);

--
-- Indexes for table `pst-detalle`
--
ALTER TABLE `pst-detalle`
  ADD PRIMARY KEY (`id-pst`,`id-dtll`,`id-rb`),
  ADD KEY `id-rb` (`id-rb`);

--
-- Indexes for table `pst-empresa`
--
ALTER TABLE `pst-empresa`
  ADD PRIMARY KEY (`emp-id`);

--
-- Indexes for table `pst-inter-emp-cv`
--
ALTER TABLE `pst-inter-emp-cv`
  ADD PRIMARY KEY (`id-emp`,`id-cv`,`id-pais`),
  ADD KEY `id-cv` (`id-cv`),
  ADD KEY `id-pais` (`id-pais`);

--
-- Indexes for table `pst-inter-emp-pais`
--
ALTER TABLE `pst-inter-emp-pais`
  ADD PRIMARY KEY (`emp-pais-id`,`emp-id`),
  ADD KEY `emp-id` (`emp-id`);

--
-- Indexes for table `pst-inter-pais-rubro`
--
ALTER TABLE `pst-inter-pais-rubro`
  ADD PRIMARY KEY (`pais-id`,`rubro-id`),
  ADD KEY `rubro-id` (`rubro-id`);

--
-- Indexes for table `pst-inter-rb-emp`
--
ALTER TABLE `pst-inter-rb-emp`
  ADD PRIMARY KEY (`id-rb`,`id-emp`),
  ADD KEY `id-emp` (`id-emp`);

--
-- Indexes for table `pst-pais`
--
ALTER TABLE `pst-pais`
  ADD PRIMARY KEY (`pais-id`);

--
-- Indexes for table `pst-pasantia`
--
ALTER TABLE `pst-pasantia`
  ADD PRIMARY KEY (`pst-id`,`pst-pais-id`,`pst-emp-id`),
  ADD KEY `pst-pais-id` (`pst-pais-id`);

--
-- Indexes for table `pst-rubro`
--
ALTER TABLE `pst-rubro`
  ADD PRIMARY KEY (`rb-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pst-cultivos`
--
ALTER TABLE `pst-cultivos`
  MODIFY `ctv-id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pst-pais`
--
ALTER TABLE `pst-pais`
  MODIFY `pais-id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pst-pasantia`
--
ALTER TABLE `pst-pasantia`
  MODIFY `pst-id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pst-detalle`
--
ALTER TABLE `pst-detalle`
  ADD CONSTRAINT `pst-detalle_ibfk_1` FOREIGN KEY (`id-pst`) REFERENCES `pst-pasantia` (`pst-id`),
  ADD CONSTRAINT `pst-detalle_ibfk_2` FOREIGN KEY (`id-rb`) REFERENCES `pst-rubro` (`rb-id`);

--
-- Constraints for table `pst-inter-emp-cv`
--
ALTER TABLE `pst-inter-emp-cv`
  ADD CONSTRAINT `pst-inter-emp-cv_ibfk_1` FOREIGN KEY (`id-emp`) REFERENCES `pst-empresa` (`emp-id`),
  ADD CONSTRAINT `pst-inter-emp-cv_ibfk_2` FOREIGN KEY (`id-cv`) REFERENCES `pst-cultivos` (`ctv-id`),
  ADD CONSTRAINT `pst-inter-emp-cv_ibfk_3` FOREIGN KEY (`id-pais`) REFERENCES `pst-pais` (`pais-id`);

--
-- Constraints for table `pst-inter-emp-pais`
--
ALTER TABLE `pst-inter-emp-pais`
  ADD CONSTRAINT `pst-inter-emp-pais_ibfk_1` FOREIGN KEY (`emp-pais-id`) REFERENCES `pst-pais` (`pais-id`),
  ADD CONSTRAINT `pst-inter-emp-pais_ibfk_2` FOREIGN KEY (`emp-id`) REFERENCES `pst-empresa` (`emp-id`);

--
-- Constraints for table `pst-inter-pais-rubro`
--
ALTER TABLE `pst-inter-pais-rubro`
  ADD CONSTRAINT `pst-inter-pais-rubro_ibfk_1` FOREIGN KEY (`pais-id`) REFERENCES `pst-pais` (`pais-id`),
  ADD CONSTRAINT `pst-inter-pais-rubro_ibfk_2` FOREIGN KEY (`rubro-id`) REFERENCES `pst-rubro` (`rb-id`);

--
-- Constraints for table `pst-inter-rb-emp`
--
ALTER TABLE `pst-inter-rb-emp`
  ADD CONSTRAINT `pst-inter-rb-emp_ibfk_1` FOREIGN KEY (`id-emp`) REFERENCES `pst-empresa` (`emp-id`),
  ADD CONSTRAINT `pst-inter-rb-emp_ibfk_2` FOREIGN KEY (`id-rb`) REFERENCES `pst-rubro` (`rb-id`);

--
-- Constraints for table `pst-pasantia`
--
ALTER TABLE `pst-pasantia`
  ADD CONSTRAINT `pst-pasantia_ibfk_1` FOREIGN KEY (`pst-pais-id`) REFERENCES `pst-pais` (`pais-id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
