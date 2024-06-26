<?php 
    session_start();
    require("../../data/connessioneDB.php");
    $_SESSION['previous'] = basename($_SERVER['PHP_SELF']);
    if (!isset($_SESSION["Username"])) { header("location: ../");}
    if (!isset($_SESSION["Risultato"])) {$risultato=false;} else {$risultato = $_SESSION["Risultato"];}
    if (!isset($_SESSION["risultatoTXT"])) {$risultatoTXT="ERRORE CRITICO";} else {$risultatoTXT = $_SESSION["risultatoTXT"];}
    if (!isset($_SESSION["redirect"])) {$redirect="";} else {$redirect = $_SESSION["redirect"];}
    

    $Username = $_SESSION["Username"];

    if (session_status() == PHP_SESSION_NONE) { $UserIcon ="Icona_Utente";} else {
            
        $Username = $_SESSION["Username"];

        $queryIcona = "SELECT Icona FROM giocatore WHERE Username = '$Username'";

        $dati = $Connessione -> query($queryIcona) or die("ERRORE". $Connessione->error);

        foreach($dati as $DatiItem) {
            $UserIcon = $DatiItem["Icona"];}
        
    }

    $Username = $_SESSION["Username"];
    $loading = false;
    $random = rand(1,4);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carica Soldi - Minecraft</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<div class="header">
            <div class="logo">
                <a href="../../" class="logo-link">            
                    <img src="../../immagini/logo.png" alt="">
            </a>
            </div>
            
            <div class="Icona" >
                <a href="IlMioAccount.php"><img class="IconaImg" src="../../Immagini/PhpImg/<?php echo $UserIcon?>" alt=""></a>
            </div>
            
</div>
<div class="loginBox">
        <h1>LOGIN</h1>
        <form action="" method="post">
            <table class="LoginTable" >
                <tr>
                    <td> <label for="Password">Password </label></td>
                    <td><input type="password" required name="Password" id="Password" ></td>
                </tr>
                <tr>
                    <td> <label for="NumeroCarta">Numero Carta</label></td>
                    <td><input type="text" required name="NumeroCarta" id="NumeroCarta" placeholder="XXXX-XXXX-XXXX-XXXX"></td>
                </tr>
                <tr>
                    <td> <label for="Quantità">Carica sul sito $:</label></td>
                    <td><input type="number" required name="Quantita" id="Quantita" placeholder="45" min="5" max="100"></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="SubmitButtonIcone" type="submit"></td>
                </tr>
            </table>
        </form>
</div>
    <?php

    if(isset($_POST["Password"]) and isset($_POST["NumeroCarta"]) and isset($_POST["Quantita"])){
        $Password = $_POST["Password"];
        $NumeroCarta = $_POST["NumeroCarta"];
        $Quantita = $_POST["Quantita"];
        $checkQ = "SELECT Username FROM giocatore WHERE Username='$Username' AND password='$Password' ";
                
        $ris1 = $Connessione->query($checkQ) or die("ERRORE NELLA QUERY". $Connessione->error);
        if ($ris1->num_rows == 0){
            $_SESSION["risultatoTXT"] = "Password Errata";
            $loading = true;
            $_SESSION["redirect"]="";
            header("Refresh: $random;");
        }
        else{
            $numSoldiQ="SELECT Saldo FROM giocatore WHERE Username='$Username'";
            $ris = $Connessione->query($numSoldiQ);
            $soldiA=$ris->fetch_assoc();
            $soldi=$soldiA["Saldo"];
            $SoldiTot=$soldi+$Quantita;

            $caricaQuery="UPDATE giocatore SET
                        Saldo = $SoldiTot
                        WHERE Username='$Username'";

            $Connessione->query($caricaQuery);
            $_SESSION["risultatoTXT"] = "Saldo Aggiornato con Successo";
            $loading = true;
            header("Refresh: $random;");
            $_SESSION["redirect"]="IlMioAccount.php";

        }
    }


    require ("../../data/Footer.php");
    if ($risultato) {
        echo <<<EOD
        <div class="CopriTutto">
            <h1>$risultatoTXT</h1>
        </div>
        EOD;
        $_SESSION["Risultato"] = false;
        header("refresh:2,$redirect");}
    if ($loading) {
        echo <<<EOD
        <div class="CopriTutto">
            <div class="loaderGen1"></div>
            <div class="loaderGen2"></div>
        </div>
        EOD;
        $_SESSION["Risultato"] = true;}
    ?>

</body>
</html>