<?php 
    session_start();
    require("../../data/connessioneDB.php");
    if (!isset($_SESSION["Username"])) { header("location: ../../");}

    $Username = $_SESSION["Username"];
?>

<!DOCTYPE php>
<php lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio Icona - Minecraft</title>
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
    <!-- <form class="box_icone" action="" method="post">
        <div class="box_icona">
            <div class="InputSide">
                <input type="radio" name="Icon" value="Icona_Creeper.png" class="Checkbox">
            </div>
            <div class="IconSide">
                <img class="IconaImgSel" src="../../Immagini/PhpImg/Icona_Creeper.png" alt="">
            </div>
        </div>
        <div class="box_icona">
            <div class="InputSide">
                <input type="radio" name="Icon" value="Icona_Pecora.png" class="Checkbox">
            </div>
            <div class="IconSide">
                <img class="IconaImgSel" src="../../Immagini/PhpImg/Icona_Pecora.png" alt="">
            </div>
        </div>
        <div class="box_icona">
            <div class="InputSide">
                <input type="radio" name="Icon" value="Icona_Steve.jpg" class="Checkbox">
            </div>
            <div class="IconSide">
                <img class="IconaImgSel" src="../../Immagini/PhpImg/Icona_Steve.jpg" alt="">
            </div>
        </div>
        <div class="box_icona">
            <div class="InputSide">
                <input type="radio" name="Icon" value="Icona_Villager.png" class="Checkbox">
            </div>
            <div class="IconSide">
                <img class="IconaImgSel" src="../../Immagini/PhpImg/Icona_Villager.png" alt="">
            </div>
        </div>
        <input type="submit">
    </form> -->
    <form class="box_icone" action="" method="post" >
        <div class="box_icona">
            <input type="radio" name="Icon" value="Icona_Creeper.png" id="rad1" class="HideInput">
            <label for="rad1">
                <img class="IconaImgSel" src="../../Immagini/PhpImg/Icona_Creeper.png" alt="">
            </label>
        </div>


        <input type="submit">
    </form>
<div style="" ></div>
    <?php 
        if (isset($_POST["Icon"])) {

            $LinkIcona = $_POST["Icon"];
            
            $UpdateIcon = "UPDATE giocatore SET Icona='$LinkIcona' WHERE Username = '$Username'";
        
            if($Connessione -> query("$UpdateIcon") === true) {
                echo"AGGIORNATO";
                header('location:../../SpazioPersonale/SP_Home.php');
            }
                else{ echo "<h2>ERRORE NELLA REGISTRAZIONE</h2>";}
            }
            else{ echo"NON FUNZIA"; }
            $dato = $_POST["Icon"];
            echo"$dato";

    ?>
    

</body>