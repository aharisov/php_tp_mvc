<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Détails de la voiture</title>
    </head>
    <body>
        <a href="/php-tp-mvc/controller/routeur.php?action=readAll">Retour</a>
        <?php
        
        echo "<h1>Les données de la voiture</h1>";
        echo "<p>L'immatriculation - " . $v->getImmatriculation() . "</p>";
        echo "<p>La marque - " . $v->getMarque() . "</p>";
        echo "<p>Le couleur - " . $v->getCouleur() . "</p><hr>";
        
        ?>
    </body>
</html>