<?php
    session_start();
    session_destroy();    
    if(basename($_SERVER['PHP_SELF']) == "users.php" || basename($_SERVER['PHP_SELF']) == "materie.php"){
        header("Location: /index.php");
    }else{
        if(basename($_SERVER['PHP_SELF']) != "logout.php"){
            header("Refresh:0");
        }
        header("Location: /index.php");
    }
?>
