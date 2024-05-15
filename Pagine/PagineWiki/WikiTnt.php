<?php 
    session_start();
    require ("../../data/connessioneDB.php");
?>

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wiki-TNT</title>
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
            require("../../data/HeaderPagineVarie.php");
            ?>


            <div class="contenitorePulsanti">
                <ul class="Pulsanti" style="list-style-type: none;">
                    <li><a href="WikiPistone.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_Wiki.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="WikiArco.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <div class="contenitoreWiki">
                <h1 class="titolo">TNT</h1>
                <div class="ContenitoreTabella">
                    <img src="../../Immagini/Tnt.webp" alt="">
                    <table class="tabellaWiki">
                        <tr class="rigapari">
                            <th>Nome</th>
                            <td>Tritolo</td>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <td>171</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Tipo</th>
                            <td>Blocco</td>
                        </tr>
                        <tr>
                            <th>Rinnovabile</th>
                            <td>Si</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>impilabile</th>
                            <td>si(64)</td>
                        </tr>
                        <tr>
                            <th>resistenza esplosioni</th>
                            <td>0</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>durezza</th>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th>luminositá</th>
                            <td>no</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>trasparenza</th>
                            <td>no</td>
                        </tr>
                        <tr>
                            <th>infiammabile</th>
                            <td>si</td> 
                        </tr>
                    </table>
                </div>
                <div class="TestoWiki">
                    <p>La TNT è un blocco usato per creare esplosioni.</p>
                    <div class="ContenitoreIndice">
                        <h2>Indice</h2>
                        <ol>
                            <li><a href="#Fabbricazione">Fabbricazione</a></li>
                            <li><a href="#Proprietá">Proprietá Esplosioni</a></li>
                            <li><a href="#Usi">Usi</a></li>
                            <li><a href="#Rimozione">Rimozione</a></li>
                            <li><a href="#Innescata">TNT innescata</a></li>
                            <li><a href="#Curiositá">Curiositá</a></li>
                        </ol>
                    </div>
                    <h2 class="Sezione jumptarget" id="Fabbricazione">Fabbricazione</h2>
                    <img class="imgWikiCraft" src="../../Immagini/TntCrafting.png" alt="">
                    <p>La TNT puó essere fabbricata con 5 pezzi di polvere da sparo e 4 pezzi di sabbia. La sabbia puó anche essere sabbia rossa o un misto tra sabbia normale e sabbia rossa.</p>
                    <h2 class="Sezione jumptarget" id="Proprietá">Proprietá delle esplosioni</h2>
                    <p>Dopo essere stata incendiata o energizzata con la redstone, la TNT comincia a fumare e a lampeggiare di bianco, diventando nel contempo soggetta alla gravità. Dopo 4 secondi esplode, danneggiando i blocchi adiacenti, i mob nelle vicinanze e il giocatore, se non è stato prudente. Quando la TNT è posta in un qualunque liquido, esplodendo non ne distruggerà i blocchi, anche se è ancora in grado di danneggiare mob e giocatore.</p>
                    <p>L'esplosione distrugge i blocchi adiacenti a seconda della loro resistenza alle esplosioni. La detonazione si propaga più lontano nell'aria, caratterizzata da una resistenza nulla. Un'esplosione all'aperto si propagherà per un raggio di circa 7 blocchi, mentre un blocco di TNT incastonato nella pietra distruggerà un cubo di dimensioni 3×3×3. La TNT può distruggere qualsiasi blocco, con le sole eccezioni della Bedrock, dell'ossidiana, della netherite e dei blocchi liquidi.</p>
                    <p>Un giocatore o un mob a bordo di un carrello da miniera subirà danni minimi dall'esplosione, fatto che può essere sfruttato per la costruzione di un "cannone" per sparare mob o giocatori.</p>
                    <p>La TNT è infiammabile. Quando viene incendiata, invece di sparire ed essere sostituita da altro fuoco come qualunque altro blocco infiammabile, la TNT viene attivata. Se viene posta vicino a della lava prima o poi prenderà fuoco ed esploderà.</p>
                    <p>Troppi blocchi di TNT adiacenti possono provocare seri problemi di lag; ciò può essere evitato disponendoli ad una distanza minima di due blocchi l'uno dall'altro.</p>
                    <p>Blocchi di sabbia e ghiaia reagiscono in maniera coerente con l'esplosione, schizzando via dal punto di origine. Se la sabbia o la ghiaia cadono su della TNT posta sott'acqua, essa esploderà normalmente.</p>
                    <h2 class="Sezione jumptarget" id="Usi">Usi</h2>
                    <p>È possibile creare trappole per i mostri con la TNT, fatto che la rende un potente mezzo difensivo. Quando esposta alla corrente, la TNT si attiva: combinando questo con una pedana a pressione si possono creare difese automatiche per i propri edifici. Ovviamente si tratta di metodi una-tantum.</p>
                    <p>Per ricevere il segnale dal circuito, la polvere di redstone deve essere collegata direttamente alla TNT da uno dei lati. Metterla diagonalmente non creerà connessioni. Anche se la redstone non è collegata alla TNT, basta che essa sia adiacente all'esplosivo per innescarlo (come un cavo passante parallela alla TNT). L'attivazione avverrà solo se la redstone viene accesa, quindi se l'esplosivo è posto vicino ad un cavo già sottoposto a tensione, inizialmente non succederà nulla, ma se la corrente viene spenta e poi riaccesa, la TNT verrà innescata. A causa di un bug, però, facendo così vengono attivati solo alcuni blocchi di TNT. Le torce di redstone sono in grado di attivare gli esplosivi.</p>
                    <p>Poiché la TNT innescata è soggetta alla fisica, è possibile spararla usando come propellente un'altra esplosione, come è possibile vedere nella guida "Cannoni a TNT". Inoltre, visto che le frecce attaccate alla TNT precipitano con essa, è possibile creare trappole a freccia.</p>
                    <p>È possibile effettuare un "rocket-jump" con la TNT, ma i danni risultanti da questa azione possono uccidere il giocatore.</p>
                    <p>Sia la TNT innescata che non innescata possono essere spinte mediante i pistoni, senza alcuna modifica alle proprietà esplosive. Non è possibile lanciare la TNT in questo modo.</p>
                    <h3>Scavi</h3>
                    <p>È possibile effettuare gli scavi delle proprie miniere usando la TNT, metodo rapido ed efficiente nell'estrazione poiché dal 1.14.0 rilascia il 100% dei blocchi scavati In più, questo metodo funziona bene solo con blocchi con scarsa resistenza alle esplosioni, come la sabbia e la ghiaia. Ciononostante, questa tecnica può essere usata per rimuovere rapidamente strati indesiderati o per liberare grandi volumi di sottosuolo da utilizzare in progetti con una notevole estensione sotterranea.</p>
                    <p>Come già affermato, acqua, lava, ossidiana e il bedrock non risentono delle esplosioni. Non possono essere distrutti, indipendentemente dalla quantità di esplosivo utilizzato: se un singolo blocco di TNT non è in grado di distruggere qualcosa, vuol dire che non può assolutamente essere distrutto in tal modo.</p>
                    <h3>Acqua per il controllo delle esplosioni</h3>
                    <p>Se tra la TNT e un blocco che può essere distrutto da essa è presente uno strato d'acqua, il blocco in questione verrà protetto. È sufficiente un volume d'acqua dello spessore di un singolo blocco per proteggere qualsiasi elemento. Con questo metodo è quindi possibile usare la TNT vicino ad elementi importanti, come una casa, una base o una vena di minerale.</p>
                    <p>È anche possibile fare rapidamente scavi di una forma prefissata semplicemente scavando a mano il bordo, riempiendolo d'acqua e facendo esplodere la TNT al centro.</p>
                    <h2 class="Sezione jumptarget" id="Rimozione">Rimozione</h2>
                    <p>A partire dalla versione Beta 1.7, per rimuovere un blocco di TNT è sufficiente distruggerlo come un blocco normale, visto che ora per attivarlo è necessario usare il fuoco, la redstone, acciarino o scarica di fuoco.</p>
                    <h2 class="Sezione jumptarget" id="Innescata">TNT innescata</h2>
                    <p>La TNT innescata è un'entità nel mondo di Minecraft. Viene generata al centro (+0.5,+0.5,+0.5) di un blocco di TNT distrutto e ha dimensioni pari a 0.98x0.98x0.98. La sua "miccia" dura 80 ticks se è attivata dalla polvere di redstone o dal fuoco, o un numero casuale di ticks compreso tra 10 e 30 se attivata da un'altra esplosione.</p>
                    <p>Una volta generata, la TNT innescata è dotata di una velocità di caduta pari a 0.2 m/s e da una velocità orizzontale pari a 0.02 m/s in una direzione casuale compresa tra est e nord. Questa direzione preferenziale verso nord-est è provocata da un bug. Se non si verificano collisioni con altri blocchi, la TNT detonerà dopo aver attraversato 0.166m in direzione orizzontale.</p>
                    <h2 class="Sezione jumptarget" id="Curiositá">Curiositá</h2>
                    <p>Il nome "TNT" (abbreviazione di Trinitrotoluene) è tecnicamente incorretto. Questo blocco, infatti, sembra un insieme di candelotti di dinamite, una tipologia di esplosivo completamente diversa dalla TNT, anche se frequentemente confusa con essa. La ricetta per creare la TNT, inoltre, ricorda l'effettiva procedura per ottenere la dinamite, fabbricata stabilizzando la nitroglicerina con un materiale assorbente, come la segatura di legno o la terra. In più, nessuno dei due esplosivi prevede l'uso della polvere da sparo per la loro fabbricazione.</p>
                    <p>Alcune trappole prevedono la sospensione di un blocco di TNT su di una profonda fossa di larghezza 1×1. Attivando la TNT, essa precipiterà nel buio, molto probabilmente uccidendo tutti i mob al di sotto. Se si riesce ad evitare il baule, è un buon modo per distruggere il monster spawner di un dungeon.</p>
                    <p>Un blocco di TNT attivato cade per circa 77 blocchi prima di esplodere.</p>
                    <p>Dall'ultimo aggiornamento, non è più possibile fissare torce alla TNT. Quelle fissate in precedenza vengono fatte sparire.</p>
                    <p>In multigiocatore c'è un bug per il quale se due blocchi di TNT adiacenti esplodono contemporaneamente appare un blocco di TNT bianca inutilizzabile. Solo chi ha effettivamente assistito all'esplosione può vedere il blocco. Per farlo sparire occorre disconnettersi e riconnettersi. NOTA: ciò avviene solo ed esclusivamente in multigiocatore.</p>
                    <p>La TNT non danneggia i blocchi quando è nella lava, proprio come nell'acqua. Giocatori e mob, invece, subiranno i danni normalmente.</p>
                    
                </div>
            </div>
        </body>
        <footer>
            <p>Sito non ufficiale programmato al solo scopo didattico e dimostrativo</p>
        </footer>
    </div>
</php>