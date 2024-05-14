<?php 
    $db_servername = "localhost";
	$db_name = "minecraftsito";
	$db_username = "root";
	$db_password = "";

    $Connessione = new mysqli($db_servername, $db_username, $db_password, $db_name);
    if ($Connessione->connect_error) {
        die("ERRORE DI CONNESSIONE CON IL DATABASE". $connessione->connect_error);
    }
    if (!isset($_SESSION["Username"])) { $username = "";} else {

    $Username = $_SESSION["Username"]; }
?>