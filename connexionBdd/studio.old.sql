-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 04 mai 2019 à 15:32
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

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

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nom_admin` varchar(100) NOT NULL,
  `mp_admin` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `mp_admin`) VALUES
(1, 'apc', 'dupouvoir');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_commentaire` int(11) NOT NULL,
  `id_sujet` int(11) NOT NULL,
  `commentaire` text CHARACTER SET utf8 NOT NULL,
  `id_user` int(11) NOT NULL,
  `annee_commentaire` int(11) NOT NULL,
  `heure_commentaire` varchar(2) CHARACTER SET utf8 NOT NULL,
  `minute_commentaire` varchar(2) CHARACTER SET utf8 NOT NULL,
  `date_commentaire` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires_video`
--

CREATE TABLE `commentaires_video` (
  `id_vid` int(11) NOT NULL,
  `comment_vid` text NOT NULL,
  `id_videos` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `annee_comment` int(11) NOT NULL,
  `heure_comment` varchar(2) NOT NULL,
  `minute_comment` varchar(2) NOT NULL,
  `date_comment` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id_messages` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `objet` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `date_message` varchar(100) NOT NULL,
  `mois_message` varchar(10) NOT NULL,
  `annee_message` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;;

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id_photo` int(11) NOT NULL,
  `nom_photo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `chemin` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `id_rep` int(11) NOT NULL,
  `id_commentaire` int(11) DEFAULT NULL,
  `id_vid` int(11) DEFAULT NULL,
  `reponses` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `annee_reponse` int(11) NOT NULL,
  `heure_reponse` varchar(2) NOT NULL,
  `minute_reponse` varchar(2) NOT NULL,
  `date_reponse` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;;

-- --------------------------------------------------------

--
-- Structure de la table `sujets`
--

CREATE TABLE `sujets` (
  `id_sujet` int(11) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `date_sujet` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(30) CHARACTER SET utf8 NOT NULL,
  `pseudo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mpass` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `permis` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE `videos` (
  `id_videos` int(11) NOT NULL,
  `theme` varchar(100) NOT NULL,
  `msg_videos` text NOT NULL,
  `rubrique` varchar(100) NOT NULL,
  `date_video` varchar(20) NOT NULL,
  `videos` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id_videos`, `theme`, `msg_videos`, `rubrique`, `date_video`, `videos`) VALUES
(1, '', 'Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210Commentaires studio 210 Commentaires studio 210 Commentaires studio 210Commentaires studio 210 Commentaires studio 210', '', '', 'Corneille---Seul-au-monde-Live---YouTube.mp4'),
(2, 'Langue', 'studio 210 studio 210studio 210 studio 210 studio 210 studio 210studio 210 studio 210studio 210 studio 210studio 210 studio 210 studio 210 studio 210studio 210 studio 210 studio 210 studio 210studio 210 studio 210 studio 210 studio 210studio 210 studio 210 studio 210 studio 210studio 210 studio 210 studio 210 studio 210studio 210 studio 210 studio 210 studio 210studio 210 studio 210 studio 210 studio 210studio 210 studio 210studio 210 studio 210studio 210 studio 210 studio 210 studio 210studio 210 studio 210 studio 210 studio 210studio 210 studio 210 studio 210 studio 210studio 210 studio 210 studio 210 studio 210studio 210 studio 210 studio 210 studio 210studio 210 studio 210', 'Découverte', '', 'Gianna_-_Rino_Gaetano__28testo_29 (1).mp4'),
(3, '', 'Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires Commentaires Commentaires Commentaires Commentaires Commentaires Commentaires Commentaires Commentaires Commentaires studio Commentaires Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires Commentaires Commentaires Commentaires Commentaires studio 210 Commentaires studio 210Commentaires studio 210 Commentaires studio 210 Commentaires studio 210Commentaires studio 210 Commentaires studio 210', 'Arts et âmes', '', 'Gianna_-_Rino_Gaetano__28testo_29 (1).mp4'),
(4, '', '210Commentaires studio 210 Commentaires studio 210 Commentaires studio 210Commentaires studio 210 Commentaires studio 210 Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires Commentaires Commentaires Commentaires Commentaires Commentaires Commentaires Commentaires Commentaires Commentaires studio Commentaires Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires Commentaires Commentaires Commentaires Commentaires studio 210 Commentaires studio ', 'Entretien avec', '', 'Gianna_-_Rino_Gaetano__28testo_29 (1).mp4'),
(5, '', 'Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires stud', 'Jt religions', '24/04/2019', 'Corneille---Seul-au-monde-Live---YouTube.mp4'),
(6, 'thème', 'Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires stud', 'Face-à-face', '24/04/2019', 'Gianna_-_Rino_Gaetano__28testo_29 (1).mp4'),
(7, 'thème', 'Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires stud', 'Face-à-face', '24/04/2019', 'Gianna_-_Rino_Gaetano__28testo_29 (1).mp4'),
(8, 'thème', 'Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires stud', 'Face-à-face', '24/04/2019', 'Gianna_-_Rino_Gaetano__28testo_29 (1).mp4'),
(9, 'thème', 'Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires stud', 'Face-à-face', '24/04/2019', 'Gianna_-_Rino_Gaetano__28testo_29 (1).mp4'),
(10, 'thème', 'studio Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires stud', 'Face-à-face', '24/04/2019', 'Gianna_-_Rino_Gaetano__28testo_29 (1).mp4');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `commentaires_video`
--
ALTER TABLE `commentaires_video`
  ADD PRIMARY KEY (`id_vid`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_messages`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_photo`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id_rep`);

--
-- Index pour la table `sujets`
--
ALTER TABLE `sujets`
  ADD PRIMARY KEY (`id_sujet`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_videos`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `commentaires_video`
--
ALTER TABLE `commentaires_video`
  MODIFY `id_vid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_messages` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id_rep` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sujets`
--
ALTER TABLE `sujets`
  MODIFY `id_sujet` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `id_videos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
