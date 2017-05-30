<?php

function stampaUtenti() {
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/common/component/connect.php";
    include_once($path);
    connessione();
    global $connetti;
    $result = mysqli_query($connetti, "SELECT Nome, Cognome, NomeUtente FROM credenziali");

    if (!$result) {
        die(mysql_error());
    }

    if (mysqli_num_rows($result) > 0) {
        echo "<div class='row'>";
        echo "<h3 id='titolo' class='col s12 light center header'>Utenti registrati</h3>";
        echo "</div>";
        echo "<table class='centered'>";
        creaBordo();
        echo "<tbody>";
        while ($row = mysqli_fetch_array($result)) {
            creaRiga($row['Nome'], $row['Cognome'], $row['NomeUtente']);
        }
        echo "</tbody></table>";
    } else {
        echo "<div class='row'>";
        echo "<h3 id='titolo' class='col s12 light center header'>Nessun utente registrato</h3>";
        echo "</div>";
    }

    mysqli_close($connetti);
}

function creaBordo() {
    echo "<thead><tr><th>Nome</th> <th>Cognome</th> <th>Nome utente</th></tr></thead>";
}

function creaRiga($nome, $cognome, $username) {
    echo "<tr><td>$nome</td> <td>$cognome</td> <td>$username</td></tr>";
}
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Tesina - Utenti</title>

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
            <div class="container">
                <div class="section">
                    <div class="row">
                        <div class="col s12 m4 l2"></div>
                        <div class="col s12 m4 l8">
                            <?php
                            stampaUtenti();
                            ?>
                        </div>
                        <div class="col s12 m4 l2"></div>
                    </div>
                </div>
            </div>
        </main>
        <div id="btt" class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large teal lighten-2 waves-effect waves-light">
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