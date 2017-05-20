<?php
    function connessione()
    {
        global $connetti;
        $dbHost = "localhost";
        $dbName = "tesina";
        $dbUser = "root";
        $dbPass = "";

        $connetti = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName, "3306");
        if(!$connetti){ 
            die('Connessione fallita: ' . mysql_error());               
        } 

        mysqli_select_db($connetti, $dbName)
            or die("Impossibile selezionare il database");
    }
?>
