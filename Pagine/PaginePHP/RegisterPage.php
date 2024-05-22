<?php 
    if (isset($_POST["Username"])) {$Username = $_POST ["Username"];} else {$Username = "";}
    if (isset($_POST["Password"])) {$Password = $_POST ["Password"];} else {$Password = "";}
    if (isset($_POST["PasswordConf"])) {$PasswordConf = $_POST ["PasswordConf"];} else {$PasswordConf = "";}
    if (isset($_POST["DataN"])) {$DataN = $_POST ["DataN"];} else {$DataN = "";}
    if (isset($_POST["Nome"])) {$Nome = $_POST ["Nome"];} else {$Nome = "";}
    if (isset($_POST["Cognome"])) {$Cognome = $_POST ["Cognome"];} else {$Cognome = "";}
    if (isset($_POST["Email"])) {$Email = $_POST ["Email"];} else {$Email = "";}
    if (isset($_POST["Telefono"])) {$Telefono = $_POST ["Telefono"];} else {$Telefono = "";}
    $random = rand(1,6);
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
                if($_POST["Password"] != $_POST["PasswordConf"]) { echo"<h2>LE PASSWORD NON COINCIDONO</h2>";}
                else{
                    require("../../data/connessioneDB.php");

                    $QueryReg = "SELECT username FROM giocatore WHERE username = '$Username'";

                    $ris = $Connessione -> query($QueryReg) or die("ERRORE NELLA QUERY". $Connessione->error);

                    if ($ris -> num_rows > 0) {
                        echo"<h2>USERNAME GIA' IN USO</h2>";
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
                            echo "<h2>DEVI AVERE ALMENO 14 ANNI PER REGISTRARTI</h2>";
                            $loading = true;
                            header("Refresh: $random;");
                        }
                        else{

                            $QueryReg2 = "INSERT INTO giocatore (Username,Password,Nome,Cognome,Compleanno,Email,Telefono)
                                        VALUES ('$Username','$Password','$Nome','$Cognome','$DataN','$Email','$Telefono')";
                            if ($Connessione -> query($QueryReg2) === true) {
                                session_start();
                                $_SESSION["Username"] = $Username;
                                echo "<h2>REGISTRAZIONE COMPLETATA</h2>";
                                $loading = true;
                                header("Refresh: $random; IconaImmagine.php");}
                            else{ echo "<h2>ERRORE NELLA REGISTRAZIONE</h2>"; $loading = false;;
                            }
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