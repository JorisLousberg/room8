<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="STYLESHEET" href="css/mainstyle.css" type="text/css">
    <link rel="STYLESHEET" href="css/faq.css" type="text/css">
    
    <title>FAQ</title>
</head>
<body>
<?php include_once('includes/connection.faq.inc.php'); //connectie met DB maken
        include_once('includes/select.faq.inc.php'); ?>

    <div class="top">
        <div class="upper_left">
            <?php include_once 'includes/nav.inc.php'; ?> 
        </div>
        <div class="upper_right"></div>
    </div>

    <div class="middle">
        <div class="middle_left">border1</div>
        <div class="middle_main">
       
            <?php getqeust(1,1,$pdo);?>
            <?php getqeust(2,1,$pdo);?>
            <?php getqeust(1,2,$pdo);?>
            <?php getqeust(2,2,$pdo);?>
        
        </div>
        <div class="middle_right">border2</div>
    </div>
    <div class="bottom">
        <div class="lower_left"></div>
        <div class="lower_middle"></div>
        <div class="lower_right"></div>
    </div>
</body>
<script src="js/functions.faq.js"></script>
</html>
