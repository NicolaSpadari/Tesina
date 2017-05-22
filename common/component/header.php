<?php

function login($username, $password) {
    global $connetti;
    $result = mysqli_query($connetti, "SELECT * FROM credenziali");

    if ($result === FALSE) {
        die(mysql_error());
    }

    $loginStatus = false;
    while ($row = mysqli_fetch_array($result)) {
        if ($row['NomeUtente'] == $username && $row['Password'] == $password) {
            $loginStatus = true;
            $_SESSION['usernameLog'] = $username;
            $_SESSION['passwordLog'] = $password;
        }
    }
    if (!$loginStatus) {
        echo '<script type="text/javascript">',
             'warn();',
             '</script>';
    }

    mysqli_close($connetti);
    return $loginStatus;
}

function registrazione($username, $nome, $cognome, $email, $password, $sesso) {
    global $connetti;
    $result = mysqli_query($connetti, "INSERT INTO credenziali(NomeUtente, Nome, Cognome, Email, Password, Sesso) VALUES('$username', '$nome', '$cognome', '$email', '$password', '$sesso')");

    if (!$result) {
        echo "Registrazione fallita";
    }

    mysqli_close($connetti);
}
?>

<header>
    <nav>
        <div class="nav-wrapper">
            <a href="/index.php" class="brand-logo center">TESINA</a>
            <ul class="right hide-on-med-and-down">
                <li><a class="dropdown-button" href="#!" data-activates="area-utente">Area utente<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </nav>
    <ul id="area-utente" class="dropdown-content">
        <li><a class="waves-effect waves-light" href="#form-login">Login</a></li>
        <li><a class="waves-effect waves-light" href="#form-registrazione">Registrati</a></li>
    </ul>

    <div id="form-login" class="modal">
        <div class="modal-content">
            <h4>Login  <i class="material-icons">person</i></h4>
            <div class="row">
                <form id="login" class="col s12" name="modulo" action="#" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="username" name="usernameLog" type="text" class="validate">
                            <label for="username">Nome utente</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="password" name="passwordLog" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a class="modal-action modal-close btn-flat waves-effect waves-teal" type="submit" name="invioLog" form="login" href="#popup-login">Login</a>
            <a href="#!" class="modal-action modal-close waves-effect waves-teal btn-flat">Chiudi</a>
        </div>
    </div>

    <div id="popup-login" class="modal">
        <div class="modal-content">
            <h4>Login in corso  <i class="material-icons">person_outline</i></h4>
            <p>Verrai reindirizzato a breve, attendi.</p>
            <div class="preloader-wrapper active" style="display: block; margin: 0 auto">
                <div class="spinner-layer spinner-blue-only">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_REQUEST["invioLog"])) {
        require 'connect.php';
        connessione();
        if (login($_REQUEST["usernameLog"], md5($_REQUEST["passwordLog"]))) {
            header("Refresh:3");
        }
    }
    ?>

    <div id="form-registrazione" class="modal">
        <div class="modal-content">
            <h4>Registrati  <i class="material-icons">person_add</i></h4>
            <div class="row">
                <form id="registrazione" class="col s12" name="modulo" action="#" method="post">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="first_name" name="nome" type="text" class="validate">
                            <label for="first_name">Nome</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="last_name" name="cognome" type="text" class="validate">
                            <label for="last_name">Cognome</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="username" name="username" type="text" class="validate">
                            <label for="username">Nome utente</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" name="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s9">
                            <input id="password" name="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field col s3">
                            <select name="sesso">
                                <option value="" disabled selected>Seleziona il tuo sesso</option>
                                <option value="M">Maschio</option>
                                <option value="F">Femmina</option>
                            </select>
                            <label>Sesso</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn-flat waves-effect waves-teal" type="submit" name="invioReg" form="registrazione">Conferma</button>
            <a href="#!" class="modal-action modal-close waves-effect waves-teal btn-flat">Chiudi</a>
        </div>
    </div>
    <?php
    if (isset($_REQUEST["invioReg"])) {
        $_SESSION['nome'] = $nome = $_REQUEST["nome"];
        $_SESSION['cognome'] = $cognome = $_REQUEST["cognome"];
        $_SESSION['username'] = $username = $_REQUEST["username"];
        $_SESSION['email'] = $email = $_REQUEST["email"];
        $_SESSION['password'] = $password = md5($_REQUEST["password"]);
        $_SESSION['sesso'] = $sesso = $_REQUEST["sesso"];
        include("connect.php");
        connessione();
        registrazione($username, $nome, $cognome, $email, $password, $sesso);
    }
    ?>
</header>
