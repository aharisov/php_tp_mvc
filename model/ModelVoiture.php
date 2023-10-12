<?php

require_once('Model.php');

class ModelVoiture {
    
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

    // getter pour récupérer l'immatriculation
    public function getImmatriculation() {
        
        return $this->immatriculation;
    }
    public function getMarque() {
        
        return $this->marque;
    }
    public function getCouleur() {
        
        return $this->couleur;
    }

    // la methode pour afficher des voitures
    /*
    public function afficher() {

        echo "<p>immatriculation - $this->immatriculation</p>";
        echo "<p>marque - $this->marque</p>";
        echo "<p>couleur - $this->couleur</p><hr>";
    }*/

    // la methode affiche toutes les voitures
    public static function getAllVoitures() {
        $rep = Model::$pdo->query('SELECT * FROM voiture');
        $rep->setFetchMode(PDO::FETCH_CLASS, __CLASS__);
        $tab_voit = $rep->fetchAll();

        // foreach($tab_voit as $obj) {
        //     echo $obj->afficher();
        // }

        return $tab_voit;
    }

    // la methode récupère une voiture par immatriculation
    public static function getVoitureByImmat($immat) {

        $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
        // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);
    
        $values = array(
            "nom_tag" => $immat,
            //nomdutag => valeur, ...
        );
        // On donne les valeurs et on exécute la requête	 
        $req_prep->execute($values);
    
        // On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, __CLASS__);
        $tab_voit = $req_prep->fetchAll();

        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_voit))
            return false;

        return $tab_voit[0];
    }

    public function save() {
        $sql = "INSERT INTO voiture (marque, couleur, immatriculation) VALUES (:marque, :couleur, :immat)";
        $req_prep = Model::$pdo->prepare($sql);

        $values = array(
            "marque" => $this->marque,
            "couleur" => $this->couleur,
            "immat" => $this->immatriculation
        );

        try {
            $req_prep->execute($values);
        } catch (PDOException $e) {
            $errCode = $e->getCode();

            if ($errCode == 23000) {
                return false;
            }
        };
        
    }
}