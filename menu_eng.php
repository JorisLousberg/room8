<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="STYLESHEET" href="css/mainstyle.css" type="text/css">
    <link rel="STYLESHEET" href="css/select.menu.style.css" type="text/css">
    <title>Menu</title>
</head>
<body>
<?php
if (!isset($_SESSION))
{
    session_start();
}

       require_once('includes/connection.inc.php'); //connection
       include('includes/select.inc.en.php')
    ?>
    <div class="top">

<div class="top">
        <div class="upper_left">
            <?php include_once 'includes/nav.eng.inc.php'; ?> 
        </div>


        <div class="upper_right"> 
            <div class="transwrap"><a id="NL-EN" href="menu.php"><img id="NL-ENimg" src="images/nlflag.png"></a></div>
            <img src='images/AD_LOG.png' width='40' height='40' onclick="window.location='admin.login.php';">
        </div>

    </div>

    <div class="middle">
        <div class="middle_left"><div class="border" draggable= 'true'>border1</div></div>
        <div class="middle_main"><br>
            <div class="menuheader">Sandwiches / Wraps</div><br>
            <?php getmenu(1, 2, $pdo); ?><br>
            <div class="menuheader">Soup</div><br>
            <?php getmenu(2, 2, $pdo); ?><br>
            <div class="menuheader">Snacks</div><br>
            <?php getmenu(3, 2, $pdo); ?><br>
            <div class="menuheader">Sweets</div><br>
            <?php getmenu(4, 2, $pdo); ?><br>
            <div class="menuheader">Drinks</div><br>
            <?php getmenu(5, 2, $pdo); ?><br>
        </div> 
        <div class="middle_right"><div class="border" draggable= 'true'>border1</div></div>
    </div>

    <div class="bottom">
        <div class="lower_left"></div>
        <div class="lower_middle">
            <footer>
                <h2>Melissa, Joris, Cedric, Nick © 2021</h2>
            </footer></div>
        </div>
        <div class="lower_right"></div>
    </div>
    <div id="winkelmand" class= "shoppingcart">
       Cart
    </div>
    <script>
        document.getElementById('winkelmand').innerHTML = 'Dit wordt de winkelmand';
        document.getElementById('winkelmand').style.visibility = 'hidden';
    </script>

</body>
</html>
