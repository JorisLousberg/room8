<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="STYLESHEET" href="css/mainstyle.css" type="text/css">
    <link rel="STYLESHEET" href="css/admin.css" type="text/css">
    <title>Admin Login</title>
</head>
<body>
<div class="top">
        <div class="upper_left">
            <?php include_once 'includes/nav.inc.php'; ?> 
            <div class="menuknop"><a href="faq.form.php" class="menuknopp">FAQ FORM</a></div>
        </div>
        <div class="upper_right"> 
        <img src='images/AD_LOG.png' width='40' height='40' onclick="window.location='admin.login.php';">
        </div>
    
</div>
    <div class="middle">
        <div class="middle_left">border1</div>
        <div class="middle_main3">
            <div class="send">

        <?php 
            if(isset($_POST['frmInsertMenuitem'])) {
                //code voor verwerken formulier
                include_once("includes/insert.inc.php");
            } else {
                include_once("includes/form.inc.php"); 
            }
//            include_once("includes/connection.inc.php");
                       
        ?>
            </div>
        </div>
        <div class="middle_right">border2</div>
    </div>
    <div class="bottom">
        <div class="lower_left"></div>
        <div class="lower_middle"></div>
        <div class="lower_right"></div>
    </div>
        <footer>
            <h2>Melissa, Joris, Cedric, Nick © 2021</h2>
        </footer>

</body>
</html>