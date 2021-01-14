<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="STYLESHEET" href="css/mainstyle.css" type="text/css">
    <link rel="STYLESHEET" href="css/faq.css" type="text/css">
    
    <title>FAQ</title>
</head>
<body>
<?php include_once ('includes/connection.faq.inc.php'); //connectie met DB maken
include_once ('includes/select.faq.inc.php'); ?>

    <div class="top">
        <div class="upper_left">
            
            <?php include_once 'includes/nav.eng.inc.php'; ?> 
        </div>
        <div class="upper_right">
            <div class="transwrap"><a id="NL-EN" href="faq.php"><img id="NL-ENimg" src="images/nlflag.png"></a></div> 
            <img src='images/AD_LOG.png' width='40' height='40' onclick="window.location='admin.login.php';">
        </div>
    </div>

    <div class="middle">
        <div class="middle_left"><div class="border" draggable= 'true'>border1</div></div>
        <div class="middle_main">
                <div class="instruction_txt3"><h1>Welcome to our FAQ!</h1> Here in our faq you can come across questions that have been asked more often. <br /> We hope that you will find your answers here.<br /></div>
            <?php getqeust(1, 2, $pdo); ?>
            <?php getqeust(2, 2, $pdo); ?>
            <?php getqeust(3, 2, $pdo); ?>
            <?php getqeust(4, 2, $pdo); ?>
            <?php getqeust(5, 2, $pdo); ?>
            <?php getqeust(6, 2, $pdo); ?>
        
        </div>
        <div class="middle_right"><div class="border" draggable= 'true'>border2</div></div>
    </div>
    <div class="bottom">
        <div class="lower_left"></div>
        <div class="lower_middle"></div>
        <div class="lower_right"></div>
    </div>
</body>
<script src="js/functions.faq.js"></script>
</html>
