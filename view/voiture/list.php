<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        
        foreach ($tab_v as $v)
            echo '<p> Voiture <a href="/php-tp-mvc/controller/routeur.php?action=read&immat=' . $v->getImmatriculation() . '">d\'immatriculation ' . $v->getImmatriculation() . '</a>.</p>';
        ?>
    </body>
</html>