<?php
session_start();
require ("../../data/connessioneDB.php");
if (!isset($_SESSION["Username"])) {
    header("location: ../../");
}
if (!isset($_GET["nome_gioco"])) {
    header("location: Negozio.php");
}
$nomegioco=$_GET["nome_gioco"];

$random = rand(1,4);
$Username = $_SESSION["Username"];



if (isset($_POST["Deluxe"])) {
    if ($_POST["Deluxe"] == "Si") {

        $QuerySaldo = "SELECT Saldo FROM giocatore WHERE Username = '$Username'";
        $QueryCosto="SELECT Costo FROM giochi WHERE Nome='$nomegioco' AND Deluxe='Si'";
        $ris = $Connessione->query($QuerySaldo) or die("ERRORE NELLA QUERY" . $Connessione->error);
        $riscosto=$Connessione->query($QueryCosto) or die("ERRORE NELLA QUERY" . $Connessione->error);

        foreach ($ris as $Dati) {
            $Saldo = $Dati["Saldo"];
        }
        foreach($riscosto as $Daticosto){
            $Costo=$Daticosto["Costo"];
        }

        $resto = $Saldo - $Costo;

        if ($resto < 0) {
            $Esito = "SOLDI INSUFFICIENTI";
        } else {

            $UpdateSaldo = "UPDATE giocatore SET Saldo='$resto' WHERE Username = '$Username'";

            if ($Connessione->query("$UpdateSaldo") === true) {
                $Query="SELECT Id_gioco FROM giochi WHERE Nome='$nomegioco' AND Deluxe='Si'";
                $ris=$Connessione->query($Query) or die("ERRORE NELLA QUERY" . $Connessione->error);
                foreach($ris as $dati){
                    $Idgioco=$dati["Id_gioco"];
                }
                $Queryaggiungi="INSERT INTO posseduti(Id_gioco, Username)
                VALUES ('$Idgioco', '$Username')";
                if($Connessione->query("$Queryaggiungi") === true){}else{echo $Connessione->error;}

                $Esito = "ACQUISTO ANDATO A BUON FINE";
            } else {
                $Esito = "ERRORE NELL' ACQUISTO";
            }
        }
    }
    if ($_POST["Deluxe"] == "No") {

        $QuerySaldo = "SELECT Saldo FROM giocatore WHERE Username = '$Username'";
        $QueryCosto="SELECT Costo FROM giochi WHERE Nome='$nomegioco' AND Deluxe='No'";
        $ris = $Connessione->query($QuerySaldo) or die("ERRORE NELLA QUERY" . $Connessione->error);
        $riscosto=$Connessione->query($QueryCosto) or die("ERRORE NELLA QUERY" . $Connessione->error);
        foreach ($ris as $Dati) {
            $Saldo = $Dati["Saldo"];
        }
        foreach($riscosto as $Daticosto){
            $Costo=$Daticosto["Costo"];
        }

        $resto = $Saldo - $Costo;

        if ($resto < 0) {
            $Esito = "SOLDI INSUFFICIENTI";
        } else {

            $UpdateSaldo = "UPDATE giocatore SET Saldo='$resto' WHERE Username = '$Username'";

            if ($Connessione->query("$UpdateSaldo") === true) {
                $Esito = "ACQUISTO ANDATO A BUON FINE";
                $Query="SELECT Id_gioco FROM giochi WHERE Nome='$nomegioco' AND Deluxe='No'";
                $ris=$Connessione->query($Query) or die("ERRORE NELLA QUERY" . $Connessione->error);
                foreach($ris as $dati){
                    $Idgioco=$dati["Id_gioco"];
                }
                $Queryaggiungi="INSERT INTO posseduti(Id_gioco, Username)
                VALUES ('$Idgioco', '$Username')";
                if($Connessione->query("$Queryaggiungi") === true){}else{echo $Connessione->error;}
            } else {
                $Esito = "ERRORE NELL' ACQUISTO";
            }
        }
    }
    header("Refresh: $random;");
    $loading = true;
} else {
    $Esito = "ESITO ACQUISTO...";
    $loading = false;
}
?>


