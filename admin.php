<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="STYLESHEET" href="css/mainstyle.css" type="text/css">
    <link rel="STYLESHEET" href="css/admin.css" type="text/css">
    <title>Admin login</title>
</head>
<body>
<div class="top">
        <div class="upper_left">
            <?php include_once 'includes/nav.inc.php'; ?> 
        </div>
        <div class="upper_right"></div>
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

</body>
</html>