<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />         
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <title><?= $title ?></title>
    </head>
    <body>
        
        <div id="infoheader">
            <div class="infoheader social">
                
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-pinterest"></i> 
            </div>
            <div class="infoheader call">
                <i class="fa-solid fa-phone"></i>  
               <span>Appelez-nous au +237 6 9999999</span> 
            </div>
            <div class="infoheader mail">
                <i class="fa-solid fa-envelope"></i>
                lebonsamaritaire-immo@gmail.comdddddddd
            </div>
        </div>
        <div class="window">
            <div class="humberger-menu">
                <div id="logo">
                    <img src="images/black_logo1.png" alt="Logo Humberger nav" />
                </div>
                <nav class="nav-humberger-menu">
                    <?= $menu ?>
                </nav>
                <div class="humberger-menu-infoline">

                    <div class=" ">
                        <i class="fa-solid fa-phone"></i>  
                        <span>Appelez-nous au +237 6 9999999</span> 
                    </div>
                    <div class=" ">
                        <i class="fa-solid fa-envelope"></i>
                        lebonsamaritaire-immo@gmail.comddd
                    </div>
                </div>
                <div class="humberger-menu-social ">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-pinterest"></i>
                </div>
            </div>
            <div class="overlay"></div>
            <header>
                <div id="logo">
                    <img src="images/logo-3.png" alt="Logo" />
                </div>
                <nav class="header-menu">
                    <?= $menu ?>
                </nav>
                <div class="humberger-menu-wrapper">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </header>
            
            <?= $content ?>

            <footer>
                <div class="footer-container">
                    <div class="footer-logo">
                        <img src="images/black_logo1.png" alt="Footer Logo">
                        <div class="footer-social">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-pinterest"></i>
                        </div>
                    </div>
                    <div class="footer-contacts">
                        <h3> Contacts</h3> <hr>
                        <ul>
                            <li><i class="fa-solid fa-envelope"></i>lebonsamaritain-immo@gmail.comerrrrre</li>
                            <li><i class="fa-solid fa-phone"></i>+237 6 9999999</li>
                            <li><i class="fa-solid fa-location-dot"></i>camps sonel essos, Yaoundé, Cameroun</li>
                        </ul>
                    </div>
                    <div class="footer-links">
                        <h3>Liens utiles</h3> <hr>
                        <ul>
                            <li><a href="http://">A propos</a></li>
                            <li><a href="http://">Nos terrains</a></li>
                            <li><a href="http://">Services</a></li>
                            <li><a href="http://">Contactez-nous</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-copyright">
                    <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                    All rights reserved | Design & Website made by <a href="" >Nobius IT Company</a>
                    </p>
                </div>
            </footer>
        </div>
    </body>
    <script type="text/javascript" src="slideshow.js"></script>
    <script type="text/javascript" src="animation.js"></script>
</html>
