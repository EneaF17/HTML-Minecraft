<?php 
    session_start();
    require ("../../data/connessioneDB.php");
?>


<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guida- Fuochi D'artificio</title>
        <link rel="icon" type="image/x-icon" href="../../Immagini/SfondoHeader.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="../../style.css">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">


    </head>
    <div class="contenitore">
        <body>
        <?php 
            require("../../data/Header.php");
            ?>


            <div class="contenitorePulsanti">
                <ul class="Pulsanti" style="list-style-type: none;">
                    <li><a href="GuidaTrovareDiamanti.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_Guida.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="GuidaCommandBlock.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <div class="boxGuida">
                <div class="boxTitolo">
                    <p>Fuochi D'Artificio</p>
                </div>
                <p style="margin-top: 10px;">Questo articolo spiega come creare i fuochi d'artificio in Minecraft. Puoi farlo in tutte le versioni del gioco, incluse le edizioni per PC, quella mobile e quella per console.</p>
                <h3>INDICE</h3>
                <a href="#STEP1"> STEP 1: Procurarsi le risorse</a>
                <a href="#STEP2"> STEP 2: Creare la stella</a>
                <a href="#STEP3"> STEP 3: Creare il razzo</a>
                <a href="#Consigli"> Consigli</a>
                <div class="boxSezione">
                    <div class="boxNumeroSezione"id="STEP1"> <p>PASSO</p> <p>1</p> </div>
                    <div class="boxTitoloSezione"><p>Procurarsi le risorse</p></div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti1.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber" ><p>1</p></div>
                        <p>Assicurati di avere a disposizione un tavolo di creazione. Te ne serve uno per creare i componenti dei fuochi d'artificio.</p>
                        <ul>
                            <li>Puoi creare un tavolo di creazione con quattro assi di legno;</li>
                            <li>Se desideri usare il colorante blu o verde per i tuoi fuochi d'artificio, ti serve anche una fornace.</li>
                        </ul>
                        
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti2.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>2</p></div>
                        <p>
                            Impara quali sono i componenti necessari per un fuoco d'artificio. Per creare tre razzi, ti servono un'unità di carta e una di polvere da sparo; ti serve anche una stella da fuochi d'artificio, che puoi costruire con un'unità di polvere da sparo e una di colorante, in modo che il razzo esploda.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti3.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>3</p></div>
                        <p>Uccidi dei Creeper per trovare la polvere da sparo. I Creeper sono i mostri verdi senza braccia che sibilano ed esplodono quando ti avvicini troppo. Per questo motivo, devi essere molto aggressivo quando li attacchi; se iniziano a sibilare, allontanati il prima possibile, in modo da evitare di subire troppi danni dall'esplosione.</p>
                        <ul>
                            <li>Di solito dovrai dare la caccia ai Creeper di notte. Si tratta di un'attività pericolosa, quindi assicurati di avere molti oggetti curativi (ad esempio cibo cotto).</li>
                            <li>I creeper non lasciano sempre cadere la polvere da sparo. Probabilmente dovrai eliminarne molti per trovare una o due unità di polvere.</li>
                        </ul>
                        </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti4.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>4</p></div>
                        <p>Raccogli della canna da zucchero per creare la carta. La canna da zucchero è una pianta alta verde chiaro che cresce vicino all'acqua. Te ne servono tre unità per creare tre unità di carta.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti5.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>5</p></div>
                        <p>Ottieni del colorante. Per aggiungere un effetto visivo all'esplosione del tuo fuoco d'artificio, ti serve del colorante. Nel mondo puoi trovare i colori seguenti:</p>
                        <ul>
                            <li>Rosso: raccogli qualsiasi fiore rosso, poi mettilo nel tavolo di creazione;</li>
                            <li>Giallo: raccogli qualsiasi fuori giallo, poi mettilo nel tavolo di creazione;</li>
                            <li>Verde: raccogli i cactus, poi fondili nella fornace;</li>
                            <li>Blu: scava dei blocchi di lapislazzuli, poi fondili nella fornace. Si tratta di rocce con macchie blu scure che di solito si trovano nelle profondità della terra.</li>
                        </ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti6.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>6</p></div>
                        <p>Trova del carburante per la fornace. Se desideri fondere dei materiali per ottenere il colorante, hai bisogno di assi di legno o carbone per alimentare la fornace.</p>
                        <ul><li>Salta questo passaggio se stai usando solo il colorante rosso o quello giallo.</li></ul>
                    </div>
                </div>
                <div class="boxSezione">
                    <div class="boxNumeroSezione" id="STEP2"> <p>PASSO</p> <p>2</p> </div>
                    <div class="boxTitoloSezione"><p>Creare una stella da fuochi d'artificio</p></div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti7.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>1</p></div>
                        <p>Apri il tavolo di creazione. Clicca su di esso con il tasto destro del mouse (PC), premilo (PE) oppure rivolgiti verso di esso e premi il grilletto sinistro (console). Si aprirà l'interfaccia del tavolo di creazione.</p>
                        <ul>
                            <li>Se preferisci che il tuo fuoco d'artificio non abbia alcun effetto visivo al momento dell'esplosione, salta al passaggio seguente;</li>
                            <li>Se vuoi creare del colorante verde o blu, apri la fornace.</li>
                        </ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti8.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>2</p></div>
                        <p>Metti il materiale nel tavolo di creazione. Trascina l'oggetto (ad esempio il fiore) in una qualunque delle caselle del tavolo. Se il colorante che hai scelto si ottiene fondendo un materiale, metti invece l'oggetto nella casella più in alto e il combustibile in quella più in basso.</p>
                        <ul>
                            <li>In Minecraft PE, premi prima il materiale, poi il tavolo di creazione. Se devi fondere l'oggetto, premilo, premi la casella "Ingresso", poi premi il combustibile e premi la casella "Combustibile".</li>
                            <li>Su console, premi il pulsante posteriore destro sei volte, seleziona la scheda "Coloranti", scorri verso il basso per scegliere il colorante che preferisci, poi premi A o X. Se devi fondere un oggetto, seleziona il colorante e premi Y o triangolo, poi ripeti per il combustibile.</li>
                        </ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti9.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>3</p></div>
                        <p>Recupera il colorante. Clicca su di esso per selezionarlo. Se hai fuso un materiale per ottenerlo, tieni premuto Maiusc e clicca sul colorante, poi esci dalla fornace e apri il tavolo di creazione.</p>
                        <ul>
                            <li>In Minecraft PE, premi prima il colorante, poi il tuo inventario;</li>
                            <li>Su console, il colorante va direttamente nell'inventario quando lo crei. Se hai fuso un oggetto nella fornace, selezionalo e premi Y.</li>
                        </ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti10.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>4</p></div>
                        <p>Crea la stella da fuoco d'artificio. Metti un'unità di polvere da sparo in una qualsiasi casella della griglia di creazione, poi metti il colorante in un'altra casella vuota.</p>
                        <ul><li>Su console, devi selezionare la scheda a forma di fuoco d'artificio sul lato destro dello schermo premendo ripetutamente uno dei tasti posteriori, poi scorri verso il basso fino a trovare il colore desiderato e premi A o X.</li></ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti11.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>5</p></div>
                        <p>Prendi la stella. Ora che hai la stella nell'inventario, puoi creare il razzo stesso.</p>
                    </div>
                </div>
                <div class="boxSezione">
                    <div class="boxNumeroSezione" id="STEP3"> <p>PASSO</p> <p>3</p> </div>
                    <div class="boxTitoloSezione"><p>Creare il Razzo</p></div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti12.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>1</p></div>
                        <p>Apri il tavolo di creazione. Clicca su di esso con il tasto destro del mouse (PC), premilo (PE) oppure rivolgiti verso di esso e premi il grilletto sinistro (console). Si aprirà l'interfaccia del tavolo di creazione.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti13.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>2</p></div>
                        <p>Metti la carta nel tavolo di creazione. Clicca sulla carta, poi clicca su una casella vuota nella griglia.</p>
                        <ul>
                            <li>In Minecraft PE, premi prima l'icona della carta, poi una casella nella griglia di creazione;</li>
                            <li>Salta questo passaggio su console.</li>
                        </ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti14.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>3</p></div>
                        <p>Metti la polvere da sparo nel tavolo di creazione. Clicca sulla polvere, poi su uno spazio vuoto nella griglia del tavolo.</p>
                        <ul>
                            <li>In Minecraft PE, premi prima l'icona della polvere da sparo, poi una casella vuota nella griglia di creazione;</li>
                            <li>Salta questo passaggio su console.</li>
                        </ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti15.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>4</p></div>
                        <p>Metti la stella nella griglia di creazione. Puoi metterla in una delle caselle vuote della griglia. Salta questo passaggio se preferisci creare un razzo che non esplode.</p>
                        <ul>
                            <li>In Minecraft PE, premi sulla stella, poi su una casella vuota della griglia di creazione e ripeti per tutti gli altri colori che vuoi usare;</li>
                            <li>Su console, premi il tasto posteriore destro o quello sinistro fino ad aprire la scheda a forma di razzo sul lato sinistro dello schermo, premi il pulsante posteriore destro due volte per aprire la sezione dei razzi, premi destra sul pad direzionale per selezionare il campo "Stella", poi premi Y o triangolo per aggiungere la stella che preferisci.</li>
                        </ul>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Razzetti16.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>5</p></div>
                        <p>Prendi i razzi. Tieni premuto Maiusc e clicca sui tre razzi a destra della griglia di creazione per spostarli nell'inventario. Puoi spararli selezionandoli dalla barra dell'equipaggiamento, poi cliccando il terreno davanti a te.</p>
                        <ul>
                            <li>In Minecraft PE, premi i razzi, poi premi l'inventario.</li>
                            <li>Su console, premi A o X per creare i razzi e metterli direttamente nell'inventario.</li>
                        </ul>
                    </div>
                </div>
                <div class="boxSezione">
                    <div class="boxTitoloSezione" id="Consigli"><p>Consigli</p></div>
                </div>
                    <div class="boxParagrafo">
                        <div class="boxTesto" style="padding-left: 30px;">
                            <ul>
                                <li>Puoi usare fino a sette stelle diverse quando crei un razzo. Ogni stella verrà aggiunta all'esplosione; ad esempio, se usi una stella blu, una verde e una rossa, l'esplosione del fuoco d'artificio sarà verde, blu e rossa.</li>
                                <li>Puoi dare un nome ai fuochi d'artificio usando l'incudine.</li>
                                <li>Puoi anche aggiungere degli effetti alle stelle dei fuochi d'artificio. Ad esempio, usando un diamante, l'esplosione del fuoco d'artificio lascerà delle scie.</li>
                                <li>Fai estrema attenzione quando dai la caccia ai creeper. Un'esplosione è sufficiente per ucciderti e mandare in fumo tutto il tuo duro lavoro.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        <?php 
            require ("../../data/Footer.php")
        ?>
    </div>
</php>