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
        <title>Guida-DIAMANTI!</title>
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
            require("../../data/Cuore.php");
            ?>


            <div class="contenitorePulsanti">
                <ul class="Pulsanti" style="list-style-type: none;">
                    <li><a href="GuidaPVP.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_Guida.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="GuidaFireworks.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            <?php require("../../data/Bookmark.php"); ?>
            <div class="boxGuida">
                <div class="boxTitolo">
                    <p>Come trovare i diamanti</p>
                </div>
                <p style="margin-top: 10px;">Hai sempre voluto trovare dei diamanti, ma non sapevi da dove iniziare a cercare? O magari hai bisogno di un piccone di diamante, per raccogliere l'ossidiana e raggiungere il Nether, o creare un tavolo degli incantesimi? I diamanti sono molto preziosi, perciò il tuo compito non sarà dei più facili. Con alcuni consigli e un po' di fortuna, però, puoi aumentare di molto le probabilità di trovare dei diamanti. Ecco come.</p>
                <h3>INDICE</h3>
                <a href="#STEP1"> STEP 1: Creare un piccone di ferro o di diamante</a>
                <a href="#STEP2"> STEP 2: Scavare alla ricerca dei diamanti</a>
                <a href="#Consigli"> Consigli</a>
                <div class="boxSezione">
                    <div class="boxNumeroSezione" id="STEP1"> <p>PASSO</p> <p>1</p> </div>
                    <div class="boxTitoloSezione"><p>Creare un piccone di ferro o diamante</p></div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti1.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>1</p></div>
                        <p>Per raccogliere del diamante, avrai bisogno di un piccone di diamante o di ferro. Non riuscirai a raccogliere questa pietra con altri strumenti, perciò per prima cosa dovrai riuscire a costruire uno di questi due picconi. Se hai già un piccone di diamante o di ferro e vuoi dei consigli su come trovare i diamanti, salta alla prossima sezione.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti2.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>2</p></div>
                        <p>
                            Crea un tavolo di creazione, se non lo hai già fatto. Puoi farlo piazzando 4 assi di legno negli spazi della zona di creazione. Per creare le assi ti basterà mettere un blocco di legno nella zona di creazione.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti3.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>3</p></div>
                        <p>Crea un piccone di legno. Metti i seguenti oggetti nel tuo tavolo di creazione:
                            3 assi di legno nella riga orizzontale più alta della griglia.
                            2 bastoni nella linea verticale al centro della griglia.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti4.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>4</p></div>
                        <p>Crea un piccone di pietra. Con il tuo piccone di legno, scava verso il basso per quattro blocchi fino a trovare della pietra. Raccogli tre blocchi di pietra, assicurandoti di avere ancora due bastoni a tua disposizione. Metti gli oggetti seguenti nel tavolo di creazione:
                            3 blocchi di pietra nella riga orizzontale più alta della griglia.
                            2 bastoni nella linea verticale al centro della griglia.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti5.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>5</p></div>
                        <p>
                            Costruisci o trova una fornace. Per il prossimo passaggio avrai bisogno di una fornace. Puoi trovarne una nei villaggi dei PNG, o puoi crearne una usando 8 blocchi di pietra, allineati intorno al bordo esterno del tuo tavolo di creazione.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti6.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>6</p></div>
                        <p>
                            Costruisci un piccone di ferro. Con il tuo piccone di pietra, inizia a cercare del minerale di ferro. Puoi trovarlo in superficie e nelle caverne. Ti serviranno solo 3 minerali di ferro.
                            Fondi il minerale di ferro nella fornace usando del carbone, per creare un lingotto di ferro. In alternativa puoi trasformare un blocco di ferro in 9 lingotti.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti7.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>7</p></div>
                        <p>
                            Crea un piccone di ferro mettendo i seguenti oggetti nel tavolo di creazione:
                            3 lingotti di ferro nella riga orizzontale più alta della griglia.
                            2 bastoni nella linea verticale al centro della griglia.</p>
                    </div>
                </div>
                <div class="boxSezione">
                    <div class="boxNumeroSezione" id="STEP2"> <p>PASSO</p> <p>2</p> </div>
                    <div class="boxTitoloSezione"><p>Scavare alla Ricerca di Diamanti</p></div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti8.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>1</p></div>
                        <p>Prima di iniziare, tieni presente che è possibile in alcuni casi trovare diamanti in superficie in forzieri generati casualmente. Puoi trovarli nei villaggi o nelle miniere abbandonate. Anche se è possibile trovare diamanti senza scavarli, generalmente avrai meno successo con questo metodo. Se vuoi raccoglierli in modo efficace, dovrai scavare.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti9.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>2</p></div>
                        <p>Assicurati di avere provviste adeguate prima di partire alla ricerca dei diamanti. Per riuscire a trovare i diamanti, avrai bisogno dei seguenti oggetti:
                            Molte torce (più di 100).
                            Un piccone di ferro, o di diamante.
                            Armi e armatura, se dovessi incontrare mostri.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti10.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>3</p></div>
                        <p>
                            Puoi trovare i diamanti da altezza 1 ad altezza 16. I diamanti sono distribuiti in modo più abbondante tra le altezze 8 e 13, e raggiungono la massima frequenza ad altezza 12. I blocchi di diamante si presentano in piccole vene da 1 a 10 blocchi. C'è la possibilità di trovare più di 10 blocchi vicini, se il generatore casuale del mondo è stato benevolo con te.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti11.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>4</p></div>
                        <p>Crea una scala che scenda verso il basso. Per farlo, scava un buco di tre blocchi, poi scava tre blocchi di fronte a essi, iniziando dal blocco centrale del primo buco e terminando un blocco più in basso. Ripeti fino a raggiungere l'altezza desiderata. Continua a scavare con il tuo piccone, e torna indietro ogni 10 minuti per fare rifornimento di cibo, lasciare i materiali che hai trovato in un forziere e creare più picconi e spade, ecc.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti12.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>5</p></div>
                        <p>Quando raggiungi la pietra indistruttibile, scava nei dintorni per raggiungere il livello più basso. Quella sarà l'altezza 0.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti13.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>6</p></div>
                        <p>
                            Risali fino ad altezza 12 (1 blocco è 1 di altezza), e crea una piccola stanza. Piazza un forziere, un tavolo di creazione e una fornace, così da non dover tornare fino alla superficie per costruire altri strumenti.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti14.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>7</p></div>
                        <p>
                            Inizia a scavare usando uno schema. Esistono molti schemi che puoi usare per trovare i diamanti. Eccone alcuni che hanno dato buoni risultati ad altri giocatori:
                            Crea uno scavo principale di 2 blocchi di altezza e 1 di larghezza che proceda in linea retta per una buona distanza. Crea dei piccoli bracci che partono dallo scavo principale e si diramano a cinque blocchi di distanza l'uno dall'altro. Scava i bracci di 2 blocchi di altezza e 2 di larghezza.
                            Procedi in linea retta in sezioni di 3x3 fino a trovare dei diamanti.</p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti15.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>8</p></div>
                        <p>
                            Se puoi, usa un incantesimo di Fortuna sul tuo piccone mentre scavi. Usare questo incantesimo ti consentirà di raccogliere più diamanti quando scavi. Esistono tre livelli di questo incantesimo.
                            Il livello 1 ti dà il 33% di possibilità di raddoppiare la raccolta (un aumento medio del 33%), il livello 2 il 25% di probabilità di raddoppiare e triplicare la raccolta (un aumento medio del 75%), mentre il livello 3 ti dà il 20% di probabilità di moltiplicare la raccolta per 2, per 3 e per 4 (un aumento medio del 120%). L'incantesimo Fortuna di livello 3 è estremamente raro, perciò probabilmente dovrai accontentarti del livello 1 o 2.
                            </p>
                    </div>
                </div>
                <div class="boxParagrafo">
                    <img src="../../Immagini/ImmaginiGuide/Diamanti16.jpeg" alt="">
                    <div class="boxTesto">
                        <div class="stepNumber"><p>9</p></div>
                        <p>
                            Scava intorno a un blocco di diamante prima di raccoglierlo. Il diamante è spesso vicino alla lava; quando lo scavi, c'è una probabilità che i diamanti possano cadere accidentalmente nella lava, e vengano distrutti. I diamanti sono molto preziosi, perciò è meglio assicurarsi che cadano nel tuo inventario, e non nella lava.
                            Piazza dei blocchi di pietra sotto al diamante se si trova sopra una pozza di lava. In questo modo, anche se i diamanti cadessero, non sarebbero distrutti dalla lava.</p>
                    </div>
                <div class="boxSezione">
                    <div class="boxTitoloSezione" id="Consigli"><p>Consigli</p></div>
                </div>
                    <div class="boxParagrafo">
                        <div class="boxTesto" style="padding-left: 30px;">
                            <ul>
                                <li>Porta con te un secchio d'acqua quando scavi, in caso di incontri ravvicinati con la lava. Così eviterai di morire bruciato, potrai raccogliere i diamanti in sicurezza e anche ottenere dell'ossidiana.</li>
                                <li>Puoi trovare anche l'oro alle altezze in cui troverai il diamante.</li>
                                <li>Raramente riuscirai a trovare i diamanti con i texture packs, perché possono farti vedere solo i blocchi che mostrano la superficie. Puoi usare un mod per trovare i diamanti, ma non sarà altrettanto gratificante.</li>
                                <li>Fai sempre attenzione ai mostri.</li>
                                <li>Non scavare mai direttamente sotto i tuoi piedi, a meno che tu non stia cercando di battere un record di velocità nella raccolta dei diamanti, perché potresti incontrare della lava. Per lo stesso motivo non dovresti neanche scavare direttamente sopra la tua testa.</li>
                                <li>Fai attenzione ai creeper, nascono velocemente e possono farti esplodere.</li>
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