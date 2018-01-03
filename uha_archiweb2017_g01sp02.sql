/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 100128
Source Host           : localhost:3306
Source Database       : uha_archiweb2017_g01sp02

Target Server Type    : MYSQL
Target Server Version : 100128
File Encoding         : 65001

Date: 2018-01-02 17:37:54
*/

-- ----------------------------
-- Table structure for batiments
-- ----------------------------
DROP TABLE IF EXISTS `batiments`;
CREATE TABLE `batiments` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `LIBELLÉ` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of batiments
-- ----------------------------

-- ----------------------------
-- Table structure for dates_de_cours
-- ----------------------------
DROP TABLE IF EXISTS `dates_de_cours`;
CREATE TABLE `dates_de_cours` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `DATE_C` date DEFAULT NULL,
  `HEURE` time(6) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dates_de_cours
-- ----------------------------

-- ----------------------------
-- Table structure for formations
-- ----------------------------
DROP TABLE IF EXISTS `formations`;
CREATE TABLE `formations` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `LIBELLÉ` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of formations
-- ----------------------------

-- ----------------------------
-- Table structure for salles
-- ----------------------------
DROP TABLE IF EXISTS `salles`;
CREATE TABLE `salles` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `ID_BATIMENT` int(32) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_BATIMENT_SALLE` (`ID_BATIMENT`),
  CONSTRAINT `ID_BATIMENT_SALLE` FOREIGN KEY (`ID_BATIMENT`) REFERENCES `batiments` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of salles
-- ----------------------------

-- ----------------------------
-- Table structure for types_de_cours
-- ----------------------------
DROP TABLE IF EXISTS `types_de_cours`;
CREATE TABLE `types_de_cours` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `TARIF_HORAIRE` double(32,0) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of types_de_cours
-- ----------------------------

-- ----------------------------
-- Table structure for matieres
-- ----------------------------
DROP TABLE IF EXISTS `matieres`;
CREATE TABLE `matieres` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `ID_TYPE_DE_COURS` int(32) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_TYPE_DE_COURS_MATIERE` (`ID_TYPE_DE_COURS`),
  CONSTRAINT `ID_TYPE_DE_COURS_MATIERE` FOREIGN KEY (`ID_TYPE_DE_COURS`) REFERENCES `types_de_cours` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of matieres
-- ----------------------------

-- ----------------------------
-- Table structure for utilisateurs
-- ----------------------------
DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE `utilisateurs` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `PROFIL` int(32) DEFAULT NULL,
  `NOM` varchar(255) DEFAULT NULL,
  `PRENOM` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `MDP` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of utilisateurs
-- ----------------------------
INSERT INTO `utilisateurs` VALUES (NULL, '1', 'Gates', 'Bill', 'admin@root.fr', '$2y$10$UIlO5RuFrmIXazBRD4aDheRl68dwkZ9cLaFXFF9XkJd/SGdX2Vt6m');

-- ----------------------------
-- Table structure for documents_administratifs
-- ----------------------------
DROP TABLE IF EXISTS `documents_administratifs`;
CREATE TABLE `documents_administratifs` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `ID_VACATAIRE` int(32) DEFAULT NULL,
  `ID_RESPONSABLE_ADMINISTRATIF` int(32) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_RESPONSABLE_ADMINISTRATIF_DOC` (`ID_RESPONSABLE_ADMINISTRATIF`),
  CONSTRAINT `ID_RESPONSABLE_ADMINISTRATIF_DOC` FOREIGN KEY (`ID_RESPONSABLE_ADMINISTRATIF`) REFERENCES `utilisateurs` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of documents_administratifs
-- ----------------------------

-- ----------------------------
-- Table structure for cookies
-- ----------------------------
DROP TABLE IF EXISTS `cookies`;
CREATE TABLE `cookies` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `token` char(64) NOT NULL,
  `user_id` int(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE,
  UNIQUE KEY `token` (`token`) USING BTREE,
  UNIQUE KEY `cookies_ibfk_1` (`user_id`) USING BTREE,
  CONSTRAINT `cookies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `utilisateurs` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cookies
-- ----------------------------

-- ----------------------------
-- Table structure for virements
-- ----------------------------
DROP TABLE IF EXISTS `virements`;
CREATE TABLE `virements` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `DATE_V` char(32) DEFAULT NULL,
  `ID_RESPONSABLE_FINANCIER` int(32) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_RESPONSABLE_FINANCIER_VIREMENT` (`ID_RESPONSABLE_FINANCIER`),
  CONSTRAINT `ID_RESPONSABLE_FINANCIER_VIREMENT` FOREIGN KEY (`ID_RESPONSABLE_FINANCIER`) REFERENCES `utilisateurs` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of virements
-- ----------------------------

-- ----------------------------
-- Table structure for cours
-- ----------------------------
DROP TABLE IF EXISTS `cours`;
CREATE TABLE `cours` (
  `ID_MATIERE` int(32) NOT NULL,
  `ID_DATE` int(32) NOT NULL,
  `ID_SALLE` int(32) NOT NULL,
  `ID_VACATAIRE` int(32) NOT NULL,
  `ID_VIREMENT` int(32) DEFAULT NULL,
  `EFFECTUE` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID_MATIERE`,`ID_DATE`,`ID_SALLE`,`ID_VACATAIRE`),
  KEY `ID_DATE_COURS` (`ID_DATE`),
  KEY `ID_VIREMENT_COURS` (`ID_VIREMENT`),
  KEY `ID_SALLE_COURS` (`ID_SALLE`),
  KEY `ID_VACATAIRE_COURS` (`ID_VACATAIRE`),
  CONSTRAINT `ID_DATE_COURS` FOREIGN KEY (`ID_DATE`) REFERENCES `dates_de_cours` (`ID`),
  CONSTRAINT `ID_MATIERE_COURS` FOREIGN KEY (`ID_MATIERE`) REFERENCES `matieres` (`ID`),
  CONSTRAINT `ID_SALLE_COURS` FOREIGN KEY (`ID_SALLE`) REFERENCES `salles` (`ID`),
  CONSTRAINT `ID_VACATAIRE_COURS` FOREIGN KEY (`ID_VACATAIRE`) REFERENCES `utilisateurs` (`ID`),
  CONSTRAINT `ID_VIREMENT_COURS` FOREIGN KEY (`ID_VIREMENT`) REFERENCES `virements` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cours
-- ----------------------------

-- ----------------------------
-- Table structure for concerne
-- ----------------------------
DROP TABLE IF EXISTS `concerne`;
CREATE TABLE `concerne` (
  `ID_FORMATION` int(32) NOT NULL,
  `ID_MATIERE` int(32) NOT NULL,
  PRIMARY KEY (`ID_FORMATION`,`ID_MATIERE`),
  KEY `ID_MATIERE_CONCERNE` (`ID_MATIERE`),
  CONSTRAINT `ID_FORMATION_CONCERNE` FOREIGN KEY (`ID_FORMATION`) REFERENCES `formations` (`ID`),
  CONSTRAINT `ID_MATIERE_CONCERNE` FOREIGN KEY (`ID_MATIERE`) REFERENCES `matieres` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of concerne
-- ----------------------------
