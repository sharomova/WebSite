-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 06 Mai 2016 à 16:42
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bigweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `portfolioprojects`
--

CREATE TABLE IF NOT EXISTS `portfolioprojects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `path_image` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `tutorialtype_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_TUTORIALTYPE_ID_idx` (`tutorialtype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `portfolioprojects`
--

INSERT INTO `portfolioprojects` (`id`, `name`, `path_image`, `description`, `tutorialtype_id`) VALUES
(1, 'Atypika', '/BigWeb2/img/atypika.png', 'C''est un site pour l''agence de voyage. Suivez nos trames d''itinéraires, modifiez-les, recomposez-les, adaptez-les à vos envies. Chez Atypika, vous créez votre voyage selon vos intérêts et votre budget. Plutôt culture ou nature, version luxe ou conviviale, à deux ou à plusieurs, concrétisez avec nous votre rêve, un voyage à votre image. ', NULL),
(2, 'Gestion KMT', '/BigWeb2/img/gestionkmt.png', 'C''est un site pour KMT. Gestion KMT est un centre de formation qui a pour mission de sensibiliser, d’informer et de former toutes celles ou tous ceux qui désirent découvrir de nouvelles façons d’améliorer leur condition de vie économique.', NULL),
(3, 'Prelevement Mobile', '/BigWeb2/img/prelevement.png', 'Nous contribuons à satisfaire notre clientèle en assurant une équipe dynamique, fiable, qualifiée, et polyvalente dont notre seul objectif sera de répondre avec urgence à tous vos besoins à brève ou à longue échéance. Nous nous engageons à vous offrir un rapport qualité inégalé. Votre satisfaction est notre priorité.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `price` decimal(2,0) DEFAULT NULL,
  `specification` varchar(45) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tutorialtype_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_UTILISATEUR_PROJECT_idx` (`user_id`),
  KEY `FK_TUTORIALTYPE_IDTUTORIALTYPE_idx` (`tutorialtype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tutorials`
--

CREATE TABLE IF NOT EXISTS `tutorials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hyperlink` varchar(300) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `tutorialtype_id` int(11) DEFAULT NULL,
  `description` varchar(2000) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `image` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_TUTORIAUX_TUTORIALTYPE_idx` (`tutorialtype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `tutorials`
--

INSERT INTO `tutorials` (`id`, `hyperlink`, `name`, `tutorialtype_id`, `description`, `image`) VALUES
(1, 'https://www.youtube.com/embed/qbii3E8wM2k', 'Facebook SDK dans Android Studio', 1, 'Ce vidéo est un tutoriel qui explique comment intégrer le SDK de Facebook dans votre application mobile Android.\r\n/n\r\nVous pourrez ensuite vous connecter sur Facebook depuis votre application et récupérer les informations du profil.', '/BigWeb2/img/android_tuto.png'),
(2, 'https://www.youtube.com/embed/Tf1T5A1jRmI', 'HTML5 create basic header', 2, 'Dans ce vidéo, on vous apprend comment créer un header, une bar de navigation et un footer pour votre site en HTML5', '/BigWeb2/img/web_tuto.png'),
(3, 'https://www.youtube.com/embed/FfwiMN1Lwxk', 'Collapsing toolbar Android', 1, 'Dans ce vidéo, on vous montre comment créer une collapsing toolbar pour votre application mobile android.\r\n\r\nLa collapsing toolbar peut affiché par exemple une image en état ouvert et lorsqu''on la ferme, l''image disparait et on peut afficher un titre.', '/BigWeb2/img/android_tuto.png'),
(4, 'https://www.youtube.com/embed/ezpOmH50Xdg', 'Background image Android', 1, 'Ce vidéo explique comment simplement ajouter une image en arrière plan dans votre application mobile android.', '/BigWeb2/img/android_tuto.png'),
(5, 'https://www.youtube.com/embed/Rh3vuifZz30', 'HTML5 custom alert', 2, 'Ce vidéo est un tutoriel sur comment créer un custom alert message dans un pop-up en HTML5', '/BigWeb2/img/web_tuto.png'),
(6, 'https://www.youtube.com/embed/GAOH7XTW7BU', 'Simple service Android.', 1, 'Dans ce vidéo, on vous explique comment créer un service. Le service est une partie de votre application qui roule toujours en background et qui put par exemple compter vos pas, etc.', '/BigWeb2/img/android_tuto.png'),
(7, 'https://www.youtube.com/embed/XWirB1nmKzk', 'HTML5 Embedding video', 2, 'Dans ce vidéo, on vous explique comment créer une page HTML5 et comment intégrer un vidéo.\r\n\r\nLa même technique peut être utilisé pour un vidéo youtube. Par contre, youtube vous créez le code d''intégration.', '/BigWeb2/img/web_tuto.png'),
(8, 'https://www.youtube.com/embed/x6jQAaLz1O8', 'Login form Android', 1, 'Ce vidéo vous explique comment créer une page de connexion pour votre application mobile android.', '/BigWeb2/img/android_tuto.png'),
(9, 'https://www.youtube.com/embed/zBEQMfkG668', 'HTML5 Create flash banner', 2, 'Voici un exemple de description. Je vais maintenant écrire n''importe quoi. Je vais faire passer ce texte pour une description, mais en fait le contenue est vide.', '/BigWeb2/img/web_tuto.png'),
(10, 'https://www.youtube.com/embed/PN1iMaVfzfQ', 'HTML5 create dropdown', 2, 'Dans ce video, on vous montre comment créer un navigation dropdown menu que vous pourrez intégrer dans votre site web.', '/BigWeb2/img/web_tuto.png');

-- --------------------------------------------------------

--
-- Structure de la table `tutorialtypes`
--

CREATE TABLE IF NOT EXISTS `tutorialtypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `tutorialtypes`
--

INSERT INTO `tutorialtypes` (`id`, `type`) VALUES
(1, 'Mobile'),
(2, 'Web');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `business_name` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `phone_number` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=127 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `username`, `password`, `business_name`, `email`, `phone_number`) VALUES
(124, 'Olivier', 'Olivier', '$2y$10$xEgW6RM4RQVMgVL/1tvCveXjlkXiQnqyZ17CH9kY5D1TUGyMgSy0a', 'BigWeb', 'olivier.cperrier@hotmail.com', '5146684126'),
(125, 'Olivier', 'Oli', '$2y$10$pvdDI51pjw6UBmLfhEorx.hkz9LDWTP.3eI1CbmqhB3lpXOXvWtuK', 'bigweb', 'olivier.cperrier@hotmail.com', '5146684126'),
(126, 'Patrick', 'Patrick', '$2y$10$J8HaJSkfIM2FpaQ/VTD2ZeYg/pCWOH2T2HPvtrSl49EfSy2N9jIha', 'bgweb', 'olivier.cperrier@hotmail.com', '5146684126');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `portfolioprojects`
--
ALTER TABLE `portfolioprojects`
  ADD CONSTRAINT `FK_TUTORIALTYPE_ID` FOREIGN KEY (`tutorialtype_id`) REFERENCES `tutorialtypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `FK_TUTORIALTYPE_IDTUTORIALTYPE` FOREIGN KEY (`tutorialtype_id`) REFERENCES `tutorialtypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_UTILISATEUR_PROJECT` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `tutorials`
--
ALTER TABLE `tutorials`
  ADD CONSTRAINT `FK_TUTORIAUX_TUTORIALTYPE` FOREIGN KEY (`tutorialtype_id`) REFERENCES `tutorialtypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
