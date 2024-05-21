<?php
    session_start();
    require("../../data/connessioneDB.php");
    if (!isset($_SESSION["Username"])) { header("location: ../");}

    $Username = $_SESSION["Username"];
    if (isset($_POST["Pulsante"])) {
        if ($_POST["Pulsante"] == "Modifica") {
        }
    }
    $Disable = "Disabled";
    
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
    <?php require("../../data/PSHeader.php")?>

    <main class="marginMain">

    <?php require("../../data/sideNav.php")?>
    
    <div class="ContentBoxAccount">
        <div class="DatiAccountBox">
            <h2>DATI ACCOUNT</h2>
            <form action="../../data/disabilita.php" method="post">
            <table class="LoginTable" >
                    <tr>
                        <td><label for="Username">Username</label></td>
                        <td><input type="text" disabled name="Username" id="Username" value="<?php echo $Username?>"></td>
                    </tr>
                    <tr>
                        <td> <label for="Password">Password</label> </td>
                        <td><input type="password" <?php echo $Disable?> id="Password" name="Password" ></td>
                    </tr>
                    <tr>
                        <td><label for="DataN">Data di nascita</label></td>
                        <td><input type="date" <?php echo $Disable?> id="DataN" name="DataN" value="<?php echo $DataN?>"></td>
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
                    <tr>
                    <td colspan="2"><input name="Pulsante" class="UpdateDataButton" type="submit" value="MODIFICA I DATI"></td>
                </tr>
                </table>
            </form>
        </div>
    </div>
<?php require ("../../data/Footer.php")?>
    
</body>
</php>