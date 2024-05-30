<?php 
    session_start();
    require ("../../data/connessioneDB.php");
    require ("../../data/CuoreScript.php");

    if (!isset($_GET["IdPag"])) {$_GET["IdPag"]="1";}

    $IdPag=$_GET["IdPag"];

    $QueryInfo = "SELECT * FROM snapshotnews WHERE IdSnapshot = '$IdPag'";

    $Info = $Connessione->query($QueryInfo);

    if ($Info->num_rows == 0){
        header("../");
    } else{
        foreach($Info as $Dati){
            $titolo=$Dati["IdSnapshot"];
            $immagine=$Dati["Immagine"];
            $Edizione=$Dati["Edizione"];
            $Tipo=$Dati["Tipologia"];
            $DataRil=$Dati["DataRilascio"];
            $Versione=$Dati["Versione"];
            $Prec=$Dati["Prec"];
            $Succ=$Dati["Succ"];
        }
    }

    $QueryIntro = "SELECT * FROM snapshotnews 
                JOIN paginahacapitoli ON snapshotnews.IdSnapshot=paginahacapitoli.IdSnapshot
                JOIN capitoli ON paginahacapitoli.IdCapitolo=capitoli.IdCapitolo
                WHERE snapshotnews.IdSnapshot = '$IdPag' AND tipo = 'Introduzione'";

    $Intro= $Connessione->query($QueryIntro);

    if ($Intro->num_rows == 0){
        $Intro = "";
    }

    $QueryAggiunte = "SELECT * FROM snapshotnews 
                JOIN paginahacapitoli ON snapshotnews.IdSnapshot=paginahacapitoli.IdSnapshot
                JOIN capitoli ON paginahacapitoli.IdCapitolo=capitoli.IdCapitolo
                WHERE snapshotnews.IdSnapshot = '$IdPag' AND tipo = 'Aggiunte'";
    
    $Aggiunte= $Connessione->query($QueryAggiunte);

    if ($Aggiunte->num_rows == 0){
        $Aggiunte = "";
    }






?>


<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>20w06a snapshot</title>
        <link rel="icon" type="image/x-icon" href="../../Immagini/SfondoHeader.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="../../style.css">
        
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <div class="contenitore">
            <?php 
                require("../../data/Header.php");
                require("../../data/Cuore.php");
                echo <<<EOD
                    <div class="contenitorePulsanti">
                        <ul class="Pulsanti" style="list-style-type: none;">
                            <li><a href="$Prec.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                            <li><a href="../Minecraft_News.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                            <li><a href="$Succ.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                        </ul>
                    </div>
                    <?php
                    require("../../data/Bookmark.php");
                    ?>
                    <div class="contenitorePaginaSnapshot">
                        <h1 class="titolo">Java Edition $titolo</h1>
                        <div class="ContenitoreTabella">
                            <img src="../../Immagini/ImmaginiNews/$immagine" alt="">
                            <table class="tabella">
                                <tr class="rigapari">
                                    <th>Edizione</th>
                                    <td>$Edizione</td>
                                </tr>
                                <tr>
                                    <th>Tipo</th>
                                    <td>$Tipo</td> 
                                </tr>
                                <tr class="rigapari">
                                    <th>Data di rilascio</th>
                                    <td>$DataRil</td> 
                                </tr>
                                <tr>
                                    <th>Versione</th>
                                    <td>$Versione</td> 
                                </tr>
                            </table>
                        </div>
                    EOD;
                foreach($Intro as $datiIntro){
                    $txtIntro= $datiIntro["TestoCap"];
                echo <<<EOD
                <div class="TestoNews">
                    <p>$txtIntro</p>
                EOD;}
                echo <<<EOD
                    <div class="ContenitoreIndice">
                        <h2>Indice</h2>
                        <ol>
                            <h3><a href="#Agg">Aggiunte</a></h3>
                            <li><a href="#Blocchi">Blocchi</a></li>
                            <li><a href="#Oggetti">Oggetti</a></li>
                            <li><a href="#Mob">Mob</a></li>   
                        </ol>
                    </div>
                    <h2 class="Sezione jumptarget" id="Agg">Aggiunte</h2>
                    <h3 class="jumptarget" id="Blocchi">Blocchi</h3>

                    <h4>Basalto</h4>
                    <p>Formano i pilastri di basalto.
                        Si genera nelle valli di sabbia delle anime.
                        Possono essere rivolti verso ogni direzione, come i tronchi.</p>
                    
                </div>
            </div>
            EOD;

            require ("../../data/Footer.php")
        ?>
        </div>
    </body>
</php>