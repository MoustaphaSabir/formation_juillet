-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 juil. 2024 à 11:54
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `formation_juillet`
--

-- --------------------------------------------------------

--
-- Structure de la table `famille_tbl`
--

CREATE TABLE `famille_tbl` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `dateNaissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `famille_tbl`
--

INSERT INTO `famille_tbl` (`id`, `nom`, `prenom`, `statut`, `dateNaissance`) VALUES
(1, 'Dupond', 'Grégoire', 'Grand-père', '1932-05-17'),
(2, 'Dupond', 'Germaine', 'Grand-mère', '1939-02-15'),
(3, 'Dupond', 'Gérard', 'Père', '1959-12-22'),
(4, 'Dupond', 'Marie', 'Mère', '1961-03-02'),
(6, 'Dupond', 'Manon', 'Fille', '1990-11-29');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `famille_tbl`
--
ALTER TABLE `famille_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `famille_tbl`
--
ALTER TABLE `famille_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
