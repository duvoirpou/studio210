-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 12 juin 2020 à 15:47
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
-- Base de données :  `studio`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nom_admin` varchar(100) NOT NULL,
  `mp_admin` text NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `mp_admin`) VALUES
(1, 'apc', 'dupouvoir');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `id_sujet` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `annee_commentaire` int(11) NOT NULL,
  `heure_commentaire` varchar(2) NOT NULL,
  `minute_commentaire` varchar(2) NOT NULL,
  `date_commentaire` varchar(100) NOT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires_video`
--

DROP TABLE IF EXISTS `commentaires_video`;
CREATE TABLE IF NOT EXISTS `commentaires_video` (
  `id_vid` int(11) NOT NULL AUTO_INCREMENT,
  `comment_vid` text NOT NULL,
  `id_videos` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `annee_comment` int(11) NOT NULL,
  `heure_comment` varchar(2) NOT NULL,
  `minute_comment` varchar(2) NOT NULL,
  `date_comment` varchar(50) NOT NULL,
  PRIMARY KEY (`id_vid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires_video`
--

INSERT INTO `commentaires_video` (`id_vid`, `comment_vid`, `id_videos`, `id_user`, `annee_comment`, `heure_comment`, `minute_comment`, `date_comment`) VALUES
(1, 'bien', 1, 1, 2020, '12', '41', '9 May 2020'),
(2, 'ff', 1, 1, 2020, '12', '42', '9 May 2020');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id_messages` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `objet` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `date_message` varchar(100) NOT NULL,
  `mois_message` varchar(10) NOT NULL,
  `annee_message` int(11) NOT NULL,
  PRIMARY KEY (`id_messages`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `id_photo` int(11) NOT NULL AUTO_INCREMENT,
  `nom_photo` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `chemin` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_photo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

DROP TABLE IF EXISTS `reponses`;
CREATE TABLE IF NOT EXISTS `reponses` (
  `id_rep` int(11) NOT NULL AUTO_INCREMENT,
  `id_commentaire` int(11) DEFAULT NULL,
  `id_vid` int(11) DEFAULT NULL,
  `reponses` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `annee_reponse` int(11) NOT NULL,
  `heure_reponse` varchar(2) NOT NULL,
  `minute_reponse` varchar(2) NOT NULL,
  `date_reponse` varchar(50) NOT NULL,
  PRIMARY KEY (`id_rep`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sujets`
--

DROP TABLE IF EXISTS `sujets`;
CREATE TABLE IF NOT EXISTS `sujets` (
  `id_sujet` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(255) NOT NULL,
  `date_sujet` varchar(20) NOT NULL,
  PRIMARY KEY (`id_sujet`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenom_user` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(30) NOT NULL,
  `pseudo` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mpass` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) NOT NULL,
  `permis` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `sexe`, `tel`, `pseudo`, `mpass`, `photo`, `permis`) VALUES
(1, 'jed', 'aaaaa', 'M', '065522333', 'jn', '123456', 'istockphoto-1029400246-1024x1024.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id_videos` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(100) NOT NULL,
  `msg_videos` text NOT NULL,
  `rubrique` varchar(100) NOT NULL,
  `date_video` varchar(20) NOT NULL,
  `videos` varchar(250) NOT NULL,
  PRIMARY KEY (`id_videos`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id_videos`, `theme`, `msg_videos`, `rubrique`, `date_video`, `videos`) VALUES
(1, 'MELCHISEDECH', '...', 'Face-à-face', '2020-01-06', '1190299952.mp4'),
(2, 'Oracle', '...', '..', '2020-01-01', '1190299952.mp4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
