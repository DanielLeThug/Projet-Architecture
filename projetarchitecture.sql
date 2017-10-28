-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 28 oct. 2017 à 13:35
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
-- Structure de la table `bâtiment`
--

CREATE TABLE `bâtiment` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `concerne`
--

CREATE TABLE `concerne` (
  `ID_FORMATION` int(32) NOT NULL,
  `ID_MATIERE` int(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `date_de_cours`
--

CREATE TABLE `date_de_cours` (
  `ID` int(32) NOT NULL,
  `DATE_C` date DEFAULT NULL,
  `HEURE` time(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `document_administratif`
--

CREATE TABLE `document_administratif` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `ID_VACATAIRE` int(32) DEFAULT NULL,
  `ID_RESPONSABLE_ADMINISTRATIF` int(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `matière`
--

CREATE TABLE `matière` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `ID_TYPE_DE_COURS` int(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `ID_BATIMENT` int(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_de_cours`
--

CREATE TABLE `type_de_cours` (
  `ID` int(32) NOT NULL,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `TARIF_HORAIRE` double(32,0) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `profil`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 0, 'fezfez\'', 'fezfee', 'daniel.wettel@gmail.com', 'dfezgfezgez'),
(2, 0, 'Jeean-Jean', 'Daniel', 'goldennoob68@gmail.com', 'gzeezgzeg');

-- --------------------------------------------------------

--
-- Structure de la table `virement`
--

CREATE TABLE `virement` (
  `ID` char(32) NOT NULL,
  `DATE_V` char(32) DEFAULT NULL,
  `EFFECTUÉ` char(32) DEFAULT NULL,
  `ID_MATIERE` int(32) DEFAULT NULL,
  `ID_DATE_COURS` int(32) DEFAULT NULL,
  `ID_SALLE` int(32) DEFAULT NULL,
  `ID_RESPONSABLE_FINANCIER` int(32) DEFAULT NULL,
  `ID_VACATAIRE` int(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bâtiment`
--
ALTER TABLE `bâtiment`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `concerne`
--
ALTER TABLE `concerne`
  ADD PRIMARY KEY (`ID_FORMATION`,`ID_MATIERE`),
  ADD KEY `ID_MATIERE` (`ID_MATIERE`);

--
-- Index pour la table `date_de_cours`
--
ALTER TABLE `date_de_cours`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `document_administratif`
--
ALTER TABLE `document_administratif`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_VACATAIRE` (`ID_VACATAIRE`),
  ADD KEY `ID_RESPONSABLE_ADMINISTRATIF` (`ID_RESPONSABLE_ADMINISTRATIF`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `matière`
--
ALTER TABLE `matière`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_TYPE_DE_COURS` (`ID_TYPE_DE_COURS`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_BATIMENT` (`ID_BATIMENT`);

--
-- Index pour la table `type_de_cours`
--
ALTER TABLE `type_de_cours`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `virement`
--
ALTER TABLE `virement`
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
-- AUTO_INCREMENT pour la table `bâtiment`
--
ALTER TABLE `bâtiment`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `date_de_cours`
--
ALTER TABLE `date_de_cours`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `document_administratif`
--
ALTER TABLE `document_administratif`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `matière`
--
ALTER TABLE `matière`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_de_cours`
--
ALTER TABLE `type_de_cours`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
