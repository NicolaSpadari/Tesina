<!DOCTYPE html>
<html lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Tesina - Fotocamera</title>
        
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
                        <img class="img-banner" src="/images/photo-banner.jpg">
                        <h2 class="text-banner">Fotocamere</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="section">
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Funzionamento della fotocamera</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m12">
                                <div class="icon-block">
                                    <p class="light" style="text-align: center">
                                        Le parti fondamentali per una fotocamera sono:<br>
                                        Una lente o degli specchi, che concentrano la luce e la proiettano sul piano di immagine; ciò costituisce l'obiettivo.<br>
                                        Un otturatore meccanico o elettronico che controlla la durata del tempo di esposizione della pellicola, lastra o sensore di cattura.<br>
                                        Il diaframma che controlla l'ingresso della luce.<br>
                                        La prima apertura ha dimensioni stabilite dal diaframma ed è controllata dall'otturatore, mentre la parte relativa alla registrazione dell'immagine è costituita da un sensore fotosensibile;<br>
                                        La pellicola e la lastra fotografica è usata nelle macchine fotografiche tradizionali, mentre il sensore digitale nelle fotocamere digitali.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><div class="divider"></div><br><br>
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Differenze di base</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <h2 class="center light-blue-text"><i class="material-icons fotocamere">camera</i></h2>
                                    <h5 class="center">Analogica</h5>
                                    <p class="light">
                                        - L'immagine attraverso l'obiettivo viene proiettata sulla pellicola<br>
                                        - La luce mette in atto delle trasformazioni chimiche, poi la pellicola viene sviluppata, cioè attraverso un prodotto chimico nelle le zone più illuminate dalla scena si accumulano più cristalli d'argento o pigmenti, mentre in quelle più buie, quelle dove la luce ha avuto minori effetti, i pigmenti o l'argento non si attaccano e vengono lavati via<br>
                                        - Alla fine si mette la pellicola in un ingranditore e con un processo identico ma inverso la pellicola viene impressa sulla carta e si ottiene la stampa.
                                    </p>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <h2 class="center light-blue-text"><i class="material-icons fotocamere">camera_alt</i></h2>
                                    <h5 class="center">Digitale</h5>
                                    <p class="light">
                                        - L'immagine viene proiettata su un sensore, composto da pixel affiancati sensibili ai tre colori blu, verde e rosso<br>
                                        - Tutta l'immagine viene trasformata in numeri, dove in ogni pixel viene registrato un numero corrispondente alla luminosità della luce del suo colore<br>
                                        - Appositi programmi su computer ritrasformano i numeri in un immagine visibile su schermo.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><div class="divider"></div><br><br>
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Cenni storici</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m12">
                                <div class="icon-block">
                                    <p class="light" style="text-align: center">
                                        Aristotele osservò che la luce, passando attraverso un piccolo foro, proiettava un'immagine circolare.<br>
                                        Nel 1515 Leonardo da Vinci, studiando la riflessione della luce sulle superfici sferiche, descrisse una camera oscura che chiamò "Oculus Artificialis" (occhio artificiale).<br>
                                        Un apparecchio simile usato per studiare l'eclissi solare del 1544 fu illustrato dallo scienziato olandese Rainer Geinma Frisius.<br>
                                        Gerolamo Cardano nel 1550 utilizzò una lente convessa per aumentare la luminosità dell'immagine, mentre Daniele Barbaro nel 1568 usò un'ottica di diametro inferiore a quello della lente per ridurre le aberrazioni, cioè la differenza tra l'immagine ottenuta dal sistema e quella reale che si vuole ottenere.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><div class="divider"></div><br><br>
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Esempi fotocamere</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="card">
                                                <div class="card-image">
                                                    <img src="/images/reflex-exploded.jpg">
                                                    <span class="card-title">Card Title</span>
                                                </div>
                                                <div class="card-content">
                                                    <p>Prova descrizione</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="card">
                                                <div class="card-image">
                                                    <img src="/images/digital-exploded.jpg">
                                                    <span class="card-title">Card Title</span>
                                                </div>
                                                <div class="card-content">
                                                    <p>Prova descrizione</p>
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
    </body>
    <?php include("../component/footer.html"); ?>
    <!--Script-->
    <script src="../../js/jquery.min.js" type="text/javascript"></script>
    <script src="../../js/materialize.min.js" type="text/javascript"></script>
    <script src="../../js/init.js" type="text/javascript"></script>
</html>
