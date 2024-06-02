<?php 
    session_start();
    session_destroy();
    header("Refresh:3; ../");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGOUT-Minecraft</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="CopriTutto">
        <h1 class="LogOut1">LOGOUT IN CORSO</h1>
        <div class="loaderGen1"></div>
        <div class="loaderGen2"></div>
        <h1 class="LogOut2">A PRESTO!</h1>
    </div>
</body>
</html>