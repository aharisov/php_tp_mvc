<?php

require_once("../classes/Voiture.php");

$immat = $_POST["immatriculation"];

if (isset($immat)) {

    $checkVoiture = Voiture::getVoitureByImmat($immat);

    if (!$checkVoiture) {
        $newVoiture = new Voiture("", "", $immat);
        $newVoiture->save();

        echo "<h3>La voiture a été sauvgarder</h3>";
    } else {
        echo "<h3>Voiture avec l'immatriculation $immat déjà existe</h3>";
    }
}