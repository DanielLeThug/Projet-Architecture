-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 04 jan. 2018 à 16:53
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
-- Base de données :  `uha_archiweb2017_g01sp02`
--

--
-- Déchargement des données de la table `batiments`
--

INSERT INTO `batiments` (`ID`, `LIBELLÉ`) VALUES
(1, 'K'),
(2, 'E'),
(3, 'F'),
(4, 'Ensisa');

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

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`ID_MATIERE`, `ID_DATE`, `ID_SALLE`, `ID_VACATAIRE`, `ID_VIREMENT`, `EFFECTUE`) VALUES
(1, 1, 1, 1, NULL, 1),
(2, 2, 2, 1, NULL, 0),
(2, 3, 2, 1, NULL, 0),
(3, 4, 4, 1, NULL, 0),
(4, 5, 6, 1, NULL, 0);

--
-- Déchargement des données de la table `dates_de_cours`
--

INSERT INTO `dates_de_cours` (`ID`, `DATE_C`, `HEURE`) VALUES
(1, '2018-01-08', '08:00:00.000000'),
(2, '2018-01-08', '10:00:00.000000'),
(3, '2018-01-08', '13:30:00.000000'),
(4, '2018-01-08', '15:45:00.000000'),
(5, '2018-01-09', '10:15:00.000000');

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`ID`, `LIBELLÉ`) VALUES
(1, 'MIAGE'),
(2, 'INFO');

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`ID`, `LIBELLÉ`, `ID_TYPE_DE_COURS`) VALUES
(1, 'Structure des organisations', 1),
(2, 'Anglais', 2),
(3, 'Droit Info', 1),
(4, 'Entrepôt de données', 3);

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

--
-- Déchargement des données de la table `types_de_cours`
--

INSERT INTO `types_de_cours` (`ID`, `LIBELLÉ`, `TARIF_HORAIRE`) VALUES
(1, 'CM', 10),
(2, 'TD', 12),
(3, 'TP', 15);

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID`, `PROFIL`, `NOM`, `PRENOM`, `EMAIL`, `MDP`) VALUES
(1, 1, 'Gates', 'Bill', 'admin@root.fr', '$2y$10$UIlO5RuFrmIXazBRD4aDheRl68dwkZ9cLaFXFF9XkJd/SGdX2Vt6m'),
(2, 1, 'Resp', 'Fina', 'resp@fina.com', '$10$UIlO5RuFrmIXazBRD4aDheRl68dwkZ9cLaFXFF9XkJd/SGdX2Vt6m');

--
-- Déchargement des données de la table `virements`
--

INSERT INTO `virements` (`ID`, `DATE_V`, `ID_RESPONSABLE_FINANCIER`) VALUES
(1, '2018-01-08', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
