<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="STYLESHEET" href="css/home.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <script src="js/home.js"></script>
    <title>Home - Vista Canteen</title>
    <link rel="icon" type="image/png" href="images/vistalogo.png">
</head>
<body>

        <!-- Background Image  -->
    <img id="bg" src="images/canteen.jpg">
        <!-- Vista Logo -->
        <img id="vistaLogo" src="images/vistalogo.png">

    <div>
            <!-- Top Section / Navbar  -->
        <section id="top">
            <div class="nav">
                <ul>
                    <a class="navbtn" href="menu_eng.php">Menu</a>
                    <a class="navbtn" href="contact_eng.php">Contact</a>
                    <a class="navbtn" href="FAQ_eng.php">FAQ</a><a id="admin-btn" href="admin.login.php"><img src="images/AD_LOG.png"></a>
                    <a id="NL-EN" href="index.php"><img id="NL-ENimg" src="images/nlflag.png"></a>
                    <div id="covid-text"> <!-- #covid-text = temporary id used in css -->
                        <h2>COVID-19</h2>
                        <p>
                            In connection with COVID-19 measures is the canteen of Vista College closed. Ordering is still a possibility. Updates happen on <a href="https://vistacollege.nl/nieuws/corona">the site of Vista College</a>.</a>
                        </p>
                    </div>
                </ul>
            </div>
        </section>

            <!-- Middle Section / Main text  -->
        <div class="middle">
            <div class="middle_main">
                <section id="main-text">
                    <h1>Welcome to our canteen!</h1>
                    <div>
                        <p>
                            Our canteen is meant for the students and teachers of Vista College. We are open from monday til friday in the Vista College building.
                            On this site you can watch our menu and order via our login system with you student number! Or without logging in if you prefer that.
                            <br><br>
                            You will find information like location, phone number etc. on <a href="contact_eng.php">Contact Page</a>.<br>
                            If you have any questions, you can contact us anytime. But we advice you to look first on <a href="FAQ_eng.php">Frequently Asked Questions</a> (FAQ) page. Maybe your question is in it!
                        </p>
                    </div>
                        <!-- Optional Text -->
                    
                </section>
                
                    <!-- 3 images  -->
                <section id="main-img">
                    <img src="images/main1.jpg">
                    <img src="images/main2.png">
                    <img src="images/main3.png">
                </section>

                    <!-- sticky note with copy function  -->
                <div id="sticknote">
                    <img id="sticknote-img" src="images/stickynote_en.png"> 
                        <!-- Image from https://fontmeme.com/sticky-notes/ -->
                    
                        <!-- change 'value' to change copy value -->
                    <input type="hidden" value="0612345678" id="copyText">
                    <img id="copy-img" onclick="copyPhoneEN()" src="images/copy.png">
                </div>
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
        </div>
    </div>
</body>
</html>
