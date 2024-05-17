<?php 
    session_start();
    require ("../../data/connessioneDB.php");
?>

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wiki-EnderDragon</title>
        <link rel="icon" type="image/x-icon" href="../../Immagini/SfondoHeader.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="../../style.css">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">


    </head>
    <div class="contenitore">
        <body>
            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

            <?php 
            require("../../data/Header.php");
            ?>
            <div class="contenitorePulsanti">
                <ul class="Pulsanti" style="list-style-type: none;">
                    <li><a href="WikiDiamante.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_Wiki.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="WikiFornace.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <div class="contenitoreWiki">
                <h1 class="titolo">Ender Dragon</h1>
                <div class="ContenitoreTabella">
                    <img src="../../Immagini/ImmaginiWiki/Ender_Dragon.webp" alt="">
                    <table class="tabellaWiki">
                        <tr class="rigapari">
                            <th>Nome</th>
                            <td>Enderdrago</td>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <td>52:63</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Tipo</th>
                            <td>Entitá</td>
                        </tr>
                        <tr>
                            <th>Comportamento</th>
                            <td>Ostile</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Punti vita</th>
                            <td>200</td>
                        </tr>
                        <tr>
                            <th>forza d'attacco</th>
                            <td>10</td>
                        
                        </tr>
                        <tr class="rigapari">
                            <th>Generazione</th>
                            <td>End</td>
                        </tr>
                        <tr>
                            <th>Particolarita</th>
                            <td>Boss</td> 
                        </tr>
                    </table>
                </div>
                <div class="TestoWiki">
                    <p>L'Enderdrago è il primo Boss ad apparire in Minecraft. Appare quando entri nell'End e quando viene sconfitto farà apparire un uovo e attiverà un Portale di uscita e un Varco dell'End. Questo mob usa il modello del Drago rosso creato precedentemente da Notch, ma utilizza una texture che ricorda più un Enderman, essendo nera e squamosa con gli occhi viola.</p>
                    <div class="ContenitoreIndice">
                        <h2>Indice</h2>
                        <ol>
                            <li><a href="#Generazione">Generazione</a></li>
                            <li><a href="#Poteri">Poteri e Abilitá</a></li>
                        </ol>
                    </div>
                    <h2 class="Sezione jumptarget" id="Generazione">Generazione</h2>
                    <p>Il luogo naturale di generazione dell'Enderdrago è l'End. Una volta ucciso l'Enderdrago, è possibile rigenerarlo: bisogna avere 4 Cristalli dell'End e posizionarli sui blocchi centrali dei lati del portale di Bedrock (vedi immagine). I cristalli sui pilastri di ossidiana ricompariranno e si rigenererà l'Enderdrago. L'uovo che l'Enderdrago rilascerà alla sua morte non è un uovo generatore di Enderdrago: è impossibile generare l'Enderdrago con un uovo generatore. Però può essere generato in qualsiasi dimensione con il comando /summon ender_dragon</p>
                    <h2 class="Sezione jumptarget" id="Poteri">Poteri e Abilità</h2>
                    <p>In quanto boss, l'Enderdrago è uno dei mob più potenti e pericolosi del gioco, con capacità di gran lunga superiori a quelle di mob molto abili e potenti come l'Enderman, il Devastatore o il Golem di Ferro, a tal punto da essere consigliato un equipaggiamento in diamante o netherite (possibilmente incantato) e delle mele d'oro per poter affrontare il drago, e anche così resta un avversario molto temibile. L'unica entità che forse supera il drago in potenza è il Wither Boss.</p>
                    <p>Rigenerazione : Volando attorno ai Cristalli dell'End, l'Enderdrago può guarire dai danni subiti riacquistando cuori.</p>
                    <p>Volo : Grazie a due grandi e potenti ali, l'Enderdrago può volare, planare e levitare.</p>
                    <p>Resistenza sovrumana: Dati i suoi numerosissimi cuori, l'Enderdrago può sopportare vari colpi inflitti da armi anche parecchio potenti, come frecce, spade, TNT, armi incantate ecc...</p>
                    <p>Avvelenamento : Le esplosioni dell'Enderdrago lasciano una nube "tossica" viola che danneggia chiunque ne entri in contatto.</p>
                </div>
            </div>
            </body>
        <footer>
            <p>Sito non ufficiale programmato al solo scopo didattico e dimostrativo</p>
        </footer>
    </div>
</php>