<?php 
    session_start();
    require ("../data/connessioneDB.php");
?>

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wiki - Minecraft</title>
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

            <div class="grid">
                <div class="main-carousel--wiki" data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround":true, "autoPlay":2000 }'>
                    <div class="carousel-cell--wiki"><a class="imgCarousel" href="PagineWiki/WikiArco.php"><img src="../immagini/ImmaginiWiki/Arco.webp" alt=""></a> <a href="PagineWiki/WikiArco.php" class="linkCarousel">Arco</a></div>
                    <div class="carousel-cell--wiki"><a class="imgCarousel" href="PagineWiki/WikiCreeper.php"><img src="../immagini/ImmaginiWiki/Creeper.png" alt=""></a> <a href="PagineWiki/WikiCreeper.php" class="linkCarousel">Creeper</a></div>
                    <div class="carousel-cell--wiki"><a class="imgCarousel" href="PagineWiki/WikiDiamante.php"><img src="../immagini/ImmaginiWiki/Diamond.png" alt=""></a> <a href="PagineWiki/WikiDiamante.php" class="linkCarousel">Diamante</a></div>
                    <div class="carousel-cell--wiki"><a class="imgCarousel" href="PagineWiki/WikiEnderDragon.php"><img src="../immagini/ImmaginiWiki/Ender_Dragon.webp" alt=""></a> <a href="PagineWiki/WikiEnderDragon.php" class="linkCarousel">Ender Dragon</a></div>
                    <div class="carousel-cell--wiki"><a class="imgCarousel" href="PagineWiki/WikiFornace.php"><img src="../immagini/ImmaginiWiki/Fornace.webp" alt=""></a> <a href="PagineWiki/WikiFornace.php" class="linkCarousel">Fornace</a></div>
                    <div class="carousel-cell--wiki"><a class="imgCarousel" href="PagineWiki/WikiHerobrine.php"><img src="../immagini/ImmaginiWiki/Herobrine.webp" alt=""></a> <a href="PagineWiki/WikiHerobrine.php" class="linkCarousel">Herobrine</a></div>
                    <div class="carousel-cell--wiki"><a class="imgCarousel" href="PagineWiki/WikiLanterna.php"><img src="../immagini/ImmaginiWiki/Lanterna.webp" alt=""></a> <a href="PagineWiki/WikiLanterna.php" class="linkCarousel">Lanterna</a></div>
                    <div class="carousel-cell--wiki"><a class="imgCarousel" href="PagineWiki/WikiMelaDoro.php"><img src="../immagini/ImmaginiWiki/MelaOro.webp" alt=""></a> <a href="PagineWiki/WikiMelaDoro.php" class="linkCarousel">Mela d'Oro</a></div>
                    <div class="carousel-cell--wiki"><a class="imgCarousel" href="PagineWiki/WikiPistone.php"><img src="../immagini/ImmaginiWiki/Pistone.webp" alt=""></a> <a href="PagineWiki/WikiPistone.php" class="linkCarousel">Pistone</a></div>
                    <div class="carousel-cell--wiki"><a class="imgCarousel" href="PagineWiki/WikiTnt.php"><img src="../immagini/ImmaginiWiki/Tnt.webp" alt=""></a> <a href="PagineWiki/WikiTnt.php" class="linkCarousel">Tnt</a></div>
                </div>
                <div class="contenitoreLista">
                    <h2 class="titoloLista med-text"> Cosa vuoi sapere?</h2>
                    <div class="Listone">
                        <ul class="lista" style="list-style-type: none;">
                            <li class="letteralista"><h2>A</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Andesite.webp" alt=""><a href="">Andesite</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Anguria.webp" alt=""><a href="">Anguria</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Arco.webp" alt=""><a href="PagineWiki/WikiArco.php">Arco</a></li>
                            <li class="letteralista"><h2>B</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Beacon.webp" alt=""><a href="">Beacon</a></li>
                            <li class="letteralista"><h2>C</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Campana.webp" alt=""><a href="">Campana</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Coal.png" alt=""><a href="">Carbone</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Corazza.webp" alt=""><a href="">Corazza</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Creeper.png" alt=""><a href="PagineWiki/WikiCreeper.php">Creeper</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/calderone.webp" alt=""><a href="">Calderone</a></li>
                            <li class="letteralista"><h2>D</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Devastatore.webp" alt=""><a href="">Devastatore</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Diamond.png" alt=""><a href="PagineWiki/WikiDiamante.php">Diamante</a></li>
                            <li class="letteralista"><h2>E</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Ender_Dragon.webp" alt=""><a href="PagineWiki/WikiEnderDragon.php">Ender Dragon</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/EnderPearl.webp" alt=""><a href="">Ender Pearl</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/EndPortal.webp" alt=""><a href="">Ender Portal</a></li>
                            <li class="letteralista"><h2>F</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Faló.webp" alt=""><a href="">Faló</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Fango.webp" alt=""><a href="">Fango</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Ferro.webp" alt=""><a href="">Ferro</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Fornace.webp" alt=""><a href="PagineWiki/WikiFornace.php">Fornace</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Freccia.webp" alt=""><a href="">Freccia</a></li>
                            <li class="letteralista"><h2>G</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Gallina.webp" alt=""><a href="">Gallina</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Gambiere.webp" alt=""><a href="">Gambiere</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Giradischi.webp" alt=""><a href="">Giradischi</a></li>
                            <li class="letteralista"><h2>H</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Herobrine.webp" alt=""><a href="PagineWiki/WikiHerobrine.php">Herobrine</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Husk.webp" alt=""><a href="">Husk</a></li>
                            <li class="letteralista"><h2>I</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Illusore.webp" alt=""><a href="">Illusore</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Anvil.webp" alt=""><a href="">Incudine</a></li>
                            <li class="letteralista"><h2>J</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Jhonny.webp" alt=""><a href="">Jhonny</a></li>
                            <li class="letteralista"><h2>K</h2></li>
                            <li class="letteralista"><h2>L</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Lana.webp" alt=""><a href="">Lana</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Lanterna.webp" alt=""><a href="PagineWiki/WikiLanterna.php">Lanterna</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Lapis.webp" alt=""><a href="">Lapis</a></li>
                            
                            </ul>
                        <ul class="lista lista--dx" style="list-style-type: none;">
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Book.png" alt=""><a href="">Libro</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Lupo.webp" alt=""><a href="">Lupo</a></li>
                            <li class="letteralista"><h2>M</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/MelaOro.webp" alt=""><a href="PagineWiki/WikiMelaDoro.php">Mela d'Oro</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Micelio.webp" alt=""><a href="">Micelio</a></li>
                            <li class="letteralista"><h2>N</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Netherrack.webp" alt=""><a href="">Netherrack</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Notch.webp" alt=""><a href="">Notch</a></li>
                            <li class="letteralista"><h2>O</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/OcchioRagno.webp" alt=""><a href="">Occhio di Ragno</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Oro.webp" alt=""><a href="PagineWiki/WikiOro.php">Oro</a></li>
                            <li class="letteralista"><h2>P</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Pala.webp" alt=""><a href="">Pala</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Pappagallo.webp" alt=""><a href="">Pappagallo</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/IronPickaxe.png" alt=""><a href="">Piccone</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Pistone.webp" alt=""><a href="PagineWiki/WikiPistone.php">Pistone</a></li>
                            <li class="letteralista"><h2>Q</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Quarzo.webp" alt=""><a href="">Quarzo</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Quercia.webp" alt=""><a href="">Quercia</a></li>
                            <li class="letteralista"><h2>R</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Ragno.webp" alt=""><a href="">Ragno</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Rame.webp" alt=""><a href="">Rame</a></li>
                            <li class="letteralista"><h2>S</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Scudo.webp" alt=""><a href="">Scudo</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Spada.webp" alt=""><a href="">Spada</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Steve.png" alt=""><a href="">Steve</a></li>
                            <li class="letteralista"><h2>T</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Tnt.webp" alt=""><a href="PagineWiki/WikiTnt.php">Tritolo TNT</a></li>
                            <li class="letteralista"><h2>U</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Uovo.webp" alt=""><a href="">Uovo</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/UovoGeneratore.webp" alt=""><a href="">Uovo Generatore</a></li>
                            <li class="letteralista"><h2>V</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Vaso.webp" alt=""><a href="">Vaso</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Vex.webp" alt=""><a href="">Vex</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/vetro.webp" alt=""><a href="">Vetro</a></li>
                            <li class="letteralista"><h2>W</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Warden.webp" alt=""><a href="">Warden</a></li>
                            <li class="letteralista"><h2>X</h2></li>
                            <li class="letteralista"><h2>Y</h2></li>
                            <li class="letteralista"><h2>Z</h2></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Zappa.webp" alt=""><a href="">Zappa</a></li>
                            <li class="elementolista"><img src="../immagini/ImmaginiWiki/Zucca.webp" alt=""><a href="">Zucca</a></li>
                        </ul>
                    </div>
                </div> 
                
            </div>  
        </body>
        <footer>
            <p>Sito non ufficiale programmato al solo scopo didattico e dimostrativo</p>
        </footer>
    </div>
        
</php>