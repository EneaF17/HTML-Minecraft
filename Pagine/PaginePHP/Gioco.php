<?php
session_start();
require("../../data/connessioneDB.php");
if (!isset($_SESSION["Username"])) {
    header("location: ../../");
}
if (!isset($_GET["nome_gioco"])) {
    header("location: Negozio.php");
}
$nomegioco = $_GET["nome_gioco"];

if(isset($_GET["Regala"])){
    $Regala=$_GET["Regala"];
}

if (!isset($_SESSION["Risultato"])) {$risultato=false;} else {$risultato = $_SESSION["Risultato"];}
if (!isset($_SESSION["risultatoTXT"])) {$risultatoTXT="ERRORE CRITICO";} else {$risultatoTXT = $_SESSION["risultatoTXT"];}
if (!isset($_SESSION["redirect"])) {$redirect="";} else {$redirect = $_SESSION["redirect"];}



$acquistato=false;
$random = rand(1, 4);
$Username = $_SESSION["Username"];

$Query = "SELECT Id_gioco FROM giochi WHERE Nome='$nomegioco'";
$ris = $Connessione->query($Query) or die("ERRORE NELLA QUERY" . $Connessione->error);
if(isset($_GET["Regala"])){
    foreach ($ris as $dati) {
        $Idgioco = $dati["Id_gioco"];
        $Query2="SELECT Id_gioco, Username FROM posseduti WHERE Id_gioco='$Idgioco' AND Username='$Regala'";
        $ris2 = $Connessione->query($Query2) or die("ERRORE NELLA QUERY" . $Connessione->error);
        if($ris2->num_rows>0){$acquistato=true;}
    }
}
else{
    foreach ($ris as $dati) {
        $Idgioco = $dati["Id_gioco"];
        $Query2="SELECT Id_gioco, Username FROM posseduti WHERE Id_gioco='$Idgioco' AND Username='$Username'";
        $ris2 = $Connessione->query($Query2) or die("ERRORE NELLA QUERY" . $Connessione->error);
        if($ris2->num_rows>0){$acquistato=true;}
    }
}

// if ($acquistato) echo "SI"; else echo "No";


