<?php
    session_start();
    require("../../data/connessioneDB.php");
    if (!isset($_SESSION["Username"])) { header("location: ../");}

    $Username = $_SESSION["Username"];
?>


<!DOCTYPE php>
<php lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP - HOME</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php require("../../data/PSHeader.php");?>

    <main class="marginMain">
        <?php 

            $DatiQuery = "SELECT Nome,Cognome,Saldo FROM giocatore WHERE Username = '$Username'";

            $Dati = $Connessione -> query($DatiQuery) or die("ERRORE QUERY". $Connessione->error);

            foreach($Dati as $DatiItem) {
                $Nome = $DatiItem["Nome"];
                $Cognome = $DatiItem["Cognome"];
                $Saldo = $DatiItem["Saldo"];
                }

            echo"<h1>Bentornato $Nome $Cognome</h1> ";
            echo"<h2> Il tuo Saldo attuale é di $Saldo $ </h2>";
        ?>    

        <a href="../../data/LogOut.php" class="intro-text">
            <div class="pulsanteLogOut">
                <h2>LOGOUT</h2>
            </div>
        </a>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quos nostrum omnis assumenda consequuntur, ex odit ipsum debitis laudantium corporis illo velit magni optio deserunt quae ad dignissimos aliquid nemo.</p>
    </main>
    

    <?php 
        require ("../../data/Footer.php")
    ?>
    

</body>
</php>