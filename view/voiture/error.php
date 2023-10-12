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
            
            if ($v["exist"] === true) {
                echo "<h1>La voiture avec l'immatriculation " . $v["immat"] . " déjà existe</h1>";
                echo '<a href="/php-tp-mvc/controller/routeur.php?action=create">Retour</a>';
            } else {
                echo "<h1>La voiture avec l'immatriculation " . $v["immat"] . " n'existe pas</h1>";
                echo '<a href="/php-tp-mvc/controller/routeur.php?action=readAll">Retour</a>';
            }
        ?>
    </body>
</html>