<?php
        if (!isset($_SESSION["Username"])) {
            $UserIcon ="Icona_Utente.png";
            $Link = "Pagine/PaginePHP/LoginPage.php";
            
            } else {
            

            $Username = $_SESSION["Username"];
            $Link = "Pagine/PaginePHP/SP_Home.php";

            $queryIcona = "SELECT Icona FROM giocatore WHERE Username = '$Username'";

            $dati = $Connessione -> query($queryIcona) or die("ERRORE". $Connessione->error);

            $DatiItem=$dati->fetch_assoc();
            $UserIcon=$DatiItem["Icona"];

        }

            $LinkRelPag = "Pagine/";
            $LinkRelImg = "";
    ?>
    
<div class="header header--nocta">
    <div class="logo">
        <a href="<?php echo $LinkRelImg?>index.php" class="logo-link">            
            <img src="<?php echo $LinkRelImg?>immagini/logo.png" alt="">
        </a>
    </div>
    <ul class="menu" style="list-style-type: none;">
        <li><a href="<?php echo $LinkRelPag?>Minecraft_Guida.php"><img src="<?php echo $LinkRelImg?>immagini/IronPickaxe.png"alt=""></a></li>
        <li><a href="<?php echo $LinkRelPag?>Minecraft_Wiki.php"><img src="<?php echo $LinkRelImg?>immagini/Book.png"alt=""></a></li>
        <li><a href="<?php echo $LinkRelPag?>Minecraft_News.php"><img src="<?php echo $LinkRelImg?>immagini/Anvil.webp"alt=""></a></li>
    </ul>

    <div class="Cerca">
        <a href="<?php echo $LinkRelImg?>Pagine/PaginePHP/Cerca.php"><img class="CercaImg" src="<?php echo $LinkRelImg?>Immagini/PhpImg/SPLente.png"> </a>
    </div>

    <div class="Icona" >
        <a href="<?php echo $LinkRelImg?><?php echo $Link?>"> <img class="IconaImg" src="<?php echo $LinkRelImg?>Immagini/PhpImg/<?php echo $UserIcon?>" alt=""></a>
    </div>
</div>

