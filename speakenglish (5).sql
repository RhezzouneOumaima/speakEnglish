-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 10 fév. 2021 à 12:26
-- Version du serveur :  5.7.20-log
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `speakenglish`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` int(25) NOT NULL AUTO_INCREMENT,
  `nomAd` varchar(255) NOT NULL,
  `prenomAd` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `passwordAd` varchar(255) NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `nomAd`, `prenomAd`, `adminEmail`, `passwordAd`) VALUES
(1, 'Rhezzoune', 'Oumaima', 'tahla.hajar@gmail.com', 'tahla');

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `files`
--

INSERT INTO `files` (`id`, `name`, `file_url`) VALUES
(7, 'adjectives-to-describe-food.pdf', 'files/adjectives-to-describe-food.pdf'),
(8, 'animal-habitats-for-kids.pdf', 'files/animal-habitats-for-kids.pdf'),
(9, 'a-vs-an-kids.pdf', 'files/a-vs-an-kids.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `coption` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `options`
--

INSERT INTO `options` (`id`, `question_number`, `is_correct`, `coption`) VALUES
(1, 1, 0, 'to'),
(2, 1, 1, 'from'),
(3, 1, 0, 'at'),
(4, 1, 0, 'in'),
(5, 2, 0, 'I m a nurse'),
(6, 2, 0, 'I m a nurse'),
(7, 2, 1, 'I m fine, thanks. And you?'),
(8, 2, 0, 'I am working. '),
(9, 3, 1, 'reading'),
(10, 3, 0, 'read'),
(11, 3, 0, 'to read '),
(12, 3, 0, 'to reading');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_number` int(11) NOT NULL,
  `question_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`question_number`, `question_text`) VALUES
(1, 'I come ..... Italy'),
(2, 'Ann, how are you?'),
(3, 'I like ........ in my spare time');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(25) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(225) NOT NULL,
  `dateNaiss` date NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `nom`, `prenom`, `dateNaiss`, `sexe`, `userEmail`, `password`) VALUES
(6, 'AiTou', 'Hajar', '2000-12-15', 'femal', 'oumaimamery25@gmail.com', 'kawla'),
(10, 'rhezzoune', 'ayoub', '2005-11-09', 'male', 'ayoub@gmail.com', 'ayoub');

-- --------------------------------------------------------

--
-- Structure de la table `videoup`
--

DROP TABLE IF EXISTS `videoup`;
CREATE TABLE IF NOT EXISTS `videoup` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `videoup`
--

INSERT INTO `videoup` (`id`, `name`) VALUES
(4, 'verbs-learn-english-grammar-for-kids-english-learning.mp4'),
(5, 'free-online-english-for-kids-learn-english-kids-british-council.mp4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
