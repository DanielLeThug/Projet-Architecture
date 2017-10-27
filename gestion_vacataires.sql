/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : gestion_vacataires

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-10-27 18:49:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bâtiment
-- ----------------------------
DROP TABLE IF EXISTS `bâtiment`;
CREATE TABLE `bâtiment` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `LIBELLÉ` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for concerne
-- ----------------------------
DROP TABLE IF EXISTS `concerne`;
CREATE TABLE `concerne` (
  `ID_FORMATION` int(32) NOT NULL,
  `ID_MATIERE` int(32) NOT NULL,
  PRIMARY KEY (`ID_FORMATION`,`ID_MATIERE`),
  KEY `ID_MATIERE` (`ID_MATIERE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for date_de_cours
-- ----------------------------
DROP TABLE IF EXISTS `date_de_cours`;
CREATE TABLE `date_de_cours` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `DATE_C` date DEFAULT NULL,
  `HEURE` time(6) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for document_administratif
-- ----------------------------
DROP TABLE IF EXISTS `document_administratif`;
CREATE TABLE `document_administratif` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `ID_VACATAIRE` int(32) DEFAULT NULL,
  `ID_RESPONSABLE_ADMINISTRATIF` int(32) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_VACATAIRE` (`ID_VACATAIRE`),
  KEY `ID_RESPONSABLE_ADMINISTRATIF` (`ID_RESPONSABLE_ADMINISTRATIF`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for formation
-- ----------------------------
DROP TABLE IF EXISTS `formation`;
CREATE TABLE `formation` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `LIBELLÉ` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for matière
-- ----------------------------
DROP TABLE IF EXISTS `matière`;
CREATE TABLE `matière` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `ID_TYPE_DE_COURS` int(32) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_TYPE_DE_COURS` (`ID_TYPE_DE_COURS`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for salle
-- ----------------------------
DROP TABLE IF EXISTS `salle`;
CREATE TABLE `salle` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `ID_BATIMENT` int(32) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_BATIMENT` (`ID_BATIMENT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for type_de_cours
-- ----------------------------
DROP TABLE IF EXISTS `type_de_cours`;
CREATE TABLE `type_de_cours` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `LIBELLÉ` char(32) DEFAULT NULL,
  `TARIF_HORAIRE` double(32,0) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for utilisateur
-- ----------------------------
DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE `utilisateur` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `PROFIL` int(32) DEFAULT NULL,
  `NOM` char(32) DEFAULT NULL,
  `PRÉNOM` char(32) DEFAULT NULL,
  `MAIL` char(32) DEFAULT NULL,
  `MDP` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for virement
-- ----------------------------
DROP TABLE IF EXISTS `virement`;
CREATE TABLE `virement` (
  `ID` char(32) NOT NULL,
  `DATE_V` char(32) DEFAULT NULL,
  `EFFECTUÉ` char(32) DEFAULT NULL,
  `ID_MATIERE` int(32) DEFAULT NULL,
  `ID_DATE_COURS` int(32) DEFAULT NULL,
  `ID_SALLE` int(32) DEFAULT NULL,
  `ID_RESPONSABLE_FINANCIER` int(32) DEFAULT NULL,
  `ID_VACATAIRE` int(32) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_MATIERE` (`ID_MATIERE`),
  KEY `ID_DATE_COURS` (`ID_DATE_COURS`),
  KEY `ID_SALLE` (`ID_SALLE`),
  KEY `ID_RESPONSABLE_FINANCIER` (`ID_RESPONSABLE_FINANCIER`),
  KEY `ID_VACATAIRE` (`ID_VACATAIRE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SET FOREIGN_KEY_CHECKS=1;
