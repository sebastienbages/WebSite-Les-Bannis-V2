-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 03 jan. 2020 à 09:00
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bannis`
--

-- --------------------------------------------------------

--
-- Structure de la table `quest`
--

DROP TABLE IF EXISTS `quest`;
CREATE TABLE IF NOT EXISTS `quest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `article` text COLLATE utf8_bin NOT NULL,
  `auteur` varchar(255) COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_ajout` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `quest`
--

INSERT INTO `quest` (`id`, `titre`, `article`, `auteur`, `image`, `date_ajout`) VALUES
(7, 'Valar', 'Faites-vous accueillir par Valar, vétéran de Sobek.', 'Randgeur', '../img/quest/valar.jpg', '2019-10-07'),
(8, 'Brom', 'Vous voulez combattre dans la fosse ? C\'est avec Brom que ça se passe !<br />\r\nRéussissez tous les combats et obtenez les rangs &quot;Guerrier&quot; et &quot;Champion&quot;.', 'Randgeur', '../img/quest/brom.jpg', '2019-10-07'),
(9, '', 'Obtenez une récompense unique dans la salle du trésor auprès de l\'intendant Magnus.', 'Randgeur', '../img/quest/magnus.png', '2019-10-07'),
(10, 'Bragall', 'La confrérie des Gardiens recherche un nouveau &quot;Champion&quot; !<br />\r\nDevenez la &quot;Main de Gardiens&quot; et accomplissez la volonté de Belor.', 'Randgeur', '../img/quest/bragall.png', '2019-10-07'),
(11, 'Kharon', 'Des portails démoniaques sont apparus aux quatre coins des terres et laissent entrer des créatures maudites.<br />\r\nLa &quot;Main des Gardiens&quot; doit enquêter sur cette malédiction.', 'Randgeur', '../img/quest/kharon.jpg', '2019-10-07'),
(12, '', '', 'Randgeur', '../img/quest/portail.jpg', '2019-10-07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
