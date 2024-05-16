<?php 
    session_start();
    require ("../../data/connessioneDB.php");
?>

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wiki-Mela D'Oro</title>
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
                    <li><a href="WikiLanterna.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_Wiki.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="WikiOro.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <div class="contenitoreWiki">
                <h1 class="titolo">Mela D'Oro</h1>
                <div class="ContenitoreTabella">
                    <img src="../../Immagini/ImmaginiWiki/MelaOro.webp" alt="">
                    <table class="tabellaWiki">
                        <tr class="rigapari">
                            <th>Nome</th>
                            <td>Mela D'Oro</td>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <td>322	142</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Tipo</th>
                            <td>Cibo</td>
                        </tr>
                        <tr>
                            <th>Raritá</th>
                            <td>raro</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>rinnovabile</th>
                            <td>si</td>
                        </tr>
                        <tr>
                            <th>impilabile</th>
                            <td>si(64)</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>ristora</th>
                            <td>4</td>
                        </tr>
                        <tr>
                            <th>Effetto 1</th>
                            <td>assorbimento (2:00)</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Effetto 2</th>
                            <td>Rigenerazione II (0:05)</td>
                        </tr>
                    </table>
                </div>
                <div class="TestoWiki">
                    <p>La mela d'oro è un oggetto cibo speciale che da degli effetti benefici quando consumato.</p>
                    <div class="ContenitoreIndice">
                        <h2>Indice</h2>
                        <ol>
                            <li><a href="#Fabbricazione">Fabbricazione</a></li>
                            <li><a href="#Vantaggi">Vantaggi</a></li>
                            <li><a href="#Svantaggi">Svantaggi</a></li>
                        </ol>
                    </div>
                    <h2 class="Sezione jumptarget" id="Fabbricazione">Fabbricazione</h2>
                    <img class="imgWikiCraft" src="../../Immagini/ImmaginiWiki/MelaOroCrafting.png" alt="">
                    <p>8 <a href="WikiOro.php">lingotti d'oro</a> disposti attorno ad una mela</p>
                    <h2 class="Sezione jumptarget" id="Vantaggi">Vantaggi</h2>
                    <p>Le mele d'oro ristabiliscono l'intera salute.</p>
                    <h2 class="Sezione jumptarget" id="Svantaggi">Svantaggi</h2>
                    <p>Le mele d'oro sono molto rare.</p>
                    <p>Nonostante una torta guarisca solo nove cuori in totale, è molto più efficiente nel senso di tempo e di risorse, rendendola una scelta comune rispetto alle mele d'oro per efficienza della guarigione.</p>

                </div>
            </div>
        </body>
        <footer>
            <p>Sito non ufficiale programmato al solo scopo didattico e dimostrativo</p>
        </footer>
    </div>
</php>