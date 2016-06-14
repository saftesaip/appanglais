-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 14 Juin 2016 à 14:16
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `festesaip`
--

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE IF NOT EXISTS `artiste` (
  `IDArt` int(11) NOT NULL AUTO_INCREMENT,
  `NomArt` varchar(40) NOT NULL,
  `ImageArt` varchar(40) NOT NULL,
  PRIMARY KEY (`IDArt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `artiste`
--

INSERT INTO `artiste` (`IDArt`, `NomArt`, `ImageArt`) VALUES
(1, 'Slipknot', 'slipknot.jpg'),
(2, 'Rage Against The Machine', 'ratm.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `concert`
--

CREATE TABLE IF NOT EXISTS `concert` (
  `IDConcert` int(11) NOT NULL AUTO_INCREMENT,
  `IDArtiste` int(11) NOT NULL,
  `IDScene` int(11) NOT NULL,
  `HDebConcert` datetime NOT NULL,
  `HFinConcert` datetime NOT NULL,
  PRIMARY KEY (`IDConcert`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `concert`
--

INSERT INTO `concert` (`IDConcert`, `IDArtiste`, `IDScene`, `HDebConcert`, `HFinConcert`) VALUES
(1, 1, 1, '2016-06-03 17:30:00', '2016-06-03 19:00:00'),
(3, 2, 1, '2016-06-08 19:00:00', '2016-06-08 22:30:00');

-- --------------------------------------------------------

--
-- Structure de la table `scene`
--

CREATE TABLE IF NOT EXISTS `scene` (
  `IDScene` int(11) NOT NULL AUTO_INCREMENT,
  `NomScene` varchar(30) NOT NULL,
  `DescScene` text NOT NULL,
  PRIMARY KEY (`IDScene`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `scene`
--

INSERT INTO `scene` (`IDScene`, `NomScene`, `DescScene`) VALUES
(1, 'Scene est', 'la scene du metal'),
(2, 'scene ouest', 'la scene du hard rock');

-- --------------------------------------------------------

--
-- Structure de la table `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `IDSponsor` int(11) NOT NULL AUTO_INCREMENT,
  `NomSponsor` varchar(40) NOT NULL,
  `ImgSponsor` varchar(40) NOT NULL,
  `LienSponsor` varchar(40) NOT NULL,
  PRIMARY KEY (`IDSponsor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `sponsor`
--

INSERT INTO `sponsor` (`IDSponsor`, `NomSponsor`, `ImgSponsor`, `LienSponsor`) VALUES
(1, 'Super U', 'superu.jpg', 'https://www.magasins-u.com/accueil'),
(2, 'heineken', 'heineken.jpg', 'http://www.heinekenfrance.fr/');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IDUtil` int(11) NOT NULL AUTO_INCREMENT,
  `NomUtil` varchar(30) NOT NULL,
  `PnomUtil` varchar(30) NOT NULL,
  `RueUtil` varchar(70) NOT NULL,
  `CPUtil` varchar(5) NOT NULL,
  `VilleUtil` varchar(40) NOT NULL,
  `MobilUtil` varchar(10) NOT NULL,
  `MailUtil` varchar(50) NOT NULL,
  `MDPUtil` varchar(20) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`IDUtil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
