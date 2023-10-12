<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Détails de la voiture</title>
    </head>
    <body>
        <?php
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        
        echo "<h1>La voiture avec l'immatriculation " . $_GET["immat"] . " n'existe pas</h1>";
        ?>

        <a href="/php-tp-mvc/controller/routeur.php?action=readAll">Retour</a>
    </body>
</html>