-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 06 jan. 2018 à 17:47
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `uha_archiweb2017_g01sp03`
--
CREATE DATABASE IF NOT EXISTS `uha_archiweb2017_g01sp03` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uha_archiweb2017_g01sp03`;

-- --------------------------------------------------------

--
-- Structure de la table `batiments`
--

CREATE TABLE `batiments` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `batiments`
--

INSERT INTO `batiments` (`ID`, `LIBELLÉ`) VALUES
(1, 'K'),
(2, 'E'),
(3, 'F'),
(4, 'Ensisa');

-- --------------------------------------------------------

--
-- Structure de la table `concerne`
--

CREATE TABLE `concerne` (
  `ID_FORMATION` int(32) NOT NULL,
  `ID_MATIERE` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `concerne`
--

INSERT INTO `concerne` (`ID_FORMATION`, `ID_MATIERE`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 2),
(2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `cookies`
--

CREATE TABLE `cookies` (
  `id` int(32) NOT NULL,
  `token` char(64) NOT NULL,
  `user_id` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `ID_MATIERE` int(32) NOT NULL,
  `ID_DATE` int(32) NOT NULL,
  `ID_SALLE` int(32) NOT NULL,
  `ID_VACATAIRE` int(32) NOT NULL,
  `ID_VIREMENT` int(32) DEFAULT NULL,
  `EFFECTUE` tinyint(4) NOT NULL,
  `ID_TYPE_DE_COURS` int(32) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`ID_MATIERE`, `ID_DATE`, `ID_SALLE`, `ID_VACATAIRE`, `ID_VIREMENT`, `EFFECTUE`, `ID_TYPE_DE_COURS`, `ID`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1),
(2, 2, 2, 1, NULL, 0, 2, 2),
(2, 3, 2, 1, NULL, 0, 2, 3),
(3, 4, 4, 1, NULL, 0, 1, 4),
(4, 5, 6, 3, NULL, 0, 3, 5);

-- --------------------------------------------------------

--
-- Structure de la table `dates_de_cours`
--

CREATE TABLE `dates_de_cours` (
  `ID` int(32) NOT NULL,
  `DATE_C` date DEFAULT NULL,
  `HEURE` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dates_de_cours`
--

INSERT INTO `dates_de_cours` (`ID`, `DATE_C`, `HEURE`) VALUES
(1, '2018-01-08', '08:00:00'),
(2, '2018-01-08', '10:00:00'),
(3, '2018-01-08', '13:30:00'),
(4, '2018-01-08', '15:45:00'),
(5, '2018-01-09', '10:15:00');

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

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`ID`, `LIBELLÉ`) VALUES
(1, 'MIAGE'),
(2, 'INFO');

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`ID`, `LIBELLÉ`) VALUES
(1, 'Structure des organisations'),
(2, 'Anglais'),
(3, 'Droit Info'),
(4, 'Entrepôt de données');

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

CREATE TABLE `salles` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `ID_BATIMENT` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`ID`, `LIBELLÉ`, `ID_BATIMENT`) VALUES
(1, 'Salle 3', 2),
(2, 'Salle B', 2),
(3, 'Labo langues', 2),
(4, 'Salle 6.01', 3),
(5, 'Salle 37', 4),
(6, 'Salle 39', 4),
(7, 'Salle 100', 1),
(8, 'Salle 107', 1);

-- --------------------------------------------------------

--
-- Structure de la table `types_de_cours`
--

