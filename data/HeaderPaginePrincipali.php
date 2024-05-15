<div class="header header--nocta">
    <div class="logo">
        <a href="../index.php" class="logo-link">            
            <img src="../immagini/logo.png" alt="">
        </a>
    </div>
    <ul class="menu" style="list-style-type: none;">
        <li><a href="Minecraft_Guida.php"><img src="../immagini/IronPickaxe.png"alt=""></a></li>
        <li><a href="Minecraft_Wiki.php"><img src="../immagini/Book.png"alt=""></a></li>
        <li><a href="Minecraft_News.php"><img src="../immagini/Anvil.webp"alt=""></a></li>
    </ul>

    <?php 
        if ((session_status() == PHP_SESSION_NONE) or(!isset($_SESSION["Username"]))) {
            $UserIcon ="Icona_Utente.png";
            $Link = "Pagine/LoginPage.php";
        } else {
            
            $Username = $_SESSION["Username"];
            $Link = "SpazioPersonale/SP_Home.php";

            $queryIcona = "SELECT Icona FROM giocatore WHERE Username = '$Username'";

            $dati = $Connessione -> query($queryIcona) or die("ERRORE". $Connessione->error);

            foreach($dati as $DatiItem) {
                $UserIcon = $DatiItem["Icona"];}
        }


    ?>

    <div class="Icona" >
        <a href="../<?php echo $Link?>"> <img class="IconaImg" src="../Immagini/PhpImg/<?php echo $UserIcon?>" alt=""></a>
    </div>
</div>

