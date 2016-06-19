-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 19 Juin 2016 à 23:42
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `artiste`
--

INSERT INTO `artiste` (`IDArt`, `NomArt`, `ImageArt`) VALUES
(1, 'slipknot', 'vue\\images\\artiste\\slipknot.jpg'),
(2, 'scorpions', 'vue\\images\\artiste\\scorpions.jpg'),
(3, 'the killers', 'vue\\images\\artiste\\thekillers.jpg'),
(4, 'linkin park', 'vue\\images\\artiste\\linkinpark.jpg'),
(5, 'nirvana', 'vue\\images\\artiste\\nirvana.jpg'),
(6, 'mickael jackson', 'vue\\images\\artiste\\jackson.jpg'),
(7, 'queen', 'vue\\images\\artiste\\queen.jpg'),
(8, 'jul', 'vue\\images\\artiste\\jul.jpg'),
(9, 'vald', 'vue\\images\\artiste\\vald.jpg'),
(10, 'eminem', 'vue\\images\\artiste\\eminem.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `sponsor`
--

INSERT INTO `sponsor` (`IDSponsor`, `NomSponsor`, `ImgSponsor`, `LienSponsor`) VALUES
(1, 'heineken', 'vue/images/logo/heineken.jpg', 'http://www.heineken.com/fr'),
(2, 'cochonou', 'vue/images/logo/cochonou.jpg', 'http://www.cochonou.fr/'),
(3, 'renault', 'vue/images/logo/renault.jpg', 'http://www.renault.fr/'),
(4, 'ricard', 'vue/images/logo/ricard.jpg', 'https://www.ricard.com/'),
(5, 'lego', 'vue/images/logo/lego.jpg', 'https://www.lego.com/'),
(6, 'google', 'vue/images/logo/google.jpg', 'https://www.google.com/intl/fr_fr/about/'),
(7, 'angers', 'vue/images/logo/angers.jpg', 'http://www.angers.fr/index-static.html');

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
  `LogUtil` varchar(30) NOT NULL,
  `MDPUtil` varchar(20) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`IDUtil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IDUtil`, `NomUtil`, `PnomUtil`, `RueUtil`, `CPUtil`, `VilleUtil`, `MobilUtil`, `MailUtil`, `LogUtil`, `MDPUtil`, `Admin`) VALUES
(1, 'azer', 'azer', 'azer', '12345', 'azer', 'azer', 'azer', 'azer', 'azer', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
