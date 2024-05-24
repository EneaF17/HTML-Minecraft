<?php 
$PagCompleta=$_SERVER["PHP_SELF"];
$NomePag=basename($_SERVER["PHP_SELF"]);

if(!isset($_SESSION["Username"])){
    $Pref=false;
}
else{
    $Username=$_SESSION["Username"];
    $query="SELECT Pagina FROM giocatore 
    JOIN preferiti ON giocatore.Username=preferiti.Username 
    JOIN pagpref ON preferiti.IdPag=pagpref.IdPag
    WHERE giocatore.Username='$Username' AND Pagina='$NomePag'";

    $dati = $Connessione -> query($query) or die("ERRORE". $Connessione->error);
    if ($dati->num_rows == 0){
        $Pref=false;
    }
    else{
        $Pref=true;
    }
}