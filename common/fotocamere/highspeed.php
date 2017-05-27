<!DOCTYPE html>
<html lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Tesina - Alta velocità</title>
        
        <!--CSS-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../../css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link rel="shortcut icon" type="image/png" sizes="16x16" href="../../images/favicon.png"/>
    </head>
    <?php
        session_start();
        if(isset($_SESSION['usernameLog'])){
            include("../component/headerLog.php");
        }else{
            include("../component/header.php");
        }
    ?>
    <body class="body-index">
        <main>
            <div class="banner">
                <div class="wrapper-banner">
                    <div class="container-banner">
                        <img class="img-banner" src="/images/speed-banner.jpg">
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
                                    <p class="light" style="text-align: center">
                                        È un dispositivo capace di eseguire scatti superiori ai 250 fotogrammi al secondo, ed è utilizzato per la registrazione di oggetti in rapidissimo movimento.<br>
                                        Dopo la registrazione le immagini memorizzate possono essere riprodotte in slow-motion.<br>
                                        Possiamo trovare tre diversi tipi di videocamere rapide:
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m4">
                                <div class="icon-block">
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <h5 class="card-title activator grey-text text-darken-4" style="text-align: center">Ad alta velocità</h5>
                                                </div>
                                                <div class="card-image">
                                                    <img src="/images/highspeed.jpg">
                                                </div>
                                                <div class="card-reveal">
                                                    <span class="card-title grey-text text-darken-4">Ad alta velocità<i class="material-icons right">close</i></span>
                                                    <p>
                                                        Lo slow-motion o rallentatore è un effetto generalmente cinematografico in cui un movimento è riprodotto a una velocità più lenta del normale.<br>
                                                        Ciò è possibile grazie all'alta frequenza di catturamento delle immagini da dispositivi come videocamere ad alta velocità.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="icon-block">
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <h5 class="card-title activator grey-text text-darken-4" style="text-align: center">Autovelox</h5>
                                                </div>
                                                <div class="card-image">
                                                    <img src="/images/autovelox.jpg">
                                                </div>
                                                <div class="card-reveal">
                                                    <span class="card-title grey-text text-darken-4">Autovelox<i class="material-icons right">close</i></span>
                                                    <p>
                                                        Gli autovelox servono di norma a controllare la velocità della circolazione del traffico.<br>
                                                        "Autovelox" è un nome di un singolo dispositivo creato da un'azienda, ma dato il suo uso così diffuso è diventato un vero e proprio nome
                                                        commerciale per ogni dispositivo che svolga questa funzione.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="icon-block">
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <h5 class="card-title activator grey-text text-darken-4" style="text-align: center">Rapatronic</h5>
                                                </div>
                                                <div class="card-image">
                                                    <img src="/images/rapatronic.jpg">
                                                </div>
                                                <div class="card-reveal">
                                                    <span class="card-title grey-text text-darken-4">Rapatronic<i class="material-icons right">close</i></span>
                                                    <p>
                                                        Una particolare fotocamera ad alta velocità è la fotocamera rapatronic (Rapid action electronic).<br>
                                                        È un modello molto particolare di fotocamera in grado di produrre immagini in un tempo di soli 10 nanosecondi.<br>
                                                        Il primo utilizzo di questa particolare fotocamera è stato studiare gli effetti delle esplosioni nucleari.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><div class="divider"></div><br><br>
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Femtofotografia</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m12">
                                <div class="icon-block">
                                    <p class="light" style="text-align: center">
                                        Esiste anche un altro tipo di videocamere ultrarapide: le femtocamere.<br>
                                        Femtofotografia è un termine riferito alla cattura di immagini ad altissima velocità,
                                        in grado di catturare luce in tratti così brevi che percorre soltanto 6 mm (pari a pochi picosecondi, o migliaia di femtosecondi).<br>
                                        Un femtosecondo equivale a 0,000 000 000 000 001 secondi (10<sup>-15</sup>).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><div class="divider"></div><br><br>
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Nascita dell'autovelox</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m12">
                                <div class="icon-block">
                                    <p class="light" style="text-align: center">
                                        Il primo modello di autovelox comparve nel 1957.<br>
                                        Nato come attrezzatura destinata alle forze dell'ordine, in particolare alla Polizia Stradale, il nome è divenuto un sinonimo di "misuratore di velocità dei veicoli".
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><div class="divider"></div><br><br>
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Tipi di autovelox</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <h2 class="center light-blue-text"><i class="material-icons fotocamere">settings_remote</i></h2>
                                    <h5 class="center">Fotocellula</h5>
                                    <p class="light">
                                        Gli autovelox sono dotati di due cellule:<br>
                                        il passaggio della testa di un veicolo attraverso il fascio della prima cellula fà partire un timer interrompendo il fascio,<br>
                                        mentre il passaggio attraverso il secondo fascio blocca il timer ottenendo un intervallo di tempi.<br>
                                        La velocità è calcolata in funzione del tempo impiegato ad attraversare i due fasci, una volta conosciuta la distanza tra le due cellule, con la formula<br>
                                        V = S/T
                                    </p>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <h2 class="center light-blue-text"><i class="material-icons fotocamere">blur_linear</i></h2>
                                    <h5 class="center">Laser</h5>
                                    <p class="light">
                                        Per questo funzionamento viene utilizzato un fascio laser ad alta frequenza emesso da un "telelaser",
                                        e un sensore ottico integrato rileva il segnale riflettuto dalla carrozzeria del veicolo.<br>
                                        Tale sistema riesce a garantire un rilevamento fino a 320 km/h.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <h2 class="center light-blue-text"><i class="material-icons fotocamere">videocam</i></h2>
                                    <h5 class="center">Video</h5>
                                    <p class="light">
                                        Un'altra tipologia di velocimetri è quella che elabora le immagini di una telecamera per calcolare la velocità dei veicoli.<br>
                                        I primi sistemi che utilizzano questa tecnica si trovano a bordo delle auto della Polizia Stradale;
                                        l'apparecchio rileva la velocità relativa dei veicoli davanti alla pattuglia e la confronta con i dati del tachimetro a bordo, ricavando la velocità effettiva.
                                    </p>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <h2 class="center light-blue-text"><i class="material-icons fotocamere">track_changes</i></h2>
                                    <h5 class="center">Radar</h5>
                                    <p class="light">
                                        Il radar effettua la misurazione della velocità valutando l'eco di un segnale radar emesso su determinate frequenze.<br>
                                        Si tratta di un dispositivo basato sugli stessi principi dei radar aerei; in Italia furono i primi a essere installati, ma sono stati definitivamente sostituiti dagli Autovelox.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div id="btt" class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large grey lighten-2 waves-effect waves-light">
                <i class="material-icons">keyboard_arrow_up</i>
            </a>
        </div>
    </body>
    <?php include("../component/footer.html"); ?>
    <!--Script-->
    <script src="../../js/jquery.min.js" type="text/javascript"></script>
    <script src="../../js/materialize.min.js" type="text/javascript"></script>
    <script src="../../js/init.js" type="text/javascript"></script>
</html>
