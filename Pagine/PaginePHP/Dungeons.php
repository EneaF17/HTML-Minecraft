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
    <title>Dungeons - Negozio</title>
    <link rel="stylesheet" href="../../style.css">

</head>
<body>
    <?php 
        require("../../data/Header.php");
    ?>
    

    <?php 
        require ("../../data/Footer.php")
    ?>
</body>
</ph>