<?php
class Conf {
   
    static private $databases = array(

        // serveur 
        'hostname' => 'localhost',

        // Nom de la bdd
        'database' => 'php_tp_mvc',

        // Utilisateur ('root' par défault)
        'login' => 'admin',

        // Mot de passe
        'password' => 'hhjB1CrOK21n'
    );

    static public function getLogin() {

        return self::$databases['login'];
    }

    static public function getHostname() {

        return self::$databases['hostname'];
    }

    static public function getDatabase() {

        return self::$databases['database'];    
    }

    static public function getPassword() {

        return self::$databases['password'];
    }
   
}
?>