-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 07 mars 2023 à 09:18
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Ville` varchar(100) NOT NULL,
  `Code Postal` int(11) NOT NULL,
  `Pays` varchar(50) NOT NULL,
  `Téléphone` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mot de Passe` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`ID`, `Nom`, `Prenom`, `Adresse`, `Ville`, `Code Postal`, `Pays`, `Téléphone`, `Email`, `Mot de Passe`) VALUES
(4, 'Picot', 'Baptiste', '28 Boulevard Clémenceau', 'Cormeilles', 95240, 'FRANCE', 681576268, 'baptiste.picot@exemple.com', '123'),
(2, 'Supiot', 'Eva', 'bonne question', 'Anthony', 91000, 'FRANCE', 681576278, 'eva.supiot@exemple.com', 'supsup'),
(5, 'Picot', 'Pierre', '28 Boulevard ClÃ©menceau', 'Cormeilles', 95240, 'FRANCE', 681570906, 'pierre.picot@exemple.com', '123'),
(6, 'Picot', 'Alice', '28 Boulevard ClÃ©menceau', 'Cormeilles', 95240, 'FRANCE', 681572001, 'alice.picot@exemple.com', '123'),
(7, 'Picot', 'Baptiste', '28 boulevard ClÃ©menceau', 'Cormeilles En Parisis', 95240, 'France', 781576272, 'baptiste.picot@edu.ece.fr', '123'),
(8, 'Picot', 'Sandrine', '28 boulevard ClÃ©menceau', 'Cormeilles En Parisis', 95240, 'France', 781576272, 'sandrine.picot@edu.ece.fr', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
