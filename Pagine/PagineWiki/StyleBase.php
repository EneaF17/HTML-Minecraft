<?php 
    session_start();
    require ("../../data/connessioneDB.php");
?>

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wiki-</title>
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
            require("../../data/Cuore.php");
            ?>


            <div class="contenitorePulsanti">
                <ul class="Pulsanti" style="list-style-type: none;">
                    <li><a href="Wiki"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_Wiki.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="WikiArco.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <?php require("../../data/Bookmark.php"); ?>
            <div class="contenitoreWiki">
                <h1 class="titolo">Nome</h1>
                <div class="ContenitoreTabellaWiki">
                    <img src="../../Immagini/ImmaginiWiki/Arco.webp" alt="">
                    <table class="tabellaWiki">
                        <tr class="rigapari">
                            <th>Nome</th>
                            <td>XXX</td>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <td>XXX XXX</td> 
                        </tr>
                    </table>
                </div>
                <div class="TestoWiki">
                    <p>Ciao</p>
                    <h2 class="Sezione">Ottenimento</h2>
                    <p>Ciao</p>
                </div>
            </div>
        </body>
        <?php 
            require ("../../data/Footer.php")
        ?>
    </div>
</php>