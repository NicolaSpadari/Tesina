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
                        <img class="img-banner" src="/images/banner/photo-banner.jpg">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="section">
		    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Un breve racconto sulle origini della fotocamera moderna</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m12">
                                <div class="icon-block">
                                    <p class="light center">
                                        Nel 1975 Steven Sasson, un ricercatore della Kodak, lavora ad un'invenzione rivoluzionaria: la prima fotocamera digitale.<br>
					Il suo prototipo iniziale aveva una risoluzione di 0,01 megapixel e catturò la prima immagine in bianco e nero in 23 secondi per registrare poi i dati su una cassetta.
					Ci vollero alcuni anni di studi e ricerche affinché la qualità dell'immagine divenisse accettabile.<br>
					La prima fotocamera digitale disponibile sul mercato risale al 1981, ed era la Sony Mavica FD5 con una risoluzione di 570 × 490 pixels.
				    </p>
                                </div>
                            </div>
                        </div>
                    </div>
		    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m5 offset-l1">
                                <div class="icon-block">
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="card">
                                                <div class="card-image">
                                                    <img src="/images/steven-sasson.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <h5>Steven Sasson</h5>
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
                                                    <img src="/images/sony-mavica.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <h5>Sony Mavica</h5>
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
                            <div class="col s12 m12">
                                <div class="icon-block">
                                    <p class="light">
                                        Le parti fondamentali per una fotocamera sono:<br><br>
                                        - Una lente( o degli specchi) che concentrano la luce e la proiettano sul piano di immagine: ciò costituisce l'obiettivo;<br>
                                        - Un otturatore meccanico o elettronico che controlla la durata del tempo di esposizione della pellicola, lastra o sensore di cattura;<br>
                                        - Il diaframma che controlla l'ingresso della luce.<br><br>
                                        La prima apertura ha dimensioni stabilite dal diaframma ed è controllata dall'otturatore, mentre la parte relativa alla registrazione dell'immagine è costituita da un sensore fotosensibile;<br>
                                        Pellicola e lastra fotografica sono usate nelle macchine fotografiche analogiche tradizionali, mentre il sensore digitale nelle fotocamere digitali.
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
                                        - L'immagine viene proiettata sulla pellicola attraverso l'obiettivo;<br>
                                        - La luce mette in atto delle trasformazioni chimiche, poi la pellicola viene sviluppata attraverso un prodotto chimico facendo accumulare nelle le zone più illuminate più pigmenti, 
					mentre in quelle più buie, quelle dove la luce ha avuto minori effetti, i pigmenti non si attaccano e vengono lavati via;<br>
                                        - La pellicola viene messa in un ingranditore e con un processo simile viene impressa sulla carta ottenendo la stampa.
                                    </p>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <h2 class="center light-blue-text"><i class="material-icons fotocamere">camera_alt</i></h2>
                                    <h5 class="center">Digitale</h5>
                                    <p class="light">
                                        - L'immagine viene proiettata su un sensore, composto da pixel sensibili ai tre colori: blu, verde e rosso;<br>
                                        - Tutta l'immagine viene trasformata in numeri, e in ogni pixel viene registrato un numero corrispondente alla luminosità della luce del suo colore;<br>
                                        - Appositi programmi su computer ritrasformano i numeri in un immagine visibile su schermo.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><div class="divider"></div><br><br>
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Componenti principali</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m12">
                                <div class="icon-block">
                                    <table class="highlight">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Descrizione</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Diaframma</td>
                                                <td>Meccanismo usato per regolare la quantità della luce che attraversa l'obiettivo</td>
                                            </tr>
                                            <tr>
                                                <td>Otturatore</td>
                                                <td>Dispositivo che controlla il tempo di esposizione alla luce per la pellicola o il sensore</td>
                                            </tr>
                                            <tr>
                                                <td>Supporto fotosensibile</td>
                                                <td>Pellicola o sensore esposto alla luce</td>
                                            </tr>
                                            <tr>
                                                <td>Dorso</td>
                                                <td>Elemento mobile che contiene la pellicola</td>
                                            </tr>
                                            <tr>
                                                <td>Pentaprisma</td>
                                                <td>Prisma a cinque facce che riflette l'immagine che guardiamo nell'obiettivo delle macchine fotografiche senza che risulti capovolta o invertita</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><div class="divider"></div><br><br>
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Componenti a confronto</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m5 offset-l1">
                                <div class="icon-block">
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="card">
                                                <div class="card-image">
                                                    <img src="/images/reflex-exploded.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <h5>Interno di una fotocamera analogica</h5>
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
                                                    <img src="/images/digital-exploded.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <h5>Interno di una fotocamera digitale</h5>
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
                        <h3 id="titolo" class="col s12 light center header">Dual camera</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m12">
                                <div class="icon-block">
                                    <p class="light center">
                                        Già oggi sono presenti in molti smartphone le doppie fotocamere: ma come funzionano esattamente?<br>
					Mentre con una singola fotocamera digitale tutti i colori recepiti vengono proiettati sul sensore, una doppia fotocamera lavora come la vista umana,
					catturando immagini tridimensionali dello spazio attorno (fotografia stereoscopica) ed elaborando i risultati in un'unica immagine dai dettagli
					molto più evidenti e ben definiti.<br>
					Solitamente una delle due fotocamere scatta in monocromatico (solo bianco e nero), e l'insieme delle due garantisce un miglior zoom.<br><br>
				    </p>
				    <p class='light'>
					I vantaggi delle doppie fotocamere sono:<br><br>
					- Miglior profondità di campo nelle foto;<br>
					- Messa a fuoco più rapida;<br>
					- Scelta della messa a fuoco dopo lo scatto;<br>
					- Qualità dell'immagine aumentata di molto.
				    </p>
                                </div>
                            </div>
                        </div>
                    </div>
		    <div class="row">
			<img class="materialboxed" width="500" src="/images/dual-camera.jpg" style="margin: 0 auto">
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
