<?php 
session_start();
require("../../data/connessioneDB.php");

?>




<!DOCTYPE php>
<php lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerca - Minecraft</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    
    <?php require("../../data/Header.php");?>
    <div class="CercaBox">
        <form action="" method="post">
                <table class="CercaTable" >
                    <tr>
                        <td> <label for="Ricerca">Ricerca pagine nel sito:</label></td>
                        <td><input type="text" name="Ricerca" id="Ricerca"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="SubmitButtonIcone" type="submit" value="CERCA"></td>
                    </tr>
                </table>
            </form>
    </div>

<?php 
    if (isset($_POST["Ricerca"])) {
        $Ricerca = $_POST["Ricerca"];
        $CercaQuery = "SELECT Pagina, Tipo, Foto FROM pagpref WHERE Pagina LIKE '%$Ricerca%'";

        $CercaRis = $Connessione->query($CercaQuery) or die("E' SUCCESSO UN CASINO");

        if ($CercaRis->num_rows == 0) {
            echo"<h1> NESSUNA PAGINA TROVATA</h1>";
        } else {
            foreach($CercaRis as $Pagina){
                $NomePag=$Pagina["Pagina"];
                $Tipo=$Pagina["Tipo"];
                $NomeFoto=$Pagina["Foto"];
                $link="../Pagine".$Tipo."/".$NomePag;
                $Titolo=basename($NomePag, ".php");
                $linkImg="../../Immagini/Immagini".$Tipo."/".$NomeFoto;
                echo <<<EOD
                <div class="divPreferito">
                    <a class="linkpagCerca" href=$link>
                    <div class="pagPref">
                        <img class="imgPagPref" src="$linkImg" alt="">
                        <h2 class="LinkPreftxt">$Titolo</h2>
                    </div>
                    </a>
                </div>
                EOD;
            }
        }
    }
    require ("../../data/Footer.php")
?>

</body>
</php>