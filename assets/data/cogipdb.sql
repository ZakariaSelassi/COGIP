-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 08 avr. 2021 à 13:48
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cogipdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `idCompany` int NOT NULL AUTO_INCREMENT,
  `nameCompany` varchar(45) DEFAULT NULL,
  `countryCompany` varchar(45) DEFAULT NULL,
  `tvaCompany` varchar(20) DEFAULT NULL,
  `typeCompany_idtype` int NOT NULL,
  PRIMARY KEY (`idCompany`,`typeCompany_idtype`),
  KEY `fk_Companies_typeCompany1_idx` (`typeCompany_idtype`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `idinvoices` int NOT NULL AUTO_INCREMENT,
  `numInvoice` int DEFAULT NULL,
  `dateInvoice` datetime DEFAULT NULL,
  `Companies_idCompany` int NOT NULL,
  `people_idpeople` int NOT NULL,
  `people_Companies_idCompany` int NOT NULL,
  PRIMARY KEY (`idinvoices`,`Companies_idCompany`,`people_idpeople`,`people_Companies_idCompany`),
  KEY `fk_invoices_Companies1_idx` (`Companies_idCompany`),
  KEY `fk_invoices_people1_idx` (`people_idpeople`,`people_Companies_idCompany`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE IF NOT EXISTS `people` (
  `idpeople` int NOT NULL AUTO_INCREMENT,
  `lastName` varchar(45) DEFAULT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Companies_idCompany` int NOT NULL,
  PRIMARY KEY (`idpeople`,`Companies_idCompany`),
  KEY `fk_people_Companies1_idx` (`Companies_idCompany`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typecompany`
--

DROP TABLE IF EXISTS `typecompany`;
CREATE TABLE IF NOT EXISTS `typecompany` (
  `idtype` int NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idtype`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `fk_Companies_typeCompany1` FOREIGN KEY (`typeCompany_idtype`) REFERENCES `typecompany` (`idtype`);

--
-- Contraintes pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `fk_invoices_Companies1` FOREIGN KEY (`Companies_idCompany`) REFERENCES `companies` (`idCompany`),
  ADD CONSTRAINT `fk_invoices_people1` FOREIGN KEY (`people_idpeople`,`people_Companies_idCompany`) REFERENCES `people` (`idpeople`, `Companies_idCompany`);

--
-- Contraintes pour la table `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `fk_people_Companies1` FOREIGN KEY (`Companies_idCompany`) REFERENCES `companies` (`idCompany`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
