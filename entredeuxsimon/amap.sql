-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 02 Décembre 2014 à 11:35
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `amap`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE IF NOT EXISTS `abonnement` (
  `idAbonnement` int(11) NOT NULL AUTO_INCREMENT,
  `idUtilisateur` int(11) NOT NULL,
  `idPanier` int(11) NOT NULL,
  `duree` int(11) NOT NULL,
  `dateDebut` date NOT NULL,
  PRIMARY KEY (`idAbonnement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `idPanier` int(11) NOT NULL AUTO_INCREMENT,
  `descriptionPanier` varchar(150) NOT NULL,
  `idType` int(11) NOT NULL,
  `idTaille` int(11) NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`idPanier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`idPanier`, `descriptionPanier`, `idType`, `idTaille`, `prix`, `image`) VALUES
(1, 'un joli panier', 1, 2, 12, 'legume.jpg'),
(2, 'un joli panier', 2, 3, 14, 'fruit.jpg'),
(3, 'un joli panier', 3, 1, 7, 'fruit.jpg'),
(4, 'un joli panier', 2, 1, 17, 'legume.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `taille_panier`
--

CREATE TABLE IF NOT EXISTS `taille_panier` (
  `idTaille` int(11) NOT NULL AUTO_INCREMENT,
  `libelleTaille` varchar(50) NOT NULL,
  PRIMARY KEY (`idTaille`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `taille_panier`
--

INSERT INTO `taille_panier` (`idTaille`, `libelleTaille`) VALUES
(1, 'Mini'),
(2, 'Petit'),
(3, 'Familial');

-- --------------------------------------------------------

--
-- Structure de la table `type_panier`
--

CREATE TABLE IF NOT EXISTS `type_panier` (
  `idType` int(11) NOT NULL,
  `libelleType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_panier`
--

INSERT INTO `type_panier` (`idType`, `libelleType`) VALUES
(1, 'legumes'),
(2, 'legumes et fruits'),
(3, 'fruits');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUtil` int(11) NOT NULL AUTO_INCREMENT,
  `nomUtil` varchar(30) NOT NULL,
  `prenomUtil` varchar(30) NOT NULL,
  `rueUtil` varchar(150) NOT NULL,
  `codePostalUtil` varchar(5) NOT NULL,
  `villeUtil` varchar(30) NOT NULL,
  `telephoneUtil` varchar(10) NOT NULL,
  `telephoneMobileUtil` varchar(10) DEFAULT NULL,
  `mailUtil` varchar(50) NOT NULL,
  `loginUtil` varchar(20) NOT NULL,
  `motdepasseUtil` varchar(250) NOT NULL,
  `AdminUtilisateur` tinyint(1) NOT NULL,
  PRIMARY KEY (`idUtil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtil`, `nomUtil`, `prenomUtil`, `rueUtil`, `codePostalUtil`, `villeUtil`, `telephoneUtil`, `telephoneMobileUtil`, `mailUtil`, `loginUtil`, `motdepasseUtil`, `AdminUtilisateur`) VALUES
(1, 'Marchand', 'Guy', '50 rue de l''abricot', '72000', 'Le mans', '0243878979', NULL, 'guy.marchand@hotmail.fr', 'GuyM', 'guyguy', 0),
(2, 'Boucher', 'Sophie', '7 avenue du tofu', '57800', 'Metz', '0487923514', NULL, 'sophie', 'sophieB', 'soso', 0),
(3, 'Carter', 'John', '12 boulevard de la molette ', '48796', 'Nostran', '0148689547', NULL, 'john.admin@hotmail.fr', 'admin', 'admin', 1),
(4, 'ueoagh', 'vuoah', 'eovah', '12345', 'vopaeih', '1234567890', '1234567890', 'oeva@faefa.fr', 'iauevg', 'mot', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
