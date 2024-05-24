<?php
session_start();
require ("../../data/connessioneDB.php");
if (!isset($_SESSION["Username"])) {
    header("location: ../../");
}

$Username = $_SESSION["Username"];
$query="SELECT Pagina, Tipo, Foto
    FROM giocatore JOIN preferiti ON giocatore.Username=preferiti.Username
        JOIN pagpref ON pagpref.IdPag=preferiti.IdPag
    WHERE giocatore.Username='$Username'";

$Pagine=$Connessione -> query($query) or die("ERRORE". $Connessione->error);

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
        <?php foreach($Pagine as $Pagina)
            $NomePag=$Pagina["Pagina"];
            $Tipo=$Pagina["Tipo"];
            $NomeFoto=$Pagina["Foto"];
            $link="../Pagine".$Tipo."/".$NomePag;
            echo <<<EOD
            <div class="pagPref">
                <a href=$link>No</a>
                </div>
            EOD;
        ?>
        
        
        <?php require("../../data/footer.php");?>
    </main>

</body>
</php>