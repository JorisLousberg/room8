<?php
    if ($_GET['username'] == 'Adriaan' and $_GET['psw'] == 'Bassie')
    {
        header("location: admin.php");
    }
    else
    {
        echo ("Thou shall not pass!");
    }
    
    ?>