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
        <title>22w11a snapshot</title>
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
            ?>
            
            <div class="contenitorePulsanti">
                <ul class="Pulsanti" style="list-style-type: none;">
                    <li><a href="21w39a.php"><img src="../../immagini/FrecciaSx.png"alt=""></a></li>
                    <li><a href="../Minecraft_News.php"><img src="../../immagini/FrecciaSu.png"alt=""></a></li>
                    <li><a href="20w06a.php"><img src="../../immagini/FrecciaDx.png"alt=""></a></li>
                </ul>
            </div>
            
            <div class="contenitorePaginaSnapshot">
                <h1 class="titolo">Java Edition 22w11a</h1>
                <div class="ContenitoreTabella">
                    <img src="../../Immagini/ImmaginiNews/22w11a.webp" alt="">
                    <table class="tabella">
                        <tr class="rigapari">
                            <th>Edizione</th>
                            <td>Java Edition</td>
                        </tr>
                        <tr>
                            <th>Tipo</th>
                            <td>Snapshot</td> 
                        </tr>
                        <tr class="rigapari">
                            <th>Data di rilascio</th>
                            <td>16/03/2022</td> 
                        </tr>
                        <tr>
                            <th>Versione</th>
                            <td>1.19</td> 
                        </tr>
                    </table>
                </div>
                <div class="TestoNews">
                    <p>22w11a è il primo snapshot per la Java Edition 1.19, rilasciato il 16 marzo 2022, che aggiunge le prime funzionalità del The Wild Update, i filtri per i pacchetti, i fornitori di glifi spaziati, l'audio direzionale 3D, nuovi tag e corregge dei bug.</p>
                    <div class="ContenitoreIndice">
                        <h2>Indice</h2>
                        <ol>
                            <h3><a href="#Agg">Aggiunte</a></h3>
                            <li><a href="#Blocchi">Blocchi</a></li>
                            <li><a href="#Oggetti">Oggetti</a></li>
                            <li><a href="#Mob">Mob</a></li>
                            <h3><a href="#Cambiamenti">Cambiamenti</a></h3>
                            <li><a href="#Blocchi2">Blocchi</a></li>
                            
                        </ol>
                    </div>
                    <h2 class="Sezione jumptarget" id="Agg">Aggiunte</h2>
                    <h3 class="jumptarget" id="Blocchi">Blocchi</h3>
                    <h4>Lanterana</h4>
                    <p>Aggiunte le lanterane, con 3 varianti: ocra, perlacee e verdeggianti.
                        Emettono un livello di luce di 15.
                        Rilasciate quando una rana mangia un cubo di magma piccolo.
                        Quando mangiato da una rana temperata, rilascerà una lanterana ocra.
                        Quando mangiato da una rana fredda, rilascerà una lanterana verdeggiante.
                        Quando mangiato da una rana calda, rilascerà una lanterana perlacea.</p>
                    <h4>Uova di rana</h4>
                    <p>Blocchi non solidi che possono essere piazzati sulla superficie dell'acqua.
                        Deposte dalle rane dopo la riproduzione.
                        Fanno uscire fuori dei girini quando si schiudono.
                        Non vengono rilasciate quando distrutte, nemmeno con tocco di velluto.</p>
                    <h4>Foglie di mangrovia</h4>
                    <p>Un nuovo tipo di foglie.</p>
                    <h4>Tronchi di mangrovia</h4>
                    <p>Un nuovo tipo di tronco, possiedono anche una variante scortecciata.
                        Possono essere usati per fabbricare il legno e le assi di mangrovia.</p>
                    <h4>Assi di mangrovia</h4>
                    <p>Un nuovo tipo di assi.
                        Possono essere usate per fabbricare i pulsanti, le porte, le staccionate, i cancelletti, le pedane a pressione, i cartelli, le lastre, gli scalini e le botole di mangrovia.</p>
                    <h4>Propaguli di mangrovia</h4>
                    <p>Un nuovo tipo di arboscello.
                        Possono essere fatti crescere utilizzando della farina di ossa su delle foglie di mangrovia, questi cresceranno sulla facciata inferiore del blocco.
                        I propaguli possono anche crescere spontaneamente dalle foglie, ma solo se sono state generate in natura.
                        Hanno 4 fasi di crescita, che possono essere accelerate con la farina di ossa.
                        È possibile distruggerne uno completamente cresciuto e piantarlo per farlo crescere in un albero di mangrovia (al momento, questi non sono stati aggiunti e genereranno un normale albero di quercia).
                        Possono essere piantati sott'acqua.
                        Possono essere posizionati nei vasi da fiori.</p>
                    <h4>Radici di mangrovia</h4>
                    <p>Blocchi trasparenti come le foglie.
                        Vengono distrutte più velocemente con un'ascia.
                        A differenza delle foglie, non si distruggeranno se spinte don un pistone.
                        Se le radici sono impregnate d'acqua, l'acqua scomparirà..
                        Possono essere alimentate.</p>
                    <h4>Legno di mangrovia</h4>
                    <p>Un nuovo tipo di legno, possiede anche una variante scortecciata.
                        Può essere usato per fabbricare le assi di mangrovia.</p>
                    <h4>Fango</h4>
                    <p>Si può generare nelle foreste di mangrovie, che al momento, non sono ancora presenti nel gioco.
                        Quando camminano sul fango, le entità affonderanno leggermente.
                        Come con la sabbia delle anime, ma senza essere rallentati.
                        Può essere creato usando un'ampolla d'acqua su della terra, sulla terra brulla o sulla terra con radici direttamente o attraverso un distributore.
                        Può essere preso dagli enderman.</p>
                    <h4>Mattoni di fango</h4>
                    <p>Possono essere fabbricati con 4 blocchi di fango compatto.
                        Possono essere usati per fabbricare le lastre, gli scalini e i muretti di mattoni di fango attraverso un banco da lavoro o un tagliapietre.</p>
                    <h4>Radici di mangrovia fangose</h4>
                    <p>Possono essere fabbricate con 1 di fango e 1 di radici di mangrovia.
                        A differenza delle radici normali, sono un blocco opaco, che non può essere impregnato d'acqua.
                        Scavate più velocemente con una pala.</p>
                    <h4>Fango compatto</h4>
                    <p>Può essere fabbricato con 1 di fango e 1 di grano.</p>
                    <h4>Sculk</h4>
                    <p>Si genera nel bioma dell'abisso oscuro.
                        Ha una texture animata.
                        Rilascia solo esperienza quando distrutto senza tocco di velluto.
                        Cresce quando un mob muore vicino a un catalizzatore di sculk.</p>
                    <h4>Catalizzatore di sculk</h4>
                    <p>Si genera nel bioma dell'abisso oscuro.
                        Emette delle particelle di anime quando un mob muore in un raggio di 8 blocchi, facendo crescere altri blocchi di sculk.
                        Fa diffondere dei blocchi di sculk ovunque il mob sia morto. La quantità dipende dalla quantità di esperienza che il mob dovrebbe rilasciare.
                        Anche se il mob non viene ucciso da un giocatore, i blocchi si diffonderanno comunque a seconda della quantità di esperienza che il mob rilascerebbe normalmente.
                        L'esperienza non verrà rilasciata in questi casi.
                        La carica decade con il tempo, più è lontana dal catalizzatore, più decadrà più velocemente.
                        Se una carica decade a più di 4 blocchi di distanza dal catalizzatore, questa avrà una possibilità di creare un sensore di sculk (90%) o uno sculk urlatore (10%).
                        Se una carica decade a più di 24 blocchi di distanza dal catalizzatore, questa scomparirà.
                        Rilascia solo esperienza quando distrutto senza tocco di velluto.
                        Emette un livello di luce di 6.
                        Sboccia quando viene attivato.
                        Può diffondere lo sculk solo sui blocchi nel tag sculk_replaceable.</p>
                    <h4>Sculk urlatore</h4>
                    <p>Su genera nel bioma dell'abisso oscuro.
                        Ha due pattern a forma di teschio al centro.
                        Rilascia solo esperienza quando distrutto senza tocco di velluto.
                        Al momento non fa niente visto che il custode non è ancora stato aggiunto in questo snapshot.</p>
                    <h4>Vena di sculk</h4>
                    <p>Si genera nel bioma dell'abisso oscuro ai bordi delle chiazze di sculk.
                        Si genera in uno strato sopra ad un blocco e può essere piazzato in tutte le direzioni, come i licheni luminescenti.
                        Ha una texture animata.
                        Ha delle parti trasparenti, che permettono al giocatore di vedere il blocco sottostante.
                        Può essere impregnato d'acqua.
                        Rilascia solo esperienza quando distrutto senza tocco di velluto.</p>
                    
                    <h3 id="Oggetti" class="jumptarget">Oggetti</h3>
                    <h4>Secchio con girino</h4>
                    <p>Può essere ottenuto catturando un girino con un secchio d'acqua.</p>
                    <h4>Barca di mangrovia</h4>
                    <p>Un nuovo tipo di barca, fabbricate con le assi di mangrovia.</p>
                    <h4>Uova generatrici</h4>
                    <p>Aggiunte le uova generatrici di rana e di girino.</p>

                    <h3 id="Mob" class="jumptarget">Mob</h3>
                    <h4>Rane</h4>
                    <p>Possono gracidare, saltare, nuotare e camminare lentamente sulla terraferma.
                        Possono saltare fino a 5 blocchi.
                        Le rane sono più veloci in acqua che sulla terraferma.
                        Preferiscono saltare sulle ninfee e sulle piantaforme grandi.
                        Hanno 10 (♥♥♥♥♥) punti salute.
                        Hanno tre varianti: temperata, calda e fredda.
                        La variante temperata è arancione, la variante calda è bianca e la variante fredda è verde.
                        Mangiano gli slime, rilasciando delle palle di slime durante il processo.
                        Possono essere attirate e fatte riprodurre con le palle di slime.
                        Depongono uova sull'acqua dopo essersi accoppiate.
                        Crescono dai girini.
                        La variante dipende dalla temperatura del bioma in cui si trasforma da girino a rana.</p>
                    <h4>Girini</h4>
                    <p>Saltano come i pesci quando sono sulla terra ferma, ed eventualmente muoiono.
                        Diventano rane dopo 20 minuti nel mondo, che possono essere velocizzati usando le palle di slime.
                        Il tipo di rana dipende dalla temperatura in cui è cresciuto il girino.
                        Hanno 6 (♥♥♥) punti salute.
                        Vengono cacciati dagli axolotl.
                        Possono essere tenuti in un secchio d'acqua.</p>

                    <h2 id="Cambiamenti" class="Sezione jumptarget">Cambiamenti</h2>
                    <h3 id="Blocchi2" class="jumptarget">Blocchi</h3>
                    <h4>Alambicco</h4>
                    <p>La texture è stata leggermente cambiata per far sì che le braccia siano attaccate alla base.</p>
                    <h4>Sensore di sculk</h4>
                    <p>È stato riaggiunto all'inventario della creativa.
                        Può ora essere solo ottenuto con tocco di velluto, altrimenti rilascerà solo esperienza.</p>
                </div>
            </div>

            <?php 
            require ("../../data/Footer.php")
        ?>
        </div>
    </body>
</php>