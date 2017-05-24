<!DOCTYPE html>
<html lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Tesina - Home</title>
        
        <!--CSS-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link rel="shortcut icon" type="image/png" sizes="16x16" href="images/favicon.png"/>
    </head>
    <?php
        session_start();
        if(isset($_SESSION['usernameLog'])){
            include("common/component/headerLog.php");
        }else{
            include("common/component/header.php");
        }
    ?>
    <body class="body-index">        
        <main>
            <div class="parallax-container">
                <div class="parallax"><img src="images/bg-photo.jpg"></div>
            </div>            
            <div class="section white">
                <div class="row container">
                    <h2 class="header" id="linea"><a href="common/fotocamere/fotocamera.php">Fotocamere</a></h2>
                    <p class="grey-text text-darken-3 lighten-3">
                        Le fotocamere e le videocamere oggi vengono usate in innumerevoli campi.<br>
                        C'è chi le utilizza per professione, chi per hobby, oppure per memorizzare ricordi facilmente accessibili con cellulari o tablet.
                    </p>
                </div>
            </div>            
            <div class="parallax-container">
                <div class="parallax"><img src="images/bg-night.jpg"></div>
            </div>
            <div class="section white">
                <div class="row container">
                    <h2 class="header"><a href="common/fotocamere/notturna.php">Visione notturna</a></h2>
                    <p class="grey-text text-darken-3 lighten-3">
                        Le fotocamere e videocamere ad a visione notturna permettono la visibilità in ambienti bui o poco luminosi.<br>
                        Vengono usate per l'individuazione di incendi, di dispersi, nel settore documentaristico, in ingegneria e nella sorveglianza.
                    </p>
                </div>
            </div>
            <div class="parallax-container">
                <div class="parallax"><img src="images/bg-highspeed.jpg"></div>
            </div><div class="section white">
                <div class="row container">
                    <h2 class="header"><a href="common/fotocamere/highspeed.php">Alta velocità</a></h2>
                    <p class="grey-text text-darken-3 lighten-3">
                        Le videocamere ad alta velocità sono molto utilizzate in eventi sportivi per il rallentatore instant replay.<br>
                        In ambito scientifico sono usate ad esempio per catturare i movimenti degli animali ad alta velocità, oppure<br>
                        in ambito industriale, per osservare eventi che accadono troppo velocemente per essere visti.<br>
                        In ambito militare sono usate per studiare lo scoppio di ordigni o per studiare il comportamento di varie armi.
                    </p>
                </div>
            </div>
            <div class="parallax-container">
                <div class="parallax"><img src="images/bg-thermal.jpg"></div>
            </div><div class="section white">
                <div class="row container">
                    <h2 class="header"><a href="common/fotocamere/termica.php">Termocamere</a></h2>
                    <p class="grey-text text-darken-3 lighten-3">
                        La termografia è utile nel mondo del restauro in quanto rileva l'umidità nelle murature e individua le superfici maggiormente a rischio.<br>
                        In campo industriale questo tipo di tecnologia previene i fermi macchina dei macchinari di produzione in caso di guasti, e nel campo dell'edilizia risulta utile<br>
                        per rilevare le dispersioni di calore che possono derivare da finestre o porte.
                    </p>
                </div>
            </div>
            <div class="parallax-container">
                <div class="parallax"><img src="images/bg-air.jpg"></div>
            </div><div class="section white">
                <div class="row container">
                    <h2 class="header"><a href="common/fotocamere/aria.php">Strioscopia</a></h2>
                    <p class="grey-text text-darken-3 lighten-3">
                        La tecnica dell'ombrografia viene usata in ingegneria aerospaziale per esaminare il flusso di missili e velivoli ad alta velocità,<br>
                        oltre che nelle ricerche sulla combustione, nella balistica e nelle esplosioni.<br>
                        Ombrigrafia e ombrogramma sono stati usati anche nell'animazione, per rafforzare il realismo del cartone animato (es. Walt Disney). 
                    </p>
                </div>
            </div>
            <div class="parallax-container">
                <div class="parallax"><img src="images/bg-xray.jpg"></div>
            </div><div class="section white">
                <div class="row container">
                    <h2 class="header"><a href="common/fotocamere/xray.php">Raggi X</a></h2>
                    <p class="grey-text text-darken-3 lighten-3">
                        I raggi X sono usati principalmente in ambito medico per le radiografie, per conoscere di che elementi è composto un materiale (spettrofotometria XRF),<br>
                        negli aeroporti per controllare i bagagli e per verificare la resistenza dei materiale sotto sforzo (spettroscopia XAS).<br>
                        Le ricerche puntano a visualizzare strutture molecolari sempre più piccole; in laboratorio si riesce già a raggiungere risoluzioni di 62 nanometri.
                    </p>
                </div>
            </div>
            <div class="parallax-container">
                <div class="parallax"><img src="images/bg-plenottica.jpg"></div>
            </div><div class="section white">
                <div class="row container">
                    <h2 class="header"><a href="common/fotocamere/plenottica.php">Plenottica</a></h2>
                    <p class="grey-text text-darken-3 lighten-3">
                        Non servirà attendere la giusta condizione di luce o cercare l’angolo o la prospettiva perfetta;<br>
                        non dobbiamo far altro che scattare, perché sarà possibile intervenire totalmente sulla foto in post-produzione.
                    </p>
                </div>
            </div>
            
            <div class="btn-center">
                <a href="principale.php" class="btn-large waves-effect waves-light goto-start">MATERIE</a>
            </div>
        </main>
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large teal waves-effect waves-light">
                <i class="material-icons">keyboard_arrow_up</i>
            </a>
        </div>
    </body>
    <?php include("common/component/footer.html"); ?>
    <!--Script-->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/materialize.min.js" type="text/javascript"></script>
    <script src="js/init.js" type="text/javascript"></script>
</html>
