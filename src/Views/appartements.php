<?php
function afficherTableauApparts(array $appartements): string {
    $tableau = "<table><tr><th>Id</th><th>Numéro</th><th>Nombre de pièce(S)</th><th>Gestion</th></tr>";
    
    foreach($appartements as $apppartement) {
        $tableau .= "<tr><td>{$apppartement->getId()}</td><td>{$apppartement->getNumero()}</td><td>{$apppartement->getNbrPiece()}</td><td><a href=\"http://immoflow.local/appartement/{$apppartement->getId()}\">Details</a></td></tr>";
    }

    return $tableau . "</table>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste d'appartements</title>
    <!-- <link rel="stylesheet" href="./../Assets/css/style.css"> -->
    <style>
        table, th, td {
            border:1px solid black;
        }
    </style>
</head>
<body>
    <h1>
        Liste des appartements
    </h1>
    <a href="http://immoflow.local">Retour</a>
    <hr>
    <div><?= afficherTableauApparts($appartements) ?></div>
</body>
</html>