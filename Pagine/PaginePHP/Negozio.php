<?php
    session_start();
    require("../../data/connessioneDB.php");
    if (!isset($_SESSION["Username"])) {
        $_SESSION["Reindirizza"] = "Negozio.php";
    }
?>




<!DOCTYPE php>
<php lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negozio - Minecraft</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php 
        require("../../data/Header.php");
    ?>
    <main>
        <h1 style="margin-top: 10px;">Compra i giochi:</h1>
        <div class="Box_Negozio">
            <a class="LinkShop" href="<?php echo isset($_SESSION["Username"])?'Gioco.php?nome_gioco=Minecraft':'LoginPage.php' ?>">
                <div class="BoxJava">
                    <div class="ImgSide_Shop">
                        <img class="fullImg" src="../../Immagini/Negozio/JavaEdition.png" alt="">
                    </div>
                    <div class="TextSide_Shop">
                        <h2>Minecraft</h2>
                        <h2 class="Gr">19,99$</h2>
                        <p>Sopravvivenza sandbox, avventura, giocatore singolo e multigiocatore</p>
                        <div class="lisaSistemi_Shop">
                            <img src="../../Immagini/Negozio/Icona_Windows.png" alt="">
                            <img src="../../Immagini/Negozio/Icona_Linux.png" alt="">
                            <img src="../../Immagini/Negozio/Icona_Xbox.png" alt="">
                            <img src="../../Immagini/Negozio/Icona_Ps.png" alt="">
                            <img src="../../Immagini/Negozio/Icona_Switch.png" alt="">
                            <img src="../../Immagini/Negozio/Icona_Apple.png" alt="">
                            <img src="../../Immagini/Negozio/Icona_Android.png" alt="">
                            <img src="../../Immagini/Negozio/Icona_Chrome.webp" alt="">
                        </div>
                    </div>
                </div>
            </a>
            <a class="LinkShop" href="<?php echo isset($_SESSION["Username"])?'Gioco.php?nome_gioco=Dungeons':'LoginPage.php' ?>">
                <div class="BoxDungeons">
                <div class="ImgSide_Shop">
                        <img class="fullImg" src="../../Immagini/Negozio/Dungeons.avif" alt="">
                    </div>
                    <div class="TextSide_Shop">
                        <h2>Minecraft Dungeons</h2>
                        <h2 class="Gr">19,99$</h2>
                        <p>Dungeon crawler, gioco di ruolo d'azione, giocatore singolo e multigiocatore</p>
                        <div class="lisaSistemi_Shop">
                            <img src="../../Immagini/Negozio/Icona_Windows.png" alt="">
                            <img src="../../Immagini/Negozio/Icona_Xbox.png" alt="">
                            <img src="../../Immagini/Negozio/Icona_Ps.png" alt="">
                            <img src="../../Immagini/Negozio/Icona_Switch.png" alt="">
                            <img src="../../Immagini/Negozio/Icona_Steam.png" alt="">
                        </div>
                    </div>
                </div>
            </a>
            <a class="LinkShop" href="<?php echo isset($_SESSION["Username"])?'Gioco.php?nome_gioco=Legends':'LoginPage.php' ?>">
                <div class="BoxLegends">
                <div class="ImgSide_Shop">
                        <img class="fullImg" src="../../Immagini/Negozio/Legends.png" alt="">
                    </div>
                    <div class="TextSide_Shop">
                        <h2>Minecraft Legends</h2>
                        <h2 class="Gr">19,89$</h2>
                        <p>Gioco di ruolo d'azione, strategia, giocatore singolo e multigiocatore</p>
                        <div class="lisaSistemi_Shop">
                            <img src="../../Immagini/Negozio/Icona_Windows.png" alt="">
                            <img src="../../Immagini/Negozio/Icona_Xbox.png" alt="">
                            <img src="../../Immagini/Negozio/Icona_Ps.png" alt="">
                            <img src="../../Immagini/Negozio/Icona_Switch.png" alt="">
                            <img src="../../Immagini/Negozio/Icona_Steam.png" alt="">
                        </div>
                    </div>
                </div>    
            </a>
            

        </div>

    </main>

    <?php 
        require ("../../data/Footer.php")
    ?>
</body>
</php>