
<?php

require_once('controllers/homepage.php');
    

if (isset($_GET['action']) && $_GET['action'] !== '') {
    if ($_GET['action'] === 'a_propos') {
        require('templates/a_propos.php');
    }
}else{

    homepage();
}
