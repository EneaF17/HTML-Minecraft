<?php
session_start();
require ("../../data/connessioneDB.php");
if (!isset($_SESSION["Username"])) {
    header("location: ../../");
}

$Username = $_SESSION["Username"];
?>
<!DOCTYPE php>
<php lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP - HOME</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php require("../../data/PSHeader.php");?>

    <main class="marginMain">
    
        <?php require("../../data/footer.php");?>
    </main>
</body>
</php>