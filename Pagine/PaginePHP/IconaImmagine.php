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

        <h1 class="marginVh" >Scegli la tua icona!</h1>
    <form class="box_icone" action="" method="post" >
        <div class="box_icona">
            <input type="radio" name="Icon" value="Icona_Creeper.png" id="Icona1" class="HideInput">
            <label class="labelIcon" for="Icona1">
                <img class="IconaImgSel" src="../../Immagini/PhpImg/Icona_Creeper.png" alt="">
            </label>
        </div>
        <div class="box_icona">
            <input type="radio" name="Icon" value="Icona_Pecora.png" id="Icona2" class="HideInput">
            <label class="labelIcon" for="Icona2">
                <img class="IconaImgSel" src="../../Immagini/PhpImg/Icona_Pecora.png" alt="">
            </label>
        </div>
        <div class="box_icona">
            <input type="radio" name="Icon" value="Icona_Steve.jpg" id="Icona3" class="HideInput">
            <label class="labelIcon" for="Icona3">
                <img class="IconaImgSel" src="../../Immagini/PhpImg/Icona_Steve.jpg" alt="">
            </label>
        </div>
        <div class="box_icona">
            <input type="radio" name="Icon" value="Icona_Villager.png" id="Icona4" class="HideInput">
            <label class="labelIcon" for="Icona4">
                <img class="IconaImgSel" src="../../Immagini/PhpImg/Icona_Villager.png" alt="">
            </label>
        </div>
        <div class="box_icona">
            <input type="radio" name="Icon" value="Icona_Alex.jpg" id="Icona5" class="HideInput">
            <label class="labelIcon" for="Icona5">
                <img class="IconaImgSel" src="../../Immagini/PhpImg/Icona_Alex.jpg" alt="">
            </label>
        </div>
        <div class="box_icona">
            <input type="radio" name="Icon" value="Icona_Enderman.jpg" id="Icona6" class="HideInput">
            <label class="labelIcon" for="Icona6">
                <img class="IconaImgSel" src="../../Immagini/PhpImg/Icona_Enderman.jpg" alt="">
            </label>
        </div>
        <div class="box_icona">
            <input type="radio" name="Icon" value="Icona_Maiale.jpg" id="Icona7" class="HideInput">
            <label class="labelIcon" for="Icona7">
                <img class="IconaImgSel" src="../../Immagini/PhpImg/Icona_Maiale.jpg" alt="">
            </label>
        </div>
        <div class="box_icona">
            <input type="radio" name="Icon" value="Icona_Zombie.jpg" id="Icona8" class="HideInput">
            <label class="labelIcon" for="Icona8">
                <img class="IconaImgSel" src="../../Immagini/PhpImg/Icona_Zombie.jpg" alt="">
            </label>
        </div>
        <input class="SubmitButtonIcone" type="submit">
    </form>
<div ></div>
    <?php 
        if (isset($_POST["Icon"])) {

            $LinkIcona = $_POST["Icon"];
            
            $UpdateIcon = "UPDATE giocatore SET Icona='$LinkIcona' WHERE Username = '$Username'";
        
            if($Connessione -> query("$UpdateIcon") === true) {
                echo"AGGIORNATO";
                header('location:SP_Home.php');
            }
                else{ echo "<h2>ERRORE NELL' AGGIORNAMENTO ICONA'</h2>";}
            }

    ?>
    

</body>