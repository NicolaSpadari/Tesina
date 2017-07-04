<!DOCTYPE html>
<html lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Tesina - Notturna</title>

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
                        <img class="img-banner" src="/images/banner/night-banner.jpg">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="section">
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Doppio principio</h3>
                        <p class="center light">Le apparecchiature per la visione notturna sono realizzate seguendo due tipi di principi:</p>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <h2 class="center light-blue-text"><i class="material-icons fotocamere">camera_enhance</i></h2>
                                    <h5 class="center">Amplificando la luce</h5>
                                    <p class="light">
                                        Questi dispositivi integrano un intensificatore di luce (o amplificatore di luminosità), che rileva la scarsa luce dell'ambiente e la amplifica elettronicamente.<br>
                                        La visione si presenta così simile a quella che si presenterebbe di giorno; ma in ambienti eccessivamente bui l'immagine potrebbe non essere amplificabile.<br>
                                        Dei disturbi dell'immagine possono essere causati da una sovraesposizione della figura per troppa luce, rendendo la foto troppo bianca o irriconoscibile.
                                    </p>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <h2 class="center light-blue-text"><i class="material-icons fotocamere">linked_camera</i></h2>
                                    <h5 class="center">Rilevando la radiazione infrarossa</h5>
                                    <p class="light">
                                        A loro volta hanno due metodi di visualizzazione:<br><br>
					- <b>Sistemi infrarossi passivi</b>: Dotati di una termocamera, rilevano le radiazioni infrarosse che ogni oggetto emette in natura.
					Non c'è bisogno di una fonte di luce esterna proprio perchè sono gli oggetti a fornirla, mostrando grigi più chiari per oggetti più caldi rispetto all'ambiente.<br>
					- <b>Sistemi infrarossi attivi</b>: Illuminando l'ambiente con proiettori a raggi infrarossi invisibili ad occhio nudo, in modo che la termocamera mostri
					la luce riflessa dagli oggetti colpiti. Persone sprovviste di visori ad infrarossi continueranno a vedere l'ambiente buio.
                                    </p>
                                </div>
                            </div>
			</div>
			<br><br><div class="divider"></div><br><br>
			<div class="row">
			    <h3 id="titolo" class="col s12 light center header">Tipi di visualizzazione</h3>
			</div>
			<div class="row">
			    <div class="row blocks">
				<div class="col s12 m12">
				    <div class="icon-block">
					<p class="light center">
					    Esistono due modi di visualizzare le immagini: monocromatico e a "falsi colori".<br><br>
					    Tipico degli intensificatori, nel primo motodo le immagini appaiono spesso verdi perché gli schermi di questi dispositivi 
					    usano fosfori verdi, come nei vecchi monitor per vedere qualcosa elettronicamente.<br>
					    Nel secondo modo tipico delle termocamere che usano l'infrarosso passivo, l'immagine si presenta a colori che non corrispondono a quelli della normale percezione ottica,
					    ma che usano una scala di grigi e possono presentare zone che vanno dal giallo, per i corpi più caldi, e a scalare (arancio, rosso, blu) fino al nero, per i corpi più freddi.</p>
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
					<p class="light center">
					    I primi apparati risalgono alla fine della seconda guerra mondiale; erano dei tubi a vuoto che rendevano visibile la luce infrarossa ma non l'amplificavano, risultando efficaci ma contemporaneamente limitati.
					    Questi strumenti fornivano un campo visivo molto limitato: dimensioni, peso e consumo li rendevano scomodi e poco pratici.<br>
					    Inoltre necessitando di una fonte luminosa ad infrarossi, li rendevano localizzabili dai nemici.
					    Verso il 1970 viene sviluppata la tecnica basata sull'amplificazione delle fonti di luce dalle stelle e della luce riflessa dalla luna.
					    Oggi si sono evoluti fino a raggiungere dimensioni, pesi e consumi molto contenuti, e sono in commercio come cannocchiali e binocoli alimentati a batterie.<br>
					</p>
				    </div>
				</div>
			    </div>
			</div>
		    </div>
		</div>
		<br><br><div class="divider"></div><br><br>
		<div class="row">
		    <h3 id="titolo" class="col s12 light center header">Fotografie a confronto</h3>
		</div>
		<div class="row">
		    <div class="row blocks">
			<div class="col s12 m5 offset-l1">
			    <div class="icon-block">
				<div class="row">
				    <div class="col s12 m12">
					<div class="card">
					    <div class="card-image">
						<img src="/images/infrarossi.jpg">
					    </div>
					    <div class="card-content">
						<h5>Infrarossi</h5>
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
						<img src="/images/monocromatico.jpg">
					    </div>
					    <div class="card-content">
						<h5>Monocromatico</h5>
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
