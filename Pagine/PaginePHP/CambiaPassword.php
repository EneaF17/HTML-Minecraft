<?php
    session_start();
    require("../../data/connessioneDB.php");
    $_SESSION['previous'] = basename($_SERVER['PHP_SELF']);
    if (!isset($_SESSION["Username"])) { header("location: ../");}

    $Username = $_SESSION["Username"];

    if (!isset($_SESSION["Risultato"])) {$risultato=false;} else {$risultato = $_SESSION["Risultato"];}
    if (!isset($_SESSION["risultatoTXT"])) {$risultatoTXT="ERRORE CRITICO";} else {$risultatoTXT = $_SESSION["risultatoTXT"];}
    if (!isset($_SESSION["redirect"])) {$redirect="";} else {$redirect = $_SESSION["redirect"];}
    
    
   $random = rand(1,4);

   if (session_status() == PHP_SESSION_NONE) { $UserIcon ="Icona_Utente";} else {
            
    $Username = $_SESSION["Username"];

    $queryIcona = "SELECT Icona FROM giocatore WHERE Username = '$Username'";

    $dati = $Connessione -> query($queryIcona) or die("ERRORE". $Connessione->error);

    foreach($dati as $DatiItem) {
        $UserIcon = $DatiItem["Icona"];}
    
}


?>



<!DOCTYPE php>
<php lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione - Minecraft</title>
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
            <h1>Registrazione</h1>
            <form action="" method="post">
                <table class="LoginTable" >
                    <tr>
                        <td> <label for="Password">Vecchia Password</label> </td>
                        <td><input type="password" required id="Password" name="Password" ></td>
                    </tr>
                    <tr>
                        <td> <label for="PasswordNew">Nuova Password</label> </td>
                        <td><input type="password" required id="PasswordNew" name="PasswordNew" ></td>
                    </tr>
                    <tr>
                        <td> <label for="PasswordConf">Conferma Password</label> </td>
                        <td><input type="password" required id="PasswordConf" name="PasswordConf" ></td>
                    </tr>
                    <tr>
                    <td colspan="2"><input class="SubmitButtonIcone" type="submit"></td>
                </tr>
                </table>
            </form>
        <?php 
            if (isset($_POST["Password"]) and isset($_POST["PasswordNew"]) and isset($_POST["PasswordConf"])) {
                $_SESSION["PostReg"] = $_POST;

                $Password = $_POST["PasswordNew"];
                $VecchiaPsw = $_POST["Password"];
                $VecchiaPswQuery = "SELECT password FROM giocatore WHERE username = '$Username'";

                $ris = $Connessione->query($VecchiaPswQuery);

                foreach ($ris as $dato){
                    $passwordOld = $dato["password"];
                }

                if ($passwordOld != $VecchiaPsw){
                    $_SESSION["risultatoTXT"] = "PASSWORD VECCHIA SBAGLIATA";
                    $_SESSION["redirect"] = "";
                    $loading = true;
                    header("Refresh: $random;");
                }
                else {

                    if($_POST["PasswordNew"] != $_POST["PasswordConf"]) {
                        $_SESSION["risultatoTXT"] = "LE PASSWORD NON COINCIDONO";
                        $_SESSION["redirect"] = "";
                        $loading = true;
                        header("Refresh: $random;");
                    }
                    else{
    
                        $QueryReg2 = "UPDATE giocatore SET Password = '$Password' WHERE Username = '$Username'";
                        if ($Connessione -> query($QueryReg2) === true) {
                            $_SESSION["Username"] = $Username;
                            $_SESSION["risultatoTXT"] = "password modificata con successo";
                            $_SESSION["redirect"] = "IlMioAccount.php";
                            $loading = true;
                            header("Refresh: $random;");
                        }
                        else{ 
                            $_SESSION["risultatoTXT"] = "ERRORE NELLA REGISTRAZIONE";
                            $_SESSION["redirect"] = "";
                            $loading = true;
                            header("Refresh: $random;");
                        }
                    }

                }
            
            }
            else{
                $loading = false;
            }
            echo "</div>";
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
</php>