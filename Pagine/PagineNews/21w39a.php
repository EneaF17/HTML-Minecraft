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
        <title>21w39a snapshot</title>
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
                    <li><a href="21w37a.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_News.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="22w11a.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            
            <div class="contenitorePaginaSnapshot">
                <h1 class="titolo">Java Edition 21w39a</h1>
                <div class="ContenitoreTabella">
                    <img src="../../Immagini/ImmaginiNews/21w39a.webp" alt="">
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
                            <td>29/09/2021</td> 
                        </tr>
                        <tr>
                            <th>Versione</th>
                            <td>1.18</td> 
                        </tr>
                    </table>
                </div>
                <div class="TestoNews">
                    <p>Il 21w39a è il terzo snapshot per la Java Edition 1.18, rilasciato il 29 settembre 2021, che aggiunge dei nuovi progressi e risolve dei bug.
                        A partire da questo snapshot, i giocatori possono nuovamente aprire i mondi più vecchi.</p>
                    <div class="ContenitoreIndice">
                        <h2>Indice</h2>
                        <ol>
                            <h3><a href="#Agg">Aggiunte</a></h3>
                            <li><a href="#Gameplay">Gameplay</a></li>
                            <li><a href="#Generali">Generali</a></li>
                            <h3><a href="#Cambiamenti">Cambiamenti</a></h3>
                            <li><a href="#Mob">Mob</a></li>     
                            <li><a href="#Generazione">Generazione del mondo</a></li>     
                            <li><a href="#Generali2">Generali</a></li>     
                        </ol>
                    </div>
                    <h2 class="Sezione jumptarget" id="Agg">Aggiunte</h2>
                    <h3 class="jumptarget" id="Gameplay">Gameplay</h3>
                    <h4>Progressi</h4>
                    <p>Aggiunti quattro nuovi progressi:
                        Caduta libera
                        Cadi dalla cima fino al fondo dell'Overworld
                        Sentirsi a casa
                        Cavalca uno strider sulla lava per 50 blocchi nell'Overworld
                        Prezzi alle stelle
                        Scambia con un abitante del villaggio al limite dell'altezza di costruzione
                        Suono della musica
                        Riproduci della musica con un giradischi in una prateria
                        Aggiunti i nuovi trigger progresso.
                        fall_from_height
                        Attivato quando un giocatore atterra dopo essere caduto.
                        ride_entity_in_lava
                        Attivato per ogni tick che il giocatore passa cavalcando sulla lava.</p>
                        
                    <h3 class="jumptarget" id="Generali">Generali</h3>
                    <h4>Tabelle degli oggetti</h4>
                    <p>Aggiunta la nuova funzione della tabella degli oggetti set_potion, per selezionare il tag Potion su qualsiasi oggetto.
                        Ha i seguenti parametri:
                        id: ID pozione</p>

                    <h2 id="Cambiamenti" class="Sezione jumptarget">Cambiamenti</h2>
                    
                    <h3 id="Mob" class="jumptarget">Mob</h3>
                    <h4>Annegati</h4>
                    <p>Si possono ora generare nelle falde acquifere nelle caverne di speleotemi.</p>
                    <h4>Zombi</h4>
                    <p>Non si possono più generare nelle caverne di speleotemi.</p>
                    
                    <h3 id="Generazione" class="jumptarget">Generazione del mondo</h3>
                    <h4>Vette alte, Vette innevate e Vette rocciose</h4>
                    <p>Le loro montagne più piccole sono ora più frastagliate.</p>
                    <h4>Praterie</h4>
                    <p>Gli alberi nelle praterie ora contengono sempre un alveare.</p>

                    <h3 id="Generali2" class="jumptarget">Generali</h3>
                    <h4>Tesoro sepolto</h4>
                    <p>I bauli dei tesori sepolti possono ora contenere pozioni di respirazione acquatica.</p>
                    <h4>Formato dei chunk</h4>
                    <p>Il Level.Sections[].BlockStates & il Level.Sections[].Palette dei chunk sono stati spostati in una struttura contenitore in Level.Sections[].block_states.
                        I Level.Biomes dei chunk sono ora colorati e creati in una struttura contenitore simile in Level.Sections[].biomes.
                        I Level.CarvingMasks[] dei chunk è ora long[] invece d ibyte[].</p>
                    <h4>Effetti</h4>
                    <p>Ridisegnato l'aspetto degli effetti nella schermata dell'inventario.
                        Si possono ora vedere mentre il ricettario è aperto.
                        L'elenco degli effetti ora viene mostrato a destra dell'inventario del giocatore, invece che a sinistra.
                        Quando l'elenco degli effetti dell'inventario è visibile, verrà nascosto dalla vista di gioco per ridurre l'ingombro dello schermo.
                        Ora sono disponibili due modalità per visualizzare l'elenco degli effetti: compatto e classico:
                        Classic è l'elenco preesistente di effetti, uno dopo l'altro.
                        Compatto è una singola icona per ogni effetto, adatta a piccoli schermi.
                        Il gioco cambierà automaticamente fra i due aspetti per adattarsi meglio allo spazio disponibile nello schermo.</p>
                    <h4>Opzioni</h4>
                    <p>La luminosità predefinita è stata impostata su 50.</p>
                    <h4>Pacchetti risorse</h4>
                    <p>Il numero di versione del pacchetto di risorse ora è 8, poiché è stato modificato quanto segue:
                        inventory.png ora contiene uno sprite extra per il layout di una versione della lista degli effetti più piccola nell'inventario.</p>
                    <h4>Server</h4>
                    <p>server.jar ora raggruppa singole librerie invece di unire tutti i file in un unico archivio.
                        Questa modifica ha lo scopo di risolvere alcuni problemi relativi ai moduli Java.
                        All'avvio, server.jar decomprimerà le librerie in una directory configurata da bundlerRepoDir (predefinito: directory di lavoro).
                        Per eseguire una classe principale diversa da server, utilizzare la proprietà bundlerMainClass.</p>
                </div>
            </div>

            <?php 
            require ("../../data/Footer.php")
        ?>
        </div>
    </body>
</php>