<?php
    function getNome($username)
    {
        require 'connect.php';
        connessione();
        global $connetti;        
        $result = mysqli_query($connetti, "SELECT Nome, Sesso FROM credenziali WHERE NomeUtente = '$username'");

        if($result === FALSE){ 
            die(mysql_error());
        }

        while($row = mysqli_fetch_array($result)){
            $nome = $row['Nome'];
            $sesso = $row['Sesso'];
        }
        mysqli_close($connetti);
        
        if($sesso == "M"){
            return "Benvenuto ".$nome;
        }else{
            return "Benvenuta ".$nome;
        }
    }
?>

<header>
    <nav>
        <div class="nav-wrapper">
            <a href="/index.php" class="brand-logo center"><?php echo "".getNome($_SESSION['usernameLog']); ?></a>
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
