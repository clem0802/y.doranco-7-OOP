-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 24 août 2022 à 18:48
-- Version du serveur : 5.7.24
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `contacts`
--

-- --------------------------------------------------------

--
-- Structure de la table `contactslist`
--

CREATE TABLE `contactslist` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contactslist`
--

INSERT INTO `contactslist` (`id`, `email`, `nom`, `prenom`, `message`) VALUES
(1, 'clemence@gmail.com', 'TAN', 'Clémence', 'Voici le message de Clémence pour TP.'),
(2, 'fatiha@gmail.com', 'IDOMAR', 'Fatiha', 'Voici le message de Fatiha pour TP.'),
(9, 'atticus@gmail.com', 'FINCH', 'Atticus', '\"As you grow older, you\'ll see white men cheat black men every day ofyour life, but let me tell you something and don\'t you forget it - whenever a white man does that to a black man, no matter who he is, how rich he is, or how fine a family he comes from, that white man is TRASH.\" (To Kill A Mockingbird, p295) '),
(10, 'virginia@gmail.com', 'WOOLF', 'Virginia', '\"One cannot think well, love well, sleep well, if one has not dined well.\"'),
(11, 'abraham@gmail.com', 'LINCOLN', 'Abraham', '\"I am naturally anti-slavery. If slavery is not wrong, nothing is wrong. I can not remember when I did not so think, and feel.\"'),
(12, 'glenn@gmail.com', 'GOULD', 'Glenn', '\"I think that if I were required to spend the rest of my life on a desert island, and to listen to or play the music of any one composer during all that time, that composer would almost certainly be Bach.\"'),
(13, 'js@gmail.com', 'BACH', 'JS', '“Music is an agreeable harmony for the honor of God and the permissible delights of the soul. / I play the notes as they are written, but it is God who makes the music.”'),
(17, 'joseph@gmail.com', 'JOFFO', 'Joseph', 'Voilà que cette guerre, voulue, faite par des adultes aux cravates toujours très strictes et aux médailles toujours plus glorieuses, aboutissait en fin de compte à me jeter moi, un enfant, à coups de crosse, dans une pièce fermée, me privant du jour, de la liberté, moi qui n\'avais rien fait, qui ne connaissais aucun Allemand, voilà ce que maman voulait dire... (Un sac de billes, p174)');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contactslist`
--
ALTER TABLE `contactslist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contactslist`
--
ALTER TABLE `contactslist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
