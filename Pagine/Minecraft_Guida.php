<?php 
    session_start();
    require ("../data/connessioneDB.php");
?>

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guida - Minecraft</title>
        <link rel="icon" type="image/x-icon" href="../Immagini/SfondoHeader.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="../style.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />



        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">


    </head>
    <div class="contenitore">
        <body>
            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


            <?php 
            require("../data/HeaderPaginePrincipali.php");
            ?>

            <div class="contenitoreGuide">
                <a class="guidaCell" href="PagineGuide/GuidaTrovareDiamanti.php">
                    <p class="tipoGuida">GUIDA</p>
                    <p class="titoloGuida">Come trovare i diamanti</p>
                    <img src="../Immagini/ImmaginiWiki/Diamond.png" alt="">
                </a>
                <a class="guidaCell" href="">
                    <p class="tipoGuida">GUIDA</p>
                    <p class="titoloGuida">Come sconfiggere l'ender dragon</p>
                    <img src="../Immagini/ImmaginiWiki/Ender_Dragon.webp" alt="">
                </a>
                <a class="guidaCell" href="">
                    <p class="tipoGuida">GUIDA</p>
                    <p class="titoloGuida">Circuiti di redstone. Come usarli?</p>
                    <img src="../Immagini/ImmaginiWiki/Redstone.webp" alt="">
                </a>
                <a class="guidaCell" href="PagineGuide/GuidaFireworks.php">
                    <p class="tipoGuida">GUIDA</p>
                    <p class="titoloGuida">Fuochi d'artificio</p>
                    <img src="../Immagini/ImmaginiWiki/Firework.webp" alt="">
                </a>
                <a class="guidaCell" href="">
                    <p class="tipoGuida">GUIDA</p>
                    <p class="titoloGuida">Comandi in chat</p>
                    <img src="../Immagini/Book.png" alt="">
                </a>
                <a class="guidaCell" href="PagineGuide/GuidaCommandBlock.php">
                    <p class="tipoGuida">GUIDA</p>
                    <p class="titoloGuida">Come usare i blocchi di comando</p>
                    <img src="../Immagini/ImmaginiWiki/CommandBlock.webp" alt="">
                </a>
                <a class="guidaCell" href="">
                    <p class="tipoGuida">GUIDA</p>
                    <p class="titoloGuida">Come coltivare</p>
                    <img src="../Immagini/ImmaginiWiki/Zappa.webp" alt="">
                </a>
                <a class="guidaCell" href="">
                    <p class="tipoGuida">SFIDA</p>
                    <p class="titoloGuida">Uomo talpa</p>
                    <img src="../Immagini/ImmaginiWiki/Fornace.webp" alt="">
                </a>
                <a class="guidaCell" href="">
                    <p class="tipoGuida">SFIDA</p>
                    <p class="titoloGuida">Vagabondo Challenge</p>
                    <img src="../Immagini/ImmaginiWiki/Steve.png" alt="">
                </a>
                <a class="guidaCell" href="">
                    <p class="tipoGuida">SFIDA</p>
                    <p class="titoloGuida">100x100</p>
                    <img src="../Immagini/SfondoHeader.jpg" alt="">
                </a>
                <a class="guidaCell" href="">
                    <p class="tipoGuida">SFIDA</p>
                    <p class="titoloGuida">Straight line challenge</p>
                    <img src="../Immagini/SfondoHeader.jpg" alt="">
                </a>
                <a class="guidaCell" href="">
                    <p class="tipoGuida">SFIDA MULTIPLAYER</p>
                    <p class="titoloGuida">Trova gli oggetti per vincere</p>
                    <img src="../Immagini/Items.webp" alt="">
                </a>
                <a class="guidaCell" href="">
                    <p class="tipoGuida">SFIDA MULTIPLAYER</p>
                    <p class="titoloGuida">Hide and Seek</p>
                    <img src="../Immagini/HideAndSeek.png" alt="">
                </a>
                <a class="guidaCell" href="">
                    <p class="tipoGuida">SFIDA MULTIPLAYER</p>
                    <p class="titoloGuida">Manhunt</p>
                    <img src="../Immagini/Manhunt.png" alt="">
                </a>
                <a class="guidaCell" href="">
                    <p class="tipoGuida">CONSIGLI</p>
                    <p class="titoloGuida">10 consigli per migliorare la tua casa</p>
                    <img src="../Immagini/Casa.jpg" alt="">
                </a>
                <a class="guidaCell" href="">
                    <p class="tipoGuida">CONSIGLI</p>
                    <p class="titoloGuida">20 cose che non sai su minecraft</p>
                    <img src="../Immagini/Curiosita.jpg" alt="">
                </a>
                <a class="guidaCell" href="">
                    <p class="tipoGuida">CONSIGLI</p>
                    <p class="titoloGuida">le trappole piú efficaci da fare con la TNT</p>
                    <img src="../Immagini/ImmaginiWiki/Tnt.webp" alt="">
                </a>
                <a class="guidaCell" href="PagineGuide/GuidaPVP.php">
                    <p class="tipoGuida">CONSIGLI</p>
                    <p class="titoloGuida">10 modi per migliorare nel PVP</p>
                    <img src="../Immagini/ImmaginiWiki/Spada.webp" alt="">
                </a>

            </div>
        </body>

        <footer>
            <p>Sito non ufficiale programmato al solo scopo didattico e dimostrativo</p>
        </footer>
    </div>
    
</php>