<?php
session_start();
require("connessioneDB.php");

if (!isset($_GET["nome"])){header("direction: ../Pagine/PaginePHP/Preferiti.php");}

$Pag=$_GET["nome"];

$query1="SELECT IdPag FROM pagpref WHERE Pagina='$Pag'";
$ris=$Connessione->query($query1) or die("ERRORE". $Connessione->error);

foreach($ris as $dato)
    $Id=$dato["IdPag"];

$query2="DELETE FROM preferiti WHERE IdPag='$Id' AND Username='$Username'";
$ris=$Connessione->query($query2) or die("ERRORE". $Connessione->error);
header("location: ../Pagine/PaginePHP/Preferiti.php");