<!DOCTYPE php>
<php lang="it">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>JavaEdition - Negozio</title>
        <link rel="stylesheet" href="../../style.css">

    </head>

    <body>
        <?php
        require ("../../data/Header.php");
        if ($loading) {
            echo <<<EOD
            <div class="CopriTutto">
                <div class="loaderGen1"></div>
                <div class="loaderGen2"></div>
            </div>
            EOD;}
        ?>
        <main>
            <?php
                $QueryN="SELECT Nome, Costo, Deluxe, Versione, Titolo, Descrizione, Foto, Copertina, Elementi
                FROM giochi
                WHERE Nome='$nomegioco' AND Deluxe='No'";
                $QueryS="SELECT Costo, Deluxe, Versione, Elementi
                FROM giochi
                WHERE Nome='$nomegioco' AND Deluxe='Si'";

                $risN = $Connessione->query($QueryN) or die("ERRORE NELLA QUERY" . $Connessione->error);
                $risS = $Connessione->query($QueryS) or die("ERRORE NELLA QUERY" . $Connessione->error);

                foreach($risN as $DatiN){
                    $titolo=$DatiN["Titolo"];
                    $desc=$DatiN["Descrizione"];
                    $foto=$DatiN["Foto"];
                    $copertina=$DatiN["Copertina"];
                    $costoN=$DatiN["Costo"];
                    $versioneN=$DatiN["Versione"];
                    $elementiN=$DatiN["Elementi"];
                }
                foreach($risS as $DatiS){
                    $costoS=$DatiS["Costo"];
                    $versioneS=$DatiS["Versione"];
                    $elementiS=$DatiS["Elementi"];
                }
            ?>
            <img src="../../Immagini/Negozio/<?php echo $foto?>" alt="">
            <div class="Box_Acquisto">
                <img src="../../Immagini/Negozio/<?php echo $copertina?>" alt="">
                <h3>Seleziona la Versione</h3>
                <form action="" method="post">
                    <input type="radio" name="Deluxe" value="Si" id="Ver1" class="HideInputAcq">
                    <label class="labelAcq" for="Ver1">
                        <div class="Box_VersioneAcquisto">
                            <h3><?php echo $versioneS?></h3>
                            <h4 class="Gr TxLe"><?php echo $costoS."$"?></h4>
                            <h4>Cosa é incluso:</h4>
                            <ul class="listaAcquisto">
                                <?php
                                    $lista=explode("\n", $elementiS);
                                    foreach($lista as $el)
                                    {
                                        echo "<li>$el</li>";
                                    }
                                ?>
                            </ul>
                        </div>
                    </label>
                    <input type="radio" name="Deluxe" value="No" id="Ver2" class="HideInputAcq">
                    <label class="labelAcq" for="Ver2">
                        <div class="Box_VersioneAcquisto">
                            <h3><?php echo $versioneN?></h3>
                            <h4 class="Gr TxLe"><?php echo $costoN."$"?></h4>
                            <h4>Cosa é incluso:</h4>
                            <ul class="listaAcquisto">
                                <?php
                                    $lista=explode("\n", $elementiN);
                                    foreach($lista as $el)
                                    {
                                        echo "<li>$el</li>";
                                    }
                                ?>
                            </ul>
                        </div>
                    </label>
                    <input type="submit" class="SubmitButtonAcq" value="CHECKOUT >">
                </form>

                <h3> <?php echo "$Esito"; ?> </h3>

            </div>
            <div class="TextAcquisto">
                <h1><?php echo $titolo?></h1>
                <?php
                    $lista=explode("\n", $desc);
                    foreach($lista as $p)
                    {
                        echo "<p>$p</p>";
                    }
                ?>

            </div>
        </main>

        <?php
        require ("../../data/Footer.php")
            ?>
    </body>
    </php>