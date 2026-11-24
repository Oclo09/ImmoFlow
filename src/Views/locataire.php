<?php
function afficherDetailsLocataire($locataire): string {
    $details = "<p><strong>Id:</strong> {$locataire->getId()}</p>
                <p><strong>Nom :</strong> {$locataire->getNom()}</p>
                <p><strong>Prénom:</strong> {$locataire->getPrenom()}</p>
                <p><strong>Email:</strong> {$locataire->getEmail()}</p>
                <p><strong>Numéro de téléphone:</strong> {$locataire->getNumTel()}</p>
                <p><strong>Id appartement loué:</strong> {$locataire->getIdAppart()}</p>
                <p><strong>Date de location:</strong> {$locataire->getLoueLe()}</p>";

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
    <a href="http://immoflow.local/locataires">Retour</a>
    <hr>
    <div><?= afficherDetailsLocataire($locataire) ?></div>
</body>
</html>