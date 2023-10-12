<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crée une voiture</title>
</head>
<body>
    <h1>Crée une voiture</h1>

    <form method="get" action="../controller/routeur.php">
        <input type="hidden" name="action" value="created">
        <fieldset>
          <legend>Mon formulaire :</legend>
          <p>
            <label for="immat_id">Immatriculation</label> :
            <input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id" required/>
          </p>
          <p>
            <label for="marque">Marque</label> :
            <input type="text" placeholder="Ex : BMW" name="marque" id="marque" required/>
          </p>
          <p>
            <label for="couleur">Couleur</label> :
            <input type="text" placeholder="Ex : noir" name="couleur" id="couleur" required/>
          </p>
          <p>
            <input type="submit" value="Envoyer" />
          </p>
        </fieldset> 
    </form>
</body>
</html>