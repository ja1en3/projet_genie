<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration commande</title>
</head>
<body>
    <h1>Modifier le statut de la commande {{ id }}</h1>
    <form method="post">
        <label for="code">Code admin :</label>
        <input type="password" id="code" name="code" required>
        <br><br>
        <label for="statut">Nouveau statut :</label>
        <select id="statut" name="statut">
            <option>En attente</option>
            <option>En cours</option>
            <option>Livrée</option>
            <option>Annulée</option>
        </select>
        <br><br>
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