if (isset($_POST["Deluxe"])) {
    if ($_POST["Deluxe"] == "Si") {
        
        $QuerySaldo = "SELECT Saldo FROM giocatore WHERE Username = '$Username'";

        $QueryCosto = "SELECT Costo FROM giochi WHERE Nome='$nomegioco' AND Deluxe='Si'";
        $ris = $Connessione->query($QuerySaldo) or die("ERRORE NELLA QUERY" . $Connessione->error);
        $riscosto = $Connessione->query($QueryCosto) or die("ERRORE NELLA QUERY" . $Connessione->error);

        foreach ($ris as $Dati) {
            $Saldo = $Dati["Saldo"];
        }
        foreach ($riscosto as $Daticosto) {
            $Costo = $Daticosto["Costo"];
        }

        $resto = $Saldo - $Costo;

        if ($resto < 0) {
            $_SESSION["risultatoTXT"] = "SOLDI INSUFFICIENTI";
        } else {
            $UpdateSaldo = "UPDATE giocatore SET Saldo='$resto' WHERE Username = '$Username'";

            if ($Connessione->query("$UpdateSaldo") === true) {
                $Query = "SELECT Id_gioco FROM giochi WHERE Nome='$nomegioco' AND Deluxe='Si'";
                $ris = $Connessione->query($Query) or die("ERRORE NELLA QUERY" . $Connessione->error);
                foreach ($ris as $dati) {
                    $Idgioco = $dati["Id_gioco"];
                }


                if(isset($_GET["Regala"])) 
                {
                    $Queryaggiungi = "INSERT INTO posseduti(Id_gioco, Username)
                    VALUES ('$Idgioco', '$Regala')";
                }else{
                    $Queryaggiungi = "INSERT INTO posseduti(Id_gioco, Username)
                    VALUES ('$Idgioco', '$Username')";
                }
                if ($Connessione->query("$Queryaggiungi") === true) {
                } else {
                    echo $Connessione->error;
                }

                $_SESSION["risultatoTXT"] = "ACQUISTO ANDATO A BUON FINE";
            } else {
                $_SESSION["risultatoTXT"] = "ERRORE NELL' ACQUISTO";
            }
        }
    }
    if ($_POST["Deluxe"] == "No") {
        
        $QuerySaldo = "SELECT Saldo FROM giocatore WHERE Username = '$Username'";
        $QueryCosto = "SELECT Costo FROM giochi WHERE Nome='$nomegioco' AND Deluxe='No'";
        $ris = $Connessione->query($QuerySaldo) or die("ERRORE NELLA QUERY" . $Connessione->error);
        $riscosto = $Connessione->query($QueryCosto) or die("ERRORE NELLA QUERY" . $Connessione->error);
        foreach ($ris as $Dati) {
            $Saldo = $Dati["Saldo"];
        }
        foreach ($riscosto as $Daticosto) {
            $Costo = $Daticosto["Costo"];
        }

        $resto = $Saldo - $Costo;

        if ($resto < 0) {
            $_SESSION["risultatoTXT"] = "SOLDI INSUFFICIENTI";
        } else {

            $UpdateSaldo = "UPDATE giocatore SET Saldo='$resto' WHERE Username = '$Username'";
        
            if ($Connessione->query("$UpdateSaldo") === true) {
                $_SESSION["risultatoTXT"] = "ACQUISTO ANDATO A BUON FINE";
                $Query = "SELECT Id_gioco FROM giochi WHERE Nome='$nomegioco' AND Deluxe='No'";
                $ris = $Connessione->query($Query) or die("ERRORE NELLA QUERY" . $Connessione->error);
                foreach ($ris as $dati) {
                    $Idgioco = $dati["Id_gioco"];
                }


                if(isset($_GET["Regala"])) 
                {
                    $Queryaggiungi = "INSERT INTO posseduti(Id_gioco, Username)
                    VALUES ('$Idgioco', '$Regala')";
                }else{
                    $Queryaggiungi = "INSERT INTO posseduti(Id_gioco, Username)
                    VALUES ('$Idgioco', '$Username')";
                }


                if ($Connessione->query("$Queryaggiungi") === true) {
                } else {
                    echo $Connessione->error;
                }
            } else {
                $_SESSION["risultatoTXT"] = "ERRORE NELL' ACQUISTO";
            }
        }
    }
    header("Refresh: $random;");
    $loading = true;
} else {
    $loading = false;
}
?>


