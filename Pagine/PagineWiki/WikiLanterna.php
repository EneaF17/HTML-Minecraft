<?php 
    session_start();
    require ("../../data/connessioneDB.php");
?>

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wiki-Lanterna</title>
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
                    <li><a href="WikiHerobrine.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_Wiki.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="WikiMelaDoro.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <div class="contenitoreWiki">
                <h1 class="titolo">Lanterna</h1>
                <div class="ContenitoreTabella">
                    <img src="../../Immagini/Lanterna.webp" alt="">
                    <img src="../../Immagini/SoulFireLantern.webp" alt="">
                    <table class="tabellaWiki">
                        <tr class="rigapari">
                            <th>Nome</th>
                            <td>Lanterna</td>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <td>169/170</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Tipo</th>
                            <td>Blocco Parziale</td>
                        </tr>
                        <tr>
                            <th>Rinnovabile</th>
                            <td>Si</td>
                        </tr>
                        <tr class="rigapari">
                            <th>impilabile</th>
                            <td>si(64)</td>
                        </tr>
                        <tr>
                            <th>Attrezzo</th>
                            <td>Piccone</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Tipo Attrezzo</th>
                            <td>Legno</td>
                        </tr>
                        <tr>
                            <th>Resistenza Esplosioni</th>
                            <td>3.5</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Durezza</th>
                            <td>3.5</td>
                        </tr>
                        <tr>
                            <th>Luminositá</th>
                            <td>15</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Trasparenza</th>
                            <td>No</td>
                        </tr>
                        <tr>
                            <th>Infiammabile</th>
                            <td>No</td> 
                        </tr>
                    </table>
                </div>
                <div class="TestoWiki">
                    <p>Le lanterne sono blocchi che emettono luce.</p>
                    <p>Le lanterne delle anime sono delle varianti realizzate con la torcia delle anime.</p>
                    <div class="ContenitoreIndice">
                        <h2>Indice</h2>
                        <ol>
                            <li><a href="#Fabbricazione">Fabbricazione</a></li>
                            <li><a href="#RXX">Reperibilitá</a></li>
                            <li><a href="#Info">Informazioni</a></li>
                        </ol>
                    </div>
                    <h2 class="Sezione jumptarget" id="Fabbricazione">Fabbricazione</h2>
                    <img class="imgWikiCraft" src="../../Immagini/LanternaCrafting.png" alt="">
                    <img class="imgWikiCraft" src="../../Immagini/SoulFireLanternCrafting.png" alt="">
                    <p>I crafting delle due tipologie di lanterna sono molto simili cambia solo la torcia che viene messa nel mezzo che é una torcia normale per la lanterna, é invece una torica delle anime per la lanterna delle anime</p>
                    <h2 class="Sezione jumptarget" id="RXX">Reperibilitá</h2>
                    <p>Le normali lanterne possono generarsi come lampade o lampioni sopra le fattorie e su alcuni edifici dei villaggi della tundra.</p>
                    <p>Le lanterne si trovano anche nei resti del bastione.</p>
                    <h2 class="Sezione jumptarget" id="Info">Informazioni</h2>
                    <p>Le lanterne emettono un livello luce di 15, che è leggermente superiore a quello di una torcia.</p>
                    <p>Le lanterne possono essere posizionate in alto o appese sotto la maggior parte dei blocchi solidi, anche se alcuni richiedono al giocatore di posizionarsi in modo furtivo.</p>
                    <p>Quando viene posizionata sotto un blocco, la lanterna sembra sospesa.</p>
                    <p>Le lanterne delle anime respingono i piglin.</p>
                </div>
            </div>
        </body>
        <footer>
            <p>Sito non ufficiale programmato al solo scopo didattico e dimostrativo</p>
        </footer>
    </div>
</php>