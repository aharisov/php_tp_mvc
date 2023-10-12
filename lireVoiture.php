<?php

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    require_once('Voiture.php');

    // 1er partie
    // récupérer des voitures avec un direct requête
    $rep = Model::$pdo->query('SELECT * FROM voiture');
    $tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);

    // afficher des voitures
    echo "<h3>Récuperer des voitures avec un direct requête</h3>";

    foreach($tab_obj as $obj) {
        echo "<p>immatriculation - $obj->immatriculation</p>";
        echo "<p>marque - $obj->marque</p>";
        echo "<p>couleur - $obj->couleur</p><hr>";
    }

    // 2em partie
    // récupérer des voitures avec la methode afficher() de la class Voiture
    $repNew = Model::$pdo->query('SELECT * FROM voiture');
    $repNew->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
    $tab_voit = $repNew->fetchAll();

    echo "<h3>Récuperer des voitures avec la methode afficher() de la class Voiture</h3>";

    foreach($tab_voit as $obj) {
        $obj->afficher();
    }

    // 3em partie
    // récupérer des voitures avec la methode getAllVoitures() de la class Voiture
    echo "<h3>Récuperer des voitures avec la methode getAllVoitures() de la class Voiture</h3>";

    Voiture::getAllVoitures();

    // Créér un objet pour test
    $newVoiture = new Voiture("BMW", "blanc", "SS111WW");
    $newVoiture->save();
    Voiture::getAllVoitures();