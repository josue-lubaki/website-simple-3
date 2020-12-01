-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  sam. 30 nov. 2019 à 16:21
-- Version du serveur :  8.0.18
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
-- Base de données :  `site`
--

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `1`
-- (Voir ci-dessous la vue réelle)
--
--DROP VIEW IF EXISTS `1`;
--CREATE TABLE 'activity' (
--`id` int(11) NOT NULL AUTO_INCREMENT,
--`activityname` varchar(80) NOT NULL,
--,`description` text NOT NULL,
--PRIMARY KEY (`id`)
--);

-- --------------------------------------------------------

--
-- Structure de la table `activity`
--

--DROP TABLE IF EXISTS `activity`;
CREATE TABLE 'activity' (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activityname` varchar(80) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;

-- --------------------------------------------------------

--
-- Structure de la table `dictionary`
--


CREATE TABLE `dictionary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(80) NOT NULL,
  `en` text NOT NULL,
  `fr` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

--DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(8) NOT NULL,
  `dob` date NOT NULL,
  `sex` int(11) NOT NULL,
  `activityid` int(11) NOT NULL,
  `motivation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=5;

-- --------------------------------------------------------

--
-- Structure de la table `supervisor`
--

--DROP TABLE IF EXISTS `supervisor`;
CREATE TABLE `supervisor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(80) NOT NULL,
  `activityid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;

-- --------------------------------------------------------

--
-- Structure de la vue `1`
--
--DROP TABLE IF EXISTS `1`;

--CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `1`  AS  select `activity`.`activityname` AS `activityname`,`activity`.`description` AS `description` from `activity` ;
--COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