<!DOCTYPE php>
<php lang="it">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $nomegioco?> - Negozio</title>
        <link rel="stylesheet" href="../../style.css">

    </head>

    <body>
        <?php
        require("../../data/Header.php");
        if ($risultato) {
            echo <<<EOD
            <div class="CopriTutto">
                <h1>$risultatoTXT</h1>
            </div>
            EOD;
            $_SESSION["Risultato"] = false;
            header("refresh:2; $redirect");}
        if ($loading) {
            echo <<<EOD
            <div class="CopriTutto">
                <div class="loaderGen1"></div>
                <div class="loaderGen2"></div>
            </div>
            EOD;
            $_SESSION["Risultato"] = true;}
        ?>
        <main>
            <?php
            $QueryN = "SELECT Nome, Costo, Deluxe, Versione, Titolo, Descrizione, Foto, Copertina, Elementi
                FROM giochi
                WHERE Nome='$nomegioco' AND Deluxe='No'";
            $QueryS = "SELECT Costo, Deluxe, Versione, Elementi
                FROM giochi
                WHERE Nome='$nomegioco' AND Deluxe='Si'";

            $risN = $Connessione->query($QueryN) or die("ERRORE NELLA QUERY" . $Connessione->error);
            $risS = $Connessione->query($QueryS) or die("ERRORE NELLA QUERY" . $Connessione->error);

            foreach ($risN as $DatiN) {
                $titolo = $DatiN["Titolo"];
                $desc = $DatiN["Descrizione"];
                $foto = $DatiN["Foto"];
                $copertina = $DatiN["Copertina"];
                $costoN = $DatiN["Costo"];
                $versioneN = $DatiN["Versione"];
                $elementiN = $DatiN["Elementi"];
            }
            foreach ($risS as $DatiS) {
                $costoS = $DatiS["Costo"];
                $versioneS = $DatiS["Versione"];
                $elementiS = $DatiS["Elementi"];
            }
            ?>
            <img src="../../Immagini/Negozio/<?php echo $foto ?>" alt="">
            <div class="Box_Acquisto">
                <img src="../../Immagini/Negozio/<?php echo $copertina ?>" alt="">
                <?php 
                // echo "<p>$Regala</p>
                //     <p>".$_SESSION['Regala']."</p>";
                if(!isset($_GET["Regala"])) 
                        if($acquistato){
                            echo "<h3>Hai già acquistato questo gioco</h3>";
                        }
                        else
                        {
                            echo "<h3>Seleziona la versione</h3>";
                        }
                    else{
                        if($acquistato){
                            echo "<h3>$Regala ha già acquistato questo gioco</h3>";
                        }
                        else
                        {
                            echo "<h3>Seleziona la versione</h3>";
                        }
                    }
                ?>


                <?php if(!isset($_GET["Regala"])) 
                        echo <<<EOD
                            <a href="Regala.php?nome_gioco=$nomegioco" style="text-decoration:none; color:black"><div class="cta">Regala $nomegioco</div></a>
                            EOD;
                    else{
                        echo "<h3>Stai regalando a $Regala</h3>";
                    }
                ?>
                
                <form action="" method="post">
                    <div class="NegozioDiv">
                    <input type="radio" name="Deluxe" value="Si" id="Ver1" <?php echo $acquistato?"class='HideInputNoAcq'":"class='HideInputAcq'"?> >
                    <label class="labelAcq" for="Ver1">
                        <div class="Box_VersioneAcquisto">
                            <h3><?php echo $versioneS ?></h3>
                            <h4 class="Gr TxLe"><?php echo $costoS . "$" ?></h4>
                            <h4>Cosa é incluso:</h4>
                            <ul class="listaAcquisto">
                                <?php
                                $lista = explode("\n", $elementiS);
                                foreach ($lista as $el) {
                                    echo "<li>$el</li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </label>
                    <input type="radio" name="Deluxe" value="No" id="Ver2" <?php echo $acquistato?"class='HideInputNoAcq'":"class='HideInputAcq'"?> >
                    <label class="labelAcq" for="Ver2">
                        <div class="Box_VersioneAcquisto">
                            <h3><?php echo $versioneN ?></h3>
                            <h4 class="Gr TxLe"><?php echo $costoN . "$" ?></h4>
                            <h4>Cosa é incluso:</h4>
                            <ul class="listaAcquisto">
                                <?php
                                $lista = explode("\n", $elementiN);
                                foreach ($lista as $el) {
                                    echo "<li>$el</li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </label>
                    </div>
                    <input type="submit" <?php echo $acquistato?"class='SubmitButtonNoAcq'":"class='SubmitButtonAcq'"?> value="CHECKOUT >" <?php echo $acquistato?"disabled='disabled'":'' ?>>
                </form>

                <!-- <h3> <?php echo "$Esito"; ?> </h3> -->

            </div>
            <div class="TextAcquisto">
                <h1><?php echo $titolo ?></h1>
                <?php
                $lista = explode("\n", $desc);
                foreach ($lista as $p) {
                    echo "<p>$p</p>";
                }
                ?>

            </div>
        </main>

        <?php
        require("../../data/Footer.php")
        ?>
    
    </body>
    <?php unset($_GET["Regala"]);?>
</php>