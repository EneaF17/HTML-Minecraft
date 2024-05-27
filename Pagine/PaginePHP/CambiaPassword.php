<?php
    session_start();
    require("../../data/connessioneDB.php");
    $_SESSION['previous'] = basename($_SERVER['PHP_SELF']);
    if (!isset($_SESSION["Username"])) { header("location: ../");}

    $Username = $_SESSION["Username"];
    
    
   $random = rand(1,4);


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
                    echo"<h2>PASSWORD VECCHIA SBAGLIATA</h2>";
                    $loading = true;
                    header("Refresh: $random;");
                }
                else {

                    if($_POST["PasswordNew"] != $_POST["PasswordConf"]) { 
                        echo"<h2>LE PASSWORD NON COINCIDONO</h2>";
                        $loading = true;
                        header("Refresh: $random;");
                    }
                    else{
    
                        $QueryReg2 = "UPDATE giocatore SET Password = '$Password' WHERE Username = '$Username'";
                        if ($Connessione -> query($QueryReg2) === true) {
                            $_SESSION["Username"] = $Username;
                            echo "<h2>REGISTRAZIONE COMPLETATA</h2>";
                            $loading = true;
                            header("Refresh: $random; IlMioAccount.php");}
                        else{ echo "<h2>ERRORE NELLA REGISTRAZIONE</h2>"; $loading = false;;
                        }
                    }

                }
            
            }
            else{
                echo"<h2>Compila i campi qua sopra...</h2>";
                $loading = false;
                
            }
            echo "</div>";
            require ("../../data/Footer.php");
            if ($loading) {
                echo <<<EOD
                <div class="CopriTutto">
                    <div class="loaderGen1"></div>
                    <div class="loaderGen2"></div>
                </div>
                EOD;}
        ?>
    </body>
</php>