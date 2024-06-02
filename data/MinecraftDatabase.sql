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

-- Dump della struttura di tabella minecraftsito.capitoli
CREATE TABLE IF NOT EXISTS `capitoli` (
  `IdCapitolo` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` enum('Introduzione','Aggiunte','Cambiamenti','Rimozioni') DEFAULT 'Introduzione',
  `NomeCap` longtext DEFAULT NULL,
  `TestoCap` longtext DEFAULT NULL,
  `IdSnapshotAssoc` char(50) DEFAULT NULL,
  PRIMARY KEY (`IdCapitolo`),
  KEY `FK_capitoli_snapshotnews` (`IdSnapshotAssoc`),
  CONSTRAINT `FK_capitoli_snapshotnews` FOREIGN KEY (`IdSnapshotAssoc`) REFERENCES `snapshotnews` (`IdSnapshot`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella minecraftsito.capitoli: ~39 rows (circa)
REPLACE INTO `capitoli` (`IdCapitolo`, `Tipo`, `NomeCap`, `TestoCap`, `IdSnapshotAssoc`) VALUES
	(1, 'Introduzione', 'Un\'istantanea Java di Minecraft', 'Bene, ciao amici amanti di Minecraft! È giunto il momento della prima istantanea per la versione 1.20. Sappiamo che non avevamo promesso ulteriori funzionalità importanti, quindi come siamo arrivati ​​ad avere una istantanea così grande? Pensavi che le tracce fossero finite? NO! Nello snapshot 23w12a abbiamo ancora più storie da raccontare! Apparentemente i nostri sviluppatori non hanno potuto resistere all\'aggiunta di qualche aggiunta extra. Godere!', '23w12a'),
	(2, 'Aggiunte', 'RISONANZA DELLE VIBRAZIONI', 'I blocchi di ametista hanno un nuovo comportamento quando vengono posizionati adiacenti ai sensori Sculk\\n\r\nSe il Sensore Sculk riceve una vibrazione, il Blocco di Ametista riemetterà la sua frequenza come vibrazione separata nella sua posizione\\n\r\nQuesto comportamento è chiamato Risonanza delle vibrazioni e consente ai giocatori di spostare le frequenze di vibrazione su lunghe distanze senza dover ricreare la vibrazione in modo naturale\\n', '23w12a'),
	(3, 'Aggiunte', 'SENSORI SCULK CALIBRATI', 'Una nuova variante di Sculk Sensors che consente di filtrare le vibrazioni in base al loro livello di frequenza\\n\r\nNon si trovano in natura e possono essere realizzati solo con 1 sensore Sculk e 3 frammenti di ametista nel tavolo di creazione\\n\r\nUn lato del sensore Sculk calibrato può ricevere un segnale di pietra rossa come input\\n\r\nLa forza del segnale della pietra rossa è l\'unica frequenza di vibrazione che il sensore Sculk ascolterà\\n', '23w12a'),
	(4, 'Aggiunte', 'ARCHEOLOGIA', 'Aggiunto il blocco Ghiaia sospetta\\n\r\nHa le stesse caratteristiche della Sabbia Sospetta\\n\r\nAggiunta ghiaia sospetta alle Rovine dell\'Oceano Freddo\\n\r\nAggiunta sabbia sospetta alle calde rovine dell\'oceano\\n\r\nLe uova da annusare possono essere trovate qui\\n\r\nAggiunte le Rovine del Sentiero, una struttura sepolta di una cultura perduta\\n\r\nQui è possibile trovare quattro finiture dell\'armatura\\n\r\nAggiunti 16 frammenti di ceramica (quindi ora ci sono 20 frammenti di ceramica in totale)\\n\r\nQuesti sono stati distribuiti tra i 5 siti archeologici: Desert Wells, Desert Temples, Cold Ocean Ruins, Warm Ocean Ruins e Trail Ruins\\n', '23w12a'),
	(5, 'Aggiunte', 'FINITURE PER ARMATURE', 'Nuovi modelli di forgiatura per finiture di armature sono stati aggiunti alle seguenti strutture:\\n\r\nRovine del sentiero\\n\r\nFiniture per armatura Wayfinder\\n\r\nAssetto dell\'armatura dell\'innalzatore\\n\r\nFiniture per armatura del Plasmatore\\n\r\nFinitura dell\'armatura dell\'ospite\\n\r\nCittà antica\\n\r\nFinitura dell\'armatura del silenzio\\n', '23w12a'),
	(6, 'Aggiunte', 'SEGNI', 'Il testo del segno ora può essere modificato dopo essere stato posizionato nel mondo\\n\r\nQuesto può essere fatto interagendo con il Segno\\n\r\nEntrambi i lati del cartello ora possono avere testo e colori separati, consentendo ulteriori opzioni di personalizzazione\\n\r\nPer impostazione predefinita, un segno ti chiederà di inserire il testo del lato anteriore una volta posizionato\\n\r\nPer applicare il testo sul retro, devi camminare sull\'altro lato e interagire con quella faccia per modificarla\\n\r\nOra i cartelli possono anche essere cerati con Honeycomb, impedendo ulteriori modifiche al testo\\n\r\nI comandi clic sui cartelli possono essere richiamati solo quando il cartello è cerato\\n\r\nSe un cartello con un comando clic non viene cerato, interagendo con esso non verrà richiamato il comando e si aprirà invece la schermata di modifica come al solito\\n', '23w12a'),
	(7, 'Aggiunte', 'UOVO DA ANNUSARE', 'Può essere trovato nella sabbia sospetta delle calde rovine dell\'oceano\\n\r\nQuando due Sniffer si riproducono non generano immediatamente uno Snifflet; invece, viene rilasciato un Uovo da Sniffer\\n\r\nCova\\n\r\nQuando posizionato sul muschio, l\'uovo si schiuderà dopo circa 10 minuti\\n\r\nSu tutti gli altri blocchi si schiuderà in circa 20 minuti\\n', '23w12a'),
	(8, 'Aggiunte', 'PIANTA CARNIVORA', 'Lo Sniffer ora può occasionalmente annusare un oggetto Pitcher Pod\\n\r\nQuesto baccello, quando piantato in un terreno agricolo, diventa un raccolto lanciatore, che ha cinque fasi di crescita\\n\r\nUna volta completamente cresciuto, il raccolto di brocca può essere raccolto, producendo una pianta brocca alta due blocchi\\n', '23w12a'),
	(9, 'Cambiamenti', 'CAMBIAMENTI', 'Le frequenze di vibrazione di molte azioni nel gioco sono state modificate\\n\r\nIl colore delle particelle dell\'effetto Wither è stato modificato per renderlo più distinguibile\\n\r\nIl colore della Pozione a caduta lenta è stato modificato per renderla più distinguibile\\n\r\nI suoni dei passi ora possono combinarsi per i blocchi attraversati e calpestati\\n', '23w12a'),
	(10, 'Cambiamenti', 'FREQUENZE DI VIBRAZIONE', 'In preparazione al sensore Sculk calibrato, le frequenze di vibrazione sono state notevolmente semplificate per prevenire interferenze indesiderate. Di seguito sono riportate le descrizioni delle categorie per ciascuna frequenza e gli eventi attesi a cui corrispondono:\\n\r\nMovimento in qualsiasi mezzo (terra, acqua e aria)\\n\r\nAtterraggio su qualsiasi superficie (terra o acqua)\\n\r\nInterazioni con gli articoli\\n\r\nScivolare con un\'elitre o azioni mob uniche (ruggito del devastatore, scuotimento del lupo, ecc.)\\n\r\nSmontare un mob o equipaggiare l\'attrezzatura\\n\r\nMontare un mob o interagire con un mob\\n\r\nMob e giocatori vengono danneggiati\\n\r\nConsumare oggetti (bere e mangiare)\\n\r\nBlocchi di "disattivazione" (chiusura della porta, chiusura del baule, pressione del pulsante, ecc.)\\n\r\nBlocchi di "attivazione" (porta aperta, baule aperto, pressione di pulsanti, ecc.)\\n\r\nModifica dei blocchi (aumento del livello dell\'acqua nel calderone, aggiunta di cibo al fuoco, ecc.)\\n\r\nBlocchi distrutti\\n\r\nBlocchi in fase di posizionamento\\n\r\nMob e giocatori si teletrasportano o si generano\\n\r\nMob e giocatori muoiono o un\'esplosione\\n', '23w12a'),
	(11, 'Cambiamenti', 'SUONI DI PASSI COMBINATI', 'Combina due diversi suoni di passo\\n\r\nSi verifica su tappeti, neve, germogli inferiori e radici deformate e cremisi\\n\r\nIl blocco più in alto su cui stai camminando viene giocato normalmente\\n\r\nIl blocco sottostante viene riprodotto a un volume e un tono più bassi\\n', '23w12a'),
	(12, 'Cambiamenti', 'FINITURE PER ARMATURE', 'Il rivestimento dell\'armatura Dune ora ha un modello nuovo di zecca e un\'icona del modello di forgiatura\\n\r\nIl vecchio modello del rivestimento dell\'armatura della duna è ora utilizzato dal rivestimento dell\'armatura della sentinella\\n\r\nÈ stata creata una nuova icona per il modello di forgiatura dell\'armatura della sentinella per adattarla a questo modello\\n\r\nIl vecchio modello dell\'armatura della sentinella è ora utilizzato dal nuovo rivestimento dell\'armatura del modellatore\\n', '23w12a'),
	(13, 'Introduzione', 'ISTANTANEA DI MINECRAFT 22W45A', 'Minecraft Snapshot 22w45a è ora disponibile. Questa istantanea introduce le nuove skin predefinite per i giocatori offline, i blocchi di bambù e un aggiornamento visivo per i vex. Oltre a ciò, ci sono alcune modifiche aggiuntive all\'inventario creativo.\\n\r\nBuona estrazione mineraria!', '22w45a'),
	(14, 'Aggiunte', 'Nuove Skin', 'Aggiunte nuove skin predefinite per i giocatori offline', '22w45a'),
	(15, 'Aggiunte', 'Blocco di Bambú', 'Aggiunto blocco di bambù e blocco di bambú Scortecciato\\n\r\nIl blocco di bambù può essere creato da 9 bambù e può essere rimosso come gli altri tronchi di legno\\n\r\nLe assi di bambù realizzate con blocchi di bambù producono solo 2 assi rispetto alle 4 dei tronchi di legno', '22w45a'),
	(16, 'Cambiamenti', 'Vex', 'Modifiche al modello e alle texture Vex\\n\r\nIl Vex mantiene un hitbox leggermente sovradimensionato per rendere più facile il combattimento', '22w45a'),
	(17, 'Cambiamenti', 'Inventario Creativa', 'Gli elementi riservati all\'operatore ora vengono visualizzati in una nuova scheda Utilità dell\'operatore se disponi di entrambi:\\n\r\nOpzione della scheda Elementi operatore nel menu Controlli impostata su  ON\\n\r\nLe autorizzazioni dell\'operatore richieste\\n\r\nLa scheda viene nascosta se le autorizzazioni dell\'operatore vengono perse mentre l\'inventario è aperto\\n\r\nOra include anche i blocchi strutturali e tutti i livelli di luce dei blocchi luminosi\\n\r\nAggiunta una scheda Blocchi colorati\\n\r\nContiene tutti i blocchi con 16 varianti di colore\\n\r\nSpostati invece tutti i blocchi colorati dalla scheda Blocchi di costruzione a questa scheda per rendere la scheda meno dimensionabile\\n\r\nLa scheda Materiali di consumo è stata rinominata scheda Cibo e bevande per avere un nome più semplice\\n\r\nLa scheda Creazione è stata rinominata scheda Ingredienti poiché non tutti gli oggetti vengono utilizzati nella creazione\\n\r\nRiordinato\\n\r\nBlocchi naturali\\n\r\nMaggiore coerenza tra i tipi per la sezione superiore\\n\r\nLe uova sono state spostate tra i semi e le piante a blocco singolo\\n\r\nPosizionate piante rampicanti sopra piante a doppio blocco\\n\r\nCibo e bevande\\n\r\nLe versioni cotte del cibo crudo sono ora una accanto all\'altra\\n\r\nBlocchi di pietra rossa\\n\r\nMeno ingombrante\\n\r\nElementi di maggiore importanza in alto\\n\r\nRimosse le varianti di Porte, Botole, Pulsanti e Barche che non presentano alcuna differenza funzionale\\n\r\ningredienti\\n\r\nPosiziona il lapislazzuli nello stesso ordine dei blocchi di minerale\\n\r\nMosso\\n\r\nBottiglia di esperienza dalla scheda Strumenti e utilità alla scheda Ingredienti accanto a libri incantevoli\\n\r\nAggiunto\\n\r\nTutti gli assi nella scheda Combattimento (rimangono anche nella scheda Strumenti e utilità)\\n\r\nTutti i possibili stufati sospetti nella scheda Materiali di consumo\\n\r\nLa descrizione comando mostrerà l\'effetto di uno stufato prima che venga raccolto dall\'inventario creativo\\n\r\nSono elencati solo gli stufati con effetti disponibili tramite creazione o Mooshrooms\\n\r\nPiastre di pressione e pulsanti di ciascun tipo nella scheda Blocchi di costruzione\\n\r\nQuasi tutti i blocchi di illuminazione nella parte superiore della scheda Blocchi funzionali\\n\r\nTutte e 3 le durate di volo di Fuochi d\'artificio alla scheda Strumenti e utilità e alla scheda Combattimento accanto a Balestra\\n\r\nEye of Ender accanto al blocco End Portal Frame nella scheda Funzionale per una migliore facilità d\'uso\\n\r\nLe descrizioni comando per tutti gli elementi nel menu Creativo al di fuori delle schede a categoria singola mostreranno le categorie in cui è possibile trovare questo elemento\\n\r\nIn precedenza ciò accadeva solo nella scheda di ricerca\\n', '22w45a'),
	(18, 'Introduzione', 'ISTANTANEA DI MINECRAFT 24W09A', 'Ciao! Ecco un\'istantanea leggermente più grande del solito con molti cambiamenti tecnici, interfaccia utente aggiornata, un\'altra iterazione di Wolf Armor e modifiche alle nuove funzionalità.\\n\r\nSin dal rilascio iniziale dell\'Armatura del lupo, abbiamo lavorato per migliorarla per aumentarne la protezione, l\'usabilità e aggiungere personalizzazione. Per la protezione c\'è un nuovo approccio all\'armatura, che considera la necessità del giocatore di vedere rapidamente lo stato dell\'armatura senza utilizzare elementi dell\'interfaccia utente e la capacità di agire rapidamente per aiutare il proprio lupo domestico se necessario. Per favore provalo e facci sapere cosa ne pensi sul sito di feedback: parliamo di Wolf Armor!', '24w09a'),
	(19, 'Aggiunte', 'Bogged', 'Il Bogged rilascia 2 funghi (entrambi rossi/marroni o uno di ciascuno) quando viene tosato\\n\r\nTexture e modello del bogged aggiornati', '24w09a'),
	(20, 'Cambiamenti', 'Vault', 'Ulteriori modifiche alla texture del Vault per distinguerla ancora di più dai Trial Spawner', '24w09a'),
	(21, 'Cambiamenti', 'Armatura del Lupo', 'L\'armatura del lupo proteggerà il lupo dalla maggior parte delle fonti di danno finché l\'armatura non perde tutta la sua durata e si rompe\\n\r\nL\'armatura del lupo mostra segni di maggiore rottura man mano che la durabilità diminuisce\\n\r\nI giocatori possono riparare l\'Armatura del Lupo con Armadillo Scutes mentre è equipaggiata sul Lupo\\n\r\nL\'armatura di lupo può essere tinta in modo simile all\'armatura di cuoio\\n\r\nIl proprietario del lupo ora può riparare l\'armatura del lupo su un lupo', '24w09a'),
	(22, 'Cambiamenti', 'Interfaccia Utente', 'L\'interfaccia utente è stata aggiornata per sfoggiare un aspetto più fresco ed essere più coerente per quanto riguarda il layout dei diversi elementi dell\'interfaccia utente, il tutto mantenendo l\'essenza e la sensazione delle vecchie schermate.\\n\r\nCome sempre, siamo ansiosi di ascoltare i vostri pensieri e opinioni su ulteriori miglioramenti o modifiche. Fateci sapere cosa ne pensate nel sito di feedback dedicato .\\n\r\nLa texture sporca dello sfondo del menu è stata sostituita da uno sfondo più scuro', '24w09a'),
	(23, 'Rimozioni', 'Carica Di Vento', 'Rimossa la casualità dal raggio delle cariche di vento sparate sia dalla Brezza che dai giocatori', '24w09a'),
	(24, 'Introduzione', 'ISTANTANEA DI MINECRAFT 21W19A', 'A partire da questa istantanea, candele, pacchetti e sensori Sculk sono accessibili solo tramite comandi. Riteniamo che non abbiano la qualità che desideriamo per la Parte 1 della versione di Caves & Cliffs. Per continuare a provare queste funzionalità in modalità sopravvivenza, utilizza il pacchetto dati Anteprima!', '21w19a'),
	(25, 'Cambiamenti', 'Varie', 'La lunghezza massima dei nomi degli oggetti nell\'interfaccia utente dell\'incudine è stata aumentata da 35 a 50\\n\r\nHa reso i geodi significativamente più rari\\n\r\nGli oggetti non completati (Sculk Sensor, Bundle e Candele) sono stati rimossi dall\'inventario della creatività\\n\r\nLe ricette per gli oggetti non completati (fasci, candele) sono state rimosse', '21w19a'),
	(26, 'Cambiamenti', 'MODIFICHE ALL\'ANTEPRIMA DI GROTTE E SCOGLIERE', 'Scarica il  datapack aggiornato .\\n\r\nIl pacchetto ora include ricette relative a fagottini e candele', '21w19a'),
	(27, 'Introduzione', 'ISTANTANEA DI MINECRAFT 21W03A', 'L\'istantanea di Caves & Cliffs di oggi è particolarmente brillante! Si potrebbe quasi dire che brilla... Oh aspetta, quello è un calamaro.', '21w03a'),
	(28, 'Aggiunte', 'Lichene Luminoso', 'Una fioca fonte di luce che si genera nelle caverne.\\n\r\nUsa le cesoie per raccoglierlo.\\n\r\nUsa la farina d\'ossa per spargerla lungo le superfici dei blocchi.', '21w03a'),
	(29, 'Aggiunte', 'Calamari Luminosi', 'Sono stati aggiunti i calamari luminosi, ma non si generano ancora naturalmente. Puoi trovare le uova di spawn per loro nell\'inventario creativo.\\n\r\nI Glow Squid sono ben illuminati e possono essere visti anche da distanze molto lontane!\\n\r\nQuando vengono uccisi, i calamari luminosi rilasciano sacche di inchiostro luminoso.\\n\r\nLe sacche di inchiostro fluorescente possono essere utilizzate sui cartelli per rendere il testo super visibile, anche di notte! Funziona con i colori!\\n\r\nCrea una cornice per oggetto luminoso combinando una sacca di inchiostro luminoso con una cornice per oggetto in un tavolo da lavoro. Qualsiasi oggetto in una cornice luminosa è perfettamente illuminato, anche di notte!\\n\r\nUsa una sacca di inchiostro su un cartello per rimuovere l\'effetto bagliore.\\n\r\nGli Axolotl attaccheranno tutti i calamari luminosi che vedono, quindi... fai attenzione.', '21w03a'),
	(30, 'Cambiamenti', 'Dripstone Blocks', 'I blocchi di gocciolatoio possono essere realizzati da gocciolatoio a 4 punte.', '21w03a'),
	(31, 'Introduzione', 'ISTANTANEA DI MINECRAFT 20W45A', 'Le cose buone arrivano a coloro che aspettano, e crediamo che tu abbia aspettato abbastanza a lungo. La prima istantanea di Caves & Cliffs è finalmente arrivata ed è pronta per entrare nell\'edizione Java di Minecraft! Ci auguriamo che tu ne sia entusiasta quanto noi, perché questa istantanea ti offre una varietà di funzionalità, alcune modifiche alle funzionalità esistenti e alcune modifiche tecniche. Tutto è elencato in questo post del blog e non vediamo l\'ora di vederti sperimentare tutto.\\n\r\nBuona estrazione mineraria!', '20w45a'),
	(32, 'Aggiunte', 'Blocchi di Ametista', 'L\'ametista si presenta sotto forma di blocco all\'interno dei geodi in due modi: blocco di ametista e ametista in erba.\\n\r\nTutti i tipi di blocchi di ametista (cluster inclusi) creano bellissimi suoni quando ci cammini sopra, li rompi, li posizioni o li colpisci con un proiettile: vai a fare un po\' di musica!', '20w45a'),
	(33, 'Aggiunte', 'Grappoli di Ametista', 'I grappoli di ametista crescono dall\'ametista in erba, che può essere trovata all\'interno dei geodi.\\n\r\nI grappoli hanno quattro fasi di crescita: gemma di ametista piccola, gemma di ametista media, gemma di ametista grande e grappolo di ametista.\\n\r\nI grappoli possono crescere solo quando vengono posizionati su blocchi di ametista in erba.\\n\r\nI grappoli di ametista completamente cresciuti rilasciano quattro frammenti di ametista (o più con Fortuna) quando viene utilizzato un piccone di ferro o superiore, e altrimenti non rilasciano nulla quando vengono rotti.\\n\r\nI grappoli possono essere toccati con la seta in qualsiasi fase.', '20w45a'),
	(34, 'Aggiunte', 'Geodi di Ametista', 'Questi enormi geodi possono essere trovati ovunque nel sottosuolo dell\'Overworld.\\n\r\nI geodi di ametista hanno uno strato esterno di una nuova pietra chiamata tufo.\\n\r\nI geodi di ametista hanno un secondo strato di un altro nuovo blocco chiamato calcite.\\n\r\nI geodi di ametista hanno uno strato interno di vari blocchi di ametista.', '20w45a'),
	(35, 'Aggiunte', 'Frammenti di Ametista', 'I grappoli di ametista rilasciano quattro frammenti di ametista (o più con Fortuna).', '20w45a'),
	(36, 'Aggiunte', 'Ametista in Erba', 'Su qualsiasi lato di un blocco di ametista in erba dove c\'è aria o un blocco di fonte d\'acqua, alla fine crescerà un piccolo bocciolo di ametista.\\n\r\nI boccioli di ametista possono crescere solo quando sono attaccati all\'ametista in erba e cresceranno fino a diventare grappoli di ametista.', '20w45a'),
	(37, 'Aggiunte', 'Bundles', 'I bundle sono articoli che contengono altri articoli.\\n\r\nUn pacchetto può contenere un misto di oggetti, ma vale solo una pila. Ad esempio, un pacchetto potrebbe contenere:\\n\r\n64 sporco\\n\r\n32 terra + 32 pietra\\n\r\n32 sporco + 8 perle ender\\n\r\nUno di ogni colore di lana, cemento, moquette e terracotta (64 blocchi in totale)\\n\r\nO un casco di diamanti\\n\r\nUtilizza il clic con il pulsante destro del mouse per inserire un articolo in un pacchetto.\\n\r\nFare clic con il pulsante destro del mouse su un pacchetto per svuotarlo.\\n\r\nAvvolgi un regalo in un pacchetto e regalalo al tuo amico!\\n', '20w45a'),
	(38, 'Aggiunte', 'Candele', 'Le candele sono disponibili in tutti i 16 colori + una variante non colorata.\\n\r\nÈ possibile posizionarne fino a quattro in un blocco.\\n\r\nLe candele ti permettono di augurare adeguatamente un buon compleanno a qualcuno.\\n\r\nRistagnante! (Ma non puoi accenderli sott\'acqua, sciocco).\\n\r\nAugura a tutti un buon compleanno con una torta con le candeline!', '20w45a'),
	(39, 'Cambiamenti', 'Calderoni', 'I calderoni ora possono essere riempiti con secchi di lava!\\n\r\nI calderoni di lava pieni emettono un segnale di pietra rossa di forza 1.', '20w45a');

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

-- Dump dei dati della tabella minecraftsito.giocatore: ~11 rows (circa)
REPLACE INTO `giocatore` (`Username`, `Password`, `Nome`, `Cognome`, `Compleanno`, `Email`, `Telefono`, `Icona`, `Saldo`) VALUES
	('asd', 'asd', 'ASD', 'DSA', '2000-01-01', 'asd@gmail.com', '019292910', 'Icona_Steve.jpg', 835.09),
	('asd1234', 'asd', 'asdr', 'asde', '2000-10-11', '', '', 'Icona_Enderman.jpg', 0),
	('asd23', 'asd', 'asd', 'asd', '2050-08-15', '', '', 'Icona_Alex.jpg', 0),
	('asdf', 'asdf', 'AsdF', 'FdsA', '2008-06-25', '', '', 'Icona_Zombie.jpg', 0),
	('asdfgh', 'asd', 'asdfg', 'asdgr', '1111-11-11', 's@s', '', 'Icona_Villager.png', 0),
	('asdfghjsdwafr', 'asad', 'asd', 'sadaf', '2000-11-18', '', '', 'Icona_Steve.jpg', 0),
	('Enea_il_Figo', '1234', 'Enea', 'Fascilla', '2005-08-17', 'Enea.fascilla@gmail.com', '039202020300', 'Icona_Creeper.png', 0),
	('Fradre69', 'asd', 'Francesco', 'Vivenzio', '2006-12-23', '', '', 'Icona_Pecora.png', 0),
	('qw', 'asd', 'asdf', 'asdf', '2000-01-11', '', '', 'Icona_Steve.jpg', 0),
	('qwerty', 'qwerty', 'Qwerty', 'Tarantino', '1997-05-12', '', '', 'Icona_Zombie.jpg', 0),
	('Tormix', 'asd', 'Francesco', 'Tormene', '1986-04-09', '', '', 'Icona_Creeper.png', 0);

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
	(0, 'Minecraft', 14.99, 'No', 'Minecraft', 'Minecraft: Java E Bedrock Edition Deluxe Collection', 'Scopri tutti i diversi modi di esplorare, sopravvivere e costruire in Minecraft con Minecraft: Deluxe Collection per PC, che include sia le edizioni Java e Bedrock che il launcher di Minecraft! Gioca alla Bedrock Edition su un PC per esplorare gli infiniti contenuti creati dalla community nel Minecraft Marketplace, scoprire nuovi stili di gioco attraverso mappe diverse ed esprimere te stesso con le emote e gli oggetti per Creatore del personaggio.\r\n*Minecraft: Java Edition funziona su Windows, Mac e Linux; Minecraft: Bedrock Edition funziona su Windows. I contenuti della Deluxe Collection funzionano solo in Minecraft: Bedrock Edition su Windows.', 'SfondoJava.avif', 'LogoJava.avif', 'Minecraft: Java Edition \\n\r\nMinecraft: Bedrock Edition\\n\r\nLauncher di Minecraft'),
	(1, 'Minecraft', 19.99, 'Si', 'Deluxe Collection', 'Minecraft: Java E Bedrock Edition Deluxe Collection', 'Scopri tutti i diversi modi di esplorare, sopravvivere e costruire in Minecraft con Minecraft: Deluxe Collection per PC, che include sia le edizioni Java e Bedrock che il launcher di Minecraft! Gioca alla Bedrock Edition su un PC per esplorare gli infiniti contenuti creati dalla community nel Minecraft Marketplace, scoprire nuovi stili di gioco attraverso mappe diverse ed esprimere te stesso con le emote e gli oggetti per Creatore del personaggio.\r\n*Minecraft: Java Edition funziona su Windows, Mac e Linux; Minecraft: Bedrock Edition funziona su Windows. I contenuti della Deluxe Collection funzionano solo in Minecraft: Bedrock Edition su Windows.', 'SfondoJava.avif', 'LogoJava.avif', 'Minecraft: Java Edition\\n\r\nMinecraft: Bedrock Edition\\n\r\nLauncher di Minecraft\\n\r\n1600 minecoins\\n\r\n5 mappe\\n\r\n5 oggetti persona\\n\r\n3 emote\\n\r\n3 pacchetti skin\\n\r\n1 pacchetto texture'),
	(2, 'Dungeons', 9.99, 'No', 'Standard Edition', 'Minecraft Dungeons Ultimate Edition', 'Vivi la storia completa di Minecraft Dungeons dall\'inizio all\'End! Prova Minecraft Dungeons: Ultimate Edition, che include il gioco base e tutti e sei i contenuti scaricabili. Acquistando la Ultimate Edition, puoi ottenere l\'esperienza completa a un prezzo inferiore rispetto all\'acquisto dei singoli elementi. Ottieni subito la tua copia!', 'SfondoDungeons.jpg', 'LogoDungeons.avif', 'Gioco base\\n\r\nLauncher'),
	(3, 'Dungeons', 19.99, 'Si', 'Ultimate Edition', 'Minecraft Dungeons Ultimate Edition', 'Vivi la storia completa di Minecraft Dungeons dall\'inizio all\'End! Prova Minecraft Dungeons: Ultimate Edition, che include il gioco base e tutti e sei i contenuti scaricabili. Acquistando la Ultimate Edition, puoi ottenere l\'esperienza completa a un prezzo inferiore rispetto all\'acquisto dei singoli elementi. Ottieni subito la tua copia!', 'SfondoDungeons.jpg', 'LogoDungeons.avif', 'Gioco base piú tutti e sei i contenuti scaricabili\\n\r\nmantello da Eroe\\n\r\nDue skin per i giocatori\\n\r\nPollo'),
	(4, 'Legends', 19.84, 'No', 'Standard Edition', 'Minecraft Legends Standard Edition', 'I Piglin minacciano di esaurire il Sopramondo. Sei tu l\'eroe di cui questa pacifica terra ha bisogno? Esplora biomi lussureggianti per stringere alleanze con nuovi amici e creature familiari, quindi affronta i Piglin in epiche battaglie. Ma fai attenzione: reagiscono sempre.\r\nGioca al più grande aggiornamento gratuito dei contenuti di Minecraft Legends! Entra in azione con l\'impavida rana e unisciti alle streghe armate di pozioni, quindi costruisci calderoni per aumentare i danni dei tuoi alleati. Affronta il Clanger, un Piglin così rumoroso da stordire, ma avvicinati con cautela all\'Air Chopper in modo che i tuoi amici non vengano spazzati via!', 'SfondoLegends.jpeg', 'LogoLegends.avif', 'Gioco base\\n\r\nLauncher'),
	(5, 'Legends', 24.99, 'Si', 'Deluxe Edition', 'Minecraft Legends Standard Edition', 'I Piglin minacciano di esaurire il Sopramondo. Sei tu l\'eroe di cui questa pacifica terra ha bisogno? Esplora biomi lussureggianti per stringere alleanze con nuovi amici e creature familiari, quindi affronta i Piglin in epiche battaglie. Ma fai attenzione: reagiscono sempre.\r\nGioca al più grande aggiornamento gratuito dei contenuti di Minecraft Legends! Entra in azione con l\'impavida rana e unisciti alle streghe armate di pozioni, quindi costruisci calderoni per aumentare i danni dei tuoi alleati. Affronta il Clanger, un Piglin così rumoroso da stordire, ma avvicinati con cautela all\'Air Chopper in modo che i tuoi amici non vengano spazzati via!', 'SfondoLegends.jpeg', 'LogoLegends.avif', 'Gioco base\\n\r\nLauncher\\n\r\nPacchetto skin Deluxe');

-- Dump della struttura di tabella minecraftsito.pagpref
CREATE TABLE IF NOT EXISTS `pagpref` (
  `IdPag` int(11) NOT NULL DEFAULT 0,
  `Pagina` char(50) NOT NULL DEFAULT '',
  `Tipo` char(50) DEFAULT NULL,
  `Foto` char(50) DEFAULT NULL,
  `Titolo` char(50) DEFAULT NULL,
  PRIMARY KEY (`IdPag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella minecraftsito.pagpref: ~25 rows (circa)
REPLACE INTO `pagpref` (`IdPag`, `Pagina`, `Tipo`, `Foto`, `Titolo`) VALUES
	(0, 'WikiArco.php', 'Wiki', 'Arco.webp', NULL),
	(1, 'WikiCreeper.php', 'Wiki', 'Creeper.png', NULL),
	(2, 'WikiDiamante.php', 'Wiki', 'Diamond.png', NULL),
	(3, 'WikiEnderDragon.php', 'Wiki', 'Ender_Dragon.webp', NULL),
	(4, 'WikiFornace.php', 'Wiki', 'Fornace.webp', NULL),
	(5, 'WikiHerobrine.php', 'Wiki', 'Herobrine.webp', NULL),
	(6, 'WikiLanterna.php', 'Wiki', 'Lanterna.webp', NULL),
	(7, 'WikiMelaDoro.php', 'Wiki', 'MelaOro.webp', NULL),
	(8, 'WikiOro.php', 'Wiki', 'Oro.webp', NULL),
	(9, 'WikiPistone.php', 'Wiki', 'Pistone.webp', NULL),
	(10, 'WikiTnt.php', 'Wiki', 'Tnt.webp', NULL),
	(11, 'GuidaCommandBlock.php', 'Guide', 'CommandBlock.webp', NULL),
	(12, 'GuidaFireworks.php', 'Guide', 'Firework.webp', NULL),
	(13, 'GuidaPVP.php', 'Guide', 'Spada.webp', NULL),
	(14, 'GuidaTrovareDiamanti.php', 'Guide', 'Diamond.png', NULL),
	(15, '20w06a.php', 'News', '20w06a.webp', NULL),
	(16, '21w37a.php', 'News', '21w37a.webp', NULL),
	(17, '21w39a.php', 'News', '21w39a.webp', NULL),
	(18, '22w11a.php', 'News', '22w11a.webp', NULL),
	(19, 'PagineNewsPhp.php?IdPag=23w12a', 'News', '23w12a.avif', '23w12a'),
	(20, 'PagineNewsPhp.php?IdPag=22w45a', 'News', '22w45a.avif', '22w45a'),
	(21, 'PagineNewsPhp.php?IdPag=21w19a', 'News', '21w19a.avif', '21w19a'),
	(22, 'PagineNewsPhp.php?IdPag=21w03a', 'News', '21w03a.avif', '21w03a'),
	(23, 'PagineNewsPhp.php?IdPag=20w45a', 'News', '20w45a.avif', '20w45a'),
	(24, 'PagineNewsPhp.php?IdPag=24w09a', 'News', '24w09a.avif', '24w09a');

-- Dump della struttura di tabella minecraftsito.posseduti
CREATE TABLE IF NOT EXISTS `posseduti` (
  `Id_gioco` int(11) NOT NULL DEFAULT 0,
  `Username` char(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id_gioco`,`Username`),
  KEY `FK_posseduti_giocatore` (`Username`),
  CONSTRAINT `FK_posseduti_giocatore` FOREIGN KEY (`Username`) REFERENCES `giocatore` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_posseduti_giochi` FOREIGN KEY (`Id_gioco`) REFERENCES `giochi` (`Id_gioco`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella minecraftsito.posseduti: ~5 rows (circa)
REPLACE INTO `posseduti` (`Id_gioco`, `Username`) VALUES
	(0, 'asd'),
	(1, 'qwerty'),
	(2, 'qwerty'),
	(3, 'asd'),
	(5, 'qwerty');

-- Dump della struttura di tabella minecraftsito.preferiti
CREATE TABLE IF NOT EXISTS `preferiti` (
  `Username` char(50) NOT NULL DEFAULT '',
  `IdPag` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`IdPag`,`Username`) USING BTREE,
  KEY `FK_preferiti_giocatore` (`Username`),
  CONSTRAINT `FK_preferiti_giocatore` FOREIGN KEY (`Username`) REFERENCES `giocatore` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_preferiti_pagpref` FOREIGN KEY (`IdPag`) REFERENCES `pagpref` (`IdPag`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella minecraftsito.preferiti: ~23 rows (circa)
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
	('asd', 18),
	('asd', 19),
	('asd', 20),
	('asd', 21),
	('asd', 22),
	('asd', 23),
	('asd', 24);

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

-- Dump dei dati della tabella minecraftsito.snapshotnews: ~6 rows (circa)
REPLACE INTO `snapshotnews` (`IdSnapshot`, `Immagine`, `Edizione`, `Tipologia`, `DataRilascio`, `Versione`, `Prec`, `Succ`) VALUES
	('20w45a', '20w45a.avif', 'Java Edition', 'Snapshot', '2020-11-04', '1.17', '20w06a.php', 'PagineNewsPhp.php?IdPag=21w03a'),
	('21w03a', '21w03a.avif', 'Java Edition', 'Snapshot', '2020-01-20', '1.17', 'PagineNewsPhp.php?IdPag=20w45a', 'PagineNewsPhp.php?IdPag=21w19a'),
	('21w19a', '21w19a.avif', 'Java Edition', 'Snapshot', '2021-12-05', '1.17', 'PagineNewsPhp.php?IdPag=21w03a', '21w37a.php'),
	('22w45a', '22w45a.avif', 'Java Edition', 'Snapshot', '2022-09-11', '1.19.3', '22w11a.php', 'PagineNewsPhp.php?IdPag=23w12a'),
	('23w12a', '23w12a.avif', 'Java Edition', 'Snapshot', '2023-03-22', '1.20', 'PagineNewsPhp.php?IdPag=22w45a', 'PagineNewsPhp.php?IdPag=24w09a'),
	('24w09a', '24W09A.avif', 'Java Edition', 'Snapshot', '2024-02-28', '1.21', 'PagineNewsPhp.php?IdPag=23w12a', '20w06a.php');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
