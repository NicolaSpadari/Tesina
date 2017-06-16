<?php

function getNome($username) {
    require_once 'connect.php';
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
?>

<header>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
	    <div class="pc">
		<a href="/index.php" class="brand-logo"><?php echo "" . getNome($_SESSION['usernameLog']); ?></a>
	    </div>
	    <div class="phone">
		<a href="/index.php" class="brand-logo left" style="font-size: 1.1rem"><?php echo "" . getNome($_SESSION['usernameLog']); ?></a>
	    </div>
            <ul class="right">
                <div class="pc">
		    <li><a class="dropdown-button" data-beloworigin="true" href="#!" data-activates="area-utente">Area utente</a></li>
		</div>
		<div class="phone">
		    <li><a class="waves-effect waves-light" href="/users.php"><i class="material-icons">group</i></a></li>
		    <li><a class="waves-effect waves-light" href="/common/component/logout.php"><i class="material-icons">person_outline</i></a></li>
		</div>
            </ul>
        </div>
    </nav>
    <ul id="area-utente" class="dropdown-content">
        <li><a class="waves-effect waves-light" href="/users.php">Utenti</a></li>
        <li><a class="waves-effect waves-light" href="/common/component/logout.php">Logout</a></li>
    </ul>
</header>
