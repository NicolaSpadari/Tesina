<?php
    function login($username, $password)
    {
        global $connetti;        
        $result = mysql_query("SELECT * FROM credenziali");

        if($result === FALSE){ 
            die(mysql_error());
        }

        while($row = mysql_fetch_array($result)){
            if($row['NomeUtente'] == $username && $row['Password'] == $password){
                header("Refresh:0");
            }else{
                if($row['NomeUtente'] == $username && !($row['Password'] == $password)){
                    echo "Password errata";
                }else{
                    echo "L'utente non esiste nel database";
                }
                break;
            }
        }
        mysql_close($connetti);
    }
    
    function registrazione($username, $nome, $cognome, $email, $password)
    {
        global $connetti;
        $result = mysql_query("INSERT INTO credenziali(NomeUtente, Nome, Cognome, Email, Password, Sesso) VALUES('$username', '$nome', '$cognome', '$email', '$password')");

        if($result){
            echo "Registrazione avvenuta";
        }
        else{
            echo "Registrazione fallita";
        }
            
        mysql_close($connetti);
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
        <h4>Login  <i class="material-icons">account_box</i></h4>
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
            <button class="btn-flat waves-effect waves-teal" type="submit" name="invioLog" form="login">Login</button>
            <a href="#!" class="modal-action modal-close waves-effect waves-teal btn-flat">Chiudi</a>
      </div>
    </div>
    <?php
        if(isset($_REQUEST["invioLog"])){
            $_SESSION['usernameLog'] = $usernameLog = $_REQUEST["usernameLog"];
            $_SESSION['passwordLog'] = $passwordLog = $_REQUEST["passwordLog"];
            require 'connect.php';
            connessione();
            login($usernameLog, $passwordLog);
        }
    ?>
    
    <div id="form-registrazione" class="modal">
      <div class="modal-content">
        <h4>Registrati  <i class="material-icons">border_color</i></h4>
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
                    <div class="input-field col s12">
                        <input id="password" name="password" type="password" class="validate">
                        <label for="password">Password</label>
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
        if(isset($_REQUEST["invioReg"])){
            $_SESSION['nome'] = $nome = $_REQUEST["nome"];
            $_SESSION['cognome'] = $cognome = $_REQUEST["cognome"];
            $_SESSION['username'] = $username = $_REQUEST["username"];
            $_SESSION['email'] = $email = $_REQUEST["email"];
            $_SESSION['password'] = $password = $_REQUEST["password"];
            include("connect.php");
            connessione();
            registrazione($username, $nome, $cognome, $email, $password);
        }
    ?>
</header>
