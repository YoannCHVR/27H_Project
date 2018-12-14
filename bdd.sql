-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Client :  yoannchebijpo.mysql.db
-- Généré le :  Jeu 29 Juin 2017 à 13:48
-- Version du serveur :  5.6.34-log
-- Version de PHP :  7.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `yoannchebijpo`
--

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(255) NOT NULL,
  `date` text NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `mail` text NOT NULL,
  `mdp` text NOT NULL,
  `formation` text NOT NULL,
  `reservation` date NOT NULL,
  `groupe` text NOT NULL,
  `present` text NOT NULL,
  `reinscription` int(11) NOT NULL,
  `supprime` int(11) NOT NULL,
  `confirmation` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `profil`
--

INSERT INTO `profil` (`id`, `date`, `nom`, `prenom`, `mail`, `mdp`, `formation`, `reservation`, `groupe`, `present`, `reinscription`, `supprime`, `confirmation`) VALUES
(54, '17-06-2017 19:07', 'CHEVESSIER', 'Yoann', 'Darktigeuz-smeurf@hotmail.com', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077', 'Premiere', '2018-03-25', 'MMI1A', 'Oui', 0, 0, 0),
(53, '16-06-2017 12:02', 'CHEVESSIER', 'Yoann', 'yoann.chevessier.37390@live.fr', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077', 'Premiere', '2018-03-24', 'MMI1A', 'Oui', 0, 1, 1),
(55, '19-06-2017 21:03', 'toto', '41', 'toto@free.fr', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 'Premiere', '0000-00-00', 'MMI1A', 'Oui', 0, 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
