-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 23 Février 2016 à 22:02
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `BDD-test2`
--

-- --------------------------------------------------------

--
-- Structure de la table `avatar`
--

CREATE TABLE IF NOT EXISTS `avatar` (
  `IdAvatar` int(11) NOT NULL AUTO_INCREMENT,
  `Avatar` varchar(45) NOT NULL,
  PRIMARY KEY (`IdAvatar`),
  UNIQUE KEY `Avatar` (`Avatar`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE IF NOT EXISTS `competence` (
  `IdCompetence` int(11) NOT NULL AUTO_INCREMENT,
  `Competence` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`IdCompetence`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `individu`
--

CREATE TABLE IF NOT EXISTS `individu` (
  `Pseudo` int(11) NOT NULL,
  `MotDePasse` int(11) NOT NULL,
  `Avatar` int(11) NOT NULL,
  `Competence` int(11) DEFAULT NULL,
  `Specialite` int(11) DEFAULT NULL,
  PRIMARY KEY (`Pseudo`),
  UNIQUE KEY `MotDePasse` (`MotDePasse`,`Avatar`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `motdepasse`
--

CREATE TABLE IF NOT EXISTS `motdepasse` (
  `IdMDP` int(11) NOT NULL AUTO_INCREMENT,
  `MotDePasse` varchar(20) NOT NULL,
  PRIMARY KEY (`IdMDP`),
  UNIQUE KEY `MotDePasse` (`MotDePasse`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pseudo`
--

CREATE TABLE IF NOT EXISTS `pseudo` (
  `IdPseudo` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(40) NOT NULL,
  PRIMARY KEY (`IdPseudo`),
  UNIQUE KEY `Pseudo` (`Pseudo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `IdScore` int(11) NOT NULL AUTO_INCREMENT,
  `Score` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdScore`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE IF NOT EXISTS `specialite` (
  `IdSpecialite` int(11) NOT NULL AUTO_INCREMENT,
  `Specialite` varchar(45) NOT NULL,
  `Score` int(11) NOT NULL,
  PRIMARY KEY (`IdSpecialite`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

alter table `individu` add foreign key (`Pseudo`) references `pseudo` (`IdPseudo`);
alter table `individu` add foreign key (`MotDePasse`) references `motdepasse` (`IdMDP`);
alter table `individu` add foreign key (`Avatar`) references `avatar` (`IdAvatar`);
alter table `individu` add foreign key (`Competence`) references `competence` (`IdCompetence`);
alter table `individu` add foreign key (`Specialite`) references `specialite` (`IdSpecialite`);
alter table `specialite` add foreign key (`Score`) references `score` (`IdScore`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
