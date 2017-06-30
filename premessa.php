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
                                <div id="premessa" class="icon-block">
                                    <p class="light center">
                                        Nella mia tesina ho deciso di proporre il tema delle fotocamere particolari spiegandone il funzionamento perché mi ha sempre interessato capire il meccanismo di questi speciali tipi di macchine fotografiche.<br><br>
					Nonostante non sia un esperto di fotografia e non abbia mai approfondito le tecniche per fare un buon scatto, ho comunque deciso di cimentarmi nello studio del funzionamento di base dietro a queste nuove e sorprendenti tecnologie.
					Per quanti diversi tipi ne esistano, ho ristretto la cerchia a quelle che reputavo più interessanti o comunque più utilizzate nell'uso "quotidiano".<br><br>
					In qualsiasi ambito le fotocamere sono diventate uno strumento quasi fondamentale che, per hobby o per lavoro, sono utilizzate per molteplici scopi in svariati settori, come ho illustrato nella pagina principale.<br>
					Per ogni fotocamera presentata ne ho descritto il principale ambito di utilizzo, il modo in cui essa opera e allegato immagini o video dimostrativi relativi alla spiegazione.
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
