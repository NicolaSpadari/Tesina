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
                                        Una fotocamera ad alta velocità è un dispositivo in grado di esposizioni di immagine superiori a 1 / 1.000 o frame-rate superiori ai 250 fotogrammi al secondo. È utilizzato per la registrazione di oggetti in rapido movimento come immagine fotografica su di un supporto di memorizzazione. Dopo la registrazione, le immagini memorizzate sul supporto possono essere riprodotti in slow-motion.[92] Gli utilizzi di queste fotocamere sono in vari ambiti: sono spesso utilizzate in produzioni televisive di molti grandi eventi sportivi per il rallentatore instant replay; in ambito scientifico per catturare i movimenti degli animali ad alta velocità, oppure studi di biomeccanica di analisi del movimento. In amito industriale sono usate al fine di caratterizzare gli eventi che accadono troppo velocemente per vedere, ad esempio, cosa accade durante la produzione. In ambito militare sono usate per studiare lo scoppio di ordigni o per studiare il comportamento di vari sistemi di arma.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><div class="divider"></div><br><br>
                    <div class="row">
                        <h3 id="titolo" class="col s12 light center header">Differenze rispetto a una fotocamera standard</h3>
                    </div>
                    <div class="row">
                        <div class="row blocks">
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <h2 class="center light-blue-text"><i class="material-icons fotocamere">camera</i></h2>
                                    <h5 class="center">FAB</h5>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <div class="card">
                                                <div class="card-image">
                                                    <img src="/images/image.jpg">
                                                    <span class="card-title">Card Title</span>
                                                    <a class="btn-floating activator halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                                </div>
                                                <div class="card-content">
                                                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                                                </div>
                                                <div class="card-reveal">
                                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <h2 class="center light-blue-text"><i class="material-icons fotocamere">camera_alt</i></h2>
                                    <h5 class="center">Reveal</h5>
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="/images/image.jpg">
                                            <span class="card-title">Card Title</span>
                                            <a class="btn-floating activator halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                        </div>
                                        <div class="card-content">
                                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
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
