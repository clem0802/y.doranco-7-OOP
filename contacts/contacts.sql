-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 24 août 2022 à 14:31
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
(3, 'nesrine@gmail.com', 'GAMMOUDI', 'Nesrine', 'Voici le message de Nesrine pour TP.'),
(4, 'test1@gmail.com', 'test1', 'test1', 'Voici le testing-message1 pour TP'),
(6, 'test2@gmail.com', 'test2', 'test2', 'Voici le testing-message2 pour TP'),
(7, 'test3@gmail.com', 'test3', 'test3', 'Voici le testing-message3 pour TP');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
