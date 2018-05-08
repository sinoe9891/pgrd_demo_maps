-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 04, 2016 at 10:47 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pst database`
--

-- --------------------------------------------------------

--
-- Table structure for table `pst-cultivos`
--

CREATE TABLE `pst-cultivos` (
  `ctv-id` int(4) NOT NULL,
  `ctv-nom` text COLLATE utf8mb4_spanish_ci,
  `ctv-dsc` text COLLATE utf8mb4_spanish_ci
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pst-cultivos`
--

INSERT INTO `pst-cultivos` (`ctv-id`, `ctv-nom`, `ctv-dsc`) VALUES
(1, 'Cacao', 'cco'),
(2, 'Rosa', 'rosa'),
(3, 'Hortalizas', 'htlz'),
(4, 'Tomate', 'tmt'),
(5, 'Uva', 'uva'),
(6, 'Palma Africana', 'pa'),
(7, 'Ca?a de az?car', 'ca'),
(8, 'MyG', 'mg'),
(9, 'RA', 'ra');

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
(3, 1, 8),
(4, 1, 15),
(5, 1, 23),
(6, 1, 22),
(7, 1, 15),
(8, 1, 28),
(9, 1, 17),
(10, 1, 7),
(11, 1, 27),
(12, 1, 10),
(13, 1, 8),
(14, 1, 23),
(15, 1, 5),
(16, 1, 17),
(17, 1, 23),
(18, 1, 8),
(19, 1, 25),
(20, 1, 30),
(21, 1, 23),
(22, 1, 8),
(23, 1, 23),
(24, 1, 23),
(24, 2, 22),
(24, 3, 24);

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
(2, 'Barry Callebaut', 'EMP'),
(3, 'Barry Callebaut', 'EMP'),
(4, 'Brownbreeding', 'EMP'),
(5, 'Fincas Jarquin', 'EMP'),
(6, 'Galloway Cattle Co', 'EMP'),
(7, 'Kasetsart University (KU)', 'EMP'),
(8, 'Smithfield', 'EMP'),
(9, 'Univ de Lleyda', 'EMP'),
(10, 'Univ of Connecticut (UCONN)', 'EMP'),
(11, 'Univ of Tennessee (UTIA)', 'EMP'),
(12, 'CEICKOR', 'EMP'),
(13, 'Cooperativa Agricola Vitivinicola Loncomilla Ltda.', 'EMP'),
(14, 'Oregon State University', 'EMP'),
(15, 'Everglades Research and Education Center (EREC) - University of Florida (UF)', 'EMP'),
(16, 'University of Udine', 'EMP'),
(17, 'Utah State University', 'EMP'),
(18, 'Energypalma, S.A.', 'EMP'),
(19, 'Cria Fertil', 'EMP'),
(20, 'Ganaderia La Judea S.A.', 'EMP'),
(21, 'Salmor, S.A.', 'EMP'),
(22, 'Corporacion Montelimar', 'EMP'),
(23, 'Universidad Veraruzana', 'EMP'),
(24, 'Universidad Autonoma de Yucatan', 'EMP');

-- --------------------------------------------------------

--
-- Table structure for table `pst-inter-emp-cv`
--

