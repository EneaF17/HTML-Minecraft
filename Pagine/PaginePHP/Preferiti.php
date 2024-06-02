<?php
session_start();
require ("../../data/connessioneDB.php");
if (!isset($_SESSION["Username"])) {
    header("location: ../../");
}

$Username = $_SESSION["Username"];
$query="SELECT Pagina, Tipo, Foto, Titolo
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
<?php require("../../data/PSHeader.php");?>
<body>
    


    <main class="marginMain">
    <?php require("../../data/sideNav.php")?>
        <h1 class="prefTitle">Le tue pagine preferite</h1>

        <?php 
        if($Pagine->num_rows==0)
        {
            echo "<h2 class='LinkPagPref'>Non hai pagine preferite</h2>";
        }
        else{
            foreach($Pagine as $Pagina){
                $NomePag=$Pagina["Pagina"];
                $Tipo=$Pagina["Tipo"];
                $NomeFoto=$Pagina["Foto"];
                $link="../Pagine".$Tipo."/".$NomePag;
                $Titolo=basename($NomePag, ".php");
                if (isset($Pagina["Titolo"])) {$Titolo = $Pagina["Titolo"];}
                $linkImg="../../Immagini/Immagini".$Tipo."/".$NomeFoto;
                echo <<<EOD
                <div class="divPreferito">
                    <a class="linkpagPref" href=$link>
                    <div class="pagPref">
                        <img class="imgPagPref" src="$linkImg" alt="">
                        <h2 class="LinkPreftxt">$Titolo</h2>
                    </div>
                    </a>
                    <a href="../../data/CancellaPrefScript.php?nome=$NomePag" class="linkCestino">
                        <img class="ImgCestino" src="../../Immagini/PhpImg/SPCestino.png" alt="">
                    </a>
                </div>
                EOD;}
        }
        ?>
        
        

    </main>
    <?php require ("../../data/Footer.php")?>

</body>
</php>