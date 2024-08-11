-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 18 avr. 2024 à 10:49
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `skateshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `accesoire`
--

DROP TABLE IF EXISTS `accesoire`;
CREATE TABLE IF NOT EXISTS `accesoire` (
  `idAccesoire` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Marque` varchar(255) NOT NULL,
  `Prix` varchar(255) NOT NULL,
  `lienImage` varchar(255) NOT NULL,
  PRIMARY KEY (`idAccesoire`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `accesoire`
--

INSERT INTO `accesoire` (`idAccesoire`, `Nom`, `Marque`, `Prix`, `lienImage`) VALUES
(1, 'COLOR THEORY OLD SKOOL', 'vans', '80', ''),
(2, 'COLOR THEORY OLD SKOOL', 'vans', '80', ''),
(3, '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `password`) VALUES
(1, 'merize', 'merize');

-- --------------------------------------------------------

--
-- Structure de la table `chaussure`
--

DROP TABLE IF EXISTS `chaussure`;
CREATE TABLE IF NOT EXISTS `chaussure` (
  `idchaussure` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Marque` varchar(255) NOT NULL,
  `Prix` varchar(255) NOT NULL,
  `Taille` varchar(255) NOT NULL,
  `lienImage` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`idchaussure`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `chaussure`
--

INSERT INTO `chaussure` (`idchaussure`, `Nom`, `Marque`, `Prix`, `Taille`, `lienImage`) VALUES
(1, 'COLOR THEORY OLD SKOOL', 'vans', '80', '43', 's');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nom`, `prenom`, `mail`, `mdp`) VALUES
(9, 'e', 'e', 'e@gmail.com', 'e'),
(10, 'f', 'f', 'f@gmail.com', ''),
(11, 'f', 'f', 'f@gmail.com', '$2y$10$fv69OCqFdK.Xoqh8vaMfT.0.8OzA9xhuR6AZlVTSyd3/TZEtLMcl.'),
(12, 'g', 'g', 'g@gmail.com', '$2y$10$7MdOtcfMvKBxnBOhDShtuOuSIvRLiWrZWGObyBVvmHy0GZIejbKqu'),
(13, 'g', 'g', 'g@gmail.com', '$2y$10$6oAE7ttesGX0lRyczyHmD.1HINqAesAXbgYVXqjlmCejqpKjldr5.'),
(14, 'h', 'h', 'h@gmail.com', '$2y$10$hDREyarsnOg4cM8u5/iSFO/WxsvOf88ydquCVVg9iSKiJIwpy4ayy'),
(15, 'h', 'h', 'h@gmail.com', '$2y$10$hDREyarsnOg4cM8u5/iSFO/WxsvOf88ydquCVVg9iSKiJIwpy4ayy');

-- --------------------------------------------------------

--
-- Structure de la table `skate`
--

DROP TABLE IF EXISTS `skate`;
CREATE TABLE IF NOT EXISTS `skate` (
  `idSkate` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Marque` varchar(255) NOT NULL,
  `Taille` varchar(255) NOT NULL,
  `Prix` varchar(255) NOT NULL,
  `lienImage` varchar(255) NOT NULL,
  PRIMARY KEY (`idSkate`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `skate`
--

INSERT INTO `skate` (`idSkate`, `Nom`, `Marque`, `Taille`, `Prix`, `lienImage`) VALUES
(1, 'Classic Dot ', 'Santa Cruz', '8.5', '80', ''),
(2, 'Classic Dot ', 'Santa Cruz', '8.5', '80', ''),
(3, 'COLOR THEORY OLD SKOOL', 'vans', '43', '80', 's'),
(4, 'COLOR THEORY OLD SKOOL', 'vans', '43', '80', 's'),
(5, 'COLOR THEORY OLD SKOOL', 'vans', '43', '80', 's'),
(6, 'COLOR THEORY OLD SKOOL', 'vans', '43', '80', 's');

-- --------------------------------------------------------

--
-- Structure de la table `vetement`
--

DROP TABLE IF EXISTS `vetement`;
CREATE TABLE IF NOT EXISTS `vetement` (
  `idvetement` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Marque` varchar(255) NOT NULL,
  `Prix` varchar(255) NOT NULL,
  `Taille` varchar(255) NOT NULL,
  `lienImage` varchar(255) NOT NULL,
  PRIMARY KEY (`idvetement`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `vetement`
--

INSERT INTO `vetement` (`idvetement`, `Nom`, `Marque`, `Prix`, `Taille`, `lienImage`) VALUES
(1, 'COLOR THEORY OLD SKOOL', 'vans', '80', '43', ''),
(2, 'COLOR THEORY OLD SKOOL', 'vans', '80', '43', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
