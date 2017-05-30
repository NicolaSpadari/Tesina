<!DOCTYPE html>
<html lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Tesina - Aria</title>
        
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
                        <img class="img-banner" src="/images/air-banner.jpg">
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
                                        Inventato nel 1864, il metodo Schlieren (o strioscopia) è una tecnica che permette di vedere turbolenze prodotte nell'aria o in altri fluidi quando vengono compressi dal passaggio di un solido.<br>
                                        I fluidi compressi modificano la loro densità e quindi anche le proprietà ottiche (indice di rifrazione), ossia il modo in cui si lasciano attraversare dalla luce.<br>
                                        Anche una fonte di calore comporta delle modifiche alla densità del fluido in cui si trova (ad esempio l'aria), ed è per questo motivo che la superficie di oggetti molto caldi (come l'asfalto o la sabbia rovente) sembra deformarsi.<br>
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
                                        Il funzionamento del metodo consiste nel rimpicciolire in un'immagine tramite delle lenti la luce non deviata dal fluido, 
                                        cioè i raggi luminosi che arrivano all'occhio in modo continuo. Verranno invece messi in evidenza maggiormente i raggi deviati dal fluido che arriveranno alla fotocamera
                                        che hanno subito una variazione.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <h5 class="card-title activator grey-text text-darken-4" style="text-align: center">Gas</h5>
                                                </div>
                                                <div class="card-image">
                                                    <img src="/images/ombra-1.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <p class="card-title activator grey-text text-darken-4">
                                                        Foto strioscopica di una fuoriuscita di gas da una fornello.
                                                    </p>
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
                                                <div class="card-content">
                                                    <h5 class="card-title activator grey-text text-darken-4" style="text-align: center">Proiettile</h5>
                                                </div>
                                                <div class="card-image">
                                                    <img src="/images/ombra-2.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <p class="card-title activator grey-text text-darken-4">
                                                        Onda d'urto generata da una pallottola che viaggia a velocità supersonica sparata da un fucile.
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
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <h5 class="card-title activator grey-text text-darken-4" style="text-align: center">Respiro</h5>
                                                </div>
                                                <div class="card-image">
                                                    <img src="/images/ombra-3.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <p class="card-title activator grey-text text-darken-4">
                                                        Soffio di una persona registrato secondo la tecnica della strioscopia.
                                                    </p>
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
                                                <div class="card-content">
                                                    <h5 class="card-title activator grey-text text-darken-4" style="text-align: center">Onda d'urto</h5>
                                                </div>
                                                <div class="card-image">
                                                    <img src="/images/ombra-4.jpg">
                                                </div>
                                                <div class="card-content">
                                                    <p class="card-title activator grey-text text-darken-4">
                                                        Compressione dell'aria nell'ambiente dovuta all'accelerazione di un jet T-38 Talon.
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
                        <h3 id="titolo" class="col s12 light center header">Video con degli esempi</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m8 offset-l2">
                                <div class="video-container">
                                    <iframe width="853" height="480" src="https://youtube.com/embed/lSFwH0BVd3Q?start=39&end=54&vq=medium" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m8 offset-l2"></div>
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
