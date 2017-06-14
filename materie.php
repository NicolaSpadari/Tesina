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
    if (isset($_SESSION['usernameLog'])) {
        include("common/component/headerLog.php");
    } else {
        include("common/component/header.php");
    }
    ?>
    <body class="body-index">
        <main>
            <div class="row">
                <div class="col s12" style="padding: 0">
                    <ul class="tabs tabs-fixed-width z-depth-1">
                        <li class="tab col s3"><a id="materia" class="active" href="#informatica">Informatica</a></li>
                        <li class="tab col s3"><a id="materia" href="#inglese">Inglese</a></li>
                        <li class="tab col s3"><a id="materia" href="#tpsit">Tpsit</a></li>
                        <li class="tab col s3"><a id="materia" href="#sistemi">Sistemi</a></li>
                    </ul>
                </div>
            </div>
            <div id="informatica" class="col s12">
                <?php
                    $path = $_SERVER['DOCUMENT_ROOT'];
                    $path .= "/common/materie/informatica.php";
                    include_once($path);
                ?>
            </div>
            <div id="inglese" class="col s12">
                <?php
                    $path = $_SERVER['DOCUMENT_ROOT'];
                    $path .= "/common/materie/inglese.php";
                    include_once($path);
                ?>
            </div>
            <div id="tpsit" class="col s12">
                <?php
                    $path = $_SERVER['DOCUMENT_ROOT'];
                    $path .= "/common/materie/tpsit.php";
                    include_once($path);
                ?>
            </div>
            <div id="sistemi" class="col s12">
                <?php
                    $path = $_SERVER['DOCUMENT_ROOT'];
                    $path .= "/common/materie/sistemi.php";
                    include_once($path);
                ?>
            </div>
        </main>
    </body>
    <?php include("common/component/footer.html"); ?>
    <!--Script-->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/materialize.min.js" type="text/javascript"></script>
    <script src="js/init.js" type="text/javascript"></script>
</html>
