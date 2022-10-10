-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 04 mai 2019 à 00:42
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
-- Base de données :  `studio210`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nom_admin` varchar(100) NOT NULL,
  `mp_admin` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaire`, `id_sujet`, `commentaire`, `id_user`, `annee_commentaire`, `heure_commentaire`, `minute_commentaire`, `date_commentaire`) VALUES
(1, 0, 'Le contenu des enseignements est d&eacute;fini depuis juin 2001 par le nouveau Programme de formation de l\'ecole congolaise. Au Congo, les enfants entrent &agrave; l\'&eacute;cole primaire vers l\'&acirc;ge de 5 ans et compl&egrave;tent Le contenu des enseignements est d&eacute;fini depuis juin 2001 par le nouveau Programme de formation de l\'ecole congolaise. Au Congo, les enfants entrent &agrave; l\'&eacute;cole primaire vers l\'&acirc;ge de 5 ans et compl&egrave;tent', 1, 0, '', '', ''),
(2, 0, 'nbnbn d&eacute;fini b,bbhhh bvb,jbn,', 1, 0, '', '', ''),
(3, 0, 'ccccccc', 1, 0, '', '', ''),
(4, 0, 'ghygt-td-tvbhv-tfyt', 1, 0, '', '', ''),
(5, 0, 'vbnb  bb,b nbbn', 24, 0, '', '', ''),
(6, 0, 'f', 24, 0, '', '', ''),
(7, 0, 'vvv', 25, 0, '', '', ''),
(8, 0, 'ybckxn', 25, 0, '', '', ''),
(9, 0, 'vvccvbbb nnn,, bbb', 25, 2019, '12', '24', ''),
(10, 0, 'ccc', 25, 2019, '12', '24', ''),
(11, 0, 'cbgg', 25, 2019, '12', '28', '27 Apr 2019'),
(12, 0, 'vchh', 25, 2019, '12', '41', '27 Apr 2019'),
(13, 0, 'vbhhnv vnb,b bb,,bvgcg gcvccb', 1, 2019, '12', '48', '27 Apr 2019'),
(14, 0, '210Commentaires studio 210 Commentaires studio 210 Commentaires studio 210Commentaires studio 210 Commentaires studio 210 Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires Commentaires Commentaires Commentaires Commentaires Commentaires Commentaires Commentaires Commentaires Commentaires studio Commentaires Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires Commentaires Commentaires Commentaires Commentaires studio 210 Commentaires studio', 1, 2019, '13', '28', '27 Apr 2019'),
(15, 0, 'bj', 1, 2019, '13', '38', '27 Apr 2019'),
(16, 0, 'ccc', 23, 2019, '14', '48', '27 Apr 2019'),
(17, 0, 'bnb', 1, 2019, '19', '58', '3 May 2019'),
(18, 1, 'ttttt', 1, 2019, '00', '10', '4 May 2019');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires_video`
--

INSERT INTO `commentaires_video` (`id_vid`, `comment_vid`, `id_videos`, `id_user`, `annee_comment`, `heure_comment`, `minute_comment`, `date_comment`) VALUES
(1, 'Commentaires', 5, 1, 0, '', '', ''),
(2, 'studio 210', 4, 1, 0, '', '', ''),
(3, 'cvcc', 4, 1, 0, '', '', ''),
(4, 'vnvnv', 4, 1, 0, '', '', ''),
(5, 'vnvnvnnn', 4, 1, 0, '', '', ''),
(6, 'vnvnhgf', 4, 1, 0, '', '', ''),
(7, 'bbbbbbb', 4, 1, 0, '', '', ''),
(8, 'wwww', 2, 1, 0, '', '', ''),
(9, 'wwww', 2, 1, 0, '', '', ''),
(10, 'k', 5, 1, 0, '', '', ''),
(11, 'nnn', 3, 1, 0, '', '', ''),
(12, 'wyty', 4, 1, 0, '', '', ''),
(13, 'xxx', 5, 1, 0, '', '', ''),
(14, 'vvv', 5, 1, 0, '', '', ''),
(15, 'bbbbb', 5, 1, 0, '', '', ''),
(16, 'ccc', 5, 1, 0, '', '', ''),
(17, 'CCC', 5, 1, 0, '', '', ''),
(18, 'ccc', 3, 1, 0, '', '', ''),
(19, 'Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210Commentaires studio 210 Commentaires studio 210 Commentaires studio 210Commentaires studio 210 Commentaires studio 210', 3, 1, 0, '', '', ''),
(20, 'cbvh', 4, 24, 0, '', '', ''),
(21, 'cggh bb, nbnbn vxcbn hcccch ncnbc bcnxh ncnc  cncn cncnbvn ncnvnvn nbvvnc ncnvnv nvnvncnvnv nvnvh nvnv nvv,v, nvvhhb vcvbch bvbvh', 4, 1, 0, '', '', ''),
(22, 'VVVV', 4, 1, 0, '', '', ''),
(23, 'VVVV', 4, 1, 0, '', '', ''),
(24, 'vbn,,', 4, 1, 2019, '01', '38', ''),
(25, 'bn,bbbb bbb', 4, 1, 2019, '01', '41', ''),
(26, 'ggttg', 4, 1, 2019, '02', '02', '27 Apr 2019'),
(27, 'bbbbbf bbgn bvbn', 1, 1, 2019, '13', '37', '27 Apr 2019'),
(28, 'ccc', 4, 23, 2019, '14', '47', '27 Apr 2019'),
(29, 'ccc', 3, 23, 2019, '14', '50', '27 Apr 2019'),
(30, 'bbbtbt', 3, 23, 2019, '14', '54', '27 Apr 2019'),
(31, 'b b', 5, 1, 2019, '23', '32', '28 Apr 2019'),
(32, 'Commentaires Commentaires Commentaires Commentaires \r\nCommentairesCommentaires studio 210 Commentaires studio \r\n210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires stud', 5, 1, 2019, '23', '33', '28 Apr 2019'),
(33, 'Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires stud', 5, 1, 2019, '23', '38', '28 Apr 2019'),
(34, 'Commentaires Commentaires Commentaires Commentaires \r\n\r\nCommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires Commentaires Commentaires Commentaires Commentaires CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires stud?', 5, 1, 2019, '23', '40', '28 Apr 2019'),
(35, 'CommentairesCommentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires\r\n\r\n studio 210 Commentaires stud\r\n\r\n', 5, 1, 2019, '23', '43', '28 Apr 2019'),
(36, 'bv', 5, 24, 2019, '20', '59', '29 Apr 2019'),
(37, 'cx', 1, 24, 2019, '08', '40', '30 Apr 2019'),
(38, 'vbvvb', 10, 1, 2019, '00', '41', '1 May 2019'),
(39, 'bbbb', 10, 1, 2019, '01', '15', '1 May 2019'),
(40, 'XXTH', 10, 1, 2019, '12', '53', '2 May 2019'),
(41, 'CCC', 6, 1, 2019, '18', '47', '2 May 2019'),
(42, ',,nn', 10, 1, 2019, '19', '32', '3 May 2019'),
(43, 'xcw', 10, 1, 2019, '00', '06', '4 May 2019'),
(44, 'vv', 7, 1, 2019, '00', '36', '4 May 2019');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id_messages`, `nom`, `email`, `telephone`, `objet`, `message`, `date_message`, `mois_message`, `annee_message`) VALUES
(1, 'ASSAKO', 'apc@gmail.com', '069897169', 'Essai', 'bonjour', '', '', 0),
(2, 'ASSAKO', 'apc@gmail.com', '055764752', 'Essai', 'Salut', '24 Apr 2019 21h 31m 15s', 'Apr', 2019),
(3, 'wxxx', 'xx@gmail.com', '00', 'Essai', 'vbhbcb', '27 Apr 2019 15h 04m 19s', 'Apr', 2019);

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id_photo` int(11) NOT NULL,
  `nom_photo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `chemin` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`id_rep`, `id_commentaire`, `id_vid`, `reponses`, `id_user`, `annee_reponse`, `heure_reponse`, `minute_reponse`, `date_reponse`) VALUES
