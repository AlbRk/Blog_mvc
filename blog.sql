-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 17 Novembre 2014 à 04:44
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `date_art` date NOT NULL,
`id_art` int(5) NOT NULL,
  `title` text NOT NULL,
  `content_art` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`date_art`, `id_art`, `title`, `content_art`) VALUES
('2014-11-17', 24, 'Premier article !', 'Aujourd''hui nous avons reussi a lier notre BD a notre super blog ! \r\n\r\nC''est une grande reussite !'),
('2014-11-17', 25, 'Affichage des articles', 'Nous avons implanté l''affichage des articles dans l''ordre décroissant de leur apparition ! \r\n\r\nLe blog est beaucoup plus simple a consulté !'),
('2014-11-17', 26, 'Nouvelles fonctionnalitées', 'Ca y est !\r\n\r\nLes commentaires et les j''aimes sont arrivés :D\r\n\r\nSortez vos petit pouces et likez :D');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(5) NOT NULL,
  `user_comment` varchar(12) NOT NULL,
  `date_comment` date DEFAULT NULL,
  `content_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `comment`
--

INSERT INTO `comment` (`id_comment`, `user_comment`, `date_comment`, `content_comment`) VALUES
(26, 'admin', '2014-11-17', 'Depuis le temps, vous avez enfin implanter Ã§a !'),
(25, 'alb-rk', '2014-11-17', 'Wouaaaaww ! Magnifique :o'),
(26, 'alb-rk', '2014-11-17', 'Tu as raison admin :D');

-- --------------------------------------------------------

--
-- Structure de la table `liked`
--

CREATE TABLE `liked` (
  `art_like` int(5) DEFAULT NULL,
  `user_like` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `liked`
--

INSERT INTO `liked` (`art_like`, `user_like`) VALUES
(25, 'admin'),
(24, 'alb-rk'),
(26, 'alb-rk');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `pseudo` varchar(12) NOT NULL,
  `password` varchar(18) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `inscription` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`pseudo`, `password`, `mail`, `inscription`) VALUES
('', '', '', '2014-11-10'),
('Admin', 'Admin', 'admin@admin.fr', '2014-11-10'),
('alb-rk', 'test', 'romain.alberca@gmail.com', '2014-11-10');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id_art`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`pseudo`), ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
MODIFY `id_art` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;