<?php
    session_start();
    require("../../data/connessioneDB.php");
    if (!isset($_SESSION["Username"])) { header("location: ../");}

    $Username = $_SESSION["Username"];
    
    $QueryMiei= "SELECT Nome, Costo, Deluxe, Versione, Titolo, Descrizione, Foto, Copertina, Elementi FROM giochi WHERE Id_gioco IN (SELECT Id_gioco FROM posseduti WHERE Username = '$Username')";
    $DatiMiei = $Connessione -> query($QueryMiei) or die("ERRORE QUERY". $Connessione->error);
    

    $QueryAltri="SELECT Nome, Costo, Deluxe, Versione, Titolo, Descrizione, Foto, Copertina, Elementi FROM giochi WHERE Nome NOT IN (SELECT Nome FROM giochi WHERE Id_gioco IN (SELECT Id_gioco FROM posseduti WHERE Username = '$Username'))";
    $DatiAltri= $Connessione -> query($QueryAltri) or die("ERRORE QUERY". $Connessione->error);


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
        <p class="med-text" style="position: relative;width: 80%;margin-left:10%;padding-top: 10px;background-color: hsla(0, 0%, 66%, 0.804);">
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
                    <a class="LinkShop" href="Gioco.php?nome_gioco=$Nomegioco">
                        <div class="BoxGioco" style="background-image: url($sfondo);">
                            <div class="ImgSide_Giochi">
                                <img class="fullImg" src="../../Immagini/Negozio/$Foto" alt="">
                            </div>
                            <div class="TextSide_Giochi">
                                <h2 style="width:60%; text-align:center">$Nomegioco</h2>
                                <img style="float:right; width:40%" src="../../Immagini/Negozio/$Copertina" alt="">
                                <h2 class="Gr">$Costo</h2>
                                <h3 class="TxLe" style="margin-left:5px">Versione : $Versione</h3>
                                <h3 class="TxLe" style="margin-left:5px">Deluxe : $Deluxe</h3>
                                <h3 class="TxLe">Contenuti:</h3>
                                <ul>
                    EOD;
                    $El=explode('\n', $Elementi);
                    foreach($El as $Elemento){
                                echo <<<EOD
                                    <li style="color:black">$Elemento</li>
                                EOD;
                    }

                    echo <<<EOD
                                </ul>
                            </div>
                        </div>
                    </a>
                    EOD;
                }
            }
        ?>
        </div>
        <p class="med-text" style="position: relative;width: 80%;margin-left:10%;padding-top: 10px;background-color: hsla(0, 0%, 66%, 0.804);">
            <?php  echo $DatiAltri->num_rows>0?"Scopri gli altri giochi:":"Hai già tutti i giochi" ?>
        </p>
        <div class="Box_negozio">
        <?php
            if($DatiAltri->num_rows>0){
                foreach($DatiAltri as $Gioco)
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
                    <a class="LinkShop" href="Gioco.php?nome_gioco=$Nomegioco">
                        <div class="BoxGioco" style="background-image: url($sfondo);">
                            <div class="ImgSide_Giochi">
                                <img class="fullImg" src="../../Immagini/Negozio/$Foto" alt="">
                            </div>
                            <div class="TextSide_Giochi">
                                <h2 style="width:60%; text-align:center">$Nomegioco</h2>
                                <img style="float:right; width:40%" src="../../Immagini/Negozio/$Copertina" alt="">
                                <h2 class="Gr">$Costo</h2>
                                <h3 class="TxLe" style="margin-left:5px">Versione : $Versione</h3>
                                <h3 class="TxLe" style="margin-left:5px">Deluxe : $Deluxe</h3>
                                <h3 class="TxLe">Contenuti:</h3>
                                <ul>
                    EOD;
                    $El=explode('\n', $Elementi);
                    foreach($El as $Elemento){
                                echo <<<EOD
                                    <li style="color:black">$Elemento</li>
                                EOD;
                    }

                    echo <<<EOD
                                </ul>
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