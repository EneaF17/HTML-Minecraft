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
        <title>Wiki-Diamante</title>
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
                    <li><a href="WikiCreeper.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_Wiki.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="WikiEnderDragon.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <?php require("../../data/Bookmark.php"); ?>
            <div class="contenitoreWiki">
                <h1 class="titolo">Diamante</h1>
                <div class="ContenitoreTabella">
                    <img src="../../Immagini/ImmaginiWiki/Diamond.png" alt="">
                    <table class="tabellaWiki">
                        <tr class="rigapari">
                            <th>Nome</th>
                            <td>Diamante</td>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <td>264</td> 
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
                            <th>Rinnovabile</th>
                            <td>No</td>
                        </tr>
                        <tr>
                            <th>Impilabile</th>
                            <td>Si(64)</td> 
                        </tr>
                    </table>
                </div>
                <div class="TestoWiki">
                    <p>I diamanti sono gemme che sono rilasciate quando il diamante grezzo viene estratto. Il diamante è considerato uno degli oggetti che valgono di più nel gioco a causa della loro scarsità e del loro uso come materiale di fabbricazione. La grafica è anche uno dei tanti simboli e icone usati per Minecraft.</p>
                    <div class="ContenitoreIndice">
                        <h2>Indice</h2>
                        <ol>
                            <li><a href="#Estrazione">Estrazione</a></li>
                            <li><a href="#Fabbricazione">Fabbricazione</a></li>
                            <li><a href="#Natura">Presenza In Natura</a></li>
                            <li><a href="#Ingrediente">Ingrediente in Fabbricazione</a></li>
                        </ol>
                    </div>
                    <h2 class="Sezione jumptarget" id="Estrazione">Estrazione</h2>
                    <p>Il diamante grezzo può essere trovato nei livelli 1-16, in piccole vene di 1-8 minerali, raramente doppie vene si incrociano permettendo 9-10 minerali, e può essere estratto solamente usando un piccone di ferro o superiore.</p>
                    <h2 class="Sezione jumptarget" id="Fabbricazione">Fabbricazione</h2>
                    <img class="imgWikiCraft" src="../../Immagini/ImmaginiWiki/DiamondCraft.png" alt="">
                    <p>Il blocco di diamante puó essere fabbricato con 9 diamanti e poi puó essere riconvertito in diamanti posizionandolo in uno qualsiasi degli slot della griglia di crafting.</p>
                    <h2 class="Sezione jumptarget" id="Natura">Presenza in natura</h2>
                    <p>I diamanti possono essere trovati raramente in bauli generati naturalmente, come quelli trovati in un villaggio, un tempio del deserto, una miniera abbandonata, un tempio della giungla, o una fortezza del Nether.</p>
                    <h2 class="Sezione jumptarget" id="Ingrediente">Ingrediente nella fabbricazione</h2>
                    <p>Il diamante è la quinta fila della fabbricazione degli strumenti, incluso l'oro, e la quinta fila dell'armatura inclusa la maglia. Gli strumenti e l'armatura fatti di diamanti sono i secondi (dopo la netherite) più durevoli nel gioco, e sono i terzi più efficienti dopo la netherite e l'oro, anche se questo ha una durabilità molto bassa. I picconi di diamante e netherite sono gli unici picconi che possono estrarre l'ossidiana.</p>
                </div>
            </div>
        </body>
        <?php 
            require ("../../data/Footer.php")
        ?>
    </div>
</php>