<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="STYLESHEET" href="css/home.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <script src="js/home.js"></script>
    <title>Home - Vista Kantine</title>
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
                    <a class="navbtn" href="menu.php">Menu</a>
                    <a class="navbtn" href="contact.php">Contact</a>
                    <a class="navbtn" href="FAQ.php">FAQ</a>
                    <a id="NL-EN" href="home_en.php"><img id="NL-ENimg" src="images/ukflag.png"></a>
                    <div id="covid-text"> <!-- #covid-text = temporary id used in css -->
                        <h2>COVID-19</h2>
                        <p>
                            In verband met de COVID-19 maatregelen is de kantine van het Vista College gesloten. Bestellen blijft een mogelijkheid. Updates verschijnen op <a href="https://vistacollege.nl/nieuws/corona">de site van het Vista College</a>.
                        </p>
                    </div>
                </ul>
                
            </div>
        </section>

            <!-- Middle Section / Main text  -->
        <div class="middle">
            <div class="middle_main">
                <section id="main-text">
                    <h1>Welkom bij onze kantine!</h1>
                    <div>
                        <p>
                            Onze kantine is bedoeld voor de leerlingen en docenten van het Vista College. We zijn van maandag tot vrijdag geopend in het gebouw van het Vista College.
                            Op deze site kun je ons menu bekijken, en bestellen door middel van ons inlogsysteem met je studentnummer! Of zonder in te loggen als u dat prettiger vind.
                            <br><br>
                            Informatie zoals locatie, telefoonnummer en dergelijke vind je op de <a href="contact.php">Contactpagina</a>.<br>
                            Als je vragen hebt kan je altijd contact met ons opnemen, maar we raden je ook aan om eerst te kijken op onze <a href="faq.php">Veelgestelde Vragen</a> (FAQ) pagina. Misschien staat jouw vraag er wel tussen!
                            
                        </p>
                    </div>
                        <!-- opt. Text -->
                    
                </section>
                
                    <!-- 3 images  -->
                <section id="main-img">
                    <img src="images/main1.jpg">
                    <img src="images/main2.png">
                    <img src="images/main3.png">
                </section>

                    <!-- sticky note with copy function  -->
                <div id="sticknote">
                    <img id="sticknote-img" src="images/stickynote.png"> 
                        <!-- Image from https://fontmeme.com/sticky-notes/ -->
                    
                        <!-- change 'value' to change copy value -->
                    <input type="hidden" value="0612345678" id="copyText">
                    <img id="copy-img" onclick="copyPhone()" src="images/copy.png">
                </div>
            </div>
            <!-- Footer -->
        <footer>
            <h2>--Footer--</h2>
        </footer>
    </div>
</body>
</html>