<?php
    require_once 'ControllerVoiture.php';

    if (isset($_GET["action"])) {
        // On recupère l'action passée dans l'URL
        $action = $_GET["action"];

        // Appel de la méthode statique $action de ControllerVoiture
        ControllerVoiture::$action(); 
    } else {
        echo "404 not found";
    }
    
?>