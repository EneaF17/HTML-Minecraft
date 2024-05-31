<?php
session_start();
require ("../../data/connessioneDB.php");
if (!isset($_SESSION["Username"])) {
    header("location: ../../");
}
$random = rand(1,4);
$Username = $_SESSION["Username"];

if (isset($_POST["Deluxe"])) {
    if ($_POST["Deluxe"] == "Si") {

        $QuerySaldo = "SELECT Saldo FROM giocatore WHERE Username = '$Username'";

        $ris = $Connessione->query($QuerySaldo) or die("ERRORE NELLA QUERY" . $Connessione->error);

        foreach ($ris as $Dati) {
            $Saldo = $Dati["Saldo"];
        }

        $resto = $Saldo - 19.99;

        if ($resto < 0) {
            $Esito = "SOLDI INSUFFICIENTI";
        } else {

            $UpdateSaldo = "UPDATE giocatore SET Saldo='$resto' WHERE Username = '$Username'";

            if ($Connessione->query("$UpdateSaldo") === true) {
                $Esito = "ACQUISTO ANDATO A BUON FINE";
            } else {
                $Esito = "ERRORE NELL' ACQUISTO";
            }
        }
    }
    if ($_POST["Deluxe"] == "No") {

        $QuerySaldo = "SELECT Saldo FROM giocatore WHERE Username = '$Username'";

        $ris = $Connessione->query($QuerySaldo) or die("ERRORE NELLA QUERY" . $Connessione->error);

        foreach ($ris as $Dati) {
            $Saldo = $Dati["Saldo"];
        }

        $resto = $Saldo - 14.99;

        if ($resto < 0) {
            $Esito = "SOLDI INSUFFICIENTI";
        } else {

            $UpdateSaldo = "UPDATE giocatore SET Saldo='$resto' WHERE Username = '$Username'";

            if ($Connessione->query("$UpdateSaldo") === true) {
                $Esito = "ACQUISTO ANDATO A BUON FINE";
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
            <img src="../../Immagini/Negozio/SfondoJava.avif" alt="">
            <div class="Box_Acquisto">
                <img src="../../Immagini/Negozio/LogoJava.avif" alt="">
                <h3>Seleziona la Versione</h3>
                <form action="" method="post">
                    <input type="radio" name="Deluxe" value="Si" id="Ver1" class="HideInputAcq">
                    <label class="labelAcq" for="Ver1">
                        <div class="Box_VersioneAcquisto">
                            <h3>Deluxe Collection</h3>
                            <h4 class="Gr TxLe">19,99$</h4>
                            <h4>Cosa é incluso:</h4>
                            <ul class="listaAcquisto">
                                <li>Minecraft: Java Edition</li>
                                <li>Minecraft: Bedrock Edition</li>
                                <li>Launcher di Minecraft</li>
                                <li>1600 minecoins</li>
                                <li>5 mappe</li>
                                <li>5 oggetti persona</li>
                                <li>3 emote</li>
                                <li>3 pacchetti skin</li>
                                <li>1 pacchetto texture</li>
                            </ul>
                        </div>
                    </label>
                    <input type="radio" name="Deluxe" value="No" id="Ver2" class="HideInputAcq">
                    <label class="labelAcq" for="Ver2">
                        <div class="Box_VersioneAcquisto">
                            <h3>Minecraft</h3>
                            <h4 class="Gr TxLe">14,99$</h4>
                            <h4>Cosa é incluso:</h4>
                            <ul class="listaAcquisto">
                                <li>Minecraft: Java Edition</li>
                                <li>Minecraft: Bedrock Edition</li>
                                <li>Launcher di Minecraft</li>
                            </ul>
                        </div>
                    </label>
                    <input type="submit" class="SubmitButtonAcq" value="CHECKOUT >">
                </form>

                <h3> <?php echo "$Esito"; ?> </h3>

            </div>
            <div class="TextAcquisto">
                <h1>Minecraft: Java E Bedrock Edition Deluxe Collection</h1>
                <p>Scopri tutti i diversi modi di esplorare, sopravvivere e costruire in Minecraft con Minecraft: Deluxe
                    Collection per PC, che include sia le edizioni Java e Bedrock che il launcher di Minecraft! Gioca
                    alla Bedrock Edition su un PC per esplorare gli infiniti contenuti creati dalla community nel
                    Minecraft Marketplace, scoprire nuovi stili di gioco attraverso mappe diverse ed esprimere te stesso
                    con le emote e gli oggetti per Creatore del personaggio.</p>
                <p class="ital">*Minecraft: Java Edition funziona su Windows, Mac e Linux; Minecraft: Bedrock Edition
                    funziona su Windows. I contenuti della Deluxe Collection funzionano solo in Minecraft: Bedrock
                    Edition su Windows.</p>

            </div>
        </main>

        <?php
        require ("../../data/Footer.php")
            ?>
    </body>
    </ph>