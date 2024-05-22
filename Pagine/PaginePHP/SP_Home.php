<?php
    session_start();
    require("../../data/connessioneDB.php");
    if (!isset($_SESSION["Username"])) { header("location: ../");}

    $Username = $_SESSION["Username"];
    
    $DatiQuery = "SELECT Nome,Cognome,Saldo FROM giocatore WHERE Username = '$Username'";

    $Dati = $Connessione -> query($DatiQuery) or die("ERRORE QUERY". $Connessione->error);

    foreach($Dati as $DatiItem) {
        $Nome = $DatiItem["Nome"];
        $Cognome = $DatiItem["Cognome"];
        $Saldo = $DatiItem["Saldo"];
        }
?>


<!DOCTYPE php>
<php lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP - HOME</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php require("../../data/PSHeader.php");?>

    <main class="marginMain">
    
    <?php require("../../data/sideNav.php")?>
    
    <div class="ContentBoxSP">
        <div class="BenevenutoTXT">
            <?php echo"<h1>Bentornato $Nome $Cognome</h1> ";?>
        </div>
            <div class="SPboxSaldo">
                <h3>IL TUO SALDO É DI : <?php echo "$Saldo" ?> $</h3>
            </div>
        <a href="" class="LinkBoxSP">
            <div class="SPboxLinks">
                    <img src="../../Immagini/PhpImg/SPChest.png" class="iconaSPHome" alt="">
                    <div class="SPboxLinksTXT">
                        <h3>I miei giochi</h3>
                        <p>Visualizza i tuoi giochi e quelli disponibili nel negozio.</p>
                    </div>
            </div>
        </a>
        <a href="IlMioAccount.php" class="LinkBoxSP">
            <div class="SPboxLinks">
                    <div class="SPboxLinksTXT">
                        <h3>Il mio account</h3>
                        <p>Visualizza i tuoi dati per modificarli o aggiornarli</p>
                    </div>
                    <img src="../../Immagini/PhpImg/SPAllay.png" class="iconaSPHome" alt="">
            </div>
        </a>
        <a href="Preferiti.php" class="LinkBoxSP">
            <div class="SPboxLinks">
                    <img src="../../Immagini/PhpImg/SPCuore.png" class="iconaSPHome" alt="">
                    <div class="SPboxLinksTXT">
                        <h3>Preferiti</h3>
                        <p>Visualizza le pagine salvate nei preferiti</p>
                    </div>
            </div>
        </a>
        <a href="../../data/LogOut.php" class="LinkBoxSP">
            <div class="SPboxLinks">
                    <div class="SPboxLinksTXT">
                        <h3>LOGOUT</h3>
                        <p>Esci dal tuo account e torna al menú principale</p>
                    </div>
                    <img src="../../Immagini/PhpImg/SPLock.png" class="iconaSPHome" alt="">
            </div>
        </a>
    </div>
    <footer class="NoMargin">
        <p class="small-text NoMargin">Sito non ufficiale programmato al solo scopo didattico e dimostrativo</p>
    </footer>
    </main>
</body>
</php>