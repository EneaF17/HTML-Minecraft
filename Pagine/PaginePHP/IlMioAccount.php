<?php
    session_start();
    require("../../data/connessioneDB.php");
    if (!isset($_SESSION["Username"])) { header("location: ../");}
    if (!isset($_SESSION["Risultato"])) {$risultato=false;} else {$risultato = $_SESSION["Risultato"];}

    $Username = $_SESSION["Username"];
    $loading = false;
    $random = rand(1,4);
    $risultatoTXT = "Dati Aggiornati con successo!";
    
    $DatiQuery = "SELECT Password,Nome,Cognome,Compleanno,Email,Telefono 
                FROM giocatore WHERE Username = '$Username'";

    $Dati = $Connessione -> query($DatiQuery) or die("ERRORE QUERY". $Connessione->error);

    foreach($Dati as $DatiItem) {
        $Password = $DatiItem["Password"];
        $Nome = $DatiItem["Nome"];
        $Cognome = $DatiItem["Cognome"];
        $Compleanno = $DatiItem["Compleanno"];
        $Email = $DatiItem["Email"];
        $Telefono = $DatiItem["Telefono"];
        }
        if (isset($_POST["Pulsante"])) {
            if ($_POST["Pulsante"] == "Modifica") {
                $Disable = "";
                $TestoPuls = "Salva";
                $loading = false;
            }
            else{
                $Disable = "Disabled";
                $TestoPuls = "Modifica";
                    $NomeNew = $_POST["Nome"];
                    $CognomeNew = $_POST["Cognome"];
                    $CompleannoNew = $_POST["DataN"];
                    $EmailNew = $_POST["Email"];
                    $TelefonoNew = $_POST["Telefono"];


                    $UpdateQuery = "UPDATE giocatore SET
                                    Nome = '$NomeNew',
                                    Cognome = '$CognomeNew',
                                    Compleanno = '$CompleannoNew',
                                    Email = '$EmailNew',
                                    Telefono = '$TelefonoNew'
                                    WHERE Username = '$Username'";

                    $Connessione -> query($UpdateQuery) or die("ERRORE QUERY". $Connessione->error);
                    header("Refresh: $random;");
                    $loading = true;
            }
        }
        else{
            $Disable = "Disabled";
            $TestoPuls = "Modifica";
            $loading = false;
        }

?>


<!DOCTYPE php>
<php lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il Mio Account - Minecraft</title>
    <link rel="stylesheet" href="../../style.css">

</head>
<body>
    <?php require("../../data/PSHeader.php");
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
<main class="marginMain marginMainSP">

    <?php require("../../data/sideNav.php")?>
    
    <div class="ContentBoxAccount">
        <div class="DatiAccountBox">
            <h2>DATI ACCOUNT</h2>
            <form action="" method="post">
            <table class="LoginTable" >
                    <tr>
                        <td><label for="Username">Username</label></td>
                        <td><input type="text" disabled name="Username" id="Username" value="<?php echo $Username?>"></td>
                    </tr>
                    <tr>
                        <td> <label for="Password">Password</label> </td>
                        <td><input type="password" Disabled id="Password" name="Password" value="<?php echo $Password?>"></td>
                    </tr>
                    <tr>
                        <td><label for="DataN">Data di nascita</label></td>
                        <td><input type="date" <?php echo $Disable?> id="DataN" name="DataN" value="<?php echo $Compleanno?>"></td>
                    </tr>
                    <tr>
                        <td><label for="Nome">Nome</label></td>
                        <td><input type="text" <?php echo $Disable?> id="Nome" name="Nome" value="<?php echo $Nome?>"></td>
                    </tr>
                    <tr>
                        <td><label for="Cognome">Cognome</label></td>
                        <td><input type="text" <?php echo $Disable?> id="Cognome" name="Cognome" value="<?php echo $Cognome?>"></td>
                    </tr>
                    <tr>
                        <td><label for="Email">Email</label></td>
                        <td><input type="email"<?php echo $Disable?>  id="Email" name="Email" value="<?php echo $Email?>"></td>
                    </tr>
                    <tr>
                        <td><label for="Telefono">Telefono</label></td>
                        <td><input type="text" <?php echo $Disable?> id="Telefono" name="Telefono" value="<?php echo $Telefono?>"></td>
                    </tr>
                    </table>
                <input name="Pulsante" class="UpdateDataButton" type="submit" value="<?php echo $TestoPuls?>">
            </form>
            
            <a href="../../Pagine/PaginePHP/CambiaPassword.php">
                <div class="PulsanteIconaCambio">
                    <p>Cambia Password</p>
                </div>
            </a>
            <a href="../../Pagine/PaginePHP/IconaImmagine.php">
                <div class="PulsanteIconaCambio">
                    <p>Cambia Icona</p>
                </div>
            </a>
        </div>
    </div>


</main>
<?php require ("../../data/Footer.php")?>
    
</body>
</php>