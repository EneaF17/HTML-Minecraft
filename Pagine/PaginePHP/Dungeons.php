<?php
session_start();
require ("../../data/connessioneDB.php");
if (!isset($_SESSION["Username"])) {
    header("location: ../../");
}
$random = rand(1,4);
$loading = false;
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

        $resto = $Saldo - 9.99;

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
        <title>Minecraft Dungeons - Negozio</title>
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
            <img src="../../Immagini/Negozio/SfondoDungeons.jpg" alt="">
            <div class="Box_Acquisto">
                <img src="../../Immagini/Negozio/LogoDungeons.avif" alt="">
                <h3>Seleziona la Versione</h3>
                <form action="" method="post">
                    <input type="radio" name="Deluxe" value="Si" id="Ver1" class="HideInputAcq">
                    <label class="labelAcq" for="Ver1">
                        <div class="Box_VersioneAcquisto">
                            <h3>Ultimate Edition</h3>
                            <h4 class="Gr TxLe">19,99$</h4>
                            <h4>Cosa é incluso:</h4>
                            <ul class="listaAcquisto">
                                <li>Gioco base piú tutti e sei i contenuti scaricabili</li>
                                <li>mantello da Eroe</li>
                                <li>Due skin per i giocatori</li>
                                <li>Pollo</li>
                            </ul>
                        </div>
                    </label>
                    <input type="radio" name="Deluxe" value="No" id="Ver2" class="HideInputAcq">
                    <label class="labelAcq" for="Ver2">
                        <div class="Box_VersioneAcquisto">
                            <h3>Standard Edition</h3>
                            <h4 class="Gr TxLe">9,99$</h4>
                            <h4>Cosa é incluso:</h4>
                            <ul class="listaAcquisto">
                                <li>Gioco base</li>
                                <li>Launcher</li>
                            </ul>
                        </div>
                    </label>
                    <input type="submit" class="SubmitButtonAcq" value="CHECKOUT >">
                </form>

                <h3> <?php echo "$Esito"; ?> </h3>

            </div>
            <div class="TextAcquisto">
                <h1>Minecraft Dungeons Ultimate Edition</h1>
                <p>Vivi la storia completa di Minecraft Dungeons dall'inizio all'End! Prova Minecraft Dungeons: Ultimate
                    Edition, che include il gioco base e tutti e sei i contenuti scaricabili. Acquistando la Ultimate
                    Edition, puoi ottenere l'esperienza completa a un prezzo inferiore rispetto all'acquisto dei singoli
                    elementi. Ottieni subito la tua copia!</p>
            </div>
        </main>

        <?php
        require ("../../data/Footer.php")
            ?>
    </body>
    </ph>