<?php

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    require_once('Voiture.php');

    // 1er partie
    // récuperer des voitures avec un direct requête
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
    // récuperer des voitures avec la methode afficher() de la class Voiture
    $repNew = Model::$pdo->query('SELECT * FROM voiture');
    $repNew->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
    $tab_voit = $repNew->fetchAll();

    echo "<h3>Récuperer des voitures avec la methode afficher() de la class Voiture</h3>";

    foreach($tab_voit as $obj) {
        $obj->afficher();
    }

    // 3em partie
    // récuperer des voitures avec la methode getAllVoitures() de la class Voiture
    echo "<h3>Récuperer des voitures avec la methode getAllVoitures() de la class Voiture</h3>";

    Voiture::getAllVoitures();
