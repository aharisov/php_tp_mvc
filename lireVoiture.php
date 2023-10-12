<?php

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    require_once('Model.php');

    $rep = Model::$pdo->query('SELECT * FROM voiture');

    $tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);

    //var_dump($tab_obj);

    foreach($tab_obj as $obj) {
        echo "<p>immatriculation - $obj->immatriculation</p>";
        echo "<p>marque - $obj->marque</p>";
        echo "<p>couleur - $obj->couleur</p><hr>";
    }