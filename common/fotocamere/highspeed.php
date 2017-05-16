<!DOCTYPE html>
<html lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Tesina - Alta velocità</title>
        
        <!--CSS-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../../css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="../../css/material-scrolltop.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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
                        <h2 class="text-banner">Alta velocità</h2>
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
                                                        Gli autovelox sono dotati di due cellule:<br>
                                                        il passaggio della testa di un veicolo attraverso il fascio della prima cellula fà partire un timer interrompendo il fascio,<br>
                                                        mentre il passaggio attraverso il secondo fascio blocca il timer ottenendo un intervallo di tempi.<br>
                                                        La velocità è calcolata in funzione del tempo impiegato ad attraversare i due fasci, una volta conosciuta la distanza tra le due cellule, con la formula<br>
                                                        V = S/T
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
                                                        Il primo utilizzo di questa particolare fotocamera è stato per studiare gli effetti delle esplosioni nucleari.
                                                    </p>
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
        <button class="material-scrolltop" type="button"></button>
    </body>
    <?php include("../component/footer.html"); ?>
    <!--Script-->
    <script src="../../js/jquery.min.js" type="text/javascript"></script>
    <script src="../../js/materialize.min.js" type="text/javascript"></script>
    <script src="../../js/material-scrolltop.js" type="text/javascript"></script>
    <script src="../../js/init.js" type="text/javascript"></script>
</html>
