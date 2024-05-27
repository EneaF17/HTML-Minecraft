<?php 
    session_start();
    require ("../../data/connessioneDB.php");
    require ("../../data/CuoreScript.php");

?>

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wiki-Creeper</title>
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
            require("../../data/Cuore.php");
            ?>
            <div class="contenitorePulsanti">
                <ul class="Pulsanti" style="list-style-type: none;">
                    <li><a href="WikiArco.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_Wiki.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="WikiDiamante.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <?php require("../../data/Bookmark.php"); ?>
            <div class="contenitoreWiki">
                <h1 class="titolo">Creeper</h1>
                <div class="ContenitoreTabella">
                    <img src="../../Immagini/ImmaginiWiki/Creeper.png" alt="">
                    <table class="tabellaWiki">
                        <tr class="rigapari">
                            <th>Nome</th>
                            <td>Creeper</td>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <td>33</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Tipo</th>
                            <td>Entitá</td>
                        </tr>
                        <tr>
                            <th>Comportamento</th>
                            <td>Aggressivo</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Punti Vita</th>
                            <td>20</td>
                        </tr>
                        <tr>
                            <th>Forza d'attacco</th>
                            <td>49</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Generazione</th>
                            <td>Overworld</td>
                        </tr>
                        <tr>
                            <th>Xp</th>
                            <td>5</td> 
                        </tr>
                    </table>
                </div>
                <div class="TestoWiki">
                    <p>Un creeper è un mob ostile che utilizza un attacco suicida e mortale: si avvicina al giocatore ed esplode, causando danno ai giocatori ma anche ai blocchi ed entità circostanti. I Creeper vengono generati nel Mondo principale di notte, e in qualsiasi luogo dove il livello di luce è inferiore a 7, proprio come qualsiasi altro mob ostile; tuttavia, a differenza di scheletri e zombi, i creeper non prendono fuoco quando sono esposti alla luce del sole, e tutti quelli generati di notte continueranno a vagare senza sosta in qualsiasi area accessibile fino a quando non vengono uccisi o rimossi dal gioco.</p>
                    <p>I Creeper sono particolarmente pericolosi per via del loro approccio quasi silenzioso, gli unici rumori che emettono infatti sono quelli dei passi leggeri e il tipico sibilo della "miccia interna" quando sta per farsi esplodere, rumore che molto spesso significa che è troppo tardi per salvarsi. La loro esplosione si rivela devastante a corto raggio, sia per le entità che per le strutture.</p>
                    <p>I Creeper scappano dai Gatti e dai Ocelot, e ignorano qualsiasi giocatore quando devono scappare da un felino troppo vicino. Poiché i gatti possono essere controllati dal giocatore, questo fattore rappresenta un'importante difesa dagli attacchi dei Creeper.</p>
                    <p>Il Creeper si è guadagnato notorietà e odio tra i giocatori di Minecraft per via della sua frustrante tendenza ad avvicinarsi furtivamente al giocatore per infliggere un danno devastante. Di fatto il Creeper è una delle icone più riconosciute di Minecraft, nonché mascotte ufficiale del gioco.</p>
                    <div class="ContenitoreIndice">
                        <h2>Indice</h2>
                        <ol>
                            <li><a href="#Aspetto">Aspetto</a></li>
                            <li><a href="#Utilizzo">Utilizzo</a></li>
                            <li><a href="#Comportamento">Comportamento</a></li>
                        </ol>
                    </div>
                    <h2 class="Sezione jumptarget" id="Aspetto">Aspetto</h2>
                    <p>Il Creeper è una mob umanoide senza mani con 4 gambe corte sul bordo del corpo rettangolare. Ha due grandi cavità vuote per gli occhi, una bocca contorta con una espressione triste e una pelle verdastra simile all'erba. Quando è stato chiesto a Notch di descrivere come sarebbe fisicamente la pelle di un Creeper, lui ha risposto "Scricchiolante, come le foglie secche".</p>
                    <h2 class="Sezione jumptarget" id="Utilizzo">Utilizzo</h2>
                    <p>I Creeper costituiscono la fonte di polvere da sparo più disponibile e di facile accesso del gioco (l'alternativa è uccidere i Ghast oppure trovare un Dungeon), e quindi sono necessari per fabbricare TNT, Cariche di Fuoco, Pozioni Lanciabili e Stelle Pirotecniche. Quando vengono uccisi, i Creeper forniscono da 0 a 2 unità di polvere da sparo.</p>
                    <h2 class="Sezione jumptarget" id="Comportamento">Comportamento</h2>
                    <p>Un Creeper cercherà di inseguire qualsiasi giocatore presente in un raggio di 16 blocchi. Possono saltare un dislivello, orientarsi in un labirinto e superare altri ostacoli complessi per avvicinarsi il più possibile al giocatore. Smetteranno di inseguire se il giocatore si sposta ad una distanza superiore di 16 blocchi.</p>
                    <p>Quando si trova ad un blocco di distanza da un giocatore, il Creeper emette un sibilo rumoroso, inizia a lampeggiare e a gonfiarsi, per poi esplodere dopo 1.5 secondi. Uccidere un Creeper prima del termine del conto alla rovescia impedisce l'esplosione. La detonazione può essere evitata se il Creeper viene spinto con un attacco ad una distanza superiore a quella di detonazione o se il giocatore si sposta sufficientemente lontano.</p>
                    <p>I Creeper scappano dai Gatti dagli Ocelot se questi sono troppo vicini, e ignorano qualsiasi giocatore nel proprio raggio. Un Creeper che avvista un felino scapperà da esso e si fermerà ad una distanza ritenuta "sicura". Questa distanza di sicurezza è inferiore rispetto al raggio visivo di un Creeper, e questo può risultare in un ciclo infinito di avvicinamento e di allontanamento se il giocatore si trova vicino al gatto. I Creeper possono comunque detonare mentre scappano se il giocatore è troppo vicino.</p>
                </div>
            </div>
        </body>
        <?php 
            require ("../../data/Footer.php")
        ?>
    </div>
</php>