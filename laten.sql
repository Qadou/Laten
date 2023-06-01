-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 04:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laten`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `remise` decimal(10,2) NOT NULL,
  `devise` varchar(50) NOT NULL,
  `date_creation` date NOT NULL,
  `prix_facture` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `cin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactrole`
--

CREATE TABLE `contactrole` (
  `id_contact_role` int(11) NOT NULL,
  `id_entite_physique` int(11) NOT NULL,
  `id_contact` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contrat`
--

CREATE TABLE `contrat` (
  `id_contrat` int(11) NOT NULL,
  `id_entite_physique` int(11) NOT NULL,
  `numero_contrat` varchar(50) NOT NULL,
  `statut_contrat` varchar(50) NOT NULL,
  `version_contrat` int(11) NOT NULL,
  `type_contrat` varchar(50) NOT NULL,
  `frequence_facturation` varchar(50) NOT NULL,
  `date_creation` date NOT NULL,
  `date_demarrage` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entitephysique`
--

CREATE TABLE `entitephysique` (
  `id_entite_physique` int(11) NOT NULL,
  `id_entite_social` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `numero_client` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` varchar(10) NOT NULL,
  `status_ep` varchar(50) NOT NULL,
  `date_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entitysociale`
--

CREATE TABLE `entitysociale` (
  `id_entite_social` int(11) NOT NULL,
  `raison_social` varchar(255) NOT NULL,
  `numero_registre` varchar(50) NOT NULL,
  `patente` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_contrat` (`id_contrat`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `contactrole`
--
ALTER TABLE `contactrole`
  ADD PRIMARY KEY (`id_contact_role`),
  ADD KEY `id_entite_physique` (`id_entite_physique`),
  ADD KEY `id_contact` (`id_contact`);

--
-- Indexes for table `contrat`
--
ALTER TABLE `contrat`
  ADD PRIMARY KEY (`id_contrat`),
  ADD KEY `id_entite_physique` (`id_entite_physique`);

--
-- Indexes for table `entitephysique`
--
ALTER TABLE `entitephysique`
  ADD PRIMARY KEY (`id_entite_physique`),
  ADD KEY `id_entite_social` (`id_entite_social`);

--
-- Indexes for table `entitysociale`
--
ALTER TABLE `entitysociale`
  ADD PRIMARY KEY (`id_entite_social`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_contrat`) REFERENCES `contrat` (`id_contrat`);

--
-- Constraints for table `contactrole`
--
ALTER TABLE `contactrole`
  ADD CONSTRAINT `contactrole_ibfk_1` FOREIGN KEY (`id_entite_physique`) REFERENCES `entitephysique` (`id_entite_physique`),
  ADD CONSTRAINT `contactrole_ibfk_2` FOREIGN KEY (`id_contact`) REFERENCES `contact` (`id_contact`);

--
-- Constraints for table `contrat`
--
ALTER TABLE `contrat`
  ADD CONSTRAINT `contrat_ibfk_1` FOREIGN KEY (`id_entite_physique`) REFERENCES `entitephysique` (`id_entite_physique`);

--
-- Constraints for table `entitephysique`
--
ALTER TABLE `entitephysique`
  ADD CONSTRAINT `entitephysique_ibfk_1` FOREIGN KEY (`id_entite_social`) REFERENCES `entitysociale` (`id_entite_social`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
