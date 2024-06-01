<?php
    session_start();
    require("../../data/connessioneDB.php");
    if (!isset($_SESSION["Username"])) { header("location: ../");}

    $Username = $_SESSION["Username"];
    
    $QueryNomi= "SELECT Nome, Costo, Deluxe, Versione, Titolo, Descrizione, Foto, Copertina, Elementi FROM giochi WHERE Id_gioco IN (SELECT Id_gioco FROM posseduti WHERE Username = '$Username')";
    $DatiMiei = $Connessione -> query($QueryNomi) or die("ERRORE QUERY". $Connessione->error);
    

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
        <p>
            <?php  echo $DatiMiei->num_rows>0?"I tuoi giochi:":"Non hai acquistato nessun gioco" ?>
        </p>
        <div class="Box_negozio">
        <?php 
            if($DatiMiei->num_rows>0){
                foreach($DatiMiei as $Gioco)
                {
                    $Nomegioco=$Gioco["Nome"];
                    $Costo=$Gioco["Costo"];
                    $Deluxe=$Gioco["Deluxe"];
                    $Versione=$Gioco["Versione"];
                    $Titolo=$Gioco["Titolo"];
                    $Foto=$Gioco["Foto"];
                    $Copertina=$Gioco["Copertina"];
                    $Elementi=$Gioco["Elementi"];
                    $Desc=$Gioco["Descrizione"];
                    if($Nomegioco=="Minecraft") $sfondo="../../Immagini/Negozio/Terra.jpg";
                    elseif($Nomegioco=="Dungeons") $sfondo="../../Immagini/Negozio/Cobblestone.png";
                    elseif($Nomegioco=="Legends") $sfondo="../../Immagini/Negozio/Netherrack.png";
                    echo <<<EOD
                    <a class="LinkShop" href="Gioco.php?nome_gioco='$Nomegioco'">
                        <div class="BoxGioco" style="background-image: url($sfondo);">
                            <div class="ImgSide_Shop">
                                <img class="fullImg" src="../../Immagini/Negozio/$Foto" alt="">
                            </div>
                            <div class="TextSide_Shop">
                                <h2>$Nomegioco</h2>
                                <h2 class="Gr">$Costo</h2>
                            </div>
                        </div>
                    </a>
                    EOD;
                }
            }
        ?>
        </div>
        
    </div>
    </main>
    <footer class="NoMargin">
        <p class="small-text NoMargin">Sito non ufficiale programmato al solo scopo didattico e dimostrativo  da Alessandro Beretta e Enea Fascilla</p>
    </footer>
</body>
</php>