(1, 14, 16, 'BN?', 24, 2019, '00', '23', '30 Apr 2019'),
(2, 14, 0, 'bw bn nc', 24, 2019, '00', '10', '30 Apr 2019'),
(3, 16, 0, 'Mon comm est le num16', 24, 2019, '00', '22', '30 Apr 2019');

-- --------------------------------------------------------

--
-- Structure de la table `sujets`
--

CREATE TABLE `sujets` (
  `id_sujet` int(11) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `date_sujet` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sujets`
--

INSERT INTO `sujets` (`id_sujet`, `sujet`, `date_sujet`) VALUES
(1, 'sujet', '3 May 2019');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(30) CHARACTER SET utf8 NOT NULL,
  `pseudo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mpass` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `permis` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `tel`, `pseudo`, `mpass`, `photo`, `permis`) VALUES
(1, 'Assako', 'Précieux', '+242069897169', 'apc', 'apc', '', 1),
(14, 'MILONGO', 'Percy', '000', 'Mil', 'mil', '', 0),
(9, 'MILO', 'Per', '000000000', 'My', 'mil', '', 0),
(10, 'MILO', 'Per', '000000000', 'My', 'mil', '', 0),
(11, 'MILO', 'Per', '000000000', 'My', 'mil', '', 0),
(12, 'MILO', 'Per', '000000000', 'My', 'mil', '', 0),
(13, 'MILO', 'Per', '000000000', 'My', 'mil', '', 0),
(15, 'NARD', 'Paul', '050000000', 'paulNard', 'pn', '', 0),
(16, 'vvnv', 'vbb', '000000000', 'de', 'de', '', 0),
(17, 'cgg', 'ggcb', '000', 'vvxv', 'ccc', '', 0),
(18, 'bvcb', 'bch', '000000000', 'hh', 'hhh', '2', 0),
(19, 'bv', 'hvhv', 'b', 'cgcvc', 'bb', '', 0),
(20, 'bvb', 'cb', '000000000', 'eeb', 'as', '', 0),
(21, 'vvv', 'vvv', '050000000', 'vvv', 'vvv', '', 1),
(22, 'gcfg', 'vhvh', 'vhvh', 'xx', 'xxx', '', 1),
(23, 'gjgj', 'bggh', 'vhvhv', 'ccc', 'ccc', '', 1),
(24, 'ggg', 'gggg', '000000000', 'gg', 'gg', '20170725_091631.jpg', 1),
(25, 'gmail', 'As', '050000000', 'nn', 'nn', '1356998624095.jpg', 1);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `commentaires_video`
--
ALTER TABLE `commentaires_video`
  MODIFY `id_vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_messages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id_rep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `sujets`
--
ALTER TABLE `sujets`
  MODIFY `id_sujet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `id_videos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
