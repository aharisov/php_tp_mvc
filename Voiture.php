<?php

require_once('Model.php');

class Voiture {
    
    private $marque;
    private $couleur;
    private $immatriculation;

    // La syntaxe ... = NULL signifie que l'argument est optionel
    // Si un argument optionnel n'est pas fourni,
    // alors il prend la valeur par défaut, NULL dans notre cas
    public function __construct($m = NULL, $c = NULL, $i = NULL) {
        
        if (!is_null($m) && !is_null($c) && !is_null($i)) {
            // Si aucun de $m, $c et $i sont nuls,
            // c'est forcement qu'on les a fournis
            // donc on retombe sur le constructeur à 3 arguments
            $this->marque = $m;
            $this->couleur = $c;
            $this->immatriculation = $i;
        }
    }

    // la methode pour afficher des voitures
    public function afficher() {

        echo "<p>immatriculation - $this->immatriculation</p>";
        echo "<p>marque - $this->marque</p>";
        echo "<p>couleur - $this->couleur</p><hr>";
    }

    public static function getAllVoitures() {
        $rep = Model::$pdo->query('SELECT * FROM voiture');
        $rep->setFetchMode(PDO::FETCH_CLASS, __CLASS__);
        $tab_voit = $rep->fetchAll();

        foreach($tab_voit as $obj) {
            echo $obj->afficher();
        }
    }
}