<!DOCTYPE html>
<html lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Tesina - Plenottica</title>
        
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
                        <img class="img-banner" src="/images/plenoptic-banner.jpg">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="section">
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Cos'è la fotografia plenottica</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m12">
                                <div class="icon-block">
                                    <p class="light" style="text-align: center">
                                        La fotografia plenottica non cattura un solo flusso di luce, ma utilizza una matrice di microlenti per catturare la propagazione della luce nell'ambiente.<br>
                                        In questo modo il sensore non viene colpito da un solo fascio, ma viene “bombardato” da tanti fasci di luce provenienti da differenti prospettive.<br>
                                        Il prodotto finale non è un’immagine bidimensionale ma un campo luminoso in 4D. Andando ad agire in post-produzione su questo campo luminoso quadridimensionale si riusciranno ad apportare modifiche di ogni genere.
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
                                    <p class="light" style="text-align: center">
                                        Una fotocamera plenottica sfrutta il funzionamento del cosiddetto "light field", ovvero l'intero campo luminoso dove la luce si muove in ogni direzione in ciascun punto dello spazio.<br>
                                        Raccogliendo una quantità così sostanziosa di informazioni è in grado di generare un immagine in quattro dimensioni, che una volta inserita in un apposito software<br>
                                        sarà in grado di regolare la messa a fuoco su una fotografia già scattata.<br>
                                        L'unico difetto della fotocamera è la qualità: in quanto si tratta di una tecnologia ancora in fase di sviluppo, le foto hanno qualità di 1.2 megapixel.
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
                                                <div class="card-content">
                                                    <h5 class="card-title activator grey-text text-darken-4" style="text-align: center">La fotocamera</h5>
                                                </div>
                                                <div class="card-image">
                                                    <img src="/images/plenottica-1.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <p class="card-title activator grey-text text-darken-4">
                                                        Forma della fotocamera plenottica
                                                    </p>
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
                                                <div class="card-content">
                                                    <h5 class="card-title activator grey-text text-darken-4" style="text-align: center">Interno</h5>
                                                </div>
                                                <div class="card-image">
                                                    <img class="materialboxed" data-caption="La lente centrale è una matrice formata da microlenti" src="/images/plenottica-2.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <p class="card-title activator grey-text text-darken-4">
                                                        Struttura interna della fotocamera plenottica
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                <div class="card-content">
                                                    <h5 class="card-title activator grey-text text-darken-4" style="text-align: center">Foto plenottica fase 1</h5>
                                                </div>
                                                <div class="card-image">
                                                    <img src="/images/plenottica-3.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <p class="card-title activator grey-text text-darken-4">
                                                        Foto scattata e modificata con messa a fuoco lontana
                                                    </p>
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
                                                <div class="card-content">
                                                    <h5 class="card-title activator grey-text text-darken-4" style="text-align: center">Foto plenottica fase 2</h5>
                                                </div>
                                                <div class="card-image">
                                                    <img src="/images/plenottica-4.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <p class="card-title activator grey-text text-darken-4">
                                                        Foto scattata e modificata con messa a fuoco vicina
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
