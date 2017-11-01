-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 01 nov. 2017 à 13:02
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetarchitecture`
--

-- --------------------------------------------------------

--
-- Structure de la table `batiments`
--

CREATE TABLE `batiments` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `concerne`
--

CREATE TABLE `concerne` (
  `ID_FORMATION` int(32) NOT NULL,
  `ID_MATIERE` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cookies`
--

CREATE TABLE `cookies` (
  `id` int(11) UNSIGNED NOT NULL,
  `token` char(64) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cookies`
--

INSERT INTO `cookies` (`id`, `token`, `user_id`) VALUES
(1, '4606c8c4d5ee52767ca9fa2dff6435467af75e3b', 1),
(2, 'da9620bb1ceb40283eff9436cfa2ca56d3427c10', 1);

-- --------------------------------------------------------

--
-- Structure de la table `dates_de_cours`
--

CREATE TABLE `dates_de_cours` (
  `ID` int(32) NOT NULL,
  `DATE_C` date DEFAULT NULL,
  `HEURE` time(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `documents_administratifs`
--

CREATE TABLE `documents_administratifs` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `ID_VACATAIRE` int(32) DEFAULT NULL,
  `ID_RESPONSABLE_ADMINISTRATIF` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `ID_TYPE_DE_COURS` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

CREATE TABLE `salles` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `ID_BATIMENT` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `types_de_cours`
--

CREATE TABLE `types_de_cours` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `TARIF_HORAIRE` double(32,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) UNSIGNED NOT NULL,
  `profil` int(11) UNSIGNED DEFAULT NULL,
  `nom` varchar(32) DEFAULT NULL,
  `prenom` varchar(32) DEFAULT NULL,
  `email` text,
  `mdp` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `profil`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 0, 'Wettel', 'Daniel', 'daniel.wettel@gmail.com', '$2y$10$p1FRBukpd/mfCZWTq4sZaeFuGZDp.Edp4N1dP6kMbneOctCjRuDsS'),
(2, NULL, 'Wettel', 'Daniel', 'goldennoob68@gmail.com', '$2y$10$F6LQkjxcRNil2Hk2Vu27nuKjxx6TqevoaUA2hOL0m7/b2hvtP.jPe');

-- --------------------------------------------------------

--
-- Structure de la table `virements`
--

CREATE TABLE `virements` (
  `ID` char(32) NOT NULL,
  `DATE_V` char(32) DEFAULT NULL,
  `EFFECTUÉ` char(32) DEFAULT NULL,
  `ID_MATIERE` int(32) DEFAULT NULL,
  `ID_DATE_COURS` int(32) DEFAULT NULL,
  `ID_SALLE` int(32) DEFAULT NULL,
  `ID_RESPONSABLE_FINANCIER` int(32) DEFAULT NULL,
  `ID_VACATAIRE` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `batiments`
--
ALTER TABLE `batiments`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `concerne`
--
ALTER TABLE `concerne`
  ADD PRIMARY KEY (`ID_FORMATION`,`ID_MATIERE`),
  ADD KEY `ID_MATIERE` (`ID_MATIERE`);

--
-- Index pour la table `cookies`
--
ALTER TABLE `cookies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `dates_de_cours`
--
ALTER TABLE `dates_de_cours`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `documents_administratifs`
--
ALTER TABLE `documents_administratifs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_VACATAIRE` (`ID_VACATAIRE`),
  ADD KEY `ID_RESPONSABLE_ADMINISTRATIF` (`ID_RESPONSABLE_ADMINISTRATIF`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_TYPE_DE_COURS` (`ID_TYPE_DE_COURS`);

--
-- Index pour la table `salles`
--
ALTER TABLE `salles`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_BATIMENT` (`ID_BATIMENT`);

--
-- Index pour la table `types_de_cours`
--
ALTER TABLE `types_de_cours`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `virements`
--
ALTER TABLE `virements`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_MATIERE` (`ID_MATIERE`),
  ADD KEY `ID_DATE_COURS` (`ID_DATE_COURS`),
  ADD KEY `ID_SALLE` (`ID_SALLE`),
  ADD KEY `ID_RESPONSABLE_FINANCIER` (`ID_RESPONSABLE_FINANCIER`),
  ADD KEY `ID_VACATAIRE` (`ID_VACATAIRE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `batiments`
--
ALTER TABLE `batiments`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cookies`
--
ALTER TABLE `cookies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `dates_de_cours`
--
ALTER TABLE `dates_de_cours`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `documents_administratifs`
--
ALTER TABLE `documents_administratifs`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salles`
--
ALTER TABLE `salles`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `types_de_cours`
--
ALTER TABLE `types_de_cours`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cookies`
--
ALTER TABLE `cookies`
  ADD CONSTRAINT `cookies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `utilisateurs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
