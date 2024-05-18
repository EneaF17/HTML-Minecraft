<?php 
        if (!isset($_SESSION["Username"])) {
            $UserIcon ="Icona_Utente.png";
            $Link = "Pagine/PaginePHP/LoginPage.php";
            
            } else {
            

            $Username = $_SESSION["Username"];
            $Link = "Pagine/PaginePHP/SP_Home.php";

            $queryIcona = "SELECT Icona FROM giocatore WHERE Username = '$Username'";

            $dati = $Connessione -> query($queryIcona) or die("ERRORE". $Connessione->error);

            foreach($dati as $DatiItem) {
                $UserIcon = $DatiItem["Icona"];}
        }
            $path = $_SERVER["PHP_SELF"] ;
            $pagina = dirname($path);

        if ($pagina == "/HTML-Minecraft/Pagine") {
            $LinkRelPag = "";
            $LinkRelImg = "../";
        } elseif ($pagina == "/HTML-Minecraft/Pagine/PagineGuide" or $pagina == "/HTML-Minecraft/Pagine/PagineNews" or $pagina == "/HTML-Minecraft/Pagine/PaginePHP" or $pagina == "/HTML-Minecraft/Pagine/PagineWiki") {
            $LinkRelPag = "../";
            $LinkRelImg = "../../";
        } else{
            $LinkRelPag = "Pagine/";
            $LinkRelImg = "";
        }
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

    <div class="Icona" >
        <a href="<?php echo $LinkRelImg?><?php echo $Link?>"> <img class="IconaImg" src="<?php echo $LinkRelImg?>Immagini/PhpImg/<?php echo $UserIcon?>" alt=""></a>
    </div>
</div>

