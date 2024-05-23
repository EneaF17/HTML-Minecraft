<?php
session_start();
require ("../../data/connessioneDB.php");
if (!isset($_SESSION["Username"])) {
    header("location: ../../");
}
$random = rand(1,4);
$loading = false;
$Username = $_SESSION["Username"];

if (isset($_POST["Versione"])) {
    if ($_POST["Versione"] == "Versione1") {

        $QuerySaldo = "SELECT Saldo FROM giocatore WHERE Username = '$Username'";

        $ris = $Connessione->query($QuerySaldo) or die("ERRORE NELLA QUERY" . $Connessione->error);

        foreach ($ris as $Dati) {
            $Saldo = $Dati["Saldo"];
        }

        $resto = $Saldo - 24.99;

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
    if ($_POST["Versione"] == "Versione2") {

        $QuerySaldo = "SELECT Saldo FROM giocatore WHERE Username = '$Username'";

        $ris = $Connessione->query($QuerySaldo) or die("ERRORE NELLA QUERY" . $Connessione->error);

        foreach ($ris as $Dati) {
            $Saldo = $Dati["Saldo"];
        }

        $resto = $Saldo - 19.84;

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
        <title>Minecraft Legends - Negozio</title>
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
            <img src="../../Immagini/Negozio/SfondoLegends.jpeg" alt="">
            <div class="Box_Acquisto">
                <img src="../../Immagini/Negozio/LogoLegends.avif" alt="">
                <h3>Seleziona la Versione</h3>
                <form action="" method="post">
                    <input type="radio" name="Versione" value="Versione1" id="Ver1" class="HideInputAcq">
                    <label class="labelAcq" for="Ver1">
                        <div class="Box_VersioneAcquisto">
                            <h3>Deluxe Edition</h3>
                            <h4 class="Gr TxLe">24,99$</h4>
                            <h4>Cosa é incluso:</h4>
                            <ul class="listaAcquisto">
                                <li>Gioco base</li>
                                <li>Launcher</li>
                                <li>Pacchetto skin Deluxe</li>
                            </ul>
                        </div>
                    </label>
                    <input type="radio" name="Versione" value="Versione2" id="Ver2" class="HideInputAcq">
                    <label class="labelAcq" for="Ver2">
                        <div class="Box_VersioneAcquisto">
                            <h3>Standard Edition</h3>
                            <h4 class="Gr TxLe">19,84$</h4>
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
                <h1>Minecraft Legends Standard Edition</h1>
                <p>I Piglin minacciano di esaurire il Sopramondo. Sei tu l'eroe di cui questa pacifica terra ha bisogno?
                    Esplora biomi lussureggianti per stringere alleanze con nuovi amici e creature familiari, quindi
                    affronta i Piglin in epiche battaglie. Ma fai attenzione: reagiscono sempre.</p>
                <p>Gioca al più grande aggiornamento gratuito dei contenuti di Minecraft Legends! Entra in azione con
                    l'impavida rana e unisciti alle streghe armate di pozioni, quindi costruisci calderoni per aumentare
                    i danni dei tuoi alleati. Affronta il Clanger, un Piglin così rumoroso da stordire, ma avvicinati
                    con cautela all'Air Chopper in modo che i tuoi amici non vengano spazzati via!</p>
            </div>
        </main>

        <?php
        require ("../../data/Footer.php")
            ?>
    </body>
    </ph>