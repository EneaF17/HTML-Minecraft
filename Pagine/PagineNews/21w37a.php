<?php 
    session_start();
    require ("../../data/connessioneDB.php");
    require ("../../data/CuoreScript.php");
    ?>

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>21w37a snapshot</title>
        <link rel="icon" type="image/x-icon" href="../../Immagini/SfondoHeader.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="../../style.css">
        
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <div class="contenitore">
            <?php 
            require("../../data/Header.php");
            require("../../data/Cuore.php");
            ?>
            
            <div class="contenitorePulsanti">
                <ul class="Pulsanti" style="list-style-type: none;">
                    <li><a href="PagineNewsPhp.php?IdPag=21w19a"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_News.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="21w39a.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <?php require("../../data/Bookmark.php"); ?>
            <div class="contenitorePaginaSnapshot">
                <h1 class="titolo">Java Edition 21w37a</h1>
                <div class="ContenitoreTabella">
                    <img src="../../Immagini/ImmaginiNews/21w37a.webp" alt="">
                    <table class="tabella">
                        <tr class="rigapari">
                            <th>Edizione</th>
                            <td>Java Edition</td>
                        </tr>
                        <tr>
                            <th>Tipo</th>
                            <td>Snapshot</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Data di rilascio</th>
                            <td>15/09/2021</td> 
                        </tr>
                        <tr>
                            <th>Versione</th>
                            <td>1.18</td> 
                        </tr>
                    </table>
                </div>
                <div class="TestoNews">
                    <p>Il 21w37a è il primo snapshot per la Java Edition 1.18, rilasciato il 15 settembre 2021, il quale aggiunge i contenuti dei precedenti snapshot sperimentali e alcune funzioni di parità con Bedrock Edition.</p>
                    <div class="ContenitoreIndice">
                        <h2>Indice</h2>
                        <ol>
                            <h3><a href="#Agg">Aggiunte</a></h3>
                            <li><a href="#Generali">Generali</a></li>
                            <h3><a href="#Cambiamenti">Cambiamenti</a></h3>
                            <li><a href="#Blocchi">Blocchi</a></li>     
                            <li><a href="#Oggetti">Oggetti</a></li>     
                            <li><a href="#Mob">Mob</a></li>     
                            <li><a href="#Generazione">Generazione del mondo</a></li>     
                            <li><a href="#Generali2">Generali</a></li>     
                        </ol>
                    </div>
                    <h2 class="Sezione jumptarget" id="Agg">Aggiunte</h2>
                    <h3 class="jumptarget" id="Generali">Generali</h3>
                    <h4>Comandi</h4>
                    <p>/jfr
                        Quando abilitato, inizia inizia una profilatura con Java FlightRecorder, così come i seguenti eventi personalizzati:
                        minecraft.ServerTickTime: Evento di campionamento che espone i tempi medi di tick del server a intervalli di un secondo
                        minecraft.ChunkGeneration: Il tempo impiegato per generare diverse fasi di un chunk
                        minecraft.PacketRead / minecraft.PacketSent: Il traffico di rete
                        minecraft.WorldLoadFinishedEvent: La durata del caricamento iniziale del mondo
                        La profilatura può essere fermata in gioco usando /jfr stop.</p>
                    <h4>Font</h4>
                    <p>Aggiunto illageralt, un font runico da Minecraft Dungeons.
                        Momentaneamente utilizzabile solo attraverso i comandi</p>

                    <h4>Tabelle degli oggetti</h4>
                    <p>Aggiunto il campo type, che è obbligatorio.
                        Scritto in BlockEntityTag.id per assicurare che il tag possa essere migrato correttamente tra le versioni.</p>

                    <h4>Opzioni</h4>
                    <p>È ora possibile disattivare i lampi dei fulmini, ciò impedirà ai fulmini di fare lampi nel cielo. I fulmini di per sé saranno comunque visibili.
                        Il dispositivo da cui il gioco emette l'audio può ora essere scelto in gioco.
                        Aggiunti gli "Aggiornamenti prioritari" alle impostazioni grafiche.
                        Determinano quali sezioni di chunk vengono aggiornate in modo sincrono in un unico frame.
                        Tre opzioni:
                        per vicinanza, che corrisponde al modo in cui venivano caricate le sezioni di chunk prima del 21w37a e per giocatore e nessuno, che riducono le balbuzie quando si piazzano o rimuovono blocchi.
                        Nonostante ciò, le ultime due opzioni possono causare rari ritardi visivi. Queste opzioni inoltre sono state capitalizzate in modo errato.</p>
                    <h4>Sottotitoli</h4>
                    <p>Aggiunti i sottotitoli per vari suoni per i sacchetti.</p>



                    <h2 id="Cambiamenti" class="Sezione jumptarget">Cambiamenti</h2>
                    <h3 id="Blocchi" class="jumptarget">Blocchi</h3>
                    <h4>Tavolo per incantesimi</h4>
                    <p>Ora emette un livello di luce di 7.</p>
                    <h4>Rampicante delle caverne, alga, rampicante attorcigliato e rampicante piangente</h4>
                    <p>Smetteranno di crescere se delle cesoie vengono usate sulla punta.
                        Questa azione cambia lo stato del blocco age della punta a 25.</p>
                    <h4>Blocco di neve</h4>
                    <p>Rimosso il cambiamento che permetteva alle piante di essere piazzate sui blocchi di neve.
                        Questo cambiamento risulta in una mancanza di vegetazione nei boschetti.</p>
                    <h3 id="Oggetti" class="jumptarget">Oggetti</h3>
                    <h4>Sacchetti</h4>
                    <p>Sono stati nuovamente rimossi dall'inventario della creativa.
                        Non possono più essere fabbricati.
                        Sono di nuovo accessibili esclusivamente con l'uso dei comandi.</p>
                    <h4>Elitre</h4>
                    <p>Rimossi i cambiamenti alla durabilità fatti nell'experimental snapshot 7.</p>

                    <h3 id="Mob" class="jumptarget">Mob</h3>
                    <h4>Axolotl</h4>
                    <p>Si possono ora generare solo nelle caverne rigogliose.
                        Hanno ora un cap di mob.</p>
                    <h4>Vendicatori, predoni ed evocatori</h4>
                    <p>Non attaccheranno più i villici piccoli.</p>
                    <h4>Capre</h4>
                    <p>Si possono ora generare solo nei pendii innevati, nelle vette rocciose, nelle vette alte e nelle vette innevate.</p>
                    <h4>Mob nutribili</h4>
                    <p>Tutti i mob nutribili (tranne le pecore) chiamati Dinnerbone ora guarderanno il giocatore correttamente.</p>
                    <h3 id="Generazione" class="jumptarget">Generazione del mondo</h3>
                    <h4>Coste rocciose</h4>
                    <p>I cambiamenti che permettevano alla diorite, all'andesite e al granito di generarsi in strisce nel experimental snapshot 4 sono stati rimossi.</p>
                    <h4>Vette rocciose</h4>
                    <p>I cambiamenti che permettevano all'andesite e al granito di generarsi in strisce nell'experimental 4 sono stati rimossi.</p>
                    <h3 id="Generali2" class="jumptarget">Generali</h3>
                    <h4>Pacchetti di dati</h4>
                    <p>Il numero della versione dei pacchetti di dati è stata aumentata a 8.</p>
                    <h4>Opzioni</h4>
                    <p>Le opzioni per l'accovacciamento e la corsa ed il salto automatico sono state spostata nella schermata dei comandi.
                        La distanza rendering ora permette ai chunk di caricarsi intorno al giocatore in forma cilindrica, piuttosto che quadrata.</p>
                    <h4>Tabella dei punteggi</h4>
                    <p>Rimosso il limite di lunghezza per il nome delle tabelle dei punteggi, dei possessori di punteggio e delle squadre.</p>
                    <h4>Splash</h4>
                    <p>Lo splash "[this splash text has been delayed until part 2]" è stato cambiato in "[this splash text is now available]".</p>
                    <h4>Tag</h4>
                    <p>Rinominato il tag blocco lava_pool_replaceables in lava_pool_stone_cannot_replace.</p>
                    <h4>Altri</h4>
                    <p>I mondi che sono stati aperti l'ultima volta nella Java Edition 1.2 non possono più essere aperti.
                        Questi mondi devono per forza essere aperti in una versione precedente al 21w37a (preferibilmente precedente alla Java Edition 1.6.4).
                        Un errore verrà mostrato se si prova ad aprire questi mondi.
                        Al momento i mondi creati prima del 21w37a non possono essere aperti, ma questo cambierà prima che la 1.18 venga rilasciata.
                        Rimosso il limite di lunghezza nelle tabelle di punteggio, nei possessori di punteggio e nei nomi delle squadre.
                        Il formato dei pacchetti di dati è stato aumentato a 8.</p>
                </div>
            </div>

            <?php 
            require ("../../data/Footer.php")
        ?>
        </div>
    </body>
</php>