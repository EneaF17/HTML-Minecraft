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
        <title>20w06a snapshot</title>
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
                    <li><a href="22w11a.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_News.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="21w37a.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <?php require("../../data/Bookmark.php"); ?>
            <div class="contenitorePaginaSnapshot">
                <h1 class="titolo">Java Edition 20w06a</h1>
                <div class="ContenitoreTabella">
                    <img src="../../Immagini/ImmaginiNews/20w06a.webp" alt="">
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
                            <td>05/02/2020</td> 
                        </tr>
                        <tr>
                            <th>Versione</th>
                            <td>1.16</td> 
                        </tr>
                    </table>
                </div>
                <div class="TestoNews">
                    <p>Snapshot 20w06a (conosciuto come 20w06a nel launcher) è il primo snapshot per Java Edition 1.16, uscito il 5 Febbraio, 2020, il primo dell'anno e del decennio. Aggiunge un sacco di feature del Nether Update.</p>
                    <div class="ContenitoreIndice">
                        <h2>Indice</h2>
                        <ol>
                            <h3><a href="#Agg">Aggiunte</a></h3>
                            <li><a href="#Blocchi">Blocchi</a></li>
                            <li><a href="#Oggetti">Oggetti</a></li>
                            <li><a href="#Mob">Mob</a></li>   
                        </ol>
                    </div>
                    <h2 class="Sezione jumptarget" id="Agg">Aggiunte</h2>
                    <h3 class="jumptarget" id="Blocchi">Blocchi</h3>
                    <h4>Detriti antichi</h4>
                    <p>Possono essere trovati nelle profondità del Nether a qualsiasi altezza, ma è molto più comune nei posti più in basso.
                        Possono essere trasformati in un frammento di netherite mettendoli a cuocere in una fornace o in un altoforno.
                        Hanno la stessa resistenza alle esplosioni dell'ossidiana.
                        Sono in grado di galleggiare sulla lava.
                        Non possono bruciare nella lava o nel fuoco.
                        Serve un piccone in diamante o uno migliore per distruggerli.
                        Si generano sempre coperti su tutti i lati dalla lava o da dei blocchi.</p>

                    <h4>Basalto</h4>
                    <p>Formano i pilastri di basalto.
                        Si genera nelle valli di sabbia delle anime.
                        Possono essere rivolti verso ogni direzione, come i tronchi.</p>
                    
                    <h4>Blocco di netherite</h4>
                    <p>Può essere fabbricato con 9 lingotti di netherite.
                        È un blocco decorativo.
                        Galleggia sulla lava.
                        Non brucia ne' nella lava ne' nel fuoco.
                        Ha la stessa resistenza alle esplosioni dell'ossidiana, ma può essere spostato con i pistoni.</p>

                    <h4>fungo cremisi e distorto</h4>
                    <p>Generate in crimson and warped forests, respectively.
                        Possono essere piazzati sulla terra, sulla terra brulla, sulla terra zappata, sul podzol, sul necelio, sulla terra delle anime, e sui blocchi d'erba.
                        Bone meal can be used on fungi to grow it into the respective huge fungi when placed on nylium.</p>
                    
                    <h4>Necelio cremisi e deformato</h4>
                    <p>Funzionano in modo simile ai blocchi d'erba.</p>

                    <h4>Assi cremisi e assi deformate</h4>
                    <p>Non bruciano.
                        Si fabbricano con il rispettivo gambo.
                        Possono essere usati per fabbricare le rispettive lastre, scalini, recinzioni, cancelletti, pedane a pressione, bottoni, porte, e botole.</p>
                    
                    <h4>Radici cremisi e distorte</h4>
                    <p>Fogliame che si genera sia nella foresta cremisi sia nella foresta deformata e certe volte anche nella valle delle anime.</p>
                    <h4>Cartello cremisi e distorto</h4>
                    <p>Funzionano come i cartelli di legno.
                        Non possono essere fabbricati in questo snapshot.</p>
                    <h4>Gambo cremisi e deformato</h4>
                    <p>Blocks that comprise the trunks of huge fungi.
                        Hanno una texture animata.
                        Hanno una texture superiore simile a quella dei tronchi.
                        Possono essere direzionati verso ogni direzione, come i tronchi.
                        Non bruciano.
                        Hanno le rispettive varianti scortecciate.</p>
                    <h4>Germogli del nether</h4>
                    <p>Fogliame che si genera nelle foreste deformate.</p>

                    <h4>Fungolume</h4>
                    <p>Emette un livello di luce di 15, come i blocchi di luminite.
                        Si genera come parte dei funghi grandi.</p>

                    <h4>Fuoco delle anime</h4>
                    <p>Una variante blu del fuoco.
                        Fa 2 (♥) di danno al second mentre il fuoco normale fa 1 (♥) di danno.
                        Non si spegne sotto la pioggia.</p>
                    <h4>lanterna delle anime</h4>
                    <p>Gives off a light level of 10.
                        Crafted similarly to a normal lantern, using a soul fire torch instead of a normal torch.</p>
                    <h4>Torcia delle anime</h4>
                    <p>Fa un livello di luce di 10.
                        Si fabbrica come una torcia normale, ma con della terra delle anime piazzata sotto al bastone.</p>
                    <h4>Terra delle anime</h4>
                    <p>Si genera nella valle delle anime, insieme alla sabbia delle anime.
                        Il fuoco acceso su della terra delle anime è fuoco delle anime.
                        Il giocatore non affonda e non rallenta sulla terra delle anime.</p>
                    <h4>blocco di verruca deformata</h4>
                    <p>Una variante del blocco di verruche del nether.
                        Generates as a part of huge warped fungi. Sometimes generates in the ground replacing the warped nylium in warped forest biome.</p>
                    <h4>rampicante piangente</h4>
                    <p>Si genera nella foresta cremisi.
                        Si piazza sotto un blocco e cresce verso il basso.</p>
                    
                    <h3 id="Oggetti" class="jumptarget">Oggetti</h3>
                    <h4>Armatura di netherite</h4>
                    <p>Si fabbrica con un lingotto di netherite e il rispettivo oggetto in diamante.
                        È più forte di quella in diamante.</p>
                    <h4>Ascia, zappa, piccone, pala, e spada di netherite</h4>
                    <p>Galleggiano sulla lava.</p>
                    <h4>Lingotto di netherite</h4>
                    <p>Crafted with 4 gold ingots and 4 netherite scraps.
                        Can be used to upgrade diamond tools and armor.
                        Galleggia sulla lava.
                        Non può bruciare nella lava o nel fuoco.</p>
                    <h4>Frammento di netherite</h4>
                    <p>Si crea smeltando dei detriti antichi in una fornace.
                        Serve per creare i lingotti di netherite.
                        Galleggia sulla lava.
                        Non brucia nella lava o nel fuoco.</p>
                    <h4>Uova generatrici</h4>
                    <p>Aggiunto l'uovo generatore di hoglin.</p>

                    <h3 id="Mob" class="jumptarget">Mob</h3>
                    <h4>Hoglin</h4>
                    <p>Si generano nelle foreste cremisi.
                        Rilasciano della carne marcia.
                        Hanno la stessa hitbox dei maiali.
                        Le gambe e le orecchie si muovono troppo quando vengono attaccati o camminano.</p>

                </div>
            </div>

            <?php 
            require ("../../data/Footer.php")
        ?>
        </div>
    </body>
</php>