-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 27 mars 2024 à 15:16
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

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
  `idAccesoire` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Marque` varchar(255) NOT NULL,
  `Prix` varchar(255) NOT NULL,
  PRIMARY KEY (`idAccesoire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chaussure`
--

DROP TABLE IF EXISTS `chaussure`;
CREATE TABLE IF NOT EXISTS `chaussure` (
  `idchaussure` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Marque` varchar(255) NOT NULL,
  `Prix` varchar(255) NOT NULL,
  `Taille` varchar(255) NOT NULL,
  PRIMARY KEY (`idchaussure`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nom`, `prenom`, `mail`, `mdp`) VALUES
(9, 'e', 'e', 'e@gmail.com', 'e'),
(10, 'f', 'f', 'f@gmail.com', ''),
(11, 'f', 'f', 'f@gmail.com', '$2y$10$fv69OCqFdK.Xoqh8vaMfT.0.8OzA9xhuR6AZlVTSyd3/TZEtLMcl.'),
(12, 'g', 'g', 'g@gmail.com', '$2y$10$7MdOtcfMvKBxnBOhDShtuOuSIvRLiWrZWGObyBVvmHy0GZIejbKqu'),
(13, 'g', 'g', 'g@gmail.com', '$2y$10$6oAE7ttesGX0lRyczyHmD.1HINqAesAXbgYVXqjlmCejqpKjldr5.');

-- --------------------------------------------------------

--
-- Structure de la table `skate`
--

DROP TABLE IF EXISTS `skate`;
CREATE TABLE IF NOT EXISTS `skate` (
  `idSkate` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Marque` varchar(255) NOT NULL,
  `Taille` varchar(255) NOT NULL,
  `Prix` varchar(255) NOT NULL,
  PRIMARY KEY (`idSkate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vetement`
--

DROP TABLE IF EXISTS `vetement`;
CREATE TABLE IF NOT EXISTS `vetement` (
  `idvetement` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Marque` varchar(255) NOT NULL,
  `Prix` varchar(255) NOT NULL,
  `Taille` varchar(255) NOT NULL,
  PRIMARY KEY (`idvetement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
