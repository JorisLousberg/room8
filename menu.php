<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="STYLESHEET" href="css/mainstyle.css" type="text/css">
    <title>homepage</title>
</head>
<body>
<?php
       if(!isset($_SESSION)) 
       { 
           session_start(); 
       } 

       require_once("shoppingcart.inc.php");
       require_once('connection.inc.php'); //connection
       include('select.inc.php')
    ?>
    <div class="top">

<div class="top">
        <div class="upper_left">
            <?php include_once 'includes/nav.inc.php'; ?> 
        </div>
        <div class="upper_right"></div>
    </div>

    <div class="middle">
        <div class="middle_left">border1</div>
        <div class="middle_main"><br>
            <div class="menuheader">Broodjes / Wraps</div><br>
            <?php getmenu(1,1,$pdo);?><br>
            <div class="menuheader">Soep</div><br>
            <?php getmenu(2,1,$pdo);?><br>
            <div class="menuheader">Snacks</div><br>
            <?php getmenu(3,1,$pdo);?><br>
            <div class="menuheader">Snoep</div><br>
            <?php getmenu(4,1,$pdo);?><br>
            <div class="menuheader">Drank</div><br>
            <?php getmenu(5,1,$pdo);?><br>
        </div> 
        <div class="middle_right">border2</div>
    </div>

    <div class="bottom">
        <div class="lower_left"></div>
        <div class="lower_middle"></div>
        <div class="lower_right"></div>
    </div>


</body>
</html>
