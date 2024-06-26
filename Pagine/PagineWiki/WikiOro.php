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
        <title>Wiki-Lingotto d'Oro</title>
        <link rel="icon" type="image/x-icon" href="../../Immagini/SfondoHeader.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="../../style.css">
        
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        
        
    </head>
    <div class="contenitore">
        <body>
            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
            
            <?php 
            require("../../data/Header.php");
            require("../../data/Cuore.php");
            ?>


            <div class="contenitorePulsanti">
                <ul class="Pulsanti" style="list-style-type: none;">
                    <li><a href="WikiMelaDoro.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_Wiki.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="WikiPistone.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <?php require("../../data/Bookmark.php"); ?>
            <div class="contenitoreWiki">
                <h1 class="titolo">Lingotto d'Oro</h1>
                <div class="ContenitoreTabella">
                    <img src="../../Immagini/ImmaginiWiki/Oro.webp" alt="">
                    <table class="tabellaWiki">
                        <tr class="rigapari">
                            <th>Nome</th>
                            <td>Lingotto d'Oro</td>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <td>173</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Tipo</th>
                            <td>Item</td>
                        </tr>
                        <tr>
                            <th>Raritá</th>
                            <td>Comune</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>rinnovabile</th>
                            <td>si</td>
                        </tr>
                        <tr>
                            <th>impilabile</th>
                            <td>si(64)</td> 
                        </tr>
                    </table>
                </div>
                <div class="TestoWiki">
                    <p>I Lingotti d'oro si ottengono fondendo i blocchi di Oro grezzo nella fornace. Si usano principalmente per creare orologi, binari alimentati e blocchi d'oro. Si possono usare anche per fabbricare attrezzi e pezzi d'armatura. I lingotti d'oro si possono anche trovare nei bauli nelle segrete, nei templi del deserto e nelle fortezze; inoltre possono essere ottenuti uccidendo gli Zombi suino.</p>
                    <p>Gli attrezzi d'oro sono molto veloci ad estrarre blocchi rispetto a quelli di diamante; tuttavia, data la durabilità estremamente bassa degli attrezzi d'oro, essi si rivelano non pratici per l'uso, e sono utilizzati più per mettersi in mostra che per il loro valore come attrezzi. Gli attrezzi d'oro possono solo estrarre pietra, Pietrisco, carbone, netherrack e scalini; ma li estraggono più velocemente rispetto a qualsiasi altro attrezzo di materiale diverso, e potrebbero risultare utili se il giocatore ha fretta e possiede una buona quantità d'oro.</p>
                    <p>L'armatura d'oro è sconsigliata per l'uso, data la bassa durabilità e la rarità dell'oro. In origine l'oro aveva poco utilizzo, fino alla Beta 1.6, quando sono state aggiunte le rotaie alimentate (che richiedono 6 lingotti d'oro per essere fabbricate); il valore dei lingotti d'oro è aumentato notevolmente quando poi le rotaie alimentate sono diventate più potenti del Carrello da miniera con fornace (la cui potenza è stata ridotta).</p>
                    <h2 class="Sezione">Fabbricazione</h2>
                    <img class="imgWikiCraft" src="../../Immagini/ImmaginiWiki/OroCrafting1.png" alt="">
                    <img class="imgWikiCraft" src="../../Immagini/ImmaginiWiki/OroCrafting2.png" alt="">
                    <p>I lingotti d'oro possono essere ottenuti tramite crafting da due ricette differenti: Scomponendo un blocco d'oro e compattando 9 pepite d'oro</p>
                </div>
            </div>
        </body>
        <?php 
            require ("../../data/Footer.php")
        ?>
    </div>
</php>