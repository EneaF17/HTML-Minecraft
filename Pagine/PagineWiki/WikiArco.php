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
        <title>Wiki-Arco</title>
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
                <?php 
                require("../../data/Cuore.php");
                ?>
                
                <div class="contenitorePulsanti">
                    <ul class="Pulsanti" style="list-style-type: none;">
                        <li><a href="WikiTnt.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                        <li><a href="../Minecraft_Wiki.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                        <li><a href="WikiCreeper.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                    </ul>
                <?php require("../../data/Bookmark.php"); ?>
            </div>
            <div class="contenitoreWiki">
                <h1 class="titolo">Arco</h1>
                <div class="ContenitoreTabella">
                    <img src="../../Immagini/ImmaginiWiki/Arco.webp" alt="">
                    <table class="tabella">
                        <tr class="rigapari">
                            <th>Nome</th>
                            <td>Arco</td>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <td>261 105</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Tipo</th>
                            <td>Arma</td> 
                        </tr>
                        <tr>
                            <th>Raritá</th>
                            <td>Comune</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Durabilita</th>
                            <td>385</td> 
                        </tr>
                        <tr>
                            <th>Rinnovabile</th>
                            <td>Si</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Impilabile</th>
                            <td>No</td> 
                        </tr>
                    </table>
                </div>
                <div class="TestoWiki">
                    <p>L'arco è un arma a distanza che spara frecce. Permette al giocatore di uccidere mob e altri giocatori da grandi distanze rispetto ad armi a distanza ravvicinata come le spade. Gli archi possono essere caricati premendo il tasto "usa" (il tasto destro sul PC), e quando sono caricati completamente le frecce fanno un danno di 4,5♥, o raramente 5♥.</p>
                    <p>L'arco può essere incantato, e ha una base di incantabilità di 1. Può essere fabbricato, ed è un rilascio raro degli scheletri; gli archi rilasciati dagli scheletri hanno solitamente una durabilità rimasta molto bassa. Se il giocatore vuole creare un arco dagli archi raccolti dagli scheletri, può ripararli usando un banco da lavoro o un incudine fino a che non ottiene un arco con alta durabilità.</p>
                    <div class="ContenitoreIndice">
                        <h2>Indice</h2>
                        <ol>
                            <li><a href="#Ottenimento">Ottenimento</a></li>
                            <li><a href="#Fabbricazione">Fabbricazione</a></li>
                            <li><a href="#Uso">Uso</a></li>
                        </ol>
                    </div>
                    <h2 class="Sezione jumptarget" id="Ottenimento">Ottenimento</h2>
                    <p>Gli archi possono essere fabbricati e sono un rilascio potenziale degli scheletri. Dagli snapshot della 1.8, la nuova carriera del villico arcaio può far vendere archi per 2-3 smeraldi a pezzo. Infine, gli archi possono essere presi pescando, come un "tesoro", perché l'arco che viene pescato può essere incantato ma è leggermente danneggiato.</p>
                    <h2 class="Sezione jumptarget" id="Fabbricazione">Fabbricazione</h2>
                    <img class="imgWikiCraft" src="../../Immagini/ImmaginiWiki/ArcoCrafting.png" alt="">
                    <p>3 bastoni e 3 stringhe come in figura</p>
                    <p>Il layout non é trascurabile ma é simmetrico</p>
                    <h2 class="Sezione jumptarget" id="Uso">Uso</h2>
                    <p>Per usare un arco, devi avere l'oggetto attivo e devi avere come minimo una freccia nell'inventario (in modalità creativa la freccia nell'inventario non è richiesta per sparare). Clicca semplicemente il tasto destro per usare l'arco, che sparerà frecce. Tenere premuto il tasto destro farà "caricare" l'arco (tenderà indietro la cordicella) e la freccia volerà più lontano quando verrà rilasciato.</p>
                    <p>Caricare un arco al massimo causerà l'agitazione della visuale come un indicatore, e rilasciare una freccia con un effetto scintillante significherà un colpo critico che causerà molto danno. Al caricamento completo, una freccia viaggia per circa 65 blocchi in altezza, e vola con una velocità di circa 53 m/s, e toglie 4,5♥ per colpo (quanto una spada di diamante circa), con una rara possibilità di togliere 5♥. Gli incantesimi dell'arco non influenzano la velocità o la distanza, ma incrementano un po' il danno.</p>
                    <p>Mentre l'arco viene caricato o rimane completamente caricato, il giocatore è forzato a muoversi alla velocità dell'accovacciamento, a meno che non sia cavalcando un equino in quel momento, il che non causerà una riduzione di velocità.</p>
                    <p>Siccome le frecce sono influenzate dalla gravità, tenderanno a fare un percorso inarcato a seconda delle distanze. Devi prima mirare il bersaglio quando spari dalla distanza, o andare su una piattaforma elevata, per colpire con certezza.</p>
                    <p>Le frecce che colpiscono blocchi solidi si incastrano e possono essere collezionate di nuovo, a meno che non siano delle frecce incantate con l'infinità. Le frecce sparate dagli scheletri non possono essere raccolte.</p>
                    <p>Due frecce completamente caricate sono spesso richieste per uccidere mob passivi, mentre 3 sono spesso richieste per uccidere il più degli ostili.</p>
                    <p>Le frecce che sparano gli scheletri si incastrano nei blocchi che colpiscono e non possono essere raccolte. Continueranno a viaggiare se il giocatore estrae questi blocchi, con un potenziale danno continuo.</p>
                </div>
            </div>
            
        </body>
        <?php 
            require ("../../data/Footer.php")
        ?>
    </div>
    </php>