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
<?php include_once('includes/connection.faq.inc.php'); //connectie met DB maken
        include_once('includes/select.faq.inc.php'); ?>

    <div class="top">
        <div class="upper_left">
            <?php include_once 'includes/nav.inc.php'; ?> 
        </div>
        <div class="upper_right"> 
        <a id="NL-EN" href="home_en.php"><img id="NL-ENimg" src="images/ukflag.png"></a>
        <img src='images/AD_LOG.png' width='40' height='40' onclick="window.location='admin.login.php';">
        </div>
    </div>

    <div class="middle">
        <div class="middle_left"><div class="border" draggable= 'true'>border1</div></div>
        <div class="middle_main">
                <div class="instruction_txt3"><h1>Welkom op onze FAQ!</h1> Hier in onze faq kunt u vragen tegenkomen die vaker gesteld zijn. <br /> We hopen dat u hier de antwoorden vindt die u zoekt.<br /></div>
            <?php getqeust(1,1,$pdo);?>
            <?php getqeust(2,1,$pdo);?>
            <?php getqeust(3,1,$pdo);?>
            <?php getqeust(4,1,$pdo);?>
            <?php getqeust(5,1,$pdo);?>
            <?php getqeust(6,1,$pdo);?>
        
        </div>
        <div class="middle_right"><div class="border" draggable= 'true'>border2</div></div>
    </div>
    <div class="bottom">
        <div class="lower_left"></div>
        <div class="lower_middle">
            <footer>
                <h2>Melissa, Joris, Cedric, Nick © 2021</h2>
            </footer>
        </div>
        <div class="lower_right"></div>
    </div>
</body>
<script src="js/functions.faq.js"></script>
</html>
