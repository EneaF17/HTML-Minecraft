<?php 
    session_start();
    require ("../../data/connessioneDB.php");
?>


<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guida-Command Blocks</title>
        <link rel="icon" type="image/x-icon" href="../../Immagini/SfondoHeader.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="../../style.css">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">


    </head>
    <div class="contenitore">
        <body>
            <?php 
            require("../../data/Header.php");
            ?>


            <div class="contenitorePulsanti">
                <ul class="Pulsanti" style="list-style-type: none;">
                    <li><a href="GuidaFireworks.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_Guida.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="GuidaPVP.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <div class="boxGuida">
                <div class="boxTitolo">
                    <p>Come usare i Command Blocks</p>
                </div>
                <p style="margin-top: 10px;">I comandi di Minecraft (noti anche come "cheat code") permettono ai giocatori di modificare qualsiasi aspetto del mondo di gioco o degli altri giocatori presenti. Un "command block" è un elemento disponibile nel mondo di gioco, al cui interno è memorizzato un comando specifico. Non appena il blocco in oggetto verrà attivato, il comando in esso contenuto verrà eseguito. Questo sistema permette di creare giochi divertenti, strumenti utili o mappe personalizzate molto complesse, in cui sono presenti una miriade di eventi innescati da tali comandi.</p>
                <h3>INDICE</h3>
                <a href="#STEP1"> STEP 1: Creare i command Block</a>
                <a href="#STEP2"> STEP 2: Utilizzare i command Block</a>
                <a href="#STEP3"> STEP 3: Esempi di comandi</a>
                <a href="#Consigli"> Consigli</a>
                <div class="boxSezione">
                    <div class="boxNumeroSezione" id="STEP1"> <p>PASSO</p> <p>1</p> </div>
                    <div class="boxTitoloSezione"><p>Creare i command Block</p></div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock1.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>1</p></div>
                        <p>Avvia Minecraft sul tuo computer o aggiorna Minecraft PE. In Minecraft si possono utilizzare i "command block" solo nella Bedrock Edition o nella versione per pc. Questi blocchi non sono disponibili nella Pocket Edition o nella versione per console (versioni che presentano ancora questi sottotitoli nel nome).</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock2.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>2</p></div>
                        <p>Accedi al mondo di gioco dove hai accesso alla console. I "command block" sono elementi presenti all'interno del gioco, che permettono di accedere alla console di Minecraft. Si tratta di strumenti molto potenti, che ti consentono di modificare tutti gli aspetti del mondo di gioco e del gameplay, ma che, proprio per questo motivo, sono disponibili solo in determinate circostanze:</p>
                        <ul>
                            <li>Server multiplayer: solo gli amministratori del server possono utilizzare i "command block". Dovrai quindi chiedere a uno degli admin di includerti in tale gruppo di utenti, oppure potrai creare il tuo server personale.</li>
                            <li>Se stai giocando in modalità "single-player", hai la necessità di abilitare l'utilizzo dei "cheats", a mano che tu lo abbia già fatto nel momento in cui hai creato il mondo di gioco. Per farlo, accedi al menu principale e premi il pulsante Open to LAN, quindi seleziona il pulsante di spunta "Allow Cheats". Al termine premi il pulsante Start LAN world. Questa modifica sarà attiva unicamente per l'attuale sessione di gioco, ma potrai comunque ripetere la procedura di attivazione ogniqualvolta vorrai aggiungere altri "command block".</li>
                        </ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock3.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>3</p></div>
                        <p>
                            Passa alla modalità di gioco "Creative". Adesso che hai accesso alla console, puoi passare alla modalità di gioco "Creative". Si tratta dell'unica modalità di gioco che permette l'utilizzo e la configurazione dei "command block". Per applicare le modifiche descritte, utilizza i seguenti comandi:</p>
                        <ul>
                            <li>Premi il tasto "T" per aprire la console (la finestra della chat). In alternativa premi il tasto "/" per aprire la finestra in oggetto e inserire il carattere "/" nella linea di digitazione.</li>
                            <li>Per attivare la modalità di gioco "Creative", digita il seguente comando /gamemode c, quindi premi il tasto "Invio".</li>
                            <li>Quando hai concluso la configurazione del "command block", digita il comando /gamemode s per attivare la modalità "Survival" o il comando /gamemode a per attivare la modalità "Adventure".</li>
                        </ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock4.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>4</p></div>
                        <p>
                            Crea un "command block". Apri la finestra della console premendo il tasto "T", quindi digita al suo interno il seguente comando: /give [nome_utente] minecraft:command_block 64. Sostituisci il parametro [nome_utente] con il tuo username completo di Minecraft, ovviamente omettendo le parentesi.</p>
                        <ul>
                            <li>Ricorda che il nome utente è case sensitive.</li>
                            <li>Se il comando inserito non sortisce nessun effetto, significa che molto probabilmente devi aggiornare la tua versione di Minecraft almeno alla 1.4. Per avere a disposizione l'elenco completo di tutti i comandi presenti nel gioco, dovrai aggiornarlo con l'ultima versione disponibile.</li>
                            <li>Puoi sostituire il parametro "64" del comando con il numero che preferisci. Questo numero si riferisce a quanti "command block" vengono prodotti. Nel nostro comando di esempio vengono prodotti 64 blocchi.</li>
                        </ul>
                    </div>
                </div>
                <div class="boxSezione">
                    <div class="boxNumeroSezione" id="STEP2"> <p>PASSO</p> <p>2</p> </div>
                    <div class="boxTitoloSezione"><p>Utilizzare i command block</p></div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock5.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>1</p></div>
                        <p>
                            Posiziona un "command block". Esplora il tuo inventario per individuare i "command block" che hai appena creato, sono caratterizzati da un'icona a forma di cubo di color marrone, con dei pannelli di controllo grigi su ogni lato. Sposta i "command block" nello slot per la selezione rapida, quindi posizionane uno a terra, come faresti per qualsiasi altro elemento del gioco.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock6.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>2</p></div>
                        <p>
                            Accedi all'interfaccia dei "command block". Avvicina il tuo personaggio al blocco appena posizionato, quindi selezionalo con il tasto destro del mouse per aprirlo, proprio come se fosse una normale cassa. Verrà visualizzata una nuova finestra di pop-up dotata di un campo di testo.</p>
                        <ul><li>Se non dovesse succedere niente, significa che, molto probabilmente, l'uso dei "command block" è disabilitato sul tuo server multiplayer. Hai la necessità che un utente in grado di accedere al file "server.properties" imposti il parametro enable-command-block con il valore "true" e il parametro op-permission-level con il valore "2" o un numero superiore.</li></ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock7.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>3</p></div>
                        <p>Digita un comando. Ora sei in grado di inserire nel campo di testo del "command block" il comando che preferisci. Al termine premi il pulsante Done per salvare le modifiche all'interno del blocco in oggetto. Questa guida contiene una lunga lista di comandi, ma come primo tentativo dovresti provare a usare il comando summon Sheep.</p>
                        <ul>
                            <li>Per conoscere altri comandi, accedi alla normale console di gioco (non all'interfaccia del "command block"), quindi digita il comando /help.</li>
                            <li>Diversamente dalla console di Minecraft, i comandi digitati all'interno del campo di testo dell'interfaccia di un "command block" non devono iniziare con il simbolo "/".</li>
                        </ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock8.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>4</p></div>
                        <p>Attiva il blocco utilizzando la "redstone". Collega al "command block" in oggetto una striscia creata con la polvere di "redstone", quindi posiziona un interruttore a pressione in un punto del circuito di "redstone". Per attivare la "redstone", posiziona il tuo personaggio sul piatto dell'interruttore a pressione. A questo punto, accanto al blocco, dovrebbe apparire una pecora. Questo evento si verifica ogniqualvolta un giocatore o un "mob" qualsiasi attivano l'interruttore collegato alla "redstone".</p>
                        <ul>
                            <li>Questo sistema funziona esattamente come qualsiasi altro circuito o meccanismo basato sulla "redstone". Puoi sostituire l'interruttore a pressione con un pulsante, un interruttore a leva o un altro sistema di attivazione a tua scelta. Se preferisci, puoi anche posizionare il pulsante di attivazione direttamente sul "command block".</li>
                            <li>Una volta che il "command block" è stato configurato e dotato di sistema di attivazione può essere usato da chiunque, ma solo gli utenti con le autorizzazioni adeguate possono modificare il comando salvato al suo interno.</li>
                        </ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock9.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>5</p></div>
                        <p>
                            Impara la sintassi avanzata. Nella maggior parte dei casi la sintassi dei "command block" è la stessa utilizzata all'interno della console di Minecraft. Se non hai ancora acquisito confidenza con la console del gioco, fai riferimento alla sezione della guida in cui sono riportati i comandi di esempio. Se già conosci il funzionamento della console dei comandi di Minecraft, di seguito, trovi gli unici parametri che hai la necessità di conoscere:</p>
                        <ul>
                            <li>@p — il comando in oggetto avrà effetto sul giocatore che si trova più vicino al "command block", indipendentemente dalla distanza.</li>
                            <li>@r — il comando in oggetto avrà effetto su un giocatore qualsiasi fra quelli collegati al server.</li>
                            <li>@a — il comando in oggetto avrà effetto su ognuno dei giocatori collegati al server, incluso te stesso.</li>
                            <li>@e — il comando in oggetto avrà effetto su tutte le "entità" presenti sul server. Questo include praticamente qualsiasi cosa che non è un blocco, inclusi i giocatori, gli oggetti, i nemici e gli animali. Fai molta attenzione quando utilizzi questo parametro.</li>
                            <li>Puoi utilizzare questi parametri in qualsiasi punto del comando in cui useresti il nome di un utente o di un'entità.</li>
                        </ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock10.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>6</p></div>
                        <p>Modifica la sintassi per avere un controllo maggiore sull'effetto del comando (opzionale). Puoi creare comandi più specifici aggiungendo altri parametri dopo "@p", "@r", "@a" o "@e". Questi parametri aggiuntivi utilizzano la sintassi [(nome_parametro)=(valore)]. Hai a disposizione diversi parametri, che a loro volta possono assumere diversi valori. Puoi ottenere l'elenco completo eseguendo una ricerca online, ma di seguito trovi alcuni esempi da cui iniziare:</p>
                        <ul>
                            <li>Un comando che include i parametri @r[type=Sheep] avrà effetto su una pecora qualsiasi presente nel mondo di gioco.</li>
                            <li>In modalità "Creative", questo comando @e[m=c] ha effetto su chiunque. Il parametro "m" indica la modalità di gioco e il valore "c" identifica la modalità "Creative".</li>
                            <li>Usa il simbolo "!" per escludere il valore indicato nel parametro. Ad esempio il comando @a[team=!Commando] avrà effetto su tutti i giocatori, ma non su quelli appartenenti alla squadra "Commando" (la suddivisione in squadre è possibile solo su alcune mappe personalizzate create dagli utenti).</li>
                        </ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock11.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>7</p></div>
                        <p>
                            Per ricevere un aiuto, premi il tasto "Tab". Se conosci l'esistenza di un comando, ma non sei certo di saperlo utilizzare, premi il tasto "Tab", il gioco lo creerà automaticamente per te. Premi il tasto "Tab" una seconda volta per poter consultare l'elenco dei parametri.</p>
                        <ul><li>Ad esempio, torna vicino al "command block" creato in precedenza con il comando "summon-sheep", quindi cancella la parola "Sheep". A questo punto premi più volte il tasto "Tab" per visualizzare ciclicamente l'elenco completo di tutte le opzioni a disposizione.</li></ul>
                    </div>
                </div>
                <div class="boxSezione">
                    <div class="boxNumeroSezione" id="STEP3"> <p>PASSO</p> <p>3</p> </div>
                    <div class="boxTitoloSezione"><p>Esempi di comandi</p></div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock12.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>1</p></div>
                        <p>
                            Crea un blocco per il teletrasporto. Crea un "command block" con il seguente comando tp @p x y z. Sostituisci le variabili "x", "y" e "z" con le relative coordinate del punto di destinazione del teletrasporto (ad esempio /tp @p 0 64 0). Quando qualcuno attiverà il blocco in oggetto, il giocatore più vicino verrà teletrasportato alle coordinate indicate.</p>
                        <ul>
                            <li>Per visualizzare le coordinate, premi il tasto "F3".</li>
                            <li>Come per ogni altro comando, puoi sostituire il parametro "@p" con qualsiasi altro termine. Utilizzando il tuo nome utente, sarai sempre e solo tu a essere teletrasportato, anche nel caso in cui sia qualcun altro ad attivare il blocco. Usando il parametro "@r", sarà invece un qualsiasi giocatore collegato al server a essere teletrasportato.</li>
                        </ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock13.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>2</p></div>
                        <p>Fai apparire oggetti o blocchi. Ipotizzando che tu stia usando la versione 1.7 di Minecraft o una versione successiva, puoi creare comandi per la generazione di qualsiasi entità o blocco. Ecco alcuni esempi:</p>
                        <ul>
                            <li>Un "command block" relativo al comando summon Boat farà comparire una nuova barca accanto al blocco in oggetto ogniqualvolta verrà attivato. Tutti i giocatori connessi al tuo server non dovranno più sopportare lunghe attese per il "traghetto".</li>
                            <li>Se invece di un'entità vuoi creare un blocco, dovrai sostituire il comando "summon" con il comando setblock. Il comando setblock minecraft:water 50 70 100 trasformerà il blocco presente alle coordinate "50-70-100" in un blocco d'acqua. Se alle coordinate indicate era già presente un blocco, quest'ultimo scomparirà.</li>
                        </ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock14.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>3</p></div>
                        <p>
                            Distruggere oggetti o giocatori. Il comando "kill" elimina permanentemente un'entità. Si tratta di un comando molto pericoloso, dato che un errore di battitura potrebbe causare la distruzione dell'oggetto sbagliato (o dell'intero mondo di gioco se hai usato il parametro "@e"). Il comando kill @r[type=Painting,r=50] distrugge un quadro scelto casualmente fra tutti quelli presenti nel raggio di 50 blocchi dal "command block" in oggetto.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock15.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>4</p></div>
                        <p>
                            Controllare il tempo e le condizioni meteorologiche. I comandi time set day o time set 0 impostano il livello di luce solare al valore indicato. Sostituisci il valore 0 con quello che preferisci per impostare il momento del giorno che desideri. Quando ti sarai stancato di vivere in un mondo in cui il sole non tramonta mai, potrai creare un blocco con il comando toggle downfall o weather rain per creare la pioggia.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/CommandBlock16.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>5</p></div>
                        <p>
                            Prova altri comandi. Esistono centinaia di comandi a tua disposizione, puoi scoprirli tutti usando il comando /help o eseguendo una ricerca online sui siti web e sui forum relativi a Minecraft. Ecco alcuni comandi da provare:</p>
                        <ul>
                            <li>say [messaggio]</li>
                            <li>give [nome utente] [oggetto] [quantità]</li>
                            <li>effect [nome utente] [nome effetto]</li>
                            <li>gamerule</li>
                            <li>testforblock</li>
                        </ul>
                    </div>
                </div>
                <div class="boxSezione">
                    <div class="boxTitoloSezione" id="Consigli"><p>Consigli</p></div>
                </div>
                <div class="boxParagrafo">
                    <div class="boxTesto">
                        <ul>
                            <li>Per visualizzare l'elenco dei comandi disponibili all'interno della console del gioco, utilizza il comando /help. Per ottenere l'elenco dei parametri relativi a un determinato comando e capire come usarli, digita la stringa /help [nome_comando]. Per avere maggiori informazioni in merito, puoi fare riferimento ai numerosi Wiki e forum online relativi al mondo di Minecraft.</li>
                            <li>Per disabilitare la notifica relativa all'esecuzione di un comando, che viene visualizzata nella finestra della chat, accedi alla console del gioco, digita la seguente stringa /gamerule commandBlockOutput false, quindi premi il tasto "Invio".</li>
                            <li>Quando il segnale inviato a un "Command block" viene disattivato, non accade più nulla. Il "Command block" in oggetto riprenderà la sua funziona solo nel momento in cui il segnale verrà riattivato.</li>
                            <li>Anche se un "Command block" non è direttamente collegato a un circuito di "redstone", può comunque essere attivato se un blocco adiacente di "redstone" riceve un segnale di intensità uguale o superiore a 2.</li>
                            <li>Se un segnale inviato su un circuito di "redstone", deve attraversare più di 15 blocchi è necessario utilizzare un apposito ripetitore perché mantenga l'intensità necessaria.</li>
                            <li>Per salvare le modifiche apportate a un "Command block", devi premere il pulsante "Done". Chiudendo l'apposita finestra di creazione premendo il tasto "Esc", il comando creato non verrà salvato.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </body>
        <footer>
            <p>Sito non ufficiale programmato al solo scopo didattico e dimostrativo</p>
        </footer>
    </div>
</php>