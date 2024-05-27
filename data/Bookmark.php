<div class="Bookmark">
    <?php 
    if (!isset($_SESSION["Username"])) {$LinkBookmark ="PaginePHP/loginPage.php";}
    else{$LinkBookmark ="PaginePHP/Preferiti.php";}
    ?>
    <a href="../<?php echo $LinkBookmark ?>"><img src="../../Immagini/PhpImg/SPBookmark.png" alt=""></a>
</div>