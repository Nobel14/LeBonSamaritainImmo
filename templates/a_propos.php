
<?php $title = "Accueil"; ?>

<?php ob_start(); ?>
    <ul>
        <li><a href="index.php?action=">Accueil</a></li>
        <li class="active" ><a href="index.php?action=a_propos">A propos</a></li>
        <li><a href="index.php?action=terrains">Nos terrains</a></li>
        <li><a href="index.php?action=services">Services</a></li>
        <li><a href="index.php?action=contactez_nous">Contactez-nous</a></li>
    </ul>
<?php $menu = ob_get_clean(); ?>


<?php ob_start(); ?>
<div class="header-title bg-color-a-propos">
            <img class="animate__zoom" src="images/culture2.PNG" alt="images des terrains">
            <div class="header-title-text animate__fadeInDown"> A propos</div>
            <div class="header-subtitle-text animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
        </div>
        <!-- The 'Notre Histoire' block -->
        <div class="block">
            <h2> Notre Histoire </h2> <hr>
            <div class="presentation">
                <div class="image-presentation reveal fade-left">
                    <img src="images/nous.jpg" alt="Le bon samaritain Immo" />
                </div>
                <div class="description-right-align reveal fade-right">
                    <!-- <h1>LE BON SAMARITAIN IMMO</h1> -->
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa placerat duis ultricies lacus sed turpis tincidunt id aliquet. Pellentesque elit eget gravida cum sociis natoque. Dolor morbi non arcu risus quis varius quam quisque. Velit sed ullamcorper morbi tincidunt ornare massa eget egestas. Elit at imperdiet dui accumsan sit. Aliquet enim tortor at auctor urna nunc id cursus. Vivamus at augue eget arcu dictum. Commodo elit at imperdiet dui accumsan sit amet. Dictum fusce ut placerat orci nulla pellentesque dignissim enim.                        
                    </p>
                </div>
            </div>
        </div>
        <!-- The 'Notre Vision' block -->
        <div class="presentation-container vision-container">
            <div class="block">
                <h2> Notre Vision </h2> <hr>
                <div class="presentation">
                    <div class="description-left-align reveal fade-left">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa placerat duis ultricies lacus sed turpis tincidunt id aliquet. Pellentesque elit eget gravida cum sociis natoque. Dolor morbi non arcu risus quis varius quam quisque. Velit sed ullamcorper morbi tincidunt ornare massa eget egestas. Elit at imperdiet dui accumsan sit. Aliquet enim tortor at auctor urna nunc id cursus. Vivamus at augue eget arcu dictum. Commodo elit at imperdiet dui accumsan sit amet. Dictum fusce ut placerat orci nulla pellentesque dignissim enim.                        
                        </p>
                    </div>
                    <div class="image-presentation reveal fade-right">
                        <img src="images/nous.jpg" alt="Le bon samaritain Immo" />
                    </div>
                </div>
            </div>
        </div>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>