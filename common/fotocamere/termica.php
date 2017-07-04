<!DOCTYPE html>
<html lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Tesina - Termica</title>

        <!--CSS-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../../css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link rel="shortcut icon" type="image/png" sizes="16x16" href="../../images/favicon.png"/>
    </head>
    <?php
    session_start();
    if (isset($_SESSION['usernameLog'])) {
	include("../component/headerLog.php");
    } else {
	include("../component/header.php");
    }
    ?>
    <body class="body-index">
        <main>
            <div class="banner">
                <div class="wrapper-banner">
                    <div class="container-banner">
                        <img class="img-banner" src="/images/banner/termico-banner.jpg">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="section">
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Definizione</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m12">
                                <div class="icon-block">
                                    <p class="light center">
                                        La termocamera è una particolare telecamera capace di ottenere immagini o riprese termografiche tramite radiazione infrarossa.<br>
                                        A partire dalla radiazione rilevata si ottengono delle mappe di temperatura delle superfici, in grado di rilevare veriazioni di temperature anche minime.<br>
                                        Le termocamere principali si chiamano radiometriche, e consentono di misurare il valore di temperatura assoluto di ogni punto dell'immagine.<br>
                                        L'immagine è costruita su una matrice di un certo numero di pixel per un certo numero di righe;
                                        l'elettronica dello strumento legge velocemente il valore di energia immagazzinata da ogni singolo pixel e genera un'immagine, in bianco e nero o in falsi colori, dell'oggetto osservato.<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <br><br><div class="divider"></div><br><br>
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Funzionamento</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m12">
                                <div class="icon-block">
                                    <p class="light center">
                                        Le termocamere rilevano le radiazioni nel campo dell'infrarosso dello spettro elettromagnetico e compiono misure in base all'emissione di queste radiazioni.<br>
                                        Questo strumento è in rileva le temperature in base all'intensità di radiazione emessa; tutti gli oggetti ad una temperatura superiore allo zero assoluto emettono radiazioni nel campo dell'infrarosso.<br>
                                        La vera utilità sta nella visione immediata di possibili surriscaldamenti (ad esempio a macchinari), che consente di intervenire mentre sono in funzione e prima che si verifichino guasti.<br>
					Le caratteristiche che distinguono queste fotocamere sono:
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m6">
                                <div class="icon-block">
				    <h2 class="center light-blue-text"><i class="material-icons fotocamere">equalizer</i></h2>
                                    <h5 class="center">Campo spettrale</h5>
                                    <p class="light">
                                        Un campo ha uno di questi valori: VIR, SW, MW, LW, LXW.<br>
                                        Partendo da VIR (l'infrarosso vicino al visibile), si aumenta nella scala fino ad arrivare al XLW, che è un tipo di infrarosso
                                        a microonde usato per osservazioni astronomiche (a temperature bassissime).
                                    </p>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="icon-block">
				    <h2 class="center light-blue-text"><i class="material-icons fotocamere">surround_sound</i></h2>
                                    <h5 class="center">Tipo di sensore</h5>
                                    <p class="light">
                                        I sensori possono essere sia non raffreddati che raffreddati, con la differenza che quelli raffreddati, utilizzati in ricerca e sviluppo, 
                                        hanno sensibilità termica superiore rispetto a quelli non raffreddati.<br>
                                        Il materiale del sensore influenza la sensibilità termica; quelli più comuni sono in silicio amorfo o in ossido di vanadio.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m6">
                                <div class="icon-block">
				    <h2 class="center light-blue-text"><i class="material-icons fotocamere">grid_on</i></h2>
                                    <h5 class="center">Risoluzione geometrica</h5>
                                    <p class="light">
                                        Anche le termocamere hanno una risoluzione che influenza la qualità della foto. Esistono le seguenti risoluzioni:<br><br>
                                        - <u>4 x 4</u> pixel: svolgono la stessa funzione di un termometro a irraggiamento però ottico;<br>
                                        - Da <u>120x120 a 160x160</u> pixel: adatte a misure indicative nella manutenzione preventiva;<br>
                                        - Da <u>240x240 a 324x324</u> pixel: per manutenzione e la maggior parte delle applicazioni;<br>
                                        - Da <u>500x500 e superiori</u>: termocamere alta risoluzione.
                                    </p>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="icon-block">
				    <h2 class="center light-blue-text"><i class="material-icons fotocamere">graphic_eq</i></h2>
                                    <h5 class="center">Frequenza di acquisizione</h5>
                                    <p class="light">
                                        Se si cerca di misurare la temperatura di un oggetto in movimento (o di una ripresa mossa) e lo strumento non ha una frequenza di acquisizione sufficiente,
					si ha un fenomeno detto "smearing" che impedisce di avere una misura di temperatura accurata.<br><br>
                                        - Per analisi statiche è sufficiente una frequenza di 33Hz;<br>
                                        - Per analisi con brevi movimenti è necessaria una frequenza compresa tra 33 e 60Hz;<br>
                                        - Per analisi in movimento la frequenza minima deve essere di 60Hz, fino ad un massimo di 2KHz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><div class="divider"></div><br><br>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m5 offset-l1">
                                <div class="icon-block">
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="card">
                                                <div class="card-image">
                                                    <img src="/images/termica-1.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <h5>Termocamera nella foresta (bianco e nero)</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m5">
                                <div class="icon-block">
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="card">
                                                <div class="card-image">
                                                    <img src="/images/termica-2.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <h5>Temperature diverse sulle mani (colori)</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/common/component/top-button.html";
	include_once($path);
	?>
    </body>
    <?php include("../component/footer.html"); ?>
    <!--Script-->
    <script src="../../js/jquery.min.js" type="text/javascript"></script>
    <script src="../../js/materialize.min.js" type="text/javascript"></script>
    <script src="../../js/init.js" type="text/javascript"></script>
</html>
