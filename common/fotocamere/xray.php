<!DOCTYPE html>
<html lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Tesina - Raggi-X</title>
        
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
                        <img class="img-banner" src="/images/xray-banner.jpg">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="section">
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Cosa sono</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m12">
                                <div class="icon-block">
                                    <p class="light" style="text-align: center">
                                        I raggi X sono un tipo di luce con una lunghezza d'onda molto bassa che penetra la maggior parte dei tessuti.<br>
                                        A seconda dell'intensità vengono assorbiti dai materiali (ossa comprese) e possono essere poi registrati da una pellicola fotografica.<br>
                                        I raggi X hanno un potere di penetrazione molto elevato: solo spessori di centimetri di piombo o di decine di centimetri di calcestruzzo possono fermarli.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><div class="divider"></div><br><br>
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Scoperta</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m12">
                                <div class="icon-block">
                                    <p class="light" style="text-align: center">
                                        Nel 1892 Heinrich Hertz dimostrò che i raggi catodici potevano passare attraverso fogli di metallo molto sottile.
                                        Philip Lenard, uno studente di Hertz, continuò ad investigare, sviluppò una nuova versione del tubo catodico e studiò la penetrazione dei raggi X attraverso vari metalli,
                                        senza sapere che la radiazione che stava producendo era qualcosa di non ancora scoperto;<br>
                                        nel 1895 Röntgen, uno scienziato tedesco, iniziò a osservare i raggi X mentre sperimentava con i tubi a vuoto, uno dei quali era il modello avanzato costruito in precedenza da Lenard.<br>
                                        Röntgen scrisse un rapporto su "un nuovo tipo di raggi" che chiamò come "radiazione X" in quanto era ancora di tipo sconosciuto, ma rimase tale negli anni fino ad oggi.
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
                                                    <h5 class="card-title activator grey-text text-darken-4" style="text-align: center">Radiografia</h5>
                                                </div>
                                                <div class="card-image">
                                                    <img src="/images/xray-1.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <p class="card-title activator grey-text text-darken-4">
                                                        Esempio di una radiografia effettuata in ospedale.
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
                                                    <h5 class="card-title activator grey-text text-darken-4" style="text-align: center">Scanner</h5>
                                                </div>
                                                <div class="card-image">
                                                    <img src="/images/xray-2.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <p class="card-title activator grey-text text-darken-4">
                                                        Foto scattata da un macchinario degli aeroporti per il controllo dei bagagli.
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
                                                    <h5 class="card-title activator grey-text text-darken-4" style="text-align: center">Fotocamera</h5>
                                                </div>
                                                <div class="card-image">
                                                    <img src="/images/xray-3.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <p class="card-title activator grey-text text-darken-4">
                                                        Fotocamera portatile in grado di scattare foto a raggi X.
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
                        <h3 id="titolo" class="col s12 light center header">Funzionamento della fotocamera</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m8 offset-l2">
                                <div class="video-container">
                                    <iframe width="853" height="480" src="https://youtube.com/embed/pz6ns_U7Fno?start=7&end=20&vq=medium" frameborder="0"></iframe>
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
                                    <p class="light" style="text-align: center">
                                        Il catodo viene riscaldato da corrente ed inizia ad emettere elettroni; la nube di elettroni viene accelerata dall'alta tensione,<br>
                                        che proietta gli elettroni verso l'anodo dove colpiscono il disco metallico: nell'impatto l'energia si trasforma in calore (per il 99%) e in radiazione X (per l'1%).<br>
                                        Nei tubi moderni il disco metallico è rotante per evitare che colpendo sempre lo stesso punto danneggino l'elettrodo; inoltre ne migliora la nitidezza d'immagine e aiuta a disperdere il calore più velocemente.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><div class="divider"></div><br><br>
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Problemi</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m12">
                                <div class="icon-block">
                                    <p class="light" style="text-align: center">
                                        Le radiazioni utilizzate in radiologia ed in medicina nucleare sono potenzialmente nocive per qualsiasi organismo perchè hanno effetti negativi sulla materia biologica.<br>
                                        L'impiego dei raggi X prevede l'uso di basse dosi di radiazioni; a livelli bassi il rischio di danno non è legato alla dose utilizzata ma è alla probabilità.<br>
                                        Quindi l'esposizione a raggi X determina una probabilità del rischio di patologie, ma non è sempre verificato.
                                    </p>
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
