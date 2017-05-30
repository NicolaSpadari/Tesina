<?php

function getNome($username) {
    require 'connect.php';
    connessione();
    global $connetti;
    $result = mysqli_query($connetti, "SELECT Nome, Sesso FROM credenziali WHERE NomeUtente = '$username'");

    if ($result === FALSE) {
        die(mysql_error());
    }

    while ($row = mysqli_fetch_array($result)) {
        $nome = $row['Nome'];
        $sesso = $row['Sesso'];
    }
    mysqli_close($connetti);

    if ($sesso == "M") {
        return "Benvenuto " . $nome;
    } else {
        return "Benvenuta " . $nome;
    }
}

function elimina($username){
    global $connetti;
    $result = mysqli_query($connetti, "DELETE FROM credenziali WHERE NomeUtente = '$username'");

    if ($result === FALSE) {
        echo "<script> alert('Eliminazione fallita'); </script>";
        die(mysql_error());
    }
    mysqli_close($connetti);
    session_destroy();
    header("Refresh:3");
}
?>

<header>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a href="/index.php" class="brand-logo"><?php echo "" . getNome($_SESSION['usernameLog']); ?></a>
            <ul class="right">
                <li><a class="dropdown-button" data-beloworigin="true" href="#!" data-activates="area-utente">Area utente</a></li>
            </ul>
        </div>
    </nav>
    <ul id="area-utente" class="dropdown-content">
        <li><a class="waves-effect waves-light" href="/common/component/logout.php">Logout</a></li>
        <li><a class="waves-effect waves-light" href="/users.php">Utenti</a></li>
        <li><a class="waves-effect waves-light" href="#popup-alert">Elimina<br>account</a></li>
    </ul>

    <div id="popup-alert" class="modal">
        <div class="modal-content">
            <h4>Eliminazione account  <i class="material-icons">error</i></h4>
            <p>
                Stai per eliminare il tuo account.<br>
                Questa procedura non può essere annullata.
            </p>
        </div>
        <div class="modal-footer">
            <form id="logout" class="col s12" name="modulo" action="#" method="post" style="margin-right: 1em">
                <button class="btn-flat waves-effect waves-red" type="submit" name="elimina-account" style="color: red">Elimina account</button>
            </form>
            <a href="#!" class="modal-action modal-close waves-effect waves-teal btn-flat">Chiudi</a>
        </div>
    </div>

    <?php
    global $username;
    if (isset($_REQUEST['elimina-account'])) {
        require_once 'connect.php';
        connessione();
        elimina($username);
    }
    ?>
</header>
