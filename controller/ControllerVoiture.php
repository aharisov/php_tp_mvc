<?php
    require_once ('../model/ModelVoiture.php'); // chargement du modèle
    class ControllerVoiture {

        // récupère des voitures
        public static function readAll() {
            $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
            require ('../view/voiture/list.php');  //"redirige" vers la vue
        }

        // récupère une voiture
        public static function read($immat) {
            
            $v = ModelVoiture::getVoitureByImmat($immat);     

            if ($v) {
                require ('../view/voiture/detail.php');  
            } else {
                require ('../view/voiture/error.php');  
            }
            
        }
    }
?>