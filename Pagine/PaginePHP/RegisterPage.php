<?php
    session_start();
    require("../../data/connessioneDB.php");
    $_SESSION['previous'] = basename($_SERVER['PHP_SELF']);
    
    
    if (isset($_SESSION["UsernameReg"])) {$Username = $_SESSION["UsernameReg"];} else {$Username = "";}
    if (isset($_SESSION["PasswordReg"])) {$Password = $_SESSION["PasswordReg"];} else {$Password = "";}
    if (isset($_SESSION["PasswordConfReg"])) {$PasswordConf = $_SESSION["PasswordConfReg"];} else {$PasswordConf = "";}
    if (isset($_SESSION["DataNReg"])) {$DataN = $_SESSION["DataNReg"];} else {$DataN = "";}
    if (isset($_SESSION["NomeReg"])) {$Nome = $_SESSION["NomeReg"];} else {$Nome = "";}
    if (isset($_SESSION["CognomeReg"])) {$Cognome = $_SESSION["CognomeReg"];} else {$Cognome = "";}
    if (isset($_SESSION["EmailReg"])) {$Email = $_SESSION["EmailReg"];} else {$Email = "";}
    if (isset($_SESSION["TelefonoReg"])) {$Telefono = $_SESSION["TelefonoReg"];} else {$Telefono = "";}
    $random = rand(1,4);
    
    if (isset($_SESSION["PostReg"])) {$dati = $_SESSION["PostReg"];} else {$dati = "";}

    if (!isset($_SESSION["Risultato"])) {$risultato=false;} else {$risultato = $_SESSION["Risultato"];}
    if (!isset($_SESSION["risultatoTXT"])) {$risultatoTXT="ERRORE CRITICO";} else {$risultatoTXT = $_SESSION["risultatoTXT"];}
    if (!isset($_SESSION["redirect"])) {$redirect="";} else {$redirect = $_SESSION["redirect"];}
    
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
        </div>

    <div class="loginBox">
            <h1>Registrazione</h1>
            <form action="" method="post">
                <table class="LoginTable" >
                    <tr>
                        <td><label for="Username">Username</label></td>
                        <td><input type="text" required name="Username" id="Username" value="<?php echo $Username?>"></td>
                    </tr>
                    <tr>
                        <td> <label for="Password">Password</label> </td>
                        <td><input type="password" required id="Password" name="Password" ></td>
                    </tr>
                    <tr>
                        <td> <label for="PasswordConf">Conferma Password</label> </td>
                        <td><input type="password" required id="PasswordConf" name="PasswordConf" ></td>
                    </tr>
                    <tr>
                        <td><label for="DataN">Data di nascita</label></td>
                        <td><input type="date" required id="DataN" name="DataN" value="<?php echo $DataN?>"></td>
                    </tr>
                    <tr>
                        <td><label for="Nome">Nome</label></td>
                        <td><input type="text" required id="Nome" name="Nome" value="<?php echo $Nome?>"></td>
                    </tr>
                    <tr>
                        <td><label for="Cognome">Cognome</label></td>
                        <td><input type="text" required id="Cognome" name="Cognome" value="<?php echo $Cognome?>"></td>
                    </tr>
                    <tr>
                        <td><label for="Email">Email</label></td>
                        <td><input type="email" id="Email" name="Email" value="<?php echo $Email?>"></td>
                    </tr>
                    <tr>
                        <td><label for="Telefono">Telefono</label></td>
                        <td><input type="text" id="Telefono" name="Telefono" value="<?php echo $Telefono?>"></td>
                    </tr>
                    <tr>
                    <td colspan="2"><input class="SubmitButtonIcone" type="submit"></td>
                </tr>
                </table>
            </form>
        <?php 
            if (isset($_POST["Username"]) and isset($_POST["Password"]) and isset($_POST["PasswordConf"])) {
                $_SESSION["PostReg"] = $_POST;

                if (isset($_POST["Username"])) {$_SESSION["UsernameReg"] = $_POST ["Username"];} else {$_SESSION["UsernameReg"] = "";}
                if (isset($_POST["Password"])) {$_SESSION["PasswordReg"] = $_POST ["Password"];} else {$_SESSION["PasswordReg"] = "";}
                if (isset($_POST["PasswordConf"])) {$_SESSION["PasswordConfReg"] = $_POST ["PasswordConf"];} else {$_SESSION["PasswordConfReg"] = "";}
                if (isset($_POST["DataN"])) {$_SESSION["DataNReg"] = $_POST ["DataN"];} else {$_SESSION["DataNReg"] = "";}
                if (isset($_POST["Nome"])) {$_SESSION["NomeReg"] = $_POST ["Nome"];} else {$_SESSION["Nome"] = "";}
                if (isset($_POST["Cognome"])) {$_SESSION["CognomeReg"] = $_POST ["Cognome"];} else {$_SESSION["CognomeReg"] = "";}
                if (isset($_POST["Email"])) {$_SESSION["EmailReg"] = $_POST ["Email"];} else {$_SESSION["EmailReg"] = "";}
                if (isset($_POST["Telefono"])) {$_SESSION["TelefonoReg"] = $_POST ["Telefono"];} else {$_SESSION["TelefonoReg"] = "";}
                if($_POST["Password"] != $_POST["PasswordConf"]) { 
                    $_SESSION["risultatoTXT"] = "LE PASSWORD NON COINCIDONO";
                    $loading = true;
                    header("Refresh: $random;");
                }
                else{

                    $QueryReg = "SELECT username FROM giocatore WHERE username = '$Username'";

                    $ris = $Connessione -> query($QueryReg) or die("ERRORE NELLA QUERY". $Connessione->error);

                    if ($ris -> num_rows > 0) {
                        $_SESSION["risultatoTXT"] = "USERNAME GIA' IN USO";
                        $loading = true;
                        header("Refresh: $random;");
                    }
                    else {

                        $DataIns = new DateTime($DataN);
                        $DataR   = new DateTime('today');
                        $anno = $DataIns->diff($DataR)->y;
                        $mese = $DataIns->diff($DataR)->m;
                        $giorno = $DataIns->diff($DataR)->d;
                        if ($anno<14){
                            $_SESSION["risultatoTXT"] = "DEVI AVERE ALMENO 14 ANNI PER REGISTRARTI";
                            $loading = true;
                            header("Refresh: $random;");
                        }
                        else{

                            $QueryReg2 = "INSERT INTO giocatore (Username,Password,Nome,Cognome,Compleanno,Email,Telefono)
                                        VALUES ('$Username','$Password','$Nome','$Cognome','$DataN','$Email','$Telefono')";
                            if ($Connessione -> query($QueryReg2) === true) {
                                $_SESSION["Username"] = $Username;
                                $_SESSION["risultatoTXT"] = "REGISTRAZIONE COMPLETATA";
                                $loading = true;
                                $_SESSION["redirect"] ="IconaImmagine.php";
                                header("Refresh: $random;");}
                            else{ 
                                $_SESSION["risultatoTXT"] = "ERRORE NELLA REGISTRAZIONE";
                                $loading = false;;
                            }
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
    </body>
</php>