<?php
    function connessione()
    {
        global $connetti;
        $dbHost = "localhost";
        $dbName = "tesina";
        $dbUser = "root";
        $dbPassw = "";

        $connetti = mysql_connect($dbHost, $dbUser, $dbPassw); 
        if(!$connetti){ 
            die('Connessione fallita: ' . mysql_error());               
        } 

        mysql_select_db($dbName, $connetti)
            or die("Impossibile selezionare il database");
    }
?>