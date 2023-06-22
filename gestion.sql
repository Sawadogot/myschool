-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 22 juin 2023 à 17:06
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(2) NOT NULL,
  `nom_complet` varchar(50) NOT NULL,
  `email` varchar(15) NOT NULL,
  `mot_passe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `ideleve` int(10) NOT NULL,
  `nom` varchar(300) NOT NULL,
  `prenom` varchar(300) NOT NULL,
  `classe` varchar(10) NOT NULL,
  `idparent` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `eleve_trimestre`
--

CREATE TABLE `eleve_trimestre` (
  `ideleve_trimestre` int(10) NOT NULL,
  `ideleve` int(10) NOT NULL,
  `id_trimestre` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parent`
--

CREATE TABLE `parent` (
  `idparent` int(11) NOT NULL,
  `nomcomplet` varchar(400) NOT NULL,
  `email` varchar(500) NOT NULL,
  `motpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `trimestre`
--

CREATE TABLE `trimestre` (
  `id_trimestre` int(10) NOT NULL,
  `annee` int(50) NOT NULL,
  `numtrimestre` int(50) NOT NULL,
  `moyenne` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`ideleve`),
  ADD KEY `idparent` (`idparent`);

--
-- Index pour la table `eleve_trimestre`
--
ALTER TABLE `eleve_trimestre`
  ADD PRIMARY KEY (`ideleve_trimestre`),
  ADD KEY `ideleve` (`ideleve`),
  ADD KEY `id_trimestre` (`id_trimestre`);

--
-- Index pour la table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`idparent`);

--
-- Index pour la table `trimestre`
--
ALTER TABLE `trimestre`
  ADD PRIMARY KEY (`id_trimestre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `ideleve` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `eleve_trimestre`
--
ALTER TABLE `eleve_trimestre`
  MODIFY `ideleve_trimestre` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parent`
--
ALTER TABLE `parent`
  MODIFY `idparent` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `trimestre`
--
ALTER TABLE `trimestre`
  MODIFY `id_trimestre` int(10) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `eleve_ibfk_1` FOREIGN KEY (`idparent`) REFERENCES `parent` (`idparent`);

--
-- Contraintes pour la table `eleve_trimestre`
--
ALTER TABLE `eleve_trimestre`
  ADD CONSTRAINT `eleve_trimestre_ibfk_1` FOREIGN KEY (`id_trimestre`) REFERENCES `trimestre` (`id_trimestre`),
  ADD CONSTRAINT `eleve_trimestre_ibfk_2` FOREIGN KEY (`ideleve`) REFERENCES `eleve` (`ideleve`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
