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
	('asd', 'asd', 'ASD', 'DSA', '2000-01-01', 'asd@gmail.com', '019292910', 'Icona_Enderman.jpg', 985.01),
	('asd1234', 'asd', 'asdr', 'asde', '2000-10-11', '', '', 'Icona_Enderman.jpg', 0),
	('asd23', 'asd', 'asd', 'asd', '2050-08-15', '', '', 'Icona_Alex.jpg', 0),
	('asdf', 'asdf', 'AsdF', 'FdsA', '2008-06-25', '', '', 'Icona_Zombie.jpg', 0),
	('Enea_il_Figo', '1234', 'Enea', 'Fascilla', '2005-08-17', 'Enea.fascilla@gmail.com', '039202020300', 'Icona_Creeper.png', 0),
	('Fradre69', 'asd', 'Francesco', 'Vivenzio', '2006-12-23', '', '', 'Icona_Pecora.png', 0),
	('qw', 'asd', 'asdf', 'asdf', '2000-01-11', '', '', 'Icona_Steve.jpg', 0),
	('qwerty', 'qwerty', 'Qwerty', 'Tarantino', '1997-05-12', '', '', 'Icona_Zombie.jpg', 0),
	('Tormix', 'asd', 'Francesco', 'Tormene', '1986-04-09', '', '', 'Icona_Creeper.png', 0);

