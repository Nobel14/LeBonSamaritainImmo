
<?php $title = "A propos"; ?>

<?php ob_start(); ?>
    <ul>
        <li class="active" ><a href="index.php?action=">Accueil</a></li>
        <li><a href="index.php?action=a_propos">A propos</a></li>
        <li><a href="index.php?action=terrains">Nos terrains</a></li>
        <li><a href="index.php?action=services">Services</a></li>
        <li><a href="index.php?action=contactez_nous">Contactez-nous</a></li>
    </ul>
<?php $menu = ob_get_clean(); ?>


<?php ob_start(); ?>
    <!-- Slideshow container -->
    <div class="slideshow">
        <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/panorama1.jpg" >
                <div class="text">Caption Text</div>
            </div>
        
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/panorama2.jpg">
                <div class="text">Caption Two</div>
            </div>
            
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/panorama3.jpg">
                <div class="text">Caption Three</div>
            </div>
            
            <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
        </div>
        <br>
        
        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <!-- The text over the images -->
        <div class="slide-text slide-text1 animate__fadeInDown"><h1>LE BON SAMARITAIN IMMO</h1> </div>
        <div class="slide-text slide-text2 animate__fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
        <div class="slide-text slide-text3 animate__fadeInUp"> <a class="button slide-button btn-gradient" href="http://"> Voir les terrains</a></div>
    </div> 
    
    <!-- The 'Qui sommes nous ?' block -->
    <div class="block reveal fade-bottom">
        <h2> Qui sommes nous ? </h2> <hr>
        <div class="presentation">
            <div class="image-presentation reveal fade-left">
                <img src="images/empreint-bleu.PNG" alt="Le bon samaritain Immo" />
            </div>
            <div class="description-right-align reveal fade-right">
                <h1>LE BON SAMARITAIN IMMO</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            <div class="button-container">
                <a class="button read-more" href="http://"> Lire plus <i class="fa-solid fa-angle-right animated-arrow"></i><i class="fa-solid fa-angle-right unanimated-arrow"></i><i class="fa-solid fa-angle-right unanimated-arrow"></i></a>
            </div> 
            </div>
        </div>
    </div>

    <!-- The 'NEWSLETTER' block -->
    <div class="reveal newsletter fade-right">
        <h2 class="reveal fade-bottom">NEWSLETTER</h2> <hr class="reveal fade-bottom">
        <h3 class="reveal fade-bottom">Suivre l'actualité et être informé de nouvelles offres interressantes</h3>
        <form action="" method="get" class="reveal fade-left">
            <div class="form-group">
                <label id="label-name">
                    <input type="text" id="name" placeholder=" "/>
                    <div class="label-text">Nom</div>
                </label>
                <label id="label-email">
                    <input type="email" id="email" placeholder=" "/>
                    <div class="label-text">Email</div>
                </label>
            </div>
            <button class="btn-skew" type="submit">Soumettre</button>
        </form>
    </div>

    <!-- The 'Nos services ?' block -->
    <div class="block services reveal fade-bottom">
        <h2> Nos services ? </h2> <hr>
        <div class="tag_list">
            <div class="tag reveal fade-left">
                <i class="fa-regular fa-money-bill-1"></i>
                <p>
                    Vente de terrain 
                </p>
            </div>
            <div class="tag reveal fade-bottom">
                <i class="fa-solid fa-person-shelter"></i>
                <p>
                    Location de terrain
                </p>
            </div>
            <div class="tag reveal fade-right">
                <i class="fa-regular fa-handshake"></i>
                <p>
                    Gestion de patrimoine
                </p>
            </div>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>