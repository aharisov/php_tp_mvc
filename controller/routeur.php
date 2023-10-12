<?php
    require_once 'ControllerVoiture.php';

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    if (isset($_GET["action"])) {
        // On recupère l'action passée dans l'URL
        $action = $_GET["action"];
        
        switch ($_GET["action"]) {
            case "read":
                $immat = $_GET["immat"];
                ControllerVoiture::$action($immat);
                break; 
            case "created":
                $data = [
                    "marque" => $_GET["marque"],
                    "couleur" => $_GET["couleur"],
                    "immatriculation" => $_GET["immatriculation"]
                ];
                ControllerVoiture::$action($data); 
                break;
            default:
                // Appel de la méthode statique $action de ControllerVoiture
                ControllerVoiture::$action();     
                break;
        }

    } else {
        echo "404 not found";
    }
    
?>