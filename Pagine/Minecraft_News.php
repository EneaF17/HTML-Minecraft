<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>News - Minecraft</title>
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


            <div class="header header--nocta">
                <div class="logo">
                    <a href="../index.php" class="logo-link">            
                        <img src="../immagini/logo.png" alt="">
                    </a>
                </div>
                <ul class="menu" style="list-style-type: none;">
                    <li><a href="Minecraft_Guida.php"><img src="../immagini/IronPickaxe.png"alt=""></a></li>
                    <li><a href="Minecraft_Wiki.php"><img src="../immagini/Book.png"alt=""></a></li>
                    <li><a href="Minecraft_News.php"><img src="../immagini/Anvil.webp"alt=""></a></li>
                </ul>
            </div>

            <div class="grid">
                <div class="contenitoreNews">
                    <div class="News">
                        <h2>Ultima versione</h2>
                        <div class="descNews">
                            <img src="../immagini/1.20.jpg" alt="">
                            <h3>Minecraft Java edition 1.20.4</h3>
                            <p>1.20.4 è un'update minore alla Java Edition, rilasciata il 7 Dicembre 2023, che risolve un bug. Questa versione non è compatibile con i server 1.20.2</p>
                        </div>
                    </div>
    
                    <div class="News">
                        <h2>Ultimo snapshot</h2>
                        <div class="descNews">
                            <img src="../immagini/24W09A.avif" alt="">
                            <h3>Minecraft snapshot 24W09A</h3>
                            <p>Ciao! Ecco uno snapshot leggermente più grande del solito con molte modifiche tecniche, interfaccia utente aggiornata, un'altra iterazione dell'armatura del lupo e modifiche alle nuove funzionalità.
                                Sin dal rilascio iniziale dell'armatura del lupo, abbiamo lavorato per migliorarla per aumentarne la protezione, l'usabilità e aggiungere la personalizzazione.</p>
                        </div>
                    </div>
    
                    <div class="News">
                        <h2>Prossima versione</h2>
                        <div class="descNews">
                            <img src="../immagini/1.21.jpg" alt="">
                            <h3>Minecraft Java edition 1.21</h3>
                            <p>1.21 è un futuro aggiornamento per Java Edition, il cui rilascio è previsto a metà 2024. Originariamente annunciato a Minecraft Live 2023 il 15 ottobre 2023, l'aggiornamento si concentrerà su "combattimento, avventure, e tinkering". Esso comprende anche il nuovo crafter, nuove varianti blocchi di tufo, e più nemici che depongono le uova nelle trial chamber.</p>
                        </div>
                    </div>
                </div>
    
                <div class="main-carousel--news" data-flickity='{"cellAlign": "left", "contain": false, "wrapAround":true }'>
                    <div class="carousel-cell--news">
                        <h1 class="titoloversione">1.20</h1>
                        <img class="imgNews" src="../Immagini/1.20.jpg" alt="">
                        <div class="contenitoreSnapshot col-3">
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <h2 class="titolosottoversione">1.20.2</h2>
                                <li><a href="">23w35a</a></li>
                                <li><a href="">23w33a</a></li>
                                <li><a href="">23w32a</a></li>
                                <li><a href="">23w31a</a></li>
                            </ul>
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <h2 class="titolosottoversione">1.20.1</h2>
                                <li><a href="">1.20.1-rc1</a></li>
                            </ul>
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <h2 class="titolosottoversione">1.20</h2>
                                <li><a href="">23w18a</a></li>
                                <li><a href="">23w17a</a></li>
                                <li><a href="">23w16a</a></li>
                                <li><a href="">23w14a</a></li>
                                <li><a href="">23w13a</a></li>
                                <li><a href="">23w12a</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="carousel-cell--news">
                        <h1 class="titoloversione">1.19</h1>
                        <img class="imgNews" src="../Immagini/1.19.jpg" alt="">
                        <div class="contenitoreSnapshot col-6">
                            <ul class="listasnapshot col2" style="list-style-type: none;">
                                <h2 class="titolosottoversione">1.19.4</h2>
                                <li><a href="">23w07a</a></li>
                                <li><a href="">23w06a</a></li>
                                <li><a href="">23w05a</a></li>
                                <li><a href="">23w04a</a></li>
                                <li><a href="">23w03a</a></li>
                            </ul>
                            <ul class="listasnapshot col2" style="list-style-type: none;">
                                <h2 class="titolosottoversione">1.19.3</h2>
                                <li><a href="">22w46a</a></li>
                                <li><a href="">22w45a</a></li>
                                <li><a href="">22w44a</a></li>
                                <li><a href="">22w43a</a></li>
                                <li><a href="">22w42a</a></li>
                            </ul>
                            <ul class="listasnapshot col2" style="list-style-type: none;">
                                <h2 class="titolosottoversione">1.19.1</h2>
                                <li><a href="">22w24a</a></li>
                            </ul>
                            <h2 class="titolosottoversione col6">1.19</h2>
                            <ul class="listasnapshot col3" style="list-style-type: none;">
                                <li><a href="">22w19a</a></li>
                                <li><a href="">22w18a</a></li>
                                <li><a href="">22w17a</a></li>
                                <li><a href="">22w16a</a></li>
                                <li><a href="">22w16b</a></li>
                            </ul>
                            <ul class="listasnapshot col3" style="list-style-type: none;">
                                <li><a href="">22w15a</a></li>
                                <li><a href="">22w14a</a></li>
                                <li><a href="">22w13a</a></li>
                                <li><a href="">22w12a</a></li>
                                <li><a style="color: red;" href="../Pagine/PagineNews/22w11a.php">22w11a</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="carousel-cell--news">
                        <h1 class="titoloversione">1.18</h1>
                        <img class="imgNews" src="../Immagini/1.18.jpg" alt="">
                        <div class="contenitoreSnapshot col-2">
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <h2 class="titolosottoversione">1.18.2</h2>
                                <li><a href="">22w07a</a></li>
                                <li><a href="">22w06a</a></li>
                                <li><a href="">22w05a</a></li>
                                <li><a href="">22w03a</a></li>
                            </ul>
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <h2 class="titolosottoversione">1.18</h2>
                                <li><a href="">21w44a</a></li>
                                <li><a href="">21w43a</a></li>
                                <li><a href="">21w42a</a></li>
                                <li><a href="">21w41a</a></li>
                                <li><a href="">21w40a</a></li>
                                <li><a href="../Pagine/PagineNews/21w39a.php">21w39a</a></li>
                                <li><a href="">21w38a</a></li>
                                <li><a href="../Pagine/PagineNews/21w37a.php">21w37a</a></li>
                            </ul>
                        </div>
                    </div>
                     
                    <div class="carousel-cell--news">
                        <h1 class="titoloversione">1.17</h1>
                        <img class="imgNews" src="../Immagini/1.17.jpg" alt="">
                        <div class="contenitoreSnapshot col-3">
                            <h2 class="titolosottoversione col3">1.17</h2>
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <li><a href="">21w20a</a></li>
                                <li><a href="">21w19a</a></li>
                                <li><a href="">21w18a</a></li>
                                <li><a href="">21w17a</a></li>
                                <li><a href="">21w16a</a></li>
                                <li><a href="">21w15a</a></li>
                                <li><a href="">21w14a</a></li>
                            </ul>
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <li><a href="">21w13a</a></li>
                                <li><a href="">21w11a</a></li>
                                <li><a href="">21w10a</a></li>
                                <li><a href="">21w08a</a></li>
                                <li><a href="">21w08b</a></li>
                                <li><a href="">21w07a</a></li>
                                <li><a href="">21w06a</a></li>
                            </ul>
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <li><a href="">21w05a</a></li>
                                <li><a href="">21w05b</a></li>
                                <li><a href="">21w03a</a></li>
                                <li><a href="">20w51a</a></li>
                                <li><a href="">20w49a</a></li>
                                <li><a href="">20w48a</a></li>
                                <li><a href="">20w46a</a></li>
                                <li><a href="">20w45a</a></li>
                            </ul>
                        </div>
                    </div>
                     
                    <div class="carousel-cell--news">
                        <h1 class="titoloversione">1.16</h1>
                        <img class="imgNews" src="../Immagini/1.16.jpg" alt="">
                        <div class="contenitoreSnapshot col-3">
                            <ul class="listasnapshot col3" style="list-style-type: none;">
                                <h2 class="titolosottoversione">1.16.2</h2>
                                <li><a href="">20w30a</a></li>
                                <li><a href="">20w29a</a></li>
                                <li><a href="">20w28a</a></li>
                                <li><a href="">20w27a</a></li>
                            </ul>
                            <h2 class="titolosottoversione col3">1.16</h2>
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <li><a href="">20w22a</a></li>
                                <li><a href="">20w21a</a></li>
                                <li><a href="">20w20a</a></li>
                                <li><a href="">20w20b</a></li>
                                <li><a href="">20w19a</a></li>
                                <li><a href="">20w18a</a></li>
                            </ul>
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <li><a href="">20w17a</a></li>
                                <li><a href="">20w16a</a></li>
                                <li><a href="">20w15a</a></li>
                                <li><a href="">20w14a</a></li>
                                <li><a href="">20w13a</a></li>
                                <li><a href="">20w13b</a></li>
                            </ul>
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <li><a href="">20w12a</a></li>
                                <li><a href="">20w11a</a></li>
                                <li><a href="">20w10a</a></li>
                                <li><a href="">20w09a</a></li>
                                <li><a href="">20w08a</a></li>
                                <li><a href="">20w07a</a></li>
                                <li><a href="../Pagine/PagineNews/20w06a.php">20w06a</a></li>
                            </ul>
                        </div>
                    </div>
                     
                    <div class="carousel-cell--news">
                        <h1 class="titoloversione">1.15</h1>
                        <img class="imgNews" src="../Immagini/1.15.jpg" alt="">
                        <div class="contenitoreSnapshot col-2">
                            <h2 class="titolosottoversione col2">1.15</h2>
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <li><a href="">19w46a</a></li>
                                <li><a href="">19w46b</a></li>
                                <li><a href="">19w45a</a></li>
                                <li><a href="">19w45b</a></li>
                                <li><a href="">19w44a</a></li>
                                <li><a href="">19w42a</a></li>
                                <li><a href="">19w41a</a></li>
                            </ul>
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <li><a href="">19w40a</a></li>
                                <li><a href="">19w39a</a></li>
                                <li><a href="">19w38a</a></li>
                                <li><a href="">19w38b</a></li>
                                <li><a href="">19w37a</a></li>
                                <li><a href="">19w36a</a></li>
                                <li><a href="">19w35a</a></li>
                                <li><a href="">19w34a</a></li>
                            </ul>
                        </div>    
                    </div>
                     
                    <div class="carousel-cell--news">
                        <h1 class="titoloversione">1.14</h1>
                        <img class="imgNews" src="../Immagini/1.14.jpg" alt="">
                        <div class="contenitoreSnapshot col-3">
                            <h2 class="titolosottoversione col3">1.14</h2>
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <li><a href="">19w14a</a></li>
                                <li><a href="">19w14b</a></li>
                                <li><a href="">19w13a</a></li>
                                <li><a href="">19w13b</a></li>
                                <li><a href="">19w12a</a></li>
                                <li><a href="">19w12b</a></li>
                                <li><a href="">19w11a</a></li>
                                <li><a href="">19w11b</a></li>
                                <li><a href="">19w09a</a></li>
                                <li><a href="">19w08a</a></li>
                            </ul>
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <li><a href="">19w08b</a></li>
                                <li><a href="">19w07a</a></li>
                                <li><a href="">19w06a</a></li>
                                <li><a href="">19w05a</a></li>
                                <li><a href="">19w04a</a></li>
                                <li><a href="">19w04b</a></li>
                                <li><a href="">19w03a</a></li>
                                <li><a href="">19w03b</a></li>
                                <li><a href="">19w03c</a></li>
                                <li><a href="">19w02a</a></li>
                                <li><a href="">18w50a</a></li> 
                            </ul>
                            <ul class="listasnapshot" style="list-style-type: none;">
                                <li><a href="">18w49a</a></li>
                                <li><a href="">18w48a</a></li>
                                <li><a href="">18w48b</a></li>
                                <li><a href="">18w47a</a></li>
                                <li><a href="">18w47b</a></li>
                                <li><a href="">18w46a</a></li>
                                <li><a href="">18w45a</a></li>
                                <li><a href="">18w44a</a></li>
                                <li><a href="">18w43a</a></li>
                                <li><a href="">18w43b</a></li>
                                <li><a href="">18w43c</a></li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
        </body>
        <footer class="footer-down">
            <p>Sito non ufficiale programmato al solo scopo didattico e dimostrativo</p>
        </footer>
    </div>
</php>