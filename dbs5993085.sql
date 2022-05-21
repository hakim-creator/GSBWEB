-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 23 avr. 2022 à 14:57
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbs5993085`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

DROP TABLE IF EXISTS `activite`;
CREATE TABLE IF NOT EXISTS `activite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(700) NOT NULL,
  `Date_Activite` varchar(500) NOT NULL,
  `Lieu` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id`, `nom`, `Date_Activite`, `Lieu`) VALUES
(44, 'match de foot', '16/05/2056', '29 Rue de la madeleine, 31023 Toulouse'),
(34, 'symposiume', '12/26/2022', '58 Rue de la fourg, 31100 Toulouse'),
(47, 'Concour dicte', '05/12/2029', '12 Boulvard cominge, 81000 Albi'),
(46, 'Sortie musée', '12/26/2022', '25 Rue de manahattan, 31400 Toulouse');

--
-- Déclencheurs `activite`
--
DROP TRIGGER IF EXISTS `sup_activite`;
DELIMITER $$
CREATE TRIGGER `sup_activite` BEFORE DELETE ON `activite` FOR EACH ROW DELETE FROM participer
WHERE id_part = OLD.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

DROP TABLE IF EXISTS `historique`;
CREATE TABLE IF NOT EXISTS `historique` (
  `id` int(11) NOT NULL,
  `id_participer` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_participer` (`id_participer`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
CREATE TABLE IF NOT EXISTS `materiel` (
  `Id_Materiel` int(11) NOT NULL AUTO_INCREMENT,
  `typeMateriel` varchar(50) DEFAULT NULL,
  `dateAchat` varchar(50) DEFAULT NULL,
  `garantie` varchar(50) DEFAULT NULL,
  `fourni` varchar(50) DEFAULT NULL,
  `louer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Materiel`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

DROP TABLE IF EXISTS `medicament`;
CREATE TABLE IF NOT EXISTS `medicament` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(500) NOT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Effet_Second` varchar(700) NOT NULL,
  `Effet_Therap` varchar(700) NOT NULL,
  `positive` varchar(2500) NOT NULL,
  `negative` varchar(2500) NOT NULL,
  `Id_medicament2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Id_medicament2` (`Id_medicament2`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`id`, `nom`, `Description`, `Effet_Second`, `Effet_Therap`, `positive`, `negative`, `Id_medicament2`) VALUES
(4, 'Paracetamol', 'Fievre....', 'fatigue', 'soigne la gorge', 'dafalgant', 'gaze', NULL),
(9, 'Dafalgan', 'peut agire contre', 'je ne sais ', 'je sais', 'paracétamol', 'vaccin covid', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

DROP TABLE IF EXISTS `participer`;
CREATE TABLE IF NOT EXISTS `participer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(500) NOT NULL,
  `prenom` varchar(500) NOT NULL,
  `activite` varchar(500) NOT NULL,
  `date_activite` varchar(500) NOT NULL,
  `Lieu` varchar(500) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_util` int(11) DEFAULT NULL,
  `id_part` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_util` (`id_util`),
  KEY `id_part` (`id_part`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `participer`
--

INSERT INTO `participer` (`id`, `nom`, `prenom`, `activite`, `date_activite`, `Lieu`, `dateTime`, `id_util`, `id_part`) VALUES
(43, 'ALI', 'Hakim', 'Sortie musée', '12/26/2022', '25 Rue de manahattan, 31400 Toulouse', '2022-04-22 21:43:37', 17, 46),
(42, 'ALI', 'Hakim', 'symposiume', '12/26/2022', '58 Rue de la fourg, 31100 Toulouse', '2022-04-22 21:43:31', 17, 34),
(41, 'ALI', 'Hakim', 'Sortie musée', '12/26/2022', '25 Rue de manahattan, 31400 Toulouse', '2022-04-22 18:55:10', 17, 46),
(38, 'bruce', 'wayne', 'symposiume', '12/26/2022', '58 Rue de la fourg, 31100 Toulouse', '2022-04-22 18:33:03', 19, 34),
(39, 'TEST', 'TER', 'Sortie musée', '12/26/2022', '25 Rue de manahattan, 31400 Toulouse', '2022-04-22 18:36:59', 28, 46),
(44, 'ALI', 'Hakim', 'Sortie musée', '12/26/2022', '25 Rue de manahattan, 31400 Toulouse', '2022-04-23 12:36:36', 17, 46);

-- --------------------------------------------------------

--
-- Structure de la table `probleme`
--

DROP TABLE IF EXISTS `probleme`;
CREATE TABLE IF NOT EXISTS `probleme` (
  `Id_Probleme` int(11) NOT NULL AUTO_INCREMENT,
  `objet` varchar(50) DEFAULT NULL,
  `nivUrgence` varchar(50) DEFAULT NULL,
  `dateIncid` datetime DEFAULT NULL,
  `zoneInter` varchar(50) DEFAULT NULL,
  `etats` varchar(50) DEFAULT NULL,
  `priseCharge` varchar(50) DEFAULT NULL,
  `Id_Salarie` int(11) DEFAULT NULL,
  `Id_technicien` int(11) DEFAULT NULL,
  `Id_Materiel` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Probleme`),
  KEY `Id_Salarie` (`Id_Salarie`),
  KEY `Id_technicien` (`Id_technicien`),
  KEY `Id_Materiel` (`Id_Materiel`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `probleme`
--

INSERT INTO `probleme` (`Id_Probleme`, `objet`, `nivUrgence`, `dateIncid`, `zoneInter`, `etats`, `priseCharge`, `Id_Salarie`, `Id_technicien`, `Id_Materiel`) VALUES
(1, 'kjhjk', 'hjkhkjhk', '2022-04-21 09:38:56', 'hkjhkj', 'hkjhkjh', 'hjkhjk', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `provoquer`
--

DROP TABLE IF EXISTS `provoquer`;
CREATE TABLE IF NOT EXISTS `provoquer` (
  `Id_medicament` int(11) DEFAULT NULL,
  `Id_Effet` int(11) DEFAULT NULL,
  KEY `Id_medicament` (`Id_medicament`),
  KEY `Id_Effet` (`Id_Effet`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

DROP TABLE IF EXISTS `responsable`;
CREATE TABLE IF NOT EXISTS `responsable` (
  `Id_Responsable` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id_Responsable`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salarie`
--

DROP TABLE IF EXISTS `salarie`;
CREATE TABLE IF NOT EXISTS `salarie` (
  `Id_Salarie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Matricule` varchar(50) DEFAULT NULL,
  `dateAmb` varchar(50) DEFAULT NULL,
  `Region` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `poste` varchar(50) DEFAULT NULL,
  `identifiant` varchar(50) DEFAULT NULL,
  `Mot_Passe` varchar(50) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Salarie`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salarie`
--

INSERT INTO `salarie` (`Id_Salarie`, `nom`, `Prenom`, `Matricule`, `dateAmb`, `Region`, `email`, `poste`, `identifiant`, `Mot_Passe`, `type`) VALUES
(1, 'ali', 'ben', 'AB1', '07/10/21', 'Occitanie', 'fffdffzef@efezfef', 'technicien', 'aliben', 'benali', 'A'),
(3, 'vjhgjghj', 'ghjglhg', 'hlghgjh', 'ghjgjg', 'hjgjhgjh', 'gjhgjhg', 'hjghjg', 'jhgjjh', 'gjhgjhg', 'gjgj');

--
-- Déclencheurs `salarie`
--
DROP TRIGGER IF EXISTS `sup_salari`;
DELIMITER $$
CREATE TRIGGER `sup_salari` BEFORE DELETE ON `salarie` FOR EACH ROW DELETE FROM probleme
WHERE id_Salarie = OLD.id_Salarie
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

DROP TABLE IF EXISTS `technicien`;
CREATE TABLE IF NOT EXISTS `technicien` (
  `Id_technicien` int(11) NOT NULL AUTO_INCREMENT,
  `formation` varchar(50) DEFAULT NULL,
  `NivIntervention` varchar(50) DEFAULT NULL,
  `competence` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_technicien`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `traitement`
--

DROP TABLE IF EXISTS `traitement`;
CREATE TABLE IF NOT EXISTS `traitement` (
  `Id_traitement` int(11) NOT NULL AUTO_INCREMENT,
  `dateTrait` varchar(50) DEFAULT NULL,
  `heureDebut` varchar(50) DEFAULT NULL,
  `heureFin` varchar(50) DEFAULT NULL,
  `travRealis` varchar(50) DEFAULT NULL,
  `Id_Probleme` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_traitement`),
  KEY `Id_Probleme` (`Id_Probleme`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomUtilisateur` varchar(500) NOT NULL,
  `motDePasse` varchar(500) NOT NULL,
  `nomComplet` varchar(500) NOT NULL,
  `prenomComplet` varchar(500) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nomUtilisateur`, `motDePasse`, `nomComplet`, `prenomComplet`, `type`) VALUES
(27, 'alan', '296610ba95a48961985e84910244214082c93aed717365ed562e75d0ad423a7c', 'Alawa', 'Nat', NULL),
(25, 'hkhkjh', 'jkhjkhjk', 'hjkhkjhk', 'jhkjhkj', NULL),
(26, 'gjhg', '768ac8720cdeb59227cf95e98b66560ef03d8bc9a90d721779e76e68fb42f5e6', 'jhgjhg', 'hjgjhg', NULL),
(24, 'veuvenoir', '296610ba95a48961985e84910244214082c93aed717365ed562e75d0ad423a7c', 'Romanov', 'Natacha', NULL),
(19, 'bruce', '296610ba95a48961985e84910244214082c93aed717365ed562e75d0ad423a7c', 'bruce', 'wayne', NULL),
(17, 'hakimaliben', '296610ba95a48961985e84910244214082c93aed717365ed562e75d0ad423a7c', 'ALI', 'Hakim', 'A'),
(28, 'test', '296610ba95a48961985e84910244214082c93aed717365ed562e75d0ad423a7c', 'TEST', 'TER', NULL);

--
-- Déclencheurs `utilisateurs`
--
DROP TRIGGER IF EXISTS `sup_util`;
DELIMITER $$
CREATE TRIGGER `sup_util` BEFORE DELETE ON `utilisateurs` FOR EACH ROW DELETE FROM participer
WHERE id_util = OLD.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

DROP TABLE IF EXISTS `visiteur`;
CREATE TABLE IF NOT EXISTS `visiteur` (
  `Id_Visiteur` int(11) NOT NULL AUTO_INCREMENT,
  `Declar_Incid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Visiteur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
