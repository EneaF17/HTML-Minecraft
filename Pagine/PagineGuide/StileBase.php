<?php 
    session_start();
    require ("../../data/connessioneDB.php");
?>

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guida-</title>
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
            require("../../data/HeaderPagineVarie.php");
            ?>


            <div class="contenitorePulsanti">
                <ul class="Pulsanti" style="list-style-type: none;">
                    <li><a href="Guida"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_Guida.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="Guida"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <div class="boxGuida">
                <div class="boxTitolo">
                    <p>Titolo della guida</p>
                </div>
                <p style="margin-top: 10px;">Introduzione</p>
                <h3>INDICE</h3>
                <a href="#STEP1"> STEP 1: Procurarsi le risorse</a>
                <a href="#STEP2"> STEP 2: Creare la stella</a>
                <a href="#STEP3"> STEP 3: Creare il razzo</a>
                <a href="#Consigli"> Consigli</a>
                <div class="boxSezione">
                    <div class="boxNumeroSezione"> <p>PASSO</p> <p>1</p> </div>
                    <div class="boxTitoloSezione"><p>Inserisci passo 1</p></div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/1.21.jpg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>1</p></div>
                        <p>testo1</p>
                    </div>
                </div>
                
                <div class="boxParagrafo">
                    <img src="../../Immagini/1.21.jpg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>2</p></div>
                        <p>testo2</p>
                    </div>
                </div>
                <div class="boxSezione">
                    <div class="boxNumeroSezione"> <p>PASSO</p> <p>2</p> </div>
                    <div class="boxTitoloSezione"><p>Inserisci passo 2</p></div>
                </div>
            </div>
        </body>
        <footer>
            <p>Sito non ufficiale programmato al solo scopo didattico e dimostrativo</p>
        </footer>
    </div>
</php>