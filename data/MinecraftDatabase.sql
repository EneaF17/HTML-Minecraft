-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.32-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database minecraftsito
CREATE DATABASE IF NOT EXISTS `minecraftsito` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `minecraftsito`;

-- Dump della struttura di tabella minecraftsito.giocatore
CREATE TABLE IF NOT EXISTS `giocatore` (
  `Username` char(50) NOT NULL DEFAULT '',
  `Password` char(50) DEFAULT NULL,
  `Nome` char(50) DEFAULT NULL,
  `Cognome` char(50) DEFAULT NULL,
  `Compleanno` date DEFAULT NULL,
  `Email` char(50) DEFAULT NULL,
  `Telefono` char(50) DEFAULT NULL,
  `Icona` char(50) DEFAULT 'Icona_Utente.png',
  `Saldo` float unsigned DEFAULT 0,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella minecraftsito.giocatore: ~9 rows (circa)
REPLACE INTO `giocatore` (`Username`, `Password`, `Nome`, `Cognome`, `Compleanno`, `Email`, `Telefono`, `Icona`, `Saldo`) VALUES
	('asd', 'asd', 'ASD', 'DSA', '2000-01-01', 'asd@gmail.com', '019292910', 'Icona_Maiale.jpg', 1000),
	('asd1234', 'asd', 'asdr', 'asde', '2000-10-11', '', '', 'Icona_Enderman.jpg', 0),
	('asd23', 'asd', 'asd', 'asd', '2050-08-15', '', '', 'Icona_Alex.jpg', 0),
	('asdf', 'asdf', 'AsdF', 'FdsA', '2008-06-25', '', '', 'Icona_Zombie.jpg', 0),
	('Enea_il_Figo', '1234', 'Enea', 'Fascilla', '2005-08-17', 'Enea.fascilla@gmail.com', '039202020300', 'Icona_Creeper.png', 0),
	('Fradre69', 'asd', 'Francesco', 'Vivenzio', '2006-12-23', '', '', 'Icona_Pecora.png', 0),
	('qw', 'asd', 'asdf', 'asdf', '2000-01-11', '', '', 'Icona_Steve.jpg', 0),
	('qwerty', 'qwerty', 'Qwerty', 'Tarantino', '1997-05-12', '', '', 'Icona_Zombie.jpg', 0),
	('Tormix', 'asd', 'Francesco', 'Tormene', '1986-04-09', '', '', 'Icona_Villager.png', 0);

-- Dump della struttura di tabella minecraftsito.pagpref
CREATE TABLE IF NOT EXISTS `pagpref` (
  `IdPag` int(11) NOT NULL DEFAULT 0,
  `Pagina` char(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`IdPag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella minecraftsito.pagpref: ~1 rows (circa)
REPLACE INTO `pagpref` (`IdPag`, `Pagina`) VALUES
	(0, 'WikiArco.php');

-- Dump della struttura di tabella minecraftsito.preferiti
CREATE TABLE IF NOT EXISTS `preferiti` (
  `Username` char(50) NOT NULL DEFAULT '',
  `IdPag` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`IdPag`,`Username`) USING BTREE,
  KEY `FK_preferiti_giocatore` (`Username`),
  CONSTRAINT `FK_preferiti_giocatore` FOREIGN KEY (`Username`) REFERENCES `giocatore` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_preferiti_pagpref` FOREIGN KEY (`IdPag`) REFERENCES `pagpref` (`IdPag`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella minecraftsito.preferiti: ~1 rows (circa)
REPLACE INTO `preferiti` (`Username`, `IdPag`) VALUES
	('asd', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