CREATE TABLE `pst-inter-emp-cv` (
  `id-emp` int(4) NOT NULL,
  `id-cv` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pst-inter-emp-cv`
--

INSERT INTO `pst-inter-emp-cv` (`id-emp`, `id-cv`) VALUES
(3, 1),
(4, 2),
(10, 3),
(12, 4),
(13, 5),
(18, 6),
(22, 7),
(24, 8),
(24, 9);

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
(1, 9),
(1, 19),
(2, 2),
(3, 4),
(3, 18),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(7, 10),
(7, 11),
(7, 14),
(7, 15),
(7, 17),
(8, 9),
(9, 12),
(9, 23),
(9, 24),
(10, 13),
(11, 16),
(12, 20),
(13, 21),
(14, 22);

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
(5, 15),
(7, 10),
(8, 2),
(8, 3),
(8, 13),
(8, 18),
(8, 22),
(10, 12),
(15, 4),
(15, 7),
(17, 9),
(17, 16),
(22, 1),
(22, 6),
(22, 24),
(23, 5),
(23, 14),
(23, 17),
(23, 21),
(23, 23),
(23, 24),
(24, 24),
(25, 19),
(27, 11),
(28, 8),
(30, 20);

-- --------------------------------------------------------

--
-- Table structure for table `pst-pais`
--

CREATE TABLE `pst-pais` (
  `pais-id` int(4) NOT NULL,
  `pais-nom` text COLLATE latin1_spanish_ci NOT NULL,
  `pais-dsc` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `pst-pais`
--

INSERT INTO `pst-pais` (`pais-id`, `pais-nom`, `pais-dsc`) VALUES
(1, 'Brasil', 'BR'),
(2, 'Indonesia', 'IND'),
(3, 'Ecuador', 'ECU'),
(4, 'Guatemala', 'GUA'),
(5, 'Australia', 'AUS'),
(6, 'Tailandia', 'TAI'),
(7, 'USA', 'USA'),
(8, 'Espana', 'ESP'),
(9, 'Mexico', 'MX'),
(10, 'Chile', 'CHL'),
(11, 'Italia', 'ITA'),
(12, 'Colombia', 'CLMB'),
(13, 'Panama', 'PAN'),
(14, 'Nicaragua', 'NIC');

-- --------------------------------------------------------

--
-- Table structure for table `pst-pasantia`
--

CREATE TABLE `pst-pasantia` (
  `pst-id` int(6) NOT NULL,
  `pst-pais-id` int(11) NOT NULL,
  `pst-emp-id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `pst-pasantia`
--

INSERT INTO `pst-pasantia` (`pst-id`, `pst-pais-id`, `pst-emp-id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 4),
(5, 4, 5),
(6, 5, 6),
(7, 6, 7),
(8, 7, 7),
(9, 8, 9),
(10, 7, 10),
(11, 7, 11),
(12, 9, 12),
(13, 10, 13),
(14, 7, 14),
(15, 7, 15),
(16, 11, 16),
(17, 7, 17),
(18, 3, 18),
(19, 1, 19),
(20, 12, 20),
(21, 13, 21),
(22, 14, 22),
(23, 9, 23),
(24, 9, 24);

-- --------------------------------------------------------

--
-- Table structure for table `pst-rubro`
--

CREATE TABLE `pst-rubro` (
  `rb-id` int(3) NOT NULL,
  `rb-nom` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `rd-dsc` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `rb-at` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pst-rubro`
--

INSERT INTO `pst-rubro` (`rb-id`, `rb-nom`, `rd-dsc`, `rb-at`) VALUES
(1, 'Agricultura Organica', 'AOrg', 1),
(2, 'Centro de Innovacion de Frutas y Hortalizas', 'CIFH', 1),
(3, 'Control Biologico', 'CB', 1),
(4, 'Cultivo de Tejidos', 'CT', 1),
(5, 'Entomologia', 'Ent', 1),
(6, 'Fitomejoramiento', 'FM', 1),
(7, 'Fitopatologia', 'FP', 1),
(8, 'Frutales', 'Frut', 1),
(9, 'Granos y Semillas', 'GyS', 1),
(10, 'Manejo Integrado de Cultivos', 'MIC', 1),
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
(22, 'Ganado de Carne', 'GCar', 2),
(23, 'Ganado Lechero', 'GL', 2),
(24, 'Ganado Ovino', 'GO', 2),
(25, 'Inseminacion Artificial', 'InsArt', 2),
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
  ADD PRIMARY KEY (`id-pst`,`id-dtll`);

--
-- Indexes for table `pst-empresa`
--
ALTER TABLE `pst-empresa`
  ADD PRIMARY KEY (`emp-id`);

--
-- Indexes for table `pst-inter-emp-pais`
--
ALTER TABLE `pst-inter-emp-pais`
  ADD PRIMARY KEY (`emp-pais-id`,`emp-id`);

--
-- Indexes for table `pst-inter-rb-emp`
--
ALTER TABLE `pst-inter-rb-emp`
  ADD PRIMARY KEY (`id-rb`,`id-emp`);

--
-- Indexes for table `pst-pais`
--
ALTER TABLE `pst-pais`
  ADD PRIMARY KEY (`pais-id`);

--
-- Indexes for table `pst-pasantia`
--
ALTER TABLE `pst-pasantia`
  ADD PRIMARY KEY (`pst-id`);

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
  MODIFY `ctv-id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pst-pais`
--
ALTER TABLE `pst-pais`
  MODIFY `pais-id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pst-pasantia`
--
ALTER TABLE `pst-pasantia`
  MODIFY `pst-id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;