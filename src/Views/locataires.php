<?php
function afficherTableauLocataires(array $locataires): string {
    $tableau = "<table><tr><th>Id</th><th>Id Appartement Loué</th><th>Nom</th><th>Prénom</th><th>Gestion</th></tr>";
    
    foreach($locataires as $locataire) {
        $tableau .= "<tr><td>{$locataire->getId()}</td><td>{$locataire->getIdAppart()}</td><td>{$locataire->getNom()}</td><td>{$locataire->getPrenom()}</td><td><a href=\"http://immoflow.local/locataire/{$locataire->getId()}\">Details</a></td></tr>";
    }

    return $tableau . "</table>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des locataires</title>
    <!-- <link rel="stylesheet" href="./../Assets/css/style.css"> -->
    <style>
        table, th, td {
            border:1px solid black;
        }
    </style>
</head>
<body>
    <h1>
        Liste des locataires
    </h1>
    <a href="http://immoflow.local">Retour</a>
    <hr>
    <div><?= afficherTableauLocataires($locataires) ?></div>
</body>
</html>