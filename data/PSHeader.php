<div class="headerPS header--nocta">
    <div class="logo">
        <a href="../../" class="logo-link">            
            <img src="../../immagini/logo.png" alt="">
        </a>
    </div>
    <ul class="menu" style="list-style-type: none;">
        <li><a href="../../Pagine/Minecraft_Guida.php"><img src="../../immagini/IronPickaxe.png"alt=""></a></li>
        <li><a href="../../Pagine/Minecraft_Wiki.php"><img src="../../immagini/Book.png"alt=""></a></li>
        <li><a href="../../Pagine/Minecraft_News.php"><img src="../../immagini/Anvil.webp"alt=""></a></li>
    </ul>

     <?php 
        if (session_status() == PHP_SESSION_NONE) { $UserIcon ="Icona_Utente";} else {
            
            $Username = $_SESSION["Username"];

            $queryIcona = "SELECT Icona FROM giocatore WHERE Username = '$Username'";

            $dati = $Connessione -> query($queryIcona) or die("ERRORE". $Connessione->error);

            foreach($dati as $DatiItem) {
                $UserIcon = $DatiItem["Icona"];}
            
        }


    ?>

    <div class="Icona" >
        <a href="../../Pagine/PaginePHP/IconaImmagine.php"> <img class="IconaImg" src="../../Immagini/PhpImg/<?php echo $UserIcon?>" alt=""></a>
    </div>

</div>