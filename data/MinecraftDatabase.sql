-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.32-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.6.0.6765
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
  `Email` char(50) DEFAULT NULL,
  `Telefono` char(50) DEFAULT NULL,
  `Icona` char(50) DEFAULT 'Icona_Utente.png',
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella minecraftsito.giocatore: ~5 rows (circa)
INSERT INTO `giocatore` (`Username`, `Password`, `Nome`, `Cognome`, `Email`, `Telefono`, `Icona`) VALUES
	('Abdul', 'asd', 'Abdul', 'Lahllah', '', '', 'Icona_Steve.jpg'),
	('asd', 'asd', 'Ajeje', 'Brazorf', NULL, NULL, 'Icona_Creeper.png'),
	('Enea_il_Figo', '1234', 'Enea', 'Fascilla', 'enea.fascilla@gmail.com', '0392050503', 'Icona_Creeper.png'),
	('Fradre69', 'asd', 'Francesco', 'Vivenzio', '', '', 'Icona_Utente.png'),
	('qwerty', 'qwerty', 'Qwerty', 'Tarantino', NULL, NULL, 'Icona_Villager.png');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
