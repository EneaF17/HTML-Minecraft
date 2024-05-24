<div class="cuore">
    <?php
        if($Pref==false) {echo <<<EOD
            <a href="../PaginePHP/Cuore.php?preferita=$Pref&nomepag=$PagCompleta"><img src="../../Immagini/PhpImg/SPCuore.png" alt=""></a>
            EOD;
        }
        else{echo <<<EOD
            <a href="../PaginePHP/Cuore.php?preferita=$Pref&nomepag=$PagCompleta"><img src="../../Immagini/PhpImg/SPCuoreRosso.png" alt=""></a>
            EOD;
        }
    ?>
    
</div>