CREATE TABLE `types_de_cours` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `TARIF_HORAIRE` double(32,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `types_de_cours`
--

INSERT INTO `types_de_cours` (`ID`, `LIBELLÉ`, `TARIF_HORAIRE`) VALUES
(1, 'CM', 10),
(2, 'TD', 12),
(3, 'TP', 15);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `ID` int(32) NOT NULL,
  `PROFIL` int(32) DEFAULT NULL,
  `NOM` varchar(255) DEFAULT NULL,
  `PRENOM` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `MDP` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID`, `PROFIL`, `NOM`, `PRENOM`, `EMAIL`, `MDP`) VALUES
(1, 1, 'Gates', 'Bill', 'admin@root.fr', '$2y$10$UIlO5RuFrmIXazBRD4aDheRl68dwkZ9cLaFXFF9XkJd/SGdX2Vt6m'),
(2, 1, 'Resp', 'Fina', 'resp@fina.com', '$2y$10$UIlO5RuFrmIXazBRD4aDheRl68dwkZ9cLaFXFF9XkJd/SGdX2Vt6m'),
(3, 6, 'Hater', 'VAC', 'Hater@VAC.fr', '$2y$10$UIlO5RuFrmIXazBRD4aDheRl68dwkZ9cLaFXFF9XkJd/SGdX2Vt6m');

-- --------------------------------------------------------

--
-- Structure de la table `virements`
--

CREATE TABLE `virements` (
  `ID` int(32) NOT NULL,
  `DATE_V` date DEFAULT NULL,
  `ID_RESPONSABLE_FINANCIER` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `virements`
--

INSERT INTO `virements` (`ID`, `DATE_V`, `ID_RESPONSABLE_FINANCIER`) VALUES
(1, '2018-01-08', 2),
(2, '2017-12-07', 2);

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
  ADD KEY `ID_MATIERE_CONCERNE` (`ID_MATIERE`);

--
-- Index pour la table `cookies`
--
ALTER TABLE `cookies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE,
  ADD UNIQUE KEY `token` (`token`) USING BTREE,
  ADD UNIQUE KEY `cookies_ibfk_1` (`user_id`) USING BTREE;

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`ID_MATIERE`,`ID_DATE`,`ID_SALLE`,`ID_VACATAIRE`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `ID_DATE_COURS` (`ID_DATE`),
  ADD KEY `ID_VIREMENT_COURS` (`ID_VIREMENT`),
  ADD KEY `ID_SALLE_COURS` (`ID_SALLE`),
  ADD KEY `ID_VACATAIRE_COURS` (`ID_VACATAIRE`),
  ADD KEY `ID_TYPE_DE_COURS` (`ID_TYPE_DE_COURS`);

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
  ADD KEY `ID_RESPONSABLE_ADMINISTRATIF_DOC` (`ID_RESPONSABLE_ADMINISTRATIF`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `salles`
--
ALTER TABLE `salles`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_BATIMENT_SALLE` (`ID_BATIMENT`);

--
-- Index pour la table `types_de_cours`
--
ALTER TABLE `types_de_cours`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `virements`
--
ALTER TABLE `virements`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_RESPONSABLE_FINANCIER_VIREMENT` (`ID_RESPONSABLE_FINANCIER`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `batiments`
--
ALTER TABLE `batiments`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `cookies`
--
ALTER TABLE `cookies`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `dates_de_cours`
--
ALTER TABLE `dates_de_cours`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `documents_administratifs`
--
ALTER TABLE `documents_administratifs`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `salles`
--
ALTER TABLE `salles`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `types_de_cours`
--
ALTER TABLE `types_de_cours`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `virements`
--
ALTER TABLE `virements`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `concerne`
--
ALTER TABLE `concerne`
  ADD CONSTRAINT `ID_FORMATION_CONCERNE` FOREIGN KEY (`ID_FORMATION`) REFERENCES `formations` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ID_MATIERE_CONCERNE` FOREIGN KEY (`ID_MATIERE`) REFERENCES `matieres` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `cookies`
--
ALTER TABLE `cookies`
  ADD CONSTRAINT `cookies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `utilisateurs` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `ID_DATE_COURS` FOREIGN KEY (`ID_DATE`) REFERENCES `dates_de_cours` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ID_MATIERE_COURS` FOREIGN KEY (`ID_MATIERE`) REFERENCES `matieres` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ID_SALLE_COURS` FOREIGN KEY (`ID_SALLE`) REFERENCES `salles` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ID_TYPE_DE_COURS` FOREIGN KEY (`ID_TYPE_DE_COURS`) REFERENCES `types_de_cours` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ID_VACATAIRE_COURS` FOREIGN KEY (`ID_VACATAIRE`) REFERENCES `utilisateurs` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ID_VIREMENT_COURS` FOREIGN KEY (`ID_VIREMENT`) REFERENCES `virements` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `documents_administratifs`
--
ALTER TABLE `documents_administratifs`
  ADD CONSTRAINT `ID_RESPONSABLE_ADMINISTRATIF_DOC` FOREIGN KEY (`ID_RESPONSABLE_ADMINISTRATIF`) REFERENCES `utilisateurs` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `salles`
--
ALTER TABLE `salles`
  ADD CONSTRAINT `ID_BATIMENT_SALLE` FOREIGN KEY (`ID_BATIMENT`) REFERENCES `batiments` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `virements`
--
ALTER TABLE `virements`
  ADD CONSTRAINT `ID_RESPONSABLE_FINANCIER_VIREMENT` FOREIGN KEY (`ID_RESPONSABLE_FINANCIER`) REFERENCES `utilisateurs` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE; 
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
