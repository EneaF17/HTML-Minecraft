<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wiki-Fornace</title>
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
                    <li><a href="WikiEnderDragon.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_Wiki.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="WikiHerobrine.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <div class="contenitoreWiki">
                <h1 class="titolo">Fornace</h1>
                <div class="ContenitoreTabella">
                    <img src="../../Immagini/Fornace.webp" alt="">
                    <table class="tabellaWiki">
                        <tr class="rigapari">
                            <th>Nome</th>
                            <td>Fornace</td>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <td>61</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Tipo</th>
                            <td>Blocco Funzionale</td>
                        </tr>
                        <tr>
                            <th>Rinnovabile</th>
                            <td>si</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Impilabile</th>
                            <td>si(64)</td>
                        </tr>
                        <tr>
                            <th>Attrezzo</th>
                            <td>Piccone</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Tipo attrezzo</th>
                            <td>Legno</td>
                        </tr>
                        <tr>
                            <th>Resistenza Esplosioni</th>
                            <td>3.5</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Durezza</th>
                            <td>3.5</td>
                        </tr>
                        <tr>
                            <th>Luminositá</th>
                            <td>13 se attiva</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Trasparenza</th>
                            <td>No</td>
                        </tr>
                        <tr>
                            <th>Infiammabile</th>
                            <td>No</td> 
                        </tr>
                    </table>
                </div>
                <div class="TestoWiki">
                    <p>La fornace è un blocco utilizzato per cuocerne degli altri, utilizzando come combustibile legno (o oggetti di legno), carbonella, carbone o secchi di lava. Nell'ultima versione del gioco sono state inserite delle fornaci speciali (altoforno, affumicatore) specializzate nella cottura rispettivamente di minerali e cibo. Queste fornaci specializzate possono cuocere solo la propria categoria di oggetti, ma cuoceranno molto più velocemente rispetto a una normale fornace, che però rimane sempre importante dato che alcuni oggetti possono essere cotti solo in una normale fornace.</p>
                    <div class="ContenitoreIndice">
                        <h2>Indice</h2>
                        <ol>
                            <li><a href="#Ottenimento">Ottenimento</a></li>
                            <li><a href="#Fabbricazione">Fabbricazione</a></li>
                            <li><a href="#Carburanti">Carburanti</a></li>
                        </ol>
                    </div>
                    <h2 class="Sezione jumptarget" id="Ottenimento">Ottenimento</h2>
                    <h3>Generazione Naturale</h3>
                    <p>Le fornaci possono essere trovate nelle pianure, nel deserto e in alcuni armaioli dei villaggi della savana. Le fornaci si generano anche in alcune case nei villaggi delle pianure innevate e in una delle case del villaggio taiga. Appaiono anche nelle città antiche e una fornace si genera in ogni igloo.</p>
                    <h3>Rottura</h3>
                    <p>Una fornace può essere estratta usando qualsiasi piccone. Una fornace lascerà anche cadere tutto il suo contenuto quando viene rotta, inclusi XP dagli oggetti fusi che sono stati estratti dalle tramogge.</p>
                    <p>In Java Edition, una fornace estratta senza piccone non rilascia nulla. In Bedrock Edition, una fornace viene rilasciata quando viene estratta a mano o con qualsiasi strumento.</p>
                    <h2 class="Sezione jumptarget" id="Fabbricazione">Fabbricazione</h2>
                    <img class="imgWikiCraft" src="../../Immagini/FornaceCrafting.png" alt="">
                    <p>La fornace puó essere fabbricata usando pietrisco, ardesia profonda e pietranera in modo totalmente interscambiabile purché siano messi nel modo corretto come in figura.</p>
                    <h2 class="Sezione jumptarget" id="Carburanti">Carburanti</h2>
                    <p>L'interfaccia della fornace può essere aperta premendo il pulsante usa oggetto su di essa. Una fonte di carburante (fino a una pila di oggetti combustibili) viene posizionata nello slot inferiore a sinistra e gli oggetti (fino a una pila) da fondere vengono posizionati nello slot superiore a sinistra. Una fornace fonde oggetti alla velocità di un oggetto ogni 200 tick di gioco (10 secondi) o sei oggetti al minuto.</p>
                    <p>Il numero di elementi che una fonte di carburante può fondere dipende dal tipo di carburante. Non appena inizia la fusione, lo slot di carburante viene immediatamente decrementato e quell'unità di carburante inizia a bruciare. Il carburante continua a bruciare finché non viene consumato, indipendentemente dal fatto che lo slot superiore abbia ancora oggetti da fondere. Ad esempio, un pezzo di carbone brucia per 80 secondi e può fondere otto oggetti, ma se viene fuso solo un oggetto (o se l'oggetto viene estratto prima che la fusione sia completa), il carbone continua a bruciare per tutti gli 80 secondi, consumando sette oggetti degni di fusione. Dopo che si è esaurito, il carburante aggiuntivo non viene diminuito dallo slot del carburante se lo slot superiore è vuoto. Se lo slot del carburante è vuoto e il carburante in fiamme viene consumato prima che un oggetto completi la fusione, la fusione si interrompe, l'oggetto fuso rimane invariato e la fusione deve essere riavviata con nuovo carburante.</p>
                    <img class="imgWikiCraft" src="../../Immagini/FornaceGui.png" alt="">
                    <ul>
                        <li>Lava: 100 utilizzi</li>
                        <li>Carbone / Carbonella: 8 utilizzi</li>
                        <li>Blocco di carbone: 72 / 78 utilizzi (circa)</li>
                        <li>Legno: 6 utilizzi</li>
                        <li>Assi di ogni tipo: 3 utilizzi</li>
                        <li>Stecca e attrezzi di legno: 1,5 utilizzi</li>
                        <li>Arboscelli di ogni tipo: 0.7 utilizzi</li>
                        <li>Blocco di alghe essiccate: 20 utilizzi</li>
                        <li>Verga di blaze: 12 utilizzi</li>
                    </ul>
                    <p>Quando piazzi un carburante più l'ingrediente da cuocere, si attiva una fiamma e una freccia. La fiamma dura in base ai carburanti, (per esempio se usi il legno ella cuoce materiali) e una freccia che indica il tempo di cottura: quando è piena il materiale va nel quadratino a destra cotto, poi si svuota e inizia nuovamente a riempirsi per cuocere un altro materiale.</p>
                </div>
            </div>
        </body>
        <footer>
            <p>Sito non ufficiale programmato al solo scopo didattico e dimostrativo</p>
        </footer>
    </div>
</php>