-- Dump della struttura di tabella minecraftsito.paginahacapitoli
CREATE TABLE IF NOT EXISTS `paginahacapitoli` (
  `IdSnapshot` char(50) NOT NULL,
  `IdCapitolo` int(11) NOT NULL,
  PRIMARY KEY (`IdSnapshot`,`IdCapitolo`),
  KEY `FK__capitoli` (`IdCapitolo`),
  CONSTRAINT `FK__capitoli` FOREIGN KEY (`IdCapitolo`) REFERENCES `capitoli` (`IdCapitolo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK__snapshotnews` FOREIGN KEY (`IdSnapshot`) REFERENCES `snapshotnews` (`IdSnapshot`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella minecraftsito.paginahacapitoli: ~12 rows (circa)
REPLACE INTO `paginahacapitoli` (`IdSnapshot`, `IdCapitolo`) VALUES
	('23w12a', 1),
	('23w12a', 2),
	('23w12a', 3),
	('23w12a', 4),
	('23w12a', 5),
	('23w12a', 6),
	('23w12a', 7),
	('23w12a', 8),
	('23w12a', 9),
	('23w12a', 10),
	('23w12a', 11),
	('23w12a', 12);

-- Dump della struttura di tabella minecraftsito.capitoli
CREATE TABLE IF NOT EXISTS `capitoli` (
  `IdCapitolo` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` enum('Introduzione','Aggiunte','Cambiamenti','Rimozioni') DEFAULT 'Introduzione',
  `NomeCap` longtext DEFAULT NULL,
  `TestoCap` longtext DEFAULT NULL,
  PRIMARY KEY (`IdCapitolo`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella minecraftsito.capitoli: ~12 rows (circa)
REPLACE INTO `capitoli` (`IdCapitolo`, `Tipo`, `NomeCap`, `TestoCap`) VALUES
	(1, 'Introduzione', 'Un\'istantanea Java di Minecraft', 'Bene, ciao amici amanti di Minecraft! È giunto il momento della prima istantanea per la versione 1.20. Sappiamo che non avevamo promesso ulteriori funzionalità importanti, quindi come siamo arrivati ​​ad avere una istantanea così grande? Pensavi che le tracce fossero finite? NO! Nello snapshot 23w12a abbiamo ancora più storie da raccontare! Apparentemente i nostri sviluppatori non hanno potuto resistere all\'aggiunta di qualche aggiunta extra. Godere!'),
	(2, 'Aggiunte', 'RISONANZA DELLE VIBRAZIONI', 'I blocchi di ametista hanno un nuovo comportamento quando vengono posizionati adiacenti ai sensori Sculk\\n\r\nSe il Sensore Sculk riceve una vibrazione, il Blocco di Ametista riemetterà la sua frequenza come vibrazione separata nella sua posizione\\n\r\nQuesto comportamento è chiamato Risonanza delle vibrazioni e consente ai giocatori di spostare le frequenze di vibrazione su lunghe distanze senza dover ricreare la vibrazione in modo naturale\\n'),
	(3, 'Aggiunte', 'SENSORI SCULK CALIBRATI', 'Una nuova variante di Sculk Sensors che consente di filtrare le vibrazioni in base al loro livello di frequenza\\n\r\nNon si trovano in natura e possono essere realizzati solo con 1 sensore Sculk e 3 frammenti di ametista nel tavolo di creazione\\n\r\nUn lato del sensore Sculk calibrato può ricevere un segnale di pietra rossa come input\\n\r\nLa forza del segnale della pietra rossa è l\'unica frequenza di vibrazione che il sensore Sculk ascolterà\\n'),
	(4, 'Aggiunte', 'ARCHEOLOGIA', 'Aggiunto il blocco Ghiaia sospetta\\n\r\nHa le stesse caratteristiche della Sabbia Sospetta\\n\r\nAggiunta ghiaia sospetta alle Rovine dell\'Oceano Freddo\\n\r\nAggiunta sabbia sospetta alle calde rovine dell\'oceano\\n\r\nLe uova da annusare possono essere trovate qui\\n\r\nAggiunte le Rovine del Sentiero, una struttura sepolta di una cultura perduta\\n\r\nQui è possibile trovare quattro finiture dell\'armatura\\n\r\nAggiunti 16 frammenti di ceramica (quindi ora ci sono 20 frammenti di ceramica in totale)\\n\r\nQuesti sono stati distribuiti tra i 5 siti archeologici: Desert Wells, Desert Temples, Cold Ocean Ruins, Warm Ocean Ruins e Trail Ruins\\n'),
	(5, 'Aggiunte', 'FINITURE PER ARMATURE', 'Nuovi modelli di forgiatura per finiture di armature sono stati aggiunti alle seguenti strutture:\\n\r\nRovine del sentiero\\n\r\nFiniture per armatura Wayfinder\\n\r\nAssetto dell\'armatura dell\'innalzatore\\n\r\nFiniture per armatura del Plasmatore\\n\r\nFinitura dell\'armatura dell\'ospite\\n\r\nCittà antica\\n\r\nFinitura dell\'armatura del silenzio\\n'),
	(6, 'Aggiunte', 'SEGNI', 'Il testo del segno ora può essere modificato dopo essere stato posizionato nel mondo\\n\r\nQuesto può essere fatto interagendo con il Segno\\n\r\nEntrambi i lati del cartello ora possono avere testo e colori separati, consentendo ulteriori opzioni di personalizzazione\\n\r\nPer impostazione predefinita, un segno ti chiederà di inserire il testo del lato anteriore una volta posizionato\\n\r\nPer applicare il testo sul retro, devi camminare sull\'altro lato e interagire con quella faccia per modificarla\\n\r\nOra i cartelli possono anche essere cerati con Honeycomb, impedendo ulteriori modifiche al testo\\n\r\nI comandi clic sui cartelli possono essere richiamati solo quando il cartello è cerato\\n\r\nSe un cartello con un comando clic non viene cerato, interagendo con esso non verrà richiamato il comando e si aprirà invece la schermata di modifica come al solito\\n'),
	(7, 'Aggiunte', 'UOVO DA ANNUSARE', 'Può essere trovato nella sabbia sospetta delle calde rovine dell\'oceano\\n\r\nQuando due Sniffer si riproducono non generano immediatamente uno Snifflet; invece, viene rilasciato un Uovo da Sniffer\\n\r\nCova\\n\r\nQuando posizionato sul muschio, l\'uovo si schiuderà dopo circa 10 minuti\\n\r\nSu tutti gli altri blocchi si schiuderà in circa 20 minuti\\n'),
	(8, 'Aggiunte', 'PIANTA CARNIVORA', 'Lo Sniffer ora può occasionalmente annusare un oggetto Pitcher Pod\\n\r\nQuesto baccello, quando piantato in un terreno agricolo, diventa un raccolto lanciatore, che ha cinque fasi di crescita\\n\r\nUna volta completamente cresciuto, il raccolto di brocca può essere raccolto, producendo una pianta brocca alta due blocchi\\n'),
	(9, 'Cambiamenti', 'CAMBIAMENTI', 'Le frequenze di vibrazione di molte azioni nel gioco sono state modificate\\n\r\nIl colore delle particelle dell\'effetto Wither è stato modificato per renderlo più distinguibile\\n\r\nIl colore della Pozione a caduta lenta è stato modificato per renderla più distinguibile\\n\r\nI suoni dei passi ora possono combinarsi per i blocchi attraversati e calpestati\\n'),
	(10, 'Cambiamenti', 'FREQUENZE DI VIBRAZIONE', 'In preparazione al sensore Sculk calibrato, le frequenze di vibrazione sono state notevolmente semplificate per prevenire interferenze indesiderate. Di seguito sono riportate le descrizioni delle categorie per ciascuna frequenza e gli eventi attesi a cui corrispondono:\\n\r\nMovimento in qualsiasi mezzo (terra, acqua e aria)\\n\r\nAtterraggio su qualsiasi superficie (terra o acqua)\\n\r\nInterazioni con gli articoli\\n\r\nScivolare con un\'elitre o azioni mob uniche (ruggito del devastatore, scuotimento del lupo, ecc.)\\n\r\nSmontare un mob o equipaggiare l\'attrezzatura\\n\r\nMontare un mob o interagire con un mob\\n\r\nMob e giocatori vengono danneggiati\\n\r\nConsumare oggetti (bere e mangiare)\\n\r\nBlocchi di "disattivazione" (chiusura della porta, chiusura del baule, pressione del pulsante, ecc.)\\n\r\nBlocchi di "attivazione" (porta aperta, baule aperto, pressione di pulsanti, ecc.)\\n\r\nModifica dei blocchi (aumento del livello dell\'acqua nel calderone, aggiunta di cibo al fuoco, ecc.)\\n\r\nBlocchi distrutti\\n\r\nBlocchi in fase di posizionamento\\n\r\nMob e giocatori si teletrasportano o si generano\\n\r\nMob e giocatori muoiono o un\'esplosione\\n'),
	(11, 'Cambiamenti', 'SUONI DI PASSI COMBINATI', 'Combina due diversi suoni di passo\\n\r\nSi verifica su tappeti, neve, germogli inferiori e radici deformate e cremisi\\n\r\nIl blocco più in alto su cui stai camminando viene giocato normalmente\\n\r\nIl blocco sottostante viene riprodotto a un volume e un tono più bassi\\n'),
	(12, 'Cambiamenti', 'FINITURE PER ARMATURE', 'Il rivestimento dell\'armatura Dune ora ha un modello nuovo di zecca e un\'icona del modello di forgiatura\\n\r\nIl vecchio modello del rivestimento dell\'armatura della duna è ora utilizzato dal rivestimento dell\'armatura della sentinella\\n\r\nÈ stata creata una nuova icona per il modello di forgiatura dell\'armatura della sentinella per adattarla a questo modello\\n\r\nIl vecchio modello dell\'armatura della sentinella è ora utilizzato dal nuovo rivestimento dell\'armatura del modellatore\\n');


-- Dump della struttura di tabella minecraftsito.giochi
CREATE TABLE IF NOT EXISTS `giochi` (
  `Id_gioco` int(11) NOT NULL DEFAULT 0,
  `Nome` char(50) DEFAULT '',
  `Costo` float DEFAULT NULL,
  `Deluxe` char(50) DEFAULT NULL,
  `Versione` char(50) DEFAULT NULL,
  `Titolo` char(200) DEFAULT NULL,
  `Descrizione` mediumtext DEFAULT NULL,
  `Foto` char(50) DEFAULT NULL,
  `Copertina` char(50) DEFAULT NULL,
  `Elementi` mediumtext DEFAULT NULL,
  PRIMARY KEY (`Id_gioco`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella minecraftsito.giochi: ~6 rows (circa)
REPLACE INTO `giochi` (`Id_gioco`, `Nome`, `Costo`, `Deluxe`, `Versione`, `Titolo`, `Descrizione`, `Foto`, `Copertina`, `Elementi`) VALUES
	(0, 'Minecraft', 14.99, 'No', 'Minecraft', 'Minecraft: Java E Bedrock Edition Deluxe Collection', 'Scopri tutti i diversi modi di esplorare, sopravvivere e costruire in Minecraft con Minecraft: Deluxe Collection per PC, che include sia le edizioni Java e Bedrock che il launcher di Minecraft! Gioca alla Bedrock Edition su un PC per esplorare gli infiniti contenuti creati dalla community nel Minecraft Marketplace, scoprire nuovi stili di gioco attraverso mappe diverse ed esprimere te stesso con le emote e gli oggetti per Creatore del personaggio.\r\n*Minecraft: Java Edition funziona su Windows, Mac e Linux; Minecraft: Bedrock Edition funziona su Windows. I contenuti della Deluxe Collection funzionano solo in Minecraft: Bedrock Edition su Windows.', 'SfondoJava.avif', 'LogoJava.avif', 'Minecraft: Java Edition\r\nMinecraft: Bedrock Edition\r\nLauncher di Minecraft'),
	(1, 'Minecraft', 19.99, 'Si', 'Deluxe Collection', 'Minecraft: Java E Bedrock Edition Deluxe Collection', 'Scopri tutti i diversi modi di esplorare, sopravvivere e costruire in Minecraft con Minecraft: Deluxe Collection per PC, che include sia le edizioni Java e Bedrock che il launcher di Minecraft! Gioca alla Bedrock Edition su un PC per esplorare gli infiniti contenuti creati dalla community nel Minecraft Marketplace, scoprire nuovi stili di gioco attraverso mappe diverse ed esprimere te stesso con le emote e gli oggetti per Creatore del personaggio.\r\n*Minecraft: Java Edition funziona su Windows, Mac e Linux; Minecraft: Bedrock Edition funziona su Windows. I contenuti della Deluxe Collection funzionano solo in Minecraft: Bedrock Edition su Windows.', 'SfondoJava.avif', 'LogoJava.avif', 'Minecraft: Java Edition\r\nMinecraft: Bedrock Edition\r\nLauncher di Minecraft\r\n1600 minecoins\r\n5 mappe\r\n5 oggetti persona\r\n3 emote\r\n3 pacchetti skin\r\n1 pacchetto texture'),
	(2, 'Dungeons', 9.99, 'No', 'Standard Edition', 'Minecraft Dungeons Ultimate Edition', 'Vivi la storia completa di Minecraft Dungeons dall\'inizio all\'End! Prova Minecraft Dungeons: Ultimate Edition, che include il gioco base e tutti e sei i contenuti scaricabili. Acquistando la Ultimate Edition, puoi ottenere l\'esperienza completa a un prezzo inferiore rispetto all\'acquisto dei singoli elementi. Ottieni subito la tua copia!', 'SfondoDungeons.jpg', 'LogoDungeons.avif', 'Gioco base\r\nLauncher'),
	(3, 'Dungeons', 19.99, 'Si', 'Ultimate Edition', 'Minecraft Dungeons Ultimate Edition', 'Vivi la storia completa di Minecraft Dungeons dall\'inizio all\'End! Prova Minecraft Dungeons: Ultimate Edition, che include il gioco base e tutti e sei i contenuti scaricabili. Acquistando la Ultimate Edition, puoi ottenere l\'esperienza completa a un prezzo inferiore rispetto all\'acquisto dei singoli elementi. Ottieni subito la tua copia!', 'SfondoDungeons.jpg', 'LogoDungeons.avif', 'Gioco base piú tutti e sei i contenuti scaricabili\r\nmantello da Eroe\r\nDue skin per i giocatori\r\nPollo'),
	(4, 'Legends', 19.84, 'No', 'Standard Edition', 'Minecraft Legends Standard Edition', 'I Piglin minacciano di esaurire il Sopramondo. Sei tu l\'eroe di cui questa pacifica terra ha bisogno? Esplora biomi lussureggianti per stringere alleanze con nuovi amici e creature familiari, quindi affronta i Piglin in epiche battaglie. Ma fai attenzione: reagiscono sempre.\r\nGioca al più grande aggiornamento gratuito dei contenuti di Minecraft Legends! Entra in azione con l\'impavida rana e unisciti alle streghe armate di pozioni, quindi costruisci calderoni per aumentare i danni dei tuoi alleati. Affronta il Clanger, un Piglin così rumoroso da stordire, ma avvicinati con cautela all\'Air Chopper in modo che i tuoi amici non vengano spazzati via!', 'SfondoLegends.jpeg', 'LogoLegends.avif', 'Gioco base\r\nLauncher'),
	(5, 'Legends', 24.99, 'Si', 'Deluxe Edition', 'Minecraft Legends Standard Edition', 'I Piglin minacciano di esaurire il Sopramondo. Sei tu l\'eroe di cui questa pacifica terra ha bisogno? Esplora biomi lussureggianti per stringere alleanze con nuovi amici e creature familiari, quindi affronta i Piglin in epiche battaglie. Ma fai attenzione: reagiscono sempre.\r\nGioca al più grande aggiornamento gratuito dei contenuti di Minecraft Legends! Entra in azione con l\'impavida rana e unisciti alle streghe armate di pozioni, quindi costruisci calderoni per aumentare i danni dei tuoi alleati. Affronta il Clanger, un Piglin così rumoroso da stordire, ma avvicinati con cautela all\'Air Chopper in modo che i tuoi amici non vengano spazzati via!', 'SfondoLegends.jpeg', 'LogoLegends.avif', 'Gioco base\r\nLauncher\r\nPacchetto skin Deluxe');

-- Dump della struttura di tabella minecraftsito.pagpref
CREATE TABLE IF NOT EXISTS `pagpref` (
  `IdPag` int(11) NOT NULL DEFAULT 0,
  `Pagina` char(50) NOT NULL DEFAULT '',
  `Tipo` char(50) DEFAULT NULL,
  `Foto` char(50) DEFAULT NULL,
  PRIMARY KEY (`IdPag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella minecraftsito.pagpref: ~19 rows (circa)
REPLACE INTO `pagpref` (`IdPag`, `Pagina`, `Tipo`, `Foto`) VALUES
	(0, 'WikiArco.php', 'Wiki', 'Arco.webp'),
	(1, 'WikiCreeper.php', 'Wiki', 'Creeper.png'),
	(2, 'WikiDiamante.php', 'Wiki', 'Diamond.png'),
	(3, 'WikiEnderDragon.php', 'Wiki', 'Ender_Dragon.webp'),
	(4, 'WikiFornace.php', 'Wiki', 'Fornace.webp'),
	(5, 'WikiHerobrine.php', 'Wiki', 'Herobrine.webp'),
	(6, 'WikiLanterna.php', 'Wiki', 'Lanterna.webp'),
	(7, 'WikiMelaDoro.php', 'Wiki', 'MelaOro.webp'),
	(8, 'WikiOro.php', 'Wiki', 'Oro.webp'),
	(9, 'WikiPistone.php', 'Wiki', 'Pistone.webp'),
	(10, 'WikiTnt.php', 'Wiki', 'Tnt.webp'),
	(11, 'GuidaCommandBlock.php', 'Guide', 'CommandBlock.webp'),
	(12, 'GuidaFireworks.php', 'Guide', 'Firework.webp'),
	(13, 'GuidaPVP.php', 'Guide', 'Spada.webp'),
	(14, 'GuidaTrovareDiamanti.php', 'Guide', 'Diamond.png'),
	(15, '20w06a.php', 'News', '20w06a.webp'),
	(16, '21w37a.php', 'News', '21w37a.webp'),
	(17, '21w39a.php', 'News', '21w39a.webp'),
	(18, '22w11a.php', 'News', '22w11a.webp');

-- Dump della struttura di tabella minecraftsito.posseduti
CREATE TABLE IF NOT EXISTS `posseduti` (
  `Id_gioco` int(11) NOT NULL DEFAULT 0,
  `Username` char(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id_gioco`,`Username`),
  KEY `FK_posseduti_giocatore` (`Username`),
  CONSTRAINT `FK_posseduti_giocatore` FOREIGN KEY (`Username`) REFERENCES `giocatore` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_posseduti_giochi` FOREIGN KEY (`Id_gioco`) REFERENCES `giochi` (`Id_gioco`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella minecraftsito.posseduti: ~0 rows (circa)

-- Dump della struttura di tabella minecraftsito.preferiti
CREATE TABLE IF NOT EXISTS `preferiti` (
  `Username` char(50) NOT NULL DEFAULT '',
  `IdPag` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`IdPag`,`Username`) USING BTREE,
  KEY `FK_preferiti_giocatore` (`Username`),
  CONSTRAINT `FK_preferiti_giocatore` FOREIGN KEY (`Username`) REFERENCES `giocatore` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_preferiti_pagpref` FOREIGN KEY (`IdPag`) REFERENCES `pagpref` (`IdPag`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella minecraftsito.preferiti: ~24 rows (circa)
REPLACE INTO `preferiti` (`Username`, `IdPag`) VALUES
	('asd', 0),
	('qwerty', 0),
	('asd', 1),
	('asd', 2),
	('asd', 3),
	('qwerty', 3),
	('asd', 4),
	('asd', 7),
	('asd', 8),
	('qwerty', 8),
	('asd', 9),
	('asd', 10),
	('asd', 11),
	('asd', 12),
	('asd', 13),
	('qwerty', 13),
	('asd', 14),
	('asd', 15),
	('asd', 16),
	('qwerty', 16),
	('asd', 17),
	('asd', 18);
	
-- Dump della struttura di tabella minecraftsito.snapshotnews
CREATE TABLE IF NOT EXISTS `snapshotnews` (
  `IdSnapshot` char(50) NOT NULL,
  `Immagine` char(50) NOT NULL,
  `Edizione` char(50) NOT NULL DEFAULT 'Java Edition',
  `Tipologia` char(50) NOT NULL DEFAULT 'Snapshot',
  `DataRilascio` date NOT NULL,
  `Versione` char(50) NOT NULL DEFAULT '1.20',
  `Prec` char(50) DEFAULT NULL,
  `Succ` char(50) DEFAULT NULL,
  PRIMARY KEY (`IdSnapshot`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella minecraftsito.snapshotnews: ~1 rows (circa)
REPLACE INTO `snapshotnews` (`IdSnapshot`, `Immagine`, `Edizione`, `Tipologia`, `DataRilascio`, `Versione`, `Prec`, `Succ`) VALUES
	('23w12a', '23w12a.avif', 'Java Edition', 'Snapshot', '2023-03-22', '1.20', '20w06a', '21w37a');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;