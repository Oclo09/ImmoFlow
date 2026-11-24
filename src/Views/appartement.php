<?php
function afficherDetailsAppart($appartement): string {
    $details = "<p><strong>Id:</strong> {$appartement->getId()}</p>
                <p><strong>Numéro:</strong> {$appartement->getNumero()}</p>
                <p><strong>Nombre de pièce(s):</strong> {$appartement->getNbrPiece()}</p>
                <p><strong>Prix de location:</strong> {$appartement->getPrixLocation()} CHF</p>
                <p><strong>Status:</strong> {$appartement->getStatut()}</p>
                <p><strong>Date de création:</strong> {$appartement->getCreeLe()}</p>";

    return $details;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details appartement</title>
</head>
<body>
    <h1>
        Details de l'appartement
    </h1>
    <a href="http://immoflow.local/appartements">Retour</a>
    <hr>
    <div><?= afficherDetailsAppart($appartement) ?></div>
</body>
</html>