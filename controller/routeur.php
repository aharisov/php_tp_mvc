<?php
    require_once 'ControllerVoiture.php';

    if (isset($_GET["action"])) {
        // On recupère l'action passée dans l'URL
        $action = $_GET["action"];
        
        switch ($_GET["action"]) {
            case "read":
                $immat = $_GET["immat"];
                break;
        }

        // Appel de la méthode statique $action de ControllerVoiture
        ControllerVoiture::$action($immat); 
    } else {
        echo "404 not found";
    }
    
?>