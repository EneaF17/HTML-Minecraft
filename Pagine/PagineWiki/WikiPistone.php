<?php 
    session_start();
    require ("../../data/connessioneDB.php");
?>

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wiki-Pistone</title>
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
            require("../../data/HeaderPagineVarie.php");
            ?>

            <div class="contenitorePulsanti">
                <ul class="Pulsanti" style="list-style-type: none;">
                    <li><a href="WikiOro.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_Wiki.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="WikiTnt.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <div class="contenitoreWiki">
                <h1 class="titolo">Pistone</h1>
                <div class="ContenitoreTabella">
                    <img src="../../Immagini/ImmaginiWiki/Pistone.webp" alt="">
                    <img src="../../Immagini/ImmaginiWiki/PistoneAppiccicoso.webp" alt="">
                    <table class="tabellaWiki">
                        <tr class="rigapari">
                            <th>Nome</th>
                            <td>Pistone</td>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <td>172/173</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>tipo</th>
                            <td>Blocco</td>
                        </tr>
                        <tr>
                            <th>Rinnovabile</th>
                            <td>si</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>impilabile</th>
                            <td>si(64)</td>
                        </tr>
                        <tr>
                            <th>attrezzo</th>
                            <td>qualsiasi</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Resistenza esplosioni</th>
                            <td>0.5</td>
                        </tr>
                        <tr>
                            <th>durezza</th>
                            <td>1.5</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>luminositá</th>
                            <td>no</td>
                        </tr>
                        <tr>
                            <th>trasparenza</th>
                            <td>no</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>infiammabile</th>
                            <td>no</td>
                        </tr>
                    </table>
                </div>
                <div class="TestoWiki">
                    <p>I "pistoni" e i "pistoni appiccicosi" sono blocchi che, se attivati con un impulso di redstone non nullo, si espandono, spostando tutti i blocchi sull'asse di espansione, fino a un massimo di 12 blocchi. Se uno dei blocchi spostati è un blocco di slime, quest'ultimo sposterà insieme a se tutti i suoi blocchi adiacenti (anche i blocchi di slime e quelli da essi spostati contano nel massimo di 12). Quando il segnale di redstone si interrompe, i pistoni si ritirano e lasciano i blocchi come li ha spostati, mentre i pistoni appiccicosi ritirano indietro i blocchi con le stesse regole della spinta.</p>
                    <div class="ContenitoreIndice">
                        <h2>Indice</h2>
                        <ol>
                            <li><a href="#Fabbricazione">Fabbricazione</a></li>
                            <li><a href="#Meccanismi">Meccanismi</a></li>
                        </ol>
                    </div>
                    <h2 class="Sezione jumptarget" id="Fabbricazione">Fabbricazione</h2>
                    <img class="imgWikiCraft" src="../../Immagini/ImmaginiWiki/PistoneCrafting.png" alt="">
                    <img class="imgWikiCraft" src="../../Immagini/ImmaginiWiki/PistoneAppiccicosoCrafting.png" alt="">
                    <p>Il pistone si puó fabbricare solo con il pietrisco e non con altri tipi di pietra, tre assi di legno che possono essere di tutti i tipi e un pezzo di redstone centrale.</p>
                    <p>Il pistone appiccicoso si fabbrica con un pistone normale e una palla di slime. la disposizione non conta.</p>
                    <h2 class="Sezione jumptarget" id="Meccanismi">Principali meccanismi</h2>
                    <ul style="list-style-position: inside;">
                        <li>Porte segrete</li>
                        <li>Trampolino</li>
                        <li>Ascensori</li>
                        <li>Macchine volanti</li>
                        <li>sistemi di automazione</li>
                        <li>E molti altri ancora</li>
                    </ul>
                </div>
            </div>
        </body>
        <footer>
            <p>Sito non ufficiale programmato al solo scopo didattico e dimostrativo</p>
        </footer>
    </div>
</php>