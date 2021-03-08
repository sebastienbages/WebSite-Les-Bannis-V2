-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 08 mars 2021 à 22:18
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
-- Base de données : `bannis`
--

-- --------------------------------------------------------

--
-- Structure de la table `compagnon`
--

DROP TABLE IF EXISTS `compagnon`;
CREATE TABLE IF NOT EXISTS `compagnon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rule` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `compagnon`
--

INSERT INTO `compagnon` (`id`, `rule`) VALUES
(1, '10 thralls combattants maximum'),
(2, '5 animaux maximum'),
(3, 'La faim est désactivée'),
(4, '1 suivants autorisé en plus de la monture'),
(5, 'Suivants immunisés à la lave'),
(6, 'Ils doivent se situer dans vos bases ou à proximité uniquement');

-- --------------------------------------------------------

--
-- Structure de la table `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_bin NOT NULL,
  `value` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `config`
--

INSERT INTO `config` (`id`, `name`, `value`) VALUES
(1, 'ip', '135.125.97.168'),
(2, 'port', '28000');

-- --------------------------------------------------------

--
-- Structure de la table `construction`
--

DROP TABLE IF EXISTS `construction`;
CREATE TABLE IF NOT EXISTS `construction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rule` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `construction`
--

INSERT INTO `construction` (`id`, `rule`) VALUES
(1, 'Pas de constructions affreuses (type blockhaus). Soyez créatif !'),
(2, 'Pas de constructions démesurées pour un joueur solitaire'),
(3, 'Les constructions vitrees sont interdites (trop gourmand en ressources serveur)'),
(4, 'Les remparts ou structures quelconques en fondations uniquement sont interdits'),
(5, 'Par joueur solo ou clan, il est autorisé un base principale, un avant-poste et une cabane de pêche'),
(6, 'La dégradation des bâtiments est désactivée'),
(7, 'Les matériaux de construction doivent être en accord avec le paysage'),
(8, 'Interdiction de construire sur des lieux nommées et de bloquer l\'accès aux donjons, ressources rares et passages stratégiques'),
(9, 'Interdiction de construire dans le Volcan'),
(10, 'Interdiction de construire dans la zone d\'influence des world boss'),
(11, 'Une seule roue de la souffrance de chaque type par base principale/clan'),
(12, 'LES AVANTS POSTE SONT INTERDITS ainsi que les roues de la souffrance à côté de camp de pnj, vous avez tous la possibilité d\'avoir le \"/home\" pour ramener les pnjs à votre base !');

-- --------------------------------------------------------

--
-- Structure de la table `economy`
--

DROP TABLE IF EXISTS `economy`;
CREATE TABLE IF NOT EXISTS `economy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rule` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `economy`
--

INSERT INTO `economy` (`id`, `rule`) VALUES
(1, 'Des marchands sont présents à Sobek et divers lieux...'),
(2, 'Vous avez la possibilité de placer un marchand à Sobek pour vendre vos objets'),
(3, 'Votre emplacement de commerce est valide 7 jours'),
(4, 'Vous perdez 10% de votre wallet si vous mourrez (suicide compris). Vous devez acheter un banquier au comptoir du commerce pour stocker votre argent.'),
(5, '30 pièces d’argent sont distribuées toutes les 24h à tous les joueurs connectés et offline');

-- --------------------------------------------------------

--
-- Structure de la table `progression`
--

DROP TABLE IF EXISTS `progression`;
CREATE TABLE IF NOT EXISTS `progression` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rule` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `progression`
--

INSERT INTO `progression` (`id`, `rule`) VALUES
(1, 'Utiliser un vrai nom de personnage (cohérent avec l\'univers de Conan)'),
(2, 'PVE : détente, entre-aide et respect des autres joueurs'),
(3, 'XP récolte, kill et craft X2'),
(4, 'PVP : voir règles complètes sur le discord'),
(5, 'La destruction des bâtiments par les joueurs est désactivée'),
(6, 'Les purges sont activées pour 1 joueur connecté minimum (niveau 4)'),
(7, 'Les paillasses sont autorisées comme point de sauvegarde. Les lits sont interdits hors base'),
(8, 'Cycles du lever/jour/coucher/nuit augmentés raisonnablement pour plus de réalisme'),
(9, 'Faim et Soif légèrement diminuées'),
(10, 'Le vol est désactivé'),
(11, 'Le teamkill est désactivé'),
(12, '6 joueurs maxi par clan');

-- --------------------------------------------------------

--
-- Structure de la table `quest`
--

DROP TABLE IF EXISTS `quest`;
CREATE TABLE IF NOT EXISTS `quest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `article` text COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_ajout` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `quest`
--

INSERT INTO `quest` (`id`, `titre`, `article`, `image`, `date_ajout`) VALUES
(3, '', '', '../img/quest/Quest-depart-3.jpg', '2021-03-06'),
(2, '', '', '../img/quest/Quest-depart-2.jpg', '2021-03-06'),
(1, 'Début de l\'aventure !', 'Dès vos premiers pas dans les dunes de sables, vous apercevez des campements et des silhouettes ! Peut-être allez-vous trouver de l\'aide...', '../img/quest/Quest-depart-1.jpg', '2021-03-06'),
(4, '', '...', '', '2021-03-06'),
(5, 'L\'inconnue', 'Au loin, vous apercevez de la fumée. Un camp est en feu et il semblerait qu\'il y est un survivant...', '../img/quest/inconnue.jpg', '2021-03-07'),
(6, 'L\'arène de Sobek', 'Venez prouver votre habileté au combat dans l\'arène de Sobek ! Plusieurs niveaux de difficulté et rangs vous attendent...', '../img/quest/brom.jpg', '2021-03-07'),
(7, '', 'Et récupérez votre récompense auprès de l\'intendant Magnus.', '../img/quest/magnus.jpg', '2021-03-07'),
(8, 'Défis de l\'arène (journalière)', 'Vous en voulez encore ? Les défis journaliers de l\'arène sont proposés aux combattants les plus aguerris et permettent de remporter de belles récompenses...', '../img/quest/xorack.jpg', '2021-03-07'),
(9, 'Capitaine de la garde de Sobek (journalière)', 'Lyria, capitaine de la garde de Sobek recherche des volontaires pour aider ses troupes à éradiquer les indigènes autour de la ville.', '../img/quest/lyria.jpg', '2021-03-07'),
(10, 'Elu des dieux ! (journalière)', 'Combattez les élus des dieux de ces terres en combat singulier et obtenez de précieux objets. Peut-être serez-vous le nouvel Elu des dieux', '../img/quest/elu-dieux-1.jpg', '2021-03-07'),
(11, '', '', '../img/quest/elu-dieux-2.jpg', '2021-03-07'),
(12, '', '...', '', '2021-03-07');

-- --------------------------------------------------------

--
-- Structure de la table `rank`
--

DROP TABLE IF EXISTS `rank`;
CREATE TABLE IF NOT EXISTS `rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rule` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `rank`
--

INSERT INTO `rank` (`id`, `rule`) VALUES
(1, 'Plusieurs Rangs existent sur ces terres'),
(2, 'Vous démarrez l’aventure avec le rang Bannis'),
(3, 'La progression est possible via des quêtes, elles sont accessibles avec les PNJ équipés d\'un logo'),
(4, 'Les rangs vous permettront d’accéder à des lieux, marchands, quêtes supplémentaires, world boss et plein d\'autres fonctionnalités…');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
