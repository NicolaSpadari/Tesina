<?php
    function getNome($username)
    {
        require 'connect.php';
        connessione();
        global $connetti;        
        $result = mysql_query("SELECT Nome FROM credenziali WHERE NomeUtente = '$username'");

        if($result === FALSE){ 
            die(mysql_error());
        }

        while($row = mysql_fetch_array($result)){
            $nome = $row['Nome'];
        }
        mysql_close($connetti);
        return $nome;
    }
?>

<header>
    <nav>
        <div class="nav-wrapper">
            <a href="/index.php" class="brand-logo center">Benvenuto <?php echo "".getNome($_SESSION['usernameLog']); ?></a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <form id="logout" class="col s12" name="modulo" action="#" method="post" style="margin-right: 1em">
                        <button class="btn waves-effect waves-light" type="submit" name="logout">Logout</button>
                    </form>
                    <?php
                        if(isset($_REQUEST["logout"])){
                            session_destroy();
                            echo "<meta http-equiv='refresh' content='0'>";
                        }
                    ?>
                </li>
            </ul>
        </div>
    </nav>
</header>
