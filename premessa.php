<!DOCTYPE html>
<html lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Tesina - Premessa</title>
        
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
	    <div class="container">
                <div class="section">
                    <div class="row">
			<div class="row blocks">
                            <div class="col s12 m12">
                                <div class="icon-block">
                                    <p class="light" style="text-align: center">
                                        Ho deciso di proporre il tema delle fotocamere particolari perché mi ha sempre interessato capire il funzionamento di questi speciali tipi di macchine fotografiche.<br>
					Anche se non sono un esperto di fotografia e non mi sono mai cimentato nel capire a fondo le tecniche per fare un buon scatto, ho comunque pensato di capire almeno in parte il funzionamento di base dietro a queste nuove e sorprendenti tecnologie.
					In qualsiasi ambito la fotografia è diventata uno strumento quasi fondamentale, che sia per hobby o per lavoro, in molti settori le fotocamere sono utilizzate per diversi scopi, come ho illustrato nella pagina principale.
				    </p>
                                </div>
                            </div>
                        </div>
		    </div>
		</div>
	    </div>
        </main>
    </body>
    <?php include("common/component/footer.html"); ?>
    <!--Script-->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/materialize.min.js" type="text/javascript"></script>
    <script src="js/init.js" type="text/javascript"></script>
</html>
