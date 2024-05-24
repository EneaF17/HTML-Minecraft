<div class="sidenavSP">
        <div class="IconaSP" >
            <a href="../../Pagine/PaginePHP/SP_Home.php"> <img class="IconaImg" src="../../Immagini/PhpImg/<?php echo $UserIcon?>" alt=""></a>
        </div>
        <?php 
        
        if (!isset($Nome)){
            $trovaNome = "SELECT Nome FROM giocatore WHERE Username='$Username'";
            $ris = $Connessione->query($trovaNome);
            foreach ($ris as $Dato)
                $Nome = $Dato["Nome"];
        }
        if (!isset($Cogome)){
            $trovaCognome = "SELECT Cognome FROM giocatore WHERE Username='$Username'";
            $ris = $Connessione->query($trovaCognome);
            foreach ($ris as $Dato)
                $Cognome = $Dato["Cognome"];
        }
        
        echo "<h1>$Nome $Cognome</h1> ";
        ?>
        <a href="">
            <div class="sideNavSPBox">
                <img src="../../Immagini/PhpImg/SPChest.png" class="iconaSPNav" alt="">
                <h3>I miei giochi</h3>
            </div>
        </a>
        <a href="IlMioAccount.php">
            <div class="sideNavSPBox">
                <img src="../../Immagini/PhpImg/SPAllay.png" class="iconaSPNav" alt="">
                <h3>Il mio Account</h3>
            </div>
        </a>
        <a href="Preferiti.php">
            <div class="sideNavSPBox">
                <img src="../../Immagini/PhpImg/SPCuore.png" class="iconaSPNav" alt="">
                <h3>Preferiti</h3>
            </div>
        </a>
        <a href="../../data/LogOut.php">
            <div class="sideNavSPBox">
                <img src="../../Immagini/PhpImg/SPLock.png" class="iconaSPNav" alt="">
                <h3>LogOut</h3>
            </div>
        </a>
    </div> 