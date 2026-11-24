<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Appart</title>
</head>
<body>
    <h1>
        Ajouts Appartement
    </h1>
    <a href="http://immoflow.local/appartements">Retour</a>
    <hr>
    <form method="POST">
        <div>
            <label for="numero">Numéro:</label>
            <input type="text" id="numero" name="numero" placeholder="A01" required>
        </div>
        <div>
            <label for="nbrPiece">Nombre de pièce(s):</label>
            <input type="number" id="nbrPiece" name="nbrPiece" min="1" required>
        </div>
        <div>
            <label for="prixLocation">Prix de location (CHF):</label>
            <input type="number" id="prixLocation" name="prixLocation" min="0" required>
        </div>
        <div>
            <label for="statut">Statut:</label>
            <select id="statut" name="statut">
                <option value="Disponible">Disponible</option>
                <option value="Occupé">Occupé</option>
            </select>
        </div>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>