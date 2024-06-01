<?php 
    session_start();
    require ("data/connessioneDB.php");
?>


<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Home Page - Minecraft</title>
        <link rel="icon" type="image/x-icon" href="Immagini/SfondoHeader.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="style.css">

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
            require("data/Header.php");
            ?>
            
            
     
            <div class="hero">
                <div class="hero__content">
                    <p class="intro-text">Tutto quello che vuoi sapere sull'universo di </p>
                    <h1 class="big-text">Minecraft</h1>
                    <div class="pulsanteBuy">
                        <a href="Pagine/PaginePHP/Negozio.php" class="intro-text">ottieni minecraft</a>
                    </div>
                </div>
       
            </div>
            <div class="main-carousel--home" data-flickity='{"contain": false, "wrapAround":true,  "cellAlign":"left", "autoPlay":2000}'>
                <div class="carousel-cell--home"><h2>Wiki</h2><p>Arco</p><a href="Pagine/PagineWiki/WikiArco.php"><img class="imgCarousel" src="immagini/ImmaginiWiki/Arco.webp" alt=""></a></div>
                <div class="carousel-cell--home"><h2>Wiki</h2><p>Ender Dragon</p><a href="Pagine/PagineWiki/WikiEnderDragon.php"><img class="imgCarousel" src="immagini/ImmaginiWiki/Ender_Dragon.webp" alt=""></a></div>
                <div class="carousel-cell--home"><h2>Wiki</h2><p>Fornace</p><a href="Pagine/PagineWiki/WikiFornace.php"><img class="imgCarousel" src="immagini/ImmaginiWiki/Fornace.webp" alt=""></a></div>
                <div class="carousel-cell--home"><h2>Wiki</h2><p>Mela D'Oro</p><a href="Pagine/PagineWiki/WikiMelaDoro.php"><img class="imgCarousel" src="immagini/ImmaginiWiki/MelaOro.webp" alt=""></a></div>   
                <div class="carousel-cell--home"><h2>Wiki</h2><p>Pistone</p><a href="Pagine/PagineWiki/WikiPistone.php"><img class="imgCarousel" src="immagini/ImmaginiWiki/Pistone.webp" alt=""></a></div>   
                <div class="carousel-cell--home"><h2>Wiki</h2><p>TNT</p><a href="Pagine/PagineWiki/WikiTnt.php"><img class="imgCarousel" src="immagini/ImmaginiWiki/Tnt.webp" alt=""></a></div>   
                <div class="carousel-cell--home"><h2>Guida</h2><p>Trovare i diamanti</p><a href="Pagine/PagineGuide/GuidaTrovareDiamanti.php"><img class="imgCarousel piccolaimg" src="immagini/ImmaginiWiki/Diamond.png" alt=""></a></div>   
                <div class="carousel-cell--home"><h2>Guida</h2><p>Fuochi d'artificio</p><a href="Pagine/PagineGuide/GuidaFireworks.php"><img class="imgCarousel" src="immagini/ImmaginiWiki/Firework.webp" alt=""></a></div>   
                <div class="carousel-cell--home"><h2>Guida</h2><p>Usare i command Blocks</p><a href="Pagine/PagineGuide/GuidaCommandBlock.php"><img class="imgCarousel" src="immagini/ImmaginiWiki/CommandBlock.webp" alt=""></a></div>   
                <div class="carousel-cell--home"><h2>Guida</h2><p>10 consigli per il PVP</p><a href="Pagine/PagineGuide/GuidaPVP.php"><img class="imgCarousel" src="immagini/ImmaginiWiki/Spada.webp" alt=""></a></div>      
                <div class="carousel-cell--home"><h2>News</h2><p>Shapshot 21w39a</p><a href="Pagine/PagineNews/21w39a.php"><img class="imgCarousel" src="immagini/ImmaginiWiki/Zucca.webp" alt=""></a></div>   
                <div class="carousel-cell--home"><h2>News</h2><p>Shapshot 20w06a</p><a href="Pagine/PagineNews/20w06a.php"><img class="imgCarousel" src="immagini/ImmaginiWiki/Campana.webp" alt=""></a></div>   
                <div class="carousel-cell--home"><h2>News</h2><p>Shapshot 21w37a</p><a href="Pagine/PagineNews/21w37a.php"><img class="imgCarousel" src="immagini/ImmaginiWiki/Corazza.webp" alt=""></a></div>   
                <div class="carousel-cell--home"><h2>News</h2><p>Shapshot 22w11a</p><a href="Pagine/PagineNews/22w11a.php"><img class="imgCarousel" src="immagini/ImmaginiWiki/Rana.webp" alt=""></a></div>   
            </div>

            <div class="Informazioni">
                <div class="boxInfo">
                    <a href="Pagine/Minecraft_Guida.php"><img src="immagini/IronPickaxe.png"alt=""></a>
                    <div class="textInfo">
                        <h2>GUIDA</h2>
                            <p class="small-text">Impara le basi per giocare</p>
                            <p class="small-text">Scopri come funzionano meccaniche complesse</p>
                            <p class="small-text">Nuove sfide per rendere il gioco piú difficile</p>
                            <p class="small-text">Impara come funziona la redstone</p>
                            <p class="small-text">E molto altro ti attende tra le oltre 200 guide!</p>
                    </div>
                </div>
                <div class="boxInfo">   
                    <div class="textInfo">
                        <h2>WIKI</h2>
                            <p class="small-text">Se riguarda minecraft nella wiki c'é!</p>
                            <p class="small-text">Tutte le entitá del gioco</p>
                            <p class="small-text">Tutti i blocchi rimossi!</p>
                            <p class="small-text">Tutti gli oggetti ottenibili sia in sopravvivenza che con i comandi</p>
                            <p class="small-text">Tutte le versioni del gioco</p>
                            <p class="small-text">Nelle oltre 1600 pagine potrai trovare tutto cio che ti serve!</p>
                    </div>
                    <a href="Pagine/Minecraft_Wiki.php"><img src="immagini/Book.png"alt=""></a>
                </div>
        
                <div class="boxInfo">
                    <a href="Pagine/Minecraft_News.php"><img src="immagini/Anvil.webp"alt=""></a>
                    <div class="textInfo">
                        <h2>NEWS</h2>
                            <p class="small-text">Tutte le notizie sul gioco</p>
                            <p class="small-text">Tutte le ultime aggiunte</p>
                            <p class="small-text">Tutto sul Minecraft Live</p>
                            <p class="small-text">I progetti futuri e in corso di sviluppo</p>
                            <p class="small-text">Articoli di approfondimento e svago riguardanti il mondo di Minecraft</p>
                            <p class="small-text">Iscriviti per non perderti nessuna novitá sul tuo gioco preferito!</p>       
                    </div>
                </div>
            </div>
        </body>

    <?php 
        require ("data/Footer.php")
    ?>

    </div>
    
</php>

