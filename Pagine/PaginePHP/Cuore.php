<?php 
    session_start();
    require("../../data/connessioneDB.php");
    if (!isset($_SESSION["Username"])) { header("location: LoginPage.php");}
    if(!isset($_GET["preferita"]) or !isset($_GET["nomepag"])){header("location:../../");}

    $Username = $_SESSION["Username"];
    $pref=$_GET["preferita"];
    $nomepag=$_GET["nomepag"];
    $Pag=basename($nomepag);


    if ($pref==true){
        $query1="SELECT IdPag FROM pagpref WHERE Pagina='$Pag'";
        $ris=$Connessione->query($query1) or die("ERRORE". $Connessione->error);
        $Id=$ris->fetch_assoc();

        $query2="DELETE FROM preferiti WHERE IdPag='$Id' AND Username='$Username'";
        $ris=$Connessione->query($query2) or die("ERRORE". $Connessione->error);
    }
    else{
        $query1="SELECT IdPag FROM pagpref WHERE Pagina='$Pag'";
        $ris=$Connessione->query($query1) or die("ERRORE". $Connessione->error);
        $Id=$ris->fetch_assoc();

        $query2="INSERT INTO preferiti
        VALUES ('$Username', '$Id')";
        $ris=$Connessione->query($query2) or die("ERRORE". $Connessione->error);
    }


    header("location:$nomepag")
?>