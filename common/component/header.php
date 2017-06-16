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
	    $_SESSION['admin'] = $row['Admin'];
	}
    }
    if (!$loginStatus) {
	echo "<script> alert('Credenziali errate'); </script>";
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
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <div class="phone">
		<a href="/index.php" class="brand-logo left">Tesina</a>
	    </div>
	    <div class="pc">
		<a href="/index.php" class="brand-logo">Fotocamere particolari</a>
	    </div>
            <ul class="right">
		<div class="phone">
		    <li><a class="waves-effect waves-light" href="#form-login"><i class="material-icons">person</i></a></li>
		    <li><a class="waves-effect waves-light" href="#form-registrazione"><i class="material-icons">person_add</i></a></li>
		</div>
                <div class="pc">
		    <li><a class="dropdown-button" data-beloworigin="true" href="#!" data-activates="accedi">Accedi</a></li>
		    <?php
		    if (basename($_SERVER['PHP_SELF']) == "premessa.php") {
			echo "<li><a href='/index.php'>Home</a></li>";
		    } else {
			echo "<li><a href='/premessa.php'>Premessa</a></li>";
		    }
		    ?>
		</div>
            </ul>
        </div>
    </nav>
    <ul id="accedi" class="dropdown-content">
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
            <button class="btn-flat waves-effect waves-teal tooltipped" type="submit" name="invioLog" form="login" data-position="top" data-delay="15" data-tooltip="Sarai reindirizzato a breve">Login</button>
            <a href="#!" class="modal-action modal-close waves-effect waves-teal btn-flat">Chiudi</a>
        </div>
    </div>

    <?php
    if (isset($_REQUEST["invioLog"])) {
	require_once 'connect.php';
	connessione();
	if (login($_REQUEST["usernameLog"], md5($_REQUEST["passwordLog"]))) {
	    header("Refresh:0");
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
                                <option value="M" selected>Maschio</option>
                                <option value="F">Femmina</option>
                            </select>
                            <label>Sesso</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn-flat waves-effect waves-teal tooltipped" type="submit" name="invioReg" form="registrazione" data-position="top" data-delay="15" data-tooltip="Dovrai eseguire il login">Conferma</button>
            <a href="#!" class="modal-action modal-close waves-effect waves-teal btn-flat">Chiudi</a>
        </div>
    </div>

    <?php
    global $username;
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
