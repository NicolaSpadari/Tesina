<!DOCTYPE html>
<html lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Tesina - Materie</title>
        
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
            <div class="center" style="padding-top: 1%">
                <a class="btn-floating waves-effect waves-light teal" type="button" onclick="$('.carousel').carousel('prev');"><i class="material-icons">arrow_back</i></a>
                <a class="btn-floating waves-effect waves-light teal" type="button" onclick="$('.carousel').carousel('next');"><i class="material-icons">arrow_forward</i></a>
            </div>
            <div class="carousel carousel-slider center">                
                <div class="carousel-item white black-text" href="#uno">
                    <h2>Informatica</h2>
                    <div class="divider"></div>
                    <?php include("common/materie/informatica.php"); ?>
                </div>
                <div class="carousel-item white black-text" href="#due">
                    <h2>TPSIT</h2>
                    <div class="divider"></div>
                    <?php include("common/materie/tpsit.php"); ?>
                </div>
                <div class="carousel-item white black-text" href="#tre">
                    <h2>Sistemi</h2>
                    <div class="divider"></div>
                    <?php include("common/materie/sistemi.php"); ?